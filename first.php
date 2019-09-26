<?php 
	
	$value = "tanvir";
	echo ucfirst($value);
 
	$arr = array('Hello','World!','Beautiful','Day!');
	echo implode(" ",$arr);
	echo "</br>";

	$data=['tanvir','gmail.com'];
	echo implode("@",$data);
		
	echo "</br>";

	$str = "tanvir@gmail.com";
	print_r (explode("@",$str));
	
	echo "</br>";
	$str = "       my World!";
	echo ($str);
	// go to source
	echo "</br>";
	$str = "       my World!";
	echo trim($str);

	echo "</br>";
	$str = "Tanivr rahman";
	echo md5($str);
	echo "</br>";
	$arr = array('Hello','World!','Beautiful','Day!');
	echo implode(",",$arr);
	echo "</br>";
	 
	echo metaphone("World");

	echo "</br>";
	$number = 1234.56;
	setlocale(LC_MONETARY,"en_US");
	echo money_format("The price is %i", $number);
	echo "</br>";
	echo nl2br("One line.\nAnother line\nthirdline.");
	echo "</br>";
	parse_str("name=Peter&age=43");
	echo $name."<br>";
	echo $age;
	echo "</br>";
	parse_str("name=Tavnir&roll=20");
	echo $name."</br>";
	echo $roll;
	echo "</br>";
	$string = "my name is tanvir";
	echo "</br>";
	$data = quoted_printable_encode($string);
	echo $data;
	echo "</br>";
	$str = "This is some &lt;b&gt;bold&lt;/b&gt; text.";
	echo htmlspecialchars_decode($str); 
	echo "</br>";
	$str = "my name is tanvir";
	echo sha1($str);
	
	$str = "Hello Friend";

	
	$arr2 = str_split($str, 5);

	//print_r($arr1);
	print_r($arr2);

	// parse the whole string fior the math array and string
	// hw math string function homework


	// custom function


	$string='tanvir@gmail.com';
	$output = preg_split("/ (@|vs) /", $string);
	echo $output;

	function myFunc (int $num1,int $num2 ): array {

		//it will take the num1 num2 and return arrat
	}

	function myfunc2(string $string1,string $string2): array{

		$array1 = explode($string1,$string2);
		return $array1;
	}

	//$ans = myfunc2('@',"tanvir@gmail.com");
	//print_r($ans);

	function parse_everything_from_email(string $del1,string $del2,string $string1): array{

		$first = explode($del1,$string1);
		## select the second one
		$second = $first[1];
		$third = explode($del2,$second);
		$ar = [$first[0],$third[0],$third[1]];
		return $ar;
}

$ans=parse_everything_from_email('@','.','tanvir@gmail.com'); 
print_r($ans);
	 
?> 