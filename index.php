<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>314chan Status</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#"><strong>status</strong>.314chan</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class=""><a href="http://www.314chan.org">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
    <div class="thebar">
    <h1>As of <?php echo date("h:i:s A"); ?></h1>
    </div>
    <table class="table table-striped table-bordered table-condensed span12">
    	<thead>
    		<tr>
    			<th style="width: 7%">Signal</th>
    			<th>Service</th>
    		</tr>
    	</thead>
    	<tbody>
<?php
#the http function
function check($url){
$http = curl_init($url);
$result = curl_exec($http);
$http_status = curl_getinfo($http, CURLINFO_HTTP_CODE);
curl_close($http);
return $http_status;
}

#check number one
if(check("http://www.314chan.org/lestatus.php") == '314'){
	if(phpversion() > '5.2.15'){
	echo '<td><img src="green.php" /></td>'."<td><h4>www</h4></td>";
	}else{
	echo '<tr><td><img src="img/green.png" /></td>'."<td><h4>www</h4></td></tr>";
	}
}else{
	if(phpversion() > '5.2.15'){
	echo '<tr><td><img src="red.php" /></td>'."<td>Main</td></tr>";
	}else{
		echo '<tr><td>*reddot*</td>'."<td><h4>www</h4></td></tr>";
	}
}
#MySQL server is a work in progress.
/*
$connection = ssh2_connect('host.com', 22);
ssh2_auth_password($connection, 'user', 'password');
$tunnel = ssh2_tunnel($connection, 'DESTINATION IP', 3307);
$db = mysqli_connect('127.0.0.1', 'DB_USERNAME', 'DB_PASSWORD', 
                         'dbname', 3307, $tunnel)
    or die ('Fail: '.mysql_error());
    */
    echo '<td>*greendot*</td>'."<td><h4>MySQL<em>i</em> <em>(work in progress)</em></h4></td>";

?>
<?php
echo phpversion();
?>
</div>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
	<script type="text/javascript">
  		setTimeout(function () { location.reload(true); }, 1000);
	</script>
  </body>
</html>
