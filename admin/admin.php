<?php
// admin.php → Central Admin Controller (Login Only for new system)
// This handles only Admin Login and Logout
// No CRUD or dashboard yet

session_start(); // Start session for login

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../classes/Affiliation.php';

// Determine action: 'login' or 'logout'
// If not set, default to 'login'
$action = $_POST['action'] ?? $_GET['action'] ?? 'login';

// If admin already logged in, redirect to dashboard later (for now just login)
if (!isset($_SESSION['admin_logged_in']) && $action !== 'login') {
    $action = 'login';
}

// ROUTING: Decide which function to run based on 'action'
switch ($action) {
    case 'login':
        login();
        break;

    case 'logout':
        logout();
        break;

   case 'dashboard':
        dashboard();
        break;

   // Affiliation management
   case 'newAffiliation':
    newAffiliation();
    break;

  case 'manageAffiliations':
    manageAffiliations();
    break;

  case 'editAffiliation':
    editAffiliation();
    break;

    default:
        login(); // Default to login page
        break;
}

// ----------------------------
// FUNCTIONS
// ----------------------------

/**
 * login() → Shows login form and handles login submission
 */
function login() {
    global $pdo;
    $errorMessage = ''; // Variable to store error messages

    // Check if form submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = trim($_POST['username'] ?? '');
        $password = $_POST['password'] ?? '';

        // Simple validation
        if ($username && $password) {

            // Prepare PDO statement to prevent SQL injection
           $stmt = $pdo->prepare("SELECT * FROM admin WHERE email = :email");
$stmt->execute([
    'email' => $username
]);

$admin = $stmt->fetch(PDO::FETCH_ASSOC);

if ($admin && password_verify($password, $admin['password_hash'])) {

    $_SESSION['admin_logged_in'] = true;
    $_SESSION['admin_username'] = $admin['name'];

    header("Location: admin.php?action=dashboard");
    exit;

} else {
    $errorMessage = "Invalid username or password!";
}

        } else {
            $errorMessage = "Please enter both username and password!";
        }
    }

    // Include login template (we'll use your login_form.php)
    // Pass $errorMessage as $results['errorMessage'] for compatibility
    $results = ['errorMessage' => $errorMessage];
    require __DIR__ . "/templates/common/login_form.php";
}

/**
 * logout() → Logs out admin and destroys session
 */
function logout() {
    // Remove Remember Me cookie if exists
    if (isset($_COOKIE['remember_admin'])) {
        setcookie('remember_admin', '', time() - 3600, "/");
    }

    // Destroy all session data
    session_destroy();

    // Redirect to login page
    header("Location: " . BASE_URL . "/admin/admin.php?action=login");

    exit;
}

/**
 * dashboard() → Shows admin dashboard after login
 */
function dashboard() {

    // Security check → if not logged in redirect to login
    if (!isset($_SESSION['admin_logged_in'])) {
        header("Location: " . BASE_URL . "/admin/admin.php?action=login");
        exit;
    }

    // You can pass admin name to template if needed
    $adminName = $_SESSION['admin_username'] ?? 'Admin';

    // Load dashboard template
    require __DIR__ . "/templates/common/dashboard.php";
}

// -------------------------
// AFFILIATION MANAGEMENT
// -------------------------
function newAffiliation() {

    global $pdo;

    $results = [
        'message'   => '',
        'pageTitle' => 'Add New Affiliation'
    ];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $club_name = trim($_POST['club_name'] ?? '');
        $address   = trim($_POST['address'] ?? '');
        $phone     = trim($_POST['phone'] ?? '');
        $email     = trim($_POST['email'] ?? '');
        $website   = trim($_POST['website'] ?? '');
        $state     = trim($_POST['state'] ?? '');
        $country   = trim($_POST['country'] ?? '');
        $type      = $_POST['type'] ?? 'national';
        $status    = $_POST['status'] ?? 'active';

        $logoName = null;

        if (empty($club_name) || empty($country)) {

            $results['message'] = "Club name and Country are required!";

        } else {

            //  LOGO UPLOAD
            if (!empty($_FILES['logo']['name'])) {

                $uploadDir = $_SERVER['DOCUMENT_ROOT'] . "/ca-parvaar-club-web/uploads/affiliations/";

                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                $logoName = time() . "_" . basename($_FILES['logo']['name']);
                $targetPath = $uploadDir . $logoName;

                if (!move_uploaded_file($_FILES['logo']['tmp_name'], $targetPath)) {
                    $results['message'] = "Logo upload failed!";
                }
            }

            // INSERT
            $stmt = $pdo->prepare("
                INSERT INTO affiliations 
                (club_name, address, phone, email, website, logo, state, country, type, status)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
            ");

            $success = $stmt->execute([
                $club_name,
                $address,
                $phone,
                $email,
                $website,
                $logoName,
                $state,
                $country,
                $type,
                $status
            ]);

            if ($success) {

                $results['message'] = "Affiliation added successfully!";
                $_POST = [];

            } else {
                $results['message'] = "Error adding affiliation!";
            }
        }
    }

    require TEMPLATE_PATH . "/affiliation/add_affiliation.php";
}

