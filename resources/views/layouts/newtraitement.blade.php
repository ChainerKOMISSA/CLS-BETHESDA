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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Traitement</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route("home")}}">Accueil</a></li>
              <li class="breadcrumb-item active">Commencer un Traitement</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Enregistrer un traitement</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Date de début du traitement</label>
                            <input type="date" name="date" class="form-control" required >
                          </div>
                          <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Nom du patient</label>
                            <select name="patient_id" class="form-control">
                                <option value="">Sélectionnez un patient</option>
                                @foreach ($patients as $patient)
                                <option value="{{$patient->id}}">{{$patient->nom}} {{$patient->prenom}}</option>
                                @endforeach
                            </select>
                          </div>
                          <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Plaintes</label>
                            <textarea name="plaintes" id="" rows="1" class="form-control"></textarea>
                          </div>
                    </div>
                <div class="row">
                    <div class="form-group col-md-5">
                        <label for="exampleInputEmail1">Analyse demandée</label>
                        <select name="analyse" class="form-control">
                            <option value="">Sélectionnez l'analyse</option>
                            @foreach ($analyses as $analyse)
                            <option value="{{$analyse->id}}">{{$analyse->nom}}</option>
                            @endforeach
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <input class="form-group-input" type="radio" name="exampleRadios">
                        <label class="form-group-label" for="exampleRadios1">Résultat négatif</label><br><br>
                        <input class="form-group-input" type="radio" name="exampleRadios">
                        <label class="form-group-label" for="exampleRadios1">Résultat positif</label>
                      </div>
                      <div class="form-group col-md-5">
                        <label for="exampleInputEmail1">Diagnostic final</label>
                        <textarea name="diagnostic" id="" rows="1" class="form-control"></textarea>
                      </div>

                </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <a href="{{route('editpatient')}}" class="btn btn-secondary">Annuler</a>
                    <button type="submit" class="btn btn-success">Enregistrer</button>
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
