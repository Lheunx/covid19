<?php
  include('../php/Snoopy.class.php');

  $snoopy = new Snoopy;
 $preg = "'/<dl> <dt>(.*?)<\/dt>/is'";
  $snoopy->maxframes = 5;
  if($snoopy->fetch("https://search.naver.com/search.naver?&where=news&query=%EC%BD%94%EB%A1%9C%EB%82%98%20%EB%89%B4%EC%8A%A4%EC%86%8D%EB%B3%B4&sm=tab_tmr&frm=mr&nso=so:r,p:all,a:all&sort=0"))
    {
      preg_match_all('/<dl> <dt>(.*?)<\/dt>/is', $snoopy->results, $text);
      //preg_match('/<dl> <dt>(.*?)<\/dt>/is', $snoopy->results, $text
    }
  else {
    echo "error fetching doucment:".$snoopy->error."\n";
  }
  foreach ($text[0] as $key => $value) {
      echo $value;
  }
?>
