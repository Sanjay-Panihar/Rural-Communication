@extends('layouts.main')

@section('title', 'Donate')
@section('content')
<div class="bg-img">
  <div class="row contact-rooo no-margin">
      <div class="container">
          <div class="row">
              <div style="padding:20px" class="col-sm-6 row align-items-center donation-form-row">
                    <form class="donate-form" action="">
                        <!-- Donation Option Selection -->
                        <div class="row text-center">
                            <div class="col-sm-4 col-4 donation-type-selection active" data-donation-type="once">
                                <p>One Time</p>
                            </div>
                            <div class="col-sm-4 col-4 donation-type-selection" data-donation-type="monthly">
                                <p>Monthly</p>
                            </div>
                            <div class="col-sm-4 col-4 donation-team-5000" id="team5000btn">
                                <p>Team 5000</p>
                            </div>
                        </div>
                        <!-- Donation Amount -->
                        <div class="row align-items-center mx-0 border-radius-5 donation-form-amount">
                            <div class="col-sm-4 col-4">
                                <p class="donation-amount-default" id="donationAmountDefault1" data-amount="2000">
                                    ₹ 2000
                                </p>
                            </div>
                            <div class="col-sm-4 col-4">
                                <p class="donation-amount-default" id="donationAmountDefault1" data-amount="4000">
                                    ₹ 4000
                                </p>
                            </div>
                            <div class="col-sm-4 col-4">
                                <p class="donation-amount-default" id="donationAmountDefault1" data-amount="10000">
                                    ₹ 10000
                                </p>
                            </div>
                            <div class="col-sm-2 col-2 mt-3">
                                <p class="donation-amount-default" id="donationAmountDefault1">
                                    ₹
                                </p>
                            </div>
                            <div class="col-sm-10 col-10 mt-3">
                                <input type="text" name="amount" id="donationAmount" class="form-control donationAmount" placeholder="Other Amount" required="">
                                <span class="d-none" id="amountmsg">Please enter the donation amount</span>
                            </div>
                        </div>
                        <!-- Donation Citizenship -->
                        <div class="row donation-citizen-row">
                            <div class="col-sm-6 col-6 donation-citizen-selection">
                                <p>
                                    <input type="radio" class="donation-citizen" name="donation-citizen" value="Indian" id="donationCitizen" checked="">
                                    <label for="donationCitizen"> Indian Citizen</label>
                                </p>
                            </div>
                            <div class="col-sm-6 col-6 donation-citizen-selection">
                                <p>
                                    <input type="radio" class="donation-citizen" name="donation-citizen" value="Foreign" id="foreignCitizen">
                                    <label for="foreignCitizen"> Foreign Citizen</label>
                                </p>
                            </div>
                        </div>
                        <!-- Donation Submit Button -->
                        <div class="row donation-submit-row">
                            <div class="col-sm-12 d-grid">
                                <input type="submit" value="Contribute" id="donationSubmit" class="btn btn-block btn-rural">
                                <div class="d-flex justify-content-between">
                                    <p class="contribute-guidelines-text"><a href="javascript:void();" id="guidelinesCont">Guidelines For Contribution</a></p>
                                    <p class="contribute-guidelines-text"><a href="javascript:void();" id="offlineCont">Contribute Offline</a></p>
                                </div>
                            </div>
                        </div>
                    </form>

              </div>
          </div>
      </div>
  </div>
</div>
<section class="events">
        <div class="container">
            <div class="session-title row">
                <h2>Our Compaigns</h2>
                <p>We are a non-profital &amp; Charity raising money for child education</p>
            </div>
            <div class="event-ro row">
                <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="assets/images/events/image_08.jpg" alt="">
                        <h4>Rahat Floods</h4>
                        <p class="raises"><span>Raised : $34,425</span> / $500,000 </p>
                        <p class="desic">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's </p>
                        <a href="/donate" class="btn btn-success btn-sm">Donate Now</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="assets/images/events/image_06.jpg" alt="">
                        <h4>Child Education in Africa</h4>
                        <p class="raises"><span>Raised : $34,425</span> / $500,000 </p>
                        <p class="desic">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's </p>
                        <a href="/donate" class="btn btn-success btn-sm">Donate Now</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="assets/images/events/image_04.jpg" alt="">
                        <h4>Child Education in Africa</h4>
                        <p class="raises"><span>Raised : $34,425</span> / $500,000 </p>
                        <p class="desic">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's </p>
                        <a href="/donate" class="btn btn-success btn-sm">Donate Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Contribute offline -->
