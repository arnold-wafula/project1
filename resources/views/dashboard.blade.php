<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            font-family: Helvetica;
            margin: 0;
            padding: 0;
        }

        #sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            background-color: #f8f9fa;
            padding-top: 20px;
            color: #000;
        }

        #content {
            margin-left: 250px;
            padding: 20px;
        }

        #navbar {
            background-color: #343a40;
        }

        .navbar-dark .navbar-brand {
            color: FFFFFF;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: #ffffff;
        }

        .navbar-dark .navbar-toggler-icon {
            background-color: #ffffff;
        }

        .bg-light {
            background-color: #f8f9fa;
            padding: 20px;
            margin-top: 20px;
        }

        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -1px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            Landed Cost
        </a>
        
        <div class="navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <div class="nav-item dropdown">
                        <span class="nav-link user-dropdown" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span style="color: black;"></span>
                            <img src="user.jpg" width="30px" height="30px" alt="user-icon">
                        </span>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Log out</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
</body>
</html>