<div id="w4-calculation" class="tab-pane active">
	<form id="calculation-form" action="{{ route('form.calculate') }}">
		<div class="form-group row">
			<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-aggregateLimit">Aggregate Limit *</label>
			<div class="col-sm-9">
				<select class="form-control" name="aggregateLimit" required>
					<option value="1000000">1000000</option>
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
			<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-businessIncomeCoverage">Business Income Coverage *</label>
			<div class="col-sm-9">
				<select class="form-control" name="businessIncomeCoverage" required>
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
			<label class="col-sm-3 control-label text-sm-right pt-1" for="companyType">Company Type *</label>
			<div class="col-sm-9">
				<select class="form-control" name="companyType" required>
					<option value="Private">Private</option>
					<option value="Public">Public</option>
					<option value="Profit">Non-Profit</option>
					<option value="Public Sector">Public Sector</option>
					<option value="Partnership">Partnership</option>
					<option value="Non-Corporates">Non-Corporates</option>
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
			<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-naicsCode">NAICS Code *</label>
			<div class="col-sm-9">
				<input type="number" class="form-control" placeholder="237110" name="naicsCode" id="w4-naicsCode" required>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-numberOfEmployees">Number Of Employees *</label>
			<div class="col-sm-9">
				<input type="number" class="form-control" placeholder="48" name="numberOfEmployees" id="w4-numberOfEmployees" required>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-questionCloud">Question Cloud *</label>
			<div class="col-sm-9">
			<input type="radio" class="btn-check" value="true" name="w4-questionCloud" id="w4-questionCloudTrue"  checked>
										<label class="btn btn-outline-secondary" for="w4-questionCloudTrue">Yes</label>

										<input type="radio" class="btn-check" value="false" name="w4-questionCloud" id="w4-questionCloudFalse" >
										<label class="btn btn-outline-secondary" for="w4-questionCloudFalse">No</label>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-questionEncryption">Question Encryption *</label>
			<div class="col-sm-9">
			<input type="radio" class="btn-check" value="true" name="w4-questionEncryption" id="w4-questionEncryptionTrue"  checked>
										<label class="btn btn-outline-secondary" for="w4-questionEncryptionTrue">Yes</label>

										<input type="radio" class="btn-check" value="false" name="w4-questionEncryption" id="w4-questionEncryptionFalse" >
										<label class="btn btn-outline-secondary" for="w4-questionEncryptionFalse">No</label>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-questionLeadership">Question Leadership *</label>
			<div class="col-sm-9">
			<input type="radio" class="btn-check" value="true" name="w4-questionLeadership" id="w4-questionLeadershipTrue"  checked>
										<label class="btn btn-outline-secondary" for="w4-questionLeadershipTrue">Yes</label>

										<input type="radio" class="btn-check" value="false" name="w4-questionLeadership" id="w4-questionLeadershipFalse" >
										<label class="btn btn-outline-secondary" for="w4-questionLeadershipFalse">No</label>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-questionTraining">Question Training *</label>
			<div class="col-sm-9">
			<input type="radio" class="btn-check" value="true" name="w4-questionTraining" id="w4-questionTrainingTrue"  checked>
										<label class="btn btn-outline-secondary" for="w4-questionTrainingTrue">Yes</label>

										<input type="radio" class="btn-check" value="false" name="w4-questionTraining" id="w4-questionTrainingFalse" >
										<label class="btn btn-outline-secondary" for="w4-questionTrainingFalse">No</label>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-retroactiveYear">Retroactive Year *</label>
			<div class="col-sm-9">
				<select class="form-control" name="retroactiveYear" required>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3" selected>3</option>
				</select>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-revenue">Revenue *</label>
			<div class="col-sm-9">
				<input type="number" class="form-control" placeholder="2983373" name="revenue" id="w4-revenue" required>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-socialEngDeductible">Social Eng Deductible</label>
			<div class="col-sm-9">
				<select class="form-control" name="socialEngDeductible" >
					<option value="10000">10000 </option>
					<option value="25000">25000 </option>
					<option value="50000">50000</option>
				</select>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-socialEngEndorsement">Social Eng Endorsement</label>
			<div class="col-sm-9">
			<input type="radio" class="btn-check" value="true" name="w4-socialEngEndorsement" id="w4-socialEngEndorsementTrue"  checked>
										<label class="btn btn-outline-secondary" for="w4-socialEngEndorsementTrue">Yes</label>

										<input type="radio" class="btn-check" value="false" name="w4-socialEngEndorsement" id="w4-socialEngEndorsementFalse" >
										<label class="btn btn-outline-secondary" for="w4-socialEngEndorsementFalse">No</label>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-socialEngLimit">Social Eng Limit</label>
			<div class="col-sm-9">
				<select class="form-control" name="socialEngLimit" >
					<option value="50000">50000 </option>
					<option value="100000">100000 </option>
					<option value="250000">250000 </option>
				</select>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-state">State *</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" placeholder="IL" name="state" id="w4-state" required>
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
			<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-excludedFromSE">excludedFromSE *</label>
			<div class="col-sm-9">
			<input type="radio" class="btn-check" value="true" name="w4-excludedFromSE" id="w4-excludedFromSETrue"  checked>
										<label class="btn btn-outline-secondary" for="w4-excludedFromSETrue">Yes</label>

										<input type="radio" class="btn-check" value="false" name="w4-excludedFromSE" id="w4-excludedFromSEFalse" >
										<label class="btn btn-outline-secondary" for="w4-excludedFromSEFalse">No</label>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-effectiveDate">Effective Date</label>
			<div class="col-sm-9">
				<input type="date" class="form-control" name="effectiveDate" id="w4-effectiveDate" >
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 control-label text-sm-right pt-1" for="w4-yearsInBusiness">Years In Business *</label>
			<div class="col-sm-9">
				<input type="number" class="form-control" placeholder="30" name="yearsInBusiness" id="w4-yearsInBusiness" required>
			</div>
		</div>
	</form>
</div>