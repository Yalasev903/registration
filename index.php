<?php

// Подключение БД
// define("SERVERNAME","localhost");
// define("DB_LOGIN","root");
// define("DB_PASSWORD","");
// define("DB_NAME","new_db");

// $connect = new mysqli(SERVERNAME, DB_LOGIN, DB_PASSWORD, DB_NAME);
// $sql ="UPDATE `heroes` SET `age`=25 WHERE `name`='Харли Квин'";
// if($connect->query($sql) === TRUE) {
//      echo "ЗАПРОС ВЫПОЛНЕН";
// }else echo "ОШИБКА_ЗАПРОС_НЕ_ВЫПОЛНЕН";
// $connect->close();


// $connect = new mysqli(SERVERNAME, DB_LOGIN, DB_PASSWORD, DB_NAME);
// $sql ="SELECT * FROM `heroes`";
// $result = $connect->query($sql);
// for($user=array();$row=$result->fetch_assoc();$user[]=$row); 
     // print_r($user);

// $connect->close();

// foreach ($user as $k=>$v) {
//      echo "<p>$v[id] | $v[name] | age: $v[age] | rank: $v[rank]</p>";
// }

// $connect = new mysqli(SERVERNAME, DB_LOGIN, DB_PASSWORD, DB_NAME);
// $sql ="SELECT * FROM `heroes`";
// $result = $connect->query($sql);
// for($user=array();$row=$result->fetch_assoc();$user[]=$row); 
     // print_r($user);

// $connect->close();

// if (isset($_POST['add_heroes'])) {
//      $name = $_POST['name']??'0';
//      $age = $_POST['age']??'0';
//      $rank = $_POST['rank']??'0';
//      $connect = new mysqli(SERVERNAME, DB_LOGIN, DB_PASSWORD, DB_NAME);
//      $sql = "INSERT INTO `heroes`(`name`, `age`, `rank`) VALUES ('$name','$age','$rank')";
//      $connect->query($sql);
//      $connect->close();
// }

?>

<?php

// Подключение БД
define("SERVERNAME","localhost");
define("DB_LOGIN","root");
define("DB_PASSWORD","");
define("DB_NAME","new_db");

$name=$age=$rank='';
$connect = new mysqli(SERVERNAME, DB_LOGIN, DB_PASSWORD, DB_NAME);
$sql = "SELECT * FROM `heroes`";
$result = $connect->query($sql);
$user = [];
while ($row = $result->fetch_assoc()) {
    $user[] = $row;
}
$connect->close();

//cкрипт прописывает последовательность id 
$last = count($user)-1;
$last_id = $user[$last]['id']+1;


// Добавляет в БД данные
if (isset($_POST['add_heroes'])) {
    $name = $_POST['name'] ?? '0';
    $age = $_POST['age'] ?? '0';
    $rank = $_POST['rank'] ?? '0';
    $connect = new mysqli(SERVERNAME, DB_LOGIN, DB_PASSWORD, DB_NAME);
    $sql = "INSERT INTO `heroes`(`id`,`name`, `age`, `rank`) VALUES ('$last_id','$name','$age','$rank')";
    $connect->query($sql);
    $connect->close();
    header ("Location: /");

    // Обновляем массив $user после добавления нового персонажа
    $connect = new mysqli(SERVERNAME, DB_LOGIN, DB_PASSWORD, DB_NAME);
    $sql = "SELECT * FROM `heroes`";
    $result = $connect->query($sql);
    $user = [];
    while ($row = $result->fetch_assoc()) {
        $user[] = $row;
    }
    $connect->close();
}

if (isset($_GET['change'])) {
     $id = $_GET['change']??'';
     $name = $user[$id]['name']??'';
     $age = $user[$id]['age']??'';
     $rank = $user[$id]['rank']??'';
     $id_base = $user[$id]['id']??'';
     echo $name, $age;
}

// вносит правки героя
if (isset($_POST['edit_heroes'])) {
     $name = $user[$id]['name']??'0';
     $age = $user[$id]['age']??'0';
     $rank = $user[$id]['rank']??'0';
     $connect = new mysqli(SERVERNAME, DB_LOGIN, DB_PASSWORD, DB_NAME);
     $sql = "UPDATE `heroes` SET `name`='$name',`age`='$age',`rank`='$rank' WHERE `id`='$id_base'";
     $connect->query($sql);
     $connect->close();
     header ("Location: /");

}

// Удаляет героя
if (isset($_POST['delete_heroes'])) {
     $connect = new mysqli(SERVERNAME, DB_LOGIN, DB_PASSWORD, DB_NAME);
     $sql = "DELETE FROM `heroes` WHERE `id`='$id_base'";
     $connect->query($sql);
     $connect->close();
     header ("Location: /");
}

?>
<form action="#" method="POST">
<input type="text" name="name" placeholder="name" id="" value="<?=$name?>">
<input type="number" name="age" placeholder="age" id="" value="<?=$age?>">
<input type="number" name="rank" placeholder="rank" id="" value="<?=$rank?>">
<input type="submit" value="add_heroes" name="add_heroes">
<?php if (isset($_GET['change'])):?>
<input type="submit" value="Edit" name="edit_heroes">
<input type="submit" value="Delete" name="delete_heroes">
<?php endif; ?>
</form>

<?php

foreach ($user as $k => $v) {
     echo "<p>$v[id] | $v[name] | age: $v[age] | rank: $v[rank] <a href='?change=$k'>Select</a></p>";
}


?>

