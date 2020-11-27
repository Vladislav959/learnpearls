<?php
$content = $_POST['content'];
$url = $_POST['url'];
$yeara = substr($url, 35);
$year = substr($url, 0, 4);
$yeara = substr($yeara, 5);
$year = 'year=' . $year . ' год, ' . substr($yeara, 0, 1) . ' квартал';
$db = mysqli_connect("localhost","u0935856_default","z6JXDSO!", "u0935856_default");
$uid = 1;
$uid = (int) $uid;
   $result = mysqli_query($db, "SELECT * FROM `learnpearls` WHERE `id`= '$uid'");
while($row = mysqli_fetch_array($result)) {
$starlist = $row['starlist'];
}
if(!strpos($starlist, $content)){
    $finalvalue = $starlist . $content;
}
else{
    $finalvalue = $starlist;
}
$result2 = mysqli_query($db, "UPDATE `learnpearls` SET `starlist`='$finalvalue' WHERE `id`='$uid'");
?>