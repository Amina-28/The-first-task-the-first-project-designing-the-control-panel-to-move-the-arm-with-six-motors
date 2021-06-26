



<!DOCTYPE html>

<head>
    <meta charset="UTF-8">


    <title>The first task: moving the robot arm</title>

    <link rel="stylesheet" href="STYLE.css">   


</head>


<body>



  <div class="bg-image">
    <div class="container">
        <form  action="pegphp.php" method = "post" target="_self" >
        <div class="slider1">
          <p>Motor 1</p>    
            <input type="range" min="0" max="180" value="50" class="slider1" id="Range1"name="Motor1" >
            <div id="range-slider__value1"> valiue 50 </div>
        </div>

        <br>
        <br>
        
    <div class="slider2">
          <p> Motor 2  </p>
            <input type="range" min="0" max="180" value="50" class="slider2" id="Range2"name="Motor2" >
            <div id="range-slider__value2"> valiue 50</div>
        </div>
        <br>
        <br>
        <div class="slider3">
          <p>Motor 3</p>
            <input type="range" min="0" max="180" value="50" class="slider3" id="Range3"name="Motor3" >
            <div id="range-slider__value3"> valiue 50</div>
        </div>

    <br>
    <br>

    <div class="slider4">
      <p> Motor 4 </p>
        <input type="range" min="0" max="180" value="50" class="slider4" id="Range4"name="Motor4" >
        <div id="range-slider__value4"> valiue 50</div>
    </div>
    <br>
    <br>
    <div class="slider5">
      <p>Motor 5 </p>
        <input type="range" min="0" max="180" value="50" class="slider5" id="Range5"name="Motor5" >
        <div id="range-slider__value5">  valiue 50</div>
    </div>
    <br>
    <br>

    <div class="slider6">
      <p> Motor 6</p>
        <input type="range" min="0" max="180" value="50" class="slider6" id="Range6"name="Motor6" >
        <div id="range-slider__value6"> valiue 50</div>

    </div>


    <br>
    <br>
    
    <br>
    <button class="button1" name="save"> SAVE </button>
    <br>
    <br>



    <button class="button2"name="on"> ON </button>

    <br>

  </div>



  </form> 
    

</div>

</div>


  
 



</body>
<script src="scribt.js"></script>

</html>
