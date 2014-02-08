<? session_start();
if (!isset($_SESSION['adminWallet']))
{
  $_SESSION['error'] = "Please sign in first";
  header("location: adminLogin");
}
else { 
  // unset($_SESSION['adminWallet']);
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
  <head>
    <link rel="icon" type="image/ico" href="favicon.ico"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="Account Manager Ledger" />
    <meta name="author" content="Ryan Hermawan" />

    <!-- Bootplus -->
    <link href="css/bootplus.css" rel="stylesheet" media="screen">
    <link href="css/bootplus-responsive.css" rel="stylesheet" media="screen">

    <!-- FontAwesome -->
    <link href="css/font-awesome-ie7.min.css" rel="stylesheet" media="screen">
    <style type="text/css">
     @font-face {
        font-family: 'FontAwesome';
        src: url('font/fontawesome-webfont.eot")?v=3.1.1');
        src: url('font/fontawesome-webfont.eot")?#iefix&v=3.1.1') format('embedded-opentype'),
        url('font/fontawesome-webfont.woff")?v=3.1.1') format('woff'),
        url('font/fontawesome-webfont.ttf")?v=3.1.1') format('truetype');
        font-weight: normal;
        font-style: normal;
     }
    </style>

    <!--[if IE 7]>
    <link rel="stylesheet" href="css/bootplus-ie7.min.css">
    <![endif]-->

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


    <title>Home Admin &middot; Wallet Street</title>

  </head>

  <body>
    <? include("koneksi.php");
      // $_SESSION['adminWallet']=1;
      // $_SESSION['welcome']=1;
      $query = mysql_query("select * from admin where ID='".$_SESSION['adminWallet']."'");
      $admin = mysql_fetch_array($query);
    ?>
    <div class="container"> <!-- container body -->
      
      <div id="header">
      <!-- *************************navbar***************************** -->
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>

            <? $_SESSION['activeLink'] = 1; ?>
            <? include("navbarBrand.php"); ?>
            <? include("navbar.php"); ?>
          
          </div> <!-- container -->
        </div> <!-- navbar-inner -->
      </div> <!-- navbar navbar-fixed-top -->
      <!-- *************************navbar***************************** -->
      </div> <!-- id="header" -->

      <div id="body" style="margin-top: 10px;">
       <?
        // $_SESSION['error']="hello";
        // echo $_SESSION['warning'];
          if (isset ($_SESSION['welcome']))
          {
            echo '
              <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4>Hello, <strong>'.$admin['NAME'].'</strong></h4></div>';
            unset($_SESSION['welcome']);
          }
          if (isset ($_SESSION['warning']))
          {
            echo '
              <div class="alert alert-block">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><strong>Warning !</strong></h4>'.$_SESSION['warning'].'</div>';
            unset($_SESSION['warning']);
          }
          if (isset ($_SESSION['error']))
          {
            echo '
              <div class="alert alert-error">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><strong>Error !!!</strong></h4>'.$_SESSION['error'].'</div>';
            unset($_SESSION['error']);
          }
          if (isset ($_SESSION['success']))
          {
            echo '
              <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><strong>Success</strong></h4>'.$_SESSION['success'].'</div>';
            unset($_SESSION['success']);
          }
          if (isset ($_SESSION['info']))
          {
            echo '
              <div class="alert alert-info">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><strong>Information</strong></h4>'.$_SESSION['info'].'</div>';
            unset($_SESSION['info']);
          }
        ?>

      <!-- <div class="container"> -->
        <div class="container-fluid">
          <div class="row-fluid">
            <div class="span3">
              <!--Sidebar content-->
              <ul class="nav nav-list">
                <li class="active"><a href="#global"> Global styles</a></li>
                <li class=""><a href="#gridSystem"> Grid system</a></li>
                <li class=""><a href="#fluidGridSystem"> Fluid grid system</a></li>
                <li class=""><a href="#layouts"> Layouts</a></li>
                <li class=""><a href="#responsive"> Responsive design</a></li>
              </ul>
            </div>
            <div class="span9">
              <!--Body content-->
              <div class="row-fluid">
                <dl class="dl-horizontal">
                  <dt>Anda login sebagai :</dt><dd><? echo $admin['NAME']; ?></dd>
                  <dt>Login terakhir pada :</dt><dd><? $tanggal=date_create($admin['LAST_LOGIN']); echo $_SESSION['currLogin']; //date_format($tanggal,"d-m-Y H:i:s"); ?></dd>
                </dl>
              </div>
            </div>
          </div> <!-- row fluid -->
        </div> <!-- container-fluid -->
      <!-- </div> -->
      </div> <!-- id="body" -->



    </div> <!-- container body -->


    <div class="container" style="margin-top: 25px;">
      <div id="footer">
        <!-- *************************footer***************************** -->
        <div class="navbar navbar-static-bottom">
          <div class="navbar-inner">
            <div class="container">
              <div>asdfasdfasd</div>
            
            </div> <!-- container -->
          </div> <!-- navbar-inner -->
        </div> <!-- navbar navbar-fixed-top -->
        <!-- *************************footer***************************** -->
      </div>
    </div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster--> 
    <script src="jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
  </body>
</html>
