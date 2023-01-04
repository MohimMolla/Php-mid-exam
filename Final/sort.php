<?php 
$countre=["Bangladesh" => "Dhaka",
"India" => "Delhi",
"Pakistan"=>"Islamabad",
"Afganistan"=>"Kabul"
];
ksort($countre);
foreach ($countre as $key => $value) {
	 echo $key." = ". $value."<br>";
}
