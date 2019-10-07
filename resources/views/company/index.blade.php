@extends('layouts.master')

@section('title')
    Create Company
@endsection
@section('content')
<a href="{{url('/')}}">Home</a>
    <form method="post" action="{{route('company.index')}}">
        @csrf
        <div class="form_group">
            <label >Company Name</label>
            <input class="form_control" type="text" name="name">
        </div>
         <div class="form_group">
            <label >Company Address</label>
            <input class="form_control" type="text" name="address">
        </div>
         <div class="form_group">
            <button class="" type="submit">Submit</button>
        </div>
    </form>

<div style="margin-top:20px;">
        <table>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <tbody>
            @foreach($companies as $company)
                <td>{{$company->name}}</td>
                <td>{{$company->address}}</td>
                <td>
                    <a href="{{route('company.update',$company->id)}}" style="color: blue;">
                        Edit
                    </a>
                </td>
                <td>
                 <a href="{{route('company.delete',$company->id)}}" style="color: red;">
                        Delete
                    </a>
                </td>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection