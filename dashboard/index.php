<?php include "../ad/home/process_secure.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>nockworldlogistics Courier Service || Delivery Services Worldwide</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="nockworldlogistics Courier Service || Delivery Services Worldwide [Cargo, Air Freight, Land, Sea, Delivery all over the world]"/>
    <meta name="keywords" content="nockworldlogistics Courier Service || Delivery Services Worldwide [Cargo, Air Freight, Land, Sea, Delivery all over the world]" />
    <meta name="author" content="nockworldlogistics Courier Service">
    <meta property="og:image" content="img/cargo.jpeg" />
    <meta property="og:image:url" content="img/cargo.jpeg" />
    <meta property="og:image:secure_url" content="img/cargo.jpeg" />
    <link rel="shortcut icon" type="image/png" href="img/logo-2.png">
    
    <!-- Google Translate -->
    <div id="google_translate_element"></div>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-blue: #0056b3;    /* Your site's blue */
            --primary-dark: #003366;    /* Darker blue */
            --accent-red: #8B0000;      /* Your dark red */
            --accent-light: #e63946;    /* Brighter red for highlights */
            --light-bg: #f8f9fa;        /* Light background */
            --text-dark: #212529;       /* Dark text */
            --text-light: #6c757d;      /* Light text */
            --white: #ffffff;           /* White */
            --border-radius: 8px;        /* Rounded corners */
            --box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08); /* Subtle shadows */
            --transition: all 0.3s ease; /* Smooth transitions */
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light-bg);
            color: var(--text-dark);
            line-height: 1.6;
            overflow-x: hidden;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
        }
        
        /* Header Styles */
        .main-header {
            background-color: var(--white);
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: relative;
            z-index: 1000;
        }
        
        .logo {
            height: 50px;
            transition: var(--transition);
        }
        
        /* Tracking Hero Section */
        .tracking-hero {
            background: linear-gradient(135deg, var(--primary-blue), var(--primary-dark));
            padding: 50px 0 70px;
            color: var(--white);
            position: relative;
            margin-bottom: 40px;
            text-align: center;
        }
        
        .tracking-badge {
            background-color: var(--accent-red);
            color: white;
            padding: 8px 20px;
            border-radius: 50px;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 15px;
            font-size: 14px;
        }
        
        /* Main Content */
        .container {
            max-width: 1140px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Status Card */
        .status-card {
            background: var(--white);
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            margin-bottom: 25px;
            overflow: hidden;
            transition: var(--transition);
            border-left: 4px solid var(--accent-red);
        }
        
        .status-header {
            background-color: var(--primary-blue);
            color: var(--white);
            padding: 15px 20px;
            font-size: 16px;
            font-weight: 600;
            display: flex;
            align-items: center;
        }
        
        .status-header i {
            margin-right: 10px;
            font-size: 18px;
        }
        
        .status-body {
            padding: 20px;
        }
        
       /* Progress Tracker */
.progress-tracker {
    margin: 30px 0;
    position: relative;
}

.progress-line {
    height: 6px;
    background-color: #e9ecef;
    border-radius: 3px;
    position: absolute;
    top: 20px; /* align with icons */
    left: 0;
    right: 0;
    z-index: 0;
}

.progress-fill {
    height: 100%;
    background: linear-gradient(to right, var(--accent-red), var(--accent-light));
    border-radius: 3px;
    width: 0;
    transition: all 1s ease-in-out;
}

.progress-steps {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
    position: relative;
    z-index: 1;
}

.progress-step {
    text-align: center;
    position: relative;
    flex: 1;
    padding: 0 10px;
    min-width: 80px;
}

.step-icon {
    width: 40px;
    height: 40px;
    background-color: var(--white);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 8px;
    border: 2px solid #e9ecef;
    color: var(--text-light);
    font-size: 16px;
    position: relative;
    z-index: 2;
}

.step-label {
    font-size: 12px;
    color: var(--text-light);
    font-weight: 500;
}

.step-active .step-icon {
    background-color: var(--accent-red);
    color: var(--white);
    border-color: var(--accent-red);
}

.step-active .step-label {
    color: var(--primary-blue);
    font-weight: 600;
}

/* ðŸ“± Responsive: Phone view */
@media (max-width: 600px) {
    .progress-tracker {
        padding-left: 50px; /* space for vertical line + icons */
    }

    .progress-line {
        width: 4px;
        height: 100%;
        left: 30px;  /* center of icons */
        top: 0;
        bottom: 0;
        background-color: #e9ecef;
    }

    .progress-fill {
        width: 4px;
        height: 0;
        left: 30px;
        top: 0;
        background: linear-gradient(to bottom, var(--accent-red), var(--accent-light));
        transition: height 1s ease-in-out;
        position: absolute;
    }

    .progress-steps {
        flex-direction: column;
        align-items: flex-start;
        gap: 30px;
    }

    .progress-step {
        flex: unset;
        width: 100%;
        display: flex;
        align-items: center;
        text-align: left;
    }

    .step-icon {
        margin: 0 15px 0 0; /* spacing between icon and label */
    }

    .step-label {
        font-size: 14px;
    }
}

        /* Info Cards */
        .info-card {
            background: var(--white);
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            margin-bottom: 25px;
            overflow: hidden;
        }
        
        .info-header {
            background-color: var(--primary-blue);
            color: var(--white);
            padding: 15px 20px;
            font-size: 16px;
            font-weight: 600;
            display: flex;
            align-items: center;
        }
        
        .info-header i {
            margin-right: 10px;
            font-size: 18px;
        }
        
        .info-body {
            padding: 20px;
        }
        
        .info-row {
            display: flex;
            margin-bottom: 12px;
            padding-bottom: 12px;
            border-bottom: 1px solid #eee;
        }
        
        .info-row:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }
        
        .info-label {
            flex: 0 0 40%;
            font-weight: 600;
            color: var(--primary-blue);
            font-size: 14px;
        }
        
        .info-value {
            flex: 1;
            color: var(--text-dark);
            font-size: 14px;
        }
        
        /* Timeline */
        .timeline {
            position: relative;
            padding-left: 40px;
            margin: 30px 0;
        }
        
        .timeline::before {
            content: '';
            position: absolute;
            left: 15px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, var(--primary-blue), var(--accent-red));
        }
        
        .timeline-item {
            position: relative;
            margin-bottom: 20px;
        }
        
        .timeline-dot {
            position: absolute;
            left: -40px;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-blue), var(--accent-red));
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
        }
        
        .timeline-content {
            background-color: white;
            padding: 15px;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            position: relative;
        }
        
        .timeline-content::before {
            content: '';
            position: absolute;
            left: -10px;
            top: 15px;
            width: 0;
            height: 0;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            border-right: 10px solid white;
        }
        
        .timeline-date {
            font-weight: 600;
            color: var(--accent-red);
            margin-bottom: 5px;
            font-size: 13px;
            display: flex;
            align-items: center;
        }
        
        .timeline-date i {
            margin-right: 5px;
            font-size: 12px;
        }
        
        .timeline-status {
            font-weight: 600;
            margin-bottom: 5px;
            color: var(--primary-blue);
            font-size: 14px;
        }
        
        .timeline-location {
            color: var(--primary-blue);
            font-size: 13px;
            display: flex;
            align-items: center;
        }
        
        .timeline-location i {
            margin-right: 5px;
            font-size: 12px;
        }
        
        /* Package Image */
        .package-image {
            max-width: 200px;
            height: auto;
            border-radius: var(--border-radius);
            border: 3px solid white;
            box-shadow: var(--box-shadow);
            display: block;
            margin: 20px auto;
        }
        
        /* Buttons */
        .action-btn {
            background: linear-gradient(to right, var(--primary-blue), var(--primary-dark));
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 14px;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        
        .action-btn i {
            margin-right: 8px;
            font-size: 14px;
        }
        
        .action-btn:hover {
            transform: translateY(-2px);
            color: white;
        }
        
        /* Footer */
        .main-footer {
            background: linear-gradient(135deg, var(--primary-blue), var(--primary-dark));
            color: white;
            padding: 40px 0 20px;
            margin-top: 50px;
        }
        
        .footer-heading {
            color: white;
            margin-bottom: 20px;
            font-size: 18px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-heading::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background-color: var(--accent-red);
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: var(--transition);
            font-size: 14px;
            display: flex;
            align-items: center;
        }
        
        .footer-links a i {
            margin-right: 8px;
            font-size: 12px;
            width: 15px;
            text-align: center;
        }
        
        .footer-links a:hover {
            color: white;
            transform: translateX(3px);
        }
        
        .social-links {
            display: flex;
            margin-top: 20px;
        }
        
        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 35px;
            height: 35px;
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            border-radius: 50%;
            margin-right: 10px;
            transition: var(--transition);
            font-size: 14px;
        }
        
        .social-links a:hover {
            background-color: var(--accent-red);
            transform: translateY(-3px);
        }
        
        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
            margin-top: 30px;
            text-align: center;
            font-size: 14px;
        }
        
        /* Responsive Adjustments */
        @media (max-width: 992px) {
            .container {
                max-width: 960px;
            }
            
            .info-label {
                flex: 0 0 35%;
            }
        }
        
        @media (max-width: 768px) {
            .tracking-hero {
                padding: 40px 0 60px;
            }
            
            .progress-step {
                padding: 0 5px;
            }
            
            .step-label {
                font-size: 11px;
            }
            
            .info-row {
                flex-direction: column;
            }
            
            .info-label {
                margin-bottom: 5px;
            }
        }
        
        @media (max-width: 576px) {
            .progress-steps {
                flex-wrap: wrap;
            }
            
            .progress-step {
                flex: 0 0 50%;
                margin-bottom: 15px;
            }
            
            .timeline {
                padding-left: 30px;
            }
            
            .timeline-dot {
                left: -30px;
                width: 25px;
                height: 25px;
                font-size: 12px;
            }
        }
        
        /* Print Styles */
        @media print {
            .no-print {
                display: none !important;
            }
            
            body {
                background-color: white !important;
                font-size: 12pt;
            }
            
            .status-card, .info-card {
                box-shadow: none !important;
                border: 1px solid #ddd !important;
                page-break-inside: avoid;
            }
            
            .main-footer {
                display: none;
            }
        }
    </style>
