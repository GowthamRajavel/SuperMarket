﻿<?php
session_start();
if(isset($_SESSION['username']))
{
echo "<html>
<head>
<title>Welcome To Webpage</title>
<style>
body{
    margin: 0;
    padding: 0;
    background: url(assortment-cabbage-cherry-tomatoes-1458694.jpg)no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    font-family: sans-serif;
}

.box{

 
    background: #f5f5f5;
    color: red;
    top: 50%;
    left: 30%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}



.user{
    width: 100px;
    height: 100px;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}

h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
    color: black;
}

p{
    color: #f49126;
    margin: 0;
    padding: 0;
    font-weight: bold;
}

input{
    width: 100%;
    margin-bottom: 10px;
}

 input[type='text'], input[type='password'],input[type='int'] 
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #673ab7;
    font-size: 16px;
}

input[type='submit']
{
    border: none;
    outline: none;
    height: 40px;
    background: #2196f3;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;

}


input[type='submit']:hover
{
    cursor: pointer;
    background: #0097a7;
}

a
{
    text-decoration: none;
    font-size: 16px;
    line-height: 20px;
    color: #069818;
}


a:hover
{
    color: red;
}

</style>


</head>
<body>
<div class='box'>
<img src='user.png' class='user'>
<h1 align='center'>WELCOME TO WEBPAGE</h1>
<br>
<br>
<h1 align='center'>ENTER THE DATAS YOU WANT TO ENTER</h1>
<form name='myform' action='shopdetail.php' method='post' style='text-align:center;'>
  <p> SHOPNAME</p>
   <input type='text' placeholder='Enter Shopname' name='shopname' />
   <br>
   <p>PRODUCTNAME</p>
   <input type='text' placeholder='Enter Productname' name='productname' /><br>
   <p>PRODUCTID</p>
   <input type='int' placeholder='Enter Productid' name='productid' /><br>
   <p>COST</p>
   <input type='int' placeholder='Enter Cost' name='cost' /><br>
<br>
<input type='submit' value='Submit' />
<br>

	<a href='logout.php'>Logout</a>;

</body>
</html>";

}

?>

