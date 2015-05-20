<?php

namespace Craft;

use Twig_Extension;
use Twig_Function_Method;

class ClassifyUrlTwigExtension extends Twig_Extension
{
	public function getName()
	{
		return 'classifyurl';
	}

	public function getFunctions()
	{
		return array(
			'classifyURL' => new Twig_Function_Method($this, 'classifyURLFunction')
		);
	}

	public function classifyURLFunction($url)
	{
		$classes = array(
			'twitter' => '/^https?:\/\/(www.)?twitter.com/',
			'facebook' => '/^https?:\/\/(www.)?facebook.com/',
			'youtube' => '/^https?:\/\/(www.)?youtube.com/',
			'pinterest' => '/^https?:\/\/(www.)?pinterest.com/',
			'google-plus' => '/^https?:\/\/plus.google.com/',
			'vine' => '/^https?:\/\/(www.)?vine.co/',
			'instagram' => '/^https?:\/\/(www.)?instagram.com/'
		);
		foreach ($classes as $key => $value){
			if (preg_match($value, $url) === 1){
				return $key;
			}
		}
		return 'web';
	}
}
