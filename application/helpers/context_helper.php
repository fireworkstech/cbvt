<?php 

	function getDmvData($data) {
		echo '<input type="hidden" name="id" value="'.$data['id'].'">';	//sql
		// echo '<input type="hidden" name="id" value="'.$data['_id'].'">'; mongo db

		echo '
			<input type="hidden" name="type" value="dmv">
			<div class="row-fluid">
				<div class="span6">
					<span><b> Name </b></span> <span> '.$data['firstname'].' '.$data['lastname'].'
				</div>
				<div class="span6">
					<span><b> License </b></span> <span> '.$data['license'].'
				</div>
			</div>

			<div class="row-fluid">
				<div class="span6">
					<span><b> Start Date </b></span> <span> '.$data['start_date'].'
				</div>
				<div class="span6">
					<span><b> End Date </b></span> <span> '.$data['end_date'].'
				</div>
			</div>

			<div class="row-fluid">
				<div class="span6">
					<span><b> Vehicle Registration </b></span> <span> '.$data['vehicle_registration'].'
				</div>
				<div class="span6">
					<span><b> VIN </b></span> <span> '.$data['vin'].'
				</div>
			</div>

			<div class="row-fluid">
				<div class="span6">
					<span><b> Vehicle Company </b></span> <span> '.$data['vehicle_company'].'
				</div>
				<div class="span6">
					<span><b> End Date </b></span> <span> '.$data['end_date'].'
				</div>
			</div>

			<div class="row-fluid">
				<div class="span6">
					<span><b> Vehicle Model </b></span> <span> '.$data['vehicle_model'].'
				</div>
				<div class="span6">
					<span><b> Vehicle Year </b></span> <span> '.$data['vehicle_year'].'
				</div>
			</div>
		';
	}

	function getBankData($data) {
		echo '<input type="hidden" name="id" value="'.$data['id'].'">';	//sql
		// echo '<input type="hidden" name="id" value="'.$data['_id'].'">';	//mongo db

		echo '
			<input type="hidden" name="type" value="bank">
			<div class="row-fluid">
				<div class="span6">
					<span><b> Name </b></span> <span> '.$data['firstname'].' '.$data['lastname'].'
				</div>
				<div class="span6">
					<span><b> License </b></span> <span> '.$data['license'].'
				</div>
			</div>

			<div class="row-fluid">
				<div class="span6">
					<span><b> Start Date </b></span> <span> '.$data['start_date'].'
				</div>
				<div class="span6">
					<span><b> End Date </b></span> <span> '.$data['end_date'].'
				</div>
			</div>

			<div class="row-fluid">
				<div class="span6">
					<span><b> Bank Name </b></span> <span> '.$data['bank_name'].'
				</div>
				<div class="span6">
					<span><b> Loan </b></span> <span> '.$data['loan'].'
				</div>
			</div>

			<div class="row-fluid">
				<div class="span6">
					<span><b> Insurance Company </b></span> <span> '.$data['insurance_company'].'
				</div>
				<div class="span6">
					<span><b> Insurance Policy </b></span> <span> '.$data['insurance_policy'].'
				</div>
			</div>
		';
	}