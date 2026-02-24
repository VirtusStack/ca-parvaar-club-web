<?php
$currentPage = 'affiliation.php';
include __DIR__ . '/templates/includes/header.php';
include __DIR__ . '/config/config.php'; // PDO connection

// ---- FETCH STATES (INDIA) ----
$statesStmt = $pdo->query("
    SELECT DISTINCT state 
    FROM affiliations 
    WHERE country = 'India' 
      AND state IS NOT NULL 
      AND state != '' 
      AND status = 'active'
    ORDER BY state ASC
");
$states = $statesStmt->fetchAll(PDO::FETCH_COLUMN);

// ---- FETCH COUNTRIES (INTERNATIONAL) ----
$countriesStmt = $pdo->query("
    SELECT DISTINCT country 
    FROM affiliations 
    WHERE country != 'India' 
      AND country IS NOT NULL 
      AND country != '' 
      AND status = 'active'
    ORDER BY country ASC
");
$countries = $countriesStmt->fetchAll(PDO::FETCH_COLUMN);


// ---- FILTER LOGIC ----
$where = "WHERE status = 'active'";
$params = [];

if (!empty($_GET['state'])) {
    $where .= " AND state = :state";
    $params[':state'] = $_GET['state'];
}

if (!empty($_GET['country'])) {
    $where .= " AND country = :country";
    $params[':country'] = $_GET['country'];
}

// ---- FETCH AFFILIATIONS ----
$stmt = $pdo->prepare("
    SELECT club_name, address, phone, email, website, logo
    FROM affiliations
    $where
    ORDER BY club_name ASC
");
$stmt->execute($params);
$affiliations = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>


<!-- ===== PAGE BANNER ===== -->
<section class="ca-banner" style="background-image:url('assets/images/affiliation/proximity-banner.jpg')">
  <div class="ca-banner-overlay">
    <div class="ca-breadcrumb">
      <a href="index.php">Home</a> » <strong>Affiliation</strong>
    </div>
  </div>
</section>

<!-- ===== PAGE TITLE ===== -->
<section class="ca-page-title">
  <h1>Affiliation</h1>
</section>

<!-- ===== AFFILIATION INTRO ===== -->
<section class="ca-affiliation-intro">
  <p>
    CA. Pariwar Club has affiliated with 100+ elite clubs globally,
    so that you can enjoy a bunch of privileges & services similar to those offered
    in CA. Pariwar Club. This is about the best advantage a Club can offer to its Members.
  </p>

  <p class="ca-affiliation-download">
    THE UPDATED LIST OF AFFILIATED CLUBS CAN BE DOWNLOADED FROM
    <a href="#" target="_blank">
      HERE
    </a>
  </p>
</section>


<!-- ===== AFFILIATION MAIN ===== -->
<section class="ca-affiliation-wrapper">

  <!-- LEFT FILTER -->
 <aside class="ca-affiliation-filter">
  <h4>List of clubs affiliated with us</h4>

  <form method="GET">

    <label>National</label>
    <select name="state" onchange="this.form.submit()">
      <option value="">Select State</option>
      <?php foreach ($states as $state): ?>
        <option value="<?= htmlspecialchars($state) ?>"
          <?= (!empty($_GET['state']) && $_GET['state'] === $state) ? 'selected' : '' ?>>
          <?= htmlspecialchars($state) ?>
        </option>
      <?php endforeach; ?>
    </select>

    <label>International</label>
    <select name="country" onchange="this.form.submit()">
      <option value="">Select Country</option>
      <?php foreach ($countries as $country): ?>
        <option value="<?= htmlspecialchars($country) ?>"
          <?= (!empty($_GET['country']) && $_GET['country'] === $country) ? 'selected' : '' ?>>
          <?= htmlspecialchars($country) ?>
        </option>
      <?php endforeach; ?>
    </select>

  </form>
</aside>


  <!-- RIGHT LIST -->
 <div class="ca-affiliation-list">
    <?php foreach ($affiliations as $aff): ?>
      <div class="ca-affiliation-item">

        <!-- LEFT TEXT -->
        <div class="ca-affiliation-text">
          <h3 class="ca-club-title"><?= htmlspecialchars($aff['club_name']) ?></h3>
          <?php if($aff['address']): ?>
            <p><i class="fa-solid fa-location-dot"></i> <?= htmlspecialchars($aff['address']) ?></p>
          <?php endif; ?>
          <?php if($aff['phone']): ?>
            <p><i class="fa-solid fa-phone"></i> <?= htmlspecialchars($aff['phone']) ?></p>
          <?php endif; ?>
          
          <?php if($aff['website']): ?>
            <p><i class="fa-solid fa-globe"></i> <a href="<?= $aff['website'] ?>" target="_blank"><?= $aff['website'] ?></a></p>
          <?php endif; ?>
        </div>

        <!-- VERTICAL DIVIDER -->
        <div class="ca-affiliation-divider"></div>

        <!-- RIGHT LOGO -->
        <div class="ca-affiliation-logo">
          <img src="uploads/affiliations/<?= $aff['logo'] ?>" alt="">
        </div>

      </div>
    <?php endforeach; ?>
</div>
</section>

<!-- ===== AFFILIATION NOTE ===== -->
<section class="ca-affiliation-note-wrap">
  <div class="ca-affiliation-note">
    <p>
      <strong>Note:</strong>
      We are targeting <strong>200 clubs</strong> to be affiliated Globally.
      <em>
        *Reciprocal facilities shall be made available only to Members visiting the city
        of the Affiliated club & not to members who are permanent residents of the
        Affiliated club's city.
      </em>
    </p>
  </div>
</section>

<?php include __DIR__ . '/templates/includes/proximity.php'; ?>

<?php include __DIR__ . '/templates/includes/footer.php'; ?>

