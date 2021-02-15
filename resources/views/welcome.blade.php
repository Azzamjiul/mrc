<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .main {
            /*display: inline-block;*/
        }

        .btn {
            margin: 7px;
        }

        .green {
            background-color: hsla(100, 100%, 30%, 0.1);
            cursor: pointer;
        }

        .blue {
        background-color: hsla(202, 100%, 50%, 0.1);
            cursor: pointer;
        }

        .topic {
            display: inline-block;
            width: 40%;
            border: 1px solid #efefef;
            padding: 15px;
            margin-left: 7px;
            height: 300px;
        }

        .play {
            margin:20px 0 30px 40%;
        }
    </style>
</head>
<body>
    <div class="col-md-12">

        <div class="main col-md-9 ">
            <div id="waveform"></div>

            <div class="play">
                <button class="btn btn-primary" onclick="wavesurfer.playPause()"><i class="glyphicon glyphicon-play"></i>Play/Pause</button>
                <button class="" onclick="playTime();">?</button>
            </div>

            <div class="row">
                <div class="topic topic-one col-md-5 col-md-offset-1">
                    <h3>Imagine Quotes</h3>
                    <button class="btn btn-secondary green" onclick="startAt(8,10.5)">"Play one"</button></br>
                    <button class="btn btn-secondary green" onclick="startAt(20,22)">"Imagine what it is like..."</button>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wavesurfer.js/1.3.7/wavesurfer.min.js"></script>
    <script>
        var wavesurfer = WaveSurfer.create({
            container: '#waveform',
            waveColor: 'orange',
            progressColor: '#efefef'
        });

        // wavesurfer.load('audio.mp3');
        wavesurfer.load('https://mrc.digitindo.com/audio.mp3');



        function startAt(start,stop){
            if(wavesurfer.isPlaying()){
                wavesurfer.stop();
            }
            wavesurfer.play(start,stop);
        }


        wavesurfer.play(); // play event fired
        wavesurfer.pause(); // pause event fired

        wavesurfer.on('ready', function () {

        });

        //get current time to console
        function playTime(){
        var now = wavesurfer.getCurrentTime();
            console.log(now);
        }
    </script>
</body>
</html>
