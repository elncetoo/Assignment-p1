<link rel="stylesheet" href="css/styles.css">
<?php
$curpage = basename ($_SERVER['PHP_SELF']);
?>
<div id='cssmenu'>
<ul>
<li <?php if($curpage == 'index.php') {echo 'class="active"'; } ?>><a href="index.php">Home</a></li>
<li <?php if($curpage == 'gallery.php') {echo 'class="active"'; } ?>><a href="gallery.php">Gallery</a></li>
<li <?php if($curpage == 'about.php') {echo 'class="active"'; } ?>><a href="about.php" >About</a></li>

</ul>
</div>