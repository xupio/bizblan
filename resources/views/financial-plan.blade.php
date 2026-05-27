@extends('layout.master')

@section('content')
<div class="business-plan-hero grid-margin">
  <div class="d-flex flex-column flex-lg-row justify-content-between align-items-start gap-4">
    <div>
      <span class="badge rounded-pill bg-white text-dark fw-semibold px-3 py-2 mb-3">Template Page</span>
      <h1 class="display-6 fw-bold text-white mb-3">Financial Plan</h1>
      <p class="text-white-50 mb-0 business-plan-intro">
        This page is the template for the company’s financial model, including buy prices, sell prices, margin ranges, operating expenses, payment terms, and the full business plan financial logic.
      </p>
    </div>
    <div class="business-plan-scorecard">
      <div class="small text-uppercase text-white-50 mb-2">Planning Layer</div>
      <div class="d-flex align-items-end gap-2">
        <h2 class="text-white mb-0">03</h2>
        <span class="text-success fw-semibold">Financial model</span>
      </div>
      <div class="progress mt-3 bg-white bg-opacity-25" role="progressbar" aria-label="Financial planning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar bg-warning" style="width: 10%"></div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-8 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-muted mb-1">Purpose</p>
        <h3 class="mb-3">What the financial plan will cover</h3>
        <p class="text-secondary mb-3">
          This template will define the economics of the business, including procurement costs, selling prices, gross margin logic, account credit exposure, operating expenses, and the overall business plan viability model.
        </p>
        <p class="text-secondary mb-0">
          It will eventually translate the commercial strategy into numbers that show margin structure, working capital requirements, payment behavior, and expected profitability.
        </p>
      </div>
    </div>
  </div>
  <div class="col-xl-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-muted mb-1">Core Focus</p>
        <h3 class="mb-4">Financial priorities</h3>
        <div class="d-flex justify-content-between align-items-center py-2 border-bottom">
          <span>Buying price model</span>
          <strong>To define</strong>
        </div>
        <div class="d-flex justify-content-between align-items-center py-2 border-bottom">
          <span>Selling price model</span>
          <strong>To define</strong>
        </div>
        <div class="d-flex justify-content-between align-items-center py-2 border-bottom">
          <span>Margin model</span>
          <strong>To define</strong>
        </div>
        <div class="d-flex justify-content-between align-items-center py-2">
          <span>Operating cost model</span>
          <strong>To define</strong>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-muted mb-1">Section 1</p>
        <h4 class="mb-3">Revenue model</h4>
        <ul class="business-plan-list">
          <li>Sales by category</li>
          <li>Sales by product tier</li>
          <li>Repeat-order assumptions</li>
          <li>Customer account growth assumptions</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-lg-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-muted mb-1">Section 2</p>
        <h4 class="mb-3">Margin and pricing</h4>
        <ul class="business-plan-list">
          <li>Buy price logic</li>
          <li>Sell price logic</li>
          <li>Gross margin range by category</li>
          <li>Margin differences by branded, mid-level, and acceptable ranges</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-lg-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-muted mb-1">Section 3</p>
        <h4 class="mb-3">Operating expenses</h4>
        <ul class="business-plan-list">
          <li>Payroll and management cost</li>
          <li>Warehouse and delivery cost</li>
          <li>Platform and payment processing cost</li>
          <li>Marketing, admin, and finance overhead</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-muted mb-1">Planning Table</p>
        <h4 class="mb-4">Financial model components</h4>
        <div class="table-responsive">
          <table class="table align-middle mb-0">
            <thead>
              <tr>
                <th>Model block</th>
                <th>Focus</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="fw-semibold">Sales forecast</td>
                <td>Orders, customer count, and revenue by category</td>
                <td><span class="badge bg-warning-subtle text-warning-emphasis">Pending definition</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Gross margin model</td>
                <td>Buying vs selling price logic and category margin structure</td>
                <td><span class="badge bg-warning-subtle text-warning-emphasis">Pending definition</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Operating expense model</td>
                <td>Full company operating cost structure</td>
                <td><span class="badge bg-warning-subtle text-warning-emphasis">Pending definition</span></td>
              </tr>
              <tr>
                <td class="fw-semibold">Cash-flow model</td>
                <td>Inventory funding, payment timing, credit, and collection cycle</td>
                <td><span class="badge bg-warning-subtle text-warning-emphasis">Pending definition</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
