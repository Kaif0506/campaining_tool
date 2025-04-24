// Check for saved theme on load
if (localStorage.getItem('theme') === 'dark') {
    document.documentElement.classList.add('dark');
}

function toggleTheme() {
    const html = document.documentElement;
    const isDark = html.classList.toggle('dark');
    localStorage.setItem('theme', isDark ? 'dark' : 'light');
}