var io = require('socket.io-client');
var Vue = require('vue');
var VueResource = require('vue-resource');
Vue.use(VueResource);
Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('content');//in meta in template

$('.ui.rating')
    .rating()
;
 var app = new Vue({
    el: '#like',
    data: {
    like:0

    },
    methods:
        {
            likemethod:function () {

            }
        }


})
