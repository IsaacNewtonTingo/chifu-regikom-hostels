<?php

$success = 0;
$user = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect2.php';
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];

    $sql = "select * from `registration` where username='$username'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            //echo "username already taken!";
            $user = 1;
        } else {
            $sql = "insert into `registration`(username,gender,email,number,password)
        values('$username','$gender','$email','$number','$password')";
            $result = mysqli_query($con, $sql);
            if ($result) {

                // echo "Signup successfully";
                $success = 1;
            } else {
                die(mysqli_error($con));
            }
        }
    }

}

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="signup1.css" />
    <title>signup page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap"
    rel="stylesheet"
  />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
  />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
  />
  <script
    src="https://kit.fontawesome.com/bf0f5073ef.js"
    crossorigin="anonymous"
  ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="icon" href="images/logo.png.png" type="image/png" />
  </head>
  <body>



   <div class="container">
   <form action="signup1.php" method="post">
   <h1 class="form__title">Sign up page</h1>
   <div class="form__message form__message--error"></div>
  <div class="form__input-group">
    <label class="form-label">username</label>
    <input type="text" class="form__input"  minlength="2"
          maxlength="10"
          autofocus placeholder="Enter your username" name="username" autocomplete="off">
          <div class="form__input-error-message"></div>
    </div>

    <div class="form__input-groupp">
        <label for="gender">Gender</label>
        <div>
          <label for="male" class="radio-inline"
            ><input type="radio" name="gender" value="m" id="male" />Male</label
          >
          <label for="female" class="radio-inline"
            ><input
              type="radio"
              name="gender"
              value="f"
              id="female"
            />Female</label
          >
          <label for="others" class="radio-inline"
            ><input
              type="radio"
              name="gender"
              value="o"
              id="others"

            />Others</label
          >
          <div class="form__input-error-message"></div>
        </div>
      </div>
      <div class="form__input-group">
        <input
          type="email"

          class="form__input"
          autofocus
          placeholder="email"
          name="email"
        />
      </div>
      <div class="form__input-group">
        <input
          type="numbers"
          minlength="10"
          maxlength="10"
          class="form__input"
          autofocus
          placeholder="phone number"
          name="number"
        />
      </div>

  <div class="form__input-group">
    <label class="form-label">Password</label>
    <input type="password" class="form__input" minlength="2"
          maxlength="10"
          autofocus placeholder="Enter your password" name="password" autocomplete="off">
          <div class="form__input-error-message"></div>
  </div>



  <button type="submit"  class="form__button">Signup</button>

  <p class="form__text" >
        <a class="form__link" href="login1.php"
          >already have an account? login</a
        >
      </p>
</form>
<?php
if ($user) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Oh no sorry</strong> Username already exists
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>

<?php
if ($success) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>success</strong> you are successfully signed up!
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

}

?>

</div>
<script src="signup1.js"></script>

  </body>
</html>
