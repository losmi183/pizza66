$(document).ready(function(){ 
    // Increment / Decrement input with + / -
    $('.next').click(function() {
        var input = $(this).siblings('.value');
        var value = input.val();
        if(value < 100) {  
            value++;
            input.val(value);
        }
    });
    $('.prev').click(function() {
        var input = $(this).siblings('.value');
        var value = input.val();
        if(value > 1) {  
            value--;
            input.val(value);
        }
    });
});