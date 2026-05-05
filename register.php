<?php
include __DIR__ . "/includ/header.php";
?>

 <style>
/* ===== Registration Section ===== */
.register-section {
    min-height: 100vh;
    display: flex;
    align-items: center;
    padding: 60px 0;
    background: #080805;
}

/* Card */
.register-card {
    background: #000;
    padding: 40px 35px;
    border-radius: 15px;
}


/* Logo */
.register-card .logo {
    width: 85px;
    margin-bottom: 15px;
}

/* Heading */
.register-card h2 {
    font-size: 1.9rem;
    font-weight: 800;
    margin-bottom: 10px;
    color: #00e9fa;
}

.register-card h2 span {
    color: #00e9fa;
}

/* Sub text */
.register-card p {
    font-size: 0.95rem;
    color: #dcdcdc;
    margin-bottom: 25px;
}

/* Labels (fixed color) */
.register-card .form-label {
    font-weight: 600;
    color: #fff; /* Light cool tone for visibility */
}

/* Inputs */
.register-card .form-control {
    padding: 12px 14px;
    border-radius: 10px;
    background: #000000;
    color: #fff;
    transition: 0.25s ease;
}

.register-card .form-control::placeholder {
    color: #a5a5a5;
}

.register-card .form-control:focus {
    border-color: #03ffaf;
    box-shadow: 0 0 8px rgba(142, 255, 20, 0.35);
    background: #000000;
    color: #fff;
}


/* Login link */
.login-link {
    margin-top: 20px;
    font-size: 0.95rem;
    color: #dcdcdc;
}

.login-link a {
    color: #03ffaf;
    font-weight: 600;
    text-decoration: none;
}

.login-link a:hover {
    text-decoration: underline;
}

/* ===== Responsive ===== */
@media (max-width: 768px) {
    .register-card {
        padding: 30px 25px;
    }

    .register-card h2 {
        font-size: 1.6rem;
    }
}

.copyBtn {
    background: #03ffaf;
    color: #000;
    border: none;
    padding: 6px 14px;
    font-size: 13px;
    font-weight: 600;
    border-radius: 8px;
    cursor: pointer;
    transition: 0.25s ease;
    white-space: nowrap;
}
 </style>
  <!-- Main Content -->
<main>
   <!-- Registration Section -->
<section class="register-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8">
                <div class="register-card text-center">
                    <img src="glamour/golove.png" alt="Glamour Logo" class="logo">
                    <h2>Create Your <span>Account</span></h2>
                    <p>Join Glamour and start your journey.</p>

                    <!-- Registration Form -->
                    <form class="text-start" id="registerForm">
                        <div class="mb-3">
                            <label for="fullName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="fullName" placeholder="Enter your full name" required>
                        </div>

                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Choose a username" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
                        </div>

                        <!-- Plan Selection -->
                        <div class="mb-3">
                            <label for="plan" class="form-label">Select Plan</label>
                            <select id="plan" class="form-control" required>
                                <option value="" disabled selected>Choose your plan</option>
                                <option value="plan_a" data-amount="14000">Glam Fee: ₦14,000 (€7)</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter a strong password" required>
                        </div>

                        <button type="submit" class="btn btn-gradient w-100">Create Account</button>
                    </form>

                    <div class="login-link">
                        Already have an account? <a href="#">Log In</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Payment Overlay Popup -->
