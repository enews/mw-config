<?php

// Set up extensions for use on wikis that are not global
//if ( $wmgUseAccessControl ) { // Causes errors with 1.29 --Reception123
//	require_once( "$IP/extensions/AccessControl/AccessControl.php" );
//}

if ( $wmgUseAddThis ) {
	require_once( "$IP/extensions/AddThis/AddThis.php" );
}

if ( $wmgUseAddHTMLMetaAndTitle ) {
	require_once( "$IP/extensions/AddHTMLMetaAndTitle/Add_HTML_Meta_and_Title.php" );
}

if ( $wmgUseAdminLinks ) {
	require_once( "$IP/extensions/AdminLinks/AdminLinks.php" );
}

if ( $wmgUseAJAXPoll ) {
	wfLoadExtension( 'AJAXPoll' );
	// Hiding information is not the wiki way
	$wgGroupPermissions['*']['ajaxpoll-view-results'] = true;
	$wgGroupPermissions['*']['ajaxpoll-view-results-before-vote'] = true;
}

if ( $wmgUseApex ) {
	wfLoadSkin( 'apex' );
}

if ( $wmgUseArticleFeedbackv5 ) {
	wfLoadExtension( 'ArticleFeedbackv5' );
}

if ( $wmgUseArticleRatings ) {
	wfLoadExtension( 'ArticleRatings' );
}

if ( $wmgUseArticleToCategory2 ) {
	require_once( "$IP/extensions/ArticleToCategory2/ArticleToCategory2.php" );
}

if ( $wmgUseAuthorProtect ) {
	require_once( "$IP/extensions/AuthorProtect/AuthorProtect.php" );
}

if ( $wmgUseAutoCreateCategoryPages ) {
	wfLoadExtension( 'AutoCreateCategoryPages' );
}

if ( $wmgUseBlogPage ) {
	require_once( "$IP/extensions/SocialProfile/SocialProfile.php" );
	wfLoadExtension( 'BlogPage' );
	$wgBlogPageDisplay['comments_of_day'] = false;
}

if ( $wmgUseMSCalendar ) {
	wfLoadExtension( 'MsCalendar' );
}

if ( $wmgUseCargo ) {
	wfLoadExtension( 'Cargo' );
	$wgCargoDBname = 'cargodb';
	$wgCargoDBtype = $wgDBtype;
	$wgCargoDBserver = "81.4.127.157";
	$wgCargoDBuser = $wgDBuser;
	$wgCargoDBpassword = $wgDBpassword;
}

if ( $wmgUseCategoryTree ) {
	wfLoadExtension( 'CategoryTree' );
}

if ( $wmgUseCapiunto ) {
	wfLoadExtension( 'Capiunto' );
}

if ( $wmgUseCentralNotice ) {
	wfLoadExtension( 'CentralNotice' );
}

if ( $wmgUseCharInsert ) {
	wfLoadExtension( 'CharInsert' );
}

if ( $wmgUseCollapsibleVector ) {
	wfLoadExtension( 'CollapsibleVector' );
}

if ( $wmgUseComments ) {
	wfLoadExtension( 'Comments' );
	$wgGroupPermissions['sysop']['commentadmin'] = true;

}

if ( $wmgUseContactPage ) {
	wfLoadExtension( 'ContactPage' );

	// Contact Page is a fairly complex (well long) extension to configure.
	// All config should be in the file below on a wikidb basis.
	require_once( "/srv/mediawiki/config/ContactPage.php" );
}

if ( $wmgUseContributionScores ) {
	require_once( "$IP/extensions/ContributionScores/ContributionScores.php" );
}


if ( $wmgUseCookieWarning ) {
	wfLoadExtension( 'CookieWarning' );
	// Geolocate here to determine to whom to show the cookie warning
	$wgCookieWarningEnabled = true;
	// Haha just kidding -- annoy everyone
}

