
<?php include 'inc/header.php'; ?>
<?php 
	Session::checkSession();
	
	$question = $exm->getQuestion();
	$total       = $exm->getTotalRows();
?>

<div class="container-fluid p-3">
<h1>Welcome to Online Exam - Start Now</h1>
	<div class="starttest">
	<h2>Test your knowledge</h2>
	<p>This is multiple system choice quize to test your knowledge</p>
	<ul>
		<li><strong>Number of Questions : </strong> <?php echo $total; ?></li>
		<li><strong>Question Type : </strong> Multiple Choice</li>
	</ul>
	<h3>You will get only 60 seconds for each question.</h3>
	<a href="test.php?q=<?php echo $question['quesNo']; ?>">Start Test</a>	
	</div>
  </div>
