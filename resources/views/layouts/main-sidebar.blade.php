<aside class="main-sidebar sidebar-dark-success elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('assets/img/logobethesda.jpg')}}" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">CLS BETHESDA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="{{route('home')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Tableau de bord
              </p>
            </a>
          </li>
          <li class="nav-header">PATIENTS</li>
          <li class="nav-item">
            <a href="{{route('newpatient')}}" class="nav-link">
              <i class="nav-icon fas fa-plus-square"></i>
              <p>
                Nouveau patient
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/kanban.html" class="nav-link">
              <i class="nav-icon fas fa-procedures"></i>
              <p>
                Patients en cours
              </p>
            </a>
          </li>
          <li class="nav-item">
                <a href="{{route('listepatient')}}" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Liste des patients
              </p>
            </a>
          </li>
          <li class="nav-header">GYNECOLOGIE</li>
          <li class="nav-item">
            <a href="{{route('newcpn')}}" class="nav-link">
              <i class="nav-icon fas fa-plus-square"></i>
              <p>Nouveau patient</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-procedures"></i>
              <p>Patients en cours</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Liste des accouchements</p>
            </a>
          </li>
          <li class="nav-header">PHARMACIE</li>
          <li class="nav-item">
            <a href="iframe.html" class="nav-link">
              <i class="nav-icon fas fa-tablets"></i>
              <p>Comprimés</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-vial"></i>
              <p>Sirop</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-syringe"></i>
              <p>Injectables</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-plus"></i>
              <p>Autres</p>
            </a>
          </li>
          <li class="nav-header">PERSONNEL</li>
          <li class="nav-item">
            <a href="iframe.html" class="nav-link">
              <i class="nav-icon fas fa-plus-square"></i>
              <p>Nouvel infirmier</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-user-md"></i>
              <p>Liste des infirmiers</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
