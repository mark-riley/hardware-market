@extends('layouts.app')

@section('content')
<div class="card text-center">
    <div class="card-header">
        Thank you for your purchase!
    </div>
    <div class="card-body">
        <div class="row align-items-start">
            <div class="col-2">
            </div>
            <div class="col-8">
                
            </div>
            <div class="col-2">
            </div>
        </div>
        <div class="row align-items-start">
            <div class="col-2"  ></div>
        	</div>

        	<div class="row align-items-start">
            	<div class="col-2">
                </div>

            	<div class="col-8">
              		<p>You just purchased:</p>

                      @foreach ($images as $image)
                      <img src="{{asset('/images/'.$image->filePath)}}" style="width: 100%">
                  @endforeach
                  <table>
                      <thead>
                          <tr>
                              <td><b>Listing ID</b></td>
                              <td><b>Listing Name</b></td>
                              <td><b>Listing Price</b></td>
                              <td><b>Listing Component</b></td>
                              <td><b>Listing Model</b></td>
                              <td><b>Listing Quality</b></td>
                              <td><b>User Name</b></td>
                              <td><b>User ID</b></td>
                              <td><b>Created At</b></td>
                              <td><b>Updated At</b></td>
                          </tr>
                      </thead>
  
                      <tbody>
                          @foreach($purchase as $listing)
                          <tr>
                              <td>{{$listing->id}}</td>
                              <td>{{$listing->listingName}}</td>
                              <td>{{$listing->listingPrice}}</td>
                              <td>{{$listing->listingComponent}}</td>
                              <td>{{$listing->listingModel}}</td>
                              <td>{{$listing->listingQuality}}</td>
                              <td>{{$listing->userName}}</td>
                              <td>{{$listing->userID}}</td>
                              <td>{{$listing->created_at}}</td>
                              <td>{{$listing->updated_at}}</td>
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
</div>
@endsection
