<?php
$MyUrl = "https://localhost/myfile_lab05/KAMIZONO-SOTSUSEI-TOCHU";
require_once __DIR__ . "../../functions.php";


//共通
//-- トップ画面
define("link_index", "$MyUrl/index.php");


//管理者用(admin)
//-- 管理者ログイン
define("link_login", "$MyUrl/admin/login/login.php");
$re_login = "$MyUrl/admin/login/login.php";
//-- 管理者一覧
define("link_admin_all", "$MyUrl/admin/admin_all/admin_all.php");
$re_admin_all = "$MyUrl/admin/admin_all/admin_all.php";
//-- 管理者ログアウト
define("link_logout", "$MyUrl/admin/login/logout.php");
//-- 管理者画面TOP
define("link_admin_top", "$MyUrl/admin/admin_top.php");
$re_admin_top = "$MyUrl/admin/admin_top.php";
//-- 管理者追加
define("link_add_NewAdmin", "$MyUrl/admin/add_NewAdmin/add_NewAdmin.php");
$re_add_NewAdmin = "$MyUrl/admin/add_NewAdmin/add_NewAdmin.php";
//-- 管理者追加(処理)
define("link_add_NewAdmin_act", "$MyUrl/admin/add_NewAdmin/add_NewAdmin_act.php");
$re_add_NewAdmin_act = "$MyUrl/admin/add_NewAdmin/add_NewAdmin_act.php";
//-- 活動報告(一覧)
define("link_activity_read", "$MyUrl/admin/activity/activity_read.php");
$re_activity_read = "$MyUrl//admin/activity/activity_read.php";
//-- 活動報告(新規登録)
define("link_activity_input", "$MyUrl/admin/activity/activity_input.php");
$re_activity_input = "$MyUrl/admin/activity/activity_input.php";
//-- 譲渡会(一覧)
define("link_transfer_read", "$MyUrl/admin/transfer/transfer_read.php");
$re_transfer_read = "$MyUrl/admin/transfer/transfer_read.php";
//-- 譲渡会(新規登録)
define("link_transfer_input", "$MyUrl/admin/transfer/transfer_input.php");
$re_transfer_input = "$MyUrl/admin/transfer/transfer_input.php";
//-- 寄付・グッズ
define("link_donate", "$MyUrl/visitor/donate.php");
$re_donate = "$MyUrl/visitor/donate.php";



//訪問者用(visitor)
//-- はじめに
define("link_about", "$MyUrl/visitor/about.php");
//-- 活動報告
define("link_activity", "$MyUrl/visitor/activity.php");
$re_activity = "$MyUrl/visitor/activity.php";
//-- ネット署名
define("link_signature", "$MyUrl/visitor/signature.php");
//-- 譲渡会
define("link_transfer", "$MyUrl/visitor/transfer.php");
//-- コンタクト
define("link_contact", "$MyUrl/visitor/contact.php");
//-- SOS
define("link_SOS", "$MyUrl/visitor/sos.php");
