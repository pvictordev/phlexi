<?php
$current_page = '/profile';
require "views/partials/head.php";
?>

<?php require 'views/partials/header.php' ?>

<main class="pt-5 pb-5">
    <section>
        <div class="container py-7">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="d-flex align-items-center justify-content-between bg-light rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">User Profile</a></li>
                            <li class="breadcrumb-item" aria-current="page"><?= $user['email'] ?></li>
                        </ol>
                        <!-- delete account and edit profile info -->
                        <div class="d-flex gap-3">
                            <form action="/profile/edit" method="GET">
                                <input type="hidden" name="user_id" value="<?= $user_id ?>">
                                <button type="submit" class="btn btn-primary">Edit profile</button>
                            </form>
                            <form action="/profile" method="POST">
                                <input type="hidden" name="user_id" value="<?= $user_id ?>">
                                <button type=" submit" class="btn btn-danger">Delete account</button>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3"><?= $user['user_name']; ?></h5>
                            <!-- <p class="text-muted mb-1">Full Stack Developer</p>
                            <p class="text-muted mb-4">Bay Area, San Francisco, CA</p> -->
                        </div>
                    </div>
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body p-3">
                            <h3 class="text-center">Bio</h3>
                            <p class="<?= !empty($user['bio']) ?  'text-muted' : 'text-danger' ?> mb-0 mt-3 text-center">
                                <?= !empty($user['bio']) ? $user['bio']  : "Tell about yourself !"  ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Full Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?= $user['user_name']; ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?= $user['email'] ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Mobile</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="<?= !empty($user['phone']) ?  'text-muted' : 'text-danger' ?> mb-0"><?= !empty($user['phone']) ? $user['phone']  : 'Add your phone number'  ?></p>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <a class="text-primary" href="/profile/freelancer">Add Skill / Freelancer Settings</a>
                            <div class="card-footer bg-light p-3 pt-2 rounded-3">
                                <div class="overflow-auto" style="max-height: 140px;">
                                    <?php foreach ($userSkills as $userSkill) : ?>
                                        <span class="badge bg-secondary my-2"><?= $userSkill['skill_name']; ?></span>
                                        <form method="POST" action="/profile">
                                            <input type="hidden" name="skill_id" value="<?= $userSkill['user_id']; ?>">
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="text-primary" href="/profile/client">Add Project / Client Settings</a>
                            <div class="card-footer">
                                <div class="overflow-auto d-flex flex-column gap-4" style="max-height: 170px;">
                                    <div class="bg-light p-3 pt-2 rounded-3">
                                        <?php foreach ($projects as $project) : ?>
                                            <span class="badge bg-warning my-2"><?= $project['category_name'] ?></span>
                                            <span class="badge bg-success my-2">$<?= $project['price'] ?></span>
                                            <div class="text-light bg-secondary p-2 rounded-2"><?= $project['description'] ?></div>
                                            <span class="badge <?= $project['status'] == 'Active' ? "bg-success" : "bg-secondary"  ?> my-2"><?= $project['status'] ?></span>
                                            <span class="badge bg-primary my-2"><?= $project['date'] ?></span>
                                            <form method="POST" action="/profile">
                                                <input type="hidden" name="skill_id" value="delete_project">
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require "views/partials/foot.php" ?>
<?php require "views/partials/footer.php" ?>