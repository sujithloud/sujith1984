
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>MHDTVWORLD</title>
<link rel="stylesheet" type="text/css" href="/players/clapp.css">
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/clappr@latest/dist/clappr.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/clappr/dash-shaka-playback@latest/dist/dash-shaka-playback.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/clappr/clappr-level-selector-plugin@latest/dist/level-selector.min.js"></script>
</head>

  <body>
        <div id="player"></div>
        <script type="text/javascript">
function setUserAgent(window, userAgent) {
    // Works on Firefox, Chrome, Opera and IE9+
    if (navigator.__defineGetter__) {
        navigator.__defineGetter__('userAgent', function () {
            return userAgent;
        });
    } else if (Object.defineProperty) {
        Object.defineProperty(navigator, 'userAgent', {
            get: function () {
                return userAgent;
            }
        });
    }
    // Works on Safari
    if (window.navigator.userAgent !== userAgent) {
        var userAgentProp = {
            get: function () {
                return userAgent;
            }
        };
        try {
            Object.defineProperty(window.navigator, 'userAgent', userAgentProp);
        } catch (e) {
            window.navigator = Object.create(navigator, {
                userAgent: userAgentProp
            });
        }
    }
}
setUserAgent(window, "exoplayer");
          var player = new Clappr.Player(
            {  
        source: '/m3u8.php?c=<?php echo $_REQUEST["c"]; ?>&q=600&e=.m3u8',

               mimeType:"application/vnd.apple.mpegurl",
  parentId: "#player",
  autoPlay: true,
  loop: true,
    width: '100%',
  height: '100%',
  hideMediaControsl: true,
 watermark: "",
watermarkLink: "https://mhdtvworld.xyz/",
mediacontrol: {seekbar: "#e62117", buttons: "#e62117"}, 
position: "top-left",
              plugins:[DashShakaPlayback,LevelSelector],
              parentId: '#player'
            });
        </script>
  </body>

</html>
