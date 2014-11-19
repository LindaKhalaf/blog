<?php 
	require_once(__DIR__ . "/../model/config.php");
 ?>
<div id="color">
<h1>Create Blog Post</h1>

<form method="post" action="<?php echo $path . "controler/create-post.php"; ?>"><!--connects this file to the file create-post.php -->
	<div id="title_">
		<label for="title">Title: </label> <!--creates the box and label for the title of the post-->
		<input type="text" name="title"/>
	</div>

	<div id="post_">
		<label for="post">Post: </label><!--creates the label and the box for the post-->
		<textarea name="post"></textarea>
	</div>

	<div>
		<button type="submit">Post Your Post!</button><!--submit button for the post-->
	</div>
</form>

</div>