


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
    function httpGet(theUrl) {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "POST", theUrl, false ); // false for synchronous request
    xmlHttp.send( null );
    return xmlHttp.responseText;
    }

<?php
$XmlContent = $_POST['a']

$xml=simplexml_load_file($XmlContent) or die("Error: Cannot create object");

?>
        </script>
        <script>
            var s = "<?php echo $dddd ?>"; 
            console.log('rrrrrrrr');
        </script>
    <title>Document</title>
</head>
<body>
<form action="" method="post">
<input type="text" name="a" id="a" value="https://oo.co/this.xml">
<input type="submit" value="Go">

<a href="https://cloud.midline.ir/gjtV2SC7oKiPoNuxfCnkTS9Pw66qwccOTFnXRkQowxbT8gPbUry_B9-9HEXYAg4rTLBlun5fE9HbOMghRmMpq6q2LKdXeE2PXEjrM912V8DwkY6EOQBq5hu7e0YQH0_M4muAvVwMESuxSKI8/downloadFile/<?php echo $xml->FileUrl; ?>"><p>https://cloud.midline.ir/gjtV2SC7oKiPoNuxfCnkTS9Pw66qwccOTFnXRkQowxbT8gPbUry_B9-9HEXYAg4rTLBlun5fE9HbOMghRmMpq6q2LKdXeE2PXEjrM912V8DwkY6EOQBq5hu7e0YQH0_M4muAvVwMESuxSKI8/downloadFile/<?php echo $xml->FileUrl; ?></p></a>
</form>
</body>
</html>

