@extends('layouts.app')

@section('title', 'WISHARI | The Art of Thoughtful Gifting • Handcrafted Hampers & Corporate')

@section('content')

<!-- Hero Section -->
<section class="hero-wrapper" id="hero">
    <img src="{{ $base_url }}/assets/images/blue_pottery_hero.jpg" class="hero-bg-media" alt="Wishari Handcrafted Jaipur Blue Pottery Gifting">
    <div class="hero-overlay"></div>

    <div class="container" style="position: relative; z-index: 3;">
        <div class="hero-content">
            <div class="hero-tagline-badge">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/></svg>
                THOUGHTFUL GIFTING, BEAUTIFULLY CURATED ✨
            </div>

            <h1 class="hero-title">
                The Art of <em>Thoughtful</em> Gifting
            </h1>

            <p class="hero-subtitle">
                From authentic Jaipur blue pottery and full-grain executive leather bags to auspicious silver keepsakes and festive hampers. Curated with heart for celebrations that matter.
            </p>

            <div class="hero-cta-group">
                <a href="#signatureCatalogue" class="btn btn-gold btn-lg">
                    <span>Explore Collections</span>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <a href="#briefEstimatorSection" class="btn btn-outline-white btn-lg">
                    <span>Estimate Your Brief</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Features Strip -->
<section class="features-strip">
    <div class="container">
        <div class="features-grid">
            <div class="feature-box">
                <div class="feature-icon-wrapper">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                </div>
                <div>
                    <h3 class="feature-title">Jaipur Blue Pottery</h3>
                    <p class="feature-desc">Authentic hand-painted ceramic canisters, mugs, and decor pieces by master craftspersons.</p>
                </div>
            </div>

            <div class="feature-box">
                <div class="feature-icon-wrapper">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                </div>
                <div>
                    <h3 class="feature-title">Executive Leather</h3>
                    <p class="feature-desc">Full-grain cognac and tan leather messenger bags, sleeves, and customized corporate folios.</p>
                </div>
            </div>

            <div class="feature-box">
                <div class="feature-icon-wrapper">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                <div>
                    <h3 class="feature-title">Hallmarked Silver</h3>
                    <p class="feature-desc">999 purity certified silver Ganesha idols, coins, and diyas in forest velvet presentation trunks.</p>
                </div>
            </div>

            <div class="feature-box">
                <div class="feature-icon-wrapper">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v8M8 12h8"/></svg>
                </div>
                <div>
                    <h3 class="feature-title">The Brief Concierge</h3>
                    <p class="feature-desc">Tell us the people, the budget, and the vision — we curate and deliver seamlessly.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     THE BRIEF ESTIMATOR SECTION ("Once we know the brief, we start creating")
     ========================================================================== -->
