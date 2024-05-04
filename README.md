<h1 align="center">↻ Filament layout inspector</h1>

<p align="center">
    <a href="https://github.com/sakanjo/filament-layout-inspector/actions"><img alt="Workflow status" src="https://img.shields.io/github/actions/workflow/status/sakanjo/filament-layout-inspector/tests.yml?style=for-the-badge"></a>
    <a href="https://laravel.com"><img alt="Laravel v11.x" src="https://img.shields.io/badge/Laravel-v11.x-FF2D20?style=for-the-badge&logo=laravel"></a>
    <a href="https://php.net"><img alt="PHP 8.2" src="https://img.shields.io/badge/PHP-8.2-777BB4?style=for-the-badge&logo=php"></a>
</p>

<p align="center">Visually examine the layout of your Filament app.</p>

> ✨ Help support the maintenance of this package by [sponsoring me](https://github.com/sponsors/sakanjo).

![Preview](./art/preview.png)

Table of Contents
=================

* [Install](#-install)
* [Usage](#-usage)
* [Support the development](#-support-the-development)
* [Credits](#%EF%B8%8F-credits)
* [License](#-license)

## 📦 Install

1. Install the package via composer:

```
composer require --dev sakanjo/filament-layout-inspector
```

2. Add the plugin's views to your tailwind.config.js file.

```js
content: [
    './vendor/sakanjo/filament-layout-inspector/resources/**/*.blade.php',
]
```

## 🦄 Usage

```php
<?php

// ...
use SaKanjo\FilamentLayoutInspector\LayoutInspectorPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugin(
            LayoutInspectorPlugin::make()
                ->visible(fn () => app()->isLocal())
                ->screens([
                    '4xl' // max-4xl:hidden
                    '5xl' // max-5xl:hidden
                ])
        );
}
```

## 💖 Support the development

**Do you like this project? Support it by donating**

Click the ["💖 Sponsor"](https://github.com/sponsors/sakanjo) at the top of this repo.

## ©️ Credits

- [Salah Kanjo](https://github.com/sakanjo)
- [All Contributors](../../contributors)

## 📄 License

[MIT License](https://github.com/sakanjo/filament-layout-inspector/blob/master/LICENSE) © 2023-PRESENT [Salah Kanjo](https://github.com/sakanjo)
