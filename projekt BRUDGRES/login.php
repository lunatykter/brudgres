<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="test.css">
</head>
<body>
<div class='main'>
<form action="" method="post">
login: <input type='text' name='l' required><br>
hasło: <input type='password' name='p' required><br>
<input type='submit' value='zaloguj się' name='z'>
</form>
<hr>
<?php
if(isset($_POST['z'])){
    $t=file('passwd.txt',FILE_IGNORE_NEW_LINES);
    $dcl=base64_decode($t[0]);
    $dcp=base64_decode($t[1]);
    if($_POST['l']==$dcl&&$_POST['p']==$dcp){
        echo'<table border="1px">';
        $f=file('brud.txt',FILE_IGNORE_NEW_LINES);
        foreach($f as $v){
            if($v=="==="){
                echo"<tr>";
            }
            elseif($v=="---"){
                echo"</tr>";
            }
            else{
            $dci=base64_decode($v);
            echo "<td>".$dci."</td>";
            }
        }
        echo"</table>";
    }
    else{
        echo"wypierdalaj, ta część strony nie jest dla plebsu";
        echo'<meta http-equiv="Refresh" content="5;url=https://www.men.com">';
    }
}
?>
</div>
</body>
</html>