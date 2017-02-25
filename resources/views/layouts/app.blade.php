<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if IE]>
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
         <div class="navbar navbar-inverse navbar-fixed-top">
       
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">PT.CUP</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a  href="{{ url('login') }}">Login</a></li>
                   
                   
                </ul>
            </div>
           
        </div>
    </div>
     <!--END NAV SECTION -->
    
    <!--HOME SECTION-->
  <br><br><br><br>
  <br>
    @yield('content')
            </div>
        </div>
    </div>
   
    </div>
     

     <!--END HOME SECTION-->  
      <!--ABOUT SECTION-->
  
    <!-- END FOOTER SECTION -->

    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="{{('ya/bs/assets/plugins/jquery-1.10.2.js')}}"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="{{('ya/bs/assets/plugins/bootstrap.min.js')}}"></script>  
    <!-- CUSTOM SCRIPTS -->
    <script src="{{('ya/bs/assets/js/custom.js')}}"></script>

</body>
</html>
