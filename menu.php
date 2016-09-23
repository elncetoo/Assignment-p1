
<link rel="stylesheet" href="styles.css">
<?php
$curpage = basename ($_SERVER['PHP_SELF']);
?>
<div id='cssmenu'>
<ul>
<li <?php if($curpage == 'index.php') {echo 'class="active"'; } ?>><a href="index.php">Home</a></li>
<li <?php if($curpage == 'gallery.php') {echo 'class="active"'; } ?>><a href="gallery.php">Purpose</a></li>
<li <?php if($curpage == 'about-us.php') {echo 'class="active"'; } ?>><a href="about-us.php" >About Us</a></li>

</ul>
</div>