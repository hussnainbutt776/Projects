




<html>
<head>
<title>Signin</title>
<style>
.size{

    width:25%;
    background-color: white;
    height: 3.5px;
    border: none;
}
.red-hr{
    width:25%;
    background-color: #E74C3C;
    height: 3.5px;
    border: none;
}
.form-container{
    background-color: white;
		border: .5px solid #eee;
		border-radius: 5px;
		padding: 20px 10px 20px 30px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);


}
</style>



</head>

</body>

@include('include.header')

<!-- div container for header signin -->
<div class="container-fluid  pt-5 mt-1"style="background-color:#E74C3C">  

<div class="row">

<div class="col-md-12 ">
<h1 class="text-center text-white">SignIn</h1>
<hr class="size">

</div>
</div>

</div>   <!-- end of container for header signin -->


<div class="container-fluid pt-5   " style="background-color:#ECF0F1">  



<div class="row ">

<div class="col-md-6 offset-md-3 mb-5 form-container ">
		<h3 class="text-center text-danger">SignIn</h3>
		<hr class="red-hr">
        <form action="" method="post" >
				<div class="form-group">
					<label for="email">Email/Phone no.</label>
					<input type="text" name="email_phone" class="form-control" placeholder="Email Or Phone" required>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" placeholder="Password" required class="form-control">
				</div>
				<div class="form-group">
					<button class="btn btn-danger btn-lg center-aligned" type="submit" name="SignIn">SignIn</button>
				</div>
			</form>

</div>

	@include('include.footer')

</div>      <!-- for row div -->



</div>  <!-- for container div -->




</body>
 </html>

 
