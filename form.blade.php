<html>
	<head>
		<title> <?php echo "EVENT HIVE | Goldwater Convention Center" ?> </title>
		<base href = "Information.php" />
		<link href = "css_Information.css" rel = "stylesheet" />
		<style type="text/css">
			.submit {
				background-color: #4CAF50; /* Green */
				border: none;
				color: white;
				padding: 15px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				margin: 4px 2px;
			}
			.submitClass{
				background-color: #4CAF50; /* Green */
				border: none;
				color: white;
				padding: 10px 12px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 12px;
				margin: 4px 2px;
			}
		</style>
	</head>
	
	<body>
		<header> 
			<div class = "container">
				<img src = "img/event_hive3.png" > </img>
			</div>
			<div class = "logout">
				Home | Logged in as Mumina | Logout
			</div>
		</header>
		
		<header style = "height:40px; background: linear-gradient(#C0C0C0, #FFFFFF, #C0C0C0);word-spacing: 100px;" > 
			
			<a href="{{ URL::to('Information')}}"  style = "text-decoration: none;" >
				<input type = "submit" value = "Information" >
			</a>

			<a href="{{ URL::to('calendar')}}"  style = "text-decoration: none;" >
				<input type = "submit" value = "Booking">
			</a>

			<a href="{{ URL::to('packages')}}"  style = "text-decoration: none;" >
				<input type = "submit" value = "Packages">
			</a>	

			<input type = "submit" value = "Reviews">			
			
			<a href="{{ URL::to('contactUs')}}"  style = "text-decoration: none;" >
				<input type = "submit" value = "Contact Us">
			</a>
			
			

		</header>
		
		<main style = "max-width: 800px;" >
			<img src = "img/center_logo.png" > </img> 
			<br><br>
			
			<div style="padding: 50px 0px 0px 150px;">
<form action="/action_page.php" >
  <form action="{{ URL::to('companybooking')}}" method="post" autocomplete="on">
        <p>
            <label for="username" class="icon-user"> Name
                <span class="required" style="color: red">*</span>
            </label>
            <br>
			
            <input type="text" name="username" id="username" required="required" style = "width: 500px" />
        </p>

        <p>
            <label for="usermail" class="icon-envelope"> E-mail 
                <span class="required" style="color: red">*</span>
            </label> <br>
            <input type="email" name="usermail" id="usermail"  required="required" style = "width: 500px" />
        </p>

        <p>
            <label for="usersite" class="icon-link"> Phone No:</label> 
            <span class="required" style="color: red">*</span><br>
            <input type="tel" name="subject" id="subject" style = "width: 500px" />
        </p>

        <p>
            <label for="subject" class="icon-bullhorn"> Address</label> 
            <span class="required" style="color: red">*</span><br>
            <textarea style = "width: 500px" ></textarea>
        </p>

        <p>
            <label for="subject" class="icon-bullhorn"> Booking Date</label> <br>
            <input type="date" name="subject" id="subject" style = "width: 170px" />
        </p>

        <p>
            <label for="subject" class="icon-bullhorn"> Booking Time</label> <br>
            <form>
              <input type="radio" name="bookTime" value="male" checked> Afternoon<br>
              <input type="radio" name="bookTime" value="female"> Evening <br>
            </form>
        </p>

        <p>
            <label for="subject" class="icon-bullhorn"> City </label> <br>
            <input type="text" name="subject" id="subject" style = "width: 500px" />
        </p>

        <p>
            <label for="subject" class="icon-bullhorn"> Number of guests</label> <br>
            <input type="text" name="subject" id="subject" style = "width: 500px" />
        </p>
        <p>
            <label for="subject" class="icon-bullhorn"> Select Occassion</label> <br>
            <select>
              <option value="volvo">Wedding</option>
              <option value="saab">Birthday</option>
              <option value="opel">Reception</option>
              <option value="audi">Corporate Event</option>
            </select>
        </p>
        <!-- <div class="dropdown">
        <button class="dropbtn">Select Occassion</button>
        <div class="dropdown-content">
                <a href="#">Wedding</a>
                <a href="#">Birthday</a>
                <a href="#">Reception</a>
                <a href="#">Corporate Event</a>
        </div>
        </div> -->

        <p>
            <label for="message" class="icon-comment"> Message
                
            </label> <br>
            <textarea style = "width: 500px; height:200px;" ></textarea>
        </p>
        <p class="indication">Fields with
            <span class="required" style="color: red"> * </span>are required</p> <br>
	
		<a href="{{ URL::to('thankyou')}}"  style = "text-decoration: none;" >
			<input type="submit" value=" Submit " class="submitClass" style = "width: 500px" />
		</a>
		
        
</form>
</div>

		</main>
	</body>
</html>

