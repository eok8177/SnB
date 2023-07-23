import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
// import vue from '@vitejs/plugin-vue';
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
        emptyOutDir: false,
    },
    plugins: [
        laravel({
            input: [
                // 'resources/css/front.scss',
                // 'resources/js/front.js',

                'resources/css/admin.scss',
                'resources/js/admin.js',

            ],
            // refresh: true,
            publicPath: "/public/",
        }),
        // vue({
        //     template: {
        //         transformAssetUrls: {
        //             base: null,
        //             includeAbsolute: false,
        //         },
        //     },
        // }),
        viteStaticCopy({
            targets: [
              {
                src: 'resources/img/*',
                dest: '../img'
              }
            ]
        }),
    ],
    // resolve: {
    //     // alias: {
    //     //     vue: 'vue/dist/vue.esm-bundler.js',
    //     // },
    //     alias: {
    //         '@': 'resources/css/'
    //     },
    //     extensions: [
    //         '.js',
    //         '.json',
    //         '.jsx',
    //         '.mjs',
    //         '.ts',
    //         '.tsx',
    //         '.vue',
    //     ],
    // },
});
