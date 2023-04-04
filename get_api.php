<?php
	//for the category
	$programming=$_POST['programming'];
	$misc=$_POST['misc'];
	$dark=$_POST['dark'];
	$pun=$_POST['pun'];
	$spooky=$_POST['spooky'];
	$christmas=$_POST['christmas'];

	//for the blacklist
	$nsfw=$_POST['nsfw'];
	$religious=$_POST['religious'];
	$political=$_POST['political'];
	$racist=$_POST['racist'];
	$saxist=$_POST['sexist'];
	$explicit=$_POST['explicit'];
	$safe=$_POST['safe'];

	//forming the api url
	$category=[$programming, $misc, $dark, $pun, $spooky, $christmas];
	$blacklist=[$nsfw, $religious, $political, $racist, $saxist, $explicit];

	$category_value=['Programming', 'Misc','Dark','Pun','Spooky','Christmas'];
	$blacklist_value=['nsfw', 'religious','political', 'racist', 'sexist', 'explicit'];
	
	
	$category_cnt=0; $black_cnt=0;
	$api_url='https://v2.jokeapi.dev/joke/';

	for($x=0; $x<count($category); $x++){
		if(!empty($category[$x])) {
			if($category_cnt==0) $api_url.=$category_value[$x];
			else $api_url.=",".$category_value[$x];
			$category_cnt++;
		}
	}

	if($category_cnt==0) $api_url.='Any';

	for($x=0; $x!=count($blacklist); $x++){
		if(!empty($blacklist[$x])) {
			if($black_cnt==0) $api_url.='?blacklistFlags='.$blacklist_value[$x];
			else $api_url.=",".$blacklist_value[$x];
			$black_cnt++;
		}
	}

	if(empty($safe) && empty($dark)) {
		if($black_cnt==0) $api_url.='?safe-mode';
		else $api_url.='&safe-mode';
	}
	echo $api_url;
?>
