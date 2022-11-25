const chatHead = document.querySelector(".chatHead");
const chatBody = document.querySelector(".chatBody");
const chatFeet = document.querySelector(".chatFeet");
const chatBox = document.querySelector(".chatBox2");
const button = document.querySelector(".chatButton2");

chatOpen = 0;

button.addEventListener("click", function chatAnimation(){   
        console.log("clicked");
        chatBox.classList.add("apparitionAnim");
        button.classList.add("chatbAnim");
        chatBox.classList.remove("apparitionAnim2");
        button.classList.remove("chatbAnim2"); 
})

chatHead.addEventListener("click", function chatAnimation2(){
    console.log("clicked");
    chatBox.classList.remove("apparitionAnim");
    button.classList.remove("chatbAnim");
    chatBox.classList.add("apparitionAnim2");
    button.classList.add("chatbAnim2");
})


requeteAjax.onload = function(){  
     const resultat = JSON.parse(requeteAjax.responseText);
}