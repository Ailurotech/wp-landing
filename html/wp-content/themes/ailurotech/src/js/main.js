document.addEventListener('DOMContentLoaded', function () {
    const toggleSwitch = document.getElementById('toggle-switch');
    const subscriptionOptions = document.querySelectorAll('.option');
    const toggleLabel = document.getElementById('toggle-label');
    const monthlyLabel = document.getElementById('monthly-label');
    const yearlyLabel = document.getElementById('yearly-label');

    toggleSwitch.addEventListener('change', function () {
        subscriptionOptions.forEach(option => {
            const priceSpan = option.querySelector('.price');
            const periodSpan = option.querySelector('.period');
            if (toggleSwitch.checked) {
                priceSpan.textContent = option.getAttribute('data-yearly');
                periodSpan.textContent = ' / Year';
                monthlyLabel.style.color = '#333';
                yearlyLabel.style.color = '#4caf50';
            } else {
                priceSpan.textContent = option.getAttribute('data-monthly');
                periodSpan.textContent = ' / Month';
                yearlyLabel.style.color = '#333';
                monthlyLabel.style.color = '#4caf50';
            }
        });
    });

    // Set initial state
    subscriptionOptions.forEach(option => {
        const priceSpan = option.querySelector('.price');
        const periodSpan = option.querySelector('.period');
        priceSpan.textContent = option.getAttribute('data-monthly');
        periodSpan.textContent = ' / Month';
        monthlyLabel.style.color = '#4caf50';
    });
});
