(function ($) {
    $.cookieCuttr = function (options) {
        var defaults = {
            cookieAcceptButton: true,
            cookieMessage: text_before + '<a target="' + target_url + '" href="' + cookie_url + '">' + link_text + '</a>' + text_after,
            cookieExpires: cookie_expires,
            cookieAcceptButtonText: accept_text,
            cookieAcceptButtonIcon: button_icon,
            cookieTextAlign: text_align,
            cookiePosition: cookie_position,
            cookieName: cookie_name,
        };
        var options = $.extend(defaults, options);
        var message = defaults.cookieMessage;
		var cookieAcceptButton = options.cookieAcceptButton;
        var cookieMessage = message;
        var cookieExpires = options.cookieExpires;
        var cookieAcceptButtonText = options.cookieAcceptButtonText;
        var cookieAcceptButtonIcon = options.cookieAcceptButtonIcon;
        var cookieTextAlign = options.cookieTextAlign;
        var cookiePosition = options.cookiePosition;
        var $cookieAccepted = $.cookie('cookie_accept') == "cookie_accept";

        $.cookieAccepted = function () {
            return $cookieAccepted;
        };
        if (cookieAcceptButton) {
            var cookieAccept = '<button type="button" id="cookiepolicy-btn">' + cookieAcceptButtonIcon + cookieAcceptButtonText + '</button>';
        } else {
            var cookieAccept = "";
        }
        
        if ($cookieAccepted) {
            //do nothing
        } else {
            $('body').append('<div id="cookiepolicy" class="cookiepolicy-fixed-' + cookiePosition + '"><div class="container"><div class="row"><div class="col-lg-12 cookiepolicy-msg justify-content-between"><div class="cookiepolicy-text text-' + cookieTextAlign + '">' + cookieMessage + '</div>' + cookieAccept + '</div></div></div>');
    }
        
        $('#cookiepolicy-btn').click(function (e) {
            e.preventDefault();
            $.cookie("cookie_accept", "cookie_accept", {
                expires: cookieExpires,
                path: '/'
            });
			$("#cookiepolicy").fadeOut();
        });
    };
})(jQuery);