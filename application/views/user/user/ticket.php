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
                <div class="page-heading d-flex justify-content-between align-items-center">
                    <h3 class="fw-bold" style="color: #9F2840;"><?= $subtitle ?></h3>
                    <button type="button" class="btn btn-lg" style="background-color: #9F2840; color: white;" data-bs-toggle="modal" data-bs-target="#addTicket">
                        <i class="bi bi-plus-circle me-2"></i>Create New Ticket
                    </button>
                </div>

                <div class="page-content">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h5 class="card-title fw-bold" style="color: #9F2840;">
                                        <i class="bi bi-ticket-detailed me-2"></i><?= $subtitle2 ?>
                                    </h5>

                                </div>

                                <div class="card-body">
                                    <!-- Table view (visible on larger screens) -->
                                    <div class="table-responsive d-none d-md-block">
                                        <table class="table table-hover" id="tblTicket">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Category</th>
                                                    <th>Title</th>
                                                    <th>Created At</th>
                                                    <th>Created By</th>
                                                    <th>Status</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1;
                                                foreach ($ticket->result_array() as $ticket1) { ?>
                                                    <tr>
                                                        <td></td>
                                                        <td>
                                                            <span class="badge bg-light-secondary"><?= $ticket1['name_category'] ?></span>
                                                        </td>
                                                        <td class="fw-bold"><?= $ticket1['title'] ?></td>
                                                        <td><?= $ticket1['created_at'] ?></td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-sm me-2">
                                                                    <div class="avatar-text rounded-circle bg-light-primary">
                                                                        <?= strtoupper(substr($ticket1['karyawan'], 0, 1)) ?>
                                                                    </div>
                                                                </div>
                                                                <?= $ticket1['karyawan'] ?>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <?= getStatusTicket($ticket1['status']) ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="d-flex justify-content-center gap-3">
                                                                <button type="button" class="btn btn-sm px-3"
                                                                    style="background-color: #9F2840; color: white;"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#detailTicket"
                                                                    data-id_ticket="<?= $ticket1['id_ticket'] ?>">
                                                                    <i class="bi bi-eye fw-bold me-1"></i> View
                                                                </button>

                                                                <?php if ($ticket1['status'] == '0') { ?>
                                                                    <button type="button" class="btn btn-sm btn-danger shadow-sm px-3 cancelTicket"
                                                                        data-id_ticket="<?= $ticket1['id_ticket'] ?>">
                                                                        <i class="bi bi-x-circle fw-bold me-1"></i> Cancel
                                                                    </button>
                                                                <?php } ?>

                                                                <?php if ($ticket1['status'] == 2) { ?>
                                                                    <button type="button" class="btn btn-sm px-3 btnfinishTicketUser" 
                                                                        style="background-color: #9F2840; color: white;"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#FinishTicketUser"
                                                                        data-id_ticket="<?= $ticket1['id_ticket'] ?>">
                                                                        </i>Finish
                                                                    </button>
                                                                <?php } ?>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php $no++;
                                                } ?>
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- Card view (visible on mobile screens) -->
                                    <div class="d-md-none">
                                        <?php foreach ($ticket->result_array() as $index => $ticket1) { ?>
                                            <div class="card mb-3 shadow-sm">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                                        <span class="badge bg-light-secondary"><?= $ticket1['name_category'] ?></span>
                                                        <?= getStatusTicket($ticket1['status']) ?>
                                                    </div>

                                                    <h5 class="card-title fw-bold" style="color: #9F2840;"><?= $ticket1['title'] ?></h5>

                                                    <div class="d-flex align-items-center my-3">
                                                        <div class="avatar avatar-sm me-2">
                                                            <div class="avatar-text rounded-circle bg-light-primary">
                                                                <?= strtoupper(substr($ticket1['karyawan'], 0, 1)) ?>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <small class="text-muted">Created by</small>
                                                            <p class="mb-0"><?= $ticket1['karyawan'] ?></p>
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <small class="text-muted">Created at</small>
                                                        <p class="mb-0"><?= $ticket1['created_at'] ?></p>
                                                    </div>

                                                    <div class="d-flex gap-2 mt-3">
                                                        <button type="button" class="btn btn-sm flex-fill"
                                                            style="background-color: #9F2840; color: white;"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#detailTicket"
                                                            data-id_ticket="<?= $ticket1['id_ticket'] ?>">
                                                            <i class="bi bi-eye fw-bold me-1"></i> View
                                                        </button>

                                                        <?php if ($ticket1['status'] == '0') { ?>
                                                            <button type="button" class="btn btn-sm btn-danger flex-fill cancelTicket"
                                                                data-id_ticket="<?= $ticket1['id_ticket'] ?>">
                                                                <i class="bi bi-x-circle fw-bold me-1"></i> Cancel
                                                            </button>
                                                        <?php } ?>

                                                        <?php if ($ticket1['status'] == 2) { ?>
                                                            <button type="button" class="btn btn-sm flex-fill btnfinishTicketUser"
                                                                style="background-color: #9F2840; color: white;"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#FinishTicketUser"
                                                                data-id_ticket="<?= $ticket1['id_ticket'] ?>">
                                                                <i class="bi bi-check-circle fw-bold me-1"></i> Finish
                                                            </button>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="alert" style="background-color: rgba(159, 40, 64, 0.1);">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <i class="bi bi-info-circle" style="color: #9F2840; font-size: 1.5rem;"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="alert-heading" style="color: #9F2840;">Need help?</h6>
                                        <p class="mb-0">If you have any questions about using the ticket system, please contact our support team.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php $this->load->view('templates/footer') ?>
        </div>
    </div>

    <!-- Modal Detail Ticket -->
    <div class="modal fade" id="detailTicket" tabindex="-1" aria-labelledby="detailTicketLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #9F2840;">
                    <h5 class="modal-title fw-bold text-white" id="detailTicketLabel">
                        <i class="bi bi-ticket-detailed me-2"></i>Ticket Details
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-light d-flex justify-content-between align-items-center">
                            <h5 id="title" class="card-title mb-0 fw-bold" style="color: #9F2840;"></h5>
                            <span class="badge" style="background-color: #9F2840;" id="category"></span>
                        </div>
                        <div class="p-3 bg-light rounded border shadow-sm">
                            <h6 class="fw-bold text-secondary mb-2">
                                <i class="bi bi-card-text me-2" style="color: #9F2840;"></i>Description
                            </h6>
                            <div id="description" class="mb-0 description-content"></div>
                        </div>
                        <div class="card-body">
                            <hr class="my-4">

                            <div class="row g-4">
                                <div class="col-md-6">
                                    <h6 class="fw-bold text-secondary mb-3">Ticket Information</h6>
                                    <div class="mb-3">
                                        <div class="d-flex align-items-center mb-1">
                                            <i class="bi bi-person-circle me-2" style="color: #9F2840;"></i>
                                            <span class="fw-semibold">Created By:</span>
                                        </div>
                                        <p id="created_by" class="mb-0 ms-4"></p>
                                    </div>
                                    <div class="mb-3">
                                        <div class="d-flex align-items-center mb-1">
                                            <i class="bi bi-calendar-plus me-2" style="color: #9F2840;"></i>
                                            <span class="fw-semibold">Created At:</span>
                                        </div>
                                        <p id="created_at" class="mb-0 ms-4"></p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <h6 class="fw-bold text-secondary mb-3">Processing Timeline</h6>
                                    <div class="mb-2">
                                        <div class="d-flex align-items-center mb-1">
                                            <i class="bi bi-send me-2" style="color: #9F2840;"></i>
                                            <span class="fw-semibold">Assigned:</span>
                                        </div>
                                        <p id="assign_at" class="mb-0 ms-4"></p>
                                    </div>
                                    <div class="mb-2">
                                        <div class="d-flex align-items-center mb-1">
                                            <i class="bi bi-check-circle me-2 text-success"></i>
                                            <span class="fw-semibold">Received:</span>
                                        </div>
                                        <p id="receive_at" class="mb-0 ms-4"></p>
                                    </div>
                                    <div class="mb-2">
                                        <div class="d-flex align-items-center mb-1">
                                            <i class="bi bi-x-circle me-2 text-danger"></i>
                                            <span class="fw-semibold">Declined:</span>
                                        </div>
                                        <p id="decline_at" class="mb-0 ms-4"></p>
                                    </div>
                                    <div class="mb-2">
                                        <div class="d-flex align-items-center mb-1">
                                            <i class="bi bi-flag-fill me-2 text-success"></i>
                                            <span class="fw-semibold">Completed By Technician:</span>
                                        </div>
                                        <p id="finish_at" class="mb-0 ms-4"></p>
                                    </div>

                                    <div class="mb-2">
                                        <div class="d-flex align-items-center mb-1">
                                            <i class="bi bi-flag-fill me-2 text-success"></i>
                                            <span class="fw-semibold">Completed By User:</span>
                                        </div>
                                        <p id="finish_at_user" class="mb-0 ms-4"></p>
                                    </div>

                                     <div class="mb-2">
                                        <div class="d-flex align-items-center mb-1">
                                            <i class="bi bi-flag-fill me-2 text-success"></i>
                                            <span class="fw-semibold">Comment By User:</span>
                                        </div>
                                        <p id="comment_by_user" class="mb-0 ms-4"></p>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">
                            <i class="bi bi-x-circle me-2"></i>Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- modal add ticket  -->
    <div class="modal fade" id="addTicket" tabindex="-1" aria-labelledby="addTicketLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #9F2840;">
                    <h5 class="modal-title text-white fw-bold" id="addTicketLabel">
                        <i class="bi bi-plus-circle me-2"></i>Create New Ticket
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form id="formAddTicket" class="needs-validation" novalidate>
                        <div class="mb-4">
                            <label for="category" class="form-label fw-semibold">
                                <i class="bi bi-tag me-2" style="color: #9F2840;"></i>Category
                            </label>
                            <select class="form-select shadow-sm" id="category" name="category" required>
                                <option selected disabled value="">Select a category...</option>
                                <?php foreach ($category->result_array() as $category1) { ?>
                                    <option value="<?= $category1['id_category'] ?>"><?= $category1['name_category'] ?></option>
                                <?php } ?>
                            </select>
                            <div class="invalid-feedback">
                                Please select a ticket category.
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="title" class="form-label fw-semibold">
                                <i class="bi bi-card-heading me-2" style="color: #9F2840;"></i>Title
                            </label>
                            <input type="text" class="form-control shadow-sm" id="title" name="title" placeholder="Brief description of the issue" required>
                            <div class="invalid-feedback">
                                Please provide a ticket title.
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="description" class="form-label fw-semibold">
                                <i class="bi bi-card-text me-2" style="color: #9F2840;"></i>Description
                            </label>
                            <textarea class="form-control shadow-sm" id="description" name="description" rows="5" placeholder="Provide detailed information about your issue..." required></textarea>
                            <div class="invalid-feedback">
                                Please provide a description.
                            </div>
                            <small class="form-text text-muted">
                                Please include all relevant details to help us resolve your issue faster.
                            </small>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                                <i class="bi bi-x-circle me-2"></i>Cancel
                            </button>
                            <button type="submit" class="btn" style="background-color: #9F2840; color: white;">
                                <i class="bi bi-send me-2"></i>Submit Ticket
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- FinishTicketUser -->
    <div class="modal fade" id="FinishTicketUser" tabindex="-1" aria-labelledby="FinishTicketUserLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #9F2840;">
                    <h5 class="modal-title text-white fw-bold" id="FinishTicketUserLabel">
                        <i class="bi bi-check-circle me-2"></i>Finish Ticket
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form id="formFinishTicketUser" class="needs-validation" novalidate>
                        <input type="hidden" id="id_ticket" name="id_ticket">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td width="30%" class="fw-semibold">
                                            <label for="finish_at">
                                                <i class="bi bi-calendar-check me-2" style="color: #9F2840;"></i>Completion Date
                                            </label>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control shadow-sm" id="finish_at_user" name="finish_at_user" placeholder="Select date and time" required>
                                            <script src="<?= base_url() . '/' ?>assets/extensions/flatpickr/flatpickr.min.js"></script>
                                            <script>
                                                flatpickr("#finish_at_user", {
                                                    enableTime: true,
                                                    dateFormat: "Y-m-d H:i",
                                                    defaultDate: "<?= date('Y-m-d H:i') ?>",
                                                    time_24hr: true
                                                });
                                            </script>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">
                                            <label for="note">
                                                <i class="bi bi-chat-left-text me-2" style="color: #9F2840;"></i>Feedback
                                            </label>
                                        </td>
                                        <td>
                                            <textarea class="form-control shadow-sm" id="note" name="note" rows="5" placeholder="Please provide feedback about the resolution of your ticket..." required></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                                <i class="bi bi-x-circle me-2"></i>Cancel
                            </button>
                            <button type="submit" class="btn" style="background-color: #9F2840; color: white;">
                                <i class="bi bi-check-circle me-2"></i>Confirm Completion
                            </button>
                        </div>
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
                url: "<?= base_url('user/ticket/getDataTicket/') ?>" + id_ticket,
                type: 'get',
                dataType: 'json',
                success: function(response) {
                    modal.find('#category').html(response.name_category)
                    modal.find('#title').html(response.title)
                    modal.find('#description').html(response.description)
                    // Format date as dMY (e.g. 15 January 2023)
                    var date = new Date(response.created_at);
                    var formattedDate = date.getDate() + ' ' +
                        date.toLocaleString('default', {
                            month: 'long'
                        }) + ' ' +
                        date.getFullYear() + ' ' +
                        date.toLocaleString('default', {
                            hour: '2-digit',
                            minute: '2-digit',
                            second: '2-digit',
                            hour12: false
                        });
                    modal.find('#created_at').html(formattedDate);
                    modal.find('#created_by').html(response.karyawan)
                    // Format each date as "d MonthName Year HH:MM:SS" if the date exists
                    modal.find('#assign_at').html(response.assign_at ? formatDateTime(response.assign_at) : '-')
                    modal.find('#receive_at').html(response.receive_at ? formatDateTime(response.receive_at) : '-')
                    modal.find('#decline_at').html(response.decline_at ? formatDateTime(response.decline_at) : '-')
                    modal.find('#finish_at').html(response.finish_at ? formatDateTime(response.finish_at) : '-')
                    modal.find('#finish_at_user').html(response.finish_at_user ? formatDateTime(response.finish_at_user) : '-')
                    modal.find('#comment_by_user').html(response.comment_user ? response.comment_user : '-')

                    // Helper function to format datetime
                    function formatDateTime(dateTimeStr) {
                        var date = new Date(dateTimeStr);
                        return date.getDate() + ' ' +
                            date.toLocaleString('default', {
                                month: 'long'
                            }) + ' ' +
                            date.getFullYear() + ' ' +
                            date.toLocaleString('default', {
                                hour: '2-digit',
                                minute: '2-digit',
                                second: '2-digit',
                                hour12: false
                            });
                    }


                }
            })
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>




    <!-- formAddTicket -->
    <script>
        $('#formAddTicket').on('submit', function(e) {
            e.preventDefault()
            // swal loading 
            Swal.fire({
                title: 'Please Wait!',
                html: 'Loading...',
                didOpen: () => {
                    Swal.showLoading()
                }
            })
            $.ajax({
                url: "<?= base_url('user/ticket/addTicket') ?>",
                type: 'post',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {
                    if (response.status == 'success') {
                        Swal.fire(
                            'Success!',
                            'Ticket has been added.',
                            'success'
                        ).then((result) => {
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
                            'There was an error adding the ticket.',
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

    <!-- cancelTicket -->
    <script>
        $(document).on('click', '.cancelTicket', function() {
            var id_ticket = $(this).data('id_ticket')
            Swal.fire({
                title: 'Are you sure?',
                text: "You want to cancel this ticket?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, cancel it!'
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
                        url: "<?= base_url('user/ticket/cancelTicket/') ?>" + id_ticket,
                        type: 'post',
                        dataType: 'json',
                        success: function(response) {
                            if (response.status == 'success') {
                                Swal.fire(
                                    'Success!',
                                    'Ticket has been canceled.',
                                    'success'
                                ).then((result) => {
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
                                    'There was an error canceling the ticket.',
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

    <!-- btnfinishTicketUser -->
    <script>
        $(document).on('click', '.btnfinishTicketUser', function() {
            var id_ticket = $(this).data('id_ticket')
            $('#id_ticket').val(id_ticket)
        });
    </script>

    <!-- formFinishTicketUser -->
    <script>
        $('#formFinishTicketUser').on('submit', function(e) {
            e.preventDefault()
            // swal loading 
            Swal.fire({
                title: 'Please Wait!',
                html: 'Loading...',
                didOpen: () => {
                    Swal.showLoading()
                }
            })
            $.ajax({
                url: "<?= base_url('user/ticket/finishTicketUser') ?>",
                type: 'post',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {
                    if (response.status == 'success') {
                        Swal.fire(
                            'Success!',
                            'Ticket has been marked as finished.',
                            'success'
                        ).then((result) => {
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
                            'There was an error marking the ticket as finished.',
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
</body>