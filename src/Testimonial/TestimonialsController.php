<?php
namespace Inferno\InfernoTestimonial\Testimonial;

use SilverStripe\CMS\Controllers\ContentController;
use SilverStripe\Core\Extension;
use SilverStripe\View\Requirements;

class TestimonialsController extends Extension {


    private static $allowed_actions = array (
    );

    public function onAfterInit() {

        //sRequirements::set_force_js_to_bottom(true);
        Requirements::set_write_js_to_body(true);
        //Requirements::css('inferno-testimonials/scss/slick.css');
        //Requirements::css('inferno-testimonials/scss/slick-theme.css');
        Requirements::css('inferno/infernotestimonial: client/css/owl.theme.default.css');
        Requirements::css('inferno/infernotestimonial: client/css/owl.carousel.css');

        Requirements::javascript('inferno/infernotestimonial: client/javascript/owl.carousel.js');
        Requirements::javascript('inferno/infernotestimonial: client/javascript/owl.hash.js');
        Requirements::javascript('inferno/infernotestimonial: client/javascript/owl.navigation.js');
        Requirements::javascript('inferno/infernotestimonial: client/javascript/owl.lazyload.js');
        Requirements::javascript('inferno/infernotestimonial: client/javascript/owl.autoplay.js');



        //Requirements::javascript('inferno-testimonials/js/slick.min.js');



    }



    public function mytestimonials() {

        $list = Testimonials::get()->sort('Created', 'Desc');
        return new PaginatedList($list, $this->getRequest());


        $mylist  = Testimonials::get()->sort('Created', 'Desc');
        return $mylist;

    }

}
