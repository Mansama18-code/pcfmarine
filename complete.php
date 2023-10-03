<!DOCTYPE html>
<html>
    <head>
        <title>Complete Trips - Pacific Marine</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="normalize.css">
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
                        <!--<a class="links boton2" onclick="openFrom2()"><div >PROGRAM A TRIP</div></a>-->
                    </div>
                    <div id="myLinks">
                        <a class="links-profile v-profile-main" id="profile-user" href="#" > YM </a>
                    </div>
                    
                </div>
            </nav>  
            <nav aria-label="Page navigation example" class="centrar-pagination" style="background-color: #AACA43; color: #031251; margin-bottom:0px; ">
                    <ul class="pagination justify-content-center" style="margin: 0px;" >
                        <li class="page-item disabled">
                        <a class="page-link"><<</a>
                        </li>
                        <li class="page-item page-link"><span id="date-time"></span></li>
                        <li class="page-item">
                        <a class="page-link" href="#">>></a>
                        </li>
                    </ul>
            </nav> 
            
        </header>


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
                        <th scope="col" style="background-color: #AACA43; color: #031251; padding-left: 30px;">TICKET</th>
                        <th scope="col" style="background-color: #AACA43; color: #031251; padding-left: 30px;">VIEW</th>
                        <th scope="col" style="background-color: #AACA43; color: #031251; padding-left: 30px;">MORE</th>
                      </tr>
                    </thead>
                    <tbody id="finishTrips">
                      
                    </tbody>
                </table>
                
            </main>
         
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

        

        <aside class="b-formulario" id="form-bar"> 
        <div class="form-container">
                    <div style="display: flex; align-items: center;">
                        <button onclick="cerrarForm()" id="boton1"> ← </button>
                        <div>BACK TO MENU</div>
                    </div>
                    <form class="form-info" id="task-form2">
                        <div class="form-diseno wrapper-form">
                            <label>CLIENT:</label>
                            <div id="cliente-rec"></div>
                            <label>REFERENCE:</label>
                            <div>[(<span id="num-ref2"></span>)] </div>
                            <label>TICKET:</label>
                            <label>LOCATION:</label>
                            
                        </div>
                        <div class="form-diseno wrapper-form">
                            <label>DATE: </label>
                            <input type="date" value="yyyy-MM-dd"> 
                            
                            <label>VESSEL: </label>
                            <select name="area" id="area">
                                <option value="">KANALA</option>
                                
                            </select>

                            <label>SERVICE AREA: </label>
                            <select name="area" id="area">
                                <option value="">OUTTER ROADS</option>
                                <option value="">INNER ROADS</option>
                                <option value="">NOTH TRANSIT</option>
                                <option value="">SOUTH TRANSIT</option>
                            </select>
                        </div>
                            
                        <div class="form-diseno2">
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
                        </div>

                        <div class="form-diseno">
                            <label>DEPARTURE TIME: </label>
                            <select name="hora-salida" id="salida">
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
                            <input type="number">
                        </div>

                        <div class="form-diseno">
                            <input type="checkbox" class="checkbox-design">
                            <label>AGENT ATTENDANCE: </label>
                            <input type="checkbox" class="checkbox-design">
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
                        <div class="form-diseno wrapper-form">
                            <label>LAUNCH: </label>
                            <select name="area" id="area">
                                <option value="">SELECT LAUNCH</option>
                                
                            </select>

                            <label>CAPTAIN: </label>
                            <select name="area" id="area">
                                <option value="">SELECT CAPTAIN</option>
                                
                                
                            </select>

                            <label>AUTORIZED BY: </label>
                            <select name="area" id="area">
                                <option value="">SELECT AUTORIZED</option>
                               
                                
                            </select>

                            <label>Deckhand: </label>
                            <select name="area" id="area">
                                <option value="">SELECT DECKHAND</option>
                               
                                
                            </select>
                        </div>

                        <div class="save-cancel">
                            <button>EDIT</button>
                            <!-- <button>EDIT</button>
                            <button>EDIT</button> -->
                        </div>
                    
                    </form>
                    
                </div>
            </aside>
        </div>
        </aside>
        
    
    </body>
    <script
        src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous">
     </script>
    <script src="./script.js"></script>
</html>