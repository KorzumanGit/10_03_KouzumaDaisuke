<?php

// ①セッションの開始
session_start();
$old_session_id = session_id();


// ②trueは新しいIDを作成し、前のIDを無効化する
session_regenerate_id(true);

// ③更新された後のIDを取得してくる
$new_session_id = session_id();

// ④試しに古いIDと新しいIDを確認
// リロードする度に新しいIDが生成されていく
// 検証画面のapllecationのcookkieでIDが更新されているのか確認可能
echo "<p>old_id:{$old_session_id}</p>";
echo "<p>new_id:{$new_session_id}</p>";
