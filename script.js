


  if (window.innerWidth > 921){
    var x = document.getElementById("bar-lat");
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
  
    
  } 
function openForm() {

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

function addNewTicket(){
//Primer div que pinta el cuadro.
  const para = document.createElement("div");
  para.setAttribute("class", "diseno-cuadro");
  para.setAttribute("id", "cuadro-ticket");

//div de contenido.
  const text = document.createElement("div");
  text.setAttribute("class", "diseno-status");
  const node = document.createTextNode("+");
  text.appendChild(node);

  const text2 = document.createElement("div");
  text2.setAttribute("class", "diseno-texto");
  text2.setAttribute("id", "fechass");
  
  //const nodo = document.getElementById("fechass");
  // nodo.innerHTML = node2;

  const textS = document.createElement("span");
  textS.innerHTML = document.getElementById("fecha1").value;
  text2.appendChild(textS);

  const text3 = document.createElement("div");
  text3.setAttribute("class", "diseno-texto");
  
  const textS2 = document.createElement("span");
  textS2.innerHTML = document.getElementById("salida").value;
  
  text3.appendChild(textS2);

  const text4 = document.createElement("div");
  text4.setAttribute("class", "diseno-texto");
  const node4 = document.createTextNode("12346666 ");
  text4.appendChild(node4);

  const text5 = document.createElement("div");
  text5.setAttribute("class", "diseno-texto");
  

  const textS3 = document.createElement("span");
  textS3.setAttribute("id", "cliente-list");
  textS3.innerHTML = document.getElementById("client1").value;
 
  var clienteR = document.getElementById("cliente-rec");
  clienteR.innerHTML = document.getElementById("client1").value;
  //const node5 = document.getElementById("client1").value;
  text5.appendChild(textS3);

  const text6 = document.createElement("div");
  text6.setAttribute("class", "diseno-texto");
  const textS4 = document.createElement("span");
  textS4.innerHTML = document.getElementById("vessel1").value;
  //const node6 = document.getElementById("vessel1").value;
  text6.appendChild(textS4);

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
  element.insertBefore(para, para);
  
  //const child = document.getElementById("p1");
  //element.insertBefore(para,child);




}