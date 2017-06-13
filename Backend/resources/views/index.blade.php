<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <!-- <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet"> -->
    <!-- Datatables -->
    <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet" type="text/css"/>
    <link href="css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="css/custom.min.css" rel="stylesheet">
    <style media="screen">
    	.login-btn {
        margin-top: 20px!important;
        width: 100%;
        height: 50px;
    	}
    </style>
  </head>

  <body class="nav-md login">
    <div id="progressDlg" class="modal fade in" role="basic" style="padding-right: 17px;z-index:9999999999999;" [class.show] = "appState.get('isLoading') > 0">
     <div class="modal-backdrop fade in" style="height: 100%;opacity:0.28;background-color:rgb(253, 129, 163) !important;"></div>
     <div class="modal-dialog" style="width:45px;height:100%;margin:auto;">
       <i class="fa fa-circle-o-notch fa-spin fa-fw" aria-hidden="true" style="font-size: 44px;top: 50%;position: absolute;color: rgb(253, 129, 163);"></i>
     </div>
    </div>
    <div class="logo">
      	<img src="img/logo.png" alt=""/>
    </div>
    <div class="content login-page" >
        	<!-- BEGIN LOGIN FORM -->
        	<form class="login-form" >
        		<h3 class="form-title">Sign In</h3>
            @if (isset($error))
            <div class="alert alert-danger display-hide">
        			<button class="close" data-close="alert" onclick="$('.alert').addClass(display-hide)"></button>
        			<span>
        			Enter any username and password. </span>
        		</div>
            @endif
        		<div class="alert alert-danger display-hide">
        			<button class="close" data-close="alert" onclick="$('.alert').addClass(display-hide)"></button>
        			<span>
        			Enter any username and password. </span>
        		</div>
        		<div class="form-group">
              <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        			<label class="control-label visible-ie8 visible-ie9">Username</label>
        			<input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="uid" id="username"/>
        		</div>
        		<div class="form-group">
        			<label class="control-label visible-ie8 visible-ie9">Password</label>
        			<input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="pwd" id="password"/>
        		</div>
        		<div class="form-actions">
        			<button type="button" class="btn btn-success uppercase login-btn" onclick="login()">Login</button>
        		</div>
        	</form>
        	<!-- END LOGIN FORM -->
        </div>


    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pnotify/dist/pnotify.js"></script>
    <script src="vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="vendors/pnotify/dist/pnotify.nonblock.js"></script>

    <script src="js/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="js/jquery.uniform.min.js" type="text/javascript"></script>
    <script src="js/jquery.cokie.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="js/metronic.js" type="text/javascript"></script>
    <script src="js/layout.js" type="text/javascript"></script>
    <script src="js/login.js" type="text/javascript"></script>

    <!-- Custom Theme Scripts -->
    <script src="js/custom.min.js"></script>

    <!-- Datatables -->
    <script>
      $(document).ready(function() {
        Metronic.init(); // init metronic core components
      	Layout.init(); // init current layout
      	Login.init();
      });


      function login(){
        if ($('#username').val() == '' || $('#password').val()==''){
          new PNotify({
              title: 'LogIn Error',
              text: 'User Name or Password is required',
              type: 'error',
              styling: 'bootstrap3'
          });
		  return;
        }
		if ($('#username').val() != 'admin' && $('#username').val() != 'brunolens@outlook.com' && 
    $('#username').val() != 'daw.mag@yandex.com'){
          new PNotify({
              title: 'LogIn Error',
              text: 'User Name or Password is required',
              type: 'error',
              styling: 'bootstrap3'
          });
		  return;
        }

        showProgress();
        $.ajax({
                url: "{{ config('app.url').'/login' }}",
                data: {
                        '_token': '{{ csrf_token() }}',
                        'uid': $('#username').val(),
                        'pwd': $('#password').val(),
                },
                method: 'post',
                success: function(res) {
                  if (res.success) {
                    // gotoTable();
                    // for (var i = 0; i < res.data.length; i++) {
                    //   importData(res.data[i]);
                    // }
                    window.location = "{{ config('app.url').'/advertise' }}";
                  } else {
                    new PNotify({
                        title: 'LogIn Error',
                        text: 'Invalid User Name or Password.',
                        type: 'error',
                        styling: 'bootstrap3'
                    });
                    hideProgress();
                  }
                },
                error: function() {
                  new PNotify({
                      title: 'LogIn Error',
                      text: 'Invalid User Name or Password.',
                      type: 'error',
                      styling: 'bootstrap3'
                  });
                  hideProgress();
                },
        });
      }


    </script>
    <!-- /Datatables -->
  </body>
</html>
