<head>
<link rel="stylesheet" type="text/css" href="signupcss.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">


<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<meta charset="utf-8">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
</head>
<?php
error_reporting(0);

	echo "<h1 class= \"text-success text-center\"> Welcome " . $_GET['name'] . "!!! :)</h1>";

?>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
      <form class="form-horizontal" role="form" method = "post" action ="bookin.php">
        <fieldset>

          <!-- Form Name -->
          <legend>Book here</legend>

          <!-- Text input-->                     
			<div class="well carousel-search hidden-sm">
			<label class="col-sm-2 control-label" for="textinput">From</label>
			
          
            <select name="dropdown1">
				<option value="Chennai">Chennai</option>
				<option value="Bangalore">Bangalore</option>
				<option value="Hyderabad">Hyderabad</option>
			</select>
        </div>
        
            
    

          <!-- Text input-->
         <div class="well carousel-search hidden-sm">
			<label class="col-sm-2 control-label" for="textinput">To</label>
			
          
            <select name="dropdown2">
			
				<option value="Chennai">Chennai</option>
				<option value="Bangalore">Bangalore</option>
				<option value="Hyderabad">Hyderabad</option>
			</select>

        </div>
        <div class="well carousel-search hidden-sm">
                  <label class="col-sm-4 control-label" for="textinput">Journey Date: </label>
				  <input type="text" required name = "date" id="datepicker">
          </div>

          <div class="well carousel-search hidden-sm">
			<label class="col-sm-5 control-label" for="textinput">Departure Time </label>
			
            <select name="dropdown3">
				<option value="09:00">09:00</option>
				<option value="12:00">12:00</option>
				<option value="18:00">18:00</option>
				<option value="22:00">22:00</option>
			</select>

        </div>
		<div class="well carousel-search hidden-sm">
			<label class="col-sm-5 control-label" for="textinput">No of seats </label>
			
            <select name="dropdown4">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>						
			</select>

        <br><br>
		<div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
                <button type="button" onclick="location.href = 'login.php';" class="btn btn-default">Cancel</button>
                <button type="submit" action ="bookin.php" class="btn btn-primary">Check Availability</button>
              </div>
            </div>
          </div>
			
        </fieldset>
      </form>
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->