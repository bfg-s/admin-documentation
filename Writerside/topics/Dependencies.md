# Dependencies

The admin panel extension enhances the Laravel framework by adding comprehensive administrative capabilities. To ensure full functionality and seamless integration, the extension relies on a specific set of dependencies, as outlined below. These dependencies include server requirements as specified in the [Laravel documentation](https://laravel.com/docs/9.x/deployment#server-requirements), along with additional packages and libraries necessary for the admin panel extension and frontend assets.

### Server and Framework Requirements

- **PHP:** Version `^8.0` or `^8.1`, with the `ext-pdo` extension enabled. [PHP Official Site](https://www.php.net/)
- **Laravel Framework:** Compatible with versions `^8.0`, `^9.0`, `^10.0`, or `^11.0`. [Laravel Documentation](https://laravel.com/docs/11.x)
- **AdminLTE Bootstrap Template:** Version `^3.1` for the admin UI. [AdminLTE](https://adminlte.io/themes/v3/)

### Laravel Required Packages

These Laravel packages are necessary for the admin panel's operation, offering various functionalities from QR code generation to image manipulation:

- **[bfg/entity](https://packagist.org/packages/bfg/entity):** For enhanced entity handling within Laravel.
- **[bfg/embedded-call](https://packagist.org/packages/bfg/embedded-call):** Allows for embedding calls within Laravel applications.
- **[bfg/repository](https://packagist.org/packages/bfg/repository):** Implements the repository pattern in Laravel applications.
- **[maatwebsite/excel](https://docs.laravel-excel.com/3.1/getting-started/):** For handling Excel file imports and exports in Laravel.
- **[laravel/framework](https://laravel.com/docs/10.x):** The core Laravel framework package.
- **[composer/composer](https://packagist.org/packages/composer/composer):** Dependency management for PHP.
- **[symfony/dom-crawler](https://symfony.com/doc/current/components/dom_crawler.html) & [symfony/css-selector](https://symfony.com/doc/current/components/css_selector.html):** For web scraping and CSS selection capabilities.
- **[almasaeed2010/adminlte](https://packagist.org/packages/almasaeed2010/adminlte):** The AdminLTE theme package for Laravel.
- **[barryvdh/laravel-ide-helper](https://packagist.org/packages/barryvdh/laravel-ide-helper):** Generates helper files for Laravel IDEs.
- **[bacon/bacon-qr-code](https://packagist.org/packages/bacon/bacon-qr-code):** For generating QR codes within Laravel applications.
- **[pragmarx/google2fa-qrcode](https://packagist.org/packages/pragmarx/google2fa-qrcode):** Integrates Google 2FA with QR codes in Laravel.
- **[stichoza/google-translate-php](https://packagist.org/packages/stichoza/google-translate-php):** Allows for Google Translate API integration in PHP.
- **[intervention/image](https://packagist.org/packages/intervention/image):** An image manipulation library for Laravel.

### Frontend Required Libraries

The admin panel leverages a variety of frontend libraries and frameworks to ensure a rich and interactive user experience. Below is a list of these required frontend assets, complete with links for more information or documentation:

- **[AdminLte v3](https://adminlte.io/themes/v3/):** The core UI framework for creating a responsive admin dashboard.
- **[Flowbite Admin Dashboard](https://github.com/themesberg/flowbite-admin-dashboard):** This project is a free and open-source UI admin dashboard template built with the components from Flowbite and based on the utility-first Tailwind CSS framework featuring charts, tables, widgets, CRUD layouts, modals, drawers, and more.
- **[Bootstrap v4.3.1](https://getbootstrap.com/):** A popular framework for developing responsive, mobile-first websites.
- **[Bootstrap Iconpicker v1.10.0](http://victor-valencia.github.io/bootstrap-iconpicker/):** A plugin to pick icons from Bootstrap-friendly icon fonts.
- **[Bootstrap Colorpicker](https://github.com/itsjavi/bootstrap-colorpicker):** A plugin allowing color selection.
- **[Bootstrap Slider](https://github.com/seiyria/bootstrap-slider):** A plugin for creating interactive sliders.
- **[Bootstrap Switch](https://bttstrp.github.io/bootstrap-switch/):** A plugin that turns checkboxes into toggle switches.
- **[Bootstrap Duallistbox](https://github.com/istvan-ujjmeszaros/bootstrap-duallistbox):** A dual list box plugin.
- **[Bootstrap Custom file input](https://github.com/Johann-S/bs-custom-file-input):** A plugin for custom file input behavior in Bootstrap forms.
- **[Bootstrap Icheck](https://github.com/bantikyan/icheck-bootstrap):** A plugin for custom checkboxes and radio buttons.
- **[Font Awesome Free v5.11.2](https://fontawesome.com/):** A popular icon set and toolkit.
- **[jQuery Pjax](https://github.com/defunkt/jquery-pjax):** A jQuery plugin for quick page loads using AJAX.
- **[Toastr](https://codeseven.github.io/toastr/):** A plugin for non-blocking notifications.
- **[Sweetalert2](https://github.com/sweetalert2/sweetalert2):** A beautiful, responsive, customizable replacement for JavaScript's popup boxes.
- **[Lightbox](https://github.com/ashleydw/lightbox):** A plugin for displaying images and videos in a modal overlay.
- **[Inputmask](https://github.com/RobinHerbots/Inputmask):** A plugin for creating input masks.
- **[Ion Range Slider](https://github.com/IonDen/ion.rangeSlider):** A plugin for creating pretty range sliders.
- **[jQuery Knob](https://github.com/aterrien/jQuery-Knob):** A plugin for creating nice, downward compatible, touchable, jQuery dial.
- **[Overlay Scrollbars](https://github.com/KingSora/OverlayScrollbars):** A plugin for custom scrollbars that overlay content.
- **[Popper](https://popper.js.org/):** A library for managing poppers in web applications.
- **[Select2](https://select2.org/):** A plugin for replacing standard select elements.
- **[jQuery Sparkline](https://omnipotent.net/jquery.sparkline):** A plugin for generating small inline charts.
- **[Tempus Dominus](https://tempusdominus.github.io/bootstrap-4/Usage/):** A plugin for date and time picking.
- **[CKeditor5](https://ckeditor.com/):** A modern WYSIWYG editor.
- **[Bootstrap-FileInput](https://github.com/kartik-v/bootstrap-fileinput):** An advanced file input designed to make file selection and preview more intuitive.
- **[Number-Input](https://github.com/wpic/bootstrap-number-input):** A plugin for enhancing number input.
- **[DatetimePicker](http://eonasdan.github.io/bootstrap-datetimepicker/):** A Bootstrap-based plugin for date/time picking.
- **[Nestable](https://dbushell.com/Nestable/):** A plugin for creating draggable lists with hierarchy.
- **[Star rating](https://plugins.krajee.com/star-rating):** A plugin for creating star rating controls.
- **[XEditable](https://github.com/vitalets/x-editable):** A library for creating editable elements on your page.
- **[VueJs](https://vuejs.org/):** The Progressive JavaScript Framework for building UI on the web.
- **[AlpineJs](https://alpinejs.dev/):** A rugged, minimal framework for composing JavaScript behavior in your markup.
- **[ChartJs](https://www.chartjs.org/):** Simple yet flexible JavaScript charting for designers & developers.
- **[Codemirror](https://codemirror.net/):** A versatile text editor implemented in JavaScript for the browser.

These libraries and frameworks are essential for ensuring that the admin panel is visually appealing, functional, and user-friendly. They provide the necessary components for form elements, icons, notifications, charts, and much more.
