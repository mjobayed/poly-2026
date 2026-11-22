<?php
$dbhost = "127.0.0.1";
$dbusername = "root";
$dbpassword = "";
$dbname = "cv";

// Create db connection
$conn = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Connection error: " . $conn->connect_error);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Signup</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-yEPZ7jP9S0QKiUQ0m3jjsO4ProIW7wvR9gXkI7JOGa2XVsw53Yke2bsdkBbjmmiX"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <section style="margin-top: 50px">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-5">
          <?php
          if (isset($_POST['signup'])) {
              $name = $_POST["name"];
              $phone = $_POST["phone"];
              $email = $_POST["email"];
              $username = $_POST["username"];
              $password = $_POST["password"];
              echo $phone;
          }
?>
            <div class="card">
              <div class="card-body">
                <form action="" method="post">
                  <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter your name" />
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="number" class="form-control" name="phone" placeholder="Enter your phone number" />
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter your email" />
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Enter username" />
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter password" />
                  </div>
                  <button type="submit" class="btn btn-primary" name="signup">Signup</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-WyOxWvTyr1QaMPfiPJSv76iReVthorl5uWlFtZPyK0IEB0hGzo9y5Bp9mYanr8Bu"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
