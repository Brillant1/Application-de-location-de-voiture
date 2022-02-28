@extends('app')
@section('content')
    @include('partials.header')
    <style>
        .divH4{
            display: flex;
            justify-content: center;
            align-items: center;
        }
.h41{
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    width:85%;
    text-align: justify;
    line-height: 40px;
    padding: 10px;
}
.listeCaracteristique{
    line-height: 10px;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    display: flex;

}
.listeCaracteristique>p>span:first-child{
    font-weight: bold;
}
    </style>
    <div class="gamme">
        <a href="#">Gamme > Camry</a>
    </div>
    <p class="p1">TOYOTA CAMRY LOUE A 10000 FCFA/JOURS</p>
    <div class="divH4" >
        <h4 class="h41" >
            Cette berline allie élégance et modernité pour offrir une expérience de conduite unique. Sa technologie de pointe confère à la Camry une accélération sportive, des changements de vitesse en douceur et une agilité incomparable. Ses moteurs de 2,5L ou 3,5L à essence avec transmission automatique à 6 ou 8 vitesses, permettent un rendement énergétique exceptionnel. La Camry est dotée d’équipements de sécurité active et passive tels que les airbags et la sécurité enfant qui garantissent la tranquillité d’esprit du conducteur et de ses passagers. Transformez vos déplacements en de véritables moments de plaisir et entrez dans l’excellence avec Camry. 
        </h4>
    </div>
    <hr>
    <section id="features" class="features" style="margin-top: 0;padding-top:0;">

        <div class="container-fluid" data-aos="fade-up" style="padding:0;margin-top:0;">
          <div class="row feature-icons" data-aos="fade-up" style="padding:0;margin-top:0;">
            <p class="p1">CARACTERISTIQUES</p>
  
            <div class="row">
  
              <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100" >
                <img src="images/auto2.png" class="img-fluid p-4" alt="" style="width: 100%;">
              </div>
  
              <div class="col-xl-8 d-flex content">
                <div class="row align-self-center gy-4">
                    <div class="col-md-6 icon-box" data-aos="fade-up" style="display: flex; flex-direction: column; justify-content: center;align-items: center;">
                        <img src="images/moteur.png" alt="#">
                        <div style="display: flex; justify-content: center; flex-direction: column; align-items: center; ">
                        <h4>MOTEUR</h4>
                        <div class="listeCaracteristique" >
                            <p> <span>Alimentation:</span><span> Injection électronique, Injection directe</span> </p>
                            <p> <span>Carburant:</span><span>Essence</span> </p>
                            <p> <span>Cylindrés(cm <sup>3</sup>:</span><span>2487</span> </p>
                        </div>
                        </div>
                  </div>

                  <div class="col-md-6 icon-box" data-aos="fade-up" style="display: flex; flex-direction: column; justify-content: center;align-items: center;">
                    <img src="images/dimension.png" alt="#">
                    <div style="display: flex; justify-content: center; flex-direction: column; align-items: center; ">
                    <h4>DIMENSION</h4>
                    <div class="listeCaracteristique"  >
                        <p> <span>Dimensions (Lxlxh) en mm : </span><span> 4885 x 1840 x 1455</span> </p>
                        <p> <span>Empattement (mm) :</span><span>2825</span> </p>
                        <p> <span>Garde au sol (mm) : </span><span>145</span> </p>
                    </div>


                    </div>
              </div>
  
              <div class="col-md-6 icon-box" data-aos="fade-up" style="display: flex; flex-direction: column; justify-content: center;align-items: center;">
                <img src="images/poids.png" alt="#">
                <div style="display: flex; justify-content: center; flex-direction: column; align-items: center; ">
                <h4>POIDS / CAPACITE </h4>
                <div class="listeCaracteristique" >
                    <p> <span>Capacité réservoir carburant (L) : </span><span> 60</span> </p>
                    <p> <span>Poids à vide (kg) : </span><span>1560</span> </p>
                    <p> <span>Nombre d'usagers : </span><span>5 maximum</span> </p>
                </div>
                </div>
          </div>
          <style>
              .btn-info,.btn-reserve{
                border: 2px solid red;
                padding: 5px;
                margin-top: 20px;
                border-radius: 7px;
                font-weight: bold;
                width: 300px;
                display: flex;
                justify-content: center;
              }
              .btn-info,.btn-reserve:hover{
                color: red;
                background-color: white;
                border: 2px solid red;
              }
              .btn-reserve,.btn-info:hover{
                color: white;
                background-color: red;
                border: 2px solid red;
              }





              /* Full-width input fields */
input[type=text], input[type=password], input[type=mail], input[type=textarea] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 0px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal1 {
  display: none; /* Hidden by default */
  margin-bottom: 200px;  
  z-index: 5;
  width: 200%;
  position: absolute;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 100%; /* Could be more or less, depending on screen size */
  z-index: 5;
  position: relative;

}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
input[type=textarea]{
  height: 100px;
  word-wrap: break-word;
}


          </style>
          <div class="col-md-6 icon-box" data-aos="fade-up" style="display: flex; flex-direction: column; justify-content: center;align-items: center; z-index:5;">
            
            <div style="display: flex; justify-content: center; flex-direction: column; align-items: center;position: absolute; z-index:5; ">
                <a href="#" class="btn-info" onclick="document.getElementById('id01').style.display='block'" >DEMANDE D'INFORMATION</a>

                <div id="id01" style="position: absolute; z-index:5;" class="modal1">
                  <form class="modal-content animate" action="/action_page.php" method="post" >

                    <div class="imgcontainer">
                      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                      
                    </div>
                    <div class="container">
                      <label for="nom"><b>Nom complet</b></label>
                      <input type="text" placeholder="Enter votre nom au coomplet" name="nom" required>
                      <label for="mail"><b>Email</b></label>
                      <input type="mail" placeholder="Enter votre mail" name="mail" required>

                      <label for="sujet"><b>Sujet</b></label>
                      <input type="text" placeholder="Enter le sujet de votre demande (optionnel)" name="sujet" required>

                      <label for="demande"><b>Demande</b></label>
                      <input type="textarea" placeholder="Enter la demande" name="demande" required>
                
                      
                        
                      <button type="submit" class="bg-danger text-bold">Envoyer</button>
                      
                    </div>
                
                    
                  </form>
                </div>


                <script>
                  // Get the modal
                  var modal = document.getElementById('id01');
                  
                  // When the user clicks anywhere outside of the modal, close it
                  window.onclick = function(event) {
                      if (event.target == modal) {
                          modal.style.display = "none";
                      }
                  }
                  </script>


                <a href="#" class="btn-reserve">RESERVEZ MAINTENANT</a>
            </div>
      </div>
  
                </div>
              </div>
  
            </div>
  
          </div><!-- End Feature Icons -->
  
        </div>
  
      </section>
@endsection