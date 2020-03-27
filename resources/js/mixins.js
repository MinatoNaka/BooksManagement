export const preventDoubleSubmit = {
    methods: {
        preventDoubleSubmit: function (event) {
            $("[type='submit']", event.target).prop("disabled", true);
        }
    }
};

export const preventDoubleClick = {
    methods: {
        // ダウンロードボタンなど、リロードがないボタンに利用する
        preventDoubleClick: function (event) {
            $(event.target).addClass('disabled');

            window.setTimeout(function () {
                $(event.target).removeClass('disabled');
            }, 3000);
        }
    }
};
