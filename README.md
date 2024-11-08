
## About MediConnect
MediConnect is a medical management application designed to facilitate the healthcare process by managing appointments, health records, prescriptions, and user roles for patients, doctors, and admins. Built on the Laravel framework, MediConnect utilizes Laravel's built-in functionalities to provide robust, scalable, and secure web application features.


## Key Features
User Role Management: Separate roles for patients, doctors, and admins to manage access control and permissions.
Appointment Management: Allows doctors and patients to schedule, confirm, and track appointments.
Health Records & Prescriptions: Securely manage patient health records and prescriptions.
Notification System: Email and SMS notifications for appointment confirmations and reminders.

## Project Setup and Contribution Guide

Requirements

PHP 8.0+

Composer

MySQL or PostgreSQL (for database)

Node.js and NPM (for frontend assets and JavaScript dependencies)

Mailgun or Twilio (for notifications)

### Initial Setup
## Clone the Repository

git clone https://github.com/Abram-MrRight/mediConnect.git

cd mediconnect

## Install Dependencies

composer install

npm install

npm run build

## Environment Configuration
Copy the example environment file and update the necessary variables:

cp .env.example .env

php artisan key:generate

Sign in to your Gmail account.
Go to your Google Account settings.
Navigate to Security.
Find the Less secure app access section and turn it ON. (Note: This option may not be available for accounts with enhanced security, like those with 2-Step Verification.)
If 2-step verification is enabled: Select 2-step Verification and then click App passwords.

Select Mail as the app and your device type, then click Generate.
A 16-character password will be displayed. This will be used as your MAIL_PASSWORD.

Make sure MAIL_ENCRYPTION is set to ssl if you are using port 465.
Use your full Gmail address for MAIL_USERNAME.

## Database Setup
Update your .env file with your database credentials and run migrations:

php artisan migrate

Serve the Application

## Start the application locally:
php artisan serve

## Version Control
Branch Protection Rules: Ensure main branches have protection rules, requiring code review before merging.
Feature Branches: Create separate branches for each task (e.g., feature/authentication-setup, feature/database-setup).

## Folder Structure
app/Models – Application models (e.g., User, Appointment, HealthRecord, Prescription)

app/Http/Controllers – API and web controllers

database/migrations – Database migration files for schema setup

 ## Security Vulnerabilities
If you discover a security vulnerability, please report it to the project maintainers.

## License
This project is open-sourced software licensed under the MIT license.