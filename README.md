
<div id="top"></div>

<div align="center">

<img src="https://svg-rewriter.sachinraja.workers.dev/?url=https%3A%2F%2Fcdn.jsdelivr.net%2Fnpm%2F%40mdi%2Fsvg%406.7.96%2Fsvg%2Fcube-unfolded.svg&fill=%239A3412&width=200px&height=200px" style="width:200px;"/>

<h3 align="center">Page Builder</h3>

<p align="center">
    A custom HTML page-builder For Wordpress. Built with ACF Pro. 
</p>    
</div>

##  1. <a name='TableofContents'></a>Table of Contents


* 1. [Table of Contents](#TableofContents)
* 2. [About The Project](#AboutTheProject)
	* 2.1. [Use-case](#Use-case)
	* 2.2. [Built With](#BuiltWith)
	* 2.3. [Installation](#Installation)
		* 2.3.1. [Theme Header](#ThemeHeader)
		* 2.3.2. [Theme Footer](#ThemeFooter)
* 3. [Usage](#Usage)
* 4. [Customising](#Customising)
* 5. [Troubleshooting](#Troubleshooting)
* 6. [Contributing](#Contributing)
* 7. [License](#License)
* 8. [Contact](#Contact)
* 9. [Changelog](#Changelog)



##  2. <a name='AboutTheProject'></a>About The Project

Built upon ACF Pro, this is an alternative wordpress page-builder without all the injected extra code
you have no idea the developer has deemed nessesary.

A light-weight solution that enables you to build pages the way you want to - with no constraints.

This is the base module that requires other plugins to run. For instance, the `rawcode` plugin will allow
you to inject any code you want directly onto the page.

The beauty of it is that it allows you to create an organised foldered structure for your sections by using
ACFs 'repeaters' and 'clones'.

###  2.1. <a name='Use-case'></a>Use-case

Built with tailwind-css and SVGs as imagery in mind, this builder was created to allow me to keep the page 
sizes to a minimum for good lighthouse scores. 

The page builder really only does the following things:

1. Gives you access to the other page-builder plugins to place onto the page.
2. Add classes into the body or page. (optional)
3. Add code into the Header
4. Add code into the Footer
5. Add SVGs into the Footer
6. Import and Export JSON representation of the page. 
7. Import and Export JSON representation of the SVGs. 

The import/export functionality allows you to copy & paste the page or SVG data all in one.



<p align="right">(<a href="#top">back to top</a>)</p>


###  2.2. <a name='BuiltWith'></a>Built With

This project was built with the following frameworks, technologies and software.

* [ACF](https://advancedcustomfields.com/)
* [PHP](https://php.net/)
* [Wordpress](https://wordpress.org/)

<p align="right">(<a href="#top">back to top</a>)</p>



###  2.3. <a name='Installation'></a>Installation

These are the steps to get up and running with this plugin.

1. Clone the repo into your wordpress plugin folder
    ```bash
    git clone https://github.com/IORoot/wp-plugin__page-builder ./wp-content/plugins/page-builder
    ```
1. Activate the plugin.

> Note: This plugin WILL disable the normal WYSIWYG builder you would normally see.


####  2.3.1. <a name='ThemeHeader'></a>Theme Header

Your theme will need to include the following code into the header, below the `wp_head();` function.

```php
<?php 
    wp_head(); 
    do_action('page_builder_header_code'); 
?>
```
This is so the plugin can inject any code you specify (CSS / Stylesheets) into the header.

####  2.3.2. <a name='ThemeFooter'></a>Theme Footer

Similarly, the theme footer will require the following code, just ABOVE the `wo__footer();` function.

```php
<?php 
    do_action('page_builder_footer_code'); 
    wp_footer(); 
?>
```

This is for any SVGs to reference or Javascript to inject.


<p align="right">(<a href="#top">back to top</a>)</p>

##  3. <a name='Usage'></a>Usage

The page-builder on it's own will not do anything other than turn off the default page builder, setup some hooks and initialise the import/export functionality.

The idea is that all functionality is plug-and-playable. Therefore you need to install any of the other page-builder plugins that extend it's ability.

Currently, there are the following plugins:

- [Epic-slider](https://github.com/IORoot/wp-plugin__page-builder--epic-slider)
- [Metafizzy Flickity](https://github.com/IORoot/wp-plugin__page-builder--flickity)
- [Metafizzy Isotope](https://github.com/IORoot/wp-plugin__page-builder--isotope)
- [Random Hero](https://github.com/IORoot/wp-plugin__page-builder--hero)
- [Rawcode](https://github.com/IORoot/wp-plugin__page-builder--rawcode)
- [Video Rotator](https://github.com/IORoot/wp-plugin__page-builder--video-rotator)
- [YouTube Lite](https://github.com/IORoot/wp-plugin__page-builder--yt-lite)

LondonParkour.com was built using these plugins for page-builder.


##  4. <a name='Customising'></a>Customising

None.

##  5. <a name='Troubleshooting'></a>Troubleshooting

None.

<p align="right">(<a href="#top">back to top</a>)</p>


##  6. <a name='Contributing'></a>Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue.
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#top">back to top</a>)</p>



##  7. <a name='License'></a>License

Distributed under the MIT License.

MIT License

Copyright (c) 2022 Andy Pearson

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

<p align="right">(<a href="#top">back to top</a>)</p>



##  8. <a name='Contact'></a>Contact

Author Link: [https://github.com/IORoot](https://github.com/IORoot)

<p align="right">(<a href="#top">back to top</a>)</p>


##  9. <a name='Changelog'></a>Changelog

v1.0.0 - Initial.
