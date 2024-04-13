<?php
$current_page = '/profile/edit';
require base_path("app/views/partials/head.php");
?>

<!-- navingation -->
<div class="go-back position-absolute top-0">
    <a href="/profile">
        <svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" viewBox="0 0 24 24" fill="none">
            <path d="M5 12H19M5 12L11 6M5 12L11 18" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </a>
</div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="border border-3 border-secondary p-3 rounded-3">
                <div class="card-header fs-4 mb-2">
                    Edit your profile data
                </div>
                <div class="card-body">
                    <form method="POST" action="/profile/edit" class="d-flex flex-column gap-3">
                        <div class="form-group">
                            <label class="mb-2" for="name">Name</label>
                            <input type="text" value="<?= $user['user_name'] ?>" name="user_name" class="form-control" id="name" placeholder="Change your name">
                        </div>
                        <div class="form-group">
                            <label class="mb-2" for="email">Email</label>
                            <input type="email" value="<?= $user['email'] ?>" name="email" class="form-control" id="email" placeholder="Change your email">
                        </div>
                        <div class="form-group">
                            <label class="mb-2" for="phone">Phone</label>
                            <input type="number" value="<?= $user['phone'] ?>" name="phone" class="form-control" id="phone" placeholder="Change your phone">
                        </div>
                        <div class="form-group">
                            <label class="mb-2" for="bio">Bio</label>
                            <textarea name="bio" placeholder="Change your bio" class="form-control" id="bio" rows="4"><?= $user['bio'] ?></textarea>
                        </div>

                        <div class="form-group">
                            <?php if (!empty($errors['match'])) : ?>
                                <span class="text-danger"><?php echo $errors['match']; ?></span><br>
                            <?php endif; ?>
                            <label class="mb-2" for="old_password">Old password</label>
                            <input type="password" value="" name="old_password" class="form-control" id="old_password" placeholder="Type your old password">
                        </div>

                        <div class="form-group">
                            <label class="mb-2" for="new_password">New password</label>
                            <input type="password" value="" name="new_password" class="form-control" id="new_password" placeholder="Type your new password">
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require base_path("app/views/partials/foot.php") ?>