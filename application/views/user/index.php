<div class="box">
	<div class="box-inner">
		<div class="box-header well">
			<h2>Selamat Datang PEMIRA 2023</h2>
		</div>

		<div class="box-content">
			<p>Silahkan Pilih Bakal Calon BEM dibawah ini </p>
			<hr />
			<div class="row">
				<?php
					foreach($datacalon as $loaddata) {
				?>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
					<div class="box">
						<div class="box-inner">
							<div class="box-header well">
								<h2 class="text-center"> NO <?php echo $loaddata['no']; ?> || <?php echo $loaddata['nama']; ?> </h2>
							</div>
							<div class="box-content">
								<div class="image-container">
									<img class="img-fluid" src="<?php echo base_url(); ?>asset/img/<?php echo $loaddata['photo']; ?>"
										width="100%" />
								</div>
								<?php
										$form_attribute	= array(
											'methode'	=> 'post',
											'class'		=> 'form-horizontal'
										);
										echo form_open('user/vote', $form_attribute);
									?>
								<?php 
										$form_attribute	= array(
											'type'		=> 'hidden',
											'name'		=> 'nisn',
											'class'		=> 'form-control',
											'value'		=> $loaddata['nisn']
										);
										echo form_input($form_attribute);
									?>
								<?php 
										$form_attribute	= array(
											'type'		=> 'hidden',
											'name'		=> 'username',
											'class'		=> 'form-control',
											'value'		=> $username
										);
										echo form_input($form_attribute);
									?>
								<button class="btn btn-danger btn-block">Pilih NO <?php echo $loaddata['no']; ?></button>
								<?php 
										echo form_close();
									?>
							</div>
						</div>
					</div>
				</div>
				<?php 
					} 
				?>
			</div>
		</div>
	</div>
</div>
</div>