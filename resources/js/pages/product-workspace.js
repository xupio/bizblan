'use strict';

const storageKey = 'bizplan-product-workspace-items';

const productWorkspaceForm = document.getElementById('productWorkspaceForm');
const productWorkspaceTableBody = document.getElementById('productWorkspaceTableBody');
const productWorkspaceEmptyState = document.getElementById('productWorkspaceEmptyState');
const productGroupFilter = document.getElementById('productGroupFilter');
const clearProductsButton = document.getElementById('clearProductsButton');

const getItems = () => {
  try {
    const saved = localStorage.getItem(storageKey);
    return saved ? JSON.parse(saved) : [];
  } catch (error) {
    return [];
  }
};

const saveItems = (items) => {
  localStorage.setItem(storageKey, JSON.stringify(items));
};

const escapeHtml = (value) => {
  const div = document.createElement('div');
  div.textContent = value || '';
  return div.innerHTML;
};

const updateGroupCounts = (items) => {
  document.querySelectorAll('[data-group-count]').forEach((element) => {
    const groupName = element.getAttribute('data-group-count');
    const count = items.filter((item) => item.group === groupName).length;
    element.textContent = String(count);
  });
};

const renderItems = () => {
  const items = getItems();
  const filterValue = productGroupFilter ? productGroupFilter.value : 'All';
  const filteredItems = filterValue === 'All'
    ? items
    : items.filter((item) => item.group === filterValue);

  updateGroupCounts(items);

  if (!productWorkspaceTableBody) {
    return;
  }

  productWorkspaceTableBody.innerHTML = '';

  if (filteredItems.length === 0) {
    const emptyRow = document.createElement('tr');
    emptyRow.id = 'productWorkspaceEmptyState';
    emptyRow.innerHTML = '<td colspan="6" class="text-center text-secondary py-4">No products match this view yet.</td>';
    productWorkspaceTableBody.appendChild(emptyRow);
    return;
  }

  filteredItems.forEach((item) => {
    const row = document.createElement('tr');
    row.innerHTML = `
      <td class="fw-semibold">${escapeHtml(item.name)}</td>
      <td><span class="badge text-bg-light">${escapeHtml(item.group)}</span></td>
      <td>${escapeHtml(item.subgroup)}</td>
      <td>${escapeHtml(item.audience)}</td>
      <td class="text-secondary">${escapeHtml(item.notes)}</td>
      <td class="text-end">
        <button type="button" class="btn btn-sm btn-outline-danger" data-delete-id="${escapeHtml(item.id)}">Delete</button>
      </td>
    `;
    productWorkspaceTableBody.appendChild(row);
  });
};

if (productWorkspaceForm) {
  productWorkspaceForm.addEventListener('submit', (event) => {
    event.preventDefault();

    const name = document.getElementById('productName')?.value.trim() || '';
    const group = document.getElementById('productGroup')?.value || '';
    const subgroup = document.getElementById('productSubgroup')?.value.trim() || '';
    const audience = document.getElementById('productAudience')?.value.trim() || '';
    const notes = document.getElementById('productNotes')?.value.trim() || '';

    if (!name || !group) {
      return;
    }

    const items = getItems();
    items.unshift({
      id: `${Date.now()}`,
      name,
      group,
      subgroup,
      audience,
      notes,
    });

    saveItems(items);
    productWorkspaceForm.reset();
    renderItems();
  });
}

if (productWorkspaceTableBody) {
  productWorkspaceTableBody.addEventListener('click', (event) => {
    const target = event.target;
    if (!(target instanceof HTMLElement)) {
      return;
    }

    const deleteId = target.getAttribute('data-delete-id');
    if (!deleteId) {
      return;
    }

    const items = getItems().filter((item) => item.id !== deleteId);
    saveItems(items);
    renderItems();
  });
}

if (productGroupFilter) {
  productGroupFilter.addEventListener('change', () => {
    renderItems();
  });
}

if (clearProductsButton) {
  clearProductsButton.addEventListener('click', () => {
    localStorage.removeItem(storageKey);
    renderItems();
  });
}

renderItems();
