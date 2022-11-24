console.log("azertyuiop")
let theme;
let diff;
let jeuselect;
function ChangeText1(){
    document.getElementById("a").innerHTML="jeux vidéos";
    theme = "jeux";
}
function ChangeText2(){
    document.getElementById("a").innerHTML="animaux";
    theme = "animaux";
}
function ChangeText3(){
    document.getElementById("a").innerHTML="NASA";
    theme = "nasa";
}
function ChangeText4(){
    document.getElementById("b").innerHTML="baby";
    diff = "baby";
}
function ChangeText5(){
    document.getElementById("b").innerHTML="human";
    diff = "human";
}
function ChangeText6(){
    document.getElementById("b").innerHTML="god";
    diff = "god";
}
function jeuxchoisis(){
    if (theme == "jeux"){
        if (diff == "baby"){
            jeuselect = "../page/jeuxbaby.php"
            return jeuselect;
        }
        if(diff =="human"){
            jeuselect = "../page/jeuxhuman.php"
            return jeuselect;
        }
        if(diff =="god"){
            jeuselect = "../page/jeuxgod.php"
            return jeuselect;
        }
    }
    if (theme == "animaux"){
        if(diff == "baby"){
            jeuselect = "../page/animauxbaby.php"
            return jeuselect;
        }
        if(diff == "human"){
            jeuselect = "../page/animauxhuman.php"
            return jeuselect;
        }
        if(diff == "god"){
            jeuselect = "../page/animauxgod.php"
            return jeuselect;
        }
    }
    if (theme == "nasa"){
        if(diff == "baby"){
            jeuselect = "../page/nasababy.php"
            return jeuselect;
        }
        if(diff == "human"){
            jeuselect = "../page/nasahuman.php"
            return jeuselect;
        }
        if(diff == "god"){
            jeuselect = "../page/nasagod.php"
            return jeuselect;
        }
    }
    else{
        jeuselect = "../page/choixjeu.php"
        return jeuselect;
    }
}
