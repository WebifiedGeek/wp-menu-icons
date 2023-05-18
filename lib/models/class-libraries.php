<?php

namespace QuadLayers\WPMI\Models;

use QuadLayers\WPMI\Models\Setting as Model_Setting;
use QuadLayers\WPMI\Plugin;
/**
 * Models_Setting Class
 */
class Libraries {
	protected $model_settings;

	public function __construct()
	{
		$this->model_settings = new Model_Setting();
	}

	public static function get_default_libraries() {
		return Plugin::registered_icons_default();
	}

	public function get_libraries() {
		//return $this->model_settings->get()['available_libraries'];

		$merge_array = wp_parse_args($this->get_default_libraries(), $this->get_custom_libraries());

		return $merge_array;
	}

	public static function get_custom_libraries() {
		$register_icons = array(
			'test1'    => array(
				'name'    => 'Test 1',
				'url'     => false,
				'prefix'  => '',
				'iconmap' => 'dashicons dashicons-menu,dashicons dashicons-admin-site,dashicons dashicons-dashboard,dashicons dashicons-admin-post,dashicons dashicons-admin-media,dashicons dashicons-admin-links,dashicons dashicons-admin-page,dashicons dashicons-admin-comments,dashicons dashicons-admin-appearance,dashicons dashicons-admin-plugins,dashicons dashicons-admin-users,dashicons dashicons-admin-tools,dashicons dashicons-admin-settings,dashicons dashicons-admin-network,dashicons dashicons-admin-home,dashicons dashicons-admin-generic,dashicons dashicons-admin-collapse,dashicons dashicons-filter,dashicons dashicons-admin-customizer,dashicons dashicons-admin-multisite,dashicons dashicons-welcome-write-blog,dashicons dashicons-welcome-add-page,dashicons dashicons-welcome-view-site,dashicons dashicons-welcome-widgets-menus,dashicons dashicons-welcome-comments,dashicons dashicons-welcome-learn-more,dashicons dashicons-format-aside,dashicons dashicons-format-image,dashicons dashicons-format-gallery,dashicons dashicons-format-video,dashicons dashicons-format-status,dashicons dashicons-format-quote,dashicons dashicons-format-chat,dashicons dashicons-format-audio,dashicons dashicons-camera,dashicons dashicons-images-alt,dashicons dashicons-images-alt2,dashicons dashicons-video-alt,dashicons dashicons-video-alt2,dashicons dashicons-video-alt3,dashicons dashicons-media-archive,dashicons dashicons-media-audio,dashicons dashicons-media-code,dashicons dashicons-media-default,dashicons dashicons-media-document,dashicons dashicons-media-interactive,dashicons dashicons-media-spreadsheet,dashicons dashicons-media-text,dashicons dashicons-media-video,dashicons dashicons-playlist-audio,dashicons dashicons-playlist-video,dashicons dashicons-controls-play,dashicons dashicons-controls-pause,dashicons dashicons-controls-forward,dashicons dashicons-controls-skipforward,dashicons dashicons-controls-back,dashicons dashicons-controls-skipback,dashicons dashicons-controls-repeat,dashicons dashicons-controls-volumeon,dashicons dashicons-controls-volumeoff,dashicons dashicons-image-crop,dashicons dashicons-image-rotate,dashicons dashicons-image-rotate-left,dashicons dashicons-image-rotate-right,dashicons dashicons-image-flip-vertical,dashicons dashicons-image-flip-horizontal,dashicons dashicons-image-filter,dashicons dashicons-undo,dashicons dashicons-redo,dashicons dashicons-editor-bold,dashicons dashicons-editor-italic,dashicons dashicons-editor-ul,dashicons dashicons-editor-ol,dashicons dashicons-editor-quote,dashicons dashicons-editor-alignleft,dashicons dashicons-editor-aligncenter,dashicons dashicons-editor-alignright,dashicons dashicons-editor-insertmore,dashicons dashicons-editor-spellcheck,dashicons dashicons-editor-expand,dashicons dashicons-editor-contract,dashicons dashicons-editor-kitchensink,dashicons dashicons-editor-underline,dashicons dashicons-editor-justify,dashicons dashicons-editor-textcolor,dashicons dashicons-editor-paste-word,dashicons dashicons-editor-paste-text,dashicons dashicons-editor-removeformatting,dashicons dashicons-editor-video,dashicons dashicons-editor-customchar,dashicons dashicons-editor-outdent,dashicons dashicons-editor-indent,dashicons dashicons-editor-help,dashicons dashicons-editor-strikethrough,dashicons dashicons-editor-unlink,dashicons dashicons-editor-rtl,dashicons dashicons-editor-break,dashicons dashicons-editor-code,dashicons dashicons-editor-paragraph,dashicons dashicons-editor-table,dashicons dashicons-align-left,dashicons dashicons-align-right,dashicons dashicons-align-center,dashicons dashicons-align-none,dashicons dashicons-lock,dashicons dashicons-unlock,dashicons dashicons-calendar,dashicons dashicons-calendar-alt,dashicons dashicons-visibility,dashicons dashicons-hidden,dashicons dashicons-post-status,dashicons dashicons-edit,dashicons dashicons-trash,dashicons dashicons-sticky,dashicons dashicons-external,dashicons dashicons-arrow-up,dashicons dashicons-arrow-down,dashicons dashicons-arrow-right,dashicons dashicons-arrow-left,dashicons dashicons-arrow-up-alt,dashicons dashicons-arrow-down-alt,dashicons dashicons-arrow-right-alt,dashicons dashicons-arrow-left-alt,dashicons dashicons-arrow-up-alt2,dashicons dashicons-arrow-down-alt2,dashicons dashicons-arrow-right-alt2,dashicons dashicons-arrow-left-alt2,dashicons dashicons-sort,dashicons dashicons-leftright,dashicons dashicons-randomize,dashicons dashicons-list-view,dashicons dashicons-exerpt-view,dashicons dashicons-grid-view,dashicons dashicons-share,dashicons dashicons-share-alt,dashicons dashicons-share-alt2,dashicons dashicons-twitter,dashicons dashicons-rss,dashicons dashicons-email,dashicons dashicons-email-alt,dashicons dashicons-facebook,dashicons dashicons-facebook-alt,dashicons dashicons-googleplus,dashicons dashicons-networking,dashicons dashicons-hammer,dashicons dashicons-art,dashicons dashicons-migrate,dashicons dashicons-performance,dashicons dashicons-universal-access,dashicons dashicons-universal-access-alt,dashicons dashicons-tickets,dashicons dashicons-nametag,dashicons dashicons-clipboard,dashicons dashicons-heart,dashicons dashicons-megaphone,dashicons dashicons-schedule,dashicons dashicons-wordpress,dashicons dashicons-wordpress-alt,dashicons dashicons-pressthis,dashicons dashicons-update,dashicons dashicons-screenoptions,dashicons dashicons-info,dashicons dashicons-cart,dashicons dashicons-feedback,dashicons dashicons-cloud,dashicons dashicons-translation,dashicons dashicons-tag,dashicons dashicons-category,dashicons dashicons-archive,dashicons dashicons-tagcloud,dashicons dashicons-text,dashicons dashicons-yes,dashicons dashicons-no,dashicons dashicons-no-alt,dashicons dashicons-plus,dashicons dashicons-plus-alt,dashicons dashicons-minus,dashicons dashicons-dismiss,dashicons dashicons-marker,dashicons dashicons-star-filled,dashicons dashicons-star-half,dashicons dashicons-star-empty,dashicons dashicons-flag,dashicons dashicons-warning,dashicons dashicons-location,dashicons dashicons-location-alt,dashicons dashicons-vault,dashicons dashicons-shield,dashicons dashicons-shield-alt,dashicons dashicons-sos,dashicons dashicons-search,dashicons dashicons-slides,dashicons dashicons-analytics,dashicons dashicons-chart-pie,dashicons dashicons-chart-bar,dashicons dashicons-chart-line,dashicons dashicons-chart-area,dashicons dashicons-groups,dashicons dashicons-businessman,dashicons dashicons-id,dashicons dashicons-id-alt,dashicons dashicons-products,dashicons dashicons-awards,dashicons dashicons-forms,dashicons dashicons-testimonial,dashicons dashicons-portfolio,dashicons dashicons-book,dashicons dashicons-book-alt,dashicons dashicons-download,dashicons dashicons-upload,dashicons dashicons-backup,dashicons dashicons-clock,dashicons dashicons-lightbulb,dashicons dashicons-microphone,dashicons dashicons-desktop,dashicons dashicons-tablet,dashicons dashicons-smartphone,dashicons dashicons-phone,dashicons dashicons-index-card,dashicons dashicons-carrot,dashicons dashicons-building,dashicons dashicons-store,dashicons dashicons-album,dashicons dashicons-palmtree,dashicons dashicons-tickets-alt,dashicons dashicons-money,dashicons dashicons-smiley,dashicons dashicons-thumbs-up,dashicons dashicons-thumbs-down,dashicons dashicons-layout',
			),
			'test2' => array(
				'name'    => 'Test 2',
				'url'     => plugins_url( 'assets/frontend/icons/eleganticons/style.min.css', WPMI_PLUGIN_FILE ),
				'prefix'  => '',
				'iconmap' => 'arrow_up,arrow_down,arrow_left,arrow_right,arrow_left-up,arrow_right-up,arrow_right-down,arrow_left-down,arrow-up-down,arrow_up-down_alt,arrow_left-right_alt,arrow_left-right,arrow_expand_alt2,arrow_expand_alt,arrow_condense,arrow_expand,arrow_move,arrow_carrot-up,arrow_carrot-down,arrow_carrot-left,arrow_carrot-right,arrow_carrot-2up,arrow_carrot-2down,arrow_carrot-2left,arrow_carrot-2right,arrow_carrot-up_alt2,arrow_carrot-down_alt2,arrow_carrot-left_alt2,arrow_carrot-right_alt2,arrow_carrot-2up_alt2,arrow_carrot-2down_alt2,arrow_carrot-2left_alt2,arrow_carrot-2right_alt2,arrow_triangle-up,arrow_triangle-down,arrow_triangle-left,arrow_triangle-right,arrow_triangle-up_alt2,arrow_triangle-down_alt2,arrow_triangle-left_alt2,arrow_triangle-right_alt2,arrow_back,icon_minus-06,icon_plus,icon_close,icon_check,icon_minus_alt2,icon_plus_alt2,icon_close_alt2,icon_check_alt2,icon_zoom-out_alt,icon_zoom-in_alt,icon_search,icon_box-empty,icon_box-selected,icon_minus-box,icon_plus-box,icon_box-checked,icon_circle-empty,icon_circle-slelected,icon_stop_alt2,icon_stop,icon_pause_alt2,icon_pause,icon_menu,icon_menu-square_alt2,icon_menu-circle_alt2,icon_ul,icon_ol,icon_adjust-horiz,icon_adjust-vert,icon_document_alt,icon_documents_alt,icon_pencil,icon_pencil-edit_alt,icon_pencil-edit,icon_folder-alt,icon_folder-open_alt,icon_folder-add_alt,icon_info_alt,icon_error-oct_alt,icon_error-circle_alt,icon_error-triangle_alt,icon_question_alt2,icon_question,icon_comment_alt,icon_chat_alt,icon_vol-mute_alt,icon_volume-low_alt,icon_volume-high_alt,icon_quotations,icon_quotations_alt2,icon_clock_alt,icon_lock_alt,icon_lock-open_alt,icon_key_alt,icon_cloud_alt,icon_cloud-upload_alt,icon_cloud-download_alt,icon_image,icon_images,icon_lightbulb_alt,icon_gift_alt,icon_house_alt,icon_genius,icon_mobile,icon_tablet,icon_laptop,icon_desktop,icon_camera_alt,icon_mail_alt,icon_cone_alt,icon_ribbon_alt,icon_bag_alt,icon_creditcard,icon_cart_alt,icon_paperclip,icon_tag_alt,icon_tags_alt,icon_trash_alt,icon_cursor_alt,icon_mic_alt,icon_compass_alt,icon_pin_alt,icon_pushpin_alt,icon_map_alt,icon_drawer_alt,icon_toolbox_alt,icon_book_alt,icon_calendar,icon_film,icon_table,icon_contacts_alt,icon_headphones,icon_lifesaver,icon_piechart,icon_refresh,icon_link_alt,icon_link,icon_loading,icon_blocked,icon_archive_alt,icon_heart_alt,icon_star_alt,icon_star-half_alt,icon_star,icon_star-half,icon_tools,icon_tool,icon_cog,icon_cogs,arrow_up_alt,arrow_down_alt,arrow_left_alt,arrow_right_alt,arrow_left-up_alt,arrow_right-up_alt,arrow_right-down_alt,arrow_left-down_alt,arrow_condense_alt,arrow_expand_alt3,arrow_carrot_up_alt,arrow_carrot-down_alt,arrow_carrot-left_alt,arrow_carrot-right_alt,arrow_carrot-2up_alt,arrow_carrot-2dwnn_alt,arrow_carrot-2left_alt,arrow_carrot-2right_alt,arrow_triangle-up_alt,arrow_triangle-down_alt,arrow_triangle-left_alt,arrow_triangle-right_alt,icon_minus_alt,icon_plus_alt,icon_close_alt,icon_check_alt,icon_zoom-out,icon_zoom-in,icon_stop_alt,icon_menu-square_alt,icon_menu-circle_alt,icon_document,icon_documents,icon_pencil_alt,icon_folder,icon_folder-open,icon_folder-add,icon_folder_upload,icon_folder_download,icon_info,icon_error-circle,icon_error-oct,icon_error-triangle,icon_question_alt,icon_comment,icon_chat,icon_vol-mute,icon_volume-low,icon_volume-high,icon_quotations_alt,icon_clock,icon_lock,icon_lock-open,icon_key,icon_cloud,icon_cloud-upload,icon_cloud-download,icon_lightbulb,icon_gift,icon_house,icon_camera,icon_mail,icon_cone,icon_ribbon,icon_bag,icon_cart,icon_tag,icon_tags,icon_trash,icon_cursor,icon_mic,icon_compass,icon_pin,icon_pushpin,icon_map,icon_drawer,icon_toolbox,icon_book,icon_contacts,icon_archive,icon_heart,icon_profile,icon_group,icon_grid-2x2,icon_grid-3x3,icon_music,icon_pause_alt,icon_phone,icon_upload,icon_download,social_facebook,social_twitter,social_pinterest,social_googleplus,social_tumblr,social_tumbleupon,social_wordpress,social_instagram,social_dribbble,social_vimeo,social_linkedin,social_rss,social_deviantart,social_share,social_myspace,social_skype,social_youtube,social_picassa,social_googledrive,social_flickr,social_blogger,social_spotify,social_delicious,social_facebook_circle,social_twitter_circle,social_pinterest_circle,social_googleplus_circle,social_tumblr_circle,social_stumbleupon_circle,social_wordpress_circle,social_instagram_circle,social_dribbble_circle,social_vimeo_circle,social_linkedin_circle,social_rss_circle,social_deviantart_circle,social_share_circle,social_myspace_circle,social_skype_circle,social_youtube_circle,social_picassa_circle,social_googledrive_alt2,social_flickr_circle,social_blogger_circle,social_spotify_circle,social_delicious_circle,social_facebook_square,social_twitter_square,social_pinterest_square,social_googleplus_square,social_tumblr_square,social_stumbleupon_square,social_wordpress_square,social_instagram_square,social_dribbble_square,social_vimeo_square,social_linkedin_square,social_rss_square,social_deviantart_square,social_share_square,social_myspace_square,social_skype_square,social_youtube_square,social_picassa_square,social_googledrive_square,social_flickr_square,social_blogger_square,social_spotify_square,social_delicious_square,icon_printer,icon_calulator,icon_building,icon_floppy,icon_drive,icon_search-2,icon_id,icon_id-2,icon_puzzle,icon_like,icon_dislike,icon_mug,icon_currency,icon_wallet,icon_pens,icon_easel,icon_flowchart,icon_datareport,icon_briefcase,icon_shield,icon_percent,icon_globe,icon_globe-2,icon_target,icon_hourglass,icon_balance,icon_rook,icon_printer-alt,icon_calculator_alt,icon_building_alt,icon_floppy_alt,icon_drive_alt,icon_search_alt,icon_id_alt,icon_id-2_alt,icon_puzzle_alt,icon_like_alt,icon_dislike_alt,icon_mug_alt,icon_currency_alt,icon_wallet_alt,icon_pens_alt,icon_easel_alt,icon_flowchart_alt,icon_datareport_alt,icon_briefcase_alt,icon_shield_alt,icon_percent_alt,icon_globe_alt,icon_clipboard',
			),
			'test3'      => array(
				'name'    => 'Test 3',
				'url'     => plugins_url( 'assets/frontend/icons/elusive/css/elusive-icons.min.css', WPMI_PLUGIN_FILE ),
				'iconmap' => 'el el-address-book-alt,el el-address-book,el el-adjust-alt,el el-adjust,el el-adult,el el-align-center,el el-align-justify,el el-align-left,el el-align-right,el el-arrow-down,el el-arrow-left,el el-arrow-right,el el-arrow-up,el el-asl,el el-asterisk,el el-backward,el el-ban-circle,el el-barcode,el el-behance,el el-bell,el el-blind,el el-blogger,el el-bold,el el-book,el el-bookmark-empty,el el-bookmark,el el-braille,el el-briefcase,el el-broom,el el-brush,el el-bulb,el el-bullhorn,el el-calendar-sign,el el-calendar,el el-camera,el el-car,el el-caret-down,el el-caret-left,el el-caret-right,el el-caret-up,el el-cc,el el-certificate,el el-check-empty,el el-check,el el-chevron-down,el el-chevron-left,el el-chevron-right,el el-chevron-up,el el-child,el el-circle-arrow-down,el el-circle-arrow-left,el el-circle-arrow-right,el el-circle-arrow-up,el el-cloud-alt,el el-cloud,el el-cog-alt,el el-cog,el el-cogs,el el-comment-alt,el el-comment,el el-compass-alt,el el-compass,el el-credit-card,el el-css,el el-dashboard,el el-delicious,el el-deviantart,el el-digg,el el-download-alt,el el-download,el el-dribbble,el el-edit,el el-eject,el el-envelope-alt,el el-envelope,el el-error-alt,el el-error,el el-eur,el el-exclamation-sign,el el-eye-close,el el-eye-open,el el-facebook,el el-facetime-video,el el-fast-backward,el el-fast-forward,el el-female,el el-file-alt,el el-file-edit-alt,el el-file-edit,el el-file-new-alt,el el-file-new,el el-file,el el-film,el el-filter,el el-fire,el el-flag-alt,el el-flag,el el-flickr,el el-folder-close,el el-folder-open,el el-folder-sign,el el-folder,el el-font,el el-fontsize,el el-fork,el el-forward-alt,el el-forward,el el-foursquare,el el-friendfeed-rect,el el-friendfeed,el el-fullscreen,el el-gbp,el el-gift,el el-github-text,el el-github,el el-glass,el el-glasses,el el-globe-alt,el el-globe,el el-googleplus,el el-graph-alt,el el-graph,el el-group-alt,el el-group,el el-guidedog,el el-hand-down,el el-hand-left,el el-hand-right,el el-hand-up,el el-hdd,el el-headphones,el el-hearing-impaired,el el-heart-alt,el el-heart-empty,el el-heart,el el-home-alt,el el-home,el el-hourglass,el el-idea-alt,el el-idea,el el-inbox-alt,el el-inbox-box,el el-inbox,el el-indent-left,el el-indent-right,el el-info-circle,el el-instagram,el el-iphone-home,el el-italic,el el-key,el el-laptop-alt,el el-laptop,el el-lastfm,el el-leaf,el el-lines,el el-link,el el-linkedin,el el-list-alt,el el-list,el el-livejournal,el el-lock-alt,el el-lock,el el-magic,el el-magnet,el el-male,el el-map-marker-alt,el el-map-marker,el el-mic-alt,el el-mic,el el-minus-sign,el el-minus,el el-move,el el-music,el el-myspace,el el-network,el el-off,el el-ok-circle,el el-ok-sign,el el-ok,el el-opensource,el el-paper-clip-alt,el el-paper-clip,el el-path,el el-pause-alt,el el-pause,el el-pencil-alt,el el-pencil,el el-person,el el-phone-alt,el el-phone,el el-photo-alt,el el-photo,el el-picasa,el el-picture,el el-pinterest,el el-plane,el el-play-alt,el el-play-circle,el el-play,el el-plurk-alt,el el-plurk,el el-plus-sign,el el-plus,el el-podcast,el el-print,el el-puzzle,el el-qrcode,el el-question-sign,el el-question,el el-quote-alt,el el-quote-right-alt,el el-quote-right,el el-quotes,el el-random,el el-record,el el-reddit,el el-redux,el el-refresh,el el-remove-circle,el el-remove-sign,el el-remove,el el-repeat-alt,el el-repeat,el el-resize-full,el el-resize-horizontal,el el-resize-small,el el-resize-vertical,el el-return-key,el el-retweet,el el-reverse-alt,el el-road,el el-rss,el el-scissors,el el-screen-alt,el el-screen,el el-screenshot,el el-search-alt,el el-search,el el-share-alt,el el-share,el el-shopping-cart-sign,el el-shopping-cart,el el-signal,el el-skype,el el-slideshare,el el-smiley-alt,el el-smiley,el el-soundcloud,el el-speaker,el el-spotify,el el-stackoverflow,el el-star-alt,el el-star-empty,el el-star,el el-step-backward,el el-step-forward,el el-stop-alt,el el-stop,el el-stumbleupon,el el-tag,el el-tags,el el-tasks,el el-text-height,el el-text-width,el el-th-large,el el-th-list,el el-th,el el-thumbs-down,el el-thumbs-up,el el-time-alt,el el-time,el el-tint,el el-torso,el el-trash-alt,el el-trash,el el-tumblr,el el-twitter,el el-universal-access,el el-unlock-alt,el el-unlock,el el-upload,el el-usd,el el-user,el el-viadeo,el el-video-alt,el el-video-chat,el el-video,el el-view-mode,el el-vimeo,el el-vkontakte,el el-volume-down,el el-volume-off,el el-volume-up,el el-warning-sign,el el-website-alt,el el-website,el el-wheelchair,el el-wordpress,el el-wrench-alt,el el-wrench,el el-youtube,el el-zoom-in,el el-zoom-out',
			),
		);

		return $register_icons;
	}

