/**
 * WISHARI - The Art of Thoughtful Gifting
 * Client-Side Interactive Engine & Brief Estimator
 */

document.addEventListener('DOMContentLoaded', () => {
    initHeaderScroll();
    initMobileNav();
    initFilterTabs();
    initQuickView();
    initInquiryDrawer();
    initBriefEstimator();
    initConsultationForm();
});

// Toast Notifications
function showToast(message, icon = '✨') {
    let container = document.querySelector('.toast-container');
    if (!container) {
        container = document.createElement('div');
        container.className = 'toast-container';
        document.body.appendChild(container);
    }

    const toast = document.createElement('div');
    toast.className = 'toast';
    toast.style.cssText = 'background: #1E3A2F; color: #FAF8F5; border: 1px solid #C5A059; padding: 0.9rem 1.5rem; border-radius: 4px; box-shadow: 0 10px 25px rgba(0,0,0,0.2); font-size: 0.85rem; display: flex; align-items: center; gap: 0.8rem; margin-bottom: 0.8rem;';
    toast.innerHTML = `<span>${icon}</span> <span>${message}</span>`;
    container.appendChild(toast);

    setTimeout(() => {
        toast.style.opacity = '0';
        toast.style.transform = 'translateY(10px)';
        toast.style.transition = 'all 0.3s ease';
        setTimeout(() => toast.remove(), 300);
    }, 3500);
}

// Sticky Header Transition
function initHeaderScroll() {
    const header = document.querySelector('.site-header');
    if (!header) return;

    window.addEventListener('scroll', () => {
        if (window.scrollY > 40) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
}

// Mobile Menu Toggle Drawer
function initMobileNav() {
    const toggle = document.querySelector('.mobile-menu-toggle');
    const drawer = document.getElementById('mobileNavDrawer');
    const backdrop = document.getElementById('mobileNavBackdrop');
    const closeBtn = document.getElementById('mobileDrawerClose');
    const mobileLinks = document.querySelectorAll('.mobile-nav-link');

    if (!toggle || !drawer) return;

    const openDrawer = () => {
        drawer.classList.add('active');
        if (backdrop) backdrop.classList.add('active');
        document.body.style.overflow = 'hidden';
    };

    const closeDrawer = () => {
        drawer.classList.remove('active');
        if (backdrop) backdrop.classList.remove('active');
        document.body.style.overflow = '';
    };

    toggle.addEventListener('click', openDrawer);
    if (closeBtn) closeBtn.addEventListener('click', closeDrawer);
    if (backdrop) backdrop.addEventListener('click', closeDrawer);
    mobileLinks.forEach(link => link.addEventListener('click', closeDrawer));
}

// Collections Filter Tabs
function initFilterTabs() {
    const tabs = document.querySelectorAll('.filter-tab');
    const cards = document.querySelectorAll('.product-card');

    if (!tabs.length || !cards.length) return;

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            tabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');

            const filterValue = tab.getAttribute('data-filter');

            cards.forEach(card => {
                const category = card.getAttribute('data-category');
                if (filterValue === 'all' || category === filterValue) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
}

// Quick View Modal
function initQuickView() {
    const modal = document.getElementById('quickViewModal');
    const backdrop = document.getElementById('quickViewBackdrop');
    const closeBtn = document.getElementById('quickViewClose');
    const triggers = document.querySelectorAll('.btn-quick-view');

    if (!modal || !triggers.length) return;

    const closeModal = () => {
        modal.classList.remove('active');
        if (backdrop) backdrop.classList.remove('active');
    };

    triggers.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const product = JSON.parse(btn.getAttribute('data-product'));

            document.getElementById('modalImage').src = product.image;
            document.getElementById('modalCategory').textContent = product.category_label || 'Curated Curation';
            document.getElementById('modalBadge').textContent = product.badge || 'Signature';
            document.getElementById('modalTitle').textContent = product.name;
            document.getElementById('modalPrice').textContent = product.price;
            document.getElementById('modalDesc').textContent = product.description;
            document.getElementById('modalLead').textContent = product.lead_time || '3 - 5 Days';
            document.getElementById('modalMoq').textContent = product.moq || 'Single Unit';

            const includesList = document.getElementById('modalIncludes');
            includesList.innerHTML = '';
            if (product.includes && product.includes.length) {
                product.includes.forEach(item => {
                    const li = document.createElement('li');
                    li.textContent = item;
                    includesList.appendChild(li);
                });
            }

            const waBtn = document.getElementById('modalWhatsAppBtn');
            if (waBtn) {
                const text = encodeURIComponent(`Hello Wishari Team, I am inquiring about *${product.name}* (${product.price}). Could you please share bulk pricing and personalization details?`);
                waBtn.href = `https://wa.me/919876543210?text=${text}`;
            }

            const addInquiryBtn = document.getElementById('modalAddInquiryBtn');
            if (addInquiryBtn) {
                addInquiryBtn.onclick = () => {
                    addToInquiry(product);
                    closeModal();
                };
            }

            modal.classList.add('active');
            if (backdrop) backdrop.classList.add('active');
        });
    });

    if (closeBtn) closeBtn.addEventListener('click', closeModal);
    if (backdrop) backdrop.addEventListener('click', closeModal);
}

