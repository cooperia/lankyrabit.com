
	function DisplaySpace(height, width){
		var bwHeight, 
			bwWidth,
			top,
			left;

		//numerical
		this.getHeight = function(){
			return bwHeight;
		};
		this.getWidth = function(){
			return bwWidth;
		};

		this.getTop = function(){
			return top;
		};

		this.getLeft = function(){
			return left;
		};

		//takes numerical, either or both
		this.setDim = function(height, width) {
			if(height == null){
				bwWidth = Math.floor(width*.622);
				left = Math.floor(width*.12);
				return this;
			}
			if(width == null){
				bwHeight = Math.floor(height*.60);
				top = Math.floor(height*.28);
				return this;
			}
			else {
				bwWidth = Math.floor(width*.622);
				bwHeight = Math.floor(height*.60);
				left = Math.floor(width*.12);
				top = Math.floor(height*.28);
				return this;
			}	
		};

		this.setDim(height, width);
	}

	function Bubble(id, displaySpace, array){
		var x = (Math.floor((Math.random()*displaySpace.getWidth())+1))+displaySpace.getLeft(),
		y = (Math.floor((Math.random()*displaySpace.getHeight())+1))+displaySpace.getTop();

		this.id = function(){
			return id;
		}
		this.xStart = function(){
			return x;
		}
		this.yStart = function(){
			return y;
		}

		this.anLength = function(){
			return Math.floor(Math.random()*10000);
		}

		this.spawnimate = function(bubble){
			var that = bubble;
			var thatID = that.id();
			var dimEnd = Math.floor((Math.random()*10)+5);
			//alert('Spawnimate id: '+thatID+' xStart: '+that.xStart()+' yStart: '+that.yStart()+' dimEnd: '+dimEnd);
			//alert(that.xStart()-2.5);
			$('#bubbleWrap').append('<div class="circle bubble_hidden attached bubble" id="'+thatID+'"></div>');
			$('#'+thatID).css({'left': that.xStart()+'px', 'top': that.yStart()+'px'});
			//alert('Spawnimate id: '+thatID+' xStart: '+that.xStart()+' yStart: '+that.yStart()+' dimEnd: '+dimEnd);
			$('#'+thatID).removeClass('bubble_hidden').animate({
				width: dimEnd+'px',
				height: dimEnd+'px',
				top: (that.yStart()-2.5)+'px',
				left: (that.xStart()-2.5)+'px'}, 10000, 'swing', 
				function(){
					var duration = (parseFloat($('#'+thatID).css('top')))/600*1000;
					duration = (duration/150)*1000;
					$('#'+thatID).removeClass('attached').addClass('rising');
					$('#'+thatID).animate({top: displaySpace.getTop()+'px'}, duration);
			});
		}

		this.popBubble = function(bubble){
			var that = bubble;
			var current = that.id();
			//alert('Popping has commenced');
			$('#'+current).css({'left': (that.xStart()-10)+'px', 'top': (displaySpace.getTop()-10)+'px'});
			//spawn 4 small bubbles, 'pop!', and expand the bubble container to a 30px square
			$('#'+current).removeClass('circle').width('30px').height('30px').append('<p id="'+current+'text" class="popText">Pop!</p>');

			for(var i=0; i<4; i++){
				$('#'+current).append('<div class="circle miniBub rising" id="'+current+'_'+i+'"></div>')
			}

			//Animate the 4 small bubbles. Send each to a corner of the box.
			var coords = [['0px','0px'], ['0px','30px'], ['30px','30px'], ['30px','0px']]
			for(var i=0; i<4; i++){
				$('#'+current+'_'+i).animate({
					top: coords[i][0],
					left: coords[i][1]},
					1000, 'swing', function(){
					 	$(this).remove();
				});
			}

			//Fade that text	
			$('#'+current+'text').fadeOut(2000, function(){
				$('#'+current).remove();
			});
		}

		this.checkPos = function(bubble){
			var that = bubble;
			alert('Running checkPos');
			if(x > (space.getWidth()+space.getLeft()) || y > (space.getHeight()+space.getTop())){
				$('#'+that.id).addClass('hidden');
			}
		}
	}

	var spawnInterval;
	var count = 1;
	 function startBubbles(){
		$('#bubbleWrap').waitForImages(function(){
			clearInterval(spawnInterval);
			var space = new DisplaySpace($('#bubbleWrap').height(), $('#bubbleWrap').width());
			var delay = (function(){
			  var timer = 0;
			  return function(afterResize, ms){
			    clearTimeout (timer);
			    timer = setTimeout(afterResize, ms);
			  };
			})();

			spawnInterval = setInterval(function(){
				var aBubble = new Bubble(count, space);
				count++;
				aBubble.spawnimate(aBubble);
				setTimeout(function() {aBubble.popBubble(aBubble)},Math.floor((Math.random()*30000)+10000));
			}, 500);

			$(window).resize(function(){
				delay(function(){
					space.setDim($('#bubbleWrap').height(), $('#bubbleWrap').width());
				}
				, 500);
			});
		});
	};