</head>

<body>
    <!-- Smartsupp Live Chat script -->
    <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = 'b539224ae1e115353ccdeb0c594ac62b21cf41e3';
        window.smartsupp||(function(d) {
            var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
            s=d.getElementsByTagName('script')[0];c=d.createElement('script');
            c.type='text/javascript';c.charset='utf-8';c.async=true;
            c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
        })(document);
    </script>
    
    <!-- Header -->
    <header class="main-header no-print">
        <div class="container">
            <center>
                <a href="index.php">
                    <img src="img/logo.png" alt="Company Logo" class="logo">
                </a>
            </center>
        </div>
    </header>
    
    <!-- Tracking Hero Section -->
    <section class="tracking-hero">
        <div class="container">
            <span class="tracking-badge">
                <i class="fas fa-shipping-fast"></i> TRACKING DETAILS
            </span>
            <h1 class="text-white mb-3">Shipment Tracking</h1>
            <p class="text-white mb-4">Tracking ID: <?php echo TRACKINGNO; ?></p>
            
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <div class="bg-white text-dark p-2 rounded">
                    <small class="d-block text-muted">Current Status</small>
                    <strong class="text-<?php 
                        if (strpos(STATUS, 'Delivered') !== false) echo 'success';
                        elseif (strpos(STATUS, 'Transit') !== false) echo 'warning';
                        else echo 'danger';
                    ?>"><?php echo STATUS; ?></strong>
                </div>
                <div class="bg-white text-dark p-2 rounded">
                    <small class="d-block text-muted">From</small>
                    <strong><?php echo ORIGIN; ?></strong>
                </div>
                <div class="bg-white text-dark p-2 rounded">
                    <small class="d-block text-muted">To</small>
                    <strong><?php echo DESTINATION; ?></strong>
                </div>
                <div class="bg-white text-dark p-2 rounded">
                    <small class="d-block text-muted">Expected Delivery</small>
                    <strong><?php echo EXP_DELIVERY_DATE; ?></strong>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Main Content -->

        
        <div class="row">
            <div class="col-lg-8">
                <!-- Package Details -->
                <div class="info-card">
                    <div class="info-header">
                        <i class="fas fa-box-open"></i> Package Details
                    </div>
                    <div class="info-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="mb-3" style="color: var(--accent-red);">
                                    <i class="fas fa-user-tie me-2"></i> Sender Information
                                </h5>
                                <div class="info-row">
                                    <div class="info-label">Name:</div>
                                    <div class="info-value"><?php echo SENDERNAME; ?></div>
                                </div>
                                <div class="info-row">
                                    <div class="info-label">Address:</div>
                                    <div class="info-value"><?php echo SHIPPER_ADDRESS; ?></div>
                                </div>
                                <div class="info-row">
                                    <div class="info-label">Origin:</div>
                                    <div class="info-value"><?php echo ORIGIN; ?></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5 class="mb-3" style="color: var(--accent-red);">
                                    <i class="fas fa-user me-2"></i> Receiver Information
                                </h5>
                                <div class="info-row">
                                    <div class="info-label">Name:</div>
                                    <div class="info-value"><?php echo RECEIVERNAME; ?></div>
                                </div>
                                <div class="info-row">
                                    <div class="info-label">Address:</div>
                                    <div class="info-value"><?php echo RECEIVER_ADDRESS; ?></div>
                                </div>
                                <div class="info-row">
                                    <div class="info-label">Destination:</div>
                                    <div class="info-value"><?php echo DESTINATION; ?></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <h5 class="mb-3" style="color: var(--accent-red);">
                                    <i class="fas fa-info-circle me-2"></i> Shipment Details
                                </h5>
                                <div class="info-row">
                                    <div class="info-label">Carrier:</div>
                                    <div class="info-value"><?php echo CARRIER_; ?></div>
                                </div>
                                <div class="info-row">
                                    <div class="info-label">Reference No:</div>
                                    <div class="info-value"><?php echo CARRIER_REF; ?></div>
                                </div>
                                <div class="info-row">
                                    <div class="info-label">Shipment Mode:</div>
                                    <div class="info-value"><?php echo SHIPMENT_M; ?></div>
                                </div>
                                <div class="info-row">
                                    <div class="info-label">Type:</div>
                                    <div class="info-value"><?php echo TYPE_SHIPMENT; ?></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5 class="mb-3" style="color: var(--accent-red);">
                                    <i class="fas fa-clock me-2"></i> Timing Information
                                </h5>
                                
                                <!--   <div class="info-row">-->
                                <!--    <div class="info-label">Departure Time:</div>-->
                                <!--    <div class="info-value"><?php echo DEPART_TIME; ?></div>-->
                                <!--</div>-->
                                
                                <?php if (!empty(DEPART_TIME)): ?>
    <div class="info-row">
        <div class="info-label">Departure Time:</div>
        <div class="info-value"><?php echo DEPART_TIME; ?></div>
    </div>
