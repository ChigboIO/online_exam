<?php require_once("../includes/header.php"); ?>
<!-- content begins -->
<div id="content">
<div id="main">

<h2>Login With you Reg number and password...</h2><br />

<p>
<form method="post" action="../select_course/">
<table width="70%" cellspacing="10" cellpadding="10" border="0" >
<tr><td width="20%">Regno.</td><td><input type="text" name="regno" placeholder="enter your reg number" size="35" /></td></tr>
<tr><td>Password</td><td><input type="password" name="password" placeholder="enter your password" size="35" /></td></tr>
<tr><td>&nbsp;</td><td><input type="submit" value="Login" class="my_btn" /></td></tr>
</table>
</form>
</p>

</div>
</div>
<?php require_once("../includes/footer.php"); ?>
