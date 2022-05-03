$("#form").submit(function(event){
    event.preventDefault(); // Store the data without reload the website
    sendData();
});

function sendData(){
    console.log("Your message has been sent");
    var data = $("#form").serialize();
    console.log(data);
    $.ajax({
        type: "post",
        url: "form.php",
        data: data,
        success: function(text){
            if(text == "success"){
                correct();
            } else {
                phpError(text);
            }
        } 
    })
}

function correct(){
    $("#messageSuccess").removeClass("d-none");
    $("#messageError").addClass("d-none");
}

function phpError(text){
    $("#messageError").removeClass("d-none");
    $("#messageError").html(text);
}
