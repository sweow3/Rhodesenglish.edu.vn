<?php
$Họ_và_Tên= $_POST['name'];
$visitoremail= $_POST['email'];
$vấn_đề_cần_giải_quyết= $_POST['vd'];
$giải_thích_thêm= $_POST['explain'];

$email_from= 'truonglong1472@gmail.com';
$email_subject= 'phiếu của bạn đã được gửi';
$email_body= "username:$Họ_và_Tên.\n".
                "usermail:$visitoremail.\n".
                "vd: $vấn_đề_cần_giải_quyết.\n".
                "explain: $giải_thích_thêm.\n";
$to = 'terrariapro7@gmail.com';
$headers = "from: $email_from \r\n";
$headers .= "reply-to: $visitoremail \r\n".;
mail($to,$email_subject,$email_body,$headers);
header("location:lienhe.html")
?>