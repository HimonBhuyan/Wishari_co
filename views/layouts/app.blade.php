<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'WISHARI | The Art of Thoughtful Gifting • Curated Hampers & Corporate')</title>
    <meta name="description" content="@yield('meta_desc', 'WISHARI - Thoughtful gifting, beautifully curated. Handcrafted Jaipur blue pottery, pure leather executive bags, silver gifting, and bespoke corporate hampers.')">
    <meta name="theme-color" content="#1E3A2F">

    <!-- OpenGraph / Social Sharing -->
    <meta property="og:title" content="WISHARI | The Art of Thoughtful Gifting">
    <meta property="og:description" content="Thoughtful gifting, beautifully curated. Handcrafted Jaipur Blue Pottery, Corporate Executive Leather, Silver Gifting, and Curated Hampers. Founders: Anshu Kanoongo & Priya Kanoongo.">
    <meta property="og:image" content="{{ $base_url }}/assets/images/blue_pottery_hero.jpg">
    <meta property="og:type" content="website">

    <!-- Favicon (Tree of Life Symbol) -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%231E3A2F'><path d='M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM13 18H11V16.9C9.25 16.66 8 15.35 8 13.5C8 12.87 8.18 12.28 8.48 11.77L9.93 12.63C9.77 12.89 9.68 13.18 9.68 13.5C9.68 14.33 10.35 15 11.18 15H12V11H10.5C9.67 11 9 10.33 9 9.5C9 8.67 9.67 8 10.5 8H11V6H13V7.1C14.75 7.34 16 8.65 16 10.5C16 11.13 15.82 11.72 15.52 12.23L14.07 11.37C14.23 11.11 14.32 10.82 14.32 10.5C14.32 9.67 13.65 9 12.82 9H12V13H13.5C14.33 13 15 13.67 15 14.5C15 15.33 14.33 16 13.5 16H13V18Z'/></svg>">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ $base_url }}/assets/css/style.css">