if ( $wmgUseCreatePage ) {
	require_once( "$IP/extensions/CreatePage/CreatePage.php" );
}

if ( $wmgUseCreateRedirect ) {
	require_once( "$IP/extensions/CreateRedirect/CreateRedirect.php" );
}

if ( $wmgUseCreateWiki ) {
	wfLoadExtension( 'CreateWiki' );
	$wgCreateWikiSQLfiles = $wmgCreateWikiSQLfiles;
}

if ( $wmgUseCrossReference ) {
	require_once( "$IP/extensions/CrossReference/CrossReference.php" );
}

if ( $wmgUseCSS ) {
	wfLoadExtension( 'CSS' );
}

if ( $wmgUseCustomHeader ) {
	wfLoadExtension( 'CustomHeader' );
}

if ( $wmgUseDarkVector ) {
	wfLoadSkin( 'DarkVector' );
}

if ( $wmgUseDismissableSiteNotice ) {
	wfLoadExtension( 'DismissableSiteNotice' );
}

if ( $wmgUseDuskToDawn ) {
	wfLoadSkin( 'DuskToDawn' );
}

if ( $wmgUseDonateBoxInSidebar ) {
	require_once( "$IP/extensions/DonateBoxInSidebar/DonateBoxInSidebar.php" );
}

if ( $wmgUseDPLForum ) {
	wfLoadExtension( 'DPLForum' );
}

if ( $wmgUseDuplicator ) {
	require_once( "$IP/extensions/Duplicator/Duplicator.php" );
}

if ( $wmgUseDynamicPageList ) {
	wfLoadExtension( 'DynamicPageList' );
}

if ( $wmgUseDynamicPageList3 ) {
	wfLoadExtension( 'DynamicPageList3' );
}

if ( $wmgUseEditcount ) {
	wfLoadExtension( 'Editcount' );
}

if ( $wmgUseEditSubpages ) {
	wfLoadExtension( 'EditSubpages' );
}

if ( $wmgUseEducationProgram ) {
	wfLoadExtension( 'EducationProgram' );
}

if ( $wmgUseElectronPdfService ) {
	wfLoadExtension( 'ElectronPdfService' );
}

if ( $wmgUseErudite ) {
	wfLoadSkin( 'erudite' );
}

if ( $wmgUseEventLogging) {
	wfLoadExtension( 'EventLogging' );
	$wgEventLoggingBaseUri = 'http://localhost:8080/event.gif';
	$wgEventLoggingFile = '$wmgLogDir/debuglogs/events.log';
}

if ( $wmgUseFancyBoxThumbs ) {
	require_once( "$IP/extensions/FancyBoxThumbs/FancyBoxThumbs.php" );
}

if ( $wmgUseFlaggedRevs ) {
	require_once( "$IP/extensions/FlaggedRevs/FlaggedRevs.php" );

	$wgFlaggedRevsNamespaces = $wmgFlaggedRevsNamespaces;
	$wgFlaggedRevsProtection = $wmgFlaggedRevsProtection;
	$wgFlaggedRevsTags = $wmgFlaggedRevsTags;
	$wgFlaggedRevsTagsRestrictions = $wmgFlaggedRevsTagsRestrictions;
	$wgFlaggedRevsTagsAuto = $wmgFlaggedRevsTagsAuto;
	$wgFlaggedRevsAutopromote = $wmgFlaggedRevsAutopromote;
	$wgFlaggedRevsAutoReview = $wmgFlaggedRevsAutoReview;
	$wgFlaggedRevsRestrictionLevels = $wmgFlaggedRevsRestrictionLevels;
	$wgSimpleFlaggedRevsUI = $wmgSimpleFlaggedRevsUI;
	$wgFlaggedRevsLowProfile = $wmgFlaggedRevsLowProfile;
}

