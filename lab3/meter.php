<!DOCTYPE html>
<!-- saved from url=(0058)http://a4word.com/courses/csi3140/examples/03/10_meter.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title>Welcome</title>
   </head>
   <body>
      <div id="myStatus">Finished!</div>
      <meter min="0" max="20" value="20" id="myMeter">
   
   <script>
     var m = document.getElementById("myMeter");
     var s = document.getElementById("myStatus");
     var tick = function() {
       if (m.value < m.max) { 
         m.value = m.value + 1; 
         s.innerHTML = "Done " + m.value + " out of " + m.max;
         setTimeout(tick, 100);
       } else {
         s.innerHTML = "Finished!";
       }
     }
     tick();
   </script>

</meter></body></html>