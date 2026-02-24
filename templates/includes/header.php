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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

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
     <!-- MOBILE HEADER -->
<div class="ca-mobile-header">
  <div class="ca-mobile-toggle">
    <i class="bi bi-list"></i>
  </div>
  <div class="ca-mobile-logo">
    <a href="index.php">
      <img src="assets/images/logo/logo-mobile.png" alt="CA Parivaar">
    </a>
  </div>
</div>


    <!-- LEFT MENU -->
    <ul class="ca-menu ca-menu-left">
<li class="dropdown <?= in_array($currentPage, [
  'source-of-inspiration.php',
  'message-from-chairperson.php',
  'governing-council.php',
  'management-team.php'
]) ? 'active' : '' ?>">
  <a href="#">About Us</a>
  <ul class="dropdown-menu">
    <li><a href="source-of-inspiration.php">Source Of Inspiration</a></li>
    <li><a href="message-from-chairperson.php">Message From Chairperson</a></li>
    <li><a href="governing-council.php">Governing Council</a></li>
    <li><a href="management-team.php">Management Team</a></li>
  </ul>
</li>


    <!-- AMENITIES -->
<?php
$amenitiesPages = [
  'amenities.php',
  'indoor-amenities.php',
  'outdoor-amenities.php',
  'conferences-trainings.php',
  'organic-farming.php',
  'Celebration-time.php',
  'premium-room.php',
  'deluxe-ac-room.php',
  'twinshare-room.php',
  'tripleshare-room.php'
];

$accomodationPages = [
  'premium-room.php',
  'deluxe-ac-room.php',
  'twinshare-room.php',
  'tripleshare-room.php'
];
?>

<!-- AMENITIES -->
<li class="<?= in_array($currentPage, $amenitiesPages) ? 'active dropdown' : 'dropdown' ?>">
  <a href="#">Amenities</a>

  <ul class="dropdown-menu">
    <li><a href="indoor-amenities.php">Indoor Amenities</a></li>
    <li><a href="outdoor-amenities.php">Outdoor Amenities</a></li>
    <li><a href="conferences-trainings.php">Conferences Trainings</a></li>
    <li><a href="organic-farming.php">Organic Farming</a></li>
    <li><a href="Celebration-time.php">Celebration Time</a></li>

    <!-- Nested dropdown -->
    <li class="dropdown <?= in_array($currentPage, $accomodationPages) ? 'active' : '' ?>">
      <a href="#">Accomodation</a>
      <ul class="dropdown-menu">
        <li><a href="premium-room.php">Premium</a></li>
        <li><a href="deluxe-ac-room.php">Deluxe AC Roon</a></li>
        <li><a href="twinshare-room.php">Twin Share Room</a></li>
        <li><a href="tripleshare-room.php">Triple Share Room</a></li>
      </ul>
    </li>

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
  <li class="dropdown <?= in_array($currentPage, [
      'conference-meeting.php',
      'shooting.php',
      'wedding.php'
  ]) ? 'active' : '' ?>">
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

<div class="ca-mobile-menu-header">
  <span class="menu-title">All Categories</span>
  <button class="ca-menu-close">
    <i class="bi bi-x-lg"></i>
  </button>
</div>

 
  <!-- MENU LIST -->
  <ul class="ca-mobile-menu main-menu">
  <li class="has-sub">
    <a href="#" data-target="aboutMenu">
      About Us <span class="arrow">›</span>
    </a>
  </li>

  <li class="has-sub">
    <a href="#" data-target="amenitiesMenu">
      Amenities <span class="arrow">›</span>
    </a>
  </li>

  <li><a href="affiliation.php">Affiliation</a></li>

   <li class="has-sub">
    <a href="#" data-target="membershipMenu">
      Membership <span class="arrow">›</span>
    </a>
  </li>

  <li class="has-sub">
    <a href="#" data-target="clubMenu">
      Club <span class="arrow">›</span>
    </a>
  </li>


  <li><a href="gallery.php">Gallery</a></li>
  <li><a href="testimonial.php">Testimonial</a></li>
  <li><a href="contact.php">Contact Us</a></li>
</ul>

<ul class="ca-mobile-menu submenu" id="aboutMenu">
   <li class="menu-back"><a href="#">Back</a></li> 
  <li><a href="source-of-inspiration.php">Source Of Inspiration</a></li>
  <li><a href="message-from-chairperson.php">Message From Chairperson</a></li>
  <li><a href="governing-council.php">Governing Council</a></li>
  <li><a href="management-team.php">Management Team</a></li>
</ul>

<ul class="ca-mobile-menu submenu" id="amenitiesMenu">
   <li class="menu-back"><a href="#">Back</a></li> 
  <li><a href="indoor-amenities.php">Indoor Amenities</a></li>
  <li><a href="outdoor-amenities.php">Outdoor Amenities</a></li>
  <li><a href="conferences-trainings.php">Conferences & Trainings</a></li>
  <li><a href="organic-farming.php">Organic Farming</a></li>
   <li><a href="Celebration-time.php">Celebration Time</a></li> 
</ul>

<ul class="ca-mobile-menu submenu" id="membershipMenu">
    <li class="menu-back"><a href="#">Back</a></li> 
   <li><a href="#">Membership Form</a></li>
  <li><a href="memebership_benifit.php">Membership Benefit</a></li>
</ul>

<ul class="ca-mobile-menu submenu" id="clubMenu">
    <li class="menu-back"><a href="#">Back</a></li> 
   <li><a href="conference-meeting.php">Conference & Meeting</a></li>
  <li><a href="shooting.php">Shooting</a></li>
  <li><a href="wedding.php">Wedding</a></li>
</ul>
  

</div>
<!-- MOBILE OVERLAY  -->
<div class="ca-overlay"></div>
<script>
document.addEventListener('DOMContentLoaded', function () {

  const toggle = document.querySelector('.ca-mobile-toggle');
  const nav = document.querySelector('.ca-nav-wrapper');
  const overlay = document.querySelector('.ca-overlay');
  const closeBtn = document.querySelector('.ca-menu-close');
  const backBtn = document.querySelector('.ca-menu-back');
  const title = document.querySelector('.menu-title');

  const menuLinks = document.querySelectorAll('.has-sub a[data-target]');
  const submenus = document.querySelectorAll('.submenu');

  // OPEN MENU
  toggle.addEventListener('click', () => {
    nav.classList.add('active');
    overlay.classList.add('active');
    title.textContent = 'All Categories';
    nav.classList.remove('show-submenu');
  });

  // CLOSE MENU
  closeBtn.addEventListener('click', closeMenu);
  overlay.addEventListener('click', closeMenu);

  function closeMenu() {
    nav.classList.remove('active');
    overlay.classList.remove('active');
    nav.classList.remove('show-submenu');
    submenus.forEach(s => s.classList.remove('active'));
    title.textContent = 'All Categories';
  }

  // OPEN SUBMENU (CA PARIVAAR STYLE)
  menuLinks.forEach(link => {
    link.addEventListener('click', e => {
      e.preventDefault();
      const id = link.dataset.target;

      submenus.forEach(s => s.classList.remove('active'));
      document.getElementById(id).classList.add('active');

      nav.classList.add('show-submenu');
      title.textContent = link.childNodes[0].textContent.trim();

    });
  });

 // NEW
document.querySelectorAll('.menu-back a').forEach(btn => {
  btn.addEventListener('click', e => {
    e.preventDefault();
    nav.classList.remove('show-submenu');
    submenus.forEach(s => s.classList.remove('active'));
    title.textContent = 'All Categories';
  });
});


});
</script>
