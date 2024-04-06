<?php
$current_page = '/profile/edit';
require "views/partials/head.php";
?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
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
                            <input type="phone" value="<?= $user['phone'] ?>" name="phone" class="form-control" id="phone" placeholder="Change your phone">
                        </div>
                        <div class="form-group">
                            <label class="mb-2" for="bio">Bio</label>
                            <textarea name="bio" placeholder="Change your bio" class="form-control" id="bio" rows="4"><?= $user['bio'] ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require "views/partials/foot.php" ?>