<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_url'); ?>/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_url'); ?>/css/pigdie-style.css" />
    <link href='http://fonts.googleapis.com/css?family=Eater' rel='stylesheet' type='text/css'>

	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src='<?php echo get_bloginfo('template_url'); ?>/js/pigdie-script.js'></script>

  </head>
  <body>
    <div class="container">
      <div class="content">
        <svg viewBox="0 0 900 200">

          <!-- Pattern -->
          <pattern
               id="p-fire"
               viewBox="30 100 186 200"
               patternUnits="userSpaceOnUse"
               width="216" height="200"
               x="-70" y="35">

            <!-- Fire -->
            <image xlink:href="<?php echo get_bloginfo('template_url'); ?>/images/fire.gif" width="256" height="300"/>
          </pattern>

          <!-- Text -->
          <text text-anchor="middle"
                  x="50%"
                  y="50%"
                  dy=".35em"
                  class="text"
                  >
              Pig Die
            </text>

        </svg>

      </div>
      <div id="pregame" class="row">

      <div class="row">
        <div class="col-xs-6 col-md-3">
          <div class="thumbnail-pig">
            <img class="pig-pics" src="<?php echo get_bloginfo('template_url'); ?>/images/Evil-Ham.png" alt="Evil Hog">
            <div class="caption">
              <span id="choose-player"><h3>Evil Ham</h3></span>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-md-3">
          <div class="thumbnail-pig">
            <img class="pig-pics" src="<?php echo get_bloginfo('template_url'); ?>/images/Hog-Horror.jpg" alt="Evil Hog">
            <div class="caption">
              <span id="choose-player"><h3>Hog Horror</h3></span>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-md-3">
          <div class="thumbnail-pig">
            <img class="pig-pics" src="<?php echo get_bloginfo('template_url'); ?>/images/Hog-Death.jpg" alt="Evil Hog">
            <div class="caption">
              <span id="choose-player"><h3>Hog Death</h3></span>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-md-3">
          <div class="thumbnail-pig">
            <img class="pig-pics" src="<?php echo get_bloginfo('template_url'); ?>/images/Hog-Demon.png" alt="Evil Hog">
            <div class="caption">
              <span id="choose-player"><h3>Hog Demon</h3></span>
            </div>
          </div>
        </div>
      </div>
      <br><br>
        <div class="text-center col-md-6 col-md-offset-3">

          <form id="new-players">
            <div class="form-group text-center">
              <label for="player1">Player 1</label>
            <select id="player1">
              <option value="Evil-Ham">Evil Ham</option>
              <option value="Hog-Horror">Hog Horror</option>
              <option value="Hog-Death">Hog Death</option>
              <option value="Hog-Demon">Hog Demon</option>
            </select>

            </div>
            <div class="form-group text-center">
              <label for="player2">Player 2</label>
              <select id="player2">
              <option value="Evil-Ham">Evil Ham</option>
              <option value="Hog-Horror">Hog Horror</option>
              <option value="Hog-Death">Hog Death</option>
              <option value="Hog-Demon">Hog Demon</option>
            </select>
            </div>

            <button type="submit" class="btn">Play game!</button>
          </form>
        </div>
      </div>


      <div id="game">
        <div class="row">
          <div id="player1-info" class="text-center col-md-4">

            <div><span id="player1-name"></span></div>
            <div class="score">Score <span id='score0'>0</span></div>

            <div id="player1-image">
				
            </div>
          </div>

          <div id="options" class="text-center col-md-4">
            <div id="turn"></div>
            <div id="roll">

              <div id="static-die">
                <h4>Click To Roll</h4>
                <img class="static-die-pic" src="<?php echo get_bloginfo('template_url'); ?>/images/die.jpg" />
              </div>

              <div id="rolling-die">
                <h4>Click To Roll</h4>
                <img class="rolling-die-pic" src="<?php echo get_bloginfo('template_url'); ?>/images/animated-die.gif" />
              </div>
            </div>
            <br>
            <div id="hold" class="btn btn-danger">Hold</div>
            <br>
            <div class="turn-status">
              <div>Turn Score <span id="score-value"></span></div>
            </div>
            <div id="die-roll"></div>

              <br>
              <div id="rolled-1">You risked too much you swine!<div id="change-player" class="btn-danger">Change player</div></div>

            <div id="game-over"></div>
            <div id="new-game" class="btn btn-success">New game</div>
          </div>

          <div id="player2-info" class="text-center col-md-4">
            <div><span id="player2-name"></span></div>
            <div class="score">Score <span id='score1'>0</span></div>

            <div id="player2-image">
            </div>

          </div>
        </div>
      </div>
    </div>
  </body>

</html>
