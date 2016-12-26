function changeact(param) {

    $("#div1").removeClass("active");
    $("#div2").removeClass("active");
    $("#div3").removeClass("active");
    $("#div"+param+"").addClass("active");

}