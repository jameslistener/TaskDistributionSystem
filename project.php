<?php require ('header.php'); ?>

<?php 
		$project_id = $_GET['id'];
		mysql_connect('localhost','root','') or die('Error '.mysql_error());
		mysql_select_db('katya_mosin_dasha') or die('Error '.mysql_error());

        $zapros = 'SELECT projects.moniker, users.user_id, users.name,users.surname,projects.description, projects.killline,projects.meaning, projects.project_id FROM projects JOIN users WHERE projects.project_id = '.$project_id.' and projects.warlord = users.user_id';

		$result = mysql_query('SELECT projects.moniker, users.user_id, users.name,users.surname,projects.description, projects.killline,projects.meaning, projects.project_id, projects.warlord FROM projects JOIN users WHERE projects.project_id = '.$project_id.' and projects.warlord = users.user_id') or die('Error '.mysql_error().'<br>'.$zapros);
		$project=mysql_fetch_assoc($result);

			echo'<div id="projectview"> ';
			   echo '<div class="leftbar_of_project">';
			      echo '<div class="projectname">'.$project['moniker'].'</div>';
			      echo '<div id="description">'.$project['description'].'</div>';					   
		echo '<div class="project_footer">';
		echo '	<div class="chief"><a href="#">'.$project['warlord'].'</a></div>';
			echo '<div class="deadline">'.$project['killline'].'</div>';
			echo '<div class="closer"></div>';
		echo '</div>';
	echo '</div>';
	echo '<div class="status">'.$project['meaning'].'</div>';
	echo '<div class="closer"></div>';
	echo '</div> ';
	echo'<div  class="tasks">';
	$resulttask = mysql_query('SELECT * FROM bind_tasks_projects, users JOIN tasks WHERE bind_tasks_projects.id_projects='.$project_id.' and  bind_tasks_projects.id_tasks=task_id and users.user_id=tasks.Chief ') or die('Error '.mysql_error());
	for($tasks=array();$task=mysql_fetch_assoc($resulttask); $tasks[]=$task);
	for ($k=0;$k<count($tasks);$k++)
	{
	echo'<div class="task">';
		echo'<div class="projectname"><a href="projecttask.php?task_id='.$tasks[$k]['id_tasks'].'">'.$tasks[$k]['main_name'].'</a></div>';
		echo'<div class="project_footer">';
		echo'<div class="chief"><a href="#">'.$tasks[$k]['name'].' '.$tasks[$k]['surname'].'</a></div>';
		echo'<div class="deadline">'.$tasks[$k]['deadline'].'</div>';
		echo'</div>';
	echo'</div>';
	}
	echo'</div>';
	echo'</div>';
?>

<?php require ('footer.php'); ?>