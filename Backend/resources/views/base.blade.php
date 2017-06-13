<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>ZuGo</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Preview page of Metronic Admin Theme #1 for managed datatable samples" name="description">
  <meta content="" name="author">

  <!-- BEGIN GLOBAL MANDATORY STYLES -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css">
  <link href="./assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="./assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
  <link href="./assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="./assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css">
  <!-- END GLOBAL MANDATORY STYLES -->
  <!-- BEGIN PAGE LEVEL PLUGINS -->
  <link href="./assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css">
  <link href="./assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css">
  <!-- END PAGE LEVEL PLUGINS -->
  <!-- BEGIN THEME GLOBAL STYLES -->
  <link href="./assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css">
  <link href="./assets/global/css/plugins.min.css" rel="stylesheet" type="text/css">
  <!-- END THEME GLOBAL STYLES -->
  <!-- BEGIN THEME LAYOUT STYLES -->
  <link href="./assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css">
  <link href="./assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color">
  <link href="./assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css">
  <!-- END THEME LAYOUT STYLES -->
  <link rel="shortcut icon" href="favicon.ico"> 

  <!-- Bootstrap -->

    <link href="css/login.css" rel="stylesheet" type="text/css"/>
    <link href="css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="vendors/cropper/dist/cropper.min.css" rel="stylesheet">

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

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
    <div class="page-wrapper">

        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="{{ action('Controller@getAdvertises') }}">
                        <img src="img/logo.png" alt="logo" class="logo-default" height="30px" width="40px" style="margin:10px 0px"> </a>
