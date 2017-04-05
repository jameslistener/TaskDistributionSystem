<?php require ('header.php'); ?>

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

<?php require ('footer.php'); ?>