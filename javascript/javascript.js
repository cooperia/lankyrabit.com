$(function(){
	
	var History = window.History;
	
	$(document).ready(function(){
		History.pushState({state:'home'}, 'Home', '?target=home');
	});
	
	$('li a').click(function(){
		var target = this.id;
		History.pushState({state:target}, 'Home', '?target='+target);
		return false;
	});
	
	
	
//	function loadContent(target){
//		alert('running');
//		targetFull = 'target='+target;
//		$.get('contents.php', targetFull, function(data){
//			alert(data);
//		    $('#contentWrapper').html(data);
//		});
//	}
	
	
	

	
});