<section class="section section-bg-sand" id="briefEstimatorSection">
    <div class="container">
        <div class="section-header">
            <span class="section-pretitle">The Wishari Philosophy</span>
            <h2 class="section-title">Once We Know the Brief, <em>We Start Creating</em></h2>
            <p class="section-subtitle">"Tell us the people. Tell us the budget. Tell us what you want. That's our job." — Founders Anshu & Priya Kanoongo</p>
        </div>

        <div class="brief-estimator-card">
            <!-- Banner Header -->
            <div class="brief-banner">
                <div>
                    <span style="font-size: 0.75rem; letter-spacing: 0.18em; text-transform: uppercase; color: var(--color-gold-light);">Interactive Bulk & Event Estimator</span>
                    <h3 style="margin-top: 0.3rem;">Calculate Your Custom Hamper Suite</h3>
                </div>
                <div style="background: rgba(255,255,255,0.1); padding: 0.5rem 1.2rem; border-radius: var(--radius-full); font-size: 0.8rem; border: 1px solid rgba(197, 160, 89, 0.4);">
                    ✨ Live Estimate Generator
                </div>
            </div>

            <div class="brief-layout">
                <!-- Controls Panel -->
                <div class="brief-controls-panel">
                    <!-- Step 1: Celebration Type -->
                    <div class="brief-step-title">
                        <span>1. Select Celebration Category</span>
                    </div>
                    <div class="celebration-pill-grid">
                        @foreach($brief_estimator['celebrations'] as $idx => $cel)
                            <div class="celebration-pill {{ $idx === 0 ? 'active' : '' }}" data-id="{{ $cel['id'] }}" data-name="{{ $cel['name'] }}" data-avg="{{ $cel['avg'] }}">
                                <div style="font-size: 1.4rem; margin-bottom: 0.3rem;">{{ $cel['icon'] }}</div>
                                <div style="font-size: 0.82rem; font-weight: 600; color: var(--color-charcoal);">{{ $cel['name'] }}</div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Step 2: Scale & Hamper Count -->
                    <div class="range-slider-group">
                        <div class="range-slider-header">
                            <span class="range-slider-label">2. Order Scale / Guest Count:</span>
                            <span class="range-slider-val" id="guestCountDisplay">50 Hampers</span>
                        </div>
                        <input type="range" class="slider-input" id="guestCountSlider" min="15" max="350" step="5" value="50">
                        <div style="display: flex; justify-content: space-between; font-size: 0.72rem; color: var(--color-charcoal-muted); margin-top: 0.4rem;">
                            <span>15 Favors (Boutique)</span>
                            <span>100 Corporate Units</span>
                            <span>350+ Grand Scale</span>
                        </div>
                    </div>

                    <!-- Step 3: Budget Per Hamper -->
                    <div class="range-slider-group">
                        <div class="range-slider-header">
                            <span class="range-slider-label">3. Target Budget per Hamper:</span>
                            <span class="range-slider-val" id="budgetDisplay">₹4,500</span>
                        </div>
                        <input type="range" class="slider-input" id="budgetSlider" min="1500" max="12000" step="250" value="4500">
                        <div style="display: flex; justify-content: space-between; font-size: 0.72rem; color: var(--color-charcoal-muted); margin-top: 0.4rem;">
                            <span>₹1,500 (Thoughtful)</span>
                            <span>₹4,500 (Executive / Wedding)</span>
                            <span>₹12,000+ (Royal Silver / Silk)</span>
                        </div>
                    </div>
                </div>

                <!-- Live Summary Panel -->
                <div class="brief-summary-panel">
                    <div style="background: #FFFFFF; border-radius: var(--radius-md); padding: 1.8rem; border: 1px solid var(--color-sand); display: flex; flex-direction: column; height: 100%;">
                        <div style="padding-bottom: 1rem; border-bottom: 1px solid var(--color-sand); margin-bottom: 1.2rem;">
                            <span style="font-size: 0.72rem; color: var(--color-gold); text-transform: uppercase; font-weight: 700; letter-spacing: 0.1em;">Estimated Investment</span>
                            <div style="font-family: var(--font-editorial); font-size: 2.2rem; font-weight: 700; color: var(--color-forest); line-height: 1.1; margin-top: 0.3rem;" id="estimatorGrandTotal">₹2,25,000</div>
                        </div>

                        <div style="font-size: 0.82rem; color: var(--color-charcoal); line-height: 1.6; margin-bottom: 1.2rem;">
                            <div style="display: flex; justify-content: space-between; margin-bottom: 0.4rem;">
                                <span style="color: var(--color-charcoal-muted);">Category:</span>
                                <strong id="summaryCelebration">Corporate Summits</strong>
                            </div>
                            <div style="display: flex; justify-content: space-between; margin-bottom: 0.4rem;">
                                <span style="color: var(--color-charcoal-muted);">Quantity:</span>
                                <strong id="summaryGuests">50 Units</strong>
                            </div>
                            <div style="display: flex; justify-content: space-between;">
                                <span style="color: var(--color-charcoal-muted);">Per Unit:</span>
                                <strong id="summaryPerHamper">₹4,500</strong>
                            </div>
                        </div>

                        <!-- Dynamic Inclusions -->
                        <div style="margin-top: auto; padding-top: 1rem; border-top: 1px dashed var(--color-sand); margin-bottom: 1.5rem;">
                            <span style="font-size: 0.72rem; color: var(--color-forest); text-transform: uppercase; font-weight: 700; letter-spacing: 0.1em; display: block; margin-bottom: 0.5rem;">Curated Inclusions Preview:</span>
                            <ul id="suggestedInclusionsList" style="padding-left: 1.1rem; font-size: 0.76rem; color: var(--color-charcoal-muted); line-height: 1.5;"></ul>
                        </div>

                        <button type="button" class="btn btn-forest" id="sendBriefWhatsApp" style="width: 100%;">
                            Submit Brief on WhatsApp
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Signature Collections Catalogue -->
<section class="section section-bg-cream" id="signatureCatalogue">
    <div class="container">
        <div class="section-header">
            <span class="section-pretitle">Handcrafted & Curated</span>
            <h2 class="section-title">The Wishari <em>Signature Showcase</em></h2>
            <p class="section-subtitle">Explore authentic Jaipur Blue Pottery, Executive Leather, Hallmarked Silver, and Festive Hampers.</p>
        </div>

        <!-- Filter Tabs -->
        <div class="filter-tabs-wrapper">
            <button class="filter-tab active" data-filter="all">All Curations</button>
            <button class="filter-tab" data-filter="pottery">Jaipur Blue Pottery</button>
            <button class="filter-tab" data-filter="corporate">Executive Leather</button>
            <button class="filter-tab" data-filter="silver">Silver Gifting</button>
            <button class="filter-tab" data-filter="hampers">Curated Hampers</button>
            <button class="filter-tab" data-filter="kids">Kids Favours</button>
        </div>

        <!-- Products Grid -->
        <div class="products-grid">
            @foreach($products as $product)
                @include('partials.product_card', ['product' => $product])
            @endforeach
        </div>
    </div>
