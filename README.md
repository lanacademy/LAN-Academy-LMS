# LAN Academy LMS

## Built off Stacey 2.3.0
Stacey is a simple flat-file cms that takes content from `.txt` files, image files and implied directory structure and generates a website.

If you look in the `/content` and `/templates` folders, you should get the general idea of how it all works.

## Installation

Copy to server, `chmod 777 app/_cache`.

If you want clean urls, `mv htaccess .htaccess`

## Documentation

Stacey app's original documentation and more will be available on our wiki, right now it's in the content. 

## Get involved

We're open to getting pushed fixes or features. Or if you're interested in the project in general, check out LAN Academy's [official website](http://lanacademy.org).


## Plans

Besides that, these are the features or fixes needed for our October class:

Feature: Users and Registration.	Still integrating into the lms. Almost working. 

Feature: Student Tracking.	Figure we can just use http://discolytics.com/ for now. A dashboard for the student would be awesome eventually, but that's a post-november project. 

A better html5/flash video player. Eventually we want support for:
* Subtitles
* Flash fallback -(not just when browser doesn't support, but also when we run into codec issues since we just have mp4s)
* Speed control
* And a download button.

Feature: Multiple Choice quiz generator. 	This seems reasonable if we just create an asset/template for files name.quiz or something and build off something else like:
https://github.com/euyuil/php-quiz-generator Bonus: This one has regex support for written answers. That's super useful.

Issue: We sometimes have multiple jquery instances floating around, probably shouldn't do that. (Mostly the content switcher vs the login/register)
