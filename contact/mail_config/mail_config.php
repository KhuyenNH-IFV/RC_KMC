<?php

//メールアドレスの切替え（0・・・テスト　1・・・本番）
//メールの送信先および自動返信メールの送信元が切替できます
define("MAIL_FLG", 0);

//テスト用:::::::::::::::::::::::::::::::::::::::
//管理者宛メールの送信先のメールアドレス（テスト）
define("MAIL_TO_TEST", "akit@rocoz.cc");

//管理者宛メールの送信先のメールCC（テスト）※空欄の場合はCCを送らない
define("MAIL_CC_TEST", "");

//管理者宛メールの送信先のメールBCC（テスト）※空欄の場合はBCCを送らない
define("MAIL_BCC_TEST", "");

//自動返信メールの送信元メールアドレス　※空欄の場合は管理者宛メールの送信先
define("MAIL_RETURN_FROM_TEST", "");


//本番用::::::::::::::::::::::::::::::::::::::::::
//管理者宛メールの送信先のメールアドレス（本番）
define("MAIL_TO", "akit@rocoz.cc");

//管理者宛メールの送信先のメールアドレスCC（本番）※空欄の場合はCCを送らない
define("MAIL_CC", "");

//管理者宛メールの送信先のメールアドレスBCC（本番）※空欄の場合はBCCを送らない
define("MAIL_BCC", "");

//自動返信メールの送信元メールアドレス　※空欄の場合は管理者宛メールの送信先
define("MAIL_RETURN_FROM", "");


//以下、テスト・本番共通::::::::::::::::::::::::::
//管理者宛メールの件名
define("MAIL_SUBJECT", "【メールフォーム】申し込みがありました");

//自動返信メールの送信元の名前
define("MAIL_TO_NAME", "");

//自動返信メールの件名
define("RETURN_SUBJECT", "【メールフォーム】申し込み受付確認");
//:::::::::::::::::::::::::::::::::::::::::::::::::::::


//２項目の同一チェックを行うか？（0・・・利用しない　1・・・利用する）-------------
define("DUPLICATE_CHECK", 0);

define("DUPLICATE_INPUT_1", "mail");	//チェックする項目１

define("DUPLICATE_INPUT_2", "mail2");	//チェックする項目２

define("DUPLICATE_CHECK_MESSAGE", "メールアドレスが一致していません。<br />");	//エラーメッセージ
//---------------------------------------------------------


//以下、必要な場合は変更（※通常はそのままで構いません）:::::::::::::::::
//自動返信メールを利用する？（0・・・利用しない　1・・・利用する）
define("RETURN_FLG", 1);

//入力ページのファイル名(index.php以外になる場合は変更　※index_view.html のファイル名は変更不要)
define("INPUT_PAGE_NAME","./index.php");

//セッション変数名（同一サーバ内に複数設置する場合は、「jrmail_session1」の部分をフォーム毎に変えてください
define("SESSION_CONTACT" ,"jrmail_session1");

//自動返信メールの返信先の入力項目
define("INPUT_MAIL", "mail");

//未記入の際の置換文字列
define("BLANK_TEXT", "(※未記入)");

?>