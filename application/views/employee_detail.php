<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php require('bs4header.php') ?>
	<title>Edit employee</title>
</head>
<body>
	<div class="container-center text-center">
			<h1>Add new!</h1>
		</div>

		<div class="div col-sm-8 push-sm-2">
			<?php foreach ($data as $key => $value): ?>
				<div class="form-group">
					<form action="../update" method="post" enctype="multipart/form-data">
						<div class="form-group">
						    <input name ="id" type="hidden" class="form-control" id="id" aria-describedby="Name" placeholder="id" value='<?php echo $value["id"] ?>'>
					 	</div>
						<div class="form-group">
							<img class="card-img-top img-fluid" src="<?php echo $value['avatar_image'] ?>" style="width:320px;height:320px;" alt="Card image cap">
						    <input name ="avatar" type="file" class="form-control" id="id" aria-describedby="Name" placeholder="id" value='<?php echo $value["avatar_image"] ?>'>
						   	<input name ="avatar_2" type="hidden" class="form-control" id="avatar_2" aria-describedby="Name" placeholder="id" value='<?php echo $value["avatar_image"] ?>'>
					 	</div>
					  	<div class="form-group">
						    <label for="exampleInputEmail1">Name</label>
						    <input name ="name" type="text" class="form-control" id="name" aria-describedby="Name" placeholder="Enter email" value='<?php echo $value["name"] ?>'>
					  	</div>
					  	<div class="form-group">
						    <label for="exampleInputPassword1">old</label>
						    <input name = "old" type="number" class="form-control" id="old" placeholder="old"  value='<?php echo $value["old"] ?>'>
					 	</div>
						<div class="form-group">
					    	<label for="exampleInputPassword1">phone</label>
					    	<input name = "phone" type="text" class="form-control" id="phone" placeholder="phone" value='<?php echo $value["phone"] ?>'>
					  	</div>
					  	<div class="form-group">
					   		<label for="exampleInputPassword1">FB's link</label>
					    	<input name = "fb_link" type="text" class="form-control" id="fb_link" placeholder="FB's link"  value='<?php echo $value["fb_link"] ?>'>
					  	</div>
					  	<div class="form-group">
					    	<label for="exampleInputPassword1">number of order</label>
					    	<input name = "number_of_order" type="text" class="form-control" id="number_of_order" placeholder="number of order" value='<?php echo $value["number_of_order"] ?>'>
					  	</div>
					  	<button type="submit" class="btn btn-primary">Update</button>
					</form>
				</div>
			<?php endforeach ?>
		</div>
</body>
</html>