<?php
function card($name, $file, $text){
  echo "
  <div class=\"card\" style=\"width:400px\">
  <img class=\"card-img-top\" src=\"$file\" alt=\"Card image\">
    <div class=\"card-body\">
      <h4 class=\"card-title\">$name</h4>
      <p class=\"card-text\">$text</p>
    </div>
  </div>
  ";
};
$file = "images/img_avatar1.png";
?>
<h1 class="text-body"><strong>팀원 소개</strong></h1>
<p>
<div class="card-deck">
<?php
card('김태윤', $file, '회장');
card('이현우', $file, '부회장');
card('박규현', $file, '빛');
card('이용협', $file, '안녕하세요 우리 loop동아리의 파괴 담당 이용협입니당^^');
card('최민국', $file, '동아리 핵심');
?>
</div>
</p>
<p>
<div class="card-deck">
<?php
card('박진우', $file, '동아리에서 성실함을 담당하는 박진우입니다^^');
card('김정훈', $file, 'loop의 촬영 감독');
card('임정우', $file, '동아리 간판');
card('진정태', $file, '저희 동아리 loop는 만든다 좋은 게임을 <del>번역투...?</del>');
card('장희수', $file, '영상 편집의 노예');
?>
</div>
</p>
