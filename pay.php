<?php

if (empty($_POST)) {
    header( 'Location: index.php' );
} else {
    $id = uniqid();
    $tracking_code = substr($id, 0, 6);
}

?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>صفحه پرداخت</title>
    <style>
        .center-link {
            width: 800px;
            border-top-left-radius: 70%;
            border-top-right-radius: 70%;
            margin-bottom: -30px;
            height: 60px;
        }

        .center-img {
            margin-left: auto;
            margin-right: auto;
            display: block;
        }
    </style>
</head>

<body>
    <div class="w3-bar w3-display-container w3-card" id="top-bar" style="height:100px;">
        <img class="w3-bar-item w3-right" src="./asset/shaparak.jpg" width="300" height="100"></img>
        <div class="w3-bar-item w3-right w3-display-middle" style="margin-top: 20px;">
            <p class="w3-center">
                پرداخت الکترونیکی
            </p>
            <p class="w3-center w3-block w3-round w3-red center-link">
                <a href="#">www.our-bank.com</a>
            </p>
        </div>
        <img class="w3-bar-item" src="./asset/bank.jpg" width="300" height="100"></img>
    </div>
    <div class="w3-cell-row w3-light-gray" style="height:calc(100vh - 100px);">
        <form class="w3-container w3-cell" style="width:75vw;" action="./receipt.php" method="post">
            <input type="hidden" name="pay-amount" value="<?php echo $_POST['amount'] ?>">
            <input type="hidden" name="tracking_code" value="<?php echo $tracking_code ?>">
            <div class="w3-cell-row w3-center">
                <div class="w3-cell" style="width: 200px;">
                    <span id="alert" class="w3-animate-zoom w3-block w3-center w3-padding-small w3-round" style="display:none;float:left;font-size:12px;margin-top:16px;">
                    </span>
                </div>
            </div>
            <div class="w3-row w3-padding-16">
                <div class="w3-twothird w3-padding-small">
                    <input id="card_no" class="w3-input w3-left-align w3-border w3-round-xxlarge" type="text" name="card_no" required>
                </div>
                <div class="w3-third w3-padding-small">
                    <label>شماره کارت</label>
                    <span class="w3-block w3-small" style="color:gray;">شماره کارت 16 رقمی درج شده روی کارت را وارد نمایید</span>
                </div>
            </div>
            <div class="w3-row w3-padding-16">
                <div class="w3-twothird w3-padding-small">
                    <input id="card_cvv2" class="w3-input w3-left-align w3-border w3-round-xxlarge" type="password" inputmode="numeric" name="card_cvv2" required>
                </div>
                <div class="w3-third w3-padding-small">
                    <label>شماره شناسایی دوم (CVV2)</label>
                    <span class="w3-block w3-small" style="color:gray;">شماره 3 یا 4 رقمی روی کارت را وارد نمایید</span>
                </div>
            </div>
            <div class="w3-row w3-padding-16">
                <div class="w3-twothird w3-padding-small">
                    <input id="card_date_month" placeholder="ماه" class="w3-center w3-input w3-left-align w3-border w3-round-xxlarge" style="display:inline-block;width:100px;margin-left:64px;" type="text" name="card_date_month" required>
                    <input id="card_date_day" placeholder="روز" class="w3-center w3-input w3-left-align w3-border w3-round-xxlarge" style="display: inline-block;width:100px" type="text" name="card_date_day" required>
                </div>
                <div class="w3-third w3-padding-small">
                    <label>تاریخ انقضای کارت</label>
                    <span class="w3-block w3-small" style="color:gray;">تاریخ انقضای کارت را وارد نمایید</span>
                </div>
            </div>
            <div class="w3-row w3-padding-16">
                <div class="w3-twothird w3-padding-small">
                    <input id="card_dynamic_pass" class="w3-input w3-left-align w3-border w3-round-xxlarge" type="password" name="card_dynamic_pass" required>
                </div>
                <div class="w3-third w3-padding-small">
                    <label>رمز اینترنتی کارت</label>
                    <span class="w3-block w3-small" style="color:gray;">رمز اینترنتی را وارد نمایید</span>
                </div>
            </div>
            <div class="w3-row w3-padding-16">
                <div class="w3-twothird w3-padding-small">
                    <input id="customer_email" class="w3-input w3-left-align w3-border w3-round-xxlarge" type="email" name="customer_email">
                </div>
                <div class="w3-third w3-padding-small">
                    <label>ایمیل</label>
                    <span class="w3-block w3-small" style="color:gray;">لطفا ایمیل معتبر وارد نمایید (اختیاری)</span>
                </div>
            </div>
            <div class="w3-row w3-padding-16">
                <div class="w3-twothird w3-padding-small">
                    <button id="pay" class="w3-button w3-green w3-round-xxlarge w3-right" type="submit" style="width:70%;display:inline-block">پرداخت</button>
                    <button id="cancel-pay" class="w3-button w3-yellow w3-round-xxlarge w3-left" style="width:20%;display:inline-block">انصراف</button>
                </div>
                <div class="w3-third w3-padding-small">
                    &nbsp;
                </div>
            </div>
        </form>
        <div class="w3-container w3-cell" style="width:25vw;">
            <div class="w3-margin-top w3-right-align w3-white w3-round">
                <div class="w3-cell w3-cell-middle w3-gray w3-large w3-round w3-center" style="width: 160px;height: 40px;border-bottom-left-radius: 12px;">اطلاعات پذیرنده</div>
            </div>
            <div class="w3-margin-top" style="background-color: #d7d7d7;">
                <img class="center-img w3-grayscale w3-opacity-max" src="./asset/bank2.jpg" width="300" height="150"></img>
            </div>
            <div class="w3-card w3-white w3-margin-top w3-padding" style="border-bottom-left-radius:30px;">
                <p>نام پذیرنده : <?php echo $_POST['acceptor-name'] ?></p>
                <p>شماره پذیرنده : <?php echo $_POST['acceptor-no'] ?></p>
                <p>شماره ترمینال : <?php echo $_POST['terminal-no'] ?></p>
                <p>آدرس وب سایت : <?php echo $_POST['acceptor-address'] ?></p>
                <hr style="border: 1px dashed gray;">
                <p style="color: green;">مبلغ قابل پرداخت : <?php echo $_POST['amount'] ?></p>
            </div>
        </div>
    </div>
    <script src="./js/pay.js"></script>
</body>

</html>