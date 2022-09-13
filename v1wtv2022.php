<?php


header("Content-Type: audio/x-mpequrl");
header('Content-disposition: attachment;filename="playlist.m3u"');
$file24 = file_get_contents('https://www2.vjackson.info/live2/index?output=m3u&vavoo_auth='.$signed);
$array = explode("\n", $file24);
echo "#EXTM3U";
for($i=1;$i<count($array);$i++){
if (strpos( $array[$i], 'Turkey') !== false) {
echo "\n";
echo "";
echo $array[$i];
echo "\n".$array[$i+1]."?n=1&b=5&vavoo_auth=eyJkYXRhIjoie1widGltZVwiOjI2MDk0NDA0MDEwMjksXCJ2YWxpZFVudGlsXCI6MjYwOTQ0MTAwMTAyOSxcImlwc1wiOltcIjE1NC45Mi4wLjIzXCJdLFwicnVsZXNldFwiOlwiZ3Vlc3RcIixcInZlcmlmaWVkXCI6dHJ1ZSxcImVycm9yXCI6bnVsbCxcImFwcFwiOntcInBsYXRmb3JtXCI6XCJ2YXZvb1wiLFwidmVyc2lvblwiOlwiMi42XCIsXCJzZXJpdmNlXCI6XCIxLjIuMjZcIixcIm9rXCI6dHJ1ZX0sXCJ1dWlkXCI6XCI1T2MyVkR3UmdyMjlSMmVXZTh1Zi9ZUitDOHZaOXAvdVM5eCtSY2cwS1FvPVwifSIsInNpZ25hdHVyZSI6ImFTdGJpT2U0V0gyTzBrZm9TN0VTV2JXTFk3RS9vVTN1OWJNeml2bDdKWkc1eW1HRElmam92blVlQUFpbVdzc3NHUDNOeHg5VDAvL0hnSUlPV21xMkpiUXJ4NFBlYVdQMkM5U1ZNTFA5cjMzYnNURXEvMXZWeVZ3RnBBMm00bTdrNHVpZkpablk4enBqNnNWNGdHUDBGd0NBbCszRnkrSm9zWmhGU0FXYkNUYz0ifQ==|User-Agent=VAVOO/2.6".$signed;
}
}
?>


