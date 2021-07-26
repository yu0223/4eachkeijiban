<?php
mb_internal_encoding("utf8");

$pdo=new PDO("mysql:dbname=lesson1;host=localhost;8888;","root","root");

$pdo->exec("insert into 4each_keijiban(handlename,title,comments)
values('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");

?>

<!doctype HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>お問い合わせフォームを作る</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2>お問い合わせフォーム</h2>

    <div class="confirm">
        <p>お問い合わせ有難うございました。<br>３営業日以内に担当者よりご連絡差し上げます。
        </p>
    </div>

</body>
</html>
