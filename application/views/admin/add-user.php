 <div id="layoutSidenav_content">
                <main>
                	<div id="container">

<h1><?=$title?></h1>

<div class="col-md-4">
<form action="" method="post" enctype="multipart/form-data" >


	<?=$this->session->flashdata('message');?>
	
	
	
	<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Name" value="<?=set_value('name')?>" name="name"  >

	</div>

	<div class="error"><?=form_error('name')?></div>


	<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Email" value="<?=set_value('email')?>"  name="email"  >

	</div>

	<div class="error"><?=form_error('email')?></div>
 

	<div class="form-group">

		<input type="password" class="form-control" placeholder="Enter password" value="<?=set_value('password')?>"  name="password"   >

	</div>

		<div class="error"><?=form_error('password')?></div>


	<div class="error"><?=form_error('password')?></div>


			<div class="form-group">

		<input type="password" class="form-control" placeholder="Enter Confirm password" value="<?=set_value('c_password')?>"  name="c_password"   >

	</div>

		<div class="error"><?=form_error('c_password')?></div>



	<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your address" value="<?=set_value('address')?>"  name="address" >

	</div>

	<div class="error"><?=form_error('address')?></div>

      <div class="form-group">

		<input type="submit"  name="submit" class="btn btn-success" value="Add data Now" > 
		<!-- <button type="submit">Add Data</button> -->
		<!-- <button type="button">Add Data</button> -->

	</div>

</form>

</div>
	
</div>

<style> .error{ color:red; } </style>

                    


                
                </main>
              