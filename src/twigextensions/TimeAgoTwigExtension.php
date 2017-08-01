<?php
/**
 * TimeAgo plugin for Craft CMS 3.x
 *
 * Shows time ago postDate
 *
 * @link      https://mdxdave.de
 * @copyright Copyright (c) 2017 MDXDave
 */

namespace mdxdave\timeago\twigextensions;

use mdxdave\timeago\TimeAgo;
use Craft;
use Carbon\Carbon;

class TimeAgoTwigExtension extends \Twig_Extension
{
    public function getName()
    {
        return 'TimeAgo';
    }

    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('timeAgo', [$this, 'timeAgo']),
        ];
    }

    function timeAgo($datetime, $lang="en") {
        Carbon::setLocale($lang);
        return Carbon::createFromTimestamp($datetime)->diffForHumans();
    }
}
