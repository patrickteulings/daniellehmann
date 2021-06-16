import scss from "rollup-plugin-scss";
import { nodeResolve } from "@rollup/plugin-node-resolve";

export default {
  input: "./src/js/app.js",
  output: {
    file: "./build/js/app.min.js",
    format: "esm",
  },
  plugins: [
    scss({
      output: "./build/css/app.css",
      failOnError: true,
      watch: "./src/styles",
    }),
    nodeResolve(),
  ],
  watch: true,
};
