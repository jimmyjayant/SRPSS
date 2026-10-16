# SRPSS — Scientific Research Paper Submission System

A fully responsive **SRPSS — Scientific Research Paper Submission System** web application that provides a single, organized place to access the Indian Scientific world and culture.

To explore scientific research, publications, educational resources, scientific events, and astronomy-related activities.

The platform allows users to submit and manage research papers, discover scientific resources, and connect with fellow science enthusiasts.

The application offers an easy-to-use and friendly interface where the user can find and view everything related to the Indian Scientific community.

---

## 🚀 Features

SRPSS offers a wide range of features for researchers, students, science enthusiasts, and administrators.

* 🔐 User authentication
* 👤 Upload, view and manage scientific research papers
* 📚 View Scientific Magazines
* 📰 Scientific Newspapers
* 📖 Science Journals
* 💬 Interact with other science enthusiasts
* 🔬 Science Exhibition
* 🏆 Science Fair
* 📝 Scientific Conferences
* 📺 Science based YouTube Channels
* 🎬 Scientific Movies
* 🥇 Awards
* 🔭 Observatories
* 🛠️ Telescope Making Workshop
* 🌌 Star Party
* 📸 Astrophotography
* 🌍 Global Scientific Resources
* 🔔 Notifications
* 🛡️ Administration

---

## 🛠️ Technologies Used

The project is developed using the following technologies:

| Technology                   | Purpose                                         |
| ---------------------------- | ----------------------------------------------  |
| **HTML5**                    | Website structure                               |
| **CSS3**                     | Styling and responsive design                   |
| **Vanilla JavaScript**       | Client-side functionality                       |
| **PHP 8.3+**                 | Backend development                             |
| **AJAX**                     | Asynchronous requests                           |
| **SQL**                      | Database queries                                |
| **MySQL**                    | Database management                             |
| **Custom PHP MVC Framework** | Application architecture and code organization  |
| **XAMPP**                    | Local development environment                   |
| **Git**                      | Version control                                 |
| **Visual Studio Code**       | Development environment                         |
| **Composer**                 | Third-Party Packages                            |
| **GitHub**                   | Source code hosting and collaboration           |

---

## 🔧 Development Tools

The following tools are used during development:

