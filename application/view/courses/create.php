<div class="container">
    <h2>You can add a new course here</h2>
    <div class="box">
        <h3>Add a course</h3>
        <form action="<?php echo URL; ?>courses/addcourse" method="POST">
            <label>Title</label>
            <input type="text" name="title" value="" required />
            <label>Description</label>
            <input type="text" name="description" value="" required />
            <label>Lecturer ID</label>
            <input type="number" name="lecturer" value="" required />
            <label>Start date</label>
            <input type="date" name="start" value="" required />
            <label>End date</label>
            <input type="date" name="end" value="" required />
            <input type="submit" name="submit_add_course" value="Submit" />
        </form>
    </div>
</div>