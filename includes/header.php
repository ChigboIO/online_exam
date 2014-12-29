<?php
$parts= explode("/",$_SERVER['SCRIPT_FILENAME']);
$location = $parts[count($parts)-2];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Online Examination | <?php echo $location ?></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/styles.css" rel="stylesheet" type="text/css" media="screen" />
<link href="../css/styles.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<!-- header begins -->
<div id="header_outer"> 
    <div id="header_inner">
        <div id="logo">
            <h1><a href="#">Online Examination</a></h1>
            <h2><a href="#" id="metamorph">...instant score</a></h2>
        </div>
        <div id="menu">
            <ul>
                <li id="button2"><span title="" <?php if($location == 'login') echo 'class="active"' ?>>Login</span></li>
                <li id="button1"><span title=""<?php if($location == 'select_course') echo 'class="active"' ?>>Select Course</span></li>
                <li id="button3"><span title="" <?php if($location == 'examination') echo 'class="active"' ?>>Examination</span></li>
                <li id="button4"><span title="" <?php if($location == 'exam_score') echo 'class="active"' ?>>Exam Score</span></li>
                
            </ul>
        </div>
    </div>
</div>
<!-- header ends -->