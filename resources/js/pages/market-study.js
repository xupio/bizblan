'use strict';

(function () {
  const colors = window.config?.colors || {
    primary: '#6571ff',
    secondary: '#7987a1',
    success: '#05a34a',
    warning: '#fbbc06',
    danger: '#ff3366',
    info: '#66d1d1',
    gridBorder: 'rgba(77, 138, 240, .15)',
    bodyColor: '#000',
    cardBg: '#fff',
  };

  const fontFamily = window.config?.fontFamily || 'Segoe UI, sans-serif';

  const valueBarEl = document.querySelector('#marketValueBarChart');
  if (valueBarEl) {
    new ApexCharts(valueBarEl, {
      chart: {
        type: 'bar',
        height: 360,
        parentHeightOffset: 0,
        toolbar: { show: false },
        foreColor: colors.secondary,
      },
      plotOptions: {
        bar: {
          horizontal: false,
          columnWidth: '48%',
          borderRadius: 6,
        }
      },
      dataLabels: { enabled: false },
      series: [{
        name: 'USD million',
        data: [315.3, 1900, 1172.49],
      }],
      colors: [colors.primary],
      grid: {
        borderColor: colors.gridBorder,
        strokeDashArray: 4,
      },
      xaxis: {
        categories: ['Networking & Fiber', 'Pro Audio Cables & Accessories', 'Pro Lighting Accessories'],
        axisBorder: { color: colors.gridBorder },
        axisTicks: { color: colors.gridBorder },
        labels: {
          rotate: -15,
          style: {
            fontSize: '11px',
            fontFamily,
          }
        }
      },
      yaxis: {
        labels: {
          formatter: (value) => `${value.toFixed(0)}`,
        }
      },
      tooltip: {
        y: {
          formatter: (value) => `USD ${value.toLocaleString()}M`,
        }
      }
    }).render();
  }

  const networkLineEl = document.querySelector('#networkConnectorsLineChart');
  if (networkLineEl) {
    new ApexCharts(networkLineEl, {
      chart: {
        type: 'line',
        height: 360,
        parentHeightOffset: 0,
        toolbar: { show: false },
        foreColor: colors.secondary,
      },
      stroke: {
        width: 3,
        curve: 'smooth',
      },
      colors: [colors.primary, colors.success],
      series: [
        {
          name: 'Networking & Fiber (USD M)',
          data: [315.3, 334.2, 354.3, 375.6, 398.1, 422.0, 447.4, 474.2, 502.7, 549.1],
        },
        {
          name: 'Pro Lighting Accessories Proxy (USD M)',
          data: [1172.49, 1249.87, 1332.36, 1420.29, 1514.03, 1613.95, 1720.47, 1834.01, 1955.09],
        }
      ],
      grid: {
        borderColor: colors.gridBorder,
        strokeDashArray: 4,
      },
      markers: {
        size: 4,
        hover: { size: 6 },
      },
      xaxis: {
        categories: ['2024', '2025', '2026', '2027', '2028', '2029', '2030', '2031', '2032', '2033'],
        axisBorder: { color: colors.gridBorder },
        axisTicks: { color: colors.gridBorder },
      },
      yaxis: {
        labels: {
          formatter: (value) => `${value.toFixed(0)}`,
        }
      },
      tooltip: {
        y: {
          formatter: (value) => `USD ${value.toLocaleString()}M`,
        }
      }
    }).render();
  }

  const divisionPriorityEl = document.querySelector('#divisionPriorityChart');
  if (divisionPriorityEl) {
    new ApexCharts(divisionPriorityEl, {
      chart: {
        type: 'bar',
        height: 360,
        parentHeightOffset: 0,
        toolbar: { show: false },
        foreColor: colors.secondary,
      },
      plotOptions: {
        bar: {
          horizontal: true,
          borderRadius: 6,
        }
      },
      colors: [colors.warning, colors.info, colors.success],
      dataLabels: { enabled: false },
      series: [
        {
          name: 'Market Depth',
          data: [9, 6, 5],
        },
        {
          name: 'Repeat Purchase Potential',
          data: [8, 7, 7],
        },
        {
          name: 'Fit for Next-Day Delivery Model',
          data: [9, 8, 8],
        }
      ],
      grid: {
        borderColor: colors.gridBorder,
        strokeDashArray: 4,
      },
      xaxis: {
        categories: ['Networking & Fiber', 'Pro Audio Cables & Accessories', 'Pro Lighting Accessories'],
        axisBorder: { color: colors.gridBorder },
        axisTicks: { color: colors.gridBorder },
        max: 10,
      },
      tooltip: {
        y: { formatter: (value) => `${value}/10` }
      }
    }).render();
  }

  const divisionBasketEl = document.querySelector('#divisionBasketChart');
  if (divisionBasketEl) {
    new ApexCharts(divisionBasketEl, {
      chart: {
        type: 'bar',
        height: 360,
        stacked: true,
        parentHeightOffset: 0,
        toolbar: { show: false },
        foreColor: colors.secondary,
      },
      plotOptions: {
        bar: {
          horizontal: true,
          borderRadius: 5,
        }
      },
      colors: [colors.primary, colors.info, colors.warning],
      dataLabels: { enabled: false },
      series: [
        {
          name: 'Cables',
          data: [8, 9, 2],
        },
        {
          name: 'Connectors & Termination',
          data: [7, 8, 8],
        },
        {
          name: 'Support Accessories',
          data: [6, 5, 9],
        }
      ],
      grid: {
        borderColor: colors.gridBorder,
        strokeDashArray: 4,
      },
      xaxis: {
        categories: ['Networking & Fiber', 'Pro Audio Cables & Accessories', 'Pro Lighting Accessories'],
        axisBorder: { color: colors.gridBorder },
        axisTicks: { color: colors.gridBorder },
      },
      tooltip: {
        y: { formatter: (value) => `${value}/10 emphasis` }
      },
      legend: {
        position: 'top',
        horizontalAlign: 'left',
      }
    }).render();
  }

  const orderPatternEl = document.querySelector('#orderPatternChart');
  if (orderPatternEl) {
    new ApexCharts(orderPatternEl, {
      chart: {
        type: 'radar',
        height: 360,
        parentHeightOffset: 0,
        toolbar: { show: false },
        foreColor: colors.secondary,
      },
      colors: [colors.success, colors.danger, colors.warning],
      series: [
        {
          name: 'Networking & Fiber',
          data: [9, 8, 9, 7, 9],
        },
        {
          name: 'Pro Audio Cables & Accessories',
          data: [6, 9, 8, 8, 7],
        },
        {
          name: 'Pro Lighting Accessories',
          data: [5, 9, 8, 9, 7],
        }
      ],
      xaxis: {
        categories: [
          'Order Frequency',
          'Urgent Replacement',
          'Technical Sensitivity',
          'Project Timing',
          'Fast Delivery Fit'
        ],
        labels: {
          style: {
            fontSize: '11px',
            fontFamily,
          }
        }
      },
      yaxis: {
        show: false,
        max: 10,
      },
      markers: {
        size: 4,
      },
      stroke: {
        width: 2,
      },
      fill: {
        opacity: 0.12,
      },
      tooltip: {
        y: { formatter: (value) => `${value}/10` }
      },
      legend: {
        position: 'top',
        horizontalAlign: 'left',
      }
    }).render();
  }
})();
