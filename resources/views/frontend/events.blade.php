
@extends('frontend.layouts.master')

@section('content')

		<div class="wm-main-content">
            <div class="wm-main-content">
                <!--// Main Section \\-->
                <div class="wm-main-section wm-whychooseus-full" >
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12">
                        <img src="{{asset('logo/googlef.jpg')}}">   
                        <hr>
                      </div>
                    </div>
                  </div>
              
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="whychooseus-list">
                                                <h3 style="text-align: center;color:#06388f;">COUNTDOWN TO THE EVENT</h3><br>
                                                <div class="countdown">
                                                    <div class="time-box">
                                                      <div id="days">00</div>
                                                      <span>Days</span>
                                                    </div>
                                                    <div class="time-box">
                                                      <div id="hours">00</div>
                                                      <span>Hours</span>
                                                    </div>
                                                    <div class="time-box">
                                                      <div id="minutes">00</div>
                                                      <span>Minutes</span>
                                                    </div>
                                                    <div class="time-box">
                                                      <div id="seconds">00</div>
                                                      <span>Seconds</span>
                                                    </div>
                                                  </div> 
                                                  <br>
                                                  <h3 style="text-align: center;color:#06388f;">
                                                    Event Venue<br>
                                                    LOTTE HOTEL YANGON</h3>
                                                  <p style="text-align: center;color:#06388f;">
                                                    The FIRSTIN MYANMAR<br>

                                                    <u>CROSS INSTITUTIONAL ALUMNI BUSINESS NETWORKING EVENT</u> <br>
                                                    Business Connections . Education Pathways . <br>
                                                    Product Shows . Career Opportunities<br>

                                                  No. 82, Sin Phyu Shin Avenue, Pyay Road, 6½ Mile, Ward 11, Hlaing Township, Yangon, Myanmar.<br>
                                                  Date : 31 January~1 February 2025 <br>
                                                  Time : 9:00am - 5:00pm <br>
                                                  </p>
                                               
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <img src="{{asset('logo/venue.jpg')}}" alt="">
                                        </div>

    
                                    </div>
                             
                                </div>
                                <br><hr>
                </div>
        
                <!--// Main Section \\-->
    
                <div class="wm-main-section">
                  <div class="container">
                      <!-- Header Row -->
                      <div class="row mb-4">
                        <div class="col-md-12"><br><br><br>
                          <h1 style="color: #08368f; font-weight: bold; text-transform: uppercase;">
                           <center> Our Main Sponsors</center>
                          </h1>
                        </div>
                          <div class="col-md-4">
                              <font style="font-size: 20px; color: #2c0ac1; text-align: left;">
                              </font>
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
                              <img src="{{ asset('logo/logo.png') }}" alt="Event Logo" style="width: 100px;">
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

                        <!--// Main Section \\-->
                <div class="wm-main-section wm-whychooseus-full" >
                  <div class="container">
                      <div class="row">
                          <div class="col-md-12">
                            <h1 style="color: #08368f; font-weight: bold; text-transform: uppercase;"><center> Educational Partner</center></h1>
                            <br><br>
                          </div>
                          <div class="col-md-3">
                            <img src="{{ asset('logo/par1.jpg') }}" alt="SBS">
                          </div>
                          <div class="col-md-3">
                            <img src="{{ asset('logo/par2.jpg') }}" alt="SBS">
                          </div>
                          <div class="col-md-3">
                            <img src="{{ asset('logo/par3.jpg') }}" alt="SBS">
                          </div>
                          <div class="col-md-3">
                            <img src="{{ asset('logo/par4.jpg') }}" alt="SBS">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <hr>
                        </div>
                          <div class="col-md-3">
                            <img src="{{ asset('logo/par5.jpg') }}" alt="">
                          </div>
                          <div class="col-md-3">
                            <img src="{{ asset('logo/par6.jpg') }}" alt="">
                          </div>
                          <div class="col-md-3">
                            <img src="{{ asset('logo/par7.jpg') }}" alt="">
                          </div>
                          <div class="col-md-3">
                            <img src="{{ asset('logo/par8.jpg') }}" alt="">
                          </div>


                          <div class="col-md-12">
                            <hr>
                          </div>
                            <div class="col-md-3">
                              <img src="{{ asset('logo/par9.jpg') }}" alt="">
                            </div>
                            <div class="col-md-3">
                              <img src="{{ asset('logo/par10.jpg') }}" alt="">
                            </div>
                            <div class="col-md-3">
                              <img src="{{ asset('logo/par11.jpg') }}" alt="">
                            </div>
                            <div class="col-md-3">
                              <img src="{{ asset('logo/par12.jpg') }}" alt="">
                            </div>


                            
                          <div class="col-md-12">
                            <hr>
                          </div>
                            <div class="col-md-3">
                              <img src="{{ asset('logo/par13.jpg') }}" alt="">
                            </div>
                            <div class="col-md-3">
                              <img src="{{ asset('logo/par14.jpg') }}" alt="">
                            </div>
                            <div class="col-md-3">
                              <img src="{{ asset('logo/par15.jpg') }}" alt="">
                            </div>
                            <div class="col-md-3">
                              <img src="{{ asset('logo/par16.jpg') }}" alt="">
                            </div>


                            
                          <div class="col-md-12">
                            <hr>
                          </div>
                            <div class="col-md-3">
                              <img src="{{ asset('logo/par17.jpg') }}" alt="">
                            </div>
                            <div class="col-md-3">
                              <img src="{{ asset('logo/par18.jpg') }}" alt="">
                            </div>
                            <div class="col-md-3">
                              <img src="{{ asset('logo/par19.jpg') }}" alt="">
                            </div>
                            <div class="col-md-3">
                              <img src="{{ asset('logo/par21.jpg') }}" alt="">
                            </div>

                            <div class="col-md-12">
                              <hr>
                            </div>

                            <div class="col-md-12">
                              <h1 style="color: #08368f; font-weight: bold; text-transform: uppercase;"><center>Corporate Partner Sponsors</center></h1>
                              <br><br>
                            </div>

                            <div class="col-md-3">
                              <img src="{{ asset('logo/mcb.jpg') }}" alt="">
                            </div>
                            <div class="col-md-3">
                              <img src="{{ asset('logo/real.jpg') }}" alt="">
                            </div>
                            <div class="col-md-3">
                              <img src="{{ asset('logo/wcom.jpg') }}" alt="">
                            </div>
                            <div class="col-md-3">
                              <img src="{{ asset('logo/cozy.jpg') }}" alt="">
                            </div>

                            <div class="col-md-12">
                              <hr>
                            </div>

                            <div class="col-md-3">
                              <img src="{{ asset('logo/shwe.png') }}" alt="">
                            </div>
                            <div class="col-md-3">
                              <img src="{{ asset('logo/heart.png') }}" alt="">
                            </div>
                            <div class="col-md-3">
                              <img src="{{ asset('logo/fly.jpg') }}" alt="">
                            </div>
                            <div class="col-md-3">
                              <img src="{{ asset('logo/chu.jpg') }}" alt="">
                            </div>

                            <div class="col-md-12">
                              <hr>
                            </div>
     
                            <div class="col-md-12">
                              <h1 style="color: #08368f; font-weight: bold; text-transform: uppercase;"><center>Speakers</center></h1>
                              <br><br>
                            </div>
                            
                            <div class="col-md-6">
                              
                              <div class="wm-postreviews">
                           
                                 <ul>
                                    <li>
                                         <div class="thumblist">
                                            <ul>
                                              <li>
                                                <h4><a href="#">U Nyi Nyi</a></h4>
                                                  <figure>
                                                    <img src="https://img.icons8.com/ios-filled/50/user-male-circle.png" alt="">
                                                 </figure>
                                                 

                                          <div class="wm-reviews-text">
                                    <div class="wm-rating">
                                      <span class="rating-box" style="width:100%"></span>											
                                    </div>
                                    <br>
                                    <p>Ai and Business Today<br>
                                      Speaker name (TBA)<br>
                                      Qualifications<br>
                                      Date:Time
                                      </p>
                                  </div>
                                              </li>
                                            </ul>
                                        </div>
                                    </li>
                                  </ul>
                                </div>
                        
                            </div>
                            <div class="col-md-6">
                              
                              <div class="wm-postreviews">
                           
                                 <ul>
                                    <li>
                                         <div class="thumblist">
                                            <ul>
                                              <li>
                                                <h4><a href="#">U Nyi Nyi</a></h4>
                                                  <figure>
                                                    <img src="https://img.icons8.com/ios-filled/50/user-male-circle.png" alt="">
                                                 </figure>
                                                 

                                          <div class="wm-reviews-text">
                                    <div class="wm-rating">
                                      <span class="rating-box" style="width:100%"></span>											
                                    </div>
                                    <br>
                                    <p>Ai and Business Today<br>
                                      Speaker name (TBA)<br>
                                      Qualifications<br>
                                      Date:Time
                                      </p>
                                  </div>
                                              </li>
                                            </ul>
                                        </div>
                                    </li>
                                  </ul>
                                </div>
                            </div>


                            <div class="col-md-6">
                              
                              <div class="wm-postreviews">
                           
                                 <ul>
                                    <li>
                                         <div class="thumblist">
                                            <ul>
                                              <li>
                                                <h4><a href="#">U Nyi Nyi</a></h4>
                                                  <figure>
                                                    <img src="https://img.icons8.com/ios-filled/50/user-male-circle.png" alt="">
                                                 </figure>
                                                 

                                          <div class="wm-reviews-text">
                                    <div class="wm-rating">
                                      <span class="rating-box" style="width:100%"></span>											
                                    </div>
                                    <br>
                                    <p>Ai and Business Today<br>
                                      Speaker name (TBA)<br>
                                      Qualifications<br>
                                      Date:Time
                                      </p>
                                  </div>
                                              </li>
                                            </ul>
                                        </div>
                                    </li>
                                  </ul>
                                </div>
                            </div>

                            <div class="col-md-6">
                              
                              <div class="wm-postreviews">
                           
                                 <ul>
                                    <li>
                                         <div class="thumblist">
                                            <ul>
                                              <li>
                                                <h4><a href="#">U Nyi Nyi</a></h4>
                                                  <figure>
                                                    <img src="https://img.icons8.com/ios-filled/50/user-male-circle.png" alt="">
                                                 </figure>
                                                 

                                          <div class="wm-reviews-text">
                                    <div class="wm-rating">
                                      <span class="rating-box" style="width:100%"></span>											
                                    </div>
                                    <br>
                                    <p>Ai and Business Today<br>
                                      Speaker name (TBA)<br>
                                      Qualifications<br>
                                      Date:Time
                                      </p>
                                  </div>
                                              </li>
                                            </ul>
                                        </div>
                                    </li>
                                  </ul>
                                </div>
                            </div>

                            <div class="col-md-6">
                              
                              <div class="wm-postreviews">
                           
                                 <ul>
                                    <li>
                                         <div class="thumblist">
                                            <ul>
                                              <li>
                                                <h4><a href="#">U Nyi Nyi</a></h4>
                                                  <figure>
                                                    <img src="https://img.icons8.com/ios-filled/50/user-male-circle.png" alt="">
                                                 </figure>
                                                 

                                          <div class="wm-reviews-text">
                                    <div class="wm-rating">
                                      <span class="rating-box" style="width:100%"></span>											
                                    </div>
                                    <br>
                                    <p>Ai and Business Today<br>
                                      Speaker name (TBA)<br>
                                      Qualifications<br>
                                      Date:Time
                                      </p>
                                  </div>
                                              </li>
                                            </ul>
                                        </div>
                                    </li>
                                  </ul>
                                </div>
                            </div>

                                 <div class="col-md-6">
                              
                              <div class="wm-postreviews">
                           
                                 <ul>
                                    <li>
                                         <div class="thumblist">
                                            <ul>
                                              <li>
                                                <h4><a href="#">U Nyi Nyi</a></h4>
                                                  <figure>
                                                    <img src="https://img.icons8.com/ios-filled/50/user-male-circle.png" alt="">
                                                 </figure>
                                                 

                                          <div class="wm-reviews-text">
                                    <div class="wm-rating">
                                      <span class="rating-box" style="width:100%"></span>											
                                    </div>
                                    <br>
                                    <p>Ai and Business Today<br>
                                      Speaker name (TBA)<br>
                                      Qualifications<br>
                                      Date:Time
                                      </p>
                                  </div>
                                              </li>
                                            </ul>
                                        </div>
                                    </li>
                                  </ul>
                                </div>
                            </div>
                          
                      </div>
               
                  </div>
                  <br><hr>
  </div>
              </div>
              <!-- Main Section End -->
            </div>

		</div>
    
@endsection