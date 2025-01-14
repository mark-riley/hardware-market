@extends('layouts.app')

@section('content')
<div class="card text-center">
    <div class="card-header">
        Admin
    </div>
    <div class="card-body">
        <div class="row align-items-start">
            <div class="col-2">
            </div>
            <div class="col-8">
                <form style="font-size: 10pt;" id="newComponentForm" action="/add-component" method="post" enctype="multipart/form-data">
                    @csrf
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-2">
            </div>
        </div>
    </div>
</div>
@endsection
