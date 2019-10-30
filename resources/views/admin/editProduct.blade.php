    @extends('admin.admin')

    @section('adminview')
    {!! Form::open(['action'=>'AdminController@update', 'id'=>'{{$editproduct[0]->modelNo}}','method'=>'POST', 'enctype'=>'multipart/form-data' ,'autocomplete' => 'off']) !!}
        
    <div class = "row">       
        <div class="col-4">
            <div class = "form-group">
                {{Form::label('text', 'Model Number')}}
                {{Form::text('modelNo',$editproduct[0]->modelNo,['class'=>'form-control', 'placeholder'=>'Eg. BX80684I78700 '])}}
            </div>
        </div>

        <div class="col-4">
            <div class = "form-group">
                {{Form::label('text', 'Brand')}}
                {{Form::text('category',$editproduct[0]->brand,['class'=>'form-control', 'placeholder'=>'Eg. AMD or Intel'])}}
            </div>
        </div>
    </div>
    
    <div class = "row">
        <div class = "col-4">
            <div class = "form-group">
                {{Form::label('text', 'Product Name')}}
                {{Form::text('productName',$editproduct[0]->productName,['class'=>'form-control', 'placeholder'=>'Eg. Intel® Core™ i7-8700K Processor'])}}
            </div>
        </div>
        
        <div class = "col-4">
            <div class = "form-group">
                {{Form::label('text', 'Code Name')}}
                {{Form::text('codeName',$editproduct[0]->codeName,['class'=>'form-control', 'placeholder'=>'Eg.Products formerly Coffee Lake'])}}
            </div>
        </div>
        
        <div class = "col-4">
            <div class = "form-group">
                {{Form::label('price', 'Price')}}
                {{Form::text('price',$editproduct[0]->cost,['class'=>'form-control', 'placeholder'=>'Eg. Rs.25,510 to Rs. 26,290'])}}
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-2">
            <div class="form-group">
                {{Form::label('gen', 'Generation')}}
                {{Form::text('generation',$editproduct[0]->generation,['class'=>'form-control', 'placeholder'=>'Eg. 3rd generation'])}}
            </div>
        </div>

        <div class="col-2">
            <div class="form-group">
                {{Form::label('core', 'Cores')}}
                {{Form::text('cores',$editproduct[0]->cores,['class'=>'form-control', 'placeholder'=>'Eg. 6 cores'])}}
            </div>
        </div>

        <div class="col-2">
            <div class="form-group">
                {{Form::label('thread', 'Threads')}}
                {{Form::text('threads',$editproduct[0]->threads,['class'=>'form-control', 'placeholder'=>'Eg. 14 threads'])}}
            </div>
        </div>

        <div class="col-2">
            <div class="form-group">
                {{Form::label('basespeed', 'Base Speed')}}
                {{Form::text('baseSpeed',$editproduct[0]->baseSpeed,['class'=>'form-control', 'placeholder'=>'Eg. 3.6Ghz'])}}
            </div>
        </div>

        <div class="col-2">
            <div class="form-group">
                {{Form::label('turbospeed', 'Turbo Speed')}}
                {{Form::text('turboSpeed',$editproduct[0]->turboSpeed,['class'=>'form-control', 'placeholder'=>'Eg. 4.3Ghz'])}}
            </div>
        </div>

        <div class="col-2">
            <div class="form-group">
                {{Form::label('cache', 'Cache')}}
                {{Form::text('cache',$editproduct[0]->cache,['class'=>'form-control', 'placeholder'=>'Eg. 16MB'])}}
            </div>
        </div>
    </div>
    
    
    
    <div class = "row">
        <div class = "col-12">
            <div class="form-group">
                {{Form::label('title','Title')}}
                {{Form::text('title',$editproduct[0]->title,['class'=>'form-control', 'placeholder'=>'Title'])}}
            </div>
        </div>
    </div>

    <div class = "row">
        <div class = "col-12">
            <div class="form-group">
                {{Form::label('body','Description')}}
                {{Form::textarea('description',$editproduct[0]->description,[ 'id'=>'article-ckeditor', 'class'=>'form-control', 'placeholder'=>'Description'])}}
            </div>    
        </div>
    </div>

    {{-- <div class="form-group">
            {{Form::label('body','Description')}}
            {{Form::textarea('description',$editproduct["serialNo"],[ 'id'=>'article-ckeditor', 'class'=>'form-control', 'placeholder'=>'Description'])}}
    </div>     --}}

    <div class = "row">
        <div class = "col-6">
            <div class="form-group">
                {{Form::label('body','Compatibility')}}
                {{Form::text('compatibility',$editproduct[0]->compatibility,[ 'id'=>'article-ckeditor', 'class'=>'form-control', 'placeholder'=>'Compatibility'])}}
            </div>    
        </div>

        <div class = "col-2">
            <div class="form-group">
                {{Form::label('number','In Stock')}}
                {{Form::text('inStock',$editproduct[0]->inStock,[ 'id'=>'article-ckeditor', 'class'=>'form-control', 'placeholder'=>'1,2,3.....'])}}
            </div>    
        </div>

        <div class = "col-4">
            <div class="form-group">
                {{Form::label('body','Category Id')}}
                {{Form::text('categoryId',$editproduct[0]->categoryId,[ 'id'=>'article-ckeditor', 'class'=>'form-control', 'placeholder'=>'101 -> processors, 102 -> motherboards ...'])}}
            </div>    
        </div>
    </div>

    {{-- <div class = "row">
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
    </div> --}}
    {{Form::submit('Edit',['class'=>'btn btn-outline-success'])}}
{!! Form::close() !!}     
    @endsection