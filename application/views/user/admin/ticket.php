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

                                    <a href="<?= base_url('admin/ticket/exportTicket') ?>" class="btn btn-primary">Export</a>

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
                                                        <th>Technician</th>
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
                                                            <td><?= $ticket1['teknisi'] ?></td>
                                                            <td><?= getStatusTicket($ticket1['status']) ?></td>
                                                            <td>
                                                                <!-- button modal detail  -->
                                                                <button type="button" class="btn btn-primary detailTicket" data-bs-toggle="modal" data-bs-target="#detailTicket" data-id_ticket="<?= $ticket1['id_ticket'] ?>">
                                                                    Detail
                                                                </button>
                                                                <!-- button receiveTicket -->
                                                                <?php if ($ticket1['status'] == 0) { ?>
                                                                    <!-- modal  -->
                                                                    <?php if ($ticket1['handle_by'] == NULL) { ?>
                                                                        <button type="button" class="btn btn-primary assignTicket" data-bs-toggle="modal" data-bs-target="#assignTicket" data-id_ticket="<?= $ticket1['id_ticket'] ?>">
                                                                            Assign
                                                                        </button>
                                                                        <!-- decline  -->
                                                                        <button type="button" class="btn btn-danger declineTicket" data-id_ticket="<?= $ticket1['id_ticket'] ?>">
                                                                            Decline
                                                                        </button>
                                                                    <?php } else { ?>
                                                                        <button type="button" class="btn btn-primary changeTechnician" data-bs-toggle="modal" data-bs-target="#changeTechnician" data-id_ticket="<?= $ticket1['id_ticket'] ?>" data-handle_by="<?= $ticket1['handle_by'] ?>">
                                                                            Change Technician
                                                                        </button>
                                                                    <?php } ?>


                                                                <?php }  ?>

                                                                 
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
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailTicketLabel">Detail Ticket</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- show data by ajax  -->
                    <div class="row">
                        <div class="col-4">
                            <label for="category" class="form-label">Category</label>
                        </div>
                        <div class="col-8">
                            <p id="category"></p>
                        </div>
                    </div>
                    <!-- title  -->
                    <div class="row">
                        <div class="col-4">
                            <label for="title" class="form-label">Title</label>
                        </div>
                        <div class="col-8">
                            <p id="title"></p>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="description" class="form-label">Description</label>
                            </div>
                            <div class="col-8">
                                <p id="description"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="created_at" class="form-label">Created At</label>
                            </div>
                            <div class="col-8">
                                <p id="created_at"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="created_by" class="form-label">Created By</label>
                            </div>
                            <div class="col-8">
                                <p id="created_by"></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <label for="created_by" class="form-label">Assign At</label>
                            </div>
                            <div class="col-8">
                                <p id="assign_at"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="created_by" class="form-label">Receive At</label>
                            </div>
                            <div class="col-8">
                                <p id="receive_at"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="created_by" class="form-label">Decline At</label>
                            </div>
                            <div class="col-8">
                                <p id="decline_at"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="created_by" class="form-label">Finish At</label>
                            </div>
                            <div class="col-8">
                                <p id="finish_at"></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal assign ticket  -->
    <div class="modal fade" id="assignTicket" tabindex="-1" aria-labelledby="assignTicketLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="assignTicketLabel">Assign Ticket</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formAssignTicket">
                        <input type="hidden" name="id_ticket" id="id_ticket">
                        <div class="mb-3">
                            <label for="assign_to" class="form-label">Assign To</label>
                            <select class="form-select" name="assign_to" id="assign_to">
                                <option value="">Select Technician</option>
                                <?php foreach ($teknisi->result_array() as $teknisi1) { ?>
                                    <option value="<?= $teknisi1['id_users'] ?>"><?= $teknisi1['nama'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Assign</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- modal change technician  -->
    <div class="modal fade" id="changeTechnician" tabindex="-1" aria-labelledby="changeTechnicianLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="changeTechnicianLabel">Assign Ticket</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formchangeTechnician">
                        <input type="hidden" name="id_ticket" id="id_ticket2">
                        <div class="mb-3">
                            <label for="assign_to" class="form-label">Assign To</label>
                            <select class="form-select" name="assign_to2" id="assign_to2">
                                <option value="">Select Technician</option>
                                <?php foreach ($teknisi->result_array() as $teknisi1) { ?>
                                    <option value="<?= $teknisi1['id_users'] ?>"><?= $teknisi1['nama'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Assign</button>
                    </form>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

    <!-- show detail ticket from id_ticket using ajax -->
    <script>
        $('#detailTicket').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id_ticket = button.data('id_ticket')
            var modal = $(this)

            $.ajax({
                url: "<?= base_url('admin/ticket/getDataTicket/') ?>" + id_ticket,
                type: 'get',
                dataType: 'json',
                success: function(response) {
                    modal.find('#category').html(response.name_category)
                    modal.find('#title').html(response.title)
                    modal.find('#description').html(response.description)
                    modal.find('#created_at').html(response.created_at)
                    modal.find('#created_by').html(response.karyawan),
                        modal.find('#assign_at').html(response.assign_at),
                        modal.find('#receive_at').html(response.receive_at),
                        modal.find('#decline_at').html(response.decline_at),
                        modal.find('#finish_at').html(response.finish_at)

                }
            })
        });
    </script>


    <!-- assignTicket  -->
    <script>
        $('#assignTicket').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id_ticket = button.data('id_ticket')
            var modal = $(this)

            modal.find('#id_ticket').val(id_ticket)
        });

        $('#formAssignTicket').on('submit', function(e) {
            e.preventDefault()
            // show loading swal cant click
            Swal.fire({
                title: 'Please Wait!',
                html: 'Loading...',
                didOpen: () => {
                    Swal.showLoading()
                }
            })

            var id_ticket = $('#id_ticket').val()
            var assign_to = $('#assign_to').val()



            $.ajax({
                url: "<?= base_url('admin/ticket/assignTicket') ?>",
                type: 'post',
                data: {
                    id_ticket: id_ticket,
                    assign_to: assign_to
                },
                dataType: 'json',
                success: function(response) {
                    if (response.status == 'success') {
                        Swal.fire(
                            'Assigned!',
                            'Ticket has been assigned.',
                            'success'
                        ).then((result) => {
                            // show loading swal
                            Swal.fire({
                                title: 'Please Wait!',
                                html: 'Loading...',
                                didOpen: () => {
                                    Swal.showLoading()
                                }
                            })
                            location.reload()
                        })
                    } else {
                        Swal.fire(
                            'Error!',
                            'There was an error assigning the ticket.',
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
        });
    </script>

    <!-- changeTechnician -->
    <script>
        $('#changeTechnician').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id_ticket = button.data('id_ticket')
            var handle_by = button.data('handle_by')
            var modal = $(this)

            modal.find('#id_ticket2').val(id_ticket)
            modal.find('#assign_to2').val(handle_by)
        });

        $('#formchangeTechnician').on('submit', function(e) {
            e.preventDefault()
            // show loading swal cant click
            Swal.fire({
                title: 'Please Wait!',
                html: 'Loading...',
                didOpen: () => {
                    Swal.showLoading()
                }
            })

            var id_ticket = $('#id_ticket2').val()
            var assign_to = $('#assign_to2').val()

            $.ajax({
                url: "<?= base_url('admin/ticket/assignTicket') ?>",
                type: 'post',
                data: {
                    id_ticket: id_ticket,
                    assign_to: assign_to
                },
                dataType: 'json',
                success: function(response) {
                    if (response.status == 'success') {
                        Swal.fire(
                            'Assigned!',
                            'Ticket has been assigned.',
                            'success'
                        ).then((result) => {
                            // show loading swal
                            Swal.fire({
                                title: 'Please Wait!',
                                html: 'Loading...',
                                didOpen: () => {
                                    Swal.showLoading()
                                }
                            })
                            location.reload()
                        })
                    } else {
                        Swal.fire(
                            'Error!',
                            'There was an error assigning the ticket.',
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
        });
    </script>






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
                            id_ticket: id_ticket
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