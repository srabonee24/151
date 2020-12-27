
            <div id="layoutSidenav_content">
                <main>

                    <div id="container">

<h1><?=$title?></h1>

<div class="col-md-4">
<form action="" method="post"  enctype="multipart/form-data" >


	<?=$this->session->flashdata('message');?>
	


	
	<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Name" value="<?php if(set_value('name')){ echo set_value('name'); }else{ echo $user[0]['Name']; }?>" name="name"  >

	</div>

	<div class="error"><?=form_error('name')?></div>


	<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Email" value="<?php if(set_value('email')){ echo set_value('email'); }else{ echo $user[0]['Email']; }?>"  name="email"  >

	</div>

	<div class="error"><?=form_error('email')?></div>

	<div class="form-group">

		<input type="password" class="form-control" placeholder="Enter password" value="<?php if(set_value('password')){ echo set_value('password'); }else{ echo $user[0]['Password']; }?>"  name="password"   >

	</div>

		<div class="error"><?=form_error('password')?></div>


			<div class="form-group">

		<input type="password" class="form-control" placeholder="Enter Confirm password" value="<?php if(set_value('c_password')){ echo set_value('c_password'); }else{ echo $user[0]['Password']; }?>"  name="c_password"   >

	</div>

		<div class="error"><?=form_error('c_password')?></div>

			

		<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Address" value="<?php if(set_value('address')){ echo set_value('address'); }else{ echo $user[0]['Address']; }?>"  name="address"   >

	</div>

		<div class="error"><?=form_error('address')?></div>

		


	<div class="form-group">

		<input type="submit"  name="submit" class="btn btn-success" value="Edit data Now" > 
		<a href="<?=base_url()?>admin/view-user/"><button type="button" class="btn btn-success">Back To Table</button><a>
		<!-- <button type="submit">Add Data</button> -->
		<!-- <button type="button">Add Data</button> -->

	</div>

</form>

</div>
	
</div>

<style> .error{ color:red; } </style>


                
                </main>
              