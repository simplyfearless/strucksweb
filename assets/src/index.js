
require('normalize.css/normalize.css');
require('./styles/index.scss');

document.addEventListener("DOMContentLoaded", () => {

    const pluginsTriggerElement = document.getElementById('plugins-trigger');
    const pluginsElement = document.getElementById('plugins');

    const pluginsVisibleClass = "splash-overview-plugins__list--visible";

    pluginsTriggerElement.onclick = () => {
        pluginsElement.classList.toggle(pluginsVisibleClass);
    }
});
$('.tabs').tabslet({
    mouseevent: 'click',
    attribute: 'href',
    animation: true
  });
var swiper = new Swiper('.testimonialSlider', {
    pagination: {
        el: '.swiper-pagination',
    },
});