<style>
table, th, td {
	border: 1px solid black;
}
div {
	background-color:lightblue;
	margin:20px;
	padding:30px;

}
</style>
</head>
<div>
<?php
// 		$mas = [
// 			1=> [
// 				'vardas' => 'Jonas', 
// 				'pavarde' => 'Jonaitis', 
// 				'amzius' => '35', 
// 				'miestas' => 'Plunge',
// 				'kontaktai'=> [
// 					'telefonas'=> '867411115',
// 					'adresas'=> 'Grybo 1-105',
// 					'mailas'=> 'anaba@gmail.com'
// 				]
// 			],
// 			2=> [
// 				'vardas' => 'Petras',
// 				'pavarde' => 'Petraitis', 
// 				'amzius' => '40',
// 				'miestas' =>  'Kedainiai',
// 				'kontaktai'=> [
// 					'telefonas'=> '867456799',
// 					'adresas'=> 'Druskio 9-2',
// 					'mailas'=> 'xoxoa@gmail.com'
// 				]
// 			],
// 			3=> [
// 				'vardas' => 'Onyte', 
// 				'pavarde' => 'Onaityte', 
// 				'amzius' => '28', 
// 				'miestas' => 'Palanga',
// 				'kontaktai'=> [
// 					'telefonas'=> '867452245',
// 					'adresas'=> 'Sauletekio 15',
// 					'mailas'=> 'blabla@gmail.com'
// 				]
// 			],
// 			4=> [
// 				'vardas' => 'Alibaba', 
// 				'pavarde' => 'Binladen', 
// 				'amzius' => '31', 
// 				'miestas' => 'Adisabeba',
// 				'kontaktai'=> ''
				
// 			]
// 		];
// 		//var_dump($mas);
	
// 		foreach ($mas as $key => $value){
// 			echo '<br>';
// 			if(is_array($value)){

// 					foreach ($value as $key2=> $value2){
// 						echo '<br>'.$key2.':  ';
// 						if(is_array($value2)){
// 							foreach ($value2 as $key3=> $value3){
// 							echo '<br>'."&nbsp;&nbsp;&nbsp;&nbsp;".$key3.":\t\n".$value3;
// 							}
// 						}
// 						else {
// 							echo $value2;
						
// 						}
// 					}
// 				}
// 			else {echo $value;}  
// 		}
?> 

</div>
<br>
<div>
<?php
$json = file_get_contents('example_3.json');

//var_dump(json_decode($json, true));
$masJson=(json_decode($json, true));

foreach ($masJson as $key => $value){
	echo '<br>';
	if(is_array($value)){
		foreach ($value as $key2=> $value2){
			echo '<br>'.'<br>'.$key2.':  ';
			if(is_array($value2)){
				foreach ($value2 as $key3=> $value3){
				echo '<br>';
					if(is_array($value3)){
						foreach ($value3 as $key4=> $value4){
						echo '<br>'."&nbsp;&nbsp;&nbsp;&nbsp;".$key4.':  ';
							if(is_array($value4)){
								foreach ($value4 as $key5=> $value5){
								echo '<br>'."&nbsp;&nbsp;&nbsp;&nbsp;".$key4.':  '.$value5;
								}
							}
							else {
								echo $value4;
							
							}
						}
					}
					else {
						echo $value3;
					
					}
				}
			}
			else {
				echo $value2;
			
			}
		}
	}
	else {
		echo $value;
	}  
}

?>

</div>