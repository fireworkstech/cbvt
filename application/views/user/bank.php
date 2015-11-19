<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <div class="maincontent">
        <div class="maincontentinner">
        	
            <!-- <h4 class="widgettitle">Deletable Row</h4> -->
            <table class="table table-bordered responsive">
	            <thead>
	                <tr>
	                	<th>Driver Name</th>
	                    <th>Insurance Company</th>
	                    <th>Insurance Policy</th>
	                    <th>Bank Name</th>
	                    <th>Loan</th>
	                </tr>
	            </thead>
	            <tbody>	                
	                <?php foreach ($worklists as $worklist) { ?>
	                	
	                <tr>
	                	<td><a onclick="displayBank('<?php echo $worklist['_id'] ?>')"><?php echo $worklist['firstname'].' '.$worklist['lastname'] ?></a></td>
	                    <td><?php echo $worklist['insurance_company'] ?></td>
	                    <td><?php echo $worklist['insurance_policy'] ?></td>
	                    <td><?php echo $worklist['bank_name'] ?></td>
	                    <td><?php echo $worklist['loan'] ?></td>
	                    <!-- <td class="centeralign"><a href="" class="deleterow"><span class="icon-trash"></span></a></td> -->
	                </tr>
	                <?php } ?>
	                
	            </tbody>
	        </table>
    	</div>
	</div>

	