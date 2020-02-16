<?php
include('config.php')
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo $design; ?>/style.css" rel="stylesheet" title="Style" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Guest Book</title>
    </head>
    <body >
      <?php
      include('header.php')
      ?>
      <div class="content">
<?php
//We display a welcome message, if the user is logged, we display it username
?>
Hello<?php if(isset($_SESSION['username'])){echo ' '.htmlentities($_SESSION['username'], ENT_QUOTES, 'UTF-8');} ?>,<br />
Welcome on our website.<br />
		</div>

	</body>
</html>
