 <div id="layoutSidenav_content">
     <main>
<div id="container">

<h1><?=$title?></h1>

 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

<tr>
    
	<th>Name</th>
	<th>Email</th>
	 
	<th>Address</th>
	<th>Edit</th>
	<th>Delete</th>
	 
</tr>



<?php   

foreach ($user as $row) {
	 
echo '<tr>';
echo '<td>'.$row['Name'].'</td>';
echo '<td>'.$row['Email'].'</td>';
 
echo '<td>'.$row['Address'].'</td>';


echo '<td><a href="'.base_url().'admin/edit_user/'.$row['id'].'"><button class="btn btn-success">Edit</button><a></td>';
echo '<td><a href="'.base_url().'admin/delete_user/'.$row['id'].'"><button class="btn btn-danger">Delete</button><a></td>';
 
echo '</tr>';
 

}

 


?>

</table>

	
</div>
                    


                
      </main>
              