// Wishlist / Inquiry Drawer
let wishariItems = JSON.parse(localStorage.getItem('wishari_inquiry') || '[]');

function updateWishariBadges() {
    const badges = document.querySelectorAll('.cart-badge');
    badges.forEach(b => {
        b.textContent = wishariItems.length;
        b.style.display = wishariItems.length > 0 ? 'flex' : 'none';
    });
}

function addToInquiry(product) {
    wishariItems.push(product);
    localStorage.setItem('wishari_inquiry', JSON.stringify(wishariItems));
    updateWishariBadges();
    renderWishariDrawer();
    showToast(`"${product.name}" added to your curated wishlist!`);
    openWishariDrawer();
}

function openWishariDrawer() {
    const drawer = document.getElementById('inquiryDrawer');
    const backdrop = document.getElementById('inquiryBackdrop');
    if (drawer) drawer.classList.add('active');
    if (backdrop) backdrop.classList.add('active');
}

function closeWishariDrawer() {
    const drawer = document.getElementById('inquiryDrawer');
    const backdrop = document.getElementById('inquiryBackdrop');
    if (drawer) drawer.classList.remove('active');
    if (backdrop) backdrop.classList.remove('active');
}

function renderWishariDrawer() {
    const container = document.getElementById('drawerItemsList');
    const totalEl = document.getElementById('drawerTotalAmount');
    if (!container) return;

    if (wishariItems.length === 0) {
        container.innerHTML = `
            <div style="text-align: center; padding: 3rem 1rem; color: #78716C;">
                <div style="font-size: 2.2rem; margin-bottom: 0.8rem; color: #C5A059;">✨</div>
                <h4 style="font-family: 'Cinzel', serif; font-size: 1.1rem; color: #1C1917; margin-bottom: 0.4rem;">Your Wishlist is Empty</h4>
                <p style="font-size: 0.85rem;">Explore our curated hampers or submit a brief to receive a customized corporate / wedding quotation.</p>
            </div>
        `;
        if (totalEl) totalEl.textContent = '₹0';
        return;
    }

    let total = 0;
    container.innerHTML = wishariItems.map((item, index) => {
        const priceNum = item.price_num || 0;
        total += priceNum;
        return `
            <div style="display: flex; gap: 1rem; padding: 1rem 0; border-bottom: 1px solid #E5DCCE; align-items: center;">
                <img src="${item.image}" style="width: 60px; height: 60px; object-fit: cover; border-radius: 4px; border: 1px solid #E5DCCE;">
                <div style="flex-grow: 1;">
                    <div style="font-size: 0.7rem; color: #C5A059; text-transform: uppercase; font-weight: 600;">${item.category_label || 'Wishari'}</div>
                    <div style="font-family: 'Playfair Display', serif; font-size: 1.05rem; font-weight: 600; color: #1C1917; line-height: 1.2;">${item.name}</div>
                    <div style="font-size: 0.88rem; font-weight: 700; color: #1E3A2F; margin-top: 2px;">${item.price}</div>
                </div>
                <button onclick="removeFromWishari(${index})" style="background: none; border: none; color: #78716C; cursor: pointer; padding: 0.5rem; font-size: 1.1rem;">✕</button>
            </div>
        `;
    }).join('');

    if (totalEl) totalEl.textContent = '₹' + total.toLocaleString('en-IN');
}

