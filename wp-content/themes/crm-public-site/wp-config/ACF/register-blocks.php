<?php

add_action('acf/init', 'at_acf_init_block_types');
function at_acf_init_block_types(){
    $blocks = [];

    $blocks[] = [
        'name'              => 'About Event',
        'title'             => __('About Event'),
        'description'       => __('About Event'),
        'render_template'   => 'template-parts/about-event.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => ['about', 'event'],
        'enqueue_assets' => function(){
        },
    ];

    $blocks[] = [
        'name'              => 'About Banner',
        'title'             => __('About Banner'),
        'description'       => __('About Banner'),
        'render_template'   => 'template-parts/about-banner.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => ['about', 'banner'],
        'enqueue_assets' => function(){
        },
    ];

    $blocks[] = [
        'name'              => 'About News',
        'title'             => __('About News'),
        'description'       => __('About News'),
        'render_template'   => 'template-parts/about-news.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => ['about', 'news'],
        'enqueue_assets' => function(){
        },
    ];
    $blocks[] = [
        'name'              => 'How It Works',
        'title'             => __('How It Works'),
        'description'       => __('How It Works'),
        'render_template'   => 'template-parts/how-it-works.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => ['how','it','works'],
        'enqueue_assets' => function(){
        },
    ];
    $blocks[] = [
        'name'              => 'Subscribe',
        'title'             => __('Subscribe'),
        'description'       => __('Subscribe'),
        'render_template'   => 'template-parts/subscribe.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => ['subscribe'],
        'enqueue_assets' => function(){
        },
    ];
    $blocks[] = [
        'name'              => 'Contact Us',
        'title'             => __('Contact Us'),
        'description'       => __('Contact Us'),
        'render_template'   => 'template-parts/contact-us.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => ['contact'],
        'enqueue_assets' => function(){
        },
    ];

    // Clinic Blocks
    $blocks[] = [
        'name'              => 'Clinic Hero Slider',
        'title'             => __('Clinic Hero Slider'),
        'description'       => __('Hero slider with multiple slides'),
        'render_template'   => 'template-parts/clinic-hero-slider.php',
        'category'          => 'formatting',
        'icon'              => 'slides',
        'keywords'          => ['clinic', 'hero', 'slider', 'swiper'],
        'enqueue_assets' => function(){
        },
    ];

    $blocks[] = [
        'name'              => 'Clinic Services',
        'title'             => __('Clinic Services'),
        'description'       => __('Services section with images and service list'),
        'render_template'   => 'template-parts/clinic-services.php',
        'category'          => 'formatting',
        'icon'              => 'admin-generic',
        'keywords'          => ['clinic', 'services'],
        'enqueue_assets' => function(){
        },
    ];

    $blocks[] = [
        'name'              => 'Clinic Process',
        'title'             => __('Clinic Process'),
        'description'       => __('How it works process steps'),
        'render_template'   => 'template-parts/clinic-process.php',
        'category'          => 'formatting',
        'icon'              => 'list-view',
        'keywords'          => ['clinic', 'process', 'steps'],
        'enqueue_assets' => function(){
        },
    ];

    $blocks[] = [
        'name'              => 'Clinic Features',
        'title'             => __('Clinic Features'),
        'description'       => __('Features grid with icons'),
        'render_template'   => 'template-parts/clinic-features.php',
        'category'          => 'formatting',
        'icon'              => 'star-filled',
        'keywords'          => ['clinic', 'features'],
        'enqueue_assets' => function(){
        },
    ];

    $blocks[] = [
        'name'              => 'Clinic Team',
        'title'             => __('Clinic Team'),
        'description'       => __('Team members grid'),
        'render_template'   => 'template-parts/clinic-team.php',
        'category'          => 'formatting',
        'icon'              => 'groups',
        'keywords'          => ['clinic', 'team', 'doctors'],
        'enqueue_assets' => function(){
        },
    ];

    $blocks[] = [
        'name'              => 'Clinic Parallax Banner',
        'title'             => __('Clinic Parallax Banner'),
        'description'       => __('Parallax banner with title and button'),
        'render_template'   => 'template-parts/clinic-parallax-banner.php',
        'category'          => 'formatting',
        'icon'              => 'cover-image',
        'keywords'          => ['clinic', 'parallax', 'banner'],
        'enqueue_assets' => function(){
        },
    ];

    $blocks[] = [
        'name'              => 'Clinic News Slider',
        'title'             => __('Clinic News Slider'),
        'description'       => __('News items slider'),
        'render_template'   => 'template-parts/clinic-news-slider.php',
        'category'          => 'formatting',
        'icon'              => 'admin-post',
        'keywords'          => ['clinic', 'news', 'slider'],
        'enqueue_assets' => function(){
        },
    ];

    $blocks[] = [
        'name'              => 'Clinic Appointment Form',
        'title'             => __('Clinic Appointment Form'),
        'description'       => __('Appointment form with contact information'),
        'render_template'   => 'template-parts/clinic-appointment-form.php',
        'category'          => 'formatting',
        'icon'              => 'email-alt',
        'keywords'          => ['clinic', 'appointment', 'form', 'contact'],
        'enqueue_assets' => function(){
        },
    ];

    // Events Blocks
    $blocks[] = [
        'name'              => 'Events Features',
        'title'             => __('Events Features'),
        'description'       => __('Features grid with icons'),
        'render_template'   => 'template-parts/events-features.php',
        'category'          => 'formatting',
        'icon'              => 'star-filled',
        'keywords'          => ['events', 'features'],
        'enqueue_assets' => function(){
        },
    ];

    $blocks[] = [
        'name'              => 'Events Upcoming Event',
        'title'             => __('Events Upcoming Event'),
        'description'       => __('Upcoming event section with parallax background and form'),
        'render_template'   => 'template-parts/events-upcoming-event.php',
        'category'          => 'formatting',
        'icon'              => 'calendar-alt',
        'keywords'          => ['events', 'upcoming', 'event', 'form'],
        'enqueue_assets' => function(){
        },
    ];

    $blocks[] = [
        'name'              => 'Events Speakers',
        'title'             => __('Events Speakers'),
        'description'       => __('Speakers section with images and descriptions'),
        'render_template'   => 'template-parts/events-speakers.php',
        'category'          => 'formatting',
        'icon'              => 'microphone',
        'keywords'          => ['events', 'speakers', 'crew'],
        'enqueue_assets' => function(){
        },
    ];

    $blocks[] = [
        'name'              => 'Events Sponsors',
        'title'             => __('Events Sponsors'),
        'description'       => __('Sponsors slider'),
        'render_template'   => 'template-parts/events-sponsors.php',
        'category'          => 'formatting',
        'icon'              => 'groups',
        'keywords'          => ['events', 'sponsors', 'clients'],
        'enqueue_assets' => function(){
        },
    ];

    // Team Blocks
    $blocks[] = [
        'name'              => 'Team Hero',
        'title'             => __('Team Hero'),
        'description'       => __('Parallax hero with eyebrow and title'),
        'render_template'   => 'template-parts/team-hero.php',
        'category'          => 'formatting',
        'icon'              => 'cover-image',
        'keywords'          => ['team', 'hero', 'parallax'],
        'enqueue_assets' => function(){
        },
    ];

    $blocks[] = [
        'name'              => 'Team Speakers',
        'title'             => __('Team Speakers'),
        'description'       => __('Two-column featured speakers/cards'),
        'render_template'   => 'template-parts/team-speakers.php',
        'category'          => 'formatting',
        'icon'              => 'microphone',
        'keywords'          => ['team', 'speakers', 'cards'],
        'enqueue_assets' => function(){
        },
    ];

    // FAQ Blocks
    $blocks[] = [
        'name'              => 'FAQ Hero',
        'title'             => __('FAQ Hero'),
        'description'       => __('FAQ hero section with parallax background'),
        'render_template'   => 'template-parts/faq-hero.php',
        'category'          => 'formatting',
        'icon'              => 'cover-image',
        'keywords'          => ['faq', 'hero', 'parallax'],
        'enqueue_assets' => function(){
        },
    ];

    $blocks[] = [
        'name'              => 'FAQ Intro',
        'title'             => __('FAQ Intro'),
        'description'       => __('FAQ introduction text section'),
        'render_template'   => 'template-parts/faq-intro.php',
        'category'          => 'formatting',
        'icon'              => 'editor-justify',
        'keywords'          => ['faq', 'intro', 'text'],
        'enqueue_assets' => function(){
        },
    ];

    $blocks[] = [
        'name'              => 'FAQ Accordion',
        'title'             => __('FAQ Accordion'),
        'description'       => __('FAQ accordion grid with Cube Portfolio'),
        'render_template'   => 'template-parts/faq-accordion.php',
        'category'          => 'formatting',
        'icon'              => 'list-view',
        'keywords'          => ['faq', 'accordion', 'questions'],
        'enqueue_assets' => function(){
        },
    ];

    // Portfolio Blocks
    $blocks[] = [
        'name'              => 'Portfolio Filter',
        'title'             => __('Portfolio Filter'),
        'description'       => __('Portfolio filter buttons'),
        'render_template'   => 'template-parts/portfolio-filter.php',
        'category'          => 'formatting',
        'icon'              => 'filter',
        'keywords'          => ['portfolio', 'filter', 'categories'],
        'enqueue_assets' => function(){
        },
    ];

    $blocks[] = [
        'name'              => 'Portfolio Gallery',
        'title'             => __('Portfolio Gallery'),
        'description'       => __('Portfolio gallery grid with Cube Portfolio'),
        'render_template'   => 'template-parts/portfolio-gallery.php',
        'category'          => 'formatting',
        'icon'              => 'grid-view',
        'keywords'          => ['portfolio', 'gallery', 'grid'],
        'enqueue_assets' => function(){
        },
    ];

    $blocks[] = [
        'name'              => 'Portfolio Clients',
        'title'             => __('Portfolio Clients'),
        'description'       => __('Portfolio clients slider'),
        'render_template'   => 'template-parts/portfolio-clients.php',
        'category'          => 'formatting',
        'icon'              => 'groups',
        'keywords'          => ['portfolio', 'clients', 'slider'],
        'enqueue_assets' => function(){
        },
    ];

    // Promo Block
    $blocks[] = [
        'name'              => 'Promo Block',
        'title'             => __('Promo Block'),
        'description'       => __('Simple promo section with title and description'),
        'render_template'   => 'template-parts/promo-block.php',
        'category'          => 'formatting',
        'icon'              => 'megaphone',
        'keywords'          => ['promo', 'hero', 'title'],
        'enqueue_assets' => function(){
        },
    ];

    // Services Blocks
    $blocks[] = [
        'name'              => 'Services Hero Video',
        'title'             => __('Services Hero Video'),
        'description'       => __('Video background hero with text'),
        'render_template'   => 'template-parts/services-hero-video.php',
        'category'          => 'formatting',
        'icon'              => 'video-alt3',
        'keywords'          => ['services', 'hero', 'video'],
        'enqueue_assets' => function(){
        },
    ];

    $blocks[] = [
        'name'              => 'Services Mockup',
        'title'             => __('Services Mockup'),
        'description'       => __('Device mockup image section'),
        'render_template'   => 'template-parts/services-mockup.php',
        'category'          => 'formatting',
        'icon'              => 'laptop',
        'keywords'          => ['services', 'mockup', 'devices'],
        'enqueue_assets' => function(){
        },
    ];

    $blocks[] = [
        'name'              => 'Services Portfolio',
        'title'             => __('Services Portfolio'),
        'description'       => __('Portfolio gallery with sidebar text'),
        'render_template'   => 'template-parts/services-portfolio.php',
        'category'          => 'formatting',
        'icon'              => 'grid-view',
        'keywords'          => ['services', 'portfolio', 'gallery'],
        'enqueue_assets' => function(){
        },
    ];

    $blocks[] = [
        'name'              => 'Services Counter',
        'title'             => __('Services Counter'),
        'description'       => __('Parallax counter stats section'),
        'render_template'   => 'template-parts/services-counter.php',
        'category'          => 'formatting',
        'icon'              => 'chart-bar',
        'keywords'          => ['services', 'counter', 'stats'],
        'enqueue_assets' => function(){
        },
    ];

    $blocks[] = [
        'name'              => 'Services Pricing',
        'title'             => __('Services Pricing'),
        'description'       => __('Pricing plans section'),
        'render_template'   => 'template-parts/services-pricing.php',
        'category'          => 'formatting',
        'icon'              => 'money-alt',
        'keywords'          => ['services', 'pricing', 'plans'],
        'enqueue_assets' => function(){
        },
    ];

    $blocks[] = [
        'name'              => 'Services Testimonials',
        'title'             => __('Services Testimonials'),
        'description'       => __('Testimonials slider'),
        'render_template'   => 'template-parts/services-testimonials.php',
        'category'          => 'formatting',
        'icon'              => 'format-quote',
        'keywords'          => ['services', 'testimonials', 'quotes'],
        'enqueue_assets' => function(){
        },
    ];

    $blocks[] = [
        'name'              => 'Services Clients',
        'title'             => __('Services Clients'),
        'description'       => __('Client logos slider'),
        'render_template'   => 'template-parts/services-clients.php',
        'category'          => 'formatting',
        'icon'              => 'groups',
        'keywords'          => ['services', 'clients', 'logos'],
        'enqueue_assets' => function(){
        },
    ];

    // Home Blocks
    $blocks[] = [
        'name'              => 'Home Hero Slider',
        'title'             => __('Home Hero Slider'),
        'description'       => __('Full-screen hero slider with video popup'),
        'render_template'   => 'template-parts/home-hero-slider.php',
        'category'          => 'formatting',
        'icon'              => 'slides',
        'keywords'          => ['home', 'hero', 'slider', 'swiper'],
        'enqueue_assets' => function(){
        },
    ];

    $blocks[] = [
        'name'              => 'Home Features',
        'title'             => __('Home Features'),
        'description'       => __('Features grid with icons'),
        'render_template'   => 'template-parts/home-features.php',
        'category'          => 'formatting',
        'icon'              => 'star-filled',
        'keywords'          => ['home', 'features', 'icons'],
        'enqueue_assets' => function(){
        },
    ];

    $blocks[] = [
        'name'              => 'Home Parallax CTA',
        'title'             => __('Home Parallax CTA'),
        'description'       => __('Parallax call-to-action with button'),
        'render_template'   => 'template-parts/home-parallax-cta.php',
        'category'          => 'formatting',
        'icon'              => 'cover-image',
        'keywords'          => ['home', 'parallax', 'cta', 'button'],
        'enqueue_assets' => function(){
        },
    ];

    $blocks[] = [
        'name'              => 'Home About',
        'title'             => __('Home About'),
        'description'       => __('About/Culture section with image'),
        'render_template'   => 'template-parts/home-about.php',
        'category'          => 'formatting',
        'icon'              => 'admin-users',
        'keywords'          => ['home', 'about', 'culture'],
        'enqueue_assets' => function(){
        },
    ];

    if( function_exists('acf_register_block_type') ) {
        foreach($blocks as $block){
            acf_register_block_type($block);
        }
    }
}