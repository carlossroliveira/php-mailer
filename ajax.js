$(document).ready(function () {
    $('#ajax_form').submit(function () {
        $('.loading').html("<img src='loading.gif' width='50'>");
        $.ajax({
            url: "enviar.php",
            type: "POST",
            data: $(this).serialize(),
            success: function (data) {
                $('.mostrar').html(data);
                $('.loading').hide();
                $('#ajax_form')[0].reset();
            }
        });
        return false;
    });
});