<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .components {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        .components li {
            margin-right: 20px;
        }
        .components a {
            text-decoration: none;
            color: #fff;
            transition: color 0.2s ease;
        }
        .components a:hover {
            color: #ccc;
        }
        @media (max-width: 992px) {
            .components {
                flex-direction: column;
                align-items: flex-start;
            }
            .components li {
                margin: 10px 0px 10px 0px;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">School Admin Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="list-unstyled components d-flex justify-content-end ml-auto">
                    <li class="active">
                        <a href="admin.php" data-page="students" class="text-white py-2">
                            <i class="fas fa-users me-2"></i>
                            <span>Students</span>
                        </a>
                    </li>
                    <li>
                        <a href="parent.php" data-page="parents" class="text-white py-2">
                            <i class="fas fa-user-friends me-2"></i>
                            <span>Parents</span>
                        </a>
                    </li>
                    <li>
                        <a href="teacher.php" data-page="teachers" class="text-white py-2">
                            <i class="fas fa-chalkboard-teacher me-2"></i>
                            <span>Teachers</span>
                        </a>
                    </li>
                    <li>
                        <a href="class.php" data-page="classes" class="text-white py-2">
                            <i class="fas fa-door-open me-2"></i>
                            <span>Classes</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>