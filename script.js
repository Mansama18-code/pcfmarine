
$(document).ready(function() {
  // Global Settings
  //let edit = false;
  let d = new Date();  //timestamp
  let da = d.getDate();//day
  let mon = d.getMonth()+1;   //month
  let yr = d.getFullYear();   //year
  let dn;
  let thisDay, yesterDay, nextDay;
  if (mon <10){
    mon = "0"+mon;
  }
  if (da > 0 && da < 10){
    da = "0"+da;

  }
  
  fetchTasks2();
  obtenerDia();
  
  $('#date-time').click(function(){ obtenerDia(); return false; });
  $('#nuevo-dia').click(function(){ nextDia(); return false; });
  $('#viejo-dia').click(function(){ diaAtras(); return false; });


  function obtenerDia () {
    da = d.getDate();       //day
    mon = d.getMonth()+1;   //month
    yr = d.getFullYear();   //year
    
    dn = da;

    if (mon <10){
      mon = "0"+mon;
    }
    if (dn > 0 && dn < 10){
      dn = "0"+dn;

    }
   
    thisDay =  yr + "-" + mon + "-" +dn;
    document.getElementById("date-time").innerHTML= thisDay;
    console.log("Aquí es día actual...");
    fetchTasks(thisDay);
    
    
  }

 function diaAtras(){

  da = da - 1;

  if (da > 0 && da < 10){
    dn = "0"+da;

  }
  else{ 
    dn = da;
  }

  if (dn < 1 ){
    da = 31;
    //dn = "0"+da;
    mon--;
    
    if (mon < 1){
      mon = 12;
      yr--;
    }
    if (mon < 10 && mon > 0 ){
      mon = "0"+mon;

    }
    nextDay = yr + "-" + mon + "-" +da ;
    document.getElementById("date-time").innerHTML= nextDay;
    console.log("Cambia de Mes");
    fetchTasks(nextDay);

  } else{

    nextDay =  yr + "-" + mon + "-" +dn ;
    document.getElementById("date-time").innerHTML= nextDay;
    console.log("Aquí cambia de dia");
    fetchTasks(nextDay);
  }
    
 }
 

  function nextDia () {
  
     
        da = da + 1;

        if (da > 0 && da < 10){
          dn = "0"+da;
      
        }
        else{ 
          dn = da;
        }
      
        if (dn > 31 ){
          da = 1;
          dn = "0"+da;
          mon++;

          if (mon >= 13){
            mon = 1;
            yr++;
          }
          if (mon < 10 && mon > 0) {

            mon = "0"+mon;
          }
          nextDay = yr + "-" + mon + "-" +dn ;
          document.getElementById("date-time").innerHTML= nextDay;
          console.log("Cambia de Mes");
          fetchTasks(nextDay);
        } else{
      
          nextDay =  yr + "-" + mon + "-" +dn ;
          document.getElementById("date-time").innerHTML= nextDay;
          console.log("Aquí cambia de dia");
          fetchTasks(nextDay);
        }
      

  }
  
 
  $('#task-form').submit(e => {
    e.preventDefault();
    const postData = {
      reference: $('#reference1').val(),
      cliente: $('#client1').val(),
      location: $('#location1').val(),
      fecha: $('#fecha1').val(),
      barquito: $('#barquito').val(),
      service: $('#service1').val(),
      rate: $('#rate1').val(),
      departure: $('#salida').val(),
      arrival: $('#llegada').val(),
      agent: $('#agent1').val(),
      fumigator: $('#fumigator1').val(),
      launch: $('#launch1').val(),
      captain: $('#captain1').val(),
      authorize: $('#authorize1').val(),
      marine: $('#marine1').val(),
    };
    const url = 'registerTrip.php' ;
    console.log(postData, url);
    $.post(url, postData, (response) => {
      console.log(response);
      $('#task-form').trigger('reset');
      fetchTasks();
    });
  });

function fetchTasks(thisDay) {
    $.ajax({
      url: 'getTrips.php',
      type: 'GET',
      datatype: JSON,
      success: function(response) {
        const tasks = JSON.parse(response);
        console.log(tasks);
       
        
        //console.log(Object.keys(tasks).length);
        let template = '';
        //console.log(tasks);
        //for(let i =0; i < Object.keys(tasks).length; i++){
          tasks.forEach(task => {
            //console.log('Data es:'+ task.reference);
            if(task.fecha == thisDay){
                template += `
                        <tr>
                          <td style="padding-left: 30px;" class="prueba"> ${task.reference} </td>  
                          <td style="padding-left: 30px;"> ${task.status}</td>
                          <td style="padding-left: 30px;"> ${task.fecha} </td>
                          <td style="padding-left: 30px;"> ${task.departure} </td>
                          <td style="padding-left: 30px;"> ${task.area} </td>
                          <td style="padding-left: 30px;"> ${task.cliente} </td>
                          <td style="padding-left: 30px;"> ${task.vessel} </td>
                          
                          <td style="padding-left: 30px;">
                            <button class="task-delete btn ">
                            <img src="./img/dots3.svg">
                            </button>
                          </td>
                        </tr>
                    `
                      
              }}); 
            
        $('#tripsList').html(template);
        //openForm();
        $('td:first-child').each(function() {
          console.log($(this).text());
        });
        
      }
    });
  }

  function fetchTasks2() {
    $.ajax({
      url: 'getCompleteTrips.php',
      type: 'GET',
      datatype: JSON,
      success: function(response) {
        const tasks = JSON.parse(response);
        console.log(tasks);
        //console.log(Object.keys(tasks).length);
        let template = '';
        //console.log(tasks); onclick="openForm()"
        //for(let i =0; i < Object.keys(tasks).length; i++){
          tasks.forEach(task => {
            
          template += `
                  <tr>
                    <td style="padding-left: 30px;" >${task.reference} </td>  
                    <td style="padding-left: 30px;"> ${task.status}</td>
                    <td style="padding-left: 30px;"> ${task.fecha} </td>
                    <td style="padding-left: 30px;"> ${task.departure} </td>
                    <td style="padding-left: 30px;"> ${task.area} </td>
                    <td style="padding-left: 30px;"> ${task.cliente} </td>
                    <td style="padding-left: 30px;"> ${task.vessel} </td>
                    <td style="padding-left: 30px;">
                      <button type="button" class="task-delete btn " id="generarTicket">
                        <img src="./img/ticket.svg">
                      </button>
                    </td>
                    <td style="padding-left: 30px;">
                      <button type="button" class="task-delete btn " id="openForma2"  >
                        <img src="./img/view.svg">
                      </button>
                    </td>
                    <td style="padding-left: 30px;">
                      <button type="button" class="task-delete btn">
                        <img src="./img/dots3.svg">
                      </button>
                    </td>
                  </tr>
               `
            
        });
        
        $('#finishTrips').html(template);

        
      }
    });
  }

  
  
  
 
 function fetchTasks3(numRef) {
  $.ajax({
    url: 'getTrips.php',
    type: 'GET',
    datatype: JSON,
    success: function(response) {
      const tasks = JSON.parse(response);
      //console.log(tasks.length, numRef);
      
        let y = String(numRef);
        let x;
        
        tasks.forEach(task => {
         
          console.log('CLIENT: '+task.client,'REFERENCE: '+task.reference, 'REF. CLICK'+ y);
          x = String(task.reference);

          if(x == y){
            $('#nom-cliente').val(task.cliente);
            $('#nom-cliente').text(task.cliente);
            $('#nom-location').val(task.place);
            $('#nom-location').text(task.place);
            $('#nom-fecha').val(task.fecha);
            $('#nom-barquito').val(task.vessel);
            $('#nom-area').val(task.area);
            $('#nom-area').text(task.area);
            $('#nom-rate').val(task.rate);
            $('#nom-rate').text(task.rate);
            $('#nom-departure').val(task.departure);
            $('#nom-departure').text(task.departure);
            $('#nom-arrival').val(task.arrival);
            $('#nom-arrival').text(task.arrival);
            $('#nom-total-h').val('1');
            $('#nom-launch').val(task.launch);
            $('#nom-launch').text(task.launch);
            $('#nom-captain').val(task.captain);
            $('#nom-captain').text(task.captain);
            $('#nom-marine').val(task.marine);
            $('#nom-marine').text(task.marine);
            $('#nom-authorize').val(task.autorized);
            $('#nom-authorize').text(task.autorized);
            
            
          }
    
   


        });

        /*

      $('td:first-child').each(function() {
        console.log($(this).text());
      });*/
      
    }
  });
}// Fin FetchTask3.
  

$(document).on('click', '.prueba', function () {
     
  let inds = $('.prueba').index(this);
  let numRef = $('.prueba')[inds].innerText;
  console.log(inds,numRef);
  $('#num-ref').text(numRef);
  fetchTasks3(numRef);
  openForm();

}); //Fin de Onclick referencia.

$('#task-form2').submit(e => {
  e.preventDefault();
  const postData = {
      reference: $('#num-ref').text(),
      cliente: $('#nom-client1').val(),
      location: $('#nom-location').val(),
      fecha: $('#nom-fecha').val(),
      barquito: $('#nom-barquito').val(),
      service: $('#area2').val(),
      rate: $('#rate2').val(),
      departure: $('#salida1').val(),
      arrival: $('#llegada1').val(),
      agent: $('#nom-agent').val(),
      fumigator: $('#nom-fumigator').val(),
      launch: $('#nom-launch1').val(),
      captain: $('#nom-captain1').val(),
      authorize: $('#nom-authorize1').val(),
      marine: $('#nom-marine1').val(),
  };
  console.log("JSON CARGADO");
  const url = 'edit-trip.php';
  //console.log(postData, url);
  $.post(url, postData, (response) => {
    console.log(response);
    $('#task-form2').trigger('reset');
    fetchTasks();
  });
}); //Fin Editar

 
});




    let x = document.getElementById("bar-lat");
    const lateral = document.querySelector(".b-lateral");

    function showPopup() {
      
      if (x.style.display  == "block" )  {
        lateral.classList.remove("open");
        x.style.display = "none";
    } 
    else {
        lateral.classList.add("open");
        x.style.display = "block";
      }
    }

    function hidePopup(){
      lateral.classList.remove("open");
      x.style.display = "none";
    }
  
    
 

function openForm() {
  
  
  //let elclick = document.getElementsByClassName("prueba2");
  let elclick2 = document.getElementsByClassName("prueba");
  
 /* 
 for(let i = 0; i < elclick2.length; i++){
    elclick2[i].addEventListener('click',function (){
        console.log('el index es:'+i, elclick2[i].textContent);
        document.getElementById("num-ref").innerHTML = elclick2[i].textContent;
    } );
    
 }*/
 
 document.getElementById("form-bar").style.display = "block";
}


function cerrarForm(){
  
  var z = document.getElementById("form-bar");
    
      
      if(z.style.display == "block"){
      z.style.display = "none";
      }
    
    }
  




function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}


function openFrom2(){

  var form = document.getElementById("v-form-2");

  form.style.display = "flex";


}

function closeform2(){

  var form = document.getElementById("v-form-2");

  form.style.display = "none";

}


