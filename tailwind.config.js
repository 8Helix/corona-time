/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            colors: {
                'dark-100' : 'rgba(1, 4, 20, 1)',
                'dark-60' : 'rgba(128, 129, 137, 1)',
                'dark-20' : 'rgba(230, 230, 231, 1)',
                'dark-10' : 'rgba(246, 246, 247, 1)',
                'dark-4' : 'rgba(246, 246, 247, 1)',
                'brand-secondary' : '#0FBA68',
                'brand-primary' : '#2029F3',
                'brand-tertiary' : '#EAD621',
            },

            opacity: {
                '8': '.08',
            },

            borderWidth: {
                '3': '3px',
            },
        },
    },

    plugins: [],
}
