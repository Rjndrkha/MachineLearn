@extends('layouts.app')
@section('content')
<div class="container mt-5 pt-5">
    <div class="text-center mb-3">    
        <h1>Result</h1>
        <img src="{{ asset('storage/' . $image_name) }}" alt="Image Result" style="width:600px;">
    </div>
    <textarea class="form-control" style="background-color:antiquewhite" id="image-text" rows="15" cols="100"></textarea>        
</div>
@endsection