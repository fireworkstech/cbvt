
    <div class="maincontent">
        <div class="maincontentinner">
            <form method="post" action="<?=base_url()?>Context/driver" enctype="multipart/form-data">
            <div class="widgetbox box-inverse">
                <h4 class="widgettitle">Personal Details</h4>
                <div class="widgetcontent nopadding">
                    <div class="stdform stdform2">
                        <!-- <img src="<?php echo base_url() ?>application/libraries/Zend/barcode.php?text=testing" alt="testing" />
                        <img alt="testing" src="<?php echo base_url() ?>application/views/user/barcode.php" /> -->
                        <p>
                            <label>Image</label>
                            <span class="field"><input type="file" name="profile" class="input-xxlarge" ></span>
                        </p>
                        <p>
                            <label>First Name</label>
                            <span class="field"><input type="text" name="firstname" class="input-xxlarge" onkeypress="return blockUserInputs(this, event, false, true, false, false, false, false, false, false, false, false, false, true, false)"></span>
                        </p>
                        
                        <p>
                            <label>Last Name</label>
                            <span class="field"><input type="text" name="lastname" class="input-xxlarge" onkeypress="return blockUserInputs(this, event, false, true, false, false, false, false, false, false, false, false, false, true, false)"></span>
                        </p>
                        
                        <p>
                            <label>Address</label>
                            <span class="field"><input type="text" name="address" class="input-xxlarge"></span>
                        </p>
                        
                        <p>
                            <label>License Number </label>
                            <span class="field"><input type="text" name="license" class="input-xxlarge" onkeypress="return blockUserInputs(this, event, true, true, false, false, false, false, false, false, false, false, false, false, false)"></span></span>
                        </p>
                        <p>
                            <label>Passport Number </label>
                            <span class="field"><input type="text" name="passport" class="input-xxlarge" onkeypress="return blockUserInputs(this, event, true, true, false, false, false, false, false, false, false, false, false, false, false)"></span></span>
                        </p>                        
                        <p>
                            <label>Start Date </label>
                            <span class="field"><input type="date" name="start_date" class="input-xxlarge"></span></span>
                        </p>
                        <p>
                            <label>End Date </label>
                            <span class="field"><input type="date" name="end_date" class="input-xxlarge"></span></span>
                        </p>
                                                
                        <p class="stdformbutton">
                            <button type="reset" class="btn">Reset Button</button>
                        </p>
                    </div>
                </div>
            </div>

            <div class="widgetbox box-inverse">
                <h4 class="widgettitle">Vehicle Information</h4>
                <div class="widgetcontent nopadding">
                    <div class="stdform stdform2">
                        <p>
                            <label>Registration Number</label>
                            <span class="field"><input type="text" name="vehicle_registration" class="input-xxlarge"></span>
                        </p>
                        
                        <p>
                            <label>VIN Number</label>
                            <span class="field"><input type="text" name="vin" class="input-xxlarge" onkeypress="return blockUserInputs(this, event, true, false, false, false, false, false, false, false, false, false, false, false, false)"></span>
                        </p>
                        
                        <p>
                            <label>Vehicle Company</label>
                            <span class="field"><input type="text" name="vehicle_company" class="input-xxlarge" onkeypress="return blockUserInputs(this, event, false, true, false, false, false, false, false, false, false, false, false, true, false)"></span>
                        </p>
                        
                        <p>
                            <label>Model </label>
                            <span class="field"><input type="text" name="vehicle_model" class="input-xxlarge" onkeypress="return blockUserInputs(this, event, false, true, false, false, false, false, false, false, false, false, false, true, false)"></span></span>
                        </p>
                        <p>
                            <label>Year </label>
                            <span class="field"><input type="text" name="vehicle_year" class="input-xxlarge" onkeypress="return blockUserInputs(this, event, true, false, false, false, false, false, false, false, false, false, false, false, false)"></span></span>
                        </p>                        
                        <p>
                            <label>Color </label>
                            <span class="field"><input type="text" name="vehicle_color" class="input-xxlarge" onkeypress="return blockUserInputs(this, event, false, true, false, false, false, false, false, false, false, false, false, false, false)"></span></span>
                        </p>
                        
                        <p class="stdformbutton">
                            <button type="reset" class="btn">Reset Button</button>
                        </p>
                    </div>
                </div>
            </div>

            <div class="widgetbox box-inverse">
                <h4 class="widgettitle">Bank Information</h4>
                <div class="widgetcontent nopadding">
                    <div class="stdform stdform2">
                        <p>
                            <label>Bank Name</label>
                            <span class="field"><input type="text" name="bank_name" class="input-xxlarge" onkeypress="return blockUserInputs(this, event, false, true, false, false, false, false, false, false, false, false, false, true, false)"></span>
                        </p>
                        
                        <p>
                            <label>Loan Number</label>
                            <span class="field"><input type="text" name="loan" class="input-xxlarge" onkeypress="return blockUserInputs(this, event, true, false, false, false, false, false, false, false, false, false, false, false, false)"></span>
                        </p>
                        
                        <p>
                            <label>Insurance Company</label>
                            <span class="field"><input type="text" name="insurance_company" class="input-xxlarge" onkeypress="return blockUserInputs(this, event, false, true, false, false, false, false, false, false, false, false, false, true, false)"></span>
                        </p>
                        
                        <p>
                            <label>Insurance Policy Number </label>
                            <span class="field"><input type="text" name="insurance_policy" class="input-xxlarge" onkeypress="return blockUserInputs(this, event, true, true, false, false, false, false, false, false, false, false, false, false, false)"></span></span>
                        </p>
                        
                        <p class="stdformbutton">
                            <button type="reset" class="btn">Reset Button</button>
                        </p>
                    </div>
                </div>
            </div>
        <p class="stdformbutton">
            <button class="btn btn-primary">Submit Button</button>
        </p>
        </form>

        </div>
    </div>
</div>