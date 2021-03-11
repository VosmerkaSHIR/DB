<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$surname = filter_var(trim($_POST['surname']), FILTER_SANITIZE_STRING);
$lastname = filter_var(trim($_POST['lastname']), FILTER_SANITIZE_STRING);
$birth = filter_var(trim($_POST['birth']), FILTER_SANITIZE_STRING);
$sex = filter_var(trim($_POST['sex']), FILTER_SANITIZE_STRING);
$education = filter_var(trim($_POST['Education']), FILTER_SANITIZE_STRING);
$city = filter_var(trim($_POST['city']), FILTER_SANITIZE_STRING);
$tel = filter_var(trim($_POST['tel']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$social = filter_var(trim($_POST['social']), FILTER_SANITIZE_STRING);
$meetday = filter_var(trim($_POST['meetday']), FILTER_SANITIZE_STRING);
$testtime = filter_var(trim($_POST['testtime']), FILTER_SANITIZE_STRING);
$datevacantion = filter_var(trim($_POST['datevacantion']), FILTER_SANITIZE_STRING);
$comment = filter_var(trim($_POST['comment']), FILTER_SANITIZE_STRING);
$vk = filter_var(trim($_POST['vk']), FILTER_SANITIZE_STRING);
$instagram = filter_var(trim($_POST['instagram']), FILTER_SANITIZE_STRING);
$Work = filter_var(trim($_POST['Work']), FILTER_SANITIZE_STRING);
$EducatePlace = filter_var(trim($_POST['EducatePlace']), FILTER_SANITIZE_STRING);

$resume = date("d = F = s ").'-'.$_FILES["resume"]["name"];
$testpdf = date("d = F = s ").'-'.$_FILES["testpdf"]["name"];

if(is_uploaded_file($_FILES["resume"]["tmp_name"]))
   {
     move_uploaded_file($_FILES["resume"]["tmp_name"], "../../resume/" . $resume);
   } else {
      echo("Ошибка загрузки резюме");
   }
if(is_uploaded_file($_FILES["testpdf"]["tmp_name"]))
   {
     move_uploaded_file($_FILES["testpdf"]["tmp_name"], "../../testWork/" . $testpdf );
   } else {
      echo("Ошибка загрузки тестового задания");
   }

$mysql = new mysqli('localhost', 'sila', 'test', 'admin');
mysqli_set_charset($mysql, 'utf8');
$mysql->query("INSERT INTO `employers` (`Name` , `Surname`,
                                        `Lastname` , `Sex`,
                                        `Birth` , `Education`,
                                        `City` , `Tel`,
                                        `Email` , `Social`,
                                        `Meetday` , `Testtime`,
                                        `Datevacantion` , `Comment`,
                                        `resume` , `testWork`,
                                        `vk` , `instagram`,
                                        `Work` , `EducatePlace`)
VALUES('$name','$surname',
       '$lastname','$sex',
       '$birth','$education',
       '$city','$tel',
       '$email','$social',
       '$meetday','$testtime',
       '$datevacantion','$comment',
       '$resume','$testpdf',
       '$vk','$instagram',
       '$Work','$EducatePlace') ");
$mysql->close();
header('Location:/');
?>