<div class="container">
	<div class="row h-75 align-items-center">
		<div class="col-md-7">
			<h2 class="title-register">SIstem Perusahaan Weecom</h2>
			<h3 class="title-register">Pengelolaan Karyawan & Digital</h3>
			<div class="akses-button">
				<?php 
				$dataAnchor = ['class'=>'btn btn-outline-primary mr-5 active'];
				echo anchor('login','LOGIN', $dataAnchor);//controller user dengan method array 

				$dataAnchor = ['class'=>'btn btn-outline-primary mr-5'];
				echo anchor('register','REGISTER',$dataAnchor);
				?>
			</div>
		</div>
		<div class="col-md-5">
			<div class="card frame-form-weecom">
				<div class="card-header">Login</div>
				<div class="card-body">
					<?php if($this->session->flashdata('pesan')): ?>
					<div class="alert <?php echo $this->session->flashdata('alert');?>"><?php echo $this->session->flashdata('pesan');?></div>
					<?php endif; ?>
					<?php 
					echo form_open(base_url('login/proses'),['class'=>'form-weecom']);
					 ?>
					

					<div class="form-group row">
						<label for="email" class="col-md-3">Email</label>
						<div class="col-9">
							<?php 
							$data = ['name'=>'email',
									 'id'=>'email',
									 'class'=>'form-control',
									 'value'=> set_value('email'),
									 'placeholder'=>'Email'];
							echo form_input($data);
							echo form_error('email'); ?>
						</div>
					</div>

					

					<div class="form-group row">
						<label for="password" class="col-md-3">Password</label>
						<div class="col-9">
							<?php 
							$data = ['name'=>'password',
									 'id'=>'password',
									 'class'=>'form-control',
									 'placeholder'=>'Password'];
							echo form_password($data); 
							echo form_error('password');?>
						</div>
					</div>

					
					<?php 
					echo form_submit(['name'=>'submit',
									  'class'=>'btn btn-dark btn-block'],
									  'Login');
					echo form_close();?>
				</div>
			</div>
		</div>
	</div>
</div>