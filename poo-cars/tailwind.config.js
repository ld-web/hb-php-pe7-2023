/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php", "./node_modules/flowbite/**/*.js"],
  theme: {
    extend: {},
  },
  plugins: [require("@tailwindcss/typography"), require("flowbite/plugin")],
};
