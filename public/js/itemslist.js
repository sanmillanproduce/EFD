$(document).ready(function() {
    $('input[name="extra"]').click(function() {
        getSelectedCheckBoxes('extra');
    });

    var getSelectedCheckBoxes = function(groupName) {
        var result = $('input[name="' + groupName + '"]:checked');
        if (result.length > 0) {
            $('#send_').click(function() {

                var resultString = result.length + " checkboxe(s) checked<br/>";
                result.each(function() {
                    resultString += $(this).val() + "<br/>";
                });
                console.log(resultString);

            });

        }
    };
});