<div id="paymentOverlay" style="display:none; position:fixed; inset:0; backdrop-filter:blur(10px); background:rgba(0,0,0,0.55); z-index:9999; justify-content:center; align-items:center;">
    <div id="paymentPopup" style="background:#080805; border-radius:16px; padding:25px; color:white; width:90%; max-width:480px; position:relative; transform:scale(0.93); opacity:0; transition:0.3s ease;">
        <button id="closePayment" style="position:absolute; top:10px; right:14px; background:#03ffaf; color:#000; border:none; padding:5px 10px; border-radius:8px;">Close</button>

        <h2 style="font-size:20px; font-weight:700;">Complete Registration</h2>
        <p style="margin:10px 0 20px; color:#EBEBEB;">
            Hi <span id="payerName" style="font-weight:800;">User</span>, pay to the account below.
        </p>

        <div style="display:flex; flex-direction:column; gap:12px;">
            <div style="background:#1c1205; border-radius:10px; padding:14px; display:flex; justify-content:space-between; align-items:center;">
                <div>
                    <p style="margin:0; font-size:12px;">Account Number</p>
                    <p id="accountNumber" style="margin-top:3px; font-weight:600;">2007159075</p>
                </div>
                <button class="copyBtn" data-copy="accountNumber">Copy</button>
            </div>

            <div style="background:#1c1205; border-radius:10px; padding:14px; display:flex; justify-content:space-between; align-items:center;">
                <div>
                    <p style="margin:0; font-size:12px;">Account Name</p>
                    <p id="accountName" style="margin-top:3px; font-weight:600;">Aliu Komolafe Adeniyi</p>
                </div>
                <button class="copyBtn" data-copy="accountName">Copy</button>
            </div>

            <div style="background:#1c1205; border-radius:10px; padding:14px; display:flex; justify-content:space-between; align-items:center;">
                <div>
                    <p style="margin:0; font-size:12px;">Bank</p>
                    <p id="bankName" style="margin-top:3px; font-weight:600;">Kuda</p>
                </div>
                <button class="copyBtn" data-copy="bankName">Copy</button>
            </div>

            <div style="background:#1c1205; border-radius:10px; padding:14px; display:flex; justify-content:space-between; align-items:center;">
                <div>
                    <p style="margin:0; font-size:12px;">Amount to Pay</p>
                    <p id="paymentAmount" style="margin-top:3px; font-weight:600;">₦0</p>
                </div>
                <button class="copyBtn" data-copy="paymentAmount">Copy</button>
            </div>
        </div>

        <div style="margin-top:18px; background:#1c1205; border-radius:10px; padding:12px 15px;">
            <p style="margin:0; font-size:12px; color:#fff;">Payment Instruction</p>
            <p style="margin:5px 0 0; color:#7bff08; font-weight:bold; font-size:13px;">Complete Your Payment</p>
            <p id="paymentTimer" style="margin-top:6px; color:#FFA500; font-size:13px;">10:00</p>
        </div>

        <a href="https://wa.me/2348142470259?text=Hello,+I+just+made+my+payment" class="btn btn-gradient w-100" style="margin-top:30px;">Submit Payment Proof</a>
    </div>
</div>

<script>
const form = document.getElementById("registerForm");
const popupOverlay = document.getElementById("paymentOverlay");
const popupBox = document.getElementById("paymentPopup");
const closePopup = document.getElementById("closePayment");

const fullNameInput = document.getElementById("fullName");
const planSelect = document.getElementById("plan");

const payerName = document.getElementById("payerName");
const paymentAmount = document.getElementById("paymentAmount");

let activeTimer = null;

function resetTimerUI() {
    const timer = document.getElementById("paymentTimer");
    timer.style.color = "#FFA500";
    timer.style.fontWeight = "normal";
    timer.textContent = "10:00";
}

function startPaymentTimer() {
    const display = document.getElementById("paymentTimer");
    let timeLeft = 10 * 60;

    const countdown = setInterval(() => {
        let min = Math.floor(timeLeft / 60);
        let sec = (timeLeft % 60);
        display.textContent = `${min.toString().padStart(2,'0')}:${sec.toString().padStart(2,'0')}`;
        timeLeft--;
        if (timeLeft < 0) {
            clearInterval(countdown);
            display.textContent = "Payment window expired";
            display.style.color = "#FF3B3B";
            display.style.fontWeight = "700";
        }
    }, 1000);

    return countdown;
}

// Show popup on form submit
form.addEventListener("submit", e => {
    e.preventDefault();

    // Populate payer name
    payerName.textContent = fullNameInput.value || "User";

    // Populate payment amount based on selected plan
    const selectedOption = planSelect.options[planSelect.selectedIndex];
    const amount = selectedOption.dataset.amount || "0";
    paymentAmount.textContent = `₦${amount}`;

    // Show popup
    popupOverlay.style.display = "flex";
    setTimeout(() => {
        popupBox.style.transform = "scale(1)";
        popupBox.style.opacity = "1";
    }, 30);

    if (activeTimer) clearInterval(activeTimer);
    resetTimerUI();
    activeTimer = startPaymentTimer();
});

// Close popup
closePopup.addEventListener("click", () => {
    popupBox.style.transform = "scale(0.93)";
    popupBox.style.opacity = "0";
    setTimeout(() => popupOverlay.style.display = "none", 200);
});

// COPY BUTTON HANDLING
document.addEventListener("click", e => {
    if (e.target.classList.contains("copyBtn")) {
        const targetId = e.target.getAttribute("data-copy");
        const text = document.getElementById(targetId).innerText.trim();
        navigator.clipboard.writeText(text);
        const btn = e.target;
        const oldText = btn.innerText;
        btn.innerText = "Copied!";
        btn.style.background = "#3EC70B";
        btn.style.color = "#fff";
        setTimeout(() => {
            btn.innerText = oldText;
            btn.style.background = "#03ffaf";
            btn.style.color = "#000";
        }, 1000);
    }
});
</script>

<?php include __DIR__ . "/includ/footer.php"; ?>
