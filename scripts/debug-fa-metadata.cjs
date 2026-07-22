const fs = require("fs");
const path = require("path");

const file = path.resolve(
    __dirname,
    "../node_modules/@fortawesome/fontawesome-free/metadata/icon-families.json",
);

const data = JSON.parse(fs.readFileSync(file, "utf8"));

console.log("TYPE:", typeof data);
console.log("TOP LEVEL KEYS:", Object.keys(data).slice(0, 10));

const firstKey = Object.keys(data)[0];
console.log("FIRST KEY:", firstKey);
console.log("FIRST VALUE TYPE:", typeof data[firstKey]);

console.log(
    "FIRST VALUE KEYS:",
    typeof data[firstKey] === "object"
        ? Object.keys(data[firstKey]).slice(0, 10)
        : data[firstKey],
);
