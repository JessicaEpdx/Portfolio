<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet"  href="<?php echo get_bloginfo('template_url'); ?>/css/pizza-style.css" />
  <link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Megrim' rel='stylesheet' type='text/css'>

  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script src='<?php echo get_bloginfo('template_url'); ?>/js/pizza-script.js'></script>

</head>
<body>

  <div class="container">

<!-- FIRST ROWS WITH NAME AND LOGOS -->
    <div class="row">
      <div class="col-sm-12 title-logo">
        <img class="logo" src="<?php echo get_bloginfo('template_url'); ?>//images/PizzaLogo.jpg" />
        <span class="company-name">Pizza Party On</span>
        <img class="logo logo2" src="<?php echo get_bloginfo('template_url'); ?>//images/PizzaLogo2.jpg" />

      </div>
    </div>

    <div class="row">

      <div class="col-sm-12">
        <div class="directions">
        Click on individual topping picture to add to your pizza. <br />Click Toppings Complete to continue order.</div>
        <div class="thanks">
	    Thank you for your order! 
        </div>
        <div class="quantity-message">
        How many pizzas would you like?
        </div>
        <form class="size-form">
          <label for="size">What size pizza would you like?</label>
          <select class="size-options">
            <option value="Small">Small</option>
            <option value="Medium">Medium</option>
            <option value="Large">Large</option>
          </select>
          <button type="submit">Build your pizza!</button>
        </form>
      </div>
    </div>




<!-- ADD TOPPINGS STARTS HERE -->
    <div class="row toppings-order-row">



<!-- MEAT SECTION START -->
      <div class="col-sm-3 add-toppings">

        <div class="toppings">
<!-- ADD MEAT TITLE -->
          <div class="topping-title meat">
            Meat Choices
            <img src="<?php echo get_bloginfo('template_url'); ?>//images/arrow.jpg" class="arrow" />
          </div>
<!-- MEAT GIF AND MEAT OPTIONS -->
          <div class="meats">

          <div class="content meat-content">
            <svg viewBox="0 0 300 200">

              <!-- Pattern -->
              <pattern
              id="p-meat"
              viewBox="30 100 186 200"
              patternUnits="userSpaceOnUse"
              width="216" height="200"
              x="-70" y="35">

              <!-- Meat Image -->
                <image xlink:href="<?php echo get_bloginfo('template_url'); ?>//images/meat.gif" width="256" height="300"/>
              </pattern>

              <!-- Text -->
              <text class="meat-text" text-anchor="middle"
              x="50%"
              y="50%"
              dy=".35em"
              class="text"
              >
              Meat
              </text>
            </svg>

          </div>

            <div class="top-options">
              <figure>
                <img class="meat-click1" src="<?php echo get_bloginfo('template_url'); ?>//images/pepperoni.jpg" id="Pepperoni" /><br />
                <figcaption>Pepperoni</figcaption>
              </figure>
              <figure>
                <img class="meat-click2" src="<?php echo get_bloginfo('template_url'); ?>//images/sausage.jpg" id="Sausage"><br />
                <figcaption>Sausage</figcaption>
              </figure>
              <figure>
                <img class="meat-click3" src="<?php echo get_bloginfo('template_url'); ?>//images/ham.jpg" id="Ham"><br />
                <figcaption>Ham</figcaption>
              </figure>
              <figure>
                <img class="meat-click4" src="<?php echo get_bloginfo('template_url'); ?>//images/chicken.jpg" id="Chicken">
                <figcaption>Chicken</figcaption>
              </figure>
            </div>
          </div>
        </div>
      </div>
<!-- MEAT SECTION END -->








<!-- VEGGIE SECTION START -->
      <div class="col-sm-3 add-toppings">

        <div class="toppings">
<!-- ADD VEGGIE TITLE -->
          <div class="topping-title veggie">
            Veggie Options
            <img src="<?php echo get_bloginfo('template_url'); ?>/images/arrow.jpg" class="arrow" />
          </div>
