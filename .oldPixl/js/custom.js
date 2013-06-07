$(document).ready(function(){    
    $("#calculatePrice, #blocks, #range").on('change click', function(){
        var quantity = Math.ceil($("#blocks").val());
        var range = $("#range").val() * 16;
        
        if(quantity <= 0){
            quantity = 0;
            $("#blocks").val(0);
        }
        
        var pixls = quantity * 16; 
       
        if(pixls >= 78961){
            quantity = 78961;
            pixls = 1263376;
        }
        
        var total = (quantity * range);
        
        if(total <= 0) total = "$0.00";
           
        $("#blocks").val(quantity);
        $("#price").val(total);
        $("#pixls").val(pixls + " square pixels.");
    })
});
