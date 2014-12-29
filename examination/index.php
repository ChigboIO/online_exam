<?php require_once("../includes/header.php"); ?>
<!-- content begins -->
<div id="content">
<div id="main">

<h2>Examination...</h2><br />
<div id="load_exam_div">
    <h3 id="load_start_text">Wait while the system loads the examination questions...</h3>
    <!--<h3>Your exam will start as soon as you click the "Start" button</h3>-->
    
    <div style="height:50px;" id="exam_instructions"></div>
    
    <center>
    <div id="start_div" style="color:#999">
    <img src="../images/loading2.gif" height="100" /><br />
    Loading Questions...
    <!--<input type="button" value="Start" id="start_btn" class="my_btn" /> -->
    </div>
    </center>
</div>

<div id="exam_div" style="display:none">
<div style="float:left; background-color:#FC0;"><span style="font-family:LCD, DigifaceWide; font-size:30px;" id="marks">0</span> marks</div>
<div style="float:right; color:#060"><span id="timer_span" style="font-family:LCD, DigifaceWide; font-size:40px">10</span> secs left</div>
<div style="clear:both"></div>
<h3>Q <span id="number">1</span> of 6 ::</h3>
<h2 id="question"></h2>
<ol class="options">
	<li id="option_a"><input type="radio" name="answer" id="radio_a" value="option_a" /> <label for="radio_a" id="label_a"></label></li>
    <li id="option_b"><input type="radio" name="answer" id="radio_b" value="option_b" /> <label for="radio_b" id="label_b"></label></li>
    <li id="option_c"><input type="radio" name="answer" id="radio_c" value="option_c" /> <label for="radio_c" id="label_c"></label></li>
    <li id="option_d"><input type="radio" name="answer" id="radio_d" value="option_d" /> <label for="radio_d" id="label_d"></label></li>
</ol>

<div style="padding-left:400px;"><input type="button" value="Next >>>" id="next_btn" class="my_btn" /></div>
</div>

<script type="text/javascript" language="javascript" src="../js/jquery-2.0.3.min.js"></script>
<script type="text/javascript" language="javascript" src="../js/function.js"></script>
</div>
</div>
<?php require_once("../includes/footer.php"); ?>
