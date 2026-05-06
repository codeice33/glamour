<?php
include __DIR__ . "/includ/header.php";
?>

<style>
.register-shell {
    min-height: 100vh;
    padding: 110px 0 80px;
    background:
        radial-gradient(circle at top left, rgba(0, 233, 250, 0.16), transparent 30%),
        radial-gradient(circle at bottom right, rgba(3, 255, 175, 0.18), transparent 28%),
        linear-gradient(180deg, #060606 0%, #0a0d0b 100%);
}

.register-card {
    background: linear-gradient(180deg, rgba(7, 7, 5, 0.95), rgba(13, 19, 16, 0.96));
    border: 1px solid rgba(3, 255, 175, 0.18);
    border-radius: 28px;
    padding: 42px 36px;
    box-shadow: 0 24px 90px rgba(0, 0, 0, 0.35);
}

.register-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(3, 255, 175, 0.1);
    border: 1px solid rgba(3, 255, 175, 0.2);
    color: #9cffd8;
    border-radius: 999px;
    padding: 8px 14px;
    font-size: 0.82rem;
    margin-bottom: 18px;
}

.register-logo {
    width: 86px;
    margin-bottom: 16px;
}

.register-card h2 {
    font-size: 2rem;
    font-weight: 800;
    margin-bottom: 10px;
    color: #fff;
}

.register-card h2 span {
    color: #00e9fa;
}

.register-copy {
    color: rgba(255, 255, 255, 0.72);
    line-height: 1.7;
    margin-bottom: 28px;
}

.register-card .form-label {
    color: #f7f7f7;
    font-weight: 600;
    margin-bottom: 8px;
}

.register-card .form-control,
.register-card .form-select {
    border-radius: 14px;
    border: 1px solid rgba(255, 255, 255, 0.08);
    background: rgba(255, 255, 255, 0.03);
    color: #fff;
    padding: 13px 15px;
}

.register-card .form-control::placeholder {
    color: rgba(255, 255, 255, 0.42);
}

.register-card .form-control:focus,
.register-card .form-select:focus {
    background: rgba(255, 255, 255, 0.05);
    color: #fff;
    border-color: rgba(3, 255, 175, 0.55);
    box-shadow: 0 0 0 0.2rem rgba(3, 255, 175, 0.14);
}

.register-note {
    margin-top: 22px;
    padding: 16px 18px;
    border-radius: 18px;
    background: rgba(0, 233, 250, 0.08);
    border: 1px solid rgba(0, 233, 250, 0.12);
    color: rgba(255, 255, 255, 0.78);
    font-size: 0.92rem;
}

.register-note strong {
    color: #00e9fa;
}

.register-actions .btn {
    width: 100%;
}

.register-meta {
    margin-top: 16px;
    color: rgba(255, 255, 255, 0.55);
    font-size: 0.88rem;
    text-align: center;
}

@media (max-width: 768px) {
    .register-shell {
        padding: 95px 0 55px;
    }

    .register-card {
        padding: 30px 22px;
        border-radius: 22px;
    }

    .register-card h2 {
        font-size: 1.7rem;
    }
}
</style>

<main class="register-shell">
    <section class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="register-card">
                    <div class="register-badge">
                        <i class="fa-solid fa-sparkles"></i>
                        Bonus unlocked after signup
                    </div>
                    <img src="glamour/golove.png" alt="Glamour Logo" class="register-logo">
                    <h2>Create Your <span>Glamour Account</span></h2>
                    <p class="register-copy">
                        Finish your registration and we will take you straight into your account dashboard.
                        Your EUR €7 welcome bonus will be added automatically <strong></strong>.
                    </p>

                    <form id="registerForm">
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

                        <div class="mb-3">
                            <label for="plan" class="form-label">Select Plan</label>
                            <select id="plan" class="form-select" required>
                                <option value="" disabled selected>Choose your plan</option>
                                <option value="Starter Activation" data-amount="14000">Glam Fee: NGN 14,000 (EUR 7)</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter a strong password" required>
                        </div>

                        <div class="register-actions mt-4">
                            <button type="submit" class="btn btn-gradient">Create Account</button>
                        </div>
                    </form>

                    <div class="register-note">
                        <strong>What happens next?</strong> After signup, the user lands on their dashboard with a <strong>EUR 7 welcome bonus</strong>.  <strong></strong>.
                    </div>

                    <p class="register-meta">Already have an account?  <a href="">login</a></p>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
const registerForm = document.getElementById("registerForm");

registerForm.addEventListener("submit", (event) => {
    event.preventDefault();

    const plan = document.getElementById("plan");
    const selectedOption = plan.options[plan.selectedIndex];

    const registrationData = {
        fullName: document.getElementById("fullName").value.trim(),
        username: document.getElementById("username").value.trim(),
        email: document.getElementById("email").value.trim(),
        planName: selectedOption.value,
        activationAmount: selectedOption.dataset.amount || "14000",
        welcomeBonus: 7,
        activated: false,
        joinedAt: new Date().toISOString()
    };

    localStorage.setItem("glamourUser", JSON.stringify(registrationData));
    window.location.href = "dashboard.php";
});
</script>

<?php include __DIR__ . "/includ/footer.php"; ?>
