const app = new Vue({
    el: '#app',
    mixins: [mixins.preventDoubleSubmit, mixins.preventDoubleClick],
    methods: {
        confirm: function (event) {
            if (window.confirm('本を削除してよろしいですか？')) {
                return;
            }

            event.preventDefault();
        },
        submitImport: function () {
            $('#import-form').submit();
        }
    }
});
