@extends('layouts.app')

@section('title', '| Permissions')

@section('content')

<section class="content-header">
      <h1>
        <i class="fa fa-key"></i>Licence
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li> 
        <li class="active"><i class="fa fa-key"></i>Licence</li>
      </ol>
</section>

<!-- Main content -->
    <section class="content">
        @include('inc.messages')
      <div class="row">
            <div class="col-md-12">
                <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Détails de la Licence</h3>
                </div>

                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">

                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Code</th>
                                <th>Statut</th>
                                <!--<th>Date d'activation</th>-->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($licences as $licence)
                            <tr>
                                <td>{{ $licence->title }}</td> 
                                <td>{{ $licence->code }}</td> 
                                <td> 
                                    @if($licence->is_activated == 0 )
                                            Désactivé
                                    @else
                                            Activé
                                    @endif
                                </td>
                                <!--<td>{{ $licence->activated_at }}</td>  -->
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="box-footer">
                  <a href="{{ URL::to('/') }}" class="btn bg-olive">Retour</a>
                </div>

            </div>
            </div>
        </div>
    </section>
    <!-- /.content -->

@endsection
