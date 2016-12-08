# WireMailChimp

Mailchimp API 3 integration for Processwire 2.4+.

WireMailChimp module by [Ben Byford](http://www.benbyford.com)
Mailchimp PHP API wrapper by [drewm](https://github.com/drewm/mailchimp-api/)

Intended to be used with Processwire's internal user functionality for saving and signing up new users. **WireMailChimp** allows user's email addresses to be subscribed to a specific mailchimp list. Only adds users that have a checked email_subscribe field to true during user save.

## Install
[Install](http://modules.processwire.com/install-uninstall/) module in modules folder in your [Processwire](http://processwire.com/) installation. update modules in admin and install module.

Create or find a list in mailchimp and get the list ID. create or find a new mailchimp API code.

## Settings
Add your Mailchimp API code and List ID to allow module to send email subscribes to list.


## TODO:
- move mailchimp class out to it's own file for easy update
- make more configurable
- catch errors better
- allow users to delete themselves from lists from PW not just from mailchimp emails
