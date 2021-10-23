<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'link/links.php'; ?>
	<?php include 'css/style.php'; ?>
	<?php include 'animation/anime.php'; ?>
</head>
<body>
	<nav class="navbar navbar-expand-lg nav_style  p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#symptomsid">symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#indiacoronalive">indiacoronalive</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">contact</a>
      </li>     
    </ul>  
  </div>
</nav>



<div class="main_header">
	<div class="firstrow">
		<div class="row w-100 h-100"> 
			<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2" style="margin-bottom: 90px">
				<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center" >
					<a href="https://en.wikipedia.org/wiki/Coronavirus" target="_blank" style="cursor: context-menu;"><img src="images/virus1.gif" width="450" height="220" style="margin-left: 120px;margin-top: 113px;border-radius: 10px;"></a>
				</div> 
			</div>
		<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1" style="margin-top: 115px" >
			<div class="rightside" style="margin-left: 150px">
				<div class="containers">
					<img src="images/vaccine.png" width="60" height="60" style="float: right;margin-bottom:  10px">
					<h3 style="font-weight: bold;">Get vaccinated</h3>
					<p>Find a free COVID-19 vaccine near you.</p>

					<div class="row search" style="margin-bottom: 10px">
						
						<div class="col-10"><img src="images/loupe.png" height="25px" width="25px" style="margin-left: 15px;margin-right: 5px;"><a href="https://www.vaccines.gov/" target="_blank">Find a vaccine near you</a></div>
					</div>

					<div class="row phone" style="margin-bottom: 10px">
						
						<div class="col-10"><img src="images/phone-call.png" height="25px" width="25px" style="margin-left: 15px;margin-right: 5px;">Call <strong>1-800-232-0233&nbsp;</strong></div>
					</div>

					<div class="row texting">
						
						<div class="col-10"><img src="images/chat1.png" height="25px" width="25px" style="margin-left: 15px;margin-right: 5px;">Text your <strong>zip code</strong> to <strong>438829</strong></div>
					</div>
				</div>	
			</div>		
		</div>		
	</div>
</div>






<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>About COVID-19</h1>
	</div>

	<div class="row pt-5">
		<div class="col-lg-5 col-md-6 col-12 ml-5 about_res">
			<img src="images/corona.jpeg" class="img-fluid">
		</div>

		<div class="col-lg-6 col-md-6 col-12">
			<h2>What is COVID-19 (Corona-Virus)</h2>
			<p>COVID-19 is the infectious disease caused by the most recently discovered corona virus. This new
			virus and disease were unknown before the outbreak began in Wuhan, China, in December 2019</p>
			<p>Corona viruses are a large family of viruses which may cause illness in animals or humans. In
				humans, several corona viruses are known to cause respiratory infections ranging from the common
				cold to more severe diseases such as Middle East Respiratory Syndrome (MERS) and Severe Acute
				respiratory Syndrome (SARS). The most recently discovered coronavirus causes coronavirus disease
				COVID-19.</p>
		</div>
	</div>
</div>


