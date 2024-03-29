let dd = document.querySelector('#day');
let hh = document.querySelector('#hour');
let mm = document.querySelector('#minute');
let ss = document.querySelector('#second');

let input = document.querySelector('input[type="datetime-local"]');

let startBtn = document.querySelector('#start');
let resetBtn = document.querySelector('#reset');

let countDown; 
let timeCount = function(val){
    let eventTime = new Date(val).getTime();
    let curntTime = Date.now();

    let totalTime = (eventTime - curntTime) / 1000;

    let dayConst = 86400;
    let hourConst = 3600;
    let minuteConst = 60;
    
    let days = Math.floor(totalTime / dayConst);
    totalTime = totalTime % dayConst;

    let hours = Math.floor(totalTime / hourConst);
    totalTime = totalTime % hourConst;

    let minute = Math.floor(totalTime / minuteConst);
    totalTime = totalTime % minuteConst;

    let second = Math.floor(totalTime);

    if(days < 10){
        days = '0' + days;
    }

    if(hours < 10){
        hours = '0' + hours;
    }

    if(minute < 10){
        minute = '0' + minute;
    }

    if(second < 10){
        second = '0' + second;
    }

    if(totalTime < 0){
        clearInterval(countDown);
    }

    dd.innerHTML = days;
    hh.innerHTML = hours;
    mm.innerHTML = minute;
    ss.innerHTML = second;
}
startBtn.onclick = () => {
    let val = input.value;

    if (val !== ''){
        countDown = setInterval(timeCount, 1000, val);
        resetBtn.removeAttribute('disabled');
    }
}
resetBtn.onclick = () => {
    clearInterval(countDown);
    resetBtn.setAttribute('disabled', 'true');

    input.value ='';

    dd.innerHTML = '00';
    hh.innerHTML = '00';
    mm.innerHTML = '00';
    ss.innerHTML = '00';
}