<?php
// /templates/affiliation/edit_affiliation.php
// -------------------------------------------------
// View file: Displays Edit Affiliation form
// Prefilled with existing data
// Same layout as Add Affiliation

if (!isset($results)) {
    $results = [
        'pageTitle' => 'Edit Affiliation',
        'affiliation' => [],
        'message' => ''
    ];
}

$aff = $results['affiliation'];
?>

<?php include __DIR__ . "/../include/header.php"; ?>

<div id="wrapper">

    <!-- Sidebar -->
    <?php include __DIR__ . "/../include/sidebar.php"; ?>

    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">

            <!-- Navbar -->
            <?php include __DIR__ . "/../include/navbar.php"; ?>

            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800">
                    <?= htmlspecialchars($results['pageTitle']) ?>
                </h1>

                <!-- Message -->
                <?php if (!empty($results['message'])): ?>
                    <div class="alert <?= (stripos($results['message'], 'success') !== false) ? 'alert-success' : 'alert-danger' ?>">
                        <?= htmlspecialchars($results['message']) ?>
                    </div>
                <?php endif; ?>

                <!-- Edit Form Card -->
                <div class="card shadow mb-4">
                    <div class="card-body">

                        <!-- Form submits to admin controller -->
                        <form method="POST"
                              action="<?= BASE_URL ?>/admin/admin.php?action=editAffiliation&id=<?= $aff['id'] ?>"
                              enctype="multipart/form-data">

                            <!-- Club Name -->
                            <div class="form-group mb-3">
                                <label>Club Name *</label>
                                <input type="text"
                                       name="club_name"
                                       class="form-control"
                                       required
                                       value="<?= htmlspecialchars($aff['club_name'] ?? '') ?>">
                            </div>

                            <!-- Address -->
                            <div class="form-group mb-3">
                                <label>Address</label>
                                <textarea name="address"
                                          class="form-control"><?= htmlspecialchars($aff['address'] ?? '') ?></textarea>
                            </div>

                            <!-- Phone -->
                            <div class="form-group mb-3">
                                <label>Phone</label>
                                <input type="text"
                                       name="phone"
                                       class="form-control"
                                       value="<?= htmlspecialchars($aff['phone'] ?? '') ?>">
                            </div>

                            <!-- Email -->
                            <div class="form-group mb-3">
                                <label>Email</label>
                                <input type="text"
                                       name="email"
                                       class="form-control"
                                       value="<?= htmlspecialchars($aff['email'] ?? '') ?>">
                            </div>

                            <!-- Website -->
                            <div class="form-group mb-3">
                                <label>Website</label>
                                <input type="text"
                                       name="website"
                                       class="form-control"
                                       value="<?= htmlspecialchars($aff['website'] ?? '') ?>">
                            </div>

                            <!-- State -->
                            <div class="form-group mb-3">
                                <label>State</label>
                                <input type="text"
                                       name="state"
                                       class="form-control"
                                       value="<?= htmlspecialchars($aff['state'] ?? '') ?>">
                            </div>

                            <!-- Country -->
                            <div class="form-group mb-3">
                                <label>Country *</label>
                                <input type="text"
                                       name="country"
                                       class="form-control"
                                       required
                                       value="<?= htmlspecialchars($aff['country'] ?? '') ?>">
                            </div>

                            <!-- Type -->
                            <div class="form-group mb-3">
                                <label>Type *</label>
                                <select name="type" class="form-control" required>
                                    <option value="national" <?= ($aff['type'] == 'national') ? 'selected' : '' ?>>National</option>
                                    <option value="international" <?= ($aff['type'] == 'international') ? 'selected' : '' ?>>International</option>
                                </select>
                            </div>

                            <!-- Status -->
                            <div class="form-group mb-3">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="active" <?= ($aff['status'] == 'active') ? 'selected' : '' ?>>Active</option>
                                    <option value="inactive" <?= ($aff['status'] == 'inactive') ? 'selected' : '' ?>>Inactive</option>
                                </select>
                            </div>

                            <!-- Current Logo Preview -->
                            <div class="form-group mb-3">
                                <label>Current Logo</label><br>

                                <?php if (!empty($aff['logo'])): ?>
                                    <img src="<?= BASE_URL ?>/uploads/affiliations/<?= htmlspecialchars($aff['logo']) ?>"
                                         width="80"
                                         style="object-fit:contain;">
                                <?php else: ?>
                                    <span>No Logo</span>
                                <?php endif; ?>
                            </div>

                            <!-- Upload New Logo -->
                            <div class="form-group mb-3">
                                <label>Change Logo</label>
                                <input type="file" name="logo" class="form-control">
                            </div>

                            <!-- Submit -->
                            <button type="submit" class="btn btn-primary">
                                Update Affiliation
                            </button>

                            <a href="<?= BASE_URL ?>/admin/admin.php?action=manageAffiliations"
                               class="btn btn-secondary">
                                Cancel
                            </a>

                        </form>

                    </div>
                </div>

            </div>
        </div>

        <?php include __DIR__ . "/../include/footer.php"; ?>

    </div>
</div>
