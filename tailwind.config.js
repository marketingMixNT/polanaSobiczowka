/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php"],
    theme: {
        extend: {
            screens: {
                xs: "390px",
                max: "2200px",
            },
            colors: {
                primary: {
                    400: "#ffffff",
                    600: "#E4E0E1",
                },
                secondary: {

                    200: "#939393",
                    400: "#555555",
                    
                },
                accent: {

                    200: "#D6C0B3",
                    400: "#AB886D",
                    800: "#493628",
                },

                bgPrimary: "#ffffff",
                bgSecondary: {
                    200: "#F2F2F2",
                    400: "#eeebe6",
                    600: " #cbcbcb",
                    800: " #555",
                },
                bgThird: "#eeebe6",

                fontLight: "#ffffff",
                fontDark: "#555555",
                fontBlack:'#000000'
            },
            fontFamily: {
                heading: ["Poppins", "sans-serif"],
                text: ["Poppins", "sans-serif"],
            },
        },
    },
    plugins: [require("@tailwindcss/typography")],
};