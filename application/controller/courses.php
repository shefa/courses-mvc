<?php
class Courses extends Controller
{
    public function index()
    {
        $courses = $this->model->getAllCourses();
        $amount_of_courses = $this->model->getAmountOfCourses();

        require APP . 'view/_templates/header.php';
        require APP . 'view/courses/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function create()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/courses/create.php';
        require APP . 'view/_templates/footer.php';
    }

    public function addCourse()
    {
        if (isset($_POST["submit_add_course"]))
            $this->model->addCourse($_POST["title"], $_POST["description"],  $_POST["lecturer"], $_POST["start"], $_POST["end"]);
        
        header('location: ' . URL . 'courses/index');
    }

    public function deleteCourse($course_id)
    {
        if (isset($course_id))
            $this->model->deleteCourse($course_id);
        
        header('location: ' . URL . 'courses/index');
    }

    public function editCourse($course_id)
    {
        if (isset($course_id)) 
        {
            $course = $this->model->getCourse($course_id);

            require APP . 'view/_templates/header.php';
            require APP . 'view/courses/edit.php';
            require APP . 'view/_templates/footer.php';
        } 
        else header('location: ' . URL . 'courses/index');
    }
    
    public function updateCourse()
    {
        if (isset($_POST["submit_update_course"]))
            $this->model->updateCourse($_POST["title"], $_POST["description"],  $_POST["lecturer"], $_POST["start"], $_POST["end"], $_POST['course_id']);
        
        header('location: ' . URL . 'courses/index');
    }

    public function ajaxGetStats()
    {
        $amount_of_courses = $this->model->getAmountOfCourses();
        echo $amount_of_courses;
    }
}