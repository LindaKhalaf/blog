<?php 
	require_once(__DIR__ . "/../model/config.php");
 ?>
<!--this whole file is how we register -->
<center><div id="create_">Register</div>

<form method="post" action="<?php echo $path . "controler/create-user.php"; ?>"><!--this is how we get to our create-user.php page -->
	<div id="title_">
		<label for="email">Email: </label><!--our email label-->
		<input type="text" name="email" />
	</div>
<div>&#771;</div>
	<div id="post_">
		<label for="username">Username: </label><!--our username label-->
		<input type="text" name="username" />
	</div>
<div>&#771;</div>
	<div id="post_">
		<label for="password">Password: </label><!--our password label-->
		<input type="password" name="password" />
	</div>
<div>&#771;</div>
	<div>
		<button id="button_" type="submit" class="btn btn-primary">Register!</button><!--submit button for the post-->
	</div></center>
</form>