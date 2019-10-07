@extends('layouts.master')

@section('content')
    <form method="post" action="{{route('employer.update',$employer->id)}}">
        @csrf
        <div class="">
            <label >Select Company</label>
            <select name="company_id">
                @foreach($companies as $company)
                    <option value="{{$employer->company_id}}">{{$company->name}}</option>
                @endforeach
            </select>
        </div>

         <div class="">
            <label >Name</label>
            <input class="" type="text" name="name" value="{{$employer->name}}">
        </div>
         <div class="">
            <label >Phone Number</label>
            <input class="" type="number" name="phone" value="{{$employer->phone}}">
        </div>
        <div class="">
            <label >Email</label>
            <input class="" type="email" name="email" value="{{$employer->email}}">
        </div>
         <div class="">
            <button class="btn" type="submit">Submit</button>
        </div>
</form>

@endsection