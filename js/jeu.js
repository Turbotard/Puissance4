const divresult = document.querySelector("#resultat");

var tab = [
    [1,0,0,0,0,0],
    [0,0,0,0,0,0],
    [0,0,0,0,0,0],
    [0,0,0,0,0,1],
    [0,0,0,0,0,0],
    [0,0,0,0,0,0]
];

affichertab();

function affichertab(){
    var txt ="";
    for(var i =0; i<tab.length; i++){
        txt += "<div>";
        for (var j=0; j < tab[i].length;j++){
            if (tab[i][j] === 0){
                txt += "<button class='btn btn-primary m-2' style='widht: 200px;height:100px'>afficher</button>";
            }else{
                txt += "<img src ='"+getimage(tab[i][j])+"'  style='widht: 200px;height:100px' class='m-2'>";
            }
        }
    }   txt+= "</div>"
    divresult.innerHTML =txt;
}
function getimage(valeur){
    var imgtxt ="../image/";
    switch(valeur){
        case 1: imgtxt +="Dabeur.png"
        break;
        case 2: imgtxt +="mail.png"
        break;
        case 3:
        break;
        case 4:
        break;
        case 5:
        break;
        case 6:
        break;
        case 7:
        break;
        case 8:
        break;
        case 9:
        break;
        case 10:
        break;
        case 11:
        break;
        case 12:
        break;
        case 13:
        break;
        case 14:
        break;
        case 15:
        break;
        case 16:
        break;
        case 17:
        break;
        case 18:
        break;
        default : console.log("connais pas");
    }
    return  imgtxt;
}