$(document).ready(function () {

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    /*$(":number")[0].focus();*/

    // disable submit button on submit
    /*$('form').submit(function (a) {
        var subButton = $(this).find(':submit');
        subButton.attr('disabled', true);
        subButton.val('...sending information...');
        return true;
    });*/


    /*
    $("#beginAlert").dialog({
        modal: true,
        buttons: {
            "OK": function () {
                $(this).dialog('close');
            }
        },
        show: true,
        hide: true,
        width: 600,
        height: 400
    });

    $("#hasNotYet").dialog({
        modal: true,
        autoOpen: false,
        buttons: {
            "OK": function () {
                $(this).dialog('close');
            }
        },
        show: true,
        hide: true,
        width: 600,
        height: 400
    });

    $("#hasAlready").dialog({
        modal: true,
        autoOpen: false,
        buttons: {
            "OK": function () {
                $(this).dialog('close');
            }
        },
        show: true,
        hide: true,
        width: 600,
        height: 400
    });


    $('.inputInt').keydown(function (e) {
// Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
            // Allow: Ctrl/cmd+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
            // Allow: Ctrl/cmd+C
            (e.keyCode === 67 && (e.ctrlKey === true || e.metaKey === true)) ||
            // Allow: Ctrl/cmd+X
            (e.keyCode === 88 && (e.ctrlKey === true || e.metaKey === true)) ||
            // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
            // let it happen, don't do anything
            return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
*/
    var counter = 0;

    $('#month').blur(function () {

        if (counter === 0) {
            var year = $('#year').val();
            var month = $('#month').val();

            if ((year != "") && (month != "")) {
                $.post(
                    '../models/support.php',
                    {driver: "major", year: year, month: month},
                    function (data) {

                        var returned = JSON.parse(data);
                        var text = "";

                        if (returned === 0) {
                            text = "Nie ma jeszcze wpisów w podanym miesiącu danego roku";

                            $("#afterAutoCheckResult").html(text);
                            $('#myModal2').modal('show');

                        } else {
                            text = "uwaga, są już wpisy w podanym roku i miesiącu (ich liczba to " + returned + "), zachowaj szczególną uwagę i ostrożność. Albo w sumie lepiej nacisnąć ten niebieski przycisk opatrzony napisem 'sprawdź każdy' :D";

                            $("#afterAutoCheckResult").html(text);
                            $('#myModal2').modal('show');
                        }
                    }
                );
            }
        }
        counter++;
    }).change(function () {
        counter = 0;
    });



    $('#myModal').modal('show');

    $('#checkEach').click(function () {
        var $resource = $('.resource');

        $resource.each(function () {
            var year = $('#year').val();
            var month = $('#month').val();
            var resource = $(this).attr('data-resource');
            var flat = $(this).attr('data-flat');
            var $here = $(this);


            $.post(
                '../models/support.php',
                {driver: "minor", year: year, month: month, resource: resource, flat: flat},
                function (data) {

                    var returned = JSON.parse(data);

                    if (returned != 0) {
                        $here.css('background', '#ddaaaa').attr("disabled", true);

                    } else {
                        $here.css('background', '#ffffff').attr("disabled", false);
                    }
                }
            );

        });
    });


});