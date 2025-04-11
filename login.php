



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teacher Login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  
  <style>
        body {
        background-color: #f2f2f2;
        }

        .container {
        margin-top: 100px;
        }

        .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-header {
        background-color:rgb(13, 13, 14);
        color: #fff;
        border-bottom: none;
        border-radius: 10px 10px 0 0;
        }

        .card-body {
        padding: 20px;
        }

        .form-group {
        margin-bottom: 20px;
        }

        .form-control {
        border-radius: 5px;
        border: 1px solid #ccc;
        padding: 10px;
        }

        .btn-primary {
        background-color:rgb(8, 8, 8);
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        color: #fff;
        cursor: pointer;
        }

        .btn-primary:hover {
        background-color: #0056b3;
        }

  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h2>Teacher Login</h2>
          </div>
          <div class="card-body">
            <form action="actionlogin.php" method="post">
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-control" required>
              </div>
              <button type="submit" class="btn btn-dark">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>