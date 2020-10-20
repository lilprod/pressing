@extends('layouts.app')

@section('title', '| Articles')

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-plus-square"></i> Articles
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><i class="fa fa-plus-square"></i> Articles </li>
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
                    <p>Etes-vous sûr(e) de vouloir supprimer cet Article?</p>
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
                <h5 class="box-title">Articles</h5>
                <a href="{{ route('articles.create') }}" class="btn bg-olive pull-right"><i class='fa fa-plus-square'></i>  Ajouter Article</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Libellés</th>
                            <th>Descripitons</th>
                            <th>Prix Unitaires</th>
                            <th>Date/Heure d'Ajout</th>
                            <th>Operations</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($articles as $article)
                        <tr>

                            <td>{{ $article->title }}</td>
                            <td>{{ $article->description }}</td>
                            <td>
                              <p>Nettoyage à sec : {{ $article->nettoyage_price }}</p>
                              <p>Repassage : {{ $article->repassage_price }}</p>
                              <p>Nettoyage Express : {{ $article->lavage_price }}</p>
                              
                            </td>
                            <td>{{ $article->created_at->format('F d, Y h:ia') }}</td>
                            <td>
                            <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-info btn-xs" style="margin-right: 3px;"><i class="fa fa-edit"></i> Editer</a>

                            <a href="javascript:;" data-toggle="modal" onclick="deleteData({{ $article->id}})" 
                            data-target="#confirm" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Supprimer</a>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>

            <div class="box-footer clearfix">
              <a href="{{ route('articles.create') }}" class="btn bg-olive"><i class='fa fa-plus-square'></i>  Ajouter Article</a>
            </div>
        </div>
    </div>
</div>
        
    </section>
    <!-- /.content -->

@endsection
@push('script')
<script>
function deleteData(id)
     {
         var id = id;
         var url = '{{ route("articles.destroy", ":id") }}';
         url = url.replace(':id', id);
         $("#deleteForm").attr('action', url);
     }

     function formSubmit()
     {
         $("#deleteForm").submit();
     }
</script>
@endpush

