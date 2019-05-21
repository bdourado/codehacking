@extends('layouts.admin')

@section('content')
    <h1>Create User</h1>

    @include('includes.form_error')

    {!! Form::open(['method'=>'post','action'=>'AdminUsersController@store','files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('name','Name:') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email','Email:') !!}
        {!! Form::email('email', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('role_id','Role:') !!}
        {!! Form::select('role_id', \App\Role::pluck('name','id') , null, ['class'=>'form-control','placeholder' => 'Choose a option']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('is_active','Status:') !!}
        {!! Form::select('is_active', ['1' => 'Active', '0' => 'Not Active'], 0, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('file','file:') !!}
        {!! Form::file('file') !!}
    </div>

    <div class="form-group">
        {!! Form::label('password','Password:') !!}
        {!! Form::password('password', ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}





@endsection