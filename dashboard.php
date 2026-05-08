<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glamour Dashboard</title>
    <link rel="icon" type="image/png" href="glamour/golove.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-main: #070705;
            --panel-dark: #221606;
            --panel-deep: #120d05;
            --gold-1: #f2be25;
            --gold-2: #ffd447;
            --green-1: #03ffaf;
            --cyan-1: #00e9fa;
            --text-soft: rgba(255,255,255,0.68);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background:
                radial-gradient(circle at top right, rgba(242, 190, 37, 0.10), transparent 24%),
                radial-gradient(circle at bottom left, rgba(3, 255, 175, 0.08), transparent 30%),
                var(--bg-main);
            color: #fff;
        }

        .dashboard-app {
            min-height: 100vh;
            padding: 92px 18px 42px;
        }

        .dashboard-wrap {
            width: min(100%, 1380px);
            margin: 0 auto;
        }

        .dashboard-head {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 14px;
            margin-bottom: 18px;
            transform: translateY(-4px);
        }

        .dashboard-logo {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .dashboard-logo-mark {
            width: 54px;
            height: 54px;
            border-radius: 18px;
            display: grid;
            place-items: center;
            background: linear-gradient(135deg, var(--green-1), var(--gold-2));
            box-shadow: 0 12px 30px rgba(3, 255, 175, 0.18);
            transform: translateY(-2px);
        }

        .dashboard-logo-mark img {
            width: 30px;
        }

        .dashboard-logo-text {
            font-size: 2rem;
            font-weight: 900;
            line-height: 1;
            letter-spacing: -0.04em;
            color: #fff;
        }

        .dashboard-logo-text span {
            color: var(--green-1);
        }

        .dashboard-tools {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .dashboard-pill,
        .dashboard-menu {
            border-radius: 22px;
            background: rgba(255,255,255,0.04);
            border: 1px solid rgba(255,255,255,0.08);
            color: #fff;
        }

        .dashboard-pill {
            padding: 14px 18px;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 10px;
            min-height: 60px;
        }

        .dashboard-menu {
            width: 60px;
            height: 60px;
            display: grid;
            place-items: center;
            font-size: 1.45rem;
            color: var(--gold-2);
        }
        .dashboard-menu-wrap {
            position: relative;
        }
        .dashboard-menu-panel {
            position: absolute;
            top: calc(100% + 10px);
            right: 0;
            min-width: 220px;
            padding: 10px;
            border-radius: 18px;
            background: linear-gradient(180deg, rgba(17, 13, 6, 0.98), rgba(8, 7, 3, 0.98));
            border: 1px solid rgba(242, 190, 37, 0.18);
            box-shadow: 0 18px 40px rgba(0, 0, 0, 0.3);
            opacity: 0;
            visibility: hidden;
            transform: translateY(-8px);
            transition: opacity 0.2s ease, transform 0.2s ease, visibility 0.2s ease;
            z-index: 20;
        }
        .dashboard-menu-wrap.open .dashboard-menu-panel {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        .dashboard-menu-action {
            width: 100%;
            border: none;
            border-radius: 14px;
            min-height: 50px;
            padding: 0 16px;
            text-align: left;
            font-weight: 700;
            background: linear-gradient(135deg, rgba(3, 255, 175, 0.18), rgba(242, 190, 37, 0.22));
            color: #fff6cf;
        }

        .welcome-strip {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 14px;
            padding: 18px 20px;
            border-radius: 26px;
            background: linear-gradient(135deg, var(--gold-1) 0%, var(--gold-2) 52%, #ffe17d 100%);
            color: #171004;
            box-shadow: 0 16px 40px rgba(242, 190, 37, 0.14);
        }

        .welcome-strip h1 {
            margin: 0;
            font-size: 1.2rem;
            font-weight: 900;
        }

        .welcome-strip p,
        .welcome-tier span,
        .music-eyebrow,
        .link-eyebrow {
            margin: 0;
            font-size: 0.82rem;
            color: rgba(23, 16, 4, 0.72);
        }

        .welcome-tier {
            text-align: right;
            font-weight: 900;
            font-size: 0.98rem;
            line-height: 1.1;
        }

        .balance-card,
        .music-card,
        .link-card {
            border-radius: 30px;
            background: linear-gradient(180deg, rgba(35, 24, 8, 0.96), rgba(20, 14, 7, 0.99));
            border: 1px solid rgba(242, 190, 37, 0.08);
            box-shadow: 0 22px 60px rgba(0,0,0,0.28);
        }

        .balance-card {
            padding: 18px;
            margin-top: 26px;
            position: relative;
            overflow: hidden;
        }

        .balance-card::after {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            height: 8px;
            background: linear-gradient(90deg, #ad7309, var(--gold-2), #ad7309);
        }

        .wallet-card {
            border-radius: 28px;
            padding: 28px 24px;
            background:
                radial-gradient(circle at top right, rgba(255,255,255,0.16), transparent 26%),
                radial-gradient(circle at bottom left, rgba(255,212,71,0.18), transparent 30%),
                linear-gradient(135deg, #0c2417 0%, #13683f 50%, #8e6b11 100%);
            border: 1px solid rgba(255,255,255,0.1);
            box-shadow: inset 0 0 0 1px rgba(255,255,255,0.06), 0 18px 38px rgba(3,255,175,0.10);
            min-height: 330px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .wallet-top {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 16px;
        }

        .wallet-label {
            font-size: 0.96rem;
            color: rgba(255,255,255,0.75);
            margin-bottom: 8px;
            font-weight: 600;
        }

        .wallet-balance-naira {
            display: flex;
            align-items: flex-end;
            gap: 6px;
            font-size: clamp(2.85rem, 6vw, 4.2rem);
            font-weight: 900;
            line-height: 0.92;
            letter-spacing: -0.05em;
            color: #fff;
        }

        .wallet-currency-symbol {
            display: inline-block;
            font-size: 0.52em;
            line-height: 1;
            letter-spacing: 0;
            color: rgba(255,255,255,0.84);
            transform: translateY(-0.14em);
            text-shadow: 0 8px 18px rgba(0, 0, 0, 0.16);
        }


        .wallet-balance-note {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-top: 16px;
            padding: 10px 14px;
            border-radius: 999px;
            font-size: 0.9rem;
            font-weight: 700;
            color: rgba(255,255,255,0.9);
            background: rgba(8, 14, 10, 0.28);
            border: 1px solid rgba(255,255,255,0.1);
        }
        .wallet-welcome {
            text-align: right;
            font-size: 0.96rem;
            color: rgba(255,255,255,0.7);
            font-weight: 500;
            max-width: 190px;
        }

        .wallet-welcome strong {
            display: block;
            color: #fff;
            font-size: 1.05rem;
            font-weight: 900;
            margin-top: 4px;
            line-height: 1.2;
        }

        .wallet-bottom {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 12px;
            margin-top: 26px;
        }

        .wallet-action {
            border: none;
            border-radius: 18px;
            min-height: 56px;
            font-weight: 700;
            font-size: 1rem;
            background: linear-gradient(135deg, var(--gold-1), var(--gold-2));
            color: #2b1c08;
            box-shadow: inset 0 -2px 0 rgba(255,255,255,0.16);
        }

        .wallet-action:hover {
            filter: brightness(1.03);
        }

        .music-card,
        .link-card {
            padding: 20px;
            margin-top: 26px;
        }

        .music-card-top {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 16px;
            margin-bottom: 16px;
        }

        .music-main {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .music-icon {
            width: 66px;
            height: 66px;
            border-radius: 24px;
            display: grid;
            place-items: center;
            background: rgba(255,255,255,0.06);
            color: #fff;
            font-size: 1.7rem;
        }

        .music-title {
            margin: 0;
            font-size: 1.1rem;
            font-weight: 900;
            color: #fff;
            line-height: 1.1;
        }

        .music-subtitle,
        .music-side,
        .music-time,
        .link-box code {
            color: rgba(255,255,255,0.62);
        }

        .music-subtitle,
        .music-side {
            font-size: 0.9rem;
        }

        .music-side {
            font-weight: 700;
            text-align: right;
        }

        .music-control {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            border: 1px solid rgba(255,255,255,0.18);
            background: rgba(255,255,255,0.05);
            color: #fff;
            font-size: 1.25rem;
        }

        .music-progress {
            height: 6px;
            border-radius: 999px;
            background: rgba(255,255,255,0.08);
            overflow: hidden;
        }

        .music-progress span {
            display: block;
            width: 72%;
            height: 100%;
            background: linear-gradient(90deg, var(--gold-1), var(--green-1));
        }

        .music-time {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
            font-size: 0.78rem;
        }

        .link-box {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 14px;
            border-radius: 18px;
            background: #020202;
            border: 1px solid rgba(242, 190, 37, 0.1);
        }

        .link-box code {
            flex: 1;
            font-size: 0.98rem;
            word-break: break-all;
        }

        .copyBtn {
            width: 56px;
            height: 56px;
            border-radius: 18px;
            border: 1px solid rgba(242, 190, 37, 0.16);
            background: rgba(242, 190, 37, 0.12);
            color: #ffe39c;
            font-size: 1.2rem;
        }

        .modal-content.glow-modal {
            background: linear-gradient(180deg, #0b1210, #090d0b);
            border: 1px solid rgba(3, 255, 175, 0.18);
            border-radius: 28px;
            color: #fff;
        }

        .activate-summary {
            padding: 16px 18px;
            border-radius: 18px;
            margin-bottom: 18px;
            background: rgba(242, 190, 37, 0.08);
            border: 1px solid rgba(242, 190, 37, 0.12);
        }

        .activate-timer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 14px;
            padding: 14px 16px;
            border-radius: 18px;
            margin-bottom: 18px;
            background: rgba(3, 255, 175, 0.08);
            border: 1px solid rgba(3, 255, 175, 0.16);
        }

        .activate-timer p {
            margin: 0;
        }

        .activate-timer strong {
            font-size: 1.15rem;
            color: #d9fff0;
            letter-spacing: 0.04em;
        }

        .payment-grid {
            display: grid;
            gap: 12px;
        }

        .payment-card {
            display: flex;
            justify-content: space-between;
            gap: 14px;
            align-items: center;
            padding: 16px;
            border-radius: 18px;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.06);
        }

        .payment-card p {
            margin: 0;
        }

        .payment-card .small {
            color: rgba(255, 255, 255, 0.55);
            margin-bottom: 4px;
        }

        .payment-card strong {
            color: #fff;
            font-size: 1rem;
        }

        .dashboard-toast {
            position: fixed;
            top: 24px;
            right: 18px;
            z-index: 1085;
            min-width: 240px;
            border-radius: 16px;
            padding: 14px 16px;
            background: #0d1d17;
            border: 1px solid rgba(3, 255, 175, 0.2);
            color: #d9fff0;
            box-shadow: 0 14px 30px rgba(0, 0, 0, 0.28);
            opacity: 0;
            transform: translateY(-8px);
            transition: 0.25s ease;
            pointer-events: none;
        }

        .dashboard-toast.show {
            opacity: 1;
            transform: translateY(0);
        }

        .dashboard-pill select {
            border: none;
            background: transparent;
            color: #fff;
            font-weight: 700;
            outline: none;
            cursor: pointer;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
        }

        .dashboard-pill select option {
            color: #f3f3f3;
            background: #151109;
        }

        @media (max-width: 767px) {
            .dashboard-app {
                padding: 96px 14px 36px;
            }

            .dashboard-head,
            .welcome-strip,
            .music-card-top {
                flex-direction: column;
                align-items: flex-start;
            }

            .welcome-tier,
            .music-side {
                text-align: left;
            }

            .wallet-top {
                flex-direction: column;
            }

            .wallet-welcome {
                text-align: left;
                max-width: none;
            }

            .wallet-bottom {
                grid-template-columns: 1fr;
            }

            .link-box {
                flex-direction: column;
                align-items: stretch;
            }

            .copyBtn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <main class="dashboard-app">
        <div class="dashboard-wrap">
            <div class="dashboard-head">
                <div class="dashboard-logo">
                    <div class="dashboard-logo-mark">
                        <img src="glamour/golove.png" alt="Glamour logo">
                    </div>
                    <div class="dashboard-logo-text">Glamour</div>
                </div>
                <div class="dashboard-tools">
                    <label class="dashboard-pill" for="currencySelect"><i class="fa-solid fa-globe"></i><select id="currencySelect" aria-label="Select currency"><option value="NGN">&#8358; NGN</option><option value="EUR">&euro; EUR</option></select></label>
                    <div class="dashboard-menu-wrap" id="dashboardMenuWrap">
                        <button type="button" class="dashboard-menu" id="dashboardMenuButton" aria-label="Open activation menu"><i class="fa-solid fa-bars"></i></button>
                        <div class="dashboard-menu-panel" id="dashboardMenuPanel">
                            <button type="button" class="dashboard-menu-action" id="menuActivateAction">Activate Account</button>
                        </div>
                    </div>
                </div>
            </div>

            <section class="welcome-strip">
                <div>
                    <h1>Welcome <span id="dashboardFirstName">User</span></h1>
                    <p>Dashboard</p>
                </div>
                <div class="welcome-tier">
                    <span>Premium</span>
                    EUR &#9662;
                </div>
            </section>

            <section class="balance-card">
                <div class="wallet-card">
                    <div class="wallet-top">
                        <div>
                            <div class="wallet-label">Total Balance</div>
                            <div class="wallet-balance-naira"><span id="balancePrimarySymbol" class="wallet-currency-symbol">&#8358;</span><span id="balanceNaira">14,000.00</span></div>
                            <div class="wallet-balance-note"><i class="fa-solid fa-sparkles"></i><span id="walletNote">Welcome bonus ready</span></div>
                        </div>
                        <div class="wallet-welcome">
                            Welcome
                            <strong id="dashboardFullName">Glamour User</strong>
                        </div>
                    </div>

                    <div class="wallet-bottom">
                        <button type="button" class="wallet-action" data-bs-toggle="modal" data-bs-target="#activateModal">Activate</button>
                        <button type="button" class="wallet-action" id="withdrawBtn">Withdraw</button>
                    </div>
                </div>
            </section>

            <section class="music-card">
                <div class="music-card-top">
                    <div>
                        <div class="music-eyebrow">Spotify</div>
                        <div class="music-main">
                            <div class="music-icon"><i class="fa-solid fa-fan"></i></div>
                            <div>
                                <p class="music-title">Purple Speedy</p>
                                <div class="music-subtitle">Glamour Explained</div>
                            </div>
                        </div>
                    </div>
                    <div class="music-side">PLAY TO LISTEN</div>
                    <button type="button" class="music-control" id="musicBtn"><i class="fa-solid fa-play"></i></button>
                </div>
                <audio id="dashboardAudio" preload="metadata">
                    <source src="/assets/welcome-audio.mpeg" type="audio/mpeg">
                </audio>
                <div class="music-progress"><span></span></div>
                <div class="music-time">
                    <span id="musicCurrentTime">0:00</span>
                    <span id="musicDuration">0:00</span>
                </div>
            </section>

            <section class="link-card">
                <div class="link-eyebrow">YOUR PRIVATE NETWORK LINK</div>
                <div class="link-box">
                    <code id="referralLink">https://glamourafrica.vercel.app/?ref=glamour</code>
                    <button type="button" class="copyBtn" data-copy-target="referralLink"><i class="fa-regular fa-copy"></i></button>
                </div>
            </section>
        </div>
    </main>

    <div class="modal fade" id="activateModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content glow-modal">
                <div class="modal-header border-0 pb-0">
                    <div>
                        <p class="music-eyebrow mb-1">Account activation</p>
                        <h2 class="h4 mb-0">Complete Your Payment</h2>
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pt-3">
                    <div class="activate-summary">
                        Hi <strong id="modalName">User</strong>
                    </div>

                    <div class="activate-timer">
                        <div>
                            <p class="small mb-1">Payment countdown</p>
                            <p class="mb-0">Use these account details within 10 minutes.</p>
                        </div>
                        <strong id="activateTimer">10:00</strong>
                    </div>

                    <div class="payment-grid">
                        <div class="payment-card">
                            <div>
                                <p class="small">Account Number</p>
                                <strong id="accountNumber">2007159075</strong>
                            </div>
                            <button type="button" class="copyBtn" data-copy-target="accountNumber">Copy</button>
                        </div>

                        <div class="payment-card">
                            <div>
                                <p class="small">Account Name</p>
                                <strong id="accountName">Aliu Komolafe Adeniyi</strong>
                            </div>
                            <button type="button" class="copyBtn" data-copy-target="accountName">Copy</button>
                        </div>

                        <div class="payment-card">
                            <div>
                                <p class="small">Bank</p>
                                <strong id="bankName">Kuda</strong>
                            </div>
                            <button type="button" class="copyBtn" data-copy-target="bankName">Copy</button>
                        </div>

                        <div class="payment-card">
                            <div>
                                <p class="small">Amount to Pay</p>
                                <strong id="paymentAmount">NGN 14,000</strong>
                            </div>
                            <button type="button" class="copyBtn" data-copy-target="paymentAmount">Copy</button>
                        </div>
                    </div>

                    <a id="proofLink" href="https://t.me/Glamoursofficial010" class="wallet-action w-100 mt-4 text-center d-inline-flex justify-content-center align-items-center text-decoration-none">Submit Payment Proof</a>
                </div>
            </div>
        </div>
    </div>

    <div class="dashboard-toast" id="dashboardToast"></div>

    <script>
        const defaultUser = {
            fullName: "Glamour User",
            username: "glamouruser",
            email: "you@example.com",
            planName: "Starter Activation",
            activationAmount: "14000",
            welcomeBonus: 7,
            activated: false
        };

        const storedUser = JSON.parse(localStorage.getItem("glamourUser") || "null") || defaultUser;
        const eurBalance = Number(storedUser.welcomeBonus || 7);
        const ngnBalance = Number(storedUser.activationAmount || 14000);
        const balances = { NGN: { symbol: "&#8358;", value: ngnBalance }, EUR: { symbol: "&euro;", value: eurBalance } };
        const firstName = (storedUser.fullName || defaultUser.fullName).split(" ")[0];
        const currencySelect = document.getElementById("currencySelect");
        const balancePrimarySymbol = document.getElementById("balancePrimarySymbol");
        const balancePrimaryValue = document.getElementById("balanceNaira");
        const walletNoteEl = document.getElementById("walletNote");
        const dashboardMenuWrap = document.getElementById("dashboardMenuWrap");
        const dashboardMenuButton = document.getElementById("dashboardMenuButton");
        const menuActivateAction = document.getElementById("menuActivateAction");
        const activateTimerEl = document.getElementById("activateTimer");
        const activateModalElement = document.getElementById("activateModal");
        let activateModal;
        let activationCountdown = 600;
        let activationTimerId;

        function formatValue(value) {
            return value.toLocaleString(undefined, { minimumFractionDigits: 2, maximumFractionDigits: 2 });
        }

        function renderCurrency(code) {
            const active = balances[code];
            const accountState = storedUser.activated ? "Account active" : "Welcome bonus ready";
            balancePrimarySymbol.innerHTML = active.symbol;
            balancePrimaryValue.textContent = formatValue(active.value);
            walletNoteEl.textContent = accountState;
        }
        document.getElementById("dashboardFirstName").textContent = firstName;
        document.getElementById("dashboardFullName").textContent = storedUser.fullName || defaultUser.fullName;
        document.getElementById("modalName").textContent = storedUser.fullName || defaultUser.fullName;
        document.getElementById("paymentAmount").textContent = `NGN ${Number(storedUser.activationAmount || 14000).toLocaleString()}`;

        const referralValue = `https://glamourafrica.vercel.app/?ref=${storedUser.username || defaultUser.username}`;
        document.getElementById("referralLink").textContent = referralValue;
        const telegramMessage = encodeURIComponent(`Hello Glamour, I just made my payment.\nName: ${storedUser.fullName || defaultUser.fullName}\nAmount: NGN ${Number(storedUser.activationAmount || 14000).toLocaleString()}\nPlease confirm my activation.`);
        document.getElementById("proofLink").href = `https://t.me/Glamoursofficial010?text=${telegramMessage}`;

        renderCurrency("NGN");

        const dashboardToast = document.getElementById("dashboardToast");
        const musicBtn = document.getElementById("musicBtn");
        const dashboardAudio = document.getElementById("dashboardAudio");
        const musicProgressFill = document.querySelector(".music-progress span");
        const musicCurrentTime = document.getElementById("musicCurrentTime");
        const musicDuration = document.getElementById("musicDuration");

        function showToast(message) {
            dashboardToast.textContent = message;
            dashboardToast.classList.add("show");
            setTimeout(() => {
                dashboardToast.classList.remove("show");
            }, 1800);
        }

        function formatAudioTime(value) {
            if (!Number.isFinite(value)) {
                return "0:00";
            }

            const minutes = Math.floor(value / 60);
            const seconds = Math.floor(value % 60).toString().padStart(2, "0");
            return `${minutes}:${seconds}`;
        }

        function renderActivationTimer() {
            const minutes = Math.floor(activationCountdown / 60);
            const seconds = (activationCountdown % 60).toString().padStart(2, "0");
            activateTimerEl.textContent = `${minutes}:${seconds}`;
        }

        function startActivationTimer() {
            clearInterval(activationTimerId);
            activationCountdown = 600;
            renderActivationTimer();

            activationTimerId = setInterval(() => {
                if (activationCountdown <= 0) {
                    clearInterval(activationTimerId);
                    activateTimerEl.textContent = "00:00";
                    return;
                }

                activationCountdown -= 1;
                renderActivationTimer();
            }, 1000);
        }

        activateModalElement.addEventListener("show.bs.modal", () => {
            startActivationTimer();
        });

        document.getElementById("withdrawBtn").addEventListener("click", () => {
            showToast("Activate your account before withdrawals are enabled.");
        });

        currencySelect.addEventListener("change", (event) => {
            renderCurrency(event.target.value);
        });

        musicBtn.addEventListener("click", async () => {
            try {
                if (dashboardAudio.paused) {
                    await dashboardAudio.play();
                    musicBtn.innerHTML = '<i class="fa-solid fa-pause"></i>';
                } else {
                    dashboardAudio.pause();
                    musicBtn.innerHTML = '<i class="fa-solid fa-play"></i>';
                }
            } catch (error) {
                showToast("Audio could not play.");
            }
        });

        dashboardAudio.addEventListener("loadedmetadata", () => {
            musicDuration.textContent = formatAudioTime(dashboardAudio.duration);
        });

        dashboardAudio.addEventListener("timeupdate", () => {
            musicCurrentTime.textContent = formatAudioTime(dashboardAudio.currentTime);
            const progress = dashboardAudio.duration
                ? (dashboardAudio.currentTime / dashboardAudio.duration) * 100
                : 0;
            musicProgressFill.style.width = `${progress}%`;
        });

        dashboardAudio.addEventListener("play", () => {
            musicBtn.innerHTML = '<i class="fa-solid fa-pause"></i>';
        });

        dashboardAudio.addEventListener("pause", () => {
            musicBtn.innerHTML = '<i class="fa-solid fa-play"></i>';
        });

        dashboardAudio.addEventListener("ended", () => {
            musicBtn.innerHTML = '<i class="fa-solid fa-play"></i>';
            musicProgressFill.style.width = "0%";
            musicCurrentTime.textContent = "0:00";
        });


        dashboardMenuButton.addEventListener("click", (event) => {
            event.stopPropagation();
            dashboardMenuWrap.classList.toggle("open");
        });

        menuActivateAction.addEventListener("click", () => {
            dashboardMenuWrap.classList.remove("open");
            if (!activateModal) {
                activateModal = new bootstrap.Modal(activateModalElement);
            }
            activateModal.show();
        });

        document.addEventListener("click", async (event) => {
            if (!dashboardMenuWrap.contains(event.target)) {
                dashboardMenuWrap.classList.remove("open");
            }

            const button = event.target.closest("[data-copy-target]");
            if (!button) {
                return;
            }

            const target = document.getElementById(button.getAttribute("data-copy-target"));
            if (!target) {
                return;
            }

            const text = target.textContent.trim();
            try {
                await navigator.clipboard.writeText(text);
                showToast("Copied successfully.");
            } catch (error) {
                showToast("Copy failed. Try again.");
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>



























