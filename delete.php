<?php
include('config.php');
?>
<!DOCTYPE html   >
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo $design; ?>/style.css" rel="stylesheet" title="Style" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Read a PM</title>
    </head>
    <body>
      <?php
      include('header.php')
      ?>
      <div class="content">
        <?php
            $id = $_GET['id'];
            if(mysql_query('DELETE FROM `pm` where id="'.$id.'" and id2="1"')){
        ?>
        <div class="message">Your message has successfully been deleted.<br />
        <a href="list_pm.php">Go to the messages</a></div>
        <?php
              }
              else
              {
        ?>
        <div class="message">An error occurred while deleting the message.<br />
        <a href="list_pm.php">Go to the messages</a></div>
        <?php
              	}
         ?>
      </div>
    </body>
</html>
