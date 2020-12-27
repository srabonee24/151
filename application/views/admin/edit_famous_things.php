
            <div id="layoutSidenav_content">
                <main>

                    <div id="container">

   <h1><?=$title?></h1>

   <div class="col-md-4">

   <form action="" method="post"  enctype="multipart/form-data" >


	<?=$this->session->flashdata('message');?>
	
	
	
	<div class="form-group">

		<input type="text" class="form-control" Placeholder="Enter Your Famous Things" value="<?php if(set_value('Famous_things_name')){ echo set_value('Famous_things_name'); }else{ echo $tbl_famous_things[0]['Famous_things_name']; }?>" name="Famous_things_name"  >

	</div>

	<div class="form-group">

		<input type="text" class="form-control" Placeholder="Enter Your Description" value="<?php if(set_value('Description')){ echo set_value('Description'); }else{ echo $tbl_famous_things[0]['Description']; }?>" name="Description"  >

	</div>

	
		<div class="form-group">

		<input type="file"  name="Picture" >

	</div>

	<div class="form-group">

		<!-- <input type="text" class="form-control" Placeholder="Enter Your Place Id" value="<?php if(set_value('Place_id')){ echo set_value('Place_id'); }else{ echo $tbl_famous_things[0]['Place_id']; }?>" name="Place_id"  > -->

			<select name="Place_id" class="form-control">
			
			<option value="">---Select Place---</option>
			<?php foreach ($places as $place) {  ?>
			<option <?php if(set_value('Place_id')==$place['p_id']){ echo 'selected'; }else if($tbl_famous_things[0]['Place_id']==$place['p_id']){ echo 'selected'; }?> value="<?=$place['p_id']?>"><?=$place['Place_name']?></option>
			<?php } ?>
		</select>

	</div>

	<div class="error"><?=form_error('Place_id')?></div>





	<div class="form-group">

		<input type="submit"  Place_name="submit" class="btn btn-success" value="Edit data Now" > 
		<a href="<?=base_url()?>admin/view-famous-things/"><button type="button" class="btn btn-success">Back To Table</button><a>
		

	</div>

</form>

</div>
	
</div>

<style> .error{ color:red; } </style>


                
                </main>
              