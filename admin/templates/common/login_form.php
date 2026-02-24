<?php
// templates/login_form.php
// Admin Login Form for new system
// Includes header/footer for consistent admin module layout

// No direct access
if (!isset($results)) {
    $results = ['errorMessage' => ''];
}

?>

<!-- Header include -->
<?php require_once __DIR__ . '/../include/header.php'; ?>

<!-- Login Form Container -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <!-- Card for login form -->
            <div class="card shadow-lg">
                <div class="card-header text-center">
                    <h3>Admin Login</h3>
                </div>

                <div class="card-body">

                    <!-- Display error message if login failed -->
                    <?php if (!empty($results['errorMessage'])): ?>
                        <div class="alert alert-danger" role="alert">
                            <?= htmlspecialchars($results['errorMessage']) ?>
                        </div>
                    <?php endif; ?>

                    <!-- Login Form -->
                    <form action="<?= BASE_URL ?>/admin/admin.php?action=login" method="post">
                        <!-- Optional hidden field to indicate login submission -->
                        <input type="hidden" name="login" value="true" />

                        <!-- Username input -->
                        <div class="form-group mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" id="username" class="form-control" 
                                   placeholder="Enter your username" required autofocus />
                        </div>

                        <!-- Password input -->
                        <div class="form-group mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control" 
                                   placeholder="Enter your password" required maxlength="50" />
                        </div>

                        <!-- Remember Me checkbox -->
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" name="remember_me" id="remember_me" value="1">
                            <label class="form-check-label" for="remember_me">
                                Remember Me
                            </label>
                        </div>

                        <!-- Submit button -->
                        <div class="d-grid">
                           <button type="submit" class="btn btn-primary w-100">Login</button> 
                        </div>
                    </form>

                </div> <!-- End Card Body -->
            </div> <!-- End Card -->

        </div> <!-- End Column -->
    </div> <!-- End Row -->
</div> <!-- End Container -->

