<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./favicon.ico">

    <title>GeekRSS---Geek's time is comming.</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/cover.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src=".js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="./js/html5shiv.min.js"></script>
      <script src="./js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">GeekRSS</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li><a href="../">Home</a></li>
				  <li class="active"><a href="#">Demo</a></li>
                  <li><a href="mailto:nenew.net@gmail.com">Contact</a></li>
                </ul>
              </nav>
            </div>
          </div>
		<form action="./controls/gethtml.php" method="get">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="输入RSS网址" name="url">
				<span class="input-group-btn">
					<button class="btn btn-default" id="conform">确认</button>
				</span>
			</div>
		</form>
          <div class="mastfoot">
            <div class="inner">
              <p>Supported by <a href="http://www.nenew.net">nenew</a>.</p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/docs.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#conform').click(function(){
			alert( $('input[name="url"]').val());
			return false;
			});
		});
	</script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