window.removeFromWishari = function(index) {
    wishariItems.splice(index, 1);
    localStorage.setItem('wishari_inquiry', JSON.stringify(wishariItems));
    updateWishariBadges();
    renderWishariDrawer();
};

function initInquiryDrawer() {
    const drawer = document.getElementById('inquiryDrawer');
    const backdrop = document.getElementById('inquiryBackdrop');
    const closeBtn = document.getElementById('inquiryDrawerClose');
    const triggers = document.querySelectorAll('.btn-inquiry-trigger');
    const sendWhatsAppBtn = document.getElementById('sendConsolidatedInquiry');

    triggers.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            renderWishariDrawer();
            openWishariDrawer();
        });
    });

    if (closeBtn) closeBtn.addEventListener('click', closeWishariDrawer);
    if (backdrop) backdrop.addEventListener('click', closeWishariDrawer);

    if (sendWhatsAppBtn) {
        sendWhatsAppBtn.addEventListener('click', () => {
            if (wishariItems.length === 0) {
                showToast('Please add items to your wishlist first.');
                return;
            }

            let msg = `*WISHARI BULK / CONCIERGE INQUIRY*\nHello Wishari team, I would like to request a quotation for:\n\n`;
            wishariItems.forEach((item, i) => {
                msg += `${i + 1}. *${item.name}* (${item.price})\n`;
            });
            msg += `\nPlease let me know about bulk customization, packaging lead time, and shipping.`;

            window.open(`https://wa.me/919876543210?text=${encodeURIComponent(msg)}`, '_blank');
        });
    }

    updateWishariBadges();
}

