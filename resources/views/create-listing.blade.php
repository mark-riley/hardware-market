@extends('layouts.app')

@section('content')
<div class="card text-center">
    <div class="card-header">
        Create Listing
    </div>
    <div class="card-body">
        <div class="row align-items-start">
            <div class="col-2">
            </div>
            <div id="add listing" class="col-8" style="text-align: left;border-bottom:1px solid #222222;">
                <h4>Create Listing</h4>

                <form style="font-size: 10pt;" id="newListingForm" action="/add-listing" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="mb-3">
                        <label for="listingName" class="form-label">Listing Name</label>
                        <input type="text" class="form-control" id="listingName" name="listingName">
                    </div>

                    <div class="mb-3">
                        <label for="listingComponent" class="form-label">Listing Component</label>
                        <!-- Old, manual input -->
                        <!-- <input type="text" class="form-control" id="listingComponent" name="listingComponent"> -->
                        <select name="listingComponent" id="listingComponent" onchange="changeSelectDropDown()" required>
                            <option value="CPU">CPU</option>
                            <option value="CPU Cooler">CPU Cooler</option>
                            <option value="Motherboard">Motherboard</option>
                            <option value="RAM">RAM</option>
                            <option value="Storage">Storage</option>
                            <option value="GPU">GPU</option>
                            <option value="Case">Case</option>
                            <option value="PSU">PSU</option>
                            <option value="Monitor">Monitor</option>
                            <option value="Mouse">Mouse</option>
                            <option value="Keyboard">Keyboard</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="listingModel" class="form-label">Listing Model</label>
                        <input type="text" class="form-control" id="listingModel" name="listingModel">
                    </div>

                    <div class="mb-3">
                        <label for="listingQuality" class="form-label">Listing Quality</label>
                        <input type="text" class="form-control" id="listingQuality" name="listingQuality">
                    </div>

                    <div class="mb-3">
                        <label for="listingDescription" class="form-label">Listing Description</label>
                        <input type="text" class="form-control" id="listingDescription" name="listingDescription">
                    </div>

                    <div class="mb-3">
                        <label for="listingPrice" class="form-label">Listing Price</label>
                        <input type="number" class="form-control" id="listingPrice" name="listingPrice" min="0" step="0.01">
                    </div>

                    <div class="mb-3">
                        <label for="file" class="form-label">Photos</label>
                        <input type="file" class="form-control" id="file" name="file[]" multiple>
                    </div>
            
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <br/>
                    <br/>         
                </form>
            </div>
            <div class="col-2">
            </div>
        </div>

        <!-- <div class="row align-items-start">
            <div class="col-2">
            </div>

            <div class="col-8">
              		
            </div>

            <div class="col-2">
            </div>
        </div> -->
    </div>
</div>
@endsection
