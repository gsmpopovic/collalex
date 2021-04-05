<?php include 'assets/variables.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Collapsed Sidebar</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini sidebar-collapse">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
<?php include 'assets/navbar.php'; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
<?php include 'assets/sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Lexicon</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/index2.php">Dashboard</a></li>
              <li class="breadcrumb-item active">Edit Lexicon</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<!-- START MAIN CONTENT -->
    <section class="content">
      <div class="row">
          
<!-- START LEFT COLUMN -->
        <div class="col-md-4">

<!-- START FILTER CARD -->
          <div class="card card-primary collapsed-card">
            <!-- header -->
            <div class="card-header">
              <h3 class="card-title">Filter below results:</h3>
                          <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                            </button>
                          </div>
            </div>
            
            <!-- body of card -->
            <div class="card-body p-0">
                
              <ul class="nav nav-pills flex-column">
            
                <!-- search by letter -->
                <li class="nav-item">
                    <nav aria-label="alphabet">
                      <ul class="pagination justify-content-center flex-wrap">
                        <li class="page-item "><a class="page-link" href="lexicon.php?l=a">a</a></li>
                        <li class="page-item "><a class="page-link" href="lexicon.php?l=b">b</a></li>
                        <li class="page-item "><a class="page-link" href="lexicon.php?l=k">k</a></li>
                        <li class="page-item "><a class="page-link" href="lexicon.php?l=d">d</a></li>
                        <li class="page-item "><a class="page-link" href="lexicon.php?l=g">g</a></li>
                        <li class="page-item "><a class="page-link" href="lexicon.php?l=h">h</a></li>
                        <li class="page-item "><a class="page-link" href="lexicon.php?l=i">i</a></li>
                        <li class="page-item "><a class="page-link" href="lexicon.php?l=l">l</a></li>
                        <li class="page-item "><a class="page-link" href="lexicon.php?l=m">m</a></li>
                        <li class="page-item "><a class="page-link" href="lexicon.php?l=n">n</a></li>
                        <li class="page-item "><a class="page-link" href="lexicon.php?l=p">p</a></li>
                        <li class="page-item "><a class="page-link" href="lexicon.php?l=r">r</a></li>
                        <li class="page-item "><a class="page-link" href="lexicon.php?l=s">s</a></li>
                        <li class="page-item "><a class="page-link" href="lexicon.php?l=t">t</a></li>
                        <li class="page-item "><a class="page-link" href="lexicon.php?l=u">u</a></li>
                        <li class="page-item "><a class="page-link" href="lexicon.php?l=w">w</a></li>
                        <li class="page-item "><a class="page-link" href="lexicon.php?l=y">y</a></li>
                      </ul>
                    </nav>
                </li>
                
                <!-- limit results -->
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <form action="lexicon.php" method="get" class="form-inline">
                        <label>Limit&nbsp;</label>
                        <select class="form-control" onchange="this.form.submit()" name="wordlimit" align="right">
                          <option value="10">10</option>
                          <option value="25">25</option>
                          <option value="50" selected>50</option>
                        </select>
                          <label class="form-check-label">&nbsp;&nbsp;&nbsp;reverse order&nbsp;</label>
                          <input class="form-check-input" type="checkbox" checked>
                    </form>
                  </a>
                </li>
                
                <!-- semantic domain -->
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <form action="lexicon.php" method="get">
                        <select class="form-control" onchange="this.form.submit()" name="semdom">
                          <option value="0.0">SEMANTIC DOMAIN</option>
                          <option value="1.1">1.1 Sky</option>
                          <option value="1.2" selected>1.2 World</option>
                          <option value="1.3">1.3 Water</option>
                          <option value="1.4">1.4 Living Things</option>
                          <option value="1.5">1.5 Plant</option>
                        </select>
                    </form>
                  </a>
                </li>
                
                <!-- template item -->
                <li class="nav-item">
                  <a href="#" class="nav-link">
                      OTHER
                  </a>
                </li>
                
                <!-- advanced filters -->
                <li class="nav-item">
                  <a href="#" class="nav-link">
                      ADVANCED FILTERS
                  </a>
                </li>
              </ul>
            </div>
          </div>
<!-- END FILTER CARD -->

<!-- START RESULTS CARD -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Search Results:</h3>

                <div class="card-tools">
                  <ul class="pagination pagination-sm float-right">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                  </ul>
                </div>
            </div>
            <div class="card-body p-0">
              <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle text-danger"></i>
                    <strong>baguybaguy</strong> [baguy-báguy]
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle text-warning"></i>
                    <strong>kalabira</strong> [ka.la.bí.ra]
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle text-primary"></i>
                    <strong>agigising</strong> [a.gi.gí.siŋ]
                  </a>
                </li>
              </ul>
            </div>
          </div>
<!-- END RESULTS CARD -->

        <a href="#" class="btn btn-warning btn-block mb-3">Suggest new word</a>
        
        </div>
<!-- END LEFT COLUMN -->

<!-- START RIGHT COLUMN -->
        <div class="col-md-8">

