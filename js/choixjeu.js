console.log("azertyuiop")
let theme;
let diff;
let jeuselect;
function ChangeText1(){
    document.getElementById("a").innerHTML="jeux vidéos";
    theme = "jeux";
    console.log(theme);
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
    console.log(diff);
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
    }
}
