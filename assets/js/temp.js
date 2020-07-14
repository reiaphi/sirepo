(function ($) {
    "use strict"; // Start of use strict$(document).ready(function() {
    $(document).ready(function () {
        $('#example').dataTable({
            "bLengthChange": false
        });
    });
    $('.next').click(function () {

        var nextId = $(this).parents('.tab-pane').next().attr("id");
        $('[href=#' + nextId + ']').tab('show');
        return false;

    });

    $('.back').click(function () {

        var prevId = $(this).parents('.tab-pane').prev().attr("id");
        $('[href=#' + prevId + ']').tab('show');
        return false;

    });

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

        //update progress
        var step = $(e.target).data('step');
        var percent = (parseInt(step) / 4) * 100;

        $('.progress-bar').css({
            width: percent + '%'
        });
        $('.progress-bar').text("Step " + step + " of 5");

        //e.relatedTarget // previous tab

    });

    $('.first').click(function () {

        $('#myWizard a:first').tab('show')

    });

    //disabled when submit
    $(document).ready(function () {
        $("#yourFormId").submit(function () {
            $(".submitBtn").attr("disabled", true);
            return true;
        });
    });
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function () {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
})(jQuery); // End of use strict