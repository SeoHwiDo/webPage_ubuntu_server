<!doctype html>
<html lang="ko">

<head>
<?php 
session_start();
require 'hostinfo.php';
?>
  <meta charset="utf-8">
  <title></title>
  <style>
    body {
      font-family: Consolas, monospace;
      font-family: 12px;
    }
  </style>
</head>

<body>
<?php
    $userid=$_SESSION['userid'];
?>
  <h1>정보 수정</h1>
  <form>
    <p><input type="password" name=re_pass placeholder="비밀번호" >
    <button 
        onclick="<?php   $re_oriPass = $_POST[ 're_pass' ]; $re_pass=password_hash ( $re_oriPass , PASSWORD_DEFAULT ); $sql = "UPDATE userList set pass = '$re_pass' WHERE userID = $userid ";
       	mysqli_query( $mysqli, $sql ); ?>">수정</button></p>
    <p><input type="text" name=re_age placeholder="나이" >
    <button 
        onclick="<?php $re_age = $_POST[ 're_age' ]; $sql = "UPDATE userList set age = '$re_age' WHERE userID = $userid ";
       	mysqli_query( $mysqli, $sql ); ?>">수정</button></p>
    <p><input type="text" name=re_phone placeholder="전화번호" >
    <button 
        onclick="<?php  $re_phone = $_POST[ 're_phone' ]; $sql = "UPDATE userList set phone  = '$re_phone' WHERE userID = $userid ";
       	mysqli_query( $mysqli, $sql ); ?>">수정</button></p>
    <p><input type="text" name=re_mail placeholder="메일주소" >
    <button 
        onclick="<?php  $re_mail = $_POST[ 're_mail' ]; $sql = "UPDATE userList set mail  = '$re_mail' WHERE userID = $userid ";
       	mysqli_query( $mysqli, $sql ); ?>">수정</button></p>
    
  </form>
</body>


</html>