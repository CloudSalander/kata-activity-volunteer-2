<?php
/*TO-DO
-Input validation(With Exceptions)
*/
include('files/students.php');
include('files/activities.php');


function showOptions(array $activities): void {
	foreach($activities as $key=>$activity) {
		echo ($key+1)." - ".$activity.PHP_EOL;
	}
}

function checkOptionInput(int $activities_count,string $option): bool {
	return is_int($option) && $option > 0 && $ 
}

function getRandomStudent(array $students): int {
	return rand(0,count($students)-1);
}

showOptions($activities);
$activity_index = readline("Hei! Quina activitat vols assignar?(Introdueix la opció numèrica)");

if(checkOptionInput(count($activities),$activity_index) {
	$student_index = getRandomStudent($students);
	echo "Li toca a ".$students[$student_index]." fer ".$activities[($activity_index)-1]." felicitats!!"; 
}

?>
