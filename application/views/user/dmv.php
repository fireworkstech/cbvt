
    <div class="maincontent">
        <div class="maincontentinner">
        	<div id="worklistModal" class="modal fade" role="dialog">
			  	<div class="modal-dialog">
					<div class="modal-content">
					    <div class="modal-header">
					        <h4 class="modal-title"></h4>
					    </div>
					    <div class="modal-body">
					        <p>Some text in the modal.</p>
					    </div>
					    <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					    </div>
			    	</div>
			  	</div>
			</div>
			
            <h4 class="widgettitle">Deletable Row</h4>
            <table class="table table-bordered responsive">
	            <thead>
	                <tr>
	                	<th>Driver Name</th>
	                    <th>License</th>
	                    <th>Vehicle Registration</th>
	                    <th>VIN</th>
	                    <th></th>
	                </tr>
	            </thead>
	            <tbody>	                
	                <?php foreach ($worklists as $worklist) { ?>
	                	
	                <tr>
	                	<td><?php echo $worklist['firstname'].' '.$worklist['lastname'] ?></td>
	                    <td><?php echo $worklist['license'] ?></td>
	                    <td><?php echo $worklist['vehicle_registration'] ?></td>
	                    <td><?php echo $worklist['vin'] ?></td>
	                    <!-- <td class="centeralign"><a href="" class="deleterow"><span class="icon-trash"></span></a></td> -->
	                    <td class="centeralign"><a onclick="displayWorklistModal(<?php $worklist['_id'] ?>)" class="">View</a></td>
	                </tr>
	                <?php } ?>
	                
	            </tbody>
	        </table>
    	</div>
	</div>

	