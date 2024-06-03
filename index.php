<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planting Trees</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <nav class="navbar" style="background-color: #e3f2fd;">
            <!-- Navbar content -->
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                  <a class="navbar-brand" href="index.html">EcoClicks</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="login.html">Login</a>
                        <li class="nav-item">
                          <a class="nav-link" href="dashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="about.html">Logout</a>
                        </li>
                      </li>
                    </ul>
                    <form class="d-flex" role="search">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success " type="submit">Search</button>
                    </form>
                  </div>
                </div>
              </nav>
          </nav>
        <h1>Sign Up</h1>
        <form id="signupForm" action="_dbconnect.php" method="post">
            <div class="mb-3">
                <label for="fullName" class="form-label">First Name: </label>
                <input type="text" id="first_name" name="first_name" required class="form-control"  >
            <div class="mb-3">
            <div class="mb-3">
                <label for="fullName" class="form-label">Last Name: </label>
                <input type="text" id="last_name" name="last_name" required class="form-control"  >
            <div class="mb-3">
            <div class="mb-3">
                <label for="fullName" class="form-label">User Name: </label>
                <input type="text" id="ussername" name="username" required class="form-control"  >
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" id="email" name="email" required class="form-control"  >
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" id="password" name="password" required    class="form-control" >
            </div>
            <button type="submit" value="sign up" class="btn btn-primary mx-0 ">Submit</button>
          </form>
          <button   class="btn btn-outline-primary mx-4 "><a class="loginbtnnone" href="login.html"> Login Here </a> </button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>