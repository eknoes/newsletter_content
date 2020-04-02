<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 */

    /**
 * @package newsletter_content
 *
 * @copyright  David Enke 2015
 * @author     David Enke <post@davidenke.de>
 * @package    newsletter_content
 */


/**
 * Back end modules
 */
$GLOBALS['BE_MOD']['content']['newsletter']['tables'][] = 'tl_content';
$GLOBALS['BE_MOD']['content']['newsletter']['send'] = array('DavidEnke\NewsletterContentBundle\Classes\NewsletterContent', 'send');
$GLOBALS['BE_MOD']['content']['newsletter']['stats'] = array('DavidEnke\NewsletterContentBundle\Classes\NewsletterStatistics', 'show');


/**
 * Frond end modules
 */
$GLOBALS['FE_MOD']['newsletter']['nl_reader'] = 'DavidEnke\NewsletterContentBundle\Modules\ModuleNewsletterReader';


/**
 * Newsletter elements
 */
array_insert($GLOBALS['TL_CTE'], 10, array(
	'newsletter' => array(
		'nl_header'          => 'DavidEnke\NewsletterContentBundle\Elements\ContentHeader',
		'nl_breakrow'        => 'DavidEnke\NewsletterContentBundle\Elements\ContentBreakRow',
		'nl_breaktable'      => 'DavidEnke\NewsletterContentBundle\Elements\ContentBreakTable',
		'nl_footer'          => 'DavidEnke\NewsletterContentBundle\Elements\ContentFooter',
		'nl_text'            => 'DavidEnke\NewsletterContentBundle\Elements\ContentText',
		'nl_image'           => 'DavidEnke\NewsletterContentBundle\Elements\ContentImage',
		'nl_gallery'         => 'DavidEnke\NewsletterContentBundle\Elements\ContentGallery',
		'nl_news'            => 'DavidEnke\NewsletterContentBundle\Elements\ContentNews',
		'nl_events'          => 'DavidEnke\NewsletterContentBundle\Elements\ContentEvents',
		'nl_form'            => 'DavidEnke\NewsletterContentBundle\Elements\ContentForm'
	)
));


/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_newsletter_tracking'] = 'DavidEnke\NewsletterContentBundle\Models\NewsletterTrackingModel';


/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['outputBackendTemplate'][] = [DavidEnke\NewsletterContentBundle\Classes\NewsletterStatistics::class, 'clean'];
