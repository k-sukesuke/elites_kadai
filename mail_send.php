<?php

require_once("Mail.php");

$mail = array(
    'name' => $_POST['name'],
    'title' => $_POST['title'],
    'address' => $_POST['address'],
    'detail' => $_POST['detail']
    );

// 例) Yahoo Mailの場合
$params = array(
    "host" => "smtp.mail.yahoo.co.jp",
    "port" => 587,
    "auth" => true,
    "username" => $mail["address"], // ここに連想配列のaddress 格納
    "password" => "Keiyou14"
);

/*** PEAR::Mailのオブジェクト作成 ***/
$mailObject = Mail::factory("smtp", $params);

$recipients = "keisuke.pv.ad@gmail.com"; // 送信先メールアドレス

/*** 本文 ***/
// 日本語メールを送る場合はエンコードが必要
$body = $mail["detail"]; //ここにdetailを格納
// var_dump($body);
// echo $body;
$body = mb_convert_encoding($body, "ISO-2022-JP", "auto");

// メールヘッダ情報
$headers = array(
  "To" => "testuser", // ここで指定したアドレスには送信されない
  "From" => $mail["name"], // メールの差出人
  "Subject" => mb_encode_mimeheader($mail["title"]) // ここにtitleを格納
);

// send([送信先], [ヘッダーの配列], [本文]);
$result = $mailObject->send($recipients, $headers, $body);

if (!PEAR::isError($result))
{
  echo 'メールが送信されました。';
}
else
{
  echo 'メールが送信されませんでした。';
}
