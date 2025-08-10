<h4>Djebel is in development</h4>
<div>
    If you want to be invited to try <strong>Djebel</strong> when it's beta stable, fill out your details below.
    <br/>By filling out your details below, you allow us to notify you about the app [GDPR stuff]
</div>

<br/>

[djebel-simple-newsletter render_agree=1 auto_focus=1]

<div>
    <br>
    In the meantime, you can check
    <a href="__SITE_WEB_PATH__/vision">Djebel Vision</a>
</div>


<!-- Djebel: Marketing Sections -->
<section id="djebel-sections">
    <style>
        /* Scoped so it won't bleed into the rest of the site */
        #djebel-sections { font: 16px/1.6 system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, "Helvetica Neue", Arial, sans-serif; color: #1f2937; }
        #djebel-sections .container { max-width: 980px; margin: 0 auto; padding: 2.5rem 1rem; }
        #djebel-sections h2 { font-size: 1.875rem; line-height: 1.25; margin: 0 0 1rem; color: #0f172a; }
        #djebel-sections h3 { font-size: 1.25rem; margin: 1.25rem 0 .5rem; color: #0f172a; }
        #djebel-sections p { margin: 0 0 1rem; }
        #djebel-sections ul { margin: .5rem 0 1rem 1.25rem; }
        #djebel-sections li + li { margin-top: .35rem; }
        #djebel-sections .grid { display: grid; gap: 1rem; }
        @media (min-width: 900px){ #djebel-sections .grid-2 { grid-template-columns: 1fr 1fr; } }
        #djebel-sections .card { background: #fff; border: 1px solid #e5e7eb; border-radius: 12px; padding: 1.25rem; }
        #djebel-sections .badge { display: inline-block; font-size: .75rem; padding: .2rem .5rem; border: 1px solid #c7d2fe; background: #eef2ff; color: #3730a3; border-radius: 999px; }
        #djebel-sections .cta { display: inline-block; background: #2563eb; color: #fff; padding: .8rem 1.1rem; border-radius: 10px; text-decoration: none; font-weight: 600; }
        #djebel-sections .cta:hover { background: #1d4ed8; }
        #djebel-sections .muted { color: #6b7280; }
        #djebel-sections details { border: 1px solid #e5e7eb; border-radius: 10px; padding: .9rem 1rem; background: #fafafa; }
        #djebel-sections summary { cursor: pointer; font-weight: 600; }
    </style>

    <!-- What is Djebel -->
    <div class="container" id="what-is">
        <span class="badge">What is Djebel?</span>
        <h2>A modular, hook‑first web platform</h2>
        <p>
            Djebel is a modern, developer‑friendly platform inspired by WordPress <em>hooks</em> and <em>shortcodes</em>.
            Extend behavior without forking core, and embed dynamic content anywhere with simple tags.
        </p>
        <div class="grid grid-2">
            <div class="card">
                <h3>Hooks</h3>
                <p>Run your code at safe points in the app lifecycle—before/after actions, filters for data, request/response taps.</p>
                <ul>
                    <li><strong>Action hooks:</strong> inject behavior (send events, mutate context, call services).</li>
                    <li><strong>Filter hooks:</strong> transform data in flight (sanitize, map, enrich).</li>
                    <li><strong>No core edits:</strong> upgrade without breaking your custom logic.</li>
                </ul>
            </div>
            <div class="card">
                <h3>Shortcodes</h3>
                <p>Drop dynamic widgets into any content field using concise tags.</p>
                <ul>
                    <li><code>[chart data="sales:30,40,22"]</code></li>
                    <li><code>[form id="lead-capture"]</code></li>
                    <li><code>[list source="products" limit="6"]</code></li>
                </ul>
                <p class="muted">Works in pages, posts, emails, docs—any renderable surface.</p>
            </div>
        </div>
    </div>

    <!-- Use Cases -->
    <div class="container" id="use-cases">
        <span class="badge">Use Cases</span>
        <h2>What can you build with Djebel?</h2>
        <div class="grid grid-2">
            <div class="card">
                <h3>Custom dashboards</h3>
                <p>Compose admin panels with plug‑in cards (metrics, tables, actions) and wire behavior via hooks.</p>
                <ul>
                    <li>Per‑role widgets &amp; permissions</li>
                    <li>Data filters and exports</li>
                    <li>Workflow actions on events</li>
                </ul>
            </div>
            <div class="card">
                <h3>Mini SaaS tools</h3>
                <p>Ship focused products fast using reusable modules and shortcodes for UI.</p>
                <ul>
                    <li>Billing &amp; plans as modules</li>
                    <li>Feature flags via hooks</li>
                    <li>Themeable, embeddable widgets</li>
                </ul>
            </div>
            <div class="card">
                <h3>Client portals &amp; sites</h3>
                <p>Add client‑specific features without touching core—keep upgrades painless.</p>
                <ul>
                    <li>Per‑client logic with filters</li>
                    <li>White‑label blocks via shortcodes</li>
                    <li>Granular audit logs</li>
                </ul>
            </div>
            <div class="card">
                <h3>Headless CMS features</h3>
                <p>Fetch and render remote data sources with shortcodes; transform with filter hooks.</p>
                <ul>
                    <li>API‑driven collections</li>
                    <li>SSR or static export</li>
                    <li>Markdown + shortcodes mix</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Who it's for -->
    <div class="container" id="audience">
        <span class="badge">Who is it for?</span>
        <h2>Built for builders</h2>
        <ul>
            <li><strong>Developers</strong> who want WordPress‑like extensibility on a modern stack.</li>
            <li><strong>Agencies</strong> shipping repeatable client solutions with minimal custom forks.</li>
            <li><strong>SaaS founders</strong> who need a hookable core and a plugin ecosystem from day one.</li>
            <li><strong>Power users</strong> who love composing features with shortcodes.</li>
        </ul>
    </div>

    <!-- Vision -->
    <div class="container" id="vision">
        <span class="badge">Vision</span>
        <h2>An ecosystem of plug‑in logic and portable UI</h2>
        <div class="grid grid-2">
            <div class="card">
                <h3>Problem</h3>
                <p>
                    Modern frameworks are powerful but hard to extend safely.
                    Teams often copy‑paste, fork, or patch core—upgrades become risky and slow.
                </p>
            </div>
            <div class="card">
                <h3>Solution</h3>
                <p>
                    Djebel standardizes extension points (hooks) and portable UI (shortcodes), so
                    you extend instead of overwrite. Keep core clean; ship faster.
                </p>
                <ul>
                    <li>Stable hook contracts</li>
                    <li>Composable shortcodes</li>
                    <li>Module marketplace (planned)</li>
                </ul>
            </div>
        </div>
        <p class="muted">Roadmap highlights: developer SDK, module registry, theming, runtime config, CLI.</p>
    </div>

    <!-- FAQ -->
    <div class="container" id="faq">
        <span class="badge">FAQ</span>
        <h2>Quick answers</h2>
        <div class="grid">
            <details>
                <summary>Is Djebel a CMS or a framework?</summary>
                <p>It’s a small framework with CMS‑like powers. You use hooks/shortcodes to add features or embed UI, then choose your data sources and deploy style.</p>
            </details>
            <details>
                <summary>Can I write my own plugins?</summary>
                <p>Yes. The SDK will expose actions, filters, shortcode registration, and lifecycle events. Zero edits to core.</p>
            </details>
            <details>
                <summary>Tech stack?</summary>
                <p>It's PHP code. You can run it on free/cheap hosting providers</p>
            </details>
        </div>
    </div>

    <!-- CTA -->
    <div class="container" id="cta">
        <h2>Get early access</h2>
        <p>Join the beta list to get the SDK preview, examples, and a starter template.</p>
        <p><a class="cta" href="#subscribe">Notify me about the beta</a></p>
        <p class="muted">By subscribing you agree to receive occasional product updates. Unsubscribe anytime.</p>
    </div>
</section>


