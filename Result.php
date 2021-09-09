<?php  

include("connections.php");

if (empty($_GET["search"])) {
	// code...
	echo "walang laman si GET...";
}else{

$check = $_GET["search"];

$terms = explode(" ", $check);
$q = "SELECT * FROM mytbl WHERE ";
$i = 0;



	foreach ($terms as $each) {
		// code...
		$i++;
		if($i==1){
			$q .= "name LIKE '%$each%' ";

		}else{
			$q .= "Or name LIKE '%$each%' "; 
		}
	}

	$query = mysqli_query($connections, $q);
	$c_q = mysqli_num_rows($query);

	if ($c_q > 0 && $check!="") {
		// code...
		while ($row = mysqli_fetch_assoc($query)) {
			// code...
			echo $name = $row["name"] . "<br";



		}

		}else{


			echo "No result.";
		}

	

}	

?>

<?php

echo "Test";



?>