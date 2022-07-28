const mix = require("laravel-mix");

mix.setPublicPath(`public/themes/website`)
    .js(`${__dirname}/js/app.js`, "js")
    .postCss(`${__dirname}/css/app.css`, "css", [
        require("postcss-import"),
        require("tailwindcss")({
            config: `${__dirname}/tailwind.config.js`,
        }),
        require("autoprefixer"),
    ])
    .copyDirectory("themes/website/fonts", "public/themes/website/fonts")
    .copyDirectory("themes/website/images", "public/themes/website/images");
