<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halloween Party Night</title>
    <link rel="stylesheet" href="./styles/halloween.css">
    <script src="./javascripts/halloween.js"></script>

</head>
<body>
    <audio controls autoplay>
        <source src="./sounds/ambience.mp3" type="audio/mpeg">
    </audio>

    <audio id='roar'>
           <source src="./sounds/roar.mp3" type="audio/mpeg">
    </audio>

    <audio id="squawk">
           <source src="./sounds/squawk.mp3" type="audio/mpeg">    
    </audio>

    <audio id="hisse">
        <source src="./sounds/hisse.mp3" type="audio/mpeg">    
 </audio>

    <audio id="awakening">
        <source src="./sounds/awakening.mp3" type="audio/mpeg">
    </audio>
    
    <audio id="cry">
        <source src="./sounds/cry.mp3" type="audio/mpeg">
    </audio>

    <audio id="takeoff">
        <source src="./sounds/takeoff.mp3" type="audio/mpeg">
    </audio>

    <audio id="bite">
        <source src="./sounds/bite.mp3" type="audio/mpeg">
    </audio>




    <div id="container">
        <p id="t1">Halloween Party Night</p> <!-- TITLE -->
        
        <p id="t2">We invite you to celebrate the most terrifying night of the year
            in our haunted house.<br>
        
            Scary Road, number 666.<br>

            Remember to bring your most frightening costume!
        </p> <!-- SUBTITLE -->



        <!-- FIRST EFECT: PANTHER-->
        <p id="t3">Don´t pet the cat</p>
        <img id="panther" src="./images/panther.gif" alt= "">
        <!-- I create an empty div to define the sensitive rectangle -->
        <div id="zonecat" onmouseover="mostrar('panther');sonar('roar')"
                          onmouseout="ocultar('panther');parar('roar')">          
        </div>

        <!-- SECOND EFECT: RAVENS-->
        <p id="t4">Don't bother the scarecrow!</p>
        <img id="ravens" src="./images/ravens.gif" alt= "">
    
        <div id="zonescarecrow" onmouseover="mostrar('ravens');sonar('squawk')"
                          onmouseout="ocultar('ravens');parar('squawk')">              
        </div>

        <!-- THIRD EFECT: SNAKE-->
        <p id="t5">Someone is watching you!!</p>
        <img id="snake" src="./images/snake.gif" alt= "">
       
        <div id="zoneeyes" onmouseover="mostrar('snake');sonar('hisse')"
                          onmouseout="ocultar('snake');parar('hisse')">       
        </div>

        <!-- FOURTH EFECT: ZOMBIE-->
        <p id="t6">Someone is waking up!</p>
        <img id="zombie" src="./images/zombie.gif" alt= "">
        <div id="zonecross" onmouseover="mostrar('zombie');sonar('awakening')"
                          onmouseout="ocultar('zombie');parar('awakening')">         
        </div>

        <!-- FIFTH EFECT: GHOST-->
        <p id="t7">A woman cries behind the 3 windows!</p>
        <img id="ghost" src="./images/ghost.gif" alt= "">
        <div id="zonewindows" onmouseover="mostrar('ghost');sonar('cry')"
                  onmouseout="ocultar('ghost');parar('cry')">
        </div>


        <!-- SIXTH EFECT: UFO-->
        <p id="t8">Someone moves on the moon!</p>
        <img id="ufo" src="./images/ufo.gif" alt= "">
        <div id="zonemoon" onmouseover="mostrar('ufo');sonar('takeoff')"
                  onmouseout="ocultar('ufo');parar('takeoff')">        
        </div>

        <!-- SEVENTH EFECT: ZOMBIE-->
        <p id="t9">The branch is about to crack...</p>
        <img id="tarantula" src="./images/tarantula.gif" alt= "">
        <div id="zonebranch" onmouseover="mostrar('tarantula');sonar('bite')"
                  onmouseout="ocultar('tarantula');parar('bite')">               
        </div>




    </div>
    
</body>
</html>
