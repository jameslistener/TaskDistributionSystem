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
		<div id="filterlist">
		</div>
		<?php 
				$project_id = $_GET['id'];
				mysql_connect('localhost','root','') or die('Error '.mysql_error());
				mysql_select_db('katya_mosin_dasha') or die('Error '.mysql_error());

		        $zapros = 'SELECT projects.moniker, users.user_id, users.name,users.surname,projects.description, projects.killline,projects.meaning, projects.project_id FROM projects JOIN users WHERE projects.project_id = '.$project_id.' and projects.warlord = users.user_id';

				$result = mysql_query('SELECT projects.moniker, users.user_id, users.name,users.surname,projects.description, projects.killline,projects.meaning, projects.project_id FROM projects JOIN users WHERE projects.project_id = '.$project_id.' and projects.warlord = users.user_id') or die('Error '.mysql_error().'<br>'.$zapros);
				$project=mysql_fetch_assoc($result);

				echo '<div class="project">';
					echo'<div class="leftbar_of_project">';
					    echo'<div class="projectname">';
					    	echo '<a href="project.php?id='.$project["project_id"].'">'.$project["moniker"].'</a>';
					    echo '</div>';
					    echo '<div class="project_footer">';
					    	echo '<div class="chief">';
					    		echo '<a href="user.php?id='.$project['user_id'].'">'.$project["name"].' '.$project["surname"].'</a>';
					    	echo '</div>';
					    	echo '<div class="deadline">';
					    		echo $project["killline"];
					    	echo '</div>';
					    echo '</div>';
					echo '</div>';
					echo '<div class="status">';
					    echo $project["meaning"];
					echo "</div>";
				echo "</div>";
		?>
			
		</div>
	</body>
</html>