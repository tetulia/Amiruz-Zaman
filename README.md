# Primary School Web Portal & ICT Education Platform

A comprehensive PHP & MySQL based web portal designed for Primary School management, student performance monitoring, and digital ICT classroom resource sharing.

---

## 🌟 Key Features

- **Class-wise ICT PowerPoint Library**:
  - Organized PPT repository for Classes 1 through 5 across subjects (Bangla, English, Math, Science).
  - Dynamic subject and presentation file explorer (`powerpoint.php`, `ppt_view.php`).
- **Student Performance & Progress Monitoring**:
  - Attendance analytics and monthly performance visualizer (`students.php`, `progress.php`, `data_processor.php`).
  - Class-wise student records and statistical charts.
- **Interactive Comment & Feedback System**:
  - Asynchronous AJAX comment posting and dynamic threaded replies (`comment-system/`).
  - Secure Admin authentication to manage, reply to, and delete feedback.
- **School Information & Public Portal**:
  - Notice Board (`notice.php`)
  - Faculty & Teacher Profiles (`teachers.php`, `teacher1.php` - `teacher6.php`)
  - Photo Gallery & Magazine (`gallery.php`, `magazine.php`)
  - About Us & Research section (`about.php`, `research.php`)
- **Dual UI Layouts**:
  - Classic interface in root directory.
  - Modernized theme located in the [`newschool/`](newschool/) directory.
- **Modern Responsive Design**:
  - Built with Bootstrap 5, Slick Carousel, AOS scroll animations, Venobox lightbox, and Themify Icons.

---

## 🛠️ Technology Stack

- **Backend**: PHP 7.4 / 8.x
- **Database**: MySQL / MariaDB
- **Frontend**: HTML5, CSS3, JavaScript, jQuery
- **UI Libraries & Frameworks**:
  - [Bootstrap 5.3](https://getbootstrap.com/)
  - [Slick Slider](https://kenwheeler.github.io/slick/)
  - [AOS (Animate On Scroll)](https://michalsnik.github.io/aos/)
  - [Venobox Lightbox](https://nicolafranchini.github.io/Venobox/)
  - [Themify Icons](https://themify.me/themify-icons)

---

## 📁 Project Structure

```text
abc/
├── comment-system/          # AJAX comment system with admin management
│   ├── add_comment.php      # Comment submission API
│   ├── admin_login.php      # Admin authentication
│   ├── config.php           # Admin credentials configuration
│   ├── config.example.php   # Sample configuration file
│   ├── database.sql         # SQL schema for comments
│   ├── db.php               # MySQL database connection
│   ├── db.example.php       # Sample database connection
│   ├── delete_comment.php   # Admin delete action
│   ├── load_comments.php    # Dynamic comment loading
│   └── reply_comment.php    # Admin reply action
├── css/                     # Main stylesheets & icon fonts
├── fonts/                   # Web font assets
├── images/                  # Gallery, slider, and profile images
├── includes/                # Shared header and footer templates
├── js/                      # JavaScript logic and student chart scripts
├── newschool/               # Modern redesigned alternative layout
├── ppt/                     # ICT PowerPoint presentation repository (Class 1 - 5)
├── .gitignore               # Git ignored files & patterns
├── .htaccess                # Apache server configuration
├── about.php                # About page
├── admin.php                # Admin dashboard
├── database.sql             # Full database import schema
├── data_processor.php       # Student metrics calculation engine
├── data_students.php        # Student data store
├── index.php                # Home page
├── notice.php               # Notice board
├── powerpoint.php           # Class folder navigator
├── ppt_view.php             # PowerPoint presentation explorer
├── progress.php             # Student progress dashboard
├── README.md                # Project documentation
├── students.php             # Students directory
└── teachers.php             # Teachers directory
```

---

## 🚀 Installation & Setup Guide

### 1. Prerequisites
- A local web server stack such as [XAMPP](https://www.apachefriends.org/), [WampServer](https://www.wampserver.com/), or [Laragon](https://laragon.org/) with:
  - Apache 2.4+
  - PHP 7.4 or PHP 8.x
  - MySQL 5.7+ / MariaDB 10.4+

### 2. Setup the Project Files
Clone this repository or extract the project files into your web server's document root:
- **XAMPP**: `C:/xampp/htdocs/abc`
- **WAMP**: `C:/wamp64/www/abc`
- **Laragon**: `C:/laragon/www/abc`

### 3. Database Configuration
1. Open phpMyAdmin (`http://localhost/phpmyadmin`).
2. Create a database named `school_comments` (or import `database.sql` directly):
   - Click on the **Import** tab.
   - Choose [`database.sql`](database.sql) from the root folder.
   - Click **Go** / **Import**.
3. Verify connection settings in [`comment-system/db.php`](comment-system/db.php):
   ```php
   $host = "localhost";
   $user = "root";
   $pass = "";
   $db   = "school_comments";
   ```

### 4. Admin Access
- To change the comment administrator password, edit [`comment-system/config.php`](comment-system/config.php):
  ```php
  $admin_password = "your_secure_password";
  ```

### 5. Run the Application
Open your web browser and navigate to:
```text
http://localhost/abc/
```

---

## 🔒 Security Best Practices

- Before deploying to a production server:
  - Change the default admin password in `comment-system/config.php`.
  - Set strong MySQL credentials in `comment-system/db.php`.
  - Ensure database credentials and configuration files are secured with appropriate server permissions.

---

## 📄 License

This project is licensed under the [MIT License](LICENSE).
