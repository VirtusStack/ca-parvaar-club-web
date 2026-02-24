<?php
// templates/include/sidebar.php
// Admin Sidebar Navigation (SB Admin 2)
?>

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php?action=dashboard">
        <div class="sidebar-brand-icon">
            <i class="fas fa-user-shield"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin Panel</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="admin.php?action=dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

<!-- Affiliations Module -->
<li class="nav-item">

    <a class="nav-link collapsed"
       href="#"
       data-toggle="collapse"
       data-target="#collapseAffiliation"
       aria-expanded="true"
       aria-controls="collapseAffiliation">

        <i class="fas fa-fw fa-handshake"></i>
        <span>Affiliations</span>
    </a>

    <div id="collapseAffiliation"
         class="collapse"
         aria-labelledby="headingAffiliation"
         data-parent="#accordionSidebar">

        <div class="bg-white py-2 collapse-inner rounded">

            <a class="collapse-item"
               href="admin.php?action=newAffiliation">
                Add Affiliation
            </a>

            <a class="collapse-item"
               href="admin.php?action=manageAffiliations">
                Manage Affiliations
            </a>

        </div>
    </div>
</li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Logout -->
    <li class="nav-item">
        <a class="nav-link" href="admin.php?action=logout">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
    </li>

</ul>
<!-- End of Sidebar -->
