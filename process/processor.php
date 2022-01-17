<?php
include 'conn.php';

$method = $_POST['method'];
if ($method == 'chart') {
	$query = "SELECT branch, SUM(sales) AS SALES FROM sales GROUP BY branch";
	$stmt = $conn->prepare($query);
	$stmt->execute();

	foreach($stmt->fetchALL() as $j){
		echo '<tr>';
			echo '<td class="branch">'.$j['branch'].'</td>';
			echo '<td class="sales">'.$j['SALES'].'</td>';
		echo '</tr>';
	}
}
?>