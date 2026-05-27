@extends('layout.master')

@section('content')
<div class="business-plan-hero grid-margin">
  <div class="d-flex flex-column flex-lg-row justify-content-between align-items-start gap-4">
    <div>
      <span class="badge rounded-pill bg-white text-dark fw-semibold px-3 py-2 mb-3">Research Page</span>
      <h1 class="display-6 fw-bold text-white mb-3">Market Study</h1>
      <p class="text-white-50 mb-0 business-plan-intro">
        This page focuses only on the three divisions that match the company model: Networking & Fiber, Pro Audio Cables & Accessories, and Pro Lighting Accessories.
      </p>
    </div>
    <div class="business-plan-scorecard">
      <div class="small text-uppercase text-white-50 mb-2">Research Status</div>
      <div class="d-flex align-items-end gap-2">
        <h2 class="text-white mb-0">Phase 1</h2>
        <span class="text-success fw-semibold">Focused category model</span>
      </div>
      <div class="progress mt-3 bg-white bg-opacity-25" role="progressbar" aria-label="Market study progress" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar bg-warning" style="width: 60%"></div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-8 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-muted mb-1">Scope</p>
        <h3 class="mb-3">What this study covers now</h3>
        <p class="text-secondary mb-3">
          This version is limited to the real business scope only. It excludes broad AV hardware, LED fixture markets, smart lighting systems, microphones as a standalone consumer category, and unrelated infrastructure investment topics.
        </p>
        <p class="text-secondary mb-0">
          The focus is now limited to structured cabling, network cables, fiber optic products, connector-heavy technical accessories, pro audio cables and accessories, and pro lighting accessories. Where the UAE has direct public market values, those figures are used directly. Where exact UAE segment values are not openly disclosed in public summaries, the page uses the strongest available UAE evidence and treats the conclusions as directional.
        </p>
      </div>
    </div>
  </div>
  <div class="col-xl-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-muted mb-1">Geographic Focus</p>
        <h3 class="mb-4">Commercial territory</h3>
        <div class="d-flex justify-content-between align-items-center py-2 border-bottom">
          <span>Primary city 1</span>
          <strong>Dubai</strong>
        </div>
        <div class="d-flex justify-content-between align-items-center py-2 border-bottom">
          <span>Primary city 2</span>
          <strong>Abu Dhabi</strong>
        </div>
        <div class="d-flex justify-content-between align-items-center py-2 border-bottom">
          <span>National market</span>
          <strong>United Arab Emirates</strong>
        </div>
        <div class="d-flex justify-content-between align-items-center py-2">
          <span>Buyer lens</span>
          <strong>B2B trade and project demand</strong>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-muted mb-1">Estimated Annual Consumption in the UAE</p>
        <p class="text-secondary mb-0">
          This section gives an estimated annual consumption view for the UAE across the three target divisions based on public market references and high-fit category proxies.
        </p>
      </div>
    </div>
  </div>
  <div class="col-xl-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-muted mb-1">Division Market Value</p>
        <h3 class="mb-4">Current UAE value reference and outlook by division</h3>
        <div class="table-responsive">
          <table class="table align-middle mb-0">
            <thead>
              <tr>
                <th>Division</th>
                <th>Market value reference</th>
                <th>Base year</th>
                <th>Expected next years</th>
                <th>Reference type</th>
                <th>How to read it</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="fw-semibold">Division 1: Networking & Fiber</td>
                <td>USD 315.3 million</td>
                <td>2024</td>
                <td>Projected to reach USD 549.1 million by 2033 at 6.0% CAGR</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Direct UAE value</span></td>
                <td>This is a direct UAE structured cabling market value and is the strongest public benchmark for network cables, fiber optic products, outlets, patching, and passive infrastructure accessories.</td>
              </tr>
              <tr>
                <td class="fw-semibold">Division 2: Pro Audio Cables & Accessories</td>
                <td>USD 1.9 billion</td>
                <td>2025</td>
                <td>Projected to reach USD 3.4 billion by 2031 at 9.7% CAGR</td>
                <td><span class="badge bg-warning-subtle text-warning-emphasis">Broader UAE reference</span></td>
                <td>This is a broader UAE professional audio equipment reference, not a cable-and-accessory-only total. It still gives a useful growth envelope for the company's audio cable, connector, and technical accessory line.</td>
              </tr>
              <tr>
                <td class="fw-semibold">Division 3: Pro Lighting Accessories</td>
                <td>USD 1,172.49 million</td>
                <td>2024</td>
                <td>Projected to reach USD 1,955.09 million by 2032 at 6.6% CAGR</td>
                <td><span class="badge bg-info-subtle text-info-emphasis">High-fit proxy</span></td>
                <td>This is a UAE cable connector market proxy, not a stand-alone stage-lighting accessory total. It is still a strong planning reference for DMX connectors, locking power accessories, adapters, and technical linking items.</td>
              </tr>
            </tbody>
          </table>
        </div>
        <p class="text-secondary mt-4 mb-0">
          Interpretation note: only Division 1 currently has a clean direct public UAE market value for the passive product scope. Division 2 uses a broader UAE professional audio market reference, and Division 3 uses a high-fit UAE connector market proxy because a passive-only public UAE total was not found for those two divisions.
        </p>
      </div>
    </div>
  </div>
  <div class="col-xl-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
          <div>
            <p class="text-uppercase text-muted mb-1">Direct Market Values</p>
            <h3 class="mb-0">Current UAE value references tied to the target categories</h3>
          </div>
          <span class="badge bg-success-subtle text-success-emphasis">Direct UAE figures plus high-fit category proxies</span>
        </div>
        <div id="marketValueBarChart"></div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-muted mb-1">Division View</p>
        <h4 class="mb-3">Networking and fiber</h4>
        <ul class="business-plan-list">
          <li>The UAE structured cabling market generated USD 315.3 million in 2024.</li>
          <li>Copper cables were the largest product segment in 2024.</li>
          <li>Fiber optic cables were the fastest-growing product segment in the forecast period.</li>
          <li>The market is expected to reach USD 549.1 million by 2033, supporting a strong primary focus on network cables, fiber cables, connectors, patching, outlets, patch panels, cabinets, and rack-linked infrastructure accessories.</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-lg-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-muted mb-1">Division View</p>
        <h4 class="mb-3">Pro audio cables and accessories</h4>
        <ul class="business-plan-list">
          <li>A broad UAE professional audio equipment reference points to a market size of about USD 1.9 billion in 2025.</li>
          <li>That broader reference is projected to reach around USD 3.4 billion by 2031.</li>
          <li>Published market drivers include live events, venues, conferencing, content creation, and installed audio demand.</li>
          <li>The most relevant commercial angle for this business is not equipment breadth but signal-chain products and repeat technical accessories.</li>
          <li>This should be read as a broader market envelope, while the company focuses specifically on microphone cables, audio signal cables, XLR-related accessories, rugged connectors, and trade-installed audio connectivity products.</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-lg-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-muted mb-1">Division View</p>
        <h4 class="mb-3">Pro lighting accessories</h4>
        <ul class="business-plan-list">
          <li>The lighting focus is limited to technical accessories, connectors, signal handling, and project-support products rather than broad fixture-led categories.</li>
          <li>The strongest public UAE planning reference is the cable connector market at USD 1,172.49 million in 2024.</li>
          <li>That proxy is projected to reach USD 1,955.09 million by 2032.</li>
          <li>The strongest commercial fit is in DMX-related connectivity, locking power accessories, adapters, technical connectors, and install-support items.</li>
          <li>Dubai's event and exhibition ecosystem strengthens the case for recurring demand in technical lighting support and connection products.</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-muted mb-1">Forecast Reading</p>
        <h4 class="mb-4">What is expected over the next years</h4>
        <div class="table-responsive">
          <table class="table align-middle mb-0">
            <thead>
              <tr>
                <th>Division</th>
                <th>2024/2025 reference point</th>
                <th>Medium-term direction</th>
                <th>Expected commercial effect</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="fw-semibold">Networking & Fiber</td>
                <td>USD 315.3 million in 2024</td>
                <td>Growth toward USD 549.1 million by 2033, with fiber as the fastest-growing product layer</td>
                <td>Supports broader SKU depth, stronger stockholding, and a primary role in revenue planning.</td>
              </tr>
              <tr>
                <td class="fw-semibold">Pro Audio Cables & Accessories</td>
                <td>USD 1.9 billion broad professional audio market reference in 2025</td>
                <td>Growth toward USD 3.4 billion by 2031 in the broader professional audio equipment environment</td>
                <td>Supports a selective but growing line focused on cable assemblies, connectors, and replacement-driven technical accessories.</td>
              </tr>
              <tr>
                <td class="fw-semibold">Pro Lighting Accessories</td>
                <td>USD 1,172.49 million cable connector proxy in 2024</td>
                <td>Growth toward USD 1,955.09 million by 2032 in connector-heavy technical demand</td>
                <td>Supports a trade-led fast-delivery model for DMX, locking power, adapters, and technical linking accessories.</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-muted mb-1">Detailed Division Map</p>
        <h4 class="mb-4">What each business line should actually include</h4>
        <div class="row g-3">
          <div class="col-lg-4">
            <div class="business-plan-panel h-100">
              <h6>Networking & Fiber</h6>
              <ul class="business-plan-list mb-0">
                <li>Core products: Cat6, Cat6A, patch cords, fiber optic cables, fiber patch cords, keystone jacks, outlets, faceplates, patch panels, cabinets, and cable management.</li>
                <li>Main jobs served: office fit-out, structured cabling projects, upgrades, maintenance, relocation, and expansion work.</li>
                <li>Purchase logic: price-sensitive but specification-driven, with frequent repeat orders and project quantities.</li>
                <li>Commercial role: anchor division with the deepest catalog and strongest stock depth.</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="business-plan-panel h-100">
              <h6>Pro Audio Cables & Accessories</h6>
              <ul class="business-plan-list mb-0">
                <li>Core products: microphone cables, balanced audio cables, XLR connectors, speakON-style connectors, adapters, cable assemblies, and rugged signal accessories.</li>
                <li>Main jobs served: venues, installed sound, conferencing, houses of worship, rental support, studios, and event replacement needs.</li>
                <li>Purchase logic: quality and connector reliability matter more than lowest price, especially for installers and technical buyers.</li>
                <li>Commercial role: focused specialist line with strong cross-sell value and repeat replacement demand.</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="business-plan-panel h-100">
              <h6>Pro Lighting Accessories</h6>
              <ul class="business-plan-list mb-0">
                <li>Core products: DMX connectors, lighting signal accessories, locking power connectors, adapters, extension accessories, and technical linking items.</li>
                <li>Main jobs served: stage setups, live events, venue support, rental environments, and technical maintenance cycles.</li>
                <li>Purchase logic: product availability and compatibility are critical because many orders are urgent replacement or support orders.</li>
                <li>Commercial role: accessory-led line with strong service value for fast-delivery trade accounts.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-muted mb-1">Division Detail</p>
        <h4 class="mb-4">Operational reading by category</h4>
        <div class="table-responsive">
          <table class="table align-middle mb-0">
            <thead>
              <tr>
                <th>Division</th>
                <th>Main items</th>
                <th>Main buyers</th>
                <th>Purchase behavior</th>
                <th>What matters most</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="fw-semibold">Networking & Fiber</td>
                <td>Network cables, fiber optic cables, patching items, connectors, outlets, patch panels, cabinets, and related accessories</td>
                <td>System integrators, network contractors, fit-out contractors, infrastructure installers, resellers</td>
                <td>Mix of recurring stock orders and project-driven bulk requirements</td>
                <td>Availability, technical compatibility, price discipline, fast delivery</td>
              </tr>
              <tr>
                <td class="fw-semibold">Pro Audio Cables & Accessories</td>
                <td>Microphone cables, signal cables, XLR connectors, rugged data connectors, audio patching accessories</td>
                <td>AV integrators, venue contractors, event suppliers, rental companies, studios, technical buyers</td>
                <td>More selective than networking, but driven by technical reliability and repeat replacement cycles</td>
                <td>Connector quality, signal reliability, brand trust, fast replacement availability</td>
              </tr>
              <tr>
                <td class="fw-semibold">Pro Lighting Accessories</td>
                <td>Technical connectors, DMX-related items, locking power accessories, adapters, signal handling accessories</td>
                <td>Lighting integrators, event suppliers, production teams, stage and venue technical teams</td>
                <td>Project-linked and event-linked, with recurring replacement demand in technical consumables and connection points</td>
                <td>Technical fit, robustness, stock speed, compatibility with installed systems</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-muted mb-1">Assortment Chart</p>
        <h4 class="mb-4">Product basket emphasis by division</h4>
        <div id="divisionBasketChart"></div>
      </div>
    </div>
  </div>
  <div class="col-xl-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-muted mb-1">Demand Pattern</p>
        <h4 class="mb-4">How orders are likely to behave</h4>
        <div id="orderPatternChart"></div>
      </div>
    </div>
  </div>
  <div class="col-xl-7 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-muted mb-1">Demand Drivers</p>
        <h4 class="mb-4">Why the UAE is commercially attractive</h4>
        <div class="table-responsive">
          <table class="table align-middle mb-0">
            <thead>
              <tr>
                <th>Driver</th>
                <th>Why it matters</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="fw-semibold">Commercial and infrastructure installations</td>
                <td>Supports long-term demand for structured cabling, fiber optic products, outlets, patching, and technical infrastructure accessories.</td>
              </tr>
              <tr>
                <td class="fw-semibold">Commercial construction and fit-out</td>
                <td>Creates recurring requirements for structured cabling, boxes, panels, outlets, connectors, and technical installation products.</td>
              </tr>
              <tr>
                <td class="fw-semibold">Maintenance and replacement cycles</td>
                <td>Supports repeat orders in patch cords, adapters, connectors, rugged cable assemblies, and technical accessory items that fail, wear, or need urgent replacement.</td>
              </tr>
              <tr>
                <td class="fw-semibold">Trade-focused delivery expectations</td>
                <td>The UAE favors suppliers that can combine stock availability, account approval, and next-business-day fulfillment.</td>
              </tr>
              <tr>
                <td class="fw-semibold">Dubai event density</td>
                <td>Dubai World Trade Centre hosted 378 exhibitions and events in 2024, supporting demand for technical audio and lighting support products, connectors, and replacement-driven cable categories.</td>
              </tr>
              <tr>
                <td class="fw-semibold">Corporate and venue technical demand</td>
                <td>Professional audio and technical lighting accessory demand is supported by venues, events, conferencing, hospitality, and media-related installations.</td>
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
        <p class="text-uppercase text-muted mb-1">Geographic Reading</p>
        <h4 class="mb-4">Where demand is likely strongest</h4>
        <div class="business-plan-risk">
          <h6 class="mb-1">Dubai</h6>
          <p class="text-secondary mb-0">Dubai is likely to be the strongest first market because of its concentration in events, hospitality, integrators, exhibitions, fit-out activity, and commercial technology demand.</p>
        </div>
        <div class="business-plan-risk">
          <h6 class="mb-1">Abu Dhabi</h6>
          <p class="text-secondary mb-0">Abu Dhabi remains strategically important for institutional, infrastructure, government-related, and large-scale project demand where account quality and technical specification matter.</p>
        </div>
        <div class="business-plan-risk mb-0">
          <h6 class="mb-1">National UAE model</h6>
          <p class="text-secondary mb-0">A centralized e-commerce distributor can serve the whole UAE efficiently, but early sales intensity is likely to be led by Dubai and Abu Dhabi.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-muted mb-1">Commercial Interpretation</p>
        <h4 class="mb-4">What the data suggests for this company</h4>
        <div class="row g-3">
          <div class="col-md-4">
            <div class="business-plan-panel h-100">
              <h6>Networking should remain the anchor division</h6>
              <p class="text-secondary mb-0">It has the strongest direct UAE category fit, the cleanest public value benchmark, and the broadest combination of recurring stock demand and project demand.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="business-plan-panel h-100">
              <h6>Accessories and connectors are a major commercial layer</h6>
              <p class="text-secondary mb-0">The UAE cable connector market is materially larger than the structured cabling figure and supports a strong accessories-focused sell-through strategy across networking, pro audio, and pro lighting support categories.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="business-plan-panel h-100">
              <h6>Pro audio should be precise, not broad</h6>
              <p class="text-secondary mb-0">The business should focus on signal-chain products such as microphone cables, audio cables, XLR connectors, and related accessories rather than trying to cover the full audio equipment market.</p>
            </div>
          </div>
        </div>
        <p class="text-secondary mt-4 mb-0">
          Where the page uses a broader market reference or a proxy instead of a stand-alone category total, that is stated explicitly. This keeps the plan commercially useful without pretending that every sub-segment has a clean public UAE top-line value.
        </p>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-muted mb-1">Category Breakdown</p>
        <h4 class="mb-4">Recommended subgroups for this market study</h4>
        <div class="table-responsive">
          <table class="table align-middle mb-0">
            <thead>
              <tr>
                <th>Division</th>
                <th>Subgroup</th>
                <th>Examples</th>
                <th>Why it belongs in the launch study</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="fw-semibold">Networking & Fiber</td>
                <td>Passive cabling</td>
                <td>Bulk copper cable, patch cords, fiber optic cable, fiber patch cords</td>
                <td>Highest volume foundation for B2B structured cabling demand.</td>
              </tr>
              <tr>
                <td class="fw-semibold">Networking & Fiber</td>
                <td>Termination & patching</td>
                <td>RJ45 jacks, faceplates, patch panels, fiber panels, fiber cassettes, couplers</td>
                <td>High-frequency sell-through products tied to every install project.</td>
              </tr>
              <tr>
                <td class="fw-semibold">Networking & Fiber</td>
                <td>Rack & support accessories</td>
                <td>Cabinets, cable managers, organizers, mounting accessories</td>
                <td>Supports larger ticket values and full-project supply capability.</td>
              </tr>
              <tr>
                <td class="fw-semibold">Pro Audio Cables & Accessories</td>
                <td>Signal cabling</td>
                <td>Microphone cables, balanced audio cables, patch cables, stage cabling</td>
                <td>Most relevant line for installers, venues, rental teams, and technical buyers.</td>
              </tr>
              <tr>
                <td class="fw-semibold">Pro Audio Cables & Accessories</td>
                <td>Connectivity accessories</td>
                <td>XLR connectors, adapters, speakON-style connectors, cable ends</td>
                <td>Supports margin opportunities and urgent replacement orders.</td>
              </tr>
              <tr>
                <td class="fw-semibold">Pro Lighting Accessories</td>
                <td>Signal & control accessories</td>
                <td>DMX connectors, adapter leads, signal accessories, interface connectors</td>
                <td>High-fit technical layer for lighting teams without entering fixture categories.</td>
              </tr>
              <tr>
                <td class="fw-semibold">Pro Lighting Accessories</td>
                <td>Power & linking accessories</td>
                <td>Locking power connectors, extension accessories, adapters, linking hardware</td>
                <td>Useful for event support, stage work, and recurring field replacement needs.</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-muted mb-1">Source Base</p>
        <h4 class="mb-4">Public references used for this version</h4>
        <ul class="business-plan-list">
          <li>Grand View Research UAE structured cabling market outlook, base year 2024.</li>
          <li>Mobility Foresights UAE professional audio equipment market outlook, base year 2025.</li>
          <li>Stellar Market Research UAE cable connector market overview, base year 2024.</li>
          <li>6Wresearch and Ken Research UAE professional audio market summaries for demand direction and forecast coverage.</li>
          <li>Dubai World Trade Centre 2024 event activity release.</li>
        </ul>
        <p class="text-secondary mb-0">
          This market page is now centered on the actual company scope. The next improvement should be competitor mapping, customer-type sizing, and a sharper Dubai vs Abu Dhabi commercial split for each of the three divisions.
        </p>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
          <div>
            <p class="text-uppercase text-muted mb-1">Forecast Chart</p>
            <h3 class="mb-0">Networking and technical-accessory growth outlook</h3>
          </div>
          <span class="badge bg-info-subtle text-info-emphasis">Direct UAE curves and high-fit proxy curves</span>
        </div>
        <div id="networkConnectorsLineChart"></div>
      </div>
    </div>
  </div>
  <div class="col-xl-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
          <div>
            <p class="text-uppercase text-muted mb-1">Planning Chart</p>
            <h3 class="mb-0">Internal priority score by division</h3>
          </div>
          <span class="badge bg-warning-subtle text-warning-emphasis">Internal planning score, not market value</span>
        </div>
        <div id="divisionPriorityChart"></div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('build/plugins/apexcharts/apexcharts.min.js') }}"></script>
@endpush

@push('custom-scripts')
  @vite(['resources/js/pages/market-study.js'])
@endpush
