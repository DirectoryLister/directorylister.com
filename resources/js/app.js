import Alpine from 'alpinejs';
import BeerSlider from 'beerslider';

window.addEventListener('load', function() {
    new BeerSlider(document.getElementById('beer-slider'));
});

Alpine.start();
