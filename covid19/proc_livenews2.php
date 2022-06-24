<?php
  include('proc_livenews1.php');
  $obj=simplexml_load_string(naverNewsResult('코로나19', 'sim', 10));
  // print_r($obj);
   // naverNewsResult('코로나19', 'date', 5);
  $obj1=$obj->channel[0]->item[0];
  // echo $obj1;
  for ($i=0; $i <10 ; $i++) {
    echo "<div id='news".$i."' style='display:none'><a href='".$obj->channel[0]->item[$i]->link."' target='_blank' >".$obj->channel[0]->item[$i]->title."</a></div>";
    // foreach ($obj->channel[0]->item[$i] as $key => $value) {
    //   echo $key.":".$value."<br/>";
    // }
  }

?>
