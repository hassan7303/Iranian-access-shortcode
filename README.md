[contributors-shield]: https://img.shields.io/github/contributors/hassan7303/Iranian-access-shortcode.svg?style=for-the-badge
[contributors-url]: https://github.com/hassan7303/Iranian-access-shortcode/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/hassan7303/Iranian-access-shortcode.svg?style=for-the-badge&label=Fork
[forks-url]: https://github.com/hassan7303/Iranian-access-shortcode/network/members
[stars-shield]: https://img.shields.io/github/stars/hassan7303/Iranian-access-shortcode.svg?style=for-the-badge
[stars-url]: https://github.com/hassan7303/Iranian-access-shortcode/stargazers
[license-shield]: https://img.shields.io/github/license/hassan7303/Iranian-access-shortcode.svg?style=for-the-badge
[license-url]: https://github.com/hassan7303/Iranian-access-shortcode/blob/master/LICENCE.md
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-blue.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://www.linkedin.com/in/hassan-ali-askari-280bb530a/
[telegram-shield]: https://img.shields.io/badge/-Telegram-blue.svg?style=for-the-badge&logo=telegram&colorB=555
[telegram-url]: https://t.me/hassan7303
[instagram-shield]: https://img.shields.io/badge/-Instagram-red.svg?style=for-the-badge&logo=instagram&colorB=555
[instagram-url]: https://www.instagram.com/hasan_ali_askari
[github-shield]: https://img.shields.io/badge/-GitHub-black.svg?style=for-the-badge&logo=github&colorB=555
[github-url]: https://github.com/hassan7303
[email-shield]: https://img.shields.io/badge/-Email-orange.svg?style=for-the-badge&logo=gmail&colorB=555
[email-url]: mailto:hassanali7303@gmail.com

[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![MIT License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url]
[![Telegram][telegram-shield]][telegram-url]
[![Instagram][instagram-shield]][instagram-url]
[![GitHub][github-shield]][github-url]
[![Email][email-shield]][email-url]


# Inamad Shortcode Creator Plugin

## Overview

**Plugin Name**: Iranian Access Shortcode  
**Version**: 1.0.0  
**Author**: Hassan Ali Askari  
**Author URI**: [Telegram](https://t.me/hassan7303)  
**Plugin URI**: [GitHub](https://github.com/hassan7303)  
**License**: MIT  
**License URI**: [MIT License](https://opensource.org/licenses/MIT)  
**Email**: [hassanali7303@gmail.com](mailto:hassanali7303@gmail.com)  
**Domain Path**: [Telegram](https://t.me/hassan7303)  

## Description

The **Iranian Access Shortcode** plugin allows users to create a shortcode that displays content based on their geographical location. Only users from Iran will have access to the stored HTML content.

## Features

- Create and manage a shortcode from an admin settings page.
- Automatically checks the user's IP address to determine if they are accessing from Iran.
- Displays the stored content or a message if the user is outside Iran.

## Installation

1. Download the plugin files.
2. Upload the `iranian-access-shortcode` folder to the `/wp-content/plugins/` directory.
3. Activate the plugin through the **Plugins** menu in WordPress.

## Usage

### Admin Settings

1. Navigate to the **Iranian Access Shortcode** menu in the WordPress admin panel.
2. Enter your shortcode content in the provided textarea.
3. Save the settings.

### Shortcode

To display the content based on the user’s IP location, use the following shortcode in your posts or pages:

```plaintext
[custom_html]
```

## Functions

### `custom_shortcode_menu()`
Adds a menu item to the WordPress admin panel.

**Return**  `void`

### `custom_shortcode_page()`
Displays the settings page content where users can input their shortcode.

**Return**  `void`

### `custom_shortcode_settings()`
Registers settings and adds sections and fields to the settings page.

**Return**  `void`

### `custom_shortcode_field_callback()`
Callback function that renders the textarea for shortcode content input.

**Return**  `void`


### `custom_shortcode_function()`
Shortcode function that returns the stored HTML content if the user is from Iran; otherwise, it displays a message indicating access is restricted.

**Return**  `string`