<?php endif; ?>

                                
                                 <div class="info-row">
                                    <div class="info-label">Expected Delivery:</div>
                                    <div class="info-value"><?php echo EXP_DELIVERY_DATE; ?></div>
                                </div>
                                
                                <div class="info-row">
                                    <div class="info-label">Pickup Date:</div>
                                    <div class="info-value"><?php echo PICKUP_DATE; ?></div>
                                </div>
                                <div class="info-row">
                                    <div class="info-label">Pickup Time:</div>
                                    <div class="info-value"><?php echo PICKUP_TIME; ?></div>
                                </div>
                               
                             
                            </div>
                        </div>
                        
                        <?php if (!empty(QUANT) || !empty(PIECE_TYPE) || !empty(HEIGHT) || !empty(WEIGHT) || !empty(DESCRIPTION)): ?>
                        <div class="row mt-4">
                            <div class="col-12">
                                <h5 class="mb-3" style="color: var(--accent-red);">
                                    <i class="fas fa-boxes me-2"></i> Package Specifications
                                </h5>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead style="background-color: var(--primary-blue); color: white;">
                                            <tr>
                                                <th>Qty</th>
                                                <th>Type</th>
                                                <th>Height (cm)</th>
                                                <th>Weight (kg)</th>
                                                <th>Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?php echo htmlspecialchars(QUANT); ?></td>
                                                <td><?php echo htmlspecialchars(PIECE_TYPE); ?></td>
                                                <td><?php echo htmlspecialchars(HEIGHT); ?></td>
                                                <td><?php echo htmlspecialchars(WEIGHT); ?></td>
                                                <td><?php echo htmlspecialchars(DESCRIPTION); ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        
                        <div class="row mt-4">
                            <div class="col-12">
                                <h5 class="mb-3" style="color: var(--accent-red);">
                                    <i class="fas fa-comment me-2"></i> Additional Information
                                </h5>
                                <div class="info-row">
                                    <div class="info-label">Comments:</div>
                                    <div class="info-value"><?php echo COMMENT; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Package Image -->
                <div class="text-center">
                    <img src="https://nockworldlogistics.com/ad/home/<?php echo IMAGE; ?>" 
                         alt="Package Image" 
                         class="package-image img-fluid">
                </div>
                
                <!-- Shipment History -->
                <div class="info-card">
                    <div class="info-header">
                        <i class="fas fa-history"></i> Shipment History
                    </div>
                    <div class="info-body">
                        <div class="timeline">
                            <?php
                            $with = "SELECT * FROM track_history WHERE client_user = '$user'";
                            $wit = $conn->query($with);
                            if (mysqli_num_rows($wit) > 0) {
                                while ($ro = mysqli_fetch_assoc($wit)) {
                            ?>
                            <div class="timeline-item">
                                <div class="timeline-dot">
                                    <i class="fas fa-<?php 
                                        if (strpos($ro['status'], 'Received') !== false) echo 'check';
                                        elseif (strpos($ro['status'], 'Transit') !== false) echo 'shipping-fast';
                                        elseif (strpos($ro['status'], 'Delivery') !== false) echo 'truck';
                                        elseif (strpos($ro['status'], 'Delivered') !== false) echo 'check-circle';
                                        else echo 'info';
                                    ?>"></i>
                                </div>
                                <div class="timeline-content">
                                    <div class="timeline-date">
                                        <i class="far fa-calendar-alt"></i> <?php echo $ro['date_']; ?> at <?php echo $ro['time_']; ?>
                                    </div>
                                    <div class="timeline-status">
                                        <?php echo $ro['status']; ?>
                                    </div>
                                    <div class="timeline-location">
                                        <i class="fas fa-map-marker-alt"></i> <?php echo $ro['location']; ?>
                                    </div>
                                    <?php if (!empty($ro['remarks'])): ?>
                                    <div class="timeline-remarks mt-2">
                                        <small><i class="fas fa-comment-dots"></i> <?php echo $ro['remarks']; ?></small>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php
                                }
                            } else {
                                echo '<p class="text-center text-muted">No tracking history available yet.</p>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <!-- Quick Summary -->
                <div class="info-card">
                    <div class="info-header">
                        <i class="fas fa-clipboard-list"></i> Quick Summary
                    </div>
                    <div class="info-body">
                        <div class="info-row">
                            <div class="info-label">Package Type:</div>
                            <div class="info-value"><?php echo PACKAGE; ?></div>
                        </div>
                        <div class="info-row">
                            <div class="info-label">Total Weight:</div>
                            <div class="info-value"><?php echo WEIGHT_KG; ?></div>
                        </div>
                        <div class="info-row">
                            <div class="info-label">Shipment Type:</div>
                            <div class="info-value"><?php echo TYPE_SHIPMENT; ?></div>
                        </div>
                        <div class="info-row">
                            <div class="info-label">Product:</div>
                            <div class="info-value"><?php echo PRODUCT; ?></div>
                        </div>
                        <div class="info-row">
                            <div class="info-label">Value:</div>
                            <div class="info-value"><?php echo VALUE; ?></div>
                        </div>
                        <div class="info-row">
                            <div class="info-label">Payment Mode:</div>
                            <div class="info-value"><?php echo PAYMENT_M; ?></div>
                        </div>
                        <div class="info-row">
                            <div class="info-label">Total Freight:</div>
                            <div class="info-value"><?php echo TOTAL_F; ?></div>
                        </div>
                    </div>
                </div>
                
                <!-- Shipping Route -->
                <div class="info-card">
                    <div class="info-header">
                        <i class="fas fa-route"></i> Shipping Route
                    </div>
                    <div class="info-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="text-center">
                                <div class="bg-primary-blue text-white p-2 rounded-circle d-inline-block">
                                    <i class="fas fa-map-pin"></i>
                                </div>
                                <div class="mt-2 fw-bold small"><?php echo ORIGIN; ?></div>
                            </div>
                            <div class="flex-grow-1 px-3">
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 
                                        <?php 
                                            if (STATUS == 'Order Received') echo '25%';
                                            elseif (STATUS == 'In Transit') echo '50%';
                                            elseif (STATUS == 'Out for Delivery') echo '75%';
                                            elseif (STATUS == 'Delivered') echo '100%';
                                            else echo '10%';
                                        ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <div class="bg-success text-white p-2 rounded-circle d-inline-block">
                                    <i class="fas fa-flag-checkered"></i>
                                </div>
                                <div class="mt-2 fw-bold small"><?php echo DESTINATION; ?></div>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <small class="text-muted">
                                <i class="fas fa-info-circle"></i> Current status: <?php echo STATUS; ?>
                            </small>
                        </div>
                    </div>
                </div>
                
                <!-- Actions -->
                <div class="info-card no-print">
                    <div class="info-header">
                        <i class="fas fa-cogs"></i> Actions
                    </div>
                    <div class="info-body text-center">
                        <button class="action-btn" onclick="window.print()">
                            <i class="fas fa-print"></i> Print Details
                        </button>
                    </div>
                </div>
                
                <!-- Customer Support -->
                <div class="info-card no-print">
                    <div class="info-header">
                        <i class="fas fa-headset"></i> Need Help?
                    </div>
                    <div class="info-body">
                        <p class="small">Our customer support team is available 24/7 to assist you with any questions about your shipment.</p>
                        <div class="text-center mt-3">
                            <a href="contact.php" class="action-btn">
                                <i class="fas fa-envelope"></i> Contact Support
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <footer class="main-footer no-print">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <h3 class="footer-heading">Our Services</h3>
                    <ul class="footer-links">
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Ocean Freight</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Sky Freight</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Cargo Express</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Logistics</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Warehousing</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Custom Brokerage</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <h3 class="footer-heading">Contact Us</h3>
                    <ul class="footer-links">
                        <li>
                            <a href="#"><i class="fas fa-map-marker-alt"></i> Brandenburgische Str 60 Bickenbach, Rheinland-Pfalz, Germany</a>
                        </li>
                        <li>
                            <a href="mailto:support@nockworldlogistics.com"><i class="fas fa-envelope"></i> support@nockworldlogistics.com</a>
                        </li>
                    </ul>
                    
                    <div class="social-links mt-4">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <h3 class="footer-heading">Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="index.php"><i class="fas fa-chevron-right"></i> Home</a></li>
                        <li><a href="about.php"><i class="fas fa-chevron-right"></i> About Us</a></li>
                        <li><a href="services.php"><i class="fas fa-chevron-right"></i> Services</a></li>
                        <li><a href="tracking.php"><i class="fas fa-chevron-right"></i> Track Shipment</a></li>
                        <li><a href="contact.php"><i class="fas fa-chevron-right"></i> Contact</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p class="mb-0">&copy; 2026 nockworldlogistics. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
<!--   <script>-->
<!--    $(document).ready(function() {-->
<!--        let progress = 0;-->
<!--        const status = "<?php echo STATUS; ?>";-->
        
      
<!--        if (status.includes("Received")) progress = 20;-->
<!--        else if (status.includes("Transit")) progress = 40;-->
<!--        else if (status.includes("Out for Delivery")) progress = 60;-->
<!--        else if (status.includes("In Progress")) progress = 80;-->
<!--        else if (status.includes("Delivered")) progress = 100;-->

      
<!--        if ($(window).width() <= 600) {-->
           
<!--            const totalSteps = $(".progress-step").length;-->
<!--            const activeIndex = $(".progress-step.step-active").last().index() + 1;-->
<!--            const stepHeight = $(".progress-step").outerHeight(true); -->
<!--            const fillHeight = stepHeight * (activeIndex - 1);-->

<!--            $("#shipmentProgress").css({ width: "4px" }).animate({ height: fillHeight + "px" }, 1000);-->
<!--        } else {-->
            // ðŸ’» Horizontal animation for desktop
<!--            $("#shipmentProgress").css({ height: "6px" }).animate({ width: progress + "%" }, 1000);-->
<!--        }-->
<!--    });-->
<!--</script>-->

<script>
$(document).ready(function() {
    const status = "<?php echo STATUS; ?>";
    let progress = 0;

    // Default progress mapping
    const progressMap = {
        "Received": 20,
        "Transit": 40,
        "Out for Delivery": 60,
        "In Progress": 80,
        "Delivered": 100
    };

    // Determine progress percentage
    let matched = false;
    $.each(progressMap, function(key, value) {
        if (status.includes(key)) {
            progress = value;
            matched = true;
            return false; // stop loop
        }
    });

    // ✅ If no match, assign custom progress (before "Delivered")
    if (!matched) {
        progress = 90; // place custom status before Delivered
    }

    function animateProgress() {
        if ($(window).width() <= 600) {
            // 📱 Vertical mode
            const $activeIcon = $(".progress-step.step-active .step-icon").last();
            if ($activeIcon.length) {
                const trackerTop = $(".progress-tracker").offset().top;
                const iconCenter = $activeIcon.offset().top - trackerTop + ($activeIcon.outerHeight() / 2);

                $("#shipmentProgress")
                    .css({ width: "4px", left: "30px" }) // vertical style
                    .animate({ height: iconCenter + "px" }, 1000);
            }
        } else {
            // 💻 Horizontal mode
            $("#shipmentProgress")
                .css({ height: "6px", top: "20px" }) // horizontal style
                .animate({ width: progress + "%" }, 1000);
        }
    }

    // Run animation once
    animateProgress();

    // 🔁 Re-run on window resize (e.g. rotate phone)
    $(window).on("resize", function() {
        $("#shipmentProgress").stop().css({ width: 0, height: 0 }); // reset
        animateProgress();
    });
});
</script>


</body>
</html>