// ==========================================================================
// THE BRIEF ESTIMATOR ENGINE
// "Once we know the brief, we start creating."
// ==========================================================================
function initBriefEstimator() {
    const root = document.getElementById('briefEstimatorSection');
    if (!root) return;

    const state = {
        celebration: 'Corporate & Executive Summits',
        guestCount: 50,
        budgetPerHamper: 4500
    };

    const pills = root.querySelectorAll('.celebration-pill');
    const guestSlider = document.getElementById('guestCountSlider');
    const guestValEl = document.getElementById('guestCountDisplay');
    const budgetSlider = document.getElementById('budgetSlider');
    const budgetValEl = document.getElementById('budgetDisplay');
    
    const summaryCelebration = document.getElementById('summaryCelebration');
    const summaryGuests = document.getElementById('summaryGuests');
    const summaryPerHamper = document.getElementById('summaryPerHamper');
    const grandTotalEl = document.getElementById('estimatorGrandTotal');
    const inclusionsEl = document.getElementById('suggestedInclusionsList');
    const sendBriefBtn = document.getElementById('sendBriefWhatsApp');

    function updateEstimator() {
        const total = state.guestCount * state.budgetPerHamper;

        if (guestValEl) guestValEl.textContent = state.guestCount + ' Hampers';
        if (budgetValEl) budgetValEl.textContent = '₹' + state.budgetPerHamper.toLocaleString('en-IN');

        if (summaryCelebration) summaryCelebration.textContent = state.celebration;
        if (summaryGuests) summaryGuests.textContent = state.guestCount + ' Units';
        if (summaryPerHamper) summaryPerHamper.textContent = '₹' + state.budgetPerHamper.toLocaleString('en-IN');
        if (grandTotalEl) grandTotalEl.textContent = '₹' + total.toLocaleString('en-IN');

        // Dynamic Curation Suggestions based on budget
        let inclusions = [];
        if (state.budgetPerHamper < 2500) {
            inclusions = [
                'Bespoke Rigid Wishari Gift Box with Golden Tree Logo',
                'Custom Laser-Printed Client Monogram Sleeve',
                'Roasted Salted Dry Fruits Jar (200g)',
                'Handmade Calligraphy Message Card'
            ];
        } else if (state.budgetPerHamper < 5000) {
            inclusions = [
                'Handcrafted Jaipur Blue Pottery Jar OR Genuine Leather Document Sleeve',
                'Pair of Roasted Afghani Nuts in Hexagonal Gold Lidded Jars (300g)',
                'Artisanal Belgian Dark Chocolate Sea-Salt Thins',
                'Hand-Poured Soy Wax Amber Scented Candle',
                'Signature Forest Green Rigid Trunk with Moss Green Ribbon'
            ];
        } else {
            inclusions = [
                'Hallmarked 999 Pure Silver Ganesha Coin / Diya Set',
                'Handcrafted Solid Teakwood or Hammered Silver Platter',
                'Pure Kashmiri Saffron & Gold Vark Royal Mithai (400g)',
                'Custom Laser-Debossed Leather Folio with Guest Initials',
                'Bespoke Wax-Sealed Personalized Vows & Invitation Folio'
            ];
        }

        if (inclusionsEl) {
            inclusionsEl.innerHTML = inclusions.map(inc => `<li style="margin-bottom: 0.5rem;">${inc}</li>`).join('');
        }
    }

    pills.forEach(pill => {
        pill.addEventListener('click', () => {
            pills.forEach(p => p.classList.remove('active'));
            pill.classList.add('active');
            state.celebration = pill.getAttribute('data-name');
            const defaultAvg = parseInt(pill.getAttribute('data-avg') || '4500');
            state.budgetPerHamper = defaultAvg;
            if (budgetSlider) budgetSlider.value = defaultAvg;
            updateEstimator();
        });
    });

    if (guestSlider) {
        guestSlider.addEventListener('input', (e) => {
            state.guestCount = parseInt(e.target.value);
            updateEstimator();
        });
    }

    if (budgetSlider) {
        budgetSlider.addEventListener('input', (e) => {
            state.budgetPerHamper = parseInt(e.target.value);
            updateEstimator();
        });
    }

    if (sendBriefBtn) {
        sendBriefBtn.addEventListener('click', () => {
            const total = state.guestCount * state.budgetPerHamper;
            const msg = `*WISHARI BRIEF ESTIMATE*\n"Once we know the brief, we start creating."\n\n` +
                `• *Celebration / Occasion:* ${state.celebration}\n` +
                `• *Scale of Order:* ${state.guestCount} Hampers\n` +
                `• *Budget Per Hamper:* ₹${state.budgetPerHamper.toLocaleString('en-IN')}\n` +
                `• *Estimated Investment:* ₹${total.toLocaleString('en-IN')}\n\n` +
                `Please connect me with founders Anshu & Priya Kanoongo to finalize curation and sampling.`;

            window.open(`https://wa.me/919876543210?text=${encodeURIComponent(msg)}`, '_blank');
        });
    }

    updateEstimator();
}

// Consultation Form
function initConsultationForm() {
    const form = document.getElementById('wishariConsultationForm');
    if (!form) return;

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const name = form.querySelector('[name="name"]').value;
        const phone = form.querySelector('[name="phone"]').value;
        const type = form.querySelector('[name="type"]').value;
        const details = form.querySelector('[name="details"]').value;

        showToast(`Thank you, ${name}! Your brief has been received.`);

        const msg = `*NEW WISHARI CONSULTATION REQUEST*\n` +
            `• *Name:* ${name}\n` +
            `• *Phone:* ${phone}\n` +
            `• *Category:* ${type}\n` +
            `• *Brief Details:* ${details}\n`;

        setTimeout(() => {
            window.open(`https://wa.me/919876543210?text=${encodeURIComponent(msg)}`, '_blank');
            form.reset();
        }, 1200);
    });
}


