<?php
    date_default_timezone_set('Asia/Tehran');
    if ( ! empty($_POST) ) {
        $pay_date = date('Y-m-d', time());
        $pay_time = date('h:i:s a', time());
    } else {
        header( 'Location: index.php' );
    }
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>رسید پرداخت</title>
</head>
<body>
    <h1></h1>
    <h2>پرداخت با موفقیت انجام گردید</h2>
    <h3>شماره پیگیری : <?php echo $_POST['tracking_code']; ?></h3>
    <div class="w3-container">
        <table class="w3-table w3-striped w3-centered" style="width: 90%;">
            <tr class="w3-black">
                <th>شرح</th>
                <th>مبلغ</th>
            </tr>
            <tr>
                <td>
                    پرداخت بابت حق عضویت یک ماهه<br>
                    شماره کارت : <?php echo $_POST['card_no']; ?>
                </td>
                <td><?php echo $_POST['pay-amount']; ?> ریال</td>
            </tr>
        </table>
    </div>
    <div class="w3-large w3-padding">تاریخ پرداخت : <?php echo $pay_date; ?></div>
    <div class="w3-large w3-padding">زمان پرداخت : <?php echo $pay_time; ?></div>
    <div class="w3-large w3-padding">از پرداخت شما متشکریم!</div>
    <a class="w3-button w3-green w3-round w3-margin" href="index.php">بازگشت به خانه</a>
</body>
</html>