# SRPSS — Scientific Research Paper Submission System

**SRPSS (Scientific Research Paper Submission System)** is a web-based application designed to manage the submission and handling of scientific research papers.

This repository contains the complete source code for the SRPSS project. The application was developed using **Visual Studio Code**, **Git**, and **XAMPP Server**.

## Tech Stack

The project is built using the following technologies:

* **HTML5** – Website structure and markup
* **CSS3** – Styling and user interface
* **Vanilla JavaScript** – Client-side functionality
* **AJAX** – Asynchronous communication between the client and server
* **PHP 8.0+** – Server-side programming
* **MySQL** – Database management
* **SQL** – Database creation and management
* **Custom PHP MVC Framework** – Application architecture and code organization
* **XAMPP** – Local development environment
* **Git** – Version control
* **Visual Studio Code** – Development environment

## Requirements

Before running the project, make sure you have the following installed:

* XAMPP or WAMP
* PHP 8.0 or higher
* MySQL
* A modern web browser
* Git (optional, if cloning the repository)

## Installation & Setup

Follow the steps below to set up SRPSS on your local machine.

### 1. Download the Repository

First, download or clone this repository to your local machine.

If you are using Git:

```bash
git clone <repository-url>
```

Copy the project into the appropriate web server directory. For XAMPP, this will typically be:

```text
C:\xampp\htdocs\
```

### 2. Start XAMPP Services

Open the **XAMPP Control Panel** and start:

* **Apache**
* **MySQL**

Make sure both services are running before proceeding.

### 3. Open phpMyAdmin

Open your web browser and navigate to:

```text
http://localhost/phpmyadmin
```

### 4. Create the SRPSS Database

In phpMyAdmin:

1. Click **SQL** from the top menu.
2. Enter the following SQL query:

```sql
CREATE DATABASE IF NOT EXISTS srpss;
```

3. Click **Go** to execute the query.

### 5. Import the SRPSS Database

1. Select the newly created **`srpss`** database from the left panel.
2. Click **Import** from the top menu.
3. Under **File to import**, click **Choose File**.
4. Navigate to the downloaded SRPSS project directory.
5. Select the **`srpss.sql`** file.
6. Click **Open**.
7. Scroll to the bottom of the page and click **Import**.
8. Wait for the import process to complete.

After successful import, the tables associated with the SRPSS application should appear in the `srpss` database.

### 6. Create the World Database

The project also requires a **`world`** database.

Follow the same process described above to create the database.

You can also use the following SQL query:

```sql
CREATE DATABASE IF NOT EXISTS world;
```

### 7. Import the World Database

1. Select the **`world`** database from the left panel.
2. Click **Import**.
3. Under **File to import**, click **Choose File**.
4. Navigate to the downloaded project directory.
5. Select the **`world.sql`** file.
6. Click **Open**.
7. Click the **Import** button at the bottom of the page.
8. Wait for the import process to complete.

Once the import is complete, the required tables should be available in the `world` database.

## Database Structure

The application requires two MySQL databases:

| Database | SQL File    | Purpose                         |
| -------- | ----------- | ------------------------------- |
| `srpss`  | `srpss.sql` | Main SRPSS application database |
| `world`  | `world.sql` | World/location-related database |

## Admin Login

The project includes an administrator account for accessing the admin functionality.

> **⚠️ Security Notice:** The credentials below are the default development credentials. Change or remove them before deploying the application to a production environment.

```text
Email:    admin@srpss.com
Password: Ad@12345
```

## Running the Application

After completing the database setup:

1. Make sure **Apache** and **MySQL** are running.
2. Make sure the project is located inside the XAMPP `htdocs` directory.
3. Open your browser.
4. Navigate to the project's local URL.

For example:

```text
http://localhost/SRPSS/
```

The exact URL depends on the name of the project directory inside `htdocs`.

## Project Architecture

SRPSS follows an **MVC (Model-View-Controller)** architecture implemented using a custom PHP MVC framework.

The architecture helps separate:

* **Models** – Database and application data handling
* **Views** – User interface and presentation
* **Controllers** – Application logic and request handling

AJAX and Vanilla JavaScript are used on the client side to communicate asynchronously with the PHP backend.

## Development Tools

The project was developed using:

* **Visual Studio Code**
* **Git**
* **XAMPP Server**

## Important Notes

* PHP **8.0 or higher** is recommended.
* Make sure Apache and MySQL are running before accessing the application.
* Both `srpss.sql` and `world.sql` must be imported for the application to work correctly.
* Database connection settings may need to be adjusted according to your local MySQL configuration.
* Do not use the default administrator credentials in a production environment.

## License

This project is intended for **educational and development purposes**.
