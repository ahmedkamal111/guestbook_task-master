<?php
include('config.php');
?>
<!DOCTYPE html   >
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo $design; ?>/style.css" rel="stylesheet" title="Style" />
        <title>Profile of an user</title>
    </head>
    <body>
    	<div class="header">
        	<a href="<?php echo $url_home; ?>">Guest Book</a>
	    </div>
        <div class="content">
<?php
//We check if the users ID is defined
if(isset($_GET['id']))
{
	$id = intval($_GET['id']);
	//We check if the user exists
	$dn = mysql_query('select username, email, signup_date from users where id="'.$id.'"');
	if(mysql_num_rows($dn)>0)
	{
		$dnn = mysql_fetch_array($dn);
		//We display the user datas
?>
This is the profile of "<?php echo htmlentities($dnn['username']); ?>" :
<table style="width:500px;">
    	<td class="left"><h1><?php echo htmlentities($dnn['username'], ENT_QUOTES, 'UTF-8'); ?></h1>
    	Email: <?php echo htmlentities($dnn['email'], ENT_QUOTES, 'UTF-8'); ?><br />
        This user joined the website on <?php echo date('Y/m/d',$dnn['signup_date']); ?></td>
    </tr>
</table>
<?php
//We add a link to send a pm to the user
if(isset($_SESSION['username']))
{
?>
<br /><a href="new_pm.php?recip=<?php echo urlencode($dnn['username']); ?>" class="big">Send a PM to "<?php echo htmlentities($dnn['username'], ENT_QUOTES, 'UTF-8'); ?>"</a>
<?php
}
	}
	else
	{
		echo 'This user dont exists.';
	}
}
else
{
	echo 'The user ID is not defined.';
}
?>
		</div>
		<div class="foot"><a href="users.php">Go to the users list</a>   </div>
	</body>
</html>
