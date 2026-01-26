<?php
$currentPage = basename($_SERVER['PHP_SELF']);
include __DIR__ . '/templates/includes/header.php';
?>

<!-- ===== BANNER ===== -->
<section class="ca-banner" style="background-image:url('assets/images/club/conference-banner.jpg')">
  <div class="ca-banner-overlay">
    <div class="ca-breadcrumb">
      <a href="index.php">Home</a>»  Club  » <strong>Wedding</strong>
    </div>
  </div>
</section>

<!-- ===== TITLE ===== -->
<section class="ca-page-title">
  <h1>Wedding</h1>
<p class="ca-page-subtitle">Spread across 18 acres</p>
</section>

<section class="ca-conference-wrapper">
  <div class="ca-conference-container">

    <!-- IMAGE -->
    <div class="ca-conference-left">
      <img src="assets/images/club/wedding.png" alt="wedding">
    </div>

    <!-- CONTENT -->
    <div class="ca-conference-right">

      <h3 class="ca-conference-title">
        <span></span> Plan Your Wedding
      </h3>

      <p>
       Celebrations are a part of life that mark memorable occasions like Weddings,
       Engagements, Birthdays or other important rituals of various religious faiths
       and traditions. CA PARIWAR CLUB has a variety of venues for you to celebrate 
	with grandeur. Choose the best suited for you depending upon your requirement
        of size and the budget of your celebrations.
      </p>

      <strong>Our USP’s:</strong>

      <ul>
        <li>Bespoke Decor.</li>
        <li>100% Power back-up.</li>
        <li>Customized Ambiance.</li>
        <li>Delectable Cuisines.</li>
        <li>Unmatched Hospitality.</li>
        <li>Personalized Service.</li>
      </ul>

    </div>
  </div>
</section>

<?php include __DIR__ . '/templates/includes/proximity.php'; ?>

<?php include __DIR__ . '/templates/includes/footer.php'; ?>
