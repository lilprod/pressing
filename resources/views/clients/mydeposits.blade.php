@extends('layouts.app')

@section('title', '| Dépôts')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <i class="fa fa-cart-arrow-down"></i> Mes dépôts
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active"><i class="fa fa-cart-arrow-down"></i> Mes dépôts </li>
  </ol>
</section>



    <!-- Main content -->
    <section class="content">
        @include('inc.messages')
        <div class="row">
            <div class="col-md-12">
                <div class="box box-solid">
                  <div class="box-header with-border">
                        <h7 class="box-title">Liste des dépôts effectués</h7>
                    </div>
                    <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Code Dépôt</th>
                                        <th>Montant Total</th>
                                        <th>Remise</th>
                                        <th>Montant Payé</th>
                                        <th>Montant Restant</th>
                                        <th>Client</th>
                                        <th>Date de Dépôt</th>
                                        <th>Date de Retrait</th>
                                        <th>Operations</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        @foreach ($deposits as $deposit)
                                        <tr>
                                            <td>{{ $deposit->deposit_code }}</td>
                                            <td>{{ $deposit->deposit_amount }}</td>
                                            <td>{{ $deposit->discount }}</td>
                                            <td>{{ $deposit->amount_paid }}</td>
                                            <td>{{ $deposit->left_pay }}</td>
                                            <td>{{ $deposit->client_name }}</td>
                                            <td>{{ $deposit->created_at}}</td>
                                            <td>{{ $deposit->date_retrait }}</td>
                                            <td>
                                              <a href="{{ route('deposits.show', $deposit->id) }}" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> Voir</a>

                                            </td>
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
