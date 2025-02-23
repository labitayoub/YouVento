<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YouCode Clubs Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles to enhance the navbar */
        .navbar {
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            background: linear-gradient(135deg, #2c3e50, #34495e);
        }
        .navbar-brand {
            font-weight: bold;
            color: #ffffff !important;
            font-size: 1.5rem;
        }
        .navbar-brand img {
            filter: brightness(0) invert(1);
        }
        .nav-link {
            transition: color 0.3s ease;
            color: #ffffff !important;
            font-size: 1.1rem;
        }
        .nav-link:hover {
            color: #1abc9c !important;
        }
        .btn-primary {
            margin-left: 10px;
            border-radius: 20px;
            padding: 8px 20px;
            background-color: #1abc9c;
            border: none;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #16a085;
            transform: translateY(-2px);
        }
        @media (max-width: 991px) {
            .navbar-nav .nav-item {
                text-align: center;
                padding: 10px 0;
            }
            .navbar-nav .btn-primary {
                margin-left: 0;
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                YouCode Clubs
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">
                            <i class="bi bi-house me-1"></i>Accueil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/clubs">
                            <i class="bi bi-collection me-1"></i>Clubs
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/evenement">
                            <i class="bi bi-calendar-event me-1"></i>Événements
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/calendrier">
                            <i class="bi bi-calendar-check me-1"></i>Calendrier
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item me-3">
                        <a class="nav-link" href="/connecter">Se connecter</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary" href="/inscrire">S'inscrire</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>