</section>

<!-- Founders Story Section -->
<section class="section section-bg-sand">
    <div class="container">
        <div class="founders-grid">
            <div style="position: relative;">
                <img src="{{ $base_url }}/assets/images/founders_card_fbs.jpg" alt="Wishari Founders Anshu Kanoongo and Priya Kanoongo" style="border-radius: var(--radius-md); box-shadow: var(--shadow-lg); width: 100%;">
                <div style="position: absolute; bottom: 1.5rem; left: 1.5rem; background: rgba(30, 58, 47, 0.9); backdrop-filter: blur(8px); color: #FFFFFF; padding: 0.8rem 1.4rem; border-radius: var(--radius-sm); border: 1px solid var(--color-gold);">
                    <div style="font-family: var(--font-heading); font-size: 0.95rem; font-weight: 600;">Anshu & Priya Kanoongo</div>
                    <div style="font-size: 0.72rem; color: var(--color-gold-light); text-transform: uppercase; letter-spacing: 0.1em;">Founders, Wishari Co.</div>
                </div>
            </div>

            <div>
                <span class="section-pretitle" style="justify-content: flex-start;">Behind The Brand</span>
                <h2 class="section-title" style="text-align: left;">Seeing the <em>Smiles & Love</em> Makes It All Worth It</h2>
                <p style="font-size: 1.05rem; color: var(--color-charcoal); line-height: 1.8; margin-bottom: 1.4rem;">
                    Founded by <strong>Anshu Kanoongo</strong> and <strong>Priya Kanoongo</strong>, <strong>WISHARI</strong> was built around a simple yet powerful conviction: gifting is an intimate emotional language, not just an exchange of items.
                </p>
                <p style="font-size: 0.95rem; color: var(--color-charcoal-muted); line-height: 1.7; margin-bottom: 1.8rem;">
                    From curating heritage invitation folios at the prestigious <em>Jai Mahal Palace (FBS Theatre of Dreams 4.0)</em> to reviving authentic blue pottery traditions and handcrafting executive leather folios for major leadership summits, every Wishari curation begins with understanding the brief deeply.
                </p>

                <div style="display: flex; gap: 1.2rem; flex-wrap: wrap;">
                    <a href="{{ $base_url }}/?page=about" class="btn btn-outline">Read Our Full Story</a>
                    <a href="https://instagram.com/wishari_co" target="_blank" rel="noopener" class="btn btn-forest">Connect on Instagram</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Instagram Live Feed Section -->
