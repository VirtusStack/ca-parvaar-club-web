<?php
$currentPage = 'contact.php';
include __DIR__ . '/templates/includes/header.php';
?>

<!-- ===== PAGE BANNER ===== -->
<section class="ca-banner" style="background-image:url('assets/images/contact-banner.jpg')">
  <div class="ca-banner-overlay">
    <div class="ca-breadcrumb">
      <a href="index.php">Home</a> » <strong>Contact Us</strong>
    </div>
  </div>
</section>


<!-- ===== CONTACT SECTION ===== -->
<section class="ca-contact">
  <h2>Contact Us</h2>

  <div class="ca-contact-grid">

    <!-- LEFT COLUMN -->
    <div class="ca-contact-col">
      <h4>CA Pariwar Club &amp; Hospitalities Pvt. Ltd.</h4>

      <p>
        <i class="bi bi-geo-alt-fill"></i>
        Smt. Radhadevi Jagdishprasad Agarwal Knowledge Center, IP 4-5,
        RIICO Growth Center Phase-II, Abu Road, Rajasthan – 307026, India.
      </p>

      <p>
        <i class="bi bi-telephone-fill"></i>
        +91 98679 85139 / +91 86966 06555
      </p>

      <p>
        <i class="bi bi-envelope-fill"></i>
        support@capariwarclub.com
      </p>
    </div>

    <!-- MIDDLE COLUMN -->
    <div class="ca-contact-col">
      <h4>CA Pariwar Club</h4>

      <p>
        <i class="bi bi-geo-alt-fill"></i>
        B-502, NIRAV, ASHA NAGAR, 90 FEET ROAD<br>
        KANDIVALI EAST, MUMBAI MH-400101
      </p>

      <p>
        <i class="bi bi-telephone-fill"></i>
        +91 22 2887 8000 / 22 2887 0069
      </p>
    </div>

    <!-- RIGHT COLUMN -->
    <div class="ca-contact-form">
      <h4>Drop A Message</h4>

      <form method="post" action="">
        <div class="form-row">
          <input type="text" name="name" placeholder="Name" required>
          <input type="text" name="mobile" placeholder="Mobile" required>
        </div>

        <input type="email" name="email" placeholder="Email" required>
        <textarea name="message" placeholder="Message"></textarea>

        <button type="submit">Submit</button>
      </form>
    </div>

  </div>

 <div class="ca-map-heading">
    <span></span>
    <h4>Map</h4>
  </div>

  <div class="ca-map-wrap">
    <iframe
      src="https://www.google.com/maps?q=CA%20Pariwar%20Club%20%26%20Hotel%20Abu%20Road&output=embed"
      loading="lazy">
    </iframe>
  </div>
</section>

<?php include __DIR__ . '/templates/includes/proximity.php'; ?>

<?php include __DIR__ . '/templates/includes/footer.php'; ?>
