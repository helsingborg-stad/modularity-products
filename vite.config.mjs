import { createViteConfig } from "vite-config-factory";

const entries = {
        'css/modularity-products':               './source/sass/modularity-products.scss',
        'js/modularity-products':                './source/js/modularity-products.js',
};

export default createViteConfig(entries, {
	outDir: "assets/dist",
	manifestFile: "manifest.json",
});
