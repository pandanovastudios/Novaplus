/**
 * PandaNova Studios - Official Live Countdown Timer
 * Target Launch: August 20, 2026 00:00:00
 */

(function () {
    // Target date set to August 20
    const targetDate = new Date("August 20, 2026 00:00:00").getTime();

    const daysEl = document.getElementById('days');
    const hoursEl = document.getElementById('hours');
    const minutesEl = document.getElementById('minutes');
    const secondsEl = document.getElementById('seconds');
    const countdownContainer = document.getElementById('countdown-container');
    const countdownFinished = document.getElementById('countdown-finished');

    if (!daysEl || !hoursEl || !minutesEl || !secondsEl) return;

    function updateCountdown() {
        const now = new Date().getTime();
        const difference = targetDate - now;

        if (difference <= 0) {
            // Countdown End Handling
            if (countdownContainer) countdownContainer.classList.add('hidden');
            if (countdownFinished) countdownFinished.classList.remove('hidden');
            clearInterval(timerInterval);
            return;
        }

        const days = Math.floor(difference / (1000 * 60 * 60 * 24));
        const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((difference % (1000 * 60)) / 1000);

        daysEl.innerText = days < 10 ? '0' + days : days;
        hoursEl.innerText = hours < 10 ? '0' + hours : hours;
        minutesEl.innerText = minutes < 10 ? '0' + minutes : minutes;
        secondsEl.innerText = seconds < 10 ? '0' + seconds : seconds;
    }

    const timerInterval = setInterval(updateCountdown, 1000);
    updateCountdown(); // Initial run
})();