	public static function get_active_libraries() {

		$default_libraries = self::get_default_libraries();
		$custom_libraries  = self::get_custom_libraries();

		$model_settings = new Model_Setting();

		$settings = $model_settings->get();

		$active_libraries_names = isset( $settings['active_libraries'] ) ? $settings['active_libraries'] : array();

		$all_libraries = array_merge((array) $default_libraries, $custom_libraries);

		$active_libraries = array();

		// Loop through all libraries
		foreach ($all_libraries as $key => $library) {
			// Check if library keyName is in active libraries
			if (in_array($key, $active_libraries_names)) {
				$active_libraries[$key] = $library;
			}
		}

		return $active_libraries;

	}

	public function create_library( $library ) {
		if ( ! isset( $library['name'], $library['type'] ) ) {
			return false;
		}

		$name = $library['name'];

		$settings = $this->model_settings->get();

		if ( isset( $settings['available_libraries'][ $name ] ) ) {
			return false;
		}

		$settings['available_libraries'][ $name ] = array(
			'name' => $name,
			'type' => $library['type'],
			'ID'   => strtolower( str_replace( ' ', '', $name ) ),
		);

		$this->model_settings->save( $settings );

		return true;
	}

	public function delete_library( $name ) {
		if ( ! isset( $name ) ) {
			return false;
		}

		$settings  = $this->model_settings->get();
		$libraries = $settings['available_libraries'];

		if ( isset( $libraries[ $name ] ) ) {
			unset( $libraries[ $name ] );

			$settings['available_libraries'] = $libraries;

			$this->model_settings->save( $settings );

			return true;
		}

		return false;
	}
}
