@extends('layouts.app')

@section('content')
<div class="card text-center">
    <div class="card-header">
        My Listings
    </div>
    <div class="card-body">
        <div class="row align-items-start">
            <div class="col-1">
            </div>
            <div class="col-10">
                <table class="table">
                    <thead>
                        <tr>
                            <!-- Head -->
                            
                            <th style="width: 25vh"></th>
                            <th>Returned {{count($data)}} items.</th>

                            <!-- Old Design -->
                            <!-- <td><b>Listing ID</b></td>
                            <td><b>Listing Name</b></td>
                            <td><b>Listing Price</b></td>
                            <td><b>Listing Component</b></td>
                            <td><b>Listing Model</b></td>
                            <td><b>Listing Quality</b></td>
                            <!-- Do not need to show user info -->
                            <!-- <td><b>User Name</b></td>
                            <td><b>User ID</b></td> -->
                            <!-- <td><b>Created At</b></td>
                            <td><b>Updated At</b></td>
                            <td><b>Delete</b></td> -->
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($data as $listing)
                            <tr class="listing" style="height: 25vh" onclick="window.location='/listing/{{$listing->id}}'">
                                <td style="position: relative;">
                                    <!-- <a href="/listing/{{$listing->id}}">{{$listing->id}}</a> -->

                                    @php
                                        $imageCount = 0;
                                    @endphp
                                    @foreach ($images as $image)
                                        @if (($image->listingID == $listing->id) && ($imageCount < 1))
                                            @php
                                                $imageCount = $imageCount + 1;
                                            @endphp
                                            <a href="/edit-listing/{{$listing->id}}"><img src="{{asset('/images/'.$image->filePath)}}" style="position: absolute; top: 50%; left: 50%; -ms-transform: translate(-50%, -50%); transform: translate(-50%, -50%); max-height: 25vh; max-width: 25vh; height: auto; width: auto"></a>
                                        @endif
                                    @endforeach
                                    @if ($imageCount == 0)
                                        <a href="/edit-listing/{{$listing->id}}"><img src="{{asset('/images/noImageUploaded.png')}}" style="position: absolute; top: 50%; left: 50%; -ms-transform: translate(-50%, -50%); transform: translate(-50%, -50%); max-height: 25vh; max-width: 25vh; height: auto; width: auto"></a>
                                    @endif
                                </td>
                                <td style="position: relative;">
                                    <div style="word-wrap: break-word;">
                                        <p style="display:inline-block;"><strong>{{$listing->listingName}}</strong></p>
                                        <br>
                                        <p style="display:inline-block;">£{{$listing->listingPrice}}</p>
                                        <br>
                                        <p style="display:inline-block;">{{$listing->listingQuality}}</p>
                                        <p style="display:inline-block;">{{$listing->listingModel}}</p>
                                        <p style="display:inline-block;">{{$listing->listingComponent}}</p>
                                        @if ($listing->listingDescription != NULL)
                                            <br>
                                            <p style="display:inline-block; word-break: break-word;">{{$listing->listingDescription}}</p>
                                        @endif
                                        <br>
                                        <p style="display:inline-block;">{{$listing->userName}}</p>
                                        <br>
                                        <button onclick="deleteListing({{$listing->id}})">Delete Listing</button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                    <!-- <tbody>
                        @foreach($data as $listing)
                        <tr>
                            <td><a href="/edit-listing/{{$listing->id}}">{{$listing->id}}</a></td>
                            <td>{{$listing->listingName}}</td>
                            <td>£{{$listing->listingPrice}}</td>
                            <td>{{$listing->listingComponent}}</td> -->
                            <!-- <td>{{$listing->listingModel}}</td>
                            <td>{{$listing->listingQuality}}</td> -->

                            <!-- Do not need to show user info -->
                            <!-- <td>{{$listing->userName}}</td>
                            <td>{{$listing->userID}}</td> -->

                            <!-- <td>{{$listing->created_at}}</td>
                            <td>{{$listing->updated_at}}</td>
                            <td><button onclick="deleteListing({{$listing->id}})">Delete Listing</button></td> -->

                            <!-- old Delete -->
                            <!-- <td><a href="/delete/{{$listing->id}}">Delete</a></td> -->

                        <!-- </tr>
                        @endforeach
                    </tbody> -->
                </table>
                <span>{{$data->links()}}</span>
            </div>
            <div class="col-1">
            </div>
        </div>
    </div>
</div>

<script>
    function deleteListing(listingID) {
        let text = "Are you sure you want ot delete this listing?\nClick OK to delete or Cancel to go back.";
        if (confirm(text) == true) {
            location.href = "/delete/"+listingID;
        } else {
            
        }
    }
</script>
@endsection
