<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Dinas Penanaman Modal dan Perizinan Terpadu Satu Pintu Kabupaten Sukabumi</title>
    <!-- Favicon-->
    <link rel="icon" href="../assets/img/kab_100s.png" type="image/x-icon">

    <!-- Bootstrap core CSS -->
    <link href="assets_login/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets_login/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets_login/css/style.css" rel="stylesheet">
    <link href="assets_login/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body onload="getTime()">

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  	<div class="container">
	  	
	  		<div id="showtime"></div>
	  			<div class="col-lg-4 col-lg-offset-4">
	  				<div class="lock-screen">
		  				<h2><a data-toggle="modal" href="#myModal"><i class="fa fa-lock"></i></a></h2>
		  				<p><a data-toggle="modal" href="#myModal"><strong>UNLOCK</strong></a></p>
              </br>
              <h2><a  href="../index.php"><i class="fa fa-globe"></i></a></h2>
              <p><a  href="../index.php"><strong>KEMBALI KE HALAMAN UTAMA</strong></a></p>
		  				
				          <!-- Modal -->
                          
				          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
				              <div class="modal-dialog">
				                  <div class="modal-content">
				                      <div class="modal-header">
				                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				                          <h4 class="modal-title">Silakan Masukan Username dan Password Anda</h4>
				                      </div>
				                      <div class="modal-body">
                                        <form action="login/login_proses.php" method="POST">
				                          <p class="centered"><img class="img-circle" width="80" src="assets_login/img/user2-160x160.png"></p>
                                          <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                            <input type="text" name="username" class="form-control" placeholder="Username" onfocus="this.value=''">
                                          </div>
                                          <p></p>
				                          <div class="input-group">
                                            <span class="input-group-addon "><i class="glyphicon glyphicon-lock"></i></span>
                                            <input type="password" name="password" class="form-control " placeholder="Password" onfocus="this.value=''">
                                          </div>
                                          <p></p>
                                          <button data-dismiss="modal" class="btn btn-theme04" type="button">Cancel</button>
                                          <button class="btn btn-theme03" type="submit" name="Submit">Login</button>
				                        </form>
				                      </div>
<!-- 				                      <div class="modal-footer centered">
				        <?php
                            $danger = (isset($_GET['pro']));
                                if ($danger == "sandisalah") {
                                    echo "<div class='col-md-12'><div class='alert alert-info '><small><span class='glyphicon glyphicon-remove-circle'> &nbspMAAF USERNAME SALAH!!!</span></small></div></div>";
                                }elseif($danger == "idusersalah") {
                                    echo "<div class='col-md-12'><div class='alert alert-info '><small><span class='glyphicon glyphicon-remove-circle'> &nbspMAAF USERNAME SALAH!!!</span></small></div></div>";
                                }elseif($danger == "idkatasandi") {
                                    echo "<div class='col-md-12'><div class='alert alert-info '><small><span class='glyphicon glyphicon-remove-circle'> &nbspMAAF PASSWORD SALAH</span></small></div></div>";
                                }else{
                                    echo "";
                                }
                        ?>
				                      </div> -->
                                    
                                      <div>

                                      </div>
				                  </div>
				              </div>
				          </div>
                          
				          <!-- modal -->
		  				
		  				
	  				</div><! --/lock-screen -->
	  			</div><!-- /col-lg-4 -->
	  	
	  	</div><!-- /container -->

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets_login/js/jquery.js"></script>
    <script src="assets_login/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets_login/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets_login/img/Konsultan-Digital-Marketing.png", {speed: 500});
    </script>

    <script>
        function getTime()
        {
            var today=new Date();
            var h=today.getHours();
            var m=today.getMinutes();
            var s=today.getSeconds();
            // add a zero in front of numbers<10
            m=checkTime(m);
            s=checkTime(s);
            document.getElementById('showtime').innerHTML=h+":"+m+":"+s;
            t=setTimeout(function(){getTime()},500);
        }

        function checkTime(i)
        {
            if (i<10)
            {
                i="0" + i;
            }
            return i;
        }
    </script>

  </body>
</html>
