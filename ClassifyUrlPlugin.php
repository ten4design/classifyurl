<?php

namespace Craft;

class ClassifyUrlPlugin extends BasePlugin
{
	public function getName()
	{
		return Craft::t('Classify URLs');
	}

	public function getVersion()
    {
        return '1.0';
    }

	public function getDeveloper()
    {
        return 'Ten4 Design';
    }

	public function getDeveloperUrl()
    {
        return 'http://www.ten4design.co.uk';
    }

	/**
     * Register twig extension
     */
    public function addTwigExtension()
    {
        Craft::import('plugins.classifyurl.twigextensions.ClassifyUrlTwigExtension');
        return new ClassifyUrlTwigExtension();
    }
}
