# Subscription Platform

A simple subscription platform built with Laravel, allowing users to subscribe to websites and receive email notifications for new posts.

## Table of Contents
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Configuration](#configuration)
- [Running the Application](#running-the-application)
- [Testing API Endpoints](#testing-api-endpoints)
- [Running the Queue Worker](#running-the-queue-worker)


## Prerequisites

- PHP 8.1 or higher
- Composer
- MySQL
- Postman for api test

## Installation

1. Clone the repository: https://github.com/banjirahammad/subscription_platform.git
2. Install PHP dependencies: composer Install
3. Copy the example environment file: cp .env.example .env
4. Generate an application key: php artisan key:generate


## Configuration

1. Open the `.env` file and update the following settings:

- Database configuration:
  ```
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=subscription_platform
  DB_USERNAME=your_database_username
  DB_PASSWORD=your_database_password
  ```

- Mail configuration (example using Mailtrap):
  ```
  MAIL_MAILER=smtp
  MAIL_HOST=smtp.mailtrap.io
  MAIL_PORT=2525
  MAIL_USERNAME=your_mailtrap_username
  MAIL_PASSWORD=your_mailtrap_password
  MAIL_ENCRYPTION=tls
  MAIL_FROM_ADDRESS="hello@example.com"
  MAIL_FROM_NAME="${APP_NAME}"
  ```

- Queue configuration:
  ```
  QUEUE_CONNECTION=database
  ```

2. Run database migrations: php artisan migrate
3. Run database seeding: php artisan db:seed



## Running the Application

1. Start the Laravel development server: php artisan serve

2. The application will be available at `http://localhost:8000`.


## Testing API Endpoints

You can use tools like Postman or cURL to test the API endpoints. Here are some example requests:

1. Create a post: POST http://localhost:8000/api/posts
Content-Type: application/json
 ```
{
  "website_id": 1,
  "title": "Breaking News!",
  "description": "This is a new post after seeding the database."
}
```

2. Create a subscription: POST http://localhost:8000/api/subscriptions
Content-Type: application/json
 ```
{
"website_id": 1,
"email": "banjirahammad@gmail.com"
}
```



## Running the Queue Worker

To process the queued jobs (including sending emails), run the following command: php artisan queue:work
