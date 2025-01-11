import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'primary-1': '#111111',
                'primary-text-1': '#bababa',
                'primary-text-2': '#4c4c4c',
                'secondary-text-1': '#80d5ff',
                'secondary-text-2': '#c8f7ff',
                'opacity-1' : 'rgba(0, 0, 0, .7)',
                'opacity-2' : 'rgb(17, 17, 17, .5)',
            },
            backgroundImage: {
                'parallax': 'url("https://i.postimg.cc/vZr9MwvG/1.jpg")',
                'wallpaper': 'url("https://i.postimg.cc/Njk4DHS8/wall1.jpg")',
            },
        },
    },
    plugins: [],
};
