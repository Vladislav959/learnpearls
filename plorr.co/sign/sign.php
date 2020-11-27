<?php
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} }
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
//заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную

if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
{
exit ("<script>location.href='/sign?na'</script>");
}
//если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
$login = stripslashes($login);
$login = htmlspecialchars($login);

$password = stripslashes($password);
$password = htmlspecialchars($password);

//удаляем лишние пробелы
$email = trim($email);
$password = trim($password);
// подключаемся к базе
$db = mysqli_connect("localhost","u0935856_default","z6JXDSO!", "u0935856_default");
mysqli_set_charset($db, "utf8mb4"); 
$db->set_charset("utf8mb4");  
$result = mysqli_query($db, "SELECT * FROM `plorrusers` WHERE `email`='$login' OR `login`='$login'") or die(mysqli_error()); //извлекаем из базы все данные о пользователе с введенным логином
$myrow = mysqli_fetch_array($result);
if (empty($myrow['password']))
{
//если пользователя с введенным логином не существует
exit ("<script>location.href='/sign?incor'</script>");
}
else {
          if ($myrow['password']==$password) {
$id=$myrow['id'];
setcookie('id', $id, time()+60*60*24*30, "/");
          }

       else {
       //если пароли не сошлись
       exit ("<script>location.href='/sign?incor'</script>");
	   }
}
?>
<script>location.href="/profile"</script>