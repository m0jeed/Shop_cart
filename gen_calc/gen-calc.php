<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Generator Calculator | QuickPenny</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="./images/logo1icon.ico"/> 

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href= "style.css" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php" > <img src="./images/logo1.jpg" width="35" height="35" class="d-inline-block align-top" alt=""> &nbsp Quick Penny Nigeria Limited</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Products
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="./product/product.php">Petrol Generator</a>
          <a class="dropdown-item" href="#">Diesel Generators</a>
          <a class="dropdown-item" href="#">Alternator</a>
          <a class="dropdown-item" href="#">Water Pumps</a>
          <a class="dropdown-item" href="#">Vibrator Motor</a>
          <a class="dropdown-item" href="#">Farm Machinery</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Electronics
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="./electronic/electronic.php">Freezers</a>
          <a class="dropdown-item" href="#">Rechargable Fans</a>
          <a class="dropdown-item" href="#">Air conditions</a>
          <a class="dropdown-item" href="#">Refrigerator</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./aboutus/aboutUs.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./contact/contact.php">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>

<div id="pad"><h1>Generator Sizing Calculator</h1> </div>
<div id="space"></div>


<div class="maincard">
<div class="number-input"> 
  <img src="images/IMG-20190222-WA0020.jpg" alt="itempic" width=100px height=100px>  <h1>1hp Air conditioner <hr style="background-color:green"></h1>
    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"> </button> 
      <input class="quantity" type="number" min="0" max="999" value="1" name="quantity" required>
    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>  
  </div>

<div class="number-input"> 
  <img src="images/IMG-20190222-WA0020.jpg" alt="itempic" width=100px height=100px>  <h1>2hp Air conditioner <hr> </h1>
    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"> </button> 
      <input class="quantity" type="number" min="0" max="999" value="1" name="quantity" required>
    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>  
  </div>

<div class="number-input"> 
  <img src="images/IMG-20190222-WA0020.jpg" alt="itempic" width=100px height=100px>  <h1>Chest Freezer &nbsp&nbsp&nbsp&nbsp <hr></h1>
    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"> </button> 
      <input class="quantity" type="number" min="0" max="999" value="1" name="quantity" required>
    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>  
  </div>
 
  <div class="number-input"> 
  <img src="images/IMG-20190222-WA0020.jpg" alt="itempic" width=100px height=100px>  <h1>LCD televison<hr></h1>
    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"> </button> 
      <input class="quantity" type="number" min="0" max="999" value="1" name="quantity" required>
    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>  
  </div>
  <div class="number-input"> 
  <img src="images/IMG-20190222-WA0020.jpg" alt="itempic" width=100px height=100px>  <h1>Water pump<hr></h1>
    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"> </button> 
      <input class="quantity" type="number" min="0" max="999" value="1" name="quantity" required>
    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>  
  </div>
  <div class="number-input"> 
  <img src="images/IMG-20190222-WA0020.jpg" alt="itempic" width=100px height=100px>  <h1>tall Refrigerator<hr></h1>
    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"> </button> 
      <input class="quantity" type="number" min="0" max="999" value="1" name="quantity" required>
    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>  
  </div>
  <div class="number-input"> 
  <img src="images/IMG-20190222-WA0020.jpg" alt="itempic" width=100px height=100px>  <h1>Table Refrierator<hr></h1>
    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"> </button> 
      <input class="quantity" type="number" min="0" max="999" value="1" name="quantity" required>
    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>  
  </div>
  <div class="number-input"> 
  <img src="images/IMG-20190222-WA0020.jpg" alt="itempic" width=100px height=100px>  <h1>Fan<hr></h1>
    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"> </button> 
      <input class="quantity" type="number" min="0" max="999" value="1" name="quantity" required>
    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>  
  </div>
  <div class="number-input"> 
  <img src="images/IMG-20190222-WA0020.jpg" alt="itempic" width=100px height=100px>  <h1>Washing Machine<hr></h1>
    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"> </button> 
      <input class="quantity" type="number" min="0" max="999" value="1" name="quantity" required>
    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>  
  </div>
  <div class="number-input"> 
  <img src="images/IMG-20190222-WA0020.jpg" alt="itempic" width=100px height=100px>  <h1>Microwave<hr></h1>
    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"> </button> 
      <input class="quantity" type="number" min="0" max="999" value="1" name="quantity" required>
    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>  
  </div>
  <div class="number-input"> 
  <img src="images/IMG-20190222-WA0020.jpg" alt="itempic" width=100px height=100px>  <h1>Computer systems<hr></h1>
    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"> </button> 
      <input class="quantity" type="number" min="0" max="999" value="1" name="quantity" required>
    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>  
  </div>
  <div class="number-input"> 
  <img src="images/IMG-20190222-WA0020.jpg" alt="itempic" width=100px height=100px>  <h1>Hotplate<hr></h1>
    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"> </button> 
      <input class="quantity" type="number" min="0" max="999" value="1" name="quantity" required>
    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>  
  </div>

