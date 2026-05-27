@extends('layout.master')

@section('content')
<div class="business-plan-hero grid-margin">
  <div class="d-flex flex-column flex-lg-row justify-content-between align-items-start gap-4">
    <div>
      <span class="badge rounded-pill bg-white text-dark fw-semibold px-3 py-2 mb-3">Business Plan Workspace</span>
      <h1 class="display-6 fw-bold text-white mb-3">Business plan for a B2B online store serving networking, pro lighting, and pro audio buyers</h1>
      <p class="text-white-50 mb-0 business-plan-intro">
        The company is being built as a specialized e-commerce distributor for system integrators and technical installation companies, with a catalog focused on networking, fiber optic, pro lighting, and pro audio accessories and cables.
      </p>
    </div>
    <div class="business-plan-scorecard">
      <div class="small text-uppercase text-white-50 mb-2">Current Stage</div>
      <div class="d-flex align-items-end gap-2">
        <h2 class="text-white mb-0">Phase 1</h2>
        <span class="text-success fw-semibold">Company structuring</span>
      </div>
      <div class="progress mt-3 bg-white bg-opacity-25" role="progressbar" aria-label="Business planning progress" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar bg-warning" style="width: 35%"></div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-8 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-start flex-wrap gap-3 mb-4">
          <div>
            <p class="text-uppercase text-muted mb-1">Company Overview</p>
            <h3 class="mb-2">What the business is</h3>
          </div>
          <span class="badge bg-success-subtle text-success-emphasis">Core definition</span>
        </div>
        <p class="text-secondary mb-3">
          The business is a B2B online store that sells accessories, cables, and technical connection products for three main divisions: networking, professional lighting, and professional audio. It is designed to serve system integrators, contractors, and companies working in networking infrastructure, installation, lighting, and pro audio environments.
        </p>
        <p class="text-secondary mb-0">
          The operating concept is not a general consumer marketplace. It is a specialized trade-focused platform built around business customer registration, account approval, controlled pricing, fast fulfillment, and next-business-day delivery for professional buyers.
        </p>
      </div>
    </div>
  </div>
  <div class="col-xl-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-muted mb-1">Business Snapshot</p>
        <h3 class="mb-4">Foundation points</h3>
        <div class="d-flex justify-content-between align-items-center py-2 border-bottom">
          <span>Business model</span>
          <strong>B2B e-commerce distributor</strong>
        </div>
        <div class="d-flex justify-content-between align-items-center py-2 border-bottom">
          <span>Main customer type</span>
          <strong>System integrators</strong>
        </div>
        <div class="d-flex justify-content-between align-items-center py-2 border-bottom">
          <span>Service promise</span>
          <strong>Next business day delivery</strong>
        </div>
        <div class="d-flex justify-content-between align-items-center py-2">
          <span>Commercial scope</span>
          <strong>Networking, audio, lighting</strong>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-muted mb-1">Division 1</p>
        <h4 class="mb-3">Networking</h4>
        <ul class="business-plan-list">
          <li>Network accessories</li>
          <li>Network cables</li>
          <li>Fiber optic cables</li>
          <li>Fiber optic accessories</li>
          <li>Structured cabling support items</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-lg-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-muted mb-1">Division 2</p>
        <h4 class="mb-3">Professional Lighting</h4>
        <ul class="business-plan-list">
          <li>Lighting cables</li>
          <li>Lighting accessories</li>
          <li>Technical connectors</li>
          <li>Signal and power support items</li>
          <li>Installation-focused consumables and add-ons</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-lg-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-muted mb-1">Division 3</p>
        <h4 class="mb-3">Professional Audio</h4>
        <ul class="business-plan-list">
          <li>Audio accessories</li>
          <li>Audio connection products</li>
          <li>Signal cables</li>
          <li>Technical audio support items</li>
          <li>Trade-ready cable and connector ranges</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-muted mb-1">Customer Workflow</p>
        <h4 class="mb-3">Registration and ordering flow</h4>
        <ol class="ps-3 text-secondary mb-0">
          <li class="mb-2">A company creates an account through the online registration process.</li>
          <li class="mb-2">The business reviews and approves the client account before trading access is activated.</li>
          <li class="mb-2">The approved client logs in, places orders, and accesses the commercial catalog.</li>
          <li class="mb-2">Payment can be made by credit card, debit card, cheque, or approved credit terms where available.</li>
          <li>The fulfillment model is designed to support next-business-day delivery for target buyers.</li>
        </ol>
      </div>
    </div>
  </div>
  <div class="col-xl-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-muted mb-1">Operating Logic</p>
        <h4 class="mb-3">How the company works</h4>
        <ul class="business-plan-list">
          <li>The company acts as a distributor-style online store rather than a pure marketplace.</li>
          <li>Customers are qualified and approved before full commercial access is enabled.</li>
          <li>Sales are built around repeat B2B ordering, category trust, and fast delivery execution.</li>
          <li>The platform will combine pricing logic, account control, stock discipline, and trade-focused support.</li>
          <li>The catalog structure starts with networking, pro lighting, and pro audio, then expands strategically.</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-muted mb-1">Main Jobs Served</p>
        <h4 class="mb-4">Where each division is used in the market</h4>
        <div class="table-responsive">
          <table class="table align-middle mb-0">
            <thead>
              <tr>
                <th>Division</th>
                <th>Main jobs served</th>
                <th>Typical buyers</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="fw-semibold">Networking & Fiber</td>
                <td>Office fit-out, structured cabling installations, network upgrades, fiber rollout, server room setup, relocation projects, and maintenance work.</td>
                <td>System integrators, network contractors, IT infrastructure installers, fit-out contractors, and resellers.</td>
              </tr>
              <tr>
                <td class="fw-semibold">Pro Audio Cables & Accessories</td>
                <td>Installed sound projects, conferencing rooms, hospitality audio systems, venue upgrades, studio support, rental support, and replacement-driven technical work.</td>
                <td>AV integrators, venue contractors, studios, event suppliers, rental companies, and technical buyers.</td>
              </tr>
              <tr>
                <td class="fw-semibold">Pro Lighting Accessories</td>
                <td>Stage setup, event support, venue technical work, lighting control connections, rental fleet support, touring support, and urgent field replacement needs.</td>
                <td>Lighting integrators, production teams, event suppliers, stage crews, venue technical teams, and rental companies.</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-7 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-muted mb-1">Commercial Model</p>
        <h4 class="mb-4">Positioning and pricing logic</h4>
        <div class="table-responsive">
          <table class="table align-middle mb-0">
            <thead>
              <tr>
                <th>Tier</th>
                <th>Positioning</th>
                <th>Commercial role</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="fw-semibold">Tier 1</td>
                <td>Branded premium range</td>
                <td>Top-level products for customers who prioritize brand reputation, performance, and project assurance.</td>
              </tr>
              <tr>
                <td class="fw-semibold">Tier 2</td>
                <td>Mid-level quality range</td>
                <td>Balanced range for customers who want solid performance and commercial value.</td>
              </tr>
              <tr>
                <td class="fw-semibold">Tier 3</td>
                <td>Acceptable value range</td>
                <td>Entry commercial option for price-sensitive buyers without dropping into low-trust low-quality products.</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-5 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-muted mb-1">Competitive Approach</p>
        <h4 class="mb-4">How the company wins</h4>
        <div class="business-plan-risk">
          <h6 class="mb-1">Price competitiveness</h6>
          <p class="text-secondary mb-0">The company competes by offering professional buyers strong commercial pricing across multiple quality tiers.</p>
        </div>
        <div class="business-plan-risk">
          <h6 class="mb-1">Stock availability</h6>
          <p class="text-secondary mb-0">The model is built around stock depth and fast-moving availability for repeat professional orders.</p>
        </div>
        <div class="business-plan-risk mb-0">
          <h6 class="mb-1">Convenience for trade buyers</h6>
          <p class="text-secondary mb-0">The platform simplifies product sourcing for system integrators by combining multiple product families in one approved account environment.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-muted mb-1">Next Planning Layers</p>
        <h4 class="mb-4">What comes after this foundation</h4>
        <div class="row g-3">
          <div class="col-md-4">
            <div class="business-plan-panel h-100 d-flex flex-column">
              <h6>Company structure</h6>
              <p class="text-secondary mb-3">Define the final internal structure, commercial model, ownership of operations, and selling process.</p>
              <div class="mt-auto">
                <a href="{{ url('/company-structure') }}" class="btn btn-sm btn-outline-primary">Open page</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="business-plan-panel h-100 d-flex flex-column">
              <h6>Market study</h6>
              <p class="text-secondary mb-3">Build a market study for Dubai, Abu Dhabi, and the UAE overall, including demand, historical consumption, and future outlook.</p>
              <div class="mt-auto">
                <a href="{{ url('/market-study') }}" class="btn btn-sm btn-outline-primary">Open page</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="business-plan-panel h-100 d-flex flex-column">
              <h6>Financial plan</h6>
              <p class="text-secondary mb-3">Define buying prices, selling prices, expected margins, operating expenses, and the complete business plan model.</p>
              <div class="mt-auto">
                <a href="{{ url('/financial-plan') }}" class="btn btn-sm btn-outline-primary">Open page</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
