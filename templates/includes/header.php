<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>CA Parivaar Club</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Bootstrap Icons ONLY -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

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
 <li class="dropdown <?= in_array($currentPage, ['about.php','source-of-inspiration.php','message-from-chairperson.php']) ? 'active' : '' ?>">
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
  'indoor-amenities.php',
  'outdoor-amenities.php',
  'conferences-trainings.php',
  'organic-farming.php',
   'Celebration-time.php'
]) ? 'active dropdown' : 'dropdown' ?>">

  <a href="amenities.php">Amenities</a>

  <ul class="dropdown-menu">
    <li><a href="indoor-amenities.php">Indoor Amenities</a></li>
    <li><a href="outdoor-amenities.php">Outdoor Amenities</a></li>
    <li><a href="conferences-trainings.php">Conferences Trainings</a></li>
    <li><a href="organic-farming.php">Organic Farming</a></li>
    <li><a href="Celebration-time.php">Celebration Time</a></li>
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
  'membership-benefits.php',
 
]) ? 'active dropdown' : 'dropdown' ?>">

  <a href="#">Membership</a>

  <ul class="dropdown-menu">
    <li><a href="membership.php">Membership Form</a></li>
    <li><a href="membership-benefits.php"> Membership Benefits </a></li>
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
          <li><a href="shooting.php">Shooting</a></li>
          <li><a href="wedding.php">Wedding</a></li>
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
