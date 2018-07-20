<?php
/**
 * TimeAgo plugin for Craft CMS 3.x
 *
 * Shows time ago postDate
 *
 * @link      https://mdxdave.de
 * @copyright Copyright (c) 2017 MDXDave
 */

namespace mdxdave\timeago;

use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;
use craft\web\UrlManager;
use craft\events\RegisterUrlRulesEvent;

use yii\base\Event;

class TimeAgo extends Plugin
{

    public static $plugin;

    public function init()
    {
        parent::init();
        self::$plugin = $this;

        // Add in our Twig extensions
        Craft::$app->view->registerTwigExtension(new twigextensions\TimeAgoTwigExtension());

        Craft::info(
            Craft::t(
                'time-ago',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }
}
