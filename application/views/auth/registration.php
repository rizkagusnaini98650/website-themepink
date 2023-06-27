<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- costum css -->
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: #FFE4E1;
            margin: 0;
            font-family: 'Open Sans', sans-serif;
        }


        h4 {
            font-family: fantasy;
            font-size: 30px;
            font-weight: bold;
            color: #ffb6c1;
            padding-top: 4px;
            padding-bottom: 4px;
            -webkit-text-stroke: 2px black;
        }

        .form-group {
            background-color: #FFB6C1;

        }

        a {
            color: pink;
        }



        }
    </style>

</head>

<body>
    <section class="container-fluid mb-4">
        <!-- justify-content-center untuk mengatur posisi form agar berada di tengah-tengah -->
        <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-4">
                <form method="POST" action="<?= base_url('auth/registration'); ?>">

                    <h4 class="text-center font-weight-bold"> Sign-Up </h4>
                    <!-- placeholder merupakan petunjuk singkat untuk mendeskripsikan value -->
                    <div class="form-group">
                        <label for="Firstname">First name</label>
                        <input type="text" class="form-control form-control-user" id="FirstName" name="Firstname" placeholder="First Name" value="<?= set_value('Firstname'); ?>">
                        <?= form_error('Firstname', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="Lastname">Last Name</label>
                        <input type="text" class="form-control form-control-user" id="LastName" name="Lastname" placeholder="Last Name">
                        <?= form_error('Lastname', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="umur">Umur</label>
                        <input type="text" class="form-control form-control-user" id="umur" name="umur" placeholder="Umur" value="<?= set_value('umur'); ?>">
                        <?= form_error('umur', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Alamat" value="<?= set_value('alamat'); ?>">
                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="hobi">Hobi</label>
                        <input type="text" class="form-control form-control-user" id="hobi" name="hobi" placeholder="Hobi" value="<?= set_value('hobi'); ?>">
                        <?= form_error('hobi', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="col-sm-6">
                            <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                        </div>
                    </div>

                    <button type="submit" name="register" class="btn btn-info btn-block" style="background-color: #ffb6c1; color: black;">Register</button>
                    <div class="form-footer mt-2" style="font-size:20px;">
                        <a class="small" href="<?= base_url('auth'); ?>">Already have an account? Login! </a>
                    </div>
                </form>
            </section>
        </section>
    </section>

    <!-- Bootstrap requirement jQuery pada posisi pertama, kemudian Popper.js, dan  yang terakhit Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>