<?php
$currentPage = 'home';
include __DIR__ . '/templates/includes/header.php';
?>

<!-- ===== HERO CAROUSEL ===== -->
<section class="ca-home-slider">
  <div id="caCarousel" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-inner">

      <!-- SLIDE 1 (WITH GREY BOX) -->
      <div class="carousel-item active">
        <img src="assets/images/slider/slide1.jpg" class="d-block w-100" alt="">
        <div class="ca-slide-overlay">
          <div class="ca-slide-text">
            <p>Let Pulsing And Rushing Time Halt,</p>
            <p>Let Fresh Air Touch Your Heart;</p>
            <p>Let Yourself Loose In Abundant Nature,</p>
            <p>Let Your Soul Rejuvenate Its Stature.</p>

            <h3>Rediscover Yourself !!!</h3>
          </div>
        </div>
      </div>

      <!-- SLIDE 2 (WITH GREY BOX – DIFFERENT TEXT) -->
      <div class="carousel-item">
        <img src="assets/images/slider/slide2.jpg" class="d-block w-100" alt="">
        <div class="ca-slide-overlay">
          <div class="ca-slide-text">
            <p>Your second slide content here…</p>
          </div>
        </div>
      </div>

      <!-- SLIDE 3 (NO GREY BOX) -->
      <div class="carousel-item">
        <img src="assets/images/slider/slide3.jpg" class="d-block w-100" alt="">
        <!-- NO overlay here -->
      </div>

    </div>

  </div>
</section>


<script>
let slides = document.querySelectorAll('.ca-slide');
let current = 0;

setInterval(() => {
  slides[current].classList.remove('active');
  current = (current + 1) % slides.length;
  slides[current].classList.add('active');
}, 4000);
</script>

<?php include __DIR__ . '/templates/includes/footer.php'; ?>
