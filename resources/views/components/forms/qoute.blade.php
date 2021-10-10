                        <div id="w4-qoute" class="tab-pane">
                            <form id="qoute-form" action="{{ route('form.quote') }}">
                                <!-- <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-agencyId">Agency Id</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="agencyId" id="w4-agencyId" required>
                                    </div>
                                </div> -->
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-effectiveDate">Effective Date</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" name="effectiveDate" id="w4-effectiveDate" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-endDate">End Date</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" name="endDate" id="w4-endDate" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-limit">Limit *</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="limit" required>
					
                                            <option value="50000">50000</option>
                                            <option value="100000">100000</option>
                                            <option value="250000">250000</option>
                                            <option value="500000">500000</option>
                                            <option value="750000">750000</option>
                                            <option value="1000000">1000000</option>
                                            <option value="2000000">2000000</option>
                                            <option value="3000000">3000000</option>
                                            <option value="4000000">4000000</option>
                                            <option value="5000000">5000000</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-deductible">Deductible *</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="deductible" required>
                                            <option value="1000">1000 </option>
                                            <option value="1500" >1500 </option>
                                            <option value="2500">2500 </option>
                                            <option value="5000">5000 </option>
                                            <option value="10000">10000 </option>
                                            <option value="25000">25000 </option>
                                            <option value="50000">50000 </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-waitingPeriod">Waiting Period *</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="waitingPeriod" required>
                                            <option value="6">6 </option>
                                            <option value="8" selected>8 </option>
                                            <option value="12">12 </option>
                                            <option value="24">24 </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-retroactivePeriod">Retroactive Period</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="retroactivePeriod" >
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3" selected>3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-businessIncomeCoverage">Business Income Coverage *</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="businessIncomeCoverage" required>
                                            <option value="5000">5000 </option>
                                            <option value="10000">10000 </option>
                                            <option value="15000">15000 </option>
                                            <option value="20000">20000 </option>
                                            <option value="25000">25000 </option>
                                            <option value="100000">100000 </option>
                                            <option value="150000">150000 </option>
                                            <option value="200000">200000 </option>
                                            <option value="250000">250000 </option>
                                            <option value="300000">300000 </option>
                                            <option value="350000">350000 </option>
                                            <option value="400000">400000 </option>
                                            <option value="450000">450000 </option>
                                            <option value="500000">500000 </option>
                                            <option value="550000">550000 </option>
                                            <option value="600000">600000  </option>
                                            <option value="650000">650000  </option>
                                            <option value="700000">700000  </option>
                                            <option value="750000">750000  </option>
                                            <option value="800000">800000  </option>
                                            <option value="850000">850000  </option>
                                            <option value="900000">900000  </option>
                                            <option value="950000">950000  </option>
                                            <option value="1000000">1000000 </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-computerFraudEndorsement">Computer Fraud Endorsement *</label>
                                    <div class="col-sm-9">
                                    <input type="radio" class="btn-check" value="true" name="w4-computerFraudEndorsement" id="w4-computerFraudEndorsementTrue"  checked>
										<label class="btn btn-outline-secondary" for="w4-computerFraudEndorsementTrue">Yes</label>

										<input type="radio" class="btn-check" value="false" name="w4-computerFraudEndorsement" id="w4-computerFraudEndorsementFalse" >
										<label class="btn btn-outline-secondary" for="w4-computerFraudEndorsementFalse">No</label>
                                    </div>
                                </div>
                                <!-- <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-agentFirstName">Agent First Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="agentFirstName" id="w4-agentFirstName" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-agentLastName">Agent Last Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="agentLastName" id="w4-agentLastName" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-agentEmail">Agency Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="agentEmail" id="w4-agentEmail" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-agentPhone">Agent Phone</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="agentPhone" id="w4-agentPhone" >
                                    </div>
                                </div> -->
                                <!-- <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-accountDescription">Business description</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="accountDescription" id="w4-accountDescription" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-accountId">Account Id</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="accountId" id="w4-accountId" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-accountName">Account Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="accountName" id="w4-accountName" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-address1">Address 1</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="address1" id="w4-address1" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-address2">Address 2</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="address2" id="w4-address2" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-agencyName">Agency Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="agencyName" id="w4-agencyName" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-city">City</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="city" id="w4-city" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-claimHistory">Claim History </label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="claimHistory">
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
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-domainName">Domain Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="domainName" id="w4-domainName" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-domains">Domains</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="domains" id="w4-domains" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-dunsNumber">DUNSNumber</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="dunsNumber" id="w4-dunsNumber" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-entityType">Entity Type </label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="entityType" >
                                            <option value=independent>Independent </option>
                                            <option value=parent>Parent </option>
                                            <option value=subsidiary>Subsidiary </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-hardwareReplCostEndorsement">Hardware Repl Cost Endorsement</label>
                                    <div class="col-sm-9">
                                        <input type="bolean" value="true" readonly class="form-control" name="hardwareReplCostEndorsement" id="w4-hardwareReplCostEndorsement" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-isAuthenticatingFundTransferRequests">is Authenticating Fund Transfer Requests </label>
                                    <div class="col-sm-9">
                                        <input type="bolean" value="true" readonly class="form-control" name="isAuthenticatingFundTransferRequests" id="w4-isAuthenticatingFundTransferRequests" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-isFranchise">is Franchise </label>
                                    <div class="col-sm-9">
                                        <input type="bolean" value="true" readonly class="form-control" name="isFranchise" id="w4-isFranchise" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-isPreventingUnauthorizedWireTransfers">is Preventing Unauthorized Wire Transfers </label>
                                    <div class="col-sm-9">
                                        <input type="bolean" value="true" readonly class="form-control" name="isPreventingUnauthorizedWireTransfers" id="w4-isPreventingUnauthorizedWireTransfers" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-isSecurityOfficer">is Security Officer </label>
                                    <div class="col-sm-9">
                                        <input type="bolean" value="true" readonly class="form-control" name="isSecurityOfficer" id="w4-isSecurityOfficer" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-isSecurityTraining">is Security Training </label>
                                    <div class="col-sm-9">
                                        <input type="bolean" value="true" readonly class="form-control" name="isSecurityTraining" id="w4-isSecurityTraining" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-isVerifyingBankAccounts">is Verifying Bank Accounts </label>
                                    <div class="col-sm-9">
                                        <input type="bolean" value="true" readonly class="form-control" name="isVerifyingBankAccounts" id="w4-isVerifyingBankAccounts" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-naicsCode">NAICS Code </label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" name="naicsCode" id="w4-naicsCode" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-natureOfBusiness">Nature Of Business</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="natureOfBusiness" id="w4-natureOfBusiness" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-noOfEmployeesAll">No Of Employees All </label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" name="noOfEmployeesAll" id="w4-noOfEmployeesAll" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-ownershipType">Ownership Type </label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="ownershipType" >
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
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-phoneNumber">Phone Number</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" name="phoneNumber" id="w4-phoneNumber" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-policyContactEmail">Policy Contact Email </label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" name="policyContactEmail" id="w4-policyContactEmail" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-policyContactFirstName">Policy Contact First Name </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="policyContactFirstName" id="w4-policyContactFirstName" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-policyContactLastName">Policy Contact Last Name </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="policyContactLastName" id="w4-policyContactLastName">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-policyContactPhone">Policy Contact Phone</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" name="policyContactPhone" id="w4-policyContactPhone" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-postBreachRemediationEndorsement">Post Breach Remediation Endorsement</label>
                                    <div class="col-sm-9">
                                        <input type="bolean" value="true" readonly class="form-control" name="postBreachRemediationEndorsement" id="w4-postBreachRemediationEndorsement" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-postBreachRemediationSubLimit">Post Breach Remediation SubLimit</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" name="postBreachRemediationSubLimit" id="w4-postBreachRemediationSubLimit" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-ransomPaymentEndorsement">Ransom Payment Endorsement</label>
                                    <div class="col-sm-9">
                                        <input type="bolean" value="true" readonly class="form-control" name="ransomPaymentEndorsement" id="w4-ransomPaymentEndorsement" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-ransomPaymentLimit">Ransom Payment Limit</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="ransomPaymentLimit" >
                                            <option>250000  </option>
                                            <option>500000  </option>
                                            <option>1000000 </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-revenue">Revenue </label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" name="revenue" id="w4-revenue" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-socialEngDeductible">Social Eng Deductible</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="socialEngDeductible" >
                                            <option>10000 </option>
                                            <option>25000 </option>
                                            <option>50000</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-socialEngEndorsement">Social Eng Endorsement</label>
                                    <div class="col-sm-9">
                                        <input type="bolean" value="true" readonly class="form-control" name="socialEngEndorsement" id="w4-socialEngEndorsement" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-socialEngLimit">Social Eng Limit</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="socialEngLimit" >
                                            <option>50000 </option>
                                            <option>100000 </option>
                                            <option>250000 </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-state">State *</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="state" id="w4-state" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-telecomsFraudEndorsement">Telecoms Fraud Endorsement</label>
                                    <div class="col-sm-9">
                                        <input type="bolean" value="true" readonly class="form-control" name="telecomsFraudEndorsement"  id="w4-telecomsFraudEndorsement" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-telecomsFraudSubLimit">Telecoms Fraud SubLimit</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" name="telecomsFraudSubLimit" Value= "50000" id="w4-telecomsFraudSubLimit" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-url">url </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="url" id="w4-url" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-useCloudStorage">Use Cloud Storage </label>
                                    <div class="col-sm-9">
                                        <input type="bolean" value="true" readonly class="form-control" name="useCloudStorage" id="w4-useCloudStorage" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-useEncryption">Use Encryption </label>
                                    <div class="col-sm-9">
                                        <input type="bolean" value="true" readonly class="form-control" name="useEncryption" id="w4-useEncryption" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-yearEstablished">Year Established </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="yearEstablished" id="w4-yearEstablished" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-sm-right pt-1" for="w4-zipCode">Zip Code *</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="zipCode" id="w4-zipCode" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9">
                                        <div class="checkbox-custom">
                                            <input type="checkbox" name="terms" id="w4-terms" required>
                                            <label for="w4-terms">I agree to the terms of service</label>
                                        </div>
                                    </div>
                                </div> -->
                            </form>
						</div>