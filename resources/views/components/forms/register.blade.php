                    <div id="w4-register" class="tab-pane">
                        <form id="register-form" action="{{ route('form.register') }}">
							<h3 style="color:#2180E2;">Company Info</h3>
							<hr style="background-color:black !important; height:2px;">
							<h3 style="color:black;">Name and Address</h3>
							<hr style="background-color:black !important; height:2px;">
							<!-- <div class="form-group row">
								<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-accountId">Account Id</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="accountId" id="w4-accountId" >
								</div>
							</div> -->
							<div class="form-group row">
								<label class="col-sm-2 control-label text-sm-right pt-1" hidden for="w4-agencyId">Agency Id *</label>
								<div class="col-sm-4">
									<input type="text" class="form-control" hidden readonly value="cc2af3f6-79b3-4c52-b171-6a046c05dfcf" name="agencyId" id="w4-agencyId" required>
								</div>
							</div>
							<!-- <div class="form-group row">
								<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-address2">Address 2</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="address2" id="w4-address2" >
								</div>
							</div> -->
							<div class="form-group row">
								<label class="col-sm-2 control-label text-sm-right pt-1" for="w4-name">Business Name *</label>
								<div class="col-sm-4">
									<input type="text" class="form-control" placeholder="Name" name="name" id="w4-name" required>
								</div>
							
							<!-- <div class="form-group row">
								<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-agencyName">Name</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="agencyName" id="w4-agencyName" >
								</div>
							</div> -->
							<!-- <div class="form-group row">
								<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-description">Description</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" placeholder="Description of the account / business" name="description" id="w4-description" >
								</div>
							</div> -->
                            
								<label class="col-sm-2 control-label text-sm-right pt-1" for="w4-domainName">Domain Name</label>
								<div class="col-sm-4">
									<input type="text" class="form-control" placeholder="test.com" name="domainName" id="w4-domainName" >
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 control-label text-sm-right pt-1" for="w4-naicsCode">Industry Code *</label>
								<div class="col-sm-4">
								<!-- <?php
								var_export(Session::get('naicsCode.content'));
								// var_export(Session::get('naicsCode.content.0.naicsCode'));
								?> -->
									<!-- <input type="number" placeholder="" value=""  class="form-control" name="naicsCode" id="w4-naicsCode" required> -->
                                    <select class="form-control" name="naicsCode" required>
									@foreach((Session::get('naicsCode.content')) as $ncs)
                                        <option value="{{$ncs['naicsCode']}}"> {{$ncs['secondaryIndustry']}}, {{$ncs['naicsCode']}}</option>
									@endforeach
                                    </select>
								
								</div>

								<label class="col-sm-2 control-label text-sm-right pt-1" for="w4-domains">Other Domain(s) </label>
								<div class="col-sm-4">
									<input type="text" class="form-control" placeholder="test.com" name="domains" id="w4-domains" >
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 control-label text-sm-right pt-1" for="w4-address1">Address 1 *</label>
								<div class="col-sm-4">
									<input type="text" class="form-control" placeholder="1100 Park Ave W" name="address1" id="w4-address1" required>
								</div>
							
								<label class="col-sm-2 control-label text-sm-right pt-1" for="w4-address2">Address 2</label>
								<div class="col-sm-4">
									<input type="text" class="form-control" placeholder="1100 Park Ave W" name="address2" id="w4-address2" >
								</div>
							</div>
                            <div class="form-group row">
								<label class="col-sm-2 control-label text-sm-right pt-1" for="w4-city">City *</label>
								<div class="col-sm-2">
									<input type="text" class="form-control" placeholder="Highland Park" name="city" id="w4-city" required>
								</div>
							
								<label class="col-sm-1 control-label text-sm-right pt-1" for="w4-state">State *</label>
								<div class="col-sm-1">
									<!-- <input type="text" class="form-control" placeholder="IL" name="state" id="w4-state" required> -->
                                    <select class="form-control" name="state" required>
									@foreach((Session::get('stateCode.content')) as $state)
                                        <option value="{{$state['stateNameAbbrv']}}"> {{$state['stateNameAbbrv']}}, {{$state['stateName']}}</option>
									@endforeach
                                    </select>
								</div>
							
                            <!-- <div class="form-group row">
								<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-country">Country</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" placeholder="US" name="country" id="w4-country" >
								</div>
							</div> -->
                            
								<label class="col-sm-2 control-label text-sm-right pt-1" for="w4-zipCode">Zip Code *</label>
								<div class="col-sm-4">
									<input type="text" class="form-control" placeholder="60035" name="zipCode" id="w4-zipCode" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 control-label text-sm-right pt-1" for="w4-phoneNumber">Business Phone *</label>
								<div class="col-sm-4">
									<input type="number" class="form-control" placeholder="8274320840" name="phoneNumber" id="w4-phoneNumber" required>
								</div>
							</div>
							<hr style="background-color:black !important; height:2px;">
							<h3 style="color:black;">Details</h3>
							<hr style="background-color:black !important; height:2px;">
							<div class="form-group row">
								<label class="col-sm-2 control-label text-sm-right pt-1" for="w4-revenue">Revenue *</label>
								<div class="col-sm-4">
									<input type="number" class="form-control" placeholder="2983373" name="revenue" id="w4-revenue" required>
								</div>
							
								<label class="col-sm-2 control-label text-sm-right pt-1" for="w4-ownershipType">Ownership Type *</label>
								<div class="col-sm-4">
                                    <select class="form-control" name="ownershipType" required>
                                        <option value="Public">Public </option>
                                        <option value="Private">Private </option>
                                        <option value="Non-Profit">Non-Profit </option>
                                        <option value="Public Sector">Public Sector </option>
                                        <option value="Partnership">Partnership </option>
                                        <option value="Non-Corporates">Non-Corporates </option>
                                    </select>
                                </div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 control-label text-sm-right pt-1" for="w4-noOfEmployeesAll"># Of Employees All *</label>
								<div class="col-sm-4">
									<input type="number" class="form-control" placeholder="48" name="noOfEmployeesAll" id="w4-noOfEmployeesAll" required>
								</div>
							
								<label class="col-sm-2 control-label text-sm-right pt-1" for="w4-entityType">Entity Type </label>
								<div class="col-sm-4">
                                    <select class="form-control" name="entityType" >
                                        <option value=independent>Independent </option>
                                        <option value=parent>Parent </option>
                                        <option value=subsidiary>Subsidiary </option>
                                    </select>
                                </div>
							</div>
                            <div class="form-group row">
								<label class="col-sm-2 control-label text-sm-right pt-1" for="w4-yearEstablished">Year Established *</label>
								<div class="col-sm-4">
									<input type="number" class="form-control" placeholder="1991" name="yearEstablished" id="w4-yearEstablished" required>
								</div>
							
								<label class="col-sm-4 control-label text-sm-right pt-1" for="w4-isFranchise">Is your organization a Franchise *</label>
								<div class="col-sm-2">
									
										<input type="radio" class="btn-check" value="true" name="w4-isFranchise" id="w4-isFranchiseTrue"  checked>
										<label class="btn btn-outline-secondary" for="w4-isFranchiseTrue">Yes</label>

										<input type="radio" class="btn-check" value="false" name="w4-isFranchise" id="w4-isFranchiseFalse" >
										<label class="btn btn-outline-secondary" for="w4-isFranchiseFalse">No</label>
									
								</div>
							</div>
							<hr style="background-color:black !important; height:2px;">
							<h3 style="color:black;">Security Info</h3>
							<hr style="background-color:black !important; height:2px;">
                            <!-- <div class="form-group row">
								<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-dunsNumber">DUNS Number</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="dunsNumber" id="w4-dunsNumber" >
								</div>
							</div> -->
							<div class="form-group row">
								<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-agentFirstName">Agent First Name</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" readonly value="Defy" name="agentFirstName" id="w4-agentFirstName" >
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-agentLastName">Agent Last Name</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" readonly value="Insurance" name="agentLastName" id="w4-agentLastName" >
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-agentEmail">Agency Email</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" readonly value="defy@email.com" name="agentEmail" id="w4-agentEmail" >
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-agentPhone">Agent Phone</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" readonly value="8274320850" name="agentPhone" id="w4-agentPhone" >
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-9 control-label text-sm-left pt-1" for="w4-claimHistory">Have you ever had any cyber insurance claim(s)? *</label>
								<div class="col-sm-3">
                                    <select class="form-control" name="claimHistory" required>
                                        <option value=0>Never </option>
                                        <option value=1>within last 12 months </option>
                                        <option value=2>with last 2 years </option>
                                        <option value=3>within last 3 years </option>
                                        <option value=4>within last 4 years </option>
                                        <option value=5>within 5years or more </option>
                                    </select>
                                </div>
							</div>
							<div class="form-group row">
								<label class="col-sm-9 control-label text-sm-left pt-1" for="w4-isSecurityOfficer">Does your organization have a Designated Information Security Contact? *</label>
								<div class="col-sm-3">
									
									<input type="radio" class="btn-check" value="true" name="w4-isSecurityOfficer" id="w4-isSecurityOfficerTrue"  checked>
									<label class="btn btn-outline-secondary" for="w4-isSecurityOfficerTrue">Yes</label>

									<input type="radio" class="btn-check" value="false" name="w4-isSecurityOfficer" id="w4-isSecurityOfficerFalse" >
									<label class="btn btn-outline-secondary" for="w4-isSecurityOfficerFalse">No</label>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-9 control-label text-sm-left pt-1" for="w4-isSecurityTraining">Does your organization provide mandatory information security training to all employees at least annually? If not, are you willing to implement it during the policy period? *</label>
								<div class="col-sm-3">
									
										<input type="radio" class="btn-check" value="true" name="w4-isSecurityTraining" id="w4-isSecurityTrainingTrue"  checked>
										<label class="btn btn-outline-secondary" for="w4-isSecurityTrainingTrue">Yes</label>

										<input type="radio" class="btn-check" value="false" name="w4-isSecurityTraining" id="w4-isSecurityTrainingFalse" >
										<label class="btn btn-outline-secondary" for="w4-isSecurityTrainingFalse">No</label>
									
								</div>
							</div>
                            <div class="form-group row">
								<label class="col-sm-9 control-label text-sm-left pt-1" for="w4-useEncryption">Does your organization encrypt emails, mobile and computing devices containing sensitive information (e.g., PII, PHI, PCI) sent to external parties? *</label>
								<div class="col-sm-3">
									
									<input type="radio" class="btn-check" value="true" name="w4-useEncryption" id="w4-useEncryptionTrue"  checked>
									<label class="btn btn-outline-secondary" for="w4-useEncryptionTrue">Yes</label>

									<input type="radio" class="btn-check" value="false" name="w4-useEncryption" id="w4-useEncryptionFalse" >
									<label class="btn btn-outline-secondary" for="w4-useEncryptionFalse">No</label>
								</div>
							</div>
                            <div class="form-group row">
								<label class="col-sm-9 control-label text-sm-left pt-1" for="w4-useCloudStorage">Does your organization have sensitive information stored on the cloud? *</label>
								<div class="col-sm-3">
									
									<input type="radio" class="btn-check" value="true" name="w4-useCloudStorage" id="w4-useCloudStorageTrue"  checked>
									<label class="btn btn-outline-secondary" for="w4-useCloudStorageTrue">Yes</label>

									<input type="radio" class="btn-check" value="false" name="w4-useCloudStorage" id="w4-useCloudStorageFalse" >
									<label class="btn btn-outline-secondary" for="w4-useCloudStorageFalse">No</label>
								</div>
							</div>
							<!-- <div class="form-group row">
								<label class="col-sm-9 control-label text-sm-left pt-1" for="w4-isVerifyingBankAccounts">is Verifying Bank Accounts *</label>
								<div class="col-sm-3">
									
									<input type="radio" class="btn-check" value="true" name="w4-isVerifyingBankAccounts" id="w4-isVerifyingBankAccountsTrue"  checked>
									<label class="btn btn-outline-secondary" for="w4-isVerifyingBankAccountsTrue">Yes</label>

									<input type="radio" class="btn-check" value="false" name="w4-isVerifyingBankAccounts" id="w4-isVerifyingBankAccountsFalse" >
									<label class="btn btn-outline-secondary" for="w4-isVerifyingBankAccountsFalse">No</label>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-9 control-label text-sm-left pt-1" for="w4-isPreventingUnauthorizedWireTransfers">is Preventing Unauthorized Wire Transfers *</label>
								<div class="col-sm-3">
									
									<input type="radio" class="btn-check" value="true" name="w4-isPreventingUnauthorizedWireTransfers" id="w4-isPreventingUnauthorizedWireTransfersTrue"  checked>
									<label class="btn btn-outline-secondary" for="w4-isPreventingUnauthorizedWireTransfersTrue">Yes</label>

									<input type="radio" class="btn-check" value="false" name="w4-isPreventingUnauthorizedWireTransfers" id="w4-isPreventingUnauthorizedWireTransfersFalse" >
									<label class="btn btn-outline-secondary" for="w4-isPreventingUnauthorizedWireTransfersFalse">No</label>
								</div>
							</div> -->
                            <!-- <div class="form-group row">
								<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-daAgencyId">DA Agency Id</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="daAgencyId" id="w4-daAgencyId" >
								</div>
							</div>
                            <div class="form-group row">
								<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-dbaOrTradestyle">DBA Or Tradestyle</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="dbaOrTradestyle" id="w4-dbaOrTradestyle" >
								</div>
							</div>
                            <div class="form-group row">
								<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-domains">Domains</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="domains" id="w4-domains" >
								</div>
							</div>
                            <div class="form-group row">
								<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-ein">EIN</label>
								<div class="col-sm-9">
									<input type="number" class="form-control" name="ein" id="w4-ein" >
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-isAuthenticatingFundTransferRequests">is Authenticating Fund Transfer Requests *</label>
								<div class="col-sm-9">
									<input type="bolean" value="true" readonly class="form-control" name="isAuthenticatingFundTransferRequests" id="w4-isAuthenticatingFundTransferRequests" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-isFranchise">is Franchise *</label>
								<div class="col-sm-9">
									<input type="bolean" value="true" readonly class="form-control" name="isFranchise" id="w4-isFranchise" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-natureOfBusiness">Nature Of Business</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="natureOfBusiness" id="w4-natureOfBusiness" >
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-numberOfPersonalRecords">Number Of Personal Records</label>
								<div class="col-sm-9">
									<input type="number" class="form-control" name="numberOfPersonalRecords" id="w4-numberOfPersonalRecords" >
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-percentInternationalSales">Percent International Sales</label>
								<div class="col-sm-9">
									<input type="number" class="form-control" name="percentInternationalSales" id="w4-percentInternationalSales" >
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-primaryNaicsPercentage">Primary NAICS Percentage</label>
								<div class="col-sm-9">
									<input type="number" class="form-control" name="primaryNaicsPercentage" id="w4-primaryNaicsPercentage" >
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-secondNaicsCode">Second Naics Code </label>
								<div class="col-sm-9">
									<input type="number" class="form-control" name="secondNaicsCode" id="w4-secondNaicsCode">
								</div>
							</div>
                            <div class="form-group row">
								<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-url">url </label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="url" id="w4-url" >
								</div>
							</div> -->
                        </form>
					</div>