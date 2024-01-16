# Kenmark ITAN Solutions Website

Welcome to the Kenmark ITAN Solutions website project! This project is a simple website that includes features like user registration, login, profile viewing, and a contact form.

## Table of Contents

- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [File Structure](#file-structure)
- [Database](#database)
- [Contributing](#contributing)
- [License](#license)

## Features

1. **User Registration:** Users can register on the website with their name, email, password, and mobile number.
2. **User Login:** Registered users can log in to the website securely.
3. **Profile Viewing:** Users can view their profile information after logging in.
4. **Contact Form:** A contact form is available for users to submit inquiries.

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/your-username/kenmark-itan-website.git
    ```

2. Import the SQL file `user.sql` into your MySQL database.

3. Configure the database connection in `connect_database.php`.

4. Run the project on a PHP-enabled server.

## Usage

1. Open the website in a web browser.

2. Navigate to the registration page (`registration.php`) to create a new account.

3. Log in using your registered email and password.

4. Explore the website and view your profile.

5. Use the contact form (`contact.php`) to submit inquiries.

## File Structure

- `connect_database.php`: Database connection configuration.
- `header.css`: CSS styles for the header.
- `header.php`: Header component included in other pages.
- `footer.php`: Footer component included in other pages.
- `index.php`: Home page.
- `login.php`: Login page.
- `login_check.php`: PHP script to handle user login.
- `profile.php`: User profile page.
- `registration.php`: User registration page.
- `register.php`: PHP script to handle user registration.
- `contact.php`: Contact page.
- `process_contact.php`: PHP script to handle contact form submissions.

## Database

- The project uses a MySQL database.
- Database schema and tables are defined in `user.sql`.

## Contributing

Contributions are welcome! Feel free to open issues or pull requests.

## License

This project is licensed under the [MIT License](LICENSE).
