@extends('layouts.main')

@section('title', 'Home')
@section('content')

@include('include.slider')

<div class="about-us container-fluid">
    <div class="container">

        <div class="row natur-row no-margin w-100">
            <div class="text-part col-md-6">
                <h2>About Rural Communication</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis varius faucibus
                    ligula non congue. Suspendisse at pretium massa, sit amet
                    vulputate nibh. Nam posuere eros dolor. Donec vel arcu sagittis, pretium nisl </p>
                <p> Cras faucibus laoreet nibh, sit amet tincidunt leo mollis in. Etiam eu mauris metus.
                    Nulla facilisi. Etiam vestibulum,
                    nisi et convallis elementum, leo orci aliquam metus, id posuere massa neque vitae
                    arcu.</p>
            </div>
            <div class="image-part col-md-6">
                <div class="about-quick-box row">
                    <div class="col-md-6">
                        <div class="about-qcard">
                           <i class="fas fa-user"></i>
                            <p>Becom a Volunteer</p>
                        </div>
                    </div>

                     <div class="col-md-6">
                        <div class="about-qcard ">
                           <i class="fas fa-donate yell"></i>
                            <p>Help Someone</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



 <!-- ################# Mission Vision Start Here #######################--->

  <section class="container-fluid mission-vision">
      <div class="container">
          <div class="row mission">
              <div class="col-md-6 mv-det">
                  <h1>Our Mission</h1>

                  <p>Communication with government health system providing free transportation and assistant.</p>
              </div>
              <div class="col-md-6 mv-img">
                  <img src="assets/images/mission.jpeg" alt="">
              </div>
          </div>
          <div class="row vision">
              <div class="col-md-6 mv-img">
                   <img src="assets/images/vision.jpg" alt="">
              </div>
              <div class="col-md-6 mv-det">
                   <p><h5>Communication for women empowerment.</h5></p>
                    <p>1. Providing an environment free from voilence and descrimination.
                    <p>2. Providing social and economic empowerment of women.</p></p>
                    <p>3. Creating awareness about their rights.</p>

              </div>
          </div>
          <div class="row mission">
              <div class="col-md-6 mv-det">
                <h5>Communication for social services.</h5>
                <p>1. Involvement of local population/villages</p>
                <p>2. Co-operation between old and new generation.</p>
                <p>3. Work on rural areas basic issues.</p>
              </div>
              <div class="col-md-6 mv-img">
                  <img src="assets/images/social work.jpg" alt="">
              </div>
          </div>
          <div class="row vision">
              <div class="col-md-6 mv-img">
                   <img src="assets/images/literacy.jpeg" alt="">
              </div>
              <div class="col-md-6 mv-det">
                   <h5>Communication with various government and private departments.</h5>
                   <p>Litrating rural population about policies of various departments through Seminars, Social Media, Hordings etc.</p>
              </div>
          </div>
      </div>
  </section>



     <!-- ################# Events Start Here#######################--->
    <section class="events">
        <div class="container">
            <div class="session-title row">
                <h2>Popular Causes</h2>
                <p>We are a non-profital & Charity raising money for child education</p>
            </div>
            <div class="event-ro row">
                <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="assets/images/events/image_08.jpg" alt="">
                        <h4>Child Education in Africa</h4>

                        <p class="raises"><span>Raised : $34,425</span> / $500,000 </p>
                        <p class="desic">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's </p>
                        <button class="btn btn-success btn-sm">Donate Now</button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="assets/images/events/image_06.jpg" alt="">
                        <h4>Child Education in Africa</h4>
                        <p class="raises"><span>Raised : $34,425</span> / $500,000 </p>
                        <p class="desic">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's </p>
                        <button class="btn btn-success btn-sm">Donate Now</button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="assets/images/events/image_04.jpg" alt="">
                        <h4>Child Education in Africa</h4>
                        <p class="raises"><span>Raised : $34,425</span> / $500,000 </p>
                        <p class="desic">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's </p>
                        <button class="btn btn-success btn-sm">Donate Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ################# Charity Number Starts Here#######################--->


    <div class="doctor-message">
        <div class="inner-lay">
            <div class="container">
               <div class="row session-title">
                   <h2>Our Achievemtns in Numbers</h2>
                   <p>We can talk for a long time about advantages of our Dental clinic before other medical treatment facilities.
But you can read the following facts in order to make sure of all pluses of our clinic:</p>
               </div>
                <div class="row">
                    <div class="col-sm-3 numb">
                        <h3>12+</h3>
                        <span>YEARS OF EXPEREANCE</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>1812+</h3>
                        <span>HAPPY CHILDRENS</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>52+</h3>
                        <span>EVENTS</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>48+</h3>
                        <span>FUNT RAISED</span>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!--################### Our Team Starts Here #######################--->
        @include('team.index')

    <!-- ################# Our Blog Starts Here#######################--->

    <section class="our-blog">
         	<div class="container">
         		<div class="row session-title">
        			<h2> Our Blog </h2>
        			<p>Take a look at what people say about US </p>
        		</div>
        		<div class="blog-row row">
        			<div class="col-md-4 col-sm-6">
        				<div class="single-blog">
        					<figure>
        						<img src="assets/images/events/image_01.jpg" alt="">
        					</figure>
        					<div class="blog-detail">
        						<small>By Admin | August 10 2018</small>
								<h4>Methods of Recuirtments</h4>
								<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis sed sagittis at, sagittis quis neque. Praesent.</p>
								<div class="link">
									<a href="">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
								</div>
        					</div>


        				</div>
        			</div>
        			<div class="col-md-4 col-sm-6">
        				<div class="single-blog">
        					<figure>
        						<img src="assets/images/events/image_02.jpg" alt="">
        					</figure>
        					<div class="blog-detail">
        						<small>By Admin | August 10 2018</small>
								<h4>Methods of Recuirtments</h4>
								<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis sed sagittis at, sagittis quis neque. Praesent.</p>
								<div class="link">
									<a href="">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
								</div>
        					</div>


        				</div>
        			</div>
        			<div class="col-md-4 col-sm-6">
        				<div class="single-blog">
        					<figure>
        						<img src="assets/images/events/image_03.jpg" alt="">
        					</figure>
        					<div class="blog-detail">
        						<small>By Admin | August 10 2018</small>
								<h4>Methods of Recuirtments</h4>
								<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis sed sagittis at, sagittis quis neque. Praesent.</p>
								<div class="link">
									<a href="">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
								</div>
        					</div>


        				</div>
        			</div>
        		</div>
         	</div>
         </section>

@endsection
