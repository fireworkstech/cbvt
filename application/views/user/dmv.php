<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <div class="maincontent">
        <div class="maincontentinner">
        	
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
	                <?php
	                if ($worklists) {
	                	foreach ($worklists as $worklist) { ?>
	                	
		                <tr>
		                	<td><a onclick="displayDmv('<?php echo $worklist['id'] ?>')"><?php echo $worklist['firstname'].' '.$worklist['lastname'] ?></a></td>
		                	<!-- <td><a onclick="displayDmv('<?php echo $worklist['_id'] ?>')"><?php echo $worklist['firstname'].' '.$worklist['lastname'] ?></a></td> -->
		                    <td><?php echo $worklist['license'] ?></td>
		                    <td><?php echo $worklist['vehicle_registration'] ?></td>
		                    <td><?php echo $worklist['vin'] ?></td>
		                    <td><?php echo $worklist['vehicle_color'] ?></td>
		                </tr>
	                <?php }
	                } else { ?>
	                	<tr>
	                		<td>Currently there are no pending requests</td>
	                		<td></td>
	                		<td></td>
	                		<td></td>
	                		<td></td>
	                	</tr>
	                <?php } ?>
	            </tbody>
	        </table>
    	</div>
	</div>