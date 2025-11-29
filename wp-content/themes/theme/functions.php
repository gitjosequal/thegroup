<?php
//Add theme support
function TheGroup_setup(){
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
	add_theme_support( 'title-tag' );
}
add_action('after_setup_theme','TheGroup_setup');
add_image_size( 'featured-large', 500, 400, true );
/*
* Enqueu scc and js files
*/
function  TheGroup_enqueue_files($hook){
    // Add CSS files
	wp_enqueue_style( 'global-css', get_template_directory_uri().'/assets/css/global.css');
	wp_enqueue_style( 'bootstrap.min-css', get_template_directory_uri().'/assets/css/bootstrap.min.css');
	wp_enqueue_style( 'animate.min-css', get_template_directory_uri().'/assets/css/animate.min.css');
	wp_enqueue_style( 'c6f4e060e780463a9a5e16ac00297c2b-css', get_template_directory_uri().'/assets/css/c6f4e060e780463a9a5e16ac00297c2b.css');
	wp_enqueue_style( 'e933f8a38156ce27fa91eac520f0f9e9-css', get_template_directory_uri().'/assets/css/e933f8a38156ce27fa91eac520f0f9e9.css');
	wp_enqueue_style( 'cd17a641d17af2becbbbba8de0b9234f-css', get_template_directory_uri().'/assets/css/cd17a641d17af2becbbbba8de0b9234f.css');
	wp_enqueue_style( '4eeddd176ddffdc6718c3609a753f43e-css', get_template_directory_uri().'/assets/css/4eeddd176ddffdc6718c3609a753f43e.css');
	wp_enqueue_style( 'a58f845220d9ea89a91d9623746f110f-css', get_template_directory_uri().'/assets/css/a58f845220d9ea89a91d9623746f110f.css');
	wp_enqueue_style( 'b33d138222986c445afc4adeaf22e234-css', get_template_directory_uri().'/assets/css/b33d138222986c445afc4adeaf22e234.css');
	wp_enqueue_style( 'c2cd609d96b34190e944bf873140c74f-css', get_template_directory_uri().'/assets/css/c2cd609d96b34190e944bf873140c74f.css');
	wp_enqueue_style( 'cb643653a6af541c9fee977721cee8c0-css', get_template_directory_uri().'/assets/css/cb643653a6af541c9fee977721cee8c0.css');
	wp_enqueue_style( '3cbdaba3f46662bc1345eb2e6bb13b3d-css', get_template_directory_uri().'/assets/css/3cbdaba3f46662bc1345eb2e6bb13b3d.css');
	wp_enqueue_style( '0192de6d0a2de7ca774938704be60415-css', get_template_directory_uri().'/assets/css/0192de6d0a2de7ca774938704be60415.css');
	wp_enqueue_style( '0dee6e58e825f634b64deb455de8546b-css', get_template_directory_uri().'/assets/css/0dee6e58e825f634b64deb455de8546b.css');
	wp_enqueue_style( '68a3c0ceeed2af32135d503d51ecfcfb-css', get_template_directory_uri().'/assets/css/68a3c0ceeed2af32135d503d51ecfcfb.css');
	wp_enqueue_style( '1f279ad8a9356e8e3ebcd119d7e893cd-css', get_template_directory_uri().'/assets/css/1f279ad8a9356e8e3ebcd119d7e893cd.css');
	wp_enqueue_style( 'a1792cae9a8b6fe20d0e8ab50b1a629c-css', get_template_directory_uri().'/assets/css/a1792cae9a8b6fe20d0e8ab50b1a629c.css');
	wp_enqueue_style( 'b0cb45aefc5e9fb3819210f95be2c96c-css', get_template_directory_uri().'/assets/css/b0cb45aefc5e9fb3819210f95be2c96c.css');
	wp_enqueue_style( '5d9325337feecaab31ab3c874722a1dc-css', get_template_directory_uri().'/assets/css/5d9325337feecaab31ab3c874722a1dc.css');
	wp_enqueue_style( 'addb7d9105de5ef9840803b021d9b959-css', get_template_directory_uri().'/assets/css/addb7d9105de5ef9840803b021d9b959.css');
	wp_enqueue_style( '4c47c3b5ebf568c28c79ce183ba31fa1-css', get_template_directory_uri().'/assets/css/4c47c3b5ebf568c28c79ce183ba31fa1.css');
	wp_enqueue_style( '7548940d2e75a4c7df9cc95ac59375e1-css', get_template_directory_uri().'/assets/css/7548940d2e75a4c7df9cc95ac59375e1.css');
	wp_enqueue_style( '49b0ade74e3b6f0005d36ead746b10e1-css', get_template_directory_uri().'/assets/css/49b0ade74e3b6f0005d36ead746b10e1.css');
	wp_enqueue_style( '9002bf33469ca511b3c1437d8a793e9b-css', get_template_directory_uri().'/assets/css/9002bf33469ca511b3c1437d8a793e9b.css');
	wp_enqueue_style( '1abec10eceb7937c1a035d0b7a6ddd87-css', get_template_directory_uri().'/assets/css/1abec10eceb7937c1a035d0b7a6ddd87.css');
	wp_enqueue_style( '14969a5216860bcc8ac9dc4a3db85fa8-css', get_template_directory_uri().'/assets/css/14969a5216860bcc8ac9dc4a3db85fa8.css');
	wp_enqueue_style( 'e62f820a11b905db347b6603ab9593a0-css', get_template_directory_uri().'/assets/css/e62f820a11b905db347b6603ab9593a0.css');
	wp_enqueue_style( 'daf18bf23649f99e01a7872b559b86f8-css', get_template_directory_uri().'/assets/css/daf18bf23649f99e01a7872b559b86f8.css');
	wp_enqueue_style( '6d631cbea8c7e6b69c73ab99c2eae0b9-css', get_template_directory_uri().'/assets/css/6d631cbea8c7e6b69c73ab99c2eae0b9.css');
	wp_enqueue_style( 'b9934d3acd678ab88828fd872efe7b37-css', get_template_directory_uri().'/assets/css/b9934d3acd678ab88828fd872efe7b37.css');
	wp_enqueue_style( '23fab7553559ba072c6d7a7664f8dcdb-css', get_template_directory_uri().'/assets/css/23fab7553559ba072c6d7a7664f8dcdb.css');
	wp_enqueue_style( '612e0227ebc58a9397a484e3d7d649e2-css', get_template_directory_uri().'/assets/css/612e0227ebc58a9397a484e3d7d649e2.css');
	wp_enqueue_style( '43378dbb30e5db71bd2e2bfee9e8dcde-css', get_template_directory_uri().'/assets/css/43378dbb30e5db71bd2e2bfee9e8dcde.css');
	wp_enqueue_style( '3086fa809471fa9737f69f92eb4f398e-css', get_template_directory_uri().'/assets/css/3086fa809471fa9737f69f92eb4f398e.css');
	wp_enqueue_style( 'be7d191f5432793336429f6e3cc8745d-css', get_template_directory_uri().'/assets/css/be7d191f5432793336429f6e3cc8745d.css');
	wp_enqueue_style( '43b65c016ebf8fe3df754528d741bc2b-css', get_template_directory_uri().'/assets/css/43b65c016ebf8fe3df754528d741bc2b.css');
	wp_enqueue_style( '5e35d349c1bc5f3c1c10775bc7c0d5da-css', get_template_directory_uri().'/assets/css/5e35d349c1bc5f3c1c10775bc7c0d5da.css');
	wp_enqueue_style( '71118e3f0dd273b33f8a25153f8ed848-css', get_template_directory_uri().'/assets/css/71118e3f0dd273b33f8a25153f8ed848.css');
	wp_enqueue_style( '7dfadadd3aa4ef60333376ea8d672016-css', get_template_directory_uri().'/assets/css/7dfadadd3aa4ef60333376ea8d672016.css');
	wp_enqueue_style( '9dcb862c41c72f7fba1a4f077069086c-css', get_template_directory_uri().'/assets/css/9dcb862c41c72f7fba1a4f077069086c.css');
	wp_enqueue_style( '9ae2bcc3571422433652878c10c8bc75-css', get_template_directory_uri().'/assets/css/9ae2bcc3571422433652878c10c8bc75.css');
	wp_enqueue_style( 'bd44018e9979001043c6cd7cd1030e6e-css', get_template_directory_uri().'/assets/css/bd44018e9979001043c6cd7cd1030e6e.css');
	wp_enqueue_style( '569e89a55005ed9242f41b1fb6ce23cb-css', get_template_directory_uri().'/assets/css/569e89a55005ed9242f41b1fb6ce23cb.css');
	wp_enqueue_style( '54efc310126a73e66fd979061b691681-css', get_template_directory_uri().'/assets/css/54efc310126a73e66fd979061b691681.css');
	// wp_enqueue_style( '737822296173ff94e02bce480b3233ce-css', get_template_directory_uri().'/assets/css/737822296173ff94e02bce480b3233ce.css');
	wp_enqueue_style( '35e373b5042894f0ee3840be5eda7b0e-css', get_template_directory_uri().'/assets/css/35e373b5042894f0ee3840be5eda7b0e.css');
	wp_enqueue_style( 'Fall-css', get_template_directory_uri().'/assets/css/Fall.css');
	wp_enqueue_style( '9002bf33469ca511b3c1437d8a793e9b-css', get_template_directory_uri().'/assets/css/9002bf33469ca511b3c1437d8a793e9b.css');
	wp_enqueue_style( 'cb0f1ba9b3d687d5fa9d215dd9af1340-css', get_template_directory_uri().'/assets/css/cb0f1ba9b3d687d5fa9d215dd9af1340.css');
	wp_enqueue_style( '1cdfa07f561174f38050a21e79d3f27a-css', get_template_directory_uri().'/assets/css/1cdfa07f561174f38050a21e79d3f27a.css');
	wp_enqueue_style( '1f60b34ea22a427d877ee345b5c7ced9-css', get_template_directory_uri().'/assets/css/1f60b34ea22a427d877ee345b5c7ced9.css');
	wp_enqueue_style( 'b6f9bf3ef9964caeb2e24a90cfe42a29-css', get_template_directory_uri().'/assets/css/b6f9bf3ef9964caeb2e24a90cfe42a29.css');
	wp_enqueue_style( '0d284bf86307376940ea1670f0ffff60-css', get_template_directory_uri().'/assets/css/0d284bf86307376940ea1670f0ffff60.css');
	wp_enqueue_style( 'e6c4cd65bc652ba140559b02866623da-css', get_template_directory_uri().'/assets/css/e6c4cd65bc652ba140559b02866623da.css');
	wp_enqueue_style( 'v4-shims-css', get_template_directory_uri().'/assets/css/v4-shims.css');
	wp_enqueue_style( '7dbaab185ad9ad14dee2cc4c7b75eea9-css', get_template_directory_uri().'/assets/css/7dbaab185ad9ad14dee2cc4c7b75eea9.css');
	wp_enqueue_style( '7f8d7a3f40b3b6da9b00e7d070e52c11-css', get_template_directory_uri().'/assets/css/7f8d7a3f40b3b6da9b00e7d070e52c11.css');
	wp_enqueue_style( 'b71a8563aa28ae9f7e4185cbc52b2978-css', get_template_directory_uri().'/assets/css/b71a8563aa28ae9f7e4185cbc52b2978.css');
	wp_enqueue_style( 'daf18bf23649f99e01a7872b559b86f8-css', get_template_directory_uri().'/assets/css/daf18bf23649f99e01a7872b559b86f8.css');
	wp_enqueue_style( '737822296173ff94e02bce480b3233ce-css', get_template_directory_uri().'/assets/css/737822296173ff94e02bce480b3233ce.css');

	// wp_enqueue_style( '-css', get_template_directory_uri().'/assets/css/.css');
	wp_enqueue_style( 'style-css', get_template_directory_uri().'/style.css');
	
	
	// if(pll_current_language() == 'ar'){
    //     wp_enqueue_style( 'style-rtl', get_template_directory_uri().'/style-rtl.css');
	// }

// Add JS files
wp_enqueue_script('cjQuery-js', get_template_directory_uri().'/assets/js/Cjquery.min.js', array('jquery'), rand(), true);
wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), rand(), true);
wp_enqueue_script('form-handler-js', get_template_directory_uri().'/assets/js/5b4c1cdef7878c1bc4b7ebf18984ecc2.js', array('jquery'), rand(), true);
// wp_enqueue_script('custom-validation-js', get_template_directory_uri().'/assets/js/b7a2d8431535c08ac93ead44f80c3679.js', array('jquery'), rand(), true);
wp_enqueue_script('slider-js', get_template_directory_uri().'/assets/js/5d9f48488b9894b379998b3aac646831.js', array('jquery'), null, true);
wp_enqueue_script('gallery-js', get_template_directory_uri().'/assets/js/7b1ce3492f669968783e393fab85a354.js', array('jquery'), rand(), true);
wp_enqueue_script('instant-click-js', get_template_directory_uri().'/assets/js/instant_click.min.js', array('jquery'), null, true);
wp_enqueue_script('forms-validation-js', get_template_directory_uri().'/assets/js/b005ff1500366e2132806b16950df98d.js', array('jquery'), rand(), true);
wp_enqueue_script('ajax-handler-js', get_template_directory_uri().'/assets/js/e0f6fc16f098250ef32f4356f1d88298.js', array('jquery'), rand(), true);
wp_enqueue_script('animations-js', get_template_directory_uri().'/assets/js/fab95bb77b91cd575464b52176ab8394.js', array('jquery'), rand(), true);
wp_enqueue_script('tabs-js', get_template_directory_uri().'/assets/js/7250cc4bfc22b442f98e2ddd67cc7f48.js', array('jquery'), rand(), true);
wp_enqueue_script('lazy-loading-js', get_template_directory_uri().'/assets/js/9b91af9ecc9cb4ce1ed711492f996479.js', array('jquery'), rand(), true);
wp_enqueue_script('dialog.min-js', get_template_directory_uri().'/assets/js/dialog.min.js', array('jquery'), rand(), true);


