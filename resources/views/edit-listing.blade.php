@extends('layouts.app')

@section('content')
<div class="card text-center">
    <div class="card-header">
        Edit Listing
    </div>
    <div class="card-body">
        <div class="row align-items-start">
            <div class="col-2">
            </div>
            <div id="edit listing" class="col-8" style="text-align: left;border-bottom:1px solid #222222;">
                <h4>Edit Listing</h4>

                @foreach($info as $listing)
                <form style="font-size: 10pt;" id="editListingForm" action="/edit-listing" method="post">
                @csrf
                    <input type="hidden" id="id" name="id" value="{{$listing->id}}"/>
                    <div class="mb-3">
                        <label for="listingName" class="form-label">Listing Name</label>
                        <input type="text" class="form-control" id="listingName" name="listingName" value="{{$listing->listingName}}">
                    </div>

                    <div class="mb-3">
                        <label for="listingPrice" class="form-label">Listing Price</label>
                        <input type="text" class="form-control" id="listingPrice" name="listingPrice" value="{{$listing->listingPrice}}">
                    </div>

                    <div class="mb-3">
                        <label for="listingComponent" class="form-label">Listing Component</label>
                        <input type="text" class="form-control" id="listingComponent" name="listingComponent" value="{{$listing->listingComponent}}">
                    </div>

                    <div class="mb-3">
                        <label for="listingModel" class="form-label">Listing Model</label>
                        <input type="text" class="form-control" id="listingModel" name="listingModel" value="{{$listing->listingModel}}">
                    </div>

                    <div class="mb-3">
                        <label for="listingQuality" class="form-label">Listing Quality</label>
                        <input type="text" class="form-control" id="listingQuality" name="listingQuality" value="{{$listing->listingQuality}}">
                    </div>
            
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <br/>
                    <br/>         
                </form>
                @endforeach
            </div>
            <div class="col-2">
            </div>
        </div>
    </div>
</div>
@endsection