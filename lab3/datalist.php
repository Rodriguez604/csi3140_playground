<!DOCTYPE html>
<!-- saved from url=(0061)http://a4word.com/courses/csi3140/examples/03/03_datalist.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title>Welcome</title>
    <style>
      body { padding: 30px; }
      input, select, button, label { display: block; margin: 20px; }
    </style>
  </head>
  <body>
    <form method="post">
      <input type="text" name="my_text" id="myText" placeholder="people" list="myPeople" autocomplete="off">
      <datalist id="myPeople">
        <option value="A">Ayana</option>
        <option value="B">Brad</option>
        <option value="C">Cathy</option>
      </datalist>
      <input type="text" name="your_text" placeholder="random thoughts" autocomplete="on">
      <button type="submit">Go</button>
    </form>

  



</body></html>