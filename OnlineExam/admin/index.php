<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
?>
<!--<style>
	.main{
		
		
	}
	.main h1{
		font-family: "Times New Roman", Georgia, Serif;
		font-size: 30px;
		color:#5e0c17;
	}
	.adminpanel{
		width:500px;
		color:#897073;
		margin:30px auto 0;
		padding:50px;
		border:2px solid #ddd;
		font-family: "Times New Roman", Georgia, Serif;
		font-size: 20px;
		}
</style> -->
<div class="container-fluid">
<h1>Admin Panel</h1>
	<div class = "container-fluid p-3">
		<h2>Welcome to Control Admin Panel</h2>
		<p>You can manage User and Online Exam from here.......</p>
	</div>
</div>
<?php include 'inc/footer.php'; ?>