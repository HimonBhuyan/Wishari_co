@extends('layouts.app')

@section('title', 'Contact & Bulk Inquiries | Jaipur Studio & Concierge | WISHARI')
@section('meta_description', 'Connect with Wishari founders Anshu & Priya Kanoongo for bespoke bulk gifting, corporate summits, wedding favours, and festive hamper consultations.')

@section('content')

<!-- Contact Hero -->
<section style="background: linear-gradient(135deg, var(--color-forest) 0%, #102119 100%); color: #FFFFFF; padding: 4.5rem 0 3.5rem; text-align: center; position: relative; overflow: hidden;">
    <div style="position: absolute; top: -50%; left: -20%; width: 500px; height: 500px; background: radial-gradient(circle, rgba(197, 160, 89, 0.15) 0%, transparent 70%); pointer-events: none;"></div>
    <div class="container" style="position: relative; z-index: 2;">
        <span class="section-pretitle" style="color: var(--color-gold-light); margin-bottom: 0.8rem;">Let us Craft Something Extraordinary</span>
        <h1 style="font-family: var(--font-editorial); font-size: clamp(2.2rem, 4vw, 3.6rem); font-weight: 500; margin-bottom: 1rem; color: #FFFFFF; line-height: 1.2;">
            Connect with <em>Wishari Concierge</em>
        </h1>
        <p style="max-width: 650px; margin: 0 auto; font-size: 1.05rem; color: rgba(250, 248, 245, 0.88); line-height: 1.7;">
            Whether you are organizing a corporate leadership conference, a destination palace wedding, or festive curations, our founders are here to tailor every detail.
        </p>

        <div style="font-size: 0.8rem; color: rgba(250, 248, 245, 0.6); display: flex; justify-content: center; align-items: center; gap: 0.5rem; margin-top: 1.2rem;">
            <a href="{{ $base_url }}/" style="color: var(--color-gold-light);">Home</a>
            <span>/</span>
            <span style="color: #FFFFFF;">Contact & Inquiries</span>
        </div>
    </div>
</section>

