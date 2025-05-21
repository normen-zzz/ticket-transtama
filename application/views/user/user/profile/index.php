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
    <!-- sweetalert2 cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11" />
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
                                <div class="card shadow-sm">
                                    <div class="card-header" style="background-color: #9F2840; color: white;">
                                        <h4 class="card-title m-0"><?= $subtitle2 ?></h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="row mb-4">
                                                <div class="col-md-4 text-center">
                                                    <!-- Current Profile Image Display -->
                                                    <div class="avatar avatar-xl mb-3 mx-auto">
                                                        
                                                            <img src="<?= base_url() . '/' ?>images/users/<?= $this->session->userdata('photo') ?>" alt="Default Profile" class="rounded-circle img-thumbnail">
                                                       
                                                    </div>
                                                    <h5><?= $users['nama'] ?></h5>
                                                    <p class="text-muted"><?= $users['company'] ?></p>
                                                    <div id="previewImage" class="mt-3"></div>
                                                </div>
                                                <div class="col-md-8">
                                                    <form id="editProfile" class="form form-vertical">
                                                        <div class="form-body">
                                                            <div class="row">
                                                                <div class="col-12 mb-3">
                                                                    <div class="form-group">
                                                                        <label for="email-id-icon" class="text-uppercase fw-bold" style="color: #9F2840;"><i class="bi bi-person-badge me-1"></i> Username</label>
                                                                        <div class="position-relative">
                                                                            <input type="text" class="form-control form-control-lg bg-light" value="<?= $users['username'] ?>" name="username" placeholder="Email" readonly id="email-id-icon">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 mb-3">
                                                                    <div class="form-group">
                                                                        <label for="first-name-icon" class="text-uppercase fw-bold" style="color: #9F2840;"><i class="bi bi-person me-1"></i> Name</label>
                                                                        <div class="position-relative">
                                                                            <input type="text" class="form-control form-control-lg" name="nama" value="<?= $users['nama'] ?>" placeholder="Enter your name">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 mb-3">
                                                                    <div class="form-group">
                                                                        <label for="company" class="text-uppercase fw-bold" style="color: #9F2840;"><i class="bi bi-building me-1"></i> Company</label>
                                                                        <div class="position-relative">
                                                                            <select name="company" class="form-control form-control-lg" id="company">
                                                                                <option value="<?= $users['company'] ?>" selected><?= $users['company'] ?></option>
                                                                                <option value="TLX">TLX</option>
                                                                                <option value="TAB">TAB</option>
                                                                                <option value="GSA">GSA</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 mb-3">
                                                                    <div class="form-group">
                                                                        <label for="password-id-icon" class="text-uppercase fw-bold" style="color: #9F2840;"><i class="bi bi-lock me-1"></i> Password</label>
                                                                        <div class="position-relative">
                                                                            <input type="password" class="form-control form-control-lg" name="password" placeholder="Fill only if you want to change password">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 mb-3">
                                                                    <div class="form-group">
                                                                        <label for="photoProfile" class="text-uppercase fw-bold" style="color: #9F2840;"><i class="bi bi-image me-1"></i> Profile Photo</label>
                                                                        <div class="input-group">
                                                                            <input type="file" class="form-control form-control-lg" id="photoProfile" accept="image/*" onchange="handleImageUpload(event);">
                                                                            <button class="btn" style="background-color: #9F2840; color: white;" type="button" onclick="document.getElementById('photoProfile').click()">Browse</button>
                                                                            <input type="file" name="foto" id="photoProfileCompressed" hidden>
                                                                        </div>
                                                                        <small class="text-muted">Max file size: 2MB (JPG, PNG)</small>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 d-flex justify-content-end mt-4">
                                                                    <button type="reset" class="btn btn-light-secondary me-2 px-4">
                                                                        <i class="bi bi-x-circle me-1"></i> Reset
                                                                    </button>
                                                                    <button type="submit" class="btn px-4" style="background-color: #9F2840; color: white;">
                                                                        <i class="bi bi-save me-1"></i> Save Changes
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- // Basic Vertical form layout section end -->
                </div>
            </div>

            <?php $this->load->view('templates/footer') ?>
        </div>
    </div>
     <!-- cdn jquery -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="<?= base_url() . '/' ?>assets/static/js/components/dark.js"></script>
    <script src="<?= base_url() . '/' ?>assets/static/js/pages/horizontal-layout.js"></script>
    <script src="<?= base_url() . '/' ?>assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <script src="<?= base_url() . '/' ?>assets/compiled/js/app.js"></script>
   

    <!-- Compress Image photoProfile  cdn -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/browser-image-compression@2.0.1/dist/browser-image-compression.js"></script>

    <!-- sweetalert2 cdn  -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function handleImageUpload(event) {

            // swal loading 
            Swal.fire({
                title: 'Loading',
                html: 'Please wait,Compressing Image',
                timerProgressBar: true,
                didOpen: () => {
                    Swal.showLoading()
                },
                // cant close 
                showConfirmButton: false,
                showCancelButton: false,
                allowOutsideClick: false,
            })

            var imageFile = event.target.files[0];
            console.log('originalFile instanceof Blob', imageFile instanceof Blob); // true
            console.log(`originalFile size ${imageFile.size / 1024 / 1024} MB`);

            var options = {
                maxSizeMB: 0.1,
                maxWidthOrHeight: 1920,
                useWebWorker: true
            }
            imageCompression(imageFile, options)
                .then(function(compressedFile) {
                    console.log('compressedFile instanceof Blob', compressedFile instanceof Blob); // true
                    console.log(`compressedFile size ${compressedFile.size / 1024 / 1024} MB`); // smaller than maxSizeMB

                    // set compressedFile into photoProfileCompressed
                    const dataTransfer = new DataTransfer();
                    dataTransfer.items.add(new File([compressedFile], compressedFile.name));
                    document.getElementById('photoProfileCompressed').files = dataTransfer.files;
                    Swal.close();
                    // show image on previewImage
                    const previewImage = document.getElementById('previewImage');
                    previewImage.innerHTML = '';
                    const img = document.createElement('img');
                    img.src = URL.createObjectURL(compressedFile);
                    img.width = 200;
                    img.height = 200;
                    previewImage.appendChild(img);
                    // add text preview image 
                    const text = document.createElement('p');
                    text.innerHTML = 'Preview Image';
                    previewImage.appendChild(text);

                })
                .catch(function(error) {
                    console.log(error.message);
                });
        }
    </script>

    <script>
        // editProfile ajax post contain photo
        $('#editProfile').submit(function(e) {
            e.preventDefault();
            // swal loading 
            Swal.fire({
                title: 'Loading',
                html: 'Please wait,submitting data',
                timerProgressBar: true,
                didOpen: () => {
                    Swal.showLoading()
                },
                // cant close 
                showConfirmButton: false,
                showCancelButton: false,
                allowOutsideClick: false,
            })
            var formData = new FormData(this);
            console.log(formData);

            $.ajax({
                url: '<?= base_url('user/profile/editProfile') ?>',
                type: 'POST',
                data: formData,
                success: function(data) {
                    var data = JSON.parse(data);
                    if (data.status == 'success') {
                        console.log('success');

                        //    swal success 
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: data.message,
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // swal showLoading 
                                Swal.fire({
                                    title: 'Loading',
                                    html: 'Please wait,Reloading page',
                                    timerProgressBar: true,
                                    didOpen: () => {
                                        Swal.showLoading()
                                    },
                                    // cant close 
                                    showConfirmButton: false,
                                    showCancelButton: false,
                                    allowOutsideClick: false,
                                })

                                location.reload();
                            }
                        })
                    } else {
                        console.log('error');

                        // swal error 
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: data.message,
                        })
                    }
                },
                cache: false,
                contentType: false,
                processData: false
            });
        });
    </script>






</body>

</html>