const divresult = document.querySelector("#resultat");

var tab = [
    [0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0],    
    [0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0]
];
/*
var tabresult= [
    [1,1,0,0,0,0],
    [0,0,0,0,0,0],
    [0,0,0,0,0,0],
    [0,0,0,0,2,2],
    [0,0,0,0,0,0],
    [0,0,0,0,0,0]
]  tab == tabresult -> victoire !
*/
var tabresult = generaterandomresult();
var oldselection = [];
var nbaffich = 0;
var ready = true;
let compteur = 0;
let fin = false;
affichertab();

function affichertab(){
    var txt ="";
    for(var i =0; i<tab.length; i++){
        txt += "<div>";
        for (var j=0; j < tab[i].length;j++){
            if (tab[i][j] === 0){
                txt += "<button class='btn btn-primary m-5' style='width: 150px;height:150px;' onClick = 'verif(\""+i+"-"+j+"\")'>afficher</button>";
            }else{
                txt += "<img src ='"+getimage(tab[i][j])+"'  style='width: 150px;height:150px' class='m-5'>";
            }
        }
    }   txt+= "</div>"
    divresult.innerHTML =txt;
}
function getimage(valeur){
    var imgtxt ="../image/animaux/";
    switch(valeur){
        case 1: imgtxt +="baleine.jpg"
        break;
        case 2: imgtxt +="biche.jpg"
        break;
        case 3: imgtxt +="cacatoes.jpg"
        break;
        case 4: imgtxt +="camaleon.jpg"
        break;
        case 5: imgtxt +="canard.jpg"
        break;
        case 6: imgtxt +="capybara.jpg"
        break;
        case 7: imgtxt +="cerf.jpg"
        break;
        case 8: imgtxt +="chat.jpg"
        break;
        case 9: imgtxt +="cheval.jpg"
        break;
        case 10: imgtxt +="chevre.jpg"
        break;
        case 11: imgtxt +="chien.jpg"
        break;
        case 12: imgtxt +="cochon.jpg"
        break;
        case 13: imgtxt +="ecureuil.jpg"
        break;
        case 14: imgtxt +="elephant.jpg"
        break;
        case 15: imgtxt +="girafe.jpg"
        break;
        case 16: imgtxt +="gnou.jpg"
        break;
        case 17: imgtxt +="hamster.jpg"
        break;
        case 18: imgtxt +="herisson.jpeg"
        break;
        case 19 : imgtxt +="hippopota.jpg"
        break;
        case 20 : imgtxt +="hyene.jpg"
        break;
        case 21: imgtxt +="lama.jpg"
        break;
        case 22: imgtxt +="lamantin.jpg"
        break;
        case 23: imgtxt +="lapin.jpg"
        break;
        case 24: imgtxt +="lion.jpg"
        break;
        case 25: imgtxt +="loup.jpg"
        break;
        case 26: imgtxt +="mamouth.jpg"
        break;
        case 27: imgtxt +="morue.jpeg"
        break;
        case 28: imgtxt +="mouton.jpg"
        break;
        case 29: imgtxt +="mozazor.jpg"
        break;
        case 30: imgtxt +="oizo.jpg"
        break;
        case 31: imgtxt +="ornythorinque.jpg"
        break;
        case 32: imgtxt +="orque.jpg"
        break;
        case 33: imgtxt +="panda.jpg"
        break;
        case 34: imgtxt +="pandaroux.jpg"
        break;
        case 35: imgtxt +="paresseux.jpg"
        break;
        case 36: imgtxt +="patrick.jpg"
        break;
        case 37: imgtxt +="perroquet.jpg"
        break;
        case 38: imgtxt +="pieuvre.jpg"
        break;
        case 39 : imgtxt +="pingolain.jpg"
        break;
        case 40 : imgtxt +="pingouin.jpg"
        break;
        case 41: imgtxt +="pioupiou.jpg"
        break;
        case 42: imgtxt +="rhino.jpg"
        break;
        case 43: imgtxt +="rocket.jpg"
        break;
        case 44: imgtxt +="singe.jpg"
        break;
        case 45: imgtxt +="tigre.jpg"
        break;
        case 46: imgtxt +="tortue.jpg"
        break;
        case 47: imgtxt +="trex.jpg"
        break;
        case 48: imgtxt +="verdeterre.jpg"
        break;
        case 49: imgtxt +="wakandaforever.jpg"
        break;
        case 50: imgtxt +="zebrane.jpg"
        break;
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
                if (tab[ligne][colonne]=== tabresult[oldselection[0]][oldselection[1]]){
                    compteur +=1;
                    console.log(compteur);
                    if (compteur === 8){
                        fin = true;
                        veriffin();
                    }
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
    var nbimagepos = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]
    for (var i =0;i<10;i++){
        var ligne = [];
        for (var j =0;j<10;j++){
            var fin = false;
            while(!fin){
                var randomimage = Math.floor(Math.random()*50)
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
var startTime = 0;
var start = 0;
var end = 0;
var diff = 0;
var timerID = 0;

function chrono(){
    end = new Date();
    diff = end - start;
    diff = new Date(diff);
    var msec = diff.getMilliseconds();
    var sec = diff.getSeconds();
    var min = diff.getMinutes();
    if (min < 10){
        min = "0" + min;
    }
    if (sec < 10){
        sec = "0" + sec;
    }
    if(msec < 10){
        msec = "0" +msec;
    }
    else if(msec < 100){
        msec = "0" +msec;
    }
    document.getElementById("chrono").innerHTML = min + ":" + sec + ":" + msec;
    timerID = setTimeout("chrono()", 10);
}
var cpt = 0;
function chronoStart(){
    if (cpt==0){
        cpt=1;
        start = new Date()
        chrono();
    }
        
}

function chronoStop(){
        clearTimeout(timerID);
    
}

function conditionfin(){
    if (tab== tabresult){
        chronoStop();
        return true;
    }
    else {
        return false;
    }
}
function veriffin(){
    if (fin== true){
        chronoStop();
        alert('La partie est terminée, vous avez gagné!')
    }
    
}