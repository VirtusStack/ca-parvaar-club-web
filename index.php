<?php
$currentPage = 'home';
include __DIR__ . '/templates/includes/header.php';
?>

<!-- ===== HERO CAROUSEL ===== -->
<section class="ca-hero">

  <div class="ca-slider">

    <!-- Slide 1 -->
    <div class="ca-slide active">
      <img src="assets/images/slider/slide1.jpg" alt="">
      <div class="ca-overlay-box">
        <p>
          Let Pulsing And Rushing Time Halt,<br>
          Let Fresh Air Touch Your Heart;<br>
          Let Yourself Loose In Abundant Nature,<br>
          Let Your Soul Rejuvenate Its Stature.
        </p>
        <h3>Rediscover Yourself !!!</h3>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="ca-slide">
      <img src="assets/images/slider/slide2.jpg" alt="">
      <div class="ca-overlay-box">
        <p>Welcome to</p>
        <h2>CA PARIWAR CLUB</h2>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="ca-slide">
      <img src="assets/images/slider/slide3.jpg" alt="">
          </div>

  </div>

<section class="ca-hero-cards">
  <div class="ca-cards-container">

   <a href="membership-benefits.php" class="ca-card">
    <img src="assets/images/hero/home-service-5.jpg" alt="">
    <div class="ca-card-text">
      <span class="arrow">▲</span>
      <p>Plan Your Membership</p>
     </div>
  </a>

  <a href="conference-meeting.php" class="ca-card">
    <img src="assets/images/hero/home-service-4.jpg" alt="">
    <div class="ca-card-text">
      <span class="arrow">▲</span>
      <p>Plan Your Conference</p>
     </div>
  </a>

   <a href="shooting.php" class="ca-card">
    <img src="assets/images/hero/home-service-2.jpg" alt="">
    <div class="ca-card-text">
      <span class="arrow">▲</span>
      <p>Plan Your Shooting</p>
     </div>
  </a>

  
  <a href="wedding.php.php" class="ca-card">
    <img src="assets/images/hero/home-service-1.jpg" alt="">
    <div class="ca-card-text">
      <span class="arrow">▲</span>
      <p>Plan Your Wedding</p>
     </div>
  </a>

  </div>
</section>

<section class="ca-about">
  <div class="ca-about-container">

    <h2>Welcome To CA Pariwar Club</h2>

    <p>
      CA Pariwar club is all set to carve a niche for itself globally. Deemed as a SOU (Socially Oriented Unit), the club has pledged its proceeds to fund / support educational and social causes through awarding of scholarships to meritorious students, especially girls, who lack the financial support and such other noble causes. By becoming a member of this family, you are directly serving a great social cause. You will also get a good chance of meeting like-minded fellow professionals in the club and making friends-for-life or an opportunity to expand your profession. So come, be a member of this Pariwar and put yourself on the path to encounter a trust with glory, which this Club is set to achieve.
    </p>

    <p>
      Those seeking a tranquil patch of green amid all the excitement can slip on the land of staggering contrast and spectacular beauty... and let your soul rejuvenate and refuel the energies to your life... Create memories... Rediscover... Yourself... Come Be a Part of CA Pariwar Club...
    </p>

  </div>


<div class="ca-links">
  <a href="inspired-vision.php" class="ca-link-item">Inspired Vision</a>
  <a href="management-team.php" class="ca-link-item">Management Team</a>
  <a href="affiliated-clubs.php" class="ca-link-item">Affiliated Clubs</a>
  <a href="governing-council.php" class="ca-link-item">Governing Council</a>
</div>
</section>

<section class="ca-amenities">
  <div class="ca-amenities-container">

    <h2 class="ca-amenities-title">Club Amenities</h2>

    <div class="ca-amenities-grid">

      <a href="steamsauna.php" class="ca-amenity-item">
        <img src="assets/images/home/jacuzzi-sauna.jpg" alt="">
        <span class="ca-amenity-text">Steam , Sauna & Jacuzzi</span>
      </a>

      <a href="gymnasium.php" class="ca-amenity-item">
        <img src="assets/images/home/gym.jpeg" alt="">
        <span class="ca-amenity-text">Gymnasium</span>
      </a>

      <a href="detoxify.php" class="ca-amenity-item">
        <img src="assets/images/home/detoxify.jpg" alt="">
        <span class="ca-amenity-text">Detoxify</span>
      </a>

      <a href="indoor-amenities.php" class="ca-amenity-item">
        <img src="assets/images/home/indoor-amenities.jpg" alt="">
        <span class="ca-amenity-text">Indoor Amenities</span>
      </a>

      <a href="outdoor-amenities.php" class="ca-amenity-item">
        <img src="assets/images/home/outdoor-amenities.jpg" alt="">
        <span class="ca-amenity-text">Outdoor Amenities</span>
      </a>

      <a href="deluxe-ac-room.php" class="ca-amenity-item">
        <img src="assets/images/home/accommodation.jpg" alt="">
        <span class="ca-amenity-text">Accommodation</span>
      </a>

     <a href="conferences-trainings.php" class="ca-amenity-item">
        <img src="assets/images/home/conferences-trainings.jpg" alt="">
        <span class="ca-amenity-text">Conference/Trainings</span>
      </a>

      <a href="Celebration-time.php" class="ca-amenity-item">
        <img src="assets/images/home/Celebration-time.jpg" alt="">
        <span class="ca-amenity-text">Celebration Time</span>
      </a>

      <a href="organic-farming.php" class="ca-amenity-item">
        <img src="assets/images/home/organic-farming.jpeg" alt="">
        <span class="ca-amenity-text">Organic Farming</span>
      </a>

    </div>

  </div>
</section>

<script>
let slides = document.querySelectorAll(".ca-slide");
let index = 0;

setInterval(() => {
  slides[index].classList.remove("active");
  index = (index + 1) % slides.length;
  slides[index].classList.add("active");
}, 5000);
</script>
<?php include __DIR__ . '/templates/includes/proximity.php'; ?>

<?php include __DIR__ . '/templates/includes/footer.php'; ?>
