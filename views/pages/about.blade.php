@extends('layouts.app')

@section('title', 'About Wishari | Founders Anshu & Priya Kanoongo | Jaipur Artisanal Gifting')
@section('meta_description', 'Discover the story of Wishari, founded by Anshu Kanoongo and Priya Kanoongo in Jaipur. Crafting bespoke corporate hampers, blue pottery, and royal gifting suites.')

@section('content')

<!-- About Hero -->
<section style="background: linear-gradient(135deg, var(--color-forest) 0%, #12221A 100%); color: #FFFFFF; padding: 5rem 0 4rem; text-align: center; position: relative; overflow: hidden;">
    <div style="position: absolute; top: -30%; left: 50%; transform: translateX(-50%); width: 600px; height: 600px; background: radial-gradient(circle, rgba(197, 160, 89, 0.12) 0%, transparent 70%); pointer-events: none;"></div>
    <div class="container" style="position: relative; z-index: 2;">
        <span class="section-pretitle" style="color: var(--color-gold-light); margin-bottom: 0.8rem;">The Founders & The Heritage</span>
        <h1 style="font-family: var(--font-editorial); font-size: clamp(2.3rem, 4.5vw, 3.8rem); font-weight: 500; margin-bottom: 1.2rem; color: #FFFFFF; line-height: 1.2;">
            The Art of <em>Thoughtful Gifting ∞</em>
        </h1>
        <p style="max-width: 700px; margin: 0 auto; font-size: 1.05rem; color: rgba(250, 248, 245, 0.88); line-height: 1.8;">
            Born in Jaipur, the cultural capital of Indian craft, Wishari translates emotional intimacy into tangible luxury. Every gift carries intention, heritage, and genuine human warmth.
        </p>
    </div>
</section>

<!-- Founders Spotlight -->
<section class="section section-bg-cream">
    <div class="container">
        <div class="founders-grid" style="align-items: center;">
            <div style="position: relative;">
                <img src="{{ $base_url }}/assets/images/founders_card_fbs.jpg" alt="Anshu Kanoongo and Priya Kanoongo, Founders of Wishari" style="border-radius: var(--radius-md); box-shadow: var(--shadow-lg); width: 100%;">
                <div style="position: absolute; bottom: 1.5rem; left: 1.5rem; right: 1.5rem; background: rgba(30, 58, 47, 0.95); backdrop-filter: blur(10px); color: #FFFFFF; padding: 1.2rem 1.6rem; border-radius: var(--radius-sm); border: 1px solid var(--color-gold);">
                    <div style="font-family: var(--font-editorial); font-size: 1.2rem; font-weight: 600; color: #FFFFFF;">Anshu Kanoongo & Priya Kanoongo</div>
                    <div style="font-size: 0.75rem; color: var(--color-gold-light); text-transform: uppercase; letter-spacing: 0.12em; margin-top: 0.2rem;">
                        Founders & Creative Directors • Jai Mahal Palace FBS 4.0
                    </div>
                </div>
            </div>

            <div>
                <span class="section-pretitle" style="justify-content: flex-start;">Our Genesis</span>
                <h2 class="section-title" style="text-align: left; margin-bottom: 1.2rem;">
                    Seeing the <em>Smiles & Love</em> Makes It All Worth It.
                </h2>
                <p style="font-size: 1.05rem; color: var(--color-charcoal); line-height: 1.8; margin-bottom: 1.2rem;">
                    When we founded <strong>WISHARI</strong>, we asked ourselves a simple question: <em>Why should corporate and celebratory gifting feel repetitive, predictable, or soulless?</em>
                </p>
                <p style="font-size: 0.95rem; color: var(--color-charcoal-muted); line-height: 1.8; margin-bottom: 1.2rem;">
                    Jaipur is steeped in hundreds of years of artisan mastery — from the iconic quartz-based blue pottery of Sanganer to master leather tanners and hand-beaten silverware. We set out to bridge this authentic heritage with modern corporate elegance and refined personal celebrations.
                </p>
                <p style="font-size: 0.95rem; color: var(--color-charcoal-muted); line-height: 1.8; margin-bottom: 1.8rem;">
                    Whether curating custom gold-foiled invitations for high-level summits at the royal <strong>Jai Mahal Palace</strong>, designing executive saddle-stitched laptop sleeves for CXO retreats, or assembling whimsical return gifts for children’s milestone birthdays, our philosophy remains anchored in one truth: <em>once we know the brief, we start creating.</em>
                </p>

                <div style="display: flex; gap: 2rem; border-top: 1px solid var(--color-sand); padding-top: 1.5rem;">
                    <div>
                        <div style="font-family: var(--font-editorial); font-size: 2.2rem; font-weight: 700; color: var(--color-forest);">100%</div>
                        <div style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--color-charcoal-muted);">Artisan Made in India</div>
                    </div>
                    <div>
                        <div style="font-family: var(--font-editorial); font-size: 2.2rem; font-weight: 700; color: var(--color-saddle);">10k+</div>
                        <div style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--color-charcoal-muted);">Curations Delivered</div>
                    </div>
                    <div>
                        <div style="font-family: var(--font-editorial); font-size: 2.2rem; font-weight: 700; color: var(--color-gold);">4.9★</div>
                        <div style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--color-charcoal-muted);">Client Satisfaction</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- The 4 Craft Pillars of Wishari -->