<section class="contribute-offline" id="bankTransfer">
        <div class="container-lg">
            <div class="row">
                <div class="col-sm-12 section-heading text-center mb-sm-5 mb-3">
                    <h2>Contribute Offline</h2>
                </div>
            </div>
            <div class="row bank-details">
                <div class="col col-sm-4 col-12">
                    <h3>For All Indian Nationals</h3>
                    <p>Bank: IDBI Bank<br>
                        A/c Name: Rural Communication<br>
                        A/c No : 04801450000130<br>
                        A/c Type : Savings Account<br>
                        Swift Code: SWIFT Code IDBI Bank<br>
                        IFSC Code: IBKL0001996<br>
                        MICR Code: 127259003<br>
                        Bank Address: Tosham Tehsil, Siwani Rd,<br>
                        opposite Anaj Mandi, Tosham Rural,<br>
                        Haryana 127040
                    </p>
                </div>
                <div class="col col-sm-4 col-12">
                    <h3>By Cheque/Draft</h3>
                    <p>Please make your cheque/draft in the name of <strong>Rural Communication</strong> and send it to J-93, Sarita Vihar, New
                        Delhi-110076</p>
                </div>
                <div class="col col-sm-4 col-12">
                    <h3>For All Foreign Passport Holders</h3>
                    <p>
                        Bank – SBI<br>
                        A/c Name – Rural Communication<br>
                        A/c No – 39999163028<br>
                        A/c Type : FCRA Savings Account<br>
                        Branch Code – 00691<br>
                        IFSC – SBIN0000691<br>
                        SWIFT – SBININBB104<br>
                        Bank Address :FCRA Cell, <br>
                        4th Floor, State Bank of India,<br>
                        New Delhi Main Branch, <br>
                        11, Sansad Marg, New Delhi-110001
                        </p>
                </div>
            </div>
        </div>
    </section>

    <section class="guidelines" id="contributionGuidelines">
        <div class="container-lg">
            <div class="row">
                <div class="col-sm-12 section-heading text-center mb-sm-5 mb-3">
                <h2>Guidelines</h2>
            </div>
        </div>
        <div class=" row">
            <div class="col-sm-4 col-12 mb-4">
                <div class="guideline-box d-flex align-items-center">
                    <p class="guideline-text">
                        As per Income Tax guidelines, organizations will have to mandatorily generate certificate 10BE for contributors. For this, contributors must provide their complete address and a Govt recognized unique identification number.
                    </p>
                </div>
            </div>
            <div class="col-sm-4 col-12 mb-4">
                <div class="guideline-box d-flex align-items-center">
                    <p class="guideline-text">
                        As per the FCRA 2010, to receive contributions from foreign passport holders it is mandatory to note their passport number.
                    </p>
                </div>
            </div>
            <div class="col-sm-4 col-12 mb-4">
                <div class="guideline-box d-flex align-items-center">
                    <p class="guideline-text">
                        All Indian contributions made to Rural Communication are eligible for tax exemption of 50% u/s 80G of the
                        Income Tax Act, 1961.
                    </p>
                </div>
            </div>
            <div class="col-sm-12 col-12 text-center mt-5 mail-content">
                <p>For any queries, write to us on <a href="mailto:anil@ruralcommunication.org"><strong>anil@ruralcommunication.org</strong></a> <br>or call us on
                    <a href="tel:011-41401216"><strong>011
                            -41401216</strong></a>,<a href="tel:011-26972351"><strong>011-26972351</strong></a>
                </p>
            </div>
        </div>
        </div>
    </section>
@include('donate.donation-modal')

@endsection

@section('script')



@endsection
