<?php 
    include 'db.php';
    $conn = dbConnect();
    $q2 = "SELECT * from registration WHERE attend = 1 OR attend = 2";
    $r2 = $conn->query($q2);

    if ($r2->num_rows < 250){
    	$page = file_get_contents('./index_reg.html', true);
    	echo $page;
    }
    else{
    	$page = file_get_contents('./index_full.html', true);
    	echo $page;
    }
    
?>