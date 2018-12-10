(function (cjs, an) {

var p; // shortcut to reference prototypes
var lib={};var ss={};var img={};
lib.ssMetadata = [
		{name:"flight_atlas_", frames: [[0,0,1000,593],[0,595,1000,563]]}
];


// symbols:



(lib.boarding = function() {
	this.spriteSheet = ss["flight_atlas_"];
	this.gotoAndStop(0);
}).prototype = p = new cjs.Sprite();



(lib.boarding1pngcopy = function() {
	this.spriteSheet = ss["flight_atlas_"];
	this.gotoAndStop(1);
}).prototype = p = new cjs.Sprite();



(lib.Symbol2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = null;


(lib.Symbol1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = null;


(lib.Symbol3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib.boarding();
	this.instance.parent = this;
	this.instance.setTransform(97,106,0.188,0.188);

	this.instance_1 = new lib.Symbol1();
	this.instance_1.parent = this;
	this.instance_1.setTransform(211.5,165.3,1,1,0,0,0,14.7,87.2);
	new cjs.ButtonHelper(this.instance_1, 0, 1, 1);

	this.instance_2 = new lib.Symbol2();
	this.instance_2.parent = this;
	this.instance_2.setTransform(94.5,165.7,1,1,0,0,0,17.8,86.4);
	new cjs.ButtonHelper(this.instance_2, 0, 1, 1);

	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("AgTBbQgMgMAAgWIAAhUIgcAAIAAgdIAcgDIAAgrIAvAAIAAArIAsAAIAAAgIgsAAIAABKQAAAKAEADQADAEAKAAIAUAAIAGAhQgTAHgaAAQgVAAgMgNg");
	this.shape.setTransform(224.6,27.1);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#000000").s().p("AAeBxIAAhpQAAgJgDgEQgEgEgJAAQgPAAgcANIAABtIgwAAIAAjhIAwAAIAAA3QAAARgCARQAggbAgAAQAsAAAAAtIAAB2g");
	this.shape_1.setTransform(208.5,25.7);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#000000").s().p("AhFBmQgRgKgBgbQAAgXAagMQgLgJACgRQACgOAMgHQgXgLgBggQAAgcARgLQARgNAqAAQAaAAAPAFIAzAAIgDAVIgUADQAEAIAAAOQAAAcgRALQgQAMgpABIgcgCQgDAGACAFQADAGAJABIA4AGQAYAEAMALQAKALAAAWQAAAfgTAKQgSAKgtAAQgyABgRgLgAgpA7QAAALAHAEQAHADAYAAQAWAAAIgDQAHgEABgKQgBgJgFgCQgEgCgRgCIgmgFQgLAJAAAKgAgdhNQgGAFgBALQABAMAGAFQAHAEARAAQARAAAGgEQAHgFAAgMQAAgLgHgFQgGgEgRAAQgRAAgHAEg");
	this.shape_2.setTransform(189.6,31.9);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#000000").s().p("AgXByIAAieIAvAAIAACegAgJhEQgOAAAAgOIAAgSQAAgNAOAAIAUAAQANAAAAANIAAASQAAAOgNAAg");
	this.shape_3.setTransform(175.7,25.6);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#000000").s().p("AgcBnQgNgLAAgVIAAi5IAvAAIAACtQAAAQASAAIANAAIAFAhQgMAHgaAAQgUAAgMgMg");
	this.shape_4.setTransform(166.9,25.9);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#000000").s().p("AglB0IAAh+IgcAAIAAgeIAcgCIAAgYQAAgxAzAAQAiAAASADIgFAgIgeAAQgMAAgEAEQgFAFAAAMIAAARIAsAAIAAAgIgsAAIAAB+g");
	this.shape_5.setTransform(154.9,25.4);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f().s("#000000").ss(1,1,1).p("A04gNMAp8AAAIAAAbMgqHAAAIAAgb");
	this.shape_6.setTransform(188.3,47.6);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#000000").s().p("A1DAOIAAgbIALAAMAp8AAAIAAAbg");
	this.shape_7.setTransform(188.3,47.6);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#FFFFFF").s().p("A9mW0MAAAgtnMA7NAAAMAAAAtngA1PvJMAqIAAAIAAgcMgp8AAAIgMAAg");
	this.shape_8.setTransform(189.5,146);

	this.instance_3 = new lib.boarding1pngcopy();
	this.instance_3.parent = this;
	this.instance_3.setTransform(82,105,0.207,0.207);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape},{t:this.instance_2},{t:this.instance_1},{t:this.instance}]}).to({state:[{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape},{t:this.instance_2},{t:this.instance_1},{t:this.instance_3,p:{scaleX:0.207,scaleY:0.207,x:82,y:105}}]},1).to({state:[{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape},{t:this.instance_2},{t:this.instance_1},{t:this.instance_3,p:{scaleX:0.152,scaleY:0.152,x:110,y:122}}]},1).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,379,292);


// stage content:
(lib.flight = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib.Symbol3();
	this.instance.parent = this;
	this.instance.setTransform(86.1,54.5);
	new cjs.ButtonHelper(this.instance, 0, 1, 2);

	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AgTCdIAAk6IAnAAIAAE6g");
	this.shape.setTransform(72.1,55.8);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape},{t:this.instance}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(345.1,240.1,395,306.4);
// library properties:
lib.properties = {
	id: '04D44075CF234611949B302AAAA5854F',
	width: 550,
	height: 400,
	fps: 24,
	color: "#FFFFFF",
	opacity: 1.00,
	manifest: [
		{src:"images/flight_atlas_.png", id:"flight_atlas_"}
	],
	preloads: []
};



// bootstrap callback support:

(lib.Stage = function(canvas) {
	createjs.Stage.call(this, canvas);
}).prototype = p = new createjs.Stage();

p.setAutoPlay = function(autoPlay) {
	this.tickEnabled = autoPlay;
}
p.play = function() { this.tickEnabled = true; this.getChildAt(0).gotoAndPlay(this.getTimelinePosition()) }
p.stop = function(ms) { if(ms) this.seek(ms); this.tickEnabled = false; }
p.seek = function(ms) { this.tickEnabled = true; this.getChildAt(0).gotoAndStop(lib.properties.fps * ms / 1000); }
p.getDuration = function() { return this.getChildAt(0).totalFrames / lib.properties.fps * 1000; }

p.getTimelinePosition = function() { return this.getChildAt(0).currentFrame / lib.properties.fps * 1000; }

an.bootcompsLoaded = an.bootcompsLoaded || [];
if(!an.bootstrapListeners) {
	an.bootstrapListeners=[];
}

an.bootstrapCallback=function(fnCallback) {
	an.bootstrapListeners.push(fnCallback);
	if(an.bootcompsLoaded.length > 0) {
		for(var i=0; i<an.bootcompsLoaded.length; ++i) {
			fnCallback(an.bootcompsLoaded[i]);
		}
	}
};

an.compositions = an.compositions || {};
an.compositions['04D44075CF234611949B302AAAA5854F'] = {
	getStage: function() { return exportRoot.getStage(); },
	getLibrary: function() { return lib; },
	getSpriteSheet: function() { return ss; },
	getImages: function() { return img; }
};

an.compositionLoaded = function(id) {
	an.bootcompsLoaded.push(id);
	for(var j=0; j<an.bootstrapListeners.length; j++) {
		an.bootstrapListeners[j](id);
	}
}

an.getComposition = function(id) {
	return an.compositions[id];
}



})(createjs = createjs||{}, AdobeAn = AdobeAn||{});
var createjs, AdobeAn;