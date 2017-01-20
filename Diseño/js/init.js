/**
 * Created by diego on 10/01/2017.
 */

$(document).ready(function () {
    // fix menu when passed

    $('.navbar').visibility({
        once: false,
        onBottomPassed: function () {
            $('.navbar-fixed').transition('fade left');
        },
        onBottomPassedReverse: function () {
            $('.navbar-fixed').transition('fade');
        }
    });

    $('.dropdown')
        .dropdown()
    ;
});