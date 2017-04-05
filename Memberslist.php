<!DOCTYPE html> 
<html>
	<head>
		<meta charset="utf-8">
		<link href="styles3.css" rel="stylesheet">
		<link href="csska.css" rel="stylesheet">
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
		mysql_connect('localhost','root','') or die('Error '.mysql_error());
				mysql_select_db('katya_mosin_dasha') or die('Error '.mysql_error());
				$userlist = mysql_query( 'SELECT * FROM users') or die('Error '.mysql_error());
				for ($users=array();$user=mysql_fetch_assoc($userlist); $users[]=$user);
				for ($k=0;$k<count($users);$k++)
				{
					echo '<div class="members">';
		echo '<div class="person">';
			echo '<div class="name">';
				echo '<a class="Yourname" href="#">'.$users[$k]['name'].'</a>';
				echo '</div>';
			echo '<div class="Surname">';
				echo '<a class="Yourname" href="#">'.$users[$k]['surname'].'</a>';
			echo '</div>';
			echo '<div class="jobs">';
				echo '<p>'.$users[$k]['profession'].'</p>';
			echo '</div>';
			echo '<div class="closer"></div>';
		echo '</div>';
	echo '</div>';
				}
		?>
	</div>
	</div>
	</body>
</html>