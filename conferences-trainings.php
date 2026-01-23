<?php
$currentPage = 'amenities';
include __DIR__ . '/templates/includes/header.php';
?>

<!-- ===== BANNER ===== -->
<section class="ca-banner" style="background-image:url('assets/images/amenities/conferences-trainings/conferences-banner.jpg')">
  <div class="ca-banner-overlay">
    <div class="ca-breadcrumb">
      <a href="index.php">Home</a>»  Amenities  » <strong>Indoor Amenities</strong>
    </div>
  </div>
</section>

<!-- ===== PAGE TITLE ===== -->
<section class="ca-page-title">
  <h1>Conferences & Trainings </h1>
 </section>

<section class="amenities-section">
  <div class="amenities-grid">

    <!-- ITEM 1 -->
    <div class="amenity-item" data-gallery="1">
      <img src="assets/images/amenities/conferences-trainings/auditorium.jpg">
      <div class="amenity-overlay">
        <h3>Auditorium</h3>
        <button class="btn-look">Take a look</button>
      </div>
    </div>

    <!-- ITEM 2 -->
    <div class="amenity-item" data-gallery="2">
      <img src="assets/images/amenities/conferences-trainings/board-room.jpg">
      <div class="amenity-overlay">
        <h3>Board Room</h3>
        <button class="btn-look">Take a look</button>
      </div>
    </div>

    <!-- ITEM 3 -->
    <div class="amenity-item" data-gallery="3">
      <img src="assets/images/amenities/conferences-trainings/conference-room.jpg">
      <div class="amenity-overlay">
        <h3>Conference Room</h3>
        <button class="btn-look">Take a look</button>
      </div>
    </div>

    <!-- ITEM 4 -->
    <div class="amenity-item" data-gallery="4">
      <img src="assets/images/amenities/conferences-trainings/vip-lounge.jpg">
      <div class="amenity-overlay">
        <h3>VIP Lounge</h3>
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
  'assets/images/amenities/conferences-trainings/auditorium.jpg',
  'assets/images/amenities/conferences-trainings/board-room.jpg',
  'assets/images/amenities/conferences-trainings/conference-room.jpg',
  'assets/images/amenities/conferences-trainings/vip-lounge.jpg'
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

