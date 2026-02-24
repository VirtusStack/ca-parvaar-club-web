<?php
// /templates/affiliation/add_affiliation.php
// ------------------------------------------
// View file: Displays Add Affiliation form
// Same layout as Subject module (SB Admin 2)


?>

<?php include __DIR__ . "/../include/header.php"; ?>

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <?php include __DIR__ . "/../include/sidebar.php"; ?>
    <!-- End Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Navbar -->
            <?php include __DIR__ . "/../include/navbar.php"; ?>
            <!-- End Navbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800">
                    <?= $results['pageTitle'] ?? 'Add Affiliation' ?>
                </h1>

                <!-- Feedback Message -->
                <?php if (!empty($results['message'])): ?>
                    <div class="alert <?= (stripos($results['message'], 'success') !== false) ? 'alert-success' : 'alert-danger' ?> alert-dismissible fade show">
                        <?= htmlspecialchars($results['message']) ?>
                        <button type="button" class="close" data-dismiss="alert">
                            <span>&times;</span>
                        </button>
                    </div>
                <?php endif; ?>

                <!-- Affiliation Form Card -->
                <div class="card shadow mb-4">
                    <div class="card-body">

                        <!-- Form submits to admin controller -->
                        <form method="POST" 
                              action="<?= BASE_URL ?>/admin/admin.php?action=newAffiliation"
                              enctype="multipart/form-data">

                            <!-- Club Name -->
                            <div class="form-group mb-3">
                                <label>Club Name *</label>
                                <input type="text" name="club_name" class="form-control" required
                                    value="<?= htmlspecialchars($results['club_name'] ?? '') ?>">
                            </div>

                            <!-- Address -->
                            <div class="form-group mb-3">
                                <label>Address</label>
                                <textarea name="address" class="form-control" rows="2"><?= htmlspecialchars($results['address'] ?? '') ?></textarea>
                            </div>

                            <!-- Phone -->
                            <div class="form-group mb-3">
                                <label>Phone</label>
                                <input type="text" name="phone" class="form-control"
                                    value="<?= htmlspecialchars($results['phone'] ?? '') ?>">
                            </div>

                            <!-- Email -->
                            <div class="form-group mb-3">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control"
                                    value="<?= htmlspecialchars($results['email'] ?? '') ?>">
                            </div>

                            <!-- Website -->
                            <div class="form-group mb-3">
                                <label>Website</label>
                                <input type="text" name="website" class="form-control"
                                    value="<?= htmlspecialchars($results['website'] ?? '') ?>">
                            </div>

                            <!-- State -->
                            <div class="form-group mb-3">
                                <label>State</label>
                                <input type="text" name="state" class="form-control"
                                    value="<?= htmlspecialchars($results['state'] ?? '') ?>">
                            </div>

                            <!-- Country -->
                            <div class="form-group mb-3">
                                <label>Country *</label>
                                <input type="text" name="country" class="form-control" required
                                    value="<?= htmlspecialchars($results['country'] ?? '') ?>">
                            </div>

                            <!-- Type -->
                            <div class="form-group mb-3">
                                <label>Type</label>
                                <select name="type" class="form-control">
                                    <option value="national">National</option>
                                    <option value="international">International</option>
                                </select>
                            </div>

                            <!-- Status -->
                            <div class="form-group mb-3">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>

                            <!-- Logo Upload -->
                            <div class="form-group mb-3">
                                <label>Logo</label>
                                <input type="file" name="logo" class="form-control">
                            </div>

                            <!-- Submit -->
                            <button type="submit" class="btn btn-primary">
                                Add Affiliation
                            </button>

                        </form>

                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End Main Content -->

        <!-- Footer -->
        <?php include __DIR__ . "/../include/footer.php"; ?>
        <!-- End Footer -->

    </div>
    <!-- End Content Wrapper -->

</div>
<!-- End Page Wrapper -->
