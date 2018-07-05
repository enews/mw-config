<?php

$wgManageWikiExtensions = array(
		'addthis' => array(
			'name' => 'AddThis',
			'var' => 'wmgUseAddThis',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
 		'htmlmetaadntitle' => array(
			'name' => 'HTML Meta and Title',
			'var' => 'wmgUseAddHTMLMetaAndTitle',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'adminlinks' => array(
			'name' => 'AdminLinks',
			'var' => 'wmgUseAdminLinks',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'ajaxpoll' => array(
			'name' => 'AJAX Poll',
			'var' => 'wmgUseAJAXPoll',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'apex' => array(
			'name' => 'Apex (Skin)',
			'var' => 'wmgUseApex',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'articlefeedbackv5' => array(
			'name' => 'Article Feedback Tool V5',
			'var' => 'wmgUseArticleFeedbackv5',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'articleratings' => array(
			'name' => 'Article Ratings',
			'var' => 'wmgUseArticleRatings',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'articletocategory2' => array(
			'name' => 'Article To Category 2',
			'var' => 'wmgUseArticleToCategory2',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'authorprotect' => array(
			'name' => 'Author Protect',
			'var' => 'wmgUseAuthorProtect',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'autocreatecategorypages' => array(
			'name' => 'Auto Create Category Pages',
			'var' => 'wmgUseAutoCreateCategoryPages',
			'conflicts' => false,
			'requires' => '>500 categories',
			'restricted' => true,
		),
		'blogpage' => array(
			'name' => 'Blog Page',
			'var' => 'wmgUseBlogPage',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'mscalendar' => array(
			'name' => 'MsCalendar',
			'var' => 'wmgUseMSCalendar',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'capiunto' => array(
			'name' => 'Capiunto',
			'var' => 'wmgUseCapiunto',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'cargo' => array(
			'name' => 'Cargo',
			'var' => 'wmgUseCargo',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'charinsert' => array(
			'name' => 'CharInsert',
			'var' => 'wmgUseCharInsert',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'collapsiblevector' => array(
			'name' => 'Collapsible Vector',
			'var' => 'wmgUseCollapsibleVector',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'collection' => array(
			'name' => 'Collection (PDF)',
			'var' => 'wmgUseCollection',
			'conflicts' => false,
			'requires' => 'services',
			'restricted' => true,
		),
		'comments' => array(
			'name' => 'Comments',
			'var' => 'wmgUseComments',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'contributionscores' => array(
			'name' => 'ContributionScores',
			'var' => 'wmgUseContributionScores',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'createpage' => array(
			'name' => 'CreatePage',
			'var' => 'wmgUseCreatePage',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'createredirect' => array(
			'name' => 'CreateRedirect',
			'var' => 'wmgUseCreateRedirect',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'crossreference' => array(
			'name' => 'CrossReference',
			'var' => 'wmgUseCrossReference',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'css' => array(
			'name' => 'CSS',
			'var' => 'wmgUseCSS',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'darkvector' => array(
			'name' => 'DarkVector (Skin)',
			'var' => 'wmgUseDarkVector',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'description2' => array(
			'name' => 'Description2',
			'var' => 'wmgUseDescription2',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'dusktodawn' => array(
			'name' => 'DuskToDawn (Skin)',
			'var' => 'wmgUseDuskToDawn',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'dplforum' => array(
			'name' => 'DPLForum',
			'var' => 'wmgUseDPLForum',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'duplicator' => array(
			'name' => 'Duplicator',
			'var' => 'wmgUseDuplicator',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'dynamicpagelist' => array(
			'name' => 'DynamicPageList',
			'var' => 'wmgUseDynamicPageList',
			'conflicts' => 'dynamicpagelist3',
			'requires' => false,
			'restricted' => false,
		),
		'dynamicpagelist3' => array(
			'name' => 'DynamicPageList3',
			'var' => 'wmgUseDynamicPageList3',
			'conflicts' => 'dynamicpagelist',
			'requires' => false,
			'restricted' => false,
		),
		'editcount' => array(
			'name' => 'EditCount',
			'var' => 'wmgUseEditCount',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'educationprogram' => array(
			'name' => 'Education Program',
			'var' => 'wmgUseEducationProgram',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'electronpdfservice' => array(
			'name' => 'Electron PDF Service',
			'var' => 'wmgUseElectronPDFService',
			'conflicts' => false,
			'requires' => 'services',
			'restricted' => true,
		),
		'erudite' => array(
			'name' => 'Erudite (Skin)',
			'var' => 'wmgUseErudite',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'eventlogging' => array(
			'name' => 'EventLogging',
			'var' => 'wmgUseEventLogging',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'fancyboxthumbs' => array(
			'name' => 'Fancy Box Thumbs',
			'var' => 'wmgUseFancyBoxThumbs',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'flaggedrevs' => array(
			'name' => 'FlaggedRevs',
			'var' => 'wmgUseFlaggedRevs',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'flow' => array(
			'name' => 'Flow',
			'var' => 'wmgUseFlow',
			'conflicts' => false,
			'requires' => 'services',
			'restricted' => true,
		),
		'foreground' => array(
			'name' => 'Foreground (Skin)',
			'var' => 'wmgUseForeground',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'gamepress' => array(
			'name' => 'Gamespress (Skin)',
			'var' => 'wmgUseGamepress',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'geodata' => array(
			'name' => 'GeoData',
			'var' => 'wmgUseGeoData',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'graph' => array(
			'name' => 'Graph',
			'var' => 'wmgUseGraph',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'groupssidebar' => array(
			'name' => 'GroupsSidebar',
			'var' => 'wmgUseGroupsSidebar',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'guidedtour' => array(
			'name' => 'GuidedTour',
			'var' => 'wmgUseGuidedTour',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'hawelcome' => array(
			'name' => 'HAWelcome',
			'var' => 'wmgUseHAWelcome',
			'conflicts' => 'flow',
			'requires' => false,
			'restricted' => false,
		),
		'headertabs' => array(
			'name' => 'HeaderTabs',
			'var' => 'wmgUseHeaderTabs',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'hidesection' => array(
			'name' => 'HideSection',
			'var' => 'wmgUseHideSection',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'highlightlinksincategory' => array(
			'name' => 'HighlightLinksInCategory',
			'var' => 'wmgUseHighlightLinksInCategory',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'imagemap' => array(
			'name' => 'ImageMap',
			'var' => 'wmgUseImageMap',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'javascriptslideshow' => array(
			'name' => 'Javascript Slidehow',
			'var' => 'wmgUseJavascriptSlideshow',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'josa' => array(
			'name' => 'Josa',
			'var' => 'wmgUseJosa',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'jsbreadcrumbs' => array(
			'name' => 'JS BreadCrumbs',
			'var' => 'wmgUseJSBreadCrumbs',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'kartographer' => array(
			'name' => 'Kartographer',
			'var' => 'wmgUseKartographer',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'labeledsectiontransclusion' => array(
			'name' => 'LabeledSectionTransclusion',
			'var' => 'wmgUseLabeledSectionTransclusion',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'liberty' => array(
			'name' => 'Liberty (Skin)',
			'var' => 'wmgUseLiberty',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'loginnotify' => array(
			'name' => 'Login Notify',
			'var' => 'wmgUseLoginNotify',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'loopscombo' => array(
			'name' => 'Loops',
			'var' => 'wmgUseLoopsCombo',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'magicnocache' => array(
			'name' => 'MagicNoCache',
			'var' => 'wmgUseMagicNoCache',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'maps' => array(
			'name' => 'Maps',
			'var' => 'wmgUseMaps',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'masseditregex' => array(
			'name' => 'MassEditRegex',
			'var' => 'wmgUseMassEditRegex',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'metrolook' => array(
			'name' => 'Metrolook (Skin)',
			'var' => 'wmgUseMetrolook',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'modernskylight' => array(
			'name' => 'ModernSkylight (Skin)',
			'var' => 'wmgUseModernSkylight',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'msupload' => array(
			'name' => 'MsUpload',
			'var' => 'wmgUseMsUpload',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'multimediaviewer' => array(
			'name' => 'Multimedia Viewer',
			'var' => 'wmgUseMultimediaViewer',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'multiboilerplate' => array(
			'name' => 'MultiBoilerplate',
			'var' => 'wmgUseMultiBoilerplate',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'myvariables' => array(
			'name' => 'MyVariables',
			'var' => 'wmgUseMyVariables',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'newestpages' => array(
			'name' => 'NewestPages',
			'var' => 'wmgUseNewestPages',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'news' => array(
			'name' => 'News',
			'var' => 'wmgUseNews',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'newsignuppage' => array(
			'name' => 'New Signup Page',
			'var' => 'wmgUseNewSignupPage',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'newsletter' => array(
			'name' => 'Newsletter',
			'var' => 'wmgUseNewsletter',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'newusermessage' => array(
			'name' => 'New User Message',
			'var' => 'wmgUseNewUserMessage',
			'conflicts' => 'flow',
			'requires' => false,
			'restricted' => false,
		),
		'newusernotif' => array(
			'name' => 'New User Nofifications',
			'var' => 'wmgUseNewUserNotif',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'notitle' => array(
			'name' => 'NoTitle',
			'var' => 'wmgUseNoTitle',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'opengraphmeta' => array(
			'name' => 'OpenGraphMeta',
			'var' => 'wmgUseOpenGraphMeta',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'pagedtiffhandler' => array(
			'name' => 'PagedTiffHandler',
			'var' => 'wmgUsePagedTiffHandler',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'pageforms' => array(
			'name' => 'Page Forms',
			'var' => 'wmgUsePageForms',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'pagenotice' => array(
			'name' => 'Page Notice',
			'var' => 'wmgUsePageNotice',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'pagetriage' => array(
			'name' => 'Page Triage',
			'var' => 'wmgUsePageTriage',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'pdfbook' => array(
			'name' => 'PDFBook',
			'var' => 'wmgUsePDFBook',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'pdfembed' => array(
			'name' => 'PDF Embed',
			'var' => 'wmgUsePDFEmbed',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'pdfhandler' => array(
			'name' => 'PDF Handler',
			'var' => 'wmgUsePDFHandler',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'pipeescape' => array(
			'name' => 'Pipe Escape',
			'var' => 'wmgUsePipeEscape',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'pivot' => array(
			'name' => 'Pivot (Skin)',
			'var' => 'wmgUsePivot',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'popups' => array(
			'name' => 'Popups',
			'var' => 'wmgUsePopups',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'poll' => array(
			'name' => 'Poll',
			'var' => 'wmgUsePoll',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'proofreadpages' => array(
			'name' => 'Proofread Pages',
			'var' => 'wmgUseProofreadPage',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'protectsite' => array(
			'name' => 'Protect Site',
			'var' => 'wmgUseProtectSite',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'quiz' => array(
			'name' => 'Quiz',
			'var' => 'wmgUseQuiz',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'quizgame' => array(
			'name' => 'Quiz Game',
			'var' => 'wmgUseQuizGame',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'randomgameunit' => array(
			'name' => 'RandomGameUnit (SocialProfile)',
			'var' => 'wmgUseRandomGameUnit',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'randomselection' => array(
			'name' => 'RandomSelection',
			'var' => 'wmgUseRandomSelection',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'refreshed' => array(
			'name' => 'Refreshed (Skin)',
			'var' => 'wmgUseRefreshed',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'relatedarticles' => array(
			'name' => 'Related Articles',
			'var' => 'wmgUseRelatedArticles',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'replacetext' => array(
			'name' => 'Replace Text',
			'var' => 'wmgUseReplaceText',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'rss' => array(
			'name' => 'RSS',
			'var' => 'wmgUseRSS',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'sandboxlink' => array(
			'name' => 'Sandbox Link',
			'var' => 'wmgUseSandboxLink',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'score' => array(
			'name' => 'Score',
			'var' => 'wmgUseScore',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'simplechanges' => array(
			'name' => 'Simple Changes',
			'var' => 'wmgUseSimpleChanges',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'simpletooltip' => array(
			'name' => 'Simple Tooltip',
			'var' => 'wmgUseSimpleTooltip',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'sitescout' => array(
			'name' => 'SiteScout',
			'var' => 'wmgUseSiteScout',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'socialprofile' => array(
			'name' => 'SocialProfile',
			'var' => 'wmgUseSocialProfile',
			'conflicts' => false,
			'requires' => 'file server changes',
			'restricted' => true,
		),
		'spoilers' => array(
			'name' => 'Spoilers',
			'var' => 'wmgUseSpoilers',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'subpagefun' => array(
			'name' => 'SubPageFun',
			'var' => 'wmgUseSubpageFun',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'subpagelist3' => array(
			'name' => 'SubPageList3',
			'var' => 'wmgUseSubPageList3',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'syntaxhighlight' => array(
			'name' => 'SyntaxHighlight',
			'var' => 'wmgUseSyntaxHighlight',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'tabscombination' => array(
			'name' => 'TabsCombination (Tabber + Tabs)',
			'var' => 'wmgUseTabsCombination',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'templatesandbox' => array(
			'name' => 'Template Sandbox',
			'var' => 'wmgUseTemplateSandbox',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'templatestyles' => array(
			'name' => 'Template Styles',
			'var' => 'wmgUseTemplateStyles',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'theme' => array(
			'name' => 'Theme',
			'var' => 'wmgUseTheme',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'timedmediahandler' => array(
			'name' => 'TimedMediaHandler',
			'var' => 'wmgUseTimedMediaHandler',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'titlekey' => array(
			'name' => 'TitleKey',
			'var' => 'wmgUseTitleKey',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'toctree' => array(
			'name' => 'TOC Tree',
			'var' => 'wmgUseTocTree',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'translate' => array(
			'name' => 'Translate',
			'var' => 'wmgUseTranslate',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'tweeki' => array(
			'name' => 'Tweeki (Skin)',
			'var' => 'wmgUseTweeki',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'twocolconflict' => array(
			'name' => 'TwoColConflict',
			'var' => 'wmgUseTwoColConflict',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'urlgetparameters' => array(
			'name' => 'UrlGetParamters',
			'var' => 'wmgUseUrlGetParameters',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'userwelcome' => array(
			'name' => 'UserWelcome',
			'var' => 'wmgUseUserWelcome',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'variables' => array(
			'name' => 'Variable',
			'var' => 'wmgUseVariables',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'voteny' => array(
			'name' => 'VoteNY',
			'var' => 'wmgUseVoteNY',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'visualeditor' => array(
			'name' => 'VisualEditor',
			'var' => 'wmgUseVisualEditor',
			'conflicts' => false,
			'requires' => 'services',
			'restricted' => true,
		),
		'widgets' => array(
			'name' => 'Widgets',
			'var' => 'wmgUseWidgets',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'wikibaserepository' => array(
			'name' => 'Wikibase (Repository)',
			'var' => 'wmgUseWikibaseRepository',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'wikiforum' => array(
			'name' => 'WikiForum',
			'var' => 'wmgUseWikiForum',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'wikilove' => array(
			'name' => 'WikiLove',
			'var' => 'wmgUseWikiLove',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'wikitextloggedinout' => array(
			'name' => 'WikiText Logged In Out',
			'var' => 'wmgUseWikiTextLoggedInOut',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'youtube' => array(
			'name' => 'YouTube',
			'var' => 'wmgUseYouTube',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
);

/**
 * ManageWiki settings are added using the variable below.
 *
 * Type can be either: check, list, list-multi, matrix, text, url or wikipage.
 *
 * check: adds a checkbox.
 * list: DO NOT USE.
 * list-multi: DO NOT USE.
 * matrix: DO NOT USE.
 * text: adds a single line text entry.
 * url: adds a single line text entry which requires a full URL.
 * wikipage: DO NOT USE.
 *
 * Other variables that are required are name and requires.
 *
 * name: the displayed name of the setting on Special:ManageWiki.
 * requires: a text entry of which extension is required for this setting to work.
 * overridedefault: a string/array override default when no existing value exist.
 */
$wgManageWikiSettings = array(
	'wgFavicon' => array(
		'name' => 'Favicon',
		'requires' => false,
		'type' => 'text',
		'overridedefault' => null,
	),
	'wgLogo' => array(
		'name' => 'Logo',
		'requires' => false,
		'type' => 'text',
		'overridedefault' => null,
	),
	'wmgWikiLicense' => array(
		'name' => 'Content License',
		'requires' => false,
		'type' => 'list',
		'options' => array(
			'All Rights Reserved' => 'arr',
			'Creative Commons BY 4.0' => 'cc-by',
			'Creative Commons BY-NC 4.0' => 'cc-by-nc',
			'Creative Commons BY-ND 4.0' => 'cc-by-nd',
			'Creative Commons BY-SA 4.0' => 'cc-by-sa',
			'Creative Commons BY-SA 2.0 Korea' => 'cc-by-sa-2-0-kr',
			'Creative Commons BY-SA-NC 4.0' => 'cc-by-sa-nc',
			'Creative Commons BY-NC-ND 4.0' => 'cc-by-nc-nd',
			'Public Domain' => 'cc-pd',
			'No license provided' => 'empty',
		),
		'overridedefault' => 'cc-by-sa',
	),
);
