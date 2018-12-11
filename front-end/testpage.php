<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
<title>Make Travel Companion</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">	
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Exo+2:300,400,500,700" rel="stylesheet">
	
<link rel="stylesheet" href="styles.css">	

<script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
<script src="carrental1.js"></script>
<!--<script src="flight.js"></script>-->
<script>
var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;
function init_car() {
	
	
	canvas = document.getElementById("canvas_car");
	anim_container = document.getElementById("animation_container_car");
	dom_overlay_container = document.getElementById("dom_overlay_container_car");
	var comp=AdobeAn.getComposition("63FD60331E6E423AB5D21E0E1DC43928");
	var lib=comp.getLibrary();
	var loader = new createjs.LoadQueue(false);
	loader.addEventListener("fileload", function(evt){handleFileLoad(evt,comp)});
	loader.addEventListener("complete", function(evt){handleComplete(evt,comp)});
	var lib=comp.getLibrary();
	loader.loadManifest(lib.properties.manifest);
}
function handleFileLoad(evt, comp) {
	var images=comp.getImages();	
	if (evt && (evt.item.type == "image")) { images[evt.item.id] = evt.result; }	
}
function handleComplete(evt,comp) {
	//This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
	var lib=comp.getLibrary();
	var ss=comp.getSpriteSheet();
	var queue = evt.target;
	var ssMetadata = lib.ssMetadata;
	for(i=0; i<ssMetadata.length; i++) {
		ss[ssMetadata[i].name] = new createjs.SpriteSheet( {"images": [queue.getResult(ssMetadata[i].name)], "frames": ssMetadata[i].frames} )
	}
	exportRoot = new lib.carrental1();
	stage = new lib.Stage(canvas);
	stage.enableMouseOver();	
	//Registers the "tick" event listener.
	fnStartAnimation = function() {
		stage.addChild(exportRoot);
		createjs.Ticker.setFPS(lib.properties.fps);
		createjs.Ticker.addEventListener("tick", stage);
	}	    
	//Code to support hidpi screens and responsive scaling.
	function makeResponsive(isResp, respDim, isScale, scaleType) {		
		var lastW, lastH, lastS=1;		
		window.addEventListener('resize', resizeCanvas);		
		resizeCanvas();		
		function resizeCanvas() {			
			var w = lib.properties.width, h = lib.properties.height;			
			var iw = window.innerWidth, ih=window.innerHeight;			
			var pRatio = window.devicePixelRatio || 1, xRatio=iw/w, yRatio=ih/h, sRatio=1;			
			if(isResp) {                
				if((respDim=='width'&&lastW==iw) || (respDim=='height'&&lastH==ih)) {                    
					sRatio = lastS;                
				}				
				else if(!isScale) {					
					if(iw<w || ih<h)						
						sRatio = Math.min(xRatio, yRatio);				
				}				
				else if(scaleType==1) {					
					sRatio = Math.min(xRatio, yRatio);				
				}				
				else if(scaleType==2) {					
					sRatio = Math.max(xRatio, yRatio);				
				}			
			}			
			canvas.width = w*pRatio*sRatio;			
			canvas.height = h*pRatio*sRatio;
			canvas.style.width = dom_overlay_container.style.width = anim_container.style.width =  w*sRatio+'px';				
			canvas.style.height = anim_container.style.height = dom_overlay_container.style.height = h*sRatio+'px';
			stage.scaleX = pRatio*sRatio;			
			stage.scaleY = pRatio*sRatio;			
			lastW = iw; lastH = ih; lastS = sRatio;            
			stage.tickOnUpdate = false;            
			stage.update();            
			stage.tickOnUpdate = true;		
		}
	}
	makeResponsive(false,'both',false,1);	
	AdobeAn.compositionLoaded(lib.properties.id);
	fnStartAnimation();
}
</script>

<!--<script>

