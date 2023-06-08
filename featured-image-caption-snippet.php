function add_caption_to_featured_image($html, $post_id) {
    if (is_singular()) { 
        $caption = get_post(get_post_thumbnail_id($post_id))->post_excerpt;

        if ($caption) {
            $html = preg_replace('/(<img.*?>)/', '$1' . '<figcaption class="wp-caption-text">' . $caption . '</figcaption>', $html);
        }
    }

    return $html;
}

add_filter('post_thumbnail_html', 'add_caption_to_featured_image', 10, 2);
