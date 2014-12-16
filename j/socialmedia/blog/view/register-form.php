<?php 
	require_once(__DIR__ . "/../model/config.php");
 ?>
<!--this whole file is how we register -->
<h1>Register</h1>

<form method="post" action="<?php echo $path . "controler/create-user.php"; ?>"><!--this is how we get to our create-user.php page -->
	<div>
		<label for="email">Email: </label><!--our email label-->
		<input type="text" name="email" />
	</div>

	<div>
		<label for="username">Username: </label><!--our username label-->
		<input type="text" name="username" />
	</div>

	<div>
		<label for="password">Password: </label><!--our password label-->
		<input type="password" name="password" />
	</div>


	<div>
		<button type="submit" class="btn btn-primary">Submit!</button><!--submit button for the post-->
	</div>
</form>