document.addEventListener('DOMContentLoaded', function () {
    const toggleSwitch = document.getElementById('dark-mode-toggle');

    const currentTheme = localStorage.getItem('theme');
    if (currentTheme === 'dark') {
        document.documentElement.classList.add('dark');
        toggleSwitch.checked = true;
    } else {
        document.documentElement.classList.remove('dark');
    }

    toggleSwitch.addEventListener('change', function () {
        if (toggleSwitch.checked) {
            document.documentElement.classList.add('dark');
            localStorage.setItem('theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('theme', 'light');
        }
    });
});
