@extends('layouts.app')

@section('title', '| Retraits')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <i class="fa fa-suitcase"></i> Retraits
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active"><i class="fa fa-suitcase"></i> Retraits </li>
  </ol>
</section>

<div class="modal fade" id="confirm">
    <div class="modal-dialog">
        <form action="" id="deleteForm" method="post">
            <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Confirmation de Suppression</h4>
                  </div>
                  <div class="modal-body">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <p>Etes-vous sûr(e) de vouloir supprimer ce Retrait?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-xs btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Non, Fermer</button>
                    <button type="submit" name="" class="btn btn-xs btn-danger" data-dismiss="modal" onclick="formSubmit()">Oui, Supprimer</button>
                 </div>
            </div>
        </form>
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

    <!-- Main content -->
    <section class="content">
        @include('inc.messages')
        <div class="row">
            <div class="col-md-12">
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h5 class="box-title">Liste Des Retraits</h5>
                        <a href="{{ route('deposits.index') }}" class="btn btn-default pull-right"><i class="fa fa-cart-arrow-down"></i> Dépôts</a>
                    </div>
                    <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="display: none;">ID</th>
                                        <th>Code retrait</th>
                                        <th>Code dépôt</th>
                                        <th>Total</th>
                                        <th>Reste</th>
                                        <th>Client</th>
                                        <th>Date de dépôt</th>
                                        <th>Date de retrait</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        @foreach ($deliveries as $delivery)
                                        <tr>
                                            <td style="display: none;">{{ $delivery->id }}</td>
                                            <td>{{ $delivery->delivery_code }}</td>
                                            <td>{{ $delivery->deposit_code }}</td>
                                            <td>{{ $delivery->deposit_amount }}</td>
                                            <td>{{ $delivery->left_pay }}</td>
                                            <td>{{ $delivery->client_name }}</td>
                                            <td>{{ $delivery->deposit_date }}</td>
                                            <td>{{ $delivery->created_at->format('F d, Y') }}</td>
                                            <td>

                                              <a href="{{ route('deliveries.show', $delivery->id) }}" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> Voir</a>

                                           <!-- <a href="{{ route('deliveries.edit', $delivery->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Editer</a>
                                            <a href="javascript:;" data-toggle="modal" onclick="deleteData({{ $delivery->id}})" data-target="#confirm" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Supprimer</a>-->

                                            </td>
                                        </tr>
                                        @endforeach
                                </tbody>

                            </table>
                        </div>

                        <div class="box-footer">
                          <a href="{{ route('checkcustomer') }}" class="btn bg-olive pull-right"><i class="fa fa-cart-arrow-down"></i> Nouveau dépôt</a>
                          <!--<a href="{{ route('deliveries.create') }}" class="btn bg-olive pull-right"><i class="fa fa-suitcase"></i> Faire un Retrait</a>-->
                        </div>
                </div>
            </div>
        </div>
        
    </section>
    <!-- /.content -->

@endsection

@push('delivery')
<script>
function deleteData(id)
     {
         var id = id;
         var url = '{{ route("deliveries.destroy", ":id") }}';
         url = url.replace(':id', id);
         $("#deleteForm").attr('action', url);
     }

     function formSubmit()
     {
         $("#deleteForm").submit();
     }
</script>
@endpush
