/** @type {import('tailwindcss').Config} */
export default {
    darkMode: false,
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],
    theme: {
        container: {
            padding: "20px",
            center: true,
        },
        extend: {
            colors: {
                primary: "#6366f1",
            },
        },
    },
    plugins: [],
};