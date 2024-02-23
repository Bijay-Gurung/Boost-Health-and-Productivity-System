// For Goals
function myGoals(){
    alert("Here, I am go to set my Goals");
}

// To change Text
let text = document.getElementById("changeText");
let textList = ["Good Morning","Welcome Back"];
let i = 0;

function changingText(){
    text.textContent = textList[i];
    i= (i+1)%textList.length;
}

changingText();
setInterval(changingText,2000);

// To get Day, Date and Time
//for Day
let day = document.getElementById("day");
let date = document.getElementById("date");
let time = document.getElementById("time");
let session = document.getElementById("session");

let Day = new Date().getDay();
switch(Day){
    case 0:
        day.innerHTML = "Sunday";
        break;
    case 1:
        day.innerHTML = "Monday";
        break;
    case 2:
        day.innerHTML = "Tuesday";
        break;
    case 3:
        day.innerHTML = "Wednesday";
        break;
    case 4:
        day.innerHTML = "Thursday";
        break;
    case 5:
        day.innerHTML = "Friday";
        break;
    case 6:
        day.innerHTML = "Saturday";
        break;
}

// for Date
let month = new Date().getMonth();
let dayOfMonth = new Date().getDate();
let year = new Date().getFullYear();
date.innerHTML = month+1 +'/'+dayOfMonth+'/'+year;

// for Time
function displayTime(){
    let hrs = new Date().getHours();
    let min = new Date().getMinutes();
    let sec = new Date().getSeconds();

    if(hrs>12){
        hrs = hrs-12;
        session.innerHTML = "Pm";
    }else{
        session.innerHTML = "Am";
    }
    if(hrs==0){
        hrs = 12;
    }
    time.innerHTML = hrs+':'+min+':'+sec+' '+session.innerHTML;
}
setInterval(displayTime,10);

