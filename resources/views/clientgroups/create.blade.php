{{-- \resources\views\loyalgroups\create.blade.php --}}
@extends('layouts.app')

@section('title', '| Ajouter Groupe de Fidélisation')

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class='fa fa-plus-square'></i> Fidélisations  
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><i class='fa fa-plus-square'></i> Fidélisations</li>
      </ol>
    </section>

<!-- Main content -->
          <section class="content">
            @include('inc.messages')
            <div class='col-lg-8 col-lg-offset-2'>
                  <div class="box box-primary">
                      <div class="box-header with-border">
                        <h3 class="box-title"><i class='fa fa-plus-square'></i> Fidéliser un Client</h3>
                      </div>
                      <!-- /.box-header -->
                      <!-- form start -->
                      {{ Form::open(array('url' => 'clientgroups', 'enctype' => 'multipart/form-data')) }}
                      <div class="box-body">
                        
                            <div class="col-md-12">
                              <div class="form-group">
                                {{ Form::label('client_id', 'Nom du client') }}
                                {!! Form::select('client_id', $clients, null, ['class' => 'form-control']) !!}
                              </div>
                          </div>


                          <div class="col-md-12">
                            <div class="form-group">
                              {{ Form::label('rate', 'Groupe de Fidélisation') }}
                              {!! Form::select('rate', $loyalgroups, null, ['class' => 'form-control', 'placeholder' => '-- Selectionner un groupe --', 'required' => 'required', 'id' => 'group']) !!}
                            </div>
                        </div>

                        <div class="col-md-12">
                          <div class="form-group">
                            {{ Form::label('rate', 'Remise à appliquer') }}
                            {{ Form::text('rate', '', array('class' => 'form-control', 'disabled' => 'disabled', 'id'=>'rate')) }}
                          </div>
                        </div>

                      </div>
                      <!-- /.box-body -->

                    <div class="box-footer">
                      {{ Form::submit('Valider', array('class' => 'btn bg-olive btn-block')) }}
                    </div>
                  {{ Form::close() }}
                </div>
                <!-- /.box -->
            </div>
          </section>
          <!-- /.content -->

@endsection

@push('rate')
<script type="text/javascript">
  $('#group').on('change', function (e) {

    var value = $('#group').val();

    $('#rate').val(value);

  });
</script>
@endpush
