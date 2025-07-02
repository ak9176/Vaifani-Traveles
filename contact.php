<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Tours & Travels</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        /* Additional styles specific to contact page */
        .contact-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }
        
        .contact-info {
            background-color: #f9f9f9;
            padding: 2rem;
            border-radius: 8px;
        }
        
        .contact-item {
            margin-bottom: 1.5rem;
            display: flex;
            align-items: flex-start;
        }
        
        .contact-icon {
            width: 24px;
            height: 24px;
            margin-right: 1rem;
            background-size: contain;
            background-repeat: no-repeat;
        }
        
        .address-icon {
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="%230066cc"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>');
        }
        
        .phone-icon {
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="%230066cc"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>');
        }
        
        .email-icon {
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="%230066cc"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>');
        }
        
        .hours-icon {
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="%230066cc"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>');
        }
        
        .contact-details h3 {
            margin-bottom: 0.5rem;
            color: #333;
        }
        
        .contact-details p {
            color: #666;
            line-height: 1.5;
        }
        
        .map-container {
            margin-top: 2rem;
            border-radius: 8px;
            overflow: hidden;
            height: 300px;
            background-color: #eee;
        }
        
        .map-placeholder {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f5f5f5;
            color: #666;
            font-style: italic;
        }
        
        @media (max-width: 768px) {
            .contact-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="packages.php">Tour Packages</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="contact-header">
            <h1>Contact Us</h1>
            <p>We'd love to hear from you! Get in touch with our team.</p>
        </section>

        <div class="contact-container">
            <div class="contact-form">
                <h2>Send Us a Message</h2>
                <div class="form-container">
                    <form id="contact-form">
                        <div class="form-group">
                            <label for="name">Full Name *</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Subject *</label>
                            <input type="text" id="subject" name="subject" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-submit">Send Message</button>
                    </form>
                </div>
            </div>
            
            <div class="contact-info">
                <h2>Our Contact Information</h2>
                
                <div class="contact-item">
                    <div class="contact-icon address-icon"></div>
                    <div class="contact-details">
                        <h3>Address</h3>
                        <p>123 Travel Street, Tourism District<br>New Delhi, 110001<br>India</p>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon phone-icon"></div>
                    <div class="contact-details">
                        <h3>Phone</h3>
                        <p>+91 98765 43210<br>+91 11 2345 6789</p>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon email-icon"></div>
                    <div class="contact-details">
                        <h3>Email</h3>
                        <p>info@toursandtravels.com<br>bookings@toursandtravels.com</p>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon hours-icon"></div>
                    <div class="contact-details">
                        <h3>Business Hours</h3>
                        <p>Monday - Friday: 9:00 AM - 6:00 PM<br>Saturday: 10:00 AM - 4:00 PM<br>Sunday: Closed</p>
                    </div>
                </div>
                
                <div class="map-container">
                    <!-- In a real implementation, this would be a Google Maps embed -->
                    <!-- For now, we'll use a placeholder -->
                    <div class="map-placeholder">
                        <p>Map location would be displayed here</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Tours & Travels. All rights reserved.</p>
    </footer>

    <script src="assets/js/script.js"></script>
    <script>
        // Add event listener to contact form
        document.getElementById('contact-form').addEventListener('submit', function(event) {
            event.preventDefault();
            
            // In a real application, this would send the form data to the server
            // For now, we'll just show a confirmation message
            alert('Thank you for your message! We will get back to you soon.');
            this.reset();
        });
    </script>
</body>
</html>