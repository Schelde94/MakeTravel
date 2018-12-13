(function (cjs, an) {

var p; // shortcut to reference prototypes
var lib={};var ss={};var img={};
lib.ssMetadata = [
		{name:"flight1_atlas_", frames: [[0,0,1000,593],[0,595,1000,563]]}
];


// symbols:



(lib.boarding = function() {
	this.spriteSheet = ss["flight1_atlas_"];
	this.gotoAndStop(0);
}).prototype = p = new cjs.Sprite();



(lib.boarding1 = function() {
	this.spriteSheet = ss["flight1_atlas_"];
	this.gotoAndStop(1);
}).prototype = p = new cjs.Sprite();



(lib.Symbol1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib.boarding();
	this.instance.parent = this;
	this.instance.setTransform(58,68,0.128,0.128);

	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("AgMA8QgIgHAAgOIAAg4IgTAAIAAgUIATgCIAAgcIAeAAIAAAcIAeAAIAAAWIgeAAIAAAwQAAAGADADQACADAHgBIANAAIAEAXQgMADgSAAQgNABgIgJg");
	this.shape.setTransform(145.4,24.8);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#000000").s().p("AAUBLIAAhFQAAgHgCgCQgDgDgFAAQgKAAgTAJIAABIIgfAAIAAiVIAfAAIABAlQAAALgCALQAVgRAVAAQAdAAAAAdIAABOg");
	this.shape_1.setTransform(134.7,23.9);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#000000").s().p("AguBDQgLgGAAgSQAAgPARgIQgIgGACgLQACgJAHgGQgQgGAAgWQAAgTAMgHQAKgIAdAAQAQAAALADIAhAAIgBAOIgOACQACAFAAAKQAAATgKAHQgMAIgaAAIgSgBQgDAEACADQACADAFABIAmAFQAPABAIAJQAHAGAAAPQAAAUgMAHQgMAIgfAAQgfAAgNgIgAgbAnQAAAIAFABQAFADAPAAQAPAAAFgDQAFgBAAgIQAAgFgEgCQgCgBgLgBIgagDQgHAGAAAGgAgTgyQgFACABAIQgBAHAFADQAEADAMABQALgBAEgDQAEgDAAgHQAAgIgEgCQgEgDgLAAQgMAAgEADg");
	this.shape_2.setTransform(122.2,28);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#000000").s().p("AgOBMIAAhpIAeAAIAABpgAgGgtQgJAAAAgJIAAgLQAAgKAJAAIANAAQAJAAAAAKIAAALQAAAJgJAAg");
	this.shape_3.setTransform(112.9,23.8);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#000000").s().p("AgSBFQgJgIAAgOIAAh6IAfAAIAAByQAAALAMAAIAIAAIAEAWQgIAEgRAAQgNAAgIgHg");
	this.shape_4.setTransform(107.1,24);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#000000").s().p("AgYBNIAAhTIgSAAIAAgUIASgCIAAgQQAAggAiAAQAWAAAMACIgEAVIgTAAQgIAAgDAEQgDADgBAHIAAALIAeAAIAAAWIgeAAIAABTg");
	this.shape_5.setTransform(99.2,23.7);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f().s("#000000").ss(1,1,1).p("AtYgIIa5AAIAAAEAtggEIAAgEANZAJI64AA");
	this.shape_6.setTransform(120.5,37.3);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#000000").s().p("AtfAJIAAgNIAAAAIAAgEIAHAAIa5AAIAAAEIgIAAIAAANg");
	this.shape_7.setTransform(120.5,37.3);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#FFFFFF").s().p("AyvNrIAA7VMAlfAAAIAAbVgAD7GcQghAZAAAjIAAAIQAEAfAdAVQAiAaAvAAQAvAAAhgaQAigYAAgkQAAgjgigZQgSgNgXgHQgSgEgVAAQgvgBgiAZgAmOGpQgYAQgIAUQgDAJAAAKQAAAgAjAWQAjAYAyAAQAxAAAjgYQAkgWAAggQAAgggkgXIgDgCQgigUgvgBQgyABgjAWgAtaGYQAAAfAjAXQAWAOAcAGQADAUAeAPQAhARAvAAQAvAAAigRQAhgRAAgXQAAgZghgRQgTgJgWgDQACgIAAgHQAAgggkgXIgDgCQADgKAAgJQAAghgjgXQgjgWgyAAQgxAAgkAWQgjAXAAAhQAAAfAjAXIEHCKQjzh1gSAAIgBABgAtgkrIa5AAIAAgSI65AAgAt+n7IAjAAIABAAIAAAPIa4AAIAAgPIAHAAIAXAAIAAgTI76AAg");
	this.shape_8.setTransform(120,87.5);

	this.instance_1 = new lib.boarding1();
	this.instance_1.parent = this;
	this.instance_1.setTransform(48,66,0.147,0.147);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape},{t:this.instance}]}).to({state:[{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape},{t:this.instance_1,p:{scaleX:0.147,scaleY:0.147,x:48,y:66}}]},1).to({state:[{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape},{t:this.instance_1,p:{scaleX:0.111,scaleY:0.111,x:65,y:65}}]},1).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,240,175);


// stage content:
(lib.flight1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib.Symbol1();
	this.instance.parent = this;
	this.instance.setTransform(120.6,88,1,1,0,0,0,120,87.5);
	new cjs.ButtonHelper(this.instance, 0, 1, 2);

	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("#000000").ss(1,1,1).p("AQLA1IgIAAIAAARAwKgqIAAgbAq1BGIAAgR");
	this.shape.setTransform(103.5,51);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape},{t:this.instance}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(119,88,241.5,175);
// library properties:
lib.properties = {
	id: '97593CA0D9454A11925081AC9AEA58C9',
	width: 240,
	height: 175,
	fps: 24,
	color: "#FFFFFF",
	opacity: 1.00,
	manifest: [
		{src:"images/flight1_atlas_.png", id:"flight1_atlas_"}
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
an.compositions['97593CA0D9454A11925081AC9AEA58C9'] = {
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



})(createjs/flight = createjs/flight||{}, AdobeAn = AdobeAn||{});
var createjs/flight, AdobeAn;