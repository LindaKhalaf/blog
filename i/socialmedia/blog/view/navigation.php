<?php 
	require_once(__DIR__ . "/../model/config.php");
 ?>

<nav>
	<!--$path allows us to go and grab files from the folder socialmedia and within that the folder blog-->
		<a class="link" href="<?php echo $path . "blog/post.php"; ?>">Are Your ready to blog?</a> <!--had to add the "/socialmedia/" because "/blogs/" is not the first folder in th project-->
</nav>