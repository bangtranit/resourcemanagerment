<!DOCTYPE html>
<html lang="en"><head>
	<title> Example </title>
	<?php require('bs4header.php') ?>
</head>
<body >
	
	<div class="container">
		<div class="row">
			<div class="card-columns">
			  <div class="card">
			    <img class="card-img-top img-fluid" src="http://placehold.it/300x300" class="card-img-top" alt="...">
			    <div class="card-body">
			      <h5 class="card-title"> Tran Thanh Bang</h5>
			      <p class="card-text old">Old: <strong>28</strong></p>
			      <p class="card-text phone"> Phone: <strong>09082227722</strong></p>
			      <p class="card-text number_order"> Number of order</p>
			      <p class="card-text linkfb"><a href="linkfb" class="btn btn-secondary btn-xs">link in here <i class="fa fa-chevron-right"></i></a></p>
			    </div>
			  </div>
			</div>
		</div>
		<div class="container">
			<div class="text-as-center">
				<h6 class="display-4"> Add new</h6>
			</div>
		</div> 
		<div class="container-fluig">
			<div class="row">
				<!-- <form method="post" action="<? base_url();?>/index.php/Employees/add" enctype="multidata/form-data"> -->
				<form method="post" action="Employees/add" enctype="multipart/form-data">

					<div class="form-group row">
						<label for="inputEmail3" class="col-sm-4 col-form-label text-xs-center">Avatar</label>
						 <div class="col-sm-8">
							<input id="avatar" name="avatar" type="file" class="form-control" placeholder="avatar">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail3" class="col-sm-4 col-form-label text-xs-center">Name</label>
						 <div class="col-sm-8">
							<input id="name" name="name" type="text" class="form-control" placeholder="avatar">
						</div>
					</div>
					<div class="form-group row">
						<div class="row-col-6">
							<div class="row">
								<label for="inputEmail3" class="col-sm-4 col-form-label text-xs-right">Old</label>
								<div class="col-sm-8">
									<input id="old" name="old" type="number" class="form-control" placeholder="avatar">
								</div>
							</div>
						</div>
						<div class="row-col-6">
							<div class="row">
								<label for="inputEmail3" class="col-sm-4 col-form-label text-xs-right">Phone</label>
								<div class="col-sm-8">
									<input id="phone" name="phone" type="number" class="form-control" placeholder="phone">
								</div>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<div class="row-col-6">
							<div class="row">
								<label for="inputEmail3" class="col-sm-4 col-form-label text-xs-center">Number of oder</label>
								 <div class="col-sm-8">
									<input id="number_of_order" name="number_of_order" type="number" class="form-control" placeholder="avatar">
								</div>
							</div>
						</div>
						<div class="row-col-6">
							<div class="row">
								<label for="inputEmail3" class="col-sm-4 col-form-label text-xs-center">FB link</label>
								 <div class="col-sm-8">
									<input id="fb_link" name="fb_link" type="text" class="form-control" placeholder="avatar">
								</div>								
							</div>
						</div>
					</div>
					
					<div class="form-group row text-sm-center">
						<div class="col-sm-3">
							<button type="submit" class="btn btn-primary">Sign in</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		
	</div>
</body>
</html>