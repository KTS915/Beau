# Beau

## Description
Beau is a lightweight theme for ClassicPress bloggers, inspired by Beaumont by Anders Noren, but built without blocks. It is instead built on top of Susty WP by Jack Lenox, with the CSS being a modified version of Milligram v1.4.1 by CJ Patoilo. This architecture makes it less than a fifth the size of Beaumont.

## Features
It comes with a dropcap for the first letter of the main text in posts and an enlarged blockquote. It also comes with shortcodes to create left and right pull quotes as well as a preamble with a special divider.

## Shortcodes
To start a preamble, type `[start_preamble]` and then type the text of the preamble, finishing with `[end_preamble]`

To create a left pull quote, type `[pull_left]` to start and `[end_pull]` to finish. To create a right pull quote, type `[pull_right]` to start and `[end_pull]` to finish. 

## Modifying the Appearance
Beau is built in a way that makes it simply to change the accent color or the text widths. Simply copy the following into the Customizer CSS or a child theme and then change the values to suit your own preferences:
`:root {
	--primary-color: #9b4dca;
	--secondary-color: #606c76;
	--wider-width: 960px;
	--narrow-width: 668px;
}`
