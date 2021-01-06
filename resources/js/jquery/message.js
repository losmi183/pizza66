$(document).ready(function(){ 

    const alert = $('.alert-flash');

    alert.show('fast');

    setTimeout(function(){ 
        alert.hide('slow');
    }, 2000);

});