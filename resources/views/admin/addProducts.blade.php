@extends('admin.admin')

@section('adminview')
{{-- <div class = "container">    --}}

    {!! Form::open(['action'=>'AdminController@storeproduct','method'=>'POST', 'enctype'=>'multipart/form-data' ,'autocomplete' => 'off']) !!}
        @switch($productType)
            @case('processors')
                <div class = "row">
                    <div class="col-4">
                        <div class = "form-group">
                            {{Form::label('text', 'Product Type')}}
                            {{Form::text('serialNo',$productType,['class'=>'form-control', 'readonly'])}}
                        </div>
                    </div>  
                    <div class="col-4">
                        <div class = "form-group">
                            {{Form::label('text', 'Model Number')}}
                            {{Form::text('modelNo','',['class'=>'form-control'])}}
                        </div>
                    </div>

                    <div class="col-4">
                        <div class = "form-group">
                            {{Form::label('text', 'Brand')}}
                            {{Form::text('category','',['class'=>'form-control'])}}
                        </div>
                    </div>
                </div>
                
                <div class = "row">
                    <div class = "col-4">
                        <div class = "form-group">
                            {{Form::label('text', 'Product Name')}}
                            {{Form::text('productName','',['class'=>'form-control'])}}
                        </div>
                    </div>
                    
                    <div class = "col-4">
                        <div class = "form-group">
                            {{Form::label('text', 'Code Name')}}
                            {{Form::text('codeName','',['class'=>'form-control'])}}
                        </div>
                    </div>
                    
                    <div class = "col-4">
                        <div class = "form-group">
                            {{Form::label('price', 'Price')}}
                            {{Form::text('price','',['class'=>'form-control'])}}
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-2">
                        <div class="form-group">
                            {{Form::label('gen', 'Generation')}}
                            {{Form::text('generation','',['class'=>'form-control'])}}
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="form-group">
                            {{Form::label('core', 'Cores')}}
                            {{Form::text('cores','',['class'=>'form-control'])}}
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="form-group">
                            {{Form::label('thread', 'Threads')}}
                            {{Form::text('threads','',['class'=>'form-control'])}}
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="form-group">
                            {{Form::label('basespeed', 'Base Speed')}}
                            {{Form::text('baseSpeed','',['class'=>'form-control'])}}
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="form-group">
                            {{Form::label('turbospeed', 'Turbo Speed')}}
                            {{Form::text('turboSpeed','',['class'=>'form-control'])}}
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="form-group">
                            {{Form::label('cache', 'Cache')}}
                            {{Form::text('cache','',['class'=>'form-control'])}}
                        </div>
                    </div>
                </div>
                <div class = "row">
                    <div class = "col-12">
                        <div class="form-group">
                            {{Form::label('title','Title')}}
                            {{Form::text('title','',['class'=>'form-control'])}}
                        </div>
                    </div>
                </div>

                <div class = "row">
                    <div class = "col-12">
                        <div class="form-group">
                            {{Form::label('body','Description')}}
                            {{Form::textarea('description','',[ 'id'=>'article-ckeditor', 'class'=>'form-control'])}}
                        </div>    
                    </div>
                </div>

                {{-- <div class="form-group">
                        {{Form::label('body','Description')}}
                        {{Form::textarea('description','',[ 'id'=>'article-ckeditor', 'class'=>'form-control')}}
                </div>     --}}

                <div class = "row">
                    <div class = "col-6">
                        <div class="form-group">
                            {{Form::label('body','Compatibility')}}
                            {{Form::text('compatibility','',[ 'id'=>'article-ckeditor', 'class'=>'form-control'])}}
                        </div>    
                    </div>

                    <div class = "col-2">
                        <div class="form-group">
                            {{Form::label('number','In Stock')}}
                            {{Form::text('inStock','',[ 'id'=>'article-ckeditor', 'class'=>'form-control'])}}
                        </div>    
                    </div>

                    <div class = "col-4">
                        <div class="form-group">
                            {{Form::label('body','Category Id')}}
                            {{Form::text('categoryId','',[ 'id'=>'article-ckeditor', 'class'=>'form-control'])}}
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
        @break
        @case('motherboards')
        <div class = "row">
                <div class="col-4">
                    <div class = "form-group">
                        {{Form::label('text', 'Product Type')}}
                        {{Form::text('serialNo',$productType,['class'=>'form-control', 'readonly'])}}
                    </div>
                </div>  
                <div class="col-4">
                    <div class = "form-group">
                        {{Form::label('text', 'Model Number')}}
                        {{Form::text('modelNo','',['class'=>'form-control'])}}
                    </div>
                </div>

                <div class="col-4">
                    <div class = "form-group">
                        {{Form::label('text', 'Brand')}}
                        {{Form::text('category','',['class'=>'form-control'])}}
                    </div>
                </div>
            </div>
            
            <div class = "row">
                <div class = "col-4">
                    <div class = "form-group">
                        {{Form::label('text', 'Processor Type')}}
                        {{Form::text('productName','',['class'=>'form-control'])}}
                    </div>
                </div>
                
                <div class = "col-4">
                    <div class = "form-group">
                        {{Form::label('text', 'Form Factor')}}
                        {{Form::text('formFactor','',['class'=>'form-control'])}}
                    </div>
                </div>
                
                <div class = "col-4">
                    <div class = "form-group">
                        {{Form::label('price', 'Price')}}
                        {{Form::text('price','',['class'=>'form-control'])}}
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-2">
                    <div class="form-group">
                        {{Form::label('gen', 'Item Weight')}}
                        {{Form::text('itemWeight','',['class'=>'form-control'])}}
                    </div>
                </div>

                <div class="col-2">
                    <div class="form-group">
                        {{Form::label('core', 'Processor Socket')}}
                        {{Form::text('processorSocket','',['class'=>'form-control'])}}
                    </div>
                </div>

                <div class="col-2">
                    <div class="form-group">
                        {{Form::label('thread', 'Memory Technology')}}
                        {{Form::text('memoryTechnology','',['class'=>'form-control'])}}
                    </div>
                </div>

                <div class="col-2">
                    <div class="form-group">
                        {{Form::label('basespeed', 'Memory Type')}}
                        {{Form::text('memoryType','',['class'=>'form-control'])}}
                    </div>
                </div>

                <div class="col-2">
                    <div class="form-group">
                        {{Form::label('turbospeed', 'Graphic Card')}}
                        {{Form::text('graphicCard','',['class'=>'form-control'])}}
                    </div>
                </div>

                <div class="col-2">
                    <div class="form-group">
                        {{Form::label('cache', 'HDMI Ports')}}
                        {{Form::text('hdmi2Ports','',['class'=>'form-control'])}}
                    </div>
                </div>
            </div>

            <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                            {{Form::label('gen', 'Wattage')}}
                            {{Form::text('wattage','',['class'=>'form-control'])}}
                        </div>
                    </div>
    
                    <div class="col-3">
                        <div class="form-group">
                            {{Form::label('core', 'Lithium Battery')}}
                            {{Form::text('lithiumBattery','',['class'=>'form-control'])}}
                        </div>
                    </div>
    
                    <div class="col-3">
                        <div class="form-group">
                            {{Form::label('thread', 'Lithium Cells')}}
                            {{Form::text('nolithiumCells','',['class'=>'form-control'])}}
                        </div>
                    </div>
    
                    <div class="col-3">
                        <div class="form-group">
                            {{Form::label('basespeed', 'Wireless')}}
                            {{Form::text('wireless','',['class'=>'form-control'])}}
                        </div>
                    </div>
    
                    
                </div>

            <div class = "row">
                <div class = "col-12">
                    <div class="form-group">
                        {{Form::label('title','Title')}}
                        {{Form::text('title','',['class'=>'form-control'])}}
                    </div>
                </div>
            </div>

            <div class = "row">
                <div class = "col-12">
                    <div class="form-group">
                        {{Form::label('body','Description')}}
                        {{Form::textarea('description','',[ 'id'=>'article-ckeditor', 'class'=>'form-control'])}}
                    </div>    
                </div>
            </div>

            {{-- <div class="form-group">
                    {{Form::label('body','Description')}}
                    {{Form::textarea('description','',[ 'id'=>'article-ckeditor', 'class'=>'form-control')}}
            </div>     --}}

            <div class = "row">
                <div class = "col-6">
                    <div class="form-group">
                        {{Form::label('body','Included Components')}}
                        {{Form::text('compatibility','',[ 'id'=>'article-ckeditor', 'class'=>'form-control'])}}
                    </div>    
                </div>

                <div class = "col-2">
                    <div class="form-group">
                        {{Form::label('number','In Stock')}}
                        {{Form::text('inStock','',[ 'id'=>'article-ckeditor', 'class'=>'form-control'])}}
                    </div>    
                </div>

                <div class = "col-4">
                    <div class="form-group">
                        {{Form::label('body','Category Id')}}
                        {{Form::text('categoryId','',[ 'id'=>'article-ckeditor', 'class'=>'form-control'])}}
                    </div>    
                </div>
            </div>

            <div class = "row">
                <div class = "col-4">
                    <div class = "form-group">
                        {{Form::file('mobo_image1')}}
                    </div>
                </div>

                <div class = "col-4">
                    <div class = "form-group">
                        {{Form::file('mobo_image2')}}
                    </div>
                </div>

                <div class = "col-4">
                    <div class = "form-group">
                        {{Form::file('mobo_image3')}}
                    </div>
                </div>
            </div>
        {{Form::submit('Save',['class'=>'btn btn-outline-success'])}}
            @break
        @case('graphicCards')
                graphicCard
            @break
        @case('ram')
                motherboards
            @break
        @case('storage')
                storage
            @break
        @case('powerSupply')
                powerSupply
            @break
        @case('cabinets')
                cabinets
            @break
        @case('coolingSystem')
                coolingSystem
            @break
        @case('preBuilt')
                preBuilt
            @break
        @case('monitor')
                monitor
            @break
        @case('accessories')
                accessories
            @break
        @endswitch  
    {!! Form::close() !!}
{{-- </div> --}}
@endsection