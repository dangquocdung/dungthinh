
<style>html,body{margin:0;}</style>
<style> .video-js {width: 100%; height: 100%;} #videojs {width: 100%; height: 100%;}</style>
<meta name="referrer" content="no-referrer">
<link href="https://rawgit.com/xbdinfo/file/5ca03205/video-js.min.css" rel="stylesheet">
<script src="https://rawgit.com/xbdinfo/file/5ca03205/videojs-ie8.min.js"></script>
<script src="https://rawgit.com/xbdinfo/file/5ca03205/video.min.js"></script>
<script src="https://rawgit.com/xbdinfo/file/5ca03205/videojs-contrib-hls.min.js"></script>
<script src="https://rawgit.com/xbdinfo/file/5ca03205/vjs-hls.min.js"></script>
<body onLoad="init()">
<div id="videojs"><video id="restre" autoplay preload="auto" height="100%" width="100%" class="video-js" controls data-setup='{"language": "vi"}'></video></div>
<script>
    function play(link){
        src='http://hatinhtv.vn/phatthanh/m3u8/audio.m3u8';
        
        player=videojs("restre");
        
        player.ready(function(){
            player.src({src:src,type:"application/x-mpegURL"})
        });player.play()
    }

    function reload(i){if(player.paused()&&player.error_!=null){if(i<link.length){play(link[i])}else{clearInterval(interval);document.write('<iframe id="Myiframe" src="online.php?id=hatinh" scrolling="no" height="100%" allowfullscreen="true" width="100%" frameborder="0"></iframe>')}}}

	function init(){
        var i=0;
        link=[
            'http://hatinhtv.vn/phatthanh/m3u8/audio.m3u8'
        ];
    
        play(link[i]);
        interval=setInterval(function(){i++;reload(i)},2000)
    }

</script>
</body>