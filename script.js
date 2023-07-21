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
          y.style.width = "80%";}
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
          y.style.width = "80%";}
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

