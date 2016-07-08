<?php
  $API_KEY = 'MI_API_KEY';
  $ip = $_SERVER['REMOTE_ADDR'];
  $data = file_get_contents("http://api.ipinfodb.com/v3/ip-country/?key=$API_KEY&ip=$ip");
  $arr_data = explode(';', $data);
  $code = $arr_data[3];

  $countries_es = array('ES', 'CO');
  $countries_fr = array('FR');


  if(in_array($code, $countries_es)){
    $res = '0';
  }elseif(in_array($code, $countries_fr)){
    $res = '2';
  }else{
    $res = '1';
  }

  echo $res;
?>