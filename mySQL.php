<?php
// database functions ************************************************
function fInsertToDatabase($myDB, $asin, $title, $price) {
  $sql = "INSERT INTO dvdtitles (asin, title, price) VALUES ('$asin', '$title', $price)";
  $stmt= $myDB->query($sql);
  
  
  
}
function fDeleteFromDatabase($myDB, $asin) {
  $sql = "DELETE FROM dvdtitles WHERE asin = '$asin'";

  $stmt = $myDB->query($sql);
 
  // TODO: Fill in the rest of the function
}
function fListFromDatabase($myDB) {
	echo "ok ". PHP_EOL;
    $sql = 'SELECT * from dvdtitles;';
    $stmt = $myDB->query($sql);
  
  
    while($row =$stmt->fetch()) {
		//$title= $row['title']; 
		print_r ($row['title']);
		$imloc='http://images.amazon.com/images/P/' . $row['asin'] . '.01.MZZZZZZZ.jpg';
		//echo $imloc;
		$imageData = base64_encode(file_get_contents($imloc));
		echo '<img src="data:image/jpeg;base64,'.$imageData.'">';
		
	}
}

function listActors($myDB){
	$sql='SELECT * from dvdactors';
	$stmt = $myDB->query($sql);
	 while($row =$stmt->fetch()) {
		
		print_r ($row['fname'] . " " . $row['lname'] . PHP_EOL);
		
		
	 }
	
}
function AddActor($myDB, $fname, $lname){
	 $sql = "INSERT INTO dvdactors (fname, lname) VALUES ('$fname', '$lname')";
	 $stmt= $myDB->query($sql);
  
	
}
function removeActor($myDB, $id){
	$sql = "DELETE FROM dvdactors WHERE id = '$id'";

	$stmt = $myDB->query($sql);
	
}
