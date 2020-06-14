/**
 * Initilize Vue.js instance & top level components
 *
 */

window.Vue = require('vue');

/**
 * <scroll-link :href="#myElement" class="">My Link Text</scroll-link>
 */
Vue.component(
	'scroll-link',
	require('./components/common/ScrollLink.vue').default
);

const app = new Vue({
	el: '#app',
});
