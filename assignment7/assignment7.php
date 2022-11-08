<html>
    <head>
    </head>
    <body>
        <?php
            
            ?>
            <h1>To Do list</h1>
        <form method = "post" action = "tasks.php" enctype = "multipart/form-data">
            <select name="tasks[]" id="tasks" multiple>
                <option value="Select Tasks">Select Tasks</option>
                <option value="Task1">Task 1</option>
                <option value="Task2">Task 2</option>
                <option value="Meet with Team">Meeting with Team</option>
                <option value="Assignment 1">Assignment 1</option>
                <option value="Project 1">Project 1</option>
                <option value="Assignment 2">Assignment 2</option>
                <option value="Project 2">Project 2</option>
</select>
        <input type="submit" name="submit" onclick="$_POST">
        </form>
    </body>
</html>
