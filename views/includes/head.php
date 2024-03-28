<?php require '../../index.php'?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo BASE_URL . 'assets/css/bootstrap/bootstrap.css'; ?>"/>
        <link rel="stylesheet" href="<?php echo BASE_URL . 'assets/css/bootstrap/bootstrap.min.css'; ?>"/>
        <link rel="stylesheet" href="<?php echo BASE_URL . 'assets/css/datatables/css/dataTables.bootstrap5.css'; ?>"/>
        <link rel="stylesheet" href="<?php echo BASE_URL . 'assets/css/datatables/css/dataTables.dataTables.bootstrap5.min.css'; ?>"/>
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,900&display=swap" rel="stylesheet"/>
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous"/>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <title>Home</title>
        <style>
            .navbar .navbar-nav .nav-link {
                color: #fff;
                font-size: 1.1em;
            }
            .navbar .navbar-nav .nav-link:hover {
                background-color: orange;
                color: #fff;
            }
            .dropdown a {
                display: block;
                padding: 0.5rem 1rem;
                color: black;
                text-decoration: none;
                transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;
                background-color: transparent;
            }

            .dropdown a:hover {
                color: red;
                background-color:orange;
            }  

            .register-btn{
            margin:0px  40px;
            background-color: #fff;
            border: none;
            color: orange;
            padding: 8px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            }

            .login-btn,.w3-btn{
            background-color: #ffa500;
            border: none;
            color: white;
            padding: 8px 70.6px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            }
            .jumbtron{
            background-color: orange;
            color: white;
            }

            .w3-btn-donate{
            background-color: #ffa500;
            border: none;
            color: white;
            padding: 15px 100px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            }

            }
            @media all and (min-width: 330px) {
            .navbar .nav-item .dropdown-menu{ display: none; }
            .navbar .nav-item:hover .nav-link{   }
            .navbar .nav-item:hover .dropdown-menu{ display: block; }
            .navbar .nav-item .dropdown-menu{ margin-top:0; }
            }
            #count{
            border-radius: 50%;
            position: relative;
            top: -10px;
            left: -10px;
            }	
        </style>
    </head>
<body>
 