
@extends('frontend.layouts.master')

@section('content')
<style>
    .header-title {
      color: #007bff;
      font-size: 1.5rem;
      font-weight: bold;
      margin-bottom: 20px;
    }
    .table-highlight {
      background-color: #fffbe5;
    }
    .category-a { background-color: #c3d9f7; } /* Light blue */
    .category-b { background-color: #f7d3c3; } /* Light brown */
    .category-c { background-color: #f7f3c3; } /* Light yellow */
    .category-d { background-color: #d3f7c3; } /* Light green */
    .strong-text { font-weight: bold; }
  </style>
<div class="wm-main-content">
    <!-- Main Section -->
    <div class="wm-main-section">
        <div class="container mt-5" style="margin-top: 20px;">
            <h2 style="color:rgb(3, 3, 109)">Exhibitors</h2>
            <table class="table table-bordered text-center">
              <thead class="table-warning">
                <tr style=" background-color: rgb(3, 3, 109);color:#fff;">
                  <th>Exhibitors</th>
                  <th>Price (MMK)</th>
                  <th>Size</th>
                  <th>No.s</th>
                  <th>Benefit</th>
                </tr>
              </thead>
              <tbody>
                <tr class="category-a">
                  <td>A</td>
                  <td>1,600,000</td>
                  <td>2Mx3M</td>
                  <td>20</td>
                  <td class="text-start" rowspan="4">
                    Counter table 1 unit,<br>
                    2 Chairs, 1 trash bin,<br>
                    1 Unit 5Amp Power Socket,<br>
                    2 Unit Fluorescent Light,<br>
                    Name of company on fascia board.<br>
                    Own decoration: to discuss with booth contractor for pricing.
                  </td>
                </tr>
                <tr class="category-b">
                  <td>B</td>
                  <td>1,200,000</td>
                  <td>2Mx2M</td>
                  <td>15</td>
                  
                </tr>
                <tr class="category-c">
                  <td>C</td>
                  <td>800,000</td>
                  <td>2Mx2M</td>
                  <td>10</td>
         
                </tr>
                <tr class="category-d">
                  <td>D</td>
                  <td>500,000</td>
                  <td>2Mx3M</td>
                  <td>5</td>
                  
                </tr>
                <tr class="table-highlight">
                  <td>Entrance Booth</td>
                  <td>2,500,000</td>
                  <td>12Mx3M</td>
                  <td>1</td>
                  <td class="strong-text">The entrance area for great branding.</td>
                </tr>
                <tr class="table-highlight">
                  <td>Exclusive Lounge</td>
                  <td>2,000,000</td>
                  <td>Custom</td>
                  <td>1</td>
                  <td class="strong-text">Exclusive.</td>
                </tr>
              </tbody>
            </table>
          </div>
    </div>
</div>
    @endsection
