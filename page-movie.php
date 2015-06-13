<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=0.5, maximum-scale=0.5, minimal-ui">

    <title>Ticket Pricer</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">	
	<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_url'); ?>/css/movie_style.css">
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Oswald" rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css'>    
	<script src="<?php echo get_bloginfo('template_url'); ?>/js/movie_script.js"></script>

  </head>
  
  <body>
    <div class="container">
      <div class="svg-div"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="150px" height="150px" viewBox="5.0 -10.0 100.0 135.0" enable-background="new 0 0 100 100" xml:space="preserve">
<g>
	<g>
		<path class="color-svg" d="M68.984,60.346c-4.03,0-7.559,2.633-9.499,6.57c-1.229-0.947-2.684-1.498-4.242-1.498c-1.827,0-3.511,0.754-4.855,2.02    c-1.739-2.738-4.454-4.504-7.507-4.504c-1.177,0-2.305,0.264-3.345,0.744c-0.591-0.969-1.653-1.617-2.871-1.617    c-1.859,0-3.367,1.506-3.367,3.365c0,1.205,0.638,2.26,1.591,2.855c-0.325,0.617-0.603,1.275-0.829,1.965    c-0.263,0.174-0.513,0.371-0.747,0.594c-1.199-1.891-3.075-3.109-5.182-3.109c-3.62,0-6.558,3.59-6.558,8.018    c0,1.479,0.979,2.672,2.187,2.672h8.741c0.088,0,0.174-0.008,0.259-0.02c0.076,0.012,0.154,0.02,0.234,0.02h3.556h3.783h8.88    c0.128,0,0.251-0.012,0.374-0.027c0.111,0.016,0.226,0.027,0.341,0.027H60.56c0.163,0,0.325-0.02,0.481-0.055    c0.183,0.033,0.365,0.055,0.554,0.055h14.779c2.042,0,3.697-2.021,3.697-4.518C80.071,66.418,75.104,60.346,68.984,60.346z"/>
		<circle class="color-svg" cx="68.984" cy="52.255" r="6.778"/>
		<circle class="color-svg" cx="42.881" cy="56.001" r="5.808"/>
		<circle class="color-svg" cx="55.243" cy="59.597" r="4.876"/>
		<circle class="color-svg" cx="28.131" cy="62.943" r="4.01"/>
	</g>
	<path class="color-svg"d="M10,21.58v45h12.254c-0.706-1.094-1.131-2.383-1.131-3.777c0-3.865,3.144-7.01,7.008-7.01c2.629,0,4.921,1.457,6.12,3.604   c0.161-0.066,0.326-0.123,0.493-0.176c-0.429-1.037-0.669-2.17-0.669-3.361c0-4.855,3.95-8.807,8.806-8.807   c3.765,0,6.977,2.379,8.234,5.709c1.201-0.744,2.613-1.182,4.128-1.182c1.458,0,2.82,0.404,3.992,1.098   c-0.011-0.188-0.028-0.373-0.028-0.564c0-5.391,4.386-9.777,9.777-9.777s9.777,4.387,9.777,9.777c0,2.793-1.184,5.311-3.066,7.094   c2.59,1.656,4.684,4.244,5.972,7.373H90v-45H10z M86,62.58h-1.839c-0.848-1.494-1.857-2.848-3.007-4.036   c1.043-1.969,1.608-4.18,1.608-6.431c0-7.597-6.181-13.777-13.777-13.777c-6.018,0-11.146,3.878-13.019,9.267   c-0.24-0.015-0.481-0.022-0.722-0.022c-0.812,0-1.619,0.084-2.408,0.249c-2.395-2.955-6.044-4.776-9.955-4.776   c-5.748,0-10.624,3.807-12.238,9.032c-0.814-0.192-1.656-0.292-2.512-0.292c-5.995,0-10.887,4.819-11.005,10.787H14v-37h72V62.58z"/>
</g>
</svg></div>
<h1 class="movie-page-header">Ticket Pricer</h1>
      
      
      
      
      
        <div class="row movie-form-div">


          <div class="col-sm-12 movie-div">
          <form class="movie-form">
            <div class="form-group">
              <div class="input-div">
              <label for="cust_age">Enter Your Age:</label>
              <input type="number" id="cust_age" class="form-control" required>
              </div>
              <select class="movie-time">
                <option class="time" value="12">12:00 PM</option>
                <option class="time" value= "17">5:00 PM</option>
                <option class="time" value="19.5">7:30 PM</option>
                <option class="time" value="22">10:00 PM</option>
              </select>
              <select class="movie-title">
                <option value="Mad Max|first">Mad Max</option>
                <option value="Little Monsters|second">Little Monsters</option>
                <option value="Interstellar|second">Interstellar</option>
                <option value="Reality Bites|umpteenth">Reality Bites</option>
              </select>
            </div>
            <button type="submit" class="btn btn-warning find-price">Find Price</button>
          </form>
        </div>
      </div>

      <div class="row">

        <div class="col-sm-12">

          <div class="show-price">
            <span class="title"></span>
            <h4><span class="showtime"></span></h4>
            <h4>Original Price<span class="price">$10</span></h4>
            <h4>Age Discount<span class="age-discount"></span></h4>
            <h4>Matinee Discount<span class="matinee-discount"></span></h4>
            <h4>Run Type Discount<span class="run-type-discount"></span></h4>
            <h3>Total Price <span class="total-price"</span></h3>
          </div>

          </div>


        </div>

      </div>


    </div>


  </body>
</html>
