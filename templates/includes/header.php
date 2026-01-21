<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>CA Parivaar Club</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Bootstrap Icons ONLY -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/layout.css">
<link rel="stylesheet" href="assets/css/pages.css">
</head>
<body>

<div class="ca-header-wrapper">

  <!-- TOP BAR -->
  <div class="ca-topbar">
    <div class="ca-topbar-inner">
      <div>For Club Membership / Conference Seminar Call</div>
      <div class="top-right">
        <span><i class="bi bi-send-fill"></i> support@capariwarclub.com</span>
        <a href="#"><i class="bi bi-facebook"></i></a>
        <a href="#"><i class="bi bi-instagram"></i></a>
        <a href="#"><i class="bi bi-youtube"></i></a>
      </div>
    </div>
  </div>

<!-- ===== HEADER ===== -->
<header class="ca-header">

  <div class="ca-header-inner">

      <!-- ===== MOBILE HEADER ===== -->
      <div class="ca-mobile-header">
        <div class="ca-mobile-toggle">
          <i class="bi bi-list"></i>
        </div>
        <div class="ca-mobile-logo">
          <img src="assets/images/logo/logo-mobile.png" alt="CA Parivaar">
        </div>
      </div>

    <!-- LEFT MENU -->
    <ul class="ca-menu ca-menu-left">
 <li class="dropdown <?= in_array($currentPage, ['about.php','vision.php','team.php']) ? 'active' : '' ?>">
     <a href="#">About Us</a>
     <ul class="dropdown-menu">
    <li><a href="source-of-inspiration.php">Source Of Inspiration</a></li>
    <li><a href="message-from-chairperson.php">Message From Chairperson</a></li>
    <li><a href="governing-council.php">Governing Council</a></li>
     <li><a href="management-team.php">Management Team</a></li>
  </ul>
</li>

    <!-- AMENITIES -->
<li class="<?= in_array($currentPage, [
  'amenities.php',
  'indoor.php',
  'outdoor.php',
  'celebrations.php',
  'accommodation.php'
]) ? 'active dropdown' : 'dropdown' ?>">

  <a href="amenities.php">Amenities</a>

  <ul class="dropdown-menu">
    <li><a href="indoor.php">Indoor Amenities</a></li>
    <li><a href="outdoor.php">Outdoor Amenities</a></li>
    <li><a href="celebrations.php">Celebration Time</a></li>
    <li><a href="accommodation.php">Accommodation</a></li>
  </ul>
</li>

<li>
  <a href="affiliation.php" class="<?= ($currentPage == 'affiliation.php') ? 'active' : '' ?>">
    Affiliation
  </a>
</li>

     <!-- MEMBERSHIP -->
<li class="<?= in_array($currentPage, [
  'membership.php',
  'apply-membership.php',
  'benefits.php'
]) ? 'active dropdown' : 'dropdown' ?>">

  <a href="#">Membership</a>

  <ul class="dropdown-menu">
    <li><a href="membership.php">Membership Overview</a></li>
    <li><a href="apply-membership.php">Apply Membership</a></li>
    <li><a href="benefits.php">Benefits</a></li>
  </ul>
</li>

    </ul>

    <!-- LOGO -->
    <a href="index.php" class="ca-logo-wrap">
      <img src="assets/images/logo/ca-parvaar-logo.png" alt="CA Parivaar" />
    </a>

    <!-- RIGHT MENU -->
    <ul class="ca-menu ca-menu-right">
      <li class="dropdown">
        <a href="#">Club</a>
        <ul class="dropdown-menu">
          <li><a href="conference-meeting.php">Conference & Meeting</a></li>
          <li><a href="events.php">Shooting</a></li>
          <li><a href="facilities.php">Wedding</a></li>
        </ul>
      </li>

    <li>
  <a href="gallery.php" class="<?= ($currentPage == 'gallery.php') ? 'active' : '' ?>">
    Gallery
     </a>
    </li>

  <li>
    <a href="testimonial.php" class="<?= ($currentPage == 'testimonial.php') ? 'active' : '' ?>">
    Testimonial
  </a>
</li>

      <li>
      <a href="contact.php" class="<?= ($currentPage == 'contact.php') ? 'active' : '' ?>">
       Contact Us
     </a>
   </li>
    </ul>

  </div>
</header>
</div>


<!-- ================= MOBILE MENU ================= -->
<!-- MOBILE NAV -->
<div class="ca-nav-wrapper">

  <!-- YELLOW TOP BAR -->
  <div class="ca-mobile-menu-header">
    <span>All Categories</span>
    <button class="ca-menu-close">
      <i class="bi bi-x-lg"></i>
    </button>
  </div>

  <!-- MENU LIST -->
  <ul class="ca-mobile-menu">
    <li><a href="about.php">About</a></li>
    <li><a href="amenities.php">Amenities</a></li>
    <li><a href="affiliation.php">Affiliation</a></li>
    <li><a href="membership.php">Membership</a></li>
    <li><a href="club.php">Club</a></li>
    <li><a href="gallery.php">Gallery</a></li>
    <li><a href="testimonial.php">Testimonial</a></li>
    <li><a href="contact.php">Contact Us</a></li>
  </ul>

</div>

<!-- MOBILE OVERLAY  -->
<div class="ca-overlay"></div>

<script>
const toggle = document.querySelector('.ca-mobile-toggle');
const nav = document.querySelector('.ca-nav-wrapper');
const closeBtn = document.querySelector('.ca-menu-close');
const overlay = document.querySelector('.ca-overlay');

toggle.addEventListener('click', () => {
  nav.classList.add('active');
  overlay.classList.add('active');
});

closeBtn.addEventListener('click', closeMenu);
overlay.addEventListener('click', closeMenu);

function closeMenu() {
  nav.classList.remove('active');
  overlay.classList.remove('active');
}
</script>
