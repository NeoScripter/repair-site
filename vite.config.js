export default {
    root: './',
    base: './',
    build: {
        outDir: 'dist',
        rollupOptions: {
            input: ['./assets/script.js', './assets/style.css'],
            output: {
                entryFileNames: '[name].js',  
                assetFileNames: '[name][extname]', 
              },
        },
        
    },
};
