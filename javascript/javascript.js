(function(window,undefined){
	
	History.Adapter.onDomLoad(function(){
		getData();
	});
	
	//Use history.js plugin for navigation - push state, load new content
	History.Adapter.bind(window,'statechange',function(){ 
	        getData();

	});
	
	function getData(){
		var state = History.getState();
		if (!state.data.state) {
			state = 'target=home';
			History.pushState({state:'home'}, 'Home', '?target=home');
		}
		else {
			state = 'target='+state.data.state;
			$.get('contents.php', state, function(data){
				if(state == 'target=bubbles'){
					clearInterval(spawnInterval);
					$('#loading_zone').html(data).waitForImages(startBubbles());
				}
				else{
					$('#loading_zone').html(data);
				}

			});
		}
	}

})(window);


$(function(){
	
	var History = window.History;
	
	$('li a').click(function(){
		var target = this.id;
		History.pushState({state:target}, target, '?target='+target);
		return false;
	});
	
});