  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="dist/img/BantayanonLDPLogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><strong>Bantayanon</strong>LDP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/_assets/images/<?php echo $uid; ?>-160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="profile.php" class="d-block">Profile</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.php" class="nav-link <?php if ($page=="index.php") {echo 'active';} ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="lexicon.php" class="nav-link <?php if ($page=="lexicon.php") {echo 'active';} ?>">
              <i class="nav-icon fas fa-book-open"></i>
              <p>
                Lexicon
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="texts.php" class="nav-link <?php if ($page=="texts.php") {echo 'active';} ?>">
              <i class="nav-icon fas fa-quote-left"></i>
              <p>
                Texts
              </p>
            </a>
          </li>
          <li class="nav-header">OTHER PAGES</li>
          <li class="nav-item">
            <a href="configuration.php" class="nav-link <?php if ($page=="configuration.php") {echo 'active';} ?>">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Configuration
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="posts.php" class="nav-link <?php if ($page=="posts.php") {echo 'active';} ?>">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Website Posts
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="contacts.php" class="nav-link <?php if ($page=="contacts.php") {echo 'active';} ?>">
              <i class="nav-icon fas fa-address-book"></i>
              <p>
                Members
              </p>
            </a>
          </li>
          <li class="nav-header">IMPORT ENTRIES</li>
          <li class="nav-item">
            <a href="contacts.php" class="nav-link <?php if ($page=="entry_bulk.php") {echo 'active';} ?>">
              <i class="nav-icon fas fa-file-import"></i>
              <p>
                Bulk Entry
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="contacts.php" class="nav-link <?php if ($page=="entry_rwc.php") {echo 'active';} ?>">
              <i class="nav-icon fas fa-cloud-upload-alt"></i>
              <p>
                Rapid Word Collection
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="contacts.php" class="nav-link <?php if ($page=="entry_wordlist.php") {echo 'active';} ?>">
              <i class="nav-icon fas fa-align-left"></i>
              <p>
                Word Lists
              </p>
            </a>
          </li>
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Important</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Informational</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>