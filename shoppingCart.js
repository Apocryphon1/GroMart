$(document).ready(function () {
    $('.minus-btn').on('click', function (e) {
        e.preventDefault();
        var $this = $(this);
        var $input = $this.closest('div').find('input');
        var value = parseInt($input.val());

        if (value > 0) {
            value--;
        } else {
            value = 0;
        }

        $input.val(value);

    });

    $('.plus-btn').on('click', function (e) {
        e.preventDefault();
        var $this = $(this);
        var $input = $this.closest('div').find('input');
        var value = parseInt($input.val());

        if (value < 100) {
            value++;
        } else {
            value = 100;
        }

        $input.val(value);
    });
});