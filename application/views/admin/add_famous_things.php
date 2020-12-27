  <div id="layoutSidenav_content">
                <main>
                	<div id="container">

<h1><?=$title?></h1>

<div class="col-md-4">
<form action="" method="post" enctype="multipart/form-data" >


	<?=$this->session->flashdata('message');?>
	
	<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Famous Things Name" value="<?=set_value('Famous_things_name')?>" name="Famous_things_name">

	</div>

	<div class="error"><?=form_error('Famous_things_name')?></div>

		<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Description" value="<?=set_value('Description')?>" name="Description">

	</div>

	<div class="error"><?=form_error('Description')?></div>

      <div class="form-group">

		<input type="file"  name="Picture"   >

	</div>
	
	  <div class="form-group">

		<!-- <input type="int" class="form-control" placeholder="Enter Your Place Id" value="<?=set_value('Place_id')?>" name="Place_id"> -->

		<select name="Place_id" class="form-control">
			
			<option value="">---Select Place---</option>
			<?php foreach ($places as $place) {  ?>
			<option value="<?=$place['p_id']?>"><?=$place['Place_name']?></option>
			<?php } ?>
		</select>

	</div>

	<div class="error"><?=form_error('Place_id')?></div>
	

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
              