<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.72.0">
  <title>Album example · Bootstrap</title>

  <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/album/">



  <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


</head>

<body>

  <header>
    <div class="collapse bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">About</h4>
            <p class="text-muted">Add some information about the album below, the author, or any other background
              context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off
              to some social networking sites or contact information.</p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Contact</h4>
            <ul class="list-unstyled">
              <li><a href="#" class="text-white">Follow on Twitter</a></li>
              <li><a href="#" class="text-white">Like on Facebook</a></li>
              <li><a href="#" class="text-white">Email me</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a href="#" class="navbar-brand d-flex align-items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2"
            viewBox="0 0 24 24">
            <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
            <circle cx="12" cy="13" r="4" /></svg>
          <strong>Album</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
          aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
  </header>

  <main>

  <?php 
// Початок сесії
session_start();

// Підключення до бази даних
define("SERVERNAME","localhost");
define("DB_LOGIN","root");
define("DB_PASSWORD","");
define("DB_NAME","registration");

// Обробка запитів на додавання, видалення та зміну даних
if(isset($_POST['action'])) {
    $action = $_POST['action'] ?? '';
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $id_base = $_POST['id_base'] ?? '';

    $connect = new mysqli(SERVERNAME, DB_LOGIN, DB_PASSWORD, DB_NAME);
    
    // Додавання нового запису
    if ($action === 'add') {
        $sql = "INSERT INTO `account`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
        $connect->query($sql);
    }
    // Зміна існуючого запису
    elseif ($action === 'edit') {
        $sql = "UPDATE `account` SET `name`='$name', `email`='$email', `password`='$password' WHERE `id`='$id_base'";
        $connect->query($sql);
    }
    // Видалення запису
    elseif ($action === 'delete') {
        $sql = "DELETE FROM `account` WHERE `id`='$id_base'";
        $connect->query($sql);
    }

    $connect->close();
}

// Збереження даних форми в сесії
$_SESSION['form_data'] = $_POST;
?>

<!-- Форма для додавання, видалення та зміни даних -->
<form action="#" class="form-horizontal" method="POST">
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Ім'я" name="name" value="<?php echo isset($_SESSION['form_data']['name']) ? $_SESSION['form_data']['name'] : ''; ?>">
    </div>
    <div class="form-group">
        <input type="email" class="form-control" placeholder="Електронна пошта" name="email" value="<?php echo isset($_SESSION['form_data']['email']) ? $_SESSION['form_data']['email'] : ''; ?>">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Пароль" name="password" value="<?php echo isset($_SESSION['form_data']['password']) ? $_SESSION['form_data']['password'] : ''; ?>">
    </div>
    <!-- Додане приховане поле для передачі id_base -->
    <input type="hidden" name="id_base" value="<?php echo isset($_SESSION['form_data']['id_base']) ? $_SESSION['form_data']['id_base'] : ''; ?>">
    <div class="form-group">
    <select name="action" class="form-control">
        <option value="add">Додати</option>
        <option value="edit">Змінити</option>
        <option value="delete">Видалити</option>
    </select>
</div>
    <div class="form-group">
        <input type="submit" value="Виконати" class="btn signup dropup-center">
    </div>
</form>

<!-- Вивід даних з бази даних -->
<?php 
$connect = new mysqli(SERVERNAME, DB_LOGIN, DB_PASSWORD, DB_NAME);
$sql = "SELECT * FROM `account`";
$result = $connect->query($sql);
$user = [];
while ($row = $result->fetch_assoc()) {
    $user[] = $row;
}
$connect->close();

foreach ($user as $k=>$v): ?>
    <p><?= $v['id'] ?> | Ім'я: <strong><?= $v['name'] ?></strong> | Електронна пошта: <?= $v['email'] ?> | Пароль: <?= $v['password'] ?>
        <a href='#' onclick='populateForm(<?php echo json_encode($v); ?>)'>Змінити</a>
    </p>
<?php endforeach; ?>





  </main>

  <footer class="text-muted py-5">
    <div class="container">
      <p class="float-right mb-1">
        <a href="#">Back to top</a>
      </p>
      <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
      <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a
          href="/docs/5.0/getting-started/introduction/">getting started guide</a>.</p>
    </div>
  </footer>

</body>
<script>
// JavaScript функция для заполнения формы данными выбранной записи из БД
function populateForm(data) {
    document.querySelector('input[name="name"]').value = data.name;
    document.querySelector('input[name="email"]').value = data.email;
    document.querySelector('input[name="password"]').value = data.password;
    document.querySelector('input[name="id_base"]').value = data.id;
}
</script>
</html>