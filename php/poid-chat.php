<?php

$dates = array();
$dates_v = array();
$ar_poid = array();


$connect = mysqli_connect("localhost","root","","hada");

if ($connect) {
	
	$id_chat = 1;
	
	$recup_infos = "SELECT poid, date FROM poids WHERE id_chat = '$id_chat' ORDER BY date ";
	
	$query = mysqli_query($connect, $recup_infos);
	
	if ($query != FALSE) {
		
		
		for($i = 30; $i >=0; $i--) {
			
			$d_verif = date("Y-m-d", time() - 3600 * 24 * $i);
			$d = date('d-m', time() - 3600 * 24 * $i);
			
			array_push($dates, $d);
			array_push($dates_v, $d_verif);
			array_push($ar_poid, 'null');

		};
		
		while($line = mysqli_fetch_assoc($query)) {	
		/*echo $line['date'].' - ';*/
			for ($j = 0; $j < sizeof($dates); $j++) {
				if (date_create($dates_v[$j]) == date_create($line['date'])) {
					array_splice($ar_poid, $j, 0, $line['poid']);
				}	
			}
		}
		if ($ar_poid[0] == 'null') {
			array_splice($ar_poid, 0, 0, 0);
		}
	};

	$j_dates = json_encode($dates);
	$j_poids = json_encode($ar_poid);			
}



?>
