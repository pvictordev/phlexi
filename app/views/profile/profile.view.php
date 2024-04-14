<?php
$current_page = '/profile';
require base_path("app/views/partials/head.php");
?>

<?php require base_path("app/views/partials/header.php"); ?>

<main class="pt-5 pb-5">
    <section>
        <div class="container py-7">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="d-flex border border-3 border-secondary align-items-center justify-content-between rounded-3 p-3 mb-4">
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
                            <form action="/profile/destroy" method="GET">
                                <input type="hidden" name="user_id" value="<?= $user_id ?>">
                                <button type=" submit" class="btn btn-danger">Delete account</button>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="border border-3 rounded-3 border-secondary mb-4">
                        <div class="p-2 text-center">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3"><?= $user['user_name']; ?></h5>
                        </div>
                    </div>
                    <div class="border border-3 rounded-3 border-secondary mb-4 mb-lg-0">
                        <div class="p-3">
                            <h3 class="text-center">Bio</h3>
                            <p class="<?= !empty($user['bio']) ?  'text-secondary' : 'text-danger' ?> mb-0 mt-3 text-center">
                                <?= !empty($user['bio']) ? $user['bio']  : "Tell about yourself !"  ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="border border-3 border-secondary rounded-3 mb-4">
                        <div class="p-3">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Full Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-secondary mb-0"><?= $user['user_name']; ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-secondary mb-0"><?= $user['email'] ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Mobile</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="<?= !empty($user['phone']) ?  'text-secondary' : 'text-danger' ?> mb-0"><?= !empty($user['phone']) ? $user['phone']  : 'Add your phone number'  ?></p>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="row row-gap-2">
                        <div class="col-md-6">
                            <a class="text-primary" href="/profile/freelancer">Add Skill</a>
                            <div class="card-footer border border-3 border-secondary p-3 pt-2 rounded-3">
                                <div class="overflow-auto" style="height: 107px;">
                                    <?php foreach ($userSkills as $userSkill) : ?>
                                        <span class="badge bg-secondary my-2"><?= $userSkill['skill_name']; ?></span>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a class="text-primary" href="/profile/client">Add Project</a>
                            <div class="card-footer border border-3 border-secondary rounded-3">
                                <div class="overflow-auto d-flex flex-column gap-2" style="height: 130px;">
                                    <?php foreach ($userProjects as $userProject) : ?>
                                        <div class="project-card p-3 pt-2 pb-2">
                                            <span class="badge bg-warning my-2"><?= $userProject['category_name'] ?></span>
                                            <span class="badge bg-success my-2">$<?= $userProject['price'] ?></span>
                                            <div class="text-light bg-secondary p-2 rounded-2"><?= $userProject['description'] ?></div>
                                            <span class="badge <?= $userProject['status'] == 'Active' ? "bg-success" : "bg-secondary"  ?> my-2"><?= $userProject['status'] ?></span>
                                            <span class="badge bg-primary my-2"><?= $userProject['date'] ?></span>
                                        </div>
                                    <?php endforeach; ?>
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