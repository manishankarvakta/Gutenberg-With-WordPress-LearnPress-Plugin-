// add guttenburger to LearnPress
add_filter('register_post_type_args', 'learnpress_cpt_add_gutenberg_support', 10, 2);

function learnpress_cpt_add_gutenberg_support ($args, $post_type)
{

    if (in_array($post_type, array('lp_course', 'lp_lesson',))){

        $args['show_in_rest'] = true;
    }

    return $args;
}
