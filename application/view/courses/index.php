<div class="container">
    <h2>You can view courses here</h2>
    <div class="box">
        <h3>Amount of courses</h3>
        <div>
            <?php echo $amount_of_courses; ?>
        </div>
        <h3>List of courses</h3>
        <div style="overflow-x:auto;">
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>Title</td>
                <td>Description</td>
                <td>Lecturer</td>
                <td>Start date</td>
                <td>End date</td>
                <td>Action</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($courses as $course) { ?>
                <tr>
                    <td><?php if (isset($course->title)) echo htmlspecialchars($course->title, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($course->description)) echo htmlspecialchars($course->description, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($course->lecturer)) echo htmlspecialchars($course->lecturer, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($course->start)) echo htmlspecialchars($course->start, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($course->end)) echo htmlspecialchars($course->end, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td>
                    <a href="<?php echo URL . 'courses/deletecourse/' . htmlspecialchars($course->id, ENT_QUOTES, 'UTF-8'); ?>">delete</a>
                    <a href="<?php echo URL . 'courses/editcourse/' . htmlspecialchars($course->id, ENT_QUOTES, 'UTF-8'); ?>">edit</a>
                    </td>
                    <td></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        </div>
        <h3>AJAX test</h3>
        <div>
            <button id="ajax-button">Click here to get the amount of courses via Ajax</button>
            <div id="ajax-result-box"></div>
        </div>

    </div>
</div>
