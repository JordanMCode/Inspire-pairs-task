$("#main-logo").click(function() {
    window.location.href = 'index.php?page=pages/landing-page.php';
});

$(".service-card-content").click(function() {
    window.location.href = 'index.php?page=pages/our-services.php';
});





var serviceBlocks = document.querySelectorAll("div[class*='service-block']");
function AppendNotActive(item, index){
    item.className = "container purple-bg flex service-block-" + (index + 1) + " not-active";
}
serviceBlocks.forEach(AppendNotActive);

$(".service-button-1").click(function() {
    serviceBlocks.forEach(AppendNotActive);
    setTimeout(function(){
        $(".service-block-2").css("display", "none");
        $(".service-block-3").css("display", "none");
        $(".service-block-1").css("display", "block");
    }, 800);
    setTimeout(function(){ serviceBlocks[0].className = "container purple-bg flex service-block-1 active"}, 900);
});

$(".service-button-2").click(function() {
    serviceBlocks.forEach(AppendNotActive);
    setTimeout(function(){
        $(".service-block-1").css("display", "none");
        $(".service-block-3").css("display", "none");
        $(".service-block-2").css("display", "block");
    }, 800);
    setTimeout(function(){ serviceBlocks[1].className = "container purple-bg flex service-block-2 active"}, 900);
});

$(".service-button-3").click(function() {
    serviceBlocks.forEach(AppendNotActive);
    setTimeout(function(){
        $(".service-block-1").css("display", "none");
        $(".service-block-2").css("display", "none");
        $(".service-block-3").css("display", "block");
    }, 800);
    setTimeout(function(){ serviceBlocks[2].className = "container purple-bg flex service-block-3 active"}, 900);
});