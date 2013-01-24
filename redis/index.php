<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
   
<!-- # Copyright 2010 RightScale, Inc. All rights reserved.  -->

   
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>RightScale Unified Test App</title>
    <link rel="stylesheet" type="text/css" href="../style.css" />  
</head>

<body>

<div id="header">
<div id="logo"><img src="../images/logo.png" /></div>
</div>

<div class="code_container">
<div class="code">

<H1>Redis Connection Test</H1>

<?php

include '../config/redis.php';

$redis = new Redis();
$redis->connect($host, 6379);
$redis->auth($auth);
for ($i=1; $i<=3; $i++)
  {
  $redis->set('key$i', 'I am in DB');
  $num=$i;  
  }

echo "<b><center> Redis Output From Host($host)</center></b><br><br>";

$i=0;
while ($i < $num) {

$name="key$i";
$value=$redis->get('key$i');

echo "<b>$name:$value</b><br><hr><br>";

$i++;
}

?>

</div>
</div>

</body>
</html>
