@extends('frontend.layouts.master')

@section('content')
<div class="wm-main-content">
    <!-- Main Section -->
    <div class="wm-main-section">
        <div class="container" style="margin-top: 20px;">
            <div class="row mb-4">
                <div class="col-md-12" style="margin-top: 20px;">
                    <h1 style="color: rgb(3, 3, 109)">Sample Design</h1>
                 </div>
                <div class="col-md-12">
                    <img src="{{ asset('logo/sample1.png') }}" alt="sample">
                </div>

                <div class="col-md-12"><hr></div>

                <div class="col-md-12">
                    <img src="{{ asset('logo/sample2.png') }}" alt="sample">
                </div>

                <div class="col-md-12"><hr></div>

                <div class="col-md-12" style="margin-top: 20px;">
                    <h1 style="color: rgb(3, 3, 109);text-align:center;">Sample Entrance</h1>
                 </div>
                <div class="col-md-6">
                    <img src="{{ asset('logo/sample3.jpg') }}" alt="sample">
                </div>

                <div class="col-md-6">
                    <img src="{{ asset('logo/sample4.jpg') }}" alt="sample">
                </div>

                <div class="col-md-12">
                    <br><br>
                    <img src="{{ asset('logo/sample5.png') }}" alt="sample">
                </div>
              
            </div>

        </div>
    </div>
</div>
@endsection