//! verison diffrent fixed santa slider
wp_enqueue_script('modal-js', get_template_directory_uri().'/assets/js/5efb6988abf7c6ee5af9da2e7a0450bb.js', array('jquery'), rand(), true); 

//!  verison diffrent fixed 
wp_enqueue_script('filter-js', get_template_directory_uri().'/assets/js/0994d1ddac79739abf0928674913e8b6.js', array('jquery'), rand(), true); 

wp_enqueue_script('carousel-js', get_template_directory_uri().'/assets/js/d482712fcb795da406cd224623fbdc80.js', array('jquery'), rand(), true);
wp_enqueue_script('tooltip-js', get_template_directory_uri().'/assets/js/89fd9dc05d7e6d299fb44955ba2b1d6e.js', array('jquery'), rand(), true);

//! its need frontend file
// wp_enqueue_script('scroll-to-top-js', get_template_directory_uri().'/assets/js/77fa3c504895b49383c8c3b1e8a4b4f3.js', array('jquery', 'filter-js'), rand(), true);

//! fixed 
wp_enqueue_script('form-submission-js', get_template_directory_uri().'/assets/js/9a1a2c4a3ab9036414d07e0edb61c8b0.js', array('jquery'), rand(), true);

//! its need frontend file
wp_enqueue_script('lightbox-js', get_template_directory_uri().'/assets/js/31a7f6e22357bd1a9ebde7e4b8ce14be.js', array('jquery', 'filter-js'), rand(), true);

