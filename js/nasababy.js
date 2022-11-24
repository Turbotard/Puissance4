const divresult = document.querySelector("#resultat");

var tab = [
    [0,0,0,0],
    [0,0,0,0],
    [0,0,0,0],
    [0,0,0,0]
];

var tabresult = generaterandomresult();
var oldselection = [];
var nbaffich = 0;
var ready = true;

affichertab();

function affichertab(){
    var txt ="";
    for(var i =0; i<tab.length; i++){
        txt += "<div>";
        for (var j=0; j < tab[i].length;j++){
            if (tab[i][j] === 0){
                txt += "<button class='btn btn-primary m-1' style='width: 150px;height:150px;padding:0%' onClick = 'verif(\""+i+"-"+j+"\")'><img style='width:150px;height:150px;padding:0%' src=../image/jeux/valorant/logovalorant.png></button>";
            }else{
                txt += "<img src ='"+getimage(tab[i][j])+"'  style='width: 150px;height:150px' class='m-1'>";
            }
        }
    }   txt+= "</div>"
    divresult.innerHTML =txt;
}
function getimage(valeur){
    var imgtxt ="../image/nasa/";
    switch(valeur){
        case 1: imgtxt +="nasa1.png"
        break;
        case 2: imgtxt +="nasa2.png"
        break;
        case 3: imgtxt +="nasa3.png"
        break;
        case 4: imgtxt +="nasa4.png"
        break;
        case 5: imgtxt +="nasa5.png"
        break;
        case 6: imgtxt +="nasa6.png"
        break;
        case 7: imgtxt +="nasa7.png"
        break;
        case 8: imgtxt +="nasa8.png"
        default : console.log("connais pas");
    }
    return  imgtxt;
}
function verif(element){
    if(ready ===true){

    
        nbaffich++;
        var ligne = element.substr(0,1);
        var colonne = element.substr(2,1)
        tab[ligne][colonne] = tabresult[ligne][colonne];
        affichertab();
        if (nbaffich > 1){
            ready = false;
            setTimeout(() => {
                if (tab[ligne][colonne]!== tabresult[oldselection[0]][oldselection[1]]){
                    tab[ligne][colonne] = 0;
                    tab[oldselection[0]][oldselection[1]] = 0;
                } 
                affichertab();
                ready = true;
                nbaffich=0;
                oldselection = [ligne, colonne];
            }, 600);
            
            
        } else{
            oldselection = [ligne, colonne];
        }
    
    }
}
function generaterandomresult(){
    var tab = [];
    var nbimagepos = [0,0,0,0,0,0,0,0]
    for (var i =0;i<4;i++){
        var ligne = [];
        for (var j =0;j<4;j++){
            var fin = false;
            while(!fin){
                var randomimage = Math.floor(Math.random()*8)
                if (nbimagepos[randomimage]<2){
                    ligne.push(randomimage+1);
                    nbimagepos[randomimage]++;
                    fin=true;
            }
            }
        }
        tab.push(ligne);
    }
    return tab;
}