<!DOCTYPE html>
<html lang="en">
<head>
    <!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>PT.CUP</title>
    <!--REQUIRED STYLE SHEETS-->
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="{{('ya/bs/assets/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="{{('ya/bs/assets/css/font-awesome.min.css')}}" rel="stylesheet" />
       <!-- CUSTOM STYLE CSS -->
    <link href="{{('ya/bs/assets/css/style.css')}}" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]--></head>
<body>
     <!-- NAV SECTION -->
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                  
                    <a class="navbar-brand" href="{{ url('jabatans') }}">
                        {{('') }}
                    </a>
                    <a class="navbar-brand" href="{{ url('golongans') }}">
                        {{('') }}
                    </a>
                    <a class="navbar-brand" href="{{ url('kategori_lemburs') }}">
                        {{(' ') }}
                    </a>
                     <a class="navbar-brand" href="{{ url('pegawais') }}">
                        {{('') }}
                    </a>
                    <a class="navbar-brand" href="{{ url('lembur_pegawais') }}">
                        {{(' ') }}
                    </a>
                     <a class="navbar-brand" href="{{ url('tunjangans') }}">
                        {{('') }}
                    </a>
                     <a class="navbar-brand" href="{{ url('tunjangan_pegawais') }}">
                        {{(' ') }}
                    </a>
                          <a class="navbar-brand" href="{{ url('penggajians') }}">
                        {{('') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                         
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- cripts -->
  
     <!--END NAV SECTION -->
    
 
     <!--END HOME SECTION-->  
      <!--ABOUT SECTION-->
    <section id="about"  >
      <h1 ><center>Data Perusahaan</h1></center><br>
                     
       

                <div class="panel-group" id="accordion" >
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title panel-title-adjust">
                                <a href="{{ url('jabatans') }}">
                                    <i class="fa fa-plus"></i>Jabatan
                                </a>
                            </h4>
                        </div>
                        
                        </div>
                    </div>
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h4 class="panel-title panel-title-adjust">
                                <a href="{{ url('golongans') }}">
                                    <i class="fa fa-plus"></i>Golongan
                                </a>
                            </h4>
                        </div>
                        
                    </div>
                
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title panel-title-adjust">
                                <a href="{{ url('kategori_lemburs') }}">
                                    <i class="fa fa-plus">&nbsp;Kategori Lembur</i>
                                </a>
                            </h4>
                        </div>
                        <div id="collapsefour" class="panel-collapse collapse">
                            <div class="panel-body">
                                <h3>
                            </div>
                        </div>
                    </div>
                     <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h4 class="panel-title panel-title-adjust">
                                <a href="{{ url('lembur_pegawais') }}">
                                    <i class="fa fa-plus"></i>Lembur Pegawai
                                </a>
                            </h4>
                        </div>
                       
                    </div>
                     <div class="panel panel-success">
                        <div class="panel-heading">
                            <h4 class="panel-title panel-title-adjust">
                                <a href="{{ url('pegawais') }}">
                                    <i class="fa fa-plus"></i>Pegawai
                                </a>
                            </h4>
                        </div>
                        
                    </div>
                    
                      <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title panel-title-adjust">
                                <a href="{{ url('tunjangans') }}">
                                    <i class="fa fa-plus">&nbsp;Tunjangan </i>
                                </a>
                            </h4>
                        </div>
                        <div id="collapsefour" class="panel-collapse collapse">
                            <div class="panel-body">
                                <h3>
                            </div>
                        </div>
                    </div>
                     <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h4 class="panel-title panel-title-adjust">
                                <a href="{{ url('tunjangan_pegawais') }}">
                                    <i class="fa fa-plus"></i>Tunjangan Pegawai
                                </a>
                            </h4>
                        </div>
                       
                    </div>
                     <div class="panel-group" id="accordion">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title panel-title-adjust">
                                <a href="{{ url('penggajians') }}">
                                    <i class="fa fa-plus"></i> Penggajian
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">
                                <h3>JL.SUKAMENAK NO.10</h3>
                                
         
                            </div>
                        </div>
                    </div>
                </div>

            
                
                   
                  </div>
                </div>
          <div class="row text-center g-pad-bottom">
                
                <div class="col-md-12">
                      <h2>MY SKILL SET</h2>
                    <br />
                    <div class="alert-info">
                        <div class="progress progress-adjust">
  <div class="progress-bar progress-bar-success" style="width: 30%">
    <div class="skill-div">HRD 30%</div>  
    <span class="sr-only">30% Complete (success)</span>
  </div>
  <div class="progress-bar progress-bar-warning" style="width: 25%">
     <div class="skill-div"> Keuangan 25%</div> 
    <span class="sr-only">25% Complete (warning)</span>
  </div>
  <div class="progress-bar progress-bar-danger" style="width: 20%">
      <div class="skill-div"> Manager 20%</div> 
    <span class="sr-only">20% Complete (danger)</span>
  </div>
     <div class="progress-bar progress-bar-primary" style="width: 15%">
      <div class="skill-div"> Admin 15%</div> 
    <span class="sr-only">15% Complete (danger)</span>
  </div>
</div>
                    </div>
                          

                    </div>
                
              
        </div>
        </div>
    </section>
    <!--END ABOUT SECTION-->
    <!-- TESTIMONIAL SECTION-->
    <section id="testimonial" >
        <div class="container">
    <div class="row ">
            <div class="col-md-12">
                <div id="carousel-example" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example" data-slide-to="0" class=""></li>
                        <li data-target="#carousel-example" data-slide-to="1" class=""></li>
                        <li data-target="#carousel-example" data-slide-to="2" class=""></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item">
                            <div class="container center">
                                <div class="col-md-6 col-md-offset-3 slide-custom">
                                   
                                    <h4><i class="fa fa-quote-left"></i>
                                         Jangan menyerah atas impianmu, impian memberimu tujuan hidup. Ingatlah, sukses bukan kunci kebahagiaan, kebahagiaanlah kunci sukses. Semangat !
                                        <i class="fa fa-quote-right"></i></h4>
                                     <div class="user-img pull-right">
                       
                    </div>
                                    <h5 class="pull-right"><strong class="c-set" ></strong></h5>
                                </div>
                            </div>
                        </div>
                        <div class="item active left">
                            <div class="container center">
                                <div class="col-md-6 col-md-offset-3 slide-custom">
                                    <h4> <i class="fa fa-quote-left"></i>  Ubahalah dirimu sendiri, dan kau akan merubah keberuntunganmu <i class="fa fa-quote-right"></i></h4>
                                         <div class="user-img pull-right">
                       
                    </div>
                                    <h5 class="pull-right"><strong class="c-set" ></strong></h5>
                                </div>
                            </div>
                        </div>
                        <div class="item next left">
                            <div class="container center">
                                <div class="col-md-6 col-md-offset-3 slide-custom">
                                    <h4><i class="fa fa-quote-left"></i>Kita bisa mengubah arah angin, tapi kita bisa memanfaatkannya untuk mencapai tujuan berlayar kita <i class="fa fa-quote-right"></i></h4>
                                        <div class="user-img pull-right">
                       
                    </div>
                                    <h5 class="pull-right"><strong class="c-set"></strong></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </section>
     <!--END TESTIMONIAL SECTION-->
   <!--PROJECT SECTION-->
    <section id="project" >
        <div class="container">
            <div class="row">
                 <div class="col-md-6">
                     
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{('ya/bs/assets/img/karyawan2.jpg')}}" class="img-responsive img-thumbnail" alt="">
                    </div>
        <div class="col-md-6">
                     
                     <h2><center>PT CUP INDONESIA</h2></center>
                    <p>
                       <center>PT CUP INDONESIA Sudah mempunyai 150 Karyawan</center>
                    </p>
            
            <div class="alert alert-info text-center">
                          <h4>Kepala PT CUP : Bapak.Agus</h4> 
                          <hr>
                          <p>
                        Contact:081394336713
                        </p>
                         
                        </div>
                    </div>
                
            </div>
             
        </div>
    </section>
     <!--END PROJECT SECTION-->
     <!--PRICING SECTION-->
   
     <!--END PRICING SECTION-->
     <!--CONTACT SECTION-->
    
   
     <!--END CONTACT SECTION-->
  
    <!--FOOTER SECTION -->
    <div id="footer">
       <center>PT CUP INDONESIA</center>
         
    </div>
    <!-- END FOOTER SECTION -->

    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="{{('ya/bs/assets/plugins/jquery-1.10.2.js')}}"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="{{('ya/bs/assets/plugins/bootstrap.min.js')}}"></script>  
    <!-- CUSTOM SCRIPTS -->
    <script src="{{('ya/bs/assets/js/custom.js')}}"></script>
  <script src="/js/app.js"> </script>
</body>
</html>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