//! fixed 
wp_enqueue_script('custom-scrollbar-js', get_template_directory_uri().'/assets/js/db060b82564ffb6c47e7b693ffe231a8.js', array('jquery'), rand(), true);



// wp_enqueue_script('frontend-min-js', get_template_directory_uri().'/assets/js/frontend.min.js', array('jquery'), rand(), true);
// wp_enqueue_script('frontend-pro-min-js', get_template_directory_uri().'/assets/js/frontend.pro.min.js', array('jquery'), rand(), true);

// Main JS
wp_enqueue_script('main-js', get_template_directory_uri().'/assets/js/main.js', array('jquery'), rand(), true);

}
add_action('wp_enqueue_scripts', 'TheGroup_enqueue_files');
if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {
    function mytheme_register_nav_menu(){
        register_nav_menus( array(
            'header_menu' => __( 'header_menu'),
            'footer_menu'  => __( 'footer_menu'),
        ) );
    }
    add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}
/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
	return 25;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
	return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );







/**
 * Generate custom search form
 *
 * @param string $form Form HTML.
 * @return string Modified form HTML.
 */
add_filter('get_search_form','wpdocs_my_search_form');

function yoasttobottom() {
	return 'low';
  }
  add_filter( 'wpseo_metabox_prio', 'yoasttobottom');
