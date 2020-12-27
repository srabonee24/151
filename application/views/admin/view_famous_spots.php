<div id="layoutSidenav_content">
	 <main>
	<div id="container">

	<h1><?=$title?></h1>

	 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

	<tr>
		<th>Famous Spots</th>
		<th>Description</th>
		<th>Place</th>
		<th>Picture</th>
		<th>Edit</th>
		<th>Delete</th>
		 
	</tr>



	 <?php 
	
    foreach ($view_famous_spots as $row) {
		 
	echo '<tr>';
	echo '<td>'.$row['Spots_name'].'</td>';
	echo '<td>'.$row['Description'].'</td>';
	echo '<td>'.$row['Place_name'].'</td>';
    echo '<td> <img width="100px" height="100px" src="'.base_url().'image/'.$row['Picture'].'" alt=""></td>';
	

	echo '<td><a href="'.base_url().'admin/edit-famous-spots/'.$row['s_id'].'"><button class="btn btn-success">Edit</button><a></td>';
	echo '<td><a href="'.base_url().'admin/delete-famous-spots/'.$row['s_id'].'"><button class="btn btn-danger">Delete</button><a></td>';
	 
	echo '</tr>';
	 

	}

	 


	?>
			</table>	
		</div>
	 </main>
</div>
	              