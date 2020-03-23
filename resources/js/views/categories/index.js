const app = new Vue({
    el: '#app',
    methods: {
        confirm: function (event) {
            if (window.confirm('カテゴリーを削除してよろしいですか？')) {
                return;
            }

            event.preventDefault();
        }
    }
});