</head>
<body>

    <!-- Top Announcement Bar -->
    <aside class="announcement-bar">
        <div class="container">
            <span>✨ Thoughtful gifting, beautifully curated • Jaipur Blue Pottery & Bespoke Corporate Suites • Pan-India White Glove Dispatch</span>
        </div>
    </aside>

    <!-- Main Navigation Header -->
    <header class="site-header">
        <div class="container">
            <div class="nav-wrapper">
                <!-- Mobile Menu Hamburger -->
                <button class="mobile-menu-toggle" aria-label="Toggle Navigation Menu">
                    <svg width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </button>

                <!-- Brand Logo (Wishari Tree of Life with Infinity Loop) -->
                <a href="{{ $base_url }}/?page=home" class="brand-logo">
                    <svg class="brand-tree-icon" viewBox="0 0 24 24">
                        <path d="M12 2C10.5 2 9.2 2.8 8.5 4C8.2 4 7.8 4 7.5 4C5 4 3 6 3 8.5C3 10.2 4 11.7 5.4 12.4C5.1 13 5 13.7 5 14.5C5 17 7 19 9.5 19H11V22H13V19H14.5C17 19 19 17 19 14.5C19 13.7 18.9 13 18.6 12.4C20 11.7 21 10.2 21 8.5C21 6 19 4 16.5 4C16.2 4 15.8 4 15.5 4C14.8 2.8 13.5 2 12 2Z"/>
                    </svg>
                    <span class="brand-title">WISHARI</span>
                    <span class="brand-tagline">THE ART OF THOUGHTFUL GIFTING ∞</span>
                </a>

                <!-- Desktop Navigation Menu -->
                <nav>
                    <ul class="nav-menu">
                        <li><a href="{{ $base_url }}/?page=home" class="nav-link {{ $current_page === 'home' ? 'active' : '' }}">Home</a></li>
                        <li><a href="{{ $base_url }}/?page=collections" class="nav-link {{ $current_page === 'collections' ? 'active' : '' }}">Collections</a></li>
                        <li><a href="{{ $base_url }}/?page=brief" class="nav-link {{ $current_page === 'brief' ? 'active' : '' }}">The Brief Estimator</a></li>
                        <li><a href="{{ $base_url }}/?page=about" class="nav-link {{ $current_page === 'about' ? 'active' : '' }}">Our Story</a></li>
                        <li><a href="{{ $base_url }}/?page=contact" class="nav-link {{ $current_page === 'contact' ? 'active' : '' }}">Consultation</a></li>
                    </ul>
                </nav>

                <!-- Actions / Wishlist Drawer & CTA -->
                <div class="nav-actions">
                    <button class="btn-icon btn-inquiry-trigger" aria-label="View Wishlist" title="View Wishlist">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <path d="M16 10a4 4 0 0 1-8 0"></path>
                        </svg>
                        <span class="cart-badge" style="display: none;">0</span>
                    </button>

                    <a href="{{ $base_url }}/?page=brief" class="btn btn-forest btn-sm">
                        <span>Submit Brief</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile Navigation Drawer -->
    <div class="mobile-nav-backdrop" id="mobileNavBackdrop"></div>
    <div class="mobile-nav-drawer" id="mobileNavDrawer">
        <div style="display: flex; justify-content: space-between; align-items: center; padding: 1.5rem; border-bottom: 1px solid var(--color-sand); background: #FFFFFF;">
            <div class="brand-logo" style="align-items: flex-start;">
                <span class="brand-title" style="font-size: 1.4rem;">WISHARI</span>
                <span class="brand-tagline" style="font-size: 0.5rem;">THE ART OF THOUGHTFUL GIFTING ∞</span>
            </div>
            <button id="mobileDrawerClose" style="background: none; border: none; font-size: 1.4rem; cursor: pointer; color: var(--color-charcoal); padding: 0.4rem;">✕</button>
        </div>
        <div style="padding: 1.8rem 1.5rem; overflow-y: auto; flex-grow: 1; display: flex; flex-direction: column;">
            <ul style="list-style: none; display: flex; flex-direction: column; gap: 1.1rem;">
                <li><a href="{{ $base_url }}/?page=home" class="mobile-nav-link {{ $current_page === 'home' ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ $base_url }}/?page=collections" class="mobile-nav-link {{ $current_page === 'collections' ? 'active' : '' }}">Curated Collections</a></li>
                <li><a href="{{ $base_url }}/?page=brief" class="mobile-nav-link {{ $current_page === 'brief' ? 'active' : '' }}">The Brief Estimator</a></li>
                <li><a href="{{ $base_url }}/?page=about" class="mobile-nav-link {{ $current_page === 'about' ? 'active' : '' }}">Our Story & Founders</a></li>
                <li><a href="{{ $base_url }}/?page=contact" class="mobile-nav-link {{ $current_page === 'contact' ? 'active' : '' }}">Consultation & Studio</a></li>
            </ul>

            <div style="margin-top: auto; padding-top: 1.5rem; border-top: 1px solid var(--color-sand);">
                <a href="{{ $base_url }}/?page=brief" class="btn btn-forest" style="width: 100%; margin-bottom: 0.8rem;">
                    Submit Your Brief
                </a>
                <a href="https://wa.me/919876543210" target="_blank" rel="noopener" class="btn btn-gold" style="width: 100%;">
                    WhatsApp Concierge
                </a>
            </div>

            <div style="margin-top: 1rem; padding-top: 1rem; border-top: 1px dashed var(--color-sand);">
                <p style="font-size: 0.8rem; color: var(--color-charcoal-muted); margin-bottom: 0.4rem;">Founders: Anshu Kanoongo & Priya Kanoongo</p>
                <a href="https://instagram.com/wishari_co" target="_blank" rel="noopener" style="color: var(--color-forest); font-weight: 600; font-size: 0.85rem; display: inline-flex; align-items: center; gap: 0.4rem;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    @wishari_co
                </a>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Master Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-top-grid">
                <div>
                    <h3 style="font-family: var(--font-heading); font-size: 1.6rem; color: var(--color-gold-light); margin-bottom: 0.8rem; letter-spacing: 0.15em;">WISHARI</h3>
                    <p style="font-size: 0.88rem; color: rgba(250, 248, 245, 0.75); line-height: 1.7; max-width: 340px; margin-bottom: 1.2rem;">
                        The art of thoughtful gifting. Curated hampers and corporate gifting designed with heart. Founded by Anshu Kanoongo & Priya Kanoongo.
                    </p>
                    <a href="https://instagram.com/wishari_co" target="_blank" rel="noopener" style="color: var(--color-gold-light); display: inline-flex; align-items: center; gap: 0.5rem; font-weight: 600; font-size: 0.85rem;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        @wishari_co on Instagram
                    </a>
                </div>

                <div>
                    <h4 style="font-family: var(--font-heading); font-size: 0.88rem; letter-spacing: 0.15em; text-transform: uppercase; color: var(--color-gold-light); margin-bottom: 1.2rem;">Curations</h4>
                    <ul style="list-style: none; display: flex; flex-direction: column; gap: 0.7rem; font-size: 0.85rem; color: rgba(250, 248, 245, 0.75);">
                        <li><a href="{{ $base_url }}/?page=collections&cat=pottery">Jaipur Blue Pottery</a></li>
                        <li><a href="{{ $base_url }}/?page=collections&cat=corporate">Executive Leather Sleeves</a></li>
                        <li><a href="{{ $base_url }}/?page=collections&cat=silver">Auspicious Silver Gifting</a></li>
                        <li><a href="{{ $base_url }}/?page=collections&cat=hampers">Curated Festive Hampers</a></li>
                        <li><a href="{{ $base_url }}/?page=collections&cat=kids">Kids Return Favours</a></li>
                    </ul>
                </div>

                <div>
                    <h4 style="font-family: var(--font-heading); font-size: 0.88rem; letter-spacing: 0.15em; text-transform: uppercase; color: var(--color-gold-light); margin-bottom: 1.2rem;">Concierge</h4>
                    <ul style="list-style: none; display: flex; flex-direction: column; gap: 0.7rem; font-size: 0.85rem; color: rgba(250, 248, 245, 0.75);">
                        <li><a href="{{ $base_url }}/?page=brief">The Brief Estimator</a></li>
                        <li><a href="{{ $base_url }}/?page=about">Founders Story</a></li>
                        <li><a href="{{ $base_url }}/?page=contact">Bulk Orders Inquiry</a></li>
                        <li><a href="https://wa.me/919876543210" target="_blank" rel="noopener">WhatsApp Direct</a></li>
                    </ul>
                </div>

                <div>
                    <h4 style="font-family: var(--font-heading); font-size: 0.88rem; letter-spacing: 0.15em; text-transform: uppercase; color: var(--color-gold-light); margin-bottom: 1.2rem;">The Brief Hotline</h4>
                    <p style="font-size: 0.82rem; color: rgba(250, 248, 245, 0.75); margin-bottom: 1rem;">
                        "Once we know the brief, we start creating." Connect directly with founders for curated gifting suites.
                    </p>
                    <a href="https://wa.me/919876543210" target="_blank" rel="noopener" class="btn btn-gold btn-sm" style="width: 100%;">
                        Chat on WhatsApp
                    </a>
                </div>
            </div>

            <div style="display: flex; justify-content: space-between; align-items: center; padding-top: 2rem; border-top: 1px solid rgba(197, 160, 89, 0.2); font-size: 0.75rem; color: rgba(250, 248, 245, 0.6); flex-wrap: wrap; gap: 1rem;">
                <div>&copy; {{ date('Y') }} WISHARI • The Art of Thoughtful Gifting ∞ • All Rights Reserved.</div>
                <div>Jaipur • New Delhi • Pan-India Curations</div>
            </div>
        </div>
    </footer>

    <!-- Wishlist / Inquiry Drawer -->
    <div class="drawer-backdrop" id="inquiryBackdrop"></div>
    <div class="inquiry-drawer" id="inquiryDrawer">
        <div style="padding: 1.5rem 1.8rem; border-bottom: 1px solid var(--color-sand); display: flex; justify-content: space-between; align-items: center; background: var(--color-cream);">
            <div>
                <h3 style="font-family: var(--font-heading); font-size: 1.15rem; color: var(--color-forest); letter-spacing: 0.1em; text-transform: uppercase;">Curated Wishlist</h3>
                <span style="font-size: 0.72rem; color: var(--color-charcoal-muted); text-transform: uppercase; letter-spacing: 0.1em;">Private Brief & Quotation</span>
            </div>
            <button id="inquiryDrawerClose" style="background: none; border: none; font-size: 1.5rem; color: var(--color-charcoal); cursor: pointer; padding: 0.5rem;">✕</button>
        </div>
        <div style="padding: 1.8rem; overflow-y: auto; flex-grow: 1;" id="drawerItemsList"></div>
        <div style="padding: 1.5rem 1.8rem; border-top: 1px solid var(--color-sand); background: var(--color-cream);">
            <div style="display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 1.2rem;">
                <span style="font-family: var(--font-heading); font-size: 0.9rem; text-transform: uppercase; letter-spacing: 0.1em;">Total Estimate:</span>
                <span id="drawerTotalAmount" style="font-family: var(--font-editorial); font-size: 1.7rem; font-weight: 700; color: var(--color-forest);">₹0</span>
            </div>
            <button id="sendConsolidatedInquiry" class="btn btn-gold" style="width: 100%;">
                Inquire on WhatsApp Concierge
            </button>
        </div>
    </div>

    <!-- Quick View Modal -->
    <div class="modal-backdrop" id="quickViewBackdrop"></div>
    <div class="modal-container" id="quickViewModal">
        <button style="position: absolute; top: 1rem; right: 1rem; z-index: 10; width: 36px; height: 36px; border-radius: 50%; background: rgba(255,255,255,0.9); border: none; cursor: pointer; display: flex; align-items: center; justify-content: center; font-size: 1.2rem;" id="quickViewClose">✕</button>
        <div class="modal-content-grid">
            <div class="modal-media">
                <img id="modalImage" src="" alt="Wishari Hamper" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div class="modal-details" style="padding: 2.2rem; display: flex; flex-direction: column;">
                <span id="modalBadge" class="card-badge" style="position: static; display: inline-block; margin-bottom: 0.8rem; align-self: flex-start;"></span>
                <span id="modalCategory" style="font-size: 0.72rem; color: var(--color-gold); text-transform: uppercase; font-weight: 600; letter-spacing: 0.15em;"></span>
                <h3 id="modalTitle" style="font-family: var(--font-editorial); font-size: 1.8rem; font-weight: 600; margin: 0.4rem 0 0.8rem; color: var(--color-charcoal); line-height: 1.2;"></h3>
                <div id="modalPrice" style="font-family: var(--font-editorial); font-size: 1.7rem; font-weight: 700; color: var(--color-forest); margin-bottom: 1.2rem;"></div>
                <p id="modalDesc" style="font-size: 0.88rem; color: var(--color-charcoal-muted); line-height: 1.6; margin-bottom: 1.5rem;"></p>

                <div style="margin-bottom: 1.5rem;">
                    <h5 style="font-family: var(--font-heading); font-size: 0.82rem; letter-spacing: 0.12em; text-transform: uppercase; margin-bottom: 0.6rem; color: var(--color-charcoal);">What is Inside:</h5>
                    <ul id="modalIncludes" style="padding-left: 1.2rem; font-size: 0.82rem; color: var(--color-charcoal-muted); line-height: 1.6;"></ul>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; padding: 0.9rem; background: var(--color-cream); border-radius: var(--radius-sm); margin-bottom: 1.8rem; font-size: 0.78rem;">
                    <div><strong>MOQ:</strong> <span id="modalMoq"></span></div>
                    <div><strong>Lead Time:</strong> <span id="modalLead"></span></div>
                </div>

                <div style="display: flex; gap: 0.8rem; margin-top: auto;">
                    <a id="modalWhatsAppBtn" href="#" target="_blank" class="btn btn-gold" style="flex: 1.2;">
                        WhatsApp Inquiry
                    </a>
                    <button id="modalAddInquiryBtn" class="btn btn-outline" style="flex: 1;">
                        Add to Wishlist
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Floating WhatsApp Concierge Button -->
    <a href="https://wa.me/919876543210?text=Hello%20Wishari,%20I%20would%20like%20to%20consult%20regarding%20curated%20hampers%20and%20corporate%20gifting." class="floating-whatsapp" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.04 14.69 2 12.04 2Z"/>
        </svg>
        <span>Gifting Brief</span>
    </a>

    <!-- Scripts -->
    <script src="{{ $base_url }}/assets/js/main.js"></script>
</body>
</html>
