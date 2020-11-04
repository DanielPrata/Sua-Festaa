function exibir() {

    var texto1 = document.getElementById("texto1").value;
    var texto2 = document.getElementById("texto2").value;
    var texto3 = document.getElementById("texto3").value;

    var convite = document.getElementById("convites").value;
    
    

    if (convite == 1){

    
    var c = document.getElementById("myCanvas");
    var ctx = c.getContext("2d");
    var img = document.getElementById("convite1");
    
    ctx.drawImage(img, 0, 0);
    ctx.font = "400 30px Roboto";

    ctx.fillStyle = 'white';

    ctx.fillText(texto1,50,233);

    ctx.fillText(texto2,127,275);

    ctx.fillText(texto3,10,360);
    }
    
    else if (convite == 2) {

    var c = document.getElementById("myCanvas");
    var ctx = c.getContext("2d");
    var img = document.getElementById("convite2");
    
    ctx.drawImage(img, 0, 0);
    ctx.font = "400 30px Roboto";

    ctx.fillStyle = 'white';

    ctx.fillText(texto1,150,170);

    ctx.fillText(texto2,200,290);

    ctx.fillText(texto3,10,330);



    }

    else if (convite == 3) {

        var c = document.getElementById("myCanvas");
    var ctx = c.getContext("2d");
    var img = document.getElementById("convite3");
    
    ctx.drawImage(img, 0, 0);
    ctx.font = "400 30px Roboto";

    ctx.fillStyle = 'black';

    ctx.fillText(texto1,90,260);

    

    ctx.fillText(texto3,10,360);
    }

}
