@extends('frontend.layouts.master')

@section('content')
<div class="wm-main-content">
    <!-- Main Section -->
    <div class="wm-main-section" style="background-color: rgb(239, 239, 239);">
        <div class="container">
            <div class="row"  style="padding-top: 50px;">
                <div class="col-md-6">
                    <h2 style="color: rgb(9, 9, 126);line-height:2;"> Organizer Team</h2>
                    <hr style="height: 1px; background-color: rgb(9, 9, 126); width: 100px; border: none;">

                    <h2 style="color: rgb(0, 0, 7);line-height:2;">
                        Contact<br>
                        099 620 77447  Ko Lin<br>
                        09 763 195133  Ma Thinzar<br>
                        09 772 24184 3 Ma Choon<br>
                        ceooffice.mm@gmail.com<br>
                    </h2>
                   <br><br>
                </div>
              
                <div class="col-md-6">
                    <center>
                    <img src="{{asset('logo/contact.png')}}" alt="contact" style="">
                    <br><br>
                    </center>
                 </div>
   
            </div>

        </div>
    </div>
</div>
@endsection