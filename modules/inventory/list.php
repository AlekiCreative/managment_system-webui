<?php
include "../../core/config/session.php";
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../../index.html');
	exit;
}

?>
<?php include "../../modules/_engine/core.php"; ?>
<?php include "header.php";?>




    <body>

        <?php $getSidebar; ?>
        <?php $getNavigation; ?>
		
		<?php  ?>
	
	
		<div class="container" style="padding-top:  120px;">           
			<?php include "information.php";?>
			
			<?php active_sublist("inventory");?>
			
			<div class="row" id="inventory_list">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-body">
                        <table class="table" id="inventory_border">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th>Inv. Code</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Locate</th>
                                    <th>Quantity</th>
                                    <th>Value</th>           
                                </tr>
								</thead>
									   
								<tbody>                                                
								<?php 
									for ($i = 1; $i <= 20; $i++) {
									
										echo '
										<tr>
										<td><i class="fas fa-check-square"></i></td>
										<td>1</td>
										<td><a target="_blank" href="view-item.html">I180315-1</a></td>
										<td><span>Xiaomi Mi A1</span></td>
										<td>Majetek</td>
										<td>Active Use </td>
										<td>1</td>
										<td><span>4.500 </span><span>CZK</span> </td>
										</tr>
										
										';
									
									}
									
									
								?>	
									
									
									
								
									
									</tbody>
								</table>

							</div><!-- /.box-body -->
					</div><!-- /.box -->
				</div>       
			</div>
			
						
		</div>