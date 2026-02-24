<?php
// templates/common/dashboard.php
// Admin Dashboard Page
// Uses SB Admin 2 layout 
// Security check (extra safety)
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: ../admin.php?action=login");
    exit;
}

?>

 <?php include __DIR__ . '/../include/header.php'; ?>
<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <?php include __DIR__ . '/../include/sidebar.php'; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <?php include __DIR__ . '/../include/navbar.php'; ?>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">


    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            Welcome, <?= htmlspecialchars($adminName) ?>
        </h1>
    </div>

    <div class="row">

        <!-- Affiliations Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">

                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Affiliations Module
                            </div>

                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                Manage Clubs
                            </div>
                        </div>
                       
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>

                    </div>

                    <!-- Button -->
                    <div class="mt-3">
                        <a href="admin.php?action=newAffiliation" class="btn btn-primary">
   			 Add Affiliation
			</a>
                    </div>

		    <div class="mt-3">
			<a href="admin.php?action=manageAffiliations" class="btn btn-success">
   			 Manage Affiliations
			</a>

                    </div>

                </div>
            </div>
        </div>

    </div>

</div>
<!-- End Page Content -->

<?php require_once __DIR__ . '/../include/footer.php'; ?>
