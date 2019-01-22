<?php
// Extend the class
//SiteTree::add_extension('Testimonials');
PageController::add_extension(\Inferno\InfernoTestimonial\Testimonial\TestimonialsController::class);
//Object::add_extension('ContentController', 'TestimonialsController');
