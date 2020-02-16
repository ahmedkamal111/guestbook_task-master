<nav class="navbar navbar-expand-lg navbar-light bg-light header">
    <a class="navbar-brand" href="<?php echo $url_home; ?>">Guest Book</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <?php
        //If the user is logged, we display links to edit his infos, to see his pms and to log out
        if(isset($_SESSION['username']))
        {
        //We count the number of new messages the user has
        $nb_new_pm = mysql_fetch_array(mysql_query('select count(*) as nb_new_pm from pm where ((user1="'.$_SESSION['userid'].'" and user1read="no") or (user2="'.$_SESSION['userid'].'" and user2read="no")) and id2="1"'));
        //The number of new messages is in the variable $nb_new_pm
        $nb_new_pm = $nb_new_pm['nb_new_pm'];
        //We display the links
        ?>
        <li class="nav-item">
          <a class="nav-link" href="edit_infos.php" style="padding-left: 151px;padding-top: 20px;">Edit my personnal informations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="list_pm.php" style="padding-top: 20px;">My personnal messages(<?php echo $nb_new_pm; ?> unread)</a><br />
        </li>
        <li class="nav-item">
          <a class="nav-link" href="users.php" style="padding-top: 20px;">list of users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="connexion.php" style="padding-top: 20px;">Logout</a>
        </li>
        <?php
        }
        else
        {
        //Otherwise, we display a link to log in and to Sign up
        ?>
        <li class="nav-item">
          <a class="nav-link" href="connexion.php" style="padding-left: 500px;padding-top: 20px;">Log in</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sign_up.php" style="padding-top: 20px;">Sign up</a><br />
        </li>
        <?php
        }
        ?>
      </ul>
    </div>
</nav>
