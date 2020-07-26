@extends ('kades.layouts.default')

@section('judul', 'Dashboard')

@section('content')
<!-- START: dashboard beta -->
<div class="row">
  <div class="col-lg-12">
    <div class="cui-utils-sortable" id="right-col">
      <div class="card" data-order-id="card-7">
        <div class="card-header">
          <div class="pull-right cui-utils-sortable-control">
            <i
              class="icmn-minus mr-2 cui-utils-sortable-collapse"
              data-toggle="tooltip"
              data-placement="left"
              title=""
              data-original-title="Collapse"
            ></i>
            <i
              class="icmn-cross cui-utils-sortable__close"
              data-toggle="tooltip"
              data-placement="left"
              title=""
              data-original-title="Remove"
            ></i>
          </div>
        <div class="cui-utils-title"><strong>Keuangan</strong></div>
        <p class="text-muted float-right">Tanggal {{ \Carbon\Carbon::now()->formatLocalized("%d %B %Y") }}
        </p>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-xl-6">
              <div class="cui-info-card cui-info-card-white-font bg-primary">
                <span class="cui-info-card-digit">
                  <i class="icmn-database"></i>
                </span>
                <div class="cui-info-card-desc">
                  <span class="cui-info-card-title">Pendapatan Tahun ini</span>
                  <p>Total: @currency($kas->sum('jmlh_pemasukan'))</p>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="cui-info-card cui-info-card-white-font bg-danger">
                <span class="cui-info-card-digit">
                  <i class="icmn-bullhorn"></i>
                </span>
                <div class="cui-info-card-desc">
                  <span class="cui-info-card-title">Pengeluaran Tahun ini</span>
                  <p>Total: @currency($kas->sum('jmlh_pengeluaran'))</p>
                </div>
              </div>
            </div>
          </div>
          <div class="cui-utils-margin-fix">
            <!-- -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- END: dashboard alpha -->

