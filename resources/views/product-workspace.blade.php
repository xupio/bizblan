@extends('layout.master')

@section('content')
<div class="product-workspace-hero grid-margin">
  <div class="d-flex flex-column flex-lg-row justify-content-between align-items-start gap-4">
    <div>
      <span class="badge rounded-pill bg-white text-dark fw-semibold px-3 py-2 mb-3">Temporary Product Workspace</span>
      <h1 class="display-6 fw-bold text-white mb-3">Collect products first, organize strategy second</h1>
      <p class="text-white-50 mb-0 product-workspace-intro">
        This page is a temporary B2B product-planning workspace for collecting all items, assigning them to preliminary groups, and clarifying the catalog before moving into operations, strategy, and business planning.
      </p>
    </div>
    <div class="product-workspace-badge">
      <div class="small text-uppercase text-white-50 mb-2">Current Focus</div>
      <h4 class="text-white mb-2">Product Collection Phase</h4>
      <p class="text-white-50 mb-0">Capture every item first, then refine categories and commercial logic.</p>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
          <div>
            <p class="text-uppercase text-muted mb-1">Master Matrix</p>
            <h3 class="mb-0">Combined supplier category map</h3>
          </div>
          <span class="badge bg-primary-subtle text-primary-emphasis">Working decision layer</span>
        </div>
        <div class="table-responsive mb-4">
          <table class="table align-middle mb-0">
            <thead>
              <tr>
                <th>Brand</th>
                <th>Network Cables</th>
                <th>Networking Accessories</th>
                <th>Fiber and Rack Infrastructure</th>
                <th>Professional Audio Cables</th>
                <th>Professional Audio Accessories</th>
                <th>Professional Lighting Cables</th>
                <th>Professional Lighting Accessories</th>
                <th>Decision</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="fw-semibold">Excel Networking</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Core</span></td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Core</span></td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Core</span></td>
                <td><span class="badge bg-light text-secondary">No</span></td>
                <td><span class="badge bg-light text-secondary">No</span></td>
                <td><span class="badge bg-light text-secondary">No</span></td>
                <td><span class="badge bg-light text-secondary">No</span></td>
                <td>Strong structured cabling and rack brand for early catalog building.</td>
              </tr>
              <tr>
                <td class="fw-semibold">CommScope</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Core</span></td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Core</span></td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Core</span></td>
                <td><span class="badge bg-light text-secondary">No</span></td>
                <td><span class="badge bg-light text-secondary">No</span></td>
                <td><span class="badge bg-light text-secondary">No</span></td>
                <td><span class="badge bg-light text-secondary">No</span></td>
                <td>Very good for copper, fiber, panels, boxes, and rack infrastructure.</td>
              </tr>
              <tr>
                <td class="fw-semibold">Panduit</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Core</span></td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Core</span></td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Core</span></td>
                <td><span class="badge bg-light text-secondary">No</span></td>
                <td><span class="badge bg-light text-secondary">No</span></td>
                <td><span class="badge bg-light text-secondary">No</span></td>
                <td><span class="badge bg-light text-secondary">No</span></td>
                <td>Best for patching, cable management, labeling, and structured infrastructure accessories.</td>
              </tr>
              <tr>
                <td class="fw-semibold">Nexans</td>
                <td><span class="badge bg-info-subtle text-info-emphasis">Selective</span></td>
                <td><span class="badge bg-light text-secondary">Limited</span></td>
                <td><span class="badge bg-light text-secondary">Limited</span></td>
                <td><span class="badge bg-light text-secondary">No</span></td>
                <td><span class="badge bg-light text-secondary">No</span></td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Core</span></td>
                <td><span class="badge bg-warning-subtle text-warning-emphasis">Review</span></td>
                <td>Use selectively for cable families, especially flexible technical and lighting-related cable lines.</td>
              </tr>
              <tr>
                <td class="fw-semibold">Neutrik</td>
                <td><span class="badge bg-light text-secondary">No</span></td>
                <td><span class="badge bg-info-subtle text-info-emphasis">Selective</span></td>
                <td><span class="badge bg-light text-secondary">No</span></td>
                <td><span class="badge bg-warning-subtle text-warning-emphasis">Review</span></td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Core</span></td>
                <td><span class="badge bg-info-subtle text-info-emphasis">Selective</span></td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Core</span></td>
                <td>Best fit for pro AV and lighting connectors, with etherCON as a crossover networking item.</td>
              </tr>
              <tr>
                <td class="fw-semibold">Reference Cables</td>
                <td><span class="badge bg-light text-secondary">No</span></td>
                <td><span class="badge bg-light text-secondary">Limited</span></td>
                <td><span class="badge bg-light text-secondary">No</span></td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Core</span></td>
                <td><span class="badge bg-info-subtle text-info-emphasis">Selective</span></td>
                <td><span class="badge bg-info-subtle text-info-emphasis">Selective</span></td>
                <td><span class="badge bg-warning-subtle text-warning-emphasis">Review</span></td>
                <td>Strong audio cable brand with some overlap into video, lighting, and network-related pro use.</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="row g-3 mb-4">
          <div class="col-md-4">
            <div class="product-taxonomy-card h-100">
              <h5>Recommended launch brands</h5>
              <ul class="product-taxonomy-list">
                <li>Excel Networking</li>
                <li>CommScope</li>
                <li>Panduit</li>
                <li>Neutrik</li>
                <li>Reference Cables</li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-taxonomy-card h-100">
              <h5>Selective-use brand</h5>
              <ul class="product-taxonomy-list">
                <li>Nexans for targeted cable families</li>
                <li>Keep broader electrical ranges out of the first launch</li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-taxonomy-card h-100">
              <h5>Review bucket</h5>
              <ul class="product-taxonomy-list">
                <li>Broadband and FTTH infrastructure</li>
                <li>Industrial and healthcare connector lines</li>
                <li>Non-core electrical accessories</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
          <div>
            <p class="text-uppercase text-muted mb-1">Starter Catalog</p>
            <h3 class="mb-0">Master category structure</h3>
          </div>
          <span class="badge bg-success-subtle text-success-emphasis">First-pass taxonomy</span>
        </div>
        <div class="row g-3">
          <div class="col-lg-4">
            <div class="product-taxonomy-card h-100">
              <h5>Network Cables</h5>
              <ul class="product-taxonomy-list">
                <li>Cat5e Cables</li>
                <li>Cat6 Cables</li>
                <li>Cat6A Cables</li>
                <li>Patch Cords</li>
                <li>Fiber Optic Cables</li>
                <li>Indoor and Outdoor Network Cables</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="product-taxonomy-card h-100">
              <h5>Networking Accessories</h5>
              <ul class="product-taxonomy-list">
                <li>RJ45 Jacks</li>
                <li>RJ45 Plugs</li>
                <li>Faceplates</li>
                <li>Surface Mount Boxes</li>
                <li>Patch Panels</li>
                <li>Cable Ties and Labels</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="product-taxonomy-card h-100">
              <h5>Fiber and Rack Infrastructure</h5>
              <ul class="product-taxonomy-list">
                <li>Fiber Panels</li>
                <li>Fiber Cassettes</li>
                <li>Fiber Modules</li>
                <li>Splice Trays</li>
                <li>Racks and Open Frames</li>
                <li>Cable Management and Raceways</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="product-taxonomy-card h-100">
              <h5>Professional Audio Cables</h5>
              <ul class="product-taxonomy-list">
                <li>Balanced Microphone Cables</li>
                <li>Instrument Cables</li>
                <li>Speaker Cables</li>
                <li>Digital Audio Cables</li>
                <li>Patch and Interconnect Cables</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="product-taxonomy-card h-100">
              <h5>Professional Audio Accessories</h5>
              <ul class="product-taxonomy-list">
                <li>Adapters</li>
                <li>Stage Boxes</li>
                <li>Hardware Interfaces</li>
                <li>Connector Accessories</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="product-taxonomy-card h-100">
              <h5>Professional Lighting Cables</h5>
              <ul class="product-taxonomy-list">
                <li>DMX Cables</li>
                <li>Signal Cables</li>
                <li>Power Cables for Lighting Applications</li>
                <li>Flexible Technical Cables</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="product-taxonomy-card h-100">
              <h5>Professional Lighting Accessories</h5>
              <ul class="product-taxonomy-list">
                <li>Lighting Connectors</li>
                <li>Adapters</li>
                <li>Mounting and Support Accessories</li>
                <li>Technical Add-ons</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
          <div>
            <p class="text-uppercase text-muted mb-1">Filtered Brand Entries</p>
            <h3 class="mb-0">Neutrik starter list</h3>
          </div>
          <span class="badge bg-success-subtle text-success-emphasis">Filtered and store-ready</span>
        </div>
        <div class="table-responsive">
          <table class="table align-middle mb-0">
            <thead>
              <tr>
                <th>Brand</th>
                <th>Group</th>
                <th>Subgroup</th>
                <th>Product Type</th>
                <th>Filter Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="fw-semibold">Neutrik</td>
                <td>Professional Lighting Accessories</td>
                <td>XLR Connectors</td>
                <td>XLR Cable Connector</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Neutrik</td>
                <td>Professional Lighting Accessories</td>
                <td>XLR Connectors</td>
                <td>XLR Chassis Connector</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Neutrik</td>
                <td>Professional Lighting Accessories</td>
                <td>speakON</td>
                <td>Loudspeaker Connector</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Neutrik</td>
                <td>Professional Lighting Accessories</td>
                <td>powerCON</td>
                <td>Locking Power Connector</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Neutrik</td>
                <td>Professional Lighting Accessories</td>
                <td>powerCON TRUE1</td>
                <td>Outdoor Power Connector</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Neutrik</td>
                <td>Professional Lighting Accessories</td>
                <td>BNC Connectors</td>
                <td>BNC Connector</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Neutrik</td>
                <td>Professional Lighting Accessories</td>
                <td>opticalCON</td>
                <td>Fiber Connector System</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Neutrik</td>
                <td>Professional Lighting Accessories</td>
                <td>FIBERFOX</td>
                <td>Rugged Fiber Connector</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Neutrik</td>
                <td>Networking Accessories</td>
                <td>etherCON</td>
                <td>Rugged RJ45 Connector</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Neutrik</td>
                <td>Professional Lighting Cables</td>
                <td>Power Cords</td>
                <td>Pre-assembled Power Cord</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Neutrik</td>
                <td>Networking Accessories</td>
                <td>Data Cables</td>
                <td>Rugged Data Cable</td>
                <td><span class="badge bg-warning-subtle text-warning-emphasis">Review</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Neutrik</td>
                <td>To Be Reviewed</td>
                <td>Phono (RCA)</td>
                <td>RCA Connector</td>
                <td><span class="badge bg-warning-subtle text-warning-emphasis">Review</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Neutrik</td>
                <td>To Be Reviewed</td>
                <td>Digital Audio Interfaces</td>
                <td>Audio Interface Accessory</td>
                <td><span class="badge bg-warning-subtle text-warning-emphasis">Review</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Neutrik</td>
                <td>To Be Reviewed</td>
                <td>Healthcare / Industrial Lines</td>
                <td>Specialized Connector</td>
                <td><span class="badge bg-warning-subtle text-warning-emphasis">Review</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
          <div>
            <p class="text-uppercase text-muted mb-1">Filtered Brand Entries</p>
            <h3 class="mb-0">CommScope starter list</h3>
          </div>
          <span class="badge bg-success-subtle text-success-emphasis">Filtered and store-ready</span>
        </div>
        <div class="table-responsive">
          <table class="table align-middle mb-0">
            <thead>
              <tr>
                <th>Brand</th>
                <th>Group</th>
                <th>Subgroup</th>
                <th>Product Type</th>
                <th>Filter Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="fw-semibold">CommScope</td>
                <td>Network Cables</td>
                <td>Twisted Pair Cable</td>
                <td>Structured Copper Cable</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">CommScope</td>
                <td>Network Cables</td>
                <td>Twisted Pair Patch Cords</td>
                <td>Copper Patch Cord</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">CommScope</td>
                <td>Network Cables</td>
                <td>Fiber Cable</td>
                <td>Fiber Optic Cable</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">CommScope</td>
                <td>Networking Accessories</td>
                <td>Copper Panels</td>
                <td>RJ45 Patch Panel</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">CommScope</td>
                <td>Networking Accessories</td>
                <td>RJ45 Jacks</td>
                <td>Modular Jack</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">CommScope</td>
                <td>Networking Accessories</td>
                <td>Surface Mount and Zone Boxes</td>
                <td>Surface Mount Box</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">CommScope</td>
                <td>Networking Accessories</td>
                <td>Faceplates</td>
                <td>Wall Faceplate</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">CommScope</td>
                <td>Networking Accessories</td>
                <td>Cable Management</td>
                <td>Cable Manager</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">CommScope</td>
                <td>Fiber and Rack Infrastructure</td>
                <td>Fiber Panels and Modules</td>
                <td>Fiber Panel</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">CommScope</td>
                <td>Fiber and Rack Infrastructure</td>
                <td>Fiber Cassettes</td>
                <td>Fiber Cassette</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">CommScope</td>
                <td>Fiber and Rack Infrastructure</td>
                <td>Fiber Splice Trays</td>
                <td>Fiber Splice Tray</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">CommScope</td>
                <td>Fiber and Rack Infrastructure</td>
                <td>Equipment Racks</td>
                <td>Equipment Rack</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">CommScope</td>
                <td>To Be Reviewed</td>
                <td>Broadband Closures</td>
                <td>Fiber Closure</td>
                <td><span class="badge bg-warning-subtle text-warning-emphasis">Review</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">CommScope</td>
                <td>To Be Reviewed</td>
                <td>Access Terminals</td>
                <td>Fiber Terminal</td>
                <td><span class="badge bg-warning-subtle text-warning-emphasis">Review</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">CommScope</td>
                <td>To Be Reviewed</td>
                <td>Drop Cable Assemblies</td>
                <td>Outdoor Drop Cable Assembly</td>
                <td><span class="badge bg-warning-subtle text-warning-emphasis">Review</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
          <div>
            <p class="text-uppercase text-muted mb-1">Filtered Brand Entries</p>
            <h3 class="mb-0">Excel Networking starter list</h3>
          </div>
          <span class="badge bg-success-subtle text-success-emphasis">Filtered and store-ready</span>
        </div>
        <div class="table-responsive">
          <table class="table align-middle mb-0">
            <thead>
              <tr>
                <th>Brand</th>
                <th>Group</th>
                <th>Subgroup</th>
                <th>Product Type</th>
                <th>Filter Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="fw-semibold">Excel Networking</td>
                <td>Network Cables</td>
                <td>Copper Cable</td>
                <td>Bulk Copper Cable</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Excel Networking</td>
                <td>Network Cables</td>
                <td>Patch Leads</td>
                <td>Copper Patch Cord</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Excel Networking</td>
                <td>Network Cables</td>
                <td>Fibre Cable</td>
                <td>Fibre Optic Cable</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Excel Networking</td>
                <td>Networking Accessories</td>
                <td>Copper Patch Panels & Frames</td>
                <td>Patch Panel</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Excel Networking</td>
                <td>Networking Accessories</td>
                <td>Keystone Jacks & Shutters</td>
                <td>Keystone Jack</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Excel Networking</td>
                <td>Networking Accessories</td>
                <td>Modules & Faceplates</td>
                <td>Faceplate</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Excel Networking</td>
                <td>Networking Accessories</td>
                <td>Backboxes & Floorboxes</td>
                <td>Backbox</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Excel Networking</td>
                <td>Networking Accessories</td>
                <td>Cable Management</td>
                <td>Cable Manager</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Excel Networking</td>
                <td>Fiber and Rack Infrastructure</td>
                <td>Fibre Patch Panels</td>
                <td>Fibre Panel</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Excel Networking</td>
                <td>Fiber and Rack Infrastructure</td>
                <td>Fibre Patch Panel Cassettes</td>
                <td>Fibre Cassette</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Excel Networking</td>
                <td>Fiber and Rack Infrastructure</td>
                <td>Fibre Connectors & Couplers</td>
                <td>Fibre Coupler</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Excel Networking</td>
                <td>Fiber and Rack Infrastructure</td>
                <td>Racks & Cabinets</td>
                <td>Floor Rack</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Excel Networking</td>
                <td>Fiber and Rack Infrastructure</td>
                <td>Wall Racks</td>
                <td>Wall Cabinet</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Excel Networking</td>
                <td>Fiber and Rack Infrastructure</td>
                <td>Open-Frame Racks</td>
                <td>Open Frame Rack</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Excel Networking</td>
                <td>Fiber and Rack Infrastructure</td>
                <td>Rack Components</td>
                <td>Rack Accessory</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Excel Networking</td>
                <td>Fiber and Rack Infrastructure</td>
                <td>PDUs</td>
                <td>Power Distribution Unit</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Excel Networking</td>
                <td>To Be Reviewed</td>
                <td>Telephone Networking</td>
                <td>Telephone Module</td>
                <td><span class="badge bg-warning-subtle text-warning-emphasis">Review</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Excel Networking</td>
                <td>To Be Reviewed</td>
                <td>Ducting</td>
                <td>Ducting Accessory</td>
                <td><span class="badge bg-warning-subtle text-warning-emphasis">Review</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Excel Networking</td>
                <td>To Be Reviewed</td>
                <td>Housing, Domes & Enclosures</td>
                <td>External Enclosure</td>
                <td><span class="badge bg-warning-subtle text-warning-emphasis">Review</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
          <div>
            <p class="text-uppercase text-muted mb-1">Visual Reference</p>
            <h3 class="mb-0">Sample product pictures</h3>
          </div>
          <span class="badge bg-secondary-subtle text-secondary-emphasis">Temporary placeholders</span>
        </div>
        <div class="row g-3">
          <div class="col-md-6 col-xl-3">
            <div class="product-sample-card h-100">
              <img src="{{ asset('build/images/categories/twisted-pair-cable.jfif') }}" class="product-sample-image" alt="Twisted pair cable sample">
              <div class="product-sample-body">
                <h5>Network Cables</h5>
                <p class="text-secondary mb-0">Featured sample: twisted pair cable for copper structured cabling and patching categories.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <div class="product-sample-card h-100">
              <img src="{{ asset('build/images/categories/network-accessories-sample.svg') }}" class="product-sample-image" alt="Sample networking accessories">
              <div class="product-sample-body">
                <h5>Networking Accessories</h5>
                <p class="text-secondary mb-0">Use for keystones, jacks, faceplates, patch panels, and mounting items.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <div class="product-sample-card h-100">
              <img src="{{ asset('build/images/categories/lighting-cables-sample.svg') }}" class="product-sample-image" alt="Sample professional lighting cables">
              <div class="product-sample-body">
                <h5>Professional Lighting Cables</h5>
                <p class="text-secondary mb-0">Use for DMX, power, signal, and flexible technical cable references.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <div class="product-sample-card h-100">
              <img src="{{ asset('build/images/categories/lighting-accessories-sample.svg') }}" class="product-sample-image" alt="Sample professional lighting accessories">
              <div class="product-sample-body">
                <h5>Lighting Accessories</h5>
                <p class="text-secondary mb-0">Use for connectors, adapters, support hardware, and technical add-ons.</p>
              </div>
            </div>
          </div>
        </div>
        <p class="text-secondary mt-3 mb-0">Once you share real product images, I can replace these placeholders with actual category-specific visuals.</p>
      </div>
    </div>
  </div>
  <div class="col-xl-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
          <div>
            <p class="text-uppercase text-muted mb-1">Filtered Brand Entries</p>
            <h3 class="mb-0">Reference Cables starter list</h3>
          </div>
          <span class="badge bg-success-subtle text-success-emphasis">Filtered and store-ready</span>
        </div>
        <div class="table-responsive mb-4">
          <table class="table align-middle mb-0">
            <thead>
              <tr>
                <th>Brand</th>
                <th>Group</th>
                <th>Subgroup</th>
                <th>Product Type</th>
                <th>Filter Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="fw-semibold">Reference Cables</td>
                <td>Professional Audio Cables</td>
                <td>Balanced Cables</td>
                <td>Microphone Cable</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Reference Cables</td>
                <td>Professional Audio Cables</td>
                <td>Unbalanced Cables</td>
                <td>Instrument Cable</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Reference Cables</td>
                <td>Professional Audio Cables</td>
                <td>Power Cables</td>
                <td>Amplifier to Cabinet Cable</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Reference Cables</td>
                <td>Professional Audio Cables</td>
                <td>Digital Audio</td>
                <td>AES/EBU Cable</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Reference Cables</td>
                <td>Professional Audio Cables</td>
                <td>Multi-core Audio</td>
                <td>Multipair Audio Cable</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Reference Cables</td>
                <td>Professional Audio Accessories</td>
                <td>Adapters</td>
                <td>Audio Adapter Cable</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Keep</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Reference Cables</td>
                <td>Professional Audio Accessories</td>
                <td>Hardware</td>
                <td>Signal Interface Hardware</td>
                <td><span class="badge bg-warning-subtle text-warning-emphasis">Review</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Reference Cables</td>
                <td>Professional Audio Accessories</td>
                <td>Stage Boxes</td>
                <td>Stage Box</td>
                <td><span class="badge bg-warning-subtle text-warning-emphasis">Review</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Reference Cables</td>
                <td>Professional Lighting Cables</td>
                <td>Lighting and Technical Lines</td>
                <td>Technical Signal Cable</td>
                <td><span class="badge bg-info-subtle text-info-emphasis">Selective</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Reference Cables</td>
                <td>To Be Reviewed</td>
                <td>Video Cables</td>
                <td>Professional Video Cable</td>
                <td><span class="badge bg-warning-subtle text-warning-emphasis">Review</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Reference Cables</td>
                <td>To Be Reviewed</td>
                <td>Network Cables</td>
                <td>Category Cable</td>
                <td><span class="badge bg-warning-subtle text-warning-emphasis">Review</span></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
          <div>
            <p class="text-uppercase text-muted mb-1">Brand Visuals</p>
            <h3 class="mb-0">Real sample images by supplier</h3>
          </div>
          <span class="badge bg-success-subtle text-success-emphasis">Official product references</span>
        </div>
        <div class="row g-3">
          <div class="col-md-6 col-xl-3">
            <a href="https://www.commscope.com/product-type/frames-panels-cassettes-modules/copper-panels-modules-cassettes/copper-panels/cpp-dm-panels/" target="_blank" class="product-brand-card text-decoration-none">
              <img src="https://productresources.commscope.com/admin/ImageServer.php?ID=0bd6907af8bed8148b2a871cbc004528829771bd7a4a2896606c0a7e4bc426bd%3A70097%40pjk349&class=Mamfile&downloadname=DM-1RU-1-teir-collage.jpg&preset=10&rand=920c6dea9ab44dbf8cac886188a18f44" class="product-brand-image" alt="CommScope sample product">
              <div class="product-brand-body">
                <h5>CommScope</h5>
                <p class="text-secondary mb-0">RJ45 patch panel sample from the SYSTIMAX structured cabling portfolio.</p>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-xl-3">
            <a href="https://excel-networking.com/catalogue/product/100-463" target="_blank" class="product-brand-card text-decoration-none">
              <img src="https://media.excel-networking.com/images/EXCEL/100_463_angle_800px.jpg" class="product-brand-image" alt="Excel Networking sample product">
              <div class="product-brand-body">
                <h5>Excel Networking</h5>
                <p class="text-secondary mb-0">Voice patch panel sample representing Excel structured cabling hardware.</p>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-xl-3">
            <a href="https://www.panduit.com/en/products/copper-systems/patch-panels-accessories.html" target="_blank" class="product-brand-card text-decoration-none">
              <img src="https://www.panduit.com/content/dam/panduit/en/copper-systems/images/G-COCPPLA24WBLY--INDC-O-HIR-ENG-labels.jpg" class="product-brand-image" alt="Panduit sample product">
              <div class="product-brand-body">
                <h5>Panduit</h5>
                <p class="text-secondary mb-0">Populated patch panel sample from Panduit copper systems.</p>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-xl-3">
            <a href="https://www.nexans.ae/en/products/Energy-Cables/Building-Energy/HO7RN-F-Rubber-cables/H07RN-F-4943.html" target="_blank" class="product-brand-card text-decoration-none">
              <img src="{{ asset('build/images/categories/lighting-cables-sample.svg') }}" class="product-brand-image" alt="Nexans flexible cable reference">
              <div class="product-brand-body">
                <h5>Nexans</h5>
                <p class="text-secondary mb-0">H07RN-F flexible cable reference linked to the official Nexans product family page.</p>
              </div>
            </a>
          </div>
        </div>
        <p class="text-secondary mt-3 mb-0">CommScope, Excel Networking, and Panduit use direct official product images. Nexans is linked to the official H07RN-F product family page and can be swapped to a direct product image once we capture a stable asset URL from their site.</p>
      </div>
    </div>
  </div>
  <div class="col-xl-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
          <div>
            <p class="text-uppercase text-muted mb-1">Import Template</p>
            <h3 class="mb-0">Recommended product data structure</h3>
          </div>
          <span class="badge bg-primary-subtle text-primary-emphasis">Use this for future bulk entry</span>
        </div>
        <div class="table-responsive">
          <table class="table align-middle mb-0">
            <thead>
              <tr>
                <th>Field</th>
                <th>Purpose</th>
                <th>Example</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="fw-semibold">Brand</td>
                <td>Supplier or manufacturer name</td>
                <td>Panduit</td>
              </tr>
              <tr>
                <td class="fw-semibold">Group</td>
                <td>Main commercial category</td>
                <td>Network Cables</td>
              </tr>
              <tr>
                <td class="fw-semibold">Subgroup</td>
                <td>Smaller catalog division</td>
                <td>Patch Cords</td>
              </tr>
              <tr>
                <td class="fw-semibold">Product Type</td>
                <td>General item classification</td>
                <td>Cat6 Patch Cord</td>
              </tr>
              <tr>
                <td class="fw-semibold">Product Name</td>
                <td>Display title for the store</td>
                <td>Cat6 UTP Patch Cord 3m Blue</td>
              </tr>
              <tr>
                <td class="fw-semibold">Target Buyer</td>
                <td>Main B2B customer type</td>
                <td>Integrators and Resellers</td>
              </tr>
              <tr>
                <td class="fw-semibold">Notes</td>
                <td>Temporary planning, sourcing, or spec notes</td>
                <td>Fast-moving SKU, core launch item</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-muted mb-1">Step 1</p>
        <h3 class="mb-4">Add a product</h3>
        <form id="productWorkspaceForm">
          <div class="mb-3">
            <label for="productName" class="form-label">Product name</label>
            <input type="text" class="form-control" id="productName" placeholder="Example: Cat6 Patch Cord 3m" required>
          </div>
          <div class="mb-3">
            <label for="productGroup" class="form-label">Primary group</label>
            <select class="form-select" id="productGroup" required>
              <option value="">Select group</option>
              <option value="Network Cables">Network Cables</option>
              <option value="Networking Accessories">Networking Accessories</option>
              <option value="Professional Audio Cables">Professional Audio Cables</option>
              <option value="Professional Audio Accessories">Professional Audio Accessories</option>
              <option value="Professional Lighting Cables">Professional Lighting Cables</option>
              <option value="Professional Lighting Accessories">Professional Lighting Accessories</option>
              <option value="To Be Reviewed">To Be Reviewed</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="productSubgroup" class="form-label">Subgroup</label>
            <input type="text" class="form-control" id="productSubgroup" placeholder="Example: Patch Cords, Connectors, DMX">
          </div>
          <div class="mb-3">
            <label for="productAudience" class="form-label">Target buyer</label>
            <input type="text" class="form-control" id="productAudience" placeholder="Example: Integrators, Resellers, Installers">
          </div>
          <div class="mb-3">
            <label for="productNotes" class="form-label">Notes</label>
            <textarea class="form-control" id="productNotes" rows="4" placeholder="Temporary notes, specs, brand ideas, or sourcing comments"></textarea>
          </div>
          <div class="d-flex flex-wrap gap-2">
            <button type="submit" class="btn btn-primary">Save product</button>
            <button type="reset" class="btn btn-outline-secondary">Reset</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-xl-8 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
          <div>
            <p class="text-uppercase text-muted mb-1">Step 2</p>
            <h3 class="mb-0">Draft product structure</h3>
          </div>
          <span class="badge bg-info-subtle text-info-emphasis">Saved in browser storage</span>
        </div>
        <div class="row g-3">
          <div class="col-md-6 col-xxl-4">
            <div class="product-group-card">
              <div class="d-flex justify-content-between align-items-start">
                <div>
                  <p class="text-uppercase text-muted mb-1">Group</p>
                  <h5 class="mb-1">Network Cables</h5>
                </div>
                <span class="badge rounded-pill text-bg-light" data-group-count="Network Cables">0</span>
              </div>
              <p class="text-secondary mb-0">Patch cords, bulk cable, fiber, coaxial, and structured cabling essentials.</p>
            </div>
          </div>
          <div class="col-md-6 col-xxl-4">
            <div class="product-group-card">
              <div class="d-flex justify-content-between align-items-start">
                <div>
                  <p class="text-uppercase text-muted mb-1">Group</p>
                  <h5 class="mb-1">Networking Accessories</h5>
                </div>
                <span class="badge rounded-pill text-bg-light" data-group-count="Networking Accessories">0</span>
              </div>
              <p class="text-secondary mb-0">Keystones, connectors, patch panels, tools, trays, labels, and support accessories.</p>
            </div>
          </div>
          <div class="col-md-6 col-xxl-4">
            <div class="product-group-card">
              <div class="d-flex justify-content-between align-items-start">
                <div>
                  <p class="text-uppercase text-muted mb-1">Group</p>
                  <h5 class="mb-1">Professional Lighting Cables</h5>
                </div>
                <span class="badge rounded-pill text-bg-light" data-group-count="Professional Lighting Cables">0</span>
              </div>
              <p class="text-secondary mb-0">DMX cables, power cables, signal cables, and project-specific lighting cabling.</p>
            </div>
          </div>
          <div class="col-md-6 col-xxl-6">
            <div class="product-group-card">
              <div class="d-flex justify-content-between align-items-start">
                <div>
                  <p class="text-uppercase text-muted mb-1">Group</p>
                  <h5 class="mb-1">Professional Audio Cables</h5>
                </div>
                <span class="badge rounded-pill text-bg-light" data-group-count="Professional Audio Cables">0</span>
              </div>
              <p class="text-secondary mb-0">Microphone cables, instrument cables, speaker cables, balanced lines, and studio signal cables.</p>
            </div>
          </div>
          <div class="col-md-6 col-xxl-6">
            <div class="product-group-card">
              <div class="d-flex justify-content-between align-items-start">
                <div>
                  <p class="text-uppercase text-muted mb-1">Group</p>
                  <h5 class="mb-1">Professional Audio Accessories</h5>
                </div>
                <span class="badge rounded-pill text-bg-light" data-group-count="Professional Audio Accessories">0</span>
              </div>
              <p class="text-secondary mb-0">Adapters, stage boxes, DI-related items, connectors, and support hardware for pro audio workflows.</p>
            </div>
          </div>
          <div class="col-md-6 col-xxl-6">
            <div class="product-group-card">
              <div class="d-flex justify-content-between align-items-start">
                <div>
                  <p class="text-uppercase text-muted mb-1">Group</p>
                  <h5 class="mb-1">Professional Lighting Accessories</h5>
                </div>
                <span class="badge rounded-pill text-bg-light" data-group-count="Professional Lighting Accessories">0</span>
              </div>
              <p class="text-secondary mb-0">Adapters, connectors, mounting add-ons, control accessories, and supporting technical items.</p>
            </div>
          </div>
          <div class="col-md-6 col-xxl-6">
            <div class="product-group-card">
              <div class="d-flex justify-content-between align-items-start">
                <div>
                  <p class="text-uppercase text-muted mb-1">Group</p>
                  <h5 class="mb-1">To Be Reviewed</h5>
                </div>
                <span class="badge rounded-pill text-bg-light" data-group-count="To Be Reviewed">0</span>
              </div>
              <p class="text-secondary mb-0">Use this bucket for products that need clearer grouping, naming, or sourcing decisions.</p>
            </div>
          </div>
        </div>
        <div class="alert alert-soft-primary product-workspace-note mt-4 mb-0" role="alert">
          The goal here is not perfection. The goal is to capture products quickly, then refine the category logic later.
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
          <div>
            <p class="text-uppercase text-muted mb-1">Brand Fit</p>
            <h3 class="mb-0">Suggested supplier focus</h3>
          </div>
          <span class="badge bg-warning-subtle text-warning-emphasis">Working shortlist</span>
        </div>
        <div class="table-responsive mb-4">
          <table class="table align-middle">
            <thead>
              <tr>
                <th>Brand</th>
                <th>Best-fit categories</th>
                <th>Recommended status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="fw-semibold">Panduit</td>
                <td>Network Cables, Networking Accessories, Fiber and Rack Infrastructure</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Core</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">CommScope</td>
                <td>Network Cables, Networking Accessories, Fiber and Rack Infrastructure</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Core</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Excel Networking</td>
                <td>Network Cables, Networking Accessories, Fiber and Rack Infrastructure</td>
                <td><span class="badge bg-success-subtle text-success-emphasis">Core</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Nexans</td>
                <td>Selected Cable Lines, Professional Lighting Cables, Low-voltage Cable Families</td>
                <td><span class="badge bg-info-subtle text-info-emphasis">Selective</span></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
          <div>
            <p class="text-uppercase text-muted mb-1">Step 3</p>
            <h3 class="mb-0">Temporary product list</h3>
          </div>
          <div class="d-flex flex-wrap gap-2">
            <select class="form-select product-filter-select" id="productGroupFilter">
              <option value="All">All groups</option>
              <option value="Network Cables">Network Cables</option>
              <option value="Networking Accessories">Networking Accessories</option>
              <option value="Professional Audio Cables">Professional Audio Cables</option>
              <option value="Professional Audio Accessories">Professional Audio Accessories</option>
              <option value="Professional Lighting Cables">Professional Lighting Cables</option>
              <option value="Professional Lighting Accessories">Professional Lighting Accessories</option>
              <option value="To Be Reviewed">To Be Reviewed</option>
            </select>
            <button type="button" class="btn btn-outline-danger" id="clearProductsButton">Clear all</button>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table align-middle mb-0">
            <thead>
              <tr>
                <th>Product</th>
                <th>Group</th>
                <th>Subgroup</th>
                <th>Target buyer</th>
                <th>Notes</th>
                <th class="text-end">Action</th>
              </tr>
            </thead>
            <tbody id="productWorkspaceTableBody">
              <tr id="productWorkspaceEmptyState">
                <td colspan="6" class="text-center text-secondary py-4">No products added yet. Start collecting items using the form on the left.</td>
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
        <p class="text-uppercase text-muted mb-1">What comes next</p>
        <h3 class="mb-3">Planned sequence after product collection</h3>
        <div class="row g-3">
          <div class="col-md-4">
            <div class="product-sequence-card h-100">
              <span class="product-sequence-number">01</span>
              <h5>Finalize product groups</h5>
              <p class="text-secondary mb-0">Confirm which categories are core, which are secondary, and which products need a different structure.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-sequence-card h-100">
              <span class="product-sequence-number">02</span>
              <h5>Define operating logic</h5>
              <p class="text-secondary mb-0">Clarify sourcing, pricing approach, stock rules, and how B2B ordering will work.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-sequence-card h-100">
              <span class="product-sequence-number">03</span>
              <h5>Build strategy</h5>
              <p class="text-secondary mb-0">Move into sales strategy, business plans, marketing priorities, and category growth decisions.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('custom-scripts')
  @vite(['resources/js/pages/product-workspace.js'])
@endpush
