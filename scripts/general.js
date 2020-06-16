// Create ready function with jQuery
$ (document).ready(function () {
//Information about the location should be hidden first
    $('.travel-tips-info').hide();
// Create function to show the location info depending on which location they click
//it should disappear if they click it again
    $('img').click(function() {
        $(this).next('.travel-tips-info').slideToggle(2000);
    });

}); // End of ready function



