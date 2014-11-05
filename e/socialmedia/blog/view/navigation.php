<?php 
require_once(__DIR__ . "/../model/config.php");
 ?>

<nav>
	<ul>
	<!--$path allows us to go and grab files from the folder socialmedia and within that the folder blog-->
		<li><a href="<?php echo $path . "post.php"?>">Blogs Post Form</a></li> <!--had to add the "/socialmedia/" because "/blogs/" is not the first folder in th project-->
	</ul>
</nav>