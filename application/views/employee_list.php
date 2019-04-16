<!DOCTYPE html>
<html lang="en"><head>
	<title> Example </title>
	<?php require('bs4header.php') ?>
	<script type="text/javascript" src="<?php echo base_url(); ?>jqueryupload/js/vendor/jquery.ui.widget.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>jqueryupload/js/jquery.fileupload.js"></script>
</head>
<body >
	
<!-- 	<div class="container">
		<div class="row">
				<div class="card-columns">
					<?php foreach ($employees as $key => $value): ?>
					  <div class="card">
					    <img class="card-img-top img-fluid" src="<?php echo $value['avatar_image'] ?>" class="card-img-top" alt="...">
					    <div class="card-body">
					      <h5 class="card-title"> <?php echo $value['name'] ?></h5>
					      <p class="card-text old">Old: <?php echo $value['old'] ?><strong>28</strong></p>
					      <p class="card-text phone"> Phone: <strong><?php echo $value['phone'] ?></strong></p>
					      <p class="card-text number_order"> Number of order <?php echo $value['number_of_order'] ?></p>
					      <p class="card-text linkfb"><a href="<?php echo $value['fb_link'] ?>" class="btn btn-secondary btn-xs">link in here <i class="fa fa-chevron-right"></i></a></p>
					    </div>
					  </div>
				  <?php endforeach ?>
				</div>
		</div> -->

<!-- 		<div class="container-fluig">
			<div class="row">
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
		</div> -->
<!-- 	</div>
	<div class="container">
				<div class="row">
			<form>
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputEmail4">Email</label>
			      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputPassword4">Password</label>
			      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputAddress">Address</label>
			    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
			  </div>
			  <div class="form-group">
			    <label for="inputAddress2">Address 2</label>
			    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
			  </div>
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputCity">City</label>
			      <input type="text" class="form-control" id="inputCity">
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputState">State</label>
			      <select id="inputState" class="form-control">
			        <option selected>Choose...</option>
			        <option>...</option>
			      </select>
			    </div>
			    <div class="form-group col-md-2">
			      <label for="inputZip">Zip</label>
			      <input type="text" class="form-control" id="inputZip">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="form-check">
			      <input class="form-check-input" type="checkbox" id="gridCheck">
			      <label class="form-check-label" for="gridCheck">
			        Check me out
			      </label>
			    </div>
			  </div>
			  <button type="submit" class="btn btn-primary">Sign in</button>
			</form>
		</div>
	</div> -->

	<div class="container">
		<div class="row">
			<?php foreach ($employees as $key => $value): ?>
				<div class="card-deck">
				  <div class="card">
				    <img class="card-img-top img-fluid" src="<?php echo $value['avatar_image'] ?>" style="width:320px;height:320px;" alt="Card image cap">
				    <div class="card-body">
				      <h5 class="card-title"><?php echo $value['name'] ?></h5>
				      <p class="card-text">Old: <?php echo $value['old'] ?></p>
				      <p class="card-text">Phone: <?php echo $value['phone'] ?></p>
				      <p class="card-text">Number of order: <?php echo $value['number_of_order'] ?></p>
				      <p class="card-text">Link FB<?php echo $value['fb_link'] ?></p>
				      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				      <a href="Employees/detail/<?= $value['id']?>">edit</a>
				      <a href="Employees/delete/<?= $value["id"]?>">Delete</a>
				      <!-- <a href="NumberPhoneController/detailNumberPhone/<?= $value['id'] ?>">Edit</a> -->
				    </div>
				  </div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
	<div></div>

	<div class="container">
		<h3 class="text-center">Add new employee</h3>
		<div class="row">
			<!-- <form method="post" action="Employees/add" enctype="multipart/form-data"> -->
			  <div class="form-group">
			    <label for="formGroupExampleInput">Avatar</label>
			    <input type="file" id='avatar' name ='files[]' class="form-control" id="formGroupExampleInput" placeholder="Avatar">
			  </div>
			  <div class="form-group">
			    <label for="formGroupExampleInput2">Name</label>
			    <input type="text" id='name' name='name' class="form-control" id="formGroupExampleInput2" placeholder="Another input">
			  </div>
			  <div class="form-group">
			    <label for="formGroupExampleInput">Old</label>
			    <input type="text" id='old' name='old' class="form-control" id="formGroupExampleInput" placeholder="Example input">
			  </div>
			  <div class="form-group">
			    <label for="formGroupExampleInput">phone</label>
			    <input type="text" id='phone' name='phone' class="form-control" id="formGroupExampleInput" placeholder="Example input">
			  </div>
			  <div class="form-group">
			    <label for="formGroupExampleInput">Number of order</label>
			    <input type="text" id='number_of_order' name='number_of_order' class="form-control" id="formGroupExampleInput" placeholder="Example input">
			  </div>
			  <div class="form-group">
			    <label for="formGroupExampleInput">Fb link</label>
			    <input type="text" id='fb_link' name='fb_link' class="form-control" id="formGroupExampleInput" placeholder="Example input">
			  </div>
			  <button type="button" class="btn btn-primary submit_by_ajax">Submit</button>
			<!-- </form> -->
		</div>
	</div>

	<script>
		path = "<?php echo base_url() ?>";
		$('#avatar').fileupload({
        url: path + "index.php/Employees/upload",
        dataType: 'json',
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                file_path = file.url;
            });
        }
        });

		$(".submit_by_ajax").click(function(event) {
			$.ajax({
				//xử lý add data
			url: 'Employees/addByAjax',
			type: 'POST',
			dataType: 'json',
			data: {
				avatar: file_path,
				name: $('#name').val(),
				old: $('#old').val(),
				phone: $('#phone').val(),
				number_of_order: $('#number_of_order').val(),
				fb_link: $('#fb_link').val(),
				},
			})
			.done(function() {
				console.log("success");
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
				//add thêm form trên giao diên
				// content = '<div class="card-deck">';
				content = '<div class="card">';
				content+= '<img class="card-img-top img-fluid" src="'+file_path+'" alt="Card image cap">';
				content+= '<div class="card-body">';
				content+= '<h5 class="card-title">'+$('#name').val()+'</h5>';
				content+= '<p class="card-text">Old: '+$('#old').val()+'</p>';
				content+= '<p class="card-text">Phone: '+$('#phone').val()+'</p>';
				content+= '<p class="card-text">Number of order:  </p>';
				content+= '<p class="card-text">Link FB '+$('#fb_link').val()+'</p>';
				content+= '<a href="Employees/detail/<?= $value['id']?>">edit</a>';
				content+= '<a href="Employees/delete/<?= $value["id"]?>">Delete</a>';
				content+= '<!-- <a href="NumberPhoneController/detailNumberPhone/<?= $value['id'] ?>">Edit</a> -->';
				content+= '</div>';
				content+= '</div>';
				// content+= '</div>';
				$('.card-deck').append(content);
				$('#name').val('');
				$('#old').val('');
				$('#phone').val('');
				$('#number_of_order').val('');
				$('#fb_link').val('');
			});
			});
		
		
	</script>

	</body>
</html>