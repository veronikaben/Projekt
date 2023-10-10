$(document).ready(function() {
    $('#searchPanel').keyup(function() {
        var searchText = $(this).val().toLowerCase();

        $.ajax({
            url: window.location.pathname, // Use window.location.pathname to get the current URL
            method: 'GET',
            dataType: 'html',

            success: function(data) {
                $('#test header').each(function() {
                    var h3Element = $(this).find('h3');
                    var productName = h3Element.text().toLowerCase();
                    var parentSection = $(this);

                    if (productName.indexOf(searchText) === -1) {
                        parentSection.hide();
                    } else {
                        parentSection.show();
                    }
                });
            },
            error: function(xhr, status, error) {
                console.log("Error: " + error);
            }
        });
    });
});