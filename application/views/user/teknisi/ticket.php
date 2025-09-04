<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?></title>

    <link rel="shortcut icon" href="<?= base_url() . '/' ?>assets/compiled/svg/favicon.svg" type="image/x-icon" />
    <link rel="shortcut icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAiCAYAAADRcLDBAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjMzIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iMzQiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSIzMyIKICAgdGlmZjpJbWFnZUxlbmd0aD0iMzQiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LjAiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LjAiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiCiAgIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiPgogICA8eG1wTU06SGlzdG9yeT4KICAgIDxyZGY6U2VxPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJwcm9kdWNlZCIKICAgICAgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWZmaW5pdHkgRGVzaWduZXIgMS4xMC4xIgogICAgICBzdEV2dDp3aGVuPSIyMDIyLTAzLTMxVDEwOjUwOjIzKzAyOjAwIi8+CiAgICA8L3JkZjpTZXE+CiAgIDwveG1wTU06SGlzdG9yeT4KICA8L3JkZjpEZXNjcmlwdGlvbj4KIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjw/eHBhY2tldCBlbmQ9InIiPz5V57uAAAABgmlDQ1BzUkdCIElFQzYxOTY2LTIuMQAAKJF1kc8rRFEUxz9maORHo1hYKC9hISNGTWwsRn4VFmOUX5uZZ36oeTOv954kW2WrKLHxa8FfwFZZK0WkZClrYoOe87ypmWTO7dzzud97z+nec8ETzaiaWd4NWtYyIiNhZWZ2TvE946WZSjqoj6mmPjE1HKWkfdxR5sSbgFOr9Ll/rXoxYapQVik8oOqGJTwqPL5i6Q5vCzeo6dii8KlwpyEXFL519LjLLw6nXP5y2IhGBsFTJ6ykijhexGra0ITl5bRqmWU1fx/nJTWJ7PSUxBbxJkwijBBGYYwhBgnRQ7/MIQIE6ZIVJfK7f/MnyUmuKrPOKgZLpEhj0SnqslRPSEyKnpCRYdXp/9++msneoFu9JgwVT7b91ga+LfjetO3PQ9v+PgLvI1xkC/m5A+h7F32zoLXug38dzi4LWnwHzjeg8UGPGbFfySvuSSbh9QRqZ6H+Gqrm3Z7l9zm+h+iafNUV7O5Bu5z3L/wAdthn7QIme0YAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAJTSURBVFiF7Zi9axRBGIefEw2IdxFBRQsLWUTBaywSK4ubdSGVIY1Y6HZql8ZKCGIqwX/AYLmCgVQKfiDn7jZeEQMWfsSAHAiKqPiB5mIgELWYOW5vzc3O7niHhT/YZvY37/swM/vOzJbIqVq9uQ04CYwCI8AhYAlYAB4Dc7HnrOSJWcoJcBS4ARzQ2F4BZ2LPmTeNuykHwEWgkQGAet9QfiMZjUSt3hwD7psGTWgs9pwH1hC1enMYeA7sKwDxBqjGnvNdZzKZjqmCAKh+U1kmEwi3IEBbIsugnY5avTkEtIAtFhBrQCX2nLVehqyRqFoCAAwBh3WGLAhbgCRIYYinwLolwLqKUwwi9pxV4KUlxKKKUwxC6ZElRCPLYAJxGfhSEOCz6m8HEXvOB2CyIMSk6m8HoXQTmMkJcA2YNTHm3congOvATo3tE3A29pxbpnFzQSiQPcB55IFmFNgFfEQeahaAGZMpsIJIAZWAHcDX2HN+2cT6r39GxmvC9aPNwH5gO1BOPFuBVWAZue0vA9+A12EgjPadnhCuH1WAE8ivYAQ4ohKaagV4gvxi5oG7YSA2vApsCOH60WngKrA3R9IsvQUuhIGY00K4flQG7gHH/mLytB4C42EgfrQb0mV7us8AAMeBS8mGNMR4nwHamtBB7B4QRNdaS0M8GxDEog7iyoAguvJ0QYSBuAOcAt71Kfl7wA8DcTvZ2KtOlJEr+ByyQtqqhTyHTIeB+ONeqi3brh+VgIN0fohUgWGggizZFTplu12yW8iy/YLOGWMpDMTPXnl+Az9vj2HERYqPAAAAAElFTkSuQmCC" type="image/png" />

    <link rel="stylesheet" href="<?= base_url() . '/' ?>assets/compiled/css/app.css" />
    <link rel="stylesheet" href="<?= base_url() . '/' ?>assets/compiled/css/app-dark.css" />
    <link rel="stylesheet" href="<?= base_url() . '/' ?>assets/compiled/css/iconly.css" />
    <link rel="stylesheet" href="<?= base_url() . '/' ?>assets/extensions/sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" href="<?= base_url() . '/' ?>assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="<?= base_url() . '/' ?>assets/extensions/flatpickr/flatpickr.min.css">
    <!-- select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


    <link rel="stylesheet" href="<?= base_url() . '/' ?>assets/compiled/css/table-datatable-jquery.css">
