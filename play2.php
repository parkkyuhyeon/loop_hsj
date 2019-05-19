<?php require('view/top.php'); ?>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="shortcut icon" href="TemplateData/favicon.ico">
  <link rel="stylesheet" href="TemplateData/style.css">
  <script src="TemplateData/UnityProgress.js"></script>
  <script src="Build2/UnityLoader.js"></script>
  <script>
    var gameInstance = UnityLoader.instantiate("gameContainer", "Build2/학술제.json", {onProgress: UnityProgress});
  </script>
</head>
<?php require('view/nav.php'); ?>

  <div class="webgl-content">
    <div id="gameContainer" style="width: 814px; height: 450px"></div>
    <div class="footer">
      <div class="fullscreen" onclick="gameInstance.SetFullscreen(1)"></div>
    </div>
  </div>
<?php require('view/bottom.php'); ?>
