<?php
namespace sammaye\outdatedBrowser;

use Yii;
use yii\web\AssetBundle;

class OutDatedBrowserAsset extends AssetBundle
{
	public $js = ['outdatedbrowser/outdatedbrowser.js'];
	public $css = ['outdatedbrowser/outdatedbrowser.css'];
	public $depends = [
		'yii\web\JqueryAsset'
	];

	public function init()
	{
		$this->sourcePath = '@bower/outdated-browser';
		parent::init();
	}
}