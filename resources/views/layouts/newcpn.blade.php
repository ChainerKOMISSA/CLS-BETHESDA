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
            <h1>Consultation prénatale</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Accueil</a></li>
              <li class="breadcrumb-item active">Consultation prénatale</li>
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
                <h3 class="card-title">Enregistrer une patiente</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('listepatient')}}">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-8">
                            <label>Date:</label>
                                <div class="input-group date" id="date" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Température °C</label>
                            <input type="number" step=".01" class="form-control" id="temp" required>
                          </div>
                    </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Nom du patient</label>
                        <input type="text" class="form-control" id="nom" placeholder="Entrer le nom du patient" required>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Prénoms du patient</label>
                        <input type="text" class="form-control" id="prenom" placeholder="Entrer le prénom du patient" required>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Quartier</label>
                        <input type="text" class="form-control" id="quartier" placeholder="Entrer le quartier du patient" required>
                      </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Sexe</label>
                        <input type="text" class="form-control" id="sexe" placeholder="Entrer le sexe du patient" required>
                      </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Age du patient</label>
                        <input type="number" class="form-control" id="age" required>
                      </div>
                      <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Téléphone du patient</label>
                            <input type="text" class="form-control" id="telephone" placeholder="Entrer le contact du patient" required>
                      </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Poids du patient</label>
                        <input type="number" step=".01" class="form-control" id="poids" required>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">TA (droit)</label>
                        <input type="text" class="form-control" id="tadroit" placeholder="Tension artérielle droit" required>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">TA (gauche)</label>
                        <input type="text" class="form-control" id="tagauche" placeholder="Tension artérielle gauche" required>
                      </div>
                </div>
                  <!--<div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>-->
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="reset" class="btn btn-secondary">Annuler</button>
                    <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                            Enregistrer
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Vérifier les informations</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Nom</th>
                                                <th>Prénoms</th>
                                                <th>Quartier</th>
                                                <th>Age</th>
                                                <th>Sexe</th>
                                                <th>Téléphone</th>
                                                <th>Température</th>
                                                <th>TA(droit)</th>
                                                <th>TA(gauche)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>$request->$date</td>
                                                <td>$request->$nom</td>
                                                <td>$request->$prenom</td>
                                                <td>$request->$quartier</td>
                                                <td>$request->$sexe</td>
                                                <td>$request->$age</td>
                                                <td>$request->$telephone</td>
                                                <td>$request->$temp</td>
                                                <td>$request->$tadroit</td>
                                                <td>$request->$tagauche</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Modifier</button>
                                <button type="submit" class="btn btn-success">Valider</button>
                                </div>
                            </div>
                            </div>
                        </div><!-- Modal -->

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
