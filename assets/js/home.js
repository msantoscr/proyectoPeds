(function(){
    "use strict";

    peds = peds ? peds : {};
	peds.home = peds.home ? peds.home : {};

    peds.home.elements = {
        $card1: $(".card-course1"),
        $card2: $(".card-course2"),
        $card3: $(".card-course3"),
        $card4: $(".card-course4"),
        $card5: $(".card-course5")

    };

    peds.home.uris = {
        uriHome: `${peds.base.url}home`,
        uricurso1: `${peds.base.url}bootcamp1`,
        uricurso2: `${peds.base.url}bootcamp2`,
        uricurso3: `${peds.base.url}bootcamp3`,
        uricurso4: `${peds.base.url}bootcamp4`,
        uricurso5: `${peds.base.url}bootcamp5`
    };

    peds.home.elements.$card1.on("click", function(){
        redirectView(1);
    });
    peds.home.elements.$card2.on("click", function(){
        redirectView(2);

    });
    peds.home.elements.$card3.on("click", function(){
        redirectView(3);

    });
    peds.home.elements.$card4.on("click", function(){
        redirectView(4);

    });
    peds.home.elements.$card5.on("click", function(){
        redirectView(5);
    });

    function redirectView(bootcamp) {
        switch (bootcamp) {
            case 1:
                window.location.replace(peds.home.uris.uricurso1);
                break;
            case 2:
                window.location.replace(peds.home.uris.uricurso2);
                break;
            case 3:
                window.location.replace(peds.home.uris.uricurso3);
                break;
            case 4:
                window.location.replace(peds.home.uris.uricurso4);
            break;
            case 5:
                window.location.replace(peds.home.uris.uricurso5);
            break;
        
            default:
                window.location.replace(peds.home.uris.uriHome);
                break;
        }
    };

}());