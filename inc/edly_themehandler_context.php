<?php
/*
@edlyRef: @theme_edly/layout
 */

defined('MOODLE_INTERNAL') || die();

$templatecontext = [
    'sitename'                  => format_string($SITE->shortname, true, ['context' => context_course::instance(SITEID), "escape" => false]),
    'output'                    => $OUTPUT,
    'pageheading'               => $pageheading,
    'leftblocks'                => $leftblocks,
    'user_profile_picture'      => new moodle_url('/user/pix.php/'.$USER->id.'/f1.jpg'),
    'profile_icon_username'     => $edlyProfileIconUsername,
    'login_url'                 => $login_url,
    'signup_url'                => $signup_url,
    'isloggedin'                => $isloggedin,
    'sidepreblocks'             => $blockshtml,
    'hasblocks'                 => $hasblocks,
    'bodyattributes'            => $bodyattributes,
    'primarymoremenu'           => $primarymenu['moremenu'],
    'secondarymoremenu'         => $secondarynavigation ?: false,
    'mobileprimarynav'          => $primarymenu['mobileprimarynav'],
    'usermenu'                  => $primarymenu['user'],
    'langmenu'                  => $primarymenu['lang'],
    'headercontent'             => $headercontent,
    'overflow'                  => $overflow,
    'favicon'                   => $favicon,
    'addblockbutton'            => $addblockbutton,
    'blocks_fullwidth_top'      => $blocks_fullwidth_top,
    'blocks_fullwidth_bottom'   => $blocks_fullwidth_bottom,
    'blocks_above_content'      => $blocks_above_content,
    'has_blocks_above_content'  => !empty($blocks_above_content),
    'blocks_below_content'      => $blocks_below_content,
    'has_blocks_below_content'  => !empty($blocks_below_content),
    'has_blocks_fullwidth_top'  => !empty($blocks_fullwidth_top),
    'regionmainsettingsmenu'    => $regionmainsettingsmenu,
    'hasregionmainsettingsmenu' => !empty($regionmainsettingsmenu),
    'edly_globalsearch_navbar' => $edly_globalsearch_navbar,
    'logo_visibility'           => $logo_visibility,
    'main_logo'                 => $main_logo,
    'logo_styles'               => $logo_styles,
    'mobile_logo'               => $mobile_logo,
    'mobile_logo_styles'        => $mobile_logo_styles,
    'header_search_bar'         => $header_search,
    'top_header_content'        => $top_header_content,
    'top_header_right_content'  => $top_header_right_content,
    'top_header'                => $top_header,
    'header_btn_url'            => $header_btn_url,
    'header_left_btn_text'      => $header_left_btn_text,
    'header_left_btn_url'       => $header_left_btn_url,
    'header_btn_icon'           => $header_btn_icon,

    'footer_logo_visibility'    => $footer_logo_visibility,
    'main_footer_logo'          => $main_footer_logo,
    'footer_logo_styles'        => $footer_logo_styles,

    'social_target_href' => $social_target_href,
    'edly_facebook_url' => get_config('theme_edly', 'edly_facebook_url'),
    'edly_twitter_url' => get_config('theme_edly', 'edly_twitter_url'),
    'edly_instagram_url' => get_config('theme_edly', 'edly_instagram_url'),
    'edly_pinterest_url' => get_config('theme_edly', 'edly_pinterest_url'),
    'edly_dribbble_url' => get_config('theme_edly', 'edly_dribbble_url'),
    'edly_google_url' => get_config('theme_edly', 'edly_google_url'),
    'edly_youtube_url' => get_config('theme_edly', 'edly_youtube_url'),
    'edly_vk_url' => get_config('theme_edly', 'edly_vk_url'),
    'edly_500px_url' => get_config('theme_edly', 'edly_500px_url'),
    'edly_behance_url' => get_config('theme_edly', 'edly_behance_url'),
    'edly_digg_url' => get_config('theme_edly', 'edly_digg_url'),
    'edly_flickr_url' => get_config('theme_edly', 'edly_flickr_url'),
    'edly_foursquare_url' => get_config('theme_edly', 'edly_foursquare_url'),
    'edly_linkedin_url' => get_config('theme_edly', 'edly_linkedin_url'),
    'edly_medium_url' => get_config('theme_edly', 'edly_medium_url'),
    'edly_meetup_url' => get_config('theme_edly', 'edly_meetup_url'),
    'edly_snapchat_url' => get_config('theme_edly', 'edly_snapchat_url'),
    'edly_tumblr_url' => get_config('theme_edly', 'edly_tumblr_url'),
    'edly_vimeo_url' => get_config('theme_edly', 'edly_vimeo_url'),
    'edly_wechat_url' => get_config('theme_edly', 'edly_wechat_url'),
    'edly_whatsapp_url' => get_config('theme_edly', 'edly_whatsapp_url'),
    'edly_wordpress_url' => get_config('theme_edly', 'edly_wordpress_url'),
    'edly_weibo_url' => get_config('theme_edly', 'edly_weibo_url'),
    'edly_telegram_url' => get_config('theme_edly', 'edly_telegram_url'),
    'edly_moodle_url' => get_config('theme_edly', 'edly_moodle_url'),
    'edly_amazon_url' => get_config('theme_edly', 'edly_amazon_url'),
    'edly_slideshare_url' => get_config('theme_edly', 'edly_slideshare_url'),
    'edly_soundcloud_url' => get_config('theme_edly', 'edly_soundcloud_url'),
    'edly_leanpub_url' => get_config('theme_edly', 'edly_leanpub_url'),
    'edly_xing_url' => get_config('theme_edly', 'edly_xing_url'),
    'edly_bitcoin_url' => get_config('theme_edly', 'edly_bitcoin_url'),
    'edly_twitch_url' => get_config('theme_edly', 'edly_twitch_url'),
    'edly_github_url' => get_config('theme_edly', 'edly_github_url'),
    'edly_gitlab_url' => get_config('theme_edly', 'edly_gitlab_url'),
    'edly_forumbee_url' => get_config('theme_edly', 'edly_forumbee_url'),
    'edly_trello_url' => get_config('theme_edly', 'edly_trello_url'),
    'edly_weixin_url' => get_config('theme_edly', 'edly_weixin_url'),
    'edly_slack_url' => get_config('theme_edly', 'edly_slack_url'),

    'footer_copyright'       => $footer_copyright,
    'banner_shape_image'     => $banner_shape_image,
    'banner_shape_image2'    => $banner_shape_image2,
    'back_to_top'            => $back_to_top == 0,
    'hide_global_banner'     => $hide_global_banner == 0,
    'hide_guest_access_curriculum'            => $hide_guest_access_curriculum == 0,
    'preloader'              => $preloader == 0,

    'footer_column_1' => $footer_column_1,
    'footer_column_2' => $footer_column_2,
    'footer_column_3' => $footer_column_3,
    'footer_column_4' => $footer_column_4,
    'footer_column_5' => $footer_column_5,
    'footer_col_1_class' => $footer_col_1_class,
    'footer_col_2_class' => $footer_col_2_class,
    'footer_col_3_class' => $footer_col_3_class,
    'footer_col_4_class' => $footer_col_4_class,
    'footer_col_5_class' => $footer_col_5_class,
    'footer_col_1_title' => format_text(get_config('theme_edly', 'footer_col_1_title')),
    'footer_info' => format_text(get_config('theme_edly', 'footer_info'), FORMAT_HTML, array('filter' => true, 'noclean' => true)),
    'footer_col_1_body' => format_text(get_config('theme_edly', 'footer_col_1_body'), FORMAT_HTML, array('filter' => true, 'noclean' => true)),
    'footer_col_2_title' => get_config('theme_edly', 'footer_col_2_title'),
    'footer_col_2_body' => format_text(get_config('theme_edly', 'footer_col_2_body'), FORMAT_HTML, array('filter' => true, 'noclean' => true)),
    'footer_col_3_title' => get_config('theme_edly', 'footer_col_3_title'),
    'footer_col_3_body' => format_text(get_config('theme_edly', 'footer_col_3_body'), FORMAT_HTML, array('filter' => true, 'noclean' => true)),
    'footer_col_4_title' => get_config('theme_edly', 'footer_col_4_title'),
    'footer_col_4_body' => format_text(get_config('theme_edly', 'footer_col_4_body'), FORMAT_HTML, array('filter' => true, 'noclean' => true)),
    'footer_col_5_title' => get_config('theme_edly', 'footer_col_5_title'),
    'footer_col_5_body' => format_text(get_config('theme_edly', 'footer_col_5_body'), FORMAT_HTML, array('filter' => true, 'noclean' => true)),

];
$PAGE->requires->jquery();