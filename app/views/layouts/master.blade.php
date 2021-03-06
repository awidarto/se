<!DOCTYPE html>
<html>
  <head>
    <title>{{ Config::get('site.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootplus -->
    {{ HTML::style('bootplus/css/bootplus.min.css') }}
    {{ HTML::style('bootplus/css/bootplus-responsive.min.css') }}
    <!--[if IE 7]>
        {{ HTML::style('bootplus/css/bootplus-ie7.min.css') }}
    <![endif]-->
  </head>
  <body>
    @yield('content')
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Bootplus</title>
      <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">

      <!-- Le styles -->
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
      {{ HTML::style('bootplus/css/bootplus.min.css') }}
      <style type="text/css">
      html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
      }

      /* Wrapper for page content to push down footer */
      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
      }

      /* Set the fixed height of the footer here */
      #push,
      footer {
        height: 60px;
      }
      footer {
        background-color: #f5f5f5;
      }

      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
        footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }

      /*      
      body {
        padding-top: 46px;
        padding-bottom: 40px;
      }
      */
       .hero-unit {
          background: #00001C url(../assets/img/cover4.jpg) no-repeat top left;
       }
       .hero-unit h1 {color: #FFF}
       .hero-unit p {color: #F5F5F5}
      </style>
      {{ HTML::style('bootplus/css/bootplus-responsive.min.css') }}

      <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
      <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
      <![endif]-->

      <!-- Fav and touch icons -->
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>

      <div class="navbar navbar-fixed-top">
         <div class="navbar-inner">
           <div class="container">
             <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
             </button>
             <a class="brand" href="#">Project name</a>
             <div class="nav-collapse collapse">
               <ul class="nav">
                 <li class="active"><a href="#">Home</a></li>
                 <li><a href="#about">About</a></li>
                 <li><a href="#contact">Contact</a></li>
                 <li class="dropdown">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                   <ul class="dropdown-menu">
                     <li><a href="#">Action</a></li>
                     <li><a href="#">Another action</a></li>
                     <li><a href="#">Something else here</a></li>
                     <li class="divider"></li>
                     <li class="nav-header">Nav header</li>
                     <li><a href="#">Separated link</a></li>
                     <li><a href="#">One more separated link</a></li>
                   </ul>
                 </li>
               </ul>
               <form class="navbar-form pull-right">
                 <input class="span2" type="text" placeholder="Email">
                 <input class="span2" type="password" placeholder="Password">
                 <button type="submit" class="btn btn-primary">Sign in</button>
               </form>
             </div><!--/.nav-collapse -->
           </div>
         </div>
       </div>

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
         <div class="container">
            <h1>Hello, world!</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <p><a href="#" class="btn btn-primary btn-large">Learn more &raquo;</a></p>
         </div>
      </div>


      <div class="container">


      <!-- Example row of columns -->
      <div class="row">
        <div class="span4">

            <div class="card">
               <h3 class="card-heading simple">Simple News Card</h3>
               <div class="card-body">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  <p>
               </div>
               <div class="card-actions">
                  <button class="btn btn-block">View Details</button>
               </div>
            </div>

        </div>
        <div class="span4">

            <div class="card">
               <h3 class="card-heading simple">Simple News Card</h3>
               <div class="card-body">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  <p>
               </div>
               <div class="card-actions">
                  <button class="btn btn-block">View Details</button>
               </div>
            </div>

       </div>
        <div class="span4">

            <div class="card">
               <h3 class="card-heading simple">Simple News Card</h3>
               <div class="card-body">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  <p>
               </div>
               <div class="card-actions">
                  <button class="btn btn-block">View Details</button>
               </div>
            </div>

        </div>
      </div>

        <div id="push"></div>
      </div> <!-- /container -->

      <footer>
        <p>&copy; {{ Config::get('site.name')}} {{ date('Y',time()) }}</p>
      </footer>

      <!-- Le javascript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="http://code.jquery.com/jquery.js"></script>
      {{ HTML::script('bootplus/js/bootstrap.min.js')}}

   </body>
</html>
