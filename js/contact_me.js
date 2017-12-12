$(document).ready(function () {

    $('#contactForm').submit(function (e) {
        e.preventDefault();
        var datas = $(this).serialize();

        var url = $(this).attr('action');
        $.post(url, datas, function (data) {
            $('#success').text(data);
            $('#contactForm')[0].reset();
        })
    });

});