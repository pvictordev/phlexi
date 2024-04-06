<?php
$current_page = '/freelancer';
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

<!-- add a new skill for freelancer -->
<section class="container pt-5 pb-5">
    <div class=" card mb-4 mb-md-0">
        <div class="card-body">
            <p class="mb-4"><span class="text-secondary font-italic me-1">Skills</span>
            </p>
            <form method="POST" action="/profile/freelancer">
                <div class="mb-3">
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

    </div>
</section>

<?php require "views/partials/foot.php" ?>