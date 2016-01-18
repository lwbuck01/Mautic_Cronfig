<?php
/**
 * @package     Cronfig Mautic Bundle
 * @copyright   2016 Cronfig.io. All rights reserved
 * @author      Jan Linhart
 * @link        http://cronfig.io
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

$view->extend('MauticCoreBundle:Default:content.html.php');

$view['slots']->set('mauticContent', 'cronfig');

$view['slots']->set('headerTitle', $view['translator']->trans('cronfig.title'));

?>
<!--[if lt IE 8]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<div id="cronfig-wrapper">
    <p>If you can see this, something is broken (or JS is not enabled)!!.</p>
</div>
<script type="text/javascript">
    var mauticUrl = 'http://m.johnlinhart.com';
    document.cronfigConfig = {
        platform: 'mautic',
        tasks: [
            {
                url: mauticUrl + '/cronfig/mautic:leadlists:update',
                description: 'This task will keep your lead lists updated. This task is required for basic Mautic functionality.',
            },
            {
                url: mauticUrl + '/cronfig/mautic:campaigns:update',
                description: 'This task will add/remove the leads to/from your campaigns. This task is required for basic Mautic functionality.',
            },
            {
                url: mauticUrl + '/cronfig/mautic:campaigns:trigger',
                description: 'This task will trigger the campaign events. This task is required for basic Mautic functionality.',
            },
            {
                url: mauticUrl + '/cronfig/mautic:email:process',
                description: 'This task will send batch emails if you configured the email sending to the queue.',
            }
        ],
        email: 'linhartescope@gmail.com',
        apiKey: '5676b7c7ea58d79d53d14adb',
        rememberApiKey: function(apiKey) {
            console.log(apiKey);
        },
        env: 'dev'
    }
</script>
<script type="text/javascript" src="http://localhost/cronfig-app/dist/assets/main.js"></script>
