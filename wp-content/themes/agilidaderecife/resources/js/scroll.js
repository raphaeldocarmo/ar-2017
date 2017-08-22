$('.shiftnav-target').on(click, function(elemento) {
    var elementoSelecionado = $(this).className();
    console.log(elemento);
    console.log(elementoSelecionado);
});
    $(window).scroll(function(){
        var top=$(window).scrollTop();
        if(top > 10){
            $(".my-navbar").stop().animate({height: '50px'}, "slow");
        }else{
            $(".my-navbar").stop().animate({height: '100px'}, "slow");
        }
    });