<?php
require_once base_path('app/models/ProjectModel.php');

class ProjectController
{
    private $projectModel;

    public function __construct($db)
    {
        $this->projectModel = new ProjectModel($db);
    }

    public function index()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Add Projects
            if (isset($_POST['add_project'])) {
                $user_id = $_SESSION['user_id'];
                $category_id = intval($_POST['category']);
                $price = $_POST['price'];
                $status = $_POST['status'];
                $description = $_POST['description'];

                $this->projectModel->addProject($user_id, $category_id, $price, $status, $description);
            }
            // Handle editing 
            elseif (isset($_POST['edit_project'])) {

                $user_id = $_SESSION['user_id'];
                $project_id = intval($_POST['edit_project']);
                $category_id = intval($_POST['category']);
                $price = intval($_POST['price']);
                $status = $_POST['status'];
                $description = $_POST['description'];

                $this->projectModel->updateProject($user_id, $project_id, $category_id, $price, $status, $description);

                header('Location: /profile');
                exit();
            }
            // Remove project 
            elseif (isset($_POST['remove_project'])) {
                $user_id = $_SESSION['user_id'];
                $project_id = intval($_POST['remove_project']);

                $this->projectModel->removeProject($user_id, $project_id);
            }
            // handle exception 
            else {
                dd('error');
            }
            // if success, redirect
            header("Location: /profile");
            exit();
        }
    }
}
