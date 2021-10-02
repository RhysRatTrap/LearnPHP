/*
Author: Rhys
Date: 2/10/21
Description: Learning PHP
*/

<html>

<head>
	<title>Hello :)</title>
</head>
<body>
	<?php
		echo "This is a String!";
		$myvar = "This is my variable";

		echo $myvar

		$Number = 5;
		$Number2 =3;

		$sum = $Number + $Number2;

		echo $sum


		$name = "Chris";

		echo "Hello," . $name;

		// + operater (Self explanatory) (2 operands)
		// -
		// /
		// *
		// = (assigment) (As seen in $Number2 =3;)
)

		// comparison $x == $y
		// 			  $x !== $y
		// and 
		// or

		$access = true;

		if ($access ==true){
			echo "access is provided";
		} else {
			echo "Please apply for access";
		}

		$person1 = "Jim";

		$people = array("Jim","Marcus","Paul"); //0 based as normal

		print_r($people)

		echo $people[2]; // Prints out Paul

		// Prints out each element in an array
		foreach($people as $person){
			echo $person. '';
		}

		$numbers = array(1,1,2,3,5,8,13,21,34)
		$fibosum=0;

		foreach($numbers as $number){
			$fibosum = $fibosum + $number;
		}

		echo $fibosum;






	?>

</body>













</html>