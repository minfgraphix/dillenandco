/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                'serif': ['serif'],
                'helvetica': ['Helvetica Neue', 'Helvetica', 'Arial', 'sans-serif'],
                'mckinseysans': ['McKinseySans'],
                'bower': ['Bower']
            },
            colors: {
                'mckinsey-blue': '#2251ff',
            }
        },
    },

    plugins: [],
};
