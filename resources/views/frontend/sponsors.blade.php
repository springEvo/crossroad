@extends('frontend.layouts.master')

@section('content')
<div class="wm-main-content">
    <!-- Main Section -->
    <div class="wm-main-section">
        <div class="container">
            <!-- Header Row -->
            <div class="row mb-4">
                <div class="col-md-4">
                    <font style="font-size: 20px; color: #2c0ac1; text-align: left;">Sponsors</font>
                </div>
                <div class="col-md-4">
                    <figure style="border: 1px solid #000; text-align: center; padding: 10px;">
                        <img src="{{ asset('logo/diamon.png') }}" alt="Diamond Sponsor" style="width: 150px;">
                        <h2 style="color: rgb(3, 3, 109);">
                            Diamond Sponsor<br>
                            5'.5" x 2'
                        </h2>
                    </figure>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('logo/logo.png') }}" alt="Event Logo" style="width: 100px; float: right;">
                </div>
            </div>

            <!-- Platinum Sponsors Row -->
            <div class="row mb-4">
                @for ($i = 0; $i < 3; $i++)
                    <div class="col-md-4">
                        <figure style="border: 1px solid #000; text-align: center; padding: 10px;">
                            <h2 style="color: rgb(3, 3, 109);">
                                Platinum Sponsor<br>
                                4'.5" x 2'
                            </h2>
                        </figure>
                    </div>
                @endfor
            </div>
            <div class="row text-center my-4">
                <div class="col-12">
                    <h3 style="color: #08368f; font-weight: bold;">THE FIRST IN MYANMAR</h3>
                    <h1 style="color: #08368f; font-weight: bold; text-transform: uppercase;">
                        Crossroads Institutional Alumni Business Networking Event
                    </h1>
                    <h4 style="color: #c00;">
                        Business Connections ▪ Education Pathways ▪ Product Shows ▪ Career Opportunities
                    </h4>
                </div>
            </div>
            
            <!-- Gold Sponsors Row -->
            <div class="row mb-4">
                <div class="col-md-1"></div>
                @for ($i = 0; $i < 5; $i++)
                    <div class="col-md-2">
                        <figure style="border: 1px solid #000; text-align: center; padding: 10px;">
                            <h2 style="color: goldenrod;">
                                Gold Sponsor<br>
                                3'.5" x 2'
                            </h2>
                        </figure>
                    </div>
                @endfor
                <div class="col-md-1"></div>
            </div>

            <!-- Silver Sponsors Row -->
            <div class="row">
                @for ($i = 0; $i < 12; $i++)
                    <div class="col-md-2">
                        <figure style="border: 1px solid #000; text-align: center; padding: 10px;">
                            <h2 style="color: gray;">
                                Silver Sponsor<br>
                                2' x 1'
                            </h2>
                        </figure>
                    </div>
                @endfor
            </div>
        </div>
    </div>
    <!-- Main Section End -->
</div>
@endsection
