<!doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="apple-touch-icon" href="./imgs/apple-touch-icon.png?v=2">
	<link rel="apple-touch-icon" sizes="152x152" href="./imgs/apple-touch-icon.png?v=2">
	<link rel="icon" type="image/png" href="./imgs/favicon-32x32.png?v=1" sizes="32x32" />
	<link rel="icon" type="image/png" href="./imgs/favicon-16x16.png?v=1" sizes="16x16" />
	<title>Tuck Shop</title>
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no, minimal-ui">
	<meta name="apple-mobile-web-app-title" content="Tuck shop">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta name="format-detection" content="telephone=no">
    <style>
    	body, *{
    		padding: 0;
    		margin: 0;
			font-family: 'Avenir Next','Avenir Next Regular','Helvetica Neue', Helvetica, Arial, sans-serif;
			-moz-user-select: -moz-none;
			-khtml-user-select: none;
			-webkit-user-select: none;
			-ms-user-select: none;
			user-select: none;
    	}
    	body{
			height: 100%; min-height: 100%;
			font-size: 25px;
			color: #fff;
    	}



    	#head{
			width: 20em;
			height: 2em;
			margin: 0 auto;
			font-size: 2em;
			text-align: center;
			line-height: 2.5em;
			color: #E67E22;
    	}

    	#wrapper{
			width: 40em;
			height: 26em;
			margin: 0 auto;
			overflow: hidden;
    	}

    	.button{
			width: 8em;
			height: 3em;
			margin: 1em;
			background-color: rgba(0,0,0,0.3);
			text-align: center;
			background-repeat: no-repeat;
			background-position: center center; 
			background-size: 8em 3em;
    	}
    	.button:active{
			background-color: rgba(255,255,255,0.5);
    	}


    	#jaynes{
    		float: left;
			width: 10em;
			height: 16em;
			margin: 1em 0 0 1em;
			background-color: #c990d4;
    	}

	    	.tittle{
				width: 5.7142857143em;
				height: 1.4285714286em;
				margin: 0.7142857143em;
				font-size: 1.4em;
				text-align: center;
				line-height: 1.4285714286em;
	    	}

	    	#jaynes>.button{
				line-height: 3em;
	    	}

	    	#muffins{
	    		background-image: url("./imgs/muffins.png");
	    	}

	    	#cakes{
	    		background-image: url("./imgs/cakes.png");
	    	}

	    	#biscuits{
	    		background-image: url("./imgs/biscuits.png");
	    	}


	    #bars{
    		float: left;
			width: 10em;
			height: 16em;
			margin: 1em 0 0 1em;
			background-color: #5692b0;
	    }

	    	#bars>.button{
	    		height:4em;
	    	}

	    	#crisps{
				line-height: 4em;
	    		background-image: url("./imgs/crisps.png");

	    	}

	    	#oreos{
				line-height: 4em;
	    		background-image: url("./imgs/oreos.png");

	    	}

	    	#other-choco-bars{
	    		line-height: 1.3em;
	    		background-image: url("./imgs/other-choco-bars.png");
	    	}

	    #counter{
			position: relative;

    		float: left;
	    	width: 12em;
			margin: 1em 0 0 1em;
			padding: 1em;
	    	height: 12em;
	    	border: 1em solid #6ea45a;

	    	color: #6ea45a;
	    	overflow: scroll;
	    }
	    	#counter-itmes{
				width: 12em;
				height: 12em;
			    position: absolute;
			    top: 0;
			    text-align: right;
			    overflow: scroll;
			    line-height: 0.9em;
	    	}
	    		#counter-items>div{
					width: 12em;
	    		}
	    		div.left{
	    			position: relative;
	    			margin-top: 0.1em;
				    text-align: left;
	    		}
	    		div.left:before{
					width: 0.08em;
					height: 0.4em;
					margin: -0.2em 0 0 -0.04em;
	    		}
	    		div.left:after{
					width: 0.4em;
					height: 0.08em;
					margin: -0.04em 0 0 -0.2em;
	    		}
	    		div.left:before, div.left:after{
					content: '';
					position: absolute;
					background: #CA423E;
					left: 98%;
					top: 50%;
					-webkit-transform: rotate(45deg);
	    		}
	    		div.right{
				    text-align: right;
	    		}
	    	#counter-sum{
				width: 12em;
				height: 2em;
			    position: absolute;
			    bottom: 0;
			    border-top: 0.1em solid #6ea45a;
			    text-align: right;
	    	}
	    	#last-counter-sum{
				width: 10em;
				height: 2em;
			    position: absolute;
			    bottom: 0;
			    right: 2.6em;
			    text-align: right;
			    font-size: 0.4em;
	    	}

	    #drink{
    		float: left;
			width: 21em;
			height: 5em;
			margin: 1em 0 0 1em;
			background-color: #e6bb57;
	    }

	    	#drink>.button{
	    		display: inline-block;
				line-height: 3em;
	    	}

	    	#drinks{
	    		background-image: url("./imgs/drinks.png");
	    	}

	    	#hot-choco{
	    		background-image: url("./imgs/hot-choco.png");
	    		width: 10em;
	    		margin-left: 0px;
	    	}
	    #toastie{
    		float: left;
			width: 6em;
			height: 5em;
			margin: 1em 0 0 1em;
			background-color: #ed7e68;
	    }
	    	#toasties{
	    		width: 4em;
	    		line-height: 1.5em;
	    		background-image: url("./imgs/toasties.png");
	    	}

	    #zero-button{
			text-align: center;
			background-repeat: no-repeat;
			background-position: center center; 
			background-size: 8em 3em;
    		float: left;
			width: 6em;
			height: 3.3333333333em;
			margin: 0.6666666667em 0 0 0.6666666667em;
			background-color: #6ea45a;
			font-size: 1.5em;
			line-height: 3.3333333333em;
	    }

    	#zero-button:active{
			background-color: rgba(110,164,90,0.5);
    	}

	    #toastie-queue{
    		float: left;
	    	width: 38em;
			height: 1em;
			margin: 1em 0 0 1em;
			color: #ed7e68;
	    }
	    	#qing-toasties{
		    	width: 18em;
				height: 1em;
				float: left;
				line-height: 1.6em;
	    	}
	    	#minus-one-toastie{
		    	width: 3em;
				height: 1.6em;
				float: right;
				background-color: #ed7e68;
				color: #fff;
				text-align: center;
				line-height: 1.6em;
	    	}
	    	#minus-one-toastie:active{
				background-color: rgba(237, 126, 104, 0.5);
	    	}

	    #stat-window{
			width: 36em;
			height: 20em;
			position: absolute;
			left: 50%;
			top: 50%;
			margin: -10em 0 0 -18em;
			background-color: rgba(157, 193, 127, 0.97);
			-webkit-transition: all 300ms cubic-bezier(.4,0,.2,1);
			overflow: scroll;
	    }

		    .hide{
				box-shadow: rgba(0,0,0,0.7) 0px 0px 0px 0px;
				-webkit-transform: translateX(-1200px);
		    }

		    .show{
				box-shadow: rgba(0,0,0,0.7) 0px 30px 50px 6px;
				-webkit-transform: translateX(0px);
		    }

		    #stat{
		    	font-size: 0.8em;
		    	text-decoration: underline;

		    }

		    #close-stat-window{
				position: absolute;
				right: 0px;
				margin-top: 0.7em;
				width: 3em;
				height: 1.2em;
		    }
			#close-stat-window:before{
				width: 0.1em;
				height: 1em;
				margin: -0.5em 0 0 -0.05em;
			}
			#close-stat-window:after{
				width: 1em;
				height: 0.1em;
				margin: -0.05em 0 0 -0.5em;
			}
			#close-stat-window:before, #close-stat-window:after{
				content: '';
				position: absolute;
				background: #CA423E;
				left: 50%;
				top: 50%;
				-webkit-transform: rotate(45deg);
			}
			#stat-window-content{
				margin: 1em;
				font-size: 1.6em;
				text-align: right;
			}
				#stat-window-content>hr{
					height: 0.05em;
					background-color: #fff;
					border: 0px;
				}

				span.stat-items:active{
					color: rgba(110,164,90,0.5);
				}

				.minus-one{
					color: #DD5E45;
					font-size: 0.6em;
				}

    </style>
