const defaultTheme = require("tailwindcss/defaultTheme");
const colors = require("tailwindcss/colors");

module.exports = {
    mode: "jit",
    darkMode: "class",
    content: ["./themes/website/views/**/*.php", "./themes/website/**/*.js", "./themes/website/**/*.vue"],
    theme: {
        colors: {
            transparent: "transparent",
            current: "currentColor",
            black: colors.black,
            blue: colors.blue,
            white: colors.white,
            gray: colors.gray,
            maincolor: colors.teal,
            teal: colors.teal,
            slate: colors.slate,
            stone: colors.stone,
            sky: colors.sky,
            primary: colors.indigo,
            pgray: colors.slate,
            indigo: colors.indigo,
            amber: colors.amber,
            lime: colors.lime,
            rose: colors.rose,
            yellow: colors.yellow,
            orange: colors.orange,
            emerald: colors.emerald, // greenish
            red: colors.rose,
            green: colors.green,
        },
        extend: {
            fontFamily: {
                sans: ["effra", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    variants: {
        extend: {
            animation: ["responsive", "motion-safe", "motion-reduce"],
            opacity: ["disabled"],
        },
    },

    plugins: [require("@tailwindcss/typography"), require("tailwindcss-rtl"), require("@tailwindcss/forms"), require("@tailwindcss/line-clamp")],
};
