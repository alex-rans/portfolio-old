const $ = require('jquery');
require('bootstrap');

import '../styles/app.scss';

const bars = ['ticTac', 'wiggle', 'leaf', 'bars']
const tilts = ['tilt-l-2', 'tilt-l-5', 'tilt-r-2', 'tilt-r-5']
$('.bar').each(function (){
    const item = bars[Math.floor(Math.random()*bars.length)];
    $(this).addClass(item)
})
$(document).ready(function(){
    let open = false;

    $('#hamburger-icon').click(function(){
        $(this).toggleClass('active');
        $('#sidebar-menu').toggleClass('animate');
        $('#sidebar-menu li span').toggleClass('d-none')
        if(!open){
            open = true
            $('#sidebar-menu li span').animate({'opacity':1, 'margin-left':'0px'});
        }
        else {
            open = false
            $('#sidebar-menu li span').css({'opacity': 0, 'margin-left': "10px"});
        }
    });

    $('.polaroid').each(function (){
        const tilt = tilts[Math.floor(Math.random()*bars.length)];
        $(this).addClass(tilt);
        if ($(this).attr('id')){
            $(this).click(function (){
                const url = $(this).attr('id')
                document.location.href = '/projects/' + url
            })
        }
    })
});