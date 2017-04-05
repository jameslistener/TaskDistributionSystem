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
		<a href="projectlist.php">
			<div>
				<p>Список проектов</p>
			</div>
		</a>
		<a href="memberlist.php">
			<div>
				<p>Список пользователей</p>
			</div>
		</a>
	</div>
	<div id="maininfo">
		<div id="filterlist">
		</div>
		<?php 
				mysql_connect('localhost','root','') or die('Error '.mysql_error());
				mysql_select_db('katya_mosin_dasha') or die('Error '.mysql_error());

				/*$result = mysql_query('SELECT * from projects') or die('Error '.mysql_error());
				for($projects=array(); $project=mysql_fetch_assoc($result); $projects[]=$project);*/
				$result = mysql_query('SELECT projects.moniker, users.user_id, users.name,users.surname,projects.description, projects.killline, projects.meaning, projects.project_id FROM projects JOIN users WHERE projects.warlord = users.user_id ') or die('Error '.mysql_error());
				for($projects=array();$project=mysql_fetch_assoc($result); $projects[]=$project);
				for ($i=0;$i<count($projects);$i++)
			{
				echo '<div class="project">';
					echo'<div class="leftbar_of_project">';
						echo'<div class="projectname">';
							echo '<a href="project.php?id='.$projects[$i]["project_id"].'">'.$projects[$i]["moniker"].'</a>';
						echo '</div>';
						echo '<div class="project_footer">';
							echo '<div class="chief">';
								echo '<a href="user.php?id='.$projects[$i]['user_id'].'">'.$projects[$i]["name"].' '.$projects[$i]["surname"].'</a>';
							echo '</div>';
							echo '<div class="deadline">';
								echo $projects[$i]["killline"];
							echo '</div>';
						echo '</div>';
					echo '</div>';
					echo '<div class="status">';
						echo $projects[$i]["meaning"];
					echo "</div>";
				echo "</div>";
			}
		?>
			
		</div>
	</body>
</html>