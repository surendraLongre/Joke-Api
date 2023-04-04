datatopost={programming: ''};

$.ajax({
	url: 'get_api.php',
	type:'post',
	data:datatopost,
	success: function(data){
		api_url=data;
		load_joke();
	},
	error: function(){
		console.log('something went wrong with ajax call');
	},
});
function load_joke(){
	$.ajax({
	url: 'api.php',
	type: 'post',
	data: {api: api_url},
	success: function(data){
		$('.joke').html(data);
	},
	error: function(){
		console.log('something went wrong with the ajax call');
	}
});

};

$('.new-joke').click(function(){
	load_joke();
});

$('.selection').submit(function(event){
	$('.category-changed').css('background',`rgb(${rand_num()},${rand_num()},${rand_num()})`);
	$('.category-changed').css('display','block');
	setTimeout(function(){
		$('.category-changed').fadeOut();	
	},1000);
	event.preventDefault();
	datatopost=$(this).serializeArray();
	get_api();
});

function get_api(){
	$.ajax({
		url: 'get_api.php',
		type:'post',
		data:datatopost,
		success: function(data){
			api_url=data;
		},
		error: function(){
			console.log('something went wrong with ajax call');
		},
	});
};

function rand_num(){
	return Math.round(Math.random()*255);
};