?>




<?php 






function restrict_search_to_post_types($query) {
    if ($query->is_search && $query->is_main_query()) {
        $query->set('post_type', array('brands', 'events'));
    }
}
add_action('pre_get_posts', 'restrict_search_to_post_types');
function enqueue_slick_assets() {
    // Enqueue Slick Slider CSS
    wp_enqueue_style('slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css', [], '1.8.1');
    wp_enqueue_style('slick-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css', [], '1.8.1');

    // Enqueue Slick Slider JS
    wp_enqueue_script('slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', ['jquery'], '1.8.1', true);
}
add_action('wp_enqueue_scripts', 'enqueue_slick_assets');

















// Register the shortcode
function display_customer_points_form() {
    ob_start();
    ?>
    <form id="customer-points-form">
        <label for="customer-id">Customer ID:</label>
        <input type="text" id="customer-id" name="customer-id" required>
        <button type="button" id="fetch-data">Check Balance</button>
    </form>
    <div id="customer-data"></div>

    <script>
        document.getElementById('fetch-data').addEventListener('click', function () {
            const customerId = document.getElementById('customer-id').value;
            const customerDataDiv = document.getElementById('customer-data');

            if (customerId) {
                customerDataDiv.innerHTML = 'Loading...';

                jQuery.ajax({
                    url: '<?php echo admin_url("admin-ajax.php"); ?>',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        action: 'check_customer_points',
                        customerId: customerId
                    },
                    success: function (data) {
                        console.log('API Response:', data); // Debugging API response
                        if (data.success) {
                            const { CardExpiryDate, Balance } = data.data;
                            customerDataDiv.innerHTML = `
                                <div class="api-results">
                                    <p><strong>Card Expiry Date:</strong> ${CardExpiryDate || 'N/A'}</p>
                                    <p><strong>Balance:</strong> ${Balance}</p>
                                </div>
                            `;
                        } else {
                            customerDataDiv.innerHTML = data.data || 'No data found for this customer ID.';
                        }
                    },
                    error: function (xhr, status, error) {
                        customerDataDiv.innerHTML = `Error: ${error}`;
                    }
                });
            } else {
                customerDataDiv.innerHTML = 'Please enter a valid customer ID.';
            }
        });
    </script>
    <?php
    return ob_get_clean();
}
add_shortcode('customer_points', 'display_customer_points_form');

