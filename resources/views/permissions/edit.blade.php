@extends('layouts.app')

@section('title', '| Editer Permission')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <i class='fa fa-edit'></i> Editer Permission
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active"><i class='fa fa-edit'></i> Editer Permission</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
<div class="row">

    <div class='col-lg-4 col-lg-offset-4'>
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><i class='fa fa-key'></i> Editer {{$permission->name}}</h3>
            </div>

            {{ Form::model($permission, array('route' => array('permissions.update', $permission->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with permission data --}}

            <div class="box-body">

                <div class="form-group">
                    {{ Form::label('name', 'Nom Permission') }}
                    {{ Form::text('name', null, array('class' => 'form-control')) }}
                </div>

           </div>

           <div class="box-footer">
                {{ Form::submit('Editer', array('class' => 'btn bg-olive')) }}
            </div>
            {{ Form::close() }}

        </div>
    </div>
</div>
</section>

@endsection
