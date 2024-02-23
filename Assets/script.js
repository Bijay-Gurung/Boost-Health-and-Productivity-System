function myGoals(){
    alert("Here, I am go to set my Goals");
}

let text = document.getElementById("changeText");
let textList = ["Good Morning","Welcome Back"];
let i = 0;

function changingText(){
    text.textContent = textList[i];
    i= (i+1)%textList.length;
}

changingText();
setInterval(changingText,2000);