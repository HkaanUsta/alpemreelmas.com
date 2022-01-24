var header = $(".header")
$(window).scroll(function() {
    console.log($(this).scrollTop())
    if( $(this).scrollTop() > 120){
        $(".header").removeClass("container")
        $("header").addClass("header-fixed")
        $("nav").css("height","calc(100vh - 80px)")
        $("nav").css("top","80px")
    }else if($(this).scrollTop() < 120){
        $(".header").addClass("container")
        $("nav").css("height","calc(100vh - 150px)")
        $("nav").css("top","150px")
        $("header").removeClass("header-fixed")
    }
})

$("#hamburger_open").click(()=>{
    $("#hamburger_open").css("display","none")
    $("#navbar_close").css("display","flex")
    $("#container-content").css("display","none")

    $("nav").addClass("active-nav")

})

$("#navbar_close").click(()=>{
    $("#hamburger_open").css("display","flex")
    $("#navbar_close").css("display","none")
    $("#container-content").css("display","block")

    $("nav").removeClass("active-nav")
    
})


// console.log($( document ).width())

// if($( document ).width() > 800){
//     $("#hamburger_open").css("display","none")
//     $("#navbar_close").css("display","none")
// }else if($( document ).width() < 800){
//     $("#hamburger_open").css("display","flex")
//     $("#navbar_close").css("display","none")
// }