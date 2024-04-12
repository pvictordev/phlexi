<?php
$current_page = '/market';
require "partials/head.php";
?>

<?php require "partials/header.php" ?>

<main class="pt-10 pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Search Input -->
                <div class="input-group mb-5">
                    <input type="text" class="form-control" placeholder="Search..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button">Search</button>
                    </div>
                </div>

                <!-- Card Section -->
                <div class="card-container d-flex flex-column gap-5">
                    <?php foreach ($projects as $project) : ?>
                        <div class="project_card border border-secondary border-3 p-3 rounded-3">
                            <span class="<?= $project['status'] === 'Active' ? "Active" : "closed" ?> position-absolute left-0"></span>
                            <div class="my-3">
                                <small class="d-flex gap-2">
                                    <span data-test="budget">
                                        Est. Budget: $<?= $project['price'] ?>
                                    </span>
                                    <span class="badge bg-secondary "><?= $project['category_name'] ?></span>
                                </small>
                            </div>
                            <div class="my-4">
                                <div class="border border-secondary border-3 p-3 rounded-3">
                                    <div class="card-body">
                                        <p class="card-text" data-test="job-description-text"><?= $project['description'] ?>.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="my-4">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="d-inline-flex flex-wrap">
                                            <button class="btn btn-primary">Join</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="my-4">
                                <small class="d-inline-flex pr-3"><span class="text-body-sm">Date: </span> <strong data-test="proposals" class="text-base-sm"><?= $project['date'] ?></strong></small>

                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="d-flex justify-content-center align-items-center mt-5 ">
                    <button class="btn btn-secondary">View more</button>

                </div>
            </div>
        </div>
    </div>
</main>

<?php require "partials/foot.php" ?>
<?php require "partials/footer.php" ?>