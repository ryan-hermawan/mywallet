<? session_start();
if ($_COOKIE['remember'] == 1)
{
   $_SESSION['warning'] = TRUE;
}
if (isset ($_SESSION['adminwallet']))
header ('location: adminHome.php');
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
    <link href="css/font-awesome.css" rel="stylesheet" media="screen">
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

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


    <title>Login &middot; RFWallet</title>

  </head>

  <body>
    <div class="container">
      <?
        if (isset ($_SESSION['warning']))
        {
          echo '<div class="alert alert-block"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><strong>Warning</strong></h4>'.$_SESSION['warning'].'</div>';
          unset($_SESSION['warning']);
        }
        if (isset ($_SESSION['error']))
        {
          echo '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><strong>Error</strong></h4>'.$_SESSION['error'].'</div>';
          unset($_SESSION['error']);
        }
        if (isset ($_SESSION['success']))
        {
          echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><strong>Success</strong></h4>'.$_SESSION['success'].'</div>';
          unset($_SESSION['success']);
        }
        if (isset ($_SESSION['info']))
        {
          echo '<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><strong>Information</strong></h4>'.$_SESSION['info'].'</div>';
          unset($_SESSION['info']);
        }
      ?>


      <div class="text-center">
        <h1>One Account. All Bank Account.</h1>
        <h4>Your Financial Assistent.</h4>
      </div>

      <form class="form-signin" action="proses.php" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" class="input-block-level" id="txtUsernameWallet" name="txtUsernameWallet" placeholder="Username" required autofocus>
        <input type="password" class="input-block-level" id="txtPasswordWallet" name="txtPasswordWallet" placeholder="&bull;&bull;&bull;&bull;&bull;&bull;" required>
        <input type="submit" class="btn btn-primary btn-block" name="btnLoginAdminWallet" value="Sign in" />
        <!-- <button class="btn btn-primary" type="submit">
           Sign in
           <i class="icon-circle-arrow-right"></i>
        </button> -->
      </form>


    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
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
