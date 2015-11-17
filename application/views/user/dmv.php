<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <div class="maincontent">
        <div class="maincontentinner">
        	
        	<div id="worklistModal" class="modal fade" role="dialog">
			  	<div class="modal-dialog">
					<div class="modal-content">
					    <div class="modal-header">
					        <h4 class="modal-title"></h4>
					    </div>
					    <div class="modal-body" id="dmv_data">
					        <p>Some text in the modal.</p>
					    </div>
					    <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					    </div>
			    	</div>
			  	</div>
			</div>
			
            <!-- <h4 class="widgettitle">Deletable Row</h4> -->
            <table class="table table-bordered responsive">
	            <thead>
	                <tr>
	                	<th>Driver Name</th>
	                    <th>License</th>
	                    <th>Vehicle Registration</th>
	                    <th>VIN</th>
	                    <th>Color</th>
	                </tr>
	            </thead>
	            <tbody>	                
	                <?php foreach ($worklists as $worklist) { ?>
	                	
	                <tr>
	                	<td><a onclick="displayDmv('<?php echo $worklist['_id'] ?>')"><?php echo $worklist['firstname'].' '.$worklist['lastname'] ?></a></td>
	                    <td><?php echo $worklist['license'] ?></td>
	                    <td><?php echo $worklist['vehicle_registration'] ?></td>
	                    <td><?php echo $worklist['vin'] ?></td>
	                    <!-- <td class="centeralign"><a href="" class="deleterow"><span class="icon-trash"></span></a></td> -->
	                    <td><?php echo $worklist['vehicle_color'] ?></td>
	                </tr>
	                <?php } ?>
	                
	            </tbody>
	        </table>
    	</div>
	</div>

	