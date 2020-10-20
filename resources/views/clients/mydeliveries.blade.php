@extends('layouts.app')

@section('title', '| Retraits')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <i class="fa fa-suitcase"></i> Mes retraits
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active"><i class="fa fa-suitcase"></i> Mes retraits </li>
  </ol>
</section>


    <!-- Main content -->
    <section class="content">
        @include('inc.messages')
        <div class="row">
            <div class="col-md-12">
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h5 class="box-title">Liste de mes retraits effectués</h5>
                    </div>
                    <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Code Retrait</th>
                                        <th>Code Dépôt</th>
                                        <th>Montant Total</th>
                                        <th>Montant Restant</th>
                                        <th>Client</th>
                                        <th>Date de Dépôt</th>
                                        <th>Date de Retrait</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        @foreach ($deliveries as $delivery)
                                        <tr>
                                            <td>{{ $delivery->delivery_code }}</td>
                                            <td>{{ $delivery->deposit_code }}</td>
                                            <td>{{ $delivery->deposit_amount }}</td>
                                            <td>{{ $delivery->left_pay }}</td>
                                            <td>{{ $delivery->client_name }}</td>
                                            <td>{{ $delivery->deposit_date }}</td>
                                            <td>{{ $delivery->created_at->format('F d, Y') }}</td>
                                        </tr>
                                        @endforeach
                                </tbody>

                            </table>
                        </div>
                </div>
            </div>
        </div>
        
    </section>
    <!-- /.content -->

@endsection