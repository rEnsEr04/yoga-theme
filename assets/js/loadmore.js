// jQuery(document).ready(function () {
//     jQuery('#load-more').on('click', function (){
//         var $this = jQuery(this);
//         var data = {};
//         data.action = 'load_more_post_ajax';
//         data.page = 2;
//         data.security = the_ajax_script_nonce;

//         $this.html('Loading...');

//         jQuery.ajax({
//             url: the_ajax_script.ajaxurl,
//             type: 'post',
//             data: data,
//             success: function (response) {
//                 $this.html('Load More');
//                 if (response !== '') {
//                     $('.testimoials').append(response);
//                     page++;
//                 } else {
//                     $('.load-more-posts').hide();
//                 }
//             },
//             error: function (jqXHR, textStatus, errorThrown) {
//                 $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
//             }
//         })
//     })
// }) 

