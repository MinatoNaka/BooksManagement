const app = new Vue({
    el: '#app',
    mixins: [mixins.preventDoubleSubmit]
});
