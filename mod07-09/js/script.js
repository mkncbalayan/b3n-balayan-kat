// $('p').hide();

// $('.para-to-hide').hide();

// $("#parahideid").hide();

// $('p').click(function() {
// 	$(this).hide();
// });

$('#parahideid').hover(function(){
	$('#parahideid').html("I am a changed paragraph.");
});

$('#parahideid').mouseout(function(){
	$('#parahideid').html("I am a paragraph");
});

$('#parahideid').click(function(){
	$(this).attr("align","right");
	$(this).css("color","red");
});