</head>

<body>
    <script src="<?= base_url() . '/' ?>assets/static/js/initTheme.js"></script>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <header class="mb-5">
                <?php $this->load->view('templates/header') ?>
                <?php $this->load->view('templates/navbar') ?>
            </header>

            <div class="content-wrapper container">
                <div class="page-heading">
                    <h3><?= $subtitle ?></h3>
                </div>
                <div class="page-content">
                    <!-- Basic Vertical form layout section start -->
                    <section id="basic-vertical-layouts">
                        <div class="row match-height">

                            <div class="col">
                                <!-- Minimal jQuery Datatable end -->
                                <!-- Basic Tables start -->

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">
                                            <?= $subtitle2 ?>
                                        </h5>

                                    </div>

                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table" id="tblTicket">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Category</th>
                                                        <th>Title</th>
                                                        <th>Created At</th>
                                                        <th>Created By</th>
                                                        <th>Status</th>
                                                        <th>Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no = 1;
                                                    foreach ($ticket->result_array() as $ticket1) { ?>
                                                        <tr>
                                                            <td></td>
                                                            <td><?= $ticket1['name_category'] ?></td>
                                                            <td><?= $ticket1['title'] ?></td>
                                                            <td><?= $ticket1['created_at'] ?></td>
                                                            <td><?= $ticket1['karyawan'] ?></td>
                                                            <td><?= getStatusTicket($ticket1['status']) ?></td>
                                                            <td>
                                                                <!-- button modal detail  -->
                                                                <button type="button" class="btn btn-primary detailTicket" data-bs-toggle="modal" data-bs-target="#detailTicket" data-id_ticket="<?= $ticket1['id_ticket'] ?>">
                                                                    Detail
                                                                </button>
                                                                <!-- button receiveTicket -->
                                                                <?php if ($ticket1['status'] == '0') { ?>
                                                                    <button type="button" class="btn btn-success receiveTicket" data-id_ticket="<?= $ticket1['id_ticket'] ?>">
                                                                        Receive
                                                                    </button>
                                                                    <button type="button" class="btn btn-danger declineTicket" data-id_ticket="<?= $ticket1['id_ticket'] ?>">
                                                                        Decline
                                                                    </button>
                                                                <?php } ?>
                                                                <?php if ($ticket1['status'] == '1') { ?>
                                                                    <!-- button open modal finish ticket  -->
                                                                    <button type="button" class="btn btn-success finishTicket" data-id_ticket="<?= $ticket1['id_ticket'] ?>" data-bs-toggle="modal" data-bs-target="#finishTicket">
                                                                        Finish
                                                                    </button>
                                                                <?php } ?>


                                                            </td>
                                                        </tr>
                                                    <?php $no++;
                                                    } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>


                                <!-- Basic Tables end -->
                            </div>
                        </div>
                    </section>
                    <!-- // Basic Vertical form layout section end -->
                </div>
            </div>

            <?php $this->load->view('templates/footer') ?>
        </div>
    </div>

    <!-- Modal Detail Ticket -->
    <div class="modal fade" id="detailTicket" tabindex="-1" aria-labelledby="detailTicketLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #9e2842; color: white;">
                    <h5 class="modal-title" id="detailTicketLabel">
                        <i class="bi bi-ticket-detailed-fill me-2"></i>Ticket Details
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header bg-light py-3">
                            <h6 class="mb-0 fw-bold"><i class="bi bi-info-circle me-2"></i>Ticket Information</h6>
                        </div>
                        <div class="card-body px-4 py-3">
                            <div class="row mb-3 align-items-center">
                                <div class="col-md-3 fw-bold text-secondary">
                                    <i class="bi bi-tag me-2"></i>Category:
                                </div>
                                <div class="col-md-9">
                                    <span class="badge" style="background-color: #9e2842;" id="category"></span>
                                </div>
                            </div>
                            <div class="row mb-3 align-items-center">
                                <div class="col-md-3 fw-bold text-secondary">
                                    <i class="bi bi-chat-square-text me-2"></i>Title:
                                </div>
                                <div class="col-md-9">
                                    <h5 class="mb-0" id="title"></h5>
                                </div>
                            </div>
                            <div class="row mb-1 align-items-start">
                                <div class="col-md-3 fw-bold text-secondary">
                                    <i class="bi bi-card-text me-2"></i>Description:
                                </div>
                                <div class="col-md-9">
                                    <div class="p-3 bg-light rounded border" id="description"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow-sm">
                        <div class="card-header bg-light py-3">
                            <h6 class="mb-0 fw-bold"><i class="bi bi-clock-history me-2"></i>Timeline</h6>
                        </div>
                        <div class="card-body px-4 py-3">
                            <div class="timeline">
                                <div class="row mb-3 pb-2 border-bottom">
                                    <div class="col-md-4 fw-bold text-secondary">
                                        <i class="bi bi-plus-circle me-2"></i>Created:
                                    </div>
                                    <div class="col-md-4 text-dark" id="created_at"></div>
                                    <div class="col-md-4 text-dark" id="created_by"></div>
                                </div>
                                <div class="row mb-3 pb-2 border-bottom">
                                    <div class="col-md-4 fw-bold text-secondary">
                                        <i class="bi bi-person-check me-2"></i>Assigned:
                                    </div>
                                    <div class="col-md-8 text-dark" id="assign_at"></div>
                                </div>
                                <div class="row mb-3 pb-2 border-bottom">
                                    <div class="col-md-4 fw-bold text-secondary">
                                        <i class="bi bi-check-circle me-2"></i>Received:
                                    </div>
                                    <div class="col-md-8 text-dark" id="receive_at"></div>
                                </div>
                                <div class="row mb-3 pb-2 border-bottom">
                                    <div class="col-md-4 fw-bold text-secondary">
                                        <i class="bi bi-x-circle me-2"></i>Declined:
                                    </div>
                                    <div class="col-md-8 text-dark" id="decline_at"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 fw-bold text-secondary">
                                        <i class="bi bi-flag-fill me-2"></i>Completed By Technician:
                                    </div>
                                    <div class="col-md-8 text-dark" id="finish_at"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 fw-bold text-secondary">
                                        <i class="bi bi-flag-fill me-2"></i>Completed By User:
                                    </div>
                                    <div class="col-md-8 text-dark" id="finish_at_user"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 fw-bold text-secondary">
                                        <i class="bi bi-flag-fill me-2"></i>Comment By User:
                                    </div>
                                    <div class="col-md-8 text-dark" id="comment_by_user"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn" style="background-color: #9e2842; color: white;" data-bs-dismiss="modal">Done</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal finish ticket with date  -->
    <div class="modal fade" id="finishTicket" tabindex="-1" role="dialog" aria-labelledby="finishTicketLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="finishTicketLabel">Finish Ticket</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formFinishTicket">
                        <div class="form-group">
                            <label for="finish_at" class="col-form-label">Finish At:</label>
                            <input type="datetime-local" class="form-control flatpickr" id="finish_at_date" name="finish_at_date" placeholder="Select date and time">
                            <script src="<?= base_url() . '/' ?>assets/extensions/flatpickr/flatpickr.min.js"></script>
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    flatpickr('.flatpickr', {
                                        enableTime: true,
                                        dateFormat: "Y-m-d H:i",
                                        time_24hr: true
                                    });
                                });
                            </script>
                        </div>
                        <input type="hidden" id="id_ticket_finish" name="id_ticket">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="btnFinishTicket">Finish Ticket</button>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url() . '/' ?>assets/static/js/components/dark.js"></script>
    <script src="<?= base_url() . '/' ?>assets/static/js/pages/horizontal-layout.js"></script>
    <script src="<?= base_url() . '/' ?>assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <script src="<?= base_url() . '/' ?>assets/compiled/js/app.js"></script>
    <script src="<?= base_url() . '/' ?>assets/extensions/jquery/jquery.min.js"></script>
    <script src="<?= base_url() . '/' ?>assets/extensions/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() . '/' ?>assets/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="<?= base_url() . '/' ?>assets/static/js/pages/datatables.js"></script>
    <script>
        // tblpickingslip datatable
        $(document).ready(function() {
            $('#tblTicket').DataTable({
                "order": [
                    [3, "desc"]
                ],
                "columnDefs": [{
                    "searchable": false,
                    "orderable": false,
                    "targets": 0
                }],
                rowCallback: function(row, data, index) {
                    $('td:eq(0)', row).html(index + 1);
                }
            });
        });
    </script>

    <script>
        function formatDate(dateStr) {
            if (!dateStr) return '';
            const date = new Date(dateStr);
            const day = String(date.getDate()).padStart(2, '0');
            const month = String(date.getMonth() + 1).padStart(2, '0');
            const year = date.getFullYear();
            const hours = String(date.getHours()).padStart(2, '0');
            const minutes = String(date.getMinutes()).padStart(2, '0');
            const seconds = String(date.getSeconds()).padStart(2, '0');
            return `${day}-${month}-${year} ${hours}:${minutes}:${seconds}`;
        }
    </script>

    <!-- show detail ticket from id_ticket using ajax -->
    <script>
        $('#detailTicket').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id_ticket = button.data('id_ticket')
            var modal = $(this)

            $.ajax({
                url: "<?= base_url('teknisi/ticket/getDataTicket/') ?>" + id_ticket,
                type: 'get',
                dataType: 'json',
                success: function(response) {
                    modal.find('#category').html(response.name_category)
                    modal.find('#title').html(response.title)
                    modal.find('#description').html(response.description)
                    modal.find('#created_at').html(formatDate(response.created_at))
                    modal.find('#created_by').html(response.karyawan)
                    // Function to format date to d-m-Y H:i:s


                    modal.find('#assign_at').html(formatDate(response.assign_at))
                    modal.find('#receive_at').html(formatDate(response.receive_at))
                    modal.find('#decline_at').html(formatDate(response.decline_at))
                    modal.find('#finish_at').html(formatDate(response.finish_at))
                    modal.find('#finish_at_user').html(formatDate(response.finish_at_user))
                    modal.find('#comment_by_user').html(response.comment_user ? response.comment_user : '-')


                }
            })
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // receive ticket with loading after confirm
        $('.receiveTicket').on('click', function() {
            var id_ticket = $(this).data('id_ticket')
            Swal.fire({
                title: 'Are you sure?',
                text: "You will receive this ticket!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, receive it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // loading swal 
                    Swal.fire({
                        title: 'Please Wait!',
                        html: 'Loading...',
                        didOpen: () => {
                            Swal.showLoading()
                        }
                    })
                    $.ajax({
                        url: "<?= base_url('teknisi/ticket/receiveTicket') ?>",
                        type: 'post',
                        data: {
                            id_ticket: id_ticket
                        },
                        dataType: 'json',
                        success: function(response) {
                            if (response.status == 'success') {
                                Swal.fire(
                                    'Received!',
                                    'Ticket has been received.',
                                    'success'
                                ).then((result) => {
                                    location.reload()
                                })
                            } else {
                                Swal.fire(
                                    'Error!',
                                    'There was an error receiving the ticket.',
                                    'error'
                                )
                            }
                        },
                        error: function() {
                            Swal.fire(
                                'Error!',
                                'There was an error processing your request.',
                                'error'
                            )
                        }
                    })
                }
            })
        });
        // decline ticket with loading after confirm
        $('.declineTicket').on('click', function() {
            var id_ticket = $(this).data('id_ticket')
            Swal.fire({
                title: 'Are you sure?',
                text: "You will decline this ticket!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, decline it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // loading swal 
                    Swal.fire({
                        title: 'Please Wait!',
                        html: 'Loading...',
                        didOpen: () => {
                            Swal.showLoading()
                        }
                    })
                    $.ajax({
                        url: "<?= base_url('teknisi/ticket/declineTicket') ?>",
                        type: 'post',
                        data: {
                            id_ticket: id_ticket
                        },
                        dataType: 'json',
                        success: function(response) {
                            if (response.status == 'success') {
                                Swal.fire(
                                    'Declined!',
                                    'Ticket has been declined.',
                                    'success'
                                ).then((result) => {
                                    location.reload()
                                })
                            } else {
                                Swal.fire(
                                    'Error!',
                                    'There was an error declining the ticket.',
                                    'error'
                                )
                            }
                        },
                        error: function() {
                            Swal.fire(
                                'Error!',
                                'There was an error processing your request.',
                                'error'
                            )
                        }
                    })
                }
            })
        });

        // finish ticket with loading after confirm
        $('.finishTicket').on('click', function() {
            var id_ticket = $(this).data('id_ticket')
            $('#id_ticket_finish').val(id_ticket)
        });

        // btnFinishTicket
        $('#btnFinishTicket').on('click', function() {
            var id_ticket = $('#id_ticket_finish').val()
            var finish_at = $('#finish_at_date').val()
            Swal.fire({
                title: 'Are you sure?',
                text: "You will finish this ticket!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, finish it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // loading swal
                    Swal.fire({
                        title: 'Please Wait!',
                        html: 'Loading...',
                        didOpen: () => {
                            Swal.showLoading()
                        }
                    })
                    $.ajax({
                        url: "<?= base_url('teknisi/ticket/finishTicket') ?>",
                        type: 'post',
                        data: {
                            id_ticket: id_ticket,
                            finish_at: finish_at
                        },
                        dataType: 'json',
                        success: function(response) {
                            if (response.status == 'success') {
                                Swal.fire(
                                    'Finished!',
                                    'Ticket has been finished.',
                                    'success'
                                ).then((result) => {
                                    location.reload()
                                })
                            } else {
                                Swal.fire(
                                    'Error!',
                                    'There was an error finishing the ticket.',
                                    'error'
                                )
                            }
                        },
                        error: function() {
                            Swal.fire(
                                'Error!',
                                'There was an error processing your request.',
                                'error'
                            )
                        }
                    })
                }
            })
        });
    </script>



</body>

</html>