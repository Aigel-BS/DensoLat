<?php
$this->layout = false;
$serialNumber = isset($this->request->query['serial']) ? h($this->request->query['serial']) : 'DNSA1234567890';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal de Inyectores IAM DENSO</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Outfit', sans-serif;
        }

        html,
        body {
            max-width: 100%;
            overflow-x: hidden;
        }

        body {
            background-color: #f4f6f9;
            color: #333;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Header Navbar */
        .portal-header {
            background-color: #001a35;
            color: #fff;
            padding: 12px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 3px solid #e31837;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-left {
            display: flex;
            align-items: center;
            gap: 25px;
        }

        .denso-logo-img {
            height: 38px;
            display: block;
        }

        .portal-title {
            font-size: 18px;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 24px;
        }

        .nav-item {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #e0e0e0;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: color 0.2s;
        }

        .nav-item:hover {
            color: #fff;
        }

        .badge-container {
            position: relative;
        }

        .notification-badge {
            position: absolute;
            top: -6px;
            right: -6px;
            background-color: #e31837;
            color: #fff;
            font-size: 10px;
            font-weight: bold;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Container wrapper */
        .main-container {
            flex: 1;
            padding: 24px 5%;
            max-width: 1400px;
            margin: 0 auto;
            width: 100%;
        }

        /* Alert Banner */
        .auth-banner {
            background-color: #fff;
            border: 1px solid #a9d08e;
            border-left: 6px solid #548235;
            border-radius: 8px;
            padding: 16px 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .banner-message {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #385723;
            font-weight: 600;
            font-size: 16px;
        }

        .banner-serial {
            font-size: 15px;
            color: #555;
        }

        .banner-serial strong {
            color: #002d62;
            font-size: 16px;
            margin-left: 4px;
        }

        /* Hero Main Box */
        .hero-showcase {
            background: linear-gradient(135deg, #021124 0%, #062347 100%);
            border-radius: 12px;
            padding: 30px 40px;
            color: #fff;
            display: grid;
            grid-template-columns: 1fr 1.2fr 1fr;
            gap: 30px;
            align-items: center;
            position: relative;
            overflow: hidden;
            margin-bottom: 30px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
        }

        .hero-showcase::before {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(14, 84, 171, 0.2) 0%, rgba(0, 0, 0, 0) 70%);
            bottom: -50px;
            left: -50px;
            pointer-events: none;
        }

        /* Hero Left Column */
        .hero-info {
            display: flex;
            flex-direction: column;
            justify-content: center;
            z-index: 2;
        }

        .hero-title {
            font-size: 32px;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        .hero-subtitle {
            font-size: 20px;
            color: #9ac2ed;
            margin-top: 4px;
            font-weight: 500;
        }

        .hero-divider {
            width: 60px;
            height: 4px;
            background-color: #e31837;
            margin: 20px 0;
            border-radius: 2px;
        }

        .hero-desc {
            font-size: 15px;
            color: #d0e1f5;
            line-height: 1.5;
            margin-bottom: 30px;
        }

        .denso-corporate-logo {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .denso-corporate-box {
            background-color: #e31837;
            color: #fff;
            padding: 6px 14px;
            font-weight: bold;
            font-size: 20px;
            width: fit-content;
            letter-spacing: 0.5px;
        }

        .denso-tagline {
            font-size: 11px;
            color: #aaa;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        /* Hero Center Column (Injector) */
        .hero-visual {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: relative;
            z-index: 2;
        }

        .glow-circle {
            position: absolute;
            width: 280px;
            height: 280px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(14, 84, 171, 0.3) 0%, rgba(14, 84, 171, 0.05) 50%, rgba(0, 0, 0, 0) 70%);
            border: 1px dashed rgba(14, 84, 171, 0.4);
            animation: rotateGlow 20s linear infinite;
            pointer-events: none;
        }

        @keyframes rotateGlow {
            100% {
                transform: rotate(360deg);
            }
        }

        .injector-image {
            height: 290px;
            object-fit: contain;
            filter: drop-shadow(0 0 20px rgba(14, 84, 171, 0.5));
            transition: transform 0.3s;
        }

        .injector-image:hover {
            transform: scale(1.05);
        }

        .hero-badge-overlay {
            margin-top: 15px;
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .badge-distribuidor {
            border: 1px solid rgba(255, 255, 255, 0.4);
            padding: 4px 10px;
            font-size: 10px;
            font-weight: bold;
            letter-spacing: 0.5px;
            background-color: rgba(0, 0, 0, 0.3);
            text-transform: uppercase;
        }

        /* Hero Right Column (Benefits) */
        .hero-benefits {
            z-index: 2;
        }

        .benefits-title {
            font-size: 14px;
            font-weight: 700;
            color: #d0e1f5;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .benefit-list {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .benefit-item {
            display: flex;
            gap: 12px;
            align-items: flex-start;
        }

        .benefit-icon-wrapper {
            background-color: rgba(255, 255, 255, 0.1);
            width: 28px;
            height: 28px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .benefit-content {
            display: flex;
            flex-direction: column;
        }

        .benefit-name {
            font-size: 13px;
            font-weight: 700;
            color: #e31837;
            text-transform: uppercase;
            margin-bottom: 2px;
        }

        .benefit-desc {
            font-size: 12px;
            color: #ccc;
            line-height: 1.4;
        }

        /* Grid Action Cards */
        .cards-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }

        .action-card {
            background-color: #fff;
            border-radius: 10px;
            border: 1px solid #e1e4e8;
            padding: 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
            text-decoration: none;
            color: inherit;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.02);
            transition: transform 0.2s, box-shadow 0.2s, border-color 0.2s;
        }

        .action-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
            border-color: #ccd1d9;
        }

        .card-content-left {
            display: flex;
            gap: 16px;
            align-items: center;
        }

        .card-icon-container {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        /* Blue card theme (upper row) */
        .card-blue .card-icon-container {
            background-color: #002d62;
            color: #fff;
        }

        .card-blue .card-title {
            color: #002d62;
        }

        /* Red card theme (lower row) */
        .card-red .card-icon-container {
            background-color: #e31837;
            color: #fff;
        }

        .card-red .card-title {
            color: #e31837;
        }

        .card-text-info {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .card-title {
            font-size: 15px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .card-bullets {
            font-size: 12px;
            color: #666;
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .card-bullets li::before {
            content: "• ";
            color: #aaa;
            margin-right: 2px;
        }

        .card-arrow {
            color: #002d62;
            font-size: 18px;
            font-weight: bold;
            transition: transform 0.2s;
        }

        .action-card:hover .card-arrow {
            transform: translateX(4px);
        }

        .card-red .card-arrow {
            color: #e31837;
        }

        /* Collapsible Sections Wrappers */
        .collapsible-section {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-out;
            margin-bottom: 0;
        }

        .collapsible-section.active {
            max-height: 5000px;
            margin-bottom: 30px;
        }

        /* Video Section */
        .video-container-box {
            background-color: #fff;
            padding: 30px;
            border-radius: 12px;
            border: 1px solid #e1e4e8;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            text-align: center;
        }

        .video-title {
            font-size: 20px;
            font-weight: bold;
            color: #002d62;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .video-player {
            width: 100%;
            max-width: 800px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            outline: none;
        }

        /* Form Section Custom Styles */
        .garantia-form-section {
            background-color: #fff;
            padding: 40px;
            border-radius: 12px;
            border: 1px solid #e1e4e8;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        .garantia-form-section-title {
            font-size: 24px;
            color: #002d62;
            margin-bottom: 10px;
            text-align: center;
            font-weight: bold;
            text-transform: uppercase;
        }

        .garantia-form-section-subtitle {
            font-size: 14px;
            color: #555;
            margin-bottom: 30px;
            text-align: center;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.6;
        }

        .form-group-title {
            font-size: 16px;
            color: #e31837;
            margin: 35px 0 15px 0;
            border-bottom: 2px solid #e31837;
            padding-bottom: 5px;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 0.5px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .form-field {
            display: flex;
            flex-direction: column;
        }

        .form-field label {
            font-size: 13px;
            margin-bottom: 6px;
            color: #333;
            font-weight: 600;
        }

        .form-field input,
        .form-field select,
        .form-field textarea {
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            outline: none;
            transition: border-color 0.2s;
        }

        .form-field input:focus,
        .form-field select:focus,
        .form-field textarea:focus {
            border-color: #e31837;
        }

        .form-field-full {
            grid-column: span 2;
        }

        .form-field-checkbox {
            flex-direction: row;
            align-items: center;
            gap: 10px;
        }

        .form-field-checkbox label {
            margin-bottom: 0;
        }

        .submit-btn-container {
            text-align: center;
            margin-top: 40px;
        }

        .submit-btn {
            background-color: #e31837;
            color: #fff;
            border: none;
            padding: 14px 50px;
            font-size: 15px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.2s;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .submit-btn:hover {
            background-color: #b30f24;
        }

        .garantia-alert {
            padding: 15px;
            margin-bottom: 25px;
            border: 1px solid transparent;
            border-radius: 6px;
            text-align: center;
            font-weight: bold;
            font-size: 15px;
        }

        .garantia-alert-success {
            color: #3c763d;
            background-color: #dff0d8;
            border-color: #d6e9c6;
        }

        /* Native datepicker custom overlay CSS */
        .form-field input[type="date"]:not([readonly]) {
            position: relative;
            cursor: pointer;
        }

        .form-field input[type="date"]:not([readonly])::-webkit-calendar-picker-indicator {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: auto;
            height: auto;
            color: transparent;
            background: transparent;
            cursor: pointer;
        }

        /* Footer */
        .portal-footer {
            background-color: #0c1b33;
            color: #fff;
            padding: 40px 5%;
            border-top: 4px solid #002d62;
        }

        .footer-grid {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1.2fr 1.2fr 1fr;
            gap: 40px;
            align-items: center;
        }

        .footer-col {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .footer-col-title {
            font-size: 13px;
            font-weight: 700;
            color: #9ac2ed;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 4px;
        }

        .footer-link-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .footer-link {
            color: #ccc;
            text-decoration: none;
            font-size: 13px;
            transition: color 0.2s;
        }

        .footer-link:hover {
            color: #fff;
        }

        .footer-info-text {
            font-size: 13px;
            color: #ccc;
            line-height: 1.4;
        }

        .footer-right {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: 15px;
        }

        .footer-copyright {
            font-size: 11px;
            color: #888;
            text-align: right;
        }

        /* Responsiveness adjustments */
        @media (max-width: 1024px) {
            .hero-showcase {
                grid-template-columns: 1fr 1fr;
            }

            .hero-benefits {
                grid-column: span 2;
            }

            .cards-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .footer-grid {
                grid-template-columns: 1fr 1fr;
            }

            .footer-right {
                grid-column: span 2;
                align-items: center;
            }

            .footer-copyright {
                text-align: center;
            }
        }

        @media (max-width: 768px) {

            html,
            body {
                overflow-x: hidden;
            }

            .portal-header {
                padding: 10px 12px;
            }

            .portal-title {
                font-size: 13px;
                line-height: 1.2;
            }

            .header-left {
                gap: 8px;
            }

            .denso-logo-img {
                height: 26px;
            }

            .header-right {
                gap: 10px;
            }

            .nav-item span {
                display: none;
            }

            .nav-item svg {
                width: 20px;
                height: 20px;
            }

            .nav-item svg:last-child {
                display: none;
            }

            .auth-banner {
                flex-direction: column;
                align-items: flex-start;
                gap: 8px;
                padding: 12px 16px;
            }

            .banner-message {
                font-size: 14px;
            }

            .banner-serial {
                font-size: 13px;
            }

            .hero-showcase {
                grid-template-columns: 1fr;
                padding: 20px;
            }

            .hero-title {
                font-size: 26px;
                text-align: center;
            }

            .hero-subtitle {
                font-size: 16px;
                text-align: center;
            }

            .hero-divider {
                margin: 15px auto;
            }

            .hero-desc {
                text-align: center;
                margin-bottom: 20px;
            }

            .denso-corporate-logo {
                align-items: center;
                margin-bottom: 20px;
            }

            .injector-image {
                height: auto;
                max-height: 200px;
                max-width: 100%;
            }

            .glow-circle {
                width: 200px;
                height: 200px;
            }

            .hero-benefits {
                grid-column: span 1;
            }

            .benefit-desc {
                word-break: break-word;
            }

            .cards-grid {
                grid-template-columns: 1fr;
            }

            .footer-grid {
                grid-template-columns: 1fr;
                gap: 25px;
            }

            .footer-right {
                grid-column: span 1;
                align-items: center;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .form-field-full {
                grid-column: span 1;
            }
        }
    </style>
</head>

<body>

    <!-- Header Navbar -->
    <header class="portal-header">
        <div class="header-left">
            <img class="denso-logo-img" src="<?= $this->Html->url('/img/Logo_DENSO.jpg') ?>" alt="DENSO Logo">
            <span class="portal-title">Portal de Inyectores IAM DENSO</span>
        </div>

    </header>

    <!-- Main Content -->
    <main class="main-container">

        <!-- Verification Banner -->
        <div class="auth-banner">
            <div class="banner-message">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="#548235" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                </svg>
                <span>PRODUCTO AUTENTICADO CORRECTAMENTE</span>
            </div>

        </div>

        <!-- Tech Hero Showcase -->
        <section class="hero-showcase">
            <div class="hero-info">
                <h1 class="hero-title">INYECTOR DENSO</h1>
                <h2 class="hero-subtitle">G2 / G3 SERIES</h2>
                <div class="hero-divider"></div>
                <p class="hero-desc">Calidad OEM, rendimiento confiable y duradero.</p>
                <div class="denso-corporate-logo">
                    <img class="denso-logo-img" src="<?= $this->Html->url('/img/Logo_DENSO.jpg') ?>" alt="DENSO Logo"
                        style="height: 40px; object-fit: contain; margin-top: 10px;">
                </div>
            </div>

            <div class="hero-visual">
                <div class="glow-circle"></div>
                <img class="injector-image" src="<?= $this->Html->url('/img/inyector.png') ?>" alt="Inyector DENSO">
                <div class="hero-badge-overlay">
                    <div class="badge-distribuidor">DISTRIBUIDOR OFICIAL</div>
                    <img src="<?= $this->Html->url('/img/favicon.png') ?>" alt="DENSO logo small" height="20">
                </div>
            </div>

            <div class="hero-benefits">
                <h3 class="benefits-title">Beneficios de los inyectores DENSO IAM</h3>
                <div class="benefit-list">
                    <div class="benefit-item">
                        <div class="benefit-icon-wrapper">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                        </div>
                        <div class="benefit-content">
                            <span class="benefit-name">Calidad OEM</span>
                            <span class="benefit-desc">Diseñados con los mismos estándares de calidad que los equipos
                                originales.</span>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon-wrapper">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                        </div>
                        <div class="benefit-content">
                            <span class="benefit-name">Rendimiento Confiable</span>
                            <span class="benefit-desc">Optimiza el desempeño del motor y garantiza una operación
                                eficiente.</span>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon-wrapper">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                        </div>
                        <div class="benefit-content">
                            <span class="benefit-name">Durabilidad Superior</span>
                            <span class="benefit-desc">Componentes de alta calidad para una mayor vida útil y menor
                                mantenimiento.</span>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon-wrapper">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                        </div>
                        <div class="benefit-content">
                            <span class="benefit-name">Compatibilidad Garantizada</span>
                            <span class="benefit-desc">Amplia cobertura para las principales aplicaciones del
                                mercado.</span>
                        </div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon-wrapper">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                        </div>
                        <div class="benefit-content">
                            <span class="benefit-name">Eficiencia y Menor Emisión</span>
                            <span class="benefit-desc">Contribuye a una mejor combustión, reduciendo emisiones
                                contaminantes.</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Actions Cards Grid -->
        <section class="cards-grid">

            <!-- Card 1: Programa Rewards -->
            <a href="#" class="action-card card-red">
                <div class="card-content-left">
                    <div class="card-icon-container">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <polyline points="20 12 20 22 4 22 4 12"></polyline>
                            <rect x="2" y="7" width="20" height="5"></rect>
                            <line x1="12" y1="22" x2="12" y2="7"></line>
                            <path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path>
                            <path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path>
                        </svg>
                    </div>
                    <div class="card-text-info">
                        <span class="card-title">Programa Rewards</span>
                        <ul class="card-bullets">
                            <li>Acumula puntos valiosos</li>
                            <li>Consulta tu saldo actual</li>
                            <li>Catálogo de premios</li>
                        </ul>
                    </div>
                </div>
                <span class="card-arrow">&gt;</span>
            </a>

            <!-- Card 2: Guía de Instalación (Video) -->
            <div id="btn-video-toggle" class="action-card card-blue">
                <div class="card-content-left">
                    <div class="card-icon-container">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <polygon points="23 7 16 12 23 17 23 7"></polygon>
                            <rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect>
                        </svg>
                    </div>
                    <div class="card-text-info">
                        <span class="card-title">Guía de Instalación</span>
                        <ul class="card-bullets">
                            <li>Video paso a paso</li>
                            <li>Mejores prácticas DENSO</li>
                            <li>Consejos de instalación</li>
                        </ul>
                    </div>
                </div>
                <span class="card-arrow">&gt;</span>
            </div>

            <!-- Card 3: Ficha Técnica -->
            <div id="btn-ficha-toggle" class="action-card card-blue" style="cursor: pointer;">
                <div class="card-content-left">
                    <div class="card-icon-container">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10 9 9 9 8 9"></polyline>
                        </svg>
                    </div>
                    <div class="card-text-info">
                        <span class="card-title">Ficha Técnica</span>
                        <ul class="card-bullets">
                            <li>Descargar PDF</li>
                            <li>Características técnicas</li>
                            <li>Torque y calibraciones</li>
                        </ul>
                    </div>
                </div>
                <span class="card-arrow">&gt;</span>
            </div>



            <!-- Card 5: Garantía Proceso -->
            <div id="btn-garantia-toggle" class="action-card card-red">
                <div class="card-content-left">
                    <div class="card-icon-container">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                    </div>
                    <div class="card-text-info">
                        <span class="card-title">Garantía Proceso</span>
                        <ul class="card-bullets">
                            <li>Cobertura de garantía</li>
                            <li>Requisitos necesarios</li>
                            <li>Proceso de reclamación</li>
                        </ul>
                    </div>
                </div>
                <span class="card-arrow">&gt;</span>
            </div>

        </section>

        <!-- Hidden Section: Video Player -->
        <div id="video-collapsible-wrapper" class="collapsible-section">
            <div class="video-container-box">
                <h3 class="video-title">Guía de instalación de inyectores auténticos DENSO</h3>
                <iframe class="video-player" src="https://www.youtube.com/embed/TCMJbxbrTko?start=6"
                    title="Guía de instalación de inyectores auténticos DENSO" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen style="aspect-ratio: 16/9; border: none;"></iframe>
            </div>
        </div>

        <!-- Hidden Section: Ficha Técnica (PDF iframe) -->
        <div id="ficha-collapsible-wrapper" class="collapsible-section">
            <div class="video-container-box" style="height: 80vh; max-height: 800px; padding-bottom: 2rem;">
                <h3 class="video-title">Ficha Técnica</h3>
                <iframe src="<?= $this->Html->url('/files/DENSO_Injector.pdf') ?>" width="100%" height="100%"
                    style="border: none; border-radius: 8px;"></iframe>
            </div>
        </div>

        <!-- Hidden Section: Warranty Form -->
        <div id="garantia-collapsible-wrapper" class="collapsible-section">
            <section class="garantia-form-section">
                <h2 class="garantia-form-section-title">Formato de Garantía</h2>
                <p class="garantia-form-section-subtitle">Si adquiriste tu inyector con alguno de nuestros
                    distribuidores autorizados y presenta alguna falla, nuestro equipo técnico te ayudará a hacer válida
                    tu garantía. Completa el siguiente formulario y nos pondremos en contacto contigo en un lapso máximo
                    de 24 horas hábiles.</p>

                <?php if ($this->Session->check('Message.flash')): ?>
                    <div class="garantia-alert garantia-alert-success">
                        <?= $this->Session->flash(); ?>
                    </div>
                <?php endif; ?>

                <?= $this->Form->create('Garantia', array('url' => array('controller' => 'pages', 'action' => 'producto_autentico_inyector', $region), 'class' => 'garantia-form')) ?>

                <div class="form-group-title">1. Datos del Cliente</div>
                <div class="form-grid">
                    <div class="form-field">
                        <label>Nombre / Razón social *</label>
                        <input type="text" name="cliente_nombre" required placeholder="Ej. Juan Pérez">
                    </div>
                    <div class="form-field">
                        <label>Teléfono *</label>
                        <input type="tel" name="cliente_telefono" required placeholder="Ej. 5512345678">
                    </div>
                    <div class="form-field">
                        <label>Correo electrónico *</label>
                        <input type="email" name="cliente_email" required placeholder="Ej. cliente@correo.com">
                    </div>
                    <div class="form-field">
                        <label>Dirección</label>
                        <input type="text" name="cliente_direccion" placeholder="Calle, Número, Colonia, Ciudad">
                    </div>
                </div>

                <div class="form-group-title">2. Información de Compra</div>
                <div class="form-grid">
                    <div class="form-field">
                        <label>Número de factura</label>
                        <input type="text" name="compra_factura" placeholder="Ej. FAC-1234">
                    </div>
                    <div class="form-field">
                        <label>Fecha de compra</label>
                        <input type="date" name="compra_fecha">
                    </div>
                    <div class="form-field">
                        <label>Distribuidor</label>
                        <input type="text" name="compra_distribuidor" placeholder="Nombre del distribuidor">
                    </div>
                    <div class="form-field">
                        <label>Cantidad de piezas</label>
                        <input type="number" name="compra_cantidad" min="1" placeholder="Ej. 1">
                    </div>
                </div>

                <div class="form-group-title">3. Información del Producto</div>
                <div class="form-grid">
                    <div class="form-field">
                        <label>Número de parte</label>
                        <input type="text" name="producto_num_parte" placeholder="Número de parte DENSO">
                    </div>
                    <div class="form-field">
                        <label>Número de serie</label>
                        <input type="text" name="producto_num_serie" placeholder="Número de serie">
                    </div>
                    <div class="form-field">
                        <label>Lote</label>
                        <input type="text" name="producto_lote" placeholder="Lote de producción">
                    </div>
                    <div class="form-field">
                        <label>Tipo de inyector</label>
                        <input type="text" name="producto_tipo" placeholder="Ej. Common Rail">
                    </div>
                    <div class="form-field-full form-field">
                        <label>Aplicación</label>
                        <input type="text" name="producto_aplicacion" placeholder="Ej. Motor / Vehículo">
                    </div>
                </div>

                <div class="form-group-title">4. Datos del Vehículo</div>
                <div class="form-grid">
                    <div class="form-field">
                        <label>Marca</label>
                        <input type="text" name="vehiculo_marca" placeholder="Ej. Toyota">
                    </div>
                    <div class="form-field">
                        <label>Modelo</label>
                        <input type="text" name="vehiculo_modelo" placeholder="Ej. Hilux">
                    </div>
                    <div class="form-field">
                        <label>Año</label>
                        <input type="number" name="vehiculo_anio" placeholder="Ej. 2020">
                    </div>
                    <div class="form-field">
                        <label>VIN</label>
                        <input type="text" name="vehiculo_vin" placeholder="Número de Identificación Vehicular">
                    </div>
                    <div class="form-field">
                        <label>Kilometraje instalación</label>
                        <input type="number" name="vehiculo_km_instalacion" placeholder="Ej. 80000">
                    </div>
                    <div class="form-field">
                        <label>Kilometraje actual</label>
                        <input type="number" name="vehiculo_km_actual" placeholder="Ej. 85000">
                    </div>
                </div>

                <div class="form-group-title">5. Información de Instalación</div>
                <div class="form-grid">
                    <div class="form-field">
                        <label>Fecha de instalación</label>
                        <input type="date" name="instalacion_fecha">
                    </div>
                    <div class="form-field">
                        <label>Taller / técnico</label>
                        <input type="text" name="instalacion_taller" placeholder="Nombre del taller o mecánico">
                    </div>
                    <div class="form-field">
                        <label>¿Reemplazo completo o parcial?</label>
                        <select name="instalacion_reemplazo">
                            <option value="">Seleccione...</option>
                            <option value="Completo">Completo</option>
                            <option value="Parcial">Parcial</option>
                        </select>
                    </div>
                    <div class="form-field">
                        <label>¿Se realizó codificación?</label>
                        <select name="instalacion_codificacion">
                            <option value="">Seleccione...</option>
                            <option value="Sí">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="form-field">
                        <label>Componentes reemplazados</label>
                        <input type="text" name="instalacion_componentes"
                            placeholder="Ej. Filtro de combustible, cañerías">
                    </div>
                    <div class="form-field">
                        <label>Tipo de combustible</label>
                        <input type="text" name="instalacion_combustible" placeholder="Ej. Diésel Premium">
                    </div>
                </div>

                <div class="form-group-title">6. Descripción de la Falla</div>
                <div class="form-grid">
                    <div class="form-field">
                        <label>Fecha de detección</label>
                        <input type="date" name="falla_fecha">
                    </div>
                    <div class="form-field-full form-field">
                        <label>Descripción detallada</label>
                        <textarea name="falla_descripcion" rows="4"
                            placeholder="Detalla el problema o falla presentada..."></textarea>
                    </div>
                </div>

                <div class="form-group-title">7. Condiciones de Uso</div>
                <div class="form-grid">
                    <div class="form-field">
                        <label>Tipo de uso</label>
                        <input type="text" name="uso_tipo" placeholder="Ej. Comercial, Particular, Carga">
                    </div>
                    <div class="form-field">
                        <label>Uso severo</label>
                        <select name="uso_severo">
                            <option value="">Seleccione...</option>
                            <option value="Sí">Sí</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="form-field">
                        <label>Historial de mantenimiento</label>
                        <input type="text" name="uso_mantenimiento" placeholder="Ej. Al corriente, Irregular">
                    </div>
                    <div class="form-field">
                        <label>Cambios de filtro</label>
                        <input type="text" name="uso_filtro" placeholder="Frecuencia o fecha del último cambio">
                    </div>
                </div>

                <div class="form-group-title">8. Declaración</div>
                <div class="form-grid">
                    <div class="form-field-full form-field form-field-checkbox">
                        <input type="checkbox" name="declaracion_correcta" id="declara_ok" required value="1">
                        <label for="declara_ok">Declaro que la información proporcionada es correcta *</label>
                    </div>
                    <div class="form-field">
                        <label>Nombre y firma del solicitante *</label>
                        <input type="text" name="declaracion_nombre_firma" required placeholder="Nombre completo">
                    </div>
                    <div class="form-field">
                        <label>Fecha de declaración *</label>
                        <input type="date" name="declaracion_fecha" required value="<?= date('Y-m-d') ?>" readonly
                            style="background-color: #e9ecef; cursor: not-allowed;">
                    </div>
                </div>

                <div class="submit-btn-container">
                    <button type="submit" class="submit-btn">Enviar Formato de Garantía</button>
                </div>

                <?= $this->Form->end() ?>
            </section>
        </div>

    </main>

    <!-- Footer -->
    <footer class="portal-footer">
        <div class="footer-grid">
            <div class="footer-col">
                <span class="footer-col-title">Soporte Técnico</span>
                <div class="footer-link-group">
                    <span class="footer-info-text">Teléfono: 01 800 888 9366</span>
                    <a href="mailto:soporte.tecnico@denso.com" class="footer-link">soporte.tecnico@denso.com</a>
                </div>
            </div>
            <div class="footer-col">
                <span class="footer-col-title">Términos y Condiciones</span>
                <div class="footer-link-group">
                    <a href="#" class="footer-link">Términos de uso</a>
                    <a href="#" class="footer-link">Aviso de privacidad</a>
                </div>
            </div>
            <div class="footer-right">
                <div class="denso-corporate-logo">
                    <img class="denso-logo-img" src="<?= $this->Html->url('/img/Logo_DENSO.jpg') ?>" alt="DENSO Logo"
                        style="height: 40px; object-fit: contain; margin-bottom: 10px;">
                </div>
                <span class="footer-copyright">&copy; 2024 DENSO CORPORATION. Todos los derechos reservados. | Desarrollado por Aigel</span>
            </div>
        </div>
    </footer>

    <!-- Interactive script for sliding toggles -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const btnVideo = document.getElementById("btn-video-toggle");
            const btnGarantia = document.getElementById("btn-garantia-toggle");
            const btnFicha = document.getElementById("btn-ficha-toggle");

            const wrapperVideo = document.getElementById("video-collapsible-wrapper");
            const wrapperGarantia = document.getElementById("garantia-collapsible-wrapper");
            const wrapperFicha = document.getElementById("ficha-collapsible-wrapper");

            function toggleSection(wrapper) {
                if (wrapper.classList.contains("active")) {
                    wrapper.classList.remove("active");
                } else {
                    // Close other sections first
                    if (wrapperVideo) wrapperVideo.classList.remove("active");
                    if (wrapperGarantia) wrapperGarantia.classList.remove("active");
                    if (wrapperFicha) wrapperFicha.classList.remove("active");

                    wrapper.classList.add("active");

                    // Smooth scroll to the toggled section
                    setTimeout(() => {
                        wrapper.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }, 300);
                }
            }

            if (btnVideo) {
                btnVideo.addEventListener("click", function (e) {
                    e.preventDefault();
                    toggleSection(wrapperVideo);
                });
            }

            if (btnGarantia) {
                btnGarantia.addEventListener("click", function (e) {
                    e.preventDefault();
                    toggleSection(wrapperGarantia);
                });
            }

            if (btnFicha) {
                btnFicha.addEventListener("click", function (e) {
                    e.preventDefault();
                    toggleSection(wrapperFicha);
                });
            }
        });
    </script>
</body>

</html>