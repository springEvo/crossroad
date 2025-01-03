
@extends('frontend.layouts.master')

@section('content')

		<div class="wm-main-banner">
            
            <div class="wm-banner-one">
                <div class="wm-banner-one-for">
                    <div class="wm-banner-one-for-layer">
                        <img src="{{asset('logo/pathein.jpg')}}" alt="">
                        {{-- <iframe class="embed-responsive-item" src="{{asset('logo/eventvideo.wmv')}}" allowfullscreen></iframe>
                          </div> --}}
                </div>
                    <div class="wm-banner-one-for-layer"> <img src="{{asset('logo/venue.jpg')}}" alt=""> </div>
               
                </div>
                <div class="wm-banner-one-nav">
                    <div class="wm-banner-one-nav-layer">
                        <h1>THE FIRST IN MYANMAR</h1>
                        <p>CROSS INSTITUTIONAL ALUMNI BUSINESS NETWORKING EVENT Business Connections . Education Pathways . 
                            Product Shows . Career Opportunities
                        </p>
                    </div>
                    <div class="wm-banner-one-nav-layer">
                        <h1>LOTTE HOTEL YANGON</h1>
                        <p>No. 82, Sin Phyu Shin Avenue, Pyay Road, 6½ Mile, Ward 11, Hlaing Township, Yangon, Myanmar.<br>
                            Date	: 31 January~1 February 2025<br>
                            Time	: 9:00am - 5:00pm<br>
                            </p>
                      
                    </div>
          
                </div>
            </div>
		</div>
	
		<div class="wm-main-content">
            <!--// Main Section \\-->
            <div class="wm-main-section wm-whychooseus-full">
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
                                              No. 82, Sin Phyu Shin Avenue, Pyay Road, 6½ Mile, Ward 11, Hlaing Township, Yangon, Myanmar.<br>
                                              Date : 31 January~1 February 2025 <br>
                                              Time : 9:00am - 5:00pm <br>
                                              </p>
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="wm-fancy-title"> <h2 style="color:#06388f;">Our <span style="color:#06388f;">Gallery</span></h2></div>
                                        <br> <br> <br>
                                        <div class="wm-testimonial-slider">
                                            <div class="wm-testimonial-slider-wrap">
                                                <img src="{{asset('logo/ban.jpg')}}" alt="">
                                            </div>

                                            <div class="wm-testimonial-slider-wrap">
                                                <img src="{{asset('logo/venue.jpg')}}" alt="">
                                            </div>

                                            <div class="wm-testimonial-slider-wrap">
                                                <img src="{{asset('logo/exp3.jpg')}}" alt="">
                                            </div>

                                            <div class="wm-testimonial-slider-wrap">
                                                <img src="{{asset('logo/exp4.jpg')}}" alt="">
                                            </div>

                                            <div class="wm-testimonial-slider-wrap">
                                                <img src="{{asset('logo/exp5.jpg')}}" alt="">
                                            </div>

                                            <div class="wm-testimonial-slider-wrap">
                                                <img src="{{asset('logo/exp6.jpg')}}" alt="">
                                            </div>

                                            <div class="wm-testimonial-slider-wrap">
                                                <img src="{{asset('logo/exp1.jpg')}}" alt="">
                                            </div>

                                            <div class="wm-testimonial-slider-wrap">
                                                <img src="{{asset('logo/exp2.jpg')}}" alt="">
                                            </div>


                                            <div class="wm-testimonial-slider-wrap">
                                                <img src="{{asset('logo/floor2.png')}}" alt="">
                                            </div>

                                            <div class="wm-testimonial-slider-wrap">
                                                <img src="{{asset('logo/sample1.png')}}" alt="">
                                            </div>

                                        </div>
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
                            <img src="{{ asset('logo/logo.png') }}" alt="sponsors" style="width:200px;">
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
                            <img src="{{ asset('logo/ban.jpg') }}" alt="sponsors">
                            <br><br>
                           
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
                </div></div>
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
            <br><br>
			<div class="wm-main-section wm-whychooseus-full">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="wm-search-course">
                                <h3 class="wm-short-title wm-color">Event Overview: </h3>
                                <p style="line-height: 2;">
                                    In a rapidly changing world, collaboration and connection are key to personal and professional growth. “Crossroad” is a groundbreaking initiative designed to bring together alumni from diverse schools, colleges, and universities on one platform.
                                    <br>
                                    This unique networking event celebrates the power of diversity, fostering an environment where different educational backgrounds and professional experiences converge to create opportunities, spark innovation, and build lasting connections.
                                </p>
                                
                            </div>
						</div>
                        <div class="col-md-6">
                            <div class="wm-search-course" style="height: 380px;">
                                <h3 class="wm-short-title wm-color">Why “Crossroads”?</h3>
                                Why Crossroads?<br>
                                <p style="line-height: 2;">
                                The name “Crossroads” symbolizes a meeting point, a place where different paths intersect, leading to new possibilities. Whether you are looking to expand your professional network, explore collaborative ventures, or simply connect with like-minded individuals, this event is the ideal platform to turn intersections into opportunities.
                                </p>
                            </div>
                        </div>

					</div>
				</div>
			</div>
			<!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="wm-main-section wm-courses-popular-full">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="wm-fancy-title"> <h2>Who Should 
                                <span>Attend?</span></h2> </div>
                            <div class="wm-courses wm-courses-popular">
                                <ul class="row">
                                    <li class="col-md-6">
                                        <div class="wm-student-profile">
                                            <a class=wm-circle-icon href="#" style="background-color:#06388f;color:#fff;">
                                               01
                                            </a>
                                            <div class="wm-student-profile-text">
                                                <span>Alumni</span>
                                                <p>
                                                    Meet and greet alumni from various schools, colleges, and universities across industries and disciplines.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="wm-student-profile">
                                            <a class=wm-circle-icon href="#" style="background-color:#06388f;color:#fff;">
                                               02
                                            </a>
                                            <div class="wm-student-profile-text">
                                                <span>Schools and Colleges (Educational Institutions) 
                                                </span>
                                                <p>
                                                    Foster meaningful connections between past and current students, strengthening the school community. Lead Generation for Schools

                                                </p>
                                            </div>
                                        </div>


                                        <div class="wm-student-profile">
                                            <a class=wm-circle-icon href="#" style="background-color:#06388f;color:#fff;">
                                               03
                                            </a>
                                            <div class="wm-student-profile-text">
                                                <span>Schools and Colleges (Educational Institutions) 
                                                </span>
                                                <p>
                                                    Open doors to internships, job opportunities, and professional connections. Explore further education options, such as graduate programs, certifications, or international studies.  


                                                </p>
                                            </div>
                                        </div>

                                    </li>


                                    <li class="col-md-6">
                                        <div class="wm-student-profile">
                                            <a class=wm-circle-icon href="#" style="background-color:#06388f;color:#fff;">
                                               04
                                            </a>
                                            <div class="wm-student-profile-text">
                                                <span>Corporate Partners</span>
                                                <p>
                                                    Companies looking to engage with a diverse talent pool and strengthen their recruitment pipelines.

                                                </p>
                                            </div>
                                        </div>

                                        <div class="wm-student-profile">
                                            <a class=wm-circle-icon href="#" style="background-color:#06388f;color:#fff;">
                                               05
                                            </a>
                                            <div class="wm-student-profile-text">
                                                <span>Job Seekers / Recruiters</span>
                                                <p>
                                                    Tap into a powerful network of professionals with shared experiences and connections. These events provide a supportive environment to seek advice, explore career opportunities, and gain insights into various industries.

                                                </p>
                                            </div>
                                        </div>


                                        <div class="wm-student-profile">
                                            <a class=wm-circle-icon href="#" style="background-color:#06388f;color:#fff;">
                                               06
                                            </a>
                                            <div class="wm-student-profile-text">
                                                <span>Entrepreneurs and Innovators 
                                                </span>
                                                <p>
                                                    Individuals or teams looking for collaborators, investors, or fresh perspectives.

                                                </p>
                                            </div>
                                        </div>

                                    </li>
                                    
                            
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <div class="wm-main-section wm-whychooseus-full">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="wm-pricesplan wm-typography-element">
								<ul class="row">
									<li class="col-md-6">
										<div class="wm-price-plans">
											<h2 style="text-align: center">Visitor’s Profiles</h2>
											
											<ul>
												<li>
													<i class="wmicon-check"></i>
													Invited Honorable Professors and Lecturers from various schools.
												</li>

                                                <li>
													<i class="wmicon-check"></i>
													Banks and Insurance
												</li>

                                                <li>
													<i class="wmicon-check"></i>
													Business owners, entrepreneurs from different school’s alumni, seeking and offering network opportunities.

												</li>
                                                 
                                               
                                                <li>
													<i class="wmicon-check"></i>
                                                    Local and International education institutions.
												</li>

                                                
                                                <li>
													<i class="wmicon-check"></i>
                                                    Students and parents seeking educational pathways for their children.
												</li>


                                                <li>
                                                    <i class="wmicon-check"></i>
                                                    Employees, Job seekers and Internships.
                                                </li>

                                                <li>
                                                    <i class="wmicon-check"></i>
                                                    Product and Service showcasing and recruiters.
                                                </li>									
											</ul>

										</div>
									</li>	

                                    <li class="col-md-6">
										<div class="wm-price-plans">
											<h2 style="text-align: center">Exhibitors</h2>

											<ul>
												<li>
													<i class="wmicon-check"></i>
													Alumni’s businesses
												</li>

                                                <li>
													<i class="wmicon-check"></i>
													Educational Institutions
												</li>

                                                <li>
													<i class="wmicon-check"></i>
													Centers/College/ Vocational schools

												</li>
                                                 
                                               
                                                <li>
													<i class="wmicon-check"></i>
                                                    Banks and it’s related services
												</li>

                                                
                                                <li>
													<i class="wmicon-check"></i>
                                                    Insurance companies
												</li>


                                                <li>
                                                    <i class="wmicon-check"></i>
                                                    Products or services looking for partners and dealers
                                                </li>

                                                <li>
                                                    <i class="wmicon-check"></i>
                                                    Manpower-recruitment agencies
                                                </li>

                                                <li>
                                                    <i class="wmicon-check"></i>
                                                    Consumer and life science products
                                                </li>


                                                <li>
                                                    <i class="wmicon-check"></i>
                                                    Technology and Innovation Companies
                                                </li>

                                                <li>
                                                    <i class="wmicon-check"></i>
                                                    Franchise Opportunities
                                                </li>

                                                <li>
                                                    <i class="wmicon-check"></i>
                                                    Health and Wellness Providers
                                                </li>

                                                <li>
                                                    <i class="wmicon-check"></i>
                                                    SME’s
                                                </li>

                                                <li>
                                                    <i class="wmicon-check"></i>
                                                    Phones, computers and electronic devices
                                                </li>

                                                <li>
                                                    <i class="wmicon-check"></i>
                                                    Retails
                                                </li>

																						
											</ul>

										</div>
									</li>
								</ul>
							</div>							
						</div>
					</div>
				</div>
			</div>
             <!--// Main Section \\-->
            <div class="wm-main-section wm-news-grid-full">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="wm-fancy-title"> <h2>Programs to 
                                <span>explore</span></h2></div>
                            <div class="wm-news wm-news-grid">
                                <ul class="row">

                                    <li class="col-md-4">
                                        <figure>
                                            <figcaption class="wm-bgcolor">
                                                <h6><a href="#">Alumni Member Product & Services Show Case
                                                </a></h6>
                                            </figcaption>
                                            <a href="#"><img src="{{asset('logo/exp1.jpg')}}" alt=""></a>
                                        </figure>
                                        <div class="wm-newsgrid-text">
                                            <ul class="wm-post-options">
                                                <li style="color: #000;">Crossroad</li>
                                                <li style="color: #000;">Multi-School</li>
                                                <li style="color: #000;">Product Show</li>
                                            </ul>
                                            
                                        </div>
                                    </li>

                                    <li class="col-md-4">
                                        <figure>
                                            <figcaption class="wm-bgcolor">
                                                <h6><a href="#">Explore Study Abroad Pathways
                                                </a></h6>
                                            </figcaption>
                                            <a href="#"><img src="{{asset('logo/exp2.jpg')}}" alt=""></a>
                                        </figure>
                                        <div class="wm-newsgrid-text">
                                            <ul class="wm-post-options">
                                                <li style="color: #000;">Study</li>
                                                <li style="color: #000;">Abroad</li>
                                              
                                            </ul>
                                            
                                        </div>
                                    </li>

                                    <li class="col-md-4">
                                        <figure>
                                            <figcaption class="wm-bgcolor">
                                                <h6><a href="#">Product introductions
                                                </a></h6>
                                            </figcaption>
                                            <a href="#"><img src="{{asset('logo/exp3.jpg')}}" alt=""></a>
                                        </figure>
                                        <div class="wm-newsgrid-text">
                                            <ul class="wm-post-options">
                                                <li style="color: #000;"></li>
                                                <li style="color: #000;"></li>
                                              
                                            </ul>
                                            
                                        </div>
                                    </li>

                                    <li class="col-md-4">
                                        <figure>
                                            <figcaption class="wm-bgcolor">
                                                <h6><a href="#">Business Matching
                                                </a></h6>
                                            </figcaption>
                                            <a href="#"><img src="{{asset('logo/exp4.jpg')}}" alt=""></a>
                                        </figure>
                                        <div class="wm-newsgrid-text">
                                            <ul class="wm-post-options">
                                                <li style="color: #000;"></li>
                                                <li style="color: #000;"></li>
                                              
                                            </ul>
                                            
                                        </div>
                                    </li>


                                    
                                    <li class="col-md-4">
                                        <figure>
                                            <figcaption class="wm-bgcolor">
                                                <h6><a href="#">Jobs and Internships 
                                                </a></h6>
                                            </figcaption>
                                            <a href="#"><img src="{{asset('logo/exp5.jpg')}}" alt=""></a>
                                        </figure>
                                        <div class="wm-newsgrid-text">
                                            <ul class="wm-post-options">
                                                <li style="color: #000;"></li>
                                                <li style="color: #000;"></li>
                                              
                                            </ul>
                                            
                                        </div>
                                    </li>
 
                                    <li class="col-md-4">
                                        <figure>
                                            <figcaption class="wm-bgcolor">
                                                <h6><a href="#">Meet with old friends and make new friends
                                                </a></h6>
                                            </figcaption>
                                            <a href="#"><img src="{{asset('logo/exp6.jpg')}}" alt=""></a>
                                        </figure>
                                        <div class="wm-newsgrid-text">
                                            <ul class="wm-post-options">
                                                <li style="color: #000;"></li>
                                                <li style="color: #000;"></li>
                                            </ul>
                                            
                                        </div>
                                    </li>

                                    <li class="col-md-4">
                                        <div class="wm-newsgrid-text" style="background-color:#06388f;">
                                            <ul class="wm-post-options">
                                                <li style="color: #fff;font-size:20px;">20,000+</li>
                                                <li style="color: #fff;"> Alumni members from various Institutions</li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="col-md-4">
                                        <div class="wm-newsgrid-text" style="background-color:#06388f;">
                                            <ul class="wm-post-options">
                                                <li style="color: #fff;font-size:20px;">1,700 +</li>
                                                <li style="color: #fff;">Business Owners and Senior Executives</li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="col-md-4">
                                        <div class="wm-newsgrid-text" style="background-color:#06388f;">
                                            <ul class="wm-post-options">
                                                <li style="color: #fff;font-size:20px;">60 +
                                                </li>
                                                <li style="color: #fff;">
                                                    Product booths from alumni members
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="wm-main-section">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="wm-simple-section-title wm-partners-title"> <h2>International Partner
                                 <span style="font-size: 16px;">Co-Hosting Partners</span></h2> </div>
                            <div class="wm-partners-slider gallery">
                                <div class="wm-partners-layer"> <a title="" data-rel="prettyPhoto[gallery1]" href="{{asset('logo/par1.jpg')}}"> <img src="{{asset('logo/par1.jpg')}}" alt=""> </a> </div>
                                <div class="wm-partners-layer"> <a title="" data-rel="prettyPhoto[gallery1]" href="{{asset('logo/par2.jpg')}}"> <img src="{{asset('logo/par2.jpg')}}" alt=""> </a> </div>
                                <div class="wm-partners-layer"> <a title="" data-rel="prettyPhoto[gallery1]" href="{{asset('logo/par3.jpg')}}"> <img src="{{asset('logo/par3.jpg')}}" alt=""> </a> </div>
                                <div class="wm-partners-layer"> <a title="" data-rel="prettyPhoto[gallery1]" href="{{asset('logo/par4.jpg')}}"> <img src="{{asset('logo/par4.jpg')}}" alt=""> </a> </div>
                                <div class="wm-partners-layer"> <a title="" data-rel="prettyPhoto[gallery1]" href="{{asset('logo/par5.jpg')}}"> <img src="{{asset('logo/par5.jpg')}}" alt=""> </a> </div>
                                <div class="wm-partners-layer"> <a title="" data-rel="prettyPhoto[gallery1]" href="{{asset('logo/par6.jpg')}}"> <img src="{{asset('logo/par6.jpg')}}" alt=""> </a> </div>
                                <div class="wm-partners-layer"> <a title="" data-rel="prettyPhoto[gallery1]" href="{{asset('logo/par7.jpg')}}"> <img src="{{asset('logo/par7.jpg')}}" alt=""> </a> </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

		</div>
@endsection