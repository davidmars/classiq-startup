$(function(){
    /*
      :glitchBoy
    */
    function GlitchBoy(canvas, options){
        let me=this;
        this.canvas = canvas;
        this.ctx = canvas.getContext('2d');
        this.origCanvas = document.createElement('canvas');
        this.origContext = this.origCanvas.getContext('2d');
        this.width = canvas.width;
        this.height = canvas.height;
        this.options = options;


    }
    GlitchBoy.prototype.drawImage = function(img, x, y,w,h){
        this.canvas.getContext("2d").drawImage(img, x, y,w,h);
    };
    GlitchBoy.prototype.glitchWave = function(renderLineHeight, cuttingHeight){
        var image = this.ctx.getImageData(0, renderLineHeight, this.width, cuttingHeight);
        if(image.width>0 && image.height>0) {
            this.ctx.putImageData(image, 0, renderLineHeight - 10);
        }
    };
    GlitchBoy.prototype.glitchSlip = function(waveStrength, startHeight, endHeight){
        if(endHeight < startHeight){
            var temp = endHeight;
            endHeight = startHeight;
            startHeight = temp;
        }
        for(var h = startHeight; h < endHeight; h++){
            if(Math.random() < 0.1)h++;
            var image = this.ctx.getImageData(0, h, this.width, 1);
            if(image.width>0 && image.height>0){
                this.ctx.putImageData(image, Math.random()*waveStrength-(waveStrength/2), h);
            }

        }
    };
    GlitchBoy.prototype.glitchFillRandom = function(fillCnt, cuttingMaxHeight){
        var cw = this.width;
        var ch = this.height;
        for(var i = 0; i< fillCnt; i++){
            var rndX = cw * Math.random();
            var rndY = ch * Math.random();
            var rndW = cw * Math.random();
            var rndH = cuttingMaxHeight * Math.random();

            rndX=Math.min(rndX,1);
            rndY=Math.min(rndY,1);
            rndW=Math.min(rndW,1);
            rndH=Math.min(rndH,1);
            if(this.ctx.width>0 && this.ctx.height>0){
                var image = this.ctx.getImageData(rndX,rndY,rndW, rndH);
                if(image.width>0 && image.height>0) {
                    this.ctx.putImageData(image, (rndX * Math.random()) % cw, rndY);
                }
            }

        }
    }
    GlitchBoy.prototype.glitchFillNoise = function(img){
        var cw = this.width;
        var ch = this.height;

        for(var i = 0; i< 500; i++){

            var rndX = cw * Math.random();
            var rndY = ch * Math.random();
            rndX=Math.max(rndX,1);
            rndY=Math.max(rndY,1);
            //console.log(rndX,rndY)
            //if(this.ctx.width>0 && this.ctx.height>0){
                var image = img.getImageData(rndX,rndY,10, 1);
                //if(image.width>0 && image.height>0) {
                    //console.log("hop",i)
                    this.ctx.putImageData(image ,cw * Math.random(),ch * Math.random());
                //}
            //}

        }
    }
    GlitchBoy.prototype.process = function () {

    }

    /*
      :videoGirl
    */
    function videoGirl(options, callback){
        var options = $.extend({
            src:"",
            type:'video/ogg',
            controls:false,
            autoplay:true,
            loop:true,
            muted:true
        }, options);
        var video = document.createElement('video');
        video.crossOrigin = 'anonymous'; // important!!!!
        video.controls = options.controls;
        video.autoplay = options.autoplay;
        video.loop = options.loop;
        video.muted = options.muted;
        var source = document.createElement('source');
        source.src = options.src;
        source.type = options.type;

        //met la vidéo dans le dom sinon elle joue pas
        video.appendChild(source);
        this.video = video;
        this.source = source;
        var $v=$(video);
        $("body").append($v);
        $v.css("visibility","hidden");
        // load
        if(callback !== null){
            video.addEventListener('loadeddata', callback);
        }
        var _canvas=$("<canvas></canvas>");
        this.getBitmap=function(){
            _canvas.getContext("2d").drawImage(this.video, 0, 0);
            return _canvas.getImageData(0,0,this.video)
        }
    };
    // sync
    var FPS = 30;
    var frm = 0;
    var performanceRatio=1;
    var vGirl = new videoGirl({
        src:'http://upload.wikimedia.org/wikipedia/commons/b/b1/Big_buck_bunny_zoom_in.ogv',
        type:'video/ogg'
    }, sync);

    /**
     * Dessine dans le canvas
     */
    function sync(){
        var $canvas=$("#myCanvas");
        var canvas = $canvas[0];

        var glitch = new GlitchBoy(canvas);
        setInterval(function(){
            frm++;

            //resize en mode poster
            canvas.width=glitch.width=$canvas.outerWidth()/performanceRatio;
            canvas.height=glitch.height=$canvas.outerHeight()/performanceRatio;
            let canvasRatio=canvas.height/canvas.width;
            let ratio=vGirl.video.videoHeight/vGirl.video.videoWidth;
            let w,h;
            if(canvasRatio<ratio){
                w = glitch.width;
                h = glitch.width/ratio;
            }else{
                w = glitch.height/ratio;
                h = glitch.height;
            }
            let x= glitch.width/2-w/2;
            let y= glitch.height/2-h/2;
            glitch.drawImage(vGirl.video, x, y,w,h);

            //glitches

            glitch.glitchWave((frm * 3) % glitch.height, 10);
            if(frm %100 < 10){
                // fillCnt, cuttingMaxHeight
                glitch.glitchFillRandom(5, 20);
            }
            if(80 < frm%100){
                glitch.glitchSlip(10,200,300);
            }
            if(95 < frm%100){
                glitch.glitchSlip(10,100* Math.random(),400 * Math.random());
            }



        }, 1000/FPS);
    }




});