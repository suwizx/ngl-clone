<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bit.ly/3CZa0Sz" type="text/css" charset="utf-8" />
    <title>NGL ปลอมๆ</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'line_seed_sans_th';
        text-decoration: none;
    }
    textarea:focus-visible{
        outline: none;
    }
    textarea{
        resize: none;
    }
    ::-webkit-scrollbar{
        display: none;
    }
    button{
        cursor: pointer;
    }
</style>
<body>
    <div style=" max-width: 480px; margin: auto; width: 100vw; height: 100vh; display: flex; align-items: center; justify-content: center;background: rgb(255,168,255);
    background: linear-gradient(63deg, rgba(255,168,255,1) 35%, rgba(0,212,255,1) 100%); flex-wrap: wrap; align-content: center;">
        <div style="text-align: center;">
            <p><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
              </svg></p>
            <p style="font-size: 22px; font-weight: bold;">ส่งข้อความเรียบร้อย</p> 
            <a href="./" style="margin-top: 10px; display: block; width: 100%; font-size: 22px; font-weight: bold; background-color: black; color: white; border-radius: 1000px; padding: 5px 0;">ส่งข้อความอื่น</a>
        
        </div>
    </div>
</body>
</html>
<?php
$msg = $_GET["msg"];
$url        = 'https://notify-api.line.me/api/notify';
$token      = 'put token';
$headers    = [
                'Content-Type: application/x-www-form-urlencoded',
                'Authorization: Bearer '.$token
            ];
$fields     = "message=$msg";

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, $url);
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $fields);
curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec( $ch );
curl_close( $ch );

var_dump($result);
$result = json_decode($result,TRUE);
?>