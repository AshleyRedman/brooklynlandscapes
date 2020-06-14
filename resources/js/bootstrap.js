/**
 * Set, require & initilize any global packages
 *
 */

// window._ = require("lodash");
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
