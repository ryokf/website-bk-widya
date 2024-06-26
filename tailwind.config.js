import flowbite from "flowbite-react/tailwind";

/** @type {import('tailwindcss').Config} */
export const content = [
    "./resources/**/*.blade.php",
    "./resources/**/*.jsx",
    flowbite.content()
];
export const theme = {
    extend: {},
};
export const plugins = [flowbite.plugin(),];