* [Visual Studio Code](https://code.visualstudio.com/)
* Git
* GitHub
* XAMPP
* Composer

---

# 📋 Requirements

Before running the project, make sure the following software is installed:

* **PHP 8.3 or higher**
* Make sure the required PHP extensions are enabled in `php.ini`, including:

    * `intl`
    * `curl`
    * `zip`
    * `mbstring`

* **MySQL**
* **Apache Web Server**
* **XAMPP**
* **Git**
* **Composer**
* **Active Internet Connection** — Preferably a broadband connection

**Note:-** 
Verify that the PHP version used by Apache is compatible with the PHP version required by the project and Composer dependencies.

---

# 📥 Installation & Setup

Follow the steps below to run the `SRPSS` application successfully on your local machine.

## 1. Clone the Repository

Clone the project from GitHub and place the project inside the XAMPP `htdocs` directory.

If you are using Git:

```bash
git clone <repository-url>
```

For example:

```text
C:\xampp\htdocs\SRPSS
```

Then open the project using your preferred code editor, such as Visual Studio Code.

---

## 2. Configure XAMPP Apache httpd-vhosts.conf file

Open the below file in text editor or vs code to add **srpss.com** as the virtual host.

```text
C:\xampp\apache\conf\extra\httpd-vhosts.conf
```

Add the below code at bottom of the file. Edit it according to the location of your cloned project folder.

```text
<VirtualHost *:80>
    ServerName srpss.com
    DocumentRoot "C:/xampp/htdocs/SRPSS/public/"
    SetEnv APPLICATION_ENV "development"
    <Directory "C:/xampp/htdocs/SRPSS/public/">
        DirectoryIndex index.php
        AllowOverride All
        Order allow,deny
        Allow from all
    </Directory>
</VirtualHost>
```

Change it according to the directory where your project is located.
Because when the project folder is accessed via browser. Then all requests are forwarded to public/index.php file.

This configuration ensures that requests are correctly routed through the application's front controller.

Make sure the below line is uncommented (remove # in front of it) in 
```text
C:\xampp\apache\conf\httpd.conf
```


```text
Include conf/extra/httpd-vhosts.conf
```

This configuration:

* Registers `srpss.com` as a local virtual host.
* Sets the `public` directory as the web document root.
* Uses `public/index.php` as the default entry point.
* Allows Apache to process `.htaccess` rules.
* Grants access to the public application directory.

**Important:**
If your project uses Apache rewrite rules, ensure that `mod_rewrite` is enabled and that the relevant `.htaccess` files are present.

---

## 3. Edit hosts file

Open the file with administrative privileges located at below location:-


```text
C:\Windows\System32\drivers\etc\hosts
```

At the bottom of the file, add the following:- 

```text
127.0.0.1      localhost srpss.com 
```

And save the file.

This maps `srpss.com` to your local machine, allowing you to access the application through your browser.

---

### 4. Install All Required Dependencies

Run the following command in terminal or git:

```bash
composer install
```

---

## 5. Start XAMPP

Open the **XAMPP Control Panel**.

Make sure the following services are running:

* **Apache**
* **MySQL**

Both services should show a running status.

---

## 6. Open phpMyAdmin

Open your web browser and navigate to:

```text
http://localhost/phpmyadmin
```

Once the phpMyAdmin dashboard appears, click on the **Databases** option in the top menu.

---

# 🗄️ Database Setup

## 7. Create the Database

In the **Create Database** section:

1. Enter the following database name:

```text
srpss
```

2. Click the **Create** button.

The `srpss` database will now be created.

3. Similarly also create the database `world` using steps mentioned above.

---

## 8. Import the `srpss` and `world` database

Select the newly created `srpss` database from the left sidebar.

Click the **Import** button in the top menu.

Click on the **Choose File** button in the **File to import section**.

Select `app/Database/srpss.sql` from the cloned project folder.

After choosing the file, scroll to the bottom of webpage. 

Click on the **Import** button at the bottom of the screen.

After successful import, many tables with data will appear inside the `srpss` database.


Similarly, import the `app/Database/world.sql` from the cloned project folder in `world` database.

---


# 📊 Database Structure

After completing the above steps, the `srpss` database should contain the following **18** tables:

```text
srpss
│
├── awards
├── chat
├── conferences
└── feedback
|-- journals
|-- magazines
|-- movies
|-- newspapers
|-- observatory
|-- researchers
|-- researchpapers
|-- researchsites
|-- scientists
|-- telescopeworkshop
|-- usernotif
|-- visitors
|-- webseries
|-- ytchannels
```


### Table Overview

| Table               | Description                                              |
| ------------------- | --------------------------------------------             |
| `awards`            | Stores the list of Indian Scientific Awards              |
| `chat`              | Stores chat data of users                                |
| `conferences`       | Stores list of Indian scientific conferences             |
| `feedback`          | Stores feedback submitted by users                       |
| `journals`          | Stores list of Indian Scientific Journals                |
| `magazines`         | Stores the list of Indian Scientific Magazines           |
| `movies`            | Stores the list of Indian Scientific Movies              |
| `newspapers`        | Stores the list of Indian Scientific Newspapers          |
| `observatory`       | Stores the list of Indian Scientific Observatory         |
| `researchers`       | Stores the user details for login/signup                 |
| `researchpapers`    | Stores the scientific research papers submitted by users |
| `researchsites`     | Stores the list of Indian Scientific Research Sites      |
| `scientists`        | Stores the list of Indian Scientists                     |
| `telescopeworkshop` | Stores the list of Indian telescope making workshop      |
| `usernotif`         | Stores the data related to user notifications            |
| `visitors`          | Stores the data related to website visitors              |
| `webseries`         | Stores the list of Indian Science based Web Series       |
| `ytchannels`        | Stores the list of Indian Science based Youtube Channels |


And the `world` database should contain the following **186** tables:


```text
world
│
├── afghanistan
├── albania
├── algeria
└── 
|-- 
|-- 
|-- 
|-- 
|-- 
|-- 
|-- zimbabwe
```

### Table Overview

In all tables in `world` database, the information stored is like list of scientific museums, research institutes, etc. in the particular country table.

---

# 🔐 Database Configuration

By default, the project assumes the following MySQL credentials:

```text
Username: root
Password: 
```

In other words, the default MySQL username is `root` and the password is empty.

If you are using different MySQL credentials, update them in:

```text
app/Config/srpss_database_connection.php
```

```text
app/Config/world_database_connection.php
```

Make sure the database name is also configured correctly:

```text
srpss
```

and 

```text
world
```

---

## 👨‍💼 Admin Login

The project includes an administrator account for accessing the admin functionality.

The admin account credentials are already present in `srpss.sql` file and after successful import, you can see it in `researchers` table in `srpss` database.

> **⚠️ Security Notice:** The credentials below are the default development credentials. Change or remove them before deploying the application to a production environment.

```text
Email:    admin@srpss.com
Password: Ad@12345
```

Use the above credentials in login page of website, if redirected to **Admin dashboard**, then OK. 
Otherwise, check the admin credentials in above mentioned table or change or create your own. 

---

## 🏗️ Project Architecture

SRPSS follows an **MVC (Model-View-Controller)** architecture implemented using a custom PHP MVC framework.

The architecture helps separate:

* **Models** – Database and application data handling
* **Views** – User interface and presentation
* **Controllers** – Application logic and request handling

AJAX and Vanilla JavaScript are used on the client side to communicate asynchronously with the PHP backend.

---

# ▶️ Running the Application

After completing the database configuration:

1. Make sure **Apache** and **MySQL** are running in XAMPP.
2. Make sure the project is located inside the XAMPP `htdocs` directory.
3. Verify that the 2 databases and tables with data have been created.
4. Verify the database credentials in:


```text
app/Config/srpss_database_connection.php
```

```text
app/Config/world_database_connection.php
```


5. Open your browser and navigate to your project's URL.

```text
srpss.com
```

> **Note:** If it is showing errors, then please check the above steps.

---

# 📁 Project Architecture

The project follows a **custom PHP MVC architecture**, separating application logic into appropriate components.

A typical structure includes:

```text
project-root/
│
├── app/
│   ├── Config/
│   │   └── srpss_database_connection.php
|   |   |-- world_database_connection.php
|   |
│   └── Controllers/
|   |   |-- index.php
|   |
|   |-- Database/
|   |   |-- srpss.sql
|   |   |-- world.sql
|   |
|   |-- Models/
|   |   |-- world/
|   |   |   |-- getafghanistandata.php
|   |   |   |-- getalbaniadata.php
|   |   |   |--
|   |   |   |--
|   |   |   |--
|   |   |   |-- getzimbabwedata.php
|   |   |
|   |   |-- checkcookie.php
|   |   |--
|   |   |--
|   |   |--
|   |   |-- submitpaper.php
|   |   
|   |-- Views/
|   |   |-- countries/
|   |   |   |-- afghanistan.php
|   |   |   |-- albania.php
|   |   |   |--
|   |   |   |--
|   |   |   |--
|   |   |   |-- zimbabwe.php
|   |   |
|   |   |-- 404.php
|   |   |-- admin_sitemap_section.php
|   |   |--
|   |   |--
|   |   |--
|   |   |-- world.php
|   |
|-- public/
|   |-- css/
|   |   |-- 404.css
|   |   |-- adminpanel.css
|   |   |--
|   |   |--
|   |   |-- world.css
|   |
|   |-- images/
|   |   |-- astronomy.webp
|   |   |--
|   |   |--
|   |   |--
|   |   |-- x.png
|   |
|   |-- script/
|   |   |-- script.js
|   |
|   |-- .htaccess
|   |-- index.php
|
|-- src/
|
|-- vendor/
|
│-- writable/
|       |-- cache/
|       |-- logs/
|       |-- uploads/
├── .gitignore
|-- .htaccess
│-- composer.json
|-- composer.lock
|-- LICENSE
└── README.md
```

The exact directory structure may vary depending on the current version of the repository.

---

# 🔒 Security Note

For local development, the default MySQL credentials may be:

```text
Username: root
Password: 
```

For production environments, it is strongly recommended to:

* Use a dedicated database user.
* Set a strong database password.
* Avoid exposing database credentials in publicly accessible files.
* Configure the application using appropriate environment-specific settings.
* Use HTTPS.
* Follow secure password-storage and input-validation practices.

---

# 🐛 Troubleshooting

### Apache is not starting

Make sure another application is not already using ports such as `80` or `443`.

### MySQL is not starting

Check whether another MySQL/MariaDB service is already running and occupying the required port.

### Database connection error

Verify the credentials and database name in:

```text
app/Config/srpss_database_connection.php
```

```text
app/Config/world_database_connection.php
```

Default database:

```text
srpss
```

```text
world
```

Default username:

```text
root
```

Default password:

```text
(empty)
```

### Page not found

Make sure the project is placed inside:

```text
C:\xampp\htdocs\
```

and access it using the correct URL.

---

# 👨‍💻 Development

This project can be developed locally using:

* Visual Studio Code
* XAMPP
* Git
* GitHub
* Composer

To check the PHP version installed on your machine:

```bash
php -v
```

```bash
composer -V
```

```bash
git -v
```

---

# 🙌 Acknowledgements

Thanks for checking out **SRPSS**.

The project was built to provide a simple, organized, and user-friendly platform to explore Indian Scientific culture, communities, activities, social network, etc.
