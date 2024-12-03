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
                    100: "#ffffff",
                    200: "#E4E0E1",
                    // 300:"#2f2f2f",
                    400:"#efebe7",
                    500:'#a5a5a5',
                    600:"#939393",
                    800:"#555555",
                },
                secondary: {

                   
                    400: "#b69465",
                    600: "#c2a681",
                    
                },
               
              

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