<?php 

defined('C5_EXECUTE') or die(_("Access Denied."));

class JnjTemplatesPackage extends Package {

	protected $pkgHandle = 'jnj_templates';
	protected $appVersionRequired = '5.6.0.2';
	protected $pkgVersion = '0.9.2';

	public function getPackageDescription() {
		return t("Installs the Basic Spyder Web Solutions Theme by Jack-n-Jean Studios");
	}

	public function getPackageName() {
		return t("Spyder Web Solutions Theme");
	}

	public function install() {
		$pkg = parent::install();
		
		// install block
		PageTheme::add('cri_basic', $pkg);	
		BlockType::installBlockTypeFromPackage('autonav', $pkg);
		
		// install Page Types
		Loader::model('collection_types');

		$ct = CollectionType::getByHandle('left_sidebar');
		if((!is_object($ct)) || ($ct->getCollectionTypeID() < 1)) {
		$data['ctHandle'] = 'left_sidebar';
		$data['ctName'] = t('Left Sidebar');
		$hpt = CollectionType::add($data, $pkg);
		}
		
		$ct = CollectionType::getByHandle('right_sidebar');
		if((!is_object($ct)) || ($ct->getCollectionTypeID() < 1)) {
		$data['ctHandle'] = 'right_sidebar';
		$data['ctName'] = t('Right Sidebar');
		$hpt = CollectionType::add($data, $pkg);
		}
		
		$ct = CollectionType::getByHandle('full');
		if((!is_object($ct)) || ($ct->getCollectionTypeID() < 1)) {
		$data['ctHandle'] = 'full';
		$data['ctName'] = t('Full');
		$hpt = CollectionType::add($data, $pkg);
		}
	}
}
?>