@include('partials.instagram_feed')

<!-- Consultation Form Section -->
<section class="section section-bg-cream" id="consultation">
    <div class="container container-narrow">
        <div style="background: #FFFFFF; border-radius: var(--radius-lg); padding: 3rem; border: 1px solid rgba(197, 160, 89, 0.4); box-shadow: var(--shadow-lg);">
            <div class="section-header" style="margin-bottom: 2rem;">
                <span class="section-pretitle">Start Your Curation</span>
                <h2 class="section-title">Submit Your <em>Gifting Brief</em></h2>
                <p class="section-subtitle">Corporate gifting suites, festive orders, destination wedding favors, and kids returns.</p>
            </div>

            <form id="wishariConsultationForm">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.4rem;">
                    <div>
                        <label style="font-size: 0.78rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.1em; display: block; margin-bottom: 0.4rem;">Your Name *</label>
                        <input type="text" name="name" style="width: 100%; padding: 0.85rem 1rem; border: 1.5px solid var(--color-sand); border-radius: var(--radius-sm); background: var(--color-cream);" placeholder="e.g. Shalini Agarwal" required>
                    </div>

                    <div>
                        <label style="font-size: 0.78rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.1em; display: block; margin-bottom: 0.4rem;">Phone / WhatsApp *</label>
                        <input type="tel" name="phone" style="width: 100%; padding: 0.85rem 1rem; border: 1.5px solid var(--color-sand); border-radius: var(--radius-sm); background: var(--color-cream);" placeholder="e.g. +91 98765 43210" required>
                    </div>

                    <div style="grid-column: 1 / -1;">
                        <label style="font-size: 0.78rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.1em; display: block; margin-bottom: 0.4rem;">Curation Category *</label>
                        <select name="type" style="width: 100%; padding: 0.85rem 1rem; border: 1.5px solid var(--color-sand); border-radius: var(--radius-sm); background: var(--color-cream);" required>
                            <option value="">Select Category</option>
                            <option value="Corporate Executive & Leather Sleeves">Corporate Executive & Leather Sleeves</option>
                            <option value="Jaipur Blue Pottery Suites">Jaipur Blue Pottery Suites</option>
                            <option value="Auspicious Silver Gifting">Auspicious Silver Gifting</option>
                            <option value="Festive & Bhog Thali Hampers">Festive & Bhog Thali Hampers</option>
                            <option value="Kids Birthday Return Favours">Kids Birthday Return Favours</option>
                            <option value="Destination Wedding Favors">Destination Wedding Favors</option>
                        </select>
                    </div>

                    <div style="grid-column: 1 / -1;">
                        <label style="font-size: 0.78rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.1em; display: block; margin-bottom: 0.4rem;">Tell Us About The Brief & Required Delivery Date</label>
                        <textarea name="details" style="width: 100%; min-height: 110px; padding: 0.85rem 1rem; border: 1.5px solid var(--color-sand); border-radius: var(--radius-sm); background: var(--color-cream);" placeholder="Estimated count, budget preference, branding requirements..."></textarea>
                    </div>

                    <div style="grid-column: 1 / -1; margin-top: 0.5rem;">
                        <button type="submit" class="btn btn-forest btn-lg" style="width: 100%;">
                            Submit Gifting Brief to Wishari Concierge
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
