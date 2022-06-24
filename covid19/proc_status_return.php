<?php
  $string1 = "$('button').on('click',function (event) {
    var target = $(this).parent().attr('id');
    var target1 = $('div#'+target+'_s').clone();
    // $('input').attr('value','seoul')

    alert(target);

    $('#status3').empty();
    if(target != $('#status3 div').attr('id')){
      $('#status3').append(target1);
      $('#status3 div').attr('style',' ');
    }
  })";
  echo $string1;
?>
