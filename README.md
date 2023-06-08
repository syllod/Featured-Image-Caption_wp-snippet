# WordPress Featured Image Caption Snippet

This WordPress snippet adds the caption of the featured image below the image itself on single post pages.

## Overview

Often times, when using WordPress, you might want to display the caption and description of the featured image along with the image. This snippet achieves this by adding the caption directly below the featured image on single post pages (not archive or listing pages).

## Usage

To use this snippet, add the code from `add-caption-to-featured-image.php` to your theme's `functions.php` file.

## How It Works

The snippet uses the `post_thumbnail_html` filter to modify the HTML content of the featured image. It fetches the caption of the featured image and adds it below the image inside a `<figcaption>` tag.

The snippet uses conditional logic to ensure it only runs on single post pages and not on archive or listing pages.

## Customization

You can customize the appearance of the caption and description by adding CSS styles for the `wp-caption-text` and `wp-caption-description` classes.

Example:

```css
.wp-caption-text {
    font-size: 0.9em;
    text-align: center;
    margin-top: 5px;
}
