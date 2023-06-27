<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style2.css">

    <style>
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300);

        #wrapper {
            width: 100%;
            text-align: center;
            color: #fff;
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            margin: 0;
            padding: 0px;
            text-align: center;
            letter-spacing: 4px;
            z-index: 2;

        }

        #header1 {
            width: 100%;
            /*mengatur header supaya full width*/
            z-index: 2;
            position: fixed;
            height: 80px;
            background-color: pink;


        }

        #header1 p {
            color: #ffffff;
            font-weight: bold;
            text-decoration: none;
            font-size: 50px;
            font-family: fantasy;
            -webkit-text-fill-color: #d52858;
            -webkit-text-stroke: 2px white;
            text-align: center;
            margin-top: -10px;

            /*mengatur jarak antara di kiri dan kanan saja*/
        }

        body {
            background: #eee;
            margin: 0;
            font-family: 'Open Sans', sans-serif;
        }

        hr {
            border: 0;
            background: #dedede;
            height: 1px;
        }

        header {
            text-align: center;
            color: #232323;
        }

        header .judul {
            font-size: 17pt;
        }

        header .deskripsi {
            font-size: 11pt;
        }

        .wrap {
            width: 1000px;
            margin: 25px auto;
            margin-top: 80px;
        }

        .button {
            position: relative;
            padding: 15px 30px 15px 30px;
            text-decoration: none;
            display: inline-block;
            margin-right: 15px;
            border-radius: 3px;

        }

        .bg-green {
            background-color: #f089a4;
            color: #fff;
            font-family: Times;
            font-size: 17px;
            box-shadow: 0 0 7px 0px #f089a4;
            border: 1px solid #f089a4;
        }

        nav.menu ul {
            overflow: hidden;
            color: #fff;
            list-style: none;
            float: left;
            padding: 0;
            width: 650px;
            margin: 0 0 0;
            background: #f089a4;
            -webkit-box-shadow: 1px 1px 1px 0px rgba(204, 204, 204, 0.55);
            -moz-box-shadow: 1px 1px 1px 0px rgba(204, 204, 204, 0.55);
            box-shadow: 1px 1px 1px 0px rgba(204, 204, 204, 0.55);
        }

        nav.menu ul li {
            margin: 0;
            float: left;
        }

        nav.menu ul a {
            padding: 25px;
            display: block;
            font-weight: 600;
            font-size: 16px;
            color: #fff;
            text-transform: uppercase;
            transition: all 0.5s ease;
            text-decoration: none;
        }

        nav.menu ul a:hover {
            text-decoration: none;
            background: #c14a6a;
        }

        .sidebar {
            float: right;
            width: 275px;
        }

        .sidebar .widget {
            padding: 25px;
            margin: 0 0 30px;
            background: #fff;
            border-bottom: 2px solid #fff;
            transition: all 0.5s ease;
        }

        .sidebar .widget:hover {
            border-bottom: 2px solid #3498db;
        }

        .sidebar .widget h2 {
            padding: 0;
            margin: 0 0 15px;
            color: #d52858;
            font-size: 18px;
            font-weight: 800;
            text-transform: uppercase;
        }

        .sidebar .widget p {
            font-size: 14px;
        }

        .sidebar .widget p:last-child {
            margin: 0;
        }

        .blog {
            float: left;
        }

        .conteudo {
            width: 600px;
            padding: 25px;
            margin: 25px auto;
            background: #fff;
            border: 1px solid #dedede;
            -webkit-box-shadow: 1px 1px 1px 0px rgba(204, 204, 204, 0.35);
            -moz-box-shadow: 1px 1px 1px 0px rgba(204, 204, 204, 0.35);
            box-shadow: 1px 1px 1px 0px rgba(204, 204, 204, 0.35);
        }



        .conteudo h1 {
            padding: 0;
            margin: 0 0 15px;
            font-weight: normal;
            color: #666;
            font-family: Georgia;
        }

        .conteudo p:last-child {
            margin: 0;
        }

        .conteudo .continue-lendo {
            color: #000;
            transition: all 0.5s ease;
            text-decoration: none;
            font-weight: 700;
        }

        .conteudo .continue-lendo:hover {
            margin-left: 10px;
        }

        .post-info {
            float: right;
            font-size: 12px;
            margin: -10px 0 15px;
            text-transform: uppercase;
        }


        @media screen and (max-width: 960px) {

            .header {
                position: inherit;
            }

            .wrap {
                width: 90%;
                margin: 25px auto;
            }

            .sidebar {
                width: 100%;
                margin: 25px 0 0;
                float: right;

            }

            .sidebar .widget {
                padding: 5%;
            }

            nav.menu ul {
                width: 100%;
            }

            nav.menu ul {
                float: inherit;
            }

            nav.menu ul li {
                float: inherit;
                margin: 0;
            }

            nav.menu ul a {
                padding: 15px;
                font-size: 16px;
                border-top: 1px solid #1abf9f;
                border-bottom: 1px solid #c14a6a;
            }

            .blog {
                width: 90%;
            }

            .conteudo {
                float: inherit;
                margin: 0 auto 25px;
                width: 101%;
                border: 1px solid #dedede;
                padding: 5%;
                background: #fff;
            }

            .conteudo img {
                max-width: 110%;
                margin: 0 0 25px -5%;
                min-width: 110%;

            }

            .conteudo .continue-lendo:hover {
                margin-left: 0;
            }


        }



        @media screen and (max-width: 460px) {

            nav.menu ul a {
                padding: 15px;
                font-size: 14px;
            }

            .sidebar {
                display: none
            }

            .post-info {
                display: none;
            }

            .conteudo {
                margin: 25px auto;
            }

            .conteudo img {
                margin: -5% 0 25px -5%;
            }

            .footer {
                padding: 1px;
                width: 100%;
                height: 20%;
                text-align: center;
                background: white;
                margin-top: 20px;
                display: inline-block;
                float: left;
                background-color: #f089a4;
            }


        }

        .hy a:hover {
            background-color: pink;
        }

        .hy a {
            text-decoration: none;
            background-color: black;
            color: white;
            padding: 8px;
        }

        .gambar img {
            height: 250px;
            width: 250px;
            float: left;
        }

        .hy {
            text-align: center;
            margin-top: 18px;
        }

        .footer {
            padding: 1px;
            width: 100%;
            height: 20%;
            text-align: center;
            background: white;
            margin-top: 20px;
            display: inline-block;
            float: left;
            background-color: #f089a4;

        }

        .footer h4 {

            color: white;
        }

        section#box-profile {
            position: relative;
            width: 80%;
            min-height: 250px;
            margin-left: 10%;
            margin-right: 10%;
            margin-top: 60px;
            border-radius: 6px;
            background-color: #fff;
            box-shadow: 0 0 7px 0px rgba(136, 136, 136, 0.2)
        }

        #box-profile .img-profile {
            position: relative;
            display: inline-block;
            width: 200px;
            height: 200px;
            border-radius: 300px;
            float: left;
            top: 25px;
            margin-left: 40px;

        }

        .img-profile .photo {
            height: 100%;
            background-size: 100%;
            background-repeat: no-repeat;
            background-position: 0px -20px;
            border-radius: 300px;
        }

        .description {
            position: relative;
            width: 400px;
            display: inline-block;
            height: 170px;
            float: left;
            top: 50px;
            margin-left: 30px;
            font-family: 'Helvetica', sans-serif;
            border-right: 1px solid #efefef;

        }

        .description h1 {
            font-size: 32px;
            margin-bottom: 14px;

        }

        .description p {
            color: #888;
        }

        .description .button {
            margin-top: 40px;
        }

        .information {
            position: relative;
            display: inline-block;
            float: left;
            font-family: 'Helvetica', sans-serif;
            top: 45px;
            margin-left: 20px;
        }

        .information .data {
            display: block;
            width: 100%;
            height: 39px;
        }

        .information p.field {
            font-weight: 600;
            width: 120px;
            color: #333;
        }

        .information .data p {
            float: left;

        }

        /*form*/

        .input-form {
            position: relative;
            max-width: 80%;
            padding: 30px;
            margin-left: 10%;
            margin-right: 10%;
            margin-top: 60px;
            border-radius: 6px;
            background-color: #fff;
            box-shadow: 0 0 7px 0px rgba(136, 146, 146, 0.2);

        }

        .input-form h1 {
            font-family: Arial;
            font-size: 32px;
        }

        .input-form .form {
            width: 100%;
            display: grid;
            margin-top: 15px;
            margin-bottom: 15px;

        }

        label {
            font-family: 'Helvetica', sans-serif;
            font-size: 16px;
            color: #333;
            font-weight: 600;
        }

        input {
            font-family: 'Helvetica', sans-serif;
            padding: 10px 20px 10px 20px;
            outline: none;
            border-radius: 3px;
            border: 1px solid #8888;
            margin-top: 5px;
            margin-bottom: 5px;
            font-size: 16px;

        }

        .footer {
            padding: 1px;
            width: 100%;
            height: 20%;
            text-align: center;
            background: white;
            margin-top: 20px;
            display: inline-block;
            float: left;
            background-color: #f089a4;

        }

        .footer h4 {

            color: white;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <div id="header1">
            <p style=" margin-top: 0px;"> Website </p>
        </div>
    </div>
    <!-- bagian header template -->
    <!-- akhir bagian header template -->
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#one">My Profile</a>
            <a class="dropdown-item" href="#two">two</a>
            <div role="separator" class="dropdown-divider"></div>
            <a class="dropdown-item" href="#three">three</a>
        </div>
    </li>
    <div class="wrap">
        <!-- bagian menu		 -->
        <nav class="menu">
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>

                    <a class="dropdown-item" href="#">My Profile</a>
                </li>
                <li>
                    <a href="#">Pengikut</a>
                </li>
                <li>
                    <a href="<?= base_url('auth/logout') ?>" data-toggle="modal" data-target="#logoutModal">Logout</a>
                </li>
                <li>
                    <a href="#">Daftar</a>
                </li>
        </nav>
        <!-- akhir bagian menu -->

        <!-- bagian sidebar website -->
        <aside class="sidebar">
            <div class="widget" style="background-color: white;">
                <h2>Lorem</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
            <div class="widget">
                <h2>Lorem</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco culpa qui officia deserunt mollit anim id est incididunt ut labore et dolore magna aliqua</p>
            </div>
        </aside>
        <!-- akhir bagian sidebar website -->


</body>

</html>