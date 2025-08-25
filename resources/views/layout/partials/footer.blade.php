<!-- Footer -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.css" rel="stylesheet">

<style>
    /* Kalender mini */
    #mini-calendar {
        font-size: 8px;
        background: #ffffff;
        border-radius: 5px;
        padding: 8px;
        box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
    }

    #mini-calendar .fc-toolbar-title {
        font-size: 14px;
        font-weight: 600;
        color: #137bd5ff;
    }

    #mini-calendar .fc-button {
        background-color: #137bd5ff;
        border: none;
        color: #fff;
        border-radius: 4px;
        padding: 4px 4px;
        font-size: 12px;
        transition: 0.2s;
    }

    #mini-calendar .fc-button:hover {
        background-color: #0f5faf;
    }

    #mini-calendar .fc-daygrid-day.fc-day-today {
        background-color: #eaf4ff;
        border-radius: 6px;
    }

    /* Event */
    #mini-calendar .fc-event {
        border-radius: 6px;
        padding: 2px 4px;
        font-size: 10px;
        background-color: #137bd5ff;
        color: #fff !important;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    #mini-calendar .fc-event:hover {
        transform: scale(1.05);
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
    }

    /* Modal agenda */
    #agendaModal .modal-header {
        background-color: #137bd5ff !important;
        /* Biru khas BKPSDM */
        color: #fff;
    }

    #agendaModal .modal-title {
        color: #fff;
    }

    #agendaModal .modal-body p {
        font-size: 14px;
    }

    #agendaModal .badge {
        font-size: 12px;
        padding: 6px 10px;
        border-radius: 8px;
    }

    #agendaModal .modal-footer {
        border-top: none;
    }

    .agenda-badge {
        display: inline-block;
        padding: 6px 12px;
        border-radius: 8px;
        font-size: 13px;
        font-weight: 500;
        color: #fff;
    }

    .agenda-start {
        background-color: #198038;
        /* hijau start */
    }

    .agenda-end {
        background-color: #da1e28;
        /* merah end */
    }

        #mini-calendar .fc-footer-toolbar .fc-button-group > .fc-button {
margin: 0 4px; 
    }
    #mini-calendar .fc-footer-toolbar .fc-today-button {
        margin-left: 10px; 
    }
</style>



