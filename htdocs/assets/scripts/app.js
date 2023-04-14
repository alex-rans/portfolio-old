const $ = require('jquery');
require('bootstrap');

import '../styles/app.scss';

const bars = ['ticTac', 'wiggle', 'leaf', 'bars']
$('.bar').each(function (){
    const item = bars[Math.floor(Math.random()*bars.length)];
    $(this).addClass(item)
})
$(document).ready(function(){

    $('#toggleMenu .list').click(function(){
        $('#sidebar-menu li span').animate({'opacity':1, 'margin-left':'0px'});
        // $('#sidebar-menu li').removeClass('text-center');
        $('#sidebar-menu').toggleClass('animate');
        $('#toggleMenu .list').fadeOut();
        $('#toggleMenu .thumbs').fadeIn();

    });

    $('#toggleMenu .thumbs').click(function(){
        $('#sidebar-menu li span').css({'opacity': 0, 'margin-left': "10px"});
        // $('#sidebar-menu li').addClass('text-center');
        $('#sidebar-menu').toggleClass('animate');
        $('#toggleMenu .thumbs').fadeOut();
        $('#toggleMenu .list').fadeIn();

    });

    $("#sidebar-menu li").click(function(){
        $("#sidebar-menu li").not(this).removeClass("selected");
        $(this).toggleClass("selected");
    });

    $('#drop-select').click(function(){
        $('#dropdown-list').toggleClass('animate');
    });

    $('#dropdown-list li').click(function(){$('#dropdown-list').removeClass('animate');});

});