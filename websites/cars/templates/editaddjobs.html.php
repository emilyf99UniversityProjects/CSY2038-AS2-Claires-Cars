<?php
require 'leftsectionadmin.html.php';
?>

<section class = "right">
    <h2> Update or Add Job Posting</h2>

    <form action="" method="POST">
        <input type= "hidden" name= "jobs[id]" value="<?=$jobs['id'] ?? ''?>"/>
        <label>Title: </label><input type = "text" name="jobs[title]" value=" <?=$jobs['title'] ?? ''?>"required/>
        <label>Description: </label><input type = "text" name="jobs[description]" value=" <?=$jobs['description'] ?? ''?>"required/>
        <label>Salary: </label><input type = "text" name="jobs[salary]" value=" <?=$jobs['salary'] ?? ''?>"/>
        <label>Qualifications: </label><input type = "text" name="jobs[qualifications]" value=" <?=$jobs['qualifications'] ?? ''?>"required/>
        <input type= "submit" name = "submit" value = "Save" />
    </form>
</section>