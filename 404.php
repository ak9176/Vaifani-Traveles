<?php
// Set the HTTP response code to 404
http_response_code(404);

// Include header
include 'includes/header.php';
?>

<!-- 404 Error Page Content -->
<main>
    <section class="error-section">
        <div class="container">
            <div class="error-content">
                <div class="error-image">
                    <img src="/assets/images/404.svg" alt="404 Error" class="img-fluid">
                </div>
                <h1>404</h1>
                <h2>Page Not Found</h2>
                <p>The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
                <div class="error-actions">
                    <a href="index.php" class="btn btn-primary">Go to Homepage</a>
                    <a href="packages.php" class="btn btn-secondary">Explore Tour Packages</a>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
    .error-section {
        padding: 80px 0;
        text-align: center;
    }
    
    .error-content {
        max-width: 600px;
        margin: 0 auto;
    }
    
    .error-image {
        margin-bottom: 30px;
    }
    
    .error-image img {
        max-width: 300px;
        height: auto;
    }
    
    .error-content h1 {
        font-size: 120px;
        font-weight: 700;
        color: #3498db;
        margin: 0;
        line-height: 1;
    }
    
    .error-content h2 {
        font-size: 36px;
        margin-bottom: 20px;
        color: #2c3e50;
    }
    
    .error-content p {
        font-size: 18px;
        color: #7f8c8d;
        margin-bottom: 30px;
    }
    
    .error-actions {
        display: flex;
        justify-content: center;
        gap: 15px;
    }
    
    .error-actions .btn {
        padding: 12px 25px;
        border-radius: 4px;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
    }
    
    .error-actions .btn-primary {
        background-color: #3498db;
        border: none;
        color: white;
    }
    
    .error-actions .btn-primary:hover {
        background-color: #2980b9;
    }
    
    .error-actions .btn-secondary {
        background-color: transparent;
        border: 2px solid #3498db;
        color: #3498db;
    }
    
    .error-actions .btn-secondary:hover {
        background-color: #3498db;
        color: white;
    }
    
    @media (max-width: 768px) {
        .error-section {
            padding: 60px 0;
        }
        
        .error-content h1 {
            font-size: 80px;
        }
        
        .error-content h2 {
            font-size: 28px;
        }
        
        .error-actions {
            flex-direction: column;
            gap: 10px;
        }
    }
</style>

<?php include 'includes/footer.php'; ?>