<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Tours & Travels</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        /* Additional styles specific to about page */
        .about-container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 2rem;
        }
        
        .about-section {
            margin-bottom: 3rem;
        }
        
        .about-image {
            width: 100%;
            height: 400px;
            background-size: cover;
            background-position: center;
            border-radius: 8px;
            margin-bottom: 2rem;
        }
        
        .mission-values {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .mission-card {
            background-color: #f9f9f9;
            padding: 1.5rem;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .mission-icon {
            width: 60px;
            height: 60px;
            margin: 0 auto 1rem;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }
        
        .mission-icon.quality {
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="%230066cc"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>');
        }
        
        .mission-icon.customer {
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="%230066cc"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8 0-4.41 3.59-8 8-8s8 3.59 8 8c0 4.41-3.59 8-8 8zm4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4 8-8z"/></svg>');
        }
        
        .mission-icon.sustainable {
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="%230066cc"><path d="M12 22c4.97 0 9-4.03 9-9-4.97 0-9 4.03-9 9zM5.6 10.25c0 1.38 1.12 2.5 2.5 2.5.53 0 1.01-.16 1.42-.44l-.02.19c0 1.38 1.12 2.5 2.5 2.5s2.5-1.12 2.5-2.5l-.02-.19c.4.28.89.44 1.42.44 1.38 0 2.5-1.12 2.5-2.5 0-1-.59-1.85-1.43-2.25.84-.4 1.43-1.25 1.43-2.25 0-1.38-1.12-2.5-2.5-2.5-.53 0-1.01.16-1.42.44l.02-.19C14.5 2.12 13.38 1 12 1S9.5 2.12 9.5 3.5l.02.19c-.4-.28-.89-.44-1.42-.44-1.38 0-2.5 1.12-2.5 2.5 0 1 .59 1.85 1.43 2.25-.84.4-1.43 1.25-1.43 2.25zM12 5.5c1.38 0 2.5 1.12 2.5 2.5s-1.12 2.5-2.5 2.5S9.5 9.38 9.5 8s1.12-2.5 2.5-2.5zM3 13c0 4.97 4.03 9 9 9 0-4.97-4.03-9-9-9z"/></svg>');
        }
        
        .team-section {
            margin-top: 3rem;
        }
        
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .team-member {
            text-align: center;
        }
        
        .team-photo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background-size: cover;
            background-position: center;
            margin: 0 auto 1rem;
            border: 4px solid #f0f0f0;
        }
        
        .team-name {
            font-weight: bold;
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }
        
        .team-role {
            color: #666;
            font-style: italic;
            margin-bottom: 0.5rem;
        }
        
        .team-bio {
            font-size: 0.9rem;
            color: #555;
        }
        
        @media (max-width: 768px) {
            .mission-values {
                grid-template-columns: 1fr;
                gap: 1rem;
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
        <section id="about-header">
            <h1>About Us</h1>
            <p>Learn more about our company and our passion for travel.</p>
        </section>

        <div class="about-container">
            <div class="about-section">
                <div class="about-image" style="background-image: url('assets/images/about-us.jpg')"></div>
                
                <h2>Our Story</h2>
                <p>Founded in 2010, Tours & Travels has grown from a small local travel agency to one of the most trusted names in the Indian tourism industry. Our journey began with a simple mission: to help people experience the incredible diversity and beauty of India in the most authentic and hassle-free way possible.</p>
                <p>What started as a small office with just two travel enthusiasts has now evolved into a team of experienced travel professionals who are passionate about creating memorable experiences for our clients. Over the years, we have helped thousands of travelers from across India and around the world explore the magnificent landscapes, rich cultural heritage, and warm hospitality that our country has to offer.</p>
                <p>Our founder, Rajesh Sharma, established the company after spending years backpacking across India and realizing the need for a travel service that combines local expertise with professional management. His vision continues to guide our company as we grow and expand our offerings.</p>
            </div>
            
            <div class="about-section">
                <h2>Our Mission & Values</h2>
                <p>At Tours & Travels, we believe that travel has the power to transform lives, broaden perspectives, and create lasting memories. Our mission is to make these transformative experiences accessible to everyone through carefully crafted tour packages that cater to diverse interests, preferences, and budgets.</p>
                
                <div class="mission-values">
                    <div class="mission-card">
                        <div class="mission-icon quality"></div>
                        <h3>Quality Experiences</h3>
                        <p>We are committed to providing high-quality travel experiences that exceed our customers' expectations. From accommodation to transportation and activities, we ensure that every aspect of your journey meets our stringent quality standards.</p>
                    </div>
                    
                    <div class="mission-card">
                        <div class="mission-icon customer"></div>
                        <h3>Customer-Centric Approach</h3>
                        <p>Our customers are at the heart of everything we do. We listen to your needs, preferences, and concerns, and tailor our services accordingly. Your satisfaction is our top priority, and we go the extra mile to ensure that your travel experience is smooth and enjoyable.</p>
                    </div>
                    
                    <div class="mission-card">
                        <div class="mission-icon sustainable"></div>
                        <h3>Sustainable Tourism</h3>
                        <p>We are committed to promoting sustainable tourism practices that respect local communities, preserve cultural heritage, and protect the environment. We believe in responsible travel that benefits both visitors and the destinations they explore.</p>
                    </div>
                </div>
            </div>
            
            <div class="team-section">
                <h2>Meet Our Team</h2>
                <p>Our success is driven by our dedicated team of travel professionals who are passionate about creating exceptional travel experiences for our clients.</p>
                
                <div class="team-grid">
                    <div class="team-member">
                        <div class="team-photo" style="background-image: url('assets/images/team1.jpg')"></div>
                        <div class="team-name">Rajesh Sharma</div>
                        <div class="team-role">Founder & CEO</div>
                        <div class="team-bio">With over 20 years of experience in the travel industry, Rajesh leads our company with his vision and passion for authentic travel experiences.</div>
                    </div>
                    
                    <div class="team-member">
                        <div class="team-photo" style="background-image: url('assets/images/team2.jpg')"></div>
                        <div class="team-name">Priya Patel</div>
                        <div class="team-role">Tour Operations Manager</div>
                        <div class="team-bio">Priya ensures that all our tours run smoothly, coordinating with local partners and guides to deliver exceptional experiences.</div>
                    </div>
                    
                    <div class="team-member">
                        <div class="team-photo" style="background-image: url('assets/images/team3.jpg')"></div>
                        <div class="team-name">Amit Singh</div>
                        <div class="team-role">Customer Relations</div>
                        <div class="team-bio">Amit is dedicated to providing outstanding customer service, addressing inquiries and ensuring client satisfaction.</div>
                    </div>
                    
                    <div class="team-member">
                        <div class="team-photo" style="background-image: url('assets/images/team4.jpg')"></div>
                        <div class="team-name">Sunita Verma</div>
                        <div class="team-role">Destination Expert</div>
                        <div class="team-bio">With her extensive knowledge of Indian destinations, Sunita helps design unique and authentic itineraries for our clients.</div>
                    </div>
                </div>
            </div>
            
            <div class="about-section">
                <h2>Why Choose Us?</h2>
                <ul>
                    <li><strong>Local Expertise:</strong> Our team has in-depth knowledge of destinations across India, ensuring you get authentic experiences.</li>
                    <li><strong>Personalized Service:</strong> We tailor our packages to meet your specific needs and preferences.</li>
                    <li><strong>Transparent Pricing:</strong> No hidden costs or surprises - we believe in complete transparency.</li>
                    <li><strong>24/7 Support:</strong> Our team is available round the clock to assist you during your journey.</li>
                    <li><strong>Quality Assurance:</strong> We personally vet all accommodations, transportation, and activities included in our packages.</li>
                    <li><strong>Customer Satisfaction:</strong> Our high rate of repeat customers and referrals speaks to the quality of our services.</li>
                </ul>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Tours & Travels. All rights reserved.</p>
    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>