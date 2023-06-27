<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  <link rel="stylesheet" href="style1.css" type="text/css">
  <style type="">

    .daftar{
        background-color: #435165;
        width: 400px;
      }

      * {
    box-sizing: border-box;
    font-family: -apple-system, BlinkMacSystemFont, "segoe ui", roboto, oxygen,
      ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", Arial,
      sans-serif;
    font-size: 16px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }
  body {
    background-color: #435165;
  }
  .login {
    width: 400px;
    background-color: #ffffff;
    box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
    margin: 100px auto;
  }
  .login h1 {
    text-align: center;
    color: #5b6574;
    font-size: 24px;
    padding: 20px 0 20px 0;
    border-bottom: 1px solid #dee0e4;
  }
  .login form {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding-top: 20px;
  }
  .login form label {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50px;
    height: 50px;
    background-color: #3274d6;
    color: #ffffff;
  }
  .login form input[type="password"],
  .login form input[type="text"] {
    width: 310px;
    height: 50px;
    border: 1px solid #dee0e4;
    margin-bottom: 20px;
    padding: 0 15px;
  }
  .login form input[type="submit"] {
    width: 100%;
    padding: 15px;
    margin-top: 20px;
    background-color: #3274d6;
    border: 0;
    cursor: pointer;
    font-weight: bold;
    color: #ffffff;
    transition: background-color 0.2s;
  }
  .login form input[type="submit"]:hover {
    background-color: #2868c7;
    transition: background-color 0.2s;
  }
  
  .navtop {
    background-color: #2f3947;
    height: 60px;
    width: 100%;
    border: 0;
  }
  .navtop div {
    display: flex;
    margin: 0 auto;
    width: 1000px;
    height: 100%;
  }
  .navtop div h1,
  .navtop div a {
    display: inline-flex;
    align-items: center;
  }
  .navtop div h1 {
    flex: 1;
    font-size: 24px;
    padding: 0;
    margin: 0;
    color: #eaebed;
    font-weight: normal;
  }
  .navtop div a {
    padding: 0 20px;
    text-decoration: none;
    color: #c1c4c8;
    font-weight: bold;
  }
  .navtop div a i {
    padding: 2px 8px 0 0;
  }
  .navtop div a:hover {
    color: #eaebed;
  }
  body.loggedin {
    background-color: #f3f4f7;
  }
  .content {
    width: 1000px;
    margin: 0 auto;
  }
  .content h2 {
    margin: 0;
    padding: 25px 0;
    font-size: 22px;
    border-bottom: 1px solid #e0e0e3;
    color: #4a536e;
  }
  .content > p,
  .content > div {
    box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.1);
    margin: 25px 0;
    padding: 25px;
    background-color: #fff;
  }
  .content > p table td,
  .content > div table td {
    padding: 5px;
  }
  .content > p table td:first-child,
  .content > div table td:first-child {
    font-weight: bold;
    color: #4a536e;
    padding-right: 15px;
  }
  .content > div p {
    padding: 5px;
    margin: 0 0 10px 0;
  }
  

      
    </style>
</head>

<body>
  <div class="login" style="background-color: lightpink;">
    <h1 style="color: #435165;">LOGIN</h1>
    <?= $this->session->flashdata('message'); ?>
    <form method="post" action="<?= base_url('auth'); ?>">
      <label for="email" style="background-color: mediumVioletRed;">
        <i class="fas fa-user"></i>
      </label>
      <input type="text" name="email" placeholder="Email" id="email" required>
      <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
      <label for="password" style="background-color: mediumVioletRed;">
        <i class="fas fa-lock"></i>
      </label>
      <input type="password" name="password" placeholder="Password" id="password" required>
      <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>


      <input type="submit" value="Login" style="background-color: mediumvioletred;">
      <div class="daftar">
        <a class="small" style="color: white;" href="<?= base_url('auth/registration'); ?>">Create an Account!</a>
      </div>
    </form>

  </div>



</body>

</html>