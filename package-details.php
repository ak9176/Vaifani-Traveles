<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package Details - Tours & Travels</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        /* Additional styles specific to package details page */
        .package-header {
            background-size: cover;
            background-position: center;
            height: 50vh;
            display: flex;
            align-items: flex-end;
            padding: 2rem;
            color: #fff;
            position: relative;
        }
        
        .package-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0.2));
        }
        
        .package-header-content {
            position: relative;
            z-index: 1;
        }
        
        .package-details-container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 2rem;
        }
        
        .package-meta {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #eee;
        }
        
        .meta-item {
            margin-right: 1rem;
            margin-bottom: 1rem;
        }
        
        .meta-label {
            font-weight: bold;
            color: #666;
        }
        
        .meta-value {
            font-size: 1.2rem;
            color: #333;
        }
        
        .itinerary-day {
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #eee;
        }
        
        .day-title {
            background-color: #f5f5f5;
            padding: 0.5rem 1rem;
            margin-bottom: 1rem;
            border-left: 4px solid #ff6b6b;
        }
        
        .inclusion-exclusion {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            margin-bottom: 2rem;
        }
        
        .inclusion-exclusion ul {
            list-style: none;
        }
        
        .inclusion-exclusion li {
            padding: 0.5rem 0;
            position: relative;
            padding-left: 1.5rem;
        }
        
        .inclusion-exclusion li::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0.8rem;
            width: 1rem;
            height: 1rem;
            background-size: contain;
            background-repeat: no-repeat;
        }
        
        .inclusions li::before {
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="%2300cc66"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/></svg>');
        }
        
        .exclusions li::before {
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="%23ff3333"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg>');
        }
        
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 1rem;
            margin-bottom: 2rem;
        }
        
        .gallery-item {
            height: 150px;
            background-size: cover;
            background-position: center;
            border-radius: 4px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }
        
        .gallery-item:hover {
            transform: scale(1.05);
        }
        
        @media (max-width: 768px) {
            .inclusion-exclusion {
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
        <!-- This would be dynamically populated based on the package ID -->
        <!-- For demonstration, we're showing the Manali package -->
        
        <div class="package-header" style="background-image: url('assets/images/manali.jpg')">
            <div class="package-header-content">
                <h1>Magical Manali</h1>
                <p>5 Days of adventure in the beautiful mountains of Manali</p>
            </div>
        </div>
        
        <div class="package-details-container">
            <div class="package-meta">
                <div class="meta-item">
                    <div class="meta-label">Duration</div>
                    <div class="meta-value">5 Days / 4 Nights</div>
                </div>
                
                <div class="meta-item">
                    <div class="meta-label">Price</div>
                    <div class="meta-value">₹15,000 per person</div>
                </div>
                
                <div class="meta-item">
                    <div class="meta-label">Best Time to Visit</div>
                    <div class="meta-value">March to June</div>
                </div>
                
                <div class="meta-item">
                    <div class="meta-label">Difficulty</div>
                    <div class="meta-value">Easy to Moderate</div>
                </div>
            </div>
            
            <section>
                <h2>Overview</h2>
                <p>Experience the magic of Manali with our carefully crafted 5-day tour package. Nestled in the mountains of Himachal Pradesh, Manali offers breathtaking views, adventure activities, and a serene environment to relax and rejuvenate.</p>
                <p>This package includes visits to popular attractions like Solang Valley, Rohtang Pass, Hadimba Temple, and more. You'll stay in comfortable accommodations and enjoy delicious local cuisine throughout your journey.</p>
            </section>
            
            <section>
                <h2>Itinerary</h2>
                
                <div class="itinerary-day">
                    <h3 class="day-title">Day 1: Arrival in Manali</h3>
                    <p>Arrive in Manali and check into your hotel. Rest and acclimatize to the mountain environment. In the evening, take a leisurely walk on Mall Road, exploring local shops and cafes. Overnight stay in Manali.</p>
                </div>
                
                <div class="itinerary-day">
                    <h3 class="day-title">Day 2: Local Sightseeing</h3>
                    <p>After breakfast, embark on a local sightseeing tour. Visit the ancient Hadimba Temple, Vashisht Hot Water Springs, and the Tibetan Monastery. Enjoy the beautiful views and learn about the local culture and history. Return to the hotel for dinner and overnight stay.</p>
                </div>
                
                <div class="itinerary-day">
                    <h3 class="day-title">Day 3: Solang Valley</h3>
                    <p>After breakfast, drive to Solang Valley, known for its adventure activities. Depending on the season, you can enjoy paragliding, zorbing, or skiing (at additional cost). Enjoy the panoramic views of the surrounding mountains. Return to the hotel for dinner and overnight stay.</p>
                </div>
                
                <div class="itinerary-day">
                    <h3 class="day-title">Day 4: Rohtang Pass (Subject to permit and weather conditions)</h3>
                    <p>Early morning, drive to Rohtang Pass (subject to permit and weather conditions). Enjoy the snow-capped mountains and engage in snow activities (seasonal). On the way back, visit Rahala Waterfalls and Gulaba. Return to the hotel for dinner and overnight stay.</p>
                </div>
                
                <div class="itinerary-day">
                    <h3 class="day-title">Day 5: Departure</h3>
                    <p>After breakfast, check out from the hotel. Visit the Naggar Castle and art gallery if time permits. Depart with beautiful memories of your Manali trip.</p>
                </div>
            </section>
            
            <section>
                <h2>Inclusions & Exclusions</h2>
                
                <div class="inclusion-exclusion">
                    <div class="inclusions">
                        <h3>Inclusions</h3>
                        <ul>
                            <li>4 nights accommodation in a 3-star hotel</li>
                            <li>Daily breakfast and dinner</li>
                            <li>All transfers and sightseeing by private vehicle</li>
                            <li>English-speaking tour guide</li>
                            <li>All applicable taxes</li>
                            <li>Parking and toll charges</li>
                        </ul>
                    </div>
                    
                    <div class="exclusions">
                        <h3>Exclusions</h3>
                        <ul>
                            <li>Airfare or train tickets</li>
                            <li>Lunch and any meals not mentioned</li>
                            <li>Entry fees to monuments and attractions</li>
                            <li>Adventure activities (paragliding, skiing, etc.)</li>
                            <li>Rohtang Pass permit (if applicable)</li>
                            <li>Personal expenses and tips</li>
                            <li>Travel insurance</li>
                            <li>Anything not mentioned in inclusions</li>
                        </ul>
                    </div>
                </div>
            </section>
            
            <section>
                <h2>Gallery</h2>
                
                <div class="gallery">
                    <div class="gallery-item" style="background-image: url('assets/images/manali1.jpg')"></div>
                    <div class="gallery-item" style="background-image: url('assets/images/manali2.jpg')"></div>
                    <div class="gallery-item" style="background-image: url('assets/images/manali3.jpg')"></div>
                    <div class="gallery-item" style="background-image: url('assets/images/manali4.jpg')"></div>
                    <div class="gallery-item" style="background-image: url('assets/images/manali5.jpg')"></div>
                    <div class="gallery-item" style="background-image: url('assets/images/manali6.jpg')"></div>
                </div>
            </section>
            
            <section>
                <h2>Book This Package</h2>
                
                <div class="form-container">
                    <form id="inquiry-form">
                        <input type="hidden" name="package_id" value="1">
                        <input type="hidden" name="package_name" value="Magical Manali">
                        
                        <div class="form-group">
                            <label for="name">Full Name *</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Phone Number *</label>
                            <input type="tel" id="phone" name="phone" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="travelers">Number of Travelers *</label>
                            <input type="number" id="travelers" name="travelers" min="1" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="travel-date">Preferred Travel Date *</label>
                            <input type="date" id="travel-date" name="travel_date" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="special-requests">Special Requests</label>
                            <textarea id="special-requests" name="special_requests"></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-submit">Send Inquiry</button>
                    </form>
                </div>
            </section>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Tours & Travels. All rights reserved.</p>
    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>