<script type="text/javascript" src="js/jquery.js" ></script>
    <script type="text/javascript" src="js/ui/core.min.js" ></script>
    <script type="text/javascript" src="js/ui/datepicker.min.js" ></script>
    <script type="text/javascript">
        jQuery(document).ready(function (jQuery) {
            jQuery.datepicker.setDefaults({
                closeText: "Close",
                currentText: "Today",
                monthNames: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                monthNamesShort: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                nextText: "Next",
                prevText: "Previous",
                dayNames: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                dayNamesShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                dayNamesMin: ["S", "M", "T", "W", "T", "F", "S"],
                dateFormat: "MM d, yy",
                firstDay: 1,
                isRTL: false,
            });
        });
    </script>
    <script type="text/javascript" src="js/imagesloaded.min.js"></script>
    <script type="text/javascript" src="js/masonry.min.js"></script>
    <script type="text/javascript" src="js/plugins/craftcoffee-elementor/assets/js/jquery.lazy.js"></script>
    <script type="text/javascript">
        jQuery(function ($) {
            jQuery("img.lazy").each(function () {
                var currentImg = jQuery(this);

                jQuery(this).Lazy({
                    onFinishedAll: function () {
                        currentImg.parent("div.post-featured-image-hover").removeClass("lazy");
                        currentImg.parent(".craftcoffee_gallery_lightbox").parent("div.gallery_grid_item").removeClass("lazy");
                        currentImg.parent("div.gallery_grid_item").removeClass("lazy");
                    },
                });
            });
        });
    </script>
    <script type="text/javascript" src="js/plugins/craftcoffee-elementor/assets/js/modulobox.js"></script>
    <script type="text/javascript" src="js/plugins/craftcoffee-elementor/assets/js/jquery.parallax-scroll.js"></script>
    <script type="text/javascript" src="js/plugins/craftcoffee-elementor/assets/js/jquery.smoove.js"></script>
    <script type="text/javascript" src="js/plugins/craftcoffee-elementor/assets/js/parallax.js"></script>
    <script type="text/javascript" src="js/plugins/craftcoffee-elementor/assets/js/jarallax.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery(".themegoods-parallax").jarallax({
                speed: 0.8,
            });
        });
    </script>
    <script type="text/javascript" src="js/plugins/craftcoffee-elementor/assets/js/jquery.sticky-kit.min.js"></script>
    <script type="text/javascript">
        jQuery(function ($) {
            jQuery("#page-content-wrapper .sidebar-wrapper").stick_in_parent({ offset_top: 100 });

            if (jQuery(window).width() < 768 || is_touch_device()) {
                jQuery("#page-content-wrapper .sidebar-wrapper").trigger("sticky_kit:detach");
            }
        });
    </script>
    <script type="text/javascript">
        /* <![CDATA[ */
        var tgAjax = { ajaxurl: "#", ajax_nonce: "ab2451ad72" };
        /* ]]> */
    </script>
    <script type="text/javascript" src="js/plugins/craftcoffee-elementor/assets/js/craftcoffee-elementor.js"></script>
    <script type="text/javascript" src="js/ui/effect.min.js"></script>
    <script type="text/javascript" src="js/plugins/craftcoffee-elementor/assets/js/tweenmax.min.js"></script>
    <script type="text/javascript" src="js/plugins/waypoints.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery-stellar.js"></script>

    <script type='text/javascript' src='js/plugins/craftcoffee-elementor/assets/js/owl.carousel.min.js?ver=5.5.3' id='owl-carousel-js'></script>
    <script type="text/javascript">
        /* <![CDATA[ */
        var craftcoffeePluginParams = { backTitle: "Back" };
        /* ]]> */
    </script>
    <script type="text/javascript" src="js/plugins/craftcoffee-plugins.js"></script>
    <script type="text/javascript">
        /* <![CDATA[ */
        var tgAjax = { ajaxurl: "#" };
        var craftcoffeeParams = { menulayout: "leftalign", fixedmenu: "1", footerreveal: "", headercontent: "content", lightboxthumbnails: "thumbnail", lightboxtimer: "7000" };
        /* ]]> */
    </script>
    <script type="text/javascript" src="js/plugins/craftcoffee-custom.js"></script>
    <script type="text/javascript" src="js/plugins/jquery-tooltipster.js"></script>
    <script type="text/javascript">
        jQuery(function ($) {
            jQuery(".demotip").tooltipster({
                position: "left",
                multiple: true,
                theme: "tooltipster-shadow",
                delay: 0,
            });
        });
    </script>
    <script type="text/javascript" src="js/plugins/loftloader/assets/js/loftloader.min.js"></script>
    <script type="text/javascript" src="js/plugins/webfont.js"></script>
    <script type="text/javascript">
        WebFont.load({ google: { families: ["Roboto:400", "Oswald:500"] } });
    </script>
    <script type="text/javascript" src="js/plugins/craftcoffee-elementor/assets/js/flickity.pkgd.js"></script>
    <script type="text/javascript" src="js/plugins/elementor/assets/js/frontend-modules.min.js"></script>
    <script type="text/javascript" src="js/ui/position.min.js"></script>
    <script type="text/javascript" src="js/plugins/elementor/assets/lib/dialog/dialog.min.js"></script>
    <script type="text/javascript" src="js/plugins/elementor/assets/lib/waypoints/waypoints.min.js"></script>
    <script type="text/javascript" src="js/plugins/elementor/assets/lib/swiper/swiper.min.js"></script>
    <script type="text/javascript">
        var elementorFrontendConfig = {
            environmentMode: { edit: false, wpPreview: false },
            i18n: {
                shareOnFacebook: "Share on Facebook",
                shareOnTwitter: "Share on Twitter",
                pinIt: "Pin it",
                download: "Download",
                downloadImage: "Download image",
                fullscreen: "Fullscreen",
                zoom: "Zoom",
                share: "Share",
                playVideo: "Play Video",
                previous: "Previous",
                next: "Next",
                close: "Close",
            },
            is_rtl: false,
            breakpoints: { xs: 0, sm: 480, md: 768, lg: 1025, xl: 1440, xxl: 1600 },
            version: "3.0.11",
            is_static: false,
            legacyMode: { elementWrappers: true },
            urls: { assets: "https:\/\/themes.themegoods.com\/craft\/wp-content\/plugins\/elementor\/assets\/" },
            settings: { page: [], editorPreferences: [] },
            kit: {
                global_image_lightbox: "yes",
                lightbox_enable_counter: "yes",
                lightbox_enable_fullscreen: "yes",
                lightbox_enable_zoom: "yes",
                lightbox_enable_share: "yes",
                lightbox_title_src: "title",
                lightbox_description_src: "description",
            },
            post: { id: 4462, title: "Craft%20%7C%20Cafes%20Coffee%20Shops%20Bars%20WordPress%20%E2%80%93%20Just%20another%20WordPress%20site", excerpt: "", featuredImage: false },
        };
    </script>
    <script type="text/javascript" src="js/plugins/elementor/assets/js/frontend.min.js"></script>