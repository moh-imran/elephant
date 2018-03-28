//
//
// new Vue({
//     el:'#contact',
//     cache: false,
//     data : {
//
//             registration : {
//                 name:null,
//                 email:null,
//
//             },
//
//         success:[],
//         errors:[]
//
//     },
//     methods:{
//
//         submit : function() {
//
//             // GET /someUrl
//             this.$http.post('/blog/build-job', this.registration).then(response => {
//
//                 this.success.push('Application sent successfully.');
//                 console.log("response", response);
//                 setTimeout(
//                     window.location.href = '/blog'
//                     , 10000);
//
//             }, response => {
//                     // error callback
//           });
//         }
//     }
// });
//