<!--                    <div class="menu-toggler sidebar-toggler">
                        <span></span>
                    </div>-->
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
<!--                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>-->
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->

        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->

        <!-- BEGIN CONTAINER -->
        <div class="page-container">

            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                        <li class="heading">
                            <h3 class="uppercase">ZuGo</h3>
                        </li>
                        <li class="nav-item @yield('User-Selected-Class')">
                            <a href="{{ action('Controller@getUsers') }}" class="nav-link nav-toggle">
                                <i class="fa fa-user"></i>
                                <span class="title">User</span>
                                @yield('User-Selected-Span')
                            </a>
                        </li>
                        <li class="nav-item @yield('Advertise-Selected-Class')">
                            <a href="{{ action('Controller@getAdvertises') }}" class="nav-link nav-toggle">
                                <i class="fa fa-image"></i>
                                <span class="title">Advertise</span>
                                @yield('Advertise-Selected-Span')
                            </a>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->

            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content" style="min-height: 1432px;">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->

                    <!-- END THEME PANEL -->
                    <!-- BEGIN PAGE BAR -->

                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h1 class="page-title"> 
                        @yield('title')
                    </h1>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->

                    <div class="row">
                        <div class="col-md-12">

                            @yield('content')

                        </div>
                    </div>

                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->

        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2017 © ZuGo
                <a target="_blank" href="http://keenthemes.com">Me</a>
            </div>
            <div class="scroll-to-top" style="display: none;">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- END FOOTER -->
    </div>

    <!-- Dialog -->
    <div id="progressDlg" class="modal fade in" role="basic" style="padding-right: 17px;z-index:9999999999999;" [class.show]="appState.get('isLoading') > 0">
      <div class="modal-backdrop fade in" style="height: 100%;opacity:0.28;background-color:rgb(253, 129, 163) !important;"></div>
      <div class="modal-dialog" style="width:45px;height:100%;margin:auto;">
        <i class="fa fa-circle-o-notch fa-spin fa-fw" aria-hidden="true" style="font-size: 44px;top: 50%;position: absolute;color: rgb(253, 129, 163);"></i>
      </div>
    </div>

    <div id="dlg_modal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-mm" style="min-width: 1000px!important;">
        <form id="form_modal" class="form-horizontal form-label-left" novalidate method="POST" enctype="multipart/form-data" action="/addAdvertise">
          {{ csrf_field() }}
          <input type="hidden" id="id" name="id" value="">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
              <h4 class="modal-title" id="title_modal">Title</h4>
            </div>
            <div class="modal-body">
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                  </label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                  <input id="name" name="name" class="form-control col-md-7 col-xs-12" required="required" type="text">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Type <span class="required">*</span>
                  </label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                  <!-- <input id="adType" name="adType" class="form-control col-md-7 col-xs-12" required="required" type="number"> -->
                  <select class="form-control col-md-7 col-xs-12" id="adType" name="adType" onchange="onSelectType();">
                      <option value=1>Full Screen</option>
                      <option value=2>320*200</option>
                    </select>
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">URL <span class="required">*</span>
                  </label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                  <input id="adURL" name="adURL" class="form-control col-md-7 col-xs-12" required="required" type="text">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="adTime">Point <span class="required">*</span>
                  </label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                  <!-- <input id="adTime" name="adTime" class="form-control col-md-7 col-xs-12" required="required" type="number"> -->
                  <select class="form-control col-md-7 col-xs-12" id="adTime" name="adTime">
                      <option value=10>10</option>
                      <option value=20>20</option>
                      <option value=30>30</option>
                      <option value=40>40</option>
                      <option value=50>50</option>
                      <option value=60>60</option>
                    </select>
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Image <span class="required">*</span>
                  </label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                  <!-- <input id="car_detail" class="form-control col-md-7 col-xs-12" name="car_detail" required="required" type="text"> -->
                  <!-- <img id="previewImg" src="" alt="" style="width: 100%; display: block;"> -->
                  <input type="file" id="file" name="file" accept="image/*">
                </div>
              </div>
              <div class="item form-group">
                <div class="container cropper">
                  <div class="row">
                    <div class="col-md-8">
                      <div class="img-container">
                        <img id="image" src="" alt="Picture">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="docs-preview clearfix">
                        <div class="img-preview preview-lg" style="margin:50% auto;float: none;"></div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="btn_ok" onclick="saveItem()">OK</button>
              </div>
            </div>
        </form>
        </div>
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
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pnotify/dist/pnotify.js"></script>
    <script src="vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="vendors/pnotify/dist/pnotify.nonblock.js"></script>
    <script src="vendors/cropper/dist/cropper.js"></script>
    <script src="js/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="js/jquery.uniform.min.js" type="text/javascript"></script>
    <script src="js/jquery.cokie.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="js/metronic.js" type="text/javascript"></script>
    <script src="js/login.js" type="text/javascript"></script>
    <script src="js/jquery.confirm.js" type="text/javascript"></script>

    <!-- Custom Theme Scripts -->
    <script src="js/custom.min.js"></script>

    <!-- Datatables -->
    <script>
      $(document).ready(function() {
        Metronic.init(); // init metronic core components
      	Layout.init(); // init current layout
      	Login.init();
        initDataTable();

        $(document).on('shown.bs.modal','#dlg_modal', function () {
            // alert($(".img-container").width());
            $("#image").one().cropper('init');
          })

        // initCropImage();
      });

      function initDataTable(){
        $('#datatable').dataTable();

        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        var $datatable = $('#datatable-checkbox');

        $datatable.dataTable({
          'order': [[ 1, 'asc' ]],
          'columnDefs': [
            { orderable: false, targets: [0] }
          ]
        });
        $datatable.on('draw.dt', function() {
          $('input').iCheck({
            checkboxClass: 'icheckbox_flat-green'
          });
        });
      }


      function gotoTable(){
        username = $("#username").val();
        password = $("#password").val();
        if (username == '' || password == '') {
          $('.alert').removeClass('display-hide');
          $('.alert').css('display', 'block');
          return;
        }

        $('.table-page').fadeIn();
        $('.login-page').hide();
      }

      function showEditModal(){
        $('#dlg_modal').modal('show');
        initModal();
      }



      function readURL(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function (e) {
                  $("#previewImg").attr('src', e.target.result);
              }
              reader.readAsDataURL(input.files[0]);
        }
      }

      function login(){
        $.ajax({
                url: "{{ url('/login') }}",
                data: {
                        'uid': $('#username').val(),
                        'pwd': $('#password').val(),
                },
                method: 'get',
                success: function(res) {
                  if (res.success) {
                    gotoTable();
                    for (var i = 0; i < res.data.length; i++) {
                      importData(res.data[i]);
                    }
                    initDataTable();
                  } else {
                    new PNotify({
                        title: 'LogIn Error',
                        text: 'Invalid User Name or Password.',
                        type: 'error',
                        styling: 'bootstrap3'
                    });
                  }
                },
                error: function() {
                  new PNotify({
                      title: 'LogIn Error',
                      text: 'Invalid User Name or Password.',
                      type: 'error',
                      styling: 'bootstrap3'
                  });
                },
        });
      }
      function importData(data){
        var table = document.getElementById("datatable");
    		var row = table.insertRow(table.rows.length);
    		var td
    		td= row.insertCell(row.cells.length);
    		td.innerHTML = data.name;
    		td= row.insertCell(row.cells.length);
    		td.innerHTML = data.adType;
    		td= row.insertCell(row.cells.length);
    		td.innerHTML = data.adURL;
    		td= row.insertCell(row.cells.length);
    		td.innerHTML = data.adImage;
    		td= row.insertCell(row.cells.length);
    		td.innerHTML = data.adTime;
    		td= row.insertCell(row.cells.length);
    		row.className="vehicle-item-"+data.id;
    		td.className = 'menu-action';
    		td.innerHTML = '<a class="btn menu-icon vd_yellow" data-placement="top" data-toggle="tooltip" data-original-title="edit" onclick="dctype.editVehicleItem('+ data.id +')"> <i class="fa fa-pencil"></i> </a>' +
                        '<a class="btn menu-icon vd_red " data-placement="top" data-toggle="tooltip" data-original-title="delete" onclick="dctype.removeVehicleItem("'+data.id+'"")"><i class="fa fa-times"></i> </a>';
                      //  initDataTable();
      }

      function editAdvertise(id){
          $('#dlg_modal').modal('show');
          $("#title_modal").text("Edit");
          $("#id").val(id);
          $("#name").val($($("."+id).children()[0]).text());
          $("#adType").val($($("."+id).children()[1]).text());
          $("#adURL").val($($("."+id).children()[2]).text());
          $("#adTime").val($($("."+id).children()[4]).text());
          $("#file").val('');
          onSelectType();
          $("#image").cropper('replace', $($("."+id+" img")).attr('src'));
      }

      function initModal(){
        $("#title_modal").text("ADD ADVERTISEMENT");
        $("#id").val('');
        $("#name").val('');
        $("#adURL").val('');
        $("#adTime").val(10);
        clearImage();
        $("#adType").val('1');
        onSelectType();
      }

      function clearImage(){
        $('#image').cropper('replace', '');
        // $("#image").attr('src', '');
      }

      function removeAdvertise(id){
        $.confirm({
        text: "Do you want to remove?",
        confirm: function(button) {
          showProgress();
          $.ajax({
            url: "{{ url('/removeAdvertise') }}",
            data: {
              'id': id
            },
            method: 'get',
            success: function(res) {
              if (res.success) {
                window.location = "{{url('/advertise')}}";
              } else {
                new PNotify({
                  title: 'Remove Data Error',
                  text: 'Please check your Internet status.',
                  type: 'error',
                  styling: 'bootstrap3'
                });
                hideProgress();
              }
            },
            error: function() {
              new PNotify({
                title: 'Remove Data Error',
                text: 'Please check your Internet status.',
                type: 'error',
                styling: 'bootstrap3'
              });
            },
          });

        }
        });

      }