<!-- START: page scripts -->
<script>
  ;(function($) {
    'use strict'
    $(function() {
      ///////////////////////////////////////////////////////////
      // tooltips
      $('[data-toggle=tooltip]').tooltip()

      ///////////////////////////////////////////////////////////
      // jquery ui sortable
      $('#left-col, #right-col, #bottom-col').each(function() {
        $(this).sortable({
          // connect left and right containers
          connectWith: '.cui-utils-sortable',
          tolerance: 'pointer',
          scroll: true,

          // set initial order from localStorage
          create: function() {
            var that = $(this),
              id = $(this).attr('id'),
              orderLs = localStorage.getItem('order-' + id)

            if (orderLs) {
              var order = orderLs.split(',')

              $.each(order, function(key, val) {
                var el = $('[data-order-id=' + val + ']')
                that.append(el)
              })
            }
          },

          // save order state on order update to localStorage
          update: function() {
            var orderArray = $(this).sortable('toArray', { attribute: 'data-order-id' }),
              prefix = $(this).attr('id')

            localStorage.setItem('order-' + prefix, orderArray)
          },

          // handler
          handle: '.card-header',
        })
      })

      ///////////////////////////////////////////////////////////
      // reset dashboard
      $('.reset-button').on('click', function() {
        localStorage.removeItem('order-left-col')
        localStorage.removeItem('order-right-col')
        localStorage.removeItem('order-bottom-col')
        setTimeout(function() {
          location.reload()
        }, 500)
      })

      ///////////////////////////////////////////////////////////
      // card controls
      $('.cui-utils-sortable-collapse, .cui-utils-sortable-uncollapse').on('click', function() {
        $(this)
          .closest('.card')
          .toggleClass('cui-utils-sortable-collapsed')
      })
      $('.cui-utils-sortable__close').on('click', function() {
        $(this)
          .closest('.card')
          .remove()
        $('.tooltip').remove()
      })

      // header double click
      $('.cui-utils-sortable .card-header').on('dblclick', function() {
        $(this)
          .closest('.card')
          .toggleClass('cui-utils-sortable-collapsed')
      })

      ///////////////////////////////////////////////////////////
      // datatables
      $('#example1').DataTable({
        responsive: true,
      })

      ///////////////////////////////////////////////////////////
      // calendar
      $('.example-calendar-block').fullCalendar({
        //aspectRatio: 2,
        height: 475,
        header: {
          left: 'prev, next',
          center: 'title',
          right: 'month, agendaWeek, agendaDay',
        },
        buttonIcons: {
          prev: 'none fa fa-arrow-left',
          next: 'none fa fa-arrow-right',
          prevYear: 'none fa fa-arrow-left',
          nextYear: 'none fa fa-arrow-right',
        },
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        viewRender: function(view, element) {
          if (!('ontouchstart' in document.documentElement) && jQuery().jScrollPane) {
            $('.fc-scroller').jScrollPane({
              autoReinitialise: true,
              autoReinitialiseDelay: 100,
            })
          }
        },
        defaultDate: '2017-05-12',
        events: [
          {
            title: 'All Day Event',
            start: '2017-05-01',
            class: 'fc-event-success',
          },
          {
            id: 999,
            title: 'Repeating Event',
            start: '2017-05-09T16:00:00',
            class: 'fc-event-default',
          },
          {
            id: 999,
            title: 'Repeating Event',
            start: '2017-05-16T16:00:00',
            class: 'fc-event-success',
          },
          {
            title: 'Conference',
            start: '2017-05-11',
            end: '2017-05-14',
            class: 'fc-event-danger',
          },
        ],
        eventClick: function(calEvent, jsEvent, view) {
          if (!$(this).hasClass('event-clicked')) {
            $('.fc-event').removeClass('event-clicked')
            $(this).addClass('event-clicked')
          }
        },
      })

      ///////////////////////////////////////////////////////////
      // ladda buttons
      Ladda.bind('.ladda-button', { timeout: 2000 })

      ///////////////////////////////////////////////////////////
      // chart1
      new Chartist.Line(
        '.chart-line',
        {
          labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
          series: [[5, 0, 7, 8, 12], [2, 1, 3.5, 7, 3], [1, 3, 4, 5, 6]],
        },
        {
          fullWidth: !0,
          chartPadding: {
            right: 40,
          },
          plugins: [Chartist.plugins.tooltip()],
        },
      )

      ///////////////////////////////////////////////////////////
      // chart 2
      var overlappingData = {
          labels: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'Mai',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec',
          ],
          series: [[5, 4, 3, 7, 5, 10, 3, 4, 8, 10, 6, 8], [3, 2, 9, 5, 4, 6, 4, 6, 7, 8, 7, 4]],
        },
        overlappingOptions = {
          seriesBarDistance: 10,
          plugins: [Chartist.plugins.tooltip()],
        },
        overlappingResponsiveOptions = [
          [
            '',
            {
              seriesBarDistance: 5,
              axisX: {
                labelInterpolationFnc: function(value) {
                  return value[0]
                },
              },
            },
          ],
        ]

      new Chartist.Bar(
        '.chart-overlapping-bar',
        overlappingData,
        overlappingOptions,
        overlappingResponsiveOptions,
      )

      ///////////////////////////////////////////////////////////
      // custom scroll
      if (!('ontouchstart' in document.documentElement) && jQuery().jScrollPane) {
        $('.custom-scroll').each(function() {
          $(this).jScrollPane({
            contentWidth: '100%',
            autoReinitialise: true,
            autoReinitialiseDelay: 100,
          })
          var api = $(this).data('jsp'),
            throttleTimeout
          $(window).on('resize', function() {
            if (!throttleTimeout) {
              throttleTimeout = setTimeout(function() {
                api.reinitialise()
                throttleTimeout = null
              }, 50)
            }
          })
        })
      }

      ///////////////////////////////////////////////////////////
      // adjustable textarea
      autosize($('.adjustable-textarea'))

      ///////////////////////////////////////////////////////////
      // slider
      $('#slider-1').ionRangeSlider({
        min: 0,
        max: 16000,
        from: 12000,
        step: 1000,
        grid: true,
        grid_num: 8,
      })

      $('#slider-2').ionRangeSlider({
        type: 'double',
        min: 0,
        max: 100,
        from: 20,
        from_min: 10,
        from_max: 30,
        from_shadow: true,
        to: 60,
        to_min: 50,
        to_max: 70,
        to_shadow: true,
        grid: true,
        grid_num: 10,
      })
    })
  })(jQuery)
</script>
<!-- END: page scripts -->

@endsection
