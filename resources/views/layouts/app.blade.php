<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Obtenez une assistance professionnelle pour l'activation et le dépannage de Microsoft Office. Services rapides et efficaces pour résoudre vos problèmes d'installation, d'activation de licence, d'erreurs Office et de configuration. Disponible pour particuliers et entreprises.">
    <meta name="keywords" content="activation Office, dépannage Office, Microsoft Office, assistance Office, réparation Office, licence Office">
    <meta name="author" content="OfficeSolution-Be">
    <title>Activation Office - Assistance rapide</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/toast.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "Nom de ton entreprise",
    "image": "https://salama-drc.com/images/favicon.png",
    "@id": "",
    "url": "https://salama-drc.com",
    "telephone": "+32 800 260 49",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "Adresse complète",
        "addressLocality": "Bruxelle",
        "postalCode": "Code postal",
        "addressCountry": "BE"
    },
    "geo": {
        "@type": "GeoCoordinates",
        "latitude": -4.441931,
        "longitude": 15.266293
    },
    "openingHoursSpecification": [{
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday"
        ],
        "opens": "08:00",
        "closes": "00:00"
    }],
    "sameAs": [
        "https://www.facebook.com/officesolutions-be",
        "https://www.instagram.com/officesolutions-be"
    ]
    }
    </script>
    
    @stack("styles")
</head>

<body>

<!-- Header -->
    <header class="header">
        <nav class="navbar">
            <div class="nav-container">
                <a href="/" class="nav-logo">
                    <i class="fab fa-windows"></i>
                    <span data-translate="nav.logo">Microsoft Dépannage</span>
                </a>
                <ul class="nav-menu">
                    <li><a href="/" data-translate="nav.home">Accueil</a></li>
                    <li><a href="/#services" data-translate="nav.services">Services</a></li>
                    <li><a href="/#faq" data-translate="nav.faq">FAQ</a></li>
                    <li><a href="/#testimonials" data-translate="nav.testimonials">Avis</a></li>
                    <li><a href="/#contact" data-translate="nav.contact">Contact</a></li>
                </ul>
                <div class="nav-right">
                    <div class="language-selector">
                        <select id="languageSelect">
                            <option value="fr">🇫🇷 FR</option>
                            <option value="en">🇬🇧 EN</option>
                            <option value="nl">🇳🇱 NL</option>
                        </select>
                    </div>
                    <div class="nav-toggle" id="mobile-menu">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    @yield("content")

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <a style="text-decoration:none;" class="footer-logo">
                        <i class="fab fa-windows"></i>
                        <span data-translate="nav.logo">Microsoft Dépannage</span>
                    </a>
                    <p data-translate="footer.description">
                        Professional Windows and Office activation services with lifetime support. Trusted by thousands
                        of satisfied customers worldwide.
                    </p>
                </div>

                <div class="footer-section">
                    <h4 data-translate="footer.links">Quick Links</h4>
                    <ul>
                        <li><a href="/" data-translate="footer.link.home">Home</a></li>
                        <li><a href="/#services" data-translate="footer.link.services">Services</a></li>
                        <li><a href="/#faq" data-translate="footer.link.faq">Faqs</a></li>
                        <li><a href="/#contact" data-translate="footer.link.contact">Contact</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h4 data-translate="footer.services">Services</h4>
                    <ul>
                        <li><a href="#services" data-translate="footer.service.windows">Windows Activation</a></li>
                        <li><a href="#services" data-translate="footer.service.office">Office Activation</a></li>
                        <li><a href="#services" data-translate="footer.service.repair">PC Repair</a></li>
                        <li><a href="#services" data-translate="footer.service.remote">Remote Support</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h4 data-translate="footer.contact">Contact Info</h4>
                    <ul>
                        <li><i class="fas fa-phone"></i> <span>+1 (555) 123-4567</span>
                        </li>
                        <li><i class="fas fa-envelope"></i> <a
                                href="mailTo:microsftsolutionbelgique@gmail.com"><span>microsftsolutionbelgique@gmail.com</span></a>
                        </li>
                        <li><i class="fas fa-clock"></i> <span data-translate="footer.hours">24/7 Support</span></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p data-translate="footer.copyright">
                    © 2024 Microsoft Dépannage. All rights reserved. | Privacy Policy | Terms of Service
                </p>
            </div>
        </div>
    </footer>


    <script src="js/toast.js"></script>
    <script src="js/app.js"></script>
    <script src="js/translations.js"></script>
    <script src="js/contact.js"></script>
    @stack("scripts")

</body>

</html>