/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}", "./**/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        primary: {
          "extra-light": "#FF611C",
          light: "#FF9445",
          base: "#FE5A14",
          dark: "#D43A10",
        },
        secondary: {},
        dark: {
          1: "#070708",
          2: "#1D1E24",
          3: "#47494D",
          4: "#727376",
          5: "#9C9E9F",
        },
        fumaca: {
          dark: "#D3DDE6",
        },
        neve: {
          base: "#F9FAFC",
          dark: "#EFF2F7",
        },
      },
      fontSize: {
        "3.5xl": "2rem",
        "4.5xl": [
          "2.5rem",
          {
            lineHeight: "2.938rem",
            letterSpacing: "-0.02em",
            fontWeight: "700",
          },
        ],
      },
      container: {
        center: true,
        padding: "1.5rem",
      },
      boxShadow: {
        input: "3px 4px 10px rgba(255, 97, 28, 0.24)",
        "card-1": "5px 4px 12px rgba(7, 7, 8, 0.08)",
        "card-2": "5px 4px 12px rgba(255, 97, 28, 0.15)",
      },
      margin: {
        18: "4.5rem",
      },
    },
  },
  plugins: [],
};
