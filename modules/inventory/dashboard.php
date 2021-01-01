<?php
include "../../core/config/session.php";
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../../index.html');
	exit;
}



?>

<?php include "header.php";?>




    <body>
		<?php include "../../modules/_engine/core.php"; ?>
        <?php $getSidebar; ?>
        <?php $getNavigation; ?>
		        
        <div class="container" style="padding-top:  120px;">     
				
        <?php include "information.php";?>    
        <?php include "search-dashboard.php";?>              
		</div>      
        
        
        
		<?php include "../../core/parts/footer.php";?>
        
        
    </body>
    
    
    

</html>
    