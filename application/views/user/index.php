<!DOCTYPE html>
<html?>

    <head>
        <title>Ika's Website</title>
        <link rel="stylesheet" type="text/css" href="assets/css/style2.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
                padding: -100px -100px -100px -100px;
                text-decoration: none;
                display: inline-block;
                margin-right: 15px;
                border-radius: 3px;

            }

            .bg-green {
                background-color: #f089a4;
                color: #fff;
                font-family: Times;
                font-size: 15px;
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

            .biodata {
                float: right;
                margin-right: 90px;
            }

            .biodata p {
                font-size: 20px;
            }

            .editt a {
                color: white;
                size: 35px;
            }

            .editt {
                float: left;
            }

            .nav-link {
                color: white;
            }
        </style>
    </head>

    <body>


        <!-- bagian konten Blog -->
        <div class="blog" style="width: 70%">

            <div class="conteudo" style="width: 93%; margin-left: 0px;">
                <div class="post-info">
                    Dibuat oleh <b>Kelompok 14</b>
                </div>
                <img src="assets/img/profile/pink.jpg" width="100%" margin=0px;>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <div id="profil">
                    <h1> My Profile </h1>



                    <img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" class="img-fluid rounded-start" width="40%" height="10%">



                    <div class="biodata">
                        <h5><?= $user['Firstname'] . ' ' . $user['Lastname']; ?></h5>
                        <p class="card-text">Umur: <?= $user['umur']; ?></p>
                        <p>Alamat: <?= $user['alamat']; ?></p>
                        <p>Hobi: <?= $user['hobi']; ?></p>
                        <p>Email: <?= $user["email"] ?></p>
                        <p><small class="text-muted">Member since <?= date('d F Y', $user['date_created']); ?></small></p>
                    </div>



                    <div class="btn-group btn-group-sm" style="margin-top: 40px;">
                        <button class="btn btn-danger"><a class="nav-link" href="<?= base_url('user/edit') ?>">
                                <span>Edit Profile</span></a> </button>
                    </div>
                </div>




                <!-- akhir bagian konten Blog -->

            </div>

        </div>



        </div>

    </body>

    </html>