<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Packages - Tours & Travels</title>
    <link rel="stylesheet" href="assets/css/style.css">
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
        <section id="packages-header">
            <h1>Our Tour Packages</h1>
            <p>Explore our handpicked destinations and find your perfect getaway.</p>
        </section>

        <section id="package-filters">
            <div class="form-container">
                <h2>Filter Packages</h2>
                <form id="filter-form">
                    <div class="filter-row">
                        <div class="form-group">
                            <label for="destination">Destination</label>
                            <select id="destination" name="destination">
                                <option value="">All Destinations</option>
                                <option value="manali">Manali</option>
                                <option value="goa">Goa</option>
                                <option value="rajasthan">Rajasthan</option>
                                <option value="kerala">Kerala</option>
                                <option value="andaman">Andaman</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="duration">Duration</label>
                            <select id="duration" name="duration">
                                <option value="">Any Duration</option>
                                <option value="1-3">1-3 Days</option>
                                <option value="4-7">4-7 Days</option>
                                <option value="8-14">8-14 Days</option>
                                <option value="15+">15+ Days</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="price-range">Price Range</label>
                            <select id="price-range" name="price_range">
                                <option value="">Any Price</option>
                                <option value="0-10000">Under ₹10,000</option>
                                <option value="10000-25000">₹10,000 - ₹25,000</option>
                                <option value="25000-50000">₹25,000 - ₹50,000</option>
                                <option value="50000+">Above ₹50,000</option>
                            </select>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-submit">Apply Filters</button>
                </form>
            </div>
        </section>

        <section id="package-listings">
            <div class="package-container">
                <!-- Sample Package 1 -->
                <div class="package-card">
                    <div class="package-image" style="background-image: url('assets/images/manali.jpg')"></div>
                    <div class="package-details">
                        <h3>Magical Manali</h3>
                        <p>5 Days of adventure in the beautiful mountains of Manali.</p>
                        <div class="package-price">₹15,000 per person</div>
                        <a href="package-details.php?id=1" class="btn">View Details</a>
                    </div>
                </div>
                
                <!-- Sample Package 2 -->
                <div class="package-card">
                    <div class="package-image" style="background-image: url('assets/images/goa.jpg')"></div>
                    <div class="package-details">
                        <h3>Goa Beach Vacation</h3>
                        <p>4 Days of sun, sand, and sea in the beautiful beaches of Goa.</p>
                        <div class="package-price">₹12,000 per person</div>
                        <a href="package-details.php?id=2" class="btn">View Details</a>
                    </div>
                </div>
                
                <!-- Sample Package 3 -->
                <div class="package-card">
                    <div class="package-image" style="background-image: url('assets/images/rajasthan.jpg')"></div>
                    <div class="package-details">
                        <h3>Royal Rajasthan Tour</h3>
                        <p>7 Days exploring the royal heritage and culture of Rajasthan.</p>
                        <div class="package-price">₹25,000 per person</div>
                        <a href="package-details.php?id=3" class="btn">View Details</a>
                    </div>
                </div>
                
                <!-- Sample Package 4 -->
                <div class="package-card">
                    <div class="package-image" style="background-image: url('assets/images/kerala.jpg')"></div>
                    <div class="package-details">
                        <h3>Kerala Backwaters</h3>
                        <p>6 Days in God's own country exploring the serene backwaters.</p>
                        <div class="package-price">₹20,000 per person</div>
                        <a href="package-details.php?id=4" class="btn">View Details</a>
                    </div>
                </div>
                
                <!-- Sample Package 5 -->
                <div class="package-card">
                    <div class="package-image" style="background-image: url('assets/images/andaman.jpg')"></div>
                    <div class="package-details">
                        <h3>Andaman Island Escape</h3>
                        <p>8 Days of tropical paradise in the Andaman & Nicobar Islands.</p>
                        <div class="package-price">₹35,000 per person</div>
                        <a href="package-details.php?id=5" class="btn">View Details</a>
                    </div>
                </div>
                
                <!-- Sample Package 6 -->
                <div class="package-card">
                    <div class="package-image" style="background-image: url('assets/images/ladakh.jpg')"></div>
                    <div class="package-details">
                        <h3>Ladakh Adventure</h3>
                        <p>10 Days of adventure in the breathtaking landscapes of Ladakh.</p>
                        <div class="package-price">₹40,000 per person</div>
                        <a href="package-details.php?id=6" class="btn">View Details</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Tours & Travels. All rights reserved.</p>
    </footer>

    <script src="assets/js/script.js"></script>
    <script>
        // Add event listener to filter form
        document.getElementById('filter-form').addEventListener('submit', function(event) {
            event.preventDefault();
            
            // Get filter values
            const destination = document.getElementById('destination').value;
            const duration = document.getElementById('duration').value;
            const priceRange = document.getElementById('price-range').value;
            
            // In a real application, this would make an AJAX request to the server
            // For now, we'll just log the filters
            console.log('Filters:', { destination, duration, priceRange });
            
            // This is where you would normally fetch filtered packages from the server
            // and update the package-container with the results
            alert('Filters applied! In a real application, this would show filtered packages.');
        });
    </script>
</body>
</html>