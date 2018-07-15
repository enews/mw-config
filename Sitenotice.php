<?php
// Global SiteNotice
// Increment this version number whenever you change the site notice
// and don't comment it out
$wgMajorSiteNoticeID = 25;
$snImportant = true; // Set to true if the sitenotice should be show regardless of if wikis want it to be shown

// Write your SiteNotice below.  Comment out this section to disable.
$wgHooks['SiteNoticeAfter'][] = 'onSiteNoticeAfter';
function onSiteNoticeAfter( &$siteNotice, $skin ) {
        global $wmgSiteNoticeOptOut, $snImportant;
         if ( !$wmgSiteNoticeOptOut || $snImportant ) {
                $siteNotice .= <<<EOF
                <table class="wikitable" style="text-align:center;"><tbody><tr>
                <td>We will be doing some db server maintenance at 23:00 UTC to 00:00 UTC. We will set wiki's into read only mode at 22:55 UTC. We apologize for any inconvenience caused by this.</td>
                </tr></tbody></table>
EOF;
         }
        return true;
}
