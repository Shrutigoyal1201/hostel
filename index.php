<?php include"header.php"; ?>

<style type="text/css">
.div1
{
	padding:100px 0px;

}
p{
	text-align: justify;
}
h4,h1,h3,p
{
	font-family: prague;
}
.b1
{
	width:50%;
	height: 400px;
}
.b2
{
	margin-left:70%;
	width:30%;
	height: 400px;
}
.icon
{
	width:50%;
	border: 2px;
	box-shadow:0px 10px 16px;
}
.icon2 {
    width: 210px;
    height: 200px;
    border-radius: 300px;
    border: 2px;
    box-shadow: 0px 10px 16px;
    margin: 10px 0px;
    padding: 10px;
}
h1
{
	color:#1a2c3f;
}
.h
{
	padding: 20px 0px;
}
	
@media(max-width: 700px)
{
	.container
	{
		padding:50px 10px;
	}
	h1{
		font-size: 35px;
	}
	p
	{
		font-size: 14px;
	}
	h3{
		font-size: 20px;
	}

	h4
	{
		font-size: 20px;
	}
}
</style>

	<div class="carousel slide carousel-fade" data-ride="carousel" id="myslide"><!--carousel slide start-->

		<!--carousel inner start-->
  		<div class="carousel-inner">

  			<!--carousel item 1 start-->
  			 <div class="carousel-item active" data-interval="6000">
			 	<img  src="image/b1.jpg" alt="First slide" class="img-fluid b">
	        </div>
	        <!--carousel item 1 end-->
		    
		    <!--carousel item 2 start-->     
	        <div class="carousel-item " data-interval="6000">
	        	<img src="image/b5.jpg" class="img-fluid b">
	        </div>
	        <!--carousel item 2 end-->
	       
			<!--list tag (carousel indicators start)-->
			<ul class="carousel-indicators">
		    	<li data-target="#myslide" data-slide-to="0" class="active"></li>
		    	<li data-target="#myslide" data-slide-to="1" class=""></li>
		    </ul>
		    <!--list tag (carousel indicators end)-->

		    <!--preview anchor tag start-->
		 	<a href="#myslide" data-slide="prev" class="carousel-control-prev">
		       <span class="carousel-control-prev-icon"></span>
		    </a>
		    <!--preview anchor tag end-->
			
			<!--next slide anchor tag start-->	  
		    <a href="#myslide" data-slide="next" class="carousel-control-next">
		       <span class="carousel-control-next-icon"></span>
		    </a> 
		    <!--next slide anchor tag start-->	 
	</div><!--carousel slide end-->


	<div class="container div1">
		<div class="row">
			<div class="col-md-7 col-sm-5">
				<h1 class="text-center"><b>We Welcome You!</b> </h1>
				<p class="text-justify">Kota, the city of dreams! Where students come from all across the country with dreams in their eyes, and courage in their heart. We see students of different origin, trying to fit in and adjust into this restless yet lively city of Rajasthan. <br></p>
				<h6>believe in<b>"Atithi Devo Bhava"</b></h6>
				<p> Students are the true soul of the city. Here, at Maa Parvati Hostels we provide the best hospitality and understand that its never easy to stay away from one's family. <br> We are very fortunate to have had more than 10000 residents and be a part of their lives for maybe short, yet significant period. The time we have spent with these wonderful people is precious to us.
				We understand the need for proper food, lodging and hygiene of the students and are truly committed to catering to all the basic ammenities and provide top class living standards for the price they pay. <br></p>
			</div>
			<div class="col-md-5">
				<img src="image/kota.jpg" class="img-fluid">
			</div>
		</div>
	</div>

