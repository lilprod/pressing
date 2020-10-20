@extends('layouts.app')

@section('title', '| Clients')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <i class="fa fa-smile-o"></i> Clients
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active"><i class="fa fa-smile-o"></i> Clients </li>
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
                    <p>Etes-vous sûr(e) de vouloir supprimer ce Client?</p>
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
                        <h3 class="box-title">Administration des Clients</h3>
                        <a href="{{ route('deliveries.index') }}" class="btn btn-default pull-right"><i class="fa fa-suitcase"></i> Retraits</a>
                        <a href="{{ route('deposits.index') }}" class="btn btn-default pull-right"><i class="fa fa-cart-arrow-down"></i> Dépôts</a>
                    </div>
                    <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Nom et Prénoms</th>
                                        <th>Email</th>
                                        <th>Téléphone</th>
                                        <th>Date/Heure d'Ajout</th>
                                        <th>Operations</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($customers as $customer)
                                    <tr>

                                        <td>{{ $customer->name }} {{ $customer->firstname }}</td>
                                        <td>{{ $customer->email }}</td>
                                        <td>{{ $customer->phone_number }}</td>
                                        <td>{{ $customer->created_at->format('F d, Y h:ia') }}</td>
                                        <td>
                                        <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-info btn-xs pull-left" style="margin-right: 3px;"><i class="fa fa-edit"></i> Editer</a>

                                        @can('Roles Administration & Permission')
                                        <a href="javascript:;" data-toggle="modal" onclick="deleteData({{ $customer->id}})" data-target="#confirm" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Supprimer</a>
                                        @endcan

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>

                        <div class="box-footer clearfix">
                          <a href="{{ route('customers.create') }}" class="btn bg-olive"><i class="fa fa-plus"></i>  Ajouter Client</a>
                        </div>
                </div>
            </div>
        </div>
        
    </section>
    <!-- /.content -->

@endsection

@push('customer')
<script>
function deleteData(id)
     {
         var id = id;
         var url = '{{ route("customers.destroy", ":id") }}';
         url = url.replace(':id', id);
         $("#deleteForm").attr('action', url);
     }

     function formSubmit()
     {
         $("#deleteForm").submit();
     }
</script>
@endpush