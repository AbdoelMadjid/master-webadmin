const fs = require("fs");
const path = require("path");

const cssDir = path.resolve(
    __dirname,
    "../node_modules/@fortawesome/fontawesome-free/css",
);

const outputDir = path.resolve(__dirname, "../public/assets/icons/fontawesome");
fs.mkdirSync(outputDir, { recursive: true });

function extractIcons(file) {
    const css = fs.readFileSync(path.join(cssDir, file), "utf8");

    const icons = new Set();
    const regex = /\.fa-([a-z0-9-]+):before\s*\{/g;

    let match;
    while ((match = regex.exec(css)) !== null) {
        icons.add(match[1]);
    }

    return [...icons].sort();
}

// generate
const solid = extractIcons("solid.css");
const regular = extractIcons("regular.css");
const brands = extractIcons("brands.css");

// save
fs.writeFileSync(
    path.join(outputDir, "solid.json"),
    JSON.stringify(solid, null, 2),
);
fs.writeFileSync(
    path.join(outputDir, "regular.json"),
    JSON.stringify(regular, null, 2),
);
fs.writeFileSync(
    path.join(outputDir, "brands.json"),
    JSON.stringify(brands, null, 2),
);

console.log("✔ Font Awesome icons generated from CSS");
console.log("✔ Solid  :", solid.length);
console.log("✔ Regular:", regular.length);
console.log("✔ Brands :", brands.length);
