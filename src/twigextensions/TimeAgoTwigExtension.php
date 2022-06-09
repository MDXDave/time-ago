<?php
/**
 * TimeAgo plugin for Craft CMS 4.x
 *
 * Shows time ago postDate
 *
 * @link      https://mdxdave.de
 * @copyright Copyright (c) 2022 MDXDave
 */

namespace mdxdave\timeago\twigextensions;

use Carbon\Carbon;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class TimeAgoTwigExtension extends AbstractExtension
{
    public function getName()
    {
        return 'TimeAgo';
    }

    public function getFilters()
    {
        return [
            new TwigFilter('timeAgo', [$this, 'timeAgo']),
        ];
    }

    function timeAgo($datetime, $lang="en") {
        Carbon::setLocale($lang);
        return Carbon::createFromTimestamp($datetime)->diffForHumans();
    }
}
