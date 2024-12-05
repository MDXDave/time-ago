# TimeAgo plugin for Craft CMS 4.x

Displays time ago for a given timestamp value within a Craft CMS Twig template.

## Requirements

This plugin requires Craft CMS 5.0.0 or later.

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require mdxdave/time-ago

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for TimeAgo.

## Using TimeAgo

Just use the following code in your Twig template file:
        
        {{ entry.postDate.getTimestamp()|timeAgo }}
        
If you want to use another language than english, use:
        
        {{ entry.postDate.getTimestamp()|timeAgo("de") }}



Brought to you by [MDXDave](https://mdxdave.de)
