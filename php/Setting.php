<?php
  include_once 'adminheadfoot.php'
?>

<title>Settings</title>

<!DOCTYPE html>
<html>
  <head>
      <link rel="stylesheet" href=../css/Settings.css>
      <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
    <title>Settings</title>
  <body>
    <h1>Settings</h1>
    <div>
    <form>
        <fieldset>
          <legend>Sensors</legend>
          <p>
            <label>Temperature</label>
            <br>
            <input type="text"
                 id = "myText"
                 value = "°C">
            <label>to</label>
            <input type="text"
                 name = "myText"
                 value = "°C">
          </p>
          <p>
            <label>Moisture</label>
            <br>
            <input type="text"
                 id = "myText"
                 value = "%">
            <label>to</label>
            <input type="text"
                 name= "myText"
                 value = "%">
          </p>
        </fieldset>
      </form>
      </div>
      <br>
      <br>

      <fieldset>
        <legend>Override Settings</legend>
      <div>
        <label>Water Pump</label>
          <label class="switch">
            <input type="checkbox">
            <span class="slider round"></span>
          </label>
      </div>
      <div>
        <label>Soil Heating Cable</label>
          <label class="switch">
            <input type="checkbox">
            <span class="slider round"></span>
          </label>
      </div>
      <div>
        <label>Solenoid Valve</label>
          <label class="switch">
            <input type="checkbox">
            <span class="slider round"></span>
          </label>
      </div>
      <br>
      <form>
              <input type="submit" value="Set"/>
      </form>
    </fieldset>
  </body>
</html>
