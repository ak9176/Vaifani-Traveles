# Tours & Travels Web Application

## Overview

This is a comprehensive tour and travel web application built without relying on third-party APIs. The application provides a platform for travel agencies to showcase their tour packages, manage bookings, and interact with customers through an inquiry system.

## Features

### Frontend

- **Home Page**: Showcases featured tour packages, testimonials, and company information
- **Tour Packages**: Lists all available tour packages with filtering options
- **Package Details**: Detailed information about each tour package including itinerary, inclusions, and exclusions
- **Gallery**: Displays images of various destinations categorized by type
- **About Us**: Information about the travel agency
- **Contact**: Contact form and agency information
- **Responsive Design**: Works on all devices (desktop, tablet, mobile)

### Admin Panel

- **Dashboard**: Overview of bookings, inquiries, and packages
- **Package Management**: Add, edit, and delete tour packages
- **Booking Management**: View and manage booking inquiries
- **Inquiry Management**: Handle customer inquiries
- **User Management**: Manage admin users
- **Gallery Management**: Upload and manage gallery images
- **Settings**: Configure website settings

## Technology Stack

### Frontend
- HTML5
- CSS3
- JavaScript
- Responsive design (mobile-first approach)

### Backend
- PHP
- MySQL Database

## Installation

### Prerequisites
- Web server (Apache/Nginx)
- PHP 7.4 or higher
- MySQL 5.7 or higher

### Setup Instructions

1. **Clone or download the repository**

2. **Database Setup**
   - Create a MySQL database named `tours_travels`
   - Import the database schema from `config/database.sql`

3. **Configuration**
   - Update database credentials in `config/database.php`

4. **Web Server Configuration**
   - Configure your web server to point to the project directory
   - Ensure the `assets/uploads` directory is writable by the web server

5. **Access the Application**
   - Frontend: `http://your-domain.com/`
   - Admin Panel: `http://your-domain.com/admin/`
   - Default admin credentials:
     - Email: admin@example.com
     - Password: password

## Project Structure

```
├── admin/                  # Admin panel files
│   ├── bookings.php        # Booking management
│   ├── dashboard.php       # Admin dashboard
│   ├── gallery.php         # Gallery management
│   ├── inquiries.php       # Inquiry management
│   ├── login.php           # Admin login
│   ├── logout.php          # Admin logout
│   ├── packages.php        # Package management
│   ├── settings.php        # Website settings
│   └── users.php           # User management
├── assets/                 # Static assets
│   ├── css/                # CSS files
│   ├── images/             # Image files
│   ├── js/                 # JavaScript files
│   └── uploads/            # Uploaded files
├── config/                 # Configuration files
│   ├── database.php        # Database connection
│   └── database.sql        # Database schema
├── includes/               # Reusable components
│   ├── footer.php          # Footer template
│   ├── functions.php       # Helper functions
│   └── header.php          # Header template
├── about.php               # About page
├── contact.php             # Contact page
├── gallery.php             # Gallery page
├── index.php               # Home page
├── package-details.php     # Package details page
├── packages.php            # Packages listing page
└── README.md               # Project documentation
```

## Manual Payment Process

This application uses a manual payment process:

1. Customer submits a booking inquiry through the website
2. Admin receives the booking notification
3. Admin contacts the customer to confirm details and provide payment instructions
4. Customer makes payment via bank transfer, cash, or other agreed method
5. Admin updates the booking status in the system
6. Confirmation is sent to the customer

## Customization

### Adding New Tour Packages
1. Log in to the admin panel
2. Navigate to "Tour Packages" and click "Add New Package"
3. Fill in the package details and save

### Modifying Website Settings
1. Log in to the admin panel
2. Navigate to "Settings"
3. Update the desired settings and save

## License

This project is licensed under the MIT License - see the LICENSE file for details.

## Support

For support or inquiries, please contact [your-email@example.com](mailto:your-email@example.com).