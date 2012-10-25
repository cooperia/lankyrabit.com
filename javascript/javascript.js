(function(window,undefined){
	//First load and on reload
	History.Adapter.onDomLoad(function(){
		getData();
	});
	
	//On statechange (executed by the .click function below), change state
	History.Adapter.bind(window,'statechange',function(){ 
	        getData();

	});
	
	//Perform the meat of the state change
	function getData(){
		var state = History.getState();
		//If state undefined, default home.
		if (!state.data.state) {
			state = 'target=home';
			History.pushState({state:'home'}, 'Home', '?target=home');
		}
		//Else load state. If bubbles, clear interval and run startBubbles.
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
	//On nav click, push state and cause handlers above to fire. 
	$('li a').click(function(){
		var target = this.id;
		History.pushState({state:target}, target, '?target='+target);
		return false;
	});
	
});