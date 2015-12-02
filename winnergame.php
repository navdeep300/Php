<html>
    <p>
	<?php
	// Create an array and push on the names
    // of your closest family and friends
    $names= array();
    array_push($names, "Sanjeet");
    array_push($names, "Jagga");
    array_push($names, "Mandy");
    array_push($names, "Mp");
    array_push($names, "Darsh");
	// Sort the list
    sort($names);
    print join( " , " , $names );
   //Randomly select a winner!
   
   $a= $names[rand(0, count($names)-1)];
  
   
	// Print the winner's name in ALL CAPS
   echo strtoupper("<br>".$a." is the winner");

	
	?>
    </p>
</html>