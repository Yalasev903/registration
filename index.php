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
  <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>



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

<section>
    <!--Only demo tag--><!DOCTYPE html><!--/Only demo tag-->


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
.form-container{
 background-color: #fff;
 font-family: 'Poppins', sans-serif;
 text-align: center;
 padding: 30px 25px;
 border-radius: 10px;
 box-shadow: 0 0 25px -15px rgba(0,0,0,0.3);
 position: relative;
}
.form-container:before,
.form-container:after{
 content: '';
 background-color: #4E4C97;
 height: 50%;
 width: 4px;
 position: absolute;
 left: 10px;
 top: 10px;
}
.form-container:after{
 top: auto;
 bottom: 10px;
 left: auto;
 right: 10px;
}
.form-container .title{
 color: #4E4C97;
 font-size: 25px;
 font-weight: 700;
 text-transform: capitalize;
 margin: 0 0 15px;
}
.form-container .social-links{
 padding: 0;
 margin: 0 0 15px;
 list-style: none;
}
.form-container .social-links li{
 display: inline-block;
 margin: 0 3px;
}
.form-container .social-links li a{
 color: #555;
 line-height: 27px;
 height: 28px;
 width: 28px;
 border: 1px solid #555;
 border-radius: 50%;
 display: block;
 transition: all 0.3s ease 0s;
}
.form-container .social-links li a:hover{
 color: #fff;
 background-color: #4E4C97;
}
.form-container .description{
 color: #555;
 font-size: 13px;
 margin: 0 0 10px;
 display: block;
}
.form-horizontal .form-group{ margin: 0 0 15px; }
.form-horizontal .form-group:last-of-type{
 text-align: left;
 margin-bottom: 35px;
}
.form-horizontal .form-control{
 color: #4E4C97;
 background: #F7F8F9;
 font-size: 14px;
 font-weight: 500;
 letter-spacing: 1px;
 height: 40px;
 padding: 6px 12px;
 border-radius: 5px;
 border: 2px solid #F2F5F6;
 box-shadow: none;
}
.form-horizontal .form-control:focus{
 border-color: rgba(78, 76, 151, 0.5);
 box-shadow: none;
}
.form-horizontal .form-control::placeholder{
 color: #e1e1e1;
 font-size: 14px;
 font-weight: 300;
}
.form-horizontal .form-group .check-label{
 color: #555;
 font-size: 12px;
 font-weight: 400;
 text-transform: none;
 margin: -2.5px 0 0;
 vertical-align: text-top;
 display: inline-block;
}
.form-horizontal .form-group .check-label a{
 color: #4E4C97;
 transition: all 0.3s ease;
}
.form-horizontal .form-group .check-label a:hover{ text-decoration: underline; }
.form-horizontal .checkbox{
 height: 17px;
 width: 17px;
 min-height: auto;
 margin: 0 3px 0 0;
 border: 1px solid #999;
 border-radius: 2px;
 cursor: pointer;
 display: inline-block;
 position: relative;
 appearance: none;
 -moz-appearance: none;
 -webkit-appearance: none;
 transition: all 0.3s ease;
}
.form-horizontal .checkbox:before{
 content: '';
 height: 6px;
 width: 12px;
 border-bottom: 2px solid #fff;
 border-left: 2px solid #fff;
 opacity: 1;
 transform: rotate(-45deg);
 position: absolute;
 left: 2px;
 top: 2.5px;
 transition: all 0.3s ease;
}
.form-horizontal .checkbox:checked{
 background-color: #4E4C97;
 border-color: #4E4C97;
}
.form-horizontal .checkbox:checked:before{ opacity: 1; }
.form-horizontal .checkbox:not(:checked):before{ opacity: 0; }
.form-horizontal .checkbox:focus{ outline: none; }
.form-horizontal .btn{
 color: #fff;
 background-color: #4E4C97;
 font-size: 13px;
 font-weight: 600;
 letter-spacing: 0.5px;
 text-transform: capitalize;
 width: 130px;
 padding: 11px;
 margin: 0 10px 10px 0;
 border: 2px solid #4E4C97;
 border-radius: 15px;
 display: inline-block;
 transition: all 0.3s ease 0s;
}
.form-horizontal .btn.signin{
 color: #4E4C97;
 background-color: #fff;
}
.form-horizontal .btn:hover,
.form-horizontal .btn:focus{
 color: #4E4C97;
 background-color: #fff;
 box-shadow: 0 0 5px #4E4C97, 0 0 15px #4E4C97 inset;
}
.form-horizontal .btn.signin:hover,
.form-horizontal .btn.signin:focus{
 text-shadow: 3px 3px rgba(0,0,0,0.3);
 box-shadow: 0 0 5px #4E4C97;
}
</style>

 <div class="container-fluid">

 <div class="offset-md-4 col-md-4 offset-sm-3 col-sm-6">
 <div class="form-container">
 <h3 class="title">Create Account</h3>
 <ul class="social-links">
 <li><a href=""><i class="fab fa-google"></i></a></li>
 <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
 <li><a href=""><i class="fab fa-twitter"></i></a></li>
 </ul>
 <span class="description">or use you email for registration:</span>

 <?php 


// Подключение к базе данных
define("SERVERNAME","localhost");
define("DB_LOGIN","root");
define("DB_PASSWORD","");
define("DB_NAME","registration");

// Обработка данных регистрации
if (isset($_POST['sing_up'])) {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $connect = new mysqli(SERVERNAME, DB_LOGIN, DB_PASSWORD, DB_NAME);
    $sql = "INSERT INTO `account`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
    $connect->query($sql);
    $connect->close();
    // Перенаправление на страницу администратора после успешной регистрации
    header("Location: administrator.php");
    exit;
}
?>

<form action="#" class="form-horizontal" method="POST">
        <input type="text" class="form-control" placeholder="Имя" name="name">
        <input type="email" class="form-control" placeholder="Email" name="email">
        <input type="password" class="form-control" placeholder="Пароль" name="password">
        <br>
        <input type="submit" value="Регiстpація" name="sing_up" class="btn signup dropup-center">
</form>
</section>
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
    // Функция, которая будет вызываться при изменении состояния галочки согласия
    function toggleButton() {
        // Получаем ссылку на кнопку "Видалити"
        var deleteButton = document.querySelector('input[name="delete"]');
        // Получаем ссылку на кнопку "sing up"
        var signUpButton = document.querySelector('input[name="sing_up"]');
        // Получаем ссылку на галочку согласия
        var checkbox = document.querySelector('input[name="checkbox"]');
        
        // Если галочка согласия отмечена, то устанавливаем полную непрозрачность кнопкам
        if (checkbox.checked) {
            deleteButton.style.opacity = 1;
            signUpButton.style.opacity = 1;
        } else {
            // В противном случае, устанавливаем прозрачность кнопкам
            deleteButton.style.opacity = 0.5;
            signUpButton.style.opacity = 0.5;
        }
    }

    // Добавляем обработчик события изменения состояния галочки
    document.querySelector('input[name="checkbox"]').addEventListener('change', toggleButton);
</script>
</html>

