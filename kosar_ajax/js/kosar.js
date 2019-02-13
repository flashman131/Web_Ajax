$(document).ready(function(){
   jatekostOlvas();
   $(document).on("change", "#jatekos",function(){
       let mez=$(this).val();
       
       $.post("php/adatok.php",
       {"mez": mez},
       function(valasz){
           $("#jatekosAdatai").html(valasz);
       }
       );
   });
   $(document).on("change", "#jatekos",function(){
       let mez=$(this).val();
       
       $.post("php/jegyzo.php",
       {"mez": mez},
       function(valasz){
           $("#jegyzokonyv").html(valasz);
       }
       );
   });
});



function jatekostOlvas(){
    $.get("php/jatekos.php", 
            function(valasz, status){
                $("#jatekosok").html(valasz);
            }
    );
}        
  
