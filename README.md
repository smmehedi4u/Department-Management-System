
# Department Management System


The Department Management System is a web application designed to streamline communication and collaboration between students and teachers within a department. The project allows users with different roles (Admin, Teacher, and Student) to interact based on role-specific permissions and features, enhancing the management of schedules, tasks, and publications.




## Features

- Role-based Access Control:
    - Admin: Full access, including permissions to manage users, schedules, and system settings.
    - Teacher: Access to manage tasks, add publications, edit profile, and view class schedules.
    - Student: Limited to viewing today's and upcoming class schedules and pending tasks.

- Modules
    - Task Management: Teachers can create and assign tasks to students for effective learning.
    - Class Scheduling: Both teachers and students can view class schedules, ensuring everyone stays updated.
    - Publication Management: Teachers can add and manage their publications to share knowledge and research with students.
    - Routine Management: Manage and display daily and weekly class routines.
    - Batch Management: Organize students into batches, allowing for easy schedule and task assignments.
    - Designation Management: Manage designations for faculty members to establish clear roles.
    - Event Management: Schedule and track departmental events, ensuring students and teachers are informed of upcoming activities.
    - Result Management: Record and view student results, providing easy access to academic performance data.
    - Room Management: Assign rooms for classes and events, simplifying room allocation and scheduling.
    - Subject Management: Add and manage subjects offered by the department, keeping course offerings organized.


## Technologies Used

- Frontend: HTML, CSS, Bootstrap
- Backend: Laravel Framework
- Database: MySQL

## Installation Guide

Follow these steps to set up the project on your local machine:

### Prerequisites

- PHP (>= 8.0)
- Composer
- MySQL
- Git




## Setup Instructions

 1. Clone the repository:

```bash
    git clone https://github.com/yourusername/department-management-system.git
```
2. Moved new Folder
```bash
    cd department-management-system
```

3. Install dependencies:

```bash
    composer install
```

4. Setup Environment: 

```bash
    cp .env.example .env
```

5. Open .env and configure the following:

```bash
    DB_DATABASE=your_database_name
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
```

6. Generate application key:

```bash
    php artisan key:generate
```

7. Run migrations and seed the database:

This command will create the database tables and populate initial data using seeders.

```bash
    php artisan migrate --seed
```

8. Serve the application:

Start the Laravel development server.

```bash
    php artisan serve
```

9.Access the application:

Open your browser and visit http://localhost:8000.

## Seeded Data for Testing

The project includes seeders to populate test data for each user role (Admin, Teacher, and Student).

- Admin Login:
    - Email: admin@gmail.com
    - Password: 123456

- Teacher Login:
    - Email: teacher@gmail.com
    - Password: 123456

- Student Login:
    - Email: student@gmail.com
    - Password: 123456

## Project Structure

- Roles: Admin, Teacher, and Student roles each have unique access rights within the application.
- Role-Based Views: Users experience different interfaces based on their roles, ensuring tailored functionality and security.
- CRUD Operations: For managing schedules, tasks, and publications.
- Notifications and Flash Messages: Provide feedback to users based on their actions (e.g., task completion, schedule updates).




