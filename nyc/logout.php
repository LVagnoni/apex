

 	
<?php
  session_start();
  if (isset($_COOKIE[session_name()])) {
            setcookie(session_name(), '', time()-42000, '/');
        }
  session_destroy();
  ?>

<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>apexart Open Calls - Juror Logout</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../img/icons/favicon.png" />
    <link rel="apple-touch-icon" href="../apple-touch-icon.png">
    <!-- All CSS files included -->
    <link rel="stylesheet" href="../css/elements.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="../css/custom.css">
    <script src="../js/modernizr-2.8.3.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9ZR7Z9GRJQ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag(‘js’, new Date());

  gtag('config', 'G-9ZR7Z9GRJQ');
</script>
<style>
    .input[type=text] {
  color: #232323 !important;
  background-color: #232323 !important;
}

.lowercase {
    text-transform: none !important;
}
</style>
</head>

<body>

   
    <!-- Main wrapper start -->
    <div class="wrapper">
        <!-- Header area -->
        <?
            include ('../header-test.php');
        ?>
        <!-- End header area -->
        <div class="fixed-header-space"></div>
        <!-- Main content area start -->
        <div class="content">
           <div class="breadcrumb-area gray-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                        </div>
                    </div>
                </div>
            </div>
           
    <!-- Service section start -->
<br><br><br>
            <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="xboot-tab-area clearfix">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="classroom-guide">
                                    
                                    <p>You are now logged out.<br><br><a href="https://apexart.org">Return to apexart website</a> or <a href='./login.php'>Log In</a></p>

                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!-- All JS files included -->
    <script src="../js/plugins.js"></script>
    <script src="../js/main.js"></script>
  </body>
 </div>
</html>