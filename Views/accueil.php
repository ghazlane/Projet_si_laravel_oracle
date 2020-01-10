<div class="hero-text  ">
            <h2>Bienvenue à la cité d'innovation UM5R</h2>
          </div>
          
            <div class="container-fluid">
  
              <div class="w3-content w3-display-container">
              
              <div class="w3-display-container mySlides">
                <img src="s1.jpg" style="width:100%; height: 460px">
                <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
                  Recherche
                </div>
              </div>
             
              <div class="w3-display-container mySlides">
                <img src="s2.jpg" style="width:100% ; height: 460px">
                <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
                  Innovation
                </div>
              </div>
              
              <div class="w3-display-container mySlides">
                <img src="inno3.jpg" style="width:100% ; height: 460px">
                <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
                  Challenge
                </div>
              </div>

              <button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
              <button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>
              </div>
              
              <script>
              var slideIndex = 1;
              showDivs(slideIndex);
              
              function plusDivs(n) {
                showDivs(slideIndex += n);
              }
              
              function showDivs(n) {
                var i;
                var x = document.getElementsByClassName("mySlides");
                if (n > x.length) {slideIndex = 1}
                if (n < 1) {slideIndex = x.length}
                for (i = 0; i < x.length; i++) {
                  x[i].style.display = "none";  
                }
                x[slideIndex-1].style.display = "block";  
              }
              </script>
              
            </div>