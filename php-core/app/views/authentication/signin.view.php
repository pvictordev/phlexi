<?php
$current_page = '/signin';
require base_path("app/views/partials/head.php");
?>

<?php require base_path("app/views/partials/header.php"); ?>

<main class="pt-10 pb-5">
    <section class="p-3 p-md-4 p-xl-5">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6 col-xxl-5">
                    <div class="card bg-transparent border-3 border-light-subtle rounded-4">
                        <div class="card-body p-3 p-md-4 p-xl-5">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-5">

                                        <h2 class="h4 text-secondary text-center">Sign In</h2>
                                        <h3 class="fs-6 fw-normal text-secondary text-center m-0">Enter your details to sign up</h3>
                                    </div>
                                </div>
                            </div>
                            <form method="POST" action="/signin">
                                <div class="row gy-3 overflow-hidden">
                                    <input type="hidden" name="action" value="signin">
                                    <div class="col-12">
                                        <?php echo isset($errors['general']) ? '<span class="text-danger ">Incorrect email or password</span>' : ''; ?>
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" value="<?= htmlspecialchars($email); ?>" required>
                                            <label for="email" class="form-label <?php echo isset($errors['general']) ? 'text-danger' : ''; ?>">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?= htmlspecialchars($password); ?>" required>
                                            <label for="password" class="form-label <?php echo isset($errors['general']) ? 'text-danger' : ''; ?>">Password</label>
                                            <button type="button" id="togglePassword" class="mt-2 btn btn-outline-secondary toggle-password-btn">Show</button>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button class="btn bsb-btn-xl btn-primary" type="submit">Sign in</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                <div class="col-12">
                                    <hr class="mt-5 mb-4 border-secondary-subtle">
                                    <p class="m-0 text-secondary text-center">Do not have an account ? <a href="/signup" class="link-primary text-decoration-none">Sign up</a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require base_path("app/views/partials/foot.php"); ?>

<?php require base_path("app/views/partials/footer.php"); ?>