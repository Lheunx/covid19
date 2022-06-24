<?php
$i=18;
// echo '<form method="post" name="form1" action="proc_verify_map_return.php">';
foreach ($obj_addr as $key) {
if($i>0){
  echo '<button type="button" id="'.$key->gubunEn.'" value="'.$key->gubunEn.'" name="button" data-city="map_city'.$i.'">
    <span class="name">'.$key->gubun.'</span>
    <span class="num">'.$key->defCnt.'</span>
    <span class="before">(+'.$key->incDec.')</span>
  </button>';
  echo '<div style="display:none;" id="'.$key->gubunEn.'" >
  <p><strong class="name">'.$key->gubun.'</strong></p>
  <p>누적확진자: '.$key->defCnt.'명 </p>
  <p>전일 대비 증감: '.$key->incDec.'명</p>
  <p>격리중: '.$key->isolIngCnt.'명 </p>
  <p>누적 격리해제: '.$key->isolClearCnt.'명</p>
  <p>사망자: '.$key->deathCnt.'명</p>
  <p>10만명당 발생률: '.$key->qurRate.'명</p>
  </div>';

  if ($i==10 or $i==15 or $i==18 or $i==17){
    $string = "<script>
    var offt;
    var offl;
    offt = $('path.map_city".$i."').offset().top;
    offl = $('path.map_city".$i."').offset().left;
    $('button#".$key->gubunEn."').offset({top:offt,left:offl+50});
    </script>";
  }
  elseif ($i==8 or $i==2 or $i==12 ) {
    $string = "<script>
    var offt;
    var offl;
    offt = $('path.map_city".$i."').offset().top;
    offl = $('path.map_city".$i."').offset().left;
    $('button#".$key->gubunEn."').offset({top:offt,left:offl-30});
    </script>";
  }
  else {
    $string = "<script>
    var offt;
    var offl;
    offt = $('path.map_city".$i."').offset().top;
    offl = $('path.map_city".$i."').offset().left;
    $('button#".$key->gubunEn."').offset({top:offt,left:offl});
    </script>";
  }

  echo $string;
    $i-=1;
  }
}
// echo "</form>";
?>
