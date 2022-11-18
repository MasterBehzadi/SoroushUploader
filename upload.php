<?php
// $xml=simplexml_load_file($XmlContent) or die("Error: Cannot create object");
$BotToken = "gjtV2SC7oKiPoNuxfCnkTS9Pw66qwccOTFnXRkQowxbT8gPbUry_B9-9HEXYAg4rTLBlun5fE9HbOMghRmMpq6q2LKdXeE2PXEjrM912V8DwkY6EOQBq5hu7e0YQH0_M4muAvVwMESuxSKI8";

$web_page_to_send = "https://bot.splus.ir/gjtV2SC7oKiPoNuxfCnkTS9Pw66qwccOTFnXRkQowxbT8gPbUry_B9-9HEXYAg4rTLBlun5fE9HbOMghRmMpq6q2LKdXeE2PXEjrM912V8DwkY6EOQBq5hu7e0YQH0_M4muAvVwMESuxSKI8/uploadFile";




if(!empty($_FILES['file']))
{
  $path = "tempFiles/";
  $path = $path . basename( $_FILES['file']['name']);

  if(move_uploaded_file($_FILES['file']['tmp_name'], $path)) {
    echo "The file ".  basename( $_FILES['file']['name']). 
    " has been uploaded";
  } else{
      echo "There was an error uploading the file, please try again!";
  }
}

$ffname = "tempFiles/" . basename( $_FILES['file']['name']);
$post_request = array(
    "file" => curl_file_create('tempFiles/dynamic-image-resizer.zip')
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $web_page_to_send);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_request);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: multipart/form-data'
));

// curl -X POST -H "Content-Type: multipart/form-data" -F "file=@/home/Pictures/1.png" https://bot.splus.ir/[TOKEN]/uploadFile

$result = curl_exec($ch); // >>> 0 >>> Failed
if ($result == 0) {
    echo 'Failed DaEI ';
} else {
    echo 'Not Failed';
    echo $result;
}
curl_close($ch);
$xml=simplexml_load_string($result) or die("Error: Cannot create object");
print_r($xml);

// Delete Uploaded File
$srd = unlink($ffname);
if (srd == true) {
    echo "file removed successfully.";
} else {
    echo "file removing failed";
}

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
</html>