if ( $wmgUseFlow ) {
	wfLoadExtension( 'Flow' );
	$wgGroupPermissions['bureaucrat']['flow-create-board'] = true;

	$wgVirtualRestConfig['modules']['parsoid'] = array(
		'url' => 'https://parsoid1.miraheze.org:443',
		'prefix' => $wgDBname,
		'forwardCookies' => true,
	);
}

if ( $wmgFlowDefaultNamespaces && $wmgUseFlow ) {
	$wgNamespaceContentModels = array(
		NS_TALK => 'flow-board',
		NS_USER_TALK => 'flow-board',
		NS_PROJECT_TALK => 'flow-board',
		NS_FILE_TALK => 'flow-board',
		NS_MEDIAWIKI_TALK => 'flow-board',
		NS_TEMPLATE_TALK => 'flow-board',
		NS_HELP_TALK => 'flow-board',
		NS_CATEGORY_TALK => 'flow-board',
	) + $wgNamespaceContentModels;
}

if ( $wmgUseFeaturedFeeds ) {
	wfLoadExtension( 'FeaturedFeeds' );
}

if ( $wmgUseForeground ) {
	wfLoadSkin( 'foreground' );
}

if ( $wmgUseGamepress ) {
    wfLoadSkin( 'Gamepress' );
}

if ( $wmgUseGraph ) {
	wfLoadExtension( 'Graph' );
}

if ( $wmgUseGroupsSidebar ) {
	require_once( "$IP/extensions/GroupsSidebar/GroupsSidebar.php" );
}

if ( $wmgUseGuidedTour ) {
	wfLoadExtension( 'GuidedTour' );
}

if ( $wmgUseHAWelcome ) {
	wfLoadExtension( 'HAWelcome' );
}

if ( $wmgUseHeaderTabs ) {
	wfLoadExtension( 'HeaderTabs' );
	if ( $wgDBname == 'extloadwiki' ) {
		// load LC despite SectionHide's strong objections
		unset( $htUseHistory );
	}
}

if ( $wmgUseHideSection ) {
	wfLoadExtension( 'HideSection' );
}

if ( $wmgUseHighlightLinksInCategory ) {
	wfLoadExtension( 'HighlightLinksInCategory' );
}

if ( $wmgUseImageMap ) {
	wfLoadExtension( 'ImageMap' );
}

if ( $wmgUseJavascriptSlideshow ) {
	require_once( "$IP/extensions/JavascriptSlideshow/JavascriptSlideshow.php" );
}

if ( $wmgUseJosa ) {
	wfLoadExtension( 'Josa' );
}

if ( $wmgUseLabeledSectionTransclusion ) {
	wfLoadExtension( 'LabeledSectionTransclusion' );
}

if ( $wmgUseLinkSuggest ) {
	wfLoadExtension( 'LinkSuggest' );
}

if ( $wmgUseLoginNotify ) {
	wfLoadExtension( 'LoginNotify' );
}

if ( $wmgUseLoopsCombo ) {
	require_once( "$IP/extensions/Variables/Variables.php" );
	require_once( "$IP/extensions/Loops/Loops.php");
}

if ( $wmgUseMagicNoCache ) {
	require_once( "$IP/extensions/MagicNoCache/MagicNoCache.php" );
}
	
if ( $wmgUseMaps ) {
	require_once( "$IP/extensions/Maps/Maps.php" );
	$egMapsDefaultService = 'openlayers';
	$egMapsDisableSmwIntegration = true;
	$egMapsGMaps3ApiKey = $wmgMapsGMaps3ApiKey;
}

if ( $wmgUseMassEditRegex ) {
	require_once( "$IP/extensions/MassEditRegex/MassEditRegex.php" );
	$wgGroupPermissions['sysop']['masseditregex'] = true;
}

if ( $wmgUseMediaWikiChat ) {
	wfLoadExtension( 'MediaWikiChat' );
}

if ( $wmgUseMetrolook ) {
	wfLoadSkin( 'Metrolook' );
}

