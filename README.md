# Page Builder

Allows you to create pages, properly.

## Taxonomy Pages

You can load the contents of a taxonomy page like so:

```php
$term = get_queried_object();
$pb = new andyp\pagebuilder\filters\the_content;
$content = $pb->filter_the_content_in_the_main_loop(null, $term);

echo $content;

```