<?php
$currentPage = 'gallery.php';
include __DIR__ . '/templates/includes/header.php';
?>

<section class="ca-banner" style="background-image:url('assets/images/gallery-banner.jpg')"> 
  <div class="ca-banner-overlay">
    <div class="ca-breadcrumb">
      <a href="index.php">Home</a> » <strong>Gallery</strong>
    </div>
  </div>
</section>

<!-- ===== PAGE TITLE ===== -->
<section class="ca-page-title">
  <h1>Gallery</h1>
 </section>

<section class="ca-gallery">
  <div class="container">
       <div class="masonry-gallery">
      <?php
      $images = glob("assets/images/gallery/*.jpg");
      foreach ($images as $img) {
      ?>
       <div class="gallery-item">
  	<img src="<?php echo $img; ?>" alt="CA Pariwar Gallery">
      </div>

      <?php } ?>
    </div>
  </div>
</section>

<!-- Lightbox -->
<div id="ca-lightbox">
  <span class="ca-close">&times;</span>

  <div class="ca-counter"></div>

  <img class="ca-lightbox-img" src="">

  <span class="ca-prev">&#10094;</span>
  <span class="ca-next">&#10095;</span>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {

  const images = document.querySelectorAll('.gallery-item img');
  const lightbox = document.getElementById('ca-lightbox');
  const lightboxImg = document.querySelector('.ca-lightbox-img');
  const counter = document.querySelector('.ca-counter');

  const prevBtn = document.querySelector('.ca-prev');
  const nextBtn = document.querySelector('.ca-next');
  const closeBtn = document.querySelector('.ca-close');

  let currentIndex = 0;
  const totalImages = images.length;

  // Open lightbox
  images.forEach((img, index) => {
    img.style.cursor = "pointer"; // UX improvement

    img.addEventListener('click', () => {
      currentIndex = index;
      showImage();
      lightbox.classList.add('active');
    });
  });

  function showImage() {
    lightboxImg.src = images[currentIndex].src;
    counter.textContent = `${currentIndex + 1} / ${totalImages}`;
  }

  // Next
  nextBtn.addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % totalImages;
    showImage();
  });

  // Prev
  prevBtn.addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + totalImages) % totalImages;
    showImage();
  });

  // Close
  closeBtn.addEventListener('click', () => {
    lightbox.classList.remove('active');
  });

  // Keyboard support
  document.addEventListener('keydown', (e) => {
    if (!lightbox.classList.contains('active')) return;

    if (e.key === 'ArrowRight') nextBtn.click();
    if (e.key === 'ArrowLeft') prevBtn.click();
    if (e.key === 'Escape') closeBtn.click();
  });

});
</script>
<?php include __DIR__ . '/templates/includes/proximity.php'; ?>

<?php include __DIR__ . '/templates/includes/footer.php'; ?>