// ==========================================================================
// INTERNATIONAL CURRENCY SWITCHER (INR, USD, AED, GBP)
// ==========================================================================
const CURRENCIES = {
    INR: { code: "INR", symbol: "?", rate: 1.0, flag: "????" },
    USD: { code: "USD", symbol: "$", rate: 0.0119, flag: "????" },
    AED: { code: "AED", symbol: "AED ", rate: 0.0438, flag: "????" },
    GBP: { code: "GBP", symbol: "?", rate: 0.00925, flag: "????" }
};

let currentCurrency = localStorage.getItem("wishari_currency") || "INR";

function formatPrice(amountInINR) {
    const curr = CURRENCIES[currentCurrency] || CURRENCIES.INR;
    const converted = amountInINR * curr.rate;
    
    if (curr.code === "INR") {
        return "?" + Math.round(converted).toLocaleString("en-IN");
    } else {
        return curr.symbol + Math.round(converted).toLocaleString("en-US");
    }
}

window.formatPrice = formatPrice;

function setCurrency(newCurr) {
    if (!CURRENCIES[newCurr]) return;
    currentCurrency = newCurr;
    localStorage.setItem("wishari_currency", newCurr);

    document.querySelectorAll(".currency-selector").forEach(sel => {
        sel.value = newCurr;
    });

    document.querySelectorAll("[data-base-price]").forEach(el => {
        const base = parseFloat(el.getAttribute("data-base-price"));
        if (!isNaN(base)) {
            el.textContent = formatPrice(base);
        }
    });

    if (typeof window.updateWishariEstimator === "function") {
        window.updateWishariEstimator();
    }

    if (typeof renderWishariDrawer === "function") {
        renderWishariDrawer();
    }

    showToast(`Currency switched to ${CURRENCIES[newCurr].flag} ${newCurr}`);
}

window.setCurrency = setCurrency;

function initCurrencySwitcher() {
    const saved = localStorage.getItem("wishari_currency") || "INR";
    document.querySelectorAll(".currency-selector").forEach(sel => {
        sel.value = saved;
    });
    setCurrency(saved);
}

