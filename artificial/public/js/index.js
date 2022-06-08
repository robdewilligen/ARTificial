/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/
/******/
/******/ })()
;
document.getElementById("nav-icon3").addEventListener("click", togglemenu);
document.getElementById("nav-icon3").addEventListener("click", toggleOpenMenu);

document.getElementById("thuisButton").addEventListener("click",toggleThuis);
document.getElementById("dagelijksButton").addEventListener("click",toggleDagelijks);
document.getElementById("alternatiefButton").addEventListener("click",toggleAlternatief);

function togglemenu(){
    var burger = document.getElementById("nav-icon3");
    burger.classList.toggle("open");
}

function toggleOpenMenu(){
    var open = document.getElementById("menuList");
    open.classList.toggle("hidden")
}

function toggleThuis(){
    var thuis = document.getElementById("thuis");
    thuis.classList.toggle("hidden")
}

function toggleDagelijks(){
    var dagelijks = document.getElementById("dagelijks");
    dagelijks.classList.toggle("hidden")
}

function toggleAlternatief(){
    var alternatief = document.getElementById("alternatief");
    alternatief.classList.toggle("hidden")
}

