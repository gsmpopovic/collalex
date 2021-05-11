<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3" action={{route("search-lexicon")}} method="POST">
      <div class="input-group input-group-sm">            
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <input class="form-control form-control-navbar" type="search" name="nav-searchbar" placeholder="Search" aria-label="Search" required>
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
  </nav>
