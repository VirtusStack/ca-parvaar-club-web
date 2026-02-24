<?php
// /templates/affiliation/manage_affiliations.php
// -------------------------
// Displays all affiliations with Edit/Delete actions
// Includes pagination

$results = $results ?? [
    'pageTitle'     => 'Manage Affiliations',
    'message'       => '',
    'affiliations'  => [],
    'currentPage'   => 1,
    'totalPages'    => 1,
    'total'         => 0,
    'perPage'       => 10
];

$affiliations = $results['affiliations'];
$currentPage  = (int)($results['currentPage'] ?? 1);
$totalPages   = (int)($results['totalPages'] ?? 1);
$total        = (int)($results['total'] ?? count($affiliations));
$perPage      = (int)($results['perPage'] ?? count($affiliations));
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

                <!-- Page Heading + Add Button -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1 class="h3 text-gray-800"><?= htmlspecialchars($results['pageTitle']) ?></h1>

                    <a href="<?= BASE_URL ?>/admin/admin.php?action=newAffiliation" class="btn btn-primary">
                        <i class="bi bi-plus-circle"></i> Add Affiliation
                    </a>
                </div>

                <!-- Feedback Message -->
                <?php if (!empty($results['message'])): ?>
                    <div class="alert <?= (stripos($results['message'], 'success') !== false) ? 'alert-success' : 'alert-danger' ?> alert-dismissible fade show">
                        <?= htmlspecialchars($results['message']) ?>
                        <button type="button" class="close" data-dismiss="alert">
                            <span>&times;</span>
                        </button>
                    </div>
                <?php endif; ?>

                <!-- Affiliations Table -->
                <div class="card shadow mb-4">

                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-gray-800">
                            <?= htmlspecialchars($results['pageTitle']) ?>
                        </h6>
                    </div>

                    <div class="card-body">

                        <div class="table-responsive">

                            <table class="table table-bordered table-striped">

                                <thead class="table-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Logo</th>
                                        <th>Club Name</th>
                                        <th>State</th>
                                        <th>Country</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th>Created</th>
                                    
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php if (!empty($affiliations)): ?>

                                        <?php foreach ($affiliations as $row): ?>

                                            <tr>
                                                <td><?= $row['id'] ?></td>

                                                <td>
                                                    <?php if (!empty($row['logo'])): ?>
                                                        <img src="<?= BASE_URL ?>/uploads/affiliations/<?= htmlspecialchars($row['logo']) ?>"
                                                             width="50" height="50"
                                                             style="object-fit:contain;">
                                                    <?php else: ?>
                                                        -
                                                    <?php endif; ?>
                                                </td>

                                                <td><?= htmlspecialchars($row['club_name']) ?></td>
                                                <td><?= htmlspecialchars($row['state'] ?? '-') ?></td>
                                                <td><?= htmlspecialchars($row['country']) ?></td>
                                                <td><?= htmlspecialchars($row['type']) ?></td>
                                                <td><?= htmlspecialchars($row['status']) ?></td>
                                                <td>

                                                    <!-- Edit -->
                                                   <a class="btn btn-sm btn-warning"
   					            href="<?= BASE_URL ?>/admin/admin.php?action=editAffiliation&id=<?= $row['id'] ?>">
   							Edit
						   </a>

                                                    <!-- Delete -->
                                                    <a class="btn btn-sm btn-danger"
                                                       href="<?= BASE_URL ?>/admin/admin.php?action=manageAffiliations&delete=<?= $row['id'] ?>"
                                                       onclick="return confirm('Are you sure you want to delete this affiliation?');">
                                                       Delete
                                                    </a>

                                                </td>
                                            </tr>

                                        <?php endforeach; ?>

                                    <?php else: ?>

                                        <tr>
                                            <td colspan="9" class="text-center">
                                                No affiliations found.
                                            </td>
                                        </tr>

                                    <?php endif; ?>

                                </tbody>

                            </table>

                        </div>

                        <!-- Pagination -->
                        <?php if ($totalPages >= 1): ?>

                        <nav class="mt-4">

                            <ul class="pagination justify-content-center align-items-center">

                                <!-- Prev -->
                                <li class="page-item <?= ($currentPage <= 1) ? 'disabled' : '' ?>">
                                    <a class="page-link"
                                       href="<?= BASE_URL ?>/admin/admin.php?action=manageAffiliations&page=<?= max(1, $currentPage - 1) ?>">
                                       Prev
                                    </a>
                                </li>

                                <?php
                                $start = max(1, $currentPage - 2);
                                $end   = min($totalPages, $currentPage + 2);

                                for ($i = $start; $i <= $end; $i++):
                                ?>

                                    <li class="page-item <?= ($i == $currentPage) ? 'active' : '' ?>">
                                        <a class="page-link"
                                           href="<?= BASE_URL ?>/admin/admin.php?action=manageAffiliations&page=<?= $i ?>">
                                           <?= $i ?>
                                        </a>
                                    </li>

                                <?php endfor; ?>

                                <!-- Next -->
                                <li class="page-item <?= ($currentPage >= $totalPages) ? 'disabled' : '' ?>">
                                    <a class="page-link"
                                       href="<?= BASE_URL ?>/admin/admin.php?action=manageAffiliations&page=<?= min($totalPages, $currentPage + 1) ?>">
                                       Next
                                    </a>
                                </li>

                                <!-- Go To -->
                                <li class="page-item ms-3">

                                    <form method="get" action="<?= BASE_URL ?>/admin/admin.php" class="form-inline">

                                        <input type="hidden" name="action" value="manageAffiliations">

                                        <input type="number"
                                               min="1"
                                               max="<?= $totalPages ?>"
                                               name="page"
                                               class="form-control form-control-sm mr-2"
                                               style="width:70px"
                                               value="<?= $currentPage ?>">

                                        <button type="submit" class="btn btn-sm btn-primary">
                                            Go
                                        </button>

                                    </form>

                                </li>

                            </ul>

                        </nav>

                        <?php endif; ?>

                    </div>
                </div>

            </div>
        </div>

        <!-- Footer -->
        <?php include __DIR__ . "/../include/footer.php"; ?>

    </div>
</div>
