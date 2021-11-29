$(function () {
    
    $('.request-claim').click(function () {
    alert('request-claim');

        $.ajax({
            url: '/claim/request',
            type: 'POST',
            data: {
                _token: '{{csrf_token()}}'
            },
            success: function (data) {
                alert(data.message);
            }
        });
    });
});