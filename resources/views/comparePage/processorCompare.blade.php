@extends('pages/compare')

@section('compare')
    <div class="col-6">
        <h3>Select 1st processor</h3>
        <br>
        <select class="form-control m-bot15" name="role_id">
            @if ($mod->count())
                @foreach($roles as $role)
                <option value="{{ $role->id }}" {{ $selectedRole == $role->id ? 'selected="selected"' : '' }}>{{ $role->name }}</option>    
            @endif    
        </select>
    </div>
    <div class="col-6">
        <h3>Select 2nd processor </h3>
    </div>    
@endsection
