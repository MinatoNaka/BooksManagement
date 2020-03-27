const app = new Vue({
    el: '#app',
    mixins: [mixins.preventDoubleSubmit],
    methods: {
        confirm: function (event) {
            if (window.confirm('カテゴリーを削除してよろしいですか？')) {
                return;
            }

            event.preventDefault();
        }
    }
});