</div>

<button id="Submit" class="Submit">Submit</button>

<script>


    function CheckKVA(input) {
      if (input.value == "") {
        alert("Kilo Volt Ampheres are required for calculation.");
      return false;
    }
      if (input.value < 1 || input.value > 100000) { input.value = "*ERR*"; }
        return;
    }
    function CheckPhase(input) {
        if (input.value == "") {
          alert("Phase are required for calculation.");
        return false;
    }
    if (input.value < 1 || input.value > 5) { input.value = "*ERR*"; }
    return;
    }
    function CheckVolts(input) {
    if (input.value == "") {
    alert("Volts are required for calculation.");
    return false;
    }
    if (input.value < 1 || input.value > 100000) { input.value = "*ERR*"; }
    return;
    }
    function CalcKVA(form, Volts, KVA, Phase) {
    var E = parseInt(Volts);
    var K = parseInt(KVA);
    var P = parseInt(Phase);
    var A = 0;
    if (P == 1) {
    A = ((K * 1000) / E);
    }
    else if (P == 2 || P == 4) {
    A = ((K * 1000) / (2 * E));
    }
    else if (P == 3) {
    A = ((K * 1000) / (1.73 * E));
    }
    return (A);
    }
    function CalcPowerAmp(form, Phase, VoltsReq, Amperes, PowerFactor) {
    var P = parseInt(Phase);
    var V = parseInt(VoltsReq);
    var M = parseInt(Amperes);
    var F = PowerFactor;
    var A = 0;
    var PC = 1;
    if (P == 3) {
    PC = 1.73;
    }
    A = (V * M * F * PC) / 1000
    return (A);
    }
    function computeForm2(form) {
    var P = get_PhaseRadio_value(form);
    var V = form.VoltsReq.value;
    var A = form.Amperes.value;
    var F = get_PFRadio_value(form);
    A = CalcPowerAmp(form, P, V, A, F);
    form.PowerOutput.value = A;
    return;
    }
    function get_PhaseRadio_value(form) {
    for (var i = 0; i < form.Phase.length; i++) {
    if (form.Phase[i].checked) {
    var rad_val = form.Phase[i].value;
    }
    }
    return rad_val;
    }
    function get_PFRadio_value(form) {
    for (var i = 0; i < form.PowerFactor.length; i++) {
    if (form.PowerFactor[i].checked) {
    var rad_val = form.PowerFactor[i].value;
    }
    }
    return rad_val;
    }
    function computeForm(form) {
    if ((form.volts.value == null || form.volts.value.length == 0)) {
    return;
    }
    var E = form.volts.value;
    var K = form.kva.value;
    var P = form.phase1.value;
    var A = 0;
    //alert("P is " + P);
    A = CalcKVA(form, E, K, P);
    form.Ampere.value = A;
    return;
    }
    function computeKVAtoKW(form) {
    if ((form.kvain.value == null || form.kvain.value == 0)) {
    return;
    }
    var K = form.kvain.value;
    var W = 0;
    W = K * 0.8;
    //alert(W)
    form.kwout.value = W;
    return;
    }
    function computeKWtoKVA(form) {
    if ((form.kwin.value == null || form.kwin.value == 0)) {
    return;
    }
    var W = form.kwin.value;
    var K = 0;
    K = W / 0.8;
    form.kvaout.value = K;
    //alert(K);
    return;
    }
    function computeKWtoHP(form) {
    if ((form.kwinHP.value == null || form.kwinHP.value == 0)) {
    return;
    }
    var W = form.kwinHP.value;
    var H = 0;
    H = W / 0.746;
    form.hpout.value = H;
    return;
    }
    function computeHPtoKVA(form) {
    if ((form.hpin.value == null || form.hpin.value == 0)) {
    return;
    }
    var H = form.hpin.value;
    var K = 0;
    var S = 1;
    var R = 1;
    if (H < 50) {
    R = 1.5;
    }
    else if (H > 49 && H < 100) {
    R = 1.4;
    }
    else if (H > 99) {
    R = 1.3;
    S = 5;
    }
    if (H < 30) {
    S = 7;
    }
    else if (H > 29 && H < 100) {
    S = 6
    }
    K = ((H * R * S) / 2) / 1.39;
    form.kvareq.value = K;
    return;
    }
    function getValues(form) {
    var i;
    for (i = 1; i < maxRows; i++) {
    cells[i].HP = eval("form.HP" + i + ".value");
    cells[i].SM = eval("form.SM" + i + "[0].checked");
    }
    } 

    

    </script>


























