# LAN Academy LMS

## Built off Stacey 2.3.0
Stacey is a simple flat-file cms that takes content from `.txt` files, image files and implied directory structure and generates a website.

If you look in the `/content` and `/templates` folders, you should get the general idea of how it all works.

## Installation

Copy to server, `chmod 777 app/_cache`.

If you want clean urls, `mv htaccess .htaccess`

## Documentation

Stacey app's original documentation and more is available on our wiki. 

## Get involved

We're pretty active with our issue tracker and open to pull requests. Or if you're interested in the project in general, check out LAN Academy's [official website](http://lanacademy.org).



## Issues
Users and Registration
Student Tracking
A better html5/flash video player
	Eventually we want support for:
	* Subtitles
	* Flash fallback -(not just when browser doesn't support, but also when we run into codec issues since we just have mp4s)
	* Speed control
	* And a download button.
Multiple Choice quiz generator
	This seems reasonable if we just create an asset/template for files name.quiz or something and build off something else like:
https://github.com/euyuil/php-quiz-generator
(Bonus: This one has regex support for written answers. That's super useful.)
Back to Syllabus doesn't work
	We either need to implement a parent asset or do something else that's clever.