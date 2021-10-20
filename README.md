# Page Builder

Built upon ACF Pro, this is an alternative wordpress page-builder without all the injected extra code
you have no idea the developer has deemed nessesary.

A light-weight solution that enables you to build pages the way you want to - with no constraints.

This is the base module that requires other plugins to run. For instance, the `rawcode` plugin will allow
you to inject any code you want directly onto the page.

## Use-case

Built with tailwind-css and SVGs as imagery in mind, this builder was created to allow me to keep the page 
sizes to a minimum for good lighthouse scores.


## Requirements

- Wordpress
- ACF Pro

## Install

Note: This plugin WILL disable the normal WYSIWYG builder you would normally see.

### Header

Your theme will need to include the following code into the header, below the `wp_head();` function.

```php
<?php 
    wp_head(); 
    do_action('page_builder_header_code'); 
?>
```
This is so the plugin can inject any code you specify (CSS / Stylesheets) into the header.

### Footer

Similarly, the theme footer will require the following code, just ABOVE the `wo__footer();` function.

```php
<?php 
    do_action('page_builder_footer_code'); 
    wp_footer(); 
?>
```

This is for any SVGs to reference or Javascript to inject.


