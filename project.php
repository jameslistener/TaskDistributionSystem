<!DOCTYPE html> 
<html> 
	<head> 
		<meta charset="utf-8"> 
		<link href="styles3.css" rel="stylesheet"> 
		<title>Gods projects</title> 
	</head> 
	<body>
	 <div id="Head">
		<div id="Logo">
			<p id="logotip">DreamTeam</p>
		</div>
		<div id="authorization">
			<form id="pole">
				Логин: <input type="text" name="login"><br>
				Пароль: <input type="password" name="pass"><br>
				Ёкарный бабай, <input type="submit" name="vhod" value="Жми">
			</form>
		</div>
	</div>
	<div id="leftbar">
		<a href="projectlist.php">
			<div>
				<p>Список проектов</p>
			</div>
		</a>
		<a href="memberslist.php">
			<div>
				<p>Список пользователей</p>
			</div>
		</a>
	</div>
		<?php 
				$project_id = $_GET['id'];
				mysql_connect('localhost','root','') or die('Error '.mysql_error());
				mysql_select_db('katya_mosin_dasha') or die('Error '.mysql_error());

		        $zapros = 'SELECT projects.moniker, users.user_id, users.name,users.surname,projects.description, projects.killline,projects.meaning, projects.project_id FROM projects JOIN users WHERE projects.project_id = '.$project_id.' and projects.warlord = users.user_id';

				$result = mysql_query('SELECT projects.moniker, users.user_id, users.name,users.surname,projects.description, projects.killline,projects.meaning, projects.project_id, projects.warlord FROM projects JOIN users WHERE projects.project_id = '.$project_id.' and projects.warlord = users.user_id') or die('Error '.mysql_error().'<br>'.$zapros);
				$project=mysql_fetch_assoc($result);

				echo '<div id="maininfo">';
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
		$resulttask = mysql_query('SELECT * FROM bind_tasks_projects AS tp JOIN tasks WHERE tp.id_projects='.$project_id.' and  tp.id_tasks=task_id') or die('Error '.mysql_error());
				for($tasks=array();$task=mysql_fetch_assoc($resulttask); $tasks[]=$task);
				for ($k=0;$k<count($tasks);$k++)
				{
				echo'<div class="task">';
					echo'<div class="projectname"><a href="#">'.$tasks[$k]['main_name'].'</a></div>';
					echo'<div class="project_footer">';
					echo'<div class="chief"><a href="#">'.$tasks[$k]['Chief'].'</a></div>';
					echo'<div class="deadline">'.$tasks[$k]['deadline'].'</div>';
					echo'</div>';
				echo'</div>';
				}
				echo'</div>';
				echo'</div>';
		?>

			
		</div>
	</body>
</html>