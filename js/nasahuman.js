const divresult = document.querySelector("#resultat");

var tab = [
    [0,0,0,0,0,0],
    [0,0,0,0,0,0],
    [0,0,0,0,0,0],
    [0,0,0,0,0,0],
    [0,0,0,0,0,0],
    [0,0,0,0,0,0]
];
/*
var tabresult= [
    [1,1,0,0,0,0],
    [0,0,0,0,0,0],
    [0,0,0,0,0,0],
    [0,0,0,0,2,2],
    [0,0,0,0,0,0],
    [0,0,0,0,0,0]
] 
*/
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
                txt += "<button class='btn btn-primary m-1' style='width: 150px;height:150px' onClick = 'verif(\""+i+"-"+j+"\")'><img style='width:150px;height:150px;padding:0%' src=../image/jeux/owerwatch/logooverwatch.png></button>";
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
        case 1: imgtxt +="nasa1.jpg"
        break;
        case 2: imgtxt +="nasa2.jpg"
        break;
        case 3: imgtxt +="nasa3.jpg"
        break;
        case 4: imgtxt +="nasa4.jpg"
        break;
        case 5: imgtxt +="nasa5.jpg"
        break;
        case 6: imgtxt +="nasa6.jpg"
        break;
        case 7: imgtxt +="nasa7.jpg"
        break;
        case 8: imgtxt +="nasa8.jpg"
        break;
        case 9: imgtxt +="nasa9.jpg"
        break;
        case 10: imgtxt +="nasa10.jpg"
        break;
        case 11: imgtxt +="nasa11.jpg"
        break;
        case 12: imgtxt +="nasa12.jpg"
        break;
        case 13: imgtxt +="nasa13.jpg"
        break;
        case 14: imgtxt +="nasa14.jpg"
        break;
        case 15: imgtxt +="nasa15.jpg"
        break;
        case 16: imgtxt +="nasa16.jpg"
        break;
        case 17: imgtxt +="nasa17.jpg"
        break;
        case 18: imgtxt +="nasa18.jpg"
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
    var nbimagepos = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]
    for (var i =0;i<6;i++){
        var ligne = [];
        for (var j =0;j<6;j++){
            var fin = false;
            while(!fin){
                var randomimage = Math.floor(Math.random()*18)
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