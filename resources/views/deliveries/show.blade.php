<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title class="no-print">{{config('app.name', 'PRESSING')}} | Facture</title>
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
  <link rel="stylesheet" href="{{asset('dist/css/skins/all-md-skins.min.css') }}">
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
  <style type="text/css">
    @media print{
      @page { margin: 0; }
      body{ margin: 1.6cm; }
    }
  </style> 
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-green sidebar-mini">

<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="{route('dashboard')}" class="logo">
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
                  <a href="{{ route('logout') }}" class="btn btn-default btn-flat" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

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
            <li><a href="{{ route('receipeNewToDay') }}"><i class="fa fa-circle-o"></i> Recette Journalier</a></li>
            <li><a href="{{ route('receipeAllToDay') }}"><i class="fa fa-circle-o"></i> Recette Générale Journalier</a></li>
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
            <li><a href="{{ route('receipeNewToDay') }}"><i class="fa fa-circle-o"></i> Recette Journalier</a></li>
            <li><a href="{{ route('receipeAllToDay') }}"><i class="fa fa-circle-o"></i> Recette Générale Journalier</a></li>
            <li><a href="{{ route('searchReceipt') }}"><i class="fa fa-circle-o"></i> Commandes soldés</a></li>
            <li><a href="{{ route('searchLeftpay') }}"><i class="fa fa-circle-o"></i> Impayés</a></li>
          </ul>
        </li>

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
            <li><a href="{{ route('range') }}"><i class="fa fa-circle-o"></i>Stats des commandes</a></li>
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
            <i class="fa fa-unlock"></i> <span>Gestion des Permissions</span>
          </a>
        </li>

        <li>
          <a href="{{ route('roles.index') }}"><i class="fa fa-key"></i><span>Gestion des Rôles</span></a>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Gestion des Utilisateurs</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('users.create') }}"><i class="fa fa-circle-o"></i> Créer un Utilisateur</a></li>
            <li><a href="{{ route('users.index') }}"><i class="fa fa-circle-o"></i> Liste des Utilisateurs</a></li>
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

<!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
          Retrait
          <small>{{ $delivery->delivery_code }}</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Nouveau Retrait</li>
        </ol>
    </section>

    <div class="pad margin no-print">
      <div class="callout callout-info" style="margin-bottom: 0!important;">
        <h4><i class="fa fa-info"></i> Note:</h4>
        Pour imprimer cette page, veuillez cliquer sur le bouton d'impression en bas de la facture.
      </div>
    </div>