</head>
<body>
	<div id="head">
	Kennedy's Tuck Shop Cashier <a id="stat">&gt;stat</a>
	</div>
	<div id="wrapper">
		<div id="jaynes">
			<div class="tittle">Jayne's</div>
			<div class="button" id="muffins">Muffins £1.50</div>
			<div class="button" id="cakes">Cakes £1.20</div>
			<div class="button" id="biscuits">Biscuits £1.00</div>
		</div>
		<div id="bars">
			<div class="button" id="crisps">Crisps £0.50</div>
			<div class="button" id="oreos">Oreo's £0.90</div>
			<div class="button" id="other-choco-bars">Other<br>Chocolate Bars<br>£0.60</div>
		</div>
		<div id="counter">
			<div id="counter-itmes"></div>
			<div id="counter-sum">total&nbsp;&nbsp;£ 0.00</div>
			<div id="last-counter-sum">Previous £ 0.00</div>
		</div>
		<div id="drink">
			<div class="button" id="drinks">Drinks £1.00</div><div class="button" id="hot-choco">Hot Chocolate £0.50</div>
		</div>
		<div id="toastie">
			<div class="button" id="toasties">Toasties<br>£1.00</div>
		</div>
		<div id="zero-button">Clear</div>
		<div id="toastie-queue">
			<div id="qing-toasties">Queueing toasties: 0</div>
			<div id="minus-one-toastie">-1</div>
		</div>

		<div id="stat-window" class="hide">
			<div id="close-stat-window">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
			<div id="stat-window-content">Nothing sold&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
		</div>
	</div>

    <script src="js/jquery-2.1.1.js"></script>
    <script>

 		var car = {
 			items: {
	 			muffins: {number:0,total_sold:0,name:"Muffins",price:"Muffins",price:1.50},
	 			cakes: {number:0,total_sold:0,name:"Cakes",price:1.20},
	 			biscuits: {number:0,total_sold:0,name:"Biscuits",price:1.00},
	 			crisps: {number:0,total_sold:0,name:"Crisps",price:0.50},
	 			oreos: {number:0,total_sold:0,name:"Oreo's",price:0.90},
	 			other_choco_bars: {number:0,total_sold:0,name:"Other Chocolate Bars",price:0.60},
	 			drinks: {number:0,total_sold:0,name:"Drinks",price:1.00},
	 			hot_choco: {number:0,total_sold:0,name:"Hot Chocolate",price:0.50},
	 			toasties: {number:0,total_sold:0,name:"Toasties",price:1.00}
 			},
 			sum: 0,
 			total_sum: 0,
 			queueing_toastie: 0,
 			getItem: function( id ){
	 			if(id == "muffins"){
	 				return this.items.muffins;
	 			}else if(id == "cakes"){
	 				return this.items.cakes;
	 			}else if(id == "biscuits"){
	 				return this.items.biscuits;
	 			}else if(id == "crisps"){
	 				return this.items.crisps;
	 			}else if(id == "oreos"){
	 				return this.items.oreos;
	 			}else if( (id == "other-choco-bars") || (id == "other_choco_bars") ){
	 				return this.items.other_choco_bars;
	 			}else if(id == "drinks"){
	 				return this.items.drinks;
	 			}else if( (id == "hot-choco") || (id == "hot_choco") ){
	 				return this.items.hot_choco;
	 			}else if(id == "toasties"){
	 				return this.items.toasties;
	 			}
 			}
 		};

		var buttonTapped = function(){
			$("#counter-itmes").html($("#counter-itmes").html()+"<div class='left' data-id='"+$(this).attr("id")+"'>"+(car.getItem($(this).attr("id")).name)+"</div><div class='right'>£ "+( (car.getItem($(this).attr("id")).price).toFixed(2) )+"</div>");
			car.getItem($(this).attr("id")).number += 1;
			car.sum += car.getItem($(this).attr("id")).price;
	        $("#counter-sum").html("total&nbsp;&nbsp;£ "+( (car.sum).toFixed(2) ));
	        $("#counter-itmes").animate({scrollTop: $("#counter-itmes").prop("scrollHeight")}, 200);

			if(is_touch_device){
				$( ".left" ).each(function(index) {
				    $(this).on("touchend", deleteItem);
				});
			}else{
				$( ".left" ).each(function(index) {
				    $(this).on("click", deleteItem);
				});
			}
		};

		var deleteItem = function(){
			car.getItem($(this).attr("data-id")).number -= 1;
			car.sum -= (car.getItem($(this).attr("data-id")).price);
	        $("#counter-itmes").animate({scrollTop: $("#counter-itmes").prop("scrollHeight")}, 200);
	        $("#counter-sum").html("total&nbsp;&nbsp;£ "+( (car.sum).toFixed(2) ));
			$(this).next().remove();
			$(this).remove();
		};

		counter=0;
		tempSum = 0;
		var clearTotal = function(){
	        $("#counter-sum").html("total&nbsp;&nbsp;£ "+(tempSum * (Math.exp(-0.03*counter))).toFixed(2) );
			
			counter += 1;
		};

		var zero = function(){
			if(car.sum > 0){
		        $.each( car.items, function( key, value ) {
					value.total_sold += value.number;
				});

				car.queueing_toastie += car.items.toasties.number;
				$("#qing-toasties").text("Queueing toasties: "+car.queueing_toastie);
				$("#counter-itmes").html("");
		        tempSum = car.sum;
		        $("#last-counter-sum").html("Previous £ "+(car.sum).toFixed(2));
				var countdown = setInterval(function(){ clearTotal() }, 1);
				setTimeout(function(){
					clearInterval(countdown);
			        $("#counter-sum").html("total&nbsp;&nbsp;£ 0.00");
					counter=0;
					tempSum=0;
			    },250);
			    car.total_sum += car.sum;
		        car.sum = 0;
		        $.each( car.items, function( key, value ) {
					value.number = 0;
				});

		        output = "";
				$.each( car.items, function( key, value ) {
					output += ("<span class='stat-items' data-id='"+key+"'><span class='minus-one'>-1</span>"+value.name+" : "+value.total_sold+"×"+((value.price).toFixed(2))+" = £ "+(((value.total_sold)*(value.price)).toFixed(2))+"</span><br>");
				});
				output += ("<hr>Total income : £ "+((car.total_sum).toFixed(2))+"<br>");

				$("#stat-window-content").html(output);

				$( ".stat-items" ).each(function(index) {
				    $(this).on("click", deleteStatItem);
				});

			}
		};


		var deleteStatItem = function(){
			if(car.getItem($(this).attr("data-id")).total_sold - 1 >= 0){
				$(this).css("color","#9DC17F");
				car.getItem($(this).attr("data-id")).total_sold -= 1;
				car.total_sum -= (car.getItem($(this).attr("data-id")).price);
		        output = "";
				$.each( car.items, function( key, value ) {
					output += ("<span class='stat-items' data-id='"+key+"'><span class='minus-one'>-1</span>"+value.name+" : "+value.total_sold+"×"+((value.price).toFixed(2))+" = £ "+(((value.total_sold)*(value.price)).toFixed(2))+"</span><br>");
				});
				output += ("<hr>Total income : £ "+((car.total_sum).toFixed(2))+"<br>");

				$("#stat-window-content").html(output);

		        $("#last-counter-sum").html("Previous £ 0.00");

				$( ".stat-items" ).each(function(index) {
				    $(this).on("click", deleteStatItem);
				});

				proccessing = 0;
			}else{
				$(this).css("color","#DD5E45");

				$(this).animate({
				color: "#FFFFFF"
				}, 200, function() {
					$(this).css("color","#FFFFFF");
				});
			}
		};

		var minusOneToastie = function(){
			if(car.queueing_toastie - 1 >= 0){
				car.queueing_toastie -= 1;
				$("#qing-toasties").text("Queueing toasties: "+car.queueing_toastie);
			}
		};
	    var proccessing = 0;
	    var is_touch_device = 'ontouchstart' in document.documentElement;
		if(is_touch_device){
			$( ".button" ).each(function(index) {
			    $(this).on("touchend", buttonTapped);
			});
			$( "#zero-button" ).on("touchend", zero);
			$( "#minus-one-toastie" ).on("touchend", minusOneToastie);
			$( "#stat" ).on("touchend", function(){
				proccessing = 1;
				if($("#stat-window").hasClass("hide")){
					$("#stat-window").addClass("show");
					$("#stat-window").removeClass("hide");
					$("#stat").html("&lt;stat");
				}else{
					$("#stat-window").removeClass("show");
					$("#stat-window").addClass("hide");
					$("#stat").html("&gt;stat");
				}
			});
			$( "#close-stat-window" ).on("touchend", function(){
				$("#stat-window").toggleClass("show");
				$("#stat-window").toggleClass("hide");
				if($("#stat").html() == "&lt;stat"){$("#stat").html("&gt;stat");}else{$("#stat").html("&lt;stat");}
			});
			$(document).mouseup(function(e){
				if(proccessing == 0){
				    var container = $("#stat-window");
				    if (!container.is(e.target) // if the target of the click isn't the container...
				        && container.has(e.target).length === 0) // ... nor a descendant of the container
				    {
						if($("#stat-window").hasClass("show")){
							$("#stat-window").removeClass("show");
							$("#stat-window").addClass("hide");
							$("#stat").html("&gt;stat");
						}
				    }
				}else{
					proccessing = 0;
				}
			});
		}else{
			$( ".button" ).each(function(index) {
			    $(this).on("click", buttonTapped);
            });
			$( "#zero-button" ).on("click", zero);
			$( "#minus-one-toastie" ).on("click", minusOneToastie);
			$( "#stat" ).on("click", function(){
				proccessing = 1;
				if($("#stat-window").hasClass("hide")){
					$("#stat-window").addClass("show");
					$("#stat-window").removeClass("hide");
					$("#stat").html("&lt;stat");
				}else{
					$("#stat-window").removeClass("show");
					$("#stat-window").addClass("hide");
					$("#stat").html("&gt;stat");
				}
			});
			$( "#close-stat-window" ).on("click", function(){
				$("#stat-window").toggleClass("show");
				$("#stat-window").toggleClass("hide");
				if($("#stat").html() == "&lt;stat"){$("#stat").html("&gt;stat");}else{$("#stat").html("&lt;stat");}
			});
			$(document).mouseup(function (e){
				if(proccessing == 0){
				    var container = $("#stat-window");
				    if (!container.is(e.target) // if the target of the click isn't the container...
				        && container.has(e.target).length === 0) // ... nor a descendant of the container
				    {
						if($("#stat-window").hasClass("show")){
							$("#stat-window").removeClass("show");
							$("#stat-window").addClass("hide");
							$("#stat").html("&gt;stat");
						}
				    }
				}else{
					proccessing = 0;
				}
			});
		}



    </script>
</body>
</html>