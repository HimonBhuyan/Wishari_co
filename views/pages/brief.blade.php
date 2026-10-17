@extends('layouts.app')

@section('title', 'The Brief Estimator | Calculate Custom Gifting Quotations | WISHARI')
@section('meta_description', 'Interactive gifting budget & inclusion calculator by Wishari. Estimate bulk corporate hampers, wedding favors, and festive gift suites in real time.')

@section('content')

<!-- Brief Hero Banner -->
<section style=background: linear-gradient(135deg, var(--color-forest) 0%, #10221A 100%); color: #FFFFFF; padding: 4.5rem 0 3.5rem; text-align: center; position: relative; overflow: hidden;>
    <div style=position: absolute; top: -50%; right: -20%; width: 500px; height: 500px; background: radial-gradient(circle, rgba(197, 160, 89, 0.2) 0%, transparent 70%); pointer-events: none;></div>
    <div class=container style=position: relative; z-index: 2;>
        <span class=section-pretitle style=color: var(--color-gold-light); margin-bottom: 0.8rem;>Once we know the brief, we start creating.</span>
        <h1 style=font-family: var(--font-editorial); font-size: clamp(2.2rem, 4vw, 3.6rem); font-weight: 500; margin-bottom: 1rem; color: #FFFFFF; line-height: 1.2;>
            The Wishari <em>Brief Estimator</em>
        </h1>
        <p style=max-width: 680px; margin: 0 auto 1.8rem; font-size: 1.05rem; color: rgba(250, 248, 245, 0.88); line-height: 1.7;>
            Calculate instant per-unit budgets, sample inclusions, and projected bulk investments for corporate summits, palace weddings, or festive gifting.
        </p>

        <div style=font-size: 0.8rem; color: rgba(250, 248, 245, 0.6); display: flex; justify-content: center; align-items: center; gap: 0.5rem;>
            <a href={{ }}/ style=color: var(--color-gold-light);>Home</a>
            <span>/</span>
            <span style=color: #FFFFFF;>The Brief Estimator</span>
        </div>
    </div>
</section>

<!-- The Interactive Estimator -->
<section class=section section-bg-cream id=briefEstimatorSection>
    <div class=container>
        <div style=max-width: 1050px; margin: 0 auto; background: #FFFFFF; border-radius: var(--radius-lg); border: 1.5px solid rgba(197, 160, 89, 0.35); box-shadow: var(--shadow-lg); overflow: hidden;>
            
            <div style=padding: 2.5rem 3rem; background: linear-gradient(135deg, var(--color-cream) 0%, #F5EFE6 100%); border-bottom: 1px solid var(--color-sand);>
                <div style=display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem;>
                    <div>
                        <span class=section-pretitle style=margin-bottom: 0.3rem;>Step 1: Choose Your Celebration</span>
                        <h2 style=font-family: var(--font-editorial); font-size: 1.8rem; color: var(--color-forest); margin: 0;>What is the Occasion?</h2>
                    </div>
                    <span style=font-size: 0.8rem; background: var(--color-forest); color: var(--color-gold-light); padding: 0.4rem 1rem; border-radius: 50px; font-weight: 500;>
                        Live WhatsApp Dispatch Active
                    </span>
                </div>

                <!-- Celebration Pills -->
                <div style=display: flex; gap: 0.8rem; flex-wrap: wrap; margin-top: 1.5rem;>
                    @foreach(['celebrations'] as  => )
                        <button type=button 
                                class=celebration-pill {{ === 0 ? 'active' : '' }} 
                                data-id={{ ['id'] }} 
                                data-name={{ ['name'] }} 
                                data-avg={{ ['avg'] }}
                                style=padding: 0.75rem 1.4rem; border-radius: 50px; border: 1.5px solid var(--color-gold); background: #FFFFFF; font-family: var(--font-heading); font-size: 0.82rem; cursor: pointer; transition: var(--transition-fast); display: flex; align-items: center; gap: 0.5rem;>
                            <span>{{ ['icon'] }}</span>
                            <span>{{ ['name'] }}</span>
                        </button>
                    @endforeach
                </div>
            </div>

            <!-- Sliders and Real-time Output Grid -->
            <div style=display: grid; grid-template-columns: 1.2fr 1fr; gap: 0; min-height: 480px;>
                
                <!-- Left: Sliders Controls -->
                <div style=padding: 3rem; border-right: 1px solid var(--color-sand);>
                    
                    <!-- Guest Count Slider -->
                    <div style=margin-bottom: 2.8rem;>
                        <div style=display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 0.8rem;>
                            <div>
                                <span class=section-pretitle style=margin-bottom: 0.2rem;>Step 2: Volume</span>
                                <label style=font-family: var(--font-heading); font-size: 1rem; font-weight: 600; color: var(--color-charcoal); display: block;>
                                    Total Hampers Required
                                </label>
                            </div>
                            <span id=guestCountDisplay style=font-family: var(--font-editorial); font-size: 1.8rem; font-weight: 700; color: var(--color-forest);>
                                50 Hampers
                            </span>
                        </div>
                        <input type=range id=guestCountSlider min=15 max=350 step=5 value=50 style=width: 100%; accent-color: var(--color-forest); height: 8px; cursor: pointer;>
                        <div style=display: flex; justify-content: space-between; font-size: 0.75rem; color: var(--color-charcoal-muted); margin-top: 0.4rem;>
                            <span>15 (Intimate Curation)</span>
                            <span>150 (Summits)</span>
                            <span>350+ (Grand Weddings)</span>
                        </div>
                    </div>

                    <!-- Budget Per Unit Slider -->
                    <div style=margin-bottom: 2.5rem;>
                        <div style=display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 0.8rem;>
                            <div>
                                <span class=section-pretitle style=margin-bottom: 0.2rem;>Step 3: Budget Tier</span>
                                <label style=font-family: var(--font-heading); font-size: 1rem; font-weight: 600; color: var(--color-charcoal); display: block;>
                                    Budget Per Gift / Hamper
                                </label>
                            </div>
                            <span id=budgetDisplay style=font-family: var(--font-editorial); font-size: 1.8rem; font-weight: 700; color: var(--color-saddle);>
                                ₹4,500
                            </span>
                        </div>
                        <input type=range id=budgetSlider min=1500 max=12000 step=250 value=4500 style=width: 100%; accent-color: var(--color-saddle); height: 8px; cursor: pointer;>
                        <div style=display: flex; justify-content: space-between; font-size: 0.75rem; color: var(--color-charcoal-muted); margin-top: 0.4rem;>
                            <span>₹1,500 (Thoughtful)</span>
                            <span>₹5,000 (Executive Artisanal)</span>
                            <span>₹12,000 (Royal Silver Heritage)</span>
                        </div>
                    </div>

                    <!-- Highlights Box -->
                    <div style=background: var(--color-cream); border-left: 3px solid var(--color-gold); padding: 1.2rem 1.4rem; border-radius: 0 var(--radius-sm) var(--radius-sm) 0;>
                        <h4 style=font-family: var(--font-heading); font-size: 0.85rem; color: var(--color-forest); margin-bottom: 0.4rem; text-transform: uppercase; letter-spacing: 0.1em;>
                            ✨ Wishari Concierge Guarantee
                        </h4>
                        <p style=font-size: 0.82rem; color: var(--color-charcoal-muted); line-height: 1.6; margin: 0;>
                            Complimentary customized wax seal, gold foil monogram branding, and pre-production physical prototype for orders above 30 units.
                        </p>
                    </div>
                </div>

                <!-- Right: Live Summary & Direct WhatsApp Action -->
                <div style=padding: 3rem; background: #FAF8F5; display: flex; flex-direction: column; justify-content: space-between;>
                    <div>
                        <span class=section-pretitle style=margin-bottom: 0.4rem;>Curated Projection</span>
                        <h3 style=font-family: var(--font-editorial); font-size: 1.6rem; color: var(--color-forest); margin-bottom: 1.5rem;>
                            The Brief Overview
                        </h3>

                        <div style=background: #FFFFFF; border-radius: var(--radius-md); padding: 1.4rem; border: 1px solid var(--color-sand); margin-bottom: 1.5rem;>
                            <div style=display: flex; justify-content: space-between; padding-bottom: 0.7rem; border-bottom: 1px dashed var(--color-sand); font-size: 0.85rem;>
                                <span style=color: var(--color-charcoal-muted);>Celebration:</span>
                                <strong id=summaryCelebration style=color: var(--color-charcoal);>Corporate & Executive Summits</strong>
                            </div>
                            <div style=display: flex; justify-content: space-between; padding: 0.7rem 0; border-bottom: 1px dashed var(--color-sand); font-size: 0.85rem;>
                                <span style=color: var(--color-charcoal-muted);>Scale:</span>
                                <strong id=summaryGuests style=color: var(--color-charcoal);>50 Units</strong>
                            </div>
                            <div style=display: flex; justify-content: space-between; padding: 0.7rem 0; border-bottom: 1px dashed var(--color-sand); font-size: 0.85rem;>
                                <span style=color: var(--color-charcoal-muted);>Per Hamper Tier:</span>
                                <strong id=summaryPerHamper style=color: var(--color-saddle);>₹4,500</strong>
                            </div>
                            <div style=display: flex; justify-content: space-between; padding-top: 0.8rem; font-size: 1rem; align-items: baseline;>
                                <span style=font-weight: 600; color: var(--color-forest);>Total Estimate:</span>
                                <span id=estimatorGrandTotal style=font-family: var(--font-editorial); font-size: 1.8rem; font-weight: 700; color: var(--color-forest);>
                                    ₹2,25,000
                                </span>
                            </div>
                        </div>

                        <!-- Dynamic Suggested Inclusions -->
                        <div style=margin-bottom: 1.8rem;>
                            <h5 style=font-family: var(--font-heading); font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.12em; color: var(--color-charcoal); margin-bottom: 0.6rem;>
                                Recommended Inclusions For This Tier:
                            </h5>
                            <ul id=suggestedInclusionsList style=padding-left: 1.2rem; font-size: 0.82rem; color: var(--color-charcoal-muted); line-height: 1.6;>
                                <!-- Dynamically populated by main.js -->
                            </ul>
                        </div>
                    </div>

                    <!-- Dispatch Button -->
                    <div>
                        <button id=sendBriefWhatsApp class=btn btn-gold btn-lg style=width: 100%; box-shadow: var(--shadow-md);>
                            Send Brief to Wishari Concierge on WhatsApp
                        </button>
                        <p style=font-size: 0.72rem; text-align: center; color: var(--color-charcoal-muted); margin-top: 0.6rem;>
                            Connects directly with founders Anshu & Priya Kanoongo for samples & proposal.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- 4-Step Gifting Journey -->
<section class=section section-bg-sand>
    <div class=container>
        <div class=section-header>
            <span class=section-pretitle>The Wishari Method</span>
            <h2 class=section-title>From Concept to <em>Delighted Recipients</em></h2>
            <p class=section-subtitle>How we transform your brief into an unforgettable tangible experience.</p>
        </div>

        <div style=display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 2rem;>
            
            <div style=background: #FFFFFF; padding: 2.2rem; border-radius: var(--radius-md); border: 1px solid rgba(197,160,89,0.3); text-align: center;>
                <div style=width: 50px; height: 50px; background: var(--color-forest); color: var(--color-gold); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-family: var(--font-editorial); font-size: 1.4rem; font-weight: 700; margin: 0 auto 1.2rem;>
                    1
                </div>
                <h4 style=font-family: var(--font-heading); font-size: 1rem; color: var(--color-forest); margin-bottom: 0.6rem;>The Deep Brief</h4>
                <p style=font-size: 0.85rem; color: var(--color-charcoal-muted); line-height: 1.6;>
                    We dive into recipient demographics, brand aesthetics, occasion significance, and emotional touchpoints.
                </p>
            </div>

            <div style=background: #FFFFFF; padding: 2.2rem; border-radius: var(--radius-md); border: 1px solid rgba(197,160,89,0.3); text-align: center;>
                <div style=width: 50px; height: 50px; background: var(--color-forest); color: var(--color-gold); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-family: var(--font-editorial); font-size: 1.4rem; font-weight: 700; margin: 0 auto 1.2rem;>
                    2
                </div>
                <h4 style=font-family: var(--font-heading); font-size: 1rem; color: var(--color-forest); margin-bottom: 0.6rem;>Curation & Sample</h4>
                <p style=font-size: 0.85rem; color: var(--color-charcoal-muted); line-height: 1.6;>
                    We design bespoke digital presentation boards and courier physical unboxing prototypes directly to your desk.
                </p>
            </div>

            <div style=background: #FFFFFF; padding: 2.2rem; border-radius: var(--radius-md); border: 1px solid rgba(197,160,89,0.3); text-align: center;>
                <div style=width: 50px; height: 50px; background: var(--color-forest); color: var(--color-gold); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-family: var(--font-editorial); font-size: 1.4rem; font-weight: 700; margin: 0 auto 1.2rem;>
                    3
                </div>
                <h4 style=font-family: var(--font-heading); font-size: 1rem; color: var(--color-forest); margin-bottom: 0.6rem;>Artisanal Crafting</h4>
                <p style=font-size: 0.85rem; color: var(--color-charcoal-muted); line-height: 1.6;>
                    Jaipur master potters hand-paint jars, leather masters deboss folios, and ribbon masters hand-tie each bow.
                </p>
            </div>

            <div style=background: #FFFFFF; padding: 2.2rem; border-radius: var(--radius-md); border: 1px solid rgba(197,160,89,0.3); text-align: center;>
                <div style=width: 50px; height: 50px; background: var(--color-forest); color: var(--color-gold); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-family: var(--font-editorial); font-size: 1.4rem; font-weight: 700; margin: 0 auto 1.2rem;>
                    4
                </div>
                <h4 style=font-family: var(--font-heading); font-size: 1rem; color: var(--color-forest); margin-bottom: 0.6rem;>Seamless Delivery</h4>
                <p style=font-size: 0.85rem; color: var(--color-charcoal-muted); line-height: 1.6;>
                    Multi-location doorstep pan-India courier or synchronized palace hotel venue delivery with climate care.
                </p>
            </div>

        </div>
    </div>
</section>

@endsection