// ==========================================================================
// 3-STEP OCCASION CONCIERGE QUIZ ENGINE
// ==========================================================================
function initOccasionQuiz() {
    const quizSection = document.getElementById("conciergeQuizSection");
    if (!quizSection) return;

    const quizState = {
        occasion: "wedding",
        budget: "mid",
        aesthetic: "pottery"
    };

    const recommendations = {
        "wedding-royal-silver": {
            title: "The Regal Rajwada Silver & Silk Casket",
            desc: "BIS Hallmarked 999 certified Silver Ganesha Diya accompanied by organic saffron honey, silver foil cashews, and hand-embroidered zardozi greeting tag in a velvet-lined palace trunk.",
            price: 7500,
            image: "assets/images/silver_gifting_set.jpg"
        },
        "wedding-mid-pottery": {
            title: "The Blue Poetry Sovereign Wedding Hamper",
            desc: "Handcrafted Jaipur Blue Pottery canister accompanied by saffron mamra almonds, floral brass diya, and gold-foiled artisan story card in a rigid forest-green keepsake trunk.",
            price: 3800,
            image: "assets/images/blue_pottery_jar.jpg"
        },
        "corporate-royal-leather": {
            title: "The Executive Sovereign Pure Leather Messenger Suite",
            desc: "Full-grain genuine cognac leather messenger bag with custom debossed corporate monogram, accompanied by leather passport sleeve, brass pen, and organic single-origin coffee.",
            price: 6500,
            image: "assets/images/laptop_bags_sleeves.jpg"
        },
        "corporate-mid-leather": {
            title: "The CXO Leather Folio & Artisan Brass Set",
            desc: "Pure leather A4 document folio with blind monogram debossing, accompanied by brass bookmark, roasted pistachio flask, and customized CEO welcome note.",
            price: 3500,
            image: "assets/images/laptop_bags_sleeves.jpg"
        },
        "festive-mid-pottery": {
            title: "The Shubh Deepavali Blue Poetry Celebration Hamper",
            desc: "Hand-painted Jaipur Blue Pottery dry fruit jar, pair of pure brass lotus diyas, handmade organic incense cones, and artisanal saffron mithai assortment.",
            price: 3200,
            image: "assets/images/blue_poetry_mugs.jpg"
        },
        "festive-royal-silver": {
            title: "The Auspicious Lakshmi-Ganesh 999 Silver Trunk",
            desc: "Hallmarked 999 Silver Coin and Diya set nestled on ivory raw silk, accompanied by gold-dusted dry fruits and custom family blessings parchment.",
            price: 8500,
            image: "assets/images/silver_gifting_set.jpg"
        },
        "milestone-entry-pottery": {
            title: "The Pastel Blue Heritage Arrival Jar",
            desc: "Handcrafted baby arrival keepsake canister with non-toxic lead-free glaze, filled with organic roasted dry fruits, customized baby name card, and pastel satin bow.",
            price: 2400,
            image: "assets/images/blue_pottery_jar.jpg"
        }
    };

    function updateQuizRecommendation() {
        const key = `${quizState.occasion}-${quizState.budget}-${quizState.aesthetic}`;
        const fallbackKey = `${quizState.occasion}-${quizState.budget}` in recommendations 
            ? `${quizState.occasion}-${quizState.budget}` 
            : "wedding-mid-pottery";

        const item = recommendations[key] || recommendations[fallbackKey] || recommendations["wedding-mid-pottery"];

        const titleEl = document.getElementById("quizResultTitle");
        const descEl = document.getElementById("quizResultDesc");
        const priceEl = document.getElementById("quizResultPrice");
        const imgEl = document.getElementById("quizResultImg");
        const waBtn = document.getElementById("quizWhatsAppBtn");

        if (titleEl) titleEl.textContent = item.title;
        if (descEl) descEl.textContent = item.desc;
        if (priceEl) {
            priceEl.setAttribute("data-base-price", item.price);
            priceEl.textContent = formatPrice(item.price);
        }
        if (imgEl) {
            imgEl.style.opacity = "0.4";
            setTimeout(() => {
                imgEl.src = item.image;
                imgEl.style.opacity = "1";
            }, 180);
        }

        if (waBtn) {
            const occName = quizState.occasion.toUpperCase();
            const msg = encodeURIComponent(`Hello Wishari Concierge, I completed your 30-Second Occasion Quiz for *${occName}*.\n\nRecommended: *${item.title}* (Budget approx ${formatPrice(item.price)}).\n\nCould you please share the sample box availability, bulk tier breakdown, and lead time?`);
            waBtn.href = `https://wa.me/919876543210?text=${msg}`;
        }
    }

    function setupStep(stepId, stateKey) {
        const stepEl = document.getElementById(stepId);
        if (!stepEl) return;

        stepEl.querySelectorAll(".quiz-opt-btn").forEach(btn => {
            btn.addEventListener("click", () => {
                stepEl.querySelectorAll(".quiz-opt-btn").forEach(b => b.classList.remove("active"));
                btn.classList.add("active");
                quizState[stateKey] = btn.getAttribute("data-val");
                updateQuizRecommendation();
            });
        });
    }

    setupStep("quizStep1", "occasion");
    setupStep("quizStep2", "budget");
    setupStep("quizStep3", "aesthetic");

    updateQuizRecommendation();
}
