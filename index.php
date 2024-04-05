<!DOCTYPE html>
<html>

<head>
  <!-- styles sheet for MDL -->
  <link rel="stylesheet" href="./css/style.css">
  <link rel="apple-touch-icon" sizes="180x180" href="./favicon1/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon1/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon1/favicon-16x16.png">
  <link rel="manifest" href="./favicon1/site.webmanifest">
</head>

<body>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script src="./js/script.js"></script>

  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Area of a Trapezoid!</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <table>
        <tr>
          <th>
            <h2>Formula</h2>
            <h3> SideA + SideB x SideH/2 </h3>
          </th>
        </tr>
      </table>
      <!-- Simple Textbox -->
      <div class="mdl-textbox mdl-js-textbox">
        <p>Enter value for SideA </p>
        <input class="mdl-textbox__input" type="text" pattern="[1-9][0-9]*(\.[0-9]+)?" id="SideA" />
        <div id="SideA"> SideA = ?</div>

        <p> Enter value for SideB </p>
        <input class="mdl-textbox__input" type="text" pattern="[1-9][0-9]*(\.[0-9]+)?" id="SideB" />
        <div id="SideB"> SideB = ?</div>

        <p> Enter value for SideH </p>
        <input class="mdl-textbox__input" type="text" pattern="[1-9][0-9]*(\.[0-9]+)?" id="SideH" />
        <div id="SideH"> SideH = ?</div>

      <!-- Raised button with ripple -->
      <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
        onclick="doMathClicked()">
        Calculate
      </button>

      <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css" />

      <br />

      <p>
      <div id="AreaOfTrapezoid"></div>
      <center><img src="./images/area-of-a-trapezoid-1.png" alt="Formula 1 track" width="500" height="330"></center>
      </p>
    </main>
  </div>
</body>

</html>