<div style="background-color: #e4e6eb">
	<div class="container">
		<br><br>
		<div class="row">
			<div class="col-md-5">
				<center>
				<img class="profile-image mb-3 rounded-circle icon" src="image/girl.jpg" alt="image" >
				</center>
				<br><br>
				<h3>Maa Parvati Girls Hostel</h3>
				<p> Address: B-152 Indravihar, KOTA<br>
					<br>
					It has 40 rooms and 2 flats for renting purposes.<a href="proto.php">Know more..</a><br>
					Packages available- <br>
					<b>Rooms with beautiful balcony</b> <br>
					Single occupancy - Rs. 12000 (Fully furnished + Air conditioned rooms + Meals included + Lift + Balcony)
					Double occupany - Rs. 6000 (Fully furnished + Air conditioned rooms + Meals included + Lift + Balcony)
					<b>Rooms without balcony</b> <br>
					Single occupancy - Rs. 11000 (Fully furnished + Air conditioned rooms + Meals included + Lift)
					Double occupany - Rs. 5500 (Fully furnished + Air conditioned rooms + Meals included + Lift)
					</p>
			</div>
			<div class="col-md-2">
			</div>
			<div class="col-md-5">
				<center>
				<img class="profile-image mb-3 rounded-circle icon"src="image/boy.jpg"  alt="image">
				</center>
				<br><br>
				<h3>Maa Parvati Boys Hostel</h3>
				<p> Address: F-407 ndravihar, KOTA<br>
					<br>
					It has 35 rooms and 2 flats for renting purposes.<a href="proto.php">Know more..</a><br>
					Packages available- <br>
					<b>Air conditioned rooms</b> <br>
					Single occupancy - Rs. 11000 (Fully furnished + Air conditioned rooms + Meals included)
					Double occupany - Rs. 5500 (Fully furnished + Air conditioned rooms + Meals included)<br>
					<b>Non AC rooms- coolers installed</b> <br>
					Single occupancy - Rs. 10000 (Fully furnished + Coolers + Meals included)
					Double occupany - Rs. 5000 (Fully furnished + Coolers + Meals included)
					</p>
			</div>
		</div><br><br>
		<hr>
		<br><br><br>
		<center>
		<div class="row">
			<div class="col-md-3">
				<img src="image/school.jpg" class="img-fluid icon2">
			</div>
			<div class="col-md-3">
				<br>
				<img src="image/security.jpg" class="img-fluid icon2 bg-light">
			</div>
			<div class="col-md-3">
				<img src="image/clean.jpg" class="img-fluid icon2">
			</div>
			<div class="col-md-3">
				<br>
				<img src="image/vehicle.jpg" class="img-fluid icon2 bg-light">
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<img src="image/medical.jpg" class="img-fluid icon2">
			</div>
			<div class="col-md-3">
				<br>
				<img src="image/money.jpg" class="img-fluid icon2 bg-light">
			</div>
			<div class="col-md-3">
				<img src="image/meal.jpg" class="img-fluid icon2">
			</div>
			<div class="col-md-3">
				<br>
				<img src="image/coaching.jpg" class="img-fluid icon2 bg-light">
			</div>
		</div>
	</center>
	</div>
	<br><br><br>
</div>
	<div class="div1">
		<center>
			<img src="image/proto1.jpg" class="img-fluid">
		</center>
	</div>

	<div class="container-fluid">
		<div class="row" style="background-color: #299bca">
			<div class="col-md-1">
			</div>
			<div class="col-md-5">
				<br>
				<h2 class="text-center"><b>BOOK NOW!</b></h2>
				<form method="post" action="inbookform.php">

	       			<div class="form-group">
	       			<label>Student Name</label>
	        		<input type="text" name="name" class="form-control" placeholder="Enter Name">
	      			</div>

					<div class="form-group">
					<label >Email:</label>
					<input type="text" name="email"  class="form-control" placeholder="Enter Email">
					We"ll never share your email with anyone else.
					</div>

					<div class="form-group">
					<label>Mobile Number</label>
					<input type="text" name="mobile"  class="form-control" placeholder="Enter Mobile Number">
					</div>

					<div class="form-group">
					Gender:
					<br>
					<input type="radio" name="gender">Male
					<br>
					<input type="radio" name="gender">Female
					</div>

					<div class="form-group">
					<label >Qualifications</label>
					<select class="form-control" name="qual">
						<option>Select</option>
						<option>11th std</option>
						<option>12th std</option>
						<option>Engineering student</option>
						<option>Medical student</option>
						<option>Law student</option>
						<option>CA student</option>
						<option>OTHERS</option>
					</select>
					</div>

					<div class="form-group">
					<label >Package willing to take</label>
					<select class="form-control" name="package">
						<option>Select</option>
						<option>10000(boys-Fully furnished+Equipped with coolers) </option>
						<option>11000(boys-Fully furnished+Air Conditioned rooms)</option>
						<option>11000(girls-Fully furnished+ AC rooms+ Lift+ Meals included)</option>
						<option>12000(girls-Fully furnished+ AC rooms+ Lift+ Meals included)</option>
						<option>Flat in boys hostel-</option>
						<option>Flat in girls hostel-</option>
					</select>
					</div>
					<center><input type="submit" name="submit" class="btn btn-dark bt-lg" value="Submit"></center>
					<br>
					 <?php 
            if(isset($_SESSION['success']))
              {
                echo $_SESSION['success'];
                unset($_SESSION['success']);
              }

            else{        
              if(isset($_SESSION['error']))
                {
                  echo $_SESSION['error'];
                  unset($_SESSION['error']);
                }
                }
            ?>
				</form>
				<br>
			</div>
			<div class="col-md-6">
				<img src="image/1.jpg" class="img-fluid h">
			</div>
		</div>
	</div>



	<div class="container-fluid">
		
	</div>

<?php include"footer.php"; ?>