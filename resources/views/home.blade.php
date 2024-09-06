@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <example-component></example-component> 
        </div>
    </div>
</div>

<br>

@role('admin')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <admin-component></admin-component>
        </div>
    </div>
</div>
@endrole

@endsection
