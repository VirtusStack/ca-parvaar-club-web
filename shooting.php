<?php
$currentPage = basename($_SERVER['PHP_SELF']);
include __DIR__ . '/templates/includes/header.php';
?>
<!-- ===== BANNER ===== -->
<section class="ca-banner" style="background-image:url('assets/images/club/conference-banner.jpg')">
  <div class="ca-banner-overlay">
    <div class="ca-breadcrumb">
      <a href="index.php">Home</a> »  Club  » <strong>Shooting</strong>
    </div>
  </div>
</section>

<!-- ===== PAGE TITLE ===== -->
<section class="ca-page-title">
  <h1>Shooting</h1>
  <p class="ca-page-subtitle">Spread Across 18 Acres</p>
</section>

<!-- ===== SHOOTING CONTENT ===== -->
<section class="ca-shooting">
  <div class="ca-shooting-inner">

    <!-- LEFT TEXT -->
    <div class="ca-shooting-text">
      <h3><span></span>Plan Your Shooting</h3>

      <p>
        Spread across 18 acres with lush lawns and greenery, CA PARIWAR CLUB is an
        ideal location for Film and TV Shoots. There are a wide array of venues
        available for that perfect setting to cater to various aesthetic and
        creative demands of the production houses.
      </p>

      <strong>Shooting Facilities:</strong>
      <ul>
        <li>Lush Green Outdoors.</li>
        <li>Multiple Outdoor Locations like Swimming Pool, Beautiful Garden,
            Golf Course, Lawn Tennis Court, Basket Ball, Cricket Pitch, Football.</li>
        <li>Indoor Games Room, Jacuzzi, Sauna, Steam Room, Beauty Salon.</li>
        <li>Fully Equipped Gym, Yoga and Meditation Room.</li>
        <li>Horticulture, Organic Farming, Cattle Farming.</li>
        <li>Multi-cuisine Restaurants.</li>
        <li>24x7 Wi-Fi Campus.</li>
        <li>100% Power Back-up.</li>
      </ul>
    </div>

    <!-- RIGHT IMAGE -->
    <div class="ca-shooting-image">
      <img src="assets/images/club/shooting.jpeg" alt="Shooting at CA Pariwar Club">
    </div>

  </div>
</section>
<?php include __DIR__ . '/templates/includes/proximity.php'; ?>

<?php include __DIR__ . '/templates/includes/footer.php'; ?>
