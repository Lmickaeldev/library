(function()
{
const wheel = document.querySelector('.wheel');
const startButton = document.querySelector('.button')
const display = document.querySelector('.display');


let deg = 0;
let zoneSize = 14.4; //deg

const symbolSegments = {
    1: "1", 2: "5", 3: "1",4: "3",5: "1",6: "20",7: "1",8: "3",9: "1",10: "5",11: "1",12: "3",13: "1",14: "10",15: "1",16: "3",17: "5", 18: "1", 19: "5",20: "1",21: "3",22: "1",23: "10",24: "1",25: "3",
}

const handleWin = (actualDeg) => {
    const winningsymbolNR = Math.ceil(actualDeg / zoneSize);
    display.innerHTML = symbolSegments[winningsymbolNR];

}

startButton.addEventListener('click', ()=> {
display.innerHTML = "-";
startButton.style.pointerEvents = 'none';
deg = Math.floor(5000 + Math.random() * 5000);
wheel.style.transition = 'all 10s ease-out';
wheel.style.transform = `rotate(${deg}deg)`;
wheel.classList.add('blur');

});


wheel.addEventListener('transitionend' , () => {
wheel.classList.remove('blur');
startButton.style.pointerEvents = 'auto';
wheel.style.transition = 'none';
const actualDeg = deg % 360;
wheel.style.transform = `rotate(${actualDeg}deg)`;
handleWin(actualDeg);

})

})();