// Handle the API request on the server-side
add_action('wp_ajax_check_customer_points', 'check_customer_points');
add_action('wp_ajax_nopriv_check_customer_points', 'check_customer_points');

function check_customer_points() {
    $customerId = isset($_POST['customerId']) ? sanitize_text_field($_POST['customerId']) : '';

    if (!$customerId) {
        wp_send_json_error('Customer ID is required.');
    }

    $api_url = "https://api.thegroup.jo:7119/CustPoints?customerId=" . urlencode($customerId);

    // Disable SSL verification
    $response = wp_remote_get($api_url, array('sslverify' => false));

    if (is_wp_error($response)) {
        wp_send_json_error('Error fetching data: ' . $response->get_error_message());
    }

    $body = wp_remote_retrieve_body($response);
    $data = json_decode($body, true);

    // Debugging: Log the API response and parsed data
    error_log(print_r($response, true));
    error_log(print_r($data, true));

    if (is_array($data) && !empty($data[0]['Balance'])) {
        wp_send_json_success($data[0]);
    } else {
        wp_send_json_error('No data found for this customer ID.');
    }
}
add_action('template_redirect', function() {
    // إذا كان الأرشيف الخاص بالـ Custom Post Type "brands"
    if (is_post_type_archive('brands')) {
        wp_redirect(home_url('/')); // رجّع للهوم
        exit;
    }
});