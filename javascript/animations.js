$(function(){
	//Projects images mouseover animations
	$('#loading_zone a img').live('mouseover', function(){
		$(this).addClass('shadow');
	}).live('mouseout', function(){
		$(this).removeClass('shadow');
	});

	//Projects headlines mouseover animations
	$('.project_title a').mouseover(function(){
		$(this).addClass('text_shadow_light');
	}).mouseout(function(){
		$(this).removeClass('text_shadow_light');
	});
	
	//Nav mouseover - currently not doing as much as I'd like
	$('nav[role="navigation"] a, #buttons a').mouseover(function(){
		$(this).addClass('text_shadow_dark');
	}).mouseout(function(){
		$(this).removeClass('text_shadow_dark');
	});
	
	//Right buttons mouseover.
	$('#buttons figure').mouseover(function(){
		$(this).removeClass('inactive');
	}).mouseout(function(){
		$(this).addClass('inactive');
	});
	
	
	
});