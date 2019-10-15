@extends('admin.admin')

@section('adminview')
{{-- <div class = "container">    --}}
    {!! Form::open(['action'=>'AdminController@store', 'method'=>'POST', 'enctype'=>'multipart/form-data' ,'autocomplete' => 'off']) !!}
        
        <div class = "row">
            <div class="col-4">
                <div class = "form-group">
                    {{Form::label('text', 'Serial Number')}}
                    {{Form::text('serialNo','',['class'=>'form-control', 'placeholder'=>'Serial Number'])}}
                </div>
            </div>  
            
            <div class="col-4">
                <div class = "form-group">
                    {{Form::label('text', 'Model Number')}}
                    {{Form::text('modelNo','',['class'=>'form-control', 'placeholder'=>'Eg. BX80684I78700 '])}}
                </div>
            </div>

            <div class="col-4">
                <div class = "form-group">
                    {{Form::label('text', 'Brand')}}
                    {{Form::text('category','',['class'=>'form-control', 'placeholder'=>'Eg. AMD or Intel'])}}
                </div>
            </div>
        </div>
        
        <div class = "row">
            <div class = "col-4">
                <div class = "form-group">
                    {{Form::label('text', 'Product Name')}}
                    {{Form::text('productName','',['class'=>'form-control', 'placeholder'=>'Eg. Intel® Core™ i7-8700K Processor'])}}
                </div>
            </div>
            
            <div class = "col-4">
                <div class = "form-group">
                    {{Form::label('text', 'Code Name')}}
                    {{Form::text('codeName','',['class'=>'form-control', 'placeholder'=>'Eg.Products formerly Coffee Lake'])}}
                </div>
            </div>
            
            <div class = "col-4">
                <div class = "form-group">
                    {{Form::label('price', 'Price')}}
                    {{Form::text('price','',['class'=>'form-control', 'placeholder'=>'Eg. Rs.25,510 to Rs. 26,290'])}}
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-2">
                <div class="form-group">
                    {{Form::label('gen', 'Generation')}}
                    {{Form::text('generation','',['class'=>'form-control', 'placeholder'=>'Eg. 3rd generation'])}}
                </div>
            </div>

            <div class="col-2">
                <div class="form-group">
                    {{Form::label('core', 'Cores')}}
                    {{Form::text('cores','',['class'=>'form-control', 'placeholder'=>'Eg. 6 cores'])}}
                </div>
            </div>

            <div class="col-2">
                <div class="form-group">
                    {{Form::label('thread', 'Threads')}}
                    {{Form::text('threads','',['class'=>'form-control', 'placeholder'=>'Eg. 14 threads'])}}
                </div>
            </div>

            <div class="col-2">
                <div class="form-group">
                    {{Form::label('basespeed', 'Base Speed')}}
                    {{Form::text('baseSpeed','',['class'=>'form-control', 'placeholder'=>'Eg. 3.6Ghz'])}}
                </div>
            </div>

            <div class="col-2">
                <div class="form-group">
                    {{Form::label('turbospeed', 'Turbo Speed')}}
                    {{Form::text('turboSpeed','',['class'=>'form-control', 'placeholder'=>'Eg. 4.3Ghz'])}}
                </div>
            </div>

            <div class="col-2">
                <div class="form-group">
                    {{Form::label('cache', 'Cache')}}
                    {{Form::text('cache','',['class'=>'form-control', 'placeholder'=>'Eg. 16MB'])}}
                </div>
            </div>
        </div>
        
        
        
        <div class = "row">
            <div class = "col-12">
                <div class="form-group">
                    {{Form::label('title','Title')}}
                    {{Form::text('title','',['class'=>'form-control', 'placeholder'=>'Title'])}}
                </div>
            </div>
        </div>

        <div class = "row">
            <div class = "col-12">
                <div class="form-group">
                    {{Form::label('body','Description')}}
                    {{Form::textarea('description','',[ 'id'=>'article-ckeditor', 'class'=>'form-control', 'placeholder'=>'Description'])}}
                </div>    
            </div>
        </div>

        {{-- <div class="form-group">
                {{Form::label('body','Description')}}
                {{Form::textarea('description','',[ 'id'=>'article-ckeditor', 'class'=>'form-control', 'placeholder'=>'Description'])}}
        </div>     --}}

        <div class = "row">
            <div class = "col-6">
                <div class="form-group">
                    {{Form::label('body','Compatibility')}}
                    {{Form::text('compatibility','',[ 'id'=>'article-ckeditor', 'class'=>'form-control', 'placeholder'=>'Compatibility'])}}
                </div>    
            </div>

            <div class = "col-2">
                <div class="form-group">
                    {{Form::label('number','In Stock')}}
                    {{Form::text('inStock','',[ 'id'=>'article-ckeditor', 'class'=>'form-control', 'placeholder'=>'1,2,3.....'])}}
                </div>    
            </div>

            <div class = "col-4">
                <div class="form-group">
                    {{Form::label('body','Category Id')}}
                    {{Form::text('categoryId','',[ 'id'=>'article-ckeditor', 'class'=>'form-control', 'placeholder'=>'101 -> processors, 102 -> motherboards ...'])}}
                </div>    
            </div>
        </div>

        <div class = "row">
            <div class = "col-4">
                <div class = "form-group">
                    {{Form::file('p_image1')}}
                </div>
            </div>

            <div class = "col-4">
                <div class = "form-group">
                    {{Form::file('p_image2')}}
                </div>
            </div>

            <div class = "col-4">
                <div class = "form-group">
                    {{Form::file('p_image3')}}
                </div>
            </div>
        </div>
        {{Form::submit('Save',['class'=>'btn btn-outline-success'])}}
    {!! Form::close() !!}
{{-- </div> --}}
@endsection