<footer class="footer">
    @if(!Route::is(['map-list']))
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container-fluid">
            <div class="row gy-4">

                <!-- Logo + About -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget footer-about">
                        <div class="footer-logo" style="max-width: 250px; height: auto;">
                            <img src="/assets/img/logo.png" alt="logo">
                        </div>
                        <div class="footer-about-content" style="font-size: 13px;">
                            <p>Badan Kepegawaian dan Pengembangan Sumber Daya Manusia</p>
                            <div class="social-icon">
                                <ul>
                                    <li><a href="https://x.com/BKPSDMTegalKab"><i class="fab fa-x-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/bkpsdmtegalkab/"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kontak -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget footer-contact">
                        <h2 class="footer-title">Contact Us</h2>
                        <div class="footer-contact-info" style="font-size: 13px;">
                            <div class="footer-address">
                                <span><i class="fas fa-map-marker-alt"></i></span>
                                <p>Jl. Dr. Soetomo 1, Slawi, Indonesia</p>
                            </div>
                            <p><i class="fas fa-phone-alt"></i> Telp. (0283) 491116 Fax: (0283) 491289</p>
                            <p class="mb-0"><i class="fas fa-envelope"></i> bkd@tegalkab.go.id</p>
                            <br>
                            <p class="mb-0"><i class="fas fa-envelope"></i> bkdkabtegal@gmail</p>
                        </div>
                    </div>
                </div>

                <!-- Link Terkait -->
                <div class="col-lg-2 col-md-6">
                    <div class="footer-widget footer-menu" style="font-size: 13px;">
                        <h2 class="footer-title">Link Terkait</h2>
                        <ul>
                            @foreach($tautan as $link)
                            <li><a href="{{ $link->url }}" target="_blank">{{ $link->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- Kalender Dinamis -->
                <div class="col-lg-2 col-md-6">
                    <div class="footer-widget footer-calendar" style="font-size: 13px;">
                        <h2 class="footer-title">Agenda</h2>
                        <div style="border-radius: 8px; overflow: hidden; background:#fff;">
                            <div id="mini-calendar" style="font-size:12px;"></div>
                        </div>
                    </div>
                </div>

                <!-- Lokasi -->
                <div class="col-lg-2 col-md-6">
                    <div class="footer-widget footer-map" style="font-size: 13px;">
                        <h2 class="footer-title">Lokasi Kami</h2>
                        <div style="border-radius: 8px; overflow: hidden;">
                            <iframe
                                src="https://www.google.com/maps/d/u/0/embed?mid=1Mxi3iFGxKpJTuQjjzOnBDfBVl1U&femb=1&ll=-6.993984%2C109.12793200000002&z=17"
                                width="100%" height="220"
                                style="border:0;" allowfullscreen="" loading="lazy">
                            </iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /Footer Top -->

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container-fluid">
            <div class="copyright"
                style="padding: 13px; text-align: center; margin-top: 20px; margin-bottom: 0; border-radius: 5px;">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="copyright-text">
                            <p class="mb-0" style="font-size: 13px;">&copy; 2025 BKPSDM. All rights reserved. Designed
                                and developed by BopasTech.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Agenda -->
    <div class="modal fade" id="agendaModal" tabindex="-1" aria-labelledby="agendaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg rounded-3">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="agendaModalLabel">
                        <i class="bi bi-calendar2-event"></i> Detail Agenda
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="mb-2 fs-6 fw-bold text-dark" id="agendaName"></p>
                    <p class="mb-1 small text-muted" id="agendaLokasi"></p>

                    <div class="d-flex flex-column gap-1">
                        <span id="agendaStart" class="agenda-badge agenda-start"></span>
                        <span id="agendaEnd" class="agenda-badge agenda-end"></span>
                    </div>

                    <hr>
                    <p id="agendaDesc"></p>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">
                        <i class="bi bi-x-circle"></i> Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Modal Agenda -->
</footer>
<!-- /Footer -->
@endif

<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('mini-calendar');

        if (calendarEl) {
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                locale: 'id',
                height: 218,
                headerToolbar: {
                    left: 'title',   // bulan + tahun di kiri atas
                    center: '',
                    right: ''
                },
                footerToolbar: {
                    left: 'prev,next today', // tombol navigasi di baris kedua
                    center: '',
                    right: ''
                },
                events: @json($agendas),
                eventDisplay: 'block',
                eventBackgroundColor: '#137bd5ff',
                eventBorderColor: '#137bd5ff',
                eventTextColor: '#fff',

                eventClick: function(info) {
                    info.jsEvent.preventDefault();

                    document.getElementById('agendaName').innerHTML =
                        `<i class="bi bi-calendar-event text-primary"></i> ${info.event.title}`;
                    document.getElementById('agendaLokasi').innerHTML =
                        `<i class="bi bi-geo-alt"></i> ${info.event.extendedProps.lokasi || '-'}`;

                    document.getElementById('agendaStart').innerHTML =
                        `<i class="bi bi-clock"></i> ${info.event.start.toLocaleString('id-ID')}`;
                    document.getElementById('agendaEnd').innerHTML = info.event.end ?
                        `<i class="bi bi-clock-history"></i> ${info.event.end.toLocaleString('id-ID')}` :
                        '-';
                    document.getElementById('agendaDesc').innerText =
                        info.event.extendedProps.description || '-';

                    var agendaModal = new bootstrap.Modal(document.getElementById('agendaModal'));
                    agendaModal.show();
                }
            });
            calendar.render();
        }
    });
</script>