if ( $wmgUseMobileFrontend ) {
	wfLoadExtension( 'MobileFrontend' );
	wfLoadSkin( 'MinervaNeue' );

	$wgMFAutodetectMobileView = $wmgMFAutodetectMobileView;
}

if ( $wmgUseModeration ) {
	wfLoadExtension( 'Moderation' );
}

if ( $wmgUseModernSkylight ) {
	wfLoadSkin( 'ModernSkylight' );
}

if ( $wmgUseMsPackage ) {
	wfLoadExtension( 'MsUpload' );
	wfLoadExtension( 'MsLinks' );
	wfLoadExtension( 'MsCatSelect' );
}

if ( $wmgUseMsUpload ) {
	wfLoadExtension( 'MsUpload' );
}

if ( $wmgUseMultimediaViewer ) {
	wfLoadExtension( 'MultimediaViewer' );
}

if ( $wmgUseMultiBoilerplate ) {
	wfLoadExtension( 'MultiBoilerplate' );
	$wgMultiBoilerplateDisplaySpecialPage = true;
	$wgMultiBoilerplateOptions = false;
}

if ( $wmgUseNewestPages ) {
	wfLoadExtension( 'NewestPages' );
}

if ($wmgUseNews ) {
	require_once( "$IP/extensions/News/News.php" );
}

if ( $wmgUseNewSignupPage ) {
	wfLoadExtension( 'NewSignupPage' );
}

if ( $wmgUseNewsletter ) {
	wfLoadExtension( 'Newsletter' );
	$wgGroupPermissions['confirmed']['newsletter-create'] = true;
}

if ( $wmgUseNewUserMessage ) {
	wfLoadExtension( 'NewUserMessage' );
}

if ( $wmgUseNewUsersList ) {
	wfLoadExtension( 'NewUsersList' );
}

if ( $wmgUseNostalgia ) {
	wfLoadSkin( 'Nostalgia' );
}

if ( $wmgUseNoTitle ) {
	require_once( "$IP/extensions/NoTitle/NoTitle.php" );
	$wgRestrictDisplayTitle = false;
}

if ( $wmgUseOpenGraphMeta ) {
	wfLoadExtension( 'OpenGraphMeta' );
}

if ( $wmgUsePagedTiffHandler ) {
	wfLoadExtension( 'PagedTiffHandler' );
}

if ( $wmgUsePageForms ) {
	wfLoadExtension( 'PageForms' );
}

if ( $wmgUsePageNotice ) {
	require_once( "$IP/extensions/PageNotice/PageNotice.php" );
}

if ( $wmgUsePageTriage ) {
	wfLoadExtension( 'PageTriage' );
}

if ( $wmgUsePdfBook ) {
	wfLoadExtension( 'PdfBook/MediaWiki/PdfBook' );
}

if ( $wmgUsePDFEmbed ) {
	wfLoadExtension( 'PDFEmbed' );
}

if ( $wmgUsePdfHandler ) {
	wfLoadExtension( 'PdfHandler' );
}

if ( $wmgUsePoll ) {
	require_once( "$IP/extensions/Poll/Poll.php" );
}

if ( $wmgUsePopups ) {
	wfLoadExtension( 'PageImages' );
	wfLoadExtension( 'Popups' );
	wfLoadExtension( 'TextExtracts' );
}

if ( $wmgUseProofreadPage ) {
	wfLoadExtension( 'ProofreadPage' );

	$wgExtraNamespaces[NS_PROOFREAD_PAGE] = 'Page';
	$wgExtraNamespaces[NS_PROOFREAD_PAGE_TALK] = 'Page_talk';
	$wgExtraNamespaces[NS_PROOFREAD_INDEX] = 'Index';
	$wgExtraNamespaces[NS_PROOFREAD_INDEX_TALK] = 'Index_talk';
	$wgProofreadPageNamespaceIds = array(
		'index' => NS_PROOFREAD_INDEX,
		'page' => NS_PROOFREAD_PAGE
	);
}

