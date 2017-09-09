/**
 * Created by Jon on 2017-07-01.
 */
$(document).ready(function () {

    var myApp = {
        adminNr: {
            distance: 100,
            speed: 1500
        }
    };

    var move = function move() {
        $("#adminNr").animate({
            "right": "+=" + myApp.adminNr.distance + "px"
        }, myApp.adminNr.speed)
            .animate({
                "top": "+=" + myApp.adminNr.distance + "px"
            }, myApp.adminNr.speed)
            .animate({
                "right": "-=" + myApp.adminNr.distance + "px"
            }, myApp.adminNr.speed)
            .animate({
                "top": "-=" + myApp.adminNr.distance + "px"
            }, myApp.adminNr.speed, function () {
                move();
            });
    };

    move();
});