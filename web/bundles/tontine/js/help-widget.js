!(function($) {
    var $widget = $('#help-widget-content');
    var $icon = $('#help-widget-icon');

    $icon.on('click', function() {
        if ($widget.is(':visible')) {
            $widget.fadeOut();
        } else {
            $widget.fadeIn();
        }
    })
})(window.jQuery);