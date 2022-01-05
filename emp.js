
        
        var modal = document.getElementById('id01');
        var modal1 = document.getElementById('id02');
                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";}
                    else if(event.target == modal1){
                        modal1.style.display = "none";
                    }
                    
                };
        $('.details').on("click",function(){
              $(this).parent().parent().next().toggle();
        });
      
