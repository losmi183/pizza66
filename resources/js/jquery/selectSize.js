$(document).ready(function(){ 

    $('.select-size').change(function() 
    {
        // this product select input
        var index = $(this).prop('selectedIndex');

        // Default values for size and length
        var size = 'mala';
        var length = 28;

        // Switch based on select options index
        switch (index) {
            case 0:
                size = "mala";
                length = 28;
                break;
            case 1:
                size = "srednja";
                length = 36;
                break;
            case 2:
                size = "velika";                        
                length = 51;
                break;
            default:
                text = "null";
        }

        // Set new value for size and length based on index number
        $(this).siblings('.size').val(size);    
        $(this).siblings('.length').val(length);    
        
    });

});