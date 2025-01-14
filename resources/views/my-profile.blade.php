@extends('layouts.app')

@section('content')
<div class="card text-center">
    <div class="card-header">
        My Profile
    </div>
    <div class="card-body">
        <div class="row align-items-start">
            <div class="col-2">
            </div>
            <div class="col-8">
                <table>
                    <thead>
                        <tr>
                            <td><b>User ID</b></td>
                            <td><b>User Name</b></td>
                            <td><b>User Email</b></td>
                            <td><b>User Email Verified At</b></td>
                            <td><b>User Created At</b></td>
                            <td><b>User Updated At</b></td>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($user as $info)
                        <tr>
                            <td>{{$info->id}}</td>
                            <td>{{$info->name}}</td>
                            <td>{{$info->email}}</td>
                            <td>{{$info->email_verified_at}}</td>
                            <td>{{$info->created_at}}</td>
                            <td>{{$info->updated_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-2">
            </div>
        </div>
    </div>
</div>
@endsection
