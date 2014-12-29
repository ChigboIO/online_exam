<?php session_start(); require_once("../includes/header.php"); ?>
<!-- content begins -->
<div id="content">
<div id="main">

<h1>Result...</h1><br />
<h2>Congratulations!!!</h2>
<h3>
You have attempted all the questions, and your score is:
</h3>
<?php
$ans = $_GET['ans'];
$ans = explode(",", $ans);

//$db = mysqli_connect("localhost", "root", "", "online_exam");
//$query = mysqli_query($db, "SELECT * FROM question_answers");

$questions = $_SESSION['questions'];
$options_a = $_SESSION['options']['_a'];
$options_b = $_SESSION['options']['_b'];
$options_c = $_SESSION['options']['_c'];
$options_d = $_SESSION['options']['_d'];
$corrects = $_SESSION['corrects'];

$score = 0;
$script = "";
for($i = 0; $i < count($questions); $i++)
{
	$script .= "<h2>". ($i+1) .") ". $questions[$i] ."</h2>";
	$script .= "<ol class='options'>";
		
		$script .= "<li class='"; 
			if($ans[$i] == 'option_a'){
				$script .= "ans ";
				if($corrects[$i] == 'option_a') 
				$script .= "good "; 
				else 
				$script .= "bad "; 
			}
			if($corrects[$i] == 'option_a') 
			$script .= "correct "; 
		$script .= "'>". $options_a[$i] ."</li>";
		
		$script .= "<li class='"; 
			if($ans[$i] == 'option_b'){
				$script .= "ans ";
				if($corrects[$i] == 'option_b') 
				$script .= "good "; 
				else 
				$script .= "bad "; 
			}
			if($corrects[$i] == 'option_b') 
			$script .= "correct "; 
		$script .= "'>". $options_b[$i] ."</li>";
		
		$script .= "<li class='"; 
			if($ans[$i] == 'option_c'){
				$script .= "ans ";
				if($corrects[$i] == 'option_c') 
				$script .= "good "; 
				else 
				$script .= "bad "; 
			}
			if($corrects[$i] == 'option_c') 
			$script .= "correct "; 
		$script .= "'>". $options_c[$i] ."</li>";
		
		$script .= "<li class='"; 
			if($ans[$i] == 'option_d'){
				$script .= "ans ";
				if($corrects[$i] == 'option_d') 
				$script .= "good "; 
				else 
				$script .= "bad "; 
			}
			if($corrects[$i] == 'option_d') 
			$script .= "correct "; 
		$script .= "'>". $options_d[$i] ."</li>";
		
	$script .= "</ol>";
	
	if($ans[$i] == $corrects[$i])
		$score++;
}
echo "<h1 style='background-color:#FFFF00'>Your Score = ". $score ."/". count($questions) ." </h1>";

echo "<h3>Your marked script is presented below:</h3>";
echo $script;
?>

<br />
<a href="../"><input type="button" value="Logout" class="my_btn" /></a>
</center>
</div>
</div>
<?php require_once("../includes/footer.php"); ?>
