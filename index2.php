<style>
	body {
		background: #2e7fb3;	
		color:white;
		font-family: 'sans-serif';
		letter-spacing: 1px;
		padding: 15vmin;
		word-wrap:wrap-all;
}
	#joke {
		color: orange;	
}
	h1,h2{
		font-size:3vmin;
		white-space:initial;
}
	.safe {
		display: none;
}
	button {
		font-size:2vmin;
		padding:0.5vmin;
		background:white;
		border-radius:0.5vmin;
		border-color:transparent;
		margin:5px;
		cursor:pointer;
		font-weight:bold;
}
	button:hover {
		background:rgba(255,255,255,0.5);
		color:white;
		transition: all 0.2s;
}
	#category {
		color:black;
		opacity:0.6;
	}
</style>


<html>	
	<title>Laugh Some more</title>
	<link rel='icon' href="favicon.ico">
	<div id='safe'>
		<h2 class='safe'>
			This Joke is not safe. <br>
			Press show to see. or refresh to get new.<br>
		</h2><br>
		<button class='safe safe-button'>Show </button>
		<button class='new-joke'>New Joke</button>
</div>
	<script src='./java.js'></script>
	<script>
		const name="<?php echo $name ?>";
	</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</html>

<?php
	$api_url='https://v2.jokeapi.dev/joke/Any';
	$joke_data=json_decode(file_get_contents($api_url),true);
	
	echo "<pre>";
	print_r($joke_data);
	
	$type=$joke_data['type'];

	$safe=$joke_data['safe'];
	$category=$joke_data['category'];
	echo "<h1 id='category'>Category: $category</h1>";

	if($type == 'twopart') {
		$setup=$joke_data['setup'];
		$delivery=$joke_data['delivery'];

		echo "<h1>🌹setup: $setup</h1>";
		echo "<h1>🔥punch: $delivery</h1>";
	}
	else {
		$joke=$joke_data['joke'];
		echo "<h1 id='joke'>Joke:</h1>";
		echo "<h1>$joke</h1>";
	};

	$name="Surendra Longre";


?>


	<script>
	const is_safe="<?php echo $safe ?>";
	if(!is_safe) {
		$('.safe').css('display','inline-block');
		$('h1').css('display','none');
	}
	$('.new-joke').click(function(){
		window.location.reload();
	});
	$('.safe-button').click(function(){
		$('.safe').css('display', 'none');
		$('h1').css('display', 'block');
	});
	</script>

