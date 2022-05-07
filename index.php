<?php

?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>پروژه 1</title>
    <style>
        .center-div {
            margin-left: auto;
            margin-right: auto;
            display: block;
        }
    </style>
</head>

<body>
    <form action="pay.php" method="post" class="w3-display-container">
        <input type="hidden" name="acceptor-name" value="نام سایت">
        <input type="hidden" name="acceptor-no" value="123456">
        <input type="hidden" name="terminal-no" value="987654">
        <input type="hidden" name="acceptor-address" value="localhost">
        <input type="hidden" name="amount" value="10000">
        <img src="./asset/background.jpg" alt="page-bg" style="width:100vw;height:100vh;">
        <div class="w3-display-middle w3-text-white">
            <h4 class="w3-center" style="text-shadow:1px 1px 0 #444">جهت استفاده از سامانه لازم است که با پرداخت مبلغ 1000 تومان برای یک ماه در سامانه عضو شوید</h4>
            <button class="w3-button w3-blue w3-round center-div" type="submit">پرداخت حق عضویت</button>
        </div>
    </form>
</body>

</html>