</body>

<div id="space"></div>

<footer class="page-footer font-small unique-color-dark" style="background-color: rgb(215, 218, 221);">

    <div style="background-color: rgb(248, 249, 250);">
      <div class="container">

        <div class="row py-4 d-flex align-items-center">

  
          <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
            <h6 class="mb-0">Get connected with us on social networks!</h6>
          </div>
 
          <div class="col-md-6 col-lg-7 text-center text-md-right">

            <a class="fb-ic">
              <i class="fa fa-facebook-f white-text mr-4"> </i>
            </a>
            <a class="tw-ic">
              <i class="fa fa-twitter white-text mr-4"> </i>
            </a>
            <a class="gplus-ic">
              <i class="fa fa-google white-text mr-4"> </i>
            </a>
            <a class="ins-ic">
              <i class="fa fa-instagram white-text"> </i>
            </a>

          </div>

        </div>

      </div>
    </div>

    <div class="container text-center text-md-left mt-5" > 

      <div class="row mt-3">

        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

          <h6 class="text-uppercase font-weight-bold">QuickPenny Nig Ltd</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p> Importers, Exproters, General Trader & Manufacturer's Respresentatives.
            The only Establishment that is against Profiteering and hoarding.

          </p>

        </div>
      

        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <h6 class="text-uppercase font-weight-bold">Generator 101</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a href="#!">How to choose a Generator</a>
          </p>
          <p>
            <a href="#!">Become an Affiliate</a>
          </p>
          <p>
            <a href="#!">Manufacturers</a>
          </p>
          <p>
            <a href="#!">Help</a>
          </p>

        </div>

        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">


          <h6 class="text-uppercase font-weight-bold">Contact</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
          <i class="fa fa-home mr-3"></i> 9, Jimoh Odutola rd, Dugbe, IB</p>
          <p>
            <i class="fa fa-envelope mr-3"></i>quickpennyltd@hotmail.com</p>
          <p>
            <i class="fa fa-phone mr-3"></i> +234 803 3306 651</p>
          <p>
            <i class="fa fa-print mr-3"></i> +234 803 3306 651</p>

        </div>
 
      </div>
     

    </div>

    <div class="footer-copyright text-center py-3" style="background-color:rgb(242, 58, 153);">&copy; 2019 Copyright:
      <a href="#"> mgcreativecloud</a>
    </div>
 

  </footer>




</html>