<?php
 
$myFile = "IP.txt";
$fh = fopen($myFile, 'a') or die("Cant open file");
$stringData = "\n"."IP: " . $_SERVER["HTTP_X_FORWARDED_FOR"] . "    " ."USER_AGENT: ".$_SERVER['HTTP_USER_AGENT'] . "    "."DATE: ".date("D dS M,Y h:i a")."\n";
fwrite($fh, $stringData);
fclose($fh);
 
if (isset($_GET['v'])) {
    $page='https://www.youtube.com/watch?v='.$_GET['v'];;
    header('Location: '.$page);
    echo <<<DATA
    <head>
    <meta http-equiv="refresh" content="0;url={$page}">
    <script type="text/javascript">
    window.location="{$page}";
    </script>
    </head>
DATA;
}
 
?>