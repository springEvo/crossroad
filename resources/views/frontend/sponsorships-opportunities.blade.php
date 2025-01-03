
@extends('frontend.layouts.master')

@section('content')
<style>
    .table-highlight {
      background-color: #f8f9fa;
      font-weight: bold;
    }
    .silver { background-color: #d9edf7; } /* Light blue */
    .gold { background-color: #f9f6a7; } /* Light yellow */
    .platinum { background-color: #d0e0d8; } /* Light gray-green */
    .diamond { background-color: #b8d1f3; } /* Light purple-blue */
    .benefits-header {
      background-color: rgb(3, 3, 109);
      color: #fff;
      text-align: center;
      font-weight: bold;
    }
  </style>
<div class="wm-main-content">
    <!-- Main Section -->
    <div class="wm-main-section">
        <div class="container mt-5" style="margin-top:20px;">
            <h2 class="text-center mb-4" style="color:rgb(3, 3, 109);">Sponsorship Opportunities (Prime Area-Sponsors)</h2><br>
            <table class="table table-bordered text-center">
              <thead>
                <tr>
                  <th rowspan="2" class="benefits-header">Sponsor Benefits</th>
                  <th class="silver">Silver<br>
                    {{-- 3,500,000 MMK --}}
                    <br>(6)</th>
                  <th class="gold">Gold<br>
                    {{-- 7,000,000 MMK --}}
                    <br>(3)</th>
                  <th class="platinum">Platinum<br>
                    {{-- 12,000,000 MMK --}}
                    <br>(2)</th>
                  <th class="diamond">Diamond<br>
                    {{-- 16,000,000 MMK --}}
                    <br>
                    (1)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Sponsorship Recognition Award</td>
                  <td>✔</td>
                  <td>✔</td>
                  <td>✔</td>
                  <td>✔</td>
                </tr>
                <tr class="table-highlight">
                  <td>Dedicated space on the event page and signage</td>
                  <td>✔</td>
                  <td>✔</td>
                  <td>✔</td>
                  <td>✔</td>
                </tr>
                <tr>
                  <td>Social media share of your sponsorship announcement</td>
                  <td>✔</td>
                  <td>✔</td>
                  <td>✔</td>
                  <td>✔</td>
                </tr>
                <tr class="table-highlight">
                  <td>Loop of logo/product scroll at bottom of screen</td>
                  <td>Up to 3 mins/loop</td>
                  <td>Up to 5 mins/loop</td>
                  <td>Up to 10 mins/loop</td>
                  <td>Up to 15 mins/loop</td>
                </tr>
                <tr>
                  <td>48” Digital Display looping sponsor logos</td>
                  <td>✔</td>
                  <td>✔</td>
                  <td>✔</td>
                  <td>✔</td>
                </tr>
                <tr class="table-highlight">
                  <td>Networking Lounge Access with refreshments</td>
                  <td>Small</td>
                  <td>Medium</td>
                  <td>Large</td>
                  <td>Premium</td>
                </tr>
                <tr>
                  <td>Lunch Boxes</td>
                  <td>5 Boxes</td>
                  <td>5 Pax</td>
                  <td>10 Boxes</td>
                  <td>15 Pax</td>
                </tr>
                <tr class="table-highlight">
                  <td>Exclusive interview and social media posts</td>
                  <td>✔</td>
                  <td>✔</td>
                  <td>✔</td>
                  <td>✔</td>
                </tr>
                <tr>
                  <td>Logo on event promotion materials</td>
                  <td>✔</td>
                  <td>✔</td>
                  <td>✔</td>
                  <td>✔</td>
                </tr>
                <tr class="table-highlight">
                  <td>Logo on entrance arc</td>
                  <td>✔</td>
                  <td>✔</td>
                  <td>✔</td>
                  <td>✔</td>
                </tr>
              </tbody>
            </table>
          </div>
    </div>
</div>
    @endsection
