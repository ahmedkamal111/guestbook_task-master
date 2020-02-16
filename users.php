<?php
include('config.php');
?>
<!DOCTYPE html   >
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="<?php echo $design; ?>/style.css" rel="stylesheet" title="Style" />
        <title>List of users</title>
    </head>
    <body>
      <?php
      include('header.php')
      ?>
        <div class="content">
This is the list of members:
<table>
    <tr>
    	<th>Id</th>
    	<th>Username</th>
    	<th>Email</th>
    </tr>
<?php
//We get the IDs, usernames and emails of users
$req = mysql_query('select id, username, email from users');
while($dnn = mysql_fetch_array($req))
{
?>
	<tr>
    	<td class="left"><?php echo $dnn['id']; ?></td>
    	<td class="left"><a href="profile.php?id=<?php echo $dnn['id']; ?>"><?php echo htmlentities($dnn['username'], ENT_QUOTES, 'UTF-8'); ?></a></td>
    	<td class="left"><?php echo htmlentities($dnn['email'], ENT_QUOTES, 'UTF-8'); ?></td>
    </tr>
<?php
}
?>
</table>
		</div>
		<div class="foot"><a href="<?php echo $url_home; ?>">Go Home</a>   </div>
	</body>
</html>
