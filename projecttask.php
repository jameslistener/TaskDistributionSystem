<!DOCTYPE html> 
<html>
	<head>
		<meta charset="utf-8">
		<link href="styles3.css" rel="stylesheet">
		<title>Gods project</title>
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
					<a href="#"> 
						<div>
							<p>Список проектов</p>
						</div>
					</a>
					<a href="#">
						<div>
							<p>Список пользователей</p>
						</div>
					</a>
				</div>
				<div id="maininfo">
					<div id="projectview"> 
						<div class="leftbar_of_project">
								<?php 
									$taskid=$_GET['task_id'];
									mysql_connect('localhost','root','') or die('Error '.mysql_error());
									mysql_select_db('katya_mosin_dasha') or die('Error '.mysql_error());
									$result = mysql_query('SELECT users.profession,users.user_id, users.name,users.surname,tasks.task_id, tasks.main_name, tasks.description, tasks.chief, tasks.deadline,tasks.status, bind_users_tasks.id_users, bind_users_tasks.id_tasks FROM users JOIN tasks JOIN bind_users_tasks WHERE tasks.task_id="'.$taskid.'" AND tasks.chief=users.user_id AND bind_users_tasks.id_users=users.user_id') or die('Error '.mysql_error());
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
									echo "<div class='onemember'>";
									echo '<span><a href="#">'.$task['name'].'</a></span>';
									echo '<span>'.$task['profession'].'</span>';
									echo "</div>";
									echo "</div>";
									echo "</div>";
									echo "</div>";
								?>
			
		</div>
	</body>
</html>