function init_fly() {
	var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;
	
	canvas = document.getElementById("canvas_fly");
	anim_container = document.getElementById("animation_container_fly");
	dom_overlay_container = document.getElementById("dom_overlay_container_fly");
	var comp=AdobeAn.getComposition("04D44075CF234611949B302AAAA5854F");
	var lib=comp.getLibrary();
	var loader = new createjs.LoadQueue(false);
	loader.addEventListener("fileload", function(evt){handleFileLoad(evt,comp)});
	loader.addEventListener("complete", function(evt){handleComplete(evt,comp)});
	var lib=comp.getLibrary();
	loader.loadManifest(lib.properties.manifest);
}
function handleFileLoad(evt, comp) {
	var images=comp.getImages();	
	if (evt && (evt.item.type == "image")) { images[evt.item.id] = evt.result; }	
}
function handleComplete(evt,comp) {
	//This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
	var lib=comp.getLibrary();
	var ss=comp.getSpriteSheet();
	var queue = evt.target;
	var ssMetadata = lib.ssMetadata;
	for(i=0; i<ssMetadata.length; i++) {
		ss[ssMetadata[i].name] = new createjs.SpriteSheet( {"images": [queue.getResult(ssMetadata[i].name)], "frames": ssMetadata[i].frames} )
	}
	exportRoot = new lib.flight();
	stage = new lib.Stage(canvas);
	stage.enableMouseOver();	
	//Registers the "tick" event listener.
	fnStartAnimation = function() {
		stage.addChild(exportRoot);
		createjs.Ticker.setFPS(lib.properties.fps);
		createjs.Ticker.addEventListener("tick", stage);
	}	    
	//Code to support hidpi screens and responsive scaling.
	function makeResponsive(isResp, respDim, isScale, scaleType) {		
		var lastW, lastH, lastS=1;		
		window.addEventListener('resize', resizeCanvas);		
		resizeCanvas();		
		function resizeCanvas() {			
			var w = lib.properties.width, h = lib.properties.height;			
			var iw = window.innerWidth, ih=window.innerHeight;			
			var pRatio = window.devicePixelRatio || 1, xRatio=iw/w, yRatio=ih/h, sRatio=1;			
			if(isResp) {                
				if((respDim=='width'&&lastW==iw) || (respDim=='height'&&lastH==ih)) {                    
					sRatio = lastS;                
				}				
				else if(!isScale) {					
					if(iw<w || ih<h)						
						sRatio = Math.min(xRatio, yRatio);				
				}				
				else if(scaleType==1) {					
					sRatio = Math.min(xRatio, yRatio);				
				}				
				else if(scaleType==2) {					
					sRatio = Math.max(xRatio, yRatio);				
				}			
			}			
			canvas.width = w*pRatio*sRatio;			
			canvas.height = h*pRatio*sRatio;
			canvas.style.width = dom_overlay_container.style.width = anim_container.style.width =  w*sRatio+'px';				
			canvas.style.height = anim_container.style.height = dom_overlay_container.style.height = h*sRatio+'px';
			stage.scaleX = pRatio*sRatio;			
			stage.scaleY = pRatio*sRatio;			
			lastW = iw; lastH = ih; lastS = sRatio;            
			stage.tickOnUpdate = false;            
			stage.update();            
			stage.tickOnUpdate = true;		
		}
	}
	makeResponsive(false,'both',false,1);	
	AdobeAn.compositionLoaded(lib.properties.id);
	fnStartAnimation();
}
</script>-->

</head>

<body onload="init_car(); init_fly">
	<div class="container-fluid bg-white">
		<div class="row justify-content-center">
			<img class="mb-4 mt-4 img-fluid d-none d-sm-block" src="img/logo.png" alt="Make Travel Logo">
			<img class="mb-4 mt-4 img-fluid d-sm-none" src="img/logo-sm.png" alt="Make Travel Logo">
		</div>
	</div>
		
	<div class="container-fluid">
		
		
		<div class="row justify-content-around align-content-around mt-5">
			
					
			<div class="card-deck">
				<div id="animation_container_car" style="background-color:rgba(255, 255, 255, 1.00); width:550px; height:400px">
					<canvas id="canvas_car" width="550" height="400" style="position: absolute; display: block; background-color:rgba(255, 255, 255, 1.00);"></canvas>
					<div id="dom_overlay_container_car" style="pointer-events:none; overflow:hidden; width:550px; height:400px; position: absolute; left: 0px; top: 0px; display: block;">
					</div>
				</div>
				
				<!--<div class="card" id="animation_container_fly" style="background-color:rgba(255, 255, 255, 1.00); width:550px; height:400px">
					<canvas id="canvas_fly" width="550" height="400" style="position: absolute; display: block; background-color:rgba(255, 255, 255, 1.00);"></canvas>
					<div id="dom_overlay_container_fly" style="pointer-events:none; overflow:hidden; width:550px; height:400px; position: absolute; left: 0px; top: 0px; display: block;">
					</div>
				</div>-->
				
				
					
				
			
			
			</div>
		
		</div>
		
	</div>
	
	<div class="container-fluid mt-3 mb-5">
		<div class="row justify-content-center">
			<h1 class="logoname"><strong>make</strong>travel</h1>
		</div>
		<div class="row justify-content-center">
			<p class="lead">Tel. +298 232100</p>
		</div>
	</div>

<!-- modal flight -->		
<?php include 'modalflight.php';?>
<!-- modal flight END -->
		
<!-- modal hotel -->		
<?php include 'modalhotel.php';?>
<!-- modal hotel END -->		
		
<!-- modal carrental -->		
<?php include 'modalcar.php';?>
<!-- modal carrental END -->
		
<!-- modal sights -->		
<?php include 'modalsights.php';?>
<!-- modal sights END -->
		
<!-- modal transport -->		
<?php include 'modaltransport.php';?>
<!-- modal transport END -->
		
<!-- modal eating -->		
<?php include 'modaleat.php';?>
<!-- modal eating END -->

<!-- modal other -->		
<?php include 'modalemergency.php';?>
<!-- modal other END -->
		
<!-- modal general -->		
<?php include 'modalgeneral.php';?>
<!-- modal general END -->			

	
<button onclick="topFunction()" class="bg-dark rounded-0" id="myBtn" title="Go to top">Top</button>	

	
	
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="scripts.js"></script>	
	
</body>
</html>