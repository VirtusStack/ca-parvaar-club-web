<?php
require_once "../config/config.php"; // adjust path if needed

// Check if form is submitted
if (isset($_POST['import'])) {

    // Check file uploaded
    if (!empty($_FILES['csv_file']['tmp_name'])) {

        $file = fopen($_FILES['csv_file']['tmp_name'], "r");

        // Skip header row
        fgetcsv($file);

        // Prepare SQL using PDO (prevents SQL injection)
        $stmt = $pdo->prepare("
            INSERT INTO affiliations
            (club_name, address, phone, email, website, logo, state, country, type, status)
            VALUES
            (:club_name, :address, :phone, :email, :website, :logo, :state, :country, :type, :status)
        ");

        // Read CSV rows
        while (($row = fgetcsv($file, 1000, ",")) !== false) {

            /*
             CSV column order:
             0 = srno (ignored)
             1 = club_name
             2 = address
             3 = phone
             4 = email
             5 = website
             6 = logo
             7 = state
             8 = country
             9 = type
             10 = status
            */

            $stmt->execute([
                ':club_name' => trim($row[1]),
                ':address'   => trim($row[2]),
                ':phone'     => trim($row[3]),
                ':email'     => trim($row[4]),
                ':website'   => trim($row[5]),
                ':logo'      => trim($row[6]),
                ':state'     => trim($row[7]),
                ':country'   => trim($row[8]),
                ':type'      => trim($row[9]),
                ':status'    => trim($row[10])
            ]);
        }

        fclose($file);

        echo "<p style='color:green;'>CSV imported successfully</p>";

    } else {
        echo "<p style='color:red;'>Please upload a CSV file</p>";
    }
}
?>

<!-- CSV Upload Form -->
<form method="post" enctype="multipart/form-data">
    <input type="file" name="csv_file" accept=".csv" required>
    <br><br>
    <button type="submit" name="import">Import CSV</button>
</form>
