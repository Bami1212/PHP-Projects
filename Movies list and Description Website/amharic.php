<?php  
							$con = mysqli_connect("localhost","root","","geezmovie");
       						 $query = "SELECT COUNT(*) FROM series_movies";     
       						 $rs_result = mysqli_query($con, $query);     
      						  $row = mysqli_fetch_row($rs_result);     
       						 $total_records = $row[0];     
             
       						 // Number of pages required.   
       						 $total_pages = ceil($total_records / $per_page_record);     
       						 $pagLink = "";       
      
      						  if($page>=2){   
       							     echo "<a href='seriesgrid.php?page=".($page-1)."'>  Prev </a>";   
       									 }       
                   
       						 for ($i=1; $i<=$total_pages; $i++) {   
        						  if ($i == $page) {  
         								     $pagLink .= "<a class = 'active' href='seriesgrid.php?page="  
                                                .$i."'>".$i." </a>";   
         										 }               
        							  else  {  
         							     $pagLink .= "<a href='seriesgrid.php?page=".$i."'>   
                                                ".$i." </a>";     
       											   }   
       									 };     
       							 echo $pagLink;   
  
       						 if($page<$total_pages){   
          							  echo "<a href='seriesgrid.php?page=".($page+1)."'>  Next </a>";   
       									 }   
  
     								 ?>  