/* Temp     function editUser(id){
          $('#dlg_modal').modal('show');
          $("#title_modal").text("Edit");
          $("#id").val(id);
          $("#name").val($($("."+id).children()[0]).text());
          $("#adType").val($($("."+id).children()[1]).text());
          $("#adURL").val($($("."+id).children()[2]).text());
          $("#adTime").val($($("."+id).children()[4]).text());
          $("#file").val('');
          onSelectType();
          $("#image").cropper('replace', $($("."+id+" img")).attr('src'));
      }

      function removeUser(id){
        $.confirm({
        text: "Do you want to remove?",
        confirm: function(button) {
          showProgress();
          $.ajax({
            url: "{{ url('/removeUser') }}",
            data: {
              'id': id
            },
            method: 'get',
            success: function(res) {
              if (res.success) {
                window.location = "{{url('/user')}}";
              } else {
                new PNotify({
                  title: 'Remove Data Error',
                  text: 'Please check your Internet status.',
                  type: 'error',
                  styling: 'bootstrap3'
                });
                hideProgress();
              }
            },
            error: function() {
              new PNotify({
                title: 'Remove Data Error',
                text: 'Please check your Internet status.',
                type: 'error',
                styling: 'bootstrap3'
              });
            },
          });

        }
        });

      }

      function verifyUser(id) {
        showProgress();
        $.ajax({
                url: "{{ url('/verifyUser') }}",
                data: {
                        '_token': '{{ csrf_token() }}',
                        'id': $('#id').val(),
                        'name': $('#name').val(),
                        'adType': $('#adType').val(),
                        'adURL': $('#adURL').val(),
                        'adTime': $('#adTime').val(),
                        'adFileData': fileData,
                },
                method: 'post',
                success: function(res) {
                  if (res.success) {
                    window.location = "{{url('/advertise')}}";
                  } else {
                    new PNotify({
                      title: 'Save Data Error',
                      text: 'Please check your Internet status.',
                      type: 'error',
                      styling: 'bootstrap3'
                    });
                    hideProgress();
                  }
                },
                error: function() {
                  new PNotify({
                      title: 'Save Data Error',
                      text: 'Please check your Internet status.',
                      type: 'error',
                      styling: 'bootstrap3'
                  });
                  hideProgress();
                },
        });
      }*/

      </script>
      <script>
        $(document).ready(function() {

      // function initCropImage(){
        var $image = $('#image');
        var $download = $('#download');
        var $dataX = $('#dataX');
        var $dataY = $('#dataY');
        var $dataHeight = $('#dataHeight');
        var $dataWidth = $('#dataWidth');
        var $dataRotate = $('#dataRotate');
        var $dataScaleX = $('#dataScaleX');
        var $dataScaleY = $('#dataScaleY');
        var options = {
              aspectRatio: 1242/2208,
              preview: '.img-preview',
              crop: function (e) {
                $dataX.val(Math.round(e.x));
                $dataY.val(Math.round(e.y));
                $dataHeight.val(Math.round(e.height));
                $dataWidth.val(Math.round(e.width));
                $dataRotate.val(e.rotate);
                $dataScaleX.val(e.scaleX);
                $dataScaleY.val(e.scaleY);
              }
            };


        // Tooltip
        $('[data-toggle="tooltip"]').tooltip();


        // Cropper
        $image.on({
          'build.cropper': function (e) {
            console.log(e.type);
          },
          'built.cropper': function (e) {
            console.log(e.type);
          },
          'cropstart.cropper': function (e) {
            console.log(e.type, e.action);
          },
          'cropmove.cropper': function (e) {
            console.log(e.type, e.action);
          },
          'cropend.cropper': function (e) {
            console.log(e.type, e.action);
          },
          'crop.cropper': function (e) {
            console.log(e.type, e.x, e.y, e.width, e.height, e.rotate, e.scaleX, e.scaleY);
          },
          'zoom.cropper': function (e) {
            console.log(e.type, e.ratio);
          }
        }).cropper(options);



        // Buttons
        if (!$.isFunction(document.createElement('canvas').getContext)) {
          $('button[data-method="getCroppedCanvas"]').prop('disabled', true);
        }

        if (typeof document.createElement('cropper').style.transition === 'undefined') {
          $('button[data-method="rotate"]').prop('disabled', true);
          $('button[data-method="scale"]').prop('disabled', true);
        }


        // Download
        // if (typeof $download[0].download === 'undefined') {
        //   $download.addClass('disabled');
        // }


        // Options
        $('.docs-toggles').on('change', 'input', function () {
          var $this = $(this);
          var name = $this.attr('name');
          var type = $this.prop('type');
          var cropBoxData;
          var canvasData;

          if (!$image.data('cropper')) {
            return;
          }

          if (type === 'checkbox') {
            options[name] = $this.prop('checked');
            cropBoxData = $image.cropper('getCropBoxData');
            canvasData = $image.cropper('getCanvasData');

            options.built = function () {
              $image.cropper('setCropBoxData', cropBoxData);
              $image.cropper('setCanvasData', canvasData);
            };
          } else if (type === 'radio') {
            options[name] = $this.val();
          }

          $image.cropper('destroy').cropper(options);
        });


        // Methods
        $('.docs-buttons').on('click', '[data-method]', function () {
          var $this = $(this);
          var data = $this.data();
          var $target;
          var result;

          if ($this.prop('disabled') || $this.hasClass('disabled')) {
            return;
          }

          if ($image.data('cropper') && data.method) {
            data = $.extend({}, data); // Clone a new one

            if (typeof data.target !== 'undefined') {
              $target = $(data.target);

              if (typeof data.option === 'undefined') {
                try {
                  data.option = JSON.parse($target.val());
                } catch (e) {
                  console.log(e.message);
                }
              }
            }

            result = $image.cropper(data.method, data.option, data.secondOption);

            switch (data.method) {
              case 'scaleX':
              case 'scaleY':
                $(this).data('option', -data.option);
                break;

              case 'getCroppedCanvas':
                if (result) {

                  // Bootstrap's Modal
                  $('#getCroppedCanvasModal').modal().find('.modal-body').html(result);

                  if (!$download.hasClass('disabled')) {
                    $download.attr('href', result.toDataURL());
                  }
                }

                break;
            }

            if ($.isPlainObject(result) && $target) {
              try {
                $target.val(JSON.stringify(result));
              } catch (e) {
                console.log(e.message);
              }
            }

          }
        });



        // Keyboard
        $(document.body).on('keydown', function (e) {
          if (!$image.data('cropper') || this.scrollTop > 300) {
            return;
          }

          switch (e.which) {
            case 37:
              e.preventDefault();
              $image.cropper('move', -1, 0);
              break;

            case 38:
              e.preventDefault();
              $image.cropper('move', 0, -1);
              break;

            case 39:
              e.preventDefault();
              $image.cropper('move', 1, 0);
              break;

            case 40:
              e.preventDefault();
              $image.cropper('move', 0, 1);
              break;
          }
        });

        // Import image
        var $inputImage = $('#file');
        var URL = window.URL || window.webkitURL;
        var blobURL;
        if (URL) {
          $inputImage.change(function () {
            var files = this.files;
            var file;
            if (!$image.data('cropper')) {
              return;
            }
            if (files && files.length) {
              file = files[0];
              if (/^image\/\w+$/.test(file.type)) {
                blobURL = URL.createObjectURL(file);
                console.log(blobURL);
                $image.one('built.cropper', function () {
                  // Revoke when load complete
                  URL.revokeObjectURL(blobURL);
                }).cropper('reset').cropper('replace', blobURL);
                // $inputImage.val('');
              } else {
                window.alert('Please choose an image file.');
              }
            }
          });
        } else {
          $inputImage.prop('disabled', true).parent().addClass('disabled');
        }

      });
      function onSelectType(){
        if (($("#adType").val()) == 1) {
          $('#image').cropper('setAspectRatio', 1242/2208);
        } else {
          $('#image').cropper('setAspectRatio', 320/200);
        }
      }

      function saveItem(){
        error = '';
        if ($('#name').val() == '') {
          error = 'Name is required field.';
        }
        else if ( $('#adType').val() == '') {
          error = 'adType is required field.';
        }
        else if ( $('#adURL').val() == '') {
          error = 'adURL is required field.';
        }
        else if ( $('#adTime').val() == '') {
          error = 'adTime is required field.';
        }
        else if ( $('#id').val() == '' && $('#file').val() == '') {
          error = 'Please choose image';
        }

        if (error != '') {
          new PNotify({
              title: 'Validation Error',
              text: error,
              type: 'error',
              styling: 'bootstrap3'
          });
          return;
        }

        showProgress();
        var fileData = $('#image').cropper('getCroppedCanvas').toDataURL();
        if (fileData.length > 2000000) {
          new PNotify({
            title: 'Save Data Error',
            text: 'Your File Size is too big for upload. Please Resize',
            type: 'error',
            styling: 'bootstrap3'
          });
          hideProgress();
          return;
        }
        $.ajax({
                url: "{{ url('/addAdvertise') }}",
                data: {
                        '_token': '{{ csrf_token() }}',
                        'id': $('#id').val(),
                        'name': $('#name').val(),
                        'adType': $('#adType').val(),
                        'adURL': $('#adURL').val(),
                        'adTime': $('#adTime').val(),
                        'adFileData': fileData,
                },
                method: 'post',
                success: function(res) {
                  if (res.success) {
                    window.location = "{{url('/advertise')}}";
                  } else {
                    new PNotify({
                      title: 'Save Data Error',
                      text: 'Please check your Internet status.',
                      type: 'error',
                      styling: 'bootstrap3'
                    });
                    hideProgress();
                  }
                },
                error: function() {
                  new PNotify({
                      title: 'Save Data Error',
                      text: 'Please check your Internet status.',
                      type: 'error',
                      styling: 'bootstrap3'
                  });
                  hideProgress();
                },
        });
      }


    </script>
    <!-- /Datatables -->    

    <!--[if lt IE 9]>
<script src="./assets/global/plugins/respond.min.js"></script>
<script src="./assets/global/plugins/excanvas.min.js"></script> 
<script src="./assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
    <!-- BEGIN CORE PLUGINS -->
<!--    <script src="./assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="./assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>-->
    <script src="./assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
    <script src="./assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="./assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="./assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="./assets/global/scripts/datatable.js" type="text/javascript"></script>
    <script src="./assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
    <script src="./assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="./assets/global/scripts/app.min.js" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="./assets/pages/scripts/table-datatables-managed.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <script src="./assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
    <script src="./assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
    <script src="./assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
    <script src="./assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
    <!-- END THEME LAYOUT SCRIPTS -->



</body>
</html>
