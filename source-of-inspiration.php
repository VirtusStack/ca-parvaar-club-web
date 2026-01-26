<?php
$currentPage = basename($_SERVER['PHP_SELF']);
include __DIR__ . '/templates/includes/header.php';
?>

<!-- ===== BANNER ===== -->
<section class="ca-banner" style="background-image:url('assets/images/about/about-banner.jpg')">
  <div class="ca-banner-overlay">
    <div class="ca-breadcrumb">
      <a href="index.php">Home</a>» About » <strong>Source Of Inspiration</strong>
    </div>
  </div>
</section>


<!-- ===== TITLE ===== -->
<section class="ca-page-title">
  <h1>Source Of Inspiration</h1>
</section>

<!-- ===== CONTENT ===== -->
<section class="ca-about-content">
 <div class="ca-about-inner ca-about-center">

    <div class="ca-about-image">
      <img src="assets/images/about/inspiration.jpg" alt="">
    </div>

  <div class="ca-about-text">
      <p style="text-align:center; font-style:italic;">
        “All that I am or ever hope to be, I owe to my angel mother.
        Thanks for being the guiding light, helping me achieve your dreams.”
      </p>

      <h4 style="text-align:center; font-weight:600; margin-top:20px;">
        This one is for you Maa……!!
      </h4>

      <p style="text-align:center; margin-top:8px;">
        Smt. Radhadevi Jagdish Prasad Agarwal
      </p>
    </div>  </div>
</section>
<?php include __DIR__ . '/templates/includes/proximity.php'; ?>

<?php include __DIR__ . '/templates/includes/footer.php'; ?>
