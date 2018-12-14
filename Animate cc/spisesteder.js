(function (cjs, an) {

var p; // shortcut to reference prototypes
var lib={};var ss={};var img={};
lib.ssMetadata = [
		{name:"spisesteder_atlas_", frames: [[171,0,108,525],[0,0,169,1000]]}
];


// symbols:



(lib.gaffel = function() {
	this.spriteSheet = ss["spisesteder_atlas_"];
	this.gotoAndStop(0);
}).prototype = p = new cjs.Sprite();



(lib.Untitled6 = function() {
	this.spriteSheet = ss["spisesteder_atlas_"];
	this.gotoAndStop(1);
}).prototype = p = new cjs.Sprite();



(lib.Tween29 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib.gaffel();
	this.instance.parent = this;
	this.instance.setTransform(-17.7,-86.4,0.329,0.329);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-17.7,-86.4,35.6,172.9);


(lib.Tween27 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib.Untitled6();
	this.instance.parent = this;
	this.instance.setTransform(-14.7,-87.1,0.174,0.174);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-14.7,-87.1,29.5,174.3);


(lib.Symbol2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib.Tween29("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(17.8,86.4);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,35.6,172.9);


(lib.Symbol1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib.Tween27("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(14.7,87.2);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,29.5,174.3);


(lib.symbol3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib.Symbol1();
	this.instance.parent = this;
	this.instance.setTransform(211.5,165.3,1,1,0,0,0,14.7,87.2);
	new cjs.ButtonHelper(this.instance, 0, 1, 1);

	this.instance_1 = new lib.Symbol2();
	this.instance_1.parent = this;
	this.instance_1.setTransform(167.5,165.7,1,1,0,0,0,17.8,86.4);
	new cjs.ButtonHelper(this.instance_1, 0, 1, 1);

	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("Ag/BPIAAgKQAHgCADgDQADgEABgFIABgVIAAhAIgBgRIgCgJQgBgDgDgCQgDgDgHgBIAAgLIAqgBIAVAAIgDAYIADAAQAJgNANgGQAMgGAOAAQAKAAAKACIAAArIgcAAQgDgJgEgFQgEgFgIAAIgIACIgHAGIgEAIIgCAIIAAANIAAAxIABAVQAAAGADADQADADAIACIAAAKg");
	this.shape.setTransform(266.8,27.2);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#000000").s().p("Ag1A9QgTgVAAgnQAAgYAKgTQAJgTASgJQARgJAWAAQAOAAALACQALAEAIAGQAHAGAFAIQAGAKADANQAEANAAASIhjAAQAAAcAKAOQAKANAUAAQAMAAAJgEQAKgFALgLIANANQgQASgQAGQgQAIgUAAQgkgBgSgTgAAagQQAAgYgGgMQgGgLgMAAQgLAAgIAMQgHAMgBAXIAzAAIAAAAg");
	this.shape_1.setTransform(250.6,27.3);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#000000").s().p("AhFBeQgOgTAAgoQAAgbAJgRQAJgSAQgKQASgJAYAAIANABIAPADIAAgOIgBgYIgCgLQgBgDgDgCQgDgCgIgCIAAgLIAsgCIATAAIAACzIABARIACAJQABADADACQADADAIABIAAAKIgrACIgTAAIACgWIgDgBQgLAMgLAGQgNAGgMAAQgdAAgOgUgAgVgWQgHAHgEAMQgDANAAASQAAAfAHAPQAGAPAPABQAGAAAHgEQAGgEAFgHQAEgHAAgJIAAg0QAAgSgGgKQgHgIgMgBQgKAAgHAIg");
	this.shape_2.setTransform(232.6,24);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#000000").s().p("Ag1A9QgTgVAAgnQAAgYAKgTQAJgTASgJQARgJAWAAQAOAAALACQALAEAIAGQAHAGAFAIQAGAKADANQAEANAAASIhjAAQAAAcAKAOQAKANAUAAQAMAAAJgEQAKgFALgLIANANQgQASgQAGQgQAIgUAAQgkgBgSgTgAAagQQAAgYgGgMQgGgLgMAAQgLAAgIAMQgHAMgBAXIAzAAIAAAAg");
	this.shape_3.setTransform(214.3,27.3);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#000000").s().p("AgaBXQgLgNAAgaIAAhXIgTAAIAAgKQAJgCAEgEQAFgDADgFIADgNIADgWIAlAAIAAAoIAtAAIAAATIgtAAIAABGQgBASACAJQACAIAEAEQADAEAHAAIAIgBIAGgDIAIgGIAKAOQgNALgLAGQgMAEgMAAQgXAAgMgMg");
	this.shape_4.setTransform(200.7,25.5);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#000000").s().p("Ag8BJIAAglIAVAAQAEAOAIAHQAIAHAOAAQALAAAGgFQAGgGAAgKQAAgGgDgFQgDgEgGgFIgVgLIgQgIQgIgEgFgFQgGgGgDgHQgEgHAAgIQAAgPAIgKQAJgLAPgFQAPgFATAAIAWABIAcADIAAAlIgUAAQgEgKgEgFQgFgGgFgCQgFgCgHAAQgKAAgGAEQgGAFAAAJQAAAFACAFQADAEAFAFQAFADAQAHQAPAGAJAHQAJAFAFAJQAFAJAAALQAAANgEAKQgFAIgJAGQgIAHgMACQgMAEgNAAQgaAAgggIg");
	this.shape_5.setTransform(186.9,27.3);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#000000").s().p("Ag1A9QgTgVAAgnQAAgYAKgTQAJgTASgJQARgJAWAAQAOAAALACQALAEAIAGQAHAGAFAIQAGAKADANQAEANAAASIhjAAQAAAcAKAOQAKANAUAAQAMAAAJgEQAKgFALgLIANANQgQASgQAGQgQAIgUAAQgkgBgSgTgAAagQQAAgYgGgMQgGgLgMAAQgLAAgIAMQgHAMgBAXIAzAAIAAAAg");
	this.shape_6.setTransform(171.2,27.3);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#000000").s().p("Ag8BJIAAglIAVAAQAEAOAIAHQAIAHAOAAQALAAAGgFQAGgGAAgKQAAgGgDgFQgDgEgGgFIgVgLIgQgIQgIgEgFgFQgGgGgDgHQgEgHAAgIQAAgPAIgKQAJgLAPgFQAPgFATAAIAWABIAcADIAAAlIgUAAQgEgKgEgFQgFgGgFgCQgFgCgHAAQgKAAgGAEQgGAFAAAJQAAAFACAFQADAEAFAFQAFADAQAHQAPAGAJAHQAJAFAFAJQAFAJAAALQAAANgEAKQgFAIgJAGQgIAHgMACQgMAEgNAAQgaAAgggIg");
	this.shape_7.setTransform(155,27.3);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#000000").s().p("AgkBtIAAgKQAHgCADgDQADgDABgGIABgVIAAhIIAAgNIgDgHQgCgDgDgBIgJgDIAAgKIAqgCIAUAAIAABvIAAANIABAIIABAFIACADIAEAEIAHACIAAAKgAgUhGIAAgmIAqAAIAAAmg");
	this.shape_8.setTransform(142.6,24.2);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#000000").s().p("AhSBxIAAgKQAIgCADgDQADgDABgFIABgRIAAiIIAAgQIgBgIIgCgFIgFgEIgJgDIAAgKIAsgCIATAAIgCAXIACAAQANgNALgFQAMgGAMAAQAcAAAOAUQAOAUAAAmQAAAcgIARQgJATgQAJQgRAJgXAAQgQAAgPgEIAAAdIABARQABAFAEADQADADAIACIAAAKgAgFhUQgHAEgEAHQgEAGAAAIIAAA2QAAATAHAIQAGAJANAAQAPAAAIgOQAHgPAAgcQAAgfgHgPQgGgPgPgBQgHABgGADg");
	this.shape_9.setTransform(127.7,30.6);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#000000").s().p("AgkBsQgSgCgQgDIAAgxIAXAAQADATAKAJQAJAJARAAQAJAAAHgDQAHgDAFgHQAFgHAAgKQAAgKgEgHQgEgIgIgGQgIgGgNgIIgWgMQgLgGgGgIQgHgIgEgJQgEgKAAgMQAAgTAKgNQAJgOATgHQASgHAWAAIAbACIAeAFIAAAtIgWAAQgDgMgFgHQgFgIgHgDQgHgEgKAAQgJAAgGAEQgHADgEAGQgEAGAAAJQAAAJADAHQAEAGAIAHQAHAGAQAIQAUAKALAKQALAJAFALQAGAMAAAPQgBATgIAOQgKAPgQAHQgRAIgWAAg");
	this.shape_10.setTransform(110.2,24.4);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f().s("#000000").ss(1,1,1).p("A9m2zMA7NAAAMAAAAtnMg7NAAAgAU5vlIAAAbMgqIAAAIAAgbA1DvlMAp8AAAIALAA");
	this.shape_11.setTransform(189.5,146);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#000000").s().p("A1DAOIAAgbIALAAMAp8AAAIAAAbg");
	this.shape_12.setTransform(188.3,47.6);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#FFFFFF").s().p("A9mW0MAAAgtnMA7NAAAMAAAAtngA1PvJMAqIAAAIAAgcIALAAIgLAAMgp8AAAIgMAAg");
	this.shape_13.setTransform(189.5,146);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#FFFFFF").s().p("A9mW0MAAAgtnMA7NAAAMAAAAtngAxkRtMAoKAAAIAAjEMgoKAAAgA1PvJMAqIAAAIAAgcIALAAIgLAAMgp8AAAIgMAAg");
	this.shape_14.setTransform(189.5,146);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape},{t:this.instance_1,p:{regX:17.8,regY:86.4,rotation:0,x:167.5,y:165.7,scaleX:1,scaleY:1}},{t:this.instance,p:{rotation:0,x:211.5,y:165.3,scaleX:1,scaleY:1}}]}).to({state:[{t:this.shape_14},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape},{t:this.instance_1,p:{regX:17.9,regY:86.5,rotation:37,x:190.5,y:167.2,scaleX:1,scaleY:1}},{t:this.instance,p:{rotation:-30,x:178.6,y:166.3,scaleX:1,scaleY:1}}]},1).to({state:[{t:this.shape_14},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape},{t:this.instance_1,p:{regX:17.9,regY:86.5,rotation:37,x:190.2,y:167,scaleX:0.761,scaleY:0.761}},{t:this.instance,p:{rotation:-30,x:181.2,y:166.3,scaleX:0.761,scaleY:0.761}}]},1).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-1,-1,381,294);


// stage content:
(lib.spisesteder = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer_1
	this.instance = new lib.symbol3();
	this.instance.parent = this;
	this.instance.setTransform(275.6,200,1,1,0,0,0,189.5,146);
	new cjs.ButtonHelper(this.instance, 0, 1, 2);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(360.1,253,381,294);
// library properties:
lib.properties = {
	id: '1BEB590B941040D6BF081BE38D04785C',
	width: 550,
	height: 400,
	fps: 24,
	color: "#FFFFFF",
	opacity: 1.00,
	manifest: [
		{src:"images/spisesteder_atlas_.png?1544431291895", id:"spisesteder_atlas_"}
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
an.compositions['1BEB590B941040D6BF081BE38D04785C'] = {
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