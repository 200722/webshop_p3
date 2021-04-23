$(document).ready(function() {
    $('.thumb').on({
        'click': function () {
            $('.vergroting').attr('src', $(this).attr('src'));
        }
    })

    
});