if ( $wmgUseProtectSite ) {
	wfLoadExtension( 'ProtectSite' );
}

if ( $wmgUseQuiz ) {
	wfLoadExtension( 'Quiz' );
}

if ( $wmgUseQuizGame ) {
	wfLoadExtension( 'QuizGame' );
}

if ( $wmgUseRandomSelection ) {
	require_once( "$IP/extensions/RandomSelection/RandomSelection.php" );
}

if ( $wmgUseRefreshed ) {
	wfLoadSkin( 'Refreshed' );
}

if ( $wmgUseRelatedArticles ) {
	wfLoadExtension( 'RelatedArticles' );
}

if ( $wmgUseReplaceText ) {
	wfLoadExtension( 'ReplaceText' );
}

if ( $wmgUseRSS ) {
	wfLoadExtension( 'RSS' );
	$wgRSSUrlWhitelist = array( "*" );
}

if ( $wmgUseSandboxLink ) {
	wfLoadExtension ( 'SandboxLink' );
}

if ( $wmgUseScratchBlocks ) {
	wfLoadExtension( "ScratchBlocks" );
}

if ( $wmgUseScore ) {
	wfLoadExtension( 'Score' );
}

if ( $wmgUseSimpleChanges ) {
	require_once( "$IP/extensions/SimpleChanges/SimpleChanges.php" );
}

if ( $wmgUseSyntaxHighlight ) {
        $wgScribuntoUseGeSHi = true;
}

if ( $wmgUseShortURL ) {
	wfLoadExtension ( 'UrlShortener' );
}

if ( $wmgUseSimpleTooltip ) {
	require_once( "$IP/extensions/SimpleTooltip/SimpleTooltip.php" );
}

if ( $wmgUseSiteScout ) {
	wfLoadExtension( 'SiteScout' );
}

if ( $wmgUseSocialProfile ) {
	require_once( "$IP/extensions/SocialProfile/SocialProfile.php" );
	unset( $wgGroupPermissions['staff'] );
	$wgGroupPermissions['sysop']['editothersprofiles'] = true;
}

if ( $wmgUseSpoilers ) {
	wfLoadExtension( 'Spoilers' );
}

if ( $wmgUseSubpageFun ) {
	require_once( "$IP/extensions/SubpageFun/SubpageFun.php" );
}

if ( $wmgUseSubPageList3 ) {
	wfLoadExtension( 'SubPageList3' );
}

if ( $wmgUseSyntaxHighlight ) {
	wfLoadExtension( 'SyntaxHighlight_GeSHi' );
}

if ( $wmgUseTabsCombination ) {
	wfLoadExtension( 'Tabber' );
	require_once( "$IP/extensions/Tabs/Tabs.php" );
}

if ( $wmgUseTemplateSandbox ) {
	wfLoadExtension( 'TemplateSandbox' );
}

if ( $wmgUseTemplateStyles ) {
	wfLoadExtension( 'TemplateStyles' );
}

if ( $wmgUseTimeless ) {
	wfLoadSkin( 'Timeless' );
}

if ( $wmgUseTranslate ) {
	wfLoadExtension( 'UniversalLanguageSelector' );
	require_once( "$IP/extensions/Translate/Translate.php" );
	$wgGroupPermissions['sysop']['pagetranslation'] = true;
	$wgGroupPermissions['sysop']['translate-import'] = true;
	$wgGroupPermissions['sysop']['translate-manage'] = true;
	$wgGroupPermissions['*']['translate'] = true;
	$wgGroupPermissions['user']['translate-messagereview'] = true;
	$wgTranslateBlacklist = $wmgTranslateBlacklist;
	$wgTranslateTranslationServices = $wmgTranslateTranslationServices;
	$wgTranslateDocumentationLanguageCode = $wmgTranslateDocumentationLanguageCode;
	require_once( "/srv/mediawiki/config/TranslateConfigHack.php" );
	$wgULSGeoService = false;
}

