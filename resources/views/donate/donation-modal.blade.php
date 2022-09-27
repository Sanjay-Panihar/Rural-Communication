<div class="modal contribution-modal show" id="contributeModal" aria-modal="true" role="dialog" style="display: hide;">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Let's contribute <span id="formTitle">- Indian Citizen</span></h4>
                    <button type="button" class="btn-close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <p id="formSubTitle" class="text-center mb-3"></p>
                    <form  method="POST" enctype="multipart/form-data" id="contribution-form" class="contribution-form">
                        @csrf

                        <input type="hidden" name="doner_nationality" id="doner_nationality" readonly="" class="form-control" value="Indian">
                        <div class="row">
                            <!-- Amount -->
                            <div class="mb-3 col-sm-6">
                                <label for="amountContribute" class="form-label">Amount <span>*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">₹</span>
                                    <input type="number" class="form-control" name="donation_base_amount" id="amountContribute" placeholder="Amount" aria-describedby="basic-addon1" value="2000">
                                </div>
                            </div>
                            <!-- Mobile Number -->
                            <div class="mb-3 col-sm-6">
                                <label for="MobileNumber" class="form-label">Mobile Number <span>*</span></label><br>
                                <input type="text" class="form-control" name="MobileNumber"  maxlength="10" id="MobileNumber" placeholder="Mobile Number" value="{{ old('MobileNumber') }}">
                                @error('MobileNumber')
                                  <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <!--<input type="text" class="form-control" name="doner_mobile" id="MobileNumber" placeholder="Mobile Number" required>
                                    <span class="text-danger d-none">This field is required</span>-->
                            </div>
                            <!-- Full Name -->
                            <div class="mb-3 col-sm-6">
                                <label for="fullName" class="form-label">Full Name <span>*</span></label>
                                <input type="text" class="form-control" name="doner_name" id="fullName" placeholder="Full Name"  value="{{ old('doner_name') }}">
                                @error('doner_name')
                                  <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Email Id -->
                            <div class="mb-3 col-sm-6">
                                <label for="Email" class="form-label">Email <span>*</span></label>
                                <input type="email" class="form-control" name="doner_email" id="Email" placeholder="Email" value="{{ old('doner_email') }}">
                                @error('doner_email')
                                  <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Nationality -->
                            <!--<div class="mb-3 col-sm-6">
                                <label for="doner_nationality-indian" class="form-label">Nationality</label>
                                <input type="text" name="doner_nationality" id="doner_nationality" readonly class="form-control"/>
                                <span class="text-danger doner_nationality d-none">This field is required</span>
                            </div>-->
                            <!-- Country -->
                            <div class="mb-3 col-sm-6">
                              <label for="state" class="form-label">Country <span>*</span></label>
                              <input type="text" class="form-control" name="doner_country" id="country" placeholder="Country" value="India" readonly >

                            </div>
                            <!-- State -->
                            <div class="mb-3 col-sm-6" id="state">
                                <label for="state" class="form-label">State <span>*</span></label>
                                <select class="form-control select3" name="doner_state" id="doner_state" required="required">
                                    <option value="">Select State</option>
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chandigarh">Chandigarh</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                    <option value="Daman and Diu">Daman and Diu</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Lakshadweep">Lakshadweep</option>
                                    <option value="Puducherry">Puducherry</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Odisha">Odisha</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkim">Sikkim</option>
                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                    <option value="Telangana">Telangana</option>
                                    <option value="Tripura">Tripura</option>
                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="Uttarakhand">Uttarakhand</option>
                                    <option value="West Bengal">West Bengal</option>
                                </select>
                                <!--<input type="text" class="form-control" name="doner_country" id="country" placeholder="Country" >-->
                                @error('doner_state')
                                  <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- City -->
                            <div class="mb-3 col-sm-6">
                                <label for="city" class="form-label">City <span>*</span></label>
                                <input type="text" class="form-control" name="doner_city" id="city" placeholder="City" required="">
                                @error('doner_city')
                                  <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Zip Code For Indian Nationality -->
                            <div class="mb-3 col-sm-6" id="indianZipBox">
                                <label for="pinCode" class="form-label" id="pincode">PIN Code <span>*</span></label>
                                <input type="number" class="form-control" name="doner_pincode" id="pinCode" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==6) return false;" placeholder="PIN Code" value="{{ old('doner_pincode') }}"/>
                                @error('doner_pincode')
                                  <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Address -->
                            <div class="mb-3 col-sm-12">
                                <label for="address" class="form-label">Address <span>*</span></label>
                                <textarea class="form-control" name="doner_address" cols="5" id="address" placeholder="Address" value="{{ old('doner_address') }}"></textarea>
                                @error('doner_address')
                                  <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                                <!-- Government Identity Type Id -->
                                <div class="mb-3 col-sm-6">
                                    <label for="identityType" class="form-label"> Select Government Identity Type
                                        <span>*</span></label>
                                    <select class="form-control select3" name="identity_type" id="identityType">
                                        <option value="">Select Government Identity Type</option>
                                        <option value="PAN Card">PAN Card</option>
                                        <option value="Aadhaar Card">Aadhaar Card</option>
                                        <option value="Tax Identification Number">Tax Identification Number</option>
                                        <option value="Passport Number">Passport Number</option>
                                        <option value="Voter ID">Voter ID</option>
                                        <option value="Driving License">Driving License</option>
                                        <option value="Ration Card">Ration Card</option>
                                        <option value="Others ">Others</option>
                                    </select>
                                    @error('identity_type')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- Government Identity Number Id -->
                                <div class="mb-3 col-sm-6">
                                    <label for="panAadhar" class="form-label"> Enter Government Identity Number
                                        <span>*</span></label>
                                    <input type="text" class="form-control" name="pan_aadhar" id="panAadhar" placeholder="Government Identity Number" value="{{ old('pan_aadhar') }}">
                                    @error('pan_aadhar')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                          <!-- frequency -->
                            <div class="mb-3 col-sm-12 d-none" id="frequency"></div>

                            <div class="col-sm-12 accept-box">
                                <input type="checkbox" id="accept" required="">
                                <label for="accept" id="checkboxText">I confirm that the data entered is correct to the best of my knowledge and that I am an Indian citizen. Please note, Rural Communication bears no responsibility for the correctness of the information shared here.</label>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer text-center">
                                <button type="submit" class="btn btn-rural" id="showBtn">
                                    Contribute
                                </button>
                                <button type="button" disabled="" class="btn btn-rural btn-block" id="waitBtn" style="display: none;">
                                    Please wait...
                                </button>
                                <p id="notes">As per Income Tax guidelines, organizations will have to mandatorily generate certificate 10BE for contributors. For this, contributors must provide their complete address and a Govt recognized unique identification number. For any queries, write to us on sanjay@ruralcommunication.org or call us on 011-41401216,011-26972351.</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <form name='razorpayform' id="razorpayform" action="/payment-success" method="POST">
            @csrf
            <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
            <input type="hidden" name="razorpay_signature" id="razorpay_signature">
            <input type="hidden" name="razorpay_order_id" id="rzpOrderId">
            <input type="hidden" name="donar_id" id="donar_id" value="">
        </form>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    //Insert records
    $('#waitBtn').hide();
    $('#contribution-form').submit(function(e) {
        e.preventDefault();
        let resetError = document.querySelectorAll('.text-danger');
        resetError.forEach(function(addClass) {
            addClass.classList.add('d-none');
        });
        $('#showBtn').hide();
        $('#waitBtn').show();
        var form = $('#contribution-form')[0];
        var data = new FormData(form);
        var URL = "{{ URL::to('donate') }}";
        $.ajax({
            type: "POST",
            url: URL,
            enctype: 'multipart/form-data',
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            success: function(data) {
                if (data) {
                    proceedToPayment(data);
                    console.log(data.donar_id);
                    document.getElementById("rzpOrderId").value = data.order_id;
                    document.getElementById("donar_id").value = data.donar_id;
                    $('#showBtn').show();
                    $('#waitBtn').hide();
                }
            },
            error: function(jqXhr, json, errorThrown) { // this are default for ajax errors
                var errors = jqXhr.responseJSON;
                $.each(errors['errors'], function(index, value) {
                    document.getElementsByClassName(index)[0].innerHTML = value;
                    document.getElementsByClassName(index)[0].classList.remove('d-none');
                });
                $('#showBtn').show();
                $('#waitBtn').hide();

            }
        });
    });
});
var proceedToPayment = function(checkoutData) {
            var options = checkoutData;
            options.handler = function(response) {
                document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
                document.getElementById('razorpay_signature').value = response.razorpay_signature;
                document.razorpayform.submit();
            };
            console.log(options);
            Razorpay.open(options);

        };

</script>
