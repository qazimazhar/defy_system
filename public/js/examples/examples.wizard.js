/*
Name: 			Forms / Wizard - Examples
Written by: 	Okler Themes - (http://www.okler.net)
Theme Version: 	3.0.0
*/

(function($) {

	'use strict';

	/*
	Wizard #4
	*/
	var $w4finish = $('#w4').find('ul.pager li.finish'),
	$w4validator = $("#w4 form").validate({
		highlight: function(element) {
			$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
		},
		success: function(element) {
			$(element).closest('.form-group').removeClass('has-error');
			$(element).remove();
		},
		errorPlacement: function( error, element ) {
			element.parent().append( error );
		}
	});

	$w4finish.on('click', function( ev ) {
		ev.preventDefault();
		var validated = $('#w4 form').valid();
		if ( validated ) {
			new PNotify({
				title: 'Congratulations',
				text: 'You completed the wizard form.',
				type: 'custom',
				addclass: 'notification-success',
				icon: 'fas fa-check'
			});
			window.location=paymenyUrl;
		}
	});

	$('#w4').bootstrapWizard({
		tabClass: 'wizard-steps',
		nextSelector: 'ul.pager li.next',
		previousSelector: 'ul.pager li.previous',
		firstSelector: null,
		lastSelector: null,
		isAjaxExecuted: true,
		onNext: function( tab, navigation, index, newindex ) {
			var validated = $('#w4 form').valid();
			if( !validated ) {
				$w4validator.focusInvalid();
				return false;
			}
			console.log(index);
				if(index == 3) {
					if(this.isAjaxExecuted == true) {
						this.isAjaxExecuted = false;
							
					console.log(index);
					var form = $('#qoute-form');
					var url = form.attr('action');
					console.log("qoute");
					$.ajax({
						type: "POST",
						url: url,
						headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
						data: form.serialize(), // serializes the form's elements.
						success: function(data)
						{
							console.log(data);
							// console.log(data.data);
							if(data.error == false) {
								// this.isAjaxExecuted = false;
								// console.log(this.isAjaxExecuted);
								$('#w4').bootstrapWizard('next');
								console.log(data);
								
								// console.log(data.data.cumCoveragePremium);
								var row = $('<tr><th>' + 'Quote Number:' + '<th>' + '</th></tr>'  + '<th>' + data.data.quoteNumber  + '</th></tr>' + '<tr><th>' + 'Policy Holder Name:'  + '<th>' + data.data.customerFirstName + data.data.customerLastName  + '</th></tr>' + '<tr><th>' + 'Policy Holder Email:'  + '<th>' + data.data.customerEmail  + '</th></tr>' + '<tr><th>' + 'Quote Created:'  + '<th>' + data.data.created  + '</th></tr>' + '<tr><th>' + 'Quote Expires:'  + '<th>' + data.data.expiresOn  + '</th></tr>' + '<tr><th>' +  'Waiting Period:'  + '<th>' + data.data.initialRequestData.waitingPeriod  + '</th></tr>' + '<tr><th>' + 'Aggregate Limit:'  + '<th>' + data.data.initialRequestData.limit  + '</th></tr>' + '<tr><th>' + 'Deductible:'  + '<th>' + data.data.initialRequestData.deductible  + '</th></tr>' );
            					$('#w4-getqoute').append(row);
							}
							// console.log(data);
						}
					});
					return false;
				}
					return true;
				}
			console.log(index);
				if(index == 2) {
					if(this.isAjaxExecuted == false) {
						this.isAjaxExecuted = true;
							
					console.log(index);
					var form = $('#register-form');
					var url = form.attr('action');
					console.log("register");
					$.ajax({
						type: "POST",
						url: url,
						headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
						data: form.serialize(), // serializes the form's elements.
						success: function(data)
						{
							console.log(data);
							// console.log(data.data);
							if(data.error == false) {
								// this.isAjaxExecuted = false;
								// console.log(this.isAjaxExecuted);
								$('#w4').bootstrapWizard('next');
								console.log(data);
								new PNotify({
									title: 'Congratulations',
									text: 'Account Created.',
									type: 'custom',
									addclass: 'notification-success',
									icon: 'fas fa-check'
								});
								// console.log(data.data.cumCoveragePremium);
								// var row = $('<tr><th>' + "Cum Coverage Premium : " + '</th>' + '<th>' + data.data.cumCoveragePremium  + '</th></tr>' + '<tr><th>' + "Endorsement Premium : " + '</th>' + '<th>' + data.data.endorsementPremium  + '</th></tr>' + '<tr><th>' + "Total Premium : " + '</th>' + '<th>' + data.data.totalPremium  + '</th></tr>' + '<tr><th>' + "Total Adjusted Premium : " + '</th>' + '<th>' + data.data.totalAdjustedPremium  + '</th></tr>'+ '<tr><th>' + "State Fee Amount : " + '</th>' + '<th>' + data.data.stateFeeAmount  + '</th></tr>'+ '<tr><th>' + "Broker Fee : " + '</th>' + '<th>' + data.data.brokerFee  + '</th></tr>'+ '<tr><th>' + "Final Premium : " + '</th>' + '<th>' + data.data.finalPremium  + '</th></tr>' );
								// $('#w4-profile').append(row);
							}
							// console.log(data);
						}
					});
					return false;
				}
					return true;
				}
			// console.log(this.isAjaxExecuted);
			if(this.isAjaxExecuted == true) {
				this.isAjaxExecuted = false;
				var form = $('#contact-form');
				var url = form.attr('action');
				console.log("asdasd");
				$.ajax({
					type: "POST",
					url: '/contact',
					headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
					data: form.serialize(), // serializes the form's elements.
					success: function(data)
					{
						
							// this.isAjaxExecuted = false;
							// console.log(this.isAjaxExecuted);
							$('#w4').bootstrapWizard('next');
							console.log(data);
							// console.log(data.data.cumCoveragePremium);
							// var row = $('<tr><th>' + "Cum Coverage Premium : " + '</th>' + '<th>' + data.data.cumCoveragePremium  + '</th></tr>' + '<tr><th>' + "Endorsement Premium : " + '</th>' + '<th>' + data.data.endorsementPremium  + '</th></tr>' + '<tr><th>' + "Total Premium : " + '</th>' + '<th>' + data.data.totalPremium  + '</th></tr>' + '<tr><th>' + "Total Adjusted Premium : " + '</th>' + '<th>' + data.data.totalAdjustedPremium  + '</th></tr>'+ '<tr><th>' + "State Fee Amount : " + '</th>' + '<th>' + data.data.stateFeeAmount  + '</th></tr>'+ '<tr><th>' + "Broker Fee : " + '</th>' + '<th>' + data.data.brokerFee  + '</th></tr>'+ '<tr><th>' + "Final Premium : " + '</th>' + '<th>' + data.data.finalPremium  + '</th></tr>' );
            				// $('#w4-profile').append(row);
						
						
						// console.log(data);
					}
				});
				
				return false;
			}
			return true;
			
			
			// return false;
			
		},
		onTabClick: function( tab, navigation, index, newindex ) {
			if ( newindex == index + 1 ) {
				return this.onNext( tab, navigation, index, newindex);
			} else if ( newindex > index + 1 ) {
				return false;
			} else {
				return true;
			}
		},
		onTabChange: function( tab, navigation, index, newindex ) {
			var $total = navigation.find('li').length - 1;
			$w4finish[ newindex != $total ? 'addClass' : 'removeClass' ]( 'hidden' );
			$('#w4').find(this.nextSelector)[ newindex == $total ? 'addClass' : 'removeClass' ]( 'hidden' );
		},
		onTabShow: function( tab, navigation, index ) {
			var $total = navigation.find('li').length - 1;
			var $current = index;
			var $percent = Math.floor(( $current / $total ) * 100);
			
			navigation.find('li').removeClass('active');
			navigation.find('li').eq( $current ).addClass('active');

			$('#w4').find('.progress-indicator').css({ 'width': $percent + '%' });
			tab.prevAll().addClass('completed');
			tab.nextAll().removeClass('completed');
		}
	});

	// $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // });
    // $(".next").click(function(e){
    //     e.preventDefault();
    //     var form = $('#register-form');
	// 	var url = form.attr('action');
    //     $.ajax({
	// 		type: "POST",
	// 		url: url,
	// 		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
	// 		data: form.serialize(), // serializes the form's elements.
	// 		success: function(data)
	// 		{
	// 			if(data.error == false) {
	// 				// this.isAjaxExecuted = false;
	// 				// console.log(this.isAjaxExecuted);
	// 				$('#w4').bootstrapWizard('next');
	// 				console.log(data.data);
	// 				// console.log(data.data.cumCoveragePremium);
	// 				// var row = $('<tr><th>' + "Cum Coverage Premium : " + '</th>' + '<th>' + data.data.cumCoveragePremium  + '</th></tr>' + '<tr><th>' + "Endorsement Premium : " + '</th>' + '<th>' + data.data.endorsementPremium  + '</th></tr>' + '<tr><th>' + "Total Premium : " + '</th>' + '<th>' + data.data.totalPremium  + '</th></tr>' + '<tr><th>' + "Total Adjusted Premium : " + '</th>' + '<th>' + data.data.totalAdjustedPremium  + '</th></tr>'+ '<tr><th>' + "State Fee Amount : " + '</th>' + '<th>' + data.data.stateFeeAmount  + '</th></tr>'+ '<tr><th>' + "Broker Fee : " + '</th>' + '<th>' + data.data.brokerFee  + '</th></tr>'+ '<tr><th>' + "Final Premium : " + '</th>' + '<th>' + data.data.finalPremium  + '</th></tr>' );
	// 				// $('#w4-profile').append(row);
	// 			}
	// 			// console.log(data);
	// 		}
	// 	});
	// });


	
}).apply(this, [jQuery]);