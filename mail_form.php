<?php

$error = false; // エラーチェック用の変数
$errorMessage = '未入力です';
$name = '';
$title = '';
$address = '';
$detail = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $title = $_POST['title'];
        $address = $_POST['address'];
        $detail = $_POST['detail'];
        $error = $_POST['error'];
        // バリデーション
    if ($name  == '' || $title == '' || $address == '' || $detail == '') {
        $error = true;

<!DOCTYPE html>
       <html lang="ja">
            <body>
                <form action="" method="POST">
                    <p>
                        <?php if ($error) { echo $errorMessage; } ?>
                    </p>
                </form>
            </body>
        </html>

    } else {

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>メール入力フォーム</title>
</head>
<body>
    <form action="mail_send.php" method="post">
        お名前: <input type="text" name="name"><br>
        件名: <input type="text" name="title"><br>
        メールアドレス: <input type="text" name="address"><br>
        パスワード: <input type="password" name="password"><br>
        本文: <input type="text" name="detail"><br>
        <input type="submit" value="送信">
    </form>

</body>
</html>



    }


  }
?>







