           <?php


$json = file_get_contents('http://158.85.122.170:81/mongo_api/slider.php?limit=10');
$data = json_decode($json,true);
$Geonames = $data['trailers'];
$arrlength = count($Geonames);


//print_r($Geonames);

?>
                                        
<div class="col-lg-3 ds">
                    <!--COMPLETED ACTIONS DONUTS CHART-->
            <h3>TRENDING MOVIES</h3>
                
                     
<?php 
for ($x = 0; $x <=9; $x++) {?>
    
           <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<b><?php echo $Geonames[$x]['movie']; ?></b> <br/>
                      		 <p> Release date : <?php echo $Geonames[$x]['release_date']; ?>
                      		</p>
                      	</div>
                      </div>
                     
                     
                      

         
                      
                  <!-- /col-lg-3 -->
<?php }
?>
</div>   