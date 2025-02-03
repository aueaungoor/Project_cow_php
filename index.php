<?php
    if (isset($_GET['controller']) && isset($_GET['action'])) 
    {
        $controller = $_GET['controller'];
        $action = $_GET['action'];
    }
    else{
        $controller = 'pages';
        $action = 'home';
    }
    error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>index</title>

    <style>
        body {
            background-color: #f6f6f6;
        }
        .sidebar {
            margin: 0;
            padding: 0;
            width: 250px;
            background-color: #0d6efd !important;
            /* color: white; */
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        .sidebar a ,.sidebar h3 {
            display: block;
            color: white !important;
            padding: 16px;
            text-decoration: none;
        }
        .sidebar a.active, .sidebar a:hover {
            background-color: white !important;
            color: #0d6efd !important;
        }
        .sidebar a:hover:not(.active) {
            background-color: white ;
            color: #0d6efd;
        }
        
        .controllers{
            /* display: block; */
            color: #6610f2;
            margin-right: 5%;
            text-decoration: none;
        }

        /* .controllers a:hover:not(.active) {
            background-color: white;
            color: #6610f2;
        } */

        .content {
            margin-left: 280px;
            padding: 1px 16px;
            height: 1000px;
        }

        /* @media screen and (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .sidebar a {
                float: left;
            }

            div.content {
                margin-left: 0;
            }
        }

        @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
        } */
        .navbar{
            width: 85%;
            margin-left: 250px;
            position: fixed;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h3 class="navbar-brand">Cow Farm</h3>
        <a href="?controller=pages&action=home" class="<?php echo ($controller == 'pages' && $action == 'home') ? 'active' : ''; ?>">Home</a>
        <a href="?controller=shed&action=index" class="<?php echo ($controller == 'shed' && $action == 'index') ? 'active' : ''; ?>">Shed</a>
        <a href="?controller=staff&action=index" class="<?php echo ($controller == 'staff' && $action == 'index') ? 'active' : ''; ?>">Staff</a>
        <a href="?controller=schedule&action=index" class="<?php echo ($controller == 'schedule' && $action == 'index') ? 'active' : ''; ?>">Schedule</a>
        <a href="?controller=shedopen&action=index" class="<?php echo ($controller == 'shedopen' && $action == 'index') ? 'active' : ''; ?>">Shedopenaaaaaaaaaaaaaa</a>
    </div>
    <nav class="navbar navbar-light bg-white" style="height: 50px;">
        <div class="container-fluid" style="justify-content: end;">
            <div class="controllers">
                <?php echo "controller = ".$controller." action = ".$action."<br>";?>
            </div>

        </div>
    </nav>
    <div class="content">
        <div class="container" style="margin-top: 5%;" >
            <?php require("route.php");?>
        </div>
    </div>

</div>
</body>
</html>