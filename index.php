<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8'>
        <title>Laugh Some more</title>
	<link rel='icon' href="favicon.ico">
	<link rel="stylesheet" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>
        <div id='safe'>
                <h2 class='safe'>
                        This Joke is not safe. <br>
                        Press show to see. or refresh to get new.<br>
                </h2><br>
                <button class='safe safe-button'>Show </button>
		<button class='new-joke'>New Joke</button>
		<form method='post' class='selection'>
			<div class='category grid'>
				<p>Select Category:</p>
				<div class='categories'>
					<label for='Programming'><input type='checkbox' name='programming'>Programming</label>
					<label for='Misc'><input type='checkbox' name='misc'>Misc</label>
					<label for='Dark'><input type='checkbox' name='dark'>Dark</label>
					<label for='pun'><input type='checkbox' name='pun'>Pun</label>
					<label for='spooky'><input type='checkbox' name='spooky'>Spooky</label>
					<label for='christmas'><input type='checkbox' name='christmas'>Christmas</label>
				</div>

				<p>Select to blacklist: </p>
				<div class='flag-list'>
					<label for='nsfw'><input type='checkbox' name='nsfw'>nsfw</label>
					<label for='religious'><input type='checkbox' name='religious'>religious</label>
					<label for='political'><input type='checkbox' name='political'>political</label>
					<label for='racist'><input type='checkbox' name='racist'>racist</label>
					<label for='sexist'><input type='checkbox' name='sexist'>sexist</label>
					<label for='explicist'><input type='checkbox' name='explicit'>explicit</label>
					<label for='safe'><input type='checkbox' name='safe'>safe-mode</label>
				</div>
			</div>
			<input type='submit' name='submit' class='pointer' value='submit'>
		</form>
		<div class='category-changed'>category Changed</div>
		<div class='joke'>
		</div>

</div>
        <script src='./java.js'></script>
        <script>
                const name="<?php echo $name ?>";
        </script>
<script scr='java.js'></script>
</body>
</html>
