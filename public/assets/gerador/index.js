function exibir() {

    var texto1 = document.getElementById("texto1").value;
    var texto2 = document.getElementById("texto2").value;

    var convite = document.getElementById("convites").value;
    
    

    if (convite == 1){

    
    var c = document.getElementById("myCanvas");
    var ctx = c.getContext("2d");
    var img = document.getElementById("convite1");
    
    ctx.drawImage(img, 0, 0);
    ctx.font = "400 28px Pacifico";

    ctx.fillStyle = 'white';

    ctx.fillText(texto1,70,90);

    ctx.fillText(texto2,10,360);
    }
    
    else if (convite == 2) {

    var c = document.getElementById("myCanvas");
    var ctx = c.getContext("2d");
    var img = document.getElementById("convite2");
    
    ctx.drawImage(img, 0, 0);
    ctx.font = "400 30px Courgette";

    ctx.fillStyle = '#800984';

    ctx.fillText(texto1,150,70);

    ctx.fillText(texto2,75,290);




    }

}
