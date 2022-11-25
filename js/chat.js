const chatHead = document.querySelector(".chatHead");
const chatBody = document.querySelector(".chatBody");
const chatFeet = document.querySelector(".chatFeet");
const chatBox = document.querySelector(".chatBox2");
const button = document.querySelector(".chatButton2");

chatOpen = 0;

function chatAnimation(){   
    if(chatOpen == 0){
        console.log("clicked");
        chatBox.classList.add("apparitionAnim");
        button.classList.add("chatbAnim");
        chatBox.classList.remove("apparitionAnim2");
        button.classList.remove("chatbAnim2");
        chatOpen = 1;
    } else {
        console.log("clicked");
        chatBox.classList.remove("apparitionAnim");
        button.classList.remove("chatbAnim");
        chatBox.classList.add("apparitionAnim2");
        button.classList.add("chatbAnim2");
        chatOpen = 0;
    }
    
}

requeteAjax.onload = function(){  
     const resultat = JSON.parse(requeteAjax.responseText);
}