<!-- Contact Info Cards + Form Grid -->
<section class="section section-bg-cream">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1.5fr; gap: 3rem; align-items: start;">
            
            <!-- Left: Contact Details & Studio Presence -->
            <div>
                <div style="background: #FFFFFF; border-radius: var(--radius-md); padding: 2.2rem; border: 1px solid var(--color-sand); box-shadow: var(--shadow-sm); margin-bottom: 2rem;">
                    <span class="section-pretitle" style="justify-content: flex-start; margin-bottom: 0.5rem;">Direct Reach</span>
                    <h3 style="font-family: var(--font-editorial); font-size: 1.5rem; color: var(--color-forest); margin-bottom: 1.5rem;">The Concierge Desk</h3>
                    
                    <div style="display: flex; flex-direction: column; gap: 1.5rem;">
                        <div style="display: flex; gap: 1rem; align-items: flex-start;">
                            <div style="width: 42px; height: 42px; border-radius: 50%; background: var(--color-cream); display: flex; align-items: center; justify-content: center; color: var(--color-forest); font-size: 1.1rem; flex-shrink: 0;">
                                💬
                            </div>
                            <div>
                                <h5 style="font-family: var(--font-heading); font-size: 0.82rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--color-charcoal); margin-bottom: 0.2rem;">WhatsApp Concierge</h5>
                                <p style="font-size: 0.88rem; color: var(--color-charcoal-muted); margin: 0;">Instant responses from founders</p>
                                <a href="https://wa.me/919876543210" target="_blank" rel="noopener" style="font-size: 0.88rem; color: var(--color-forest); font-weight: 600; text-decoration: underline;">
                                    +91 98765 43210
                                </a>
                            </div>
                        </div>

                        <div style="display: flex; gap: 1rem; align-items: flex-start;">
                            <div style="width: 42px; height: 42px; border-radius: 50%; background: var(--color-cream); display: flex; align-items: center; justify-content: center; color: var(--color-forest); font-size: 1.1rem; flex-shrink: 0;">
                                📸
                            </div>
                            <div>
                                <h5 style="font-family: var(--font-heading); font-size: 0.82rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--color-charcoal); margin-bottom: 0.2rem;">Official Instagram</h5>
                                <p style="font-size: 0.88rem; color: var(--color-charcoal-muted); margin: 0;">Daily behind-the-scenes & live curations</p>
                                <a href="https://instagram.com/wishari_co" target="_blank" rel="noopener" style="font-size: 0.88rem; color: var(--color-gold); font-weight: 600;">
                                    @wishari_co
                                </a>
                            </div>
                        </div>

                        <div style="display: flex; gap: 1rem; align-items: flex-start;">
                            <div style="width: 42px; height: 42px; border-radius: 50%; background: var(--color-cream); display: flex; align-items: center; justify-content: center; color: var(--color-forest); font-size: 1.1rem; flex-shrink: 0;">
                                📍
                            </div>
                            <div>
                                <h5 style="font-family: var(--font-heading); font-size: 0.82rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--color-charcoal); margin-bottom: 0.2rem;">Jaipur Atelier & Studio</h5>
                                <p style="font-size: 0.88rem; color: var(--color-charcoal-muted); line-height: 1.6; margin: 0;">
                                    Civil Lines & Sanganer Craft Hub,<br>
                                    Jaipur, Rajasthan 302006, India
                                </p>
                            </div>
                        </div>

                        <div style="display: flex; gap: 1rem; align-items: flex-start;">
                            <div style="width: 42px; height: 42px; border-radius: 50%; background: var(--color-cream); display: flex; align-items: center; justify-content: center; color: var(--color-forest); font-size: 1.1rem; flex-shrink: 0;">
                                🏛️
                            </div>
                            <div>
                                <h5 style="font-family: var(--font-heading); font-size: 0.82rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--color-charcoal); margin-bottom: 0.2rem;">Delhi NCR Liaison</h5>
                                <p style="font-size: 0.88rem; color: var(--color-charcoal-muted); line-height: 1.6; margin: 0;">
                                    South Extension & Golf Course Road, Gurugram
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Fast WhatsApp Card -->
                <div style="background: linear-gradient(135deg, var(--color-forest) 0%, #152E22 100%); color: #FFFFFF; border-radius: var(--radius-md); padding: 2rem; border: 1px solid var(--color-gold);">
                    <h4 style="font-family: var(--font-editorial); font-size: 1.35rem; color: var(--color-gold-light); margin-bottom: 0.6rem;">
                        Need Samples on Short Notice?
                    </h4>
                    <p style="font-size: 0.85rem; color: rgba(250, 248, 245, 0.85); line-height: 1.6; margin-bottom: 1.2rem;">
                        Send us your date and event brief. We can dispatch sample boxes and material swatches via express courier within 48 hours.
                    </p>
                    <a href="https://wa.me/919876543210?text=Hi%20Wishari,%20I%20urgently%20need%20a%20sample%20curation%20proposal." target="_blank" rel="noopener" class="btn btn-gold btn-sm" style="width: 100%; text-align: center;">
                        WhatsApp Immediate Callback
                    </a>
                </div>
            </div>

            <!-- Right: Comprehensive Consultation Form -->
            <div style="background: #FFFFFF; border-radius: var(--radius-lg); padding: 3rem; border: 1.5px solid rgba(197, 160, 89, 0.35); box-shadow: var(--shadow-lg);">
                <div class="section-header" style="text-align: left; margin-bottom: 2rem;">
                    <span class="section-pretitle" style="justify-content: flex-start;">Client Concierge</span>
                    <h2 class="section-title" style="text-align: left;">Submit Your <em>Gifting Brief</em></h2>
                    <p class="section-subtitle" style="text-align: left; margin: 0;">Fill in your specifications below for a bespoke proposal and itemized quotation.</p>
                </div>

                <form id="wishariConsultationForm">
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.3rem;">
                        
                        <div>
                            <label style="font-size: 0.78rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.1em; display: block; margin-bottom: 0.4rem;">Your Name *</label>
                            <input type="text" name="name" style="width: 100%; padding: 0.85rem 1rem; border: 1.5px solid var(--color-sand); border-radius: var(--radius-sm); background: var(--color-cream);" placeholder="e.g. Shalini Agarwal" required>
                        </div>

                        <div>
                            <label style="font-size: 0.78rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.1em; display: block; margin-bottom: 0.4rem;">Company / Family Name</label>
                            <input type="text" name="company" style="width: 100%; padding: 0.85rem 1rem; border: 1.5px solid var(--color-sand); border-radius: var(--radius-sm); background: var(--color-cream);" placeholder="e.g. Acme Capital / Agarwal Family">
                        </div>

                        <div>
                            <label style="font-size: 0.78rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.1em; display: block; margin-bottom: 0.4rem;">Phone / WhatsApp *</label>
                            <input type="tel" name="phone" style="width: 100%; padding: 0.85rem 1rem; border: 1.5px solid var(--color-sand); border-radius: var(--radius-sm); background: var(--color-cream);" placeholder="+91 98765 43210" required>
                        </div>

                        <div>
                            <label style="font-size: 0.78rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.1em; display: block; margin-bottom: 0.4rem;">Email Address</label>
                            <input type="email" name="email" style="width: 100%; padding: 0.85rem 1rem; border: 1.5px solid var(--color-sand); border-radius: var(--radius-sm); background: var(--color-cream);" placeholder="client@company.com">
                        </div>

                        <div>
                            <label style="font-size: 0.78rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.1em; display: block; margin-bottom: 0.4rem;">Celebration / Occasion *</label>
                            <select name="type" style="width: 100%; padding: 0.85rem 1rem; border: 1.5px solid var(--color-sand); border-radius: var(--radius-sm); background: var(--color-cream);" required>
                                <option value="">Select Celebration</option>
                                <option value="Corporate Summit / CXO Retreat">Corporate Summit / CXO Retreat</option>
                                <option value="Diwali & Festive Gifting">Diwali & Festive Gifting</option>
                                <option value="Destination Wedding Favors">Destination Wedding Favors</option>
                                <option value="Kids Birthday Return Favours">Kids Birthday Return Favours</option>
                                <option value="Jaipur Blue Pottery Suite">Jaipur Blue Pottery Suite</option>
                                <option value="Sacred Silver & Pooja Gifting">Sacred Silver & Pooja Gifting</option>
                            </select>
                        </div>

                        <div>
                            <label style="font-size: 0.78rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.1em; display: block; margin-bottom: 0.4rem;">Estimated Hamper Quantity *</label>
                            <select name="quantity" style="width: 100%; padding: 0.85rem 1rem; border: 1.5px solid var(--color-sand); border-radius: var(--radius-sm); background: var(--color-cream);" required>
                                <option value="15 - 30 Hampers">15 - 30 Hampers</option>
                                <option value="30 - 75 Hampers" selected>30 - 75 Hampers</option>
                                <option value="75 - 150 Hampers">75 - 150 Hampers</option>
                                <option value="150 - 300+ Hampers">150 - 300+ Hampers</option>
                            </select>
                        </div>

                        <div style="grid-column: 1 / -1;">
                            <label style="font-size: 0.78rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.1em; display: block; margin-bottom: 0.4rem;">Budget Preference Per Hamper</label>
                            <select name="budget_tier" style="width: 100%; padding: 0.85rem 1rem; border: 1.5px solid var(--color-sand); border-radius: var(--radius-sm); background: var(--color-cream);">
                                <option value="₹1,500 – ₹3,000 (Thoughtful Essentials)">₹1,500 – ₹3,000 (Thoughtful Essentials)</option>
                                <option value="₹3,000 – ₹6,000 (Artisanal Luxury & Leather)" selected>₹3,000 – ₹6,000 (Artisanal Luxury & Leather)</option>
                                <option value="₹6,000 – ₹12,000+ (Royal Silver & Bespoke)">₹6,000 – ₹12,000+ (Royal Silver & Bespoke)</option>
                            </select>
                        </div>

                        <div style="grid-column: 1 / -1;">
                            <label style="font-size: 0.78rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.1em; display: block; margin-bottom: 0.4rem;">The Brief & Special Customization Requirements</label>
                            <textarea name="details" style="width: 100%; min-height: 120px; padding: 0.85rem 1rem; border: 1.5px solid var(--color-sand); border-radius: var(--radius-sm); background: var(--color-cream);" placeholder="Mention required delivery date, recipient profile, logo debossing, destination city..."></textarea>
                        </div>

                        <div style="grid-column: 1 / -1;">
                            <button type="submit" class="btn btn-forest btn-lg" style="width: 100%;">
                                Submit Gifting Brief to Wishari Concierge
                            </button>
                            <div style="font-size: 0.72rem; text-align: center; color: var(--color-charcoal-muted); margin-top: 0.6rem;">
                                Transmits directly to WhatsApp Concierge (+91 98765 43210) for instant processing.
                            </div>
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

