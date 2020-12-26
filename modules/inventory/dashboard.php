<?php include "header.php";?>




    <body>
		<?php include "../../modules/engine/core.php"; ?>
        <?php getSidebar(); ?>
		
		<?php 
		$folder_position = "../../core";
		include "../../core/parts/navigation.php";
		 ?>
        
        <div class="container" style="padding-top:  120px;">           
        <?php include "information.php";?>    
        <?php include "search-dashboard.php";?>              
		</div>      
        
        
        
		<?php include "../../core/parts/footer.php";?>
        
        
    </body>
    
    
    

</html>
    