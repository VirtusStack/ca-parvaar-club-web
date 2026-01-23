<?php
$currentPage = 'amenities';
include __DIR__ . '/templates/includes/header.php';
?>

<!-- ===== BANNER ===== -->
<section class="ca-banner" style="background-image:url('assets/images/amenities/outdoor/outdoor-banner.jpg')">
  <div class="ca-banner-overlay">
    <div class="ca-breadcrumb">
      <a href="index.php">Home</a>»  Amenities  » <strong>Outdoor Amenities</strong>
    </div>
  </div>
</section>

<!-- ===== PAGE TITLE ===== -->
<section class="ca-page-title">
  <h1>Outdoor Amenities</h1>
 </section>

<section class="amenities-section">
  <div class="amenities-grid">

    <!-- ITEM 1 -->
    <div class="amenity-item" data-gallery="1">
      <img src="assets/images/amenities/outdoor/basketball.jpg">
      <div class="amenity-overlay">
        <h3>Basketball</h3>
        <button class="btn-look">Take a look</button>
      </div>
    </div>

    <!-- ITEM 2 -->
    <div class="amenity-item" data-gallery="2">
      <img src="assets/images/amenities/outdoor/lawn-tennis.jpg">
      <div class="amenity-overlay">
        <h3>Lawn Tennis</h3>
        <button class="btn-look">Take a look</button>
      </div>
    </div>

    <!-- ITEM 3 -->
    <div class="amenity-item" data-gallery="3">
      <img src="assets/images/amenities/outdoor/football.jpg">
      <div class="amenity-overlay">
        <h3>Football</h3>
        <button class="btn-look">Take a look</button>
      </div>
    </div>

    <!-- ITEM 4 -->
    <div class="amenity-item" data-gallery="4">
      <img src="assets/images/amenities/outdoor/volleyball.jpg">
      <div class="amenity-overlay">
        <h3>Volleyball</h3>
        <button class="btn-look">Take a look</button>
      </div>
    </div>

     <!-- ITEM 5 -->
    <div class="amenity-item" data-gallery="5">
      <img src="assets/images/amenities/outdoor/badminton.jpg">
      <div class="amenity-overlay">
        <h3>Badminton</h3>
        <button class="btn-look">Take a look</button>
      </div>
    </div>

    <!-- ITEM 6 -->
    <div class="amenity-item" data-gallery="6">
      <img src="assets/images/amenities/outdoor/cricket.jpg">
      <div class="amenity-overlay">
        <h3>Cricket</h3>
        <button class="btn-look">Take a look</button>
      </div>
    </div>

    <!-- ITEM 7 -->
    <div class="amenity-item" data-gallery="7">
      <img src="assets/images/amenities/outdoor/horse-riding.jpg">
      <div class="amenity-overlay">
        <h3>Horse Riding </h3>
        <button class="btn-look">Take a look</button>
      </div>
    </div>

    <!-- ITEM 8 -->
    <div class="amenity-item" data-gallery="8">
      <img src="assets/images/amenities/outdoor/swimming-pool.jpg">
      <div class="amenity-overlay">
        <h3>Swimming Pool</h3>
        <button class="btn-look">Take a look</button>
      </div>
    </div>

    <!-- ITEM 9 -->
    <div class="amenity-item" data-gallery="9">
      <img src="assets/images/amenities/outdoor/jogging-track.jpg">
      <div class="amenity-overlay">
        <h3>Jogging Track</h3>
        <button class="btn-look">Take a look</button>
      </div>
    </div>

    <!-- ITEM 10 -->
    <div class="amenity-item" data-gallery="10">
      <img src="assets/images/amenities/outdoor/opentheatre1.jpg">
      <div class="amenity-overlay">
        <h3>Amphitheatre</h3>
        <button class="btn-look">Take a look</button>
      </div>
    </div>

    <!-- ITEM 11 -->
    <div class="amenity-item" data-gallery="11">
      <img src="assets/images/amenities/outdoor/golf.jpg">
      <div class="amenity-overlay">
        <h3>Golf</h3>
        <button class="btn-look">Take a look</button>
      </div>
    </div>

     <!-- ITEM 12 -->
    <div class="amenity-item" data-gallery="12">
      <img src="assets/images/amenities/outdoor/helipad.jpg">
      <div class="amenity-overlay">
        <h3>Helipad(Under Construction)</h3>
        <button class="btn-look">Take a look</button>
      </div>
    </div>

    <!-- ITEM 13 -->
    <div class="amenity-item" data-gallery="13">
      <img src="assets/images/amenities/outdoor/park.jpg">
      <div class="amenity-overlay">
        <h3>Park</h3>
        <button class="btn-look">Take a look</button>
      </div>
    </div>

    <!-- ITEM 14 -->
    <div class="amenity-item" data-gallery="14">
      <img src="assets/images/amenities/outdoor/childrens-enclave.jpg">
      <div class="amenity-overlay">
        <h3>Kid Zone (Under Construction)</h3> 
        <button class="btn-look">Take a look</button>
      </div>
    </div>

    <!-- ITEM 15 -->
    <div class="amenity-item" data-gallery="15">
      <img src="assets/images/amenities/outdoor/cafeteria.jpg">
      <div class="amenity-overlay">
        <h3>Cafeteria</h3>
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
  'assets/images/amenities/outdoor/basketball.jpg',
  'assets/images/amenities/outdoor/lawn-tennis.jpg',
  'assets/images/amenities/outdoor/football.jpg',
  'assets/images/amenities/outdoor/volleyball.jpg',
  'assets/images/amenities/outdoor/badminton.jpg',
  'assets/images/amenities/outdoor/cricket.jpg',
  'assets/images/amenities/outdoor/horse-riding.jpg',
  'assets/images/amenities/outdoor/swimming-pool.jpg',
  'assets/images/amenities/outdoor/jogging-track.jpg',
  'assets/images/amenities/outdoor/opentheatre1.jpg',
  'assets/images/amenities/outdoor/golf.jpg',
  'assets/images/amenities/outdoor/helipad.jpg',
  'assets/images/amenities/outdoor/park.jpg',
  'assets/images/amenities/outdoor/childrens-enclave.jpg',
  'assets/images/amenities/outdoor/cafeteria.jpg'
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

