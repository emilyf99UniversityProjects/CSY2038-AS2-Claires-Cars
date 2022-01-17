<?php
require 'leftsectionadmin.html.php';
?>
<section class="right">
    <h2>Manage Careers</h2>
    <p><a href ="">Add a New Job</a></p>

    <?php
    foreach ($jobs as $job) {
        echo '<p>All the job listings currently on the ClairesCareers page are shown here.</p>';
		echo '<li>';
	 	echo '<div class="details">';
		echo '<h4> Job Title: ' . $job['title'] . '</h4>';
		echo '<p> Job Description: ' . $job['description'] . '</p>';
        echo '<p> Salary: ' . $job['salary'] . '</p>';
        echo '<p> Qualifications: ' . $job['qualifications'] . '</p>';
        echo '<p><a href ="">Edit This Job</a></p>';
        echo '<p><a href ="">Delete This Job (Cannot be undone)</a></p>';
		echo '</div>';
	 	echo '</li>';
	 }

    if(!$jobs) {
    ?>
    <p>There are currently no Jobs in the database, Please add a Job or contact support.</p>
    <?php
    }
    ?>
</section>