Nova.booting((Vue) => {
    Vue.component('index-rating', require('./components/IndexField').default);
    Vue.component('detail-rating', require('./components/DetailField').default);
    Vue.component('form-rating', require('./components/FormField').default);
});
x
