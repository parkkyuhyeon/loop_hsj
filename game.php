<?php require('view/top.php'); ?>
</head>
<?php require('view/nav.php');
function games($name, $file, $text, $url){
  echo "
      <div class=\"card\" style=\"width:400px\">
        <img class=\"card-img-top\" src=\"$file\" alt=\"Card image\">
        <div class=\"card-body\">
        <h4 class=\"card-title\">$name</h4>
        <p class=\"card-text\">$text</p>
        <a href=\"$url\" class=\"btn btn-primary\">PLAY</a>
        </div>
      </div>
      ";
};
?>
<div class="container">
<p>
  <div class="card-deck">
<?php
games('목적없는질주:off-road', 'images/1.PNG', '환상적인 오프로드를 경험해보세요!', 'play1.php');
games('미로:레볼루션', 'images/2.PNG', '험난한 미로를 통과해보세요!', 'play2.php');
games('잔디잔디', 'images/3.PNG', '잔디 위를 달려봐요!', 'play3.php');
?>
  </div>
</p>
</div>
<?php require('view/bottom.php'); ?>
