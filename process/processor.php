<?php
include 'conn.php';

$method = $_POST['method'];
if ($method == 'chart') {
	$query = "SELECT * FROM sales";
	$stmt = $conn->prepare($query);
	$stmt->execute();

	foreach($stmt->fetchALL() as $j){
		echo '<tr>';
			echo '<td class="branch">'.$j['branch'].'</td>';
			echo '<td class="sales">'.$j['sales'].'</td>';
		echo '</tr>';
	}
}
?>