<?php

function resourceWeb($url){
     $data = curl_init();
  curl_setopt($data, CURLOPT_URL, $url);
  curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
     $hasil = curl_exec($data);
     curl_close($data);
     return $hasil;
}
$sumber =  resourceWeb('https://stocksup.com/en/trends/fdax');
$split = explode('<div id=""#app > div.app.ui.container > div.main-content > section > div.trend-current > div.trend-current__grid-wrapper > div.trend-current__grid > div.trend-current-summary-container > div > div.trend-current-summary__titles"">', $sumber);
$splitLagi = explode('</div>', $split[1]);

echo $splitLagi[0];
?>
