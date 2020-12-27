<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>




<!--==============================Content=================================-->
		<div class="container">

 

			 <div class="row">
			 
			 
				<?php foreach($things as $row){ ?>
		        <div class="col-lg-3 col-md-6 col-sm-6">
		          <a data-fancybox="gallery"  href="<?=base_url()?>image/<?=$row['Picture']?>" >
		            <img src="<?=base_url()?>image/<?=$row['Picture']?>" alt="news image" width="400px" height="350px">
		          </a>
				  <br> <br>
				  <h3><?=$row['Famous_things_name']?></h3>	
				  <p><?=$row['Description']?></p>
		          <br>  <br>
		        </div>
		       
				
				
				
				<?php  } ?>
			</div>

		</div>
