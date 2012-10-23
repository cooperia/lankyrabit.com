$(function(){
	
	$('#loading_zone a img').live('mouseover', function(){
		$(this).addClass('shadow');
	}).live('mouseout', function(){
		$(this).removeClass('shadow');
	});

	$('.project_title a').mouseover(function(){
		$(this).addClass('text_shadow_light');
	}).mouseout(function(){
		$(this).removeClass('text_shadow_light');
	});
	
	$('nav[role="navigation"] a, #buttons a').mouseover(function(){
		$(this).addClass('text_shadow_dark');
	}).mouseout(function(){
		$(this).removeClass('text_shadow_dark');
	});
	
	$('#buttons figure').mouseover(function(){
		$(this).removeClass('inactive');
	}).mouseout(function(){
		$(this).addClass('inactive');
	});
	
	
	
});