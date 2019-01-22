<?php
namespace Inferno\InfernoTestimonial\ModelAdmin;

use Inferno\InfernoFeature\Feature\FeatureHead;
use Inferno\InfernoTestimonial\Testimonial\Testimonials;
use SilverStripe\Admin\ModelAdmin;

class TestimonialAdmin extends ModelAdmin {

    private static $url_segment = 'testimonial';
    private static $menu_title = 'Testimonials';
    private static $managed_models = [
        Testimonials::class,
  ];
    private static $allowed_actions = [

  ];



}
