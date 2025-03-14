# LibraTrack

Libratrack is an application where users can view book details, borrow books, and leave comments on them. This is a very early-stage project currently under development using PHP Laravel for the backend and Blade for the frontend.

## Table of Contents
- [LibraTrack](#libratrack)
    - [Table of Contents](#table-of-contents)
    - [Technologies Used](#technologies-used)
    - [Project Overview](#project-overview)
    - [Features](#features)
    - [Installation](#installation)
    - [Usage](#usage)
    - [Contributors](#contributors)
    - [License](#license)

---

## Technologies Used


- **Backend Framework**

  - [![PHP][PHP]][PHP-url]
  - [![Composer][Composer]][Composer-url]
  - [![Laravel][Laravel]][Laravel-url]
  
- **Frontend Framework**
   
    - <a href="https://blade-ui-kit.com/"> 
        <img width="140" src="https://blade-ui-kit.com/images/logo.svg" alt="blade">
      </a>
    - <a href="https://laravel.com">
      <img src="https://raw.githubusercontent.com/laravel/breeze/1.x/art/logo.svg" alt="Breeze Logo" width="160">
</a>
  
- **Database** 
  
   - [![Mysql][Mysql]][Mysql-url]
   
- **Development & Deployment**
    - [![Docker][Docker-shield]][Docker-url]
    - [![Github][Github-logo]][Github-url]
    - <img src="data:image/svg+xml,%3Csvg viewBox='0 0 294 69' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cstyle%3E%23sail %7B fill: %23b35555 %7D @media (prefers-color-scheme:dark) %7B %23sail %7B fill: %23891a1a %7D %7D%3C/style%3E%3Cmask id='mask' style='mask-type:luminance' maskUnits='userSpaceOnUse' x='2' y='2' width='65' height='65'%3E%3Cpath d='M34.3 66.3C51.9731 66.3 66.3 51.9732 66.3 34.3C66.3 16.6269 51.9731 2.30005 34.3 2.30005C16.6269 2.30005 2.3 16.6269 2.3 34.3C2.3 51.9732 16.6269 66.3 34.3 66.3Z' fill='white'/%3E%3C/mask%3E%3Cg mask='url(%23mask)'%3E%3Cpath d='M2.3 2.30005H66.3V66.3H2.3V2.30005Z' fill='%2338BDF7'/%3E%3Cpath d='M60.3 53L34.3 13V66.3H60.3V53Z' fill='%230D4A6E'/%3E%3Cpath d='M10.3 55.4001V66.3H31.6V26.3L10.3 55.4001Z' fill='%23E0F2FE'/%3E%3C/g%3E%3Cpath id='sail' d='M98.9 44.4H108V48.7H94V19.2H98.9V44.4ZM125.3 29.1H129.9V48.7H125.3V46C124.7 47 123.8 47.7999 122.7 48.2999C121.6 48.8999 120.4 49.0999 119.2 49.0999C117.7 49.0999 116.3 48.7999 115.1 48.2999C113.9 47.7999 112.8 47 111.9 46C111 45 110.3 43.9 109.8 42.7C109.3 41.5 109.1 40.1 109.1 38.7C109.1 37.3 109.3 35.9999 109.8 34.7999C110.3 33.5999 111 32.4 111.9 31.5C112.8 30.5 113.9 29.8 115.1 29.2C116.3 28.7 117.7 28.4 119.2 28.4C120.4 28.4 121.5 28.7 122.7 29.2C123.8 29.8 124.7 30.5 125.3 31.5V29.1ZM125.3 38.9C125.3 38.1 125.2 37.3 124.9 36.5C124.6 35.7 124.2 35.1 123.7 34.5C123.2 33.9 122.6 33.5 121.9 33.2C121.2 32.9 120.4 32.7 119.5 32.7C118.6 32.7 117.8 32.9 117.1 33.2C116.4 33.5 115.8 34 115.3 34.5C114.8 35.1 114.4 35.7 114.1 36.5C113.8 37.3 113.7 38.1 113.7 38.9C113.7 39.7 113.8 40.4999 114.1 41.2999C114.4 42.0999 114.8 42.6999 115.3 43.2999C115.8 43.8999 116.4 44.2999 117.1 44.5999C117.8 44.8999 118.6 45.0999 119.5 45.0999C120.4 45.0999 121.2 44.8999 121.9 44.5999C122.6 44.2999 123.2 43.7999 123.7 43.2999C124.2 42.6999 124.6 42.0999 124.9 41.2999C125.1 40.5999 125.3 39.8 125.3 38.9ZM162.8 29.1H167.4V48.7H162.8V46C162.2 47 161.3 47.7999 160.2 48.2999C159.1 48.8999 157.9 49.0999 156.7 49.0999C155.2 49.0999 153.8 48.7999 152.6 48.2999C151.4 47.7999 150.3 47 149.4 46C148.5 45 147.8 43.9 147.3 42.7C146.8 41.5 146.6 40.1 146.6 38.7C146.6 37.3 146.8 35.9999 147.3 34.7999C147.8 33.5999 148.5 32.4 149.4 31.5C150.3 30.5 151.4 29.8 152.6 29.2C153.8 28.7 155.2 28.4 156.7 28.4C157.9 28.4 159 28.7 160.2 29.2C161.3 29.8 162.2 30.5 162.8 31.5V29.1ZM162.8 38.9C162.8 38.1 162.7 37.3 162.4 36.5C162.1 35.7 161.7 35.1 161.2 34.5C160.7 33.9 160.1 33.5 159.4 33.2C158.7 32.9 157.9 32.7 157 32.7C156.1 32.7 155.3 32.9 154.6 33.2C153.9 33.5 153.3 34 152.8 34.5C152.3 35.1 151.9 35.7 151.6 36.5C151.3 37.3 151.2 38.1 151.2 38.9C151.2 39.7 151.3 40.4999 151.6 41.2999C151.9 42.0999 152.3 42.6999 152.8 43.2999C153.3 43.8999 153.9 44.2999 154.6 44.5999C155.3 44.8999 156.1 45.0999 157 45.0999C157.9 45.0999 158.7 44.8999 159.4 44.5999C160.1 44.2999 160.7 43.7999 161.2 43.2999C161.7 42.6999 162.1 42.0999 162.4 41.2999C162.6 40.5999 162.8 39.8 162.8 38.9ZM213.4 19.2V48.7H218V19.2H213.4ZM133.5 48.7H138.1V33.5999H146V29.1H133.5V48.7ZM185.9 29.1L180.1 44.0999L174.3 29.1H169.6L177.2 48.7H183L190.6 29.1H185.9ZM210.4 40.5999H195.1C195.1 42.2999 196.8 45.5999 200.9 45.5999C204.4 45.5999 206.8 42.5 206.8 42.5L209.9 44.9C207.1 47.9 204.8 49.2 201.3 49.2C194.9 49.2 190.6 45.2 190.6 38.9C190.6 33.2 195.1 28.6 200.7 28.6C206.9 28.6 211.2 34.0999 210.4 40.5999ZM206.2 37.2C206.2 36.8 205.6 32.2 200.6 32.2C195.6 32.2 195.1 36.8 195.1 37.2H206.2Z'/%3E%3Cpath id='sail' d='M251.3 38.4001C252.2 39.3001 252.6 40.6 252.6 42.1C252.6 43.6 252.2 44.9 251.4 46.1C250.6 47.3 249.4 48.2 247.9 48.8C246.4 49.4 244.6 49.8 242.6 49.8C240.4 49.8 238.4 49.5001 236.8 48.9001C235.1 48.3001 233.6 47.4001 232.3 46.2001L233.3 44.3C234.7 45.5 236.1 46.4001 237.5 46.9001C238.9 47.4001 240.6 47.7001 242.6 47.7001C245 47.7001 246.8 47.2 248.1 46.3C249.4 45.3 250.1 44.0001 250.1 42.2001C250.1 41.2001 249.8 40.4001 249.1 39.7001C248.4 39.0001 247.6 38.6001 246.7 38.2001C245.7 37.8001 244.4 37.5 242.8 37.1C240.6 36.6 238.9 36.1 237.5 35.6C236.1 35.1 235 34.3 234.1 33.3C233.2 32.3 232.7 30.9001 232.7 29.2001C232.7 27.6001 233.1 26.3001 233.9 25.1C234.7 23.9 235.9 23 237.4 22.3C238.9 21.7 240.7 21.3 242.7 21.3C244.6 21.3 246.4 21.6001 248 22.2001C249.6 22.8001 251 23.7 252.2 24.9L251.2 26.8C249.9 25.6 248.6 24.8001 247.2 24.2001C245.8 23.7001 244.3 23.4 242.7 23.4C240.3 23.4 238.5 23.9 237.2 24.9C235.9 25.9 235.2 27.3001 235.2 29.1C235.2 30.6 235.8 31.8 236.9 32.5C238.1 33.3 239.7 33.9001 242 34.4001L243.1 34.7001C245.2 35.2001 246.9 35.7 248.1 36.1C249.4 36.8 250.4 37.5001 251.3 38.4001ZM272 30H274.4V49.5H272V45.8C271.4 47.1 270.6 48.1 269.4 48.8C268.2 49.5 266.8 49.8 265.2 49.8C263.4 49.8 261.9 49.4 260.6 48.6C259.3 47.8 258.3 46.6 257.5 45.1C256.8 43.6 256.4 41.8 256.4 39.8C256.4 37.8 256.8 36.0001 257.5 34.4001C258.2 32.9001 259.3 31.7 260.6 30.8C261.9 29.9 263.5 29.5 265.2 29.5C266.8 29.5 268.2 29.8 269.4 30.5C270.6 31.2 271.5 32.2 272.1 33.5V30H272ZM272 39.6C272 37 271.4 35 270.3 33.6C269.2 32.2 267.6 31.5 265.5 31.5C263.4 31.5 261.8 32.2001 260.7 33.7001C259.5 35.1001 259 37.1001 259 39.7001C259 42.2001 259.6 44.2 260.7 45.6C261.9 47 263.5 47.7001 265.6 47.7001C267.6 47.7001 269.2 47 270.4 45.6C271.5 44.2 272 42.2 272 39.6ZM280.6 24.9H283.8V21.9H280.6V24.9ZM281 49.5H283.4V30H281V49.5ZM289.9 20.8V49.5H292.3V20.8H289.9Z'/%3E%3C/svg%3E" alt="Sail Logo" width="100" />
   


## Project Overview

Libratrack is an innovative library management app designed to make it easier for users to explore book collections, borrow books, and share their thoughts through comments. Developed using PHP Laravel and Blade, the project is still in its early stages and aims to enhance the library experience for readers.

## Features

- Key Features
  - Book Browsing: Easily browse and search for books with detailed information about each title.
  - Borrowing System: Users can borrow books directly through the application.
  - Commenting Feature: Share opinions and reviews about books to engage with other readers.
  - Library Management: Helps libraries organize their book collections and track borrowing activity.
- Planned Features (Under Development)
  - Advanced Search Filters: Filter books by genre, author, or publication year.
  - Notifications: Reminders for due dates and updates on borrowed books.
  - User Profiles: Personalized profiles to manage borrowed books and track reading progress.


## Installation

To install and run the project, follow these steps:

1. **Clone the repository**:
   ```bash
   git clone https://github.com/Attila112/libraTrack.git
   cd libraTrack 
    ```
2.  **Install dependencies**:
    ```bash    
    composer install
     ```
3.  **Start the docker containers**:

    ```bash
    docker compose up -d
     ``` 
4. **Run migrations and seeders**:

    ```bash
    docker-compose exec laravel.test php artisan migrate --force
   docker-compose exec laravel.test php artisan db:seed --force

     ``` 
The website will be available at `http://localhost`.

## Usage
- Admin log in:
  - If you want to see how works with admin role, you just Log in with this user: 
    - E-mail: admin@admin.com
    - Password: password
- Browse Books:
  - Open the application and explore the library’s book collection.
  - Use the search bar to find books by title or author.
- Borrow Books:
  - Select a book you’re interested in and check its availability.
  - Click the “Borrow” button to reserve the book for pickup or digital access (if available).
- Leave Comments:
  - After reading a book, share your thoughts by leaving a comment on the book’s page.
- Future Features (Coming Soon):
  - Log in to your account to view your borrowed books and due dates.
  - Receive notifications about upcoming return deadlines.
  - Get personalized book recommendations based on your reading history.
  - Set up a profile to track your reading progress and favorite books.

----------

## Contributors
-   **Attila** - [@Attila112](https://github.com/Attila112)

## License
This project is licensed under the MIT License.



[Laravel]: https://a11ybadges.com/badge?logo=laravel
[Laravel-url]: https://laravel.com/
[PHP]: https://a11ybadges.com/badge?logo=php
[PHP-url]: https://www.php.net/
[Composer]: https://a11ybadges.com/badge?logo=composer
[Composer-url]: https://getcomposer.org/
[Mysql]: https://a11ybadges.com/badge?logo=mysql
[Mysql-url]: https://www.mysql.com/
[Docker-shield]:https://img.shields.io/badge/docker-%230db7ed.svg?style=for-the-badge&logo=docker&logoColor=white
[Docker-url]:https://www.docker.com/
[Github-logo]: https://img.shields.io/badge/github-%23121011.svg?style=for-the-badge&logo=github&logoColor=white
[Github-url]: https://github.com/


