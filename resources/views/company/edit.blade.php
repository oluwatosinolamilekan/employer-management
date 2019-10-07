@extends('layouts.master')

@section('content')
<form method="post" action="{{route('company.update',$company->id)}}">
        @csrf
        <div class="form_group">
            <label >Company Name</label>
            <input class="form_control" type="text" name="name" value="{{$company->name}}">
        </div>
         <div class="form_group">
            <label >Company Address</label>
            <input class="form_control" type="text" name="address" value="{{$company->address}}">
        </div>
         <div class="form_group">
            <button class="" type="submit">Submit</button>
        </div>
    </form>

@endsection