<!-- VEGGIE GIF AND VEGGIE OPTIONS -->

          <div class="veggies">

            <div class="content veggie-content">
              <svg viewBox="0 0 250 200">

                <!-- Pattern -->
                <pattern
                id="p-veggie"
                viewBox="30 100 100 100"
                patternUnits="userSpaceOnUse"
                width="300" height="200"
                x="-70" y="35">

                <!-- Veggie Image -->
                  <image xlink:href="<?php echo get_bloginfo('template_url'); ?>/images/veggies.gif" width="256" height="300"/>
                </pattern>

                <!-- Text -->
              <text class="veggie-text" text-anchor="middle"
                x="50%"
                y="50%"
                dy=".35em"
                class="text"
                >
                Veg
              </text>
            </svg>

        </div>

            <div class="top-options">
              <figure>
                <img class="veggie-click1" src="<?php echo get_bloginfo('template_url'); ?>/images/spinach.jpg" id="Spinach" /><br />
                <figcaption>Spinach</figcaption>
              </figure>
              <figure>
                <img class="veggie-click2" src="<?php echo get_bloginfo('template_url'); ?>/images/pepper.jpg" id="Pepper"><br />
                <figcaption>Red Bell Pepper</figcaption>
              </figure>
              <figure>
                <img class="veggie-click3" src="<?php echo get_bloginfo('template_url'); ?>/images/broccoli.jpg" id="Broccoli"><br />
                <figcaption>Broccoli</figcaption>
              </figure>
              <figure>
                <img class="veggie-click4" src="<?php echo get_bloginfo('template_url'); ?>/images/mushroom.jpg" id="Mushroom">
                <figcaption>Mushroom</figcaption>
              </figure>
            </div>
          </div>
        </div>
      </div>
<!-- VEGGIE SECTION END -->





<!-- OTHER SECTION START -->
        <div class="col-sm-3 add-toppings">

          <div class="toppings">
<!-- ADD OTHER TITLE -->
            <div class="topping-title other">
            More Toppings
            <img src="<?php echo get_bloginfo('template_url'); ?>/images/arrow.jpg" class="arrow" />
            </div>
<!-- OTHER GIF AND OTHER OPTIONS -->

            <div class="others">

              <div class="content other-content">
                <svg viewBox="0 0 250 200">

                  <!-- Pattern -->
                  <pattern
                  id="p-other"
                  viewBox="30 100 100 200"
                  patternUnits="userSpaceOnUse"
                  width="300" height="200"
                  x="-70" y="35">

                  <!-- Veggie Image -->
                  <image xlink:href="<?php echo get_bloginfo('template_url'); ?>/images/others.gif" width="256" height="300"/>
                </pattern>

                <!-- Text -->
                <text class="other-text" text-anchor="middle"
                x="50%"
                y="50%"
                dy=".35em"
                class="text"
                >
                Etc
              </text>
            </svg>

          </div>
              <div class="top-options">
                <figure>
                  <img class="other-click1" src="<?php echo get_bloginfo('template_url'); ?>/images/extracheese.jpg" id="Extra-Cheese" /><br />
                  <figcaption>Extra Cheese</figcaption>
                </figure>
                <figure>
                  <img class="other-click2" src="<?php echo get_bloginfo('template_url'); ?>/images/whitesauce.jpg" id="White-Sauce"><br />
                  <figcaption>White Sauce</figcaption>
                </figure>
                <figure>
                  <img class="other-click3" src="<?php echo get_bloginfo('template_url'); ?>/images/pesto.jpg" id="Pesto"><br />
                  <figcaption>Pesto</figcaption>
                </figure>
                <figure>
                  <img class="other-click4" src="<?php echo get_bloginfo('template_url'); ?>/images/garlic.jpg" id="Garlic">
                  <figcaption>Garlic</figcaption>
                </figure>
              </div>
            </div>
          </div>
        </div>
<!-- OTHER SECTION END -->




<!-- ORDER SECTION START -->
      <div class="col-sm-3 order">
        <div class="order-list-div">
          <h3 class="total">Total <span class="pizza-cost"></span></h3>
          <h3 class="pizza-size"></h3>

          <form class="quantity-form">
            <label for="quantity">Quantity</label>
            <select class="quantity">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
            <button type="submit">Add</button>
          </form>
          
          <button type="submit" class="finish-toppings">Toppings Complete</button>

          <ul class="order-list">
          </ul>
        </div>
      </div>
    </div>
<!-- ORDER SECTION END -->



  </div>

</body>
</html>
