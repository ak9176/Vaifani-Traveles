<?php
// Include necessary files
require_once 'includes/functions.php';
require_once 'config/database.php';

// Initialize variables
$success = false;
$error = false;
$package = null;

// Check if package ID is provided
if (isset($_GET['package_id']) && !empty($_GET['package_id'])) {
    // In a real application, you would fetch the package from the database
    // For now, we'll use a sample package if database functions aren't available
    if (function_exists('getRow')) {
        $package = getRow("SELECT * FROM packages WHERE id = ? AND status = 'active'", [$_GET['package_id']]);
    } else {
        // Sample package data
        $samplePackages = [
            '1' => [
                'id' => 1,
                'name' => 'Enchanting Manali Adventure',
                'destination' => 'Manali, Himachal Pradesh',
                'duration' => '5 Days / 4 Nights',
                'price' => 15000.00,
                'discount_price' => 12999.00
            ],
            '2' => [
                'id' => 2,
                'name' => 'Golden Triangle Tour',
                'destination' => 'Delhi-Agra-Jaipur',
                'duration' => '6 Days / 5 Nights',
                'price' => 25000.00,
                'discount_price' => 22500.00
            ],
            '3' => [
                'id' => 3,
                'name' => 'Kerala Backwaters Bliss',
                'destination' => 'Kochi-Munnar-Thekkady-Alleppey',
                'duration' => '7 Days / 6 Nights',
                'price' => 35000.00,
                'discount_price' => 32000.00
            ]
        ];
        
        $package = isset($samplePackages[$_GET['package_id']]) ? $samplePackages[$_GET['package_id']] : null;
    }
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_booking'])) {
    // Validate form data
    $name = sanitizeInput($_POST['name']);
    $email = sanitizeInput($_POST['email']);
    $phone = sanitizeInput($_POST['phone']);
    $travel_date = sanitizeInput($_POST['travel_date']);
    $adults = (int)$_POST['adults'];
    $children = isset($_POST['children']) ? (int)$_POST['children'] : 0;
    $special_requirements = isset($_POST['special_requirements']) ? sanitizeInput($_POST['special_requirements']) : '';
    $package_id = (int)$_POST['package_id'];
    
    // Basic validation
    if (empty($name) || empty($email) || empty($phone) || empty($travel_date) || $adults < 1) {
        $error = "Please fill in all required fields.";
    } elseif (!isValidEmail($email)) {
        $error = "Please enter a valid email address.";
    } elseif (!isValidPhone($phone)) {
        $error = "Please enter a valid phone number.";
    } else {
        // Calculate total amount (in a real application, this would be more complex)
        $total_amount = null;
        if ($package && isset($package['discount_price'])) {
            $total_amount = ($package['discount_price'] * $adults) + ($package['discount_price'] * 0.5 * $children);
        }
        
        // Submit booking
        $booking_data = [
            'package_id' => $package_id,
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'travel_date' => $travel_date,
            'adults' => $adults,
            'children' => $children,
            'special_requirements' => $special_requirements,
            'total_amount' => $total_amount
        ];
        
        if (submitBooking($booking_data)) {
            $success = true;
        } else {
            $error = "There was a problem submitting your booking. Please try again later.";
        }
    }
}

// Include header
include 'includes/header.php';
?>

