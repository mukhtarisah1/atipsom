<!DOCTYPE html>
<html lang="en">
  

<head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Begin SEO tag -->
    <title> @yield('title') </title>
    <meta property="og:title" content="Dashboard">
    <meta name="author" content="symlink">
    <meta property="og:locale" content="en_US">
    <meta name="description" content="Incident Management System">
    <meta property="og:description" content="NHIS">
    
    

    <!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="144x144" href="{{url('assets/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{url('assets/favicon.ico')}}">
    <meta name="theme-color" content="#00ad56"><!-- End FAVICONS -->
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End GOOGLE FONT -->
    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="{{url('assets/vendor/open-iconic/font/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/vendor/flatpickr/flatpickr.min.css')}}"><!-- END PLUGINS STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="{{url('assets/stylesheets/theme.min.css')}}" data-skin="default">
    <link rel="stylesheet" href="{{url('assets/stylesheets/theme-dark.min.css')}}" data-skin="dark">
    <link rel="stylesheet" href="{{url('assets/stylesheets/custom.css')}}">
    <link rel="stylesheet" href="{{url('assets/stylesheets/style.css')}}">
    <script>
      var skin = localStorage.getItem('skin') || 'default';
      var disabledSkinStylesheet = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
      // Disable unused skin immediately
      disabledSkinStylesheet.setAttribute('rel', '');
      disabledSkinStylesheet.setAttribute('disabled', false);
      // add loading class to html immediately
      document.querySelector('html').classList.add('loading');
    </script><!-- END THEME STYLES -->
    <style>
    .incident-container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    .incident-details {
        margin-top: 20px;
    }

    .incident-info {
        margin-bottom: 10px;
    }

    .back-to-list {
        margin-top: 20px;
    }

    .back-to-list a {
        display: inline-block;
        padding: 10px 20px;
        background-color: #3490dc;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
    }
</style>
  </head>
  <body>
    <!-- .app -->
    <div class="app">
   
      <!-- .app-header -->
      @include('layouts.header')


      <!-- .app-aside -->
      
      <aside class="app-aside app-aside-expand-md app-aside-light">
        <!-- .aside-content -->
        <div class="aside-content">
          <!-- .aside-header -->
          <header class="aside-header d-block d-md-none">
            <!-- .btn-account -->
            <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside"><span class="user-avatar user-avatar-lg"><img src="assets/images/avatars/profile.jpg" alt=""></span> <span class="account-icon"><span class="fa fa-caret-down fa-lg"></span></span> <span class="account-summary"><span class="account-name"> {{ Auth::user()->name }}</span> </span></button> <!-- /.btn-account -->
            <!-- .dropdown-aside -->
            <div id="dropdown-aside" class="dropdown-aside collapse">
              <!-- dropdown-items -->
              <div class="pb-3">
                 <a class="dropdown-item" href="auth-signin-v1.html"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
                <div class="dropdown-divider"></div>
              </div><!-- /dropdown-items -->
            </div><!-- /.dropdown-aside -->
          </header><!-- /.aside-header -->
          <!-- .aside-menu -->
          <div class="aside-menu overflow-hidden">
            <!-- .stacked-menu -->
            @include('layouts.aside')
          </div><!-- /.aside-menu -->
          <!-- Skin changer -->
          
        </div><!-- /.aside-content -->
        
      </aside>
      
      <!-- /.app-aside -->

      <!-- .app-main -->
      <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
          <!-- .page -->
          <div class="page">
            <!-- .page-inner -->
            <div class="page-inner">
              <!-- .page-title-bar -->
              
              <!-- .page-section -->

              <div class="page-section">
                <!-- .section-block -->

                @yield('content')
                <div class="section-block">
                  
                </div>
                
                <!-- /.section-block -->
                </div>           <!-- /.page-section -->
            </div><!-- /.page-inner -->
          </div><!-- /.page -->
        </div><!-- .app-footer -->
        @include('layouts.footer')
        <!-- /.app-footer -->
        <!-- /.wrapper -->
      </main><!-- /.app-main -->

    </div><!-- /.app -->
    @include('layouts.plugins')
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-116692175-1');
    </script>
  </body>

</html>