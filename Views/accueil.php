<div class="hero-text  ">
            <h2>Bienvenue à la cité d'innovation UM5R</h2>
          </div>
          
            <div class="container-fluid">
  
              <div class="w3-content w3-display-container">
              
              <div class="w3-display-container mySlides">
                <img src="css_js/img/im1.jpg" style="width:100%; height: 460px">
                
              </div>
             
              <div class="w3-display-container mySlides">
                <img src="css_js/img/im2.jpg" style="width:100% ; height: 460px">
                
              </div>
              
              <div class="w3-display-container mySlides">
                <img src="css_js/img/im3.jpg" style="width:100% ; height: 460px">
                
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