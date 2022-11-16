<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('loation:landing.php');

}

?>

<?php
include 'connect4.php';?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link rel="stylesheet" href="admin.css" />
    <title>Admin Dashboard</title>
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
    <link rel="icon" href="images/logo.png.png" type="image/png" />
  </head>

  <body>
    <div class="d-flex" id="wrapper">
      <!-- Sidebar -->
      <div class="bg-white" id="sidebar-wrapper">
        <div
          class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"
        >
          <i class="fas fa-user-secret me-2"></i>Regikom admin panel
        </div>
        <div class="list-group list-group-flush my-3">
          <a
            href="#"
            class="list-group-item list-group-item-action bg-transparent second-text active"
            ><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a
          >
          <a
            href="http://localhost/registration/signup1/homepage1.php"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
            ><i class="fas fa-project-diagram me-2"></i>visit regikom
            homepage</a
          >

          <a
            href="http://localhost/registration/admincrud/display1.php"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
            ><i class="fas fa-project-diagram me-2"></i>admins</a
          >
          <a
            href="http://localhost/registration/admincrud/display.php"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
            ><i class="fas fa-project-diagram me-2"></i>User accounts</a
          >
          <a
            href="http://localhost/registration/admincrud/display4.php"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
            ><i class="fas fa-paperclip me-2"></i>room availability</a
          >


          <a
            href="mainprint.php"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
            ><i class="fas fa-paperclip me-2"></i>Booking reports</a
          >

          <a
            href="http://localhost/registration/admincrud/display3.php"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
            ><i class="fas fa-paperclip me-2"></i>payment reports</a
          >
          <a
            href="receipt.php"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
            ><i class="fas fa-paperclip me-2"></i>invoice</a
          >
          <a
            href="mailto:aloiceapamo@gmail.com"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
            ><i class="fas fa-paperclip me-2"></i>mails</a
          >


          <a
            href="landing.php"
            class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"
            ><i class="fas fa-power-off me-2"></i>Logout</a
          >
        </div>
      </div>
      <!-- /#sidebar-wrapper -->

      <!-- Page Content -->
      <div id="page-content-wrapper">
        <nav
          class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4"
        >
          <div class="d-flex align-items-center">
            <i
              class="fas fa-align-left primary-text fs-4 me-3"
              id="menu-toggle"
            ></i>
            <h2 class="fs-2 m-0">Dashboard</h2>
          </div>

          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle second-text fw-bold"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <i class="fas fa-user me-2"></i>chief admin
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Profile</a></li>
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>

        <div class="container-fluid px-4">
          <div class="row g-3 my-2">
            <div class="col-md-3">
              <div
                class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded"
              >
                <div>
                  <h3 class="fs-2">200</h3>
                  <p class="fs-5">target bookings/month</p>
                </div>
                <i
                  class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"
                ></i>
              </div>
            </div>

            <div class="col-md-3">
              <div
                class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded"
              >
                <div>
                  <h3 class="fs-2">2.0m ksh/=</h3>
                  <p class="fs-5">target income/month</p>
                </div>
                <i
                  class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full secondary-bg p-3"
                ></i>
              </div>
            </div>

            <div class="row my-5">
              <h3 class="fs-5 ">Recent bookings</h3>
              <table class="table table-dark">


  <table class="table table-dark">
  <thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">username</th>
      <th scope="col">email</th>
      <th scope="col">checkindate</th>
      <th scope="col">checkoutdate</th>
      <th scope="col">roomtype</th>
      <th scope="col">roomunits</th>
      <th scope="col">operations</th>
    </tr>
  </thead>
  <tbody>

 <?php
$sql = "Select * from `bookdetails`";
$result = mysqli_query($con, $sql);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $username = $row['username'];
        $email = $row['email'];
        $checkindate = $row['checkindate'];
        $checkoutdate = $row['checkoutdate'];
        $roomtype = $row['roomtype'];
        $roomunits = $row['roomunits'];
        echo ' <tr>
        <th scope="row">' . $id . '</th>
        <td>' . $username . '</td>
        <td>' . $email . '</td>
        <td>' . $checkindate . '</td>
        <td>' . $checkoutdate . '</td>
        <td>' . $roomtype . '</td>
        <td>' . $roomunits . '</td>

        <td>
    <button class="btn btn-primary"><a href="http://localhost/registration/admincrud/display3.php? confirmid=' . $id . '" class="text-light">confirm</a></button>
    <button class="btn btn-danger"><a href="deleteb.php?  cancelid=' . $id . '" class="text-light">cancel</a></button>
</td>
      </tr>';
    }

}

?>



  </tbody>
</table>


              <div class="col"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- /#page-content-wrapper -->
    </div>

    <script src="admin.js"></script>
    <script>
      var el = document.getElementById("wrapper");
      var toggleButton = document.getElementById("menu-toggle");

      toggleButton.onclick = function () {
        el.classList.toggle("toggled");
      };
    </script>
  </body>
</html>
