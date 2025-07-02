<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Tours & Travels</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        /* Additional styles specific to gallery page */
        .gallery-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }
        
        .gallery-filters {
            display: flex;
            justify-content: center;
            margin-bottom: 2rem;
            flex-wrap: wrap;
        }
        
        .filter-btn {
            background-color: #f0f0f0;
            border: none;
            padding: 0.5rem 1rem;
            margin: 0.5rem;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .filter-btn:hover {
            background-color: #e0e0e0;
        }
        
        .filter-btn.active {
            background-color: #0066cc;
            color: white;
        }
        
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1rem;
        }
        
        .gallery-item {
            position: relative;
            height: 250px;
            overflow: hidden;
            border-radius: 8px;
            cursor: pointer;
        }
        
        .gallery-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .gallery-item:hover .gallery-image {
            transform: scale(1.05);
        }
        
        .gallery-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);
            color: white;
            padding: 1rem;
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }
        
        .gallery-item:hover .gallery-caption {
            transform: translateY(0);
        }
        
        .gallery-caption h3 {
            margin-bottom: 0.5rem;
            font-size: 1.2rem;
        }
        
        .gallery-caption p {
            font-size: 0.9rem;
            opacity: 0.9;
        }
        
        /* Lightbox styles */
        .lightbox {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.9);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            padding: 2rem;
        }
        
        .lightbox.active {
            display: flex;
        }
        
        .lightbox-content {
            position: relative;
            max-width: 80%;
            max-height: 80%;
        }
        
        .lightbox-image {
            max-width: 100%;
            max-height: 80vh;
            object-fit: contain;
        }
        
        .lightbox-caption {
            color: white;
            text-align: center;
            margin-top: 1rem;
        }
        
        .lightbox-close {
            position: absolute;
            top: -40px;
            right: 0;
            color: white;
            font-size: 2rem;
            cursor: pointer;
            background: none;
            border: none;
        }
        
        .lightbox-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: white;
            font-size: 2rem;
            cursor: pointer;
            background: none;
            border: none;
            padding: 1rem;
        }
        
        .lightbox-prev {
            left: -60px;
        }
        
        .lightbox-next {
            right: -60px;
        }
        
        @media (max-width: 768px) {
            .gallery-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            }
            
            .lightbox-content {
                max-width: 95%;
            }
            
            .lightbox-nav {
                font-size: 1.5rem;
            }
            
            .lightbox-prev {
                left: -40px;
            }
            
            .lightbox-next {
                right: -40px;
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
        <section id="gallery-header">
            <h1>Our Gallery</h1>
            <p>Explore beautiful destinations through our collection of images.</p>
        </section>

        <div class="gallery-container">
            <div class="gallery-filters">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="mountains">Mountains</button>
                <button class="filter-btn" data-filter="beaches">Beaches</button>
                <button class="filter-btn" data-filter="heritage">Heritage</button>
                <button class="filter-btn" data-filter="wildlife">Wildlife</button>
                <button class="filter-btn" data-filter="adventure">Adventure</button>
            </div>
            
            <div class="gallery-grid">
                <!-- Mountain destinations -->
                <div class="gallery-item" data-category="mountains">
                    <img src="assets/images/gallery/manali1.jpg" alt="Manali Mountains" class="gallery-image">
                    <div class="gallery-caption">
                        <h3>Manali</h3>
                        <p>Beautiful snow-capped mountains in Manali, Himachal Pradesh.</p>
                    </div>
                </div>
                
                <div class="gallery-item" data-category="mountains">
                    <img src="assets/images/gallery/ladakh1.jpg" alt="Ladakh Landscape" class="gallery-image">
                    <div class="gallery-caption">
                        <h3>Ladakh</h3>
                        <p>Breathtaking landscapes of Ladakh, the land of high passes.</p>
                    </div>
                </div>
                
                <div class="gallery-item" data-category="mountains">
                    <img src="assets/images/gallery/darjeeling1.jpg" alt="Darjeeling Tea Gardens" class="gallery-image">
                    <div class="gallery-caption">
                        <h3>Darjeeling</h3>
                        <p>Lush green tea gardens with a view of the Himalayas.</p>
                    </div>
                </div>
                
                <!-- Beach destinations -->
                <div class="gallery-item" data-category="beaches">
                    <img src="assets/images/gallery/goa1.jpg" alt="Goa Beach" class="gallery-image">
                    <div class="gallery-caption">
                        <h3>Goa</h3>
                        <p>Golden sandy beaches of Goa with palm trees.</p>
                    </div>
                </div>
                
                <div class="gallery-item" data-category="beaches">
                    <img src="assets/images/gallery/andaman1.jpg" alt="Andaman Beach" class="gallery-image">
                    <div class="gallery-caption">
                        <h3>Andaman Islands</h3>
                        <p>Crystal clear waters of Radhanagar Beach in Andaman.</p>
                    </div>
                </div>
                
                <div class="gallery-item" data-category="beaches">
                    <img src="assets/images/gallery/kerala1.jpg" alt="Kerala Backwaters" class="gallery-image">
                    <div class="gallery-caption">
                        <h3>Kerala</h3>
                        <p>Serene backwaters of Kerala with traditional houseboats.</p>
                    </div>
                </div>
                
                <!-- Heritage destinations -->
                <div class="gallery-item" data-category="heritage">
                    <img src="assets/images/gallery/rajasthan1.jpg" alt="Rajasthan Fort" class="gallery-image">
                    <div class="gallery-caption">
                        <h3>Rajasthan</h3>
                        <p>Majestic forts and palaces of Rajasthan showcasing royal heritage.</p>
                    </div>
                </div>
                
                <div class="gallery-item" data-category="heritage">
                    <img src="assets/images/gallery/agra1.jpg" alt="Taj Mahal" class="gallery-image">
                    <div class="gallery-caption">
                        <h3>Agra</h3>
                        <p>The iconic Taj Mahal, a symbol of eternal love.</p>
                    </div>
                </div>
                
                <div class="gallery-item" data-category="heritage">
                    <img src="assets/images/gallery/varanasi1.jpg" alt="Varanasi Ghats" class="gallery-image">
                    <div class="gallery-caption">
                        <h3>Varanasi</h3>
                        <p>Ancient ghats of Varanasi along the sacred Ganges River.</p>
                    </div>
                </div>
                
                <!-- Wildlife destinations -->
                <div class="gallery-item" data-category="wildlife">
                    <img src="assets/images/gallery/ranthambore1.jpg" alt="Ranthambore Tiger" class="gallery-image">
                    <div class="gallery-caption">
                        <h3>Ranthambore</h3>
                        <p>Bengal tiger in its natural habitat at Ranthambore National Park.</p>
                    </div>
                </div>
                
                <div class="gallery-item" data-category="wildlife">
                    <img src="assets/images/gallery/kaziranga1.jpg" alt="Kaziranga Rhino" class="gallery-image">
                    <div class="gallery-caption">
                        <h3>Kaziranga</h3>
                        <p>One-horned rhinoceros at Kaziranga National Park, Assam.</p>
                    </div>
                </div>
                
                <div class="gallery-item" data-category="wildlife">
                    <img src="assets/images/gallery/corbett1.jpg" alt="Jim Corbett Park" class="gallery-image">
                    <div class="gallery-caption">
                        <h3>Jim Corbett</h3>
                        <p>Diverse wildlife at Jim Corbett National Park, Uttarakhand.</p>
                    </div>
                </div>
                
                <!-- Adventure destinations -->
                <div class="gallery-item" data-category="adventure">
                    <img src="assets/images/gallery/rishikesh1.jpg" alt="Rishikesh Rafting" class="gallery-image">
                    <div class="gallery-caption">
                        <h3>Rishikesh</h3>
                        <p>White water rafting in the rapids of the Ganges at Rishikesh.</p>
                    </div>
                </div>
                
                <div class="gallery-item" data-category="adventure">
                    <img src="assets/images/gallery/spiti1.jpg" alt="Spiti Valley" class="gallery-image">
                    <div class="gallery-caption">
                        <h3>Spiti Valley</h3>
                        <p>Adventurous road trip through the rugged terrain of Spiti Valley.</p>
                    </div>
                </div>
                
                <div class="gallery-item" data-category="adventure">
                    <img src="assets/images/gallery/andaman2.jpg" alt="Andaman Scuba" class="gallery-image">
                    <div class="gallery-caption">
                        <h3>Andaman Scuba Diving</h3>
                        <p>Exploring the vibrant underwater world through scuba diving in Andaman.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Lightbox for image preview -->
        <div class="lightbox">
            <div class="lightbox-content">
                <button class="lightbox-close">&times;</button>
                <button class="lightbox-nav lightbox-prev">&lt;</button>
                <button class="lightbox-nav lightbox-next">&gt;</button>
                <img src="" alt="" class="lightbox-image">
                <div class="lightbox-caption"></div>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Tours & Travels. All rights reserved.</p>
    </footer>

    <script src="assets/js/script.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Gallery filtering
            const filterButtons = document.querySelectorAll('.filter-btn');
            const galleryItems = document.querySelectorAll('.gallery-item');
            
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    // Get filter value
                    const filterValue = this.getAttribute('data-filter');
                    
                    // Show/hide gallery items based on filter
                    galleryItems.forEach(item => {
                        if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
            
            // Lightbox functionality
            const lightbox = document.querySelector('.lightbox');
            const lightboxImage = document.querySelector('.lightbox-image');
            const lightboxCaption = document.querySelector('.lightbox-caption');
            const lightboxClose = document.querySelector('.lightbox-close');
            const lightboxPrev = document.querySelector('.lightbox-prev');
            const lightboxNext = document.querySelector('.lightbox-next');
            
            let currentIndex = 0;
            const visibleItems = () => Array.from(galleryItems).filter(item => item.style.display !== 'none');
            
            // Open lightbox when clicking on gallery item
            galleryItems.forEach(item => {
                item.addEventListener('click', function() {
                    const items = visibleItems();
                    currentIndex = items.indexOf(this);
                    
                    const image = this.querySelector('.gallery-image');
                    const caption = this.querySelector('.gallery-caption').innerHTML;
                    
                    lightboxImage.src = image.src;
                    lightboxImage.alt = image.alt;
                    lightboxCaption.innerHTML = caption;
                    
                    lightbox.classList.add('active');
                });
            });
            
            // Close lightbox
            lightboxClose.addEventListener('click', function() {
                lightbox.classList.remove('active');
            });
            
            // Close lightbox when clicking outside the image
            lightbox.addEventListener('click', function(e) {
                if (e.target === lightbox) {
                    lightbox.classList.remove('active');
                }
            });
            
            // Navigate to previous image
            lightboxPrev.addEventListener('click', function() {
                const items = visibleItems();
                currentIndex = (currentIndex - 1 + items.length) % items.length;
                
                const item = items[currentIndex];
                const image = item.querySelector('.gallery-image');
                const caption = item.querySelector('.gallery-caption').innerHTML;
                
                lightboxImage.src = image.src;
                lightboxImage.alt = image.alt;
                lightboxCaption.innerHTML = caption;
            });
            
            // Navigate to next image
            lightboxNext.addEventListener('click', function() {
                const items = visibleItems();
                currentIndex = (currentIndex + 1) % items.length;
                
                const item = items[currentIndex];
                const image = item.querySelector('.gallery-image');
                const caption = item.querySelector('.gallery-caption').innerHTML;
                
                lightboxImage.src = image.src;
                lightboxImage.alt = image.alt;
                lightboxCaption.innerHTML = caption;
            });
            
            // Keyboard navigation
            document.addEventListener('keydown', function(e) {
                if (!lightbox.classList.contains('active')) return;
                
                if (e.key === 'Escape') {
                    lightbox.classList.remove('active');
                } else if (e.key === 'ArrowLeft') {
                    lightboxPrev.click();
                } else if (e.key === 'ArrowRight') {
                    lightboxNext.click();
                }
            });
        });
    </script>
</body>
</html>