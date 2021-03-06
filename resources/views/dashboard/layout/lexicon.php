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
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
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
                <nav aria-label="alphabet">
                  <ul class="pagination justify-content-center">
                <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">FILTER</a></li>
                <li class="page-item "><a class="page-link" href="?limit=50">LIMIT 50</a></li>
                <li class="page-item active"><a class="page-link" href="suggestions.php">ALL</a></li>
                <li class="page-item "><a class="page-link" href="?l=a">a</a></li>
                <li class="page-item "><a class="page-link" href="?l=b">b</a></li>
                <li class="page-item "><a class="page-link" href="?l=k">k</a></li>
                <li class="page-item "><a class="page-link" href="?l=d">d</a></li>
                <li class="page-item "><a class="page-link" href="?l=g">g</a></li>
                <li class="page-item "><a class="page-link" href="?l=h">h</a></li>
                <li class="page-item "><a class="page-link" href="?l=i">i</a></li>
                <li class="page-item "><a class="page-link" href="?l=l">l</a></li>
                <li class="page-item "><a class="page-link" href="?l=m">m</a></li>
                <li class="page-item "><a class="page-link" href="?l=n">n</a></li>
                <li class="page-item "><a class="page-link" href="?l=p">p</a></li>
                <li class="page-item "><a class="page-link" href="?l=r">r</a></li>
                <li class="page-item "><a class="page-link" href="?l=s">s</a></li>
                <li class="page-item "><a class="page-link" href="?l=t">t</a></li>
                <li class="page-item "><a class="page-link" href="?l=u">u</a></li>
                <li class="page-item "><a class="page-link" href="?l=w">w</a></li>
                <li class="page-item "><a class="page-link" href="?l=y">y</a></li>
                  </ul>
                </nav>
	  </div>
		
      <div class="row">
			<div id="accordion">
			  <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
			  <div class="card card-olive card-outline">
				<div class="card-header">
				  <h4 class="card-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
					  <strong>aga</strong> [??.ga] 1. <em>noun</em> <sub>ENG</sub> morning, <sub>CEB</sub> buntag; 2. <em>verb</em> <sub>ENG</sub> be morning, <sub>CEB</sub> buntag
					</a>
				  </h4>
				</div>
				<div id="collapseOne" class="panel-collapse collapse in">
				  <div class="card-body">
					  <form role="form">
					  
						  <div class="row">
							<div class="col-sm-5">
							  <!-- text input -->
							  <div class="form-floating mb-3">
								<input type="email" class="form-control" id="floatingInput" placeholder="Spelling of word" value="aga">
								<label for="floatingInput">Spelling</label>
							  </div>
							</div>
							<div class="col-sm-5">
							  <!-- text input -->
							  <div class="form-floating mb-3">
								<input type="email" class="form-control" id="floatingInput" placeholder="Spelling of word" value="??.ga">
								<label for="floatingInput">Pronunciation</label>
							  </div>
							</div>
							<div class="col-sm-2">
								<div class="custom-control custom-checkbox">
								  <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
								  <label for="customCheckbox1" class="custom-control-label">vulgar</label>
								</div>
							</div>
						  </div>
					  
					  </form>
					  <!-- START SENSE CARD -->
            <div class="row">
                <div class="col-md-12">
                          <div class="card card-info card-outline collapsed-card">
            <div class="card-header">
              <h3 class="card-title">Sense #1: <em>noun</em> <sub>ENG</sub> morning, <sub>CEB</sub> buntag</h3>
				<div class="card-tools">
				  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
				</div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
					
					
					<div class="row g-2">
					  <div class="col-sm-3">
						<div class="form-floating">
						  <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
							  <option>empty</option>
							  <option selected>noun</option>
							  <option>verb</option>
							  <option>case marker</option>
							  <option>aspect particle</option>
							  <option>temporal particle</option>
						  </select>
						  <label for="floatingSelectGrid">Syntactic Category</label>
						</div>
					  </div>
					  <div class="col-sm-3">
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
					  <div class="col-sm-3">
						  <div class="form-floating mb-3">
							<input type="email" class="form-control" id="floatingInput" placeholder="Spelling of word" value="morning">
							<label for="floatingInput">English gloss</label>
						  </div>
					</div>
					  <div class="col-sm-3">
					  <div class="form-floating mb-3">
						<input type="email" class="form-control" id="floatingInput" placeholder="Pronunciation of word" value="buntag">
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
                          <div class="card card-info card-outline collapsed-card">
            <div class="card-header">
              <h3 class="card-title">Sense #2: <em>verb</em> <sub>ENG</sub> be morning, <sub>CEB</sub> buntag</h3>
				<div class="card-tools">
				  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
				</div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
					
					
					<div class="row g-2">
					  <div class="col-sm-3">
						<div class="form-floating">
						  <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
							  <option>empty</option>
							  <option>noun</option>
							  <option selected>verb</option>
							  <option>case marker</option>
							  <option>aspect particle</option>
							  <option>temporal particle</option>
						  </select>
						  <label for="floatingSelectGrid">Syntactic Category</label>
						</div>
					  </div>
					  <div class="col-sm-3">
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
					  <div class="col-sm-3">
						  <div class="form-floating mb-3">
							<input type="email" class="form-control" id="floatingInput" placeholder="Spelling of word" value="be morning">
							<label for="floatingInput">English gloss</label>
						  </div>
					</div>
					  <div class="col-sm-3">
					  <div class="form-floating mb-3">
						<input type="email" class="form-control" id="floatingInput" placeholder="Pronunciation of word" value="buntag">
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
					  <div class="row"><div class="col-sm-3"><button type="button" class="btn btn-block btn-info"><i class="far fa-plus-square"></i> add sense</button></div></div>
				  </div>
				</div>
			  </div>
			  <div class="card card-warning card-outline">
				<div class="card-header">
				  <h4 class="card-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
					  <strong>kalabira</strong> [ka.la.b??.ra] <em>noun</em> <sub>ENG</sub> [empty], <sub>CEB</sub> [empty]
					</a>
				  </h4>
				</div>
				<div id="collapseTwo" class="panel-collapse collapse">
				  <div class="card-body">
					  [FORM FOR <b>HEADWORD</b>]<BR>
					  [FORM FOR SENSE 1]<BR>
					  [FORM FOR SENSE 2]<BR>
					  [OPTION TO ADD SENSE]
				  </div>
				</div>
			  </div>
			  <div class="card card-danger card-outline">
				<div class="card-header">
				  <h4 class="card-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
					  <strong>agigising</strong> [a.gi.g??.si??] <em>noun</em> <sub>ENG</sub> [empty], <sub>CEB</sub> [empty]
					</a>
				  </h4>
				</div>
				<div id="collapseThree" class="panel-collapse collapse">
				  <div class="card-body">
					  [FORM FOR <b>HEADWORD</b>]<BR>
					  [FORM FOR SENSE 1]<BR>
					  [FORM FOR SENSE 2]<BR>
					  [OPTION TO ADD SENSE]
				  </div>
				</div>
			  </div>
			</div>
      </div>
				  
      <div class="row">
		  <p>The words that show up on this page will be driven by queries.</p>
		  <ul>
		    <li>* The default query is 15 words that start with a, in alphabetical order.</li>
			<li>* Clicking on a letter will provide words that start with that letter.</li>
		  </ul>
		  <p>BLUE BOX will the <b>headwords</b>.</p>
		  <p>In the WHILE loop, use the headword id from the result to query the SENSES connected to that headword.</p>
	  </div>
				  
	  <div class="row"><div class="col-8"><hr></div></div>
				  
	  <div class="row">
		  <p>FUTURE UPDATES:</p>
		  <p>* color of headword should indicate status.<br>
		  * headword info should update as changes are made.<br>
		  * letter options do not wrap on mobile screens.<br>
		  * empty fields should show different color<br>
		  * other headwords should collapse when another is selected (only one open at a time)</p>
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
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
