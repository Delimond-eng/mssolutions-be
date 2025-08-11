@extends("layouts.app")

@section("content")
    <!-- hero content -->
    <section class="service-hero">
        <div class="container">
            <div class="service-hero-content">
                <div class="service-icon-large">
                    <i class="fab fa-windows" id="service-icon"></i>
                </div>
                <h1 id="service-title">Windows 10/11 Activation</h1>
                <p id="service-subtitle">Professional Windows activation with lifetime validity and full Microsoft
                    support</p>
                <a href="#contact" data-translate="detail.get.service" class="btn btn-primary">Get This Service</a>
            </div>
        </div>
    </section>

    <section class="service-details">
        <div class="container">
            <div class="details-grid">
                <div class="details-content">
                    <h2 data-translate="detail.overview">Service Overview</h2>
                    <div id="service-description">
                        <p id="service-overview">Our Windows 10/11 activation service provides you with genuine,
                            lifetime activation for your
                            Windows operating system. We use only legitimate Microsoft licenses to ensure your system
                            remains fully functional and receives all security updates.</p>

                        <h3 data-translate="detail.whats.included">What's Included:</h3>
                        <ul id="service-included">
                            <li>Genuine Windows 10/11 Pro activation</li>
                            <li>Lifetime validity - no expiration</li>
                            <li>Full Microsoft support eligibility</li>
                            <li>All Windows updates and features</li>
                            <li>Remote activation service</li>
                            <li>24/7 technical support</li>
                        </ul>

                        <h3 data-translate="detail.process">Process:</h3>
                        <ol id="service-process">
                            <li>Contact us via WhatsApp, phone, or form</li>
                            <li>We'll schedule a remote session</li>
                            <li>Our technician activates your Windows</li>
                            <li>Verification and testing</li>
                            <li>Ongoing support provided</li>
                        </ol>

                        <h3 data-translate="detail.requirements">Requirements:</h3>
                        <ul id="service-requirements">
                            <li>Windows 10 or 11 installed on your PC</li>
                            <li>Stable internet connection</li>
                            <li>Remote access software (we'll guide you)</li>
                        </ul>
                    </div>

                    <div class="service-features">
                        <h3 data-translate="detail.why.choose">Why Choose Our Service?</h3>
                        <div class="features-grid">
                            <div class="feature-item">
                                <i class="fas fa-shield-check"></i>
                                <div>
                                    <h4 data-translate="detail.genuine">100% Genuine</h4>
                                    <p data-translate="detail.genuine.desc">Only authentic Microsoft licenses</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-infinity"></i>
                                <div>
                                    <h4 data-translate="detail.lifetime">Lifetime Validity</h4>
                                    <p data-translate="detail.lifetime.desc">No expiration or renewal needed</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-headset"></i>
                                <div>
                                    <h4 data-translate="detail.support">24/7 Support</h4>
                                    <p data-translate="detail.support.desc">Always available when you need help</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-clock"></i>
                                <div>
                                    <h4 data-translate="detail.quick">Quick Service</h4>
                                    <p data-translate="detail.quick.desc">Activation completed in minutes</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="details-sidebar">
                    <div class="service-card-detail">
                        <h3 data-translate="detail.service.info">Service Information</h3>
                        <div class="info-item">
                            <span class="info-label" data-translate="detail.duration">Duration:</span>
                            <span class="info-value" id="service-duration">15-30 minutes</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label" data-translate="detail.delivery">Delivery:</span>
                            <span class="info-value" data-translate="detail.remote.service">Remote service</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label" data-translate="detail.warranty">Warranty:</span>
                            <span class="info-value" id="service-warranty">Lifetime</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label" data-translate="detail.support">Support:</span>
                            <span class="info-value">24/7 available</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- Contact Section -->
    <section id="contact" class="contact-detail">
        <div class="container">
            <div class="section-header">
                <h2 data-translate="contact.title">Ready to Get Started?</h2>
                <p data-translate="contact.subtitle">Contact us now to activate your Windows or get any other service
                </p>
            </div>
            <div class="contact-detail-content">
                <div class="contact-form-section">
                    <div class="contact-form">
                        <form id="contactForm">
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="name" data-translate="contact.form.name">Full Name</label>
                                    <input type="text" id="name" placeholder="ex: Gaston " name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email" data-translate="contact.form.email">Email Address</label>
                                    <input type="email" placeholder="example@domain" id="email" name="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone" data-translate="contact.form.phone">Phone Number</label>
                                <input type="tel" placeholder="ex: +(33)xxx" id="phone" name="phone">
                            </div>
                            <div class="form-group">
                                <label for="service" data-translate="contact.form.service">Service Needed</label>
                                <select id="service" name="service" required>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea id="message" data-translate="contact.form.message.placeholder" name="message"
                                    rows="4" placeholder="Describe your requirements..."></textarea>
                            </div>
                            <button type="submit" data-translate="contact.form.submit" class="btn btn-primary">Send
                                Message</button>
                        </form>
                    </div>
                </div>

                <div class="map-section">
                    <div class="contact-methods">
                        <div class="contact-method">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-details">
                                <h4 data-translate="contact.address.title">Address</h4>
                                <p>Avenue Louise 200, 1050 Ixelles,<br> Bruxelles, Belgique</p>
                            </div>
                        </div>
                        <div class="contact-method">
                            <a href="https://wa.me/+3280026049" class="contact-icon">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <div class="contact-details">
                                <h4 data-translate="contact.whatsapp.title">WhatsApp</h4>
                                <p>+32 800 26049</p>
                                <a href="https://wa.me/+3280026049" data-translate="contact.whatsapp.chat"
                                    class="whatsapp-link">Chat Now</a>
                            </div>
                        </div>
                        <div class="contact-method">
                            <a href="tel:+32 800 26049" class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </a>
                            <div class="contact-details">
                                <h4 data-translate="contact.phone.title">Phone Support</h4>
                                <p>+32 800 26049</p>
                                <small data-translate="contact.phone.available">Available 24/7</small>
                            </div>
                        </div>
                        <div class="contact-method">
                            <a href="mailTo:servicesoffice59@gmail.com" class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </a>
                            <div class="contact-details">
                                <h4>Email</h4>
                                <p>servicesoffice59@gmail.com</p>
                                <small data-translate="contact.email.reply">We reply within 1 hour</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2532.289549287132!2d4.365711315673428!3d50.82650187953106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c3e7e5a7df3b%3A0x2db177b43b688f99!2sAvenue%20Louise%20200%2C%201050%20Ixelles%2C%20Belgique!5e0!3m2!1sfr!2sbe!4v1689836600000"
                    width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>
@endsection

@push("styles")
    <link rel="stylesheet" href="css/detail.css">
@endpush

@push("scripts")
    <script src="js/detail.js"></script>
@endpush