# ESNcard Loyalty App

Last update: 13.11 - Improved authentication system, separating Student and Admin auth while implementing it with Laravel Auth system.

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

🚀 ESN Loyalty – Developer Setup Guide (Ubuntu)

This guide helps you set up and run the ESN Loyalty application on a **fresh Ubuntu** machine using **Laravel Sail**.

---

# Installation (Linux)

> Note - this guideline was written by ChatGPT

## 0. System Preparation

Install required packages and Docker:

```bash
sudo apt-get update && sudo apt-get install -y   ca-certificates curl gnupg lsb-release git

sudo install -m 0755 -d /etc/apt/keyrings
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo gpg --dearmor -o /etc/apt/keyrings/docker.gpg
echo   "deb [arch=$(dpkg --print-architecture) signed-by=/etc/apt/keyrings/docker.gpg]   https://download.docker.com/linux/ubuntu $(lsb_release -cs) stable"   | sudo tee /etc/apt/sources.list.d/docker.list > /dev/null

sudo apt-get update && sudo apt-get install -y docker-ce docker-ce-cli containerd.io docker-buildx-plugin docker-compose-plugin

sudo usermod -aG docker $USER
newgrp docker
```

---

## 1. Clone the Project

```bash
git init
git remote add origin git@github.com:RoTak00/esncard_loyalty.git
git pull origin main
```

---

## 2. Install Composer Dependencies

```bash
docker run --rm   -u "$(id -u):$(id -g)"   -v "$PWD":/var/www/html   -w /var/www/html   laravelsail/php83-composer:latest   composer install --no-interaction --prefer-dist --ignore-platform-reqs
```

---

## 3. Configure Environment

```bash
cp .env.example .env
```

Ensure the following key values:

```env
APP_URL=http://localhost:8080
APP_PORT=8080
DB_HOST=mysql
DB_USERNAME=sail
DB_PASSWORD=password
MAIL_HOST=mailpit
MAIL_PORT=1025
SCOUT_DRIVER=meilisearch
MEILISEARCH_HOST=http://meilisearch:7700
```

Optional (if port 3306 is taken by local MySQL):

```bash
echo "FORWARD_DB_PORT=3307" >> .env
```

---

## 4. Boot the Development Stack

```bash
./vendor/bin/sail up -d
./vendor/bin/sail artisan key:generate
./vendor/bin/sail artisan migrate --seed
```

> First startup may take several minutes (Docker images downloading).

---

## 5. Frontend (Vite)

```bash
./vendor/bin/sail npm install
./vendor/bin/sail npm run dev
```

- App: [http://localhost:8080](http://localhost:8080)
- Mailpit (emails): [http://localhost:8025](http://localhost:8025)

---

## 6. Troubleshooting

### Port 3306 already in use

```bash
sudo systemctl stop mysql || sudo systemctl stop mariadb
# or use a different port
echo "FORWARD_DB_PORT=3307" >> .env
./vendor/bin/sail down && ./vendor/bin/sail up -d
```

### App not loading

```bash
docker ps --format "table {{.Names}}	{{.Ports}}"
./vendor/bin/sail artisan about
./vendor/bin/sail artisan route:list
./vendor/bin/sail logs -f
```

### Permission issues

```bash
./vendor/bin/sail bash -c "chmod -R ug+rw storage bootstrap/cache"
./vendor/bin/sail artisan storage:link
```

### Reset environment

```bash
./vendor/bin/sail down -v
./vendor/bin/sail up -d
```

# Installation (Windows 11)

This guide explains how to run the **ESN Loyalty** application on **Windows 11** using **Laravel Sail** inside **Docker Desktop**.
You do **not** need to install PHP or MySQL directly on Windows — everything runs inside Docker.

This guide was written by ChatGPT

---

## 0. Install

### i. Install Git

Download and install **[Git for Windows](https://git-scm.com/download/win)**.

### ii. Install Docker Desktop

Download **[Docker Desktop for Windows](https://www.docker.com/products/docker-desktop/)**
During installation, make sure:

- **“Use the WSL 2 based engine”** is checked.
- You have **WSL 2** enabled (the Docker installer can enable it for you).
- Restart your computer after installation.

Verify installation:

```bash
docker --version
docker compose version
```

### iii. (Recommended) Install WSL Ubuntu 22.04

From PowerShell (Admin):

```bash
wsl --install -d Ubuntu-22.04
```

Then open Ubuntu (from Start Menu) and set your username/password.

---

## 1. Clone the Project

In your WSL Ubuntu terminal:

```bash
cd ~
git clone <YOUR_REPO_URL> esn_loyalty
cd esn_loyalty
```

---

## 2. Install Composer Dependencies

```bash
docker run --rm   -u "$(id -u):$(id -g)"   -v "$PWD":/var/www/html   -w /var/www/html   laravelsail/php83-composer:latest   composer install --no-interaction --prefer-dist --ignore-platform-reqs
```

---

## 3. Environment Setup

```bash
cp .env.example .env
```

Ensure the following key values in `.env`:

```env
APP_URL=http://localhost:8080
APP_PORT=8080
DB_HOST=mysql
DB_USERNAME=sail
DB_PASSWORD=password
MAIL_HOST=mailpit
MAIL_PORT=1025
SCOUT_DRIVER=meilisearch
MEILISEARCH_HOST=http://meilisearch:7700
```

Optional (if local MySQL already uses port 3306):

```bash
echo "FORWARD_DB_PORT=3307" >> .env
```

---

## 4. Start the Development Environment

```bash
./vendor/bin/sail up -d
./vendor/bin/sail artisan key:generate
./vendor/bin/sail artisan migrate --seed
```

> The first time might take several minutes while Docker downloads all necessary images.

---

## 5. Frontend (Vite)

```bash
./vendor/bin/sail npm install
./vendor/bin/sail npm run dev
```

Then open:

- App → [http://localhost:8080](http://localhost:8080)
- Mailpit → [http://localhost:8025](http://localhost:8025)

> Keep `npm run dev` running in a separate terminal for hot reload.

---

## 6. Troubleshooting

### Port 3306 already in use

```bash
netstat -ano | findstr :3306
# Stop MySQL service via Services.msc or change FORWARD_DB_PORT to 3307
./vendor/bin/sail down && ./vendor/bin/sail up -d
```

### Permissions or cache issues

```bash
./vendor/bin/sail bash -c "chmod -R ug+rw storage bootstrap/cache"
./vendor/bin/sail artisan storage:link
```

### Full reset

```bash
./vendor/bin/sail down -v
./vendor/bin/sail up -d
```
