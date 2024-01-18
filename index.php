<?php
/*TO-DO
- Data validation of json file
- Put file by terminal program invocation
- With excel files too?
*/
include('files/activities.php');


function LoadStudents() : array {
	$str = file_get_contents('./files/students.json');
	$array = json_decode($str, true);
	return $array;
}

function showOptions(array $activities): void {
	foreach($activities as $key=>$activity) {
		echo ($key+1)." - ".$activity.PHP_EOL;
	}
}

function checkOptionInput(int $activities_count,string $option): bool {
	return is_numeric($option) && $option > 0 && $option <= $activities_count;
}

var_dump(LoadStudents());

showOptions($activities);
$activity_index = readline("Hei! Quina activitat vols assignar?(Introdueix la opció numèrica)");

if(checkOptionInput(count($activities),$activity_index)) {
	$student_index = array_rand($students);
	echo "Li toca a ".$students[$student_index]." fer ".$activities[($activity_index)-1]." felicitats!!"; 
}

?>
