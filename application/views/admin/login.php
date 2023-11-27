<!-- <body style="background-image:url('<?php echo base_url(); ?>asset/img/background.jpg'); background-size: 100%; width: 100%; background-repeat: no-repeat"> -->
<div class="ch-container " style="margin-top: 10%;">
	<div class="row ">
		<div class="col-md-12 d-flex justify-content-center login-header">
			<h2>Selamat Datang di PEMIRA 2023</h2>
		</div>
		<!--/span-->
	</div>
	<!--/row-->

	<div class="row d-flex justify-content-center">
		<div class="col-md-5 center login-box">
			<div class="alert alert-info">
				<b>Silahkan Login Menggunakan Username dan Passsword Anda!</b>
			</div>
			<?php if ($this->session->flashdata('failed')) { ?>
			<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<?php echo $this->session->flashdata('failed'); ?>
			</div>
			<?php } ?>
			<?php
                $form_attribute = array(
                    'method'    => 'post',
                    'class'        => 'form-horizontal'
                );
                echo form_open('admin/loginvalidation', $form_attribute);
                ?>
			<form class="form-horizontal form-group" action="index.html" method="post">
				<fieldset>
					<div class="input-group input-group-lg">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
						<?php
                            $form_attribute     = array(
                                'type'            => 'text',
                                'class'            => 'form-control',
                                'name'            => 'username',
                                'placeholder'    =>    'Username'
                            );
                            echo form_input($form_attribute);
                            ?>

					</div>
					<div class="clearfix"></div><br>

					<div class="input-group input-group-lg">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
						<?php
                            $form_attribute     = array(
                                'type'            => 'password',
                                'class'            => 'form-control',
                                'name'            => 'password',
                                'placeholder'    => 'Password'
                            );
                            echo form_input($form_attribute);
                            ?>
					</div>
					<div class="clearfix"></div>


					<div class="clearfix"></div>

					<p class="d-flex justify-content-center col-md-5">

					</p>
				</fieldset>

		</div>
	</div>

	<div class="row ">
		<div class="col-md-12 d-flex justify-content-center login-header">
			<button type="submit" class="btn mt-5 btn-primary"
				style="padding-left: 200px; padding-right: 200px;font-size: 25px;"><span
					class="glyphicon glyphicon-log-in"></span> Login</button>
			</form>
		</div>
		<!--/span-->
	</div>

</div>

<?php                         
	$this->session->unset_userdata('failed');
	$this->session->unset_userdata('info');
?>