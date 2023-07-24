/* Toggle between showing and hiding the navigation menu links when the user clicks on the hamburger menu / bar icon 
function openBurger() {
    var x = document.getElementById("bar-lat");
    var y = document.getElementById("boton1");

    if (x.style.gridTemplateColumns  == "20% 1fr ")  {
        
      x.style.gridTemplateColumns = "0% 1fr";
    
  } else  {
      
      x.style.gridTemplateColumns = "20% 1fr";
  }

 


    
    
  }
*/

function openBurger() {
  var x = document.getElementById("bar-lat");
  var y = document.getElementById("main-bar");
  var z = document.getElementById("form-bar");
  var b = document.getElementById("boton1");
 
if (window.innerWidth > 921){

  
  if (x.style.display  == "block" )  {
      
    if (z.style.display  == "block") {
      x.style.display = "none";
      y.style.width = "30%";
      z.style.width = "70%";
    //  b.style.display = "block";
    }
    else {
      x.style.display = "none";
      y.style.width = "100%";
    }
  
  } else  {
    if (z.style.display  == "block") {
      
      x.style.display = "block";
      y.style.width = "30%";
      z.style.width = "50%";
      //b.style.display = "block";
    }
    else {
      x.style.display = "block";
      y.style.width = "80%";}
  }

    //TABLET
  } else if (window.innerWidth > 480 && window.innerWidth <= 920) { 


      if (x.style.display  == "block" )  {
        
        if (z.style.display  == "block") {
          x.style.display = "none";
          y.style.width = "30%";
          z.style.width = "70%";
        //  b.style.display = "block";
        }
        else {
          x.style.display = "none";
          y.style.width = "100%";
        }
          
      } else  {
        if (z.style.display  == "block") {
          
          x.style.display = "block";
          y.style.width = "30%";
          z.style.width = "50%";
          //b.style.display = "block";
        }
        else {
          x.style.display = "block";
          y.style.width = "100%";}
      }
      
      
    }
    //MOBILE
    else if ( window.innerWidth <= 479) { 

    

      if (x.style.display  == "block" )  {
        
        if (z.style.display  == "block") {
          x.style.display = "none";
          y.style.width = "30%";
          z.style.width = "70%";
        //  b.style.display = "block";
        }
        else {
          x.style.display = "none";
          y.style.width = "100%";
        }
          
      } else  {
        if (z.style.display  == "block") {
          x.style.backgroundColor = "#ABBBBB";
          x.style.display = "block";
          y.style.width = "30%";
          z.style.width = "50%";
          //b.style.display = "block";
        }
        else {
          x.style.display = "block";
          y.style.width = "100%";}
      }

    }
  }

  







 
function openForm() {
  var x = document.getElementById("bar-lat");
  var y = document.getElementById("main-bar");
  var z = document.getElementById("form-bar");
  var b = document.getElementById("boton1");
 
if (window.innerWidth > 1080){
  if (y.style.width == "80%" && x.style.display == "block" )  {

    z.style.display = "block";
    z.style.width = "50%";
    y.style.width = "30%"; 
    b.style.display = "block";
      
    
  
  } else {

    if (y.style.width == "30%" && x.style.display == "block" ) {
        
      z.style.width = "50%";

    }
      
    else {
      z.style.display = "block";
      z.style.width = "70%"; 
      y.style.width = "30%";
      b.style.display = "block";
    }
  }
   }

 
    


  

  
}

function cerrarForm(){
  var x = document.getElementById("bar-lat");
  var y = document.getElementById("main-bar");
  var z = document.getElementById("form-bar");
  var b = document.getElementById("boton1");

  if (window.innerWidth > 1080){
    if (z.style.display == "block" && y.style.width == "30%") {
      
      if(x.style.display == "block"){
      z.style.display = "none";
      y.style.width = "80%";
      }

      else {

        z.style.display = "none";
        y.style.width = "100%";
    
      }

    }
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

function addNewTicket(){
//Primer div que pinta el cuadro.
  const para = document.createElement("div");
  para.setAttribute("class", "diseno-cuadro");
  para.setAttribute("id", "cuadro-ticket");

//div de contenido.
  const text = document.createElement("div");
  text.setAttribute("class", "diseno-texto");
  const node = document.createTextNode("Programado... ");
  text.appendChild(node);

  const text2 = document.createElement("div");
  text2.setAttribute("class", "diseno-texto");
  const node2 = document.createTextNode("10/11/2012");
  text2.appendChild(node2);

  const text3 = document.createElement("div");
  text3.setAttribute("class", "diseno-texto");
  const node3 = document.createTextNode("08:00");
  text3.appendChild(node3);

  const text4 = document.createElement("div");
  text4.setAttribute("class", "diseno-texto");
  const node4 = document.createTextNode("12345");
  text4.appendChild(node4);

  const text5 = document.createElement("div");
  text5.setAttribute("class", "diseno-texto");
  const node5 = document.createTextNode("SOPISCO");
  text5.appendChild(node5);

  const text6 = document.createElement("div");
  text6.setAttribute("class", "diseno-texto");
  const node6 = document.createTextNode("KANALA");
  text6.appendChild(node6);

//button de view.
  const btn = document.createElement("button");
  btn.setAttribute("onclick", "openForm()");
  btn.setAttribute("class","buttonBurger");
  btn.setAttribute("class", "diseno-texto");
  btn.setAttribute("id","button-Burger");
//icono de button view.
  const imagen = document.createElement("img");
  imagen.setAttribute("src", "./img/view.svg");
  imagen.setAttribute("class","view-nb");

  //button de view.
  const btn2 = document.createElement("button");
  btn2.setAttribute("class", "diseno-texto");
  btn2.setAttribute("id","view-more");
//icono de button view.
  const imagen2 = document.createElement("img");
  imagen2.setAttribute("src", "./img/dots3.svg");
  imagen2.setAttribute("class","dots-nb");


  btn.appendChild(imagen);
  btn2.appendChild(imagen2);

  para.appendChild(text);
  para.appendChild(text2);
  para.appendChild(text3);
  para.appendChild(text4);
  para.appendChild(text5);
  para.appendChild(text6);

  para.appendChild(btn);
  para.appendChild(btn2);
  
//add content in dom.
  const element = document.getElementById("ticket-receiver");
  element.appendChild(para);
  element.insertBefore(para, null);

  //const child = document.getElementById("p1");
  //element.insertBefore(para,child);




}