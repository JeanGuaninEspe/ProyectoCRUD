
$(document).ready(function(){
    console.log("ready");
}
);


$(document).ready(function(){
    $("#username").keypress(function(event){
        if(event.charCode >= 48 && event.charCode <= 57){
            return false;
        }
    });

});