<!-- Main content -->
    <section class="invoice">
     {{-- @include('inc.messages') --}}
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <!--<h2 class="page-header">
            <i class="fa fa-globe"></i> JOSUE GRAPHIC SARL U
            <small class="pull-right">Date: {{ $date->format('d F, Y') }}</small>
          </h2>-->
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <br><br><br>
        <!--<div class="col-sm-4 invoice-col">
          De
          <address>
            <strong>JOSUE GRAPHIC <small>SARL U</small></strong><br>
            <strong>Département : Habillement, Pressing, Prêt-à-Porter, Location de Voitures, Representation et Négoce </strong><br>
            Nyékonakpoè, dans le von de l'ancien Night Club 907
            à coté de l'Ecole Primaire la Victoire<br>
            Tél: (00228) 92 50 44 01 / 91 32 17 17<br>
            Lomé - TOGO
          </address>
        </div>-->
        <!-- /.col -->
        <!--<div class="col-sm-4 invoice-col">
          A
          <address>
            <strong>{{ $delivery->client_name }}</strong><br>
            {{ $delivery->client_address }}<br>
            Tél: {{ $delivery->client_phone }}<br>
            Email: {{ $delivery->client_email }}
          </address>
        </div>-->
        <!-- /.col -->
        <!--<div class="col-sm-4 invoice-col">
          <b>Dépôt {{ $delivery->deposit_code }}</b><br>
          <br>
          <b>N :</b> 000{{ $delivery->id }}<br>
          <b>Date du Dépôt:</b> {{ $date->format('d F, Y') }}<br>
        </div>-->
        <!-- /.col -->
      </div>

      <div class="row">
        <!-- accepted payments column -->
        <p><center><b>RECU N° :</b> {{$delivery->deposit_id}} / {{ $delivery->deposit_date->format('m/Y ') }}</center></p>
        <div class="col-xs-4">
          <p><b>Receptionniste :</b> {{ $delivery->server }}</p>
          <p><b>Date du dépôt  :</b> {{ $delivery->deposit_date->format('d/m/Y ') }}</p>
          <p><b>Dépôt pour :</b> {{ $delivery->action }}</p>
        </div>

        <div class="col-xs-4">
          <p><b>Client :</b> {{ $delivery->client_name }}</p>
          <p><b>Date de retrait : </b> {{ $date->format('d/m/Y ') }}</p>
          <p><b>Code dépôt : </b>{{ $delivery->deposit_code }}</p>
        </div>

        <div class="col-xs-4">
          <p><b>Règlement :</b> {{$delivery->mode_reglement}}</p>
          @if($delivery->reference != '')
          <p><b>Reference :</b> {{$delivery->reference}}</p>
          @endif
          <p><b>Etat :</b>  Livré
          </p>
        </div>
      </div>
      <br>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-bordered">
            <thead>
            <tr>
              <th>Qté</th>
                <th style="width:20%">Désignation</th>
                <th style="width:20%">Rangement</th>
                <th style="width:15%">Etat</th>
                <th>P.U</th>
                <th>Total</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($depositedarticles as $depositedarticle)
            <tr>
              <td>{{ $depositedarticle->quantity }}</td>
              <td style="width:20%">{{ $depositedarticle->article_title }}</td>
              <td style="width:20%">{{ $depositedarticle->tidy }}</td>
              <td style="width:15%">{{ $depositedarticle->etat }}</td>
              <td>{{ $depositedarticle->unit_price }}</td>
              <td>{{ $depositedarticle->amount }}</td>
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-4">
          <p class="lead">Lu et approuvé</p>
          <!--<p class="lead">Mode de Paiement:</p>
          <img src="{{asset('../../dist/img/credit/visa.png') }}" alt="Visa">
          <img src="{{asset('../../dist/img/credit/mastercard.png') }}" alt="Mastercard">
          <img src="{{asset('../../dist/img/credit/american-express.png') }}" alt="American Express">
          <img src="{{asset('../../dist/img/credit/paypal2.png') }}" alt="Paypal">-->
        </div>
        <!-- /.col -->
        <div class="col-xs-8">
          <p class="lead"></p>

          <div class="table-responsive">
            <table class="table table-bordered">
              <!--<tr>
                <th>Remise :</th>
                <td>{{ $delivery->discount }} %</td>
              </tr>-->
              <tr>
                <th>Total TTC:</th>
                <td>{{ $delivery->deposit_amount }} F.CFA</td>
              </tr>
              
              <tr>
                <th>Avance :</th>
                <td>{{ $delivery->amount_paid }} F.CFA</td>
              </tr>
              <tr>
                <th>Reste à payer:</th>
                <td>{{ $delivery->left_pay }} F.CFA</td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a onClick="window.print()" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Imprimer</a>
          @can('Roles Administration & Permission')
          <a href="{{ route('deliveries.index') }}" class="btn btn-success pull-right"><i class="fa fa-suitcase"></i> Liste Des Retraits</a>
          @endcan
          <!--<a href="{{ route('delivery.invoice', $delivery->id) }}" class="btn btn-primary pull-right">
            <i class="fa fa-download"></i> Génerer PDF</a>-->
            <a href="{{ route('dashboard') }}" class="btn btn-primary pull-right">
            <i class="fa fa-dashboard"></i> Accueil</a>
        </div>
      </div>
    </section>
    <!-- /.content -->

<button class="material-scrolltop bg-olive" type="button"></button>


<script>
  function printElem() {
      var content = document.getElementById('printArea').innerHTML;
      var mywindow = window.open('', 'Print', 'height=900,width=800');
      mywindow.document.write('<html><head><title>Print</title>');
      mywindow.document.write('</head><body >');
      mywindow.document.write(content);
      mywindow.document.write('</body></html>');
      mywindow.document.close();
      mywindow.focus();
      mywindow.print();
      mywindow.close();
      return true;
  }
</script>
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
<!-- material-scrolltop plugin -->
<script src="{{asset('/bower_components/material-scrolltop-master/src/material-scrolltop.js ') }}"></script>

<!-- Initialize material-scrolltop with (minimal) -->
<script>
    $('body').materialScrollTop();
</script>
<!-- DataTables -->
<script src="{{asset('/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{asset('/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
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
<!-- AdminLTE for demo purposes -->
<script src="{{asset('/dist/js/demo.js') }}"></script>


<!-- page script -->
<script type="text/javascript">
  $(function () {
    $('#example1').DataTable({
      "order" : [[0, "desc"]]
    })
  })
</script>


</body>
</html>
