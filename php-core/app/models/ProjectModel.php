<?php

class ProjectModel
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getCategories()
    {
        $query = "SELECT * FROM categories";
        $categoriesStatement = $this->db->query($query, []);
        return $categoriesStatement->fetchAll();
    }

    public function getProjects()
    {
        $query = "SELECT projects.*, categories.* 
        FROM projects 
        INNER JOIN categories ON projects.category_id = categories.category_id";
        $projectsStatement = $this->db->query($query, []);
        return $projectsStatement->fetchAll();
    }

    public function getUserProjects($user_id)
    {
        $query = "SELECT projects.*, categories.*
                  FROM projects
                  JOIN categories ON projects.category_id = categories.category_id
                  WHERE projects.user_id = ?";
        $projectsStatement = $this->db->query($query, [$user_id]);
        return $projectsStatement->fetchAll();
    }

    public function getUserProject($project_id)
    {
        $query = "SELECT projects.*, categories.* 
        FROM projects 
        INNER JOIN categories ON projects.category_id = categories.category_id
        WHERE projects.project_id = ?";
        $projectStatement = $this->db->query($query, [$project_id]);
        return $projectStatement->fetch(); // Assuming only one project is expected
    }

    public function addProject($user_id, $category_id, $price, $status, $description)
    {
        $table = "projects";
        $data = [
            'user_id' => $user_id,
            'category_id' => $category_id,
            'price' => $price,
            'status' => $status,
            'description' => $description,
        ];
        return $this->db->store($table, $data);
    }

    public function updateProject($user_id, $project_id, $category_id, $price, $status, $description)
    {
        $table = "projects";
        $data = [
            'category_id' => $category_id,
            'price' => $price,
            'status' => $status,
            'description' => $description,
        ];
        $condition = "user_id = :user_id AND project_id = :project_id";
        $params = [
            'user_id' => $user_id,
            'project_id' => $project_id
        ];
        return $this->db->edit($table, $data, $condition, $params);
    }

    // works fine
    public function removeProject($user_id, $project_id)
    {
        $table = "projects";
        $condition = "user_id = ? AND project_id = ?";
        $params = [$user_id, $project_id];
        return $this->db->destroy($table, $condition, $params);
    }
}
