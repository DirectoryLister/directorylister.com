import 'alpinejs';

let BeerSlider = require('beerslider');

window.addEventListener('load', function() {
    new BeerSlider(document.getElementById('beer-slider'));
});
