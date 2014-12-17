<?php 
	require_once(__DIR__ . "/../model/config.php");
?>
<!--this is our login page-->
<center><div id="create_">Login Here!</div>
<div>&#771;</div>
<form method="post" action="<?php echo $path . "controler/login-user.php"; ?>">
	<div id="title_">
		<label for="username">Username: </label><!--our lable for logging in for username-->
		<input type="text" name="username" />
	</div>
	<div>&#771;</div>
	<div id="post_">
		<label for="password">Password: </label><!--our label for logging in with password-->
		<input type="password" name="password" />
	</div>
	<div>&#771;</div>
	<div>
		<button id="button_" type="submit" class="btn btn-primary">Login!</button><!--submit button for the post-->
	</div></center>
	<div>&#771;</div>
</form>