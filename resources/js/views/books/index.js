const app = new Vue({
    el: '#app',
    methods: {
        confirm: function (event) {
            if (window.confirm('本を削除してよろしいですか？')) {
                return;
            }

            event.preventDefault();
        }
    }
});
