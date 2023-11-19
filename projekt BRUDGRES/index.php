<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="test.css">
<meta http-equiv="Refresh" content="60;url=https://www.men.com">
</head>
<body>
<div class="main">
<h1>brudgres.pl<br></h1>
<h2><br>css jak na XNXX, czyli na odpierdol</h2>
<video width="1000" controls>
  <source src="troon.webm" type="video/webm">
  Your browser does not support the video tag.
</video><br>
<?php
/*$f=file('filter.txt');
foreach($f as $v){
    if($_SERVER["REMOTE_ADDR"]==$v){
        echo" ";
    }
    else{
        $f1=fopen('filter.txt','a');
        fwrite($f,$_SERVER["REMOTE_ADDR"]."\n");
    }
}*/
$k=strftime('%T ; data: %D');
$f=fopen('brud.txt','a');
fwrite($f,"===");
$l="godzina: $k ; port: ".$_SERVER['REMOTE_PORT']." ; protokół: ".$_SERVER['SERVER_PROTOCOL']."; agent: ".$_SERVER['HTTP_USER_AGENT']."; adres IP:".$_SERVER["REMOTE_ADDR"].";";
$tab=explode(";",$l);
foreach($tab as $v){
    $enc=base64_encode($v);
    fwrite($f,"\n".$enc);
}
fwrite($f,"---\n");
?>

</div>
<div class="footer"><marquee> żeby zobaczyć doxy <a href='dox.php'>kliknij tu</a>tel: +48 737 691 777, nie moge rozmawiać bo robie mewing i gnuxmaxxing</marquee><br> <a href='../login.php'>dla permisji grant</a></div>
</body>
</html>