@extends('layouts.app')

@section('content')
@foreach($info as $listing)
<div class="card text-center">
    <div class="card-header">
        Viewing Listing
    </div>
    <div class="card-body">
        <div class="row align-items-start">
            <div class="col-2">
            </div>
            <div class="col-8">
                <div class="row align-items-start">
                    <div class="col-12">
                        <h2>{{$listing->listingName}}</h2>
                    </div>
                </div>
                <div class="row align-items-start">
                    <div id="image" class="col-8">
                        <div>
                            @foreach ($images as $image)
                                <div class="mySlides">
                                    <img src="{{asset('/images/'.$image->filePath)}}" style="width:100%;">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div id="content" class="col-4">
                        <h3>£{{$listing->listingPrice}}</h3>

                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_xclick">
                            <input type="hidden" name="business" value="4H3KEWJBQFDGA">
                            <input type="hidden" name="lc" value="GB">
                            <input type="hidden" name="button_subtype" value="services">
                            <input type="hidden" name="no_note" value="1">
                            <input type="hidden" name="no_shipping" value="2">
                            <input type="hidden" name="currency_code" value="GBP">
                            <input type="hidden" name="amount" value="{{$listing->listingPrice}}">
                            <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHosted">
                            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-2">
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
