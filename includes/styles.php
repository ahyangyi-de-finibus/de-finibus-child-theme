<?php
function de_finibus_custom_styles() {
    ob_start();
?>
/*
 * Generic styling
 */
a {
    color: light-dark(color(display-p3 0.13794 0.38933 0.56114), color(display-p3 0.36485 0.58967 0.77079));
}
#footer {
    a {
        color: color(display-p3 0.47195 0.69476 0.8808);
    }
    /* Repeat a:hover with higher specificity */
    a:hover, .entry-meta span a:hover, .comments-link a:hover {
        color: #00c1f9;
    }
}

/*
 * The title
 */
#header-image-main .entry-title {
    font-weight: 100;
    font-size: 400%;
}
@media print {
    #header-image-main .entry-title {
        color: #000000;
    }
}

/*
 * The Byline, or subtitle
 */
.byline {
    font-weight: 200 !important;
    font-style: italic;
    color: #aaaaaa !important;
}
@media print {
    .byline {
        color: #000000 !important;
    }
}

/*
 * header section
 */
#site-header-main,
#site-header-main.header-fixed #site-header-main-inside,
#access ul ul,
.menu-search-animated .searchform input[type="search"],
#access .menu-search-animated .searchform,
#access::after,
.kahuna-over-menu .header-fixed#site-header-main,
.kahuna-over-menu .header-fixed#site-header-main #access:after,
nav#mobile-menu {
    background-color: light-dark(#2f434d, #1f333d);
}
#header-image-main-inside {
    background-color: light-dark(#435462, #2c3d4a);
}
#masthead, body:not(.kahuna-landing-page) #masthead {
    border-bottom: 5px solid light-dark(#6a96b5, #366380);
}
@media print {
    #masthead, body:not(.kahuna-landing-page) #masthead {
        border-bottom: 2px solid #000000;
    }
}

/* Main Section */
body {
    background-color: light-dark(#dce3e9, #151d21);
    color: light-dark(#242628, #c5c6c9);
    @media (prefers-contrast: less) {
        color: light-dark(#515355, #8f9193);
    }
    @media (prefers-contrast: more) {
        color: light-dark(#000000, #ffffff);
    }
}
.entry-content h1,
.entry-content h2,
.entry-content h3,
.entry-content h4,
.lp-text-content h1,
.lp-text-content h2,
.lp-text-content h3,
.lp-text-content h4 {
    color: light-dark(#191c1e, #d3d4d7);
    @media (prefers-contrast: less) {
        color: light-dark(#454749, #aaabae);
    }
    @media (prefers-contrast: more) {
        color: light-dark(#000000, #ffffff);
    }
}
body:not(.kahuna-landing-page) article.hentry,
body:not(.kahuna-landing-page) .main,
body.kahuna-boxed-layout:not(.kahuna-landing-page) #container  {
    background-color: light-dark(#ffffff, #0b1216);
}
.entry-meta span,
.entry-meta a,
.entry-utility span,
.entry-utility a,
.entry-meta time,
#breadcrumbs-nav,
#header-page-title .byline,
.footermenu ul li span.sep,
.entry-meta .icon-metas:before {
    color: light-dark(#5d5e61, #8f9193);
}
span.edit-link a.post-edit-link,
span.edit-link a.post-edit-link:hover,
span.edit-link .icon-edit:before {
    color: light-dark(#515355, #9c9ea0);
}

/* Footer */
#colophon {
    border-top-color: light-dark(#48545d, #313d46);
}

#colophon, #footer {
    background-color: light-dark(#26323a, #1c272f);
}

#footer-bottom {
    background-color: light-dark(#1c272f, #111d25);
}

/* Box UI elements */
.kahuna-normalizedtags #content .tagcloud a,
a.continue-reading-link, .continue-reading-link::after {
    background-color: light-dark(#378aba, color(display-p3 0.13794 0.38933 0.56114));
}

.pagination a, .pagination span {
    border-color: light-dark(#f0f0f3, #2b3136);
}
.pagination a:hover, .pagination span:hover, .page-link a:hover, .page-link span em:hover {
    background-color: light-dark(#f0f0f3, #2b3136);
}

/* pre and code handling */
code, #nav-below .nav-previous a:before, #nav-below .nav-next a:before {
    background-color: light-dark(#f0f0f3, #191c1e);
}

code {
    padding: 0.1em;
}

code, pre {
    background-color: light-dark(#f0f0f3, #191c1e);
    font-family: Consolas, Monaco, 'Andale Mono', 'Ubuntu Mono', monospace;
    border-width: 0;
}

pre:not(:has(code)),
pre:not([class*="language-"]),
:not(pre) > code {
    border: 1px solid light-dark(#e2e2e5, #242628);
}

pre > code {
    padding: 0;
}

<?php
    return ob_get_clean();
}
?>
