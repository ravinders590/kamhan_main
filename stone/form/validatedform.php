<link rel="stylesheet" href="form/fv.css" type="text/css" />

<!--_________________________________________________________________________________-->



	<div id="wrap">
    	<section class="form">
        	<form action="" method="post" novalidate>
            	<fieldset>
                	<div class="item">
						<label>
							<span class="span_class">Name</span>
							<input data-validate-length-range="6" data-validate-words="2" name="name" placeholder="ex. First Middle Last" style="font-size:16px !Important; font-family: 'Abel', sans-serif;" required="required" />
						</label>
						<div class='tooltip help'>
							<span>?</span>
							<div class='content'>
								<b></b>
								<p>Name must be at least 2 words.</p>
							</div>
						</div>
					</div>
                    <!---->
					<div class="item">
						<label>
							<span class="span_class">Occupation</span>
							<input class='optional' name="occupation" data-validate-length-range="5,20" type="text" style="font-size:16px !Important; font-family: 'Abel', sans-serif;" />
						</label>
						<div class='tooltip help'>
							<span>?</span>
							<div class='content'>
								<b></b>
								<p>Please enter your occupation or leave it blank.</p>
							</div>
						</div>
                        <span class='extra'>(optional)</span>
					</div>
                    <!---->      
					<div class="item">
						<label>
							<span class="span_class">email</span>
							<input name="email" class='email' required="required" type="email" style="font-size:16px !Important; font-family: 'Abel', sans-serif;" />
						</label>
					</div>
                    <!---->
					<div class="item">
						<label>
							<span class="span_class">Phone</span>
							<input type="tel" class='tel' name="phone" required='required' data-validate-length-range="8,20" style="font-size:16px !Important; font-family: 'Abel', sans-serif;" />
						</label>
						<div class='tooltip help'>
							<span>?</span>
							<div class='content'>
								<b></b>
								<p>Phone Number may contain '+' or '-' signs only.</p>
							</div>
						</div>
					</div>
                    <!---->
					<div class="item">
						<label>
							<span class="span_class">Website</span>
							<input name="url" placeholder="http://www.website.com" required="required" type="url" style="font-size:16px !Important; font-family: 'Abel', sans-serif;" />
						</label>
					</div>
                    <!---->
					<div class="item">
						<label>
							<span class="span_class">message</span>
							<textarea required="required" name="message" style="font-size:16px !Important; font-family: 'Abel', sans-serif;"></textarea>
						</label>
					</div> 
                    <br /><br />                                                                           
                </fieldset>
                <button id="send" type="submit" class="enquirebutton">Submit</button>
            </form>
        </section>    
    </div>









<!--_________________________________________________________________________________-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="form/multifield.js"></script>
<script src="form/validator.js"></script>
<script>
	// initialize the validator function
	validator.message['date'] = 'not a real date';
		// validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
		$('form')
			.on('blur', 'input[required], input.optional, select.required', validator.checkField)
			.on('change', 'select.required', validator.checkField)
			.on('keypress', 'input[required][pattern]', validator.keypress);

		$('.multi.required')
			.on('keyup blur', 'input', function(){
				validator.checkField.apply( $(this).siblings().last()[0] );
			});

		// bind the validation to the form submit event
		//$('#send').click('submit');//.prop('disabled', true);

		$('form').submit(function(e){
			e.preventDefault();
			var submit = true;
			// evaluate the form using generic validaing
			if( !validator.checkAll( $(this) ) ){
				submit = false;
			}

			if( submit )
				this.submit();
			return false;
		});

		/* FOR DEMO ONLY */
		$('#vfields').change(function(){
			$('form').toggleClass('mode2');
		}).prop('checked',false);

		$('#alerts').change(function(){
			validator.defaults.alerts = (this.checked) ? false : true;
			if( this.checked )
				$('form .alert').remove();
	}).prop('checked',false);
</script>