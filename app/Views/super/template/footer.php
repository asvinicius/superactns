<!-- Footer -->
    <footer class="footer">
      <div class="footer-content">
        <div class="footer-credits">
          <div class="footer-copyright">
            &copy; 2026 <a href="https://github.com/asvinicius">Acretinos</a>
          </div>
          <div class="footer-copyright">
          </div>
        </div>
      </div>
    </footer>
  </main>

  <!-- Back to Top -->
  <a href="#" class="back-to-top">
    <i class="bi bi-arrow-up"></i>
  </a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/apexcharts/apexcharts.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/chart.js/chart.umd.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/echarts/echarts.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/simple-datatables/simple-datatables.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/quill/quill.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/tinymce/tinymce.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/choices.js/choices.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/flatpickr/flatpickr.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/php-email-form/validate.js') ?>"></script>

  <!-- Template Main JS Files -->
  <script src="<?= base_url('assets/js/theme.js') ?>"></script>
  <script src="<?= base_url('assets/js/main.js') ?>"></script>

  <!-- App Sidebar Toggle (for app pages with sidebars) -->
  <script src="<?= base_url('assets/js/apps-sidebar-toggle.js') ?>"></script>
  
  <script>
    document.addEventListener('DOMContentLoaded', function () {
        const editModal = document.getElementById('updateUserModal');

        editModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;

            document.getElementById('edit_bank_id').value = button.dataset.id;
            document.getElementById('edit_bank_name').value = button.dataset.name;
            document.getElementById('edit_bank_status').value = button.dataset.status;
        });
    });
</script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var rootStyles = getComputedStyle(document.documentElement);
      var accentColor = rootStyles.getPropertyValue('--accent-color').trim();
      var successColor = rootStyles.getPropertyValue('--success-color').trim();
      var warningColor = rootStyles.getPropertyValue('--warning-color').trim();
      var infoColor = rootStyles.getPropertyValue('--info-color').trim();
      var borderColor = rootStyles.getPropertyValue('--border-color').trim();
      var mutedColor = rootStyles.getPropertyValue('--muted-color').trim();
      var surfaceColor = rootStyles.getPropertyValue('--surface-color').trim();
      var seriesMap = {
        monthly: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
          revenue: [72, 78, 74, 81, 85, 88, 94, 91, 97, 103, 99, 108],
          costs: [46, 49, 47, 52, 56, 57, 61, 60, 63, 67, 65, 71],
          totals: {
            revenue: '$94.2K',
            expenses: '$57.6K',
            profit: '$36.6K'
          }
        },
        weekly: {
          categories: ['W1', 'W2', 'W3', 'W4', 'W5', 'W6'],
          revenue: [16, 18, 17, 19, 21, 23],
          costs: [10, 11, 10, 12, 13, 14],
          totals: {
            revenue: '$45.8K',
            expenses: '$27.3K',
            profit: '$18.5K'
          }
        },
        daily: {
          categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
          revenue: [4.2, 4.8, 4.4, 5.1, 5.6, 3.2, 2.7],
          costs: [2.5, 2.8, 2.6, 3.1, 3.3, 2.1, 1.8],
          totals: {
            revenue: '$30.0K',
            expenses: '$18.2K',
            profit: '$11.8K'
          }
        }
      };

      function setSummary(period) {
        var totals = seriesMap[period].totals;
        var rev = document.getElementById('summaryRevenue');
        var exp = document.getElementById('summaryExpenses');
        var prof = document.getElementById('summaryProfit');
        if (rev) rev.textContent = totals.revenue;
        if (exp) exp.textContent = totals.expenses;
        if (prof) prof.textContent = totals.profit;
      }
      var revenueTarget = document.querySelector('#revenueChart');
      var trafficTarget = document.querySelector('#trafficChart');
      var revenueChart;
      if (revenueTarget && typeof ApexCharts !== 'undefined') {
        revenueChart = new ApexCharts(revenueTarget, {
          chart: {
            type: 'area',
            height: 320,
            toolbar: {
              show: false
            },
            zoom: {
              enabled: false
            },
            fontFamily: 'inherit'
          },
          series: [{
              name: 'Revenue',
              data: seriesMap.monthly.revenue
            },
            {
              name: 'Costs',
              data: seriesMap.monthly.costs
            }
          ],
          colors: [accentColor, warningColor],
          stroke: {
            width: [2.5, 2.5],
            curve: 'smooth'
          },
          fill: {
            type: 'gradient',
            gradient: {
              shadeIntensity: 1,
              opacityFrom: 0.28,
              opacityTo: 0.02,
              stops: [0, 100]
            }
          },
          dataLabels: {
            enabled: false
          },
          xaxis: {
            categories: seriesMap.monthly.categories,
            axisBorder: {
              show: false
            },
            axisTicks: {
              show: false
            },
            labels: {
              style: {
                colors: mutedColor,
                fontSize: '12px'
              }
            }
          },
          yaxis: {
            labels: {
              style: {
                colors: mutedColor,
                fontSize: '12px'
              }
            }
          },
          grid: {
            borderColor: borderColor,
            strokeDashArray: 4,
            xaxis: {
              lines: {
                show: false
              }
            }
          },
          legend: {
            position: 'top',
            horizontalAlign: 'left',
            labels: {
              colors: mutedColor
            }
          },
          tooltip: {
            y: {
              formatter: function(val) {
                return '$' + val.toFixed(1) + 'K';
              }
            }
          }
        });
        revenueChart.render();
      }
      if (trafficTarget && typeof ApexCharts !== 'undefined') {
        var trafficChart = new ApexCharts(trafficTarget, {
          chart: {
            type: 'donut',
            height: 250,
            fontFamily: 'inherit'
          },
          series: [38, 24, 21, 17],
          labels: ['Inbound', 'Outbound', 'Partners', 'Community'],
          colors: [accentColor, successColor, warningColor, infoColor],
          legend: {
            show: false
          },
          stroke: {
            width: 3,
            colors: [surfaceColor]
          },
          dataLabels: {
            enabled: false
          },
          plotOptions: {
            pie: {
              donut: {
                size: '70%',
                labels: {
                  show: true,
                  name: {
                    show: true,
                    color: mutedColor
                  },
                  value: {
                    show: true,
                    fontSize: '20px',
                    fontWeight: 700,
                    color: accentColor,
                    formatter: function(val) {
                      return val + '%';
                    }
                  },
                  total: {
                    show: true,
                    label: 'Total',
                    color: mutedColor,
                    formatter: function() {
                      return '100%';
                    }
                  }
                }
              }
            }
          }
        });
        trafficChart.render();
      }
      document.querySelectorAll('.nd-period-btn').forEach(function(btn) {
        btn.addEventListener('click', function() {
          document.querySelectorAll('.nd-period-btn').forEach(function(i) {
            i.classList.remove('active');
          });
          btn.classList.add('active');
          var period = btn.getAttribute('data-period');
          if (!period || !revenueChart) return;
          revenueChart.updateOptions({
            xaxis: {
              categories: seriesMap[period].categories
            }
          });
          revenueChart.updateSeries([{
              name: 'Revenue',
              data: seriesMap[period].revenue
            },
            {
              name: 'Costs',
              data: seriesMap[period].costs
            }
          ]);
          setSummary(period);
        });
      });
      setSummary('monthly');
    });
  </script>
</body>

</html>