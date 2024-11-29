<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="style.css" />

    <title>Website | Personal</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
        <div class="container">
            <a class="navbar-brand" href="#">Dailam Al Muhibi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Download CV</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="jumbotron text-center">
        <img class="img-thumbnail" src="<?php echo e(Vite::asset('resources/images/Dailam.jpg')); ?>" alt="image">
        <h1 class="display-4">Dailam Al Muhibi</h1>
        <p class="lead">Saya Seorang Mahasiswa Telkom University</p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,96L48,133.3C96,171,192,245,288,234.7C384,224,480,128,576,112C672,96,768,160,864,181.3C960,203,1056,181,1152,160C1248,139,1344,117,1392,106.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
    <section id="about" style="margin-top: -10px">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>About Me</h2>
                </div>
            </div>
            <div class="row justify-content-center fs-5">
                <div class="col-md-4">
                    <p>
                        Halo! Saya Dailam, seorang mahasiswa penuh semangat di Telkom University Surabaya yang selalu
                        antusias menjelajahi dunia teknologi dan kreativitas. Saya berkomitmen untuk terus belajar dan
                        berkembang, memadukan logika analitis
                        dan imajinasi untuk menciptakan solusi inovatif. Saya percaya bahwa kolaborasi dan dedikasi
                        adalah kunci untuk mewujudkan impian dan mencapai tujuan besar.
                    </p>
                </div>
                <div class="col-md-4">
                    <p>
                        Saat ini, saya terlibat dalam berbagai proyek dan inisiatif yang mendorong saya untuk berpikir
                        kreatif dan mengasah kemampuan problem-solving. Saya sangat menikmati tantangan baru dan terbuka
                        untuk bekerja sama dalam
                        proyek-proyek yang bermanfaat bagi komunitas dan masa depan. Jangan ragu untuk menjelajahi
                        halaman ini dan terhubung dengan saya. Bersama-sama, mari ciptakan sesuatu yang luar biasa!
                    </p>
                </div>
            </div>
        </div>
        <hr style="border: 1px solid #007bff; width: 100%; margin: 20px 0" />
    </section>

    <section id="contact" style="text-align: center; margin-top: 50px">
        <h2>Contact</h2>
        <p>Hubungi saya melalui:</p>
        <ul style="list-style: none; padding: 0">
            <li style="margin: 10px 0"><i class="fas fa-envelope"></i> <a href="mailto:daimoh442@gmail.com"
                    style="text-decoration: none; color: #007bff">daimoh442@gmail.com</a></li>
            <li style="margin: 10px 0"><i class="fas fa-phone"></i> <a href="tel:+6289618418569"
                    style="text-decoration: none; color: #007bff">0896 1841 8569</a></li>
            <li style="margin: 10px 0"><i class="fab fa-instagram"></i> <a href="https://instagram.com/dailammhb"
                    style="text-decoration: none; color: #007bff">@dailammhb</a></li>
        </ul>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="margin-top: 0">
            <path fill="#e2edff" fill-opacity="1"
                d="M0,128L48,133.3C96,139,192,149,288,138.7C384,128,480,96,576,80C672,64,768,64,864,85.3C960,107,1056,149,1152,160C1248,171,1344,160,1392,154.7L1440,149.3L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>

    <footer style="text-align: center; margin-top: 0; padding: 10px; background-color: #0d6efd; color: white">&copy;
        Dailam 2024</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>

</html>
<?php /**PATH C:\Users\Lenovo\Documents\Semester 3\Pengembangan Aplikasi web\LARAVEL\prak11\resources\views/bootstrap.blade.php ENDPATH**/ ?>