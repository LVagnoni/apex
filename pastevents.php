<!doctype html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>apexart Past Events</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/icons/favicon.png" />
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- All CSS files included -->
    <link rel="stylesheet" href="css/elements.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">
    <script src="js/modernizr-2.8.3.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9ZR7Z9GRJQ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9ZR7Z9GRJQ');
</script>
    <style>
        h5.footertext {
            text-transform: none !important;
            font-weight: bold !important;
        }
        .button-boxed {
            background: #232323 none repeat scroll 0 0;
            border: 1px solid #232323;
            display: inline-block;
            color: #ffffff;
            font-size: 12px;
            font-weight: 700;
            height: 25px;
            letter-spacing: 1px;
            line-height: 25px;
            padding: 0 10px;
            text-transform: uppercase;
            transition: .3s;
        }
        h4 {text-transform: none;}
        img.special {
            width: 100%;
            max-width: 300px !important;
        }
        p {
        font-style: normal !important;
    }
    p.a {
        color: white !important;
    }
    </style>
</head>

<body>
    <!-- Main wrapper start -->
    <div class="wrapper">
        <? require ('header-test.php'); ?>
        <div class="fixed-header-space2"></div>
        <!-- Main content area start -->
         <div class="content">
            <!-- Breadcrumb area start -->
            <div class="breadcrumb-area gray-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="breadcrumb-content">
                                <div class="breadcrumb-text-wrapper">
                                    <h2 class="page-name"><br>Past Events</h2>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcrumb area end -->
            
                        <?
                        include('connect.php');
                        include ('pasteventspop.php');
                        ?>
        </div>
                    

        <!-- Main content area end -->
        <!-- Footer area start -->

        <!-- Footer area end -->
    </div>
    <!-- Main wrapper end -->
    <!-- All JS files included -->
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

</html>