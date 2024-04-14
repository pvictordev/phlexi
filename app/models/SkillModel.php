<?php

class SkillModel
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getSkills()
    {
        $query = "SELECT * FROM skills";
        $skillsStatement = $this->db->query($query, []);
        return $skillsStatement->fetchAll();
    }

    public function getUserSkills($user_id)
    {
        $query = "SELECT skills.*, freelancers_skills.user_id 
        FROM skills 
        INNER JOIN (
            SELECT skill_id, user_id 
            FROM freelancers_skills
            WHERE user_id = :user_id
        ) AS freelancers_skills 
        ON skills.skill_id = freelancers_skills.skill_id";

        $skillsStatement = $this->db->query($query, ['user_id' => $_SESSION['user_id']]);
        return $skillsStatement->fetchAll();
    }

    public function addSkill($user_id, $skill_id)
    {
        $table = "freelancers_skills";
        $data = [
            'user_id' => $user_id,
            'skill_id' => $skill_id,
        ];
        return $this->db->store($table, $data);
    }

    public function removeSkill($user_id, $skill_id)
    {
        $table = "freelancers_skills";
        $condition = "user_id = :user_id AND skill_id = :skill_id";
        $params = ['user_id' => $user_id, 'skill_id' => $skill_id];

        return $this->db->destroy($table, $condition, $params);
    }
}
