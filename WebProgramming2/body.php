<body>
	

	<div class="container-fluid">
		<?php 
 		$content = (isset($_GET["page"])) ? $_GET["page"] : "";
 		switch ($content) {
 			case 'tambah_data':
 				require 'crud/tambah_data.php';
 				break;
 			case 'edit_data':
 				require 'crud/edit_user.php';
 				break;
 			case 'delete_data':
 				require 'crud/delete_data.php';
 				break;			 
 			default:
 				require 'content/data_user.php';
 				break;
 		}
 		?>

	</div>

</body>