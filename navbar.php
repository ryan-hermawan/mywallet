<? include("koneksi.php");
  echo '
    <div class="nav-collapse collapse">
      <ul class="nav">';



  //left navbar
  $query = mysql_query("select * from navbar where SEPARATED='0' order by ID asc");
  $activeLink = $_SESSION['activeLink'];
  $counterID = 1;

  while ($result = mysql_fetch_array($query)) {
    $listNavbar = "";
    if ($result['SUB'] == '0') {
      if ($result['ID'] == $activeLink) {
        $listNavbar = '<li class="active"><a href="'.$result['LINK'].'">'.$result['TEXT'].'</a></li>';
      }
      else {
        $listNavbar = '<li><a href="'.$result['LINK'].'">'.$result['TEXT'].'</a></li>';
      }
    }
    else {
      if ($result['ID'] == $activeLink) {
        $listNavbar = '<li class="dropdown active">';
      }
      else {
        $listNavbar = '<li class="dropdown">';
      }

      $listNavbar = $listNavbar. 
          '<a href="#" class="dropdown-toggle" data-toggle="dropdown">'.$result['TEXT'].' <b class="caret"></b></a>'.
          '<ul class="dropdown-menu">';

      $querySubDropDown=mysql_query("select * from navbarsub where ID_PARENT='".$result[ID]."' order by ID asc");
      while ($resultSub = mysql_fetch_array($querySubDropDown)) {
        $listNavbar = $listNavbar.
          '<li><a href="'.$resultSub['LINK'].'">'.$resultSub['TEXT'].'</a></li>';
      }

      $listNavbar = $listNavbar.'</ul></li></ul></div>';
    }

    echo $listNavbar;
  }



  //pull right navbar
  echo '
    <div class="nav-collapse collapse">
    <ul class="nav pull-right">
    <li class="divider-vertical"></li>';
  $query = mysql_query("select * from navbar where SEPARATED='1' order by ID asc");
  $activeLink = 0;

  while ($result = mysql_fetch_array($query)) {
    $listNavbar = "";
    if ($result['SUB'] == '0') {
      if ($result['ID'] == $activeLink) {
        $listNavbar = '<li class="active"><a href="'.$result['LINK'].'">'.$result['TEXT'].'</a></li>';
      }
      else {
        $listNavbar = '<li><a href="'.$result['LINK'].'">'.$result['TEXT'].'</a></li>';
      }
    }
    else {
      if ($result['ID'] == $activeLink) {
        $listNavbar = '<li class="dropdown active">';
      }
      else {
        $listNavbar = '<li class="dropdown">';
      }

      $listNavbar = $listNavbar. 
          '<a href="#" class="dropdown-toggle" data-toggle="dropdown">'.$result['TEXT'].' <b class="caret"></b></a>'.
          '<ul class="dropdown-menu">';

      $querySubDropDown=mysql_query("select * from navbarsub where ID_PARENT='".$result[ID]."' order by TEXT asc");
      while ($resultSub = mysql_fetch_array($querySubDropDown)) {
        $listNavbar = $listNavbar.
          '<li><a href="'.$resultSub['LINK'].'">'.$resultSub['TEXT'].'</a></li>';
      }

      $listNavbar = $listNavbar.'</ul></li>';
    }

    echo $listNavbar;
  }



  echo '
      </ul>
    </div><!--/.nav-collapse collapse -->';
?>



<!-- ===================== HASIL ============================ -->
            <!-- <a class="brand" href="#">Wallet Street</a>
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="border1 active"><a href="#">Home</a></li>
                <li class=""><a href="#about">About</a></li>
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
            </div> --><!--/.nav-collapse collapse -->

            <!-- <div class="nav-collapse collapse">
              <ul class="nav pull-right">
                <li class="divider-vertical"></li>
                <li class=""><a href="#">Sign Out</a></li>
              </ul>
            </div> --><!--/.nav-collapse -->