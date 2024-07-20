# Phlexi - Freelance Services Platform

## Software Academy Project 

This project represents a Freelance Services Platform built during the training program at Software Academy. Each stage of the project has its own version, allowing you to track its progress with each step.

### Stage #1 (HTML & CSS)

Using plain HTML and CSS, we create the initial interface. This stage forms the basis for further development, shaping the platform's overall look and feel.

### Stage #2 (JavaScript)

Introducing JavaScript functionality to enhance interactivity, we have added functionalities like a slideshow, implemented form validation, created a new page where we fetched data from a public API, added form validation together with saving data as JSON in local storage and included a counter to count each submission.

### Stage #3 (Bootstrap)

We implemented the Bootstrap framework by replacing all CSS classes with corresponding Bootstrap classes. We maintained the design and JavaScript functionality of the website, integrating new Bootstrap classes and interactivity. Additionally, we introduced a dark mode functionality and spinner loader to enhance the user experience.

### Stage #4 (PHP & MySQL)

At this stage, we created the database for the application. Subsequently, we developed the database schema and constructed the database itself using MySQL, adhering to common normalization forms. Following this, we refactored the entire HTML codebase, transitioning it to PHP and adopting the MVC (Model-View-Controller) architecture. We introduced several new functionalities, including user sign-up and sign-in processes, user profile management (enabling users to edit and update their information), adding skills for individual users, and project management capabilities that encompass CRUD operations (Create, Read, Update, Delete). All modifications were made in accordance with industry best practices, including adhering to naming conventions for files and directories, and adopting the MVC software design pattern together with OOP. Additionally, security measures were implemented, such as password hashing after user registration, protection from SQL injection, XSS protection measures by sanitizing the inputs and middleware to manage user redirection based on their authentication status (logged in or logged out).
At this stage, we created the database for the application. Subsequently, we developed the database schema and constructed the database itself using MySQL, adhering to common normalization forms. Following this, we refactored the entire HTML codebase, transitioning it to PHP and adopting the MVC (Model-View-Controller) architecture. We introduced several new functionalities, including user sign-up and sign-in processes, user profile management (enabling users to edit and update their information), adding skills for individual users, and project management capabilities that encompass CRUD operations (Create, Read, Update, Delete). All modifications were made in accordance with industry best practices, including adhering to naming conventions for files and directories, and adopting the MVC software design pattern together with OOP. Additionally, security measures were implemented, such as password hashing after user registration, protection from SQL injection, XSS protection measures by sanitizing the inputs and middleware to manage user redirection based on their authentication status (logged in or logged out).

### Stage #5 (Laravel)

At this point, we've transferred the business idea from our core PHP project into a new Laravel project. Here, we've redesigned the previous layout using Tailwind CSS to create a more modern design. In addition, we implemented new features such as localization and imporived log in system by adding password reset via email and remember me feature, added a dynamic modal component with Livewire and some static components in order to meet the final project requirments. We have also developed a feature that allows freelancers to join projects posted by clients and submit results for those projects. Clients can then accept or decline these results. As part of this feature, we built custom middleware to ensure consistency and security. Another built-in feature allows clients to leave a review for the freelancer's work after accepting the project result. These reviews can be displayed on both the freelancer's and the client's pages. For the freelancer, this feature showcases their work, while for the client, it allows them to modify or remove the review. A new implementation of the old idea was to separate the client and freelancer page in order to make the actions performed for the specific role more organized. Finally we provisioned infrastructure and deployed this project to the cloud using railway service. 


## Final Project Details

### Tech Stack:
- **Laravel**: A PHP framework for building web applications.
- **Tailwind CSS**: A utility-first CSS framework for rapidly building custom designs.
- **Livewire**: A full-stack framework for building UI and UX.
- **MySQL**: An open-source relational database management system.

### Functionality: 

#### User Roles

When you create an account, you are automatically assigned three roles:

1. **Client**: Can create and manage projects and reviews.
2. **Freelancer**: Can bid on projects and manage a freelancer profile.
3. **User**: Contains registration data and personal information, which are valid across all roles.

#### Client Functionality

- **Create, Edit and Delete Projects**: As a client, you can create new projects and manage them however you want.
- **Accept Freelancer Requests**: You can review and accept requests from freelancers who want to work on your projects.
- **Review Submissions**: After a freelancer submits their work, you can accept or decline the result.
- **Submit Reviews**: You can submit reviews for freelancers, which will be visible on their profiles.
- **Edit Reviews**: You have the ability to change or delete your reviews.

#### Freelancer Functionality

- **Edit Profile**: Fill out your freelancer profile with your hourly rate, niche, bio, and skills.
- **Bid on Projects**: Submit requests to get involved in client project.
- **Submit Work**: Once accepted for a project, you can submit your results to the client.
- **View Reviews**: Reviews from clients will be visible on your profile.

#### Simple User Functionality

- **Create Edit and Account**: Create a profile and edit registration info such as name, email and password. Additionally you can edit or fill in optional user data such as phone number or location.
- **Reset password as a Guest**: In case if you forgot your password you will be able easily reset that via Email.
- **View Projects**: Browse through projects available on the platform.
- **Search Freelancers**: Search for and view freelancer profiles.

### You can find the app live here:
https://sa-project-production.up.railway.app/

### Steps to run this project on your machine:
#### Before you begin make sure that you have the following installed on your machine:
- [PHP](https://www.php.net/downloads) (version 7.3 or later)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) and [npm](https://www.npmjs.com/)
- [MySQL](https://www.mysql.com/downloads/)


#### Step-by-step guide: 

1. **Clone the repository:**

   ```
   git clone https://github.com/your-username/your-repository.git
   cd your-repository 
    ```

2. **Install PHP and JavaScript dependencies:**
    ```
    npm run dev
    composer install
    ```

3. **Create a copy of the .env file:**
    ```
    cp .env.example .env
    ```

4. **Generate an application key:**
    ```
    php artisan key:generate
    ```

5. **Configure the `.env` file:**
  
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password
    ```

6. **Run database migrations.**
  
    ```
    php artisan migrate
    ```

7. **Create an empty database for the application.**

    **Additional steps to do that:**

    Login to MySQL:
    ```
    mysql -u your_database_username -p
    ```
    Create a new database: 
    ```
    CREATE DATABASE your_database_name;
    ```
    Verify the database correction:
    ```
    SHOW DATABASES;
    ```

8. **Seed the database (optional):**
  
    ```
    php artisan db:seed
    ```

9. **Build the front-end assets and run the project.**
  
    ```
    npm run dev
    php artisan serve
    ```

10. **Access the application**

    Open your web browser and navigate to `http://localhost:8000.`


