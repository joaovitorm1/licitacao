<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
           <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
           </li>
        </ul>
  
        <ul class="navbar-nav ml-auto">
           <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="#">
                 <i class="fas fa-user-circle"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                 <a href="/adm/logout" class="dropdown-item">
                    <i class="fas fa-sign-out-alt"></i> Sair
                 </a>
                 <div class="dropdown-divider"></div>
                 {{-- <a href="/adm/profile" class="dropdown-item">
                    <i class="far fa-address-card"></i> Perfil de Usuário
                 </a> --}}
              </div>
           </li>
        </ul>
  </nav>
      <!-- /.navbar -->
    
      <aside class="main-sidebar main-sidebar-custom sidebar-dark-primary elevation-4">
        <a href="#" class="brand-link">
           <img src="{{asset("/img/favicon/favicon-32x32.png")}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
           <span class="brand-text font-weight-light"><b>App</b>Inscrições</span>
        </a>

        <div class="sidebar">
           <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                 <li class="nav-header">MENU</li>

                    <li class="nav-item">
                    
                       <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p> Dashboard </p>
                       </a>
                    </li>

                    <li class="nav-item">
                       
                       <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-copy"></i>
                          <p> Inscrições <i class="fas fa-angle-left right"></i></p>
                       </a>
                       <ul class="nav nav-treeview">

                             <li class="nav-item">
                                <a href="#" class="nav-link">
                                   <p> Classificação</p>
                                </a>
                             </li>



                             <li class="nav-item">
                                <a href="#" class="nav-link">
                                   <p> Gerar Curriculos</p>
                                </a>
                             </li>

                       </ul>
                    </li>


                    <li class="nav-item">
                       <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-cogs"></i>
                          <p> Configurações <i class="fas fa-angle-left right"></i></p>
                       </a>
                       <ul class="nav nav-treeview">

                             <li class="nav-item">
                                <a href="#" class="nav-link">
                                   <i class="far fa-plus-square nav-icon"></i>
                                   <p>Cadastros do Sistema <i class="fas fa-angle-left right"></i></p>
                                </a>
                                <ul class="nav nav-treeview">
                                   <li class="nav-item">
                                      <a href="#" class="nav-link">
                                         <i class="fas fa-book nav-icon"></i>
                                         <p>Edital</p>
                                      </a>
                                   </li>
                                   
                                   <li class="nav-item">
                                      <a href="#" class="nav-link">
                                         <i class="fas fa-book nav-icon"></i>
                                         <p>Locais</p>
                                      </a>
                                   </li>

                                   <li class="nav-item">
                                      <a href="#" class="nav-link">
                                         <i class="fas fa-award nav-icon"></i>
                                         <p>Títulos</p>
                                      </a>
                                   </li>

                                   <li class="nav-item">
                                      <a href="#" class="nav-link">
                                         <i class="fas fa-edit nav-icon"></i>
                                         <p>Requisito</p>
                                      </a>
                                   </li>

                                   <li class="nav-item">
                                      <a href="#" class="nav-link">
                                         <i class="fas fa-edit nav-icon"></i>
                                         <p>Pontos Experiencia</p>
                                      </a>
                                   </li>

                                   <li class="nav-item">
                                      <a href="#" class="nav-link">
                                         <i class="fas fa-book nav-icon"></i>
                                         <p>Tipo Cargo</p>
                                      </a>
                                   </li>

                                   <li class="nav-item">
                                      <a href="#" class="nav-link">
                                         <i class="fas fa-handshake nav-icon"></i>
                                         <p>Grupo Ocupacional</p>
                                      </a>
                                   </li>

                                   <li class="nav-item">
                                      <a href="#" class="nav-link">
                                         <i class="fas fa-briefcase nav-icon"></i>
                                         <p>Cargos</p>
                                      </a>
                                   </li>

                                   <li class="nav-item">
                                      <a href="#" class="nav-link">
                                         <i class="fas fa-briefcase nav-icon"></i>
                                         <p>Tipo Documentos</p>
                                      </a>
                                   </li>
                                </ul>
                             </li>
                             <li class="nav-item">
                                <a href="#" class="nav-link">
                                   <i class="far fa-plus-square nav-icon"></i>
                                   <p>Segurança <i class="fas fa-angle-left right"></i></p>
                                </a>
                                <ul class="nav nav-treeview">
                                   <li class="nav-item">
                                      <a href="#" class="nav-link">
                                         <i class="fas fa-door-open nav-icon"></i>
                                         <p>Permissões</p>
                                      </a>
                                   </li>

                                   <li class="nav-item">
                                      <a href="#" class="nav-link">
                                         <i class="fas fa-users-cog nav-icon"></i>
                                         <p>Grupos de Usuários</p>
                                      </a>
                                   </li>

                                   <li class="nav-item">
                                      <a href="#" class="nav-link">
                                         <i class="fas fa-user-plus nav-icon"></i>
                                         <p>Usuarios</p>
                                      </a>
                                   </li>
                                </ul>
                             </li>

                             <li class="nav-item">
                                <a href="#" class="nav-link">
                                   <i class="far fa-plus-square nav-icon"></i>
                                   <p>Homologação Sistema <i class="fas fa-angle-left right"></i></p>
                                </a>
                                <ul class="nav nav-treeview">
                                   <li class="nav-item">
                                      <a href="#" class="nav-link">
                                         <i class="fas fa-chalkboard-teacher nav-icon"></i>
                                         <p>Auditoria</p>
                                      </a>

                                      <a href="#" class="nav-link">
                                         <i class="fas fa-chalkboard-teacher nav-icon"></i>
                                         <p>Consulta Auditoria</p>
                                      </a>
                                   </li>
                                </ul>
                             </li>
                       </ul>
                    </li>
              </ul>
           </nav>
        </div>
     </aside>
  <div class="content-wrapper">