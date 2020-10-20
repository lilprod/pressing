<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{config('app.name', 'PRESSING')}} | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('/bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('/dist/css/AdminLTE.min.css') }}">
  <!-- Material Design -->
  <link rel="stylesheet" href="{{asset('/dist/css/bootstrap-material-design.min.css') }}">
  <link rel="stylesheet" href="{{asset('/dist/css/ripples.min.css') }}">
  <link rel="stylesheet" href="{{asset('/dist/css/MaterialAdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('/dist/css/skins/all-md-skins.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{asset('/bower_components/morris.js/morris.css') }}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{asset('/bower_components/jvectormap/jquery-jvectormap.css') }}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{asset('/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{asset('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
  <!-- Material ScrollTop stylesheet -->
  <link rel="stylesheet" href="{{asset('/bower_components/material-scrolltop-master/src/material-scrolltop.css') }}">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <style type="text/css">
    @media print{
      @page { margin: 0; }
      body{ margin: 1.6cm; }
    }
  </style> 

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="{{route('dashboard')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">S<b>P</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">SPARK <b>PRESSING</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>


      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications: style can be found in dropdown.less -->
           <!--<li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>-->
                <!-- inner menu: contains the actual data -->
                <!--<ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                </ul>-->
              <!--</li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>-->
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              @if(auth()->user()->profile_picture == '')
                <img src="{{asset('/storage/profile_images/user.jpg')}}" class="user-image" alt="User Image">
              @else
                <img src="{{ url('/storage/profile_images/'.auth()->user()->profile_picture) }}" class="user-image" alt="User Image">
              @endif
              <span class="hidden-xs">{{ auth()->user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                @if(auth()->user()->profile_picture == '')
                  <img src="{{asset('/storage/profile_images/user.jpg')}}" class="img-circle" alt="User Image">
                @else
                  <img src="{{ url('/storage/profile_images/'.auth()->user()->profile_picture) }}" class="img-circle" alt="User Image">
                @endif

                <p>
                  {{ auth()->user()->name }}
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="{{ route('profils.index') }}" class="btn btn-default btn-flat">Profil</a>
                </div>
                <div class="pull-right">
                  <a href="{{ route('logout') }}" class="btn btn-default btn-flat" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Quitter</a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf
                    </form>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          @if(auth()->user()->profile_picture == '')
            <img src="{{asset('/storage/profile_images/user.jpg')}}" class="img-circle" alt="User Image">
          @else
            <img src="{{ url('/storage/profile_images/'.auth()->user()->profile_picture) }}" class="img-circle" alt="User Image">
          @endif
        </div>
        <div class="pull-left info">
          <p>{{ auth()->user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> En ligne</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>

        <li>
          <a href="{{route('dashboard')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        @can('Customer Permissions')
        <li>
          <a href="{{route('mydeposits')}}">
            <i class="fa fa-cart-arrow-down"></i> <span>Mes dépôts</span>
          </a>
        </li>
        <li>
          <a href="{{route('mydeliveries')}}">
            <i class="fa fa-suitcase"></i> <span>Mes retraits</span>
          </a>
        </li>
        @endcan

        <li class="treeview">
          <a href="#">
            <i class="fa fa-cog"></i>
            <span>Paramètres</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('profils.index') }}"><i class="fa fa-circle-o"></i> Mon profil</a></li>
            <li><a href="{{ route('setting') }}"><i class="fa fa-circle-o"></i> Changer mot de passe</a></li>
          </ul>
        </li>

        @can('Tellers Permissions')
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cart-arrow-down"></i>
            <span>Statistiques</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('search') }}"><i class="fa fa-circle-o"></i>Recherche sur Vente</a></li>
            <li><a href="{{ route('getCustomerDeposit') }}"><i class="fa fa-circle-o"></i>Dépôt par client</a></li>
            <li><a href="{{ route('saleDay') }}"><i class="fa fa-circle-o"></i> Etat des ventes du jour</a></li>
            <li><a href="{{ route('totake') }}"><i class="fa fa-circle-o"></i> Retrait du jour</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cart-arrow-down"></i>
            <span>Gestion des Dépôts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('deposits.index') }}"><i class="fa fa-circle-o"></i> Liste des Dépôts</a></li>
            <li><a href="{{ route('checkcustomer') }}"><i class="fa fa-circle-o"></i> Nouveau Dépôt</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-suitcase"></i>
            <span>Gestion des Retraits</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('deliveries.index') }}"><i class="fa fa-circle-o"></i> Liste des Retraits</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-smile-o"></i>
            <span>Gestion des Clients</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('customers.create') }}"><i class="fa fa-circle-o"></i> Ajouter un Client</a></li>
            <li><a href="{{ route('customers.index') }}"><i class="fa fa-circle-o"></i> Liste des Clients</a></li>
          </ul>
        </li>
        @endcan

        @can('Admin Permissions')
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cart-arrow-down"></i>
            <span>Gestion des Dépôts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('deposits.index') }}"><i class="fa fa-circle-o"></i> Liste des Dépôts</a></li>
            <li><a href="{{ route('checkcustomer') }}"><i class="fa fa-circle-o"></i> Nouveau Dépôt</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-suitcase"></i>
            <span>Gestion des Retraits</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('deliveries.index') }}"><i class="fa fa-circle-o"></i> Liste des Retraits</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-plus"></i>
            <span>Bilan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('search') }}"><i class="fa fa-circle-o"></i>Recherche sur Vente</a></li>
            <li><a href="{{ route('getCustomerDeposit') }}"><i class="fa fa-circle-o"></i>Dépôt par client</a></li>
            <li><a href="{{ route('saleDay') }}"><i class="fa fa-circle-o"></i> Etat des ventes du jour</a></li>
            <li><a href="{{ route('totake') }}"><i class="fa fa-circle-o"></i> Retrait du jour</a></li>
            <li><a href="{{ route('range') }}"><i class="fa fa-circle-o"></i>Stats des commandes</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-money"></i>
            <span>Recettes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('searchReceipt') }}"><i class="fa fa-circle-o"></i> Commandes soldés</a></li>
            <li><a href="{{ route('searchLeftpay') }}"><i class="fa fa-circle-o"></i> Impayés</a></li>
          </ul>
        </li>
        

        <li class="treeview">
          <a href="#">
            <i class="fa fa-plus"></i>
            <span>Gestion des Etats</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('status.create') }}"><i class="fa fa-circle-o"></i> Ajouter Etat</a></li>
            <li><a href="{{ route('status.index') }}"><i class="fa fa-circle-o"></i> Liste des Etats</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-plus-square"></i>
            <span>Gestion des Articles</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('articles.create') }}"><i class="fa fa-circle-o"></i> Ajouter un Article</a></li>
            <li><a href="{{ route('articles.index') }}"><i class="fa fa-circle-o"></i> Liste des Articles</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-smile-o"></i>
            <span>Gestion des Clients</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('customers.create') }}"><i class="fa fa-circle-o"></i> Ajouter un Client</a></li>
            <li><a href="{{ route('customers.index') }}"><i class="fa fa-circle-o"></i> Liste des Clients</a></li>
          </ul>
        </li>

        <!--<li>
          <a href="#">
            <i class="fa fa-history"></i> <span>Historiques</span>
          </a>
        </li>-->

        @endcan

        @can('Roles Administration & Permission')

        <!--<li>
          <a href="{{ route('licences.index') }}">
            <i class="fa fa-history"></i> <span>Licence</span>
          </a>
        </li>-->

        <li class="treeview">
          <a href="#">
            <i class="fa fa-plus-square"></i>
            <span>Configurations</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('codesuffixes.create') }}"><i class="fa fa-circle-o"></i> Ajouter Suffixe Code</a></li>
            <li><a href="{{ route('codesuffixes.index') }}"><i class="fa fa-circle-o"></i> Suffixes</a></li>
            <li><a href="{{ route('deliveryhours.create') }}"><i class="fa fa-circle-o"></i> Ajouter Heure de retrait</a></li>
            <li><a href="{{ route('deliveryhours.index') }}"><i class="fa fa-circle-o"></i> Heures de retraits</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-cart-arrow-down"></i>
            <span>Gestion des Dépôts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('deposits.index') }}"><i class="fa fa-circle-o"></i> Liste des Dépôts</a></li>
            <li><a href="{{ route('checkcustomer') }}"><i class="fa fa-circle-o"></i> Nouveau Dépôt</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-suitcase"></i>
            <span>Gestion des Retraits</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('deliveries.index') }}"><i class="fa fa-circle-o"></i> Liste des Retraits</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-plus"></i>
            <span>Bilan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('search') }}"><i class="fa fa-circle-o"></i>Recherche sur Vente</a></li>
            <li><a href="{{ route('getCustomerDeposit') }}"><i class="fa fa-circle-o"></i>Dépôt par client</a></li>
            <li><a href="{{ route('saleDay') }}"><i class="fa fa-circle-o"></i> Etat des ventes du jour</a></li>
            <li><a href="{{ route('totake') }}"><i class="fa fa-circle-o"></i> Retrait du jour</a></li>
            <li><a href="{{ route('range') }}"><i class="fa fa-circle-o"></i>Stats des commandes</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-money"></i>
            <span>Recettes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!--<li><a href="#"><i class="fa fa-circle-o"></i> Recettes</a></li>-->
            <li><a href="{{ route('receipeNewToDay') }}"><i class="fa fa-circle-o"></i> Recette Journalier</a></li>
            <li><a href="{{ route('receipeAllToDay') }}"><i class="fa fa-circle-o"></i> Recette Générale Journalier</a></li>
            <li><a href="{{ route('searchReceipt') }}"><i class="fa fa-circle-o"></i> Commandes soldées</a></li>
            <li><a href="{{ route('searchLeftpay') }}"><i class="fa fa-circle-o"></i> Impayés</a></li>
          </ul>
        </li>
        

        <li class="treeview">
          <a href="#">
            <i class="fa fa-plus"></i>
            <span>Gestion des Etats</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('status.create') }}"><i class="fa fa-circle-o"></i> Ajouter Etat</a></li>
            <li><a href="{{ route('status.index') }}"><i class="fa fa-circle-o"></i> Liste des Etats</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-plus-square"></i>
            <span>Gestion des Articles</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('articles.create') }}"><i class="fa fa-circle-o"></i> Ajouter un Article</a></li>
            <li><a href="{{ route('articles.index') }}"><i class="fa fa-circle-o"></i> Liste des Articles</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-smile-o"></i>
            <span>Gestion des Clients</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('customers.create') }}"><i class="fa fa-circle-o"></i> Ajouter un Client</a></li>
            <li><a href="{{ route('customers.index') }}"><i class="fa fa-circle-o"></i> Liste des Clients</a></li>
          </ul>
        </li>
        
        <li>
          <a href="{{ route('permissions.index') }}">
            <i class="fa fa-unlock"></i> <span>Gestion des permissions</span>
          </a>
        </li>

        <li>
          <a href="{{ route('roles.index') }}"><i class="fa fa-key"></i><span>Gestion des rôles</span></a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Gestion des utilisateurs</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('users.create') }}"><i class="fa fa-circle-o"></i> Nouvel utilisateur</a></li>
            <li><a href="{{ route('users.index') }}"><i class="fa fa-circle-o"></i> Utilisateurs</a></li>
          </ul>
        </li>

        <!--<li>
          <a href="#">
            <i class="fa fa-history"></i> <span>Historiques</span>
          </a>
        </li>-->
        @endcan

        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

