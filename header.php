<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link" href="#main-content">
    Ga naar de hoofdinhoud
</a>

<?php if (is_front_page()) : ?>

    <div class="page-transition" aria-hidden="true">
        <span class="page-transition__mark">SA</span>
        <span class="page-transition__line"></span>
    </div>

<?php endif; ?>

<?php
$current_page_id = get_queried_object_id();
$page_ancestors  = $current_page_id
    ? get_post_ancestors($current_page_id)
    : array();

$werk_page    = get_page_by_path('werk');
$werk_page_id = $werk_page ? (int) $werk_page->ID : 0;

$diensten_page    = get_page_by_path('diensten');
$diensten_page_id = $diensten_page ? (int) $diensten_page->ID : 0;

$werk_is_active =
    is_page('werk') ||
    (
        $werk_page_id &&
        in_array($werk_page_id, $page_ancestors, true)
    );

$diensten_is_active =
    is_page('diensten') ||
    (
        $diensten_page_id &&
        in_array($diensten_page_id, $page_ancestors, true)
    );
?>

<div class="site-shell">

    <aside class="sidebar">

        <a
            class="sidebar__brand"
            href="<?php echo esc_url(home_url('/')); ?>"
            aria-label="Susan Aben - Home"
        >
            SA
        </a>

        <button
            class="sidebar__toggle"
            type="button"
            aria-expanded="false"
            aria-controls="portfolio-navigation"
            aria-label="Menu openen"
        >
            <span></span>
            <span></span>
        </button>

        <nav
    id="portfolio-navigation"
    class="sidebar__navigation"
    aria-label="Hoofdnavigatie"
>

    <a
        class="sidebar__link <?php echo is_front_page() ? 'is-active' : ''; ?>"
        href="<?php echo esc_url(home_url('/')); ?>"
        <?php echo is_front_page() ? 'aria-current="page"' : ''; ?>
    >
<span class="sidebar__icon" aria-hidden="true">
    <svg viewBox="0 0 24 24" fill="none">
        <path d="M4 10.5 12 4l8 6.5v8.5H15v-5H9v5H4Z"></path>
    </svg>
</span>

        <span class="sidebar__label">
            Home
        </span>

        <span
            class="sidebar__active-dot"
            aria-hidden="true"
        ></span>
    </a>


    <a
        class="sidebar__link <?php echo $werk_is_active ? 'is-active' : ''; ?>"
        href="<?php echo esc_url(home_url('/werk/')); ?>"
        <?php echo $werk_is_active ? 'aria-current="page"' : ''; ?>
    >
<span class="sidebar__icon" aria-hidden="true">
    <svg viewBox="0 0 24 24" fill="none">
        <rect x="4" y="5" width="16" height="14" rx="1.5"></rect>
        <path d="M4 9h16"></path>
        <path d="M8 9v10"></path>
    </svg>
</span>

        <span class="sidebar__label">
            Werk
        </span>

        <span
            class="sidebar__active-dot"
            aria-hidden="true"
        ></span>
    </a>


    <a
        class="sidebar__link <?php echo is_page('over-mij') ? 'is-active' : ''; ?>"
        href="<?php echo esc_url(home_url('/over-mij/')); ?>"
        <?php echo is_page('over-mij') ? 'aria-current="page"' : ''; ?>
    >
<span class="sidebar__icon" aria-hidden="true">
    <svg viewBox="0 0 24 24" fill="none">
        <circle cx="12" cy="8" r="3.5"></circle>
        <path d="M5 20c.8-4.2 3.2-6.3 7-6.3s6.2 2.1 7 6.3"></path>
    </svg>
</span>

        <span class="sidebar__label">
            Over mij
        </span>

        <span
            class="sidebar__active-dot"
            aria-hidden="true"
        ></span>
    </a>


    <a
        class="sidebar__link <?php echo $diensten_is_active ? 'is-active' : ''; ?>"
        href="<?php echo esc_url(home_url('/diensten/')); ?>"
        <?php echo $diensten_is_active ? 'aria-current="page"' : ''; ?>
    >
<span class="sidebar__icon" aria-hidden="true">
    <svg viewBox="0 0 24 24" fill="none">
        <path d="m12 3 8 4.5v9L12 21l-8-4.5v-9Z"></path>
        <path d="m4.5 7.7 7.5 4.2 7.5-4.2"></path>
        <path d="M12 12v9"></path>
    </svg>
</span>

        <span class="sidebar__label">
            Diensten
        </span>

        <span
            class="sidebar__active-dot"
            aria-hidden="true"
        ></span>
    </a>


    <a
        class="sidebar__link <?php echo is_page('contact') ? 'is-active' : ''; ?>"
        href="<?php echo esc_url(home_url('/contact/')); ?>"
        <?php echo is_page('contact') ? 'aria-current="page"' : ''; ?>
    >
<span class="sidebar__icon" aria-hidden="true">
    <svg viewBox="0 0 24 24" fill="none">
        <rect x="4" y="6" width="16" height="12" rx="1.5"></rect>
        <path d="m5 8 7 5 7-5"></path>
    </svg>
</span>

        <span class="sidebar__label">
            Contact
        </span>

        <span
            class="sidebar__active-dot"
            aria-hidden="true"
        ></span>
    </a>

</nav>

        <div class="sidebar__bottom">

<?php
$portfolio_languages = function_exists('trp_custom_language_switcher')
    ? trp_custom_language_switcher()
    : array();

global $TRP_LANGUAGE;

$current_portfolio_language = !empty($TRP_LANGUAGE)
    ? $TRP_LANGUAGE
    : get_locale();
?>

<div
    class="language-switcher"
    aria-label="Taal kiezen"
    data-no-translation
>
    <?php if (!empty($portfolio_languages)) : ?>

        <?php
        $language_position = 0;

        foreach ($portfolio_languages as $language_code => $language) :

            $short_name = strtoupper(
                $language['short_language_name']
            );

            $is_active =
                $language_code === $current_portfolio_language;

            if ($language_position > 0) :
        ?>
                <span
                    class="language-switcher__divider"
                    aria-hidden="true"
                >
                    /
                </span>
        <?php
            endif;
        ?>

            <?php if ($is_active) : ?>

                <span
                    class="language-switcher__option is-active"
                    aria-current="page"
                >
                    <?php echo esc_html($short_name); ?>
                </span>

            <?php else : ?>

                <a
                    class="language-switcher__option"
                    href="<?php echo esc_url(
                        $language['current_page_url']
                    ); ?>"
                    aria-label="<?php echo esc_attr(
                        $language['language_name']
                    ); ?>"
                    data-no-translation
                >
                    <?php echo esc_html($short_name); ?>
                </a>

            <?php endif; ?>

        <?php
            $language_position++;
        endforeach;
        ?>

    <?php else : ?>

        <span class="language-switcher__option is-active">
            NL
        </span>

        <span
            class="language-switcher__divider"
            aria-hidden="true"
        >
            /
        </span>

        <span class="language-switcher__option">
            EN
        </span>

    <?php endif; ?>
</div>

            <a
                class="sidebar__privacy"
                href="<?php echo esc_url(home_url('/privacy/')); ?>"
            >
                Privacy
            </a>

        </div>

    </aside>

    <main
        id="main-content"
        class="site-content"
        tabindex="-1"
    >
