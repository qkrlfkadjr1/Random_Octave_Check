<?php
require_once('lib/print.php');
require_once('view/top.php');
?>
		
		<a href="create.php">create</a>
		<form action="create_process.php" method="post">
			<p>
				<input text="text" name="title"	placeholder="가수">
			</p>
			<p>
				<textarea name="description" placeholder="내용"></textarea>
			</p>
			<p>
				<input type="submit" value="확인">
			</p>
		</form>
		
		
<?php
require_once('view/bottom.php');
?>