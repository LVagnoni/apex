
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>apexart Open Calls</title>
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
h4 {
    text-transform: none !important;
}
</style>
</head>

<body>

    <!--Loader-->
    <!-- <div class="xboot-loader">
        <div class="loader-wrapper">
            <div class="loader-content">
                <div class="loader-dot dot-1"></div>
                <div class="loader-dot dot-2"></div>
                <div class="loader-dot dot-3"></div>
                <div class="loader-dot dot-4"></div>
                <div class="loader-dot dot-5"></div>
                <div class="loader-dot dot-6"></div>
                <div class="loader-dot dot-7"></div>
                <div class="loader-dot dot-8"></div>
                <div class="loader-dot dot-center"></div>
            </div>
        </div>
    </div> -->
    <!-- Loader end -->
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
           <div class="container">
                <div class="row">
                        <div class="col-xs-12">
                            
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
		
    	
<?php
 	error_reporting(E_ALL);
	include ('connect.php');
	
	if (isset($_SESSION["userID"])){
		echo '<br>Logged in as '.$_SESSION["username"].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php">Log Out</a><br><br>';
	}
	
		
			$xx=$_GET["sub"];	
			$query="SELECT * FROM intl23_proposal WHERE id=$xx";
		
	//$query="SELECT * FROM proposal";
	$result = mysql_query($query, $conn); 
	
	if (!$result) {
	    echo 'Could not run query: ' . mysql_error();
	    exit;
	}
	while ($row = mysql_fetch_assoc($result)) {
	       
		echo "<table width=850 border=0 cellpadding=0 align='center'>";
		echo "<tr><td><p>INTL 23 Submission View</p></td></tr>";
		echo "<tr><td align=left valign=top width='50' class='standardTextLg';'><p>#".$row["id"]."</p></td>
                ";
		echo "<td class='grayback' align=left valign=top width='800' class='standardTextLg' style='text-transform: none;'><em><h4>".$row["title"]."</em></h4></td></tr>";
echo"<tr><td align=left valign=top class='standardTextLg';'><p>".$row["franchise_city"].",&nbsp;".$row["franchise_country"]."</p></td></tr>";
	   
        //echo "<tr><td width='850'><p>Submitted by:&nbsp;".$row["submitters"]."</p></td></tr>";

		echo "<tr>";
		
		echo "<td colspan='2' class='standardBlack' align=left><br><p>".nl2br(($row["content"]))."";
	  
	  	echo "</p><br><br><tr>&nbsp;</tr>";
	  	echo "<tr>&nbsp;</tr>";
	  	echo "<tr>&nbsp;</tr>";
			
		  echo "</table>";


		



	
	}
	
	mysql_free_result($result);
	
		
?>	</td>
        </tr>
    </TABLE></td>
  </tr>
    </table>
    </td>
  </tr>
</table>
    
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