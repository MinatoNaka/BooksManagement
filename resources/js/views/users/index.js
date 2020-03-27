const app = new Vue({
    el: '#app',
    mixins: [mixins.preventDoubleSubmit],
    methods: {
        confirm: function (event) {
            if (window.confirm('ユーザを削除してよろしいですか？')) {
                return;
            }

            event.preventDefault();
        }
    }
});
