<!DOCTYPE html>
<html>
    <head>
        <title>Pending Trips - Pacific Marine</title>
        <link rel="stylesheet" href="style.css">
        <!-- <link rel="stylesheet" href="github.com/necolas/normalize.css"> -->
        <script src="https://kit.fontawesome.com/7575dda8d9.js" crossorigin="anonymous"></script>
        <style>
         @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&family=Rubik+Pixels&display=swap');
       </style>
         <!--<link rel="icon" type="image/x-icon" href=".img/PACIFIC-MARINE-BLUE-logo.png" width="25px" height="25px"> -->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        
    </head>

    
     <body>
        
        <header>
            
            <nav class="menu" id="topnav">
                <div class="white-bg">
                    <button onclick="showPopup()" class="buttonBurger"><img src="./img/burger.svg " class="burger-nb"></button>
                    <a href="#home" class="active"> <img src="./img/pml.png" width="70px" height="70px" class="imagen"></a>
                </div>
                
                <div class="lista-menu2" >
                    
                    <div id="myLinks2">
                        <a class="links v-next-main" href="./pending.php"> <div>PENDING TRIPS</div> </a> 
                        <a class="links v-complete-main" href="./complete.php"> <div>COMPLETE TRIPS </div></a>
                        <a class="links v-hour-main" href="./hour.html"> <div>HOUR LOG</div> </a>
                        <a class="links v-invoice-main" href="./invoice.html"> <div>INVOICE LOG</div> </a>
                        <a class="links boton2" onclick="openFrom2()"><div >PROGRAM A TRIP</div></a>
                    </div>
                    <div id="myLinks">
                        <a class="links-profile v-profile-main" id="profile-user" href="#" > YM </a>
                    </div>
                    
                </div>
            </nav>   
            
            <nav aria-label="Page navigation example" class="centrar-pagination" style="background-color: #AACA43; color: #031251; margin-bottom:0px; ">
                    <ul class="pagination justify-content-center" style="margin: 0px;" >
                        <li class="page-item ">
                        <a class="page-link" id="viejo-dia"><<</a>
                        </li>
                        <li class="page-item page-link"><span id="date-time"></span></li>
                        <li class="page-item">
                        <a class="page-link" id="nuevo-dia">>></a>
                        </li>
                    </ul>
            </nav>
          
        </header>
        


        <?php 
        
        require_once ('./include/config/conexiondb.php');
        
        
        ?>
        <!-- PROGRAM A TRIP -->
        <div class="grid-container" >
            <div class="other-2 " id="v-form-2">
                <div class="other-form border-div">
                    <div>
                        <button class="boton-cerrar" onclick="closeform2()">X</button>
                    </div>
                    <div class="form-container">
                        <form id="task-form" class="form-info" >
        <?php
            $query = "SELECT cliente FROM empresa";
            $result = mysqli_query($conexion,$query);
            $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
        ?>
                            <div class="form-diseno wrapper-form">
                                <label>REFERENCE:</label>
                                <input type="text" name="reference" id="reference1" placeholder="INSERT REFERENCE NUMBER"> 
                                <label>CLIENT:</label>
                                <select  id="client1">
                                    <option value="Select Client"> Select Client </option>
                                    <?php 
                                       foreach ($options as $option) {
                                    ?>
                                        <option value="<?php echo $option['cliente'] ?>"><?php echo $option['cliente']; ?> </option>
                                    <?php 
                                        }
                                    ?>
                                    
                                </select>
            
                                <label>LOCATION:</label>
                                <select name="locations" id="location1">
                                    <option value="Select Location"> Select Location </option>
                                    <option value="CRISTOBAL">CRISTOBAL</option>
                                    <option value="BALBOA">BALBOA</option>
                                   
                                </select>
                                
                            </div>
       
                            <div class="form-diseno wrapper-form">
                                <label>DATE: </label>
                                <input type="date" id="fecha1" value=""> 
          
                                <label>VESSEL: </label>
                                <input type="text" name="vessel" id="barquito"placeholder="Insert a Vessel" class="textos">
    
                                <label>SERVICE AREA: </label>
                                <select name="service" id="service1">
                                    <option value="Select Road"> Select Road</option>
                                    <option value="OUTTER ROADS">OUTTER ROADS</option>
                                    <option value="OUTTER ROADS">INNER ANCHORAGE</option>
                                    <option value="NORTH TRANSIT">NORTH TRANSIT</option>
                                    <option value="SOUTH TRANSIT">SOUTH TRANSIT</option>
                                </select>
                            </div>
                                
                            <div class="form-diseno2">
                                <label>RATE: </label>
                                <select name="rate" id="rate1">
                                    <option value="Select Rate"> Select Rate </option>
                                    <option value="DAY+WEEK">DAY+WEEK</option>
                                    <option value="NIGHT+WEEK">NIGHT+WEEK</option>
                                    <option value="DAY+WEEKEND">DAY+WEEKEND</option>
                                    <option value="NIGHT+WEEKEND">NIGHT+WEEKEND</option>
                                    <option value="DAY+WEEK+HOLYDAY">DAY+WEEK+HOLYDAY</option>
                                    <option value="NIGHT+WEEK+HOLYDAY">NIGHT+WEEK+HOLYDAY</option>
                                </select>
                            <!-- 
                                <label>RATE: </label>
                                <input type="checkbox" class="checkbox-design">
                                <label>DAY </label>
                                <input type="checkbox" class="checkbox-design">
                                <label>NIGHT </label>
                                <input type="checkbox" class="checkbox-design">
                                <label>WEEK </label>
                                <input type="checkbox" class="checkbox-design">
                                <label>WEEKEND </label>
                                <input type="checkbox" class="checkbox-design">
                                <label>HOLYDAY </label>
                            -->
                            </div>
    
                            <div class="form-diseno">
                                <label>DEPARTURE TIME: </label>
                                <select name="hora-salida" id="salida" >
                                    <option value="Select Time"> Select Time </option>
                                    <option value="00:00">00:00</option>
                                    <option value="01:00">01:00</option>
                                    <option value="02:00">02:00</option>
                                    <option value="03:00">03:00</option>
                                    <option value="04:00">04:00</option>
                                    <option value="05:00">05:00</option>
                                    <option value="06:00">06:00</option>
                                    <option value="07:00">07:00</option>
                                    <option value="08:00">08:00</option>
                                    <option value="09:00">09:00</option>
                                    <option value="10:00">10:00</option>
                                    <option value="11:00">11:00</option>
                                    <option value="12:00">12:00</option>
                                    <option value="13:00">13:00</option>
                                    <option value="14:00">14:00</option>
                                    <option value="15:00">15:00</option>
                                    <option value="16:00">16:00</option>
                                    <option value="17:00">17:00</option>
                                    <option value="18:00">18:00</option>
                                    <option value="19:00">19:00</option>
                                    <option value="20:00">20:00</option>
                                    <option value="21:00">21:00</option>
                                    <option value="22:00">22:00</option>
                                    <option value="23:00">23:00</option>
                                  
                                </select>
    
                                <label>ARRIVAL TIME: </label>
                                <select name="hora-llegada" id="llegada">
                                    <option value="Select Time"> Select Time </option>
                                    <option value="00:00">00:00</option>
                                    <option value="01:00">01:00</option>
                                    <option value="02:00">02:00</option>
                                    <option value="03:00">03:00</option>
                                    <option value="04:00">04:00</option>
                                    <option value="05:00">05:00</option>
                                    <option value="06:00">06:00</option>
                                    <option value="07:00">07:00</option>
                                    <option value="08:00">08:00</option>
                                    <option value="09:00">09:00</option>
                                    <option value="10:00">10:00</option>
                                    <option value="11:00">11:00</option>
                                    <option value="12:00">12:00</option>
                                    <option value="13:00">13:00</option>
                                    <option value="14:00">14:00</option>
                                    <option value="15:00">15:00</option>
                                    <option value="16:00">16:00</option>
                                    <option value="17:00">17:00</option>
                                    <option value="18:00">18:00</option>
                                    <option value="19:00">19:00</option>
                                    <option value="20:00">20:00</option>
                                    <option value="21:00">21:00</option>
                                    <option value="22:00">22:00</option>
                                    <option value="23:00">23:00</option>
                                    
                                </select>

                            </div>
    
                            <div class="form-diseno">
                                <input type="checkbox" name="agent" id="agent1" class="checkbox-design">
                                <label>AGENT ATTENDANCE: </label>
                                <input type="checkbox" name="fumigator" id="fumigator1" class="checkbox-design">
                                <label>FUMIGATOR INSPECTOR ATTENDANCE: </label>
                            </div>   
                            
                            <div class="tabs form-diseno">
                                <!-- Tab links -->
                                <div class="tab">
                                    <button class="tablinks" onclick="openCity(event, 'Embark')" type="button">EMBARK</button>
                                    <button class="tablinks" onclick="openCity(event, 'Disembark')" type="button">DISEMBARK</button>
                                    <button class="tablinks" onclick="openCity(event, 'Deliver')" type="button">DELIVER</button>
                                    <button class="tablinks" onclick="openCity(event, 'Land')" type="button">LAND</button>
                                    <button class="tablinks" onclick="openCity(event, 'Other')" type="button">OTHER</button>
                                </div>
                                
                                <!-- Tab content -->
                                <div id="Embark" class="tabcontent">
                                    <input type="text" class="textos">
                                    <input type="text" class="textos">
                                    <input type="text" class="textos">
                                    <button type="button">+</button>
                                    <textarea class="textos" style="width: 100%; margin-top:10px;"></textarea>
                                </div>
                                
                                <div id="Disembark" class="tabcontent">
                                    <input type="text" class="textos">
                                    <input type="text" class="textos">
                                    <input type="text" class="textos">
                                    <button type="button">+</button>
                                    <textarea class="textos" style="width: 100%; margin-top:10px;"></textarea>
                                </div>
                                
                                <div id="Deliver" class="tabcontent">
                                    <input type="text" class="textos">
                                    <input type="text" class="textos">
                                    <input type="text" class="textos">
                                    <button type="button">+</button>
                                    <textarea class="textos" style="width: 100%; margin-top:10px;"></textarea>
                                </div>
    
                                <div id="Land" class="tabcontent">
                                    <input type="text" class="textos">
                                    <input type="text" class="textos">
                                    <input type="text" class="textos">
                                    <button>+</button>
                                    <textarea class="textos" style="width: 100%; margin-top:10px;" ></textarea>
                                </div>
                                <div id="Other" class="tabcontent">
                                    <textarea class="textos" style="width: 100%;"></textarea>
    
                                    
                                    
                                </div>
                                
                            </div>

        <?php
            $query = "SELECT launch FROM launch";
            $result = mysqli_query($conexion,$query);
            $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
        ?> 
                            <div class="form-diseno wrapper-form">
                                <label>LAUNCH: </label>
                                <select name="launch" id="launch1">
                                        <option value="Select Launch"> Select Launch </option>
                                <?php 
                                       foreach ($options as $option) {
                                    ?>
                                        <option value="<?php echo $option['launch']; ?>"><?php echo $option['launch']; ?> </option>
                                    <?php 
                                        }
                                    ?>
                                </select>
            <?php
            $query = "SELECT captain FROM captain";
            $result = mysqli_query($conexion,$query);
            $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
            ?>
                                <label>CAPTAIN: </label>
                                <select name="captain" id="captain1">
                                        <option value="Select Captain"> Select Captain </option>
                                <?php 
                                       foreach ($options as $option) {
                                    ?>
                                        <option value="<?php echo $option['captain']; ?>"><?php echo $option['captain']; ?> </option>
                                    <?php 
                                        }
                                    ?>
                                </select>
            <?php
                $query = "SELECT autorizado FROM empresas";
                $result = mysqli_query($conexion,$query);
                $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
            ?>
                                <label>AUTORIZED BY: </label>
                                <select name="authorize" id="authorize1">
                                        <option value="Select Authorize"> Select Authorize </option>
                                    <?php 
                                       foreach ($options as $option) {
                                    ?>
                                        
                                        <option value="<?php echo $option['autorizado']; ?>"><?php echo $option['autorizado']; ?> </option>
                                    <?php 
                                        }
                                    ?>
                                </select>
            <?php
                $query = "SELECT marine FROM marine";
                $result = mysqli_query($conexion,$query);
                $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
            ?>
                                <label>Deckhand: </label>
                                <select name="marine" id="marine1">
                                        <option value="Select Marine"> Select Deckhand </option>
                                <?php 
                                       foreach ($options as $option) {
                                    ?>
                                        
                                        <option value="<?php echo $option['marine']; ?>"><?php echo $option['marine']; ?> </option>
                                    <?php 
                                        }
                                    ?>
                                </select>
                            </div>
                            <button type="submit" >
                                PROGRAM TRIP
                            </button>
            
                        </form>
                        
                    </div>
                    
                </div>
            </div>



            <!-- SIDE BAR -->
            <aside class="b-lateral" id="bar-lat" > 
                <div id="buscar" ><input placeholder="SEARCH..." type="text" class="barra-diseno"></div>
                <hr>
                <div id="filtrar">
                    <select name="filtrar" id="filtrado" class="barra-diseno">
                        <option value="">CRISTOBAL</option>
                        <option value="">BALBOA</option>
                        <option value="">HOURS</option>
                        <option value="">VESSEL</option>
                        <option value="">CAPTAIN</option>
                    </select>
                </div>
                <hr>
                <div id="v-next">NEXT TRIPS</div>
                <div id="v-complete">COMPLETE TRIPS</div>
                <div id="v-hour">HOUR LOG</div>
                <div id="v-invoice">INVOICE LOG</div>

                <hr class="v-line3">
                <div id="v-profile"><a class="links-profile2" href="#"> Y </a><div>YAISA M.</div></div>
                <div id="v-editprofile">EDIT PROFILE</div>
                <div id="v-setting">SETTINGS</div>
                <div id="v-logout">LOG OUT</div>


            </aside>





            <!-- MAIN CONTENT -->
            <main class="fondo-principal" id="main-bar" onclick="hidePopup()"> 
                
                <div class="content-container" id="ticket-receiver">

                </div>
       
                <?php
                //$query = "SELECT * FROM trips";
                //$result = mysqli_query($conexion,$query);
                ?> 
           
                <table class="table table-hover tableta">
                    <thead class="table-light">
                      <tr>
                      <th scope="col" style="background-color: #AACA43; color: #031251; padding-left: 30px;">REFERENCE</th>
                        <th scope="col" style="background-color: #AACA43; color: #031251; padding-left: 30px;">STATUS</th>
                        <th scope="col" style="background-color: #AACA43; color: #031251; padding-left: 30px;">DATE</th>
                        <th scope="col" style="background-color: #AACA43; color: #031251; padding-left: 30px;">HOUR</th>
                        <th scope="col" style="background-color: #AACA43; color: #031251; padding-left: 30px;">AREA</th>
                        <th scope="col" style="background-color: #AACA43; color: #031251; padding-left: 30px;">CLIENT</th>
                        <th scope="col" style="background-color: #AACA43; color: #031251; padding-left: 30px;">VESSEL</th>
                        <th scope="col" style="background-color: #AACA43; color: #031251; padding-left: 30px;">MORE</th>
                      </tr>
                    </thead>
                    <tbody id="tripsList">
                      
                    </tbody>
                </table>
                
            </main>





            <!-- FORM - VIEW /EDIT TRIP -->
            <aside class="b-formulario" id="form-bar"> 
                <div class="form-container">
                    <div style="display: flex; align-items: center;">
                        <button onclick="cerrarForm()" type="button" id="boton1"> ← </button>
                        <div>BACK TO MENU</div>
                    </div>

                    <div>
                        <button type="button">START</button>
                       <!-- <button>FINISH</button> -->
                    </div>

       

                    <form class="form-info" id="task-form2">

                        <label>REFERENCE:</label>
                        <div>[(<span id="num-ref" name="refe-num"></span>)] </div>
                        <div class="form-diseno wrapper-form">
                            <label>CLIENT: <span ></span></label>
                            

        <?php
            $query = "SELECT cliente FROM empresa";
            $result = mysqli_query($conexion,$query);
            $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
        ?>
                            <select name="client" id="nom-client1">
                                <option id="nom-cliente" value=" ">  </option>
                                    <?php 
                                       foreach ($options as $option) {
                                    ?>
                                        <option  value="<?php echo $option['cliente'] ?>"><?php echo $option['cliente']; ?> </option>
                                    <?php 
                                        }
                                    ?>
                                    
                            </select>
            
                           
                            <label>TICKET:</label>
                            <label>LOCATION: <span id="nom-location" value=" "></span> </label>

                            
                        </div>
                        <div class="form-diseno wrapper-form">
                            <label>DATE: </label>
                            <input type="date" id="nom-fecha"  value=" "> 
                            
                            <label>VESSEL: </label>
                            <input type="text"  id="nom-barquito" value=" " placeholder="Insert a Vessel" class="textos">

                            <label>SERVICE AREA: </label>
                            <select  id="area2">
                                    <option id="nom-area" value=" "> </option>
                                    <option value="OUTTER ROADS">OUTTER ROADS</option>
                                    <option value="INNER ANCHORAGE">INNER ANCHORAGE</option>
                                    <option value="NORTH TRANSIT">NORTH TRANSIT</option>
                                    <option value="SOUTH TRANSIT">SOUTH TRANSIT</option>
                            </select>
                        </div>
                            
                        <div class="form-diseno2">
                            <label>RATE: </label>
                            <select name="rate" id="rate2">
                                    <option id="nom-rate" value=" ">  </option>
                                    <option value="DAY+WEEK">DAY+WEEK</option>
                                    <option value="NIGHT+WEEK">NIGHT+WEEK</option>
                                    <option value="DAY+WEEKEND">DAY+WEEKEND</option>
                                    <option value="NIGHT+WEEKEND">NIGHT+WEEKEND</option>
                                    <option value="DAY+WEEK+HOLYDAY">DAY+WEEK+HOLYDAY</option>
                                    <option value="NIGHT+WEEK+HOLYDAY">NIGHT+WEEK+HOLYDAY</option>
                            </select>
                        </div>

                        <div class="form-diseno">
                            <label>DEPARTURE TIME: <span > </span> </label>
                                    
                            <select name="hora-salida" id="salida1">
                                    <option id="nom-departure" value="Time">Time</option>
                                    <option value="00:00">00:00</option>
                                    <option value="01:00">01:00</option>
                                    <option value="02:00">02:00</option>
                                    <option value="03:00">03:00</option>
                                    <option value="04:00">04:00</option>
                                    <option value="05:00">05:00</option>
                                    <option value="06:00">06:00</option>
                                    <option value="07:00">07:00</option>
                                    <option value="08:00">08:00</option>
                                    <option value="09:00">09:00</option>
                                    <option value="10:00">10:00</option>
                                    <option value="11:00">11:00</option>
                                    <option value="12:00">12:00</option>
                                    <option value="13:00">13:00</option>
                                    <option value="14:00">14:00</option>
                                    <option value="15:00">15:00</option>
                                    <option value="16:00">16:00</option>
                                    <option value="17:00">17:00</option>
                                    <option value="18:00">18:00</option>
                                    <option value="19:00">19:00</option>
                                    <option value="20:00">20:00</option>
                                    <option value="21:00">21:00</option>
                                    <option value="22:00">22:00</option>
                                    <option value="23:00">23:00</option>
                                
                            </select>

                            <label>ARRIVAL TIME:<span  ></span>     </label>
                            <select name="hora-llegada" id="llegada1" >
                                <option id="nom-arrival" value="Time">Time</option>
                                <option value="00:00">00:00</option>
                                <option value="01:00">01:00</option>
                                <option value="02:00">02:00</option>
                                <option value="03:00">03:00</option>
                                <option value="04:00">04:00</option>
                                <option value="05:00">05:00</option>
                                <option value="06:00">06:00</option>
                                <option value="07:00">07:00</option>
                                <option value="08:00">08:00</option>
                                <option value="09:00">09:00</option>
                                <option value="10:00">10:00</option>
                                <option value="11:00">11:00</option>
                                <option value="12:00">12:00</option>
                                <option value="13:00">13:00</option>
                                <option value="14:00">14:00</option>
                                <option value="15:00">15:00</option>
                                <option value="16:00">16:00</option>
                                <option value="17:00">17:00</option>
                                <option value="18:00">18:00</option>
                                <option value="19:00">19:00</option>
                                <option value="20:00">20:00</option>
                                <option value="21:00">21:00</option>
                                <option value="22:00">22:00</option>
                                <option value="23:00">23:00</option>
                                
                            </select>

                            <label>TOTAL HOURS: </label>
                            <input type="number" id="nom-total-h"  >
                        </div>

                        <div class="form-diseno">
                            <input type="checkbox" id="nom-agent" class="checkbox-design">
                            <label>AGENT ATTENDANCE: </label>
                            <input type="checkbox"  id="nom-fumigator" class="checkbox-design">
                            <label>FUMIGATOR ATTENDANCE: </label>
                        </div>   
                        
                        <div class="tabs form-diseno">
                            <!-- Tab links -->
                            <div class="tab">
                                <button class="tablinks" type="button" onclick="openCity(event, 'embark')"> EMBARK</button>
                                <button class="tablinks"type="button" onclick="openCity(event, 'disembark')">DISEMBARK</button>
                                <button class="tablinks" type="button" onclick="openCity(event, 'deliver')">DELIVER</button>
                                <button class="tablinks" type="button" onclick="openCity(event, 'land')">LAND</button>
                                <button class="tablinks" type="button" onclick="openCity(event, 'other')">OTHER</button>
                            </div>
                            
                            <!-- Tab content -->
                            <div id="embark" class="tabcontent">
                                <input type="text" class="textos">
                                <input type="text" class="textos">
                                <input type="text" class="textos">
                                <button>+</button>
                                <textarea class="textos" style="width: 100%; margin-top:10px;"></textarea>
                            </div>
                            
                            <div id="disembark" class="tabcontent">
                                <input type="text" class="textos">
                                <input type="text" class="textos">
                                <input type="text" class="textos">
                                <button>+</button>
                                <textarea class="textos" style="width: 100%; margin-top:10px;"></textarea>
                            </div>
                            
                            <div id="deliver" class="tabcontent">
                                <input type="text" class="textos">
                                <input type="text" class="textos">
                                <input type="text" class="textos">
                                <button>+</button>
                                <textarea class="textos" style="width: 100%; margin-top:10px;"></textarea>
                            </div>

                            <div id="land" class="tabcontent">
                                <input type="text" class="textos">
                                <input type="text" class="textos">
                                <input type="text" class="textos">
                                <button>+</button>
                                <textarea class="textos" style="width: 100%; margin-top:10px;"></textarea>
                            </div>
                            <div id="other" class="tabcontent">
                                <textarea class="textos" style="width: 100%;"></textarea>  
                                
                            </div>
                            
                        </div>


        <?php
            $query = "SELECT launch FROM launch";
            $result = mysqli_query($conexion,$query);
            $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
        ?> 
                        <div class="form-diseno wrapper-form">
                            <label>LAUNCH: </label>
                            <select  id="nom-launch1">
                                        <option id="nom-launch" value=" "> Select Launch </option>
                                <?php 
                                       foreach ($options as $option) {
                                    ?>
                                        <option value="<?php echo $option['launch']; ?>"><?php echo $option['launch']; ?> </option>
                                    <?php 
                                        }
                                    ?>
                                </select>
            <?php
            $query = "SELECT captain FROM captain";
            $result = mysqli_query($conexion,$query);
            $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
            ?>

                            <label>CAPTAIN: </label>
                            <select  id="nom-captain1">
                                <option id="nom-captain" value=" "> Select Captain </option>
                            <?php 
                                       foreach ($options as $option) {
                                    ?>
                                        <option value="<?php echo $option['captain']; ?>"><?php echo $option['captain']; ?> </option>
                                    <?php 
                                        }
                                    ?>
                            </select>
            <?php
                $query = "SELECT autorizado FROM empresas";
                $result = mysqli_query($conexion,$query);
                $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
            ?>

                            <label>AUTORIZED BY: </label>
                            <select  id="nom-authorize1">
                                        <option id="nom-authorize" value=" "> Select Authorize </option>
                                    <?php 
                                       foreach ($options as $option) {
                                    ?>
                                        
                                        <option value="<?php echo $option['autorizado']; ?>"><?php echo $option['autorizado']; ?> </option>
                                    <?php 
                                        }
                                    ?>
                                </select>
            <?php
                $query = "SELECT marine FROM marine";
                $result = mysqli_query($conexion,$query);
                $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
            ?>

                            <label>Deckhand: </label>
                            <select  id="nom-marine1">
                                        <option id="nom-marine" value=" "> Select Deckhand </option>
                                <?php 
                                       foreach ($options as $option) {
                                    ?>
                                        
                                        <option value="<?php echo $option['marine']; ?>"><?php echo $option['marine']; ?> </option>
                                    <?php 
                                        }
                                    ?>
                                </select>
                        </div>
                        <button type="submit">SAVE TRIP</button>
                        <div class="save-cancel">
                            
                            <button type="button" onclick="cerrarForm()">CANCEL</button><!--
                            <button>EDIT</button> -->
                        </div>
                    
                    </form>
                    
                </div>
            </aside>
        </div>
        
        <footer>
        
        </footer>    

     </body>
     <script
        src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous">
     </script>
     <script src="./script.js"></script>
</html>