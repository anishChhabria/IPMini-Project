@extends('navbar.navbar')

@section('content')

<div class ="container">
        <form action = "/profile/store" method ="POST" >
                @csrf
            <button type="submit" class="btn btn-success">Click Me</button>
        </form>
</div>

@endsection

