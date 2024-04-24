<?php
$current_page = '/profile';
require base_path("app/views/partials/head.php");
?>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-danger text-white">Delete Account Confirmation</div>
                <div class="card-body">
                    <p>Are you sure that you want to delete your account?</p>
                    <form action="/profile/destroy" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger mr-2">Delete</button>
                        <a href="/profile" class="btn btn-secondary">No</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require base_path("app/views/partials/foot.php");
