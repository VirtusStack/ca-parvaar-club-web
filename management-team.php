<?php
$currentPage = basename($_SERVER['PHP_SELF']);
include __DIR__ . '/templates/includes/header.php';
?>

<!-- ===== BANNER ===== -->
<section class="ca-banner" style="background-image:url('assets/images/about/about-banner.jpg')">
  <div class="ca-banner-overlay">
    <div class="ca-breadcrumb">
      <a href="index.php">Home</a>» About  » <strong>Management Team</strong>
    </div>
  </div>
</section>

<!-- ================= MANAGEMENT TEAM ================= -->
<section class="ca-chairperson ca-management">
  <div class="ca-page-title">
    <h1>Management Team</h1>
  </div>

  <div class="ca-about-inner">
    <!-- IMAGE + NAME STRIP -->
    <div class="ca-about-image">
      <img src="assets/images/about/ashish-mishra.jpg" alt="Ashish Mishra">
      <div class="ca-chairperson-name">
        <strong>Ashish Mishra</strong>
        <span>Treasurer</span>
      </div>
    </div>

    <!-- TEXT -->
    <div class="ca-management-text">
      <p>
        As the Treasurer of our club over the past year, I've meticulously managed our
        finances, ensuring transparency and accountability in every transaction.
        Through strategic budgeting and financial planning, I've played a pivotal role
        in securing resources for various club activities, contributing to the overall
        success of our organization.I look forward to continuing my dedicated financial
        stewardship to support the club's growth and sustainability in the upcoming term.
      </p>
    </div>

    <div class="ca-about-image">
      <img src="assets/images/about/somaram.jpg" alt="Somaram Devasi">
      <div class="ca-chairperson-name">
        <strong>Somaram Devasi</strong><br>
        <span>Committee Member</span>
      </div>
    </div>

    <!-- TEXT -->
    <div class="ca-management-text">
      <p>
        As a dedicated committee member for the past year, he have actively contributed
        to fostering collaboration and driving initiatives within the team. 
	His commitment to open communication, strategic thinking, and attention to 
	detail has played a crucial role in the success of our endeors. always Looking 
	forward his continuing support service and making impactful contributions to 
	our shared goals.
      </p>

       <p>
	Over the past year as a committee member, he 've demonstrated
        a strong ability to analyze complex issues, propose effective solutions, and 
	facilitate productive discussions. his proactive approach to problem-solving,
        coupled with a keen understanding of team dynamics, has been instrumental in 
        achieving our objectives. he is always eager to leverage new experience and
        skills for the continuous.
      </p>
    </div>
  </div>
</section>
<?php include __DIR__ . '/templates/includes/proximity.php'; ?>

<?php include __DIR__ . '/templates/includes/footer.php'; ?>
