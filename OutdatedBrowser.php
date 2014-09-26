<?php

namespace sammaye\outdatedBrowser;

use yii\base\Widget;
use yii\helpers\Html;
use sammaye\outdatedBrowser\OutdatedBrowserAsset;

class Outdatedbrowser extends Widget
{
	public $bgColor = '#f25648';
	public $color = '#ffffff';
	public $lowerThan =null;
	public $language = 'en';
	
	public $onlyIe7 = false;
	
	public function run()
	{
		$bundle = OutdatedBrowserAsset::register($this->getView());

		$this->getView()->registerJs("
			$(function() {
				
				" . ($this->onlyIe7 ? "
					if($('#outdated').length > 0){
				" : "") . "
				
				// plugin function, place inside DOM ready function
				outdatedBrowser({
					bgColor: '" . $this->bgColor . "',
					color: '" . $this->color . "',
					lowerThan: " . ($this->lowerThan !== null ? "'" . $this->lowerThan . "'" : "''") . ",
					languagePath: '" . $bundle->baseUrl ."/outdatedbrowser/lang/" . $this->language . ".html'
				})
				
				" . ($this->onlyIe7 ? "
					}
				" : "") . "
			});
		");
		if($this->onlyIe7){
			echo '<!--[if lt IE 8]>' .
			Html::tag('div', '', ['id' => 'outdated']) . 
			'<![endif]-->';
		}else{
			echo Html::tag('div', '', ['id' => 'outdated']);
		}
		
	}
}