<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Project</title>
	<link rel="stylesheet" href="/css/bootstrap.css" />
	<link rel="stylesheet" href="/css/style.css" />
</head>
<body>
	<div class="container">
		<div class="portfolio-project">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 center section-title">
					<h4>{{{ $project->title }}}</h4>
				</div>
				<div class="col-md-5 project-photo">
					<img src="{{ $project->img }}" alt="" />
				</div>
				<div class="col-md-3 project-details">
					<h5>Project Details</h5>
					<ul class="details-list">
						<li><i class="fa fa-th-list"></i> <strong class="strong">Project Type:</strong>{{ $project->type }}</li>
						<li><i class="fa fa-tags"></i> <strong class="strong">Tech:</strong> {{ $project->tech }}</li>
						<li><i class="fa fa-calendar"></i> <strong class="strong">Date:</strong>{{ $project->date }}</li>
						<li><i class="fa fa-link"></i> <strong class="strong">Project url: </strong> <a href="http://{{ $project->url }}"><strong>View Me</strong></a></li>
					</ul>
				</div>
				<div class="col-md-4 project-info">
					<h5>Project Info</h5>
					<p>{{ $project->description }}</p>
				</div>
			</div>
		</div>
	</div>
	
	
	
</body>
</html>