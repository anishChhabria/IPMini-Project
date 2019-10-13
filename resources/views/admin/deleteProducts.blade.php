@extends('admin.admin')

@section('adminview')
    <div class = "container">
        {!! Form::open(['action'=>'AdminController@showProducts', 'method'=>'POST', 'enctype'=>'multipart/form-data' ,'autocomplete' => 'off']) !!}
        <div class = "row">
            <div class="col-6">
                <div class = "form-group">
                    {{Form::label('text', 'Select a component')}}
                    <select class="browser-default custom-select" name = "component" id = "component">
                            <option selected>Open this select menu</option>
                            <option value="processors">Processor</option>
                            <option value="gpu">GPU</option>
                            <option value="motherboard">Motherboard</option>
                    </select>
                </div>
            </div>
            <div class="col-4">
                <div class ="form-group">
                    {{Form::label('text', 'Enter the Serial Number of the product')}}
                    {{Form::text('serialNo','',['class'=>'form-control', 'placeholder'=>'Serial No'])}}
                </div>
            </div>
        </div>
            {{Form::submit('Delete product',['class'=>'btn btn-outline-success'])}}           
        {!! Form::close() !!}
    </div>
@endsection