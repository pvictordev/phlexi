<?php
$current_page = '/market';
require "views/partials/head.php" ?>
<?php require "views/partials/header.php" ?>

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
                <div class="my-3">
                    <small class="text-muted"><strong data-test="job-type">Fixed-price</strong> - <span data-test="contractor-tier">Entry level</span> - <span>Est. Budget:</span> <span data-test="budget">$14</span></small>
                </div>
                <div class="my-4">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text" data-test="job-description-text">We need experienced React developer who can help us with new features to our existing project. This project can take a few days but it can be a long-term cooperation in the future. If you have good experience with Node, it would be great. Need to be familiar with webpack and redux.</p>
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
                    <small class="text-muted d-inline-flex pr-3"><span class="text-body-sm">Proposals:</span> <strong data-test="proposals" class="text-base-sm">20 to 50</strong></small>
                    <!-- Add more content here -->
                </div>
            </div>
        </div>
    </div>
</main>


<?php require "views/partials/foot.php" ?>
<?php require "views/partials/footer.php" ?>