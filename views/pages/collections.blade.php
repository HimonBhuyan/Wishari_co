@extends('layouts.app')

@section('title', 'Curated Collections | Jaipur Blue Pottery, Executive Leather & Luxury Hampers | WISHARI')
@section('meta_description', 'Explore Wishari''s full catalogue of handcrafted Jaipur blue pottery, premium executive leather sleeves, hallmarked silver gifts, festive bhog thalis, and bespoke birthday favours.')

@section('content')

<!-- Header Banner -->
<section style=background: linear-gradient(135deg, var(--color-forest) 0%, #12241C 100%); color: #FFFFFF; padding: 4.5rem 0 3.5rem; text-align: center; position: relative; overflow: hidden;>
    <div style=position: absolute; top: -50%; left: -20%; width: 500px; height: 500px; background: radial-gradient(circle, rgba(197, 160, 89, 0.15) 0%, transparent 70%); pointer-events: none;></div>
    <div class=container style=position: relative; z-index: 2;>
        <span class=section-pretitle style=color: var(--color-gold-light); margin-bottom: 0.8rem;>Thoughtful Gifting, Beautifully Curated</span>
        <h1 style=font-family: var(--font-editorial); font-size: clamp(2.2rem, 4vw, 3.4rem); font-weight: 500; margin-bottom: 1rem; color: #FFFFFF; line-height: 1.2;>
            The Wishari <em>Catalogue</em>
        </h1>
        <p style=max-width: 650px; margin: 0 auto 1.8rem; font-size: 1rem; color: rgba(250, 248, 245, 0.85); line-height: 1.7;>
            From royal Jaipur blue pottery and executive saddle leather to hallmarked silver and whimsical kids return favors — explore each signature curation handcrafted with precision.
        </p>

        <!-- Breadcrumbs -->
        <div style=font-size: 0.8rem; color: rgba(250, 248, 245, 0.6); display: flex; justify-content: center; align-items: center; gap: 0.5rem;>
            <a href={{ }}/ style=color: var(--color-gold-light);>Home</a>
            <span>/</span>
            <span style=color: #FFFFFF;>Collections</span>
        </div>
    </div>
</section>

<!-- Collections Grid Section -->
<section class=section section-bg-cream>
    <div class=container>
        <!-- Filter Tabs Wrapper -->
        <div class=filter-tabs-wrapper style=margin-bottom: 3rem;>
            <button class=filter-tab active data-filter=all>All Curations ({{ count() }})</button>
            <button class=filter-tab data-filter=pottery>Jaipur Blue Pottery</button>
            <button class=filter-tab data-filter=corporate>Executive Leather</button>
            <button class=filter-tab data-filter=silver>Silver Gifting</button>
            <button class=filter-tab data-filter=hampers>Curated Hampers</button>
            <button class=filter-tab data-filter=kids>Kids Favours</button>
        </div>

        <!-- Products Grid -->
        <div class=products-grid>
            @foreach( as )
                @include('partials.product_card', ['product' => ])
            @endforeach
        </div>

        <!-- Bespoke Banner -->
        <div style=margin-top: 5rem; background: linear-gradient(135deg, #FAF8F5 0%, #F3EDE2 100%); border: 1.5px dashed var(--color-gold); border-radius: var(--radius-md); padding: 3rem 2.5rem; text-align: center;>
            <span style=font-family: var(--font-heading); font-size: 0.78rem; letter-spacing: 0.2em; text-transform: uppercase; color: var(--color-saddle); font-weight: 600; display: block; margin-bottom: 0.6rem;>
                Corporate & Wedding Bespoke Orders
            </span>
            <h3 style=font-family: var(--font-editorial); font-size: 2rem; color: var(--color-forest); margin-bottom: 1rem;>
                Looking for Custom Branding or Tiered Inclusions?
            </h3>
            <p style=max-width: 620px; margin: 0 auto 1.8rem; font-size: 0.95rem; color: var(--color-charcoal-muted); line-height: 1.7;>
                We offer company logo debossing on leather sleeves, custom brass seals, personalized note cards, and tailored color palettes for orders over 25 units.
            </p>
            <div style=display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;>
                <a href={{ }}/?page=brief class=btn btn-gold>Try The Brief Estimator</a>
                <a href={{ }}/?page=contact class=btn btn-outline>Consult Our Studio</a>
            </div>
        </div>
    </div>
</section>

<!-- Instagram Highlight Ribbon -->
@include('partials.instagram_feed')

@endsection