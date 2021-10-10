<div id="w4-contact" class="tab-pane">
<form id="contact-form" action="{{ route('form.contact') }}">
<h3 style="color:#2180E2;">Contact</h3>
<hr style="background-color:black !important; height:2px;">
	<div class="form-group row">
								<label class="col-sm-2 control-label text-sm-right pt-1" for="w4-policyContactFirstName">First Name *</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" placeholder="First Name" name="policyContactFirstName" id="w4-policyContactFirstName" required>
									</div>
								
									<label class="col-sm-2 control-label text-sm-right pt-1" for="w4-policyContactLastName">Last Name *</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" placeholder="Last Name" name="policyContactLastName" id="w4-policyContactLastName" required>
									</div>
								</div>
								<!-- <div class="form-group row">
									<label class="col-sm-2 control-label text-sm-right pt-1" for="w4-policyContactPhone">Policy Contact Phone</label>
									<div class="col-sm-9">
										<input type="number" class="form-control" placeholder="8274320870" name="policyContactPhone" id="w4-policyContactPhone" >
									</div>
								</div> -->
								<div class="form-group row">
									<label class="col-sm-2 control-label text-sm-right pt-1" for="w4-policyContactEmail">Email *</label>
									<div class="col-sm-4">
										<input type="email" class="form-control" placeholder="your@email.com" name="policyContactEmail" id="w4-policyContactEmail" required>
								</div>
	</div>
	<hr style="background-color:black !important; height:2px;">
	</form>
</div>