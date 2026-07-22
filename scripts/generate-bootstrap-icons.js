import fs from "fs";
import path from "path";

const icons = [];

function readIcons(dir) {
    fs.readdirSync(dir, { withFileTypes: true }).forEach((entry) => {
        const fullPath = path.join(dir, entry.name);
        if (entry.isDirectory()) {
            readIcons(fullPath); // rekursif
        } else if (entry.isFile() && entry.name.endsWith(".svg")) {
            icons.push(entry.name.replace(".svg", ""));
        }
    });
}

readIcons("node_modules/bootstrap-icons/icons");

fs.mkdirSync("public/assets/icons", { recursive: true });
fs.writeFileSync(
    "public/assets/icons/bootstrap-icons.json",
    JSON.stringify(icons, null, 2),
);

console.log(`✔ JSON generated (${icons.length} icons)`);
