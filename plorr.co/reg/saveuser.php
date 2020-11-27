<?php session_start();
if (isset($_POST['email'])) { $email = $_POST['email']; if ($email == '') { unset($email);} }
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} }
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
if (isset($_POST['password2'])) { $password2 = $_POST['password2']; if ($password2 == '') { unset($password2);} } 
if (empty($email) or empty($password) or empty($login)) 
{
exit ("Вы ввели не всю информацию, венитесь назад и заполните все поля!");
}
if($password!=$password2){
    exit('<script>location.href="/reg?notm"</script>');
}
$email = stripslashes($email);
$email = htmlspecialchars($email);
$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);

$email = trim($email);
$login = trim($login);
$password = trim($password);
            if    (strlen($password) < 3 or strlen($password) > 15) {
            exit    ("<script>location.href='/reg?ngp'</script>");
            }
if    (strlen($login) > 25) {
            exit    ("<script>location.href='/reg?be'</script>");
            }           
if    (strlen($email) > 40) {
            exit    ("<script>location.href='/reg?be'</script>");
            }           
$db = mysqli_connect("localhost","u0935856_default","z6JXDSO!", "u0935856_default");
mysqli_set_charset($db, "utf8") ; 
mysqli_set_charset($db, "utf8mb4"); 
$db->set_charset("utf8mb4");  
$request = mysqli_query($db,"SELECT * FROM `plorrusers` WHERE `email`='$email'");

while($row = mysqli_fetch_array($request)) {
$id=$row['id'];
$emaildb = $row['email'];
}
if (!empty($id) and $emaildb!=$_COOKIE['email']) {
exit    ("<script>location.href='/reg?exists'</script>");
}
$request2 = mysqli_query($db,"SELECT * FROM `fusers` WHERE `login`='$login'");
while($row = mysqli_fetch_array($request2)) {
$id=$row['id'];
$logindb = $row['login'];
}
if (!empty($id) and $logindb!=$_COOKIE['login']) {
exit("<script>location.href='/reg?existsl'</script>");
}
function isRussian($text) {
    return preg_match('/[А-Яа-яЁё]/u', $text);
}
if(isRussian($myname)=='1'){
$cyr = [
            'а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п',
            'р','с','т','у','ф','х','ц','ч','ш','щ','ъ','ы','ь','э','ю','я',
            'А','Б','В','Г','Д','Е','Ё','Ж','З','И','Й','К','Л','М','Н','О','П',
            'Р','С','Т','У','Ф','Х','Ц','Ч','Ш','Щ','Ъ','Ы','Ь','Э','Ю','Я'
        ];
        $lat = [
            'a','b','v','g','d','e','io','zh','z','i','y','k','l','m','n','o','p',
            'r','s','t','u','f','h','ts','ch','sh','sht','a','i','y','e','yu','ya',
            'A','B','V','G','D','E','Io','Zh','Z','I','Y','K','L','M','N','O','P',
            'R','S','T','U','F','H','Ts','Ch','Sh','Sht','A','I','Y','e','Yu','Ya'
        ];
        $myname = str_replace($cyr, $lat, $myname);
}
if(isRussian($login)=='1'){
$cyr = [
            'а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п',
            'р','с','т','у','ф','х','ц','ч','ш','щ','ъ','ы','ь','э','ю','я',
            'А','Б','В','Г','Д','Е','Ё','Ж','З','И','Й','К','Л','М','Н','О','П',
            'Р','С','Т','У','Ф','Х','Ц','Ч','Ш','Щ','Ъ','Ы','Ь','Э','Ю','Я'
        ];
        $lat = [
            'a','b','v','g','d','e','io','zh','z','i','y','k','l','m','n','o','p',
            'r','s','t','u','f','h','ts','ch','sh','sht','a','i','y','e','yu','ya',
            'A','B','V','G','D','E','Io','Zh','Z','I','Y','K','L','M','N','O','P',
            'R','S','T','U','F','H','Ts','Ch','Sh','Sht','A','I','Y','e','Yu','Ya'
        ];
        $login = str_replace($cyr, $lat, $login);
}

$result2 = mysqli_query ($db,"INSERT INTO `plorrusers` (`email`,`password`,`login`) VALUES('$email','$password','$login')");
$request2 = mysqli_query($db,"SELECT * FROM `plorrusers` WHERE `email`='$email'");

while($row = mysqli_fetch_array($request2)) {
$id =$row['id'];
}
if ($result2=='TRUE')
{     
         
$_SESSION['id'] = $id;
$_SESSION['signnow'] = 'yes';
echo '<script>location.href="/profile"</script>';
}

else {
echo "<script>location.href='/reg?error'</script>";
     }
?>