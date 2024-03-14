/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                ashgray: "#AEB4A9",
                paledogwood: "#E0C1B3",
                rosybrown: "#D89A9E",
                puce: "#C37D92",
                rosetaupe: "#846267",
            },
        },
    },
    plugins: [],
};
