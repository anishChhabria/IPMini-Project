@extends('pages/compare')

@section('compare')
        {{-- @foreach ($processors as $item)
            @foreach($item as $temp)
                {{$temp}}
            @endforeach
            <br>
        @endforeach --}}
    <div class="row">
        <div class="col-6" style="text-align:center;">
            <h3>Select 1st processor</h3>
            <br>
            <select class="form-control m-bot15" name="role_id">
                @foreach($processors as $item)
                    @foreach ($item as $temp)
                        <option value="{{ $temp }}">{{ $temp }}</option>  
                    @endforeach
                @endforeach  
            </select>
        </div>
        <div class="col-6" style="text-align:center;">
            <h3>Select 2nd processor </h3>
            <br>
            <select class="form-control m-bot15" name="role_id">
                @foreach($processors as $item)
                    @foreach ($item as $temp)
                        <option value="{{ $temp }}">{{ $temp }}</option>  
                    @endforeach
                @endforeach  
            </select>
        </div>    
    </div>
@endsection


{{-- @if ($mod->count())
                    @foreach($roles as $role)
                    <option value="{{ $role->id }}" {{ $selectedRole == $role->id ? 'selected="selected"' : '' }}>{{ $role->name }}</option>  
                    @endforeach  
                @endif     --}}
                    {{-- @foreach ($processors as $item)
                        @foreach($item as $temp)
                            {{$temp}}
                        @endforeach
                    @endforeach --}}