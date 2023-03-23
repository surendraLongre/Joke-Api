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
	h1{
		width:100%;
}
</style>
<?php
	$api_url='https://v2.jokeapi.dev/joke/Any';
	$joke_data=json_decode(file_get_contents($api_url),true);
	
	echo "<pre>";
	print_r($joke_data);
	
	$type=$joke_data['type'];

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

?>
