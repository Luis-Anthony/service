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
                'gra' : '#6e6e73',
            },
            backgroundColor:{
                'org': '#f56300',
                'drk': '#1d1d1f',
                'blu': '#06c',
                'body': '#fbfbfd',
                'gry' : '#f5f5f7',
                'blu2' :'#0071e3',
                'whi' : '#f2f2f2',
            },
        },
    },
    plugins: [],
}

