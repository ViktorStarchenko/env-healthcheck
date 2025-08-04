# ENV Healthcheck for WordPress (Bedrock)

A lightweight WordPress plugin that provides a simple environment healthcheck endpoint for Bedrock-based WordPress installations.

## 🔍 Features

- Exposes a REST API endpoint for checking the application environment
- Useful for uptime monitoring, CI/CD readiness checks, and infrastructure health probes
- No configuration required — works out of the box

## 🛠️ Endpoint

Once activated, the plugin registers the following endpoint:

GET /wp-json/custom/v1/healthcheck

### Example Response

```json
{
  "status": "ok",
  "timestamp": "2025-07-29T12:34:56+00:00",
  "site_url": "https://yourdomain.com"
}

⚙️ Installation
Install via Composer:
composer require viktor-starchenko/env-healthcheck

🧱 Requirements
- WordPress using the Bedrock structure
- Composer

📁 File Structure

env-healthcheck/
├── src/
│   └── Healthcheck.php
└── env-healthcheck.php

✍️ Author
Viktor Starchenko



