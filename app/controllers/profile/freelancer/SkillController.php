<?php
require_once base_path('app/models/SkillModel.php');

class SkillController
{
    private $skillModel;

    public function __construct($db)
    {
        $this->skillModel = new SkillModel($db);
    }

    public function index()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Add Skill
            if (isset($_POST['skill_id'])) {
                $skill_id = intval($_POST['skill_id']);
                $user_id = $_SESSION['user_id'];

                $this->skillModel->addSkill($user_id, $skill_id);
            }

            // Remove skill
            elseif (isset($_POST['remove_skill'])) {
                $skill_id = intval($_POST['remove_skill']);
                $user_id = $_SESSION['user_id'];

                $this->skillModel->removeSkill($user_id, $skill_id);
            }
            // handle exception 
            else {
                dd('error');
            }
            // if success, redirect
            header("Location: /profile");
            exit();
        }

        // Fetch all skills and particular skills for pasrticular user
        $skills = $this->skillModel->getSkills();
        $user_id = $_SESSION['user_id'];
        $userSkills = $this->skillModel->getUserSkills($user_id);

        // Render the view
        require base_path("app/views/profile/freelancer/freelancer.view.php");
    }
}
