/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./public/**/*.{php,js}",
        "./admin/**/*.{php,js}",
        "./pages/**/*.{php,js}",
        "./*.php",
    ],
    theme: {
        extend: {
            colors:{
                'org': '#f56300',
                'drk': '#1d1d1f',
                'blu': '#06c',
            },
            backgroundColor:{
                'org': '#f56300',
                'drk': '#1d1d1f',
                'blu': '#06c',
                'body': '#fbfbfd',
                'gry' : '#f5f5f7'
            },
        },
    },
    plugins: [],
}

