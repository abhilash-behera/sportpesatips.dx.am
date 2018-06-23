<?php

if (isset($_SESSION['pesatips'])) {
    $myuservar = '

	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
		(<b>' . $_SESSION['pesatips'] . '</b>) <span class="glyphicon glyphicon-user"></span><span class="caret"></span> </a>

		<ul class="dropdown-menu" role="menu">
			<li ><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> SETTINGS </a></li>
			<li class="divider"></li>
			<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> LOGOUT</a></li>

		</ul>
	</li>


	';

} else { $myuservar = "<a href='login.php' class='btn btn-default'><span class='glyphicon glyphicon-log-in'></span>  LOGIN</a>";}

//login detail authentication

?>

<div class="row">
<div class="hidden-sm hidden-xs col-sm-2"><center><img class="img img-responsive " src="img/mainlogo.png" ></center></div>
<div class="hidden-sm hidden-xs col-sm-8"><center><img class="img img-responsive" src="img/namelogo.png" ></center></div>
<div class="hidden-sm hidden-xs col-sm-2"><center><img class="img img-responsive " src="img/mainlogo.png" ></center></div>

<div class="visible-sm visible-xs col-sm-12"><center><img class="img img-responsive " src="img/namelogo.png" ></center></div>
</div>

<!-- navigation menu-->
<div class="row">
<div class="col-sm-12">
<nav class="navbar navbar-default">

<div class="container-fluid">

<div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
    </button>
	<div class="visible-sm visible-xs col-sm-2"><a href="index.php" class="current" ><span class="glyphicon glyphicon-home"></span> HOME</a></div>

</div>


<div class="collapse navbar-collapse" id ="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav" >
		<li><a id="previous" href="previous.php" >Previous GAMES</a></li>
		<li><a id="previous-vip" href="previous_vip.php">Previous VIP</a></li>
		<li><a id="previous-sure" href="previous_sure.php">Previous Sure Tips</a></li>
		<li><a id="todays" href="todays.php" >Today's GAMES</a></li>
		<li><a id="todays-vip" href="todays_vip.php">Today's VIP</a></li>
		<li><a id="tomorrows" href="tomorrows.php">Tomorrow's Games</a></li>
		<li><a id="tomorrows-vip" href="tomorrows_vip.php">Tomorrow's VIP</a></li>
		<li><a id="sure-tips" href="sure_tips.php">Sure Tips</a></li>
		<li><a id="myads" href="myads.php" >MY BANNERS</a></li>
    </ul>
	<ul class="nav navbar-nav navbar-right">
		<li ><?php echo $myuservar; ?> </li>
	</ul>

</div>


</div>

</nav>
</div>
</div>


