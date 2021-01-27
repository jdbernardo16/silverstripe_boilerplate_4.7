<?php
namespace {
	use SilverStripe\CMS\Model\SiteTree;
	use SilverStripe\Forms\TextField;
	use SilverStripe\Forms\TextareaField;
	use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
	use SilverStripe\Forms\HTMLEditor;
	use SilverStripe\Forms\FormField;
	use SilverStripe\AssetAdmin\Forms\UploadField;
	use SilverStripe\Assets\Image;
	use SilverStripe\Assets\File;
	use SilverStripe\Forms\TabSet;
	use SilverStripe\Forms\Tab;
	use SilverStripe\ORM\DataObject;
	use SilverStripe\Forms\FieldList;
	use SilverStripe\Forms\GridField\GridField;
	use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
	use UndefinedOffset\SortableGridField\Forms\GridFieldSortableRows;

	class HomePage extends Page {

		private static $db = [

			/*Frame 1*/
			// 'F1Title' => 'Text',
		
		];

		private static $has_one = [
			// 'F1IMG' => Image::class,
		
		];

		private static $owns = [
			// 'F1IMG',
		];

		private static $has_many = [
	        // 'Quotes' => Quote::class,
	    ];


		private static $allowed_children = "none";

		private static $defaults = array(
			'PageName' => 'Home Page',
			'MenuTitle' => 'Home',
			'ShowInMenus' => true,
			'ShowInSearch' => true,
		);

		public function getCMSFields() {
			$fields = parent::getCMSFields();
			#Remove by tab
			$fields->removeFieldFromTab('Root.Main', 'Content');


			return $fields;

		}
	}

	class HomePageController extends PageController {

		// public function FeaturedProducts() {
		// 	return Product::get()
		// 		->filter(array (
		// 		'Featured' => true
		// 	));
		// }

	}
}