<section class="section section-bg-sand">
    <div class="container">
        <div class="section-header">
            <span class="section-pretitle">Bespoke Mastery</span>
            <h2 class="section-title">The Four <em>Pillars</em> of Wishari</h2>
            <p class="section-subtitle">A curated convergence of heritage artisan crafts and modern executive luxury.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 2rem;">
            
            <!-- Pillar 1: Blue Pottery -->
            <div style="background: #FFFFFF; border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-sm); border: 1px solid rgba(197,160,89,0.25);">
                <div style="height: 180px; overflow: hidden;">
                    <img src="{{ $base_url }}/assets/images/blue_pottery_hero.jpg" alt="Jaipur Blue Pottery" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div style="padding: 1.8rem;">
                    <span style="font-size: 0.72rem; color: var(--color-gold); text-transform: uppercase; font-weight: 600; letter-spacing: 0.15em;">Heritage Craft</span>
                    <h3 style="font-family: var(--font-editorial); font-size: 1.35rem; color: var(--color-forest); margin: 0.4rem 0 0.8rem;">Jaipur Blue Pottery</h3>
                    <p style="font-size: 0.85rem; color: var(--color-charcoal-muted); line-height: 1.7;">
                        Handcrafted without clay using ground quartz stone, Fuller's earth, and natural gum. Hand-painted by master artisans with cobalt blue oxide motifs.
                    </p>
                </div>
            </div>

            <!-- Pillar 2: Executive Leather -->
            <div style="background: #FFFFFF; border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-sm); border: 1px solid rgba(197,160,89,0.25);">
                <div style="height: 180px; overflow: hidden;">
                    <img src="{{ $base_url }}/assets/images/laptop_bags_sleeves.jpg" alt="Executive Leather Sleeves" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div style="padding: 1.8rem;">
                    <span style="font-size: 0.72rem; color: var(--color-saddle); text-transform: uppercase; font-weight: 600; letter-spacing: 0.15em;">Corporate Prestige</span>
                    <h3 style="font-family: var(--font-editorial); font-size: 1.35rem; color: var(--color-forest); margin: 0.4rem 0 0.8rem;">Executive Leather</h3>
                    <p style="font-size: 0.85rem; color: var(--color-charcoal-muted); line-height: 1.7;">
                        Full-grain tan and saddle brown laptop bags, portfolios, and tech sleeves featuring blind debossing of corporate insignias and plush velvet lining.
                    </p>
                </div>
            </div>

            <!-- Pillar 3: Silver Gifting -->
            <div style="background: #FFFFFF; border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-sm); border: 1px solid rgba(197,160,89,0.25);">
                <div style="height: 180px; overflow: hidden;">
                    <img src="{{ $base_url }}/assets/images/silver_gifting_set.jpg" alt="Silver Gifting Suite" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div style="padding: 1.8rem;">
                    <span style="font-size: 0.72rem; color: var(--color-gold); text-transform: uppercase; font-weight: 600; letter-spacing: 0.15em;">Sacred & Auspicious</span>
                    <h3 style="font-family: var(--font-editorial); font-size: 1.35rem; color: var(--color-forest); margin: 0.4rem 0 0.8rem;">Hallmarked Silver & Bhog</h3>
                    <p style="font-size: 0.85rem; color: var(--color-charcoal-muted); line-height: 1.7;">
                        999 pure silver Ganesha idols, hand-carved floral diyas, and authentic brass Janmashtami Bhog thalis designed to bestow blessings on momentous occasions.
                    </p>
                </div>
            </div>

            <!-- Pillar 4: Curated Celebration Hampers -->
            <div style="background: #FFFFFF; border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-sm); border: 1px solid rgba(197,160,89,0.25);">
                <div style="height: 180px; overflow: hidden;">
                    <img src="{{ $base_url }}/assets/images/brief_forest_hamper.jpg" alt="Festive Curated Hamper" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div style="padding: 1.8rem;">
                    <span style="font-size: 0.72rem; color: var(--color-forest); text-transform: uppercase; font-weight: 600; letter-spacing: 0.15em;">Signature Presentation</span>
                    <h3 style="font-family: var(--font-editorial); font-size: 1.35rem; color: var(--color-forest); margin: 0.4rem 0 0.8rem;">The Brief Hamper Suite</h3>
                    <p style="font-size: 0.85rem; color: var(--color-charcoal-muted); line-height: 1.7;">
                        Rigid keepsake boxes in forest green, custom wax-sealed calligraphy notes, roasted gourmet dry fruits, and hand-poured soy wax candles.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Call to Action -->
<section style="background: linear-gradient(135deg, var(--color-forest) 0%, #152A20 100%); color: #FFFFFF; padding: 4.5rem 0; text-align: center;">
    <div class="container container-narrow">
        <h2 style="font-family: var(--font-editorial); font-size: clamp(2rem, 3.5vw, 3rem); margin-bottom: 1rem; color: #FFFFFF;">
            Have a Celebration or Corporate Summit Coming Up?
        </h2>
        <p style="font-size: 1.05rem; color: rgba(250, 248, 245, 0.85); line-height: 1.8; margin-bottom: 2rem;">
            Share your guest count, preferred aesthetics, and date. We will present a tailored sample proposal within 24 hours.
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="{{ $base_url }}/?page=brief" class="btn btn-gold btn-lg">Calculate Your Brief</a>
            <a href="https://wa.me/919876543210" target="_blank" rel="noopener" class="btn btn-outline" style="border-color: #FFFFFF; color: #FFFFFF;">Chat with Founders</a>
        </div>
    </div>
</section>

@endsection