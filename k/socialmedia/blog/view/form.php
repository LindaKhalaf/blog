<?php 
	require_once(__DIR__ . "/../model/config.php");
	require_once(__DIR__ . "/../controler/login-verify.php");

	if (!authenticateUser()) {
		header("Location: " . $path . "index.php");//is we are not an authenticated user, we go back to index
		die();
	}
 ?>
<!--<div id="image">-->

<center><div id="create_"><p>Create Blog Post</p></div><!--mah title -->
<form method="post" action="<?php echo $path . "/controler/create-post.php"; ?>"><!--connects this file to the file create-post.php -->
	<div id="title_">
		<label for="title">Title: </label> <!--creates the box and label for the title of the post-->
		<input id="titleTextBox" type="text" name="title"/>
	</div>

	<div id="post_">
		<label id="postLabel" for="post">Post: </label><!--creates the label and the box for the post-->
		<textarea id="postTextBox" name="post"></textarea>
	</div>

	<div>
		<button id="button_" type="submit" class="btn btn-link">Submit!</button><!--submit button for the post-->
	</div>
</form></center>

</div>