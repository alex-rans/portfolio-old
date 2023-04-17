const $ = require('jquery');
require('bootstrap');

import '../styles/app.scss';

const bars = ['ticTac', 'wiggle', 'leaf', 'bars']
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

        // $('#sidebar-menu li span').toggleClass('toggle');
        if(!open){
            open = true
            // $('#sidebar-menu li i').css('width', 'auto')
            // $('#sidebar-menu li i').css('width', 'auto').css('margin-left', '17px').css('padding-right', '1rem');
            $('#sidebar-menu li span').animate({'opacity':1, 'margin-left':'0px'});
        }
        else {
            open = false

            // $('#sidebar-menu li i').css('width', '40px')
            // $('#sidebar-menu li i').css('width', '100%').css('margin-left', '0').css('padding-right', '0');
            $('#sidebar-menu li span').css({'opacity': 0, 'margin-left': "10px"});
        }
    });

});