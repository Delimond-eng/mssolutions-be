document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contactForm");

    // Récupérer le token CSRF dans la meta
    const csrfToken = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");

    form.addEventListener("submit", async function (e) {
        e.preventDefault();

        const submitButton = form.querySelector('button[type="submit"]');
        const originalText = submitButton.textContent;

        Toast.info("Envoi du message...", "Demande en cours.");

        const savedLanguage = localStorage.getItem("selectedLanguage") || "fr";

        if (savedLanguage === "fr") {
            submitButton.textContent = "Envoi...";
        } else if (savedLanguage === "en") {
            submitButton.textContent = "Sending...";
        } else if (savedLanguage === "nl") {
            submitButton.textContent = "Verzenden...";
        }
        submitButton.disabled = true;

        try {
            const formData = new FormData(e.target);

            const response = await fetch("/contact.send", {
                method: "POST",
                body: formData,
                headers: {
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-TOKEN": csrfToken,
                    Accept: "application/json",
                },
            });

            const result = await response.json();

            if (result.status) {
                Toast.success(result.message, "Succès");
                form.reset();
            } else {
                Toast.warning(
                    result.message || "Une erreur est survenue.",
                    "Erreur"
                );
            }
        } catch (error) {
            console.error("Erreur lors de l'envoi :", error);
            Toast.error("Erreur réseau. Vérifiez votre connexion.", "Échec");
        } finally {
            submitButton.textContent = originalText;
            submitButton.disabled = false;
        }
    });
});
