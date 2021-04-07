  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light sticky-top">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link"><i class="fas fa-arrow-circle-left"></i> Back to main site</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3" method="GET" action="<?php echo $page; ?>">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" name="q">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

<?php

if ($uid=="jarrette")
{
    echo '
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      
            <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comment-dots"></i>
          <span class="badge badge-warning navbar-badge">';
    $query_count = @mysql_query("SELECT COUNT(*) FROM suggestions WHERE headword_id IS NULL") or die(mysql_error());
    $count = mysql_fetch_array($query_count);
    echo $count[0];
    echo '      </span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">Suggestions</span>
          <div class="dropdown-divider"></div>
            <p>[see template for formatting and ideas]</p>
          <div class="dropdown-divider"></div>
          <a href="suggestions.php" class="dropdown-item dropdown-footer">See all suggestions...</a>
        </div>
      </li>
      <!-- Tasklist Dropdown Menu -->
      
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-tasks"></i>
          <span class="badge badge-info navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">Tasklist</span>
          <div class="dropdown-divider"></div>
            <p>[see template for formatting and ideas]</p>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See all tasks...</a>
        </div>
      </li>
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-danger navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">Notifications</span>
          <div class="dropdown-divider"></div>
            <p>[see template for formatting and ideas]</p>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See all notifications...</a>
        </div>
      </li>
    </ul>';
}

?>



  </nav>
  <!-- /.navbar -->