<?php require '../../index.php'?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Modernize Free</title>
        <link rel="shortcut icon" type="image/png" href="<?php echo BASE_URL ?>assets/images/logos/favicon.png" />
        <link rel="stylesheet" href="<?php echo BASE_URL ?>assets/css/styles.min.css" />
        <link rel="stylesheet" href="<?php echo BASE_URL ?>assets/css/simplebar.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            .sidebar-nav ul .sidebar-item>.sidebar-link.active {
                background: #000 !important;
            }
            .page-item {
                list-style: none;
                background: #eee;
                padding: 10px;
                color: #000;
            }
            .page-item .active {
                list-style: none;
                background: #7b2d8fe6;
                padding: 10px;
                color: #fff;
            }
            .modal-dialog{
                position: relative !important;
                top: 250px !important;
            }
            .form-control-lg {
                padding: .75rem 1rem;
                height: 60px !important;
                border-radius: 2rem !important;
                border: 2px solid #0000002b;
                padding-left: 50px;
            }
            .form-control:focus {
                border-color: #ffa500;
                box-shadow: -2px 8px 15px -8px #ffa500 !important;
            }
            .fa-input-icon {
                position: relative !important;
                top: -43px !important;
                left: 20px !important;
                font-size: 25px !important;
            }
            div:where(.swal2-container).swal2-center>.swal2-popup {
                width: 400px !important;
                height: 250px !important;
                background: #19623bf7 !important;
                color: #fff;
            }

            div:where(.swal2-icon).swal2-warning {
                height: 70px !important;
                width: 70px !important;
            }

            div:where(.swal2-icon) .swal2-icon-content {
                font-size: 6.75em !important;
            }

            div:where(.swal2-container) button:where(.swal2-styled).swal2-confirm {
                font-size: 1.5em !important;
            }
            div:where(.swal2-container) button:where(.swal2-styled).swal2-cancel {
                font-size: 1.5em !important;
            }
        </style>
    </head>
<body>