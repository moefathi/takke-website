# Takke – Website Design and Development
In my project, I designed and developed Takke, a multi-page website that offers paid audio engineering courses. The website is built with HTML, CSS, PHP and a MySQL database, and it allows users to create an account, sign in, browse the courses, add them to a cart, and update their profile information.

## Website Pages
In this project, I created several PHP pages, and each one is connected to the database. The home page (`index.php`) contains the instructor section and the courses section, while `signIn.php` and `signUp.php` handle the login and registration. The cart page (`cart.php`) displays the courses that the user added, and the My Courses page (`mycourses.php`) displays the courses that are in the user's cart after checkout.

Another page is `editUserInfo.php`, where the user can update their email and password but not their username. I also created `logout.php` to end the session, and `connect.php` to connect the pages to the database.

## Database
I used a MySQL database with three tables: `users`, `courses` and `cart`. The users table stores the username, password and email, and I added UNIQUE keys on the username and the email so duplicates are rejected. The courses table stores the course name, price and image, and the home page reads the courses from it.

The cart table stores the course information together with the username of the user who added it. This is how each user gets their own cart. The structure of the database is available in `takkeh.sql`.

## User Accounts and Sessions
When a user signs up, the data is inserted into the users table, and if the username or the email already exists, an alert is shown. When a user signs in, the username and password are checked against the database and a session is started. Logging out destroys the session.

The home page is different for logged-out and logged-in users. A logged-out user sees only four courses with sign in and sign up links, while a logged-in user sees all the courses with links to the cart, the profile and logout. The My Courses link only appears when the user has courses in the cart.

## Courses and Cart
Another part of my project was implementing the CRUD operations. Courses are read from the database and displayed on the home page, and pressing "Add To Cart" inserts the course into the cart table. If the user adds the same course again, an alert shows that the course is already added.

On the cart page, I display the courses with their prices and calculate the total price, and the user can delete a course, which removes it from the cart table. For the checkout, I did not implement a real payment. When the user presses checkout and the cart has courses, they are redirected to the My Courses page, which reads the courses from the cart table.

## Responsive Design
I used flexbox and media queries to make the pages work on different screen sizes. The home page CSS (`homeStyles.css`) has different breakpoints from extra small devices up to large devices, and the sign in, sign up and profile pages have a media query for small screens. I also used the Bootstrap card component to display the courses.

## Design and Planning
Before developing the website, I wrote a design document that includes the goal, the scope, the requirements, a sitemap and wireframes for mobile and PC screens. I created the sitemap and the wireframes using Miro. I used the Audiowide font from Google Fonts, and the colour palette comes from Color Hunt.

## SEO and Hosting
For SEO, I used a unique title tag and meta description on each page, one H1 heading per page, and alt attributes for the images. I also submitted a sitemap to Google Search Console. I tested the website locally using XAMPP, then hosted it on InfinityFree, uploaded the files using FTP and the File Manager, and imported the database there.

## Testing
I wrote a test plan with 30 test cases covering sign in and sign up validation, the content for logged-in and logged-out users, links, icons, functionality, and responsiveness. In my report, 29 test cases passed and the only one that failed was the checkout, because the payment is not implemented.

## Limitations
On one hand, the main features work, including the accounts, the sessions, the cart and the database operations. But some things are not implemented, such as a real checkout and payment, password hashing and encryption (the passwords are stored as plain text in the database), a search function, and a light or dark theme.

## Running the Project Locally
The pages load their styles and images from `../CSS/` and `../Assets/`, so the PHP files need to stay in a folder next to those two folders. `connect.php` connects to a database named `takkeh` on localhost with the user `root` and an empty password, so I created a database with that name in phpMyAdmin and imported `takkeh.sql`. After that, I ran the project using XAMPP.

## Project Documentation
I have also included a PDF containing an edited version of my original university project report, design document and test plan. I removed the assignment instructions and personal details while keeping the main technical documentation, the screenshots, and the test cases.

## Technologies Used
- HTML
- CSS
- JavaScript (alerts)
- PHP
- MySQL
- Bootstrap
- Font Awesome
- XAMPP
- InfinityFree

## Project Information
- **Type:** Academic Project
- **Course:** Website Design and Development
- **Semester:** Fall 2024/2025
