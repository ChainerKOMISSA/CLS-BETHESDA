<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @include('layouts.head')
  <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/css/adminlte.min.css">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('assets/img/logobethesda.jpg')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

  @include('layouts.main-header')

  <!-- Main Sidebar Container -->
  @include('layouts.main-sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Détails du patient</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Acceuil</a></li>
              <li class="breadcrumb-item active">Détails du patient</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="card card-secondary col-md-12">
                <div class="card-header">
                <h3 class="card-title">Paramètres</h3>
            </div>
            <div class="card-body">
                    <form method="POST">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Nom du patient</label>
                                <input type="text" class="form-control" name="nom">
                              </div>
                              <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Prénoms du patient</label>
                                <input type="text" class="form-control" name="prenom" placeholder="Entrer le prénom du patient">
                              </div>
                              <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Quartier</label>
                                <input type="text" class="form-control" name="quartier" placeholder="Entrer le quartier du patient">
                              </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Sexe</label>
                                <input type="text" class="form-control" name="sexe" placeholder="Entrer le sexe du patient" required>
                              </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Age du patient</label>
                                <input type="number" class="form-control" name="age" required>
                              </div>
                              <div class="form-group col-md-4">
                                    <label for="exampleInputEmail1">Téléphone du patient</label>
                                    <input type="text" class="form-control" name="telephone" placeholder="Entrer le contact du patient" required>
                              </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Poids du patient</label>
                                <input type="number" step=".01" class="form-control" name="poids" required>
                              </div>
                              <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">TA (droit)</label>
                                <input type="text" class="form-control" name="tadroit" placeholder="Tension artérielle droit" required>
                              </div>
                              <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">TA (gauche)</label>
                                <input type="text" class="form-control" name="tagauche" placeholder="Tension artérielle gauche" required>
                              </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Main row -->
        <br>
        <br>
        <div class="row">
            <!-- general form elements disabled -->
            <div class="card card-success col-md-5">
                <div class="card-header">
                <h3 class="card-title">Plaintes</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                <label>Le patient se plaint de...</label>
                                <textarea class="form-control" rows="5" placeholder="..." name="plaintes"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="col-md-1"></div>
                        <!-- general form elements disabled -->
                        <div class="card card-success col-md-5">
                            <div class="card-header">
                            <h3 class="card-title">DIagnostic</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- text input -->
                                            <div class="form-group">
                                            <label>Diagnostic préalable</label>
                                            <textarea class="form-control" rows="2" placeholder="..."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <!-- text input -->
                                            <div class="form-group">
                                            <label>Analyses demandées</label>
                                            <select name="" id="" class="form-control">
                                                <option value= null selected>Sélectionnez une analyse</option>
                                                @foreach ($analyses as $analyse)
                                                    <option value="{{$analyse->id}}">{{$analyse->nom}}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
        </div>
        <br>
        <br>
        <div class="card-tools">
            <a href="{{route('newtraitement')}}" class="btn btn-success">Commencer le traitement</a>
            <a href="{{route('newanalyse')}}" class="btn btn-primary">Prescrire une ordonnance</a>
            <a href="{{route('listepatient')}}" class="btn btn-secondary">Retour</a>
          </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('layouts.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('layouts.footer-scripts')

<!-- DataTables  & Plugins -->
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["Copy", "csv", "excel", "pdf", "Print"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
    </script>


<script src="{{URL::asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{URL::asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
</body>
</html>

