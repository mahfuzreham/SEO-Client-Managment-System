# SEO Client Management System

A Bootstrap and MySQL based SEO client management platform for managing client projects, on-page SEO, off-page SEO, reports, logs, backups, and integrations.

## Features
- Admin dashboard
- Client dashboard
- Authentication and session handling
- Role and permission structure
- Activity logs
- Backup manager
- PDF report generator
- Keyword tracking foundation
- Backlink management foundation
- Google Search Console integration foundation
- Telegram and email notifications
- cPanel and VPS friendly structure

## Tech Stack
- PHP 8+
- Bootstrap 5
- MySQL / MariaDB
- Plain PHP includes
- ApexCharts ready

## Project Structure
- `admin/` — admin area pages
- `client/` — client area pages
- `config/` — configuration and session helpers
- `modules/` — reusable SEO modules
- `notifications/` — Telegram and email helpers
- `integrations/` — external service integrations
- `backup/` — backup manager
- `logs/` — activity log pages
- `database/` — SQL schema and migration files
- `install/` — installer entry point
- `assets/` — CSS, JS, and static files

## Installation
1. Upload the project to your hosting account or VPS.
2. Create a MySQL database and user.
3. Import `database/migrations.sql` into the database.
4. Update database credentials in your config file.
5. Visit the installer or the main dashboard path.

## Hosting Notes
- Works on cPanel shared hosting.
- Works on VPS with Apache or Nginx.
- Use cron jobs for automated reports and maintenance tasks.

## Current Status
Core project scaffold is in place and being expanded module by module.
