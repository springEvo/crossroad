@extends('frontend.layouts.master')

@section('content')
<div class="wm-main-content">
    <!-- Main Section -->
    <div class="wm-main-section" style="background-color: rgb(239, 239, 239);">
        <div class="container">
            <div class="row"  style="padding-top: 50px;">
                <div class="col-md-6">
                    <h2 style="color: rgb(0, 0, 7);">
                        Logo Branding on arch<br> for sponsors.<br>
                        (please note this is a sample)
                    </h2>
                   <br><br>
                </div>
              
                <div class="col-md-6">
                    <center>
                    <h2 style="color: rgb(0, 0, 7);">
                        Arch at entrance    
                    </h2>
                    <img src="{{asset('logo/branding.png')}}" alt="sponsorship" style="width: 400px;">
                    <br><br>
                    </center>
                 </div>
   
            </div>

        </div>
    </div>
</div>
@endsection