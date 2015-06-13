<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=0.5, maximum-scale=0.5, minimal-ui">
    <title>Task Manager</title>
    
    
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">	
	<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_url'); ?>/css/taskmanager-style.css">
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		

  </head>

  <body>
	  
	  <h1>Task.Manager</h1>
	  <h4>When a task is complete, click on the task's name and watch it get crossed off!</h4>
	  <h4>To remove a task completely, click on the task name in the finished tasks list.</h4>

	<div class="container">
		<div class="row">
			<div class="col-sm-3">
<!-- 				FORM GOES HERE -->
				<form class="task-form">
					<div class="form-group">
						<label for="new-name">Name of Task</label>
						<input type="text" class="new-name">
						<label for="new-description">Description of Task</label>
						<input type="text" class="new-description">
						
					</div>
					
					<button type="submit" class="btn btn-default">Add Task</button>
				</form>
			</div>
			
			
			
			<div class="col-sm-3">
				<p class="column-header">Task List<p>
				<ul class="task-list">
				</ul>
			</div>
			
			
			<div class="col-sm-3">
				<ul class="task-info">
					<h3>Name</h3><li class="name"></li>
					<li></li>
					<h3>Description</h3><li class="description"></li>
					<li class="button"></li>
				</ul>
			</div>
			
			
			<div class="col-sm-3">
				<p class="column-header">Finished Tasks</p>
				<ul class="done-task-list">
				</ul>
			</div>
			
		
		
		
		
		
		
		
		
		
		
		
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		

	</div>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="<?php echo get_bloginfo('template_url'); ?>/js/taskmanager-script.js"></script>
	</body>
</html> 