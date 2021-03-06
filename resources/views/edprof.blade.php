<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{('/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{('/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{('/dist/css/skins/_all-skins.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{('/plugins/iCheck/flat/blue.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{('/plugins/morris/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{('/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{('/plugins/datepicker/datepicker3.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{('/plugins/daterangepicker/daterangepicker-bs3.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    hr {
    -moz-border-bottom-colors: none;
    -moz-border-image: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: rgba(0,0,0,0.1) -moz-use-text-color rgba(0,0,0,0.1);
    border-style: solid none;
    border-width: 1px 0;
    margin: 18px 0;
  }
  </style>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="/" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <!-- Notifications: style can be found in dropdown.less -->
              <!-- Tasks: style can be found in dropdown.less -->
             
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                      <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      <p>
                        {{ Auth::user()->name }} - Web Developer
                        
                      </p>
                    </li>
                    <!-- Menu Body -->
                    
                    <!-- Menu Footer-->
                    <li class="user-footer">
                      <div class="pull-right">
                        <a href="logout" class="btn btn-default btn-flat">Sign out</a>
                      </div>
                    </li>
                  </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                
              </ul>
            </div>
          </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
          <!-- sidebar: style can be found in sidebar.less -->
          <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
              <div class="pull-left image">
                <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
              </div>
            <div class="pull-left info">
              <p>{{ Auth::user()->name }}</p>
              
            </div>
          </div>
          <!-- search form -->
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="/">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
              </a>
            </li>
            <li>
              <a href="/profilpegawai">
                <i class="fa fa-th"></i> <span>Profil Pegawai</span>
              </a>
            </li>
             <li>
              <a href="/jabatan">
                <i class="fa fa-th"></i> <span>Jabatan</span>
              </a>
            </li>
             <li>
              <a href="/lokasikerja">
                <i class="fa fa-th"></i> <span>Lokasi Kerja</span>
              </a>
            </li>
             <li>
              <a href="/unitkerja">
                <i class="fa fa-th"></i> <span>Unit Kerja</span>
              </a>
            </li>
             <li>
              <a href="/level">
                <i class="fa fa-th"></i> <span>Level</span>
              </a>
            </li>
            <li class="treeview">
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1 class="lead" style="font-size:45px">
          Edit Pegawai 
          </h1 style="font-size:45px">
          <hr>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header" style="background:#0072C6">
                  <h3 style="color:white;" class="box-title">Detail Pegawai</h3>
                </div><!-- /.box-header -->
                <div class="panel">
  <div class="content"> 
    <table style="width:55%">
      <tr>
        <td>NIK</td>
        <td>
        <form action="{{ $data->id }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="input-control text full-size" style="padding-bottom:15px">          
          <input style="width:60%;" type="text" name="nik" value="{{ $data->nik }}">
          </a>
          </div>
          </td>
      </tr>
      <tr>
        <td>Nama</td>
        <td>
          <div class="input-control text full-size" style="padding-bottom:15px">
            <input style="width:100%;" type="text" name="nama" value="{{ $data->nama }}">
          </div>
        </td>
      </tr>
       <tr>
      <td>Tanggal Lahir</td>
      <td>
      <div class="input-control text full-size" style="padding-bottom:15px">
      <input class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" type="text" name="tanggal_lahir" value="{{ $data->tanggal_lahir }}">         
      </td>
      </tr>
       <tr>
        <td>Level</td>
        <td>
          <div class="input-control select" style="padding-bottom:15px">
          <select style="width:100%" name="level">
            <option>-Pilih Level-</option>
            @foreach($level as $level)
            <option value="{{ $level->id }}">{{ $level->kode_level }}</option>
            @endforeach
          </select>
          </div>
        </td>
      <tr>
        <td>Lokasi Kerja</td>
        <td>
          <div class="input-control select" style="padding-bottom:15px">
          <select style="width:100%" name="lokasi_kerja">
            <option>-Pilih Lokasi Kerja-</option> 
            @foreach($lokasikerja as $lokasikerja)           
            <option>{{ $lokasikerja->nama }}</option>
            @endforeach
          </select>
          </div>
        </td>
      </tr>
      <tr>
        <td>Unit Kerja</td>
        <td>
          <div class="input-control select" style="padding-bottom:15px">
          <select style="width:100%" name="unit_kerja" value="{{ $data->unit_kerja }}">
            <option>Pilih Unit Kerja</option>
            @foreach($unitkerja as $unitkerja)
            <option value="{{ $unitkerja->id }}">{{ $unitkerja->nama_divisi }}</option>
            @endforeach
          </select>
          </div>
        </td>
      </tr>
      <tr>
        <tr>
        <td>Jabatan</td>
        <td>
          <div class="input-control select" style="padding-bottom:15px">
          <select style="width:100%" name="jabatan">
            <option>Pilih jabatan</option>
            @foreach($jabatan as $jabatan)
            <option value="{{ $jabatan->nama_jabatan }}">{{ $jabatan->nama_jabatan }}</option>
            @endforeach          
          </select>
          </div>
        </td>
      </tr>
      <tr>
        <td>Status Aktif</td>
        <td>
          <div class="input-contol text full-size" style="padding-bottom:15px">
          <select style="width:40%;" name="status_aktif" value="{{ $data->status_aktif }}">
            <option>Tidak Aktif</option>
            <option>Aktif</option>
          </select>
          </div>
        </td>
      </tr>
      <tr>
        <td>Status Kawin</td>
        <td>
          <div class="input-contol text full-size" style="padding-bottom:15px">
          <select style="width:40% ;" name="status_kawin" value="{{ $data->status_kawin }}">>
            <option>Belum Kawin</option>
            <option>Sudah Kawin</option>
          </select>
          </div>
        </td>
      </tr>
      <tr>
        <td>Nomor SK</td>
        <td>
          <div class="input-control text full-size" style="padding-bottom:15px">
            <input style="width:100%;" type="text" name="nomor_sk" value="{{ $data->nomor_sk }}">
          </div>
        </td>
      </tr>
      <tr>
      <td>Tanggal Sk</td>
      <td>
      <div class="input-control text full-size" style="padding-bottom:15px">
      <input class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" type="text" name="tanggal_sk" value="{{ $data->tanggal_sk }}">       
      </td>
      </tr>
      </tr>
      <tr>
      <td>
      <h3>Alamat Pegawai</h1>
      </td>
     </tr>
     <tr>
        <td>Alamat</td>
        <td>
          <div class="input-control text full-size" style="padding-bottom:15px">
            <textarea style="width:100%" name="alamat">{{ $data->alamat }}</textarea>
          </div>
        </td>
      </tr>
      <tr>
      <tr>
        <td>RT/RW</td>
        <td>
          <div class="input-control text full-size" style="padding-bottom:15px">
            <input style="width:50%;" type="text" name="rt_rw" value="{{ $data->rt_rw }}">
          </div>
        </td>
      </tr>
      <tr>
        <td>Kode Pos</td>
        <td>
          <div class="input-contol text full-size" style="padding-bottom:15px">
          <input type="text" style="width:100%" name="kode_pos" value="{{ $data->kode_pos }}">
          </div>
        </td>
      </tr>
      <tr>
        <td>Telephone Yang Bisa Dihubungi</td>
        <td>
          <div class="input-contol text full-size" style="padding-bottom:15px">
          <input type="text" style="width:100%" name="tlp" value="{{ $data->tlp }}">
          </div>
        </td>
      </tr>
      </table>
      <td>
      <div><td><a href="#"><button style="border:none;background:#82BA00;height:25px;width:100px;color:white" type="submit">SIMPAN</button></a></td></form>
      <td><a href="/"><button style=";border:none;background:#82BA00;height:25px;width:100px;color:white" type="submit">KEMBALI</button></a></td>
      </div>
      </td>
      </td>
      </tr>
    
  </div>
</div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <!-- Select2 -->
    <script src="/plugins/select2/select2.full.min.js"></script>
    <!-- InputMask -->
    <script src="/plugins/input-mask/jquery.inputmask.js"></script>
    <script src="/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="/plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- date-range-picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
    <!-- bootstrap time picker -->
    <script src="/plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- iCheck 1.0.1 -->
    <script src="/plugins/iCheck/icheck.min.js"></script>
    <!-- FastClick -->
    <script src="/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/dist/js/demo.js"></script>
    <!-- Page <script type="text/javascript"></script>ipt -->
    <script>
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
              ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
              },
              startDate: moment().subtract(29, 'days'),
              endDate: moment()
            },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
      });
    </script>
  </body>
</html> 