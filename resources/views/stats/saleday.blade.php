@extends('layouts.app')

@section('title', '| Etats des dépôts de la journée')

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-cart-arrow-down"></i> Etats des dépôts de la journée
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><i class="fa fa-cart-arrow-down"></i> Etats des dépôts de la journée </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        @include('inc.messages')
        <div class="row">
            <div class="col-md-12">
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h5 class="box-title">Ventes de la journée</h5>
                        <a href="{{ route('checkcustomer') }}" class="btn bg-olive pull-right no-print">Faire dépôt</a>
                    </div>
                    <!-- /.box-header -->
                        <div class="box-body">
                            <h5 align="center" class="box-title"><b>Période du</b> : {{$date}} au {{$date_now}}</h5><br>
                            <h5 align="center"><b>Nombre de ligne(s) :</b> <span>{{ $nbre }}</span></h5>
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>

                                        <th>Code Dépôt</th>
                                        <th>Date de Dépôt</th>
                                        <th>Date de Retrait</th>
                                        <th>Total</th>
                                        <th>Avance</th>
                                        <th>Reste</th>
                                        <th>Client</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        @foreach ($deposits as $deposit)
                                        <tr>
                                            <td>{{ $deposit->deposit_code }}</td>
                                            <td>{{ $deposit->created_at->format('d/m/Y ')}}</td>
                                            <td>{{ $deposit->date_retrait->format('d/m/Y ') }}</td>
                                            <td>{{ $deposit->deposit_amount }}</td>
                                            <td>{{ $deposit->amount_paid }}</td>
                                            <td>{{ $deposit->left_pay }}</td>
                                            <td>{{ $deposit->client_name }}</td>
                                        </tr>
                                        @endforeach
                                </tbody>
                                <tfoot>
                                    <td colspan="6" style="text-align: right;"><h4><b>TOTAL</b></h4></td>
                                    <td><h4><b>{{$total}} F.CFA</b></h4></td>
                                  </tfoot>

                            </table>
                        </div>

                        <div class="box-footer no-print">
                            <a class="btn btn-default" type = "button" onclick = "window.print()"><i class="fa fa-print" ></i> Imprimer</a>
                          <a href="{{ route('checkcustomer') }}" class="btn bg-olive pull-right">Faire un dépôt</a>
                        </div>
                </div>
            </div>
        </div>
        
    </section>
    <!-- /.content -->

@endsection
