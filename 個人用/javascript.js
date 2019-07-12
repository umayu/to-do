
$(function () {
    if ($('#question_dev label').prop('class') === 'default') {
        $('input[type=checkbox]').prop('disabled', true);
    }

    $('#like, #no_like, #never_eaten').click(function () {
        $('input[type=checkbox]').prop('disabled', false);
        $('#like, #no_like, #never_eaten').removeClass('active');
        $(this).addClass('active');
        var id = $(this).prop('id');
    });

    $('input[type=checkbox]').change(function () {
        var id = $(this).prop('id');
        var cls = $('#question_dev label').prop('class').split(' ');
        var color = cls[1].substring(cls[1].indexOf('_'));

        $('#' + id).val(id + color);
        $('label #' + id).addClass('backcolor' + color);
    });
});
    // checkされたname?id?を取得してvalueの書き換えと、background-colorの設定を行う
    // 引数：色、(物?)


function change(e) {
    // like_blue.activeがついたら
}