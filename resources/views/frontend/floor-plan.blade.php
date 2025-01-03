
@extends('frontend.layouts.master')

@section('content')
<div class="wm-main-content">
    <!-- Main Section -->
    <div class="wm-main-section">
    <div class="container my-5">
        <!-- Title Section -->
        <div class="row mb-4 text-center">
            <div class="col-12">
                <h1 class="fw-bold" style="color: rgb(3, 3, 109);">Event Floor Plan</h1>
                <p style="color: rgb(3, 3, 109);">Explore exhibitor booths, sponsor areas, and networking zones.</p>
            </div>
        </div>

        <!-- Floor Plan Image -->
        <div class="row mb-5 text-center">
            <div class="col-12">
                <img src="{{asset('logo/floor.png')}}" alt="Floor Plan">
            </div>
        </div>

        <!-- Exhibitors Table -->
        <div class="row mb-5">
            <div class="col-md-6">
                <h2 class="fw-bold" style="color: rgb(3, 3, 109);">Exhibitors</h2>
                <table class="table table-bordered table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Type</th>
                            <th>Color</th>
                            <th>Size</th>
                            <th>No. of Booths</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>A</td>
                            <td style="background-color: #ADD8E6; color: #000;">A</td>
                            <td>2Mx3M</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>B</td>
                            <td style="background-color: #A52A2A; color: #fff;">B</td>
                            <td>2Mx2M</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td>C</td>
                            <td style="background-color: #FFFF00; color: #000;">C</td>
                            <td>2Mx2M</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>D</td>
                            <td style="background-color: #008000; color: #fff;">D</td>
                            <td>2Mx2M</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>Entrance Visual Booth</td>
                            <td>-</td>
                            <td>12Mx3M</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Exclusive Lounge</td>
                            <td>-</td>
                            <td>-</td>
                            <td>1</td>
                        </tr>
                    </tbody>
                </table>
            </div>
     
            <div class="col-md-6">
                <h2 class="fw-bold" style="color: rgb(3, 3, 109);">Sponsors</h2>
                <table class="table table-bordered table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Type</th>
                            <th>Color</th>
                            <th>Size</th>
                            <th>No. of Booths</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Diamond</td>
                            <td style="background-color: #87CEEB; color: #000;">💎</td>
                            <td>6Mx4M</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Platinum</td>
                            <td style="background-color: #4682B4; color: #fff;">P</td>
                            <td>2Mx4M</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Gold</td>
                            <td style="background-color: #FFD700; color: #000;">G</td>
                            <td>2Mx3M</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>Silver</td>
                            <td style="background-color: #C0C0C0; color: #000;">S</td>
                            <td>2Mx2M</td>
                            <td>16</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</div>
    @endsection
