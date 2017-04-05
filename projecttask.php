<?php require ('header.php'); ?>

<div id="projectview"> 
	<div class="leftbar_of_project">
			<?php 
				$taskid=$_GET['task_id'];
				mysql_connect('localhost','root','') or die('Error '.mysql_error());
				mysql_select_db('katya_mosin_dasha') or die('Error '.mysql_error());
				$result = mysql_query('SELECT users.profession,users.user_id, users.name,users.surname,tasks.task_id, tasks.main_name, tasks.description, tasks.chief, tasks.deadline,tasks.status FROM users JOIN tasks WHERE tasks.task_id="'.$taskid.'" AND tasks.chief=users.user_id ') or die('Error '.mysql_error());
				$task=mysql_fetch_assoc($result);
				echo '<div class= "projectname">'.$task['main_name'].'</div>';
				echo '<div class="description">'.$task['description'].'</div>';
				echo '<div class="project_footer">';
				echo '<div class="chief"><a href="#">'.$task['name'].'</a></div>';
				echo '<div class="closer"></div>';
				echo '<div class="deadline">'.$task['deadline'].'</div>';
				echo '</div>';
				echo "</div>";
				echo '<div class="status">'.$task['status'].'</div>';
				echo '<div class="closer"></div>';
				echo "</div>";
				echo '<div  class="tasks">';
				echo "</div>";
			?>
	</div>
</div>

<?php require ('footer.php'); ?>