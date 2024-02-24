// For Goals
function myGoals(){
    alert("Here, I am go to set my Goals");
}

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

    // To change Text
    let text1 = document.getElementById("change");
    if(hrs>=5 && hrs<=11 && session.innerHTML === "Am"){
        text1.innerHTML = "Good Morning";
    }
    else if(hrs>=0 && hrs<=3 && session.innerHTML === "Pm"){
        text1.innerHTML = "Good Afternoon";
    }
    else if(hrs<=4 && hrs<=7 &&session.innerHTML === "Pm"){
        text1.innerHTML = "Good Evening";
    }
    else if(hrs>=8 && session.innerHTML === "Pm"){
        text1.innerHTML = "Good Night";
    }
}
setInterval(displayTime,2000);
let text1 = document.getElementById("change");
let text2 = document.getElementById("changeText");
let textList1 = ["Welcome Back","Let's Start"];
let textList2 = ["Take a Rest","Play Some Games","Go to sleep"];
let i = 0;
function changingText(){
    if(text1.innerHTML === "Good Night"){
        text2.textContent = textList2[i];
        i = (i+1)%textList2.length;
    }else{
        text2.textContent = textList1[i];
        i= (i+1)%textList1.length;
    }
}
changingText();
setInterval(changingText,3000);