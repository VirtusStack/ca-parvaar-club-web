<?php
$currentPage = basename($_SERVER['PHP_SELF']);
include __DIR__ . '/templates/includes/header.php';
?>

<!-- ===== BANNER ===== -->
<section class="ca-banner" style="background-image:url('assets/images/amenities/Accommodation/twinshare-room/facilities-banner.jpg')">
  <div class="ca-banner-overlay">
    <div class="ca-breadcrumb">
      <a href="index.php">Home</a>»  Amenities»  Accommodation  » <strong>Twin Share Room</strong>
    </div>
  </div>
</section>

<!-- ===== PAGE TITLE ===== -->
<section class="ca-page-title">
  <h1>Twin Share Room</h1>
 </section>

<section class="amenities-section">
  <div class="amenities-grid">

    <!-- ITEM 1 -->
    <div class="amenity-item" data-gallery="1">
      <img src="assets/images/amenities/Accommodation/twinshare-room/twinshareroom2.jpg">
      <div class="amenity-overlay">
        <h3>Room</h3>
        <button class="btn-look">Take a look</button>
      </div>
    </div>

    <!-- ITEM 2 -->
    <div class="amenity-item" data-gallery="2">
      <img src="assets/images/amenities/Accommodation/twinshare-room/twinshareroom3.jpg">
      <div class="amenity-overlay">
        <h3>Room</h3>
        <button class="btn-look">Take a look</button>
      </div>
    </div>

    <!-- ITEM 3 -->
    <div class="amenity-item" data-gallery="3">
      <img src="assets/images/amenities/Accommodation/twinshare-room/twinshareroom4.jpg">
      <div class="amenity-overlay">
        <h3>Room</h3>
        <button class="btn-look">Take a look</button>
      </div>
    </div>

      </div>
</section>

<!-- ===== GALLERY MODAL ===== -->
<div id="galleryModal" class="gallery-modal">
  <span class="gallery-close">&times;</span>
  <button class="gallery-prev">&#10094;</button>
  <img id="galleryImage">
  <button class="gallery-next">&#10095;</button>
</div>

<script>
const images = [
    'assets/images/amenities/Accommodation/twinshare-room/twinshareroom2.jpg',
  'assets/images/amenities/Accommodation/twinshare-room/twinshareroom3.jpg',
  'assets/images/amenities/Accommodation/twinshare-room/twinshareroom4.jpg'
];

let currentIndex = 0;
const modal = document.getElementById('galleryModal');
const img = document.getElementById('galleryImage');

function openGallery(i) {
  currentIndex = i;
  img.src = images[i];
  modal.style.display = 'flex';
  location.hash = 'gallery-' + (i + 1);
}

function closeGallery() {
  modal.style.display = 'none';
  history.pushState("", document.title, window.location.pathname);
}

document.querySelectorAll('.btn-look').forEach(btn => {
  btn.addEventListener('click', e => {
    const index = e.target.closest('.amenity-item').dataset.gallery - 1;
    openGallery(index);
  });
});

document.querySelector('.gallery-next').onclick = () => {
  if (currentIndex < images.length - 1) openGallery(currentIndex + 1);
};

document.querySelector('.gallery-prev').onclick = () => {
  if (currentIndex > 0) openGallery(currentIndex - 1);
};

document.querySelector('.gallery-close').onclick = closeGallery;

/* OPEN VIA URL HASH */
window.addEventListener('load', () => {
  if (location.hash.includes('gallery-')) {
    const i = parseInt(location.hash.replace('#gallery-', '')) - 1;
    if (images[i]) openGallery(i);
  }
});
</script>

<?php include __DIR__ . '/templates/includes/proximity.php'; ?>

<?php include __DIR__ . '/templates/includes/footer.php'; ?>
