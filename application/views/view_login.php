<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="<?php echo base_url() ?>assets/front/bootstrap/img/3.png">
  <title>Login</title>
  <link href="<?php echo base_url() ?>assets/front/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/front/bootstrap/css/signin.css" rel="stylesheet">
  <style>
    body {
      background: url('<?php echo base_url() ?>assets/front/bootstrap/img/background.jpg') no-repeat center center fixed;
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .form-signin {
      width: 100%;
      max-width: 400px;
      padding: 40px;
      margin: auto;
      background: rgba(255, 255, 255, 0.9);
      border-radius: 12px;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
      text-align: center;
    }
    .form-signin img {
      border-radius: 50%;
      background: #f3f4f6;
      padding: 10px;
      margin-bottom: 20px;
    }
    .form-signin h1 {
      margin-bottom: 20px;
      font-weight: 500;
      color: #333;
      font-size: 28px;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
    }
    .form-signin .form-control {
      border-radius: 25px;
      padding: 15px;
      margin-bottom: 15px;
      border: 1px solid #ddd;
      box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
      font-size: 16px;
    }
    .form-signin .btn {
      border-radius: 25px;
      padding: 12px 20px;
      font-size: 16px;
      font-weight: 600;
      background-color: #007bff;
      border: none;
      color: #ffffff;
      transition: background-color 0.3s;
    }
    .form-signin .btn:hover {
      background-color: #0056b3;
    }
    .form-signin .checkbox label {
      font-size: 14px;
    }
    .form-signin p {
      color: #777;
    }
    .form-signin .form-control:focus {
      border-color: #007bff;
      box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
    }
  </style>
</head>
<body class="text-center">

<main>
  <form class="form-signin" method="post" action="<?php echo base_url() ?>index.php/login/ceklogin">
    <img class="mb-4" src="<?php echo base_url() ?>assets/front/bootstrap/img/3.png" alt="" width="80" height="80">
    <h1 class="h3 mb-3 font-weight-normal">Portal Berita</h1>
    <label for="inputEmail" class="sr-only">Username</label>
    <input type="text" class="form-control" name="user" placeholder="Username" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" name="pass" placeholder="Password" required>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
    <p class="mt-5 mb-3 text-muted">&copy; Portal Berita - 2024</p>
  </form>
</main>

<script src="<?php echo base_url() ?>assets/front/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
