<?php
$currentPage = 'amenities';
include __DIR__ . '/templates/includes/header.php';
?>

<!-- ===== BANNER ===== -->
<section class="ca-banner" style="background-image:url('assets/images/amenities/Celebration-time/celebration-banner.jpg')">
  <div class="ca-banner-overlay">
    <div class="ca-breadcrumb">
      <a href="index.php">Home</a>»  Amenities  » <strong>Celebration Time</strong>
    </div>
  </div>
</section>

<!-- ===== PAGE TITLE ===== -->
<section class="ca-page-title">
  <h1>Indoor Amenities</h1>
 </section>

<section class="amenities-section">
  <div class="amenities-grid">

    <!-- ITEM 1 -->
    <div class="amenity-item" data-gallery="1">
      <img src="assets/images/amenities/Celebration-time/banquet.jpg">
      <div class="amenity-overlay">
        <h3>Banquet</h3>
        <button class="btn-look">Take a look</button>
      </div>
    </div>

    <!-- ITEM 2 -->
    <div class="amenity-item" data-gallery="2">
      <img src="assets/images/amenities/Celebration-time/kites.jpg">
      <div class="amenity-overlay">
        <h3>Makar Sankranti</h3>
        <button class="btn-look">Take a look</button>
      </div>
    </div>

    <!-- ITEM 3 -->
    <div class="amenity-item" data-gallery="3">
      <img src="assets/images/amenities/Celebration-time/independenceday.jpg">
      <div class="amenity-overlay">
        <h3>Independence Day</h3>
        <button class="btn-look">Take a look</button>
      </div>
    </div>

    <!-- ITEM 4 -->
    <div class="amenity-item" data-gallery="4">
      <img src="assets/images/amenities/Celebration-time/ganesh-chaturthi.jpg">
      <div class="amenity-overlay">
        <h3>Ganesh Chaturthi</h3>
        <button class="btn-look">Take a look</button>
      </div>
    </div>

     <!-- ITEM 5 -->
    <div class="amenity-item" data-gallery="5">
      <img src="assets/images/amenities/Celebration-time/Ganesh-Visarjan-2018.jpg">
      <div class="amenity-overlay">
        <h3>Ganesh Visarjan</h3>
        <button class="btn-look">Take a look</button>
      </div>
    </div>

    <!-- ITEM 6 -->
    <div class="amenity-item" data-gallery="6">
      <img src="assets/images/amenities/Celebration-time/restaurant.jpg">
      <div class="amenity-overlay">
        <h3>Restaurant</h3>
        <button class="btn-look">Take a look</button>
      </div>
    </div>

    <!-- ITEM 7 -->
    <div class="amenity-item" data-gallery="7">
      <img src="assets/images/amenities/Celebration-time/bonfire.jpg">
      <div class="amenity-overlay">
        <h3>Bon Fire </h3>
        <button class="btn-look">Take a look</button>
      </div>
    </div>

    <!-- ITEM 8 -->
    <div class="amenity-item" data-gallery="8">
      <img src="assets/images/amenities/Celebration-time/disco.jpg">
      <div class="amenity-overlay">
        <h3>Disco</h3>
        <button class="btn-look">Take a look</button>
      </div>
    </div>

     <!-- ITEM 9 -->
    <div class="amenity-item" data-gallery="9">
      <img src="assets/images/amenities/Celebration-time/janmashtmi.jpg">
      <div class="amenity-overlay">
        <h3>Janmashtmi</h3>
        <button class="btn-look">Take a look</button>
      </div>
    </div>

    <!-- ITEM 10 -->
    <div class="amenity-item" data-gallery="10">
      <img src="assets/images/amenities/Celebration-time/christmas-2017.jpg">
      <div class="amenity-overlay">
        <h3>Christmas</h3>
        <button class="btn-look">Take a look</button>
      </div>
    </div>

    <!-- ITEM 11 -->
    <div class="amenity-item" data-gallery="11">
      <img src="assets/images/amenities/Celebration-time/rakshabandhan-2018.jpg">
      <div class="amenity-overlay">
        <h3>Rakshabandhan </h3>
        <button class="btn-look">Take a look</button>
      </div>
    </div>

    <!-- ITEM 12 -->
    <div class="amenity-item" data-gallery="12">
      <img src="assets/images/amenities/Celebration-time/navratri-2017.jpg">
      <div class="amenity-overlay">
        <h3>Navratri</h3>
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
  'assets/images/amenities/Celebration-time/banquet.jpg',
  'assets/images/amenities/Celebration-time/kites.jpg',
  'assets/images/amenities/Celebration-time/independenceday.jpg',
  'assets/images/amenities/Celebration-time/ganesh-chaturthi.jpg',
  'assets/images/amenities/Celebration-time/Ganesh-Visarjan-2018.jpg',
  'assets/images/amenities/Celebration-time/restaurant.jpg',
  'assets/images/amenities/Celebration-time/bonfire.jpg',
  'assets/images/amenities/Celebration-time/disco.jpg',
  'assets/images/amenities/Celebration-time/janmashtmi.jpg',
  'assets/images/amenities/Celebration-time/christmas-2017.jpg',
  'assets/images/amenities/Celebration-time/rakshabandhan-2018.jpg',
  'assets/images/amenities/Celebration-time/navratri-2017.jpg'
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
