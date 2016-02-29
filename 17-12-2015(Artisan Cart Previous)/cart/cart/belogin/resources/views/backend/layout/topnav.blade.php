<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cart :: Deshboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
        <?php
        function css($styles, $default) {
          $html = '';
           foreach ($styles as $style) {
          $html.= HTML::style($default  . $style);
           }
         return $html;
       }
       ?>

     {!!
    css([
     'bootstrap/css/bootstrap.min.css',
     'dist/css/AdminLTE.min.css',
     'dist/css/skins/_all-skins.min.css',
     'plugins/datatables/dataTables.bootstrap.css',
     'animate.css',
     'dist/sweetalert.css',
      'dist/dropzone.css',
      'plugins/select2/select2.min.css',
     ], 'admin_backend/')
    !!}
  </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">
      @include('backend.header')
      <!-- Full Width Column -->
      <div class="content-wrapper">
      @yield('content')
      </div><!-- /.content-wrapper -->
      @include('backend.footer')
    </div><!-- ./wrapper -->
    <!-- REQUIRED JS SCRIPTS -->
    <?php
    function js($scripts, $default) {
    $html = '';
     foreach ($scripts as $script) {
    $html.= HTML::script(  $default . $script );
     }
     return $html;
     }
     ?>

     {!!
    js([
     'jquery-2.1.4.min.js',
     'bootstrap/js/bootstrap.min.js',
     'plugins/slimScroll/jquery.slimscroll.min.js',
     'plugins/fastclick/fastclick.min.js',
     'dist/js/app.min.js',
     'dist/js/demo.js',
     'plugins/datatables/jquery.dataTables.min.js',
     'plugins/datatables/dataTables.bootstrap.min.js',
     'dist/sweetalert.min.js',
     'dist/dropzone.js',
     'plugins/select2/select2.full.min.js',
     'dist/jquery-check-all.min.js',
     ], 'admin_backend/')
    !!}

  <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
          $(".select2").select2();
      });
    </script>
    @if(Session::has('shahin_sucess'))
    <script>
        swal({
            title: "Hi, Again!",
            text:  "You are now logged in, however, you do not currently have home page!.",
            type: "success",
            timer: 1700,
            showConfirmButton: false
        });
    </script>
    @endif
       <script type="text/javascript">
        Dropzone.autoDiscover = false;
             $('#productId').on('change',function(e){
              $('#dropzoneFileUpload').show();
            var baseUrl = "{{ url('/') }}";
            var token = "{{ Session::getToken() }}";

             Dropzone.autoDiscover = false;
             var myDropzone = new Dropzone("div#dropzoneFileUpload", {
                 url: baseUrl+"/dropzone/uploadFiles",
                 addRemoveLinks: false,
                  dictCancelUpload: "Cancel",
                  autoProcessQueue: true,
                  parallelUploads: 10,
                 params: {
                    _token: token,
                     product_id: document.getElementById("productId").value,
                  }
             });
             Dropzone.options.dropzoneFileUpload = {
                paramName: "file", // The name that will be used to transfer the file
                 maxFiles: 3,
                addRemoveLinks: true,
                accept: function(file, done) {
                },
              };
  });
           $("#statuschangebtn").click(function(){
             var orderId = $(".orderid").val();
            var formData = $(".statusoption").val();
             var root_url = "<?php echo Request::root(); ?>/"; // put this in php file
             var BASE = root_url + 'setstatus';
            $.post(BASE, {
              "_token": "{{ csrf_token() }}",
              'formData' : formData,
              'orderId' : orderId,
              }, function(data) {
                swal({
            title: "Status Changed!",
            type: "success",
            timer: 1700,
            showConfirmButton: true
        });
          });

            });
         </script>
         <script>
  $(document).ready(function() {
    $('#check-all').checkAll();
  });
</script>
  </body>
</html>