<div class="container-fluid  pt-5 pb-5" id="symptomsid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>Coronavirus symptoms</h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/cough1.jpg" class="img-fluid" id ="cough" width="120" height="120">
				<figcaption>cough</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/runnynose_img.jpg" class="img-fluid" id = "runnynose" width="120" height="120">
				<figcaption>runny nose</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/fever_img.jpg" class="img-fluid" id="fever" width="120" height="120">
				<figcaption>fever</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/cold_img.jpg" class="img-fluid" width="120" id="cold" height="120">
				<figcaption>cold</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/tired_img.jpg" class="img-fluid"  id = "tired" width="120" height="120">
				<figcaption>tiredness</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/breath_img.jpg" class="img-fluid" id="breath" width="120" height="120">
				<figcaption>difficuly breathing (severe cases)</figcaption>
				</figure>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid sub_section pt-5 pb-5" id="preventid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>Prevention Against Coronavirus</h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
						<img src="images/hands_img.jpg" class="img-fluid" id = "hands" width="90" height="90">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>Wash your hands regularly for 20 seconds, with soap and water or alcohol-based hand</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
						<img src="images/mask_img.jpg" class="img-fluid" id = "mask" width="90" height="90">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
						<img src="images/close_img.jpg" class="img-fluid" id = "close" width="90" height="90">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>Avoid close contact (1 meter or 3 feet) with people who are unwell</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
						<img src="images/home.gif" class="img-fluid" id = "home" width="90" height="90">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>Stay home and self-isolate from others in the household if you feel unwell</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
						<img src="images/news_img.jpg" class="img-fluid" id = "news" width="90" height="90">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>Stay informed by watching news & follow the recommended practices</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
						<img src="images/medical_img.jpg" class="img-fluid" id = "medical" width="90" height="90">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>If you have fever, cough and difficulty breathing, seek medical care early</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<section class="corona_update container-fluid" id="indiacoronalive">
	<div class="my-5">
		<h3 class="text-center text-uppercase">COVID-19 LIVE UPDATES OF INDIA</h3>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-striped text-center">
			<tr>
				<th class="text-capitalize">Last update time</th>
				<th class="text-capitalize">State</th>
				<th class="text-capitalize">Active</th>
				<th class="text-capitalize">Recovered</th>
				<th class="text-capitalize">Deaths</th>
				<th class="text-capitalize">Total cases</th>
			</tr>

			<?php
				$data = file_get_contents('https://api.apify.com/v2/key-value-stores/toDWvRj1JpTXiM8FF/records/LATEST?disabledRedirect=true');
				$coronalive = json_decode($data,true);
				$lastupdatetime = $coronalive['lastUpdatedAtApify'];
				$lastupdatetime = substr($lastupdatetime, 0,10);

				$statescount = count($coronalive['regionData']);

				$i=0;
				while($i<$statescount){

					?>
					<tr>
						<td><?php echo $lastupdatetime?></td>
						<td><?php echo $coronalive['regionData'][$i]['region']?></td>
						<td><?php echo $coronalive['regionData'][$i]['activeCases']?></td>
						<td><?php echo $coronalive['regionData'][$i]['recovered']?></td>
						<td><?php echo $coronalive['regionData'][$i]['deceased']?></td>
						<td><?php echo $coronalive['regionData'][$i]['totalInfected']?></td>

					</tr>
				
					<?php
					$i++;
				}
		

			?>
		</table>
	</div>
</section>


<div class="container-fluid pt-5 pb-5" id="contactid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>Contact Us</h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-12">
				<form action="" method="POST">

					<div class="form-group">
					    <label>Name</label>
					    <input type="text" class="form-control" name="username" placeholder="name" autocomplete="off" required="">
					  </div>

					  <div class="form-group">
					    <label>Email</label>
					    <input type="email" class="form-control"  name="email" placeholder="name@example.com" required autocomplete="off">
					  </div>

					  <div class="form-group">
					    <label>Mobile</label>
					    <input type="number" class="form-control" name="mobile" placeholder="mobile" autocomplete="off" required="">
					  </div>

					  <div class="form-group">
					  	<label>Select Symptoms</label><br>

					  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
					  		<input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]"value="cold">
					  		<label class="custom-control-label" for="customcheckbox1">Cold</label>
					  	</div>

					  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
					  		<input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]"value="fever">
					  		<label class="custom-control-label" for="customcheckbox2">fever</label>
					  	</div>

					  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
					  		<input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]"value="breath">
					  		<label class="custom-control-label" for="customcheckbox3">difficulty in breath</label>
					  	</div>

					  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
					  		<input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]"value="weak">
					  		<label class="custom-control-label" for="customcheckbox4">Fealing weak</label>
					  	</div>
					  </div>
					  
					  <div class="form-group">
					    <label>Description</label>
					    <textarea class="form-control"  rows="3" name="msg"></textarea>
					  </div>

					  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
					</form>			
			</div>
		</div>
	</div>
</div>


<div class="container scrolltop float-right pr-5">
	<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
</div>





<script>

	$('.count').counterUp({
		delay:10,
		time:3000
	})


	mybutton = document.getElementById("myBtn");

	window.onscroll = function() {scrollFunction()};
	function scrollFunction(){
		if(document.body.scrollTop>100 || document.documentElement.scrollTop>100){
			mybutton.style.display = "block";
		}
		else{
			mybutton.style.display = "none";
		}
	}
	function topFunction(){
		document.body.scrollTop=0;
		document.documentElement.scrollTop = 0;
	}
</script>

</body>
</html>


<?php

include 'dbcon.php';
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$symp = $_POST['coronasym'];
	$msg = $_POST['msg'];

	$chk ="";
	foreach ($symp as $chk1) {
		$chk .= $chk1.",";
	}

	$insertquery = " insert into coronacase(username,email,mobile,symp,message) values('$username','$email','$mobile','$chk','$msg')" ;
	$query = mysqli_query($con,$insertquery);

	if($query)
		{
			?>
			<script>
				alert("inserted successsful");
			</script>
			<?php
		}
		else
		{
			?>
			<script>
				alert("Not inserted");
			</script>
			<?php
		}

}

?>