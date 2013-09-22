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

We're always open to pull requests. Or if you're interested in the project in general, check out LAN Academy's [official website](http://lanacademy.org).


## Issues
The documentation page is all sorts of messed up. That's part of the messiness I mention in the initial commit. 

Besides that, these are the features or fixes needed for our October class:

Feature: Users and Registration.	I added an example of flat file users in the `/users` directory but haven't yet actually integrated it into the lms. 

Feature: Student Tracking.	Eventually it would be awesome to have a dashboard, but for now we're just looking to output it to a log file. 

A better html5/flash video player. Eventually we want support for:
* Subtitles
* Flash fallback -(not just when browser doesn't support, but also when we run into codec issues since we just have mp4s)
* Speed control
* And a download button.

Feature: Multiple Choice quiz generator. 	This seems reasonable if we just create an asset/template for files name.quiz or something and build off something else like:
https://github.com/euyuil/php-quiz-generator Bonus: This one has regex support for written answers. That's super useful.

Oh, and the back to Syllabus doesn't work. We either need to implement a parent asset or do something else that's clever.
