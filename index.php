<?php 
ob_start();
session_start();
include("setup.php") ; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?php echo META_SITE_TITLE ; ?></title>
    <meta property="og:title" content="<?php echo META_SITE_TITLE ; ?>" />
    <meta property="og:description" content="<?php echo META_SITE_DESCRIPTION ; ?>" />
    <link href="<?php echo BASE_URL ; ?>css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="<?php echo BASE_URL ; ?>css/custom.css" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
</head>
<body class="bg-dark" > 
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3"></div>        
            <div class="col-lg-6 mt-5">
                <form method="post" class="donationForm">
                <div class="card bg-dark newShadow text-center">
                    <div class="card-header ">
                        <h1 class="text-muted"><i class="bi bi-cash-coin text-warning"></i> <?php echo DONATION_BOX_HEADER ; ?></h1>
                    </div>
                    <div class="card-body text-start">
                        <div class="row">
                            <div class="col-lg-4 mt-1">
                                <div class="form-group">
                                    <label class="text-muted"><i class="bi bi-person-check-fill"></i> <?php echo NAME_HEADING ; ?>*</label>
                                    <input type="text" name="name" class="form-control bg-dark text-white customBorder mt-1" autocomplete="off" required maxlength="50">
                                </div>
                            </div>
                            <div class="col-lg-4 mt-1">
                                <div class="form-group">
                                    <label class="text-muted"><i class="bi bi-envelope-fill"></i> <?php echo EMAIL_HEADING ; ?>*</label>
                                    <input type="email" name="email" class="form-control bg-dark text-white customBorder mt-1" autocomplete="off" required maxlength="50">
                                </div>
                            </div>

                            <div class="col-lg-4 mt-1">
                                <div class="form-group">
                                    <label class="text-muted"><i class="bi bi-person-check-fill"></i> <?php echo 'Date' ; ?>*</label>
                                    <input type="date" name="date" class="form-control bg-dark text-white customBorder mt-1" autocomplete="off" required maxlength="50">
                                </div>
                            </div>
                            <div class="col-lg-4 mt-1">
                                <div class="form-group">
                                    <label class="text-muted"><i class="bi bi-envelope-fill"></i> <?php echo 'Country' ; ?>*</label>
                                    <select name="country" id="country" class="form-control bg-dark text-white customBorder mt-1" data-rule-required="true" aria-required="true">
                                <option value="">-- Select --</option>
                                <option value="US" selected="">United States</option>
                                <option value="CA">Canada</option>
                                <option value="UK">United Kingdom</option>
                                <option value="AU">Australia</option>
                                <option value="AF">Afghanistan</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                                <option value="AS">American Samoa</option>
                                <option value="AD">Andorra</option>
                                <option value="AO">Angola</option>
                                <option value="AI">Anguilla</option>
                                <option value="AQ">Antarctica</option>
                                <option value="AG">Antigua and Barbuda</option>
                                <option value="AR">Argentina</option>
                                <option value="AM">Armenia</option>
                                <option value="AW">Aruba</option>
                                <option value="AT">Austria</option>
                                <option value="AZ">Azerbaijan</option>
                                <option value="BS">Bahamas</option>
                                <option value="BH">Bahrain</option>
                                <option value="BD">Bangladesh</option>
                                <option value="BB">Barbados</option>
                                <option value="BY">Belarus</option>
                                <option value="BE">Belgium</option>
                                <option value="BZ">Belize</option>
                                <option value="BJ">Benin</option>
                                <option value="BM">Bermuda</option>
                                <option value="BT">Bhutan</option>
                                <option value="BO">Bolivia</option>
                                <option value="BA">Bosnia and Herzegovina</option>
                                <option value="BW">Botswana</option>
                                <option value="BR">Brazil</option>
                                <option value="BN">Brunei Darussalam</option>
                                <option value="BG">Bulgaria</option>
                                <option value="BF">Burkina Faso</option>
                                <option value="BI">Burundi</option>
                                <option value="KH">Cambodia</option>
                                <option value="CM">Cameroon</option>
                                <option value="CV">Cape Verde</option>
                                <option value="KY">Cayman Islands</option>
                                <option value="CF">Central African Republic</option>
                                <option value="TD">Chad</option>
                                <option value="CL">Chile</option>
                                <option value="CN">China</option>
                                <option value="CX">Christmas Island</option>
                                <option value="CC">Cocos (Keeling) Islands</option>
                                <option value="CO">Colombia</option>
                                <option value="KM">Comoros</option>
                                <option value="CG">Congo</option>
                                <option value="CD">Congo, The Democratic Republic of the</option>
                                <option value="CK">Cook Islands</option>
                                <option value="CR">Costa Rica</option>
                                <option value="CI">Cote D`Ivoire</option>
                                <option value="HR">Croatia</option>
                                <option value="CY">Cyprus</option>
                                <option value="CZ">Czech Republic</option>
                                <option value="DK">Denmark</option>
                                <option value="DJ">Djibouti</option>
                                <option value="DM">Dominica</option>
                                <option value="DO">Dominican Republic</option>
                                <option value="EC">Ecuador</option>
                                <option value="EG">Egypt</option>
                                <option value="SV">El Salvador</option>
                                <option value="GQ">Equatorial Guinea</option>
                                <option value="ER">Eritrea</option>
                                <option value="EE">Estonia</option>
                                <option value="ET">Ethiopia</option>
                                <option value="FK">Falkland Islands (Malvinas)</option>
                                <option value="FO">Faroe Islands</option>
                                <option value="FJ">Fiji</option>
                                <option value="FI">Finland</option>
                                <option value="FR">France</option>
                                <option value="GF">French Guiana</option>
                                <option value="PF">French Polynesia</option>
                                <option value="GA">Gabon</option>
                                <option value="GM">Gambia</option>
                                <option value="GE">Georgia</option>
                                <option value="DE">Germany</option>
                                <option value="GH">Ghana</option>
                                <option value="GI">Gibraltar</option>
                                <option value="GR">Greece</option>
                                <option value="GL">Greenland</option>
                                <option value="GD">Grenada</option>
                                <option value="GP">Guadeloupe</option>
                                <option value="GU">Guam</option>
                                <option value="GT">Guatemala</option>
                                <option value="GN">Guinea</option>
                                <option value="GW">Guinea-Bissau</option>
                                <option value="GY">Guyana</option>
                                <option value="HT">Haiti</option>
                                <option value="HN">Honduras</option>
                                <option value="HK">Hong Kong</option>
                                <option value="HU">Hungary</option>
                                <option value="IS">Iceland</option>
                                <option value="IN">India</option>
                                <option value="ID">Indonesia</option>
                                <option value="IR">Iran (Islamic Republic Of)</option>
                                <option value="IQ">Iraq</option>
                                <option value="IE">Ireland</option>
                                <option value="IL">Israel</option>
                                <option value="IT">Italy</option>
                                <option value="JM">Jamaica</option>
                                <option value="JP">Japan</option>
                                <option value="JO">Jordan</option>
                                <option value="KZ">Kazakhstan</option>
                                <option value="KE">Kenya</option>
                                <option value="KI">Kiribati</option>
                                <option value="KP">Korea North</option>
                                <option value="KR">Korea South</option>
                                <option value="KW">Kuwait</option>
                                <option value="KG">Kyrgyzstan</option>
                                <option value="LA">Laos</option>
                                <option value="LV">Latvia</option>
                                <option value="LB">Lebanon</option>
                                <option value="LS">Lesotho</option>
                                <option value="LR">Liberia</option>
                                <option value="LI">Liechtenstein</option>
                                <option value="LT">Lithuania</option>
                                <option value="LU">Luxembourg</option>
                                <option value="MO">Macau</option>
                                <option value="MK">Macedonia</option>
                                <option value="MG">Madagascar</option>
                                <option value="MW">Malawi</option>
                                <option value="MY">Malaysia</option>
                                <option value="MV">Maldives</option>
                                <option value="ML">Mali</option>
                                <option value="MT">Malta</option>
                                <option value="MH">Marshall Islands</option>
                                <option value="MQ">Martinique</option>
                                <option value="MR">Mauritania</option>
                                <option value="MU">Mauritius</option>
                                <option value="MX">Mexico</option>
                                <option value="FM">Micronesia</option>
                                <option value="MD">Moldova</option>
                                <option value="MC">Monaco</option>
                                <option value="MN">Mongolia</option>
                                <option value="MS">Montserrat</option>
                                <option value="MA">Morocco</option>
                                <option value="MZ">Mozambique</option>
                                <option value="NA">Namibia</option>
                                <option value="NP">Nepal</option>
                                <option value="NL">Netherlands</option>
                                <option value="AN">Netherlands Antilles</option>
                                <option value="NC">New Caledonia</option>
                                <option value="NZ">New Zealand</option>
                                <option value="NI">Nicaragua</option>
                                <option value="NE">Niger</option>
                                <option value="NG">Nigeria</option>
                                <option value="NO">Norway</option>
                                <option value="OM">Oman</option>
                                <option value="PK">Pakistan</option>
                                <option value="PW">Palau</option>
                                <option value="PS">Palestine Autonomous</option>
                                <option value="PA">Panama</option>
                                <option value="PG">Papua New Guinea</option>
                                <option value="PY">Paraguay</option>
                                <option value="PE">Peru</option>
                                <option value="PH">Philippines</option>
                                <option value="PL">Poland</option>
                                <option value="PT">Portugal</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="QA">Qatar</option>
                                <option value="RE">Reunion</option>
                                <option value="RO">Romania</option>
                                <option value="RU">Russian Federation</option>
                                <option value="RW">Rwanda</option>
                                <option value="VC">Saint Vincent and the Grenadines</option>
                                <option value="MP">Saipan</option>
                                <option value="SM">San Marino</option>
                                <option value="SA">Saudi Arabia</option>
                                <option value="SN">Senegal</option>
                                <option value="SC">Seychelles</option>
                                <option value="SL">Sierra Leone</option>
                                <option value="SG">Singapore</option>
                                <option value="SK">Slovak Republic</option>
                                <option value="SI">Slovenia</option>
                                <option value="SO">Somalia</option>
                                <option value="ZA">South Africa</option>
                                <option value="ES">Spain</option>
                                <option value="LK">Sri Lanka</option>
                                <option value="KN">St. Kitts/Nevis</option>
                                <option value="LC">St. Lucia</option>
                                <option value="SD">Sudan</option>
                                <option value="SR">Suriname</option>
                                <option value="SZ">Swaziland</option>
                                <option value="SE">Sweden</option>
                                <option value="CH">Switzerland</option>
                                <option value="SY">Syria</option>
                                <option value="TW">Taiwan</option>
                                <option value="TI">Tajikistan</option>
                                <option value="TZ">Tanzania</option>
                                <option value="TH">Thailand</option>
                                <option value="TG">Togo</option>
                                <option value="TK">Tokelau</option>
                                <option value="TO">Tonga</option>
                                <option value="TT">Trinidad and Tobago</option>
                                <option value="TN">Tunisia</option>
                                <option value="TR">Turkey</option>
                                <option value="TM">Turkmenistan</option>
                                <option value="TC">Turks and Caicos Islands</option>
                                <option value="TV">Tuvalu</option>
                                <option value="UG">Uganda</option>
                                <option value="UA">Ukraine</option>
                                <option value="AE">United Arab Emirates</option>
                                <option value="UY">Uruguay</option>
                                <option value="UZ">Uzbekistan</option>
                                <option value="VU">Vanuatu</option>
                                <option value="VE">Venezuela</option>
                                <option value="VN">Viet Nam</option>
                                <option value="VG">Virgin Islands (British)</option>
                                <option value="VI">Virgin Islands (U.S.)</option>
                                <option value="WF">Wallis and Futuna Islands</option>
                                <option value="YE">Yemen</option>
                                <option value="YU">Yugoslavia</option>
                                <option value="ZM">Zambia</option>
                                <option value="ZW">Zimbabwe</option>
                            </select>
                                    </div>
                            </div>
                            
                            <div class="col-lg-4 mt-1">
                                <div class="form-group">
                                <label class="text-muted"><i class="bi bi-currency-exchange"></i> <?php echo DONATION_AMT_HEADING ; ?>* </label>
                                    <div class="input-group mb-3 mt-1">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark text-white customBorder" id="basic-addon1"><?php echo CURRENCY_TYPE ; ?></span>
                                      </div>
                                      <input type="number" name="amount" min="<?php echo MIN_DONATION_AMOUNT ; ?>" max="<?php echo MAX_DONATION_AMOUNT ; ?>" class="form-control bg-dark text-white customBorder" aria-label="Username" aria-describedby="basic-addon1" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-2">
                                <div class="form-group mt-2 text-center">
                                    <label class="text-muted"><i class="bi bi-patch-check-fill"></i> <?php echo PROVE_HUMAN_HEADING ; ?>*</label>
                                    <div class="g-recaptcha" data-sitekey="<?php echo SITE_KEY ; ?>" data-theme="dark" ></div>
                                </div>
                            </div>
                            
                            
                        </div>
                       
                        
                    </div>
                    <div class="card-footer text-center">
                        <div class="form-group mt-2 text-center">
                            <input type="hidden" name="btn_action" value="SubmitDonationForm" >
                            <div class="remove-messages"></div>
                            <button type="submit" class="btn btn-grey" id="action_sb">
                              <i class="bi bi-credit-card-2-back-fill"></i> &ensp;<?php echo BUTTON_HEADING ; ?>
                            </button>
                        </div>
                    </div>
                </div>
                </form>
            </div>        
            <div class="col-lg-3"></div>        
        </div>
    </div>
    
    
    <!-- Stripe Checkout Modal -->
	<div id="stripePayModal" class="modal fade stripePayModal"  data-backdrop="static" data-keyboard="false">
    	<div class="modal-dialog">
    			<div class="modal-content bg-dark">
    				<div class="modal-header customBottomBorder">
						<h4 class="modal-title text-white"><i class="bi bi-credit-card-2-back-fill"></i> &ensp;<?php echo BUTTON_HEADING ; ?></h4>
						<button type="button" class="close btn btn-grey" data-bs-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true" class="text-white">&times;</span>
						</button>
    				</div>
					<form action="<?php echo BASE_URL."donation" ; ?>" method="post" class="stripePay" enctype="multipart/form-data" id="payment_form">
    				<div class="modal-body customBottomBorder">
					
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label class="text-muted">Card Number</label>
										<div id="card_number" class="field form-control"></div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="form-group">
									<label class="text-muted">Expiry MM/YY</label>
										<div id="card_expiry" class="field form-control"></div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="form-group">
									<label  class="text-muted">CVC</label>
									<div id="card_cvc" class="field form-control"></div>
								</div>
							</div>
							<div class="col-lg-12 p-2"><div id="paymentResponse"></div> </div>
						</div>
					
    				</div> 
    				<div class="modal-footer customBottomBorder">
						<input type="hidden" name="uname" class="uname" />
						<input type="hidden" name="uemail" class="uemail"  />
						<input type="hidden" name="amount" class="amount"  />
						<input type='hidden' name='currency_code' value='<?php echo CURRENCY_TYPE ; ?>'> 
						<input type="submit" value="<?php echo BUTTON_HEADING ; ?>" name="stripepayactionBtn" class="stripepayactionBtn btn btn-md btn-primary"  />
    				</div>
					</form>
    			</div>
    		
    	</div>
    </div>
    
    <script src="<?php echo BASE_URL ; ?>js/jquery.min.js" ></script>
    <script src="<?php echo BASE_URL ; ?>js/popper.min.js" ></script>
    <script src="<?php echo BASE_URL ; ?>js/bootstrap.min.js"></script>	 
    <script src="https://js.stripe.com/v3/"></script>
    <script src="<?php echo BASE_URL ; ?>js/stripe.js"></script>	 
    <script src="<?php echo BASE_URL ; ?>js/custom.js"></script>	 
</body>
</html>
