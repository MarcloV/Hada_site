<?php

$dates = array();
$dates_v = array();
$ar_poid = array();

$connect = mysqli_connect("localhost","root","","hada");

$colors=array();
$colors[] = array("backgroundColor" => array("rgba(255, 99, 132, 0.2)"),"borderColor" => array("rgba(255,99,132,1)"));
$colors[] = array("backgroundColor" => array("rgba(63, 191, 63, 0.2)"),"borderColor" => array("rgba(63, 191, 63 ,1)"));
$colors[] = array("backgroundColor" => array("rgba(58, 242, 211, 0.2)"),"borderColor" => array("rgba(58, 242, 211,1)"));

if ($connect) {
	
	$id = $_SESSION['id'];
	$chats=array();

	for($i = 30; $i >=0; $i--) {
				
		$d_verif = date("Y-m-d", time() - 3600 * 24 * $i);
		$d = date('d-m', time() - 3600 * 24 * $i);
		
		array_push($dates, $d);
		array_push($dates_v, $d_verif);

	};

	$recup_chats = "SELECT id, nom FROM chats WHERE id_utilisateur = '$id'";

	$query_chats = mysqli_query($connect, $recup_chats);

	$indexColor = 0;
	while($c = mysqli_fetch_assoc($query_chats)) {
		$id_chat = $c['id'];
		$recup_infos = "SELECT poid, date FROM poids WHERE id_chat = '$id_chat' ORDER BY date ";
	
		$query = mysqli_query($connect, $recup_infos);
		$ar_poid = array();
		if ($query != FALSE) {			
			
			for($i = 30; $i >=0; $i--) {
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

		$chat = array();
		$chat['label'] = $c['nom'];
		$chat['data'] = $ar_poid;
		$chat['backgroundColor'] = $colors[$indexColor]['backgroundColor'];
		$chat['borderColor'] = $colors[$indexColor]['borderColor'];
		$chat['borderWidth'] = 1;

		$chats[] = $chat;
		$indexColor++;

		if($indexColor > 3)
			$indexColor = 0;
	}

	$j_chats = json_encode($chats);
}



?>