<!-- Frequently Asked Questions -->
<section class="section section-bg-sand">
    <div class="container container-narrow">
        <div class="section-header">
            <span class="section-pretitle">Clarity & Confidence</span>
            <h2 class="section-title">Frequently Asked <em>Questions</em></h2>
            <p class="section-subtitle">Everything you need to know about partnering with Wishari.</p>
        </div>

        <div style="display: flex; flex-direction: column; gap: 1.2rem;">
            
            <div style="background: #FFFFFF; border-radius: var(--radius-md); padding: 1.8rem; border: 1px solid var(--color-sand);">
                <h4 style="font-family: var(--font-heading); font-size: 1rem; color: var(--color-forest); margin-bottom: 0.5rem;">
                    What is your Minimum Order Quantity (MOQ)?
                </h4>
                <p style="font-size: 0.88rem; color: var(--color-charcoal-muted); line-height: 1.7; margin: 0;">
                    Our catalog curations start at an MOQ of 3 to 5 units. For bespoke customized branding (debossed leather, custom foiled rigid boxes, personalized wax seals), our minimum order quantity is 25 hampers.
                </p>
            </div>

            <div style="background: #FFFFFF; border-radius: var(--radius-md); padding: 1.8rem; border: 1px solid var(--color-sand);">
                <h4 style="font-family: var(--font-heading); font-size: 1rem; color: var(--color-forest); margin-bottom: 0.5rem;">
                    Can we customize the inclusions inside each hamper?
                </h4>
                <p style="font-size: 0.88rem; color: var(--color-charcoal-muted); line-height: 1.7; margin: 0;">
                    Absolutely. As our motto states: <em>"Once we know the brief, we start creating."</em> You can mix and match items—combining Jaipur blue pottery mugs with single-estate tea, adding full-grain leather laptop sleeves, or hallmarked silver coins based on your budget tier.
                </p>
            </div>

            <div style="background: #FFFFFF; border-radius: var(--radius-md); padding: 1.8rem; border: 1px solid var(--color-sand);">
                <h4 style="font-family: var(--font-heading); font-size: 1rem; color: var(--color-forest); margin-bottom: 0.5rem;">
                    Can we inspect a physical prototype before placing a bulk order?
                </h4>
                <p style="font-size: 0.88rem; color: var(--color-charcoal-muted); line-height: 1.7; margin: 0;">
                    Yes. For confirmed corporate or wedding orders over 30 units, we courier a complete physical unboxing sample containing all selected elements, packaging, ribboning, and personalized cards for executive sign-off.
                </p>
            </div>

            <div style="background: #FFFFFF; border-radius: var(--radius-md); padding: 1.8rem; border: 1px solid var(--color-sand);">
                <h4 style="font-family: var(--font-heading); font-size: 1rem; color: var(--color-forest); margin-bottom: 0.5rem;">
                    Do you offer pan-India and venue delivery?
                </h4>
                <p style="font-size: 0.88rem; color: var(--color-charcoal-muted); line-height: 1.7; margin: 0;">
                    Yes, we provide end-to-end multi-address doorstep delivery across 19,000+ pin codes in India with live tracking. We also coordinate direct venue delivery with palace hotels and convention resorts in Jaipur, Udaipur, Delhi NCR, Mumbai, and Goa.
                </p>
            </div>

        </div>
    </div>
</section>

@endsection