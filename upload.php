<?php
// $xml=simplexml_load_file($XmlContent) or die("Error: Cannot create object");
$BotToken = "gjtV2SC7oKiPoNuxfCnkTS9Pw66qwccOTFnXRkQowxbT8gPbUry_B9-9HEXYAg4rTLBlun5fE9HbOMghRmMpq6q2LKdXeE2PXEjrM912V8DwkY6EOQBq5hu7e0YQH0_M4muAvVwMESuxSKI8";

$web_page_to_send = "https://cloud.midline.ir/gjtV2SC7oKiPoNuxfCnkTS9Pw66qwccOTFnXRkQowxbT8gPbUry_B9-9HEXYAg4rTLBlun5fE9HbOMghRmMpq6q2LKdXeE2PXEjrM912V8DwkY6EOQBq5hu7e0YQH0_M4muAvVwMESuxSKI8/uploadFile";

$theFile = $_FILES['file'];
// $_SERVER['DOCUMENT_ROOT']."/images/test.jpg"

echo $file_name_with_full_path;
echo "\r\n";

$post_request = array(
    // "sender" => "TheAmplituhedron", 
	"file" => curl_file_create($theFile) // for php 5.5+
);
echo $post_request;
$ch = curl_init();
echo $ch;
echo "\r\n";
curl_setopt($ch, CURLOPT_URL, $web_page_to_send);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_request);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
echo "\r\n";
$xml=simplexml_load_string($result) or die("Error: Cannot create object");
echo "\r\n";
print_r($xml);
?>

<html lang="en">
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
