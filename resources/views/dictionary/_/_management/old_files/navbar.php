<nav class="navbar navbar-expand-sm bg-light navbar-light sticky-top">

  <a class="navbar-brand" href="#">
    <img src="images/profile-jarrette.jpg" alt="Logo" style="width:40px;">
  </a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">
		  <i class="fas fa-tachometer-alt"></i> Dashboard
		</a>
      </li>
  	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          <i class="fas fa-book-open"></i> LEXICON
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="">view lexicon</a>
          <a class="dropdown-item" href="entrySingle.php">single entry</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
		  <i class="fas fa-quote-left"></i> TEXTS
		</a>
      </li>
    </ul>
	<a href="suggestions.php" type="button" class="btn btn-warning">Suggestions
	    <span class="badge badge-danger">
	        <?php       $query_count = @mysql_query("SELECT COUNT(*) FROM suggestions WHERE headword_id IS NULL") or die(mysql_error());
                        $count = mysql_fetch_array($query_count);
                        echo $count[0]; ?>
	    </span>
	</a>
  </div>

</nav>