@extends('layouts.app')

@section('title', '| Résultats des dépôts')

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-cart-arrow-down"></i> Résultats des dépôts
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><i class="fa fa-cart-arrow-down"></i> Résultats des dépôts </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        @include('inc.messages')
        <div class="row">
            <div class="col-md-12">
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Résultats des dépôts</h3>
                        <a href="{{ route('checkcustomer') }}" class="btn bg-olive pull-right no-print">Faire dépôt</a>
                        <a href="#" class="btn btn-default pull-right no-print">Liste des retraits</a>
                        
                    </div>
                    <!-- /.box-header -->
                        <div class="box-body">
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
                                        <!--<th>Operations</th>-->
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
                                            <!--<td>

                                            <a href="{{ route('delivery.create', $deposit->id) }}" class="btn btn-info pull-left">Faire un Retrait</a>
                                            <a href="{{ route('deposits.edit', $deposit->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                                            <a href="{{ route('deposits.show', $deposit->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Voir</a>

                                            {!! Form::open(['method' => 'DELETE', 'route' => ['deposits.destroy', $deposit->id] ]) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                            {!! Form::close() !!}

                                            </td>-->
                                        </tr>
                                        @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <!--<td style="border: none;"></td>
                                        <td style="border: none;"></td>
                                        <td style="border: none;"></td>
                                        <td style="border: none;"></td>
                                        <td style="border: none;"></td>-->
                                        <td colspan="6" style="text-align: right;"><h4><b>TOTAL</b></h4></td>
                                        <td><h4><b>{{$total}} F.CFA</b></h4></td>
                                    </tr>
                                </tfoot>

                            </table>
                        </div>

                        <div class="box-footer no-print">
                            <a class="btn btn-default" type = "button" onclick = "window.print()"><i class="fa fa-print" ></i> Imprimer</a>
                          <a href="{{ route('checkcustomer') }}" class="btn bg-olive pull-right">Faire un Dépôt</a>
                        </div>
                </div>
            </div>
        </div>
        
    </section>
    <!-- /.content -->

@endsection
