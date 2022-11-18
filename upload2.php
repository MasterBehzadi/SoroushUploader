<?php
// $xml=simplexml_load_file($XmlContent) or die("Error: Cannot create object");
$BotToken = "gjtV2SC7oKiPoNuxfCnkTS9Pw66qwccOTFnXRkQowxbT8gPbUry_B9-9HEXYAg4rTLBlun5fE9HbOMghRmMpq6q2LKdXeE2PXEjrM912V8DwkY6EOQBq5hu7e0YQH0_M4muAvVwMESuxSKI8";

$web_page_to_send = "https://cloud.midline.ir/gjtV2SC7oKiPoNuxfCnkTS9Pw66qwccOTFnXRkQowxbT8gPbUry_B9-9HEXYAg4rTLBlun5fE9HbOMghRmMpq6q2LKdXeE2PXEjrM912V8DwkY6EOQBq5hu7e0YQH0_M4muAvVwMESuxSKI8/uploadFile";

$theFile = $_FILES['file'];
// $_SERVER['DOCUMENT_ROOT']."/images/test.jpg"

// mantegh -=- -> Pedaret <- 
$post_request = array(
    // "sender" => "TheAmplituhedron", 
	"file" => curl_file_create($theFile) //### /tempFiles/Movaghat.zip (Bayad Patch Be File Fiziki Bedim) !!!!
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $web_page_to_send);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_request);
$result = curl_exec($ch); // >>> 0 >>> Failed
if ($result == 0) {
    echo 'Failed DaEI ';
} else {
    echo 'Not Failed';
}
curl_close($ch);
$xml=simplexml_load_string($result) or die("Error: Cannot create object");
print_r($xml);
?>

<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
    function httpGet(theUrl) {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", theUrl, false ); // false for synchronous request
    xmlHttp.send( null );
    return xmlHttp.responseText;
    }
    </script>
</head>
<body>
    <p><?php echo $result ?></p>
    <a href="https://cloud.midline.ir/<?php echo $BotToken ?>/downloadFile/<?php echo $Token ?>"><p>https://cloud.midline.ir/<?php echo $BotToken ?>/downloadFile/<?php echo $Token ?></p></a>
</body>




[18-Nov-2022 19:02:27 Asia/Tehran] PHP Warning:  curl_file_create() expects parameter 1 to be a valid path, array given in /home/igangir/public_html/cgi-bin/cd/upload.php on line 14
[18-Nov-2022 19:02:27 Asia/Tehran] PHP Warning:  curl_setopt(): Filename cannot be empty in /home/igangir/public_html/cgi-bin/cd/upload.php on line 19
[18-Nov-2022 19:02:27 Asia/Tehran] PHP Warning:  curl_exec(): Filename cannot be empty in /home/igangir/public_html/cgi-bin/cd/upload.php on line 20