<!-- START HEADWORD CARD -->
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary card-outline">
            <!-- card header -->
            <div class="card-header">
              <h3 class="card-title">Headword</h3>
            </div>
            
            <!-- card body -->
				
				<div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-sm-5">
					  <div class="form-floating mb-3">
					    <input type="email" class="form-control" id="floatingInput" placeholder="Spelling of word" value="baguybaguy">
						<label for="floatingInput">Spelling</label>
					  </div>
                    </div>
                    <div class="col-sm-5">
					  <div class="form-floating mb-3">
					    <input type="email" class="form-control" id="floatingInput" placeholder="Pronunciation of word" value="baguy-báguy">
						<label for="floatingInput">Pronunciation</label>
					  </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                          <label for="customCheckbox1" class="custom-control-label">vulgar</label><br>
                          <label for="customCheckbox1" class="custom-control-label">Elementary Dictionary</label>
                        </div>
                    </div>
                  </div>
                </form>
              </div>

            <!-- card footer -->
              <div class="card-footer p-0">
                  <div class="mailbox-controls">
                    <div class="btn-group">
                      <button type="button" class="btn btn-default btn-sm"><i class="fas fa-volume-up"></i> upload pronunciation</button>
                      <button type="button" class="btn btn-default btn-sm"><i class="fas fa-people-arrows"></i> add etymology</button>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
<!-- END HEADWORD CARD -->

<!-- START SENSE CARD -->
            <div class="row">
                <div class="col-md-12">
                          <div class="card card-info card-outline collapsed-card">
            <div class="card-header">
              <h3 class="card-title">Sense (Meaning) #1 of <strong>baguybaguy</strong> [baguy-báguy] <em>noun</em> <sub>ENG</sub> skull, <sub>CEB</sub> bagulbágul</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
            </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
					
					
					<div class="row g-2">
					  <div class="col-md">
						<div class="form-floating">
						  <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
							  <option>empty</option>
							  <option>noun</option>
							  <option>verb</option>
							  <option>case marker</option>
							  <option>aspect particle</option>
							  <option>temporal particle</option>
						  </select>
						  <label for="floatingSelectGrid">Syntactic Category</label>
						</div>
					  </div>
					  <div class="col-md">
						<div class="form-floating">
						  <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
							  <option>empty</option>
							  <option>1.1 Sky</option>
							  <option>1.2 World</option>
							  <option>1.3 Water</option>
							  <option>1.4 Living Things</option>
							  <option>1.5 Plant</option>
						  </select>
						  <label for="floatingSelectGrid">Semantic Domain</label>
						</div>
					  </div>
					</div>
					
					
					
                  <div class="row g-2">
                    <div class="col-md">
					  <div class="form-floating mb-3">
					    <input type="email" class="form-control" id="floatingInput" placeholder="Spelling of word" value="baguybaguy">
						<label for="floatingInput">English gloss</label>
					  </div>
                    </div>
                    <div class="col-md">
					  <div class="form-floating mb-3">
					    <input type="email" class="form-control" id="floatingInput" placeholder="Pronunciation of word" value="baguy-báguy">
						<label for="floatingInput">Cebuano gloss</label>
					  </div>
                    </div>
                  </div>
					
					
                </form>
              </div>
            <!-- /.card-body -->
            <div class="card-footer p-0">
              <div class="mailbox-controls">
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i> delete</button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fas fa-arrows-alt-v"></i> move up or down</button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fas fa-paragraph"></i> add example</button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fas fa-image"></i> upload image</button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fas fa-atom"></i> add scientific name</button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>

              </div>
            </div>
          </div>
                </div>
            </div>
<!-- END SENSE CARD -->

<!-- START SENSE CARD -->
            <div class="row">
                <div class="col-md-12">
                          <div class="card card-info card-outline collapsed-card">
            <div class="card-header">
              <h3 class="card-title">Sense (Meaning) #2</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
            </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-sm-2">
                      <!-- text input -->
                      <!-- select -->
                      <div class="form-group">
                        <label>Syn Cat</label>
                        <select class="form-control">
                          <option>empty</option>
                          <option>noun</option>
                          <option>verb</option>
                          <option>case marker</option>
                          <option>aspect particle</option>
                          <option>temporal particle</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>English gloss</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Cebuano gloss</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Sem Dom</label>
                        <select class="form-control">
                          <option>empty</option>
                          <option>1.1 Sky</option>
                          <option>1.2 World</option>
                          <option>1.3 Water</option>
                          <option>1.4 Living Things</option>
                          <option>1.5 Plant</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            <!-- /.card-body -->
            <div class="card-footer p-0">
              <div class="mailbox-controls">
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i> delete</button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fas fa-arrows-alt-v"></i> move up or down</button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fas fa-paragraph"></i> add example</button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fas fa-image"></i> upload image</button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fas fa-atom"></i> add scientific name</button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>

              </div>
            </div>
          </div>
                </div>
            </div>
<!-- END SENSE CARD -->
        </div>
<!-- END RIGHT COLUMN -->

      </div>
    </section>
<!-- END MAIN CONTENT -->

  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
