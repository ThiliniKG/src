<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <link rel="icon" href="images/hotpot.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="styles.css">
</head>
  <body>
    <nav class="navbar navbar-expand-lg bg-white shadow py-0 sticky-top">
        <div class="container">
          <a class="navbar-brand" href="index.php">
            <img src="images/logonew2.png" alt="" width="100" height="60">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">

              <li class="nav-item">
                <a class="nav-link active"  href="allUserInfo.php">Customer Management</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active"  href="allOrderDetails.php">Order Management</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active"  href="allReservations.php">Reservation Managment</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active"  href="allReviewDetails.php">Reviews</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active"  href="employee.php">Staff Managment</a>
              </li>
              
            </ul>
            <div class="d-flex" style="justify-content: flex-end;">
                    <div class="nav-item dropdown">
                        <button class="btn btn-brand position-relative me-3 nav-link dropdown-toggle" id="accountDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            Admin Account
                            <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                                <span class="visually-hidden">New Alerts</span>
                            </span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="accountDropdown">
                         
                            <li><a class="dropdown-item" href="loginform.php">Login to Another Account</a></li>
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>