<!-- Booking Page Content -->
<main>
    <!-- Page Banner -->
    <section class="page-banner" style="background-image: url('/assets/images/booking-banner.jpg');">
        <div class="container">
            <h1>Book Your Tour</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="packages.php">Tour Packages</a></li>
                    <?php if ($package): ?>
                        <li class="breadcrumb-item"><a href="package-details.php?id=<?php echo $package['id']; ?>"><?php echo htmlspecialchars($package['name']); ?></a></li>
                    <?php endif; ?>
                    <li class="breadcrumb-item active" aria-current="page">Booking</li>
                </ol>
            </nav>
        </div>
    </section>
    
    <!-- Booking Form Section -->
    <section class="booking-section">
        <div class="container">
            <?php if ($success): ?>
                <div class="booking-success">
                    <div class="success-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h2>Booking Inquiry Submitted Successfully!</h2>
                    <p>Thank you for your booking inquiry. Our team will contact you within 24 hours to confirm your booking details.</p>
                    <p>A confirmation email has been sent to your email address.</p>
                    <div class="success-actions">
                        <a href="index.php" class="btn btn-primary">Return to Home</a>
                        <a href="packages.php" class="btn btn-secondary">Explore More Packages</a>
                    </div>
                </div>
            <?php else: ?>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="booking-form-container">
                            <h2>Booking Form</h2>
                            
                            <?php if ($error): ?>
                                <div class="alert alert-danger">
                                    <?php echo $error; ?>
                                </div>
                            <?php endif; ?>
                            
                            <?php if (!$package): ?>
                                <div class="alert alert-warning">
                                    No package selected. <a href="packages.php">Please select a package first.</a>
                                </div>
                            <?php else: ?>
                                <form action="booking.php" method="post" id="bookingForm">
                                    <input type="hidden" name="package_id" value="<?php echo $package['id']; ?>">
                                    
                                    <div class="selected-package">
                                        <h3>Selected Package</h3>
                                        <div class="package-info">
                                            <p><strong>Package:</strong> <?php echo htmlspecialchars($package['name']); ?></p>
                                            <p><strong>Destination:</strong> <?php echo htmlspecialchars($package['destination']); ?></p>
                                            <p><strong>Duration:</strong> <?php echo htmlspecialchars($package['duration']); ?></p>
                                            <p><strong>Price:</strong> 
                                                <?php if (isset($package['discount_price']) && $package['discount_price'] < $package['price']): ?>
                                                    <span class="original-price"><?php echo formatPrice($package['price']); ?></span>
                                                    <?php echo formatPrice($package['discount_price']); ?> per person
                                                <?php else: ?>
                                                    <?php echo formatPrice($package['price']); ?> per person
                                                <?php endif; ?>
                                            </p>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="name">Full Name <span class="required">*</span></label>
                                        <input type="text" id="name" name="name" class="form-control" required>
                                    </div>
                                    
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="email">Email <span class="required">*</span></label>
                                            <input type="email" id="email" name="email" class="form-control" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="phone">Phone <span class="required">*</span></label>
                                            <input type="tel" id="phone" name="phone" class="form-control" required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="travel_date">Travel Date <span class="required">*</span></label>
                                        <input type="date" id="travel_date" name="travel_date" class="form-control" required min="<?php echo date('Y-m-d', strtotime('+3 days')); ?>">
                                    </div>
                                    
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="adults">Adults <span class="required">*</span></label>
                                            <select id="adults" name="adults" class="form-control" required>
                                                <?php for ($i = 1; $i <= 10; $i++): ?>
                                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                <?php endfor; ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="children">Children (0-12 years)</label>
                                            <select id="children" name="children" class="form-control">
                                                <?php for ($i = 0; $i <= 5; $i++): ?>
                                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                <?php endfor; ?>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="special_requirements">Special Requirements</label>
                                        <textarea id="special_requirements" name="special_requirements" class="form-control" rows="4"></textarea>
                                    </div>
                                    
                                    <div class="form-group terms-checkbox">
                                        <input type="checkbox" id="terms" name="terms" required>
                                        <label for="terms">I agree to the <a href="#" data-toggle="modal" data-target="#termsModal">Terms and Conditions</a> <span class="required">*</span></label>
                                    </div>
                                    
                                    <div class="booking-note">
                                        <p><strong>Note:</strong> This is a booking inquiry form. Our team will contact you to confirm availability and process your booking.</p>
                                    </div>
                                    
                                    <div class="form-actions">
                                        <button type="submit" name="submit_booking" class="btn btn-primary btn-block">Submit Booking Inquiry</button>
                                    </div>
                                </form>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="booking-sidebar">
                            <div class="booking-help">
                                <h3>Need Help?</h3>
                                <p>If you have any questions about the booking process, please don't hesitate to contact us.</p>
                                <ul class="contact-info">
                                    <li><i class="fas fa-phone-alt"></i> <a href="tel:+919876543210">+91 9876543210</a></li>
                                    <li><i class="fas fa-envelope"></i> <a href="mailto:bookings@toursandtravels.com">bookings@toursandtravels.com</a></li>
                                    <li><i class="fas fa-clock"></i> Mon-Sat: 9:00 AM - 6:00 PM</li>
                                </ul>
                            </div>
                            
                            <div class="booking-faq">
                                <h3>Frequently Asked Questions</h3>
                                <div class="accordion" id="bookingFaq">
                                    <div class="card">
                                        <div class="card-header" id="faqOne">
                                            <h4 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne">
                                                    How do I confirm my booking?
                                                </button>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="faqOne" data-parent="#bookingFaq">
                                            <div class="card-body">
                                                After submitting your booking inquiry, our team will contact you within 24 hours to confirm availability and provide payment instructions.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqTwo">
                                            <h4 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo">
                                                    What payment methods do you accept?
                                                </button>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="faqTwo" data-parent="#bookingFaq">
                                            <div class="card-body">
                                                We accept bank transfers, cash payments at our office, and major credit/debit cards. Payment details will be provided after booking confirmation.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faqThree">
                                            <h4 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree">
                                                    What is your cancellation policy?
                                                </button>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="faqThree" data-parent="#bookingFaq">
                                            <div class="card-body">
                                                Cancellations made 30 days or more before the travel date receive a full refund. Cancellations made 15-29 days before receive a 50% refund. Cancellations made less than 15 days before are non-refundable.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>

<!-- Terms and Conditions Modal -->
<div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="termsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="termsModalLabel">Terms and Conditions</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4>Booking Terms</h4>
                <p>By submitting a booking inquiry, you agree to the following terms and conditions:</p>
                
                <h5>1. Booking Confirmation</h5>
                <p>All bookings are subject to availability. Your booking is not confirmed until you receive a confirmation email or letter from us.</p>
                
                <h5>2. Payment</h5>
                <p>A deposit of 30% of the total tour cost is required to confirm your booking. The remaining balance must be paid at least 30 days before the departure date.</p>
                
                <h5>3. Cancellation Policy</h5>
                <p>Cancellations made 30 days or more before the travel date receive a full refund minus processing fees. Cancellations made 15-29 days before receive a 50% refund. Cancellations made less than 15 days before are non-refundable.</p>
                
                <h5>4. Travel Insurance</h5>
                <p>We strongly recommend that all travelers purchase comprehensive travel insurance to cover trip cancellation, medical emergencies, and other unforeseen circumstances.</p>
                
                <h5>5. Passport and Visas</h5>
                <p>It is the responsibility of the traveler to ensure they have valid travel documents, including passports and visas, as required for their destination.</p>
                
                <h5>6. Health and Safety</h5>
                <p>Travelers are responsible for ensuring they are fit to travel and should consult with a healthcare professional regarding any necessary vaccinations or health precautions.</p>
                
                <h5>7. Changes to Itinerary</h5>
                <p>We reserve the right to make changes to the tour itinerary due to weather conditions, transportation issues, or other unforeseen circumstances.</p>
                
                <h5>8. Liability</h5>
                <p>We are not liable for any injury, damage, loss, accident, delay, or irregularity that may be caused during the tour.</p>
                
                <h5>9. Privacy Policy</h5>
                <p>We respect your privacy and will only use your personal information for the purpose of processing your booking and providing you with relevant information about your tour.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>