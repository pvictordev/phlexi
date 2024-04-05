<?php
$current_page = '/profile';
require "views/partials/head.php";
?>

<?php require "views/partials/header.php"; ?>

<main class="pt-5 pb-5">
    <section>
        <div class="container py-5">
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
                        <!-- update the bio
                        <form action="">
                            <input type="hidden" name="" id="">
                            <button type="submit" class="position-absolute top-0 btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24" fill="none">
                                    <path d="M21.2799 6.40005L11.7399 15.94C10.7899 16.89 7.96987 17.33 7.33987 16.7C6.70987 16.07 7.13987 13.25 8.08987 12.3L17.6399 2.75002C17.8754 2.49308 18.1605 2.28654 18.4781 2.14284C18.7956 1.99914 19.139 1.92124 19.4875 1.9139C19.8359 1.90657 20.1823 1.96991 20.5056 2.10012C20.8289 2.23033 21.1225 2.42473 21.3686 2.67153C21.6147 2.91833 21.8083 3.21243 21.9376 3.53609C22.0669 3.85976 22.1294 4.20626 22.1211 4.55471C22.1128 4.90316 22.0339 5.24635 21.8894 5.5635C21.7448 5.88065 21.5375 6.16524 21.2799 6.40005V6.40005Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M11 4H6C4.93913 4 3.92178 4.42142 3.17163 5.17157C2.42149 5.92172 2 6.93913 2 8V18C2 19.0609 2.42149 20.0783 3.17163 20.8284C3.92178 21.5786 4.93913 22 6 22H17C19.21 22 20 20.2 20 18V13" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </form> -->
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
                            <div class="card mb-4 mb-md-0">
                                <div class="card-body">
                                    <p class="mb-4"><span class="text-primary font-italic me-1">Skills</span>
                                    </p>
                                    <form method="POST" action="/profile">
                                        <div class="mb-3">
                                            <!-- <label for="skill_name" class="form-label">Type in your skill</label>
                                            <input type="text" class="form-control" name="skill_name" id="skill_name" required> -->
                                            <label class="form-label" for="skill_name">Choose your skill</label>
                                            <select class="form-control" name="skill_id" id="skill_id">
                                                <?php foreach ($skills as $skill) : ?>
                                                    <option value="<?= $skill['skill_id'] ?>"><?= $skill['skill_name'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Paste</button>
                                    </form>
                                </div>
                                <div class="card-footer">
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
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4 mb-md-0">
                                <div class="card-body">
                                    <p class="mb-4">
                                        <span class="text-primary font-italic me-1">Create a project</span>
                                    </p>
                                    <form method="POST" action="/profile">
                                        <div class="mb-3">
                                            <label for="description" class="form-label">Description</label>
                                            <input type="text" class="form-control" name="description" id="description">
                                        </div>
                                        <div class="mb-3">
                                            <label for="price" class="form-label">Price</label>
                                            <input type="text" class="form-control" name="price" id="price">
                                        </div>
                                        <div class="mb-3">
                                            <label for="category" class="form-label">Category</label>
                                            <select type="text" class="form-control" name="category" id="category">
                                                <?php foreach ($categories as $category) : ?>
                                                    <option value="<?= $category['category_name'] ?>"><?= $category['category_name'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Create</button>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <div class="overflow-auto d-flex flex-column gap-4" style="max-height: 150px;">

                                        <?php foreach ($projects as $project) : ?>
                                            <div>
                                                <span class="badge bg-warning my-2"><?= $project['category_name'] ?></span>
                                                <span class="badge bg-success my-2">$<?= $project['price'] ?></span>
                                                <div class="text-light bg-secondary p-2 rounded-2"><?= $project['description'] ?></div>
                                                <span class="badge <?= $project['status'] == 'Active' ? "bg-success" : "bg-secondary"  ?> my-2"><?= $project['status'] ?></span>
                                                <span class="badge bg-primary my-2"><?= $project['date'] ?></span>
                                                <form method="POST" action="/profile">
                                                    <input type="hidden" name="skill_id" value="delete_project">
                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </div>
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