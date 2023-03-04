<!-- http://localhost/weekend-trip-php/sort.php?numbers=7,3,4,2,8,7,1,2,9,5,0,1,4 -->

<?php

$numbers=$_GET["numbers"];
$str_arr = array_map('intval', explode(',', $numbers));

function selection_sort($data)
{
for($i=0; $i<count($data)-1; $i++) {
	$min = $i;
	for($j=$i+1; $j<count($data); $j++) {
		if ($data[$j]<$data[$min]) {
			$min = $j;
		}
	}
    $data = swap_positions($data, $i, $min);
}
return $data;
}

function swap_positions($data1, $left, $right) {
	$backup_old_data_right_value = $data1[$right];
	$data1[$right] = $data1[$left];
	$data1[$left] = $backup_old_data_right_value;
	return $data1;
}

$sorted_array= selection_sort($str_arr);
echo json_encode($sorted_array)
?>