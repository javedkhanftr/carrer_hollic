@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i=1;
                    @endphp
                    @foreach($user as $val)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $val['name']; }}</td>
                        <td>{{ $val['email']; }}</td>
                        <td>{{ $val['address']; }}</td>
                        <td>
                            <a href="{{url('user_edit/'.$val->id)}}" class="btn btn-sm btn-primary">edit</a>
                            <a href="{{url('delete/'.$val->id)}}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection