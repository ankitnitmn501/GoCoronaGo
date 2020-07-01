<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <?php include 'links/links.php';?>
    <?php include 'css/style.php';?>

    <title>GoCoronaGo</title>
</head>
<body  >

<!-- ************navbar*************** -->
<nav class="navbar navbar-expand-lg  navbar-dark nav_style p-3">
  <a class="navbar-brand pl-5"  id="covid">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">CoronaUpdate World</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indialive.php">CoronaUpdate India</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#symptomid">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventionid">Preventions</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.mygov.in/covid-19/"> Official Website</a>
      </li>
      
    </ul>
    
  </div>
</nav>


<!-- **********india live****** -->

<section class="corona_update container-fluid" id="covidUpdate">
  <div class="my-5">
    <h3 class="text-uppercase text-center">Covid-19 Updates INDIA</h3>
  </div>
  <br>
  <br>
  <div class="search-box1">
    <input  class="searchCountry1" type="text" id="myInput" placeholder="&nbsp; Search State you want..." onkeyup="searchFun()" >
    
       <a  class="search-btn1" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
  </div>
  <div class="table-responsive" style="height:600px;overflow:auto">
  
     <table class=" table table-bordered table-striped text-center sticky " id="tabval" >

       <tr style="background-color:#fff0db;">
        
         <th class="text-capitalize">lastupdatedtime</th>
         <th class="text-capitalize">state</th>
         <th class="text-capitalize">confirmed</th>
         <th class="text-capitalize">active</th>
         <th class="text-capitalize">recovered</th>
         <th class="text-capitalize">deaths</th>
       
       </tr>

       


       <?php

       $data = file_get_contents('https://api.covid19india.org/data.json');
       $coronalive = json_decode($data,true);



       $statescount = count($coronalive['statewise']);
       
       $i=1;
       while($i < $statescount){

        ?>

        <tr>

        

         <td style="background-color:#FFD700;"><?php echo  $coronalive['statewise'][$i]['lastupdatedtime'] ?> </td>
         <td style="background-color:#FFA07A;"><?php echo  $coronalive['statewise'][$i]['state'] ?> </td>
         <td style="background-color:#4bb7d8;"><?php echo  $coronalive['statewise'][$i]['confirmed'] ?> </td>
         <td style="background-color:#9370DB;"><?php echo  $coronalive['statewise'][$i]['active'] ?> </td>
         <td style="background-color:#9cc850;"><?php echo  $coronalive['statewise'][$i]['recovered'] ?> </td>
         <td style="background-color:#f36e23"><?php echo  $coronalive['statewise'][$i]['deaths'] ?> </td>


        </tr>
        

        <?php
           
        $i++;

       }

       ?>


    
     
     </table>
     
  
  </div>
</section>








<!-- **************About Section starts************* -->

<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
  <div class="section_header text-center mb-5 mt-4">
    <h1>About COVID-19</h1>
  </div>

  <div class="row pt-5">
    <div class="col-lg-5 col-md-6 col-12 ml-5 about_res">
    <img src="images/about1.jpg" class="img-fluid" alt="">
    </div>
    
    <div class="col-lg-6 col-md-6 col-12">
    <h2> What is COVID-19(CoronaVirus)</h2>
    <p class="p1 justify-content-center">COVID-19 is the infectious disease caused by the most recently discovered coronavirus. This new virus and disease were unknown before the outbreak began in wuhan,china in December 2019. </p>
    <p class="p2 justify-content-center">Coronaviruses are a large family of viruses which may cause illness in animals or humans. In humans, Several coronaviruses are known to cause respiratory infections ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome(MERS) and Severe Acute Respiratory Syndrome(SARS).The Most Recently discovered from Coronvirus is COVID-19.</p>
    </div>
  </div>
</div>

<!-- **************About Section ends************* -->

<!-- **************Sympotoms against Coronvirus************* -->
<div class="container-fluid  pt-5 pb-5" id="symptomid">
  <div class="section_header text-center mb-5 mt-4">
    <h1>CoronaVirus Symptoms</h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12 mt-5 ">
        <figure class="text-center">
          <img src="images/cough.png" class="img-fluid " width="120" height="120" alt="">
          <figcaption class="text-center">Cough</figcaption>
        </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5 ">
        <figure class="text-center">
          <img src="images/fever.png" class="img-fluid " width="120" height="120" alt="">
          <figcaption class="text-center">fever</figcaption>
        </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5 ">
        <figure class="text-center">
          <img src="images/tired.png" class="img-fluid " width="120" height="120" alt="">
          <figcaption class="text-center">tired</figcaption>
        </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5 ">
        <figure class="text-center">
          <img src="images/sneeze.png" class="img-fluid " width="120" height="120" alt="">
          <figcaption class="text-center">cold</figcaption>
        </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5 ">
        <figure class="text-center">
          <img src="images/pain.png" class="img-fluid " width="120" height="120" alt="">
          <figcaption class="text-center">Breathing Problem</figcaption>
        </figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12 mt-5 ">
        <figure class="text-center">
          <img src="images/sick.png" class="img-fluid " width="120" height="120" alt="">
          <figcaption class="text-center">Body Pain</figcaption>
        </figure>
      </div>
      
     </div>
  </div>

  </div>






<!-- **************Prevention against Coronvirus************* -->
<div class="container-fluid  sub_section pt-5 pb-5" id="preventionid">
    <div class="section_header text-center mb-5 mt-4">
      <h1>6  Prevention Steps Against Coronvirus</h1>
    </div>

   <div class="container">
    <div class="row">
          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                  <figure class="text-center">
                    <img src="images/handwash.png" class="img-fluid " width="90" height="90" alt="">
                  </figure>
                </div>
                <div class="col-lg-8 col-md-8 col-12">
                  <p>Wash Your Hands Regularly for 20 Seconds with soap and water or use Alcohal based Hand Santizer.</p>
                </div>
         
            </div>
           
          
           </div>
           <div class="col-lg-4 col-md-4 col-12 mt-5">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                  <figure class="text-center">
                    <img src="images/mask.png" class="img-fluid " width="90" height="90" alt="">
                  </figure>
                </div>
                <div class="col-lg-8 col-md-8 col-12">
                  <p>Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze</p>
                </div>
         
            </div>
           
          
           </div>
           <div class="col-lg-4 col-md-4 col-12 mt-5">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                  <figure class="text-center">
                    <img src="images/distance.png" class="img-fluid " width="90" height="90" alt="">
                  </figure>
                </div>
                <div class="col-lg-8 col-md-8 col-12">
                  <p>Avoid close contact (1 meter or 3 feet) with other people who are unwell.</p>
                </div>
         
            </div>
           
          
           </div>
           <div class="col-lg-4 col-md-4 col-12 mt-5">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                  <figure class="text-center">
                    <img src="images/quarantine.png" class="img-fluid " width="90" height="90" alt="">
                  </figure>
                </div>
                <div class="col-lg-8 col-md-8 col-12">
                  <p>Stay home and self-isolate from others in the household if you feel unwell.</p>
                </div>
         
            </div>
           
          
           </div>
           <div class="col-lg-4 col-md-4 col-12 mt-5">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                  <figure class="text-center">
                    <img src="images/news.png" class="img-fluid " width="90" height="90" alt="">
                  </figure>
                </div>
                <div class="col-lg-8 col-md-8 col-12">
                  <p>Stay informed by watching news & follow the recommended practices</p>
                </div>
         
            </div>
           
          
           </div>
           <div class="col-lg-4 col-md-4 col-12 mt-5">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                  <figure class="text-center">
                    <img src="images/prevention.png" class="img-fluid " width="90" height="90" alt="">
                  </figure>
                </div>
                <div class="col-lg-8 col-md-8 col-12">
                  <p>Try to avoid handshake instead of that use Namste from distance.</p>
                </div>
         
            </div>
           
          
           </div>
       
        
        
    </div>
   </div>

</div>

<!-- ****************contact us asap********* -->
<div class="container-fluid   pt-5 pb-5" id="contactid">
    <div class="section_header text-center mb-5 mt-4">
      <h1>CONTACT US </h1>
    </div>


    <div class="container">
       <div class="row">
          <div class="col-lg-8 offset-lg-2 col-12">
          <form action="" method="POST">
               <div class="form-group">
                 <label >UserName</label>
                  <input type="text" class="form-control" name="username" placeholder="Ex. Anuj" autocomplete="off" required>
              </div>
              <div class="form-group">
                 <label >Email</label>
                  <input type="email"    class="form-control"  name="email" placeholder="name@example.com" autocomplete="off" required>
              </div>
              <div class="form-group">
                 <label > Mobile </label>
                    <input type="number" class="form-control" name="mobile" placeholder="Ex.9675339922" autocomplete="off" required>
              </div>

              <div class="form-group">
              <label>Select Symptoms</label> <br>

                

                <div class="form-check form-check-inline">
                   <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="coronasym[]" value="cold">
                     <label class="form-check-label" for="inlineCheckbox1">Cold</label>
                </div>
                <div class="form-check form-check-inline">
                   <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="coronasym[]" value="fever">
                     <label class="form-check-label" for="inlineCheckbox2">Fever</label>
                </div>
                <div class="form-check form-check-inline">
                   <input class="form-check-input" type="checkbox" id="inlineCheckbox3"  name="coronasym[]"value="breath">
                     <label class="form-check-label" for="inlineCheckbox3">Difficulty in Breath</label>
                </div>
                <div class="form-check form-check-inline">
                   <input class="form-check-input" type="checkbox" id="inlineCheckbox4" name="coronasym[]" value="tired">
                     <label class="form-check-label" for="inlineCheckbox4">Feeling Week</label>
                </div>
              </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Describe your Sickness</label>
                <textarea class="form-control" name="msg" placeholder="what you are feeling about your sickness.." id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>


            <button type="submit"  name ="submit" class="btn btn-primary">Submit</button>
          </form>
          </div>
        </div>
    </div>
</div>



<!-- *********top cursor******** -->
<div class="container scrolltop float-right pr-5">
   <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
</div>
<!-- **********Footer********** -->
<footer class=mt-5>
  <div class="footer_style text-white text-center container-fluid">
  <p>Copyright &copy; <script>document.write(new Date().getFullYear())</script>  Designed by Ankit Singh</p>
  </div>
</footer>


<script>
         $('.count').counterUp({
            delay: 10,
             time: 3000
        }) 


        // get the button:
        mybutton = document.getElementById("myBtn");

        //when the user scrolls down 20px from the top of the document, show the button 
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20){
                mybutton.style.display = "block";
            }else{
                mybutton.style.display="none";
            }
        } 


        // when the user clicks on the button , scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; //For Chrome , Firebox, IE and Opera
        }



        
        const searchFun = () =>{
          let filter = document.getElementById('myInput').value.toUpperCase();

          let myTable = document.getElementById('tabval');

          let tr = tabval.getElementsByTagName('tr');

          for (var i=0;i<tr.length ;i++){
            let td = tr[i].getElementsByTagName('td')[1];

            if(td){
              let textvalue = td.textContent || td.innerHTML;

              if(textvalue.toUpperCase().indexOf(filter) > -1){
                tr[i].style.display = "";

              }else{
                tr[i].style.display = "none";
              }
            }
          }
        }



</script>
</body>
</html>


<?php


include 'dbcon.php';

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $symp = $_POST['coronasym'];
    $msg = $_POST['msg']; 


    $chk = "";

    foreach($symp as $chk1){
        $chk .= $chk1.",";
    }

    $insertquery = " insert into coronacases(username, email, mobile, symp, message) values('$username', ' $email', '$mobile',' $chk',' $msg') ";
    
    $query = mysqli_query($con, $insertquery);

    if($con){
        ?>
        <script>
           alert(" Your Message sends successfully.");
        </script> 
        <?php 
    }else{
        ?>
        <script>
           alert("No inserted" );
        </script> 
    <?php
    }

}




?>