<div class="container">
    <h2>You can edit a course here</h2>
    <div>
        <h3>Edit a course</h3>
        <form action="<?php echo URL; ?>courses/updatecourse" method="POST">
            <label>Title</label>
            <input autofocus type="text" name="title" value="<?php echo htmlspecialchars($course->title, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>Description</label>
            <input type="text" name="description" value="<?php echo htmlspecialchars($course->description, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>Lecturer ID</label>
            <input type="number" name="lecturer" value="<?php echo htmlspecialchars($course->lecturer, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>Start date</label>
            <input type="date" name="start" value="<?php echo htmlspecialchars($course->start, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>End date</label>
            <input type="date" name="end" value="<?php echo htmlspecialchars($course->end, ENT_QUOTES, 'UTF-8'); ?>" required />
            <input type="hidden" name="course_id" value="<?php echo htmlspecialchars($course->id, ENT_QUOTES, 'UTF-8'); ?>" />
            <input type="submit" name="submit_update_course" value="Update" />
        </form>
    </div>
</div>