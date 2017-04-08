<?php
/**
 * Created by PhpStorm.
 * User: Marina
 * Date: 01.04.2017
 * Time: 17:04
 */
function home_gh_exam_customize_register($wp_customize){
    $wp_customize->add_panel( 'front_page', array(
        'title' => __( 'Front Page Section' ),
        'description' => __( 'front page edit', 'home-gh-exam' ),
        'priority' => 30,
    ) );

    ///intro
    $wp_customize->add_section('intro', array(
        "title" => __('Welcome section', 'home-gh-exam'),
        'priority' => 29,
        'panel' => 'front_page',
    ));
    $wp_customize->add_setting('intro_title', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intro_title', array(
        'label' => __('Welcome Title', 'home-gh-exam'),
        'section' => 'intro',
        'settings' => 'intro_title',
        'type' => 'text'
    )));

    $wp_customize->add_setting('intro_description', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intro_description', array(
        'label' => __('Welcome Description', 'home-gh-exam'),
        'section' => 'intro',
        'settings' => 'intro_description',
        'type' => 'text'
    )));

    //end intro

    ///Second section
    $wp_customize->add_section( 'second_section' , array(
        'title'      => __( 'Second section', 'home-gh-exam' ),
        'priority'   => 31,
        'panel' => 'front_page',
    ) );
    $wp_customize->add_setting('sec_section_title', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'sec_section_title', array(
        'label' => __('Section Title', 'home-gh-exam'),
        'section' => 'second_section',
        'settings' => 'sec_section_title',
        'type' => 'text'
    )));

    $wp_customize->add_setting('sec_section_description', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'sec_section_description', array(
        'label' => __('Section Description', 'home-gh-exam'),
        'section' => 'second_section',
        'settings' => 'sec_section_description',
        'type' => 'text'
    )));

    ///Third section
    $wp_customize->add_section( 'third_section' , array(
        'title'      => __( 'Third section', 'home-gh-exam' ),
        'priority'   => 31,
        'panel' => 'front_page',
    ) );
    $wp_customize->add_setting('th_section_title', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'th_section_title', array(
        'label' => __('Section Title', 'home-gh-exam'),
        'section' => 'third_section',
        'settings' => 'th_section_title',
        'type' => 'text'
    )));

    $wp_customize->add_setting('th_section_description', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'th_section_description', array(
        'label' => __('Section Description', 'home-gh-exam'),
        'section' => 'third_section',
        'settings' => 'th_section_description',
        'type' => 'text'
    )));

    ///Fourth section
    $wp_customize->add_section( 'four_section' , array(
        'title'      => __( 'Fourth section', 'home-gh-exam' ),
        'priority'   => 31,
        'panel' => 'front_page',
    ) );
    $wp_customize->add_setting('fr_section_title', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'fr_section_title', array(
        'label' => __('Section Title', 'home-gh-exam'),
        'section' => 'four_section',
        'settings' => 'fr_section_title',
        'type' => 'text'
    )));

    $wp_customize->add_setting('fr_section_description', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'fr_section_description', array(
        'label' => __('Section Description', 'home-gh-exam'),
        'section' => 'four_section',
        'settings' => 'fr_section_description',
        'type' => 'text'
    )));

    ///five section
    $wp_customize->add_section( 'five_section' , array(
        'title'      => __( 'Five section', 'home-gh-exam' ),
        'priority'   => 31,
        'panel' => 'front_page',
    ) );
    $wp_customize->add_setting('fv_section_title', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'fv_section_title', array(
        'label' => __('Section Title', 'home-gh-exam'),
        'section' => 'five_section',
        'settings' => 'fv_section_title',
        'type' => 'text'
    )));

    $wp_customize->add_setting('fv_section_description', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'fv_section_description', array(
        'label' => __('Section Description', 'home-gh-exam'),
        'section' => 'five_section',
        'settings' => 'fv_section_description',
        'type' => 'text'
    )));

    $wp_customize->add_setting('ajy-contact-call-label', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ajy-contact-call-label', array(
        'label' => __('Contact call us label', 'consult'),
        'section' => 'five_section',
        'settings' => 'ajy-contact-call-label',
        'type' => 'text'
    )));
    $wp_customize->add_setting('address-contact', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'address-contact', array(
        'label' => __('Contact us', 'ajy'),
        'section' => 'five_section',
        'settings' => 'address-contact',
        'type' => 'text'
    )));


}
function home_gh_exam_head (){
    ?>
    <style type="text/css">
        .intro { background: url("<?php echo get_theme_mod('intro-img-upload'); ?>") center no-repeat;
            background-size: cover;
        ;}

    </style>
    <?php
}

add_action( 'wp_head', 'home_gh_exam_head');
add_action( 'customize_register', 'home_gh_exam_customize_register' );