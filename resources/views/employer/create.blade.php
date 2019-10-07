@extends('layouts.master')

@section('title')
    Create Employer
@endsection
@section('content')

<a href="{{url('/')}}">Home</a>

<form method="post" action="{{route('employer.index')}}">
        @csrf
        <div class="form_group">
            <label >Select Company</label>
            <select name="company_id">
                <option value="">Select Company</option>
                @foreach($companies as $company)
                    <option value="{{$company->id}}">{{$company->name}}</option>
                @endforeach
            </select>
        </div>

         <div class="form_group">
            <label >Name</label>
            <input class="form_control" type="text" name="name">
        </div>
         <div class="form_group">
            <label >Phone Number</label>
            <input class="form_control" type="number" name="phone">
        </div>
        <div class="form_group">
            <label >Email</label>
            <input class="form_control" type="email" name="email">
        </div>
         <div class="form_group">
            <button class="btn" type="submit">Submit</button>
        </div>
</form>

    <div style="margin-top:20px;">
        <table>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <tbody>
            @foreach($employers as $employer)
                <td>{{$employer->name}}</td>
                <td>{{$employer->phone}}</td>
                <td>{{$employer->email}}</td>
                <td>
                    <a href="{{route('employer.update',$employer->id)}}" style="color: blue;">
                        Edit
                    </a>
                    
                </td>
                <td>
                 <a href="{{route('employer.delete',$employer->id)}}" style="color: red;">
                        Delete
                    </a>
                </td>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection