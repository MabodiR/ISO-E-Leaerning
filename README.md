# ISO E-Learning System
### Welcome to the ISO E-Learning System, an online platform for ISO courses with categories, comments, and ratings. This system is built using Laravel and utilizes MySQL as the database.

## Getting Started
### Prerequisites
Before you begin, ensure that you have the following installed:

1. PHP (>= 7.4)
2. Composer
3. MySQL
4. [Web Server](https://www.apache.org/ or https://nginx.org/)


bash
Copy code
cd iso-elearning-system
Install PHP dependencies:

bash
Copy code
composer install
Install JavaScript dependencies:

bash
Copy code
npm install
Copy the .env.example file to .env:

bash
Copy code
cp .env.example .env
Configure the .env file with your MySQL database and other settings.

Generate the application key:

bash
Copy code
php artisan key:generate
Run migrations and seed the database:

bash
Copy code
php artisan migrate --seed
Compile frontend assets:

bash
Copy code
npm run dev
Serve the application:

bash
Copy code
php artisan serve
The application will be available at http://localhost:8000.

## Features
Authentication: Users can register and log in.
Course Management: Instructors can add, edit, and view courses.
Rating and Comments: Users can rate and comment on courses.
Categories: Courses are categorized for better organization.
## Usage
### Login
1. Visit the login page.

2. Use the following credentials:

#### Student:

Email: student@wwise.co.za
Password: password
####  Instructor:

Email: instructor@wwise.co.za
Password: password
## Registration
1. Visit the registration page.
2. Complete the registration form.
## Courses
### View Courses
1. Navigate to the courses page.
2. Browse and view available courses.
## Add Course
1. Log in as an instructor.
2. Navigate to the "Add Course" page.
3. Fill in the course details and submit the form.
### Edit Course
1. Log in as an instructor.
2. Navigate to the "Edit Course" page.
3. Modify the course details and submit the form.
### Rate and Comment
1. Log in as a student.
2. View a course.
3. Rate the course using the provided form.
4. Leave a comment about the course.