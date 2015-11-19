<?php 

	function getDmvData($data) {
		echo '
			<input type="hidden" name="id" value="'.$data['_id'].'">
			<input type="hidden" name="type" value="dmv">
			<div class="row-fluid">
				<div class="span4">
					<span> Name </span> <span> '.$data['firstname'].' '.$data['lastname'].'
				</div>
				<div class="span4">
					<span> License </span> <span> '.$data['license'].'
				</div>
			</div>

			<div class="row-fluid">
				<div class="span4">
					<span> Start Date </span> <span> '.$data['start_date'].'
				</div>
				<div class="span4">
					<span> End Date </span> <span> '.$data['end_date'].'
				</div>
			</div>

			<div class="row-fluid">
				<div class="span4">
					<span> Vehicle Registration </span> <span> '.$data['vehicle_registration'].'
				</div>
				<div class="span4">
					<span> VIN </span> <span> '.$data['vin'].'
				</div>
			</div>

			<div class="row-fluid">
				<div class="span4">
					<span> Vehicle Company </span> <span> '.$data['vehicle_company'].'
				</div>
				<div class="span4">
					<span> End Date </span> <span> '.$data['end_date'].'
				</div>
			</div>

			<div class="row-fluid">
				<div class="span4">
					<span> Vehicle Model </span> <span> '.$data['vehicle_model'].'
				</div>
				<div class="span4">
					<span> Vehicle Year </span> <span> '.$data['vehicle_year'].'
				</div>
			</div>
		';
	}

	function getBankData($data) {
		echo '
			<input type="hidden" name="id" value="'.$data['_id'].'">
			<input type="hidden" name="type" value="bank">
			<div class="row-fluid">
				<div class="span4">
					<span> Name </span> <span> '.$data['firstname'].' '.$data['lastname'].'
				</div>
				<div class="span4">
					<span> License </span> <span> '.$data['license'].'
				</div>
			</div>

			<div class="row-fluid">
				<div class="span4">
					<span> Start Date </span> <span> '.$data['start_date'].'
				</div>
				<div class="span4">
					<span> End Date </span> <span> '.$data['end_date'].'
				</div>
			</div>

			<div class="row-fluid">
				<div class="span4">
					<span> Bank Name </span> <span> '.$data['bank_name'].'
				</div>
				<div class="span4">
					<span> Loan </span> <span> '.$data['loan'].'
				</div>
			</div>

			<div class="row-fluid">
				<div class="span4">
					<span> Insurance Company </span> <span> '.$data['insurance_company'].'
				</div>
				<div class="span4">
					<span> Insurance Policy </span> <span> '.$data['insurance_policy'].'
				</div>
			</div>
		';
	}