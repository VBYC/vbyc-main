=== Donorbox - Free Recurring Donation Form ===
Contributors: rebelidealist, donorbox
Plugin URI: https://donorbox.org
Author URI: https://donorbox.org
Donate link: https://donorbox.org
Tags: donation, donations, nonprofit, nonprofits, fundraising, payment, payments, crowdfunding, campaign, stripe, campaigns, social causes, causes, credit card, credit cards
Requires at least: 3.0
Tested up to: 4.9
Stable tag: 7.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Effectively accept recurring & one-time donations in minutes.

== Description ==

<a href="https://donorbox.org" target="_blank"><strong>Donorbox</strong></a>, a unique <a href="https://donorbox.org/wordpress-donation-plugin" target="_blank"><strong>WordPress Donation Plugin</strong><a/>, helps your organisation quickly embed an optimised recurring donation form in your website. Our form builder allows you to collect custom questions from your donor, ask your donor where to designate her donation, and dedicate her donation in honour of someone.

There are many other features of our WordPress Donation Plugin that your organisation may find useful including customizable receipt text, PayPal donation, Salesforce & MailChimp integration, and much more. Donorbox is available in Espa&ntilde;ol, Fran&ccedil;ais, Deutsch, Italiano, Portugu&ecirc;s and last but not least English. ACH donations and Corporate matching integration are in the works.

Donorbox is FREE for your first $1,000 donation EVERY month. <a href="http://stripe.com" target="_blank">Stripe</a> merchant account charges 2.9% + $0.30 for credit card processing. Fees can be discounted for registered nonprofits. Email <a href="mailto:sales+nonprofit@stripe.com">sales+nonprofit@stripe.com</a>

It takes no more than 10 mintues to start fundraising. Signup at <a href="https://donorbox.org">Donorbox.org</a> This plugin will embed Donorbox Donation Form to your site using shortcode '[donate]' and '[donate-with-info]'. The settings is very simple. One input box for either the full Donorbox url e.g. https://donorbox.org/campaign-id or the part after the '/' 'campaign_id'. No embed code needed. We will generate the embed code for you!

Dashboard > Settings > Donorbox

Please check our "Getting Started" guide for more details: https://donorbox.org/nonprofit-blog/wordpress-donation-plugin/

How to prefill fields in Wordpress Donorbox form?

Donorbox allows to prefill some fields in the donation form including amount. You can append field values as query parameters to the donation url used with the shortcode. Pre-filling of following fields are supported:

amount
first_name
last_name
email
phone
address
zip_code
recurring

Example:
[donate https://donorbox.org/rebel-idealist?first_name=Fname&last_name=Lname&email=user@example.com&phone=1234567890&amount=30&address=Newstreet&zip_code=54321&recurring=true]

or

[donate-with-info https://donorbox.org/rebel-idealist?first_name=Fname&last_name=Lname&email=user@example.com&phone=1234567890&amount=30&address=Newstreet&zip_code=54321&recurring=true]

== Installation ==

1. Unzip the zipped file and upload to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Manage individual options from Dashboard > Settings > Donorbox
4. After signing up on Donorbox.org, create a donation campaign from the dashboard.
5. Paste in the Campaign url: [input box]
6. Use the shortcode [donate] to embed the donation form. You can also use the shortcode [donate-with-info] which will include the campaign description and legal disclaimer that was on Donorbox.
7. You can also set the URL from shortcode using [donate url="https://donorbox.org/campaign-id"] or [donate-with-info url="https://donorbox.org/campaign-id"]. This allows to set multiple forms for different campaigns.
8. Please check our "Getting Started" guide for more details: https://donorbox.org/nonprofit-blog/wordpress-donation-plugin/


== Frequently Asked Questions ==

= What is the shortcode I need to use? =

Use the following shortcode in your posts / pages or the template file: [donate]  or [donate-with-info]
The plugin will replace the shortcode with embed frame using the settings provided in admin.

= Where is the settings page? =

Dashboard > Settings > Donorbox

== Screenshots ==

1. Settings page
2. Website Screen
3. Website Mobile
4. Select Amount
5. Donor Info
6. Payment Info

== Changelog ==

= 7.0 =
* Google Pay for Donorbox

= 6.2 =
* Fix width issues on mobile devices when the description is enabled [donate-with-info].

= 6.1 =
* Support PHP strict standards.

= 6.0 =
* Multiple forms support for different campaigns.
* Pass campaign URL from shortcode.

= 5.0 =
* Widget height is dynamically calculated, therefore height input field has been removed.

= 4.0 =
* Embed code updated.
* Description updated.

= 3.0 =
* Updated the embed code to have min and max widths.

= 2.0 =
* Widget height customization option added.

= 1.2 =
* Tags updated.
* Short description updated.

= 1.1 =
* Instructions layout update.
* Settings page screenshot udpate.

= 1.0 =
* Initial Commit.

== Upgrade Notice ==

N/A.
