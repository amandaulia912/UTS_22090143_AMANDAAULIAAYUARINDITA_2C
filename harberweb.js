$(document).ready(function(){
    $("#btnsearch").click(function(e){
        var txtInput = $("#srchInv").val();
        $("#infoinvaccr").html(`Obat : ${txtInput}`);
        $.ajax({
            type: "POST",
            url: "./assets/scripts/ajax/getcurl.php",
            data: "",
            success: (response) => {
                $("#infoinvaccr").html(`<br/>Response<br/> ${response}`);
            }
        });
    });
});