// -------------------------
// MANAGE AFFILIATIONS
// -------------------------
function manageAffiliations() {

    global $pdo;

    $results = [
        'pageTitle'   => 'Manage Affiliations',
        'message'     => '',
        'affiliations'=> [],
        'currentPage' => 1,
        'totalPages'  => 1,
        'total'       => 0,
        'perPage'     => 10
    ];

    // -------------------------
    // DELETE LOGIC
    // -------------------------
    if (!empty($_GET['delete'])) {

        $id = (int) $_GET['delete'];

        $stmt = $pdo->prepare("DELETE FROM affiliations WHERE id = ?");
        if ($stmt->execute([$id])) {
            $results['message'] = "Affiliation deleted successfully!";
        } else {
            $results['message'] = "Error deleting affiliation!";
        }
    }

    // -------------------------
    // PAGINATION
    // -------------------------
    $page    = max(1, (int)($_GET['page'] ?? 1));
    $perPage = $results['perPage'];
    $offset  = ($page - 1) * $perPage;

    // Total count
    $total = $pdo->query("SELECT COUNT(*) FROM affiliations")->fetchColumn();

    $totalPages = ceil($total / $perPage);

    // Fetch records
    $stmt = $pdo->prepare("
        SELECT * FROM affiliations 
        ORDER BY id DESC 
        LIMIT :limit OFFSET :offset
    ");

    $stmt->bindValue(':limit', $perPage, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();

    $affiliations = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Store in results
    $results['affiliations'] = $affiliations;
    $results['currentPage']  = $page;
    $results['totalPages']   = $totalPages;
    $results['total']        = $total;

    // Load view
    require TEMPLATE_PATH . "/affiliation/manage_affiliations.php";
}

// -------------------------
// EDIT AFFILIATION
// -------------------------
function editAffiliation() {

    global $pdo;

    $id = $_GET['id'] ?? 0;

    // Get existing data
    $affiliation = Affiliation::getById($pdo, $id);

    if (!$affiliation) {
        die("Affiliation not found");
    }

    $results = [
        'pageTitle' => 'Edit Affiliation',
        'affiliation' => $affiliation,
        'message' => ''
    ];

    // If form submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $data = $_POST;

        //  KEEP OLD LOGO BY DEFAULT
        $logoName = $affiliation['logo'];

        // Upload new logo if selected
        if (!empty($_FILES['logo']['name'])) {

            $uploadDir = $_SERVER['DOCUMENT_ROOT'] . "/ca-parvaar-club-web/uploads/affiliations/";

            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            $logoName = time() . "_" . basename($_FILES['logo']['name']);
            $target   = $uploadDir . $logoName;

            if (move_uploaded_file($_FILES['logo']['tmp_name'], $target)) {

                // Delete old logo (optional but professional)
                if (!empty($affiliation['logo']) && file_exists($uploadDir . $affiliation['logo'])) {
                    unlink($uploadDir . $affiliation['logo']);
                }

            } else {
                $results['message'] = "Logo upload failed!";
            }
        }

        // Save logo name in data
        $data['logo'] = $logoName;

        // Update database
        $updated = Affiliation::update($pdo, $id, $data);

        if ($updated) {
            $results['message'] = "Affiliation updated successfully!";
            $results['affiliation'] = Affiliation::getById($pdo, $id);
        } else {
            $results['message'] = "Error updating affiliation!";
        }
    }

    require TEMPLATE_PATH . "/affiliation/edit_affiliation.php";
}
