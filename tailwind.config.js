const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Rotobo", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                "dark-purple": "#081A51",
                "light-white": "rgba(255,255,255,0.18)",
            },
            fontSize: {
                xxs: [
                    "0.5rem",
                    {
                        lineHeight: "0.75rem",
                    },
                ],
            },
        },
    },

    plugins: [require("@tailwindcss/forms"), require("daisyui")],

    // daisyUI config (optional)
    daisyui: {
        styled: true,
        themes: true,
        base: true,
        utils: true,
        logs: true,
        rtl: false,
        prefix: "",
        darkTheme: "dark",
        themes: ["light", "dark"],
    },
};
