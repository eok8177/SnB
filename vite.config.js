import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { viteStaticCopy } from 'vite-plugin-static-copy'

export default defineConfig({
    build: {
        rollupOptions: {
            output: {
              entryFileNames: `[name].js`,
              chunkFileNames: `[name].js`,
            assetFileNames: (assetInfo) => {
                let extType = assetInfo.name.split('.').at(1);
                if (/png|jpe?g|svg|gif|tiff|bmp|ico/i.test(extType)) {
                  extType = 'img/';
                } else if (/woff|woff2|ttf/.test(extType)) {
                    extType = "fonts/";
                } else {
                    extType = "";
                }
                return `${extType}[name][extname]`;
              },
            }
        },
    },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/front.scss',
                'resources/js/front.js',
            ],
            refresh: true,
            publicPath: "/public/",
        }),
        viteStaticCopy({
            targets: [
              {
                src: 'resources/img/*',
                dest: '../img'
              }
            ]
        }),
    ],
});
