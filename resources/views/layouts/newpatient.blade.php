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
            <h1>Consultation</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route("home")}}">Accueil</a></li>
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
          <div class="col-md-12">
            @if (session()->has("success"))
              <div class="alert alert-secondary">
                <p><h3>{{session()->get('success')}}</h3></p>
              </div>
              @endif
              @if($errors->any())
              <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                  </ul>
              </div>
              @endif
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Enregistrer un nouveau patient</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('ajoutpatient')}}">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-8">
                            <label>Date:</label>
                            <input type="date" min="2023-01-01" max="datetime-local" name="date" class="form-control" required/>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Température °C</label>
                            <input type="number" step=".01" class="form-control" name="temp" required>
                          </div>
                    </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Nom du patient</label>
                        <input type="text" class="form-control" name="nom" placeholder="Entrer le nom du patient" required>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Prénoms du patient</label>
                        <input type="text" class="form-control" name="prenom" placeholder="Entrer le prénom du patient" required>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Quartier</label>
                        <input type="text" class="form-control" name="quartier" placeholder="Entrer le quartier du patient" required>
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
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="reset" class="btn btn-secondary">Annuler</button>
                    <button type="submit" class="btn btn-success swalDefaultSuccess">Enregistrer</button>
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
<script>
  $(function() {
      var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });
  
      $('.swalDefaultSuccess').click(function() {
        Toast.fire({
          icon: 'success',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultInfo').click(function() {
        Toast.fire({
          icon: 'info',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultError').click(function() {
        Toast.fire({
          icon: 'error',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultWarning').click(function() {
        Toast.fire({
          icon: 'warning',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultQuestion').click(function() {
        Toast.fire({
          icon: 'question',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
  </script>
</html>