{{----------------------------------------------------}}

  <div class="content-wrapper">
    @yield('content')
    <div class="clearfix"></div>
  </div>

  {{----------------------------------------------------}}

  <footer class="main-footer no-print">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2019 <a href="https://sparkcorporation.org/" target="_blank">Developpé par</a> <a href="#">SPARK CORPORATION</a>.</strong> Tous Droits Reservés.
  </footer>

  <button class="material-scrolltop bg-olive" type="button"></button>
   
</div>
<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="{{asset('/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Material Design -->
<script src="{{asset('/dist/js/material.min.js') }}"></script>
<script src="{{asset('/dist/js/ripples.min.js') }}"></script>
<script>
    $.material.init();
</script>
<!-- Morris.js charts -->
<script src="{{asset('/bower_components/raphael/raphael.min.js') }}"></script>
<script src="{{asset('/bower_components/morris.js/morris.min.js') }}"></script>
<!-- material-scrolltop plugin -->
<script src="{{asset('/bower_components/material-scrolltop-master/src/material-scrolltop.js ') }}"></script>

<!-- Initialize material-scrolltop with (minimal) -->
<script>
    $('body').materialScrollTop();
</script>
<!-- DataTables -->
<script src="{{asset('/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{asset('/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

<!-- page script -->
<script type="text/javascript">
  $(function () {
    $('#example1').DataTable({
      "order" : [[0, "desc"]],
      "language": {
        "search" : "Recherche:",
        "oPaginate":{
          "sFirst":"Premier",
          "sLast":"Dernier",
          "sNext":"Suivant",
          "sPrevious":"Précédent"
        },
        "sInfo" : "Montrer _START_ à _END_ des _TOTAL_ données",
        "sInfoEmpty" : "Montrer 0 à 0 des 0 données",
        "sInfoFiltered" : "trié from _MAX_ données totales",
        "sEmptyTable" : "Pas de données disponible dans la table",
        "sLengthMenu" : "Montrer _MENU_ données",
        "sZeroRecords" : "Aucune donnée correspondante trouvée"
      }
    })
  })
</script>
<!-- Sparkline -->
<script src="{{asset('/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{asset('/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{asset('/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('/bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{asset('/bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{asset('/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{asset('/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{asset('/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{asset('/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{asset('/dist/js/adminlte.min.js') }}"></script>


@stack('js')
@stack('scriptdelivery')
@stack('etat')
@stack('capitalize')
@stack('script')
@stack('customer')
@stack('deposit')
@stack('delivery')
@stack('user')
@stack('search')
@stack('control')
@stack('getcustomer')
@stack('codesuffixe')
@stack('deliveryhour')
</body>
</html>
