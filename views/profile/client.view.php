<?php
$current_page = '/client';
require "views/partials/head.php";
?>

<!-- navingation -->
<div class="go-back position-absolute top-2 left-2">
    <a href="/profile">
        <svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" viewBox="0 0 24 24" fill="none">
            <path d="M5 12H19M5 12L11 6M5 12L11 18" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </a>
</div>
<!-- add a new project for client -->
<section class="container pt-5 pb-5">
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
    </div>
</section>

<?php require "views/partials/foot.php" ?>