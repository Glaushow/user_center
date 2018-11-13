$(function () {
    var LAJQ = {
        autoload: function () {
            $('.ajax-form').on('submit', function () {
                var action = $(this).attr('action');
                var method = $(this).attr('method');
                var data = $(this).serialize();
                var callback = $(this).attr('cb');
                if (!method) {
                    method = 'POST';
                }
                if (action != '') {
                    $.ajax({
                        type: method,
                        url: action,
                        data: data,
                        success: function (res) {
                            if (callback) {
                                eval(callback + '(res)');
                            } else {
                                layer.msg(res.msg);
                                if (res.redirect != 'undefined') {
                                    setTimeout(function () {
                                        window.location = res.redirect;
                                    }, 500)
                                }
                            }
                        }
                    })
                }
                return false;
            })
        }
    }
    LAJQ.autoload();
})