if ( $wmgUseTheme ) {
	wfLoadExtension( 'Theme' );
}

if ( $wmgUseTimedMediaHandler ) {
	wfLoadExtension( 'MwEmbedSupport' );
	require_once( "$IP/extensions/TimedMediaHandler/TimedMediaHandler.php" );
	$wgFFmpeg2theoraLocation = '/usr/bin/ffmpeg2theora';
}

if ( $wmgUseTitleKey ) {
	wfLoadExtension( 'TitleKey' );
}

if ( $wmgUseTocTree ) {
	wfLoadExtension( 'TocTree' );
}

if ( $wmgUseTweeki ) {
	wfLoadSkin( 'Tweeki' );
}

if ( $wmgUseUrlGetParameters ) {
	require_once( "$IP/extensions/UrlGetParameters/UrlGetParameters.php" );
}

if ( $wmgUseUserWelcome ) {
	require_once( "$IP/extensions/SocialProfile/SocialProfile.php" );
   	require_once( "$IP/extensions/SocialProfile/UserWelcome/UserWelcome.php" );
}

if ( $wmgUseVariables ) {
	require_once( "$IP/extensions/Variables/Variables.php" );
}

if ( $wmgUseVisualEditor ) {
	wfLoadExtension ( 'VisualEditor' );
	
	$wgVirtualRestConfig['modules']['parsoid'] = array(
		'url' => 'https://parsoid1.miraheze.org:443',
		'prefix' => $wgDBname,
		'forwardCookies' => true,
	);


	if ( $wmgVisualEditorEnableDefault ) {
		$wgDefaultUserOptions['visualeditor-enable'] = 1;
		$wgDefaultUserOptions['visualeditor-editor'] = "visualeditor";
	} else {
		$wgDefaultUserOptions['visualeditor-enable'] = 0;
	}

	$wgVisualEditorAvailableNamespaces = $wmgVisualEditorAvailableNamespaces;

	// Load TemplateData
	wfLoadExtension( 'TemplateData' );
}

if ( $wmgUseVoteNY ) {
	wfLoadExtension( 'VoteNY' );
}

if ( $wmgUseWebChat ) {
	wfLoadExtension( 'WebChat' );
	$wgWebChatClient = $wmgWebChatClient;
	$wgWebChatServer = $wmgWebChatServer;
	$wgWebChatChannel = $wmgWebChatChannel;
	$wgWebChatClients['Mibbit']['url'] = '//embed.mibbit.com/index.html';

}

if ( $wmgUseWhoIsWatching ) {
	wfLoadExtension( 'WhoIsWatching' );
}

if ( $wmgUseWidgets ) {
	require_once( "$IP/extensions/Widgets/Widgets.php" );
}

if ( $wmgUseWikibaseRepository ) {
	$wgEnableWikibaseRepo = true;
	require_once( "$IP/extensions/Wikibase/repo/Wikibase.php" );

	// Includes Wikibase Configuration. There is a global and per-wiki system here.
	require_once( "/srv/mediawiki/config/Wikibase.php" );
}

if ( $wmgUseWikiDiscover ) {
	wfLoadExtension( 'WikiDiscover' );
}

if ( $wmgUseWikiForum ) {
	wfLoadExtension( 'WikiForum' );
}

if ( $wmgUsewikihiero ) {
	wfLoadExtension( 'wikihiero' );
}

if ( $wmgUseWikiLove ) {
	wfLoadExtension( 'WikiLove' );
}

if ( $wmgUseWikiTextLoggedInOut ) {
	wfLoadExtension( 'WikiTextLoggedInOut' );
}

if ( $wmgUseYouTube ) {
	require_once( "$IP/extensions/YouTube/YouTube.php" );
}
