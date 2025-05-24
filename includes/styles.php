<?php
function de_finibus_custom_styles() {
    ob_start();
?>

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

/* Experimental: Dark Mode */
span.edit-link a.post-edit-link, span.edit-link a.post-edit-link:hover, span.edit-link .icon-edit:before {
    color: light-dark(#515355, #9c9ea0);
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

@media(prefers-color-scheme:dark) {
    body {
        color: #c0c0c0;
        background-color: #151d21;
    }
    body:not(.kahuna-landing-page) article.hentry, body:not(.kahuna-landing-page) .main, body.kahuna-boxed-layout:not(.kahuna-landing-page) #container  {
        background-color: #0b1216;
        color: #f0f0f0;
    }
    .entry-content h1, .entry-content h2, .entry-content h3, .entry-content h4, .lp-text-content h1, .lp-text-content h2, .lp-text-content h3, .lp-text-content h4 {
        color: #c0c0c0;
    }
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

pre:not(:has(code)), code {
    border: 1px solid light-dark(#e2e2e5, #242628);
}

<?php
    return ob_get_clean();
}
?>
