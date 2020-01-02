<?php

function get_data2($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36 Edge/12.10240');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}
$q= $_GET['q'];
$new_content  = get_data2($q);
    # code...
  

    $videos = array();
    $link = array();
   

    preg_match_all('@"url240":"(.*?)"@si', $new_content, $adress_link);

    if (!empty($adress_link[1][0])) {
        # code...
        $link['quality'] = "240p";
        $link['ext'] = "mp4";
        $link['url'] = $adress_link[1][0];        
        $link['size'] = "unknown";
$myJSON = json_encode($link);
echo $myJSON;
    }
    preg_match_all('@"url360":"(.*?)"@si', $new_content, $adress_link);

    if (!empty($adress_link[1][0])) {
        # code...
        $link['quality'] = "360p";
        $link['ext'] = "mp4";
        $link['url'] = $adress_link[1][0];        
        $link['size'] = "unknown";
   $myJSON = json_encode($link);
echo $myJSON;
       

    }
    preg_match_all('@"url480":"(.*?)"@si', $new_content, $adress_link);

    if (!empty($adress_link[1][0])) {
        # code...
       

        $link['quality'] = "480p";
        $link['ext'] = "mp4";
        $link['url'] = $adress_link[1][0];        
        $link['size'] = "unknown";
      $myJSON = json_encode($link);
echo $myJSON;

    }
    preg_match_all('@"url720":"(.*?)"@si', $new_content, $adress_link);

    if (!empty($adress_link[1][0])) {
        # code...
       
        $link['quality'] = "720p";
        $link['ext'] = "mp4";
        $link['url'] = $adress_link[1][0];        
        $link['size'] = "unknown";
     $myJSON = json_encode($link);
echo $myJSON;
    }

    preg_match_all('@"url1080":"(.*?)"@si', $new_content, $adress_link);

    if (!empty($adress_link[1][0])) {
        # code...
        $link['quality'] = "1080p";
        $link['ext'] = "mp4";
        $link['url'] = $adress_link[1][0];        
        $link['size'] = "unknown";
     $myJSON = json_encode($link);
echo $myJSON;

    }

return $videos;
