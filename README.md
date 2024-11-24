<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Laravel 11 Multi-Auth Project

Project Structure Overview

View
1. Admin Folder:
- dashboard.blade.php: Admin dashboard page.
- login.blade.php: Admin login page.

2. Main Views:
- dashboard.blade.php: General dashboard page.
- login.blade.php: General login page.
- register.blade.php: Registration page for users.

Controller
1. Admin Folder:
- AdminDashboardController: Handles admin dashboard operations.
- AdminLoginController: Manages admin login logic.

2. Main Controllers:
- LoginController: Manages user login logic.
- DashboardController: Handles user dashboard functionality.

Model
- User: Core user model for authentication

Database / Migrations
- users_table.php: Fields: id, name, email, password, role (or equivalent field to distinguish admin and user), timestamps.

Route
- web.php

Bootstrap
- app.php : Bootstrapping configurations and providers.

Config
- auth.php: Set up custom guards and providers for admin and user authentication.
