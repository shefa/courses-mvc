<?php
class Model
{
    function __construct($db)
    {
        try
        {
            $this->db = $db;
        }
        catch (PDOException $e)
        {
            exit('Database connection could not be established.');
        }
    }

    public function getAllCourses()
    {

        $sql = "SELECT id, title, description, lecturer, start, end FROM course";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }
    
    public function addCourse($title, $description, $lecturer, $start, $end)
    {
        $sql = "INSERT INTO course (title, description, lecturer, start, end) VALUES (:title, :description, :lecturer, :start, :end)";
        $query = $this->db->prepare($sql);
        $parameters = array(':title' => $title, ':description' => $description, ':lecturer' => $lecturer, ':start' => $start, ':end' => $end);

        //echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
        $query->execute($parameters);
    }

    public function deleteCourse($course_id)
    {
        $sql = "DELETE FROM course WHERE id = :course_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':course_id' => $course_id);

        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
        $query->execute($parameters);
    }

    public function getCourse($course_id)
    {
        $sql = "SELECT id, title, description, lecturer, start, end FROM course WHERE id = :course_id LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':course_id' => $course_id);

        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
        $query->execute($parameters);
        return $query->fetch();
    }

    public function updateCourse($title, $description, $lecturer, $start, $end, $course_id)
    {
        $sql = "UPDATE course SET title = :title, description = :description, lecturer = :lecturer, start = :start, end = :end WHERE id = :course_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':title' => $title, ':description' => $description, ':lecturer' => $lecturer, ':start' => $start, ':end' => $end, ':course_id' => $course_id);

        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
        $query->execute($parameters);
    }

    public function getAmountOfCourses()
    {
        $sql = "SELECT COUNT(id) AS amount_of_courses FROM course";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetch() is the PDO method that get exactly one result
        return $query->fetch()->amount_of_courses;
    }
}
