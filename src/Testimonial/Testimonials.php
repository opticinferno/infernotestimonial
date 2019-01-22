<?php
namespace Inferno\InfernoTestimonial\Testimonial;

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataObject;

class Testimonials extends DataObject {
    private static $table_name = 'Testimonials';
	private static $db = array(
		'Info'=>'Text',
		'Person'=>'Varchar(50)'
	);

	private static $searchable_fields = [
		'Info',
		'Person'
	  ];

    private static $summary_fields = [
		'Person',
		'Info'
    ];
    private static $has_one = [
	'ProfileImage' => Image::class,
	];

	//CREATE TESTIMONIAL SECTION
	public function getCMSFields() {
	$fields = parent::getCMSFields();

	$fields = new FieldList(
		TextField::create('Person','Person who gave testimonial'),
		TextAreaField::create('Info','Testimonial info'),
		UploadField::create('ProfileImage','Image for contact')

		);

	return $fields;

}
//SET PERMISSIONS
//public function canView($member = null) {
//        return Permission::check('CMS_ACCESS_TestimonialAdmin', 'any', $member);
//    }
//    public function canEdit($member = null) {
//        return Permission::check('CMS_ACCESS_TestimonialAdmin', 'any', $member);
//    }
//    public function canDelete($member = null) {
//        return Permission::check('CMS_ACCESS_TestimonialAdmin', 'any', $member);
//    }
//    public function canCreate($member = null) {
//        return Permission::check('CMS_ACCESS_TestimonialAdmin', 'any', $member);
//    }
}
