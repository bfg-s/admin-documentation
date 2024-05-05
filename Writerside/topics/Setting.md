# Settings

This document outlines the various configuration options available for the Admin Panel package. These settings allow you to customize the appearance, behavior, and functionality of the admin panel to suit your application's needs.

## Settings descriptions

### Theme

- `theme`: Specifies the theme of the admin panel.
    - Type: `string`
    - Default: `admin-lte`
    - Description: Choose the visual theme for the admin panel interface. Currently, `admin-lte` is the default theme.

### Mode Settings

- `dark_mode`: Enables or disables the dark mode by default for the administrator.
    - Type: `boolean`
    - Default: `true`
    - Description: When set to `true`, the admin panel will use dark mode as the default theme.

- `lang_mode`: Enables or disables language mode for the admin panel.
    - Type: `boolean`
    - Default: `true`
    - Description: Turn on this option to enable language support in the admin panel.

### Languages

- `languages`: Defines the languages supported by the admin panel.
    - Type: `array`
    - Default: `['en', 'ua', 'ru']`
    - Description: List of language codes that the admin panel supports for localization.

### Home Route

- `home-route`: Specifies the default home route for the admin panel.
    - Type: `string`
    - Default: `admin.dashboard`
    - Description: Define the route name that users are redirected to after logging into the admin panel.

### Application Namespace

- `app_namespace`: The namespace for the Admin application.
    - Type: `string`
    - Default: `App\Admin`
    - Description: Specify the namespace used by the Admin application classes.

### Paths

- `paths`: Directories used by the Admin package.
    - Type: `array`
    - Description: Configure the application and view directories for the Admin package.

### Route Configuration

- `route`: Global route configurations for the admin panel.
    - Type: `array`
    - Description: Includes settings for domain, prefix, and name for admin panel routes.

### Default Actions

- `action`: Defines default actions for the admin panel.
    - Type: `array`
    - Description: Map actions to specific controllers and methods.

### Two-Factor Authentication (2FA)

- `force-2fa`: Enforces Two-Factor Authentication for all admin users.
    - Type: `boolean`
    - Default: `false`
    - Description: When enabled, all users must use 2FA to access the admin panel.

### Authentication

- `auth`: Authentication settings for admin pages.
    - Type: `array`
    - Description: Configure authentication guards and providers for the admin panel.

### Upload Settings

- `upload`: Configuration for file uploads in the admin panel.
    - Type: `array`
    - Description: Set up the disk and directory paths for image and file uploads.

### Disks

- `disks`: Filesystem disks used by the admin panel.
    - Type: `array`
    - Description: Configure storage disks for admin file uploads.

### Footer

- `footer`: Custom HTML content for the admin panel footer.
    - Type: `string`
    - Description: Allows for custom branding or copyright information in the footer.
