
@extends('frontend.layouts.master')

@section('content')
<style>
    .category-header {
      background-color: rgb(3, 3, 109); /* Golden background for category headers */
      color: #fff; /* White text */
      font-weight: bold;
      text-align: center;
    }
    .sub-header {
      background-color: #f8f9fa; /* Light gray for sub-categories */
      font-weight: bold;
      text-align: left;
    }
    .text-highlight {
      background-color: #e9ecef; /* Subtle gray for table rows */
    }
  </style>
<div class="wm-main-content">
    <!-- Main Section -->
    <div class="wm-main-section">
        <div class="container mt-5" style="margin-top:30px;">
            <table class="table table-bordered">
              <thead>
                <tr class="category-header">
                  <th>CATEGORY</th>
                  <th>QUANTITY</th>
                  {{-- <th>COST</th> --}}
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td colspan="3" class="category-header">Main Event Sponsors</td>
                </tr>
                <tr class="text-highlight">
                  <td>Diamond Sponsor</td>
                  <td class="text-center">1</td>
                  {{-- <td>MMK 16,000,000</td> --}}
                </tr>
                <tr>
                  <td>Platinum Sponsor</td>
                  <td class="text-center">3</td>
                  {{-- <td>MMK 12,000,000</td> --}}
                </tr>
                <tr class="text-highlight">
                  <td>Gold Sponsor</td>
                  <td class="text-center">4</td>
                  {{-- <td>MMK 7,000,000</td> --}}
                </tr>
                <tr>
                  <td>Silver Sponsor</td>
                  <td class="text-center">16</td>
                  {{-- <td>MMK 3,500,000</td> --}}
                </tr>
                <tr>
                  <td colspan="3" class="category-header">Logo Branding for International Education Partners</td>
                </tr>
                <tr class="text-highlight">
                  <td>Logo branding for Education sector (2'x1')</td>
                  <td class="text-center">30</td>
                  {{-- <td>MMK 500,000</td> --}}
                </tr>
                <tr>
                  <td colspan="3" class="category-header">Exhibitors</td>
                </tr>
                <tr class="sub-header">
                  <td colspan="3">Booth Prices</td>
                </tr>
                <tr>
                  <td>A (3Mx2M)</td>
                  <td class="text-center">20</td>
                  {{-- <td>MMK 1,600,000</td> --}}
                </tr>
                <tr class="text-highlight">
                  <td>B (2Mx2M)</td>
                  <td class="text-center">15</td>
                  {{-- <td>MMK 1,200,000</td> --}}
                </tr>
                <tr>
                  <td>C (3Mx2M)</td>
                  <td class="text-center">10</td>
                  {{-- <td>MMK 800,000</td> --}}
                </tr>
                <tr class="text-highlight">
                  <td>D (2Mx2M)</td>
                  <td class="text-center">5</td>
                  {{-- <td>MMK 500,000</td> --}}
                </tr>
                <tr>
                  <td>Exclusive Lounge (Custom)</td>
                  <td class="text-center">1</td>
                  {{-- <td>MMK 2,500,000</td> --}}
                </tr>
                <tr class="text-highlight">
                  <td>Entrance (12Mx3M)</td>
                  <td class="text-center">1</td>
                  {{-- <td>MMK 2,000,000</td> --}}
                </tr>
              </tbody>
            </table>
          </div>
    </div>
</div>
    @endsection
