const $ = require('jquery');
require('bootstrap');

import '../styles/app.scss';

const bars = ['ticTac', 'wiggle', 'leaf', 'bars']
$('.bar').each(function (){
    const item = bars[Math.floor(Math.random()*bars.length)];
    $(this).addClass(item)
})