<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome, Pemira STT Bandung 2023</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        .ch-container {
            margin-top: 0;
        }

        .login-header {
            text-align: center;
            padding-top: 5%;
            font-size: 15px;
            margin-bottom: 20px;
        }
       
        .login-box {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .alert {
            margin-bottom: 15px;
        }x

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
        }

        .btn-primary {
            width: 100%;
        }

        /* Mengubah warna ikon menjadi abu-abu */
        .glyphicon-user.red,
        .glyphicon-lock.red {
            color: #808080; /* Warna abu-abu */
        }

        /* Responsif untuk ukuran font pada layar yang lebih kecil */
        @media screen and (max-width: 576px) {
            .login-header  {
                margin: auto;
                font-size: 100%;
                margin-bottom: 3%;
                
            }
        }

        @media screen and (max-width: 461px) {
            .login-header  {
                margin: auto;
                font-size: 15px;
                margin-bottom: 13%;
                
            }
        }

        @media screen and (max-width: 362px) {
            .login-header  {
                margin: auto;
                font-size: 9;
                margin-bottom: 17%;
                
            }
        }


        @media screen and (max-width: 357px) {
            .login-header  {
                margin: auto;
                font-size: 9;
                margin-bottom: 33%;
                
            }
        }

    </style>
</head>
<body>
        <div class="container ch-container">
        <div class="row justify-content-center;">
        <div class="col-md-12 login-header text-center">
                <h2 style="font-size: 48px; font-weight: bold;">Welcome, Pemira STT Bandung 2023</h2>
            </div>
        </div>
    

            <div class="row justify-content-center" style="padding-top: 30px;">
            <div class="col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 login-box">
                <div class="alert alert-info">
                    Gunakan Username dan Password yang Telah di Berikan
                </div>

                <?php if(isset($validation_errors) && !empty($validation_errors)) { ?>
             <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?= $validation_errors; ?>
            </div>
                <?php } ?>

                <?php if ($this->session->flashdata('failed') && $this->form_validation->run() === FALSE) { ?>
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?php echo $this->session->flashdata('failed'); ?>
                    </div>
                <?php } 
                ?>
                <?php if($this->session->flashdata('block')) { ?>
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?php echo $this->session->flashdata('block'); ?>
                    </div>
                <?php } ?>

                <?php
                    $form_attribute = array(
                        'method' => 'post',
                        'class' => 'form-horizontal'
                    );
                    echo form_open('user/loginvalidation', $form_attribute);
                ?>

                <div class="form-group">
                    <div class="input-group input-group-lg" style="padding-left: 15px; padding-right: 15px;">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <?php
                            $form_attribute = array(
                                'type' => 'text',
                                'class' => 'form-control',
                                'name' => 'username',
                                'placeholder' => 'Username'
                            );
                            echo form_input($form_attribute);
                        ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group input-group-lg" style="padding-left: 15px; padding-right: 15px;">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        <?php
                            $form_attribute = array(
                                'type' => 'password',
                                'class' => 'form-control',
                                'name' => 'password',
                                'placeholder' => 'Password'
                            );
                            echo form_input($form_attribute);
                        ?>
                    </div>
                </div>

                <div class="form-group" style="padding-left: 15px; padding-right: 15px;">
                    <button type="submit" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-log-in"></span> Login</button>
                </div>

                <?php echo form_close(); ?>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
