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

 @include('layouts.main-header')

  <!-- Main Sidebar Container -->
  @include('layouts.main-sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Enregistrer un patient</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Accueil</a></li>
              <li class="breadcrumb-item active">Enregistrer un patient</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Formulaire</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('verifypatient')}}">
                @csrf
                <div class="card-body">
                <div class="form-group">
                    <label>Date:</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Nom du patient</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Entrer le nom du patient">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Prénoms du patient</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Entrer le prénom du patient">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Quartier</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Entrer le quartier du patient">
                      </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Sexe</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Entrer le sexe du patient">
                      </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Age du patient</label>
                        <input type="number" class="form-control" id="exampleInputEmail1">
                      </div>
                      <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Téléphone du patient</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Entrer le contact du patient">
                      </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Température °C</label>
                        <input type="number" class="form-control" id="exampleInputEmail1">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">TA (droit)</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tension artérielle droit">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">TA (gauche)</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tension artérielle gauche">
                      </div>
                </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="reset" class="btn btn-secondary">Annuler</button>
                  <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
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

<!-- jQuery -->
<script src="{{URL::asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{URL::asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- bs-custom-file-input -->
<script src="{{URL::asset('assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{URL::asset('assets/js/adminlte.min.js')}}"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
