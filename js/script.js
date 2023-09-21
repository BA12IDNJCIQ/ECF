// create a popup overlay
let gallery = document.querySelector(".col button");

let buttonNumber = [1, 2, 3, 4, 5, 6, 7, 8];

let i=0;

for(i=0 ; i<9 ; i++){
    let popup = document.querySelector("#popup-" + buttonNumber[i]);
    // console.log(popup)
    let btn = document.querySelector("#open-" + buttonNumber[i]);
    btn.addEventListener("click" , function() { 
      // Create Overlay element
      let overlay = document.createElement("div");
    
      // add class to overlay
      overlay.className = 'popup-overlay';
    
      // Append Overlay to the body
      document.body.appendChild(overlay);
    
      // Append Overlay to the body
      document.body.appendChild(overlay);
    
      // show the popup box 
      popup.style.display = "block";
    
    
    

      
    
        });
    
    }
        // Remove overlay element
       // Remove popup box 
      
      
      let close = document.querySelectorAll('button .close');
    
      close.addEventListener("click", (e) =>{
      overlay.style.display = "none";
      popup.style.display = "none";
      });

      // END POPUP BOX

      



















