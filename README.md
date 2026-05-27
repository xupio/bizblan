# Bizblan

Bizblan is a Laravel-based business planning workspace for a B2B online store focused on:

- Networking and fiber products
- Pro audio cables and accessories
- Pro lighting accessories

The project combines planning pages, product organization tools, and company workflow mapping inside one working interface.

## Main Pages

- `Business Plan`
  - Company concept, operating logic, commercial model, and planning direction
- `Product Workspace`
  - Temporary product collection, grouping, supplier filtering, and category review
- `Company Structure`
  - Organization tree, department structure, and operational workflow process
- `Market Study`
  - UAE-focused market research for the target product divisions
- `Financial Plan`
  - Financial planning template for margin, cost, and operating structure

## Project Purpose

This repository is being used to build a practical planning system for a distributor-style B2B e-commerce business. The workflow currently covers:

1. Structuring products by division and supplier
2. Building the organization tree and department roles
3. Mapping the operating process from procurement to delivery
4. Preparing market study and financial planning sections

## Tech Stack

- Laravel
- Blade templates
- Vite
- Bootstrap / NobleUI base template

## Local Setup

1. Install PHP and Composer dependencies:

```bash
composer install
```

2. Install frontend dependencies:

```bash
npm install
```

3. Create the environment file:

```bash
copy .env.example .env
```

4. Generate the Laravel app key:

```bash
php artisan key:generate
```

5. Run the application:

```bash
php artisan serve
```

6. Build frontend assets:

```bash
npm run build
```

For frontend development with hot reload:

```bash
npm run dev
```

## Notes

- `.env`, `vendor`, `node_modules`, and built assets are excluded from Git.
- The project currently uses static planning content and workflow diagrams that are being refined step by step.
- The repository is intended as a working business-planning environment, not only a generic admin template.

## Repository

GitHub:
[https://github.com/xupio/bizblan.git](https://github.com/xupio/bizblan.git)
