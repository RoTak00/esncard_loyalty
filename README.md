# ESNcard Loyalty App

## Overview

The application is to be used by ESN Romania's partners and students as a digital loyalty card application, simplifying the process and removing the need for physical loyalty cards.

## Tech Stack

Laravel 11, MySQL, Vite, Pest, Sail.

## Prerequisites

- PHP 8.2+
- Docker & Docker Compose (for Sail)
- Node 20+ (if running tools outside Sail)

### VS Code setup

Extensions:

- **Prettier – Code formatter** (`esbenp.prettier-vscode`)
- **PHP CS Fixer** (`junstyle.php-cs-fixer`)
- **Blade Formatter** (`shufo.vscode-blade-formatter`)
- **EditorConfig** (optional but helps enforce newline/indent)

Settings are in `.vscode/settings.json`.
Formatting runs automatically on save; ensure “Format on Save” is enabled.

## Quick Start (Sail)

```bash
cp .env.example .env
sudo systemctl stop mysql
./vendor/bin/sail up -d
./vendor/bin/sail artisan key:generate
./vendor/bin/sail artisan migrate --seed
./vendor/bin/sail npm install
./vendor/bin/sail npm run dev

Open app on http://localhost:8080 and mailserver on http://localhost:8025
```
