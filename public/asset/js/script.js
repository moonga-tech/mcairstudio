/* import sweetalert from 'sweetalert'; */

$(document).ready(function() {
    $('.dropdown-li').mouseover(function() {
        $('.dropdown-menu-services').toggle(200);
    });
    $('.dropdown-li-projects').mouseover(() => {
        $('.dropdown-menu-projects').toggle(300);
    })
});

