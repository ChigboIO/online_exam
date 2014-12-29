<?php
session_start();
$db = mysqli_connect("localhost", "root", "", "online_exam");
$query = mysqli_query($db, "SELECT * FROM question_answers ORDER BY RAND()");

$questions = array();
$options_a = array();
$options_b = array();
$options_c = array();
$options_d = array();
$corrects = array();

while($exam = mysqli_fetch_array($query))
{
	$questions[] = $exam['question'];
	$options_a[] = $exam['option_a'];
	$options_b[] = $exam['option_b'];
	$options_c[] = $exam['option_c'];
	$options_d[] = $exam['option_d'];
	$corrects[] = $exam['correct'];
}

$_SESSION['questions'] = $questions;
$_SESSION['options']['_a'] = $options_a;
$_SESSION['options']['_b'] = $options_b;
$_SESSION['options']['_c'] = $options_c;
$_SESSION['options']['_d'] = $options_d;
$_SESSION['corrects'] = $corrects;

echo json_encode(array("questions"=>$questions, "options_a"=>$options_a, "options_b"=>$options_b, "options_c"=>$options_c, "options_d"=>$options_d, "corrects"=>$corrects));
?>