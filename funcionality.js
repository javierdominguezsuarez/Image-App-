
$(document).ready(function() {
    window.myAjax=function myAjax(id,userId,imageId) {
    
        $.ajax({
        
             type: "POST",
             url: 'ajax.php',
             data:{action:'likeFuntionality',id:id,userId:userId,imageId:imageId},
             success:function(html) {
                const boton= document.getElementById("heart-image--"+id);
                if (html == "like"){
                    boton.style.fill="#F3950D"; 
                    console.log("like");
                    
                }else  {
                    boton.style.fill="grey"; 
                    console.log("unlike");

                } 
             }
        });
    }

});