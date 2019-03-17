<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dental Angels | Стоматология в Атырау</title>

    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            /* height: 1em !important;
            width: 1em !important; */
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
        .vc_tta-panel-title p {
            color: #62B0D9;
        }
    </style>
    <link rel="shortcut icon" href="{{{ asset('images/favicon.png') }}}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/css.css') }}">

    <link rel="stylesheet" id="bookly-picker-css" href="{{ asset('css/picker.classic.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="bookly-picker-date-css" href="{{ asset('css/picker.classic.date.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="bookly-main-css" href="{{ asset('css/bookly-main.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="images-comparison-style-css" href="{{ asset('css/front.css') }}" type="text/css" media="all">

    <link rel="stylesheet" id="xtender-style-css" href="{{ asset('css/xtender.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="dentist_wp-style-css" href="{{ asset('css/style(1).css') }}" type="text/css" media="all">
    <style id="dentist_wp-style-inline-css" type="text/css">
        body {
            font-family: 'Montserrat';
            font-weight: 300;
            font-size: 0.875rem
        }

        h1,
        .h1 {
            font-family: 'Montserrat';
            font-weight: 300;
            text-transform: none;
            font-size: 3.09375rem;
            letter-spacing: -0.05em
        }

        @media(min-width:768px) {
            h1,
            .h1 {
                font-size: 4.125rem
            }
        }

        h2,
        .h2 {
            font-family: 'Montserrat';
            font-weight: 300;
            text-transform: none;
            font-size: 3.25rem;
            letter-spacing: -0.04em
        }

        h3,
        .h3 {
            font-family: 'Montserrat';
            font-weight: normal;
            text-transform: none;
            font-size: 2.625rem;
            letter-spacing: -0.02em
        }

        h4,
        .h4 {
            /* font-family: 'Poppins'; */
            font-weight: 500;
            text-transform: capitalize;
            font-size: 1.5rem
        }

        h5,
        .h5,
        .xtd-person__title {
            font-family: 'Montserrat';
            font-weight: normal;
            text-transform: capitalize;
            font-size: 0.875rem;
            letter-spacing: 0.08em
        }

        h6,
        .h6,
        .nf-field-label.nf-field-label label {
            /* font-family: 'Poppins'; */
            font-weight: normal;
            text-transform: uppercase;
            font-size: 0.75rem;
            /* letter-spacing: 0.08em */
        }

        blockquote,
        blockquote p,
        .pullquote,
        .blockquote,
        .text-blockquote {
            font-family: 'Old Standard TT';
            font-weight: normal;
            font-style: italic;
            text-transform: none;
            font-size: 1.5rem
        }

        blockquote cite {
            /* font-family: 'Poppins' */
        }

        .ct-main-navigation {
            font-family: 'Montserrat';
            font-weight: normal;
            text-transform: uppercase;
            font-size: 0.6875rem;
            letter-spacing: 0.08em
        }

        h1 small,
        h2 small,
        h3 small {
            /* font-family: 'Poppins'; */
            font-size: 0.875rem
        }

        .font-family--h1 {
            font-family: 'Montserrat'
        }

        ,
        .font-family--h2 {
            font-family: 'Montserrat'
        }

        ,
        .font-family--h3 {
            font-family: 'Montserrat'
        }

        .xtd-recent-posts__post__title {
            /* font-family: 'Poppins'; */
            font-weight: normal;
            text-transform: uppercase;
            font-size: 0.875rem;
            letter-spacing: 0.05em
        }

        .sub-menu a,
        .children a {
            /* font-family: 'Poppins'; */
            font-weight: 300
        }

        #footer .widget-title {
            font-family: 'Montserrat';
            font-weight: normal;
            text-transform: uppercase
        }

        table thead th {
            font-family: 'Montserrat';
            font-weight: normal;
            text-transform: capitalize
        }

        .btn,
        .wcs-more.wcs-btn--action,
        .vc_general.vc_btn3.vc_btn3 {
            font-family: 'Montserrat';
            font-weight: normal;
            text-transform: uppercase
        }

        .special-title em:first-child,
        .wcs-timetable--carousel .wcs-class__timestamp .date-day {
            font-family: 'Old Standard TT';
            font-weight: normal;
            font-style: italic
        }

        .ct-header__main-heading small {}

        .ct-vc-text-separator {
            font-family: 'Montserrat';
            font-weight: 300
        }

        .wcs-timetable--week .wcs-class__title,
        .wcs-timetable--agenda .wcs-class__title {
            font-family: 'Montserrat'
        }

        .xtd-gmap-info {
            /* font-family: 'Poppins'; */
            font-weight: 300;
            font-size: 0.875rem
        }

        .xtd-timeline__item::before {
            /* font-family: 'Poppins'; */
            font-weight: 500;
            text-transform: capitalize;
            font-size: 1.5rem
        }

        body {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(81, 80, 80, 1)
        }

        h1,
        .h1 {
            color: rgba(27, 28, 33, 1)
        }

        h2,
        .h2 {
            color: rgba(27, 28, 33, 1)
        }

        h3,
        .h3 {
            color: rgba(27, 28, 33, 1)
        }

        h4,
        .h4 {
            color: rgba(81, 80, 80, 1)
        }

        h5,
        .h5 {
            color: rgba(81, 80, 80, 1)
        }

        h6,
        .h6 {
            color: rgba(27, 28, 33, 1)
        }

        a {
            color: rgba(17, 135, 197, 1)
        }

        a:hover {
            color: rgba(17, 135, 197, 0.75)
        }

        .ct-content {
            border-color: rgba(81, 80, 80, 0.15)
        }

        input[type=text],
        input[type=search],
        input[type=password],
        input[type=email],
        input[type=number],
        input[type=url],
        input[type=date],
        input[type=tel],
        select,
        textarea,
        .form-control {
            border: 1px solid rgba(81, 80, 80, 0.22);
            background-color: rgba(255, 255, 255, 1);
            color: rgba(81, 80, 80, 1)
        }

        input[type=text]:focus,
        input[type=search]:focus,
        input[type=password]:focus,
        input[type=email]:focus,
        input[type=number]:focus,
        input[type=url]:focus,
        input[type=date]:focus,
        input[type=tel]:focus,
        select:focus,
        textarea:focus,
        .form-control:focus {
            color: rgba(81, 80, 80, 1);
            border-color: rgba(81, 80, 80, 0.35);
            background-color: rgba(81, 80, 80, 0.05)
        }

        select {
            background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+CgkJCQk8c3ZnIHdpZHRoPSI0MHB4IiBoZWlnaHQ9IjE1cHgiIHZpZXdCb3g9IjAgMCA0MCAxNSIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4bWxuczpza2V0Y2g9Imh0dHA6Ly93d3cuYm9oZW1pYW5jb2RpbmcuY29tL3NrZXRjaC9ucyI+CgkJCQkgICAgPGRlZnM+PC9kZWZzPgoJCQkJICAgIDxnIGlkPSJQYWdlLTEiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHNrZXRjaDp0eXBlPSJNU1BhZ2UiPgoJCQkJICAgICAgICA8cGF0aCBkPSJNMjAsMTUgTDAsMTUgTDEwLDAgTDIwLDE1IFoiIGlkPSJUcmlhbmdsZS0xIiBmaWxsPSIjNjY2NjY2IiBza2V0Y2g6dHlwZT0iTVNTaGFwZUdyb3VwIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxMC4wMDAwMDAsIDcuNTAwMDAwKSByb3RhdGUoLTE4MC4wMDAwMDApIHRyYW5zbGF0ZSgtMTAuMDAwMDAwLCAtNy41MDAwMDApICI+PC9wYXRoPgoJCQkJICAgIDwvZz4KCQkJCTwvc3ZnPg==) !important
        }

        ::-webkit-input-placeholder {
            color: rgba(81, 80, 80, 0.2) !important
        }

        ::-moz-placeholder {
            color: rgba(81, 80, 80, 0.2) !important
        }

        :-ms-input-placeholder {
            color: rgba(81, 80, 80, 0.2) !important
        }

        :-moz-placeholder {
            color: rgba(81, 80, 80, 0.2) !important
        }

        ::placeholder {
            color: rgba(81, 80, 80, 0.2) !important
        }

        input[type=submit],
        input[type=button],
        button,
        .btn-primary,
        .vc_general.vc_btn3.vc_btn3.vc_btn3-style-btn-primary {
            background-color: rgba(153, 168, 51, 1);
            color: rgba(255, 255, 255, 1);
            border-color: rgba(153, 168, 51, 1)
        }

        input[type=submit]:hover,
        input[type=submit]:active,
        input[type=button]:hover,
        input[type=button]:active,
        button:hover,
        button:active,
        .btn-primary:hover,
        .btn-primary:active,
        .btn-primary:active:hover,
        .vc_btn3.vc_btn3.vc_btn3-style-btn-primary:hover,
        .vc_general.vc_btn3.vc_btn3.vc_btn3-style-btn-outline-primary:hover {
            background-color: rgb(133, 148, 31);
            border-color: rgb(133, 148, 31)
        }

        .btn-link,
        .vc_general.vc_btn3.vc_btn3-style-btn-link {
            color: rgba(153, 168, 51, 1)
        }

        .btn-link:hover,
        .vc_general.vc_btn3.vc_btn3-style-btn-link:hover {
            color: rgb(133, 148, 31)
        }

        .btn-link::after,
        .vc_general.vc_btn3.vc_btn3-style-btn-link::after {
            background-color: rgba(153, 168, 51, 1);
            color: rgba(255, 255, 255, 1)
        }

        .btn-link:hover::after {
            background-color: rgb(133, 148, 31)
        }

        .btn-outline-primary,
        .vc_general.vc_btn3.vc_btn3.vc_btn3-style-btn-outline-primary {
            border-color: rgba(153, 168, 51, 1);
            color: rgba(153, 168, 51, 1)
        }

        .btn-outline-primary:active,
        .btn-outline-primary:hover,
        .btn-outline-primary:hover:active,
        .btn-outline-primary:focus,
        .btn-outline-primary:disabled,
        .btn-outline-primary:disabled:hover,
        .vc_general.vc_btn3.vc_btn3.vc_btn3-style-btn-outline-primary:hover {
            border-color: rgba(153, 168, 51, 1);
            background-color: rgba(153, 168, 51, 1);
            color: rgba(255, 255, 255, 1)
        }

        .color-primary,
        .color--primary {
            color: rgba(153, 168, 51, 1)
        }

        .color-primary-inverted,
        .color--primary-inverted {
            color: rgba(0, 0, 0, 1)
        }

        .color-primary--hover {
            color: rgb(133, 148, 31)
        }

        .color-text,
        .vc_single_image-wrapper.ct-lightbox-video,
        .color--text {
            color: rgba(81, 80, 80, 1)
        }

        .color-text-inverted,
        .color--text-inverted {
            color: rgba(255, 255, 255, 1)
        }

        .color-bg,
        .color--bg {
            color: rgba(255, 255, 255, 1)
        }

        .color-bg-inverted,
        .color--bg-inverted {
            color: rgba(0, 0, 0, 1)
        }

        .color--links {
            color: rgba(17, 135, 197, 1)
        }

        .color--h1 {
            color: rgba(27, 28, 33, 1)
        }

        .color--h2 {
            color: rgba(27, 28, 33, 1)
        }

        .color--h3 {
            color: rgba(27, 28, 33, 1)
        }

        .color--h4 {
            color: rgba(81, 80, 80, 1)
        }

        .color-bg-bg,
        .bg-color--bg {
            background-color: rgba(255, 255, 255, 1)
        }

        .color-bg-bg--75,
        .bg-color--bg-75 {
            background-color: rgba(255, 255, 255, 0.75)
        }

        .color-bg-primary,
        .bg-color--primary {
            background-color: rgba(153, 168, 51, 1)
        }

        .color-bg-text,
        .bg-color--test {
            background-color: rgba(81, 80, 80, 1)
        }

        .special-title::before {
            border-color: rgba(153, 168, 51, 1)
        }

        .ct-header {
            color: rgba(17, 17, 17, 1);
            background-color: rgba(255, 255, 255, 0.95)
        }

        @media(min-width:576px) {
            .ct-header {
                background-color: rgba(255, 255, 255, 0)
            }
        }

        .ct-header__logo-nav a {
            color: rgba(17, 17, 17, 1)
        }

        .ct-header__logo-nav a:hover {
            color: rgba(17, 17, 17, 0.65)
        }

        .ct-menu--inverted .ct-header__wrapper:not(.ct-header__wrapper--stuck) .ct-header__logo-nav ul:not(.sub-menu)>li>a {
            color: rgba(255, 255, 255, 1)
        }

        .ct-menu--inverted .ct-header__wrapper:not(.ct-header__wrapper--stuck) .ct-header__logo-nav ul:not(.sub-menu)>li>a:hover {
            color: rgba(255, 255, 255, 0.85)
        }

        .ct-header__logo-nav .current-menu-ancestor>a,
        .ct-header__logo-nav .current-menu-parent>a,
        .ct-header__logo-nav .current-menu-item>a,
        .ct-header__logo-nav .current-page-parent>a,
        .ct-header__logo-nav .current_page_parent>a,
        .ct-header__logo-nav .current_page_ancestor>a,
        .ct-header__logo-nav .current-page-ancestor>a,
        .ct-header__logo-nav .current_page_item>a {
            color: rgba(153, 168, 51, 1)
        }

        #ct-main-nav::before {
            background-color: rgba(255, 255, 255, 0.9)
        }

        .ct-main-navigation .sub-menu,
        .ct-main-navigation .children {
            background-color: rgba(255, 255, 255, 1)
        }

        .ct-main-navigation .sub-menu a,
        .ct-main-navigation .children a {
            color: rgba(17, 17, 17, 1)
        }

        .ct-main-navigation .sub-menu a:hover,
        .ct-main-navigation .children a:hover {
            color: rgba(153, 168, 51, 1)
        }

        .ct-header__wrapper--stuck {
            background-color: rgba(255, 255, 255, 0.98)
        }

        .color-primary,
        .wpml-switcher .active,
        #ct-header__hero-navigator>a,
        .section-bullets,
        .special-title small:last-child,
        #ct-scroll-top {
            color: rgba(153, 168, 51, 1)
        }

        .ct-layout--without-slider .ct-header__hero {
            color: rgba(17, 17, 17, 1)
        }

        .ct-hero--without-image .ct-header__hero::after {
            background-color: rgba(247, 247, 247, 1)
        }

        .ct-header__main-heading-title h1 {
            color: rgba(27, 28, 33, 1)
        }

        .img-frame-small,
        .img-frame-large {
            background-color: rgba(255, 255, 255, 1);
            border-color: rgba(255, 255, 255, 1)
        }

        .ct-social-box .fa-boxed.fa-envelope {
            color: rgba(0, 0, 0, 1)
        }

        .ct-social-box .fa-boxed.fa-envelope::after {
            background-color: rgba(153, 168, 51, 1)
        }

        h4.media-heading {
            color: rgba(153, 168, 51, 1)
        }

        .comment-reply-link,
        .btn-outline-primary {
            color: rgba(153, 168, 51, 1);
            border-color: rgba(153, 168, 51, 1)
        }

        .comment-reply-link:hover,
        .btn-outline-primary:hover,
        .btn-outline-primary:hover:active,
        .btn-outline-primary:active {
            background-color: rgba(153, 168, 51, 1);
            color: rgba(255, 255, 255, 1);
            border-color: rgba(153, 168, 51, 1)
        }

        .media.comment {
            border-color: rgba(81, 80, 80, 0.125)
        }

        .ct-posts .ct-post.format-quote .ct-post__content {
            background-color: rgba(153, 168, 51, 1)
        }

        .ct-posts .ct-post.format-quote blockquote,
        .ct-posts .ct-post.format-quote blockquote cite,
        .ct-posts .ct-post.format-quote blockquote cite::before {
            color: rgba(255, 255, 255, 1)
        }

        .ct-posts .ct-post.format-link {
            border-color: rgba(81, 80, 80, 0.125)
        }

        .pagination .current {
            color: rgba(255, 255, 255, 1)
        }

        .pagination .nav-links .current::before {
            background-color: rgba(153, 168, 51, 1)
        }

        .pagination .current {
            color: rgba(255, 255, 255, 1)
        }

        .pagination a {
            color: rgb(133, 148, 31)
        }

        .pagination .nav-links .prev,
        .pagination .nav-links .next {
            border-color: rgba(153, 168, 51, 1)
        }

        .ct-sidebar .widget_archive,
        .ct-sidebar .widget_categories {
            color: rgba(81, 80, 80, 0.35)
        }

        .ct-sidebar ul li::before {
            color: rgba(81, 80, 80, 1)
        }

        .ct-sidebar .sidebar-widget .widget-title::after {
            border-color: rgba(81, 80, 80, 1)
        }

        .ct-sidebar .sidebar-widget .widget-title,
        .ct-sidebar .sidebar-widget .widget-title a {
            color: rgba(153, 168, 51, 1)
        }

        .ct-sidebar .sidebar-widget.widget_tag_cloud .tag {
            color: rgba(255, 255, 255, 1)
        }

        .ct-sidebar .sidebar-widget.widget_tag_cloud .tag::before {
            background-color: rgba(81, 80, 80, 1)
        }

        .ct-sidebar .sidebar-widget.widget_tag_cloud .tag.x-large::before {
            background-color: rgba(153, 168, 51, 1)
        }

        #wp-calendar thead th,
        #wp-calendar tbody td {
            border-color: rgba(81, 80, 80, 0.125)
        }

        .ct-footer {
            background-color: rgba(27, 28, 33, 1);
            color: rgba(167, 167, 167, 1)
        }

        .ct-footer a {
            color: rgba(255, 255, 255, 1)
        }

        .ct-footer .widget-title {
            color: rgba(255, 255, 255, 1)
        }

        .ct-footer input[type=text],
        .ct-footer input[type=search],
        .ct-footer input[type=password],
        .ct-footer input[type=email],
        .ct-footer input[type=number],
        .ct-footer input[type=url],
        .ct-footer input[type=date],
        .ct-footer input[type=tel],
        .ct-footer select,
        .ct-footer textarea,
        .ct-footer .form-control {
            border: 1px solid rgba(255, 255, 255, 1);
            background-color: rgba(255, 255, 255, 1);
            color: rgba(27, 28, 33, 1)
        }

        .ct-footer input[type=text]:focus,
        .ct-footer input[type=search]:focus,
        .ct-footer input[type=password]:focus,
        .ct-footer input[type=email]:focus,
        .ct-footer input[type=number]:focus,
        .ct-footer input[type=url]:focus,
        .ct-footer input[type=date]:focus,
        .ct-footer input[type=tel]:focus,
        .ct-footer select:focus,
        .ct-footer textarea:focus,
        .ct-footer .form-control:focus {
            color: rgba(27, 28, 33, 1);
            border-color: rgba(255, 255, 255, 1);
            background-color: rgba(255, 255, 255, 0.95)
        }

        .ct-footer select {
            background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+CgkJCQk8c3ZnIHdpZHRoPSI0MHB4IiBoZWlnaHQ9IjE1cHgiIHZpZXdCb3g9IjAgMCA0MCAxNSIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4bWxuczpza2V0Y2g9Imh0dHA6Ly93d3cuYm9oZW1pYW5jb2RpbmcuY29tL3NrZXRjaC9ucyI+CgkJCQkgICAgPGRlZnM+PC9kZWZzPgoJCQkJICAgIDxnIGlkPSJQYWdlLTEiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHNrZXRjaDp0eXBlPSJNU1BhZ2UiPgoJCQkJICAgICAgICA8cGF0aCBkPSJNMjAsMTUgTDAsMTUgTDEwLDAgTDIwLDE1IFoiIGlkPSJUcmlhbmdsZS0xIiBmaWxsPSIjNjY2NjY2IiBza2V0Y2g6dHlwZT0iTVNTaGFwZUdyb3VwIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxMC4wMDAwMDAsIDcuNTAwMDAwKSByb3RhdGUoLTE4MC4wMDAwMDApIHRyYW5zbGF0ZSgtMTAuMDAwMDAwLCAtNy41MDAwMDApICI+PC9wYXRoPgoJCQkJICAgIDwvZz4KCQkJCTwvc3ZnPg==) !important
        }

        blockquote,
        blockquote cite::before,
        q,
        q cite::before {
            color: rgba(153, 168, 51, 1)
        }

        blockquote cite,
        q site {
            color: rgba(81, 80, 80, 1)
        }

        table {
            border-color: rgba(81, 80, 80, 0.15)
        }

        table thead th {
            color: rgba(153, 168, 51, 1)
        }

        .vc_tta-style-xtd-vc-tabs-transparent .vc_tta-tab.vc_active {
            color: rgba(153, 168, 51, 1)
        }

        .ct-vc-recent-news-post {
            border-color: rgba(81, 80, 80, 0.125)
        }

        .ct-vc-recent-news-post .ti-calendar {
            color: rgba(153, 168, 51, 1)
        }

        .ct-vc-services-carousel__item-title {
            color: rgba(153, 168, 51, 1)
        }

        .ct-vc-services-carousel__item {
            background-color: rgba(255, 255, 255, 1)
        }

        .wcs-timetable--week .wcs-class__title,
        .wcs-timetable--agenda .wcs-class__title,
        .wcs-timetable--compact-list .wcs-class__title {
            color: rgba(17, 135, 197, 1)
        }

        .wcs-timetable--carousel .wcs-class__title {
            color: rgba(17, 135, 197, 1) !important
        }

        .wcs-timetable__carousel .wcs-class__title::after,
        .wcs-timetable__carousel .owl-prev,
        .wcs-timetable__carousel .owl-next {
            border-color: rgba(153, 168, 51, 1);
            color: rgba(153, 168, 51, 1)
        }

        .wcs-timetable--carousel .wcs-class__title small {
            color: rgba(81, 80, 80, 1)
        }

        body .wcs-timetable--carousel .wcs-btn--action {
            background-color: rgba(153, 168, 51, 1);
            color: rgba(255, 255, 255, 1)
        }

        body .wcs-timetable--carousel .wcs-btn--action:hover {
            background-color: rgb(133, 148, 31);
            color: rgba(255, 255, 255, 1)
        }

        .wcs-timetable__container .wcs-filters__filter-wrapper:hover {
            color: rgba(153, 168, 51, 1) !important
        }

        .wcs-timetable--compact-list .wcs-day__wrapper {
            background-color: rgba(81, 80, 80, 1);
            color: rgba(255, 255, 255, 1)
        }

        .wcs-timetable__week,
        .wcs-timetable__week .wcs-day,
        .wcs-timetable__week .wcs-class,
        .wcs-timetable__week .wcs-day__title {
            border-color: rgba(81, 80, 80, 0.125)
        }

        .wcs-timetable__week .wcs-class {
            background-color: rgba(255, 255, 255, 1)
        }

        .wcs-timetable__week .wcs-day__title,
        .wcs-timetable__week .wcs-class__instructors::before {
            color: rgba(153, 168, 51, 1) !important
        }

        .wcs-timetable__week .wcs-day__title::before {
            background-color: rgba(81, 80, 80, 1)
        }

        .wcs-timetable__week .wcs-class__title::after {
            color: rgba(255, 255, 255, 1);
            background-color: rgba(153, 168, 51, 1)
        }

        .wcs-filters__title {
            color: rgba(153, 168, 51, 1) !important
        }

        .xtd-carousel-mini,
        .xtd-carousel-mini .owl-image-link:hover::after {
            color: rgba(153, 168, 51, 1) !important
        }

        .xtd-carousel-mini .onclick-video_link a::before {
            background-color: rgba(153, 168, 51, 0.85)
        }

        .xtd-carousel-mini .onclick-video_link a::after {
            color: rgba(255, 255, 255, 1)
        }

        .xtd-carousel-mini .onclick-video_link a:hover::after {
            background-color: rgba(153, 168, 51, 0.98)
        }

        .wcs-modal:not(.wcs-modal--large) .wcs-modal__title,
        .wcs-modal:not(.wcs-modal--large) .wcs-modal__close {
            color: rgba(255, 255, 255, 1)
        }

        .wcs-modal:not(.wcs-modal--large) .wcs-btn--action.wcs-btn--action {
            background-color: rgba(153, 168, 51, 1);
            color: rgba(255, 255, 255, 1)
        }

        .wcs-modal:not(.wcs-modal--large) .wcs-btn--action.wcs-btn--action:hover {
            background-color: rgb(133, 148, 31);
            color: rgba(255, 255, 255, 1)
        }

        .wcs-timetable--agenda .wcs-timetable__agenda-data .wcs-class__duration::after {
            border-color: rgba(153, 168, 51, 1)
        }

        .wcs-timetable--agenda .wcs-timetable__agenda-data .wcs-class__time,
        .wcs-timetable--compact-list .wcs-class__time {
            color: rgba(81, 80, 80, 0.75)
        }

        .wcs-modal:not(.wcs-modal--large),
        div.pp_overlay.pp_overlay {
            background-color: rgba(153, 168, 51, 0.97) !important
        }

        .mfp-bg {
            background-color: rgba(255, 255, 255, 0.98) !important
        }

        .owl-image-link::before {
            color: rgba(255, 255, 255, 1)
        }

        .owl-nav .owl-prev::before,
        .owl-nav .owl-next::after,
        .owl-dots {
            color: rgba(153, 168, 51, 1) !important
        }

        .xtd-ninja-modal-container {
            background-color: rgba(255, 255, 255, 1)
        }

        .xtd-recent-posts__post__date::before {
            color: rgba(153, 168, 51, 1)
        }

        .xtd-gmap-info {
            background-color: rgba(255, 255, 255, 1);
            color: rgba(81, 80, 80, 1)
        }

        .fa-boxed {
            background-color: rgba(153, 168, 51, 1);
            color: rgba(255, 255, 255, 1)
        }

        .xtd-timeline__item::before {
            color: rgba(81, 80, 80, 1)
        }

        .xtd-timeline__item::after {
            background-color: rgba(81, 80, 80, 1)
        }

        .xtd-offset-frame::before,
        .xtd-timeline::before {
            border-color: rgba(153, 168, 51, 1)
        }

        .xtd-person {
            background-color: rgba(27, 28, 33, 1);
            color: rgba(27, 28, 33, 0.9)
        }

        .xtd-person__title {
            color: rgba(255, 255, 255, 1)
        }

        .xtd-person__content {
            color: rgba(255, 255, 255, 0.75)
        }

        .ct-layout--fixed .container-fluid {
            max-width: 1366px
        }

        @media(min-width:1367px) {
            .bullets-container,
            #ct-header__hero-navigator {
                display: block
            }
        }

        .ct-header {
            padding: 1.25rem 0 1.25rem
        }

        .ct-header__main-heading .container-fluid {
            flex-basis: 1366px;
            -webkit-flex-basis: 1366px;
            -moz-flex-basis: 1366px
        }

        .ct-header__main-heading-title {
            padding-top: 4.375rem;
            padding-bottom: 4.375rem
        }
    </style>
    <link rel="stylesheet" id="dentist_wp-google-fonts-css" href="{{ asset('css/css(1).css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="xtender-icons-dental-css" href="{{ asset('css/xtd_dental_icons.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="js_composer_front-css" href="{{ asset('css/js_composer.min.css') }}" type="text/css" media="all">


    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.js.download') }}"></script>
    <script type="text/javascript" src="{{ asset('js/wp-emoji-release.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/jquery-migrate.min.js.download') }}"></script>
    <script type="text/javascript" src="{{ asset('js/js.cookie.min.js.download') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main-min.js.download') }}"></script>

    <script type="text/javascript">function setREVStartSize(e){
            try{ var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
                if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})
            }catch(d){console.log("Failure at Presize of Slider:"+d)}
        };</script>
    <style type="text/css" data-type="vc_custom-css">
        .ct-content{
            overflow-y: visible;
            margin-top: -20rem;
        }
    </style>
    <style type="text/css" data-type="vc_shortcodes-custom-css">
        .vc_custom_1502643994510{padding-bottom: 3rem !important;}
        .vc_custom_1498228527252{padding-top: 0px !important;}
        .vc_custom_1502573110044{
            background: #1187c5 url(./images/dentalchair-3.jpg) !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;}
        .vc_custom_1498224658717{
            border-bottom-width: 1px !important;
            padding-top: 0px !important;
            border-bottom-color: #ededed !important;
            border-bottom-style: solid !important;}
        .vc_custom_1502573121487{background: #9aac34 url(./images/Seamlessteethlight-bluepattern_d9c7faf5-9516-4c8b-af46-05a4aa273320-2.png?id=886) !important;}
        .vc_custom_1502643961994{background-color: #ffffff !important;}
        .vc_custom_1502389031850{margin-right: 4rem !important;}
        .vc_custom_1502666761277{margin-top: -60% !important;margin-left: 40% !important;}
        .vc_custom_1502457267902{margin-bottom: 0px !important;}
        .vc_custom_1498134227285{padding-right: 12px !important;padding-left: 12px !important;}
        .vc_custom_1502642751731{padding-right: 5px !important;padding-left: 5px !important;}
        .vc_custom_1502642757777{margin-top: 2rem !important;padding-right: 5px !important;padding-left: 5px !important;}
        .vc_custom_1502642763982{margin-top: -2rem !important;padding-right: 5px !important;padding-left: 5px !important;}
        .vc_custom_1498069685249{margin-left: -4rem !important;}
        .vc_custom_1498068041800{margin-top: -2rem !important;margin-left: -2rem !important;}
        .vc_custom_1498121544650{margin-bottom: -3rem !important;margin-left: -3rem !important;}
        .vc_custom_1498147657147{margin-top: -6rem !important;margin-left: -4rem !important;}
        .vc_custom_1502642901358{background-color: #ffffff !important;}
        .vc_custom_1502642977690{margin-top: -35px !important;}
        .vc_custom_1502642982033{margin-top: -35px !important;}
        .vc_custom_1502643016856{margin-top: -35px !important;}
        .vc_custom_1502642998250{margin-top: -35px !important;}
        .vc_custom_1502459386847{margin-bottom: -3rem !important;margin-left: -2rem !important;}
        .vc_custom_1505763377450{padding-top: 3rem !important;padding-right: 3rem !important;padding-bottom: 1rem !important;padding-left: 3rem !important;background-color: #ffffff !important;}
        .vc_custom_1502642625745{padding-right: 2em !important;padding-left: 2em !important;}
        .vc_custom_1502642588524{padding-right: 2em !important;padding-left: 2em !important;}
        .vc_custom_1502642634729{padding-right: 2em !important;padding-left: 2em !important;}
    </style>


</head>
<body class="home page-template-default page page-id-5 site__dentist-wp ct-layout--full ct-layout--fixed ct-layout--with-slider ct-hero--without-image ct-menu--align-right ct-menu--fixed  ct-content-with-vc wpb-js-composer js-comp-ver-5.2.1 vc_responsive" itemscope="" itemtype="http://schema.org/WebPage">
<div class="ct-site">
    <header class="ct-header" itemscope="" itemtype="http://schema.org/WPHeader">
        <div class="ct-header__logo-nav--sticky" style="height: 66px;">
            <div class="ct-header__wrapper">
                <div class="container-fluid">
                    <div class="ct-header__toolbar">
                    </div>
                    <div class="ct-header__logo-nav">
                        <a href="/" rel="home" class="ct-logo">
                            <img class="ct-logo__image ct-logo__image--sticky" src="/images/header-logo.png"
                                 srcset="/images/header-logo.png"
                                 alt="Dentist WP">
                            <img class="ct-logo__image" src="/images/header-logo.png" srcset="/images/header-logo.png"
                                 alt="Dentist WP">
                        </a>
                        <label id="ct-main-nav__toggle-navigation" for="ct-main-nav__toggle-navigation-main">Menu
                            <i class="ti-align-justify"></i>
                        </label>
                        <div id="ct-main-nav">
                            <input type="checkbox" hidden="" id="ct-main-nav__toggle-navigation-main">
                            <nav id="ct-main-nav__wrapper" itemscope="" itemtype="http://schema.org/SiteNavigationElement">
                                <ul id="menu-menu" class="ct-main-navigation">
                                    <li id="menu-item-838" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-838">
                                        <a href="/">О Клинике</a>
                                    </li>
                                    <li id="menu-item-841" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-841">
                                        <a href="/services">Услуги</a>
                                        {{-- <ul class="sub-menu">
                                            <li id="menu-item-922" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-922">
                                                <a href="">Services</a>
                                            </li>
                                            <li id="menu-item-917" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-917">
                                                <a href="">Pricing</a>
                                            </li>
                                        </ul> --}}
                                    </li>
                                    <li id="menu-item-839" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-839">
                                        <a href="#personnel" class="smooth-scroll">Врачи</a>
                                        {{-- <ul class="sub-menu">
                                            <li id="menu-item-8" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8">
                                                <a href="#">Getting Here</a>
                                            </li>
                                            <li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9">
                                                <a href="#">Contact Us</a>
                                            </li>
                                        </ul> --}}
                                    </li>
                                    <li id="menu-item-7" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7">
                                        <a href="#getting-here" class="smooth-scroll">Контакты</a>
                                    </li>
                                    {{--<li id="menu-item-840" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-840">--}}
                                    {{--<a href="#appointment" class="smooth-scroll">Записаться</a>--}}
                                    {{--</li>--}}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')
    <footer class="ct-footer" itemscope="" itemtype="http://schema.org/WPFooter">
        <div class="ct-footer__logo">
            <a href="#top" rel="home" id="ct-footer-logo">
                <img src="/images/logo-footer.png">
            </a>
        </div>
        <div class="container-fluid">
            <div id="absolute-footer">
                <div class="row">
                    <aside id="text-1" class="col-12 col-md-6  offset-md-3 text-center text-sm-center text-md-center  sidebar-widget widget_text">
                        <div class="textwidget">
                            <p>Smile, breathe, and go slowly. - Thich Nhat Hanh</p>
                        </div>
                    </aside>
                    <aside id="text-2" class="col-12 col-md-12  text-center text-sm-center text-md-center  sidebar-widget widget_text">
                        <div class="textwidget">
                            <p>
                                <a href="/#">
                                    <i class="fa fa-fw fa-facebook fa-lg "></i>
                                </a> &nbsp;&nbsp;
                                <a href="/#" target="_self" class="nice-scroll">
                                    <i class="fa fa-fw fa-twitter fa-lg "></i>
                                </a> &nbsp;&nbsp;
                                <a href="/#" target="_self" class="nice-scroll">
                                    <i class="fa fa-fw fa-instagram fa-lg "></i>
                                </a> &nbsp;&nbsp;
                                <a href="/#" target="_self" class="nice-scroll">
                                    <i class="fa fa-fw fa-pinterest  fa-lg "></i>
                                </a>
                            </p>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </footer>
</div>




<script type="text/javascript" src="{{ asset('js/front-scripts-min.js.download') }}"></script>

<script type="text/javascript" src="{{ asset('js/scripts-min.js.download') }}"></script>

<script type="text/javascript">
    /* <![CDATA[ */
    var dentist_wp_theme_data = {"menu":{"sticky":false}};
    /* ]]> */
</script>
<script type="text/javascript" src="{{ asset('js/scripts-min.js(1).download') }}"></script>
<script type="text/javascript" src="{{ asset('js/js_composer_front.min.js.download') }}"></script>

<script>
    function initMap() {
        var location = {lat:47.115586, lng:51.861275};
        var map = new google.maps.Map(document.getElementById("map"), {
            zoom: 15,
            center: location
        });
        var marker = new google.maps.Marker({
            position: location,
            map: map
        });
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWsxpPtRelCNDw4GUJks3F2bkL3bW3o3U&callback=initMap">
</script>

<script>
    $('#appointment-btn').click(function(){
        $('.bookly-service-step').hide();
        $('#form-finish').show();
    })
</script>

</body>
</html>
