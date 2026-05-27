@extends('layout.master')

@section('content')
<div class="business-plan-hero grid-margin">
  <div class="d-flex flex-column flex-lg-row justify-content-between align-items-start gap-4">
    <div>
      <span class="badge rounded-pill bg-white text-dark fw-semibold px-3 py-2 mb-3">Template Page</span>
      <h1 class="display-6 fw-bold text-white mb-3">Company Structure</h1>
      <p class="text-white-50 mb-0 business-plan-intro">
        This page is the working template for defining the structure of the company, internal responsibilities, reporting lines, and the way the business operates day to day.
      </p>
    </div>
    <div class="business-plan-scorecard">
      <div class="small text-uppercase text-white-50 mb-2">Planning Layer</div>
      <div class="d-flex align-items-end gap-2">
        <h2 class="text-white mb-0">01</h2>
        <span class="text-success fw-semibold">Organization design</span>
      </div>
      <div class="progress mt-3 bg-white bg-opacity-25" role="progressbar" aria-label="Company structure planning" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar bg-warning" style="width: 15%"></div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-muted mb-1">Digital Tree</p>
        <h4 class="mb-2">Initial organization tree</h4>
        <p class="text-secondary mb-4">
          A visual department tree based on the first company structure layer: management at the top, with sales, operations, finance, and administration underneath.
        </p>
        <div class="company-tree-board">
          <div class="company-tree-board-header">
            <h5 class="text-white mb-2">Company Structure Tree</h5>
            <p class="text-white-50 mb-0">Visual reporting view for the company structure and reporting hierarchy.</p>
          </div>
          <div class="company-tree-legend">
            <span class="company-tree-chip company-tree-chip-management">Management</span>
            <span class="company-tree-chip company-tree-chip-sales">Sales</span>
            <span class="company-tree-chip company-tree-chip-operations">Operations</span>
            <span class="company-tree-chip company-tree-chip-finance">Finance</span>
            <span class="company-tree-chip company-tree-chip-administration">Administration</span>
          </div>
          <div class="company-tree-stage">
            <span class="company-tree-line company-tree-line-root"></span>
            <span class="company-tree-line company-tree-line-branches"></span>
            <span class="company-tree-line company-tree-line-sales"></span>
            <span class="company-tree-line company-tree-line-operations"></span>
            <span class="company-tree-line company-tree-line-finance"></span>
            <span class="company-tree-line company-tree-line-administration"></span>
            <span class="company-tree-line company-tree-line-sales-team"></span>
            <span class="company-tree-line company-tree-line-sales-manager"></span>
            <span class="company-tree-line company-tree-line-sales-manager-rail"></span>
            <span class="company-tree-line company-tree-line-sales-sub-1"></span>
            <span class="company-tree-line company-tree-line-sales-sub-2"></span>
            <span class="company-tree-line company-tree-line-operations-team"></span>
            <span class="company-tree-line company-tree-line-operations-rail"></span>
            <span class="company-tree-line company-tree-line-operations-sub-1"></span>
            <span class="company-tree-line company-tree-line-operations-sub-2"></span>
            <span class="company-tree-line company-tree-line-finance-team"></span>
            <span class="company-tree-line company-tree-line-finance-manager"></span>
            <span class="company-tree-line company-tree-line-finance-manager-rail"></span>
            <span class="company-tree-line company-tree-line-finance-sub-1"></span>
            <span class="company-tree-line company-tree-line-admin-team"></span>
            <span class="company-tree-line company-tree-line-admin-role-rail"></span>
            <span class="company-tree-line company-tree-line-admin-sub-1"></span>
            <span class="company-tree-line company-tree-line-admin-sub-2"></span>
            <span class="company-tree-line company-tree-line-logistics-team"></span>
            <span class="company-tree-line company-tree-line-logistics-manager"></span>
            <span class="company-tree-line company-tree-line-logistics-manager-rail"></span>
            <span class="company-tree-line company-tree-line-logistics-sub-1"></span>
            <span class="company-tree-line company-tree-line-logistics-sub-2"></span>
            <span class="company-tree-line company-tree-line-procurement-team"></span>
            <span class="company-tree-line company-tree-line-procurement-manager"></span>
            <span class="company-tree-line company-tree-line-procurement-manager-rail"></span>
            <span class="company-tree-line company-tree-line-procurement-sub-1"></span>
            <span class="company-tree-line company-tree-line-procurement-sub-2"></span>

            <button type="button" class="company-tree-card company-tree-card-management company-tree-card-button"
              data-bs-toggle="modal" data-bs-target="#companyTreeDetailModal"
              data-tree-title="Management"
              data-tree-subtitle="Top Leadership"
              data-tree-meta="1 employee"
              data-tree-details="GM Founder; Top management; Strategic direction and top-level approvals; Final ownership of administration, sales, finance, and operations.">
              <div class="company-tree-avatar">MG</div>
              <div class="company-tree-status"></div>
              <h6>Management</h6>
              <p class="company-tree-role">Top Leadership</p>
              <p class="company-tree-meta">1 employee</p>
              <p class="company-tree-hint">Tap for details</p>
            </button>

            <button type="button" class="company-tree-card company-tree-card-sales company-tree-card-button"
              data-bs-toggle="modal" data-bs-target="#companyTreeDetailModal"
              data-tree-title="Sales"
              data-tree-subtitle="Commercial Department"
              data-tree-meta="3 employees"
              data-tree-details="Sales department; Reports to management; Sales Manager; 2 Account Managers; Commercial follow-up and customer relationship management.">
              <div class="company-tree-avatar">SA</div>
              <div class="company-tree-status"></div>
              <h6>Sales</h6>
              <p class="company-tree-role">Commercial Department</p>
              <p class="company-tree-meta">3 employees</p>
              <p class="company-tree-hint">Tap for details</p>
            </button>

            <button type="button" class="company-tree-card company-tree-card-sub company-tree-card-sub-sales-manager company-tree-card-button"
              data-bs-toggle="modal" data-bs-target="#companyTreeDetailModal"
              data-tree-title="Sales Manager"
              data-tree-subtitle="Sales Department"
              data-tree-meta="1 position"
              data-tree-details="Leads the sales department; Oversees quotations and pricing; Manages commercial follow-up; Supervises account managers.">
              <div class="company-tree-avatar company-tree-avatar-sub">SM</div>
              <h6>Sales Manager</h6>
              <p class="company-tree-role">Department lead</p>
            </button>

            <button type="button" class="company-tree-card company-tree-card-sub company-tree-card-sub-sales-account-1 company-tree-card-button"
              data-bs-toggle="modal" data-bs-target="#companyTreeDetailModal"
              data-tree-title="Account Manager"
              data-tree-subtitle="Sales Department"
              data-tree-meta="1 position"
              data-tree-details="Account manager position under the Sales Manager; Handles B2B clients; Supports project follow-up and repeat orders.">
              <div class="company-tree-avatar company-tree-avatar-sub">AM</div>
              <h6>Account Manager</h6>
              <p class="company-tree-role">Sales team</p>
            </button>

            <button type="button" class="company-tree-card company-tree-card-sub company-tree-card-sub-sales-account-2 company-tree-card-button"
              data-bs-toggle="modal" data-bs-target="#companyTreeDetailModal"
              data-tree-title="Account Manager"
              data-tree-subtitle="Sales Department"
              data-tree-meta="1 position"
              data-tree-details="Second account manager position under the Sales Manager; Handles B2B client accounts and commercial follow-up.">
              <div class="company-tree-avatar company-tree-avatar-sub">AM</div>
              <h6>Account Manager</h6>
              <p class="company-tree-role">Sales team</p>
            </button>

            <button type="button" class="company-tree-card company-tree-card-operations company-tree-card-button"
              data-bs-toggle="modal" data-bs-target="#companyTreeDetailModal"
              data-tree-title="Operations"
              data-tree-subtitle="Execution Department"
              data-tree-meta="To define"
              data-tree-details="Operations department under management; Two sub-departments; Logistics and Warehouse; Procurement.">
              <div class="company-tree-avatar">OP</div>
              <div class="company-tree-status"></div>
              <h6>Operations</h6>
              <p class="company-tree-role">Execution Department</p>
              <p class="company-tree-meta">To define</p>
              <p class="company-tree-hint">Tap for details</p>
            </button>

            <button type="button" class="company-tree-card company-tree-card-sub company-tree-card-sub-operations-logistics company-tree-card-button"
              data-bs-toggle="modal" data-bs-target="#companyTreeDetailModal"
              data-tree-title="Logistics & Warehouse"
              data-tree-subtitle="Operations Sub-Department"
              data-tree-meta="7 employees"
              data-tree-details="Sub-department under Operations; Logistics Manager; 4 Warehouse Employees; 2 Drivers; Warehouse flow; Inventory handling; Dispatch coordination; Delivery preparation.">
              <div class="company-tree-avatar company-tree-avatar-sub">LW</div>
              <h6>Logistics & Warehouse</h6>
              <p class="company-tree-role">Operations branch</p>
            </button>

            <button type="button" class="company-tree-card company-tree-card-sub company-tree-card-sub-logistics-manager company-tree-card-button"
              data-bs-toggle="modal" data-bs-target="#companyTreeDetailModal"
              data-tree-title="Logistics Manager"
              data-tree-subtitle="Logistics & Warehouse"
              data-tree-meta="1 position"
              data-tree-details="Leads the logistics department; Oversees warehouse activity; Controls dispatch coordination; Supervises warehouse employees and drivers.">
              <div class="company-tree-avatar company-tree-avatar-sub">LM</div>
              <h6>Logistics Manager</h6>
              <p class="company-tree-role">Department lead</p>
            </button>

            <button type="button" class="company-tree-card company-tree-card-sub company-tree-card-sub-logistics-warehouse company-tree-card-button"
              data-bs-toggle="modal" data-bs-target="#companyTreeDetailModal"
              data-tree-title="Warehouse Team"
              data-tree-subtitle="Logistics & Warehouse"
              data-tree-meta="4 employees"
              data-tree-details="4 warehouse employees; Loading and unloading; Shelf preparation; Warehouse support; Stock movement handling.">
              <div class="company-tree-avatar company-tree-avatar-sub">WH</div>
              <h6>Warehouse Team</h6>
              <p class="company-tree-role">4 employees</p>
            </button>

            <button type="button" class="company-tree-card company-tree-card-sub company-tree-card-sub-logistics-drivers company-tree-card-button"
              data-bs-toggle="modal" data-bs-target="#companyTreeDetailModal"
              data-tree-title="Drivers"
              data-tree-subtitle="Logistics & Warehouse"
              data-tree-meta="2 employees"
              data-tree-details="2 drivers; Delivery support; Dispatch execution; Route handling under the logistics department.">
              <div class="company-tree-avatar company-tree-avatar-sub">DR</div>
              <h6>Drivers</h6>
              <p class="company-tree-role">2 employees</p>
            </button>

            <button type="button" class="company-tree-card company-tree-card-sub company-tree-card-sub-operations-procurement company-tree-card-button"
              data-bs-toggle="modal" data-bs-target="#companyTreeDetailModal"
              data-tree-title="Procurement"
              data-tree-subtitle="Operations Sub-Department"
              data-tree-meta="2 employees"
              data-tree-details="Sub-department under Operations; Procurement Manager; Procurement Officer; Purchasing; Supplier coordination; Stock replenishment; Procurement planning.">
              <div class="company-tree-avatar company-tree-avatar-sub">PR</div>
              <h6>Procurement</h6>
              <p class="company-tree-role">Operations branch</p>
            </button>

            <button type="button" class="company-tree-card company-tree-card-sub company-tree-card-sub-procurement-manager company-tree-card-button"
              data-bs-toggle="modal" data-bs-target="#companyTreeDetailModal"
              data-tree-title="Procurement Manager"
              data-tree-subtitle="Procurement"
              data-tree-meta="1 position"
              data-tree-details="Leads the procurement department; Oversees purchasing; Manages supplier coordination; Controls procurement planning.">
              <div class="company-tree-avatar company-tree-avatar-sub">PM</div>
              <h6>Procurement Manager</h6>
              <p class="company-tree-role">Department lead</p>
            </button>

            <button type="button" class="company-tree-card company-tree-card-sub company-tree-card-sub-procurement-officer company-tree-card-button"
              data-bs-toggle="modal" data-bs-target="#companyTreeDetailModal"
              data-tree-title="Procurement Officer"
              data-tree-subtitle="Procurement"
              data-tree-meta="1 position"
              data-tree-details="Supports purchasing activity; Follows suppliers; Assists replenishment and procurement execution.">
              <div class="company-tree-avatar company-tree-avatar-sub">PO</div>
              <h6>Procurement Officer</h6>
              <p class="company-tree-role">Procurement team</p>
            </button>

            <button type="button" class="company-tree-card company-tree-card-finance company-tree-card-button"
              data-bs-toggle="modal" data-bs-target="#companyTreeDetailModal"
              data-tree-title="Finance"
              data-tree-subtitle="Control Department"
              data-tree-meta="2 employees"
              data-tree-details="Finance department; Reports to management; Finance Manager; Finance Officer; Payments; Collections; Credit control; Reporting and account review.">
              <div class="company-tree-avatar">FN</div>
              <div class="company-tree-status"></div>
              <h6>Finance</h6>
              <p class="company-tree-role">Control Department</p>
              <p class="company-tree-meta">2 employees</p>
              <p class="company-tree-hint">Tap for details</p>
            </button>

            <button type="button" class="company-tree-card company-tree-card-sub company-tree-card-sub-finance-manager company-tree-card-button"
              data-bs-toggle="modal" data-bs-target="#companyTreeDetailModal"
              data-tree-title="Finance Manager"
              data-tree-subtitle="Finance Department"
              data-tree-meta="1 position"
              data-tree-details="Leads the finance department; Oversees payments and collections; Owns financial control and reporting; Supervises the Finance Officer.">
              <div class="company-tree-avatar company-tree-avatar-sub">FM</div>
              <h6>Finance Manager</h6>
              <p class="company-tree-role">Department lead</p>
            </button>

            <button type="button" class="company-tree-card company-tree-card-sub company-tree-card-sub-finance-officer company-tree-card-button"
              data-bs-toggle="modal" data-bs-target="#companyTreeDetailModal"
              data-tree-title="Finance Officer"
              data-tree-subtitle="Finance Department"
              data-tree-meta="1 position"
              data-tree-details="Reports to the Finance Manager; Supports accounting activity; Handles finance follow-up, records, and operational finance tasks.">
              <div class="company-tree-avatar company-tree-avatar-sub">FO</div>
              <h6>Finance Officer</h6>
              <p class="company-tree-role">Finance team</p>
            </button>

            <button type="button" class="company-tree-card company-tree-card-administration company-tree-card-button"
              data-bs-toggle="modal" data-bs-target="#companyTreeDetailModal"
              data-tree-title="Administration"
              data-tree-subtitle="Support Department"
              data-tree-meta="3 employees"
              data-tree-details="Administration department; Reports directly to the GM; Administration and HR; IT and Web Development; Data Entry.">
              <div class="company-tree-avatar">AD</div>
              <div class="company-tree-status"></div>
              <h6>Administration</h6>
              <p class="company-tree-role">Support Department</p>
              <p class="company-tree-meta">3 employees</p>
              <p class="company-tree-hint">Tap for details</p>
            </button>

            <button type="button" class="company-tree-card company-tree-card-sub company-tree-card-sub-administration-hr company-tree-card-button"
              data-bs-toggle="modal" data-bs-target="#companyTreeDetailModal"
              data-tree-title="Administration & HR"
              data-tree-subtitle="Administration Department"
              data-tree-meta="1 position"
              data-tree-details="Single administration and HR role; Reports directly to the GM; Handles administration support, records, coordination, and HR-related office tasks.">
              <div class="company-tree-avatar company-tree-avatar-sub">AH</div>
              <h6>Administration & HR</h6>
              <p class="company-tree-role">Department role</p>
            </button>

            <button type="button" class="company-tree-card company-tree-card-sub company-tree-card-sub-administration-it company-tree-card-button"
              data-bs-toggle="modal" data-bs-target="#companyTreeDetailModal"
              data-tree-title="IT & Web Development"
              data-tree-subtitle="Administration Department"
              data-tree-meta="1 position"
              data-tree-details="Supports the website, internal technical requirements, digital tools, and web development tasks under the administration department.">
              <div class="company-tree-avatar company-tree-avatar-sub">IT</div>
              <h6>IT & Web Development</h6>
              <p class="company-tree-role">Department role</p>
            </button>

            <button type="button" class="company-tree-card company-tree-card-sub company-tree-card-sub-administration-data company-tree-card-button"
              data-bs-toggle="modal" data-bs-target="#companyTreeDetailModal"
              data-tree-title="Data Entry"
              data-tree-subtitle="Administration Department"
              data-tree-meta="1 position"
              data-tree-details="Handles product data entry, system updates, records maintenance, and administrative data support under the administration department.">
              <div class="company-tree-avatar company-tree-avatar-sub">DE</div>
              <h6>Data Entry</h6>
              <p class="company-tree-role">Department role</p>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-muted mb-1">Department Structure</p>
        <h4 class="mb-2">Current department breakdown</h4>
        <p class="text-secondary mb-4">
          A working summary of the current structure, reporting line, and the positions already defined for each department.
        </p>
        <div class="table-responsive">
          <table class="table table-hover align-middle mb-0">
            <thead>
              <tr>
                <th>Department</th>
                <th>Reports To</th>
                <th>Headcount</th>
                <th>Defined Positions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="fw-semibold">Management</td>
                <td>Board / Ownership</td>
                <td>1</td>
                <td>GM Founder</td>
              </tr>
              <tr>
                <td class="fw-semibold">Administration</td>
                <td>GM Founder</td>
                <td>3</td>
                <td>Administration &amp; HR, IT &amp; Web Development, Data Entry</td>
              </tr>
              <tr>
                <td class="fw-semibold">Sales</td>
                <td>GM Founder</td>
                <td>3</td>
                <td>Sales Manager, 2 Account Managers</td>
              </tr>
              <tr>
                <td class="fw-semibold">Finance</td>
                <td>GM Founder</td>
                <td>2</td>
                <td>Finance Manager, Finance Officer</td>
              </tr>
              <tr>
                <td class="fw-semibold">Operations</td>
                <td>GM Founder</td>
                <td>9</td>
                <td>Logistics Manager, 4 Warehouse Employees, 2 Drivers, Procurement Manager, Procurement Officer</td>
              </tr>
              <tr>
                <td class="fw-semibold">Logistics &amp; Warehouse</td>
                <td>Operations</td>
                <td>7</td>
                <td>Logistics Manager, 4 Warehouse Employees, 2 Drivers</td>
              </tr>
              <tr>
                <td class="fw-semibold">Procurement</td>
                <td>Operations</td>
                <td>2</td>
                <td>Procurement Manager, Procurement Officer</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="text-uppercase text-muted mb-1">Working Structure</p>
        <h4 class="mb-2">Initial operating process</h4>
        <p class="text-secondary mb-4">
          This visual process explains how the company starts building the web store, prepares item structure, purchases stock, receives goods into the warehouse, updates inventory, and confirms final pricing before products go live.
        </p>

        <div class="workflow-board mb-4">
          <div class="workflow-stage">
            <div class="workflow-step workflow-step-management workflow-step-left">
              <span class="workflow-step-number">01</span>
              <h6>Store Foundation</h6>
              <p>GM, Administration, IT, and Web Development build the web store and product structure.</p>
            </div>
            <div class="workflow-step workflow-step-operations workflow-step-right">
              <span class="workflow-step-number">02</span>
              <h6>Procurement Launch</h6>
              <p>Procurement begins sourcing and purchasing stock for the three defined divisions.</p>
            </div>
            <div class="workflow-step workflow-step-warehouse workflow-step-left">
              <span class="workflow-step-number">03</span>
              <h6>Warehouse Receiving</h6>
              <p>Goods are received, checked, and moved into warehouse handling and control.</p>
            </div>
            <div class="workflow-step workflow-step-warehouse workflow-step-right">
              <span class="workflow-step-number">04</span>
              <h6>Barcode & Storage Setup</h6>
              <p>Warehouse and Procurement confirm barcodes, labels, and storage locations for each SKU.</p>
            </div>
            <div class="workflow-step workflow-step-administration workflow-step-left">
              <span class="workflow-step-number">05</span>
              <h6>Data Entry Update</h6>
              <p>Data Entry updates stock, item details, and inventory records on the web store.</p>
            </div>
            <div class="workflow-step workflow-step-sales workflow-step-right">
              <span class="workflow-step-number">06</span>
              <h6>Pricing Coordination</h6>
              <p>Procurement, Sales, and Marketing confirm cost, margin, and selling price per item.</p>
            </div>
            <div class="workflow-step workflow-step-finance workflow-step-left">
              <span class="workflow-step-number">07</span>
              <h6>Store Price Update</h6>
              <p>Final approved prices are added to the web store and products become commercially ready.</p>
            </div>
            <div class="workflow-step workflow-step-sales workflow-step-right">
              <span class="workflow-step-number">08</span>
              <h6>Sales Activation</h6>
              <p>Sales contacts customers, arranges meetings, opens accounts, and starts onboarding.</p>
            </div>
            <div class="workflow-step workflow-step-administration workflow-step-left">
              <span class="workflow-step-number">09</span>
              <h6>Registration Approval</h6>
              <p>Administration approves customer registration so the client can start purchasing.</p>
            </div>
            <div class="workflow-step workflow-step-finance workflow-step-right">
              <span class="workflow-step-number">10</span>
              <h6>Order Intake Window</h6>
              <p>The web store receives customer orders continuously until 12:00 midnight.</p>
            </div>
            <div class="workflow-step workflow-step-warehouse workflow-step-left">
              <span class="workflow-step-number">11</span>
              <h6>Night Picking Shift</h6>
              <p>The warehouse night shift prepares all orders from 12:00 AM until 8:00 AM.</p>
            </div>
            <div class="workflow-step workflow-step-operations workflow-step-right">
              <span class="workflow-step-number">12</span>
              <h6>Morning Final Check</h6>
              <p>At 8:00 AM, the manager performs final review and dispatch approval for all prepared orders.</p>
            </div>
            <div class="workflow-step workflow-step-warehouse workflow-step-left">
              <span class="workflow-step-number">13</span>
              <h6>First Delivery Batch</h6>
              <p>Drivers deliver the planned next-business-day orders with target completion by 2:00 PM.</p>
            </div>
            <div class="workflow-step workflow-step-operations workflow-step-right">
              <span class="workflow-step-number">14</span>
              <h6>Return & Supplier Collection</h6>
              <p>After the first batch, drivers return for warehouse support and supplier material collection.</p>
            </div>
            <div class="workflow-step workflow-step-sales workflow-step-left">
              <span class="workflow-step-number">15</span>
              <h6>Same-Day Delivery Option</h6>
              <p>Urgent customer orders can be released as an extra paid same-day delivery service.</p>
            </div>
            <div class="workflow-step workflow-step-warehouse workflow-step-right">
              <span class="workflow-step-number">16</span>
              <h6>Second Delivery Batch</h6>
              <p>Drivers remain ready for the second dispatch cycle to complete same-day urgent deliveries.</p>
            </div>
          </div>
        </div>

        <div class="row g-3">
          <div class="col-lg-6">
            <div class="workflow-detail-card">
              <h5>Process Narrative</h5>
              <ol class="workflow-detail-list">
                <li>The GM, Administration, IT, and Web Development start by preparing the web store structure and product framework.</li>
                <li>The structure covers the three business divisions already defined in the plan.</li>
                <li>Once the structure is ready, Procurement starts sourcing and purchasing the required materials.</li>
                <li>Purchased materials are supplied to the warehouse and received by the warehouse team.</li>
                <li>The warehouse team coordinates with Procurement to confirm barcode logic, labels, and storage locations for each SKU.</li>
                <li>After stock is organized, the item data is passed to Data Entry to update the web store inventory.</li>
                <li>Pricing is then confirmed by Procurement, Sales, and Marketing based on cost and target margin.</li>
                <li>After the final price is approved, the store is updated and the products are ready for the next operational and sales steps.</li>
                <li>The sales team then approaches customers, arranges meetings, and opens accounts for approved business clients.</li>
                <li>When a customer completes registration, the Administration team approves the subscription so the account can start ordering.</li>
                <li>The web store continues receiving orders until 12:00 midnight in each working cycle.</li>
                <li>From 12:00 midnight until 8:00 AM, the warehouse night shift prepares the orders.</li>
                <li>At 8:00 AM, the responsible manager performs the final review and dispatch approval.</li>
                <li>The drivers take the approved orders and deliver them to customers with a target completion time of 2:00 PM.</li>
                <li>After 2:00 PM, drivers either continue remaining tasks or return to the warehouse to collect materials coming from suppliers.</li>
                <li>For urgent customer needs, the company can offer an optional same-day delivery service with extra charges.</li>
                <li>After the first delivery batch, drivers remain available for a second batch dedicated to same-day delivery orders.</li>
              </ol>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="workflow-detail-card">
              <h5>Department Responsibilities In This Phase</h5>
              <ul class="business-plan-list">
                <li><strong>GM:</strong> Overall approval of the structure, workflow, and readiness of the store foundation.</li>
                <li><strong>Administration / IT / Web Development:</strong> Build the store, category structure, item fields, and digital setup.</li>
                <li><strong>Procurement:</strong> Source materials, purchase stock, and confirm product coding requirements with operations.</li>
                <li><strong>Warehouse Team:</strong> Receive stock, organize items, and apply operational storage logic.</li>
                <li><strong>Data Entry:</strong> Upload and maintain stock availability and item data on the web store.</li>
                <li><strong>Sales and Marketing:</strong> Help define the final selling price and target margin before launch.</li>
                <li><strong>Sales Team:</strong> Prospect customers, meet them, open accounts, and activate purchasing relationships.</li>
                <li><strong>Administration:</strong> Approve customer registration before the account becomes active for ordering.</li>
                <li><strong>Warehouse Night Shift:</strong> Prepare all confirmed orders between midnight and 8:00 AM.</li>
                <li><strong>Operations Manager / Logistics Lead:</strong> Perform the morning final check before dispatch.</li>
                <li><strong>Drivers:</strong> Deliver customer orders first, then support supplier collection and warehouse return flow.</li>
                <li><strong>Same-Day Delivery Process:</strong> An optional urgent-delivery service can run as a second dispatch batch for approved customers at extra charge.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="companyTreeDetailModal" tabindex="-1" aria-labelledby="companyTreeDetailModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 shadow-lg">
      <div class="modal-header">
        <div>
          <p class="text-uppercase text-muted mb-1" id="companyTreeModalSubtitle">Department detail</p>
          <h5 class="modal-title mb-0" id="companyTreeDetailModalLabel">Node detail</h5>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="fw-semibold mb-2" id="companyTreeModalMeta"></p>
        <ul class="business-plan-list" id="companyTreeModalDetails"></ul>
      </div>
    </div>
  </div>
</div>
@endsection

@push('custom-scripts')
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const detailModal = document.getElementById('companyTreeDetailModal');

    if (!detailModal) return;

    detailModal.addEventListener('show.bs.modal', function (event) {
      const trigger = event.relatedTarget;
      if (!trigger) return;

      const title = trigger.getAttribute('data-tree-title') || 'Node detail';
      const subtitle = trigger.getAttribute('data-tree-subtitle') || 'Department detail';
      const meta = trigger.getAttribute('data-tree-meta') || '';
      const details = (trigger.getAttribute('data-tree-details') || '').split(';').map((item) => item.trim()).filter(Boolean);

      detailModal.querySelector('#companyTreeDetailModalLabel').textContent = title;
      detailModal.querySelector('#companyTreeModalSubtitle').textContent = subtitle;
      detailModal.querySelector('#companyTreeModalMeta').textContent = meta;

      const detailList = detailModal.querySelector('#companyTreeModalDetails');
      detailList.innerHTML = '';
      details.forEach((item) => {
        const li = document.createElement('li');
        li.textContent = item;
        detailList.appendChild(li);
      });
    });
  });
</script>
@endpush
