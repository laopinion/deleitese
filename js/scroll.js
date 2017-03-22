(function ($) {
    $.fn.onscroll = function (options) {
        // This is the easiest way to have default options.
        var settings = $.extend({
            backgroundColor: "#f00",
            height: '10px',
            position: 'fixed'
        }, options);
        var mySelector = this.selector;
        this.each(function () {
            $(mySelector).css({
                backgroundColor: settings.backgroundColor,
                height: settings.height,
                position: settings.position
            });
        });
        return this;
    };
}(jQuery));