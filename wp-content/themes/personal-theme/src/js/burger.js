const burgerSvg = document.getElementById('burger__svg');
const socialMedia = document.getElementsByClassName('social__media')[0];

function burger(){
    var burger = document.getElementById('burger');
    var links = document.getElementById('links');
    var quit = document.getElementById('quit');
    burger.style.padding = '16px 16px 200vw 200vw';
    links.style.display = 'flex';
    quit.style.display = 'inline';
    burger.style.borderRadius = '0% 0% 0% 1000%';
    burgerSvg.style.visibility = "hidden";
    socialMedia.style.visibility = "hidden";
}

function quit(){
    var burger = document.getElementById('burger');
    var links = document.getElementById('links');
    var quit = document.getElementById('quit');
    burger.style.padding = '16px';
    links.style.display = 'none';
    quit.style.display = 'none';
    burger.style.borderRadius = '0% 0% 0% 0%';
    burgerSvg.style.visibility = "visible";
    socialMedia.style.visibility = "visible";
}