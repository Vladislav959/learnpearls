<?php
$db = mysqli_connect ("localhost","u0935856_default","z6JXDSO!", "u0935856_default");
$uid = 10;
$name = 'myown';
if($_POST['clicked'] == 1){
   $result = mysqli_query($db, "SELECT * FROM `actiwidgets` WHERE `uid`= '$uid' AND `name` = '$name'");
while($row = mysqli_fetch_array($result)) {
$clickedcount = $row['clickedcount'];
}
$clickedcount = (int) $clickedcount;
$clickedcount = $clickedcount +1;
$result2 = mysqli_query($db, "UPDATE `actiwidgets` SET `clickedcount`='$clickedcount' WHERE `uid`='$uid' AND `name` = '$name'");
}
elseif($_POST['closed'] == 1){
   $result = mysqli_query($db, "SELECT * FROM `actiwidgets` WHERE `uid`= '$uid' AND `name` = '$name'");
while($row = mysqli_fetch_array($result)) {
$closedcount = $row['closedcount'];
}
$closedcount = (int) $closedcount;
$closedcount = $closedcount +1;
$result2 = mysqli_query($db, "UPDATE `actiwidgets` SET `closedcount`='$closedcount' WHERE `